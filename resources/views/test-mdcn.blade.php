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
                                                <span class="input-group-text "></span>
                                                <span class="text-danger">
                                                    @error('customer_name')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <!--begin::Input group-->
                                            {{-- <div class="form-floating input-group input-group-solid mb-5"> --}}

                                            {{-- <select class="form-select" name="lab_name" id="lab-dropdown"
                                                    aria-label="Floating label select example">
                                                    <option value="" selected>Open this select menu</option>
                                                    @foreach ($lab as $val)
                                                        <option value="{{ $val->lab_id }}">{{ $val->Lab_name }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingSelect">Works with selects</label> --}}
                                            {{-- </div> --}}
                                            {{-- <span class="text-danger">
                                                @error('madi_type')
                                                    {{ $message }}
                                                @enderror
                                            </span> --}}
                                            <!--end::Input group-->

                                        </div>
                                    </div>
                                    {{-- <label for="basic-url" class="required form-label">Select MDCN </label>

                                    <!--begin::Input group-->
                                    <div class="form-floating input-group input-group-solid mb-5">
                                        <select class="form-select" name="mdcn" id="floatingSelect"
                                            aria-label="Floating label select example">
                                            <option value="" selected>Open this select menu</option>
                                            @foreach ($madi as $val)
                                                <option value="{{ $val->madi_id }}">{{ $val->madi_name }}</option>
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
                                    <label for="exampleFormControlInput1" class="required form-label">DISCOUNT
                                        (MDCN)</label>
                                    <div class="input-group input-group-solid mb-5">
                                        <span class="input-group-text">Rs</span>
                                        <input type="number" name="mdcn_discount" class="form-control"
                                            aria-label="Amount (to the nearest dollar)" value="10" readonly />
                                        <span class="input-group-text">%</span>
                                        <span class="text-danger">
                                            @error('Lab_price')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div> --}}
                                    <div class="separator separator-dashed my-8"></div>
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
                                                            name="business[]" aria-label="Floating label select example">
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
                                                            aria-label="Amount (to the nearest dollar)" id="Lab_discount-0"
                                                            value="0" min="0" />
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
                                                            aria-label="Amount (to the nearest dollar)" value="0" min="0"
                                                            id="lab_prices-0" />
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
                                            {{-- <td></td> --}}
                                            <td>
                                                <label for="" class="required" style=" margin-bottom: 10%;">Total Amount</label>
                                                {{-- <span class="input-group-text"></span> --}}
                                                <input class="form-control" name="creditammount" type="number" id="sumcv"
                                                    placeholder="Total CV Ammount" value="0">
                                                    <span class="text-danger">
                                                        @error('Lab_price')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                            </td>
                                            <td>
                                                <label for="" class="required "
                                                    style=" margin-bottom: 7%;">Discount</label>
                                                {{-- <span class="input-group-text"></span> --}}
                                                <input class="form-control" name="discount" type="text" id="discount"
                                                    placeholder="Total DV Ammount" value="{{ old('discount') }}">
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
                                    {{-- <div id="kt_repeater_1">
                                        <div class="form-group row" id="kt_repeater_1">
                                            <label class="col-lg-2 col-form-label text-right required">Test:</label>
                                            <div data-repeater-list="" class="col-lg-10">
                                                <div data-repeater-item class="form-group row align-items-center">
                                                    <div class="col-md-3 ">
                                                        <label class="required">Test Name:</label>
                                                        <div class="form-floating input-group input-group-solid mb-5">
                                                            <select class="form-select" name="[0]test_type[]"
                                                                id="floatingSelect"
                                                                aria-label="Floating label select example">
                                                                <option value="" selected>Open this select menu</option>
                                                                <option value="Xray">Xray</option>
                                                                <option value="ecg">ecg</option>
                                                                <option value="ctg">ctg</option>
                                                            </select>
                                                            <label for="floatingSelect">Works with selects</label>
                                                        </div>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="required form-label">Price (test)</label>
                                                        <div class="input-group input-group-solid mb-5">
                                                            <span class="input-group-text">Rs</span>
                                                            <input type="number" name="test_price" class="form-control"
                                                                aria-label="Amount (to the nearest dollar)" value="" />
                                                            <span class="input-group-text">.00</span>
                                                            <span class="text-danger">
                                                                @error('test_price')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="javascript:;" data-repeater-delete=""
                                                            class="btn btn-sm font-weight-bolder btn-light-danger">
                                                            <i class="la la-trash-o"></i>Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label text-right"></label>
                                            <div class="col-lg-4">
                                                <a href="javascript:;" data-repeater-create=""
                                                    class="btn btn-sm font-weight-bolder btn-light-primary">
                                                    <i class="la la-plus"></i>Add
                                                </a>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-2">
                                            <button type="submit"
                                                class="btn font-weight-bold btn-success mr-2" id="submit">Submit</button>
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
        let lab_price = 0;
        let test_price;
        $(document).ready(function() {
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
            $(document).on("keyup", "#discount", function() {
                let discount = $(this).val();
                let total_amunt = $('#sumcv').val();
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
                    url: '/mdcn-dropdown1',
                    method: 'get',
                    data: {
                        lab_id: lab_id,
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
@endsection
