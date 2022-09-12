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

            <p class="text-center  mb-0 text-uppercase">admission bill</p>
            <h3 class="text-center text-uppercase"><b>Subhan Hospital Chiniot</b></h3>
            <h3 class="text-center text-uppercase">your look is our concern</h3>
            <p class="text-center font-weight-bold mb-0">Jumra Chowk Jhang Road Chiniot</p>
            <p class="text-center font-weight-bold mb-0">Bill No:&nbsp;
                {{ $admistion->admision_id }}
            </p>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-6">
                        <p class=" font-weight-bold mb-0">Date:&nbsp;

                            {{ date('d-M-y', strtotime($admistion->date)) }}
                            {{-- lab_bill_id":22,"date_time":"2022-08-19 19:26:00","customer_name":"Walking","business":"3,4","Lab_Quantity":"03,04","Lab_Price":"1200,56000","creditammount":57200,"discount":"12%","Total_Bill":50336,"usaer_name":null,"created_at":"2022-08-19T14:39:23.000000Z","updated_at":"2022-08-19T14:39:23.000000Z --}}
                        </p>
                    </div>
                    <div class="col-6">
                        <p class=" font-weight-bold mb-0">Time:&nbsp;

                            {{ date(' h:i:s A', strtotime($admistion->date)) }}
                            {{-- lab_bill_id":22,"date_time":"2022-08-19 19:26:00","customer_name":"Walking","business":"3,4","Lab_Quantity":"03,04","Lab_Price":"1200,56000","creditammount":57200,"discount":"12%","Total_Bill":50336,"usaer_name":null,"created_at":"2022-08-19T14:39:23.000000Z","updated_at":"2022-08-19T14:39:23.000000Z --}}
                        </p>
                    </div>
                    <div class="col-6">
                        <p class="font-weight-bold mb-0">Name:&nbsp;
                            <span>{{ $admistion->Patient_Name }}</span>
                        </p>
                    </div>
                    <div class="col-6">
                        <p class="font-weight-bold mb-0">Son of/Daughter of:&nbsp;
                            <span>{{ $admistion->Son_of_Do_of }}</span>
                        </p>
                    </div>
                    <div class="col-6">
                        <p class="font-weight-bold mb-0">Gender:&nbsp;
                            @if ($admistion->gender == 'm')
                                <span>Male</span>
                            @elseif ($admistion->gender == 'f')
                                <span>Female</span>
                            @else
                                <span>Other</span>
                            @endif

                        </p>
                    </div>
                    <div class="col-6">
                        <p class="font-weight-bold mb-0">Patient mobile no:&nbsp;
                            <span>{{ $admistion->pat_mobile_no }}</span>
                        </p>
                    </div>
                    <div class="col-6">
                        <p class="font-weight-bold mb-0">Patient Cnic no:&nbsp;
                            <span>{{ $admistion->cnic_pat }}</span>
                        </p>
                    </div>
                    <div class="col-6">
                        <p class="font-weight-bold mb-0">Husband /Guardian Name:&nbsp;
                            <span>{{ $admistion->husband_name }}</span>
                        </p>
                    </div>
                    <div class="col-6">
                        <p class="font-weight-bold mb-0">Husband /Guardian mobile no:&nbsp;
                            <span>{{ $admistion->husband_mobile_no }}</span>
                        </p>
                    </div>
                    <div class="col-6">
                        <p class="font-weight-bold mb-0">Husband /Guardian Cnic no:&nbsp;
                            <span>{{ $admistion->husband_cnic }}</span>
                        </p>
                    </div>
                    <div class="col-6">
                        <p class="font-weight-bold mb-0">Type Department:&nbsp;
                            <span>{{ $admistion->Type_Department }}</span>
                        </p>
                    </div>
                    <div class="col-6">
                        <p class="font-weight-bold mb-0">Procedure:&nbsp;
                            <span>{{App\Models\procedure::getprocedureById( $admistion->procedure) }}</span>
                        </p>
                    </div>
                    <div class="col-6">
                        <p class="font-weight-bold mb-0">Doctor Name:&nbsp;
                            <span>{{ App\Models\Doctores::getDoctoresById($admistion->dr_name) }}</span>
                        </p>
                    </div>

                </div>
            </div>

            @if ($admistion->mdcn_Quantity != 0)
                <div class="container">
                    <div class="row" style="background-color: #b5b5b5;
                border-radius: 6px;height:35px;">
                        <div class="col-md-1 text-center mt-1">
                            <p style="font-weight: 600; "><b>#</b></p>
                        </div>
                        <div class="col-md-2 text-center mt-1">
                            <p style="font-weight: 600;"><b>Mdcn</b></p>
                        </div>
                        <div class="col-md-3 text-center mt-1">
                            <p style="font-weight: 600;"><b>Unit Price</b>
                            </p>
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
                    <div class="row" style="font-weight: 600; border: 1px solid;">
                        <div class="col-md-1 text-center" style="font-weight: 600;">
                            @php
                                $buss = explode(',', $admistion->madi_id);
                                $m = count($buss);
                            @endphp
                            @for ($i = 1; $i <= $m; $i++)
                                {{ $i }}
                                <br>
                            @endfor
                        </div>
                        <div class="col-md-2 text-center" style="border: 1px solid;">
                            @php
                                $buss = explode(',', $admistion->madi_id);

                            @endphp
                            @foreach ($buss as $val)
                                {{ App\Models\madicenes::getLabNameById($val) }}
                                <br>
                            @endforeach
                        </div>
                        <div class="col-md-3 text-center" style="border: 1px solid;">
                            @php
                                $buss = explode(',', $admistion->madi_id);
                            @endphp
                            @foreach ($buss as $val)
                                {{ App\Models\madicenes::getLabPriceById($val) }}.00
                                <br>
                            @endforeach

                        </div>
                        <div class="col-md-3 text-center" style="border: 1px solid;">
                            @php
                                $buss = explode(',', $admistion->mdcn_Quantity);
                            @endphp
                            @foreach ($buss as $val)
                                @if ($val[0] == '0')
                                    {{ substr($val, 1) }}
                                @else
                                    {{ $val }}
                                @endif
                                <br>
                            @endforeach

                        </div>
                        <div class="col-md-3 text-center" style="border: 1px solid;">
                            @php
                                $buss = explode(',', $admistion->MDCN_Price);
                            @endphp
                            @foreach ($buss as $val)

                                {{ $val }}.00

                                <br>
                            @endforeach

                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <h6 class="col-md-6"><b>Total Item:</b> {{ $m }}</h6>
                        <h6 class="col-md-5 text-right"><b>Total MDCN Bill:</b> {{ $admistion->Mdcnammount }}</h6>
                    </div>
                </div>
                <br><br><br>
            @endif
            @if ($admistion->Lab_Quantity != 0)
                <div class="container">
                    <div class="row" style="background-color: #b5b5b5;border-radius: 6px;height:35px;">
                        <div class="col-md-1 text-center mt-1">
                            <p style="font-weight: 600;"><b>#</b></p>
                        </div>
                        <div class="col-md-2 text-center mt-1">
                            <p style="font-weight: 600;"><b>Lab Test</b></p>
                        </div>
                        <div class="col-md-3 text-center mt-1">
                            <p style="font-weight: 600;"><b>Unit Price</b>
                            </p>
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

                    <div class="row" >
                        <div class="col-md-1 text-center" style="border: 1px solid;">
                            @php
                                $buss = explode(',', $admistion->lab_id);
                                $m = count($buss);
                            @endphp
                            @for ($i = 1; $i <= $m; $i++)
                                {{ $i }}
                                <br>
                            @endfor
                        </div>
                        <div class="col-md-2 text-center" style="border: 1px solid;">
                            @php
                                $buss = explode(',', $admistion->lab_id);

                            @endphp
                            @foreach ($buss as $val)
                                {{ App\Models\WalkingTestMdcn::getLabNameById($val) }}
                                <br>
                            @endforeach

                        </div>
                        <div class="col-md-3 text-center" style="border: 1px solid;">
                            @php
                                $buss = explode(',', $admistion->lab_id);
                            @endphp
                            @foreach ($buss as $val)
                                {{ App\Models\WalkingTestMdcn::getLabPriceById($val) }}.00
                                <br>
                            @endforeach

                        </div>
                        <div class="col-md-3 text-center" style="border: 1px solid;">
                            @php
                                $buss = explode(',', $admistion->Lab_Quantity);
                            @endphp
                            @foreach ($buss as $val)
                                @if ($val[0] == '0')
                                    {{ substr($val, 1) }}
                                @else
                                    {{ $val }}
                                @endif
                                <br>
                            @endforeach

                        </div>
                        <div class="col-md-3 text-center" style="border: 1px solid;">
                            @php
                                $buss = explode(',', $admistion->Lab_Price);
                            @endphp
                            @foreach ($buss as $val)
                                {{ $val }}.00
                                <br>
                            @endforeach

                        </div>
                    </div>
                    <br>
                    <div class="row"><br>
                        <h6 class="col-md-6"><b>Total Item:</b> {{ $m }}</h6>
                        <h6 class="col-md-5 text-right"><b>Total Labes Bill:</b> {{ $admistion->Labsum }}</h6>
                    </div>
                </div>
                <br><br>
            @endif
            <div class="container">
                <div class="row">
                    <div class="col-md-10 text-right" style="font-weight: 600;">
                        <b>DR consultancy charge</b>
                    </div>
                    <div class="col-md-2" style="font-weight: 600;">
                        {{ $admistion->dr_fee }}.00</div>
                        <div class="col-md-10 text-right" style="font-weight: 600;">
                            <b>OP charge</b>
                        </div>
                        <div class="col-md-2" style="font-weight: 600;">
                            {{ $admistion->OPD_INCLUDE }}.00</div>
                            <div class="col-md-10 text-right" style="font-weight: 600;">
                                <b>Generator/UPS charges</b>
                            </div>
                            <div class="col-md-2" style="font-weight: 600;">
                                {{ $admistion->UPS_charges }}.00</div>
                                <div class="col-md-10 text-right" style="font-weight: 600;">
                                    <b>ROOM CHARGES</b>
                                </div>
                                <div class="col-md-2" style="font-weight: 600;">
                                    {{ $admistion->ROOM_CHARGES }}.00</div>
                    <div class="col-md-10 text-right" style="font-weight: 600;">
                        <b>Lab Test Bill</b>
                    </div>
                    <div class="col-md-2" style="font-weight: 600;">
                        {{ $admistion->Labsum }}.00</div>
                    <div class="col-md-10 text-right" style="font-weight: 600;">
                        <b>MDCN Bill</b>
                    </div>
                    <div class="col-md-2" style="font-weight: 600;">
                        {{ $admistion->Mdcnammount }}.00</div>
                    <div class="col-md-10 text-right" style="font-weight: 600;">
                        <b>Discount</b>
                    </div>
                    @php
                      $Amount=  $admistion->dr_fee+$admistion->OPD_INCLUDE+$admistion->UPS_charges+$admistion->ROOM_CHARGES+$admistion->Labsum+$admistion->Mdcnammount
                    @endphp
                    <div class="col-md-2" style="font-weight: 600;">
                        @if (strpos($admistion->discount, '%'))
                            @php
                                $total=$Amount-$admistion->discount;
                            @endphp
                            {{ $admistion->discount }}
                        @else
                            {{ $admistion->discount }}.00
                            @php
                                $total=$Amount-$admistion->discount;
                            @endphp
                        @endif
                    </div>
                    <div class="col-md-10 text-right" style="font-weight: 600;"><b>Total Bill</b>
                    </div>
                    <div class="col-md-2" style="font-weight: 600;">
                        {{ $total }}

                        .00</div>
                </div>
            </div>
            <br><br>
            <div class="container">
                <div class="row">

                    <div class="col-md-9">
                        <p class="text-center">
                            Developed By Devicon: Muhammad Awais +92 303 0336939 +92 308 3962198
                        </p>
                    </div>
                    <div class="col-md-3 text-center">
                        {{session()->get('name')}}
                        <p style="text-decoration: overline;font-weight: 600;">
                            User Name
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @endforeach --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            window.print();
            // setTimeout(function() {
            //     window.location.href = 'OPD/manage'
            // }, 1000);
        });
    </script>
</body>

</html>