<?php

namespace App\Http\Controllers;

use App\Models\Roomes;
use Illuminate\Http\Request;

class RoomesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url=url('Roomes');
        return view('Add_room')->with(compact('url'));
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
        'room_name'=>'required',
        'room_type'=>'required',
        'room_Price'=>'required',
        ]);
        $Roomes=new Roomes;
        $Roomes->room_name=$request->room_name;
        $Roomes->room_type=$request->room_type;
        $Roomes->room_Price=$request->room_Price;
        $Roomes->save();
        return redirect('Roomes/manage')->with('success','Record has been store successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roomes  $roomes
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $roomes=Roomes::paginate();
        $total=count($roomes);
        $title="Roomes";
        return view('Roomes_manage')->with(compact('roomes','total','title'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roomes  $roomes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roomes=Roomes::where('room_id',$id)->get();
        $url=url('Roomes/update').'/'.$id;
        return view('Edit_room')->with(compact('url','roomes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Roomes  $roomes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Roomes::where('room_id',$id)->update([
            'room_name'=>$request->room_name,
            'room_type'=>$request->room_type,
            'room_Price'=>$request->room_Price
        ]);

        return redirect('Roomes/manage')->with('success','Record has been updated successfuly');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roomes  $roomes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Roomes::where('room_id',$id)->delete();
        return redirect()->back()->with('success','Record has been updated successfuly');
    }
}
