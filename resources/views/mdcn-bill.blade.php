@extends('main_body')
@section('main_section')
    <!-- row -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="repeater" action="{{ $url }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="date_time" class="required form-label">Date|Time</label>
                                            <div class="input-group input-group-solid mb-6">
                                                <span class="input-group-text fa fa-calendar"></span>
                                                <input type="datetime-local" name="date_time" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ old('date_time') }}" />
                                                <span class="input-group-text fa fa-clock"></span>
                                            </div>
                                            <span class="text-danger">
                                                @error('date_time')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="customer_name" class="required form-label">Customer Name</label>
                                            <div class="input-group input-group-solid mb-6">
                                                <span class="input-group-text fa fa-user-circle"></span>
                                                <input type="text" name="customer_name" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ old('customer_name') }}" id="customer_name" />
                                            </div>

                                        </div>
                                    </div>

                                    <div class="separator separator-dashed my-8"></div>
                                    <table class="table table-bordered" id="tbl_posts-1" style="margin-top: 30px;
                                        ">

                                        <thead>
                                            <tr>
                                                <th class="required">Select Medicine</th>
                                                <th class="required">Quantity(Medicine)</th>
                                                <th class="required">Medicine Price</th>
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
                                                            aria-label="Amount (to the nearest dollar)" value="0" min="0" />
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
                                                            aria-label="Amount (to the nearest dollar)" value="0" min="0" />
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
                                                <label for="" class="required" style=" margin-bottom: 10%;">Total Amount</label>
                                                <input class="form-control" name="creditammount" type="number"
                                                    id="sumcv-Mdcn" placeholder="Total CV Ammount" value="0">
                                            </td>
                                            <td>
                                                <label for="" class="required "
                                                    style=" margin-bottom: 7%;">Discount</label>
                                                {{-- <span class="input-group-text"></span> --}}
                                                <input class="form-control" name="discount" type="text" id="discount" value="{{ old('discount') }}"
                                                    placeholder="Total DV Ammount">
                                                    <span class="text-danger">
                                                        @error('discount')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                            </td>
                                            <td>
                                                <label for="" class="required " style=" margin-bottom: 7%;">Total Bill
                                                    (After Discount)</label>
                                                {{-- <span class="input-group-text"></span> --}}
                                                <input class="form-control" name="Total_Bill" type="number"
                                                    id="Total_Bill" placeholder="Total DV Ammount" min="0" value="0">
                                            </td>

                                        </div>

                                    </table>

                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn font-weight-bold btn-success mr-2"
                                                id="submit">Submit</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
    //    let lab_price = 0;
        let MDCN_Price=0;
        let test_price;
        $(document).ready(function() {
            $(document).on("change", ".mdcn", function() {
                mdcn_id = $(this).val();
                curent_id = $(this).attr('id');
                curent_id = curent_id.replace("mdcn-", "");
               let mdcn_vari = mdcnDropdown(mdcn_id, curent_id);
                $('#mdcn_discount-' + curent_id).val("0");
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
            $(document).on("keyup", "#discount", function() {
                let discount = $(this).val();
                let total_amunt = $('#sumcv-Mdcn').val();
                console.log(total_amunt);
                console.log(discount);
                if (discount != "") {
                    if (discount.includes("%")) {
                        console.log(discount);
                        $('#discount').each(function() {
                            var t = $(this).text();
                            discount = discount.replace(/\%/, '');
                        });
                        console.log(discount);
                           let discount_c=(total_amunt*discount)/100;
                           let resultes=total_amunt-discount_c;
                            console.log(resultes);
                            $('#Total_Bill').val(resultes);
                    } else {
                        let resultes = total_amunt - discount;
                        console.log(resultes);
                        $('#Total_Bill').val(resultes);
                    }

                }

            });

            function mdcnDropdown(mdcn_id, curent_id) {
                $.ajax({
                    url: '/madcn-dropdown1',
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
        });
    </script>
    <script>

            $(document).ready(function() {
            var rec = '';
            var Rows = 0;
            let count = 0;
            let total1 = 0;
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

        });
    </script>
@endsection
