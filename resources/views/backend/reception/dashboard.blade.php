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
                                    <a class="btn btn-success btn-sm" href="opd_appoinments.html">
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
                                            <th>OPD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($opdData as $opd)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $opd->patient_id }}</td>
                                                <td>{{ $opd->first_name . ' ' . $opd->last_name }}</td>
                                                <td>{{ $opd->phone_no }}</td>`
                                                <td>{{ $opd->reference_name }}</td>
                                                <td>{{ ucfirst($opd->case_no) }}</td>
                                                <td>{{ ucfirst($opd->case_type) }}</td>
                                                <td>{{ $opd->d_first_name . ' ' . $opd->d_last_name }}</td>
                                                <td>{{ date('H:i A', strtotime($opd->appointment_time)) }}</td>
                                                <td>{{ date('H:i A', strtotime($opd->created_at)) }}</td>
                                                <td>
                                                    @if ($opd->status == '0')
                                                        @if (!empty($opd->waiting_time) || $opd->waiting_time != '00:00:00')
                                                            <span class="status-pill smaller yellow"></span>
                                                            <span>Pending
                                                            </span>
                                                            <br>({{ date('H:i', strtotime($opd->waiting_time)) }})
                                                        @endif
                                                    @else
                                                        <span class="status-pill smaller red"></span>
                                                        <span>In Queue</span>
                                                    @endif
                                                </td>
                                                <td class="row-actions">
                                                    <a href="{{ url('reception/edit-opd/' . $opd->id) }}">
                                                        <i class="os-icon os-icon-ui-49"></i></a>
                                                    <a href=""><i class="os-icon os-icon-ui-44"></i></a>
                                                    <a href=""><i class="os-icon os-icon-tasks-checked"></i></a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" href=""><span>Print</span></a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="#"
                                                        data-target="#onboardingWideSlideModal"
                                                        data-toggle="modal"><span>View</span></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div>
                            {{-- <div aria-hidden="true" class="onboarding-modal modal fade animated"
                                id="onboardingWideSlideModal" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-lg modal-centered" role="document">
                                    <div class="modal-content text-center"><button aria-label="Close" class="close"
                                            data-dismiss="modal" type="button"><span class="close-label">
                                            </span><span class="os-icon os-icon-close"></span></button>
                                        <div class="onboarding-slider-w">
                                            <div class="onboarding-slide">
                                                <div class="onboarding-side-by-side">
                                                    <div class="onboarding-content with-gradient">
                                                        <form>
                                                            <div class="invoice-box">
                                                                <h6 class="element-header text-center">OPD Details
                                                                </h6>
                                                                <div class="row col-sm-12">
                                                                    <div class="col-sm-6">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for=""> <b>Patient Name:</b>
                                                                                    Dr.mihir</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for=""> <b>Appointment
                                                                                        Date:</b>
                                                                                    21/2/2024 </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for=""> <b>Dr Name:</b>
                                                                                    Satani Dhruvi</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="col-sm-12">

                                                                            <div class="form-group"><label
                                                                                    for=""><b>Patient
                                                                                        id:</b>
                                                                                    123</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for=""> <b>Appointment
                                                                                        Time:</b>
                                                                                    12:30<small>Pm</small> </label>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                    <table cellpadding="0" cellspacing="0">




                                                                        <tr class="heading">
                                                                            <td>
                                                                                Description
                                                                            </td>
                                                                            <td>
                                                                                Amount </td>

                                                                        </tr>

                                                                        <tr class="item ">
                                                                            <td>Consultan Charge
                                                                            </td>

                                                                            <td>100</td>
                                                                        </tr>

                                                                        <tr class="item">
                                                                            <td>Audiogram Charge
                                                                            </td>

                                                                            <td>100</td>
                                                                        </tr>

                                                                        <tr class="item">
                                                                            <td>
                                                                                Surgery Charge

                                                                            </td>

                                                                            <td>100</td>
                                                                        </tr>


                                                                        <tr class=" heading">
                                                                            <td>Eight Thousand Eight Hundred Only
                                                                            </td>


                                                                            <td>

                                                                                Grand.Total : 100</td>
                                                                        </tr>





                                                                    </table>

                                                                    <div class="col-lg-12 pt-4"
                                                                        style="display: flex;justify-content: end;">


                                                                        <b>Created By:</b> Reception
                                                                    </div>
                                                                </div>

                                                                <style>
                                                                    .invoice-box {
                                                                        max-width: 800px;
                                                                        margin: auto;
                                                                        padding: 30px;
                                                                        border: 1px solid #eee;
                                                                        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
                                                                        font-size: 16px;
                                                                        line-height: 24px;
                                                                        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                                                                        color: #555;
                                                                    }

                                                                    .invoice-box table {
                                                                        width: 100%;
                                                                        line-height: inherit;
                                                                        text-align: left;
                                                                    }

                                                                    .invoice-box table td {
                                                                        padding: 5px;
                                                                        vertical-align: top;
                                                                    }

                                                                    .invoice-box table tr td:nth-child(2) {
                                                                        text-align: right;
                                                                    }

                                                                    .invoice-box table tr.top table td {
                                                                        padding-bottom: 20px;
                                                                    }

                                                                    .invoice-box table tr.top table td.title {
                                                                        font-size: 45px;
                                                                        line-height: 45px;
                                                                        color: #333;
                                                                    }

                                                                    .invoice-box table tr.information table td {
                                                                        padding-bottom: 40px;
                                                                    }

                                                                    .invoice-box table tr.heading td {
                                                                        background: #eee;
                                                                        border-bottom: 1px solid #ddd;
                                                                        font-weight: bold;
                                                                    }

                                                                    .invoice-box table tr.details td {
                                                                        padding-bottom: 20px;
                                                                    }

                                                                    .invoice-box table tr.item td {
                                                                        border-bottom: 1px solid #eee;
                                                                    }

                                                                    .invoice-box table tr.item.last td {
                                                                        border-bottom: none;
                                                                    }

                                                                    .invoice-box table tr.total td:nth-child(2) {
                                                                        border-top: 2px solid #eee;
                                                                        font-weight: bold;
                                                                    }

                                                                    @media only screen and (max-width: 600px) {
                                                                        .invoice-box table tr.top table td {
                                                                            width: 100%;
                                                                            display: block;
                                                                            text-align: center;
                                                                        }

                                                                        .invoice-box table tr.information table td {
                                                                            width: 100%;
                                                                            display: block;
                                                                            text-align: center;
                                                                        }
                                                                    }
                                                                </style>
                                                                <div class="col-lg-12"
                                                                    style="display: flex;justify-content: end;margin-top: 20px;">
                                                                    <a class="btn btn-primary btn-w"
                                                                        href="Add_out_patient_case_memo.html"><span>Create
                                                                            Bill</span></a>
                                                                </div>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
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
                <div class="element-wrapper compact pt-4">
                    <div class="element-actions">
                        {{-- <a class="btn btn-primary btn-sm"
                            href="{{ url('reception/add_appointment') }}">
                            <i class="os-icon os-icon-ui-22"></i><span>Add Patient</span></a> --}}
                        <a class="btn btn-success btn-sm" href="/reception/view-outreach">
                            <i class="os-icon os-icon-grid-10"></i><span>View All</span></a>
                    </div>
                    <h6 class="element-header">Outreach</h6>

                    <table class="table table-padded">
                        <thead class="text-center">
                            <tr>
                                <th>SR</th>
                                <th>Name </th>
                                <th>phone No</th>
                                <th>Reference Name</th>
                                <th>Appointment Date</th>
                                <th>Status</th>
                                {{-- <th>Remark</th> --}}
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody style="text-align: center">
                            @foreach ($outreachData as $orReach)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $orReach->name }}</td>
                                    <td>{{ $orReach->phone_no }}</td>
                                    <td>{{ $orReach->reference }}</td>
                                    <td>
                                        @if ($orReach->appointment_date)
                                            {{ date('Y-m-d', strtotime($orReach->appointment_date)) }}
                                        @else
                                            Not Provided
                                        @endif
                                    </td>
                                    <td>
                                        @if ($orReach->status == 'booked')
                                            <span class="status-pill smaller green"></span>
                                        @elseif($orReach->status == 'confirmed')
                                            <span class="status-pill smaller yellow"></span>
                                        @else
                                            <span class="status-pill smaller red"></span>
                                        @endif
                                        <span>{{ ucwords($orReach->status) }}</span>
                                    </td>
                                    {{-- <td data-title="Complete" data-toggle="tooltip"
                                        data-original-title="{{ $orReach->remark ?? 'Not Provided' }}"
                                        title="{{ $orReach->remark ?? 'Not Provided' }}">
                                        @if ($orReach->remark)
                                            {{ $orReach->remark }}
                                        @else
                                            Not Provided
                                        @endif
                                    </td> --}}
                                    {{-- <td style="display: flex;font-size: 20px;">
                                        <a href="{{ url('reception/edit-appointment/' . $orReach->id) }}" type="button" name="submit"><i
                                                class="os-icon os-icon-ui-49" style="color: black;"></i><span></span></a>
                                        <form
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
                                        </form>
                                    </td> --}}
                                </tr>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="display-type"></div>
            </div>
        @endsection
