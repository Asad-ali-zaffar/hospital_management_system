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
                                <fieldset class="form-label">{{ $titel }}</fieldset>
                                <legend class="form-control form-control-solid">
                                    <div class="row">
                                        <table class="table table-bordered" id="tbl_postses" style="margin-top: 30px;">
                                            <thead>
                                                <tr>
                                                    <th class="required"> Name</th>
                                                    <th class="required"> Share</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                    </div>
                                                </div>
                                                <tr id="rows">
                                                    <td>
                                                        <div class="form-floating input-group  mb-5">
                                                            <input type="text" name="name" class="form-control "
                                                                id="Lab_discount"
                                                                value="{{ is_null($procedure->procedures_name) ? old('name') : $procedure->procedures_name }}" />
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
                                                            <input type="text" name="share"
                                                                class="form-control"
                                                                 value="{{ is_null($procedure->share) ? old('share') : $procedure->share }}"  />
                                                            <span class="input-group-text">00</span>
                                                        </div>
                                                        <span class="text-danger">
                                                            @error('share')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
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
@endsection
