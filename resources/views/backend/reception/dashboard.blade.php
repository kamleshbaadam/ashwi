@extends('backend.reception.layout.app')

@push('title')
    <title>Reception</title>
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
                <div class="element-box-tp">
                    @include('flash-message')
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <div class="element-wrapper compact pt-4" style="margin-top: -16px;">
                                <div class="element-actions">
                                    <a class="btn btn-success btn-sm" href="{{url('reception/view_opd_appointment')}}">
                                        <i class="os-icon os-icon-grid-10"></i><span>View All </span></a>
                                </div>
                                <h6 class="element-header">OPD</h6>
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
                <div class="element-wrapper compact pt-4">
                    <div class="element-actions"><a class="btn btn-primary btn-sm"
                            href="{{ url('reception/edit-appointment') }}">
                            <i class="os-icon os-icon-ui-22"></i><span>Add Patient</span></a>
                        <a class="btn btn-success btn-sm" href="{{ route('view-appointment') }}">
                            <i class="os-icon os-icon-grid-10"></i><span>View All</span></a>
                    </div>
                    <h6 class="element-header">Appointments</h6>

                    <table class="table table-padded">
                        <thead class="text-center">
                            <tr>
                                <th>SR</th>
                                <th>Name </th>
                                <th>phone No</th>
                                <th>Case Type</th>
                                <th>Reference Name</th>
                                <th>Doctor Name </th>
                                <th>Date Time</th>
                                <th>Status</th>
                                <th>Remark</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center">
                            @foreach ($appointmentData as $appointment)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $appointment->name }}</td>
                                    <td>{{ $appointment->phone_no }}</td>
                                    <td>
                                        @if ($appointment->case_type)
                                            {{ ucfirst($appointment->case_type) }}
                                        @else
                                            Not Provided
                                        @endif
                                    </td>
                                    <td>{{ $appointment->reference }}</td>
                                    <td>{{ $appointment->first_name . ' ' . $appointment->last_name }}</td>
                                    <td>
                                        @if ($appointment->appointment_date)
                                            {{ date('H: i A', strtotime($appointment->appointment_date)) }}
                                        @else
                                            Not Provided
                                        @endif
                                    </td>
                                    <td>
                                        @if ($appointment->status == 'booked')
                                            <span class="status-pill smaller green"></span>
                                        @elseif($appointment->status == 'confirmed')
                                            <span class="status-pill smaller yellow"></span>
                                        @else
                                            <span class="status-pill smaller red"></span>
                                        @endif
                                        <span>{{ ucwords($appointment->status) }}</span>
                                    </td>
                                    <td data-title="Complete" data-toggle="tooltip"
                                        data-original-title="{{ $appointment->remark ?? 'Not Provided' }}"
                                        title="{{ $appointment->remark ?? 'Not Provided' }}">
                                        @if ($appointment->remark)
                                            {{ $appointment->remark }}
                                        @else
                                            Not Provided
                                        @endif
                                    </td>
                                    <td style="display: flex;font-size: 20px;">
                                        <a href="{{ url('reception/edit-appointment/' . $appointment->id) }}"
                                            type="button" name="submit"><i class="os-icon os-icon-ui-49"
                                                style="color: black;"></i><span></span></a>
                                        {{-- <form
                                            action="
                                        {{ url('telecaller/view-appointment/' . $appointment->id) }}
                                         "
                                            style="padding-left: 5px;" method="post"
                                            onsubmit="return confirm('Are you sure you want to delete this appointment?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" name="submit"
                                                style="background-color: white;border:none">
                                                <i class="os-icon os-icon-ui-15"><span></span></i>
                                            </button>
                                        </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="display-type"></div>
            </div>
        </div>
    </div>
    <script>
            setInterval(function() {
                window.location.reload();
            }, 20000); // in ms
    </script>
@endsection
