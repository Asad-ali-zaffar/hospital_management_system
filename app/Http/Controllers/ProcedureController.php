<?php

namespace App\Http\Controllers;

use App\Models\procedure;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TraitUseAdaptation\Precedence;

class ProcedureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $url=url('procedure');
       $titel="Procedure";
       $procedure=new procedure();
       $procedure->procedures_name=null;
       $procedure->share=null;

       return view('add_procedure')->with(compact('url','titel','procedure'));
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
            'name'=>'required',
            'share'=>'required'
        ]);
        $procedure=new procedure();
       $procedure->procedures_name=$request->name;
       $procedure->share=$request->share;
       $procedure->save();
       return redirect('procedure/manage')->with('success','Record has been successfully inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $procedure=Procedure::paginate();
        $total=count($procedure);
        $title="Procedure Management";
        return view('ProcedureManagement')->with(compact('procedure','total','title'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $procedure=procedure::find($id);
        $titel="Edit Procedure";
        $url=url('procedure/update')."/".$id;
        return view('add_procedure')->with(compact('url','procedure','titel'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $procedure=procedure::find($id);
        $procedure->procedures_name=$request->name;
        $procedure->share=$request->share;
        $procedure->save();
        return redirect('procedure/manage')->with('success','Record has been successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      procedure::find($id)->delete();
      return redirect()->back()->with('success','Record has been successfully Deleted');
    }
}
