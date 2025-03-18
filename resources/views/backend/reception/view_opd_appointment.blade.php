@extends('backend.reception.layout.app')

@push('title')
    <title>View Appointment</title>
@endpush
@section('content')
    <style>
        td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
    <div class="content-w" style="margin-top: -50px;">
        <div class="content-i">
            <div class="content-box">
                <div class="element-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h6 class="element-header">OPD APPOINTMENTS </h6>
                        </div>
                        <div class="col-lg-12">
                            @include('flash-message')
                            <form action="{{ url('reception/view_opd_appointment') }}" method="get">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                Start date
                                                <input name="start_date" class="form-control" placeholder="time"
                                                    type="date" value="{{ request('start_date') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                End date
                                                <input name="end_date" class="form-control" placeholder="time"
                                                    type="date" value="{{ request('end_date') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group pt-4">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{ url('reception/view_opd_appointment') }}" class="btn btn-primary"
                                                    type="button" name="submit">Reset</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-padded" style="text-align: center !important">
                            <thead class="text-center">
                                <tr>
                                    <th>SR</th>
                                    <th>Patient ID</th>
                                    <th>Name </th>
                                    <th>Phone No</th>
                                    <th>Referenace Name</th>
                                    <th>Case No.</th>
                                    <th>Case Type</th>
                                    <th>Doctor Name </th>
                                    <th>Appointment Time</th>
                                    <th>Arrival Time</th>
                                    <th>Status</th>
                                    <th>Option</th>
                                    <th>Receipt </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($opdData as $opd)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $opd->patient_id }}</td>
                                        <td>{{ $opd->first_name . ' ' . $opd->last_name }}</td>
                                        <td>{{ $opd->phone_no }}</td>
                                        <td>{{ $opd->reference_name }}</td>
                                        <td>{{ ucfirst($opd->case_no) }}</td>
                                        <td>{{ ucfirst($opd->case_type) }}</td>
                                        <td>{{ $opd->d_first_name . ' ' . $opd->d_last_name }}</td>
                                        <td>{{ date('H:i A', strtotime($opd->appointment_time)) }}</td>
                                        <td>{{ date('H:i A', strtotime($opd->created_at)) }}</td>
                                        <td>
                                            @if ($opd->status == '0')
                                                {{-- @if (!empty($opd->waiting_time) || $opd->waiting_time != '00:00:00')
                                                    <span class="status-pill smaller yellow"></span>
                                                    <span>Pending
                                                    </span>
                                                    <br>({{ date('H:i', strtotime($opd->waiting_time)) }})
                                                @endif --}}
                                                <span class="status-pill smaller red"></span>
                                                <span>In Queue</span>
                                            @else
                                                <span class="status-pill smaller green"></span>
                                                <span>Complete</span>

                                            @endif
                                        </td>
                                        <td class="row-actions">
                                            <a href="{{ url('reception/edit-opd/' . $opd->id) }}">
                                                <i class="os-icon os-icon-ui-49"></i></a>
                                            <a href=""><i class="os-icon os-icon-ui-44"></i></a>
                                            <a href=""><i class="os-icon os-icon-tasks-checked"></i></a>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{url('reception/create-bill/'.$opd->id)}}"><span>Create Bill</span></a>
                                        </td>
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
    <div class="display-type"></div>
    </div>
@endsection
