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
            <p class="text-center  mb-0 text-uppercase">REFERED
                {{ App\Models\PatReferedBy::getPatReferedById($request->dr_id) }} by Admission Report</p>
            <h3 class="text-center text-uppercase"><b>Subhan Hospital Chiniot</b></h3>
            <h3 class="text-center text-uppercase">your look is our concern</h3>
            <p class="text-center font-weight-bold mb-0">Jumra Chowk Jhang Road Chiniot</p>

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
            <div class="container">
                <div class="row" style="background-color: #b5b5b5;
                border-radius: 6px;height:50px;">
                    <div class="col-md-1 text-left mt-1">
                        <p style="font-weight: 600; "><b>#</b></p>
                    </div>
                    <div class="col-md-1 text-center mt-1">
                        <p style="font-weight: 600;"><b>Name</b></p>
                    </div>
                    <div class="col-md-2 text-center mt-1">
                        <p style="font-weight: 600;"><b>Date</b>
                        </p>
                    </div>
                    <div class="col-md-1 text-center mt-1">
                        <p style="font-weight: 600;"><b>Visit No</b>
                        </p>
                    </div>
                    <div class="col-md-3 text-center mt-1">
                        <p style="font-weight: 600;"><b>Procedure</b>
                        </p>
                    </div>
                    <div class="col-md-1 text-center mt-1">
                        <p style="font-weight: 600;"><b>Total amount</b>
                        </p>
                    </div>
                    @php
                    $share = 0;
                    $sum = 0;
                    $key = 1;
                    $siz = 2;
                @endphp
                    <div class="col-md-1 text-center mt-1">
                        <p style="font-weight: 600;"><b>Referred Share</b>
                        </p>
                    </div>

                    @if (strpos($request->share, '%'))
                        {{-- @php
                            $siz = 1;
                        @endphp --}}
                        <div class="col-md-1 text-center mt-1">
                            <p style="font-weight: 600;"><b>Share Amount</b>
                            </p>
                        </div>
                    @endif
                    <div class="col-md-2 text-center mt-1">
                        <p style="font-weight: 600;"><b>Total</b>
                        </p>
                    </div>
                </div>

                @foreach ($ADMISIONES as $val)
                    <div class="row" style="font-weight: 600; border: 1px solid;">
                        <div class="col-md-1 text-left mt-2">
                            <p>{{ $key++ }}</p>
                        </div>

                        <div class="col-md-1 text-center mt-2">
                            <p> {{ $val->Patient_Name }}
                            </p>
                        </div>
                        <div class="col-md-2 text-center  mt-2">
                            <p>{{ date('d-m-Y', strtotime($val->date)) }}
                            </p>
                        </div>
                        {{-- <div class="col-md-1 text-center mt-2">
                            <p> {{ $val->mr_no }}
                            </p>
                        </div> --}}
                        <div class="col-md-1 text-center mt-2">
                            <p style="font-weight: 600;">{{ $val->visit_no }}
                            </p>
                        </div>
                        <div class="col-md-3 text-center mt-2">
                            <p style="font-weight: 600;">{{ App\Models\procedure::getprocedureById($val->procedure) }}
                            </p>
                        </div>

                        @php
                            $sum += $val->total;
                        @endphp
                        <div class="col-md-1 text-center mt-2">
                            <p style="font-weight: 600;">{{ $val->total }}
                            </p>
                        </div>
                        {{-- @if (strpos($request->share, '%')) --}}
                            @php
                                $siz = 1;
                            @endphp
                            <div class="col-md-1 text-center mt-2">
                                <p style="font-weight: 600;">{{App\Models\procedure::getprocedureshareById( $val->procedure) }} <br>
                                    @if (strpos(App\Models\procedure::getprocedureshareById( $val->procedure) , '%'))
                                        @php
                                            $Drshare = str_replace(' ', '%', App\Models\procedure::getprocedureshareById( $val->procedure));
                                            $shareDr = ((int) $Drshare * (int) $val->total) / 100;
                                            $total = $val->total - $shareDr;
                                            $share += $shareDr;
                                        @endphp

                                        {{ $shareDr }}.00
                                    @else
                                        {{ App\Models\procedure::getprocedureshareById( $val->procedure) }}.00
                                        @php
                                            $share += App\Models\procedure::getprocedureshareById( $val->procedure);
                                        @endphp
                                    @endif
                                </p>
                            </div>
                        {{-- @else --}}
                            {{-- <div class="col-md-1 text-center mt-2">
                                <p style="font-weight: 600;">


                                </p>
                            </div> --}}
                        {{-- @endif --}}
                        <div class="col-md-2 text-center mt-2">
                            <p style="font-weight: 600;">
                                @if (strpos(App\Models\procedure::getprocedureshareById( $val->procedure), '%'))
                                    {{ $total }}.00
                                @else
                                    {{ $val->total - App\Models\procedure::getprocedureshareById( $val->procedure) }}.00
                                @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-2 ">

                </div>
                <div class="col-md-8" style="font-weight: 600; border: 1px solid;">
                    <div class="row">
                        <p class="col-md-10 text-left mt-2 border-right">
                            Total Local Patient Amount
                        </p>
                        <p class="col-md-2 text-left mt-2 ">
                            {{ $sum }}
                        </p>
                    </div>

                </div>
                <div class="col-md-2 ">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 ">

                </div>
                <div class="col-md-8" style="font-weight: 600; border: 1px solid;">
                    <div class="row">
                        <p class="col-md-10 text-left mt-2 border-right">
                            {{ App\Models\PatReferedBy::getPatReferedById($request->dr_id) }}
                        </p>
                        <p class="col-md-2 text-left mt-2">
                            {{ $share }}
                        </p>
                    </div>

                </div>
                <div class="col-md-2 ">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 ">

                </div>
                <div class="col-md-8" style="font-weight: 600; border: 1px solid;">
                    <div class="row">
                        <p class="col-md-10 text-left mt-2 border-right">
                            Subhan Hospital
                        </p>
                        <p class="col-md-2 text-left mt-2">
                            {{ $sum - $share }}
                        </p>
                    </div>

                </div>
                <div class="col-md-2 ">
                </div>
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
                    {{ session()->get('name') }}
                    <p style="text-decoration: overline;font-weight: 600;">
                        User Name
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            window.print();
            // setTimeout(function() {
            //     window.location.href = 'REFERED-admission'
            // }, 1000);
        });
    </script>
</body>

</html>
