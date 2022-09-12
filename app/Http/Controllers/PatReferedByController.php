<?php

namespace App\Http\Controllers;

use App\Models\PatReferedBy;
use Illuminate\Http\Request;

class PatReferedByController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = url('PatRefered');
        return view('add_patby')->with(compact('url'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required',
            'persentage' => 'required'
        ]);
        $data = new PatReferedBy;
        $data->name = $request->name;
        $data->persentage = $request->persentage;
        $data->save();
        return redirect('PatRefered/manage')->with('success', 'Record has been store successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatReferedBy  $patReferedBy
     * @return \Illuminate\Http\Response
     */
    public function show(PatReferedBy $PatReferedBy)
    {
        $roomes=PatReferedBy::paginate();
        $total=count($roomes);
        $title="Roomes";
        return view('patBy_manage')->with(compact('roomes','total','title'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatReferedBy  $patReferedBy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $PatReferedBy=PatReferedBy::where('pat_id',$id)->get();
        $url=url('PatRefered/update').'/'.$id;
        return view('edit_patby')->with(compact('PatReferedBy','url'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PatReferedBy  $patReferedBy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        PatReferedBy::where('pat_id',$id)->update([
            'name' => $request->name,
            'persentage' => $request->persentage,

        ]);
        return redirect('PatRefered/manage')->with('success', 'Record has been updated successfuly');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatReferedBy  $patReferedBy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PatReferedBy::where('pat_id',$id)->delete();
        return redirect()->back()->with('success', 'Record has been deleted successfuly');

    }
}
