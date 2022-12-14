@extends('main_body')
@section('main_section')
@if (Session::get('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif
<!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row gy-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-12">
                    <!--begin::Tables Widget 9-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">{{$title}}</span>
                                <span class="text-muted mt-1 fw-bold fs-7">Overall {{$total}} Madicenes</span>
                            </h3>
                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-trigger="hover" title="Click to add a Madicen">
                                <a href="{{url('/LabList')}}" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle=""
                                    data-bs-target="">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                                transform="rotate(-90 11.364 20.364)" fill="black" />
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->New Madicen
                                </a>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table id="kt_datatable_example_5"
                                    class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                    <thead>
                                        <tr class="fw-bolder fs-6 text-gray-800 px-7">
                                            <th>#</th>
                                            <th>Lab Name</th>
                                            <th>Lab Price</th>
                                            <th>Phone Number</th>
                                            <th>Date</th>
                                            <th>Sample colecte date/time</th>
                                            <th>Reporting of test results date/time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i=1;
                                        @endphp
                                        @foreach ($lab_list as $val )
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{ App\Models\Lab_list::getLabNameById($val->lab_no)}}</td>
                                            <td>{{$val->lb_test_price}}</td>
                                            <td>{{$val->lb_phone_number }}</td>
                                            {{-- <td>{{}}</td> --}}
                                            <td>{{date('d-M-Y ',strtotime($val->lb_date))}}</td>
                                            <td>{{date('d-y-M h:i:s A',strtotime($val->d_t_blood_sample_colecte))}}</td>
                                            <td>{{date('d-y-M h:i:s A',strtotime($val->d_t_reporting_of_test_results))}}</td>

                                            <td><span><a href="{{url('LabList/edit/')}}/{{$val->lb_id}}" data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                            class="fas fa-edit btn btn-sm btn-light-success m-r-5">&nbsp;Edit</i> </a><a href="{{url('LabList/delete')}}/{{$val->lb_id}}"
                                                        data-toggle="tooltip" data-placement="top" title="Close">&nbsp;&nbsp;&nbsp;<i
                                                            class="la la-trash-o btn btn-sm btn-light-danger">&nbsp;Delete</i></a></span>
                                            </td>
                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->
                    </div>
                    <!--end::Tables Widget 9-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection
