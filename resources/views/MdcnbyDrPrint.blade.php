<!doctype html>
<html lang="en">

<head>
    <title>Print Patient Record</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .page {
            width: 21cm;
            min-height: 29.7cm;
            padding: 2cm;
            margin: 1cm auto;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        @page {
            width: 80mm;
            margin: 0;
        }

        @media print {
            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }

    </style>
</head>

<body>

    <div class="page">
        <div class="page-inner">
            <h3 class="text-center">Subhan Hospital Chiniot</h3>
            <p class="text-center font-weight-bold mb-0">ADDRESS:</p>
            <p class="text-center font-weight-bold mb-0"> Dr
                {{ App\Models\Doctores::getDoctoresById($request->dr_id) }}
                Pharmacy & Labes Report</p>

            <div class="container mt-4">
                <div class="row">
                    <div class="col-6">
                        <p class=" font-weight-bold mb-0">From Date:&nbsp;
                            {{ date('d-y-M', strtotime($request->from)) }}
                        </p>
                    </div>
                    <div class="col-6">
                        <p class=" font-weight-bold mb-0">To Date:&nbsp;
                            {{ date('d-y-M', strtotime($request->To)) }}
                        </p>
                    </div>
                </div>
            </div>
            <legend>Admission</legend>
            <fieldset>
                @foreach ($ADMISIONES as $val)
                    <div class="container ">
                        <div class="row">
                            <div class="col-6">
                                <p class=" font-weight-bold mb-0">Patient Name:&nbsp;
                                    {{ $val->Patient_Name }}
                                </p>
                            </div>
                            <div class="col-6">
                                <p class=" font-weight-bold mb-0">MR No:&nbsp;
                                    {{ $val->mr_no }}
                                </p>
                            </div>
                            <div class="col-6">
                                <p class=" font-weight-bold mb-0">Visit No:&nbsp;
                                    {{ $val->visit_no }}
                                </p>
                            </div>
                            <div class="col-6">
                                <p class=" font-weight-bold mb-0">CASE TYPE:&nbsp;
                                    {{ $val->CASE_TYPE }}
                                </p>
                            </div>
                            <div class="col-6">
                                <p class=" font-weight-bold mb-0">Department:&nbsp;
                                    {{ $val->Type_Department }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row" style="background-color: #b5b5b5;
                        border-radius: 6px;height:35px;">
                            <div class="col-md-3 text-center mt-1">
                                <p style="font-weight: 600; "><b>#</b></p>
                            </div>
                            <div class="col-md-3 text-center mt-1">
                                <p style="font-weight: 600;"><b>Lab Test</b></p>
                            </div>
                            <div class="col-md-3 text-center mt-1">
                                <p style="font-weight: 600;"><b>Quantity</b>
                                </p>
                            </div>
                            <div class="col-md-3 text-center mt-1">
                                <p style="font-weight: 600;"><b>Amount</b>
                                </p>
                            </div>
                        </div>
                        <div class="row">

                            @php
                                $Lab_id = explode(',', $val->lab_id);
                                $Lab_Quantity = explode(',', $val->Lab_Quantity);
                                $Lab_Price = explode(',', $val->Lab_Price);
                            @endphp
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($Lab_id as $key1 => $v)
                                <div class="col-md-3 text-center"
                                    style="font-weight: 600; border: 1px solid;border-radius: 6px">

                                    {{ $i }}
                                </div>
                                <div class="col-md-3 text-center"
                                    style="font-weight: 600; border: 1px solid;border-radius: 6px">
                                    {{ App\Models\WalkingTestMdcn::getLabNameById($v) }}

                                </div>
                                <div class="col-md-3 text-center"
                                    style="font-weight: 600; border: 1px solid;border-radius: 6px">
                                    {{ $Lab_Quantity[$key1] }}

                                </div>
                                <div class="col-md-3 text-center"
                                    style="font-weight: 600; border: 1px solid;border-radius: 6px">
                                    {{ $Lab_Price[$key1] }}
                                </div>
                                @php
                                    $i++;
                                @endphp
                            @endforeach

                            <div class="col-md-11 text-right" style="font-weight: 600;">
                                <br>
                                <b>Total Labes Bill:</b> {{ $val->Labsum }}
                            </div>
                            {{-- <div class="row">
                                <h6 class="col-md-11 text-right"><b>Discount:</b>
                                    @if (strpos($val->dcnammount, '%'))
                                        {{ $val->dcnammount }}
                                    @else
                                        {{ $val->dcnammount }}.00
                                    @endif
                                </h6>
                                <h6 class="col-md-11 text-right"><b>Total Bill:</b> {{ $val->total }}</h6>
                            </div> --}}
                        </div>
                        <br>
                        @php
                            $i++;
                        @endphp
                    </div>
                    <div class="container">
                        <div class="row" style="background-color: #b5b5b5;
                    border-radius: 6px;height:35px;">
                            <div class="col-md-3 text-center mt-1">
                                <p style="font-weight: 600; "><b>#</b></p>
                            </div>
                            <div class="col-md-3 text-center mt-1">
                                <p style="font-weight: 600;"><b>MDCN name</b></p>
                            </div>
                            <div class="col-md-3 text-center mt-1">
                                <p style="font-weight: 600;"><b>Quantity</b>
                                </p>
                            </div>
                            <div class="col-md-3 text-center mt-1">
                                <p style="font-weight: 600;"><b>Amount</b>
                                </p>
                            </div>
                        </div>
                        @php
                            $i = 1;
                        @endphp
                        <div class="row">

                            @php
                                $madi_id = explode(',', $val->madi_id);
                                $mdcn_Quantity = explode(',', $val->mdcn_Quantity);
                                $MDCN_Price = explode(',', $val->MDCN_Price);
                            @endphp
                            @foreach ($madi_id as $key1 => $v)
                                <div class="col-md-3 text-center"
                                    style="font-weight: 600; border: 1px solid;border-radius: 6px">

                                    {{ $i }}
                                </div>
                                <div class="col-md-3 text-center"
                                    style="font-weight: 600; border: 1px solid;border-radius: 6px">
                                    {{ App\Models\madicenes::getLabNameById($v) }}
                                </div>
                                <div class="col-md-3 text-center"
                                    style="font-weight: 600; border: 1px solid;border-radius: 6px">
                                    {{ $mdcn_Quantity[$key1] }}

                                </div>
                                <div class="col-md-3 text-center"
                                    style="font-weight: 600; border: 1px solid;border-radius: 6px">
                                    {{ $MDCN_Price[$key1] }}
                                </div>
                                @php
                                    $i++;
                                @endphp
                            @endforeach

                            <div class="col-md-11 text-right" style="font-weight: 600;">
                                <br>
                                <b>Madison Bill :</b> {{ $val->Mdcnammount }}
                            </div>
                        </div>

                        {{-- <br> --}}
                        {{-- <div class="row">
                            <h6 class="col-md-11 text-right"><b>Share:</b>

                            </h6>
                            @php
                                $sum = $val->Mdcnammount + $val->procedure;
                            @endphp
                            <h6 class="col-md-11 text-right"><b>Total Bill:</b>
                                 {{ $val->Mdcnammount }}
                                </h6>
                        </div> --}}
                        {{-- <h6 class="col-md-11 text-right"><b>Total Amount:</b>
                            {{ $sum }}
                        </h6> --}}



                        {{-- <h6 class="col-md-11 text-right"><b>Dr Share :</b>
                            @if (strpos($request->share, '%'))
                                {{ $request->share }}
                                <br><b>Dr Amount :</b>
                                {{ $share }}.00
                            @else
                                {{ $request->share }}.00
                            @endif
                        </h6> --}}
                    </div>
                @endforeach
            </fieldset>
            <legend>OPD</legend>
            <fieldset>
                @foreach ($opd as $val)
                    <div class="container ">
                        <div class="row">

                            <div class="col-6">
                                <p class=" font-weight-bold mb-0">MR No:&nbsp;
                                    {{ $val->mr_no }}
                                </p>
                            </div>
                            <div class="col-6">
                                <p class=" font-weight-bold mb-0">Visit No:&nbsp;
                                    {{ $val->visit_no }}
                                </p>
                            </div>
                            <div class="col-6">
                                <p class=" font-weight-bold mb-0">Patient Name:&nbsp;
                                    {{ $val->Patient_Name }}
                                </p>
                            </div>
                            {{-- <div class="col-6">
                                <p class=" font-weight-bold mb-0">CASE TYPE:&nbsp;
                                    {{ $val->CASE_TYPE }}
                                </p>
                            </div> --}}
                            <div class="col-6">
                                <p class=" font-weight-bold mb-0">Department:&nbsp;
                                    {{ $val->Type_Department }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row" style="background-color: #b5b5b5;
                        border-radius: 6px;height:35px;">
                            <div class="col-md-3 text-center mt-1">
                                <p style="font-weight: 600; "><b>#</b></p>
                            </div>
                            <div class="col-md-3 text-center mt-1">
                                <p style="font-weight: 600;"><b>Lab Test</b></p>
                            </div>
                            <div class="col-md-3 text-center mt-1">
                                <p style="font-weight: 600;"><b>Quantity</b>
                                </p>
                            </div>
                            <div class="col-md-3 text-center mt-1">
                                <p style="font-weight: 600;"><b>Amount</b>
                                </p>
                            </div>
                        </div>
                        <div class="row">

                            @php
                                $Lab_id = explode(',', $val->lab_id);
                                $Lab_Quantity = explode(',', $val->Lab_Quantity);
                                $Lab_Price = explode(',', $val->Lab_Price);
                            @endphp
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($Lab_id as $key1 => $v)
                                <div class="col-md-3 text-center"
                                    style="font-weight: 600; border: 1px solid;border-radius: 6px">

                                    {{ $i }}
                                </div>
                                <div class="col-md-3 text-center"
                                    style="font-weight: 600; border: 1px solid;border-radius: 6px">
                                    {{ App\Models\WalkingTestMdcn::getLabNameById($v) }}

                                </div>
                                <div class="col-md-3 text-center"
                                    style="font-weight: 600; border: 1px solid;border-radius: 6px">
                                    {{ $Lab_Quantity[$key1] }}

                                </div>
                                <div class="col-md-3 text-center"
                                    style="font-weight: 600; border: 1px solid;border-radius: 6px">
                                    {{ $Lab_Price[$key1] }}
                                </div>
                                @php
                                    $i++;
                                @endphp
                            @endforeach

                            <div class="col-md-11 text-right" style="font-weight: 600;">
                                <br>
                                <b>Total Labes Bill:</b> {{ $val->Labsum }}
                            </div>
                            {{-- <div class="row">
                                <h6 class="col-md-11 text-right"><b>Discount:</b>
                                    @if (strpos($val->dcnammount, '%'))
                                        {{ $val->dcnammount }}
                                    @else
                                        {{ $val->dcnammount }}.00
                                    @endif
                                </h6>
                                <h6 class="col-md-11 text-right"><b>Total Bill:</b> {{ $val->total }}</h6>
                            </div> --}}
                        </div>
                        <br>
                        @php
                            $i++;
                        @endphp
                    </div>
                    <div class="container">
                        <div class="row" style="background-color: #b5b5b5;
                    border-radius: 6px;height:35px;">
                            <div class="col-md-3 text-center mt-1">
                                <p style="font-weight: 600; "><b>#</b></p>
                            </div>
                            <div class="col-md-3 text-center mt-1">
                                <p style="font-weight: 600;"><b>MDCN name</b></p>
                            </div>
                            <div class="col-md-3 text-center mt-1">
                                <p style="font-weight: 600;"><b>Quantity</b>
                                </p>
                            </div>
                            <div class="col-md-3 text-center mt-1">
                                <p style="font-weight: 600;"><b>Amount</b>
                                </p>
                            </div>
                        </div>
                        @php
                            $i = 1;
                        @endphp
                        <div class="row">

                            @php
                                $madi_id = explode(',', $val->mdcn_id);
                                $mdcn_Quantity = explode(',', $val->mdcn_Quantity);
                                $MDCN_Price = explode(',', $val->MDCN_Price);
                            @endphp
                            @foreach ($madi_id as $key1 => $v)
                                <div class="col-md-3 text-center"
                                    style="font-weight: 600; border: 1px solid;border-radius: 6px">

                                    {{ $i }}
                                </div>
                                <div class="col-md-3 text-center"
                                    style="font-weight: 600; border: 1px solid;border-radius: 6px">
                                    {{ App\Models\madicenes::getLabNameById($v) }}
                                </div>
                                <div class="col-md-3 text-center"
                                    style="font-weight: 600; border: 1px solid;border-radius: 6px">
                                    {{ $mdcn_Quantity[$key1] }}

                                </div>
                                <div class="col-md-3 text-center"
                                    style="font-weight: 600; border: 1px solid;border-radius: 6px">
                                    {{ $MDCN_Price[$key1] }}
                                </div>
                                @php
                                    $i++;
                                @endphp
                            @endforeach

                            <div class="col-md-11 text-right" style="font-weight: 600;">
                                <br>
                                <b>Madison Bill :</b> {{ $val->Mdcnammount }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </fieldset>
            <br>
            <div class="row">
                <h6 class="col-md-11 text-right"><b>Share:</b>
                    @if (strpos($request->share, '%'))
                    {{ $request->share }}
                    <br><b>Dr Amount :</b>
                    {{ $resultes }}.00
                @else
                    {{ $request->share }}.00
                @endif
                </h6>
                {{-- @php
                    $sum = $val->Mdcnammount + $val->procedure;
                @endphp --}}
                <h6 class="col-md-11 text-right"><b>Total Bill:</b>
                    {{ $Total_Bill }}
                </h6>
            </div>
            <h6 class="col-md-11 text-right"><b>Total Amount:</b>
                {{ $request->total }}
            </h6>



            {{-- <h6 class="col-md-11 text-right"><b>Dr Share :</b>
                @if (strpos($request->share, '%'))
                    {{ $request->share }}
                    <br><b>Dr Amount :</b>
                    {{ $share }}.00
                @else
                    {{ $request->share }}.00
                @endif
            </h6> --}}

            <br><br>
            <div class="container">
                <div class="row">

                    <div class="col-md-9">
                        <p class="text-center">
                            Developed By Devicon: Muhammad Awais +92 303 0336939
                        </p>
                    </div>
                    <div class="col-md-3 text-center">
                        <p style="text-decoration: overline;font-weight: 600;">
                            User Name
                        </p>
                    </div>
                </div>
            </div>
            {{-- <h6 class="col-md-11 text-right"><b>Total :</b> --}}
            {{-- {{ $request->total }}</h6> --}}

        </div>
        {{-- @endforeach --}}
    </div>

    {{-- <div class="container">
        <div class="row">

            <div class="col-md-9">
                <p class="text-center">
                    Developed By Devicon: Muhammad Awais +92 303 0336939
                </p>
            </div>
            <div class="col-md-3 text-center">
                <p style="text-decoration: overline;font-weight: 600;">
                    User Name
                </p>
            </div>
        </div>
    </div> --}}
    </div>
    </div>
    {{-- @endforeach --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            window.print();
            setTimeout(function() {
                window.location.href = 'Mdcn-by-dr-refered'
            }, 1000);
        });
    </script>
</body>

</html>
{{-- <div class="row">
    <h6 class="col-md-11 text-right"><b>Share:</b>
        @if (strpos($request->share, '%'))
            {{ $request->share }}
        @else
            {{ $request->share }}.00
        @endif
    </h6>
    <h6 class="col-md-11 text-right"><b>Share Amount:</b> {{ $share }} </h6>
    <h6 class="col-md-11 text-right"><b>Total Bill:</b> {{ $val->procedure }}</h6>
</div> --}}
