@extends('backend.drpanel.layout.app')

@push('title')
    <title>
        Dr Panel</title>
@endpush

@section('content')
    <div class="content-w">

        <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
        </div>

        <div class="content-w" style="margin-top: -50px;">
            <div class="content-i">
                <div class="content-box">
                    <!-- <div class="element-wrapper compact ">
                            <div class="row pt-2">
                                <div class="col-6 col-sm-3 col-xxl-2"><a
                                        class="element-box el-tablo centered trend-in-corner smaller" href="#">
                                        <div class="label">Total Patients</div>
                                        <div class="value">484</div>
                                        <div class="trending trending-up"><span>12%</span><i
                                                class="os-icon os-icon-arrow-up6"></i></div>
                                    </a></div>
                                <div class="col-6 col-sm-3 col-xxl-2"><a
                                        class="element-box el-tablo centered trend-in-corner smaller" href="#">
                                        <div class="label">OPD</div>
                                        <div class="value text-danger">3,248</div>
                                        <div class="trending trending-down"><span>12%</span><i
                                                class="os-icon os-icon-arrow-down6"></i></div>
                                    </a></div>
                                <div class="col-6 col-sm-3 col-xxl-2"><a
                                        class="element-box el-tablo centered trend-in-corner smaller" href="#">
                                        <div class="label">Total Staff</div>
                                        <div class="value">73</div>
                                        <div class="trending trending-up"><span>12%</span><i
                                                class="os-icon os-icon-arrow-up6"></i></div>
                                    </a></div>
                                <div class="col-6 col-sm-3 col-xxl-2"><a
                                        class="element-box el-tablo centered trend-in-corner smaller" href="#">
                                        <div class="label">Total Booking</div>
                                        <div class="value">1,284</div>
                                        <div class="trending trending-up"><span>12%</span><i
                                                class="os-icon os-icon-arrow-up6"></i></div>
                                    </a></div>
                                <div class="col-6 col-xxl-2 d-sm-none d-xxl-block"><a
                                        class="element-box el-tablo centered trend-in-corner smaller" href="#">
                                        <div class="label">Bed</div>
                                        <div class="value">473</div>
                                        <div class="trending trending-down"><span>5%</span><i
                                                class="os-icon os-icon-arrow-down6"></i></div>
                                    </a></div>
                                <div class="col-6 col-xxl-2 d-sm-none d-xxl-block"><a
                                        class="element-box el-tablo centered trend-in-corner smaller" href="#">
                                        <div class="label">Total HRM</div>
                                        <div class="value">248</div>
                                        <div class="trending trending-down"><span>12%</span><i
                                                class="os-icon os-icon-arrow-down6"></i></div>
                                    </a></div>
                            </div>
                        </div> -->
                    <div class="element-wrapper">

                        <div class="element-actions"><a class="btn btn-success btn-sm" href="{{url('/doctor/currunt-opd')}}"><i
                                    class="os-icon os-icon-grid-10"></i><span>View Appoinments </span></a>
                        </div>
                        <h6 class="element-header">OPD Appointment</h6>
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
                                            <th>Status</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($opdData as $opd)
                                        @php
                                            $arrival = strtotime($opd->created_at);
                                            $now = time();
                                            $diffInSeconds = $now - $arrival;

                                            $minutes = floor($diffInSeconds / 60);
                                            $hours = floor($minutes / 60);
                                            $remainingMinutes = $minutes % 60;
                                         @endphp
                                         {{-- <tr @if($patient->is_appointment)
                                            style="background-color: #d4edda;"
                                        @else
                                            style="background-color: #f8d7da;"
                                        @endif > --}}
                                            <tr>
                                                <td style="background-color: #d4edda;">{{ $loop->iteration }}</td>
                                                <td style="background-color: #d4edda;">{{ $opd['patient_id'] }}</td>
                                                <td style="background-color: #d4edda;">{{ $opd['reference_name'] }}</td>
                                                <td style="background-color: #d4edda;">{{ $opd['first_name'] . ' ' . $opd['last_name'] }}</td>
                                                <td style="background-color: #d4edda;">{{ $opd['case_no'] }}</td>
                                                <td style="background-color: #d4edda;">{{ ucwords($opd['case_type']) }}</td>
                                                <td style="background-color: #d4edda;">{{ date('H:i A', strtotime($opd->appointment_time)) }}</td>
                                                <td style="background-color: #d4edda;">
                                                    {{ date('h:i A', strtotime($opd->created_at)) }} <br>
                                                    <small class="text-primary">
                                                        Waiting from 
                                                        @if ($minutes < 60)
                                                            {{ $minutes }} minute{{ $minutes != 1 ? 's' : '' }}
                                                        @else
                                                            {{ $hours }} hour{{ $hours != 1 ? 's' : '' }}
                                                            @if ($remainingMinutes > 0)
                                                                {{ $remainingMinutes }} minute{{ $remainingMinutes != 1 ? 's' : '' }}
                                                            @endif
                                                        @endif
                                                    </small>
                                                </td>
                                                <td style="background-color: #d4edda;">
                                                    @if ($opd->status == '0')
                                                        <span class="status-pill smaller red"></span>
                                                        <span>In Queue</span>
                                                    @else
                                                        <span class="status-pill smaller green"></span>
                                                        <span>Completed</span>
                                                    @endif
                                                </td>
                                                <td class="" style="background-color: #d4edda;">
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
                    <div class="element-wrapper compact pt-4">
                        <!-- <h6 class="element-header">Overview</h6> -->
                        <div class="element-wrapper">
                            <h6 class="element-header">IPD List</h6>
                            <div class="element-box-tp">
                                <div class="table-responsive">
                                    <table class="table table-padded text-center">
                                        <thead>
                                            <tr>
                                                <th>Sr</th>
                                                <th>Patient Id</th>
                                                <th>IPD NO</th>
                                                <th>PATIENT</th>
                                                <th>REFERENCE</th>
                                                <th>DOCTOR </th>
                                                <th>ADMISSION DATE</th>
                                                <th>BED</th>
                                                <th>BILL STATUS</th>
                                                <th>ACTION</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>123</td>
                                                <td class="text-center">13322334</td>
                                                <td>
                                                    <div class="user-with-avatar"><span>Mehta</span></div>
                                                </td>

                                                <td>
                                                    <div class="user-with-avatar"><span>Dhruvi</span></div>

                                                </td>
                                                <td>
                                                    <div class="user-with-avatar"><span>Dr.Dhruvi</span></div>

                                                </td>
                                                <td>
                                                    <div class="smaller lighter">2/2/301</div>
                                                </td>
                                                <td>
                                                    <div> 1 </div>
                                                </td>
                                                <td class="nowrap"><span class="status-pill smaller red"></span><span>Not
                                                        Paid</span>
                                                </td>

                                                <td class="row-actions"><a href="/drpanel/ipd-patient-details"><i
                                                            class="os-icon os-icon-ui-44"></i></a><a class="danger"
                                                        href="#"><i class="os-icon os-icon-ui-15"></i></a></td>



                                            </tr>

                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>123</td>
                                                <td class="text-center">13322334</td>
                                                <td>
                                                    <div class="user-with-avatar"><span>Mehta</span></div>
                                                </td>

                                                <td>
                                                    <div class="user-with-avatar"><span>Dhruvi</span></div>

                                                </td>
                                                <td>
                                                    <div class="user-with-avatar"><span>Dr.Dhruvi</span></div>

                                                </td>
                                                <td>
                                                    <div class="smaller lighter">2/2/301</div>
                                                </td>
                                                <td>
                                                    <div> 1 </div>
                                                </td>
                                                <td class="nowrap"><span class="status-pill smaller red"></span><span>Not
                                                        Paid</span>
                                                </td>

                                                <td class="row-actions"><a href="/drpanel/drpanel/ipd-patient-details"><i
                                                            class="os-icon os-icon-ui-44"></i></a><a class="danger"
                                                        href="#"><i class="os-icon os-icon-ui-15"></i></a></td>



                                            </tr>

                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>123</td>
                                                <td class="text-center">13322334</td>
                                                <td>
                                                    <div class="user-with-avatar"><span>Mehta</span></div>
                                                </td>

                                                <td>
                                                    <div class="user-with-avatar"><span>Dhruvi</span></div>

                                                </td>
                                                <td>
                                                    <div class="user-with-avatar"><span>Dr.Dhruvi</span></div>

                                                </td>
                                                <td>
                                                    <div class="smaller lighter">2/2/301</div>
                                                </td>
                                                <td>
                                                    <div> 1 </div>
                                                </td>
                                                <td class="nowrap"><span class="status-pill smaller red"></span><span>Not
                                                        Paid</span>
                                                </td>

                                                <td class="row-actions"><a href="/drpanel/ipd-patient-details"><i
                                                            class="os-icon os-icon-ui-44"></i></a><a class="danger"
                                                        href="#"><i class="os-icon os-icon-ui-15"></i></a></td>



                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="element-wrapper">



                        <h6 class="element-header">OT Schedule</h6>
                        <div class="element-box">
                            <form>

                                <div class="form-group">

                                    <div class="">
                                        <div class="">
                                            <table class="table table-padded text-center">
                                                <thead>


                                                    <tr>
                                                        <th>SR</th>
                                                        <th>patient Name </th>
                                                        <th>IP Number</th>
                                                        <th>Doctor</th>
                                                        <th>anaesthetist</th>
                                                        <th>Opration</th>
                                                        <th>Time</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td class="text-center">
                                                            1 </td>

                                                        <td class="text-center">
                                                            Satani Dhruvi</td>
                                                        <td class="text-center">
                                                            OT-1 </td>
                                                        <td>
                                                            <div class="user-with-avatar">
                                                                <span>Dr.Dhruvi</span>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            ANAESTHETIST</td>

                                                        <td class="text-center">
                                                            Opration</td>
                                                        <td class="text-center">
                                                            21/2/2023</td>

                                                        <td class="text-center">
                                                            Activ</td>

                                                        <td class="row-actions"><a href="/drpanel/ipd-patient-details">
                                                                <i class="os-icon os-icon-ui-44"></i></a><a class="danger"
                                                                href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                                        </td>
                                                    </tr>


                                                </tbody>
                                                <tbody>
                                                    <tr>

                                                        <td class="text-center">
                                                            1 </td>

                                                        <td class="text-center">
                                                            Satani Dhruvi</td>
                                                        <td class="text-center">
                                                            OT-1 </td>
                                                        <td>
                                                            <div class="user-with-avatar">
                                                                <span>Dr.Dhruvi</span>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            ANAESTHETIST</td>

                                                        <td class="text-center">
                                                            Opration</td>
                                                        <td class="text-center">
                                                            21/2/2023</td>

                                                        <td class="text-center">
                                                            Activ</td>

                                                        <td class="row-actions"><a href="/drpanel/ipd-patient-details">
                                                                <i class="os-icon os-icon-ui-44"></i></a><a class="danger"
                                                                href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                                        </td>
                                                    </tr>


                                                </tbody>
                                                <tbody>
                                                    <tr>

                                                        <td class="text-center">
                                                            1 </td>

                                                        <td class="text-center">
                                                            Satani Dhruvi</td>
                                                        <td class="text-center">
                                                            OT-1 </td>
                                                        <td>
                                                            <div class="user-with-avatar">
                                                                <span>Dr.Dhruvi</span>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            ANAESTHETIST</td>

                                                        <td class="text-center">
                                                            Opration</td>
                                                        <td class="text-center">
                                                            21/2/2023</td>

                                                        <td class="text-center">
                                                            Activ</td>

                                                        <td class="row-actions"><a href="/drpanel/ipd-patient-details">
                                                                <i class="os-icon os-icon-ui-44"></i></a><a class="danger"
                                                                href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>






                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
    </div>

    <!-- <div class="display-type"></div> -->
    </div>
@endsection
