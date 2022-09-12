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
                                    <label for="exampleFormControlInput1" class="required form-label">Test Name</label>
                                    <input type="text" name="Lab_name" class="form-control form-control-solid" value="{{old('Lab_name')}}"
                                        placeholder="Enter Lab Name" />
                                        <span class="text-danger">
                                            @error('Lab_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>
                                <!--begin::Input group-->
                                <label for="exampleFormControlInput1" class="required form-label">Test Price(Private)</label>
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text">Rs</span>
                                    <input type="number" name="Lab_priceP" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{old('Lab_price')}}" />
                                    <span class="input-group-text">.00</span>
                                    <span class="text-danger">
                                        @error('Lab_price')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <label for="exampleFormControlInput1" class="required form-label">Test Price(Sehat Card)</label>
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text">Rs</span>
                                    <input type="number" name="Lab_priceS" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{old('Lab_price')}}" />
                                    <span class="input-group-text">.00</span>
                                    <span class="text-danger">
                                        @error('Lab_price')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <label for="basic-url" class="required form-label">Lab Address/Location</label>
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text" id="basic-addon3">Location</span>
                                    <input type="text" class="form-control" name="Lab_location" id="basic-location"
                                        aria-describedby="basic-addon3" value="{{old('Lab_location')}}" />
                                        <span class="text-danger">
                                            @error('Lab_location')
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
@endsection
