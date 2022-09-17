@extends('main_body')
@section('main_section')
    <!-- row -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="{{ $url }}" method="post">
                                @csrf
                                <fieldset class="required form-label">Patient Basic Detail</fieldset>
                                <legend class="form-control">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlInput1" class="required form-label">Patient
                                                Name</label>
                                            <div class="form-floating input-group input-group-solid mb-5">
                                                <input type="text" name="Patient_Name" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ old('Patient_Name') }}" />
                                            </div>
                                            <span class="text-danger">
                                                @error('Patient_Name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlInput1" class="required form-label">Son
                                                of/Daughter
                                                of</label>
                                            <div class="form-floating input-group input-group-solid mb-5">
                                                <input type="text" name="Son_of_Do_of" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ old('Son_of_Do_of') }}" />
                                            </div>
                                            <span class="text-danger">
                                                @error('Son_of_Do_of')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlInput1" class="required form-label">Gender</label>
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" name="gender" type="radio" value="m"
                                                    id="Male" />
                                                <label class="form-check-label" for="Male">
                                                    Male
                                                </label>
                                                &nbsp;&nbsp;
                                                <input class="form-check-input" name="gender" type="radio" value="f"
                                                    id="Female" />
                                                <label class="form-check-label" for="Female">
                                                    Female
                                                </label>
                                                &nbsp;&nbsp;
                                                <input class="form-check-input" name="gender" type="radio" value="o"
                                                    id="Other" />
                                                <label class="form-check-label" for="Other">
                                                    Other
                                                </label>
                                            </div>
                                            <span class="text-danger">
                                                @error('gender')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="basic-url" class="required form-label">Patient mobile no</label>
                                            <div class="input-group input-group-solid mb-5">
                                                <span class="input-group-text"><i class="fa fa-phone"
                                                        aria-hidden="true"></i></span>
                                                <input type="number" name="pat_mobile_no" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ old('pat_mobile_no') }}" min="0" maxlength="11" />
                                                <span class="input-group-text"></span>
                                            </div>
                                            <span class="text-danger">
                                                @error('pat_mobile_no')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="basic-url" class="required form-label">Patient cnic no</label>
                                            <div class="input-group input-group-solid mb-5">
                                                <span class="input-group-text fa fa-id-card"></span>
                                                <input type="number" name="cnic_pat" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ old('cnic_pat') }}" min="0" maxlength="11" />
                                                <span class="input-group-text"></span>
                                            </div>
                                            <span class="text-danger">
                                                @error('cnic_pat')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlInput1" class="required form-label">Husband
                                                /Guardian
                                                Name</label>
                                            <div class="form-floating input-group input-group-solid mb-5">
                                                <input type="text" name="husband_name" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ old('husband_name') }}" />
                                            </div>
                                            <span class="text-danger">
                                                @error('husband_name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="basic-url" class="required form-label">Husband /Guardian mobile
                                                no</label>
                                            <div class="input-group input-group-solid mb-5">
                                                <span class="input-group-text"><i class="fa fa-phone"
                                                        aria-hidden="true"></i></span>
                                                <input type="number" name="husband_mobile_no" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ old('husband_mobile_no') }}" min="0" maxlength="11" />
                                                <span class="input-group-text"></span>
                                            </div>
                                            <span class="text-danger">
                                                @error('husband_mobile_no')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            <!--end::Input group-->
                                        </div>

                                        <div class="form-group col-md-4">
                                            <!--begin::Input group-->
                                            <label for="exampleFormControlInput1" class="required form-label">Date</label>
                                            <div class="input-group input-group-solid mb-5">
                                                <span class="input-group-text "> <i class="fa fa-calculator"
                                                        aria-hidden="true"></i> </span>
                                                <input type="date" name="date" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ old('date') }}" />
                                            </div>
                                            <span class="text-danger">
                                                @error('date')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlInput1" class="required form-label">Time </label>
                                            <div class="input-group input-group-solid mb-5">
                                                <span class="input-group-text "><i class="fa fa-clock"
                                                        aria-hidden="true"></i></span>
                                                <input type="Time" name="time" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ old('time') }}" />
                                            </div>
                                            <span class="text-danger">
                                                @error('time')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlInput1" class="required form-label">Mr no</label>
                                            <div class="input-group input-group-solid mb-5">
                                                {{-- <span class="input-group-text">Rs</span> --}}
                                                <input type="number" name="mr_no" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ old('mr_no') }}" />
                                                {{-- <span class="input-group-text">.00</span> --}}
                                            </div>
                                            <span class="text-danger">
                                                @error('mr_no')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="basic-url" class="required form-label">Visit no</label>
                                            <div class="input-group input-group-solid mb-5">
                                                <input type="number" name="visit_no" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ old('visit_no') }}" min="0" maxlength="11" />
                                            </div>
                                            <span class="text-danger">
                                                @error('visit_no')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlInput1" class="required form-label">Doctor
                                                Name</label>
                                            <div class="form-floating input-group input-group-solid mb-5">
                                                <select class="form-select all_sum" id="dr_name" name="dr_name"
                                                    aria-label="Floating label select example">
                                                    <option value="" selected>Open this select menu</option>
                                                    @foreach ($doctor as $val)
                                                        <option value="{{ $val->doctor_id }}">
                                                            {{ $val->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <span class="text-danger">
                                                @error('dr_name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4{{-- d-none --}} " id="Checkup1">
                                            <!--begin::Input group-->
                                            <label for="exampleFormControlInput1" class="required form-label ">Checkup
                                                Fee</label>

                                                <div class="input-group input-group-solid mb-5">
                                                    <span class="input-group-text">Rs</span>
                                                    <input type="number" name="dr_fee" class="form-control all_sum" id="dr_fee"
                                                        aria-label="Amount (to the nearest dollar)" value="0" />
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                                <span class="text-danger">
                                                    @error('dr_fee')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlInput1" class="required form-label">TYPE
                                                Department</label>
                                            <div class="form-floating input-group input-group-solid mb-5">
                                                <select class="form-select" id="Type_Department" name="Type_Department"
                                                    aria-label="Floating label select example">
                                                    <option value="" selected>Open this select menu</option>
                                                    <option value="Orthopadic">Orthopadic</option>
                                                    <option value="ENT">ENT</option>
                                                    <option value="uorolgy">Uorolgy</option>
                                                    <option value="gynaecology">Gynaecology</option>
                                                    <option value="General Surgery">General Surgery</option>
                                                    <option value="Medical Case">Medical Case</option>
                                                </select>
                                            </div>
                                            <span class="text-danger">
                                                @error('Type_Department')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="basic-url" class="required form-label">Ultrasound</label>
                                            <div class="input-group mb-5 mt-4">

                                                {{-- <div class="form-check form-check-custom form-check-solid mb-5 ">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input me-3 " name="Ultrasound_Checkup[]"
                                                        type="checkbox" value="Checkup" id="Checkup" />
                                                    <label class="form-check-label " for="Checkup">
                                                        <div class="fw-bolder text-gray-800">Checkup</div>
                                                    </label>
                                                </div> --}}

                                                <div class="form-check form-check-custom  form-check-solid mb-5 ">
                                                    <input class="form-check-input me-3 " name="Ultrasound"
                                                        type="checkbox" value="Ultrasound" id="Ultrasound" />
                                                    <label class="form-check-label " for="Ultrasound">
                                                        <div class="fw-bolder text-gray-800">Ultrasound</div>
                                                </div>
                                            </div>
                                            <span class="text-danger">
                                                @error('Ultrasound')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            <!--end::Input group-->
                                        </div>
                                        <div class="form-group col-md-4  d-none" id="Ultrasound1">
                                            <!--begin::Input group-->
                                            <label for="exampleFormControlInput1" class="required form-label">Ultrasound
                                                Fee</label>
                                            <div class="input-group input-group-solid mb-5">
                                                <span class="input-group-text">Rs</span>
                                                <input type="number" name="Ultrasound_price" class="form-control all_sum"
                                                    id="Ultrasound_price" aria-label="Amount (to the nearest dollar)" value="0" />
                                                <span class="input-group-text">.00</span>
                                            </div>
                                            <span class="text-danger">
                                                @error('Ultrasound_price')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                    </div>
                                </legend>
                                <div class="form-check form-check-custom form-check-solid mb-5 ">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3 " name="Labes12"
                                        type="checkbox" value="Labes" id="Labes12" />
                                    <label class="form-check-label " for="Labes12">
                                        <div class="fw-bolder text-gray-800">Labes</div>
                                    </label>
                                </div>
                                <legend class="form-control Labes12 d-none">
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
                                                                <select class="form-select lab-dropdown"
                                                                    id="lab-dropdown-0" name="business[]"
                                                                    aria-label="Floating label select example">
                                                                    <option value="" selected>Open this select menu</option>
                                                                    @foreach ($Labes as $val)
                                                                        <option value="{{ $val->lab_id }}">
                                                                            {{ $val->Lab_name }}
                                                                        </option>
                                                                    @endforeach

                                                                </select>
                                                                <label for="floatingSelect">Works with selects</label>
                                                            </div>

                                                        </td>


                                                        <td>
                                                            <div class="input-group input-group-solid mb-5">
                                                                <span class="input-group-text ">Rs</span>
                                                                <input type="number" name="Lab_Quantity[]"
                                                                    class="form-control Lab_discount"
                                                                    aria-label="Amount (to the nearest dollar)"
                                                                    id="Lab_discount-0" value="0" min="0" />
                                                                <span class="input-group-text">%</span>

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

                                                            </div>
                                                        </td>
                                                        <td><input class="btn btn-danger btnsmall removerow" value="remove"
                                                                data-id="0">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <div class="container">
                                                    <td>
                                                        <input class="form-control all_sum d-none" name="Labsum" type="number"
                                                            id="sumcv" placeholder="Total CV Ammount" value="0">
                                                    </td>
                                                    {{-- <td>
                                            <input class="form-control" name="debitammount" type="number"
                                                id="sumdv" placeholder="Total DV Ammount">
                                        </td> --}}
                                                </div>

                                            </table>
                                        </div>
                                    </div>
                                </legend>
                                {{-- <fieldset class="required form-label">MDCN</fieldset> --}}
                                <div class="form-check form-check-custom form-check-solid mb-5 ">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3 " name="MDCN12"
                                        type="checkbox" value="Labes" id="MDCN12" />
                                    <label class="form-check-label " for="MDCN12">
                                        <div class="fw-bolder text-gray-800">Madison</div>
                                    </label>
                                </div>
                                <legend class="form-control MDCN12 d-none">
                                    <div class="container">
                                        <div class="row">
                                            <table class="table table-bordered" id="tbl_posts-1" style="margin-top: 30px;
                                                                                                    ">

                                                <thead>
                                                    <tr>
                                                        <th class="required">Select Madison</th>
                                                        <th class="required">Quantity(Madison)</th>
                                                        <th class="required">Madison Price</th>
                                                        <th><input id="addrow-1"
                                                                class="btn btn-primary btnsmall text-right"
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
                                                                    @foreach ($Madicenes as $val)
                                                                        <option value="{{ $val->madi_id }}">
                                                                            {{ $val->madi_name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <label for="floatingSelect">Works with selects</label>
                                                            </div>

                                                            <!--end::Input group-->
                                                        </td>


                                                        <td>
                                                            <div class="input-group input-group-solid mb-5">
                                                                <span class="input-group-text">Rs</span>
                                                                <input type="number" name="mdcn_Quantity[]"
                                                                    id="mdcn_discount-0" class="form-control mdcn_discount"
                                                                    aria-label="Amount (to the nearest dollar)" value="0"
                                                                    min="0" />
                                                                <span class="input-group-text">%</span>

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

                                                            </div>
                                                        </td>
                                                        <td><input class="btn btn-danger btnsmall removerow-Mdcn"
                                                                value="remove" data-id="0">
                                                        </td>
                                                    </tr>


                                                </tbody>
                                                <div class="container ">
                                                    <td>
                                                        <input class="form-control all_sum d-none" name="Mdcnammount"
                                                            type="number" id="sumcv-Mdcn" placeholder="Total CV Ammount"
                                                            value="0">
                                                    </td>

                                                </div>

                                            </table>
                                        </div>
                                    </div>
                                </legend>

                                <div class="form-group row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleFormControlInput1" class="required form-label">Discount</label>
                                        <div class="input-group input-group-solid mb-5">
                                            <input type="text" name="discount" class="form-control all_sum" id="discount"
                                                aria-label="Amount (to the nearest dollar)" value="0" />
                                            <span class="text-danger">
                                                @error('discount')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleFormControlInput1" class="required form-label">Total
                                            Amount</label>
                                        <div class="input-group input-group-solid mb-5">
                                            <input type="text" name="total" id="total_bill" class="form-control total"
                                                aria-label="Amount (to the nearest dollar)" value="0" />
                                            <span class="text-danger">
                                                @error('total')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 mt-8">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- #/ container -->
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
            $(document).on("change", "#MDCN12", function() {
                if ($('#MDCN12').is(":checked")) {
                    $(".MDCN12").removeClass("d-none");
                    $(".MDCN12").addClass("d-block");

                } else {

                    $(".MDCN12").removeClass("d-block");
                    $(".MDCN12").addClass("d-none");
                }
            });
            $(document).on("change", "#Labes12", function() {
                if ($('#Labes12').is(":checked")) {
                    $(".Labes12").removeClass("d-none");
                    $(".Labes12").addClass("d-block");

                } else {

                    $(".Labes12").removeClass("d-block");
                    $(".Labes12").addClass("d-none");
                }
            });
            $(document).on("change", "#Ultrasound", function() {
                if ($('#Ultrasound').is(":checked")) {
                    $("#Ultrasound1").removeClass("d-none");
                    $("#Ultrasound1").addClass("d-block");

                } else {

                    $("#Ultrasound1").removeClass("d-block");
                    $("#Ultrasound1").addClass("d-none");
                }
            });
            // $(document).on("change", "#Checkup", function() {
            //     // function Checkup() {
            //     //
            //     if ($('#Checkup').is(":checked")) {
            //         $("#Checkup1").removeClass("d-none");
            //         $("#Checkup1").addClass("d-block");

            //     } else {

            //         $("#Checkup1").removeClass("d-block");
            //         $("#Checkup1").addClass("d-none");
            //     }
            // });
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
                    url: '/mdcn-dropdown1',
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
                // var titles = $('.Lab_Price').map(function(idx, elem) {
                //     return $(elem).val();
                // }).get();
                // jQuery.each(titles, function(i, val) {
                $(".Lab_Price").each(function() {

                    total += +$(this).val();
                });
                // console.log(titles);
                console.log(total);
                $('#sumcv').val(total);
                // alert(total);
                event.preventDefault();
            });
            $(document).on('change keyup', '.mdcn_discount ,.mdcn,.MDCN_Price', function() {
                total = 0;
                // var titles = $('.MDCN_Price').map(function(idx, elem) {
                //     return $(elem).val();
                // }).get();
                // jQuery.each(titles, function(i, val) {
                $('.MDCN_Price').each(function() {

                    total += +$(this).val();
                });
                // console.log(titles);
                console.log(total);
                $('#sumcv-Mdcn').val(total);
                // event.preventDefault();
            });


            var arrayFromPHPP = <?php echo json_encode($Labes); ?>;
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
                // let v = $('#lab_prices-' + id).val();
                // lab = parseFloat($('#sumcv').val() - parseFloat(v));
                // lab1 = parseFloat($('#total_bill').val()) - parseFloat(v);
                // $('#total_bill').val(lab1);
                // $('#sumcv').val(lab);
                $('#rows-' + id).remove();
                total = 0;
                $(".Lab_Price").each(function() {
                    total += +$(this).val();
                });
                $('#sumcv').val(total);
                console.log(total);
            });
            $(document).delegate('.removerow', 'click', function(e) {
                var id = $(this).attr('data-id');
                // let v = $('#lab_prices-' + id).val();
                // lab = parseFloat($('#sumcv').val() - parseFloat(v));
                // lab1 = parseFloat($('#total_bill').val()) - parseFloat(v);
                // $('#total_bill').val(lab1);
                // $('#sumcv').val(lab);
                $('#rows-' + id).remove();
                total = 0;
                $(".Lab_discount").each(function() {
                    total += +$(this).val();
                });
                $('#sumcv').val(total);
                console.log(total);
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
            var arrayFromPHP = <?php echo json_encode($Madicenes); ?>;

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
                // let v = $('#MDCN_Price-' + id).val();
                // lab = parseFloat($('#sumcv-Mdcn').val() - parseFloat(v));
                // lab1 = total1 - parseFloat(v);
                // $('#total_bill').val(lab1);

                // $('#sumcv-Mdcn').val(lab);
                $('#row-' + id).remove();
                total = 0;
                $(".MDCN_Price").each(function() {
                    total += +$(this).val();
                });
                $('#sumcv-Mdcn').val(total);
                console.log(total);

            });
            $(document).delegate('.removerow-Mdcn', 'click', function(e) {
                var id = $(this).attr('data-id');
                // let v = $('#MDCN_Price-' + id).val();
                // lab = parseFloat($('#sumcv-Mdcn').val() - parseFloat(v));
                // lab1 = total1 - parseFloat(v);
                // $('#total_bill').val(lab1);
                // console.log(lab);
                // $('#sumcv-Mdcn').val(lab);
                $('#row-' + id).remove();
                total = 0;
                $(".MDCN_Price").each(function() {
                    total += +$(this).val();
                });
                $('#sumcv-Mdcn').val(total);
                console.log(total);

            });


            // $(document).on('keyup', '.mdcn_discount,.Lab_discount', function() {
            //     console.log($('#sumcv').val(), $('#sumcv-Mdcn').val());
            //     total1 = lab = parseFloat($('#sumcv').val()) + parseFloat($('#sumcv-Mdcn').val());
            //     $('#total_bill').val(lab);
            //     console.log(lab);

            // });

            $(document).on('keyup', '#total_discount', function() {
                disk = $(this).val();
                console.log(disk, 'and', total1);
                t = (total1 / 100) * disk;
                t1 = lab - t;
                console.log(t1);
                $('#total_bill').val(t1);
            });
            $(document).on("change", "#dr_name", function() {
                dr_id = $(this).val();
                doctorDropdown(dr_id);

            });
            let dr_fee;

            function doctorDropdown(dr_id) {
                $.ajax({
                    url: '/doctor-dropdown',
                    method: 'get',
                    data: {
                        dr_id: dr_id
                    },

                    success: function(response) {
                        $('#dr_fee').val(response.price);
                        dr_fee = response.price;
                        $('#total_bill').val(dr_fee);
                    },
                    error: function(response) {
                        console.log(response);
                        alert("Error: ");
                    }
                });
            };

            $(document).on('keyup', '#Ultrasound_price,#discount,.mdcn_discount,.Lab_discount', function() {
                // Ultrasound_price=0;
                drFee = parseFloat(dr_fee);
                sumcv = parseFloat($('#sumcv').val());
                sumcvMdcn = parseFloat($('#sumcv-Mdcn').val());
                Ultrasound_price = parseFloat($('#Ultrasound_price').val());
                sumall = drFee + sumcv + sumcvMdcn + Ultrasound_price;
                console.log(drFee);
                console.log(Ultrasound_price);
                console.log(sumcv);
                console.log(sumcvMdcn);
                $('.total').val(sumall);
            });
            $(document).on("keyup", "#discount", function() {
                let discount = $(this).val();
                let total_amunt = $('.total').val();
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
                        let discount_c = (total_amunt * discount) / 100;
                        let resultes = total_amunt - discount_c;
                        console.log(resultes);
                        $('.total').val(resultes);
                    } else {
                        let resultes = total_amunt - discount;
                        console.log(resultes);
                        $('.total').val(resultes);
                    }

                }

            });

        });
    </script>
@endsection
