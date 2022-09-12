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
                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="required form-label">Doctor Name</label>
                                        <div class="form-floating input-group input-group-solid mb-5">
                                            <input type="text" name="name" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{old('lb_test_price')}}" />

                                        </div>
                                        <span class="text-danger">
                                            @error('lb_Test_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>
                                <!--begin::Input group-->
                                <label for="exampleFormControlInput1" class="required form-label">Doctor Fee (PRIVATE)</label>
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text">Rs</span>
                                    <input type="number" name="fee_on_PRIVATE" class="form-control" aria-label="Amount (to the nearest Rs)" value="{{old('fee_on_PRIVATE')}}" />
                                    <span class="input-group-text">.00</span>
                                    <span class="text-danger">
                                        @error('fee_on_PRIVATE')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <label for="exampleFormControlInput1" class="required form-label">Doctor Fee (SEHAT CARD)</label>
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text">Rs</span>
                                    <input type="number" name="fee_on_SEHAT_CARD" class="form-control" aria-label="Amount (to the nearest Rs)" value="{{old('fee_on_SEHAT_CARD')}}" />
                                    <span class="input-group-text">.00</span>
                                    <span class="text-danger">
                                        @error('fee_on_SEHAT_CARD')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
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
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
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
   </script> --}}

@endsection
