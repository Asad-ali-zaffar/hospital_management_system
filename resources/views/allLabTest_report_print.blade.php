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

            <p class="text-center  mb-0 text-uppercase">{{ App\Models\WalkingTestMdcn::getLabNameById($request->Lab_id) }} Report</p>
            <h3 class="text-center text-uppercase"><b>Subhan Hospital Chiniot</b></h3>
            <h3 class="text-center text-uppercase">your look is our concern</h3>
            <p class="text-center font-weight-bold mb-0">Jumra Chowk Jhang Road Chiniot</p>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-6">
                        <p class=" font-weight-bold mb-0">From Date:&nbsp;
                            {{ date('d-M-y', strtotime($request->from)) }}
                        </p>
                    </div>
                    <div class="col-6">
                        <p class=" font-weight-bold mb-0">To Date:&nbsp;
                            {{ date('d-M-y', strtotime($request->To)) }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" style="background-color: #b5b5b5;
                border-radius: 6px;height:35px;">
                    <div class="col-md-1 text-center mt-1">
                        <p style="font-weight: 600; "><b>#</b></p>
                    </div>
                    <div class="col-md-2 text-center mt-1">
                        <p style="font-weight: 600;"><b>Lab Test</b></p>
                    </div>
                    <div class="col-md-2 text-center mt-1">
                        <p style="font-weight: 600;"><b>Quantity</b>
                        </p>
                    </div>
                    <div class="col-md-2 text-center mt-1">
                        <p style="font-weight: 600;"><b>Amount</b>
                        </p>
                    </div>
                    <div class="col-md-2 text-center mt-1">
                        <p style="font-weight: 600;"><b>Discount</b>
                        </p>
                    </div>
                    <div class="col-md-3 text-center mt-1">
                        <p style="font-weight: 600;"><b>After Discount</b>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-center" style="font-weight: 600; border: 1px solid;border-radius: 6px">
                        1
                    </div>
                    <div class="col-md-2 text-center" style="font-weight: 600; border: 1px solid;border-radius: 6px">
                        {{ App\Models\WalkingTestMdcn::getLabNameById($request->Lab_id) }}

                    </div>
                    <div class="col-md-2 text-center" style="font-weight: 600; border: 1px solid;border-radius: 6px">
                        {{ $total_Q }}


                    </div>
                    <div class="col-md-2 text-center" style="font-weight: 600; border: 1px solid;border-radius: 6px">
                        {{ $total_p }}

                    </div>
                    <div class="col-md-2 text-center" style="font-weight: 600; border: 1px solid;border-radius: 6px">
                        {{ $total_d }}
                    </div>
                    <div class="col-md-3 text-center" style="font-weight: 600; border: 1px solid;border-radius: 6px">
                        {{ $total_b }}
                    </div>
                </div>

                <br>
                <div class="row">
                    <h6 class="col-md-11 text-right"><b>Share:</b>
                        @if (strpos($request->share, '%'))
                            {{ $request->share }}
                        @else
                            {{ $request->share }}.00
                        @endif
                    </h6>
                    <h6 class="col-md-11 text-right"><b>Share Amount:</b> {{$share}} </h6>
                    <h6 class="col-md-11 text-right"><b>Total Bill:</b> {{ $request->total }}</h6>
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
            //     window.location.href = 'test-reporting'
            // }, 1000);
        });
    </script>
</body>

</html>
