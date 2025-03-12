@extends('backend.telecaller.layout.app')

@push('title')
    <title>View Outreach</title>
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
                            <h6 class="element-header">View Outreach </h6>
                        </div>
                        <div class="col-lg-12">
                            @include('flash-message')
                            <form action="{{ url('telecaller/view-outreach') }}" method="get">
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
                                                <a href="{{ url('telecaller/view-appointment') }}" class="btn btn-primary"
                                                    type="button" name="submit">Reset</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="dataTable1" class="table nowrap table-striped"  style="text-align: center !important">
                            <thead>
                                <tr>
                                    <th>SR</th>
                                    <th>Name </th>
                                    <th>phone No</th>
                                    <th>Meeting Type</th>
                                    {{-- <th>Case Type</th> --}}
                                    <th>Reference</th>
                                    {{-- <th>Doctor Name </th> --}}
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Remark</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($outreachData as $orData)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $orData->name }}</td>
                                        <td>{{ $orData->phone_no }}</td>
                                        <td>{{ !empty($orData->type) ? ucwords(str_replace('_', ' ', $orData->type)) : '' }}</td>
                                        {{-- <td>
                                            @if ($orData->case_type)
                                                {{ ucfirst($orData->case_type) }}
                                            @else
                                                Not Provided
                                            @endif
                                        </td> --}}
                                        <td>{{ $orData->reference }}</td>
                                        {{-- <td>
                                            @if ($orData->doctor_id)
                                                {{ optional($orData->doctor)->first_name . ' ' . optional($orData->doctor)->last_name }}
                                            @else
                                                User Not Selected
                                            @endif
                                        </td> --}}
                                        <td>
                                            @if ($orData->appointment_date)
                                                {{ (date('Y-m-d', strtotime($orData->appointment_date))) }}
                                            @else
                                                Not Provided
                                            @endif
                                        </td>
                                        <td>
                                            @if ($orData->status == 'booked')
                                                <span class="status-pill smaller green"></span>
                                            @elseif($orData->status == 'confirmed')
                                                <span class="status-pill smaller yellow"></span>
                                            @else
                                                <span class="status-pill smaller red"></span>
                                            @endif
                                            <span>{{ ucwords($orData->status) }}</span>
                                        </td>
                                        <td data-title="Complete" data-toggle="tooltip"
                                            data-original-title="{{ $orData->remark ?? 'Not Provided' }}"
                                            title="{{ $orData->remark ?? 'Not Provided' }}">
                                            @if ($orData->remark)
                                                {{ $orData->remark }}
                                            @else
                                                Not Provided
                                            @endif
                                        </td>
                                        <td style="display: flex;font-size: 20px;">
                                            <a href="{{ url('telecaller/edit-appointment/' . $orData->id) }}"
                                                type="button"  class="btn btn-info" name="submit"><i class="os-icon os-icon-ui-49"
                                                    style="color: black;"></i><span></span></a>
                                            <form action="{{ url('telecaller/view-appointment/' . $orData->id) }}"
                                                style="padding-left: 5px;" method="post"
                                                onsubmit="return confirm('Are you sure you want to delete this appointment?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"  class="btn btn-danger" name="submit" style="border:none">
                                                    <i class="os-icon os-icon-ui-15"><span></span></i>
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
    </div>
    <div class="display-type"></div>
    </div>
@endsection
