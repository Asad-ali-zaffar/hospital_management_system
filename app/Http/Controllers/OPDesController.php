<?php

namespace App\Http\Controllers;

use App\Models\{OPDes,Doctores,PatReferedBy,Labes,madicenes,Roomes};
use Illuminate\Http\Request;

class OPDesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor=Doctores::all();
        $Labes=Labes::all();
        $madicenes=madicenes::all();
        $url=url('OPD');
        return view('add_OPD')->with(compact('doctor','Labes','madicenes','url'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admistion=OPDes::Latest('opd_id')->first();
        return view('OPD_bill')->with(compact('admistion'));
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
            'Patient_Name'=>'required',
            'Son_of_Do_of'=>'required',
            'gender'=>'required',
            'pat_mobile_no'=>'required',
            'cnic_pat'=>'required',
            'husband_name'=>'required',
            'husband_mobile_no'=>'required',
            'date'=>'required',
            'time'=>'required',
            'mr_no'=>'required|integer|min:10',
            'visit_no'=>'required|integer|min:10',
            'dr_name'=>'required',
            'dr_fee'=>'required',
            'Type_Department'=>'required'
        ]);
        // return $request;
        $opd=new OPDes;
        $opd->Patient_Name=$request->Patient_Name;
        $opd->Son_of_Do_of=$request->Son_of_Do_of;
        $opd->gender=$request->gender;
        $opd->mr_no=$request->mr_no;
        $opd->visit_no=$request->visit_no;
        $opd->dr_name=$request->dr_name;
        $opd->dr_fee=$request->dr_fee;
        $opd->date=$request->date;
        $opd->time=$request->time;
        $opd->husband_name=$request->husband_name;
        $opd->husband_mobile_no=$request->husband_mobile_no;
        $opd->pat_mobile_no=$request->pat_mobile_no;
        $opd->cnic_pat=$request->cnic_pat;
        $opd->Type_Department=$request->Type_Department;
        $opd->Ultrasound=$request->Ultrasound;
        $opd->Ultrasound_price=$request->Ultrasound_price;
        $opd->lab_id=implode(',',$request->business);;
        $opd->Lab_Quantity=implode(',',$request->Lab_Quantity);
        $opd->Lab_Price=implode(',',$request->Lab_Price);
        $opd->Labsum=$request->Labsum;
        $opd->mdcn_id=implode(',',$request->mdcn);
        $opd->mdcn_Quantity=implode(',',$request->mdcn_Quantity);
        $opd->MDCN_Price=implode(',',$request->MDCN_Price);
        $opd->Mdcnammount=$request->Mdcnammount;
        $opd->discount=$request->discount;
        $opd->total=$request->total;
        $opd->save();
        return redirect('OPD_Bill_print');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OPDes  $oPDes
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=OPDes::paginate();
        $total=count($data);
        $title="OPD";
        return view('OPD_manage')->with(compact('title','total','data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OPDes  $oPDes
     * @return \Illuminate\Http\Response
     */
    public function print($id){
       $admistion=OPDes::where('opd_id',$id)->first();
        return view('print_OPD')->with(compact('admistion'));

    }
    public function edit($id)
    {
        $data=OPDes::where('opd_id',$id)->get();
        $url=url('OPD/update')."/".$id;
        $doctor=Doctores::all();
        $Labes=Labes::all();
        $madicenes=madicenes::all();
        return view('edit_OPD')->with(compact('data','url','doctor','Labes','madicenes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OPDes  $oPDes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        OPDes::where('opd_id',$id)->update([
            'Patient_Name'=>$request->Patient_Name,
            'Son_of_Do_of'=>$request->Son_of_Do_of,
            'gender'=>$request->gender,
            'mr_no'=>$request->mr_no,
            'dr_name'=>$request->dr_name,
            'dr_fee'=>$request->dr_fee,
            'date'=>$request->date,
            'time'=>$request->time,
            'husband_name'=>$request->husband_name,
            'husband_mobile_no'=>$request->husband_mobile_no,
            'pat_mobile_no'=>$request->pat_mobile_no,
            'cnic_pat'=>$request->cnic_pat,
            'lab_id'=>implode(',',$request->business),
            'Lab_Quantity'=>implode(',',$request->Lab_Quantity),
            'Lab_Price'=>implode(',',$request->Lab_Price),
            'Labsum'=>$request->Labsum,
            'mdcn_id'=>implode(',',$request->mdcn),
            'mdcn_Quantity'=>implode(',',$request->mdcn_Quantity),
            'MDCN_Price'=>implode(',',$request->MDCN_Price),
            'Mdcnammount'=>$request->Mdcnammount,
            'discount'=>$request->discount,
            'total'=>$request->total
        ]);
        return redirect('OPD/manage')->with('success','Record has been updated successfuly');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OPDes  $oPDes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OPDes::where('opd_id',$id)->delete();
        return redirect()->back()->with('success','Record has been deleted successfuly');
    }
}
