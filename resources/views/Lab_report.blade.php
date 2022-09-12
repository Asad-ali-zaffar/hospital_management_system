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

                                        <div class="form-group col-md-6">
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
                                        <div class="form-group col-md-6">
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
        $(document).on("change", "#To", function() {
                fromdate = $('#from').val();
                ToDate = $('#To').val();
                Report = report(fromdate, ToDate);
                console.log(Report);
            });
            function report(fromdate, ToDate) {

                $.ajax({
                    url: '/report',
                    method: 'get',
                    data: {
                        fromdate: fromdate,
                        ToDate:ToDate
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
            // $(document).on("keyup", "#share", function() {

            // });\

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
