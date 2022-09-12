<?php

namespace App\Http\Controllers;

use App\Models\WalkingTestMdcn;
use Illuminate\Http\Request;
use App\Models\{Doctores, Labes, madicenes, Lab_billes, Mdcn_billes};


class WalkingTestMdcnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mdcn_Bill_print()
    {
        $lab = Mdcn_billes::Latest('mdcn_bill_id')->first();
        // return $lab;/
        return view('Mdcn_bill_print')->with(compact('lab'));
    }
    public function test_Bill_print()
    {
        $lab = Lab_billes::Latest('lab_bill_id')->first();
        return view('Lab_bill_print')->with(compact('lab'));
    }
    public function mdcn_Bill_submit(Request $request)
    {
        // return $request;
        $request->validate([
            // 'date_time'=>'required| before:'.  date('Y-m-d'),
            'date_time'=>'required',
            'discount'=>'required',
            'mdcn'=>'required',
        ]);
        if (is_null($request->customer_name)) {
            $request->customer_name = "Walking";
        }
        // return $request;
        $date = new Mdcn_billes;
        $date->date_time = $request->date_time;
        $date->customer_name = $request->customer_name;
        $date->mdcn = implode(',', $request->mdcn);
        $date->mdcn_Quantity = implode(',', $request->mdcn_Quantity);
        $date->MDCN_Price = implode(',', $request->MDCN_Price);
        $date->creditammount = $request->creditammount;
        $date->discount = $request->discount;
        $date->Total_Bill = $request->Total_Bill;
        $date->save();
        return redirect('/mdcn-Bill_print');
    }
    public function test_Bill_submit(Request $request)
    {
        // return $request;
        $request->validate([
            'date_time' => 'required',
            'discount' => 'required',
        ]);
        if (is_null($request->customer_name)) {
            $request->customer_name = "Walking";
        }
        // return $request;
        $date = new Lab_billes;
        $date->date_time = $request->date_time;
        $date->customer_name = $request->customer_name;
        $date->business = implode(',', $request->business);
        $date->Lab_Quantity = implode(',', $request->Lab_Quantity);
        $date->Lab_Price = implode(',', $request->Lab_Price);
        $date->creditammount = $request->creditammount;
        $date->discount = $request->discount;
        $date->Total_Bill = $request->Total_Bill;
        $date->save();
        return redirect('/test-Bill_print');

        // return redirect('/test-Bill_print');
    }

    public function mdcn_Bill(Request $request)
    {
        $madi = madicenes::all();
        $url = url('mdcn-Bill/manage');
        return view('mdcn-bill')->with(compact('madi', 'url'));
    }
    public function test_Bill(Request $request)
    {
        $lab = Labes::all();
        $url = url('test-Bill/manage');
        return view('test-mdcn')->with(compact('lab', 'url'));
    }
    public function madcn_dropdown1(Request $request){
        // return $request;
        $id = $request->mdcn_id;
        $lab = madicenes::where('madi_id', $id)->first();
        $price = $lab->madi_priceP;
        return response()->json(compact('price'));

    }
    public function drdropdown(Request $request){
        // return $request;
        $dr = Doctores::where('doctor_id', $request->dr_dropdown)->first();
        $dr_fee=0;
        if ($request->Treatment == 1){
            $dr_fee=$dr->fee_on_PRIVATE;
        }else{
            $dr_fee=$dr->fee_on_SEHAT_CARD;
        }
        return response()->json(compact('dr_fee'));
    }
    public function madcn_dropdown(Request $request)
    {
        // return $request;
        $id = $request->mdcn_id;
        $dr_dropdown = $request->dr_dropdown;
        $lab = madicenes::where('madi_id', $id)->first();
        $dr = Doctores::where('doctor_id', $dr_dropdown)->first();
       $dr_fee=0;
        if ($request->Treatment == 1) {
            $price = $lab->madi_priceP;
            $dr_fee=$dr->fee_on_PRIVATE;
        } else {
            $price = $lab->madi_priceS;
            $dr_fee=$dr->fee_on_SEHAT_CARD;
        }
         $dr_fee;
        return response()->json(compact('price','dr_fee'));
    }
    public function lab_dropdown1(Request $request){
        $id = $request->lab_id;
        $lab = Labes::where('lab_id', $id)->first();
        $price = $lab->Lab_priceP;
        return response()->json(compact('price'));
    }
    public function lab_dropdown(Request $request)
    {
        // return $request;

        $id = $request->lab_id;
        $dr_dropdown = $request->dr_dropdown;
        $lab = Labes::where('lab_id', $id)->first();
        $dr = Doctores::where('doctor_id', $dr_dropdown)->first();
        $dr_fee=0;
        if ($request->Treatment == 1) {
            $price = $lab->Lab_priceP;
            $dr_fee=$dr->fee_on_PRIVATE;
        } else {
            $price = $lab->Lab_priceS;
            $dr_fee=$dr->fee_on_SEHAT_CARD;
        }
        // return $dr_fee;
        return response()->json(compact('price','dr_fee'));
   }
    public function index()
    {
        $url = url('test-mdcn');
        $madi = madicenes::all();
        $lab = Labes::all();
        return view('test-mdcn1')->with(compact('url', 'madi', 'lab'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WalkingTestMdcn  $walkingTestMdcn
     * @return \Illuminate\Http\Response
     */
    public function show(WalkingTestMdcn $walkingTestMdcn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WalkingTestMdcn  $walkingTestMdcn
     * @return \Illuminate\Http\Response
     */
    public function edit(WalkingTestMdcn $walkingTestMdcn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WalkingTestMdcn  $walkingTestMdcn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WalkingTestMdcn $walkingTestMdcn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WalkingTestMdcn  $walkingTestMdcn
     * @return \Illuminate\Http\Response
     */
    public function destroy(WalkingTestMdcn $walkingTestMdcn)
    {
        //
    }
}
