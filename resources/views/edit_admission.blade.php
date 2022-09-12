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
                                @foreach ($data as $val)
                                    <fieldset class="required form-label">Patient Basic Detail</fieldset>
                                    <legend class="form-control">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="exampleFormControlInput1" class="required form-label">Patient
                                                    Name</label>
                                                <div class="form-floating input-group input-group-solid mb-5">
                                                    <input type="text" name="Patient_Name" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)"
                                                        value="{{ $val->Patient_Name }}" />

                                                </div>
                                                <span class="text-danger">
                                                    @error('Patient_Name')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleFormControlInput1" class="required form-label">Son
                                                    of/Doter
                                                    of</label>
                                                <div class="form-floating input-group input-group-solid mb-5">
                                                    <input type="text" name="Son_of_Do_of" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)"
                                                        value="{{ $val->Son_of_Do_of }}" />

                                                </div>
                                                <span class="text-danger">
                                                    @error('Son_of_Do_of')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleFormControlInput1"
                                                    class="required form-label">Gender</label>
                                                <div class="form-check form-check-custom form-check-solid">
                                                    @if ($val->gender == 'm')
                                                        <input class="form-check-input" name="gender" type="radio" value="m"
                                                            checked id="Male" />
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
                                                    @elseif ($val->gender == 'f')
                                                        <input class="form-check-input" name="gender" type="radio" value="m"
                                                            id="Male" />
                                                        <label class="form-check-label" for="Male">
                                                            Male
                                                        </label>
                                                        &nbsp;&nbsp;
                                                        <input class="form-check-input" name="gender" type="radio" value="f"
                                                            checked id="Female" />
                                                        <label class="form-check-label" for="Female">
                                                            Female
                                                        </label>
                                                        &nbsp;&nbsp;
                                                        <input class="form-check-input" name="gender" type="radio" value="o"
                                                            id="Other" />
                                                        <label class="form-check-label" for="Other">
                                                            Other
                                                        </label>
                                                    @else
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
                                                            checked id="Other" />
                                                        <label class="form-check-label" for="Other">
                                                            Other
                                                        </label>
                                                    @endif
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
                                                        value="{{ $val->pat_mobile_no }}" min="0" maxlength="11" />
                                                    <span class="input-group-text"></span>
                                                </div>
                                                <span class="text-danger">
                                                    @error('pat_mobile_no')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                                <!--end::Input group-->
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="basic-url" class="required form-label">Patient cnic no</label>
                                                <div class="input-group input-group-solid mb-5">
                                                    <span class="input-group-text fa fa-id-card"></span>
                                                    <input type="number" name="cnic_pat" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)"
                                                        value="{{ $val->cnic_pat }}" min="0" maxlength="11" />
                                                    <span class="input-group-text"></span>
                                                </div>
                                                <span class="text-danger">
                                                    @error('cnic_pat')
                                                        {{ $message }}
                                                    @enderror
                                                </span>

                                                <!--end::Input group-->
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleFormControlInput1" class="required form-label">Husband
                                                    Name</label>
                                                <div class="form-floating input-group input-group-solid mb-5">

                                                    <input type="text" name="husband_name" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)"
                                                        value="{{ $val->husband_name }}" />

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
                                                        value="{{ $val->husband_mobile_no }}" min="0" maxlength="11" />
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
                                                        value="{{ $val->husband_cnic }}" min="0" maxlength="11" />
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
                                                <label for="exampleFormControlInput1"
                                                    class="required form-label">Date</label>
                                                <div class="input-group input-group-solid mb-5">
                                                    <span class="input-group-text "> <i class="fa fa-calculator"
                                                            aria-hidden="true"></i> </span>
                                                    <input type="date" name="date" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)"
                                                        value="{{ $val->date }}" />
                                                    {{-- <span class="input-group-text">00-00-0000</span> --}}

                                                </div>
                                                <span class="text-danger">
                                                    @error('date')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleFormControlInput1" class="required form-label">Time
                                                </label>
                                                <div class="input-group input-group-solid mb-5">
                                                    <span class="input-group-text "><i class="fa fa-clock"
                                                            aria-hidden="true"></i></span>
                                                    <input type="Time" name="time" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)"
                                                        value="{{ $val->time }}" />
                                                    {{-- <span class="input-group-text">00-00-0000</span> --}}

                                                </div>
                                                <span class="text-danger">
                                                    @error('time')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <!--begin::Input group-->
                                                <label for="exampleFormControlInput1" class="required form-label">Mr
                                                    no</label>
                                                <div class="input-group input-group-solid mb-5">
                                                    <span class="input-group-text">Rs</span>
                                                    <input type="number" name="mr_no" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)"
                                                        value="{{ $val->mr_no }}" />
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
                                                        value="{{ $val->visit_no }}" min="0" maxlength="11" />
                                                </div>
                                                <span class="text-danger">
                                                    @error('visit_no')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                                <!--end::Input group-->
                                            </div>
                                        </div>
                                    </legend>
                                    <fieldset class="required form-label">Other Information</fieldset>
                                    <legend class="form-control">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="exampleFormControlInput1"
                                                    class="required form-label">IN/OUT(Date&Time)</label>
                                                <div class="input-group input-group-solid mb-5">
                                                    <span class="input-group-text "><i class="fa fa-clock"
                                                            aria-hidden="true"></i></span>
                                                    <input type="datetime-local" name="IN_OUT" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)"
                                                        value="{{ $val->IN_OUT }}" />
                                                    {{-- <span class="input-group-text">00-00-0000</span> --}}
                                                </div>
                                                <span class="text-danger">
                                                    @error('IN_OUT')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleFormControlInput1" class="required form-label">DISCHARGE
                                                    (Date&Time)
                                                </label>
                                                <div class="input-group input-group-solid mb-5">
                                                    <span class="input-group-text "><i class="fa fa-clock"
                                                            aria-hidden="true"></i></span>
                                                    <input type="datetime-local" name="DISCHARGE_DATE"
                                                        class="form-control" aria-label="Amount (to the nearest dollar)"
                                                        value="{{ $val->DISCHARGE_DATE }}" />
                                                    {{-- <span class="input-group-text">00-00-0000</span> --}}
                                                </div>
                                                <span class="text-danger">
                                                    @error('DISCHARGE_DATE')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleFormControlInput1" class="required form-label">CASE
                                                    TYPE</label>
                                                <div class="form-check form-check-custom form-check-solid">
                                                    @if ($val->CASE_TYPE == 'surgical')
                                                        <input class="form-check-input" name="CASE_TYPE" type="radio"
                                                            value="Surgical" id="Surgical" checked />
                                                        <label class="form-check-label" for="Surgical">
                                                            Surgical
                                                        </label>
                                                        &nbsp;&nbsp;
                                                        <input class="form-check-input" name="CASE_TYPE" type="radio"
                                                            value="non surgical" id="non_surgical" />
                                                        <label class="form-check-label" for="non_surgical">
                                                            non surgical
                                                        </label>
                                                    @else
                                                        <input class="form-check-input" name="CASE_TYPE" type="radio"
                                                            value="Surgical" id="Surgical" />
                                                        <label class="form-check-label" for="Surgical">
                                                            Surgical
                                                        </label>
                                                        &nbsp;&nbsp;
                                                        <input class="form-check-input" name="CASE_TYPE" type="radio"
                                                            value="non surgical" id="non_surgical" checked />
                                                        <label class="form-check-label" for="non_surgical">
                                                            non surgical
                                                        </label>
                                                    @endif
                                                </div>
                                                <span class="text-danger">
                                                    @error('CASE_TYPE')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleFormControlInput1" class="required form-label">Doctor
                                                    Name</label>
                                                <div class="form-floating input-group input-group-solid mb-5">
                                                    <select class="form-select" id="dr_dropdown" name="lb_Test_name"
                                                        aria-label="Floating label select example">
                                                        <option value="{{ $val->dr_name }}" selected>
                                                            {{ App\Models\Doctores::getDoctoresById($val->dr_name) }}
                                                        </option>
                                                        @foreach ($doctor as $vall)
                                                            @if ($val->dr_name != $vall->doctor_id)
                                                                <option value="{{ $vall->doctor_id }}">
                                                                    {{ $vall->name }}
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
                                                    <input type="number" name="dr_fee" class="form-control all_sum"
                                                        id="dr_fee" aria-label="Amount (to the nearest dollar)"
                                                        value="{{ $val->dr_fee }}" />
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
                                                    <select class="form-select" id="Type_Department"
                                                        name="Type_Department" aria-label="Floating label select example">
                                                        <option value="{{ $val->Type_Department }}" selected>
                                                            {{ $val->Type_Department }}</option>
                                                        @if ($val->Type_Department == 'Orthopadic')
                                                            <option value="ENT">ENT</option>
                                                            <option value="uorolgy">Uorolgy</option>
                                                            <option value="gynaecology">Gynaecology</option>
                                                            <option value="General Surgery">General Surgery</option>
                                                            <option value="Medical Case">Medical Case</option>
                                                        @elseif ($val->Type_Department == 'ENT')
                                                            <option value="Orthopadic">Orthopadic</option>
                                                            <option value="uorolgy">Uorolgy</option>
                                                            <option value="gynaecology">Gynaecology</option>
                                                            <option value="General Surgery">General Surgery</option>
                                                            <option value="Medical Case">Medical Case</option>
                                                        @elseif ($val->Type_Department == 'uorolgy')
                                                            <option value="Orthopadic">Orthopadic</option>
                                                            <option value="ENT">ENT</option>
                                                            <option value="gynaecology">Gynaecology</option>
                                                            <option value="General Surgery">General Surgery</option>
                                                            <option value="Medical Case">Medical Case</option>
                                                        @elseif ($val->Type_Department == 'gynaecology')
                                                            <option value="Orthopadic">Orthopadic</option>
                                                            <option value="ENT">ENT</option>
                                                            <option value="uorolgy">Uorolgy</option>
                                                            <option value="General Surgery">General Surgery</option>
                                                            <option value="Medical Case">Medical Case</option>
                                                        @elseif ($val->Type_Department == 'General Surgery')
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
                                            <div class="form-group col-md-4">
                                                <label for="exampleFormControlInput1" class="required form-label">Patient
                                                    Refered by</label>
                                                <div class="form-floating input-group input-group-solid mb-5">
                                                    <select class="form-select " id="PAT_REFERED_BY"
                                                        name="PAT_REFERED_BY" aria-label="Floating label select example">
                                                        <option value="{{ $val->PAT_REFERED_BY }}" selected>
                                                            {{ App\Models\PatReferedBy::getPatReferedById($val->PAT_REFERED_BY) }}
                                                        </option>
                                                        @foreach ($PatReferedBy as $vall)
                                                            @if ($val->PAT_REFERED_BY != $vall->pat_id)
                                                                <option value="{{ $vall->pat_id }}">{{ $vall->name }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <span class="text-danger">
                                                    @error('PAT_REFERED_BY')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleFormControlInput1" class="required form-label">Procedure
                                                    (operation type)</label>
                                                <div class="form-floating input-group input-group-solid mb-5">
                                                    <select class="form-select " id="procedure" name="procedure"
                                                        aria-label="Floating label select example">
                                                        <option value="{{ $val->id }}" selected>
                                                            {{ $val->procedures_name }}</option>

                                                        @foreach ($procedure as $vall)
                                                            @if ($vall->id != $val->id)
                                                                <option value="{{ $vall->id }}">
                                                                    {{ $vall->procedures_name }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <span class="text-danger">
                                                    @error('procedure')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleFormControlInput1" class="required form-label">Treatment
                                                    (PRIVATE/SEHAT CARD)</label>
                                                <div class="form-floating input-group input-group-solid mb-5">
                                                    <select class="form-select " id="PRIVATE/SEHAT_CARD"
                                                        name="PRIVATE_SEHAT_CARD"
                                                        aria-label="Floating label select example">
                                                        <option value="{{ $val->PRIVATE_SEHAT_CARD }}" selected>
                                                            {{ App\Models\Roomes::getRoomById($val->PRIVATE_SEHAT_CARD) }}
                                                        </option>
                                                        @foreach ($Roomes as $vall)
                                                            @if ($val->PRIVATE_SEHAT_CARD != $vall->room_id)
                                                                <option value="{{ $vall->room_id }}">
                                                                    {{ $vall->room_name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <span class="text-danger">
                                                    @error('PAT_REFERED_BY')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleFormControlInput1" class="required form-label">ROOM TYPE
                                                </label>

                                                <div class="form-check form-check-custom form-check-solid">
                                                    @if ($val->ROOM_TYPE == 'Ac')
                                                        <input class="form-check-input" name="ROOM_TYPE" type="radio"
                                                            value="Ac" checked id="Ac" />
                                                        <label class="form-check-label" for="Ac">
                                                            Ac
                                                        </label>
                                                        &nbsp;&nbsp;
                                                        <input class="form-check-input" name="ROOM_TYPE" type="radio"
                                                            value="Non Ac" id="Non_Ac" />
                                                        <label class="form-check-label" for="Non_Ac">
                                                            Non Ac
                                                        </label>
                                                    @else
                                                        <input class="form-check-input" name="ROOM_TYPE" type="radio"
                                                            value="Ac" id="Ac" />
                                                        <label class="form-check-label" for="Ac">
                                                            Ac
                                                        </label>
                                                        &nbsp;&nbsp;
                                                        <input class="form-check-input" name="ROOM_TYPE" type="radio"
                                                            checked value="Non Ac" id="Non_Ac" />
                                                        <label class="form-check-label" for="Non_Ac">
                                                            Non Ac
                                                        </label>
                                                    @endif
                                                </div>

                                                <span class="text-danger">
                                                    @error('ROOM_TYPE')
                                                        {{ $message }}
                                                    @enderror
                                                </span>

                                            </div>
                                            <div class="form-group col-md-4">
                                                <!--begin::Input group-->
                                                <label for="exampleFormControlInput1" class="required form-label">ROOM
                                                    CHARGES</label>
                                                <div class="input-group input-group-solid mb-5">
                                                    <span class="input-group-text">Rs</span>
                                                    <input type="number" name="ROOM_CHARGES" class="form-control all_sum"
                                                        aria-label="Amount (to the nearest dollar)"
                                                        value="{{ $val->ROOM_CHARGES }}" />
                                                    <span class="input-group-text">.00</span>
                                                    <span class="text-danger">
                                                        @error('ROOM_CHARGES')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="basic-url" class="required form-label">OP charges</label>
                                                <div class="input-group input-group-solid mb-5">
                                                    <input type="number" name="OPD_INCLUDE" class="form-control all_sum"
                                                        aria-label="Amount (to the nearest dollar)"
                                                        value="{{ $val->OPD_INCLUDE }}" />
                                                    <span class="text-danger">
                                                        @error('OPD_INCLUDE')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>

                                                <!--end::Input group-->
                                            </div>
                                            <div class="form-group col-md-4">
                                                <!--begin::Input group-->
                                                {{-- <label for="exampleFormControlInput1"class="required form-label">Procedure</label> --}}
                                                <label for="exampleFormControlInput1"
                                                    class="required form-label">Generator/UPS charges</label>
                                                <div class="input-group input-group-solid mb-5">
                                                    {{-- <span class="input-group-text "> <i class="fa fa-calculator" aria-hidden="true"></i>
                                            </span> --}}
                                                    <input type="text" name="UPS_charges" class="form-control all_sum"
                                                        aria-label="Amount (to the nearest dollar)"
                                                        value="{{ $val->UPS_charges }}" />
                                                    {{-- <span class="input-group-text">00-00-0000</span> --}}
                                                    <span class="text-danger">
                                                        @error('UPS_charges')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </legend>
                                    <fieldset class="required form-label">Labes</fieldset>
                                    <legend class="form-control">
                                        <div class="container">
                                            <div class="row">
                                                <table class="table table-bordered" id="tbl_postses"
                                                    style="margin-top: 30px;">
                                                    <thead>
                                                        <tr>
                                                            <th class="required">Select Lab Test</th>
                                                            <th class="required">Quantity(Lab test)</th>
                                                            <th class="required">Lab Test Price</th>
                                                            <th style="display: none"><input id="addrows"
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
                                                            $buss = explode(',', $val->lab_id);
                                                        @endphp
                                                        @foreach ($buss as $key => $data)
                                                            <tr id="rows-{{ $key }}">
                                                                <td>
                                                                    <!--begin::Input group-->
                                                                    <div
                                                                        class="form-floating input-group input-group-solid mb-5">
                                                                        <select class="form-select lab-dropdown"
                                                                            id="lab-dropdown-{{ $key }}"
                                                                            name="business[]"
                                                                            aria-label="Floating label select example">
                                                                            <option value="{{ $data }}" selected>
                                                                                {{ App\Models\WalkingTestMdcn::getLabNameById($data) }}
                                                                            </option>
                                                                            @foreach ($Labes as $vall)
                                                                                @if ($data != $vall->lab_id)
                                                                                    <option value="{{ $vall->lab_id }}">
                                                                                        {{ $vall->Lab_name }}
                                                                                    </option>
                                                                                @endif
                                                                            @endforeach

                                                                        </select>
                                                                        <label for="floatingSelect">Works with
                                                                            selects</label>
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
                                                                            $Lab_Quantity = explode(',', $val->Lab_Quantity);
                                                                        @endphp
                                                                        <input type="number" name="Lab_Quantity[]"
                                                                            class="form-control Lab_discount"
                                                                            aria-label="Amount (to the nearest dollar)"
                                                                            id="Lab_discount-{{$key}}"
                                                                            value="{{ $Lab_Quantity[$key] }}" min="0" />
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
                                                                            $Lab_Price = explode(',', $val->Lab_Price);
                                                                        @endphp
                                                                        <input type="number" name="Lab_Price[]"
                                                                            class="form-control Lab_Price"
                                                                            aria-label="Amount (to the nearest dollar)"
                                                                            value="{{ $Lab_Price[$key] }}" min="0"
                                                                            id="lab_prices-{{$key}}" />
                                                                        <span class="input-group-text">.00</span>
                                                                        <span class="text-danger">
                                                                            @error('Lab_price')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td style="display: none"><input
                                                                        class="btn btn-danger btnsmall removerow"
                                                                        value="remove" data-id="0">
                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                    </tbody>
                                                    <div class="container">
                                                        <td style="display: none">
                                                            <input class="form-control all_sum" name="Labsum" type="number"
                                                                id="sumcv" placeholder="Total CV Ammount"
                                                                value="{{ $val->Labsum }}">
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
                                                            $buss = explode(',', $val->madi_id);
                                                        @endphp
                                                        @foreach ($buss as $key => $data)
                                                            <tr id="row-{{ $key }}">
                                                                <td>
                                                                    <!--begin::Input group-->
                                                                    <div
                                                                        class="form-floating input-group input-group-solid mb-5">
                                                                        <select class="form-select mdcn" name="mdcn[]"
                                                                            id="mdcn-{{ $key }}"
                                                                            aria-label="Floating label select example">
                                                                            <option value="{{ $data }}" selected>
                                                                                {{ App\Models\madicenes::getLabNameById($data) }}
                                                                            </option>
                                                                            @foreach ($madicenes as $vall)
                                                                                @if ($data != $vall->madi_id)
                                                                                    <option value="{{ $vall->madi_id }}">
                                                                                        {{ $vall->madi_name }}
                                                                                    </option>
                                                                                @endif
                                                                            @endforeach
                                                                        </select>
                                                                        <label for="floatingSelect">Works with
                                                                            selects</label>
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
                                                                            $mdcn_Quantity = explode(',', $val->mdcn_Quantity);
                                                                        @endphp
                                                                        <input type="number" name="mdcn_Quantity[]"
                                                                            id="mdcn_discount-{{$key}}"
                                                                            class="form-control mdcn_discount"
                                                                            aria-label="Amount (to the nearest dollar)"
                                                                            value="{{ $mdcn_Quantity[$key] }}" min="0" />
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
                                                                            $MDCN_Price = explode(',', $val->MDCN_Price);
                                                                        @endphp
                                                                        <input type="number" name="MDCN_Price[]"
                                                                            id="MDCN_Price-{{ $key }}"
                                                                            class="form-control MDCN_Price"
                                                                            aria-label="Amount (to the nearest dollar)"
                                                                            value="{{ $MDCN_Price[$key] }}" min="0" />
                                                                        <span class="input-group-text">.00</span>
                                                                        <span class="text-danger">
                                                                            @error('MDCN_Price')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td style="display: none"><input
                                                                        class="btn btn-danger btnsmall removerow-Mdcn"
                                                                        value="remove" data-id="0">
                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                    </tbody>
                                                    <div class="container">
                                                        <td style="display: none">
                                                            <input class="form-control all_sum" name="Mdcnammount"
                                                                type="number" id="sumcv-Mdcn" placeholder="Total CV Ammount"
                                                                value="{{ $val->Mdcnammount }}">
                                                        </td>

                                                    </div>

                                                </table>
                                            </div>
                                        </div>
                                    </legend>

                                    <div class="form-group row">
                                        <div class="form-group col-md-4">
                                            <!--begin::Input group-->
                                            {{-- <label for="exampleFormControlInput1"class="required form-label">Procedure</label> --}}
                                            <label for="exampleFormControlInput1" class="required form-label">Total
                                                Amount</label>
                                            <div class="input-group input-group-solid mb-5">
                                                {{-- <span class="input-group-text "> <i class="fa fa-calculator" aria-hidden="true"></i>
                                        </span> --}}
                                                <input type="text" name="total" class="form-control total"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ $val->total }}" />
                                                {{-- <span class="input-group-text">00-00-0000</span> --}}
                                                <span class="text-danger">
                                                    @error('procedure')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-8 ml-auto"> --}}
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
            $(document).on("change", "#PRIVATE_SEHAT_CARD", function() {

                Treatment = $(this).val();
                dr_dropdown = $('#dr_dropdown').val();
                drFeeDropdown(Treatment, dr_dropdown);
            });
            $(document).on("change", ".mdcn", function() {
                mdcn_id = $(this).val();
                curent_id = $(this).attr('id');
                Treatment = $('#PRIVATE_SEHAT_CARD').val();
                dr_dropdown = $('#dr_dropdown').val();
                curent_id = curent_id.replace("mdcn-", "");
                mdcn_vari = mdcnDropdown(mdcn_id, curent_id, Treatment, dr_dropdown);
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

            function drFeeDropdown(Treatment, dr_dropdown) {
                $.ajax({
                    url: '/dr-dropdown',
                    method: 'get',
                    data: {
                        Treatment: Treatment,
                        dr_dropdown: dr_dropdown
                    },

                    success: function(response) {
                        $('#dr_fee').val(response.dr_fee);

                    },
                    error: function(response) {
                        console.log(response);
                        alert("Error: ");
                    }
                });
            };

            function mdcnDropdown(mdcn_id, curent_id, Treatment, dr_dropdown) {
                $.ajax({
                    url: '/madcn-dropdown',
                    method: 'get',
                    data: {
                        mdcn_id: mdcn_id,
                        Treatment: Treatment,
                        dr_dropdown: dr_dropdown
                    },

                    success: function(response) {
                        $('#MDCN_Price-' + curent_id).val(response.price);
                        // alert(response.price);
                        MDCN_Price = response.price;
                        $('#dr_fee').val(response.dr_fee);
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
                Treatment = $('#PRIVATE_SEHAT_CARD').val();
                dr_dropdown = $('#dr_dropdown').val();
                curent_id = $(this).attr('id');
                curent_id = curent_id.replace("lab-dropdown-", "");
                let vari = programsDropdown(lab_id, curent_id, Treatment, dr_dropdown);
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


            function programsDropdown(lab_id, curent_id, Treatment) {
                // console.log(lab_id);
                $.ajax({
                    url: '/mdcn-dropdown',
                    method: 'get',
                    data: {
                        lab_id: lab_id,
                        Treatment: Treatment,
                        dr_dropdown: dr_dropdown
                    },

                    success: function(response) {
                        $("#lab_prices-" + curent_id).val(response.price);
                        lab_price = response.price;
                        $('#dr_fee').val(response.dr_fee);
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

            $(document).on('keyup', '.all_sum,.mdcn_discount,.Lab_discount', function() {
                drFee = parseFloat($('#dr_fee').val());
                roomcharges = parseFloat($('[name="ROOM_CHARGES"]').val());
                op = parseFloat($('[name="OPD_INCLUDE"]').val());
                ups = parseFloat($('[name="UPS_charges"]').val());
                sumcv = parseFloat($('#sumcv').val());
                sumcvMdcn = parseFloat($('#sumcv-Mdcn').val());
                sumall = drFee + roomcharges + op + ups + sumcv + sumcvMdcn;
                console.log(sumall);
                $('.total').val(sumall);
            });

        });
    </script>
@endsection
