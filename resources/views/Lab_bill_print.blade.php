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
            <p class="text-center  mb-0 text-uppercase">Test bill</p>
            <h3 class="text-center text-uppercase"><b>Subhan Hospital Chiniot</b></h3>
            <h3 class="text-center text-uppercase">your look is our concern</h3>
            <p class="text-center font-weight-bold mb-0">Jumra Chowk Jhang Road Chiniot</p>
            <p class="text-center fw-bold  mb-0">Bill No:&nbsp;
                {{ $lab->lab_bill_id }}
            </p>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-6">
                        <p class=" font-weight-bold mb-0">Date:
                            {{ date('d-M-y h:i:s A', strtotime($lab->date_time)) }}
                            {{-- lab_bill_id":22,"date_time":"2022-08-19 19:26:00","customer_name":"Walking","business":"3,4","Lab_Quantity":"03,04","Lab_Price":"1200,56000","creditammount":57200,"discount":"12%","Total_Bill":50336,"usaer_name":null,"created_at":"2022-08-19T14:39:23.000000Z","updated_at":"2022-08-19T14:39:23.000000Z --}}
                        </p>
                    </div>
                    <div class="col-6">
                        <p class="font-weight-bold text-center">Name:
                            <span>{{ $lab->customer_name }}</span>
                        </p>
                    </div>
                </div>
            </div>

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

                <div class="row">
                    <div class="col-md-1 text-center" style="font-weight: 600;">
                        @php
                            $buss = explode(',', $lab->business);
                            $m = count($buss);
                        @endphp
                        @for ($i = 1; $i <= $m; $i++)
                            {{ $i }}
                            <br>
                        @endfor
                    </div>
                    <div class="col-md-2 text-center" style="font-weight: 600;">
                        @php
                            $buss = explode(',', $lab->business);

                        @endphp
                        @foreach ($buss as $val)
                            {{ App\Models\WalkingTestMdcn::getLabNameById($val) }}
                            <br>
                        @endforeach

                    </div>
                    <div class="col-md-3 text-center" style="font-weight: 600;">
                        @php
                        $buss = explode(',', $lab->business);

                    @endphp
                    @foreach ($buss as $val)
                        {{ App\Models\WalkingTestMdcn::getLabPriceById($val, 1) }}
                        <br>
                    @endforeach

                    </div>
                    <div class="col-md-3 text-center" style="font-weight: 600;">
                        @php
                            $buss = explode(',', $lab->Lab_Quantity);
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
                    <div class="col-md-3 text-center" style="font-weight: 600;">
                        @php
                            $buss = explode(',', $lab->Lab_Price);
                        @endphp
                        @foreach ($buss as $val)
                            {{ $val }}.00
                            <br>
                        @endforeach

                    </div>
                </div>
                <br>
                {{-- <div class="row"><br>

                    <h6 class="col-md-6"><b>Total Item:</b> {{ $m }}</h6>
                    <h6 class="col-md-5 text-right"><b>Total Labes Bill:</b> {{ $admistion->Labsum }}</h6>
                </div> --}}

            </div>
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 text-right" style="font-weight: 600;">
                        <b>Total Amount</b>
                    </div>
                    <div class="col-md-2" style="font-weight: 600;">
                        {{ $lab->creditammount }}.00</div>
                    <div class="col-md-10 text-right" style="font-weight: 600;"><b>Discount</b>
                    </div>
                    <div class="col-md-2" style="font-weight: 600;">
                        {{ $lab->discount }}</div>
                        <div class="col-md-10 text-right" style="font-weight: 600;">
                            <b>Total Bill</b>
                        </div>
                        <div class="col-md-2" style="font-weight: 600;">
                            {{ $lab->Total_Bill }}.00</div>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            window.print();
            // setTimeout(function() {
            //     window.location.href = '/test-Bill/manage'
            // }, 1000);
        });
    </script>
</body>

</html>
