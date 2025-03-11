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
                                        <thead class="text-center">
                                            <tr>
                                                <th>SR</th>
                                                <th>patient ID</th>
                                                <th>REFERENCE</th>
                                                <th>Name</th>
                                                <th>Case no</th>
                                                <th>Case type</th>
                                                <th>Appointment Time</th>
                                                <th>Arrival Time</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            @foreach ($opdData as $opd)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $opd['patient_id'] }}</td>
                                                    <td>{{ $opd['reference_name'] }}</td>
                                                    <td>{{ $opd['first_name'] . ' ' . $opd['last_name'] }}</td>
                                                    <td>{{ $opd['case_no'] }}</td>
                                                    <td>{{ ucwords($opd['case_type']) }}</td>
                                                    <td>{{ date('H:i A', strtotime($opd->appointment_time)) }}</td>
                                                    <td>{{ date('H:i A', strtotime($opd->created_at)) }}</td>
                                                    <td class="">
                                                        <div class="">
                                                            <a class="btn btn-primary btn-primary"
                                                                href="{{ url('doctor/view-opdAppointment/' . $opd->id) }}"
                                                                style="color: white;"><span>
                                                                    <i class="os-icon os-icon-grid-10"></i></span></a>
                                                        </div>
                                                    </td>
                                                </tr>
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
                                        <thead class="text-center">
                                            <tr>
                                                <th>SR</th>
                                                <th>patient ID</th>
                                                <th>REFERENCE</th>
                                                <th>Name</th>
                                                <th>Case no</th>
                                                <th>Case type</th>
                                                <th>Appointment Time</th>
                                                <th>Arrival Time</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            @foreach ($opdData as $opd)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $opd['patient_id'] }}</td>
                                                    <td>{{ $opd['reference_name'] }}</td>
                                                    <td>{{ $opd['first_name'] . ' ' . $opd['last_name'] }}</td>
                                                    <td>{{ $opd['case_no'] }}</td>
                                                    <td>{{ ucwords($opd['case_type']) }}</td>
                                                    <td>{{ date('H:i A', strtotime($opd->appointment_time)) }}</td>
                                                    <td>{{ date('H:i A', strtotime($opd->created_at)) }}</td>
                                                </tr>
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