@extends('main_body')
@section('main_section')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="{{ $url }}" method="post">
                                @csrf
                                <fieldset class="required form-label">Lab Report</fieldset>
                                <legend class="form-control">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleFormControlInput1" class="required form-label">From</label>
                                            <div class="form-floating input-group input-group-solid mb-5">
                                                <input type="date" name="from" class="form-control " id="from"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ old('from') }}" />
                                            </div>
                                            <span class="text-danger">
                                                @error('from')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleFormControlInput1" class="required form-label">To</label>
                                            <div class="form-floating input-group input-group-solid mb-5">
                                                <input type="date" name="To" class="form-control " id="To"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ old('To') }}" />
                                            </div>
                                            <span class="text-danger">
                                                @error('To')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlInput1" class="required form-label">Test Name</label>
                                            <div class="form-floating input-group input-group-solid mb-5">
                                                <select class="form-select all_sum" id="dr_name"
                                                    name="Lab_id" aria-label="Floating label select example">
                                                    <option value="" selected>Open this select menu</option>
                                                    @foreach ($Labes as $val)
                                                        <option value="{{ $val->lab_id }}">
                                                            {{ $val->Lab_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <span class="text-danger">
                                                @error('Lab_id')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="basic-url" class="required form-label">Share</label>
                                            <div class="input-group input-group-solid mb-5">
                                                <input type="text" name="share" class="form-control " id="share"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    value="{{ old('share') }}" min="0" maxlength="11" />
                                            </div>
                                            <span class="text-danger">
                                                @error('share')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlInput1"class="required form-label">Total Amount</label>
                                             <div class="input-group input-group-solid mb-5">
                                                 <input type="text" name="total" class="form-control total"
                                                     aria-label="Amount (to the nearest dollar)"
                                                     value="0" />
                                                 <span class="text-danger">
                                                     @error('procedure')
                                                         {{ $message }}
                                                     @enderror
                                                 </span>
                                             </div>
                                         </div>
                                        <div class="form-group row">
                                            <div class="form-group col-md-4 mt-8">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>

                                </legend>

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
    $(document).ready(function() {
      var  total=0;
        $(document).on("change", "#dr_name", function() {
                fromdate = $('#from').val();
                ToDate = $('#To').val();
                lab_id = $('#dr_name').val();
                Report = report(fromdate, ToDate);
                console.log(Report);
            });
            function report(fromdate, ToDate) {

                $.ajax({
                    url: '/test-report',
                    method: 'get',
                    data: {
                        from: fromdate,
                        To:ToDate,
                        Lab_id:lab_id
                    },

                    success: function(response) {
                        $(".total").val(response.Total_Bill);
                        total = response.Total_Bill;
                        return total;
                    },
                    error: function(response) {
                        console.log(response);
                        alert("Error: ");
                    }
                });

            };

            $(document).on("keyup", "#share", function() {
                let discount = $(this).val();
                let total_amunt = $('.total').val();
                console.log(total_amunt);
                console.log(discount);
                if (discount != "") {
                    if (discount.includes("%")) {
                        console.log(discount);
                        $('#share').each(function() {
                            var t = $(this).text();
                            discount = discount.replace(/\%/, '');
                        });
                        console.log(discount);
                           let discount_c=(total*discount)/100;
                           let resultes=total-discount_c;
                            console.log(discount_c);
                            $('.total').val(resultes);
                    } else {
                        let resultes = total - discount;
                        console.log(resultes);
                        $('.total').val(resultes);
                    }

                }

            });
});
 </script>

@endsection
