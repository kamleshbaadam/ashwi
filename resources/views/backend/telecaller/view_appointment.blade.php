@extends('backend.telecaller.layout.app')

@push('title')
    <title>View Appointment</title>
@endpush
@section('content')
    <div class="content-w" style="margin-top: -50px;">
        <div class="content-i">
            <div class="content-box">
                <div class="element-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h6 class="element-header">APPOINTMENTS </h6>
                        </div>
                        <div class="col-lg-12">
                            @include('flash-message')
                            <form action="{{ url('telecaller/view-appointment') }}" method="get">
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Start date</label>
                                            <input name="start_date" class="form-control" type="date" value="{{ request('start_date') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>End date</label>
                                            <input name="end_date" class="form-control" type="date" value="{{ request('end_date') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group" style="margin-top: 25px;">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <a href="{{ url('telecaller/view-appointment') }}" class="btn btn-primary">Reset</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="dataTable1" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>SR</th>
                                    <th>Name</th>
                                    <th>Phone No</th>
                                    <th>Case Type</th>
                                    <th>Reference</th>
                                    <th>Doctor Name</th>
                                    <th>Appointment Date</th>
                                    <th>Status</th>
                                    <th>Remark</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $appointment->name }}</td>
                                        <td>{{ $appointment->phone_no }}</td>
                                        <td>{{ $appointment->case_type ? ucfirst($appointment->case_type) : 'Not Provided' }}</td>
                                        <td>{{ $appointment->reference }}</td>
                                        <td>{{ $appointment->doctor_id ? optional($appointment->doctor)->first_name . ' ' . optional($appointment->doctor)->last_name : 'User Not Selected' }}</td>
                                        <td>{{ $appointment->appointment_date ?? 'Not Provided' }}</td>
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
                                        <td title="{{ $appointment->remark ?? 'Not Provided' }}">
                                            {{ $appointment->remark ? \Illuminate\Support\Str::limit($appointment->remark, 20) : 'Not Provided' }}
                                        </td>
                                        <td>
                                            <a href="{{ url('telecaller/edit-appointment/' . $appointment->id) }}" class="btn btn-sm btn-info">
                                                <i class="os-icon os-icon-ui-49"></i>
                                            </a>
                                            <form action="{{ url('telecaller/view-appointment/' . $appointment->id) }}" style="display: inline;" method="post" onsubmit="return confirm('Are you sure you want to delete this appointment?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="os-icon os-icon-ui-15"></i>
                                                </button>
                                            </form>
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
@endsection
