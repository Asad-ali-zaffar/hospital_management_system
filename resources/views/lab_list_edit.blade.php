@extends('main_body')
@section('main_section')
    <!-- row -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="{{$url}}" method="post">
                                @csrf
                                @foreach ($Lab_list as $value)


                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="required form-label">Test Name</label>
                                        <div class="form-floating input-group input-group-solid mb-5">
                                            <select class="form-select lab-dropdown" id="lab-dropdown-0"
                                                name="lb_Test_name"
                                                aria-label="Floating label select example">
                                                <option value="{{ $value->lab_no }}" selected>{{  App\Models\Lab_list::getLabNameById($value->lab_no) }}</option>
                                                @foreach ($Labes as $val)
                                                @if($value->lab_no !=  $val->lab_id)
                                                    <option value="{{ $val->lab_id }}">
                                                        {{ $val->Lab_name }}
                                                    </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="text-danger">
                                            @error('lb_Test_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>
                                <!--begin::Input group-->
                                <label for="exampleFormControlInput1" class="required form-label">Test Price</label>
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text">Rs</span>
                                    <input type="number" name="lb_test_price" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{$value->lb_test_price}}" />
                                    <span class="input-group-text">.00</span>
                                    <span class="text-danger">
                                        @error('lb_test_price')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <label for="basic-url" class="required form-label">Lab number</label>


                                    <div class="input-group input-group-solid mb-5">
                                        <span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                        <input type="number" name="lab_no" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{$value->lb_phone_number}}" min="0" maxlength="11" />
                                        <span class="input-group-text"></span>
                                        <span class="text-danger">
                                            @error('lab_no')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <label for="exampleFormControlInput1" class="required form-label">Date</label>
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text "> <i class="fa fa-calculator" aria-hidden="true"></i> </span>
                                    <input type="date" name="lb_date" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{$value->lb_date}}" />
                                    <span class="input-group-text">00-00-0000</span>
                                    <span class="text-danger">
                                        @error('lb_date')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <label for="exampleFormControlInput1" class="required form-label">Date&Time (Blood sample colecte)</label>
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text "><i class="fa fa-clock" aria-hidden="true"></i></span>
                                    <input type="datetime-local" name="d_t_blood_sample_colecte" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{$value->d_t_blood_sample_colecte}}" />
                                    <span class="input-group-text">00-00-0000</span>
                                    <span class="text-danger">
                                        @error('d_t_blood_sample_colecte')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <label for="exampleFormControlInput1" class="required form-label">Date&Time (Reporting of test results)</label>
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text "><i class="fa fa-clock" aria-hidden="true"></i></span>
                                    <input type="datetime-local" name="d_t_reporting_of_test_results" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{$value->d_t_reporting_of_test_results}}" />
                                    <span class="input-group-text">00-00-0000</span>
                                    <span class="text-danger">
                                        @error('d_t_reporting_of_test_results')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
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

<script>
        $(document).on("change", ".lab-dropdown", function() {
            vari=0;
            let lab_id = $(this).val();
            vari = programsDropdown(lab_id);
           console.log(vari);
        });
        function programsDropdown(lab_id) {
                   // console.log(lab_id);
                   $.ajax({
                       url: '/mdcn-dropdown',
                       method: 'get',
                       data: {
                           lab_id: lab_id
                       },

                       success: function(response) {
                           $('[name="lb_test_price"]').val(response.price);
                           lab_price = response.price;
                           return lab_price;
                       },
                       error: function(response) {
                           console.log(response);
                           alert("Error: ");
                       }
                   });

               };
   </script>

@endsection
