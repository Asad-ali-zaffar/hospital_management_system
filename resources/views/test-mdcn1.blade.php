@extends('main_body')
@section('main_section')
    <style>
        .btnsmall {
            width: 75px;
            padding: 5px;
        }

    </style>

    <!-- row -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form method="POST" action="{{ $url }}">
                                @csrf
                                <div class="container">
                                    <div class="row">
                                        <table class="table table-bordered" id="tbl_postses" style="margin-top: 30px;">
                                            <thead>
                                                <tr>
                                                    <th class="required">Select Lab Test</th>
                                                    <th class="required">Quantity(Lab test)</th>
                                                    <th class="required">Lab Test Price</th>
                                                    <th><input id="addrows" class="btn btn-primary btnsmall text-right"
                                                            value="Add Row"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                    </div>
                                                </div>
                                                <tr id="rows-0">
                                                    <td>
                                                        <!--begin::Input group-->
                                                        <div class="form-floating input-group input-group-solid mb-5">
                                                            <select class="form-select lab-dropdown" id="lab-dropdown-0"
                                                                name="business[]"
                                                                aria-label="Floating label select example">
                                                                <option value="" selected>Open this select menu</option>
                                                                @foreach ($lab as $val)
                                                                    <option value="{{ $val->lab_id }}">
                                                                        {{ $val->Lab_name }}
                                                                    </option>
                                                                @endforeach

                                                            </select>
                                                            <label for="floatingSelect">Works with selects</label>
                                                        </div>
                                                        <span class="text-danger">
                                                            @error('madi_type')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </td>


                                                    <td>
                                                        <div class="input-group input-group-solid mb-5">
                                                            <span class="input-group-text ">Rs</span>
                                                            <input type="number" name="Lab_Quantity[]"
                                                                class="form-control Lab_discount"
                                                                aria-label="Amount (to the nearest dollar)"
                                                                id="Lab_discount-0" value="0" min="0" />
                                                            <span class="input-group-text">%</span>
                                                            <span class="text-danger">
                                                                @error('Lab_price')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-solid mb-5">
                                                            <span class="input-group-text">Rs</span>
                                                            <input type="number" name="Lab_Price[]"
                                                                class="form-control Lab_Price"
                                                                aria-label="Amount (to the nearest dollar)" value="0"
                                                                min="0" id="lab_prices-0" />
                                                            <span class="input-group-text">.00</span>
                                                            <span class="text-danger">
                                                                @error('Lab_price')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td><input class="btn btn-danger btnsmall removerow" value="remove"
                                                            data-id="0">
                                                    </td>
                                                </tr>


                                            </tbody>
                                            <div class="container">
                                                <td>
                                                    <input class="form-control" name="creditammount" type="number"
                                                        id="sumcv" placeholder="Total CV Ammount" value="0">
                                                </td>
                                                {{-- <td>
                                                    <input class="form-control" name="debitammount" type="number"
                                                        id="sumdv" placeholder="Total DV Ammount">
                                                </td> --}}
                                            </div>

                                        </table>
                                        <div class="separator separator-dashed my-8"></div>
                                        <table class="table table-bordered" id="tbl_posts-1" style="margin-top: 30px;
                                                                        ">

                                            <thead>
                                                <tr>
                                                    <th class="required">Select MDCN</th>
                                                    <th class="required">Quantity(MDCN)</th>
                                                    <th class="required">MDCN Price</th>
                                                    <th><input id="addrow-1" class="btn btn-primary btnsmall text-right"
                                                            value="Add Row"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body">
                                                <div class="col-lg-6">
                                                    <div class="form-group">

                                                    </div>
                                                </div>
                                                <tr id="row-0">
                                                    <td>
                                                        <!--begin::Input group-->
                                                        <div class="form-floating input-group input-group-solid mb-5">
                                                            <select class="form-select mdcn" name="mdcn[]" id="mdcn-0"
                                                                aria-label="Floating label select example">
                                                                <option value="" selected>Open this select menu</option>
                                                                @foreach ($madi as $val)
                                                                    <option value="{{ $val->madi_id }}">
                                                                        {{ $val->madi_name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            <label for="floatingSelect">Works with selects</label>
                                                        </div>
                                                        <span class="text-danger">
                                                            @error('madi_type')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                        <!--end::Input group-->
                                                    </td>


                                                    <td>
                                                        <div class="input-group input-group-solid mb-5">
                                                            <span class="input-group-text">Rs</span>
                                                            <input type="number" name="mdcn_Quantity[]" id="mdcn_discount-0"
                                                                class="form-control mdcn_discount"
                                                                aria-label="Amount (to the nearest dollar)" value="0"
                                                                min="0" />
                                                            <span class="input-group-text">%</span>
                                                            <span class="text-danger">
                                                                @error('Lab_price')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-solid mb-5">
                                                            <span class="input-group-text">Rs</span>
                                                            <input type="number" name="MDCN_Price[]" id="MDCN_Price-0"
                                                                class="form-control MDCN_Price"
                                                                aria-label="Amount (to the nearest dollar)" value="0"
                                                                min="0" />
                                                            <span class="input-group-text">.00</span>
                                                            <span class="text-danger">
                                                                @error('MDCN_Price')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td><input class="btn btn-danger btnsmall removerow-Mdcn" value="remove"
                                                            data-id="0">
                                                    </td>
                                                </tr>


                                            </tbody>
                                            <div class="container">
                                                <td>
                                                    <input class="form-control" name="creditammount" type="number"
                                                        id="sumcv-Mdcn" placeholder="Total CV Ammount" value="0">
                                                </td>

                                            </div>

                                        </table>
                                        <div class="separator separator-dashed my-8"></div>
                                        <table class="table table-bordered" id="tbl" style="margin-top: 30px;
                                                                        ">

                                            <thead>
                                                <tr>
                                                    <th class="required">Discount</th>
                                                    <th class="required">Total Bill</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body">
                                                <div class="col-lg-6">
                                                    <div class="form-group">

                                                    </div>
                                                </div>
                                                <td>
                                                    {{-- <input class="form-control" name="total_discount" type="number"
                                                        id="total_discount" placeholder="Total DV Ammount" > --}}
                                                        <div class="input-group input-group-solid mb-5">
                                                            <span class="input-group-text">Rs</span>
                                                            <input class="form-control" name="total_discount" type="number"
                                                        id="total_discount" placeholder="Total DV Ammount"  value="0"
                                                        min="0">
                                                            <span class="input-group-text">%</span>
                                                            <span class="text-danger">
                                                                @error('Lab_price')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                </td>
                                                <td>
                                                    <input class="form-control" name="total_bill" type="number"
                                                        id="total_bill" placeholder="Total DV Ammount">
                                                </td>
                                            </tbody>
                                        </table>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-4">
                                                    <button type="submit" id="submit" name="submitform" value="Submit"
                                                        class="btn btn-danger">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script>

            </script> --}}
    <script>
        let lab_price = 0;
        let MDCN_Price;
        let test_price;
        $(document).ready(function() {
            $(document).on("change", ".mdcn", function() {
                mdcn_id = $(this).val();
                curent_id = $(this).attr('id');
                curent_id = curent_id.replace("mdcn-", "");
                mdcn_vari = mdcnDropdown(mdcn_id, curent_id);
                console.log($('#mdcn_discount-' + curent_id).val());
                lab = parseFloat(MDCN_Price) + parseFloat($('#sumcv-Mdcn').val());
                $('#sumcv-Mdcn').val(lab);
                console.log(mdcn_vari);
            });
            $(document).on("keyup", ".mdcn_discount", function() {
                let mdcn_discount = $(this).val();
                curent_id = $(this).attr('id');
                curent_id = curent_id.replace("mdcn_discount-", "");
                if (mdcn_discount != "") {
                    let result = MDCN_Price * mdcn_discount;
                    // total = MDCN_Price - result;
                    total = result;
                    $('#MDCN_Price-' + curent_id).val(total);
                }
            });

            function mdcnDropdown(mdcn_id, curent_id) {
                $.ajax({
                    url: '/madcn-dropdown',
                    method: 'get',
                    data: {
                        mdcn_id: mdcn_id
                    },

                    success: function(response) {
                        $('#MDCN_Price-' + curent_id).val(response.price);
                        // alert(response.price);
                        MDCN_Price = response.price;
                        return MDCN_Price;
                    },
                    error: function(response) {
                        console.log(response);
                        alert("Error: ");
                    }
                });
            };
            $(document).on("change", ".lab-dropdown", function() {
                let lab_id = $(this).val();
                curent_id = $(this).attr('id');
                curent_id = curent_id.replace("lab-dropdown-", "");
                let vari = programsDropdown(lab_id, curent_id);
                $('#Lab_discount-' + curent_id).val("0");
                lab = parseFloat(lab_price) + parseFloat($('#sumcv').val());
                $('#sumcv').val(lab);
                console.log(vari);
            });
            $(document).on("keyup change", ".Lab_discount", function() {
                let lab_discount = $(this).val();
                curent_id = $(this).attr('id');
                curent_id = curent_id.replace("Lab_discount-", "");
                if (lab_discount != "") {
                    let result = lab_price * lab_discount;
                    // total = lab_price - result;
                    total = result;
                    $('#lab_prices-' + curent_id).val(total);
                }
            });


            function programsDropdown(lab_id, curent_id) {
                // console.log(lab_id);
                $.ajax({
                    url: '/mdcn-dropdown',
                    method: 'get',
                    data: {
                        lab_id: lab_id
                    },

                    success: function(response) {
                        $("#lab_prices-" + curent_id).val(response.price);
                        lab_price = response.price;
                        return lab_price;
                    },
                    error: function(response) {
                        console.log(response);
                        alert("Error: ");
                    }
                });

            };
        });
    </script>
    <script>
        $(document).ready(function() {
            var rec = ' ';
            var Rows = 0;
            let count = 0;
            // let total = 0;
            $(document).on('change keyup', '.Lab_discount , .lab-dropdown, .Lab_Price', function(event) {
                total = 0;
                var titles = $('.Lab_Price').map(function(idx, elem) {
                    return $(elem).val();
                }).get();
                jQuery.each(titles, function(i, val) {

                    total += parseFloat(val);
                });
                console.log(titles);
                console.log(total);
                $('#sumcv').val(total);
                // alert(total);
                event.preventDefault();
            });
            $(document).on('change keyup', '.mdcn_discount ,.mdcn,.MDCN_Price', function() {
                total = 0;
                var titles = $('.MDCN_Price').map(function(idx, elem) {
                    return $(elem).val();
                }).get();
                jQuery.each(titles, function(i, val) {

                    total += parseFloat(val);
                });
                console.log(titles);
                console.log(total);
                $('#sumcv-Mdcn').val(total);

                // event.preventDefault();
            });


            var arrayFromPHPP = <?php echo json_encode($lab); ?>;
            $('#addrows').click(function() {
                rows_fu();

            });

            function rows_fu() {
                count++;
                var row = '<tr id="rows-' + count + '">' +
                    ' <td> <div class="form-floating input-group input-group-solid mb-5">' +
                    '  <select class="form-select lab-dropdown" id="lab-dropdown-' + count +
                    '" name="business[]" aria-label="Floating label select example">' +
                    '                                                     <option value="" selected>Open this select menu</option>';
                jQuery.each(arrayFromPHPP, function(i, val) {
                    row += '   <option value="' + val.lab_id +
                        '">' + val.Lab_name + '</option>';
                });
                row +=
                    '</select>' +
                    '<label for="floatingSelect">Works with selects</label>' + ' </div>';

                function businessfu(list, index) {};
                arrayFromPHPP.forEach(businessfu);
                row = row +
                    // '                                                    <td><input type="text" name="cvammount[]" id="cvamount" value="{{ old('Lab_price') }}" placeholder="Enter CV Ammount" class="form-control c1" required> </td>' +
                    '<td><div class="input-group input-group-solid mb-5">' +
                    '<span class="input-group-text">Rs</span>' +
                    ' <input type="number" name="Lab_Quantity[]" class="form-control Lab_discount"aria-label="Amount (to the nearest dollar)" value="0" min="0" id="Lab_discount-' +
                    count + '" />' +
                    '<span class="input-group-text">%</span>' +
                    '</div></td>' +
                    '<td><div class="input-group input-group-solid mb-5">' +
                    '<span class="input-group-text">Rs</span>' +
                    '<input type="number" id="lab_prices-' + count +
                    '" name="Lab_Price[]" class="form-control Lab_Price" aria-label="Amount (to the nearest dollar)" value="0" min="0"/>' +
                    '<span class="input-group-text">.00</span>' +
                    '</div></td>' +
                    '<td><input id="" class="btn btn-danger btnsmall removerow" value="remove" data-id="' +
                    count + '"></td>' +
                    '' +
                    '                                                </tr>';
                $("#tbl_postses").append(row);

            };

            $(".removerow").click(function() {
                var id = $(this).attr('data-id');
                let v = $('#lab_prices-' + id).val();
                lab = parseFloat($('#sumcv').val() - parseFloat(v));
                lab1 = parseFloat($('#total_bill').val()) - parseFloat(v);
                $('#total_bill').val(lab1);
                $('#sumcv').val(lab);
                $('#rows-' + id).remove();
            });
            $(document).delegate('.removerow', 'click', function(e) {
                var id = $(this).attr('data-id');
                let v = $('#lab_prices-' + id).val();
                lab = parseFloat($('#sumcv').val() - parseFloat(v));
                lab1 = parseFloat($('#total_bill').val()) - parseFloat(v);
                $('#total_bill').val(lab1);
                $('#sumcv').val(lab);
                $('#rows-' + id).remove();
            });


        });
    </script>
    <script>
        $(document).ready(function() {
            var rec = '';
            var Rows = 0;
            let count = 0;
            let total1 = 0;
            $('#addrow-1').click(function() {
                rows_fu();
                $("#cvamount,#dvamount").on('change keyup keydown keypress', function() {
                    var cvamou = $("#cvamount").val();
                    $("#sumcv").val(cvamou);
                    var dvamou = $("#dvamount").val();
                    $("#sumdv").val(dvamou);
                });
            });
            var arrayFromPHP = <?php echo json_encode($madi); ?>;

            function rows_fu() {
                count++;
                var row = '<tr id="row-' + count + '">' +
                    ' <td> <div class="form-floating input-group input-group-solid mb-5">' +
                    '  <select class="form-select mdcn" id="mdcn-' + count +
                    '" name="mdcn[]" aria-label="Floating label select example">' +
                    '                                                     <option value="" selected>Open this select menu</option>';
                jQuery.each(arrayFromPHP, function(i, val) {
                    row += '   <option value="' + val.madi_id +
                        '">' + val.madi_name + '</option>';
                });
                row +=
                    '</select>' +
                    '<label for="floatingSelect">Works with selects</label>' + ' </div>';

                function businessfu(list, index) {};
                arrayFromPHP.forEach(businessfu);
                row = row +
                    '<td><div class="input-group input-group-solid mb-5">' +
                    '<span class="input-group-text">Rs</span>' +
                    ' <input type="number" name="mdcn_Quantity[]" class="form-control mdcn_discount"aria-label="Amount (to the nearest dollar)" value="0" min="0" id="mdcn_discount-' +
                    count + '" />' +
                    '<span class="input-group-text">%</span>' +
                    '</div></td>' +
                    '<td><div class="input-group input-group-solid mb-5">' +
                    '<span class="input-group-text">Rs</span>' +
                    '<input type="number" id="MDCN_Price-' + count +
                    '" name="MDCN_Price[]" class="form-control MDCN_Price" aria-label="Amount (to the nearest dollar)" value="0" min="0"/>' +
                    '<span class="input-group-text">.00</span>' +
                    '</div></td>' +
                    '<td><input id="" class="btn btn-danger btnsmall removerow-Mdcn" value="remove" data-id="' +
                    count + '"></td>' +
                    '' +
                    '                                                </tr>';
                $("#tbl_posts-1").append(row);
            };

            $(".removerow-Mdcn").click(function() {
                var id = $(this).attr('data-id');
                let v = $('#MDCN_Price-' + id).val();
                lab = parseFloat($('#sumcv-Mdcn').val() - parseFloat(v));
                lab1 = total1 - parseFloat(v);
                $('#total_bill').val(lab1);

                $('#sumcv-Mdcn').val(lab);
                $('#row-' + id).remove();
            });
            $(document).delegate('.removerow-Mdcn', 'click', function(e) {
                var id = $(this).attr('data-id');
                let v = $('#MDCN_Price-' + id).val();
                lab = parseFloat($('#sumcv-Mdcn').val() - parseFloat(v));
                lab1 = total1 - parseFloat(v);
                $('#total_bill').val(lab1);
                console.log(lab);
                $('#sumcv-Mdcn').val(lab);
                $('#row-' + id).remove();
            });


            $(document).on('keyup', '.mdcn_discount,.Lab_discount', function() {
                console.log($('#sumcv').val(), $('#sumcv-Mdcn').val());
             total1 =  lab = parseFloat($('#sumcv').val()) + parseFloat($('#sumcv-Mdcn').val());
                $('#total_bill').val(lab);
                console.log(lab);

            });

            $(document).on('keyup', '#total_discount', function() {
                disk = $(this).val();
                console.log(disk,'and',total1);
                t = (total1/100)*disk;
                t1=lab-t;
                console.log(t1);
                 $('#total_bill').val(t1);
            });

        });
    </script>
@endsection
