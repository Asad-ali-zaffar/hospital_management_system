<?php

namespace App\Http\Controllers;

use App\Models\madicenes;
use Illuminate\Http\Request;

class MadicenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url=url('Madicenes');
        return view('add_madicenes')->with(compact('url'));
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
        // return $request;
         $request->validate([
            'madi_name'=>'required',
            'madi_priceP'=>'required',
            'madi_priceS'=>'required',
            'madi_type'=>'required'

        ]);
        $madicenes=new madicenes;
        $madicenes->madi_name=$request->input('madi_name');
        $madicenes->madi_type=$request->input('madi_type');
        $madicenes->madi_priceP=$request->input('madi_priceP');
        $madicenes->madi_priceS=$request->input('madi_priceS');
        $madicenes->save();
        return redirect('Madicenes/show')->with('success','Record has been registered successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\madicenes  $madicenes
     * @return \Illuminate\Http\Response
     */
    public function show(madicenes $madicenes)
    {
        $madicenes=madicenes::paginate(100);
        $total=count($madicenes);
        $title="All Medicine";
        return view('madicenes_manage')->with(compact('madicenes','total','title'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\madicenes  $madicenes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $madicenes=madicenes::where('madi_id',$id)->get();
        $url=url('Madicenes').'/'.$id;
        return view('update_madicen')->with(compact('madicenes','url'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\madicenes  $madicenes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
         $request->validate([
            'madi_name'=>'required',
            'madi_priceP'=>'required',
            'madi_priceS'=>'required',
            'madi_type'=>'required',
        ]);

        madicenes::where('madi_id',$id)->update([
            'madi_name'=>$request->input('madi_name'),
            'madi_type'=>$request->input('madi_type'),
            'madi_priceP'=>$request->input('madi_priceP'),
            'madi_priceS'=>$request->input('madi_priceS'),
        ]);
       return redirect('Madicenes/show')->with('success','Record has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\madicenes  $madicenes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        madicenes::where('madi_id',$id)->delete();
        return redirect('Madicenes/show')->with('success','Record has been successfully deleted');
    }
}
