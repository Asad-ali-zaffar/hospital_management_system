<?php

namespace App\Http\Controllers;

use App\Models\Doctores;
use Illuminate\Http\Request;

class DoctoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url=url('Doctores');
        return view('add_doctore')->with(compact('url'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id=$request->dr_id;
        $data=Doctores::where('doctor_id',$id)->first();
        $price = $data->fee_on_PRIVATE;
        return response()->json(compact('price'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'name'=>'required',
            'fee_on_PRIVATE'=>'required',
            'fee_on_SEHAT_CARD'=>'required',
        ]);
        $Doctore=new Doctores;
        $Doctore->name=$request->name;
        $Doctore->fee_on_PRIVATE=$request->fee_on_PRIVATE;
        $Doctore->fee_on_SEHAT_CARD=$request->fee_on_SEHAT_CARD;
        $Doctore->save();
        return redirect('Doctores/manage')->with('success','Record has been store successfuly');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $doctores=Doctores::paginate();
        $total=count($doctores);
        $title="Doctores";
        return view('doctores_manage')->with(compact('doctores','total','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctores=Doctores::where('doctor_id',$id)->get();
        $url=url('Doctores/update').'/'.$id;
        return view('edit_doctor')->with(compact('doctores','url'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Doctores::where('doctor_id',$id)->update([
        'name'=>$request->name,
        'fee_on_PRIVATE'=>$request->fee_on_PRIVATE,
        'fee_on_SEHAT_CARD'=>$request->fee_on_SEHAT_CARD
        ]);
        return redirect('Doctores/manage')->with('success','Record has been updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctores::where('doctor_id',$id)->delete();
        return redirect()->back()->with('success','Record has been deleted successfuly');
    }
}
