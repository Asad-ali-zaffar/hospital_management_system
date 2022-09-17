<?php

namespace App\Http\Controllers;

use App\Models\Reporting;
use Illuminate\Http\Request;
use App\Models\Lab_billes;
use App\Models\{Labes, Doctores, ADMISIONES, PatReferedBy, OPDes};
use App\Models\WalkingTestMdcn;

class ReportingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = url('reporting');
        return view('Lab_report')->with(compact('url'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $fromdate = $request->fromdate;
        $ToDate = $request->ToDate;
        $Lab_billes = Lab_billes::select('lab_bill_id', 'date_time', 'customer_name', 'business', 'Lab_Quantity', 'Lab_Price', 'creditammount', 'discount', 'Total_Bill', 'usaer_name')
            ->whereDate('date_time', '>=', $fromdate)
            ->whereDate('date_time', '<=', $ToDate)
            ->get();
        $Total_Bill = 0;
        foreach ($Lab_billes as $val) {

            $Total_Bill = $Total_Bill + $val->Total_Bill;
        }
        return response()->json(compact('Total_Bill'));
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
            'from' => 'required',
            'To' => 'required',
        ]);
        $Lab_billes = Lab_billes::select('lab_bill_id', 'date_time', 'customer_name', 'business', 'Lab_Quantity', 'Lab_Price', 'creditammount', 'discount', 'Total_Bill', 'usaer_name')
            ->whereDate('date_time', '>=', $request->from)
            ->whereDate('date_time', '<=', $request->To)
            ->get();
        $Total_Bill = 0;
        $discount_c = 0;
        foreach ($Lab_billes as $val) {

            $Total_Bill = $Total_Bill + $val->Total_Bill;
        }

        if (strpos($request->share, "%")) {
            $discount = str_replace(' ', '%', $request->share);
            $discount_c = ((int)$Total_Bill * (int)$discount) / 100;
            $resultes = $Total_Bill - $discount_c;
            //    return $Total_Bill;
        } else {
            $resultes = $Total_Bill - $request->share;
        }
        return view('Lab_report_print')->with(compact('Lab_billes', 'request', 'discount_c', 'resultes', 'Total_Bill'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reporting  $reporting
     * @return \Illuminate\Http\Response
     */
    public function show(Reporting $reporting)
    {
        $Labes = Labes::all();
        $url = url('test-reporting');
        return view('allLabeTest_report')->with(compact('url', 'Labes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reporting  $reporting
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        // return $request;
        $Total_Bill = 0;
        $fromdate = $request->from;
        $ToDate = $request->To;
        $unitPrice = WalkingTestMdcn::getLabPriceById($request->Lab_id);
      $Lab_billes = Lab_billes::select('lab_bill_id', 'date_time', 'customer_name', 'business', 'Lab_Quantity', 'Lab_Price', 'creditammount', 'discount', 'Total_Bill', 'usaer_name')
            ->whereDate('date_time', '>=', $fromdate)
            ->whereDate('date_time', '<=', $ToDate)
            ->get();
        $Lab = array();
        $business = array();
        $Quantity = array();
        $Price = array();
        $creditammount = array();
        $discount = array();
        $lab_count = array();
        $Total_Bill = array();
        foreach ($Lab_billes as $value) {
            $business = explode(',', $value->business);
            $Lab_Quantity = explode(',', $value->Lab_Quantity);
            $Lab_Price = explode(',', $value->Lab_Price);
            foreach ($business as $key1 => $val) {
                if ($request->Lab_id == $val) {
                    $Lab[] = $business[$key1];
                    $Quantity[] = $Lab_Quantity[$key1];
                    $creditammount[] = $value->creditammount;
                    $discount[] = $value->discount;
                    $lab_count[] = count($Lab_Quantity);
                    $Total_Bill[] = $value->Total_Bill;
                }
            }
        }
        $total_Q = 0;
        $total_p = 0;
        $total_d = 0;
        foreach ($Quantity as $k => $m) {
            $Price[] = $unitPrice * $m;
            $total_Q +=  $Quantity[$k];
            $total_p +=  $Price[$k];
        }
        $disk = array();
        $discou = array();
        $disco = array();
        foreach ($lab_count as $key => $q) {
            if (strpos($discount[$key], "%")) {
                $m = $creditammount[$key] - $Total_Bill[$key];
                $disk[] = $m / $q;
            } else {
                $disk[] =  $discount[$key] / $q;
            }
            $discou[] = $Price[$key] - $disk[$key];
        }
        foreach ($disk as $f => $b) {
            $total_d += $b;
        }
        $Total_Bill = $total_p - $total_d;
        return response()->json(compact('Total_Bill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reporting  $reporting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $request->validate([
            'from'=>'required',
            'To'=>'required',
            'Lab_id'=>'required|integer',
            'share'=>'required'
         ]);
        $fromdate = $request->from;
        $ToDate = $request->To;
        $unitPrice = WalkingTestMdcn::getLabPriceById($request->Lab_id);
        $Lab_billes = Lab_billes::select('lab_bill_id', 'date_time', 'customer_name', 'business', 'Lab_Quantity', 'Lab_Price', 'creditammount', 'discount', 'Total_Bill', 'usaer_name')
            ->whereDate('date_time', '>=', $fromdate)
            ->whereDate('date_time', '<=', $ToDate)
            ->get();
        $Lab = array();
        $business = array();
        $Quantity = array();
        $Price = array();
        $creditammount = array();
        $discount = array();
        $lab_count = array();
        $Total_Bill = array();
        foreach ($Lab_billes as $value) {
            $business = explode(',', $value->business);
            $Lab_Quantity = explode(',', $value->Lab_Quantity);
            foreach ($business as $key1 => $val) {
                if ($request->Lab_id == $val) {
                    $Lab[] = $business[$key1];
                    $Quantity[] = $Lab_Quantity[$key1];
                    $creditammount[] = $value->creditammount;
                    $discount[] = $value->discount;
                    $lab_count[] = count($Lab_Quantity);
                    $Total_Bill[] = $value->Total_Bill;
                }
            }
        }
        // echo "<pre>";
        // print_r($Lab);
        // print_r($Quantity);
        $total_Q = 0;
        $total_p = 0;
        $total_d = 0;
        foreach ($Quantity as $k => $m) {
            $Price[] = $unitPrice * $m;
            $total_Q +=  $Quantity[$k];
            $total_p +=  $Price[$k];
        }
        // print_r($Price);
        // print_r($lab_count);
        // print_r($discount);
        $disk = array();
        $discou = array();
        $disco = array();
        foreach ($lab_count as $key => $q) {
            if (strpos($discount[$key], "%")) {
                $m = $creditammount[$key] - $Total_Bill[$key];
                $disk[] = $m / $q;
            } else {
                $disk[] =  $discount[$key] / $q;
            }
            $discou[] = $Price[$key] - $disk[$key];
        }
        foreach ($disk as $b) {
            $total_d += $b;
        }
        // print_r($creditammount);
        // print_r($Total_Bill);
        // print_r($disk);
        // print_r($discou);
        // echo $total_Q ."\n".$total_p."\n".$total_d;
        $total_b = $total_p - $total_d;
        // echo "\n".$total_b;
        // die;
        $share = $total_b - $request->total;
        return view('allLabTest_report_print')->with(compact('request', 'total_Q', 'total_p', 'total_d', 'total_b', 'share'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reporting  $reporting
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $Doctores = Doctores::all();
        $url = url('Dr-wise-opd');
        return view('Drwiseopd_report')->with(compact('url', 'Doctores'));
    }
    public function Drwiseopd(Request $request)
    {

        $fromdate = $request->from;
        $ToDate = $request->To;
        $ADMISIONES = ADMISIONES::whereDate('date', '>=', $fromdate)
            ->whereDate('date', '<=', $ToDate)
            ->get();
        $Total_Bill = 0;
        foreach ($ADMISIONES as $val) {
            $Total_Bill =$Total_Bill+$val->total;
        }
        // return $Total_Bill;
        return response()->json(compact('Total_Bill'));
    }
    public function DrwiseopdPrint(Request $request)
    {
        // return $request;
        $request->validate([
            'from' => 'required|date',
            'To' => 'required|date',
            'share' => 'required',
        ]);
        $fromdate = $request->from;
        $ToDate = $request->To;
    //  return  $ADMISIONES = ADMISIONES::select('Patient_Name','date','time', 'mr_no', 'visit_no', 'CASE_TYPE', 'Type_Department', 'PAT_REFERED_BY', 'lab_id', 'Lab_Quantity', 'Lab_Price', 'Labsum', 'madi_id', 'mdcn_Quantity', 'MDCN_Price', 'Mdcnammount')
       $ADMISIONES = ADMISIONES::whereDate('date', '>=', $fromdate)
            ->whereDate('date', '<=', $ToDate)
            ->get();
        $Total_Bill = 0;
        foreach ($ADMISIONES as $val) {
            $Total_Bill =$Total_Bill+$val->total;
        }
        // return $Mdcnammount;
        $share = 0;
        if (strpos($request->share, "%")) {
            $share =$Total_Bill- $request->total  ;
        } else {
            $share = $request->share;
        }
        return view('Drwiseopd_report_print')->with(compact('request', 'ADMISIONES', 'share','Total_Bill'));
    }

    public function REFEREDAdmission()
    {
        $PatReferedBy = PatReferedBy::all();
        $url = url('REFERED-admission');
        return view('REFERED-admission_report')->with(compact('url', 'PatReferedBy'));
    }
    public function REFEREDAdmission_report(Request $request)
    {

        $fromdate = $request->from;
        $ToDate = $request->To;
        $ADMISIONES = ADMISIONES::whereDate('date', '>=', $fromdate)
            ->whereDate('date', '<=', $ToDate)
            ->where('PAT_REFERED_BY', $request->dr_id)
            ->get();
        $Total_Bill = 0;
        foreach ($ADMISIONES as $val) {
            $Total_Bill = $Total_Bill+$val->total;
        }
        return response()->json(compact('Total_Bill'));
    }
    public function REFERED_admission(Request $request)
    {
        // return $request;
        $request->validate([
            'from' => 'required',
            'To' => 'required',
            // 'share' => 'required',
        ]);

        $fromdate = $request->from;
        $ToDate = $request->To;
    //   return  $ADMISIONES = ADMISIONES::select('Patient_Name', 'mr_no', 'visit_no', 'CASE_TYPE', 'Type_Department', 'lab_id', 'Lab_Quantity', 'Lab_Price', 'procedure', 'madi_id', 'mdcn_Quantity', 'MDCN_Price', 'Mdcnammount')
        $ADMISIONES = ADMISIONES::whereDate('date', '>=', $fromdate)
            ->whereDate('date', '<=', $ToDate)
            ->where('PAT_REFERED_BY', $request->dr_id)
            ->get();
        $Total_Bill = 0;
        foreach ($ADMISIONES as $val) {
            $Total_Bill = $Total_Bill+$val->total;
        }
        // $share = 0;
        // if (strpos($request->share, "%")) {
        //     $share = $Total_Bill - $request->total;
        // } else {
        //     $share = $request->share;
        // }
        return view('REFERED_report_print')->with(compact('request', 'ADMISIONES', ));
    }


    public function MdcnByDr()
    {
        $Doctores = Doctores::all();
        $url = url('Mdcn-by-dr-refered');
        return view('MdcnByDrRefered_OPD_and_admission')->with(compact('Doctores', 'url'));
    }
    public function MdcnByDr_report(Request $request)
    {
        $fromdate = $request->from;
        $ToDate = $request->To;
        $ADMISIONES = ADMISIONES::select('Patient_Name', 'dr_name', 'mr_no', 'visit_no', 'CASE_TYPE', 'Type_Department', 'lab_id', 'Lab_Quantity', 'Lab_Price', 'Labsum', 'madi_id', 'mdcn_Quantity', 'MDCN_Price', 'Mdcnammount', 'dcnammount', 'total')
            ->whereDate('date', '>=', $fromdate)
            ->whereDate('date', '<=', $ToDate)
            ->where('dr_name', $request->dr_id)
            ->get();
        //5652 40983
        $opd = OPDes::select('Patient_Name', 'mr_no', 'visit_no', 'Type_Department', 'lab_id', 'Lab_Quantity', 'Lab_Price', 'Labsum', 'mdcn_id', 'mdcn_Quantity', 'MDCN_Price', 'Mdcnammount', 'discount', 'total')
            ->whereDate('date', '>=', $fromdate)
            ->whereDate('date', '<=', $ToDate)
            ->where('dr_name', $request->dr_id)
            ->get();
        $Total_Bill = 0;
        foreach ($opd as $val) {
            $Total_Bill += $val->Labsum + $val->Mdcnammount;
        }
        foreach ($ADMISIONES as $val) {
            $Total_Bill += $val->Labsum + $val->Mdcnammount;
        }

        return response()->json(compact('Total_Bill'));
    }

    public function MdcnByDr_print(Request $request)
    {
        // return $request;
        $request->validate([
            'from' => 'required|date',
            'To' => 'required|date',
            'dr_id' => 'required',
        ]);
        $fromdate = $request->from;
        $ToDate = $request->To;
        $ADMISIONES = ADMISIONES::whereDate('date', '>=', $fromdate)
            ->whereDate('date', '<=', $ToDate)
            ->where('dr_name', $request->dr_id)
            ->get();
        //5652 40983 5652"}]
        $opd = OPDes::whereDate('date', '>=', $fromdate)
            ->whereDate('date', '<=', $ToDate)
            ->where('dr_name', $request->dr_id)
            ->get();
        $Total_Bill = 0;
        $dicount = 0;
        foreach ($opd as $val) {
            $Total_Bill += $val->Labsum + $val->Mdcnammount;
        }
        foreach ($ADMISIONES as $val) {
            $Total_Bill += $val->Labsum + $val->Mdcnammount;
        }
        if (strpos($request->share, "%")) {
            $discount = str_replace(' ', '%', $request->share);
            $discount_c = ((int)$Total_Bill * (int)$discount) / 100;
            $resultes = $Total_Bill - $discount_c;
            //    return $Total_Bill;
        } else {
            $resultes = $Total_Bill - $request->share;
        }
        // return $Total_Bill;
        return view('MdcnbyDrPrint')->with(compact('resultes', 'opd', 'ADMISIONES', 'Total_Bill', 'request'));
    }
    public function OPD_reportByDrRefferd(Request $request){
        $Doctores = Doctores::all();
        $url = url('OPD/reporting');
        return view('OPD_report')->with(compact('Doctores', 'url'));
    }
    public function OPD_reportByDrRefferd_report(Request $request){
        $fromdate = $request->from;
        $ToDate = $request->To;
        $opd = OPDes::whereDate('date', '>=', $fromdate)
            ->whereDate('date', '<=', $ToDate)
            ->where('dr_name', $request->dr_id)
            ->get();
            $Total_Bill = 0;
            $dicount = 0;
            foreach ($opd as $val) {
                $Total_Bill +=  $val->total;
            }


            return response()->json(compact('Total_Bill'));
    }
    public function OPD_reportByDrRefferd_print(Request $request){
        $fromdate = $request->from;
        $ToDate = $request->To;
        $opd = OPDes::whereDate('date', '>=', $fromdate)
            ->whereDate('date', '<=', $ToDate)
            ->where('dr_name', $request->dr_id)
            ->get();
            $Total_Bill = 0;
            $dicount = 0;
            foreach ($opd as $val) {
                $Total_Bill += $val->total;
            }
            // return $Total_Bill;
            if (strpos($request->share, "%")) {
                $discount = str_replace(' ', '%', $request->share);
                $discount_c = ((int)$Total_Bill * (int)$discount) / 100;
                $resultes = $Total_Bill - $discount_c;
                //    return $Total_Bill;
            } else {
                $resultes = $Total_Bill - $request->share;
            }

        return view('OPD_print_report')->with(compact('resultes', 'opd', 'Total_Bill', 'request'));

    }


}
