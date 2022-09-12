<?php

namespace App\Http\Controllers;

use App\Models\Lab_list;
use Illuminate\Http\Request;
use App\Models\Labes;

class LabListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url=url('LabList');
        $Labes=Labes::all();
        return view('LabList')->with(compact('url','Labes'));
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
            'lb_Test_name'=>'required',
            'lb_test_price'=>'required',
            'lab_no'=>'required',
            'lb_date'=>'required|date',
            'd_t_blood_sample_colecte'=>'required|before:d_t_reporting_of_test_results',
            'd_t_reporting_of_test_results'=>'required|after:d_t_blood_sample_colecte'

         ]);
        //  return $request;
        $Lab_list=new Lab_list;
        $Lab_list->lb_phone_number=$request->lab_no;
        $Lab_list->lb_test_price=$request->lb_test_price;
        $Lab_list->lab_no=$request->lb_Test_name;
        $Lab_list->lb_date=$request->lb_date;
        $Lab_list->d_t_blood_sample_colecte=$request->d_t_blood_sample_colecte;
        $Lab_list->d_t_reporting_of_test_results=$request->d_t_reporting_of_test_results;
        $Lab_list->save();
        return redirect('LabList/manage')->with('success','Record has been store successfuly');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lab_list  $lab_list
     * @return \Illuminate\Http\Response
     */
    public function show(Lab_list $lab_list)
    {
        $lab_list=Lab_list::paginate();
        $total=count($lab_list);
        $title="Lab List";
        return view('lab_list_manage')->with(compact('lab_list','title','total'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lab_list  $lab_list
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $Lab_list =Lab_list::where('lb_id',$id)->get();
        $url=url('LabList/update').'/'.$id;
        $Labes=Labes::all();
        return view('lab_list_edit')->with(compact('Labes','Lab_list','url'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lab_list  $lab_list
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
        Lab_list::where('lb_id',$id)->update([
            'lb_phone_number'=>$request->lab_no,
            'lb_test_price'=>$request->lb_test_price,
            'lab_no'=>$request->lb_Test_name,
            'lb_date'=>$request->lb_date,
            'd_t_blood_sample_colecte'=>$request->d_t_blood_sample_colecte,
            'd_t_reporting_of_test_results'=>$request->d_t_reporting_of_test_results
        ]);

        return redirect('LabList/manage')->with('success','Record has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lab_list  $lab_list
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lab_list::where('lb_id',$id)->delete();
        return redirect()->back()->with('success','Record has been Deleted successfully!');
    }
}
