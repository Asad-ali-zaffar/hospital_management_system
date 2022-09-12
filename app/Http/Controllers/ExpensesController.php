<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $url=url('expenses');
     $titel="Expenses";
     $Expenses=new Expenses;
         $Expenses->name=null;
         $Expenses->amount=null;
         $Expenses->discription=null;
         $Expenses->creditammount="";

     return view('add_Expences')->with(compact('url','Expenses','titel'));
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
            'amount'=>'required',
            'discription'=>'required',
            'creditammount'=>'required',
         ]);
         $Expenses=new Expenses;
         $Expenses->name=implode(', ',$request->name);
         $Expenses->amount=implode(', ',$request->amount);
         $Expenses->discription=implode(', ',$request->discription);
         $Expenses->creditammount=$request->creditammount;
         $Expenses->save();
         return redirect('expenses/manage')->with('success','Record has been inserted successfuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $expenses=Expenses::paginate();
       $total=count($expenses);
        $title="Expence Management";
        return view('Expences-manage')->with(compact('expenses','total','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Expenses=Expenses::find($id);
        $titel="Edit Expense";
        $url=url('expenses/update')."/".$id;
        return view('add_Expences')->with(compact('url','Expenses','titel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $Expenses=Expenses::find($id);
        $Expenses->name=implode(', ',$request->name);
        $Expenses->amount=implode(', ',$request->amount);
        $Expenses->discription=implode(', ',$request->discription);
        $Expenses->creditammount=$request->creditammount;
        $Expenses->update();
        return redirect('expenses/manage')->with('success','Record has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function print(Request $request){

       $data=Expenses::whereDate('created_at','>=' ,$request->from)
       ->whereDate('created_at','<=' ,$request->To)->get();
       return view('Expenses_print')->with(compact('data','request'));
    }
    public function reportTotal(Request $request){
       $date= Expenses::whereDate('created_at','>=' ,$request->fromdate)
        ->whereDate('created_at','<=' ,$request->ToDate)->get();
        $Total_Bill=0;
        foreach($date as $val){
            $Total_Bill+=$val->creditammount;
        }
        return response()->json(compact('Total_Bill'));
    }
    public function report(Expenses $expenses){
        $url=url('expenses/report-print');
        return view('Expenses-report')->with(compact('url'));
    }
    public function destroy(Expenses $expenses,$id)
    {
        Expenses::find($id)->delete();
        return redirect()->back()->with('success','Record has been successfuly deleted');
    }
}
