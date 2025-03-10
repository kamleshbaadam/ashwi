@extends('backend.drpanel.layout.app')

@push('title')
<title>OPD</title>
@endpush

@section('content')
    <div class="content-w">

        <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
        </div>

        <div class="content-w" style="margin-top: -50px;">
            <div class="content-i">
                <div class="content-box">
                    <div class="element-wrapper compact pt-4">

                        <!-- <h6 class="element-header">Overview</h6> -->
                        <div class="element-wrapper">
                            <h6 class="element-header">Current OPD</h6>
                            <div class="element-box-tp">
                                <div class="table-responsive">
                                    <table class="table table-padded">
                                        <thead>
                                            <tr>
                                                <th>SR</th>
                                                <th>patient_ID</th>
                                                <th>Name </th>
                                                <th>REFERENCE</th>
                                                <th>Case_type</th>
                                                <th>complain</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($opdData as $opd)
                                                @if($opd->status == 0)
                                                    <tr>
                                                        <td class="text-center">{{$loop->iteration}}</td>

                                                        <td class="text-center">{{$opd->patient_id}}</td>

                                                        <td>
                                                            <div class="user-with-avatar">
                                                                <img alt=""
                                                                src="{{ asset('backend/drpanel/img/avatar1.png') }}"><span>{{$opd->first_name}} {{$opd->last_name}}</span></div>
                                                        </td>
                                                        <td>{{$opd->reference_name}}</td>
                                                        <td>
                                                            <div class="smaller lighter">{{$opd->case_type}}</div>
                                                        </td>

                                                        <td>
                                                            <div class="smaller lighter">{{$opd->complain}}</div>
                                                        </td>
                                                        <td class="">
                                                            <div class="">
                                                                <a class="btn btn-primary btn-primary"
                                                                    href="{{url('doctor/view-opdAppointment/'.$opd->id)}}" style="color: white;"><span>
                                                                        Start</span></a>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="element-wrapper">
                            <h6 class="element-header">Completed OPD</h6>
                            <div class="element-box-tp">
                                <div class="table-responsive">
                                    <table class="table table-padded">
                                        <thead>
                                            <tr>
                                                <th>SR</th>
                                                <th>patient_ID</th>
                                                <th>Name </th>
                                                <th>REFERENCE</th>
                                                <th>Case_type</th>
                                                <th>complain</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($opdData as $opd)
                                                @if($opd->status == 1)
                                                    <tr>
                                                        <td class="text-center">{{$loop->iteration}}</td>

                                                        <td class="text-center">{{$opd->patient_id}}</td>

                                                        <td>
                                                            <div class="user-with-avatar">
                                                                <img alt=""
                                                                src="{{ asset('backend/drpanel/img/avatar1.png') }}"><span>{{$opd->first_name}} {{$opd->last_name}}</span></div>
                                                        </td>
                                                        <td>{{$opd->reference_name}}</td>
                                                        <td>
                                                            <div class="smaller lighter">{{$opd->case_type}}</div>
                                                        </td>

                                                        <td>
                                                            <div class="smaller lighter">{{$opd->complain}}</div>
                                                        </td>
                                                        <td class="row-actions"><a href="#"><i
                                                            class="os-icon os-icon-grid-10"></i></a><a
                                                        href="#"><i class="os-icon os-icon-ui-44"></i></a><a
                                                        class="danger" href="#"><i
                                                            class="os-icon os-icon-ui-15"></i></a></td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <div class="display-type"></div>
    </div>
  @endsection