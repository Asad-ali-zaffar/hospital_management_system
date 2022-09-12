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
                                @foreach ($data as $dat)
                                <fieldset class="required form-label">Patient Basic Detail</fieldset>
                                <legend class="form-control">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlInput1" class="required form-label">Patient
                                                Name</label>
                                            <div class="form-floating input-group input-group-solid mb-5">
                                                <input type="text" name="Patient_Name" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ $dat->Patient_Name }}" />
                                            </div>
                                            <span class="text-danger">
                                                @error('Patient_Name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlInput1" class="required form-label">Son of/Doter
                                                of</label>
                                            <div class="form-floating input-group input-group-solid mb-5">
                                                <input type="text" name="Son_of_Do_of" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{$dat->Son_of_Do_of}}" />
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
                                                <input class="form-check-input" name="gender" type="radio" value="m" {{$dat->gender == 'm' ? 'checked' : ""}}
                                                    id="Male" />
                                                <label class="form-check-label" for="Male">
                                                    Male
                                                </label>
                                                &nbsp;&nbsp;
                                                <input class="form-check-input" name="gender" type="radio" value="f"{{$dat->gender == 'f' ? 'checked' : ""}}
                                                    id="Female" />
                                                <label class="form-check-label" for="Female">
                                                    Female
                                                </label>
                                                &nbsp;&nbsp;
                                                <input class="form-check-input" name="gender" type="radio" value="o"{{$dat->gender == 'o' ? 'checked' : ""}}
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
                                                    value="{{ $dat->pat_mobile_no }}" min="0" maxlength="11" />
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
                                                    value="{{ $dat->cnic_pat }}" min="0" maxlength="11" />
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
                                                Name</label>
                                            <div class="form-floating input-group input-group-solid mb-5">
                                                <input type="text" name="husband_name" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ $dat->husband_name }}" />
                                            </div>
                                            <span class="text-danger">
                                                @error('husband_name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="basic-url" class="required form-label">Husband mobile no</label>
                                            <div class="input-group input-group-solid mb-5">
                                                <span class="input-group-text"><i class="fa fa-phone"
                                                        aria-hidden="true"></i></span>
                                                <input type="number" name="husband_mobile_no" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ $dat->husband_mobile_no }}" min="0" maxlength="11" />
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
                                            <label for="basic-url" class="required form-label">Husband cnic no</label>
                                            <div class="input-group input-group-solid mb-5">
                                                <span class="input-group-text fa fa-id-card"></span>
                                                <input type="number" name="husband_cnic" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ $dat->husband_cnic }}" min="0" maxlength="11" />
                                                <span class="input-group-text"></span>
                                            </div>
                                            <span class="text-danger">
                                                @error('husband_cnic')
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
                                                    value="{{$dat->date }}" />
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
                                                    value="{{ $dat->time }}" />
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
                                                <span class="input-group-text">Rs</span>
                                                <input type="number" name="mr_no" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ $dat->mr_no }}" />
                                                <span class="input-group-text">.00</span>
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
                                                    value="{{ $dat->visit_no}}" min="0" maxlength="11" />
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
                                                <select class="form-select all_sum" id="dr_name"
                                                    name="dr_name" aria-label="Floating label select example">
                                                    <option value="{{$dat->dr_name}}" selected>{{App\Models\Doctores::getDoctoresById($dat->dr_name)}}</option>
                                                    @foreach ($doctor as $val)
                                                        @if ($val->doctor_id != $dat->dr_name)
                                                        <option value="{{ $val->doctor_id }}">
                                                            {{ $val->name }}
                                                        </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <span class="text-danger">
                                                @error('Patient_Name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <!--begin::Input group-->
                                            <label for="exampleFormControlInput1" class="required form-label">Fee
                                                ADD</label>
                                            <div class="input-group input-group-solid mb-5">
                                                <span class="input-group-text">Rs</span>
                                                <input type="number" name="dr_fee" class="form-control all_sum" id="dr_fee"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{$dat->dr_fee}}" />
                                                <span class="input-group-text">.00</span>
                                            </div>
                                            <span class="text-danger">
                                                @error('dr_fee')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlInput1" class="required form-label">TYPE Department</label>
                                            <div class="form-floating input-group input-group-solid mb-5">
                                                <select class="form-select" id="Type_Department"
                                                    name="Type_Department" aria-label="Floating label select example">
                                                    <option value="{{$dat->Type_Department}}" selected>{{$dat->Type_Department}}</option>
                                                    @if ($dat->Type_Department == 'Orthopadic')
                                                    <option value="ENT">ENT</option>
                                                    <option value="uorolgy">Uorolgy</option>
                                                    <option value="gynaecology">Gynaecology</option>
                                                    <option value="General Surgery">General Surgery</option>
                                                    <option value="Medical Case">Medical Case</option>
                                                    @elseif ($dat->Type_Department == 'ENT')
                                                    <option value="Orthopadic">Orthopadic</option>
                                                    <option value="uorolgy">Uorolgy</option>
                                                    <option value="gynaecology">Gynaecology</option>
                                                    <option value="General Surgery">General Surgery</option>
                                                    <option value="Medical Case">Medical Case</option>
                                                    @elseif ($dat->Type_Department == 'uorolgy')
                                                    <option value="Orthopadic">Orthopadic</option>
                                                    <option value="ENT">ENT</option>
                                                    <option value="gynaecology">Gynaecology</option>
                                                    <option value="General Surgery">General Surgery</option>
                                                    <option value="Medical Case">Medical Case</option>
                                                    @elseif ($dat->Type_Department == 'gynaecology')
                                                    <option value="Orthopadic">Orthopadic</option>
                                                    <option value="ENT">ENT</option>
                                                    <option value="uorolgy">Uorolgy</option>
                                                    <option value="General Surgery">General Surgery</option>
                                                    <option value="Medical Case">Medical Case</option>
                                                    @elseif ($dat->Type_Department == 'General Surgery')
                                                    <option value="Orthopadic">Orthopadic</option>
                                                    <option value="ENT">ENT</option>
                                                    <option value="uorolgy">Uorolgy</option>
                                                    <option value="gynaecology">Gynaecology</option>
                                                    <option value="Medical Case">Medical Case</option>
                                                    @else
                                                    <option value="Orthopadic">Orthopadic</option>
                                                    <option value="ENT">ENT</option>
                                                    <option value="uorolgy">Uorolgy</option>
                                                    <option value="gynaecology">Gynaecology</option>
                                                    <option value="General Surgery">General Surgery</option>
                                                    @endif
                                                </select>
                                            </div>
                                            <span class="text-danger">
                                                @error('Patient_Name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </legend>
                                <fieldset class="required form-label">Labes</fieldset>
                                <legend class="form-control">
                                    <div class="container">
                                        <div class="row">
                                            <table class="table table-bordered" id="tbl_postses" style="margin-top: 30px;">
                                                <thead>
                                                    <tr>
                                                        <th class="required">Select Lab Test</th>
                                                        <th class="required">Quantity(Lab test)</th>
                                                        <th class="required">Lab Test Price</th>
                                                        <th style="display: none"><input id="addrows" class="btn btn-primary btnsmall text-right"
                                                                value="Add Row"></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbl_posts_body">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                        </div>
                                                    </div>
                                                    @php
                                                        $buss = explode(',', $dat->lab_id);
                                                    @endphp
                                                    @foreach ( $buss as $key=>$da)
                                                    <tr id="rows-{{$key}}">
                                                        <td>
                                                            <!--begin::Input group-->
                                                            <div class="form-floating input-group input-group-solid mb-5">
                                                                <select class="form-select lab-dropdown"
                                                                    id="lab-dropdown-{{$key}}" name="business[]"
                                                                    aria-label="Floating label select example">
                                                                    <option value="{{$da}}" selected>{{App\Models\WalkingTestMdcn::getLabNameById($da)}}</option>
                                                                    @foreach ($Labes as $vall)
                                                                    @if($da != $vall->lab_id)
                                                                        <option value="{{ $vall->lab_id }}">
                                                                            {{ $vall->Lab_name }}
                                                                        </option>
                                                                    @endif
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
                                                                @php
                                                                  $Lab_Quantity= explode(',', $dat->Lab_Quantity);
                                                                 @endphp
                                                                <input type="number" name="Lab_Quantity[]"
                                                                    class="form-control Lab_discount"
                                                                    aria-label="Amount (to the nearest dollar)"
                                                                    id="Lab_discount-0" value="{{$Lab_Quantity[$key]}}" min="0" />
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
                                                                @php
                                                                  $Lab_Price= explode(',', $dat->Lab_Price);
                                                                 @endphp
                                                                <input type="number" name="Lab_Price[]"
                                                                    class="form-control Lab_Price"
                                                                    aria-label="Amount (to the nearest dollar)" value="{{$Lab_Price[$key]}}"
                                                                    min="0" id="lab_prices-0" />
                                                                <span class="input-group-text">.00</span>
                                                                <span class="text-danger">
                                                                    @error('Lab_price')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td style="display: none"><input class="btn btn-danger btnsmall removerow" value="remove"
                                                                data-id="0">
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                                <div class="container">
                                                    <td style="display: none">
                                                        <input class="form-control all_sum" name="Labsum" type="number"
                                                            id="sumcv" placeholder="Total CV Ammount" value="{{$dat->Labsum}}">
                                                    </td>
                                                </div>

                                            </table>
                                        </div>
                                    </div>
                                </legend>
                                <fieldset class="required form-label">MDCN</fieldset>
                                <legend class="form-control">
                                    <div class="container">
                                        <div class="row">
                                            <table class="table table-bordered" id="tbl_posts-1" style="margin-top: 30px;
                                                                            ">

                                                <thead>
                                                    <tr>
                                                        <th class="required">Select MDCN</th>
                                                        <th class="required">Quantity(MDCN)</th>
                                                        <th class="required">MDCN Price</th>
                                                        <th style="display: none"><input id="addrow-1"
                                                                class="btn btn-primary btnsmall text-right"
                                                                value="Add Row"></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbl_posts_body">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">

                                                        </div>
                                                    </div>
                                                    @php
                                                    $buss = explode(',', $dat->mdcn_id);
                                                @endphp
                                                @foreach ( $buss as $key=>$da)
                                                    <tr id="row-{{$key}}">
                                                        <td>
                                                            <!--begin::Input group-->
                                                            <div class="form-floating input-group input-group-solid mb-5">
                                                                <select class="form-select mdcn" name="mdcn[]" id="mdcn-{{$key}}"
                                                                    aria-label="Floating label select example">
                                                                    <option value="{{$da}}" selected>{{App\Models\madicenes::getLabNameById($da)}}</option>
                                                                    @foreach ($madicenes as $vall)
                                                                    @if($da != $vall->madi_id)
                                                                        <option value="{{ $vall->madi_id }}">
                                                                            {{ $vall->madi_name }}
                                                                        </option>
                                                                    @endif
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
                                                                @php
                                                                  $mdcn_Quantity= explode(',', $dat->mdcn_Quantity);
                                                                 @endphp
                                                                <input type="number" name="mdcn_Quantity[]"
                                                                    id="mdcn_discount-0" class="form-control mdcn_discount"
                                                                    aria-label="Amount (to the nearest dollar)" value="{{$mdcn_Quantity[$key]}}"
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
                                                                @php
                                                                $MDCN_Price= explode(',', $dat->MDCN_Price);
                                                               @endphp
                                                                <input type="number" name="MDCN_Price[]" id="MDCN_Price-{{$key}}"
                                                                    class="form-control MDCN_Price"
                                                                    aria-label="Amount (to the nearest dollar)" value="{{$MDCN_Price[$key]}}"
                                                                    min="0" />
                                                                <span class="input-group-text">.00</span>
                                                                <span class="text-danger">
                                                                    @error('MDCN_Price')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td style="display: none"><input class="btn btn-danger btnsmall removerow-Mdcn"
                                                                value="remove" data-id="0">
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                                <div class="container">
                                                    <td style="display: none">
                                                        <input class="form-control all_sum" name="Mdcnammount" type="number"
                                                            id="sumcv-Mdcn" placeholder="Total CV Ammount" value="{{$dat->Mdcnammount}}">
                                                    </td>

                                                </div>

                                            </table>
                                        </div>
                                    </div>
                                </legend>

                                <div class="form-group row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleFormControlInput1"class="required form-label">Discount</label>
                                        <div class="input-group input-group-solid mb-5">
                                            <input type="text" name="discount" class="form-control all_sum" id="discount"
                                                aria-label="Amount (to the nearest dollar)"
                                                value="{{$dat->discount}}" />
                                            <span class="text-danger">
                                                @error('procedure')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleFormControlInput1"class="required form-label">Total Amount</label>
                                        <div class="input-group input-group-solid mb-5">
                                            <input type="text" name="total" class="form-control total"
                                                aria-label="Amount (to the nearest dollar)"
                                                value="{{$dat->total}}" />
                                            <span class="text-danger">
                                                @error('procedure')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 mt-8">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                @endforeach
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
            var arrayFromPHP = <?php echo json_encode($madicenes); ?>;

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
                total1 = lab = parseFloat($('#sumcv').val()) + parseFloat($('#sumcv-Mdcn').val());
                $('#total_bill').val(lab);
                console.log(lab);

            });

            $(document).on('keyup', '#total_discount', function() {
                disk = $(this).val();
                console.log(disk, 'and', total1);
                t = (total1 / 100) * disk;
                t1 = lab - t;
                console.log(t1);
                $('#total_bill').val(t1);
            });
            $(document).on("change","#dr_name",function(){
                dr_id=$(this).val();
                doctorDropdown(dr_id);

            });
            let dr_fee ;
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
                        // console.log(dr_fee);
                    },
                    error: function(response) {
                        console.log(response);
                        alert("Error: ");
                    }
                });
            };
            $(document).on('keyup','.all_sum,.mdcn_discount,.Lab_discount',function(){
                drFee=parseFloat(dr_fee);
                sumcv=parseFloat($('#sumcv').val());
                sumcvMdcn=parseFloat($('#sumcv-Mdcn').val());
                sumall=drFee+sumcv+sumcvMdcn;
                console.log(sumall);
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
                           let discount_c=(total_amunt*discount)/100;
                           let resultes=total_amunt-discount_c;
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
