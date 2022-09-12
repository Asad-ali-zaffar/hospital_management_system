<?php

namespace App\Http\Controllers;

use App\Models\MDCNes;
use Illuminate\Http\Request;

class MDCNesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url=url('mdcn');
        return view('MDCN')->with(compact('url'));
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
            'mdcn_name'=>'required',
            'mdcn_SALE'=>'required',
            'mdcn_SINGLE_ITEM_ADD'=>'required',
            'mdcn_mg_g'=>'required',
            'mdcn_type'=>'required',
        ]);
        $MDCNes=new MDCNes;
        $MDCNes->mdcn_name=$request->mdcn_name;
        $MDCNes->mdcn_type=$request->mdcn_type;
        $MDCNes->mdcn_SALE=$request->mdcn_SALE;
        $MDCNes->mdcn_SINGLE_ITEM_ADD=$request->mdcn_SINGLE_ITEM_ADD;
        $MDCNes->mdcn_mg_g=$request->mdcn_mg_g;
        $MDCNes->save();
         return redirect('mdcn/manage')->with('success','MDCN has been successfuly inserted')  ;//"mdcn_name":"lsjd","mdcn_SALE":"3283","mdcn_SINGLE_ITEM_ADD":"38","mdcn_mg\/g":"38","mdcn_type":"syrup"
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MDCNes  $mDCNes
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $madicenes=MDCNes::paginate();
        $total=count($madicenes);
        $title="MDCN";
        return view('MDCN-view')->with(compact('madicenes','total','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MDCNes  $mDCNes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mDCNes=MDCNes::where('mdcn_id',$id)->get();
        $url=url('mdcn/update').'/'.$id;
        return view('MDCN-update')->with(compact('mDCNes','url'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MDCNes  $mDCNes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'mdcn_name'=>'required',
            'mdcn_SALE'=>'required',
            'mdcn_SINGLE_ITEM_ADD'=>'required',
            'mdcn_mg_g'=>'required',
            'mdcn_type'=>'required',
        ]);
        MDCNes::where('mdcn_id',$id)->update([
            'mdcn_name'=>$request->mdcn_name,
            'mdcn_type'=>$request->mdcn_type,
            'mdcn_SALE'=>$request->mdcn_SALE,
            'mdcn_SINGLE_ITEM_ADD'=>$request->mdcn_SINGLE_ITEM_ADD,
            'mdcn_mg_g'=>$request->mdcn_mg_g
        ]);
        return redirect('mdcn/manage')->with('success','MDCN has been successfuly updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MDCNes  $mDCNes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MDCNes::where('mdcn_id',$id)->delete();
        return redirect()->back()->with('success','MDCN has been successfuly Deleted');
    }
}
