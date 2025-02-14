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
                            <h6 class="element-header">APPOINTMENTS </h6>
                        </div>
                        <div class="col-lg-12">
                            @include('flash-message')
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="dataTable1" class="table nowrap"  style="text-align: center !important">
                            <thead>
                                <tr>
                                    <th>SR</th>
                                    <th>patient id</th>
                                    <th>Name </th>
                                    <th>phone No</th>
                                   <th>email</th>
                                   <th>city</th>
                                   <th>gender</th>
                                   <th>DOB</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patientData as $patient)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $patient['patient_id']}}</td>
                                        <td>{{ $patient['name_prefix'] . ' ' . $patient['first_name'] . ' ' . $patient['middle_name'] . ' ' . $patient['last_name']}}</td>
                                        <td>{{ $patient['phone_no']}}</td>
                                        <td>{{ $patient['email']}}</td>
                                        <td>{{ $patient['city']}}</td>
                                        <td>{{ ucfirst($patient['gender'])}}</td>
                                        <td>{{!empty($patient['dob']) && $patient['dob']!='0000-00-00' ? date('d-M-Y', strtotime($patient['dob'])) : '00-00-0000'}}</td>
                                        <!-- <td style="display: flex;font-size: 20px;">
                                            <a href="{{ url('reception/add-new-appointment/') }}"
                                                type="button" name="submit"><i class="os-icon os-icon-ui-49"
                                                    style="color: black;"></i><span></span></a>
                                            <form action="
                                            {{-- {{ url('telecaller/view-appointment/' . $appointment->id) }} --}}
                                             "
                                                style="padding-left: 5px;" method="post"
                                                onsubmit="return confirm('Are you sure you want to delete this appointment?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" name="submit" style="border:none">
                                                    <i class="os-icon os-icon-ui-15"><span></span></i>
                                                </button>
                                            </form>
                                        </td> -->
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
