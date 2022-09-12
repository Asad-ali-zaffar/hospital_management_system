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
                                <fieldset class="form-label">{{$titel}}</fieldset>
                                <legend class="form-control form-control-solid">

                                    <div class="row">
                                        <table class="table table-bordered" id="tbl_postses" style="margin-top: 30px;">
                                            <thead>
                                                <tr>
                                                    <th class="required">Name</th>
                                                    <th class="required">Amount</th>
                                                    <th class="required">Discription</th>
                                                    @if (is_null($Expenses->name))
                                                    <th><input id="addrows" class="btn btn-primary btnsmall text-right"
                                                        value="Add Row"></th>

                                                    @endif
                                                    </tr>
                                            </thead>

                                            @php
                                                $name = explode(',', $Expenses->name);
                                                $amount = explode(',', $Expenses->amount);
                                                $discription = explode(',', $Expenses->discription);
                                            @endphp
                                            <tbody id="tbl_posts_body">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                    </div>
                                                </div>
                                                 @foreach ($name as $key => $val)
                                                <tr id="rows-{{$key}}">
                                                    <td>
                                                        <!--begin::Input group-->
                                                        <div class="form-floating input-group  mb-5">
                                                            <input type="text" name="name[]" class="form-control " min="0"
                                                                id="Lab_discount-{{$key}}" value="{{$val}}" />
                                                        </div>
                                                        <span class="text-danger">
                                                            @error('name')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </td>


                                                    <td>
                                                        <div class="input-group  mb-5">
                                                            <span class="input-group-text ">Rs</span>
                                                            <input type="number" name="amount[]"
                                                                class="form-control Lab_discount"
                                                                 value="{{trim($amount[$key]," ")}}" id="Lab_disco-{{$key}}" />
                                                            <span class="input-group-text">00</span>
                                                            <span class="text-danger">
                                                                @error('amount')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group  mb-5">
                                                            <textarea name="discription[]" class="form-control " id="lab_prices-0" cols="30" rows="1" min="0">{{$discription[$key]}} </textarea>
                                                            <span class="text-danger">
                                                                @error('discription')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </td>
                                                    @if (is_null($Expenses->name))
                                                    <td><input class="btn btn-danger btnsmall removerow" value="remove"
                                                            data-id="{{$key}}">
                                                    </td>
                                                    @endif
                                                </tr>
                                                @endforeach

                                            </tbody>
                                            <div class="container">
                                                <td>
                                                    <input class="form-control" name="creditammount" type="number"
                                                        id="sumcv" placeholder="Total CV Ammount" value="{{$Expenses->creditammount}}">
                                                </td>

                                            </div>
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
                                </legend>
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
        $(document).ready(function() {
            var rec = ' ';
            var Rows = 0;
            let count = 0;
            $('#addrows').click(function() {
                rows_fu();

            });

            function rows_fu() {
                count++;
                var row = '<tr id="rows-' + count + '">' +
                    ' <td> <div class="form-floating input-group  mb-5">' +
                    '  <input type="text" name="name[]" class="form-control " min="0" id="Lab_discount-' +
                    count +
                    '" />' + ' </div>';

                row = row +
                    '<td><div class="input-group  mb-5">' +
                    '<span class="input-group-text">Rs</span>' +
                    '  <input type="number" name="amount[]" class="form-control Lab_discount" aria-label="Amount (to the nearest dollar)" value="0" min="0"  id="Lab_disco-' +

                    count + '"/>' +
                    '<span class="input-group-text">00</span>' +
                    '</div></td>' +
                    '<td><div class="input-group  mb-5">' +
                    '<textarea name="discription[]" class="form-control " id="lab_prices-' + count +
                    '" cols="30" rows="1" min="0"></textarea>' +
                    '</div></td>' +
                    '<td><input id="" class="btn btn-danger btnsmall removerow" value="remove" data-id="' +
                    count + '"></td>' +
                    '' +
                    '                                                </tr>';
                $("#tbl_postses").append(row);

            };

            $(document).on('keyup', '.Lab_discount ', function() {
                total = 0;
                $(".Lab_discount").each(function() {
                    total += +$(this).val();
                });
                $('#sumcv').val(total);
                console.log(total);

            });

            $(".removerow").click(function() {
                id = $('.removerow').attr("data-id");
                $('#rows-' + id).remove();
                total = 0;
                $(".Lab_discount").each(function() {
                    total += +$(this).val();
                });
                $('#sumcv').val(total);
                console.log(total);
            });
            $(document).delegate('.removerow', 'click', function(e) {
                id = $(this).attr("data-id");
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
    <!-- #/ container -->
@endsection
