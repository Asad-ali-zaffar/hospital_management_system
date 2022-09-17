<?php

namespace App\Http\Controllers;

use App\Models\Madicenes;
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
        return view('add_Madicenes')->with(compact('url'));
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
        $Madicenes=new Madicenes;
        $Madicenes->madi_name=$request->input('madi_name');
        $Madicenes->madi_type=$request->input('madi_type');
        $Madicenes->madi_priceP=$request->input('madi_priceP');
        $Madicenes->madi_priceS=$request->input('madi_priceS');
        $Madicenes->save();
        return redirect('Madicenes/show')->with('success','Record has been registered successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Madicenes  $Madicenes
     * @return \Illuminate\Http\Response
     */
    public function show(Madicenes $Madicenes)
    {
        $Madicenes=Madicenes::paginate(100);
        $total=count($Madicenes);
        $title="All Madicen";
        return view('Madicenes_manage')->with(compact('Madicenes','total','title'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Madicenes  $Madicenes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Madicenes=Madicenes::where('madi_id',$id)->get();
        $url=url('Madicenes').'/'.$id;
        return view('update_Madicen')->with(compact('Madicenes','url'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Madicenes  $Madicenes
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

        Madicenes::where('madi_id',$id)->update([
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
     * @param  \App\Models\Madicenes  $Madicenes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Madicenes::where('madi_id',$id)->delete();
        return redirect('Madicenes/show')->with('success','Record has been successfully deleted');
    }
}
