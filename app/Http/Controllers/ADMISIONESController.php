<?php

namespace App\Http\Controllers;

use App\Models\{ADMISIONES, Doctores, PatReferedBy, Labes, madicenes, Roomes,procedure};
use Illuminate\Http\Request;

class ADMISIONESController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $doctor = Doctores::all();
        $PatReferedBy = PatReferedBy::all();
        $Labes = Labes::all();
        $madicenes = madicenes::all();
        $Roomes = Roomes::all();
        $procedure=procedure::all();
        $url = url('ADMISIONES');
        return view('add_admintion')->with(compact('url', 'procedure','doctor', 'PatReferedBy', 'Labes', 'madicenes', 'Roomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admistion = ADMISIONES::Latest('admision_id')->first();
        return view('admistion_bill_print')->with(compact('admistion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
        $request->validate([
            'Patient_Name' => 'required',
            'Son_of_Do_of' => 'required',
            'gender' => 'required',
            'pat_mobile_no' => 'required',
            'cnic_pat' => 'required',
            'husband_name' => 'required',
            'husband_mobile_no' => 'required',
            'husband_cnic' => 'required',
            'date' => 'required',
            'time' => 'required',
            'mr_no' => 'required',
            'visit_no' => 'required',
            'IN_OUT' => 'required',
            'DISCHARGE_DATE' => 'required',
            'CASE_TYPE' => 'required',
            'lb_Test_name' => 'required',
            'dr_fee' => 'required',
            'Type_Department' => 'required',
            'PAT_REFERED_BY' => 'required',
            'PRIVATE_SEHAT_CARD' => 'required',
            'ROOM_TYPE' => 'required',
            'ROOM_CHARGES' => 'required',
            'OPD_INCLUDE' => 'required',
            'procedure' => 'required',
            'UPS_charges' => 'required',
            'total' => 'required',
        ]);
        $ADMISIONES = new ADMISIONES;
        $ADMISIONES->Patient_Name = $request->Patient_Name;
        $ADMISIONES->Son_of_Do_of = $request->Son_of_Do_of;
        $ADMISIONES->gender = $request->gender;
        $ADMISIONES->mr_no = $request->mr_no;
        $ADMISIONES->visit_no = $request->visit_no;
        $ADMISIONES->dr_name = $request->lb_Test_name;
        $ADMISIONES->dr_fee = $request->dr_fee;
        $ADMISIONES->date = $request->date;
        $ADMISIONES->time = $request->time;
        $ADMISIONES->husband_name = $request->husband_name;
        $ADMISIONES->husband_mobile_no = $request->husband_mobile_no;
        $ADMISIONES->pat_mobile_no = $request->pat_mobile_no;
        $ADMISIONES->cnic_pat = $request->cnic_pat;
        $ADMISIONES->husband_cnic = $request->husband_cnic;
        $ADMISIONES->CASE_TYPE = $request->CASE_TYPE;
        $ADMISIONES->Type_Department = $request->Type_Department;
        $ADMISIONES->lab_id = implode(',', $request->business);
        $ADMISIONES->madi_id = implode(',', $request->mdcn);
        $ADMISIONES->IN_OUT = $request->IN_OUT;
        $ADMISIONES->DISCHARGE_DATE = $request->DISCHARGE_DATE;
        $ADMISIONES->PAT_REFERED_BY = $request->PAT_REFERED_BY;
        $ADMISIONES->PRIVATE_SEHAT_CARD = $request->PRIVATE_SEHAT_CARD;
        $ADMISIONES->ROOM_TYPE = $request->ROOM_TYPE;
        $ADMISIONES->ROOM_CHARGES = $request->ROOM_CHARGES;
        $ADMISIONES->OPD_INCLUDE = $request->OPD_INCLUDE;
        $ADMISIONES->procedure = $request->procedure;
        $ADMISIONES->UPS_charges = $request->UPS_charges;
        $ADMISIONES->Lab_Quantity = implode(',', $request->Lab_Quantity);
        $ADMISIONES->Lab_Price = implode(',', $request->Lab_Price);
        $ADMISIONES->Labsum = $request->Labsum;
        $ADMISIONES->mdcn_Quantity = implode(',', $request->mdcn_Quantity);
        $ADMISIONES->MDCN_Price = implode(',', $request->MDCN_Price);
        $ADMISIONES->Mdcnammount = $request->Mdcnammount;
        $ADMISIONES->total = $request->total;
        $ADMISIONES->save();
        return redirect('/ADMISIONES-Bill_print');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ADMISIONES  $aDMISIONES
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = ADMISIONES::paginate();
        $total = count($data);
        $title = "Admission";
        return view('admission_manage')->with(compact('data', 'total', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ADMISIONES  $aDMISIONES
     * @return \Illuminate\Http\Response
     */
    public function print($id){

       $admistion = ADMISIONES::where('admision_id', $id)->first();
        return view('print_admission')->with(compact('admistion'));

    }
    public function edit($id)
    {
        $data = ADMISIONES::where('admision_id', $id)->get();
        $doctor = Doctores::all();
        $PatReferedBy = PatReferedBy::all();
        $Labes = Labes::all();
        $madicenes = madicenes::all();
        $Roomes = Roomes::all();
        $procedure=procedure::all();
        $url = url('ADMISIONES/update') . '/' . $id;
        return view('edit_admission')->with(compact('data','procedure', 'url', 'doctor', 'PatReferedBy', 'Labes', 'madicenes', 'Roomes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ADMISIONES  $aDMISIONES
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        ADMISIONES::where('admision_id', $id)->update([
            'Patient_Name' => $request->Patient_Name,
            'Son_of_Do_of' => $request->Son_of_Do_of,
            'gender' => $request->gender,
            'mr_no' => $request->mr_no,
            'dr_name' => $request->lb_Test_name,
            'dr_fee' => $request->dr_fee,
            'date' => $request->date,
            'time' => $request->time,
            'husband_name' => $request->husband_name,
            'husband_mobile_no' => $request->husband_mobile_no,
            'pat_mobile_no' => $request->pat_mobile_no,
            'cnic_pat' => $request->cnic_pat,
            'husband_cnic' => $request->husband_cnic,
            'CASE_TYPE' => $request->CASE_TYPE,
            'lab_id' => implode(',', $request->business),
            'madi_id' => implode(',', $request->mdcn),
            'IN_OUT' => $request->IN_OUT,
            'DISCHARGE_DATE' => $request->DISCHARGE_DATE,
            'PAT_REFERED_BY' => $request->PAT_REFERED_BY,
            'PRIVATE_SEHAT_CARD' => $request->PRIVATE_SEHAT_CARD,
            'ROOM_CHARGES' => $request->ROOM_CHARGES,
            'OPD_INCLUDE' => $request->OPD_INCLUDE,
            'procedure' => $request->procedure,
            'UPS_charges' => $request->UPS_charges,
            'Lab_Quantity' => implode(',', $request->Lab_Quantity),
            'Lab_Price' => implode(',', $request->Lab_Price),
            'Labsum' => $request->Labsum,
            'mdcn_Quantity' => implode(',', $request->mdcn_Quantity),
            'MDCN_Price' => implode(',', $request->MDCN_Price),
            'Mdcnammount' => $request->Mdcnammount,
            'total' => $request->total,
        ]);
        return redirect('ADMISIONES/manage')->with('success', 'Record has been updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ADMISIONES  $aDMISIONES
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ADMISIONES::where('admision_id', $id)->delete();
        return redirect()->back()->with('success', 'Record has been deleted successfuly');
    }
}
