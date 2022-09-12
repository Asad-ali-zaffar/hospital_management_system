<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\User;
use Illuminate\Http\Request;
//this link for reset password
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Lab_billes;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->forget('User_Login');
        return view('frount_end.sign-in');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function change_password_store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|same:confirm-password',
            'confirm-password' => 'required',
        ]);
        // return $request;
        $check_token = DB::table('password_resets')->where([
            'email' => $request->email,
            // 'email'=>'admin@admin.com',
            // 'token'=>'zPK6V5NrOzS3sQMjpXEuEGZcyMCHKykRHiBKkQGKprsSZgedmN1FxbOrR1jB'
            'token' => $request->token
        ])->first();
        // return $check_token;
        if (is_null($check_token)) {
            return redirect()->back()->with('fail', 'Invalid Token');
        } else {
            User::where('email', $request->email)->update([
                'password' => md5($request->password)
                // 'admin_password'=>md5($request->password)
            ]);
            DB::table('password_resets')->where([
                'email' => $request->email
            ])->delete();
            return redirect('/')->with('success', 'Your password has been changed! You can login with new password')->with('varifidEmail', $request->email);
        }
    }
    public function change_password(Request $request, $token = null)
    {
        $url = url('/change_password');
        return view('frount_end.new-password')->with(['token' => $token, 'url' => $url, 'email' => $request->email]);
    }
    public function sendLink_chengPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);
        $token = Str::random(60);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),

        ]);
        // return $token;
        $action_link = route('reset.password.form', ['token' => $token, 'email' => $request->email]);
        $body = "we are received a request to reset password for <b>Hospital management system</b> account associated with" . $request->email .
            ". You can reset your password by clicking the link below";
        Mail::send('frount_end.email-forgot', ['action_link' => $action_link, 'body' => $body], function ($massage) use ($request) {
            $massage->from('noreply@example.com', 'Hospital management system');
            $massage->to($request->email, 'HMS')->subject('reset Password');
        });
        return back()->with('success', 'Check your Email Link has been successfuly sended!');
    }
    public function forget(Request $request)
    {
        return view('frount_end.password-reset');
    }
    public function BasiecForm(Request $request)
    {
        return view('BasiecForm');
    }
    public function dataTable(Request $request)
    {
        return view('dataTable');
    }
    public function created(Request $request)
    {
        return view('frount_end.sign-up');
    }
    public function create(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);
        $email = $request['email'];
        $password = md5($request['password']);
        $admin = User::where(['email' => $email, 'password' => $password])->count();
        $admin1 = User::where(['email' => $email, 'password' => $password])->first();
        if ($admin > 0) {
            session()->put(['User_Login' => $email]);
            session()->put(['User_password' => $password]);
            $name=$admin1->name;
            session()->put(['name' => $name]);
            return redirect('dashboard');
        } else {
            return redirect()->back()->with('fail', 'Please enter valid Password');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
       return view('index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
}
