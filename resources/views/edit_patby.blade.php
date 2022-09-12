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
                                @foreach ($PatReferedBy as $val)
                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="required form-label">Name</label>
                                        <div class="form-floating input-group input-group-solid mb-5">
                                            <input type="text" name="name" class="form-control" aria-label="Name" value="{{$val->name}}" />
                                        </div>
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>
                                <label for="exampleFormControlInput1" class="required form-label">Percentage</label>
                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text">Rs</span>
                                    <input type="number" name="persentage" class="form-control" aria-label="Amount (to the nearest Rs)" value="{{$val->persentage}}" />
                                    <span class="input-group-text">.%</span>
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
