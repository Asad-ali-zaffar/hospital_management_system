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
                                @foreach ($doctores as $val)
                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="required form-label">Doctor Name</label>
                                        <div class="form-floating input-group input-group-solid mb-5">
                                            <input type="text" name="name" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{$val->name}}" />

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
                                    <input type="number" name="fee_on_PRIVATE" class="form-control" aria-label="Amount (to the nearest Rs)" value="{{$val->fee_on_PRIVATE}}" />
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
                                    <input type="number" name="fee_on_SEHAT_CARD" class="form-control" aria-label="Amount (to the nearest Rs)" value="{{$val->fee_on_SEHAT_CARD}}" />
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
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
