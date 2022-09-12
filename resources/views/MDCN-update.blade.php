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
                                @foreach ($mDCNes as $val)
                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="required form-label">Name</label>
                                    <input type="text" name="mdcn_name" class="form-control form-control-solid"
                                        value="{{ $val->mdcn_name }}" placeholder="Enter Lab Name" />
                                    <span class="text-danger">
                                        @error('mdcn_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <!--begin::Input group-->
                                <label for="exampleFormControlInput1" class="required form-label">SALE Price</label>
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text">Rs</span>
                                    <input type="number" name="mdcn_SALE" class="form-control"
                                        aria-label="Amount (to the nearest dollar)" value="{{ $val->mdcn_SALE }}" />
                                    <span class="input-group-text">.00</span>
                                    <span class="text-danger">
                                        @error('mdcn_SALE')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <!--begin::Input group-->
                                <label for="exampleFormControlInput1" class="required form-label">SINGLE ITEM ADD</label>
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text">NO of Item</span>
                                    <input type="number" name="mdcn_SINGLE_ITEM_ADD" class="form-control"
                                        aria-label="Amount (to the nearest dollar)" value="{{ $val->mdcn_SINGLE_ITEM_ADD }}" />
                                    <span class="input-group-text">.00</span>
                                    <span class="text-danger">
                                        @error('mdcn_SINGLE_ITEM_ADD')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                 <!--begin::Input group-->
                                 <label for="exampleFormControlInput1" class="required form-label">Dancity</label>
                                 <div class="input-group input-group-solid mb-5">
                                     <span class="input-group-text">mg/g</span>
                                     <input type="number" name="mdcn_mg_g" class="form-control"
                                         aria-label="Amount (to the nearest dollar)" value="{{ $val->mdcn_mg_g }}" />
                                     <span class="input-group-text">.00</span>
                                     <span class="text-danger">
                                         @error('mdcn_mg_g')
                                             {{ $message }}
                                         @enderror
                                     </span>
                                 </div>
                                <label for="basic-url" class="required form-label">Madicen Type/(Tablet,syrup)</label>

                                <!--begin::Input group-->
                                <div class="form-floating input-group input-group-solid mb-5">
                                    <select class="form-select" name="mdcn_type" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option value="{{$val->mdcn_type}}" selected>{{$val->mdcn_type}}</option>
                                        @if ($val->mdcn_type == "Tablet")
                                        <option value="syrup">syrup</option>
                                        @else
                                        <option value="Tablet" >Tablet</option>
                                        @endif
                                    </select>
                                    <label for="floatingSelect">Works with selects</label>
                                </div>
                                <span class="text-danger">
                                    @error('mdcn_type')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <!--end::Input group-->
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
