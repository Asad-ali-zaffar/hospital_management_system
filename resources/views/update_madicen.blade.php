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
                                @foreach ($Madicenes as $val)


                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="required form-label">Madicen Name</label>
                                    <input type="text" name="madi_name" class="form-control form-control-solid" value="{{$val->madi_name}}"
                                        placeholder="Enter Lab Name" />
                                        <span class="text-danger">
                                            @error('madi_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>
                                <!--begin::Input group-->
                                <label for="exampleFormControlInput1" class="required form-label">Madicen Price(Private)</label>
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text">Rs</span>
                                    <input type="number" name="madi_priceP" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{$val->madi_priceP}}" />
                                    <span class="input-group-text">.00</span>
                                    <span class="text-danger">
                                        @error('madi_price')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <label for="exampleFormControlInput1" class="required form-label">Madicen Price(Sehat Card)</label>
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text">Rs</span>
                                    <input type="number" name="madi_priceS" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{$val->madi_priceS}}" />
                                    <span class="input-group-text">.00</span>
                                    <span class="text-danger">
                                        @error('madi_price')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <label for="basic-url" class="required form-label">Madicen Type/(Tablet,syrup)</label>

                                <!--begin::Input group-->
                                <div class="form-floating input-group input-group-solid mb-5">
                                    <select class="form-select" name="madi_type" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option value="{{$val->madi_type}}" selected>{{$val->madi_type}}</option>
                                        @if ($val->madi_type == "Tablet")
                                        <option value="syrup">syrup</option>
                                        @else
                                        <option value="Tablet" >Tablet</option>
                                        @endif
                                        {{-- <option value="syrup">syrup</option>
                                        <option value="Tablet" >Tablet</option> --}}

                                    </select>
                                    <label for="floatingSelect">Works with selects</label>
                                </div>
                                <span class="text-danger">
                                    @error('madi_type')
                                        {{ $message }}
                                    @enderror
                                </span>

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
@endsection
