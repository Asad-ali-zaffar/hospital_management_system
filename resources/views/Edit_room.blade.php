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
                                @foreach ($roomes as $val)
                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="required form-label">Name</label>
                                        <div class="form-floating input-group input-group-solid mb-5">
                                            <select class="form-select lab-dropdown" id="lab-dropdown-0"
                                                name="room_name"
                                                aria-label="Floating label select example">
                                                <option value="{{$val->room_name}}" selected>{{$val->room_name}}</option>
                                                <option value="PRIVATE" >PRIVATE</option>
                                                <option value="SEHAT_CARD" >SEHAT CARD</option>
                                            </select>
                                        </div>
                                        <span class="text-danger">
                                            @error('room_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>
                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="required form-label">Room Type</label>
                                        <div class="form-floating input-group input-group-solid mb-5">
                                            <select class="form-select lab-dropdown" id="lab-dropdown-0"
                                                name="room_type"
                                                aria-label="Floating label select example">
                                                <option value="{{$val->room_type}}" selected>{{$val->room_type}}</option>
                                                <option value="Ac" >Ac</option>
                                                <option value="Non Ac" >Non Ac</option>
                                            </select>
                                        </div>
                                        <span class="text-danger">
                                            @error('room_type')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>
                                <!--begin::Input group-->
                                <label for="exampleFormControlInput1" class="required form-label">Room Price</label>
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text">Rs</span>
                                    <input type="number" name="room_Price" class="form-control" aria-label="Amount (to the nearest Rs)" value="{{$val->room_Price}}" />
                                    <span class="input-group-text">.00</span>
                                    <span class="text-danger">
                                        @error('room_Price')
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
