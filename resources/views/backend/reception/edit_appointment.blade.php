@extends('backend.reception.layout.app')

@push('title')
    <title>Edit Appointment</title>
@endpush
@section('content')
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
    <div class="content-w" style="margin-top: -50px;">
        <div class="content-i">
            <div class="content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="element-wrapper">
                            <div class="element-box">
                                <form action="{{ route('add_appointment') }}" method="post">
                                    @csrf
                                    <input type="hidden" id="appointment_id" name="appointment_id" hidden value="{{ $appointment_id ?? '' }}">
                                    <input type="hidden" id="opd_id" name="opd_id" hidden value="{{ $opd_id ?? '' }}">
                                    <input type="hidden" id="patient_id" name="patient_id" hidden
                                        value="{{ $appointment['patient_id'] ?? '' }}">
                                    <div class="element-wrapper compact pt-4">
                                        @include('flash-message')
                                        <h6 class="element-header">Appoinments</h6>
                                        <div class="form-group row">
                                            <div class="row col-sm-6">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Patient ID</label>
                                                        <input class="form-control" disabled readonly
                                                            @if (!empty($patientData)) disabled readonly @endif
                                                            value="{{ !empty($patientData['patient_id']) ? $patientData['patient_id'] : '' }}"
                                                            placeholder="Patient ID" type="text" readonly></div>
                                                </div>
                                                <div class="col-sm-6">
                                                        <label for="">Reference Name</label>
                                                        <div class="form-group">
                                                        <input class="form-control" placeholder="Reference Name" 
                                                            name="reference_name" type="text" 
                                                            value="{{ !empty($patientData['patient_id']) ? $patientData['reference_name'] :  $appointment['reference'] ?? '' }}"
                                                            >
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="">Prefix</label>
                                                        <select class="form-control" name="name_prefix" required> 
                                                            <option selected @if(!empty($patientData)) @if($patientData['name_prefix']=='mr') selected
                                                            @endif @endif value="mr">MR</option>
                                                            <option @if (!empty($patientData)) @if($patientData['name_prefix']=='ms') selected
                                                            @endif @endif value="ms">MS</option>
                                                            <option @if (!empty($patientData)) @if($patientData['name_prefix']=='mrs') selected
                                                            @endif @endif value="mrs">MRS</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label for="">First Name</label><input 
                                                            class="form-control" placeholder="First Name" name="first_name"
                                                           required
                                                            value="{{ !empty($patientData['first_name']) ? $patientData['first_name'] : $appointment['name'] ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label for="">Middle Name</label>
                                                        <input class="form-control" placeholder="Middle Name" name="middle_name" 
                                                        required
                                                            value="{{ !empty($patientData['middle_name']) ? $patientData['middle_name'] : ''}}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label for="">Last Name</label><input
                                                            class="form-control" placeholder="Last name" name="last_name"
                                                            
                                                            value="{{ !empty($patientData['last_name']) ? $patientData['last_name'] : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label for="">Gender</label><select
                                                            class="form-control" name="gender" required>
                                                            <option selected
                                                            @if (!empty($patientData)) @if($patientData['gender']=='male') selected
                                                            @endif @endif value="male">Male</option>
                                                            <option
                                                            @if (!empty($patientData)) @if($patientData['gender']=='female') selected
                                                            @endif @endif value="female">Female</option>
                                                            <option 
                                                            @if (!empty($patientData)) @if($patientData['gender']=='other') selected
                                                            @endif @endif value="other">Other</option>
                                                        </select></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label for="">Date of
                                                            Birth</label><input class="form-control" type="date"
                                                            name="dob" placeholder="Date of Birth" required
                                                            value="{{ !empty($patientData['dob']) ? $patientData['dob'] : $appointment['dob'] ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label for="">Age</label><input
                                                            name="age" type="number" class="form-control"
                                                            placeholder="Age" required
                                                            value="{{ !empty($patientData['age']) ? $patientData['age'] : $appointment['age'] ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label for="">Blood Group</label><input
                                                            name="blood_group" class="form-control"
                                                            placeholder="Blood Group" 
                                                            value="{{ !empty($patientData['blood_group']) ? $patientData['blood_group'] : $appointment['blood_group'] ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label for="">Contact
                                                            Number</label><input class="form-control" name="phone_no"
                                                            placeholder="Contact Number" required
                                                            value="{{ !empty($patientData['phone_no']) ? $patientData['phone_no'] : $appointment['phone_no'] ?? ''}}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group"><label for="">Email</label><input type="email"
                                                            name="email" class="form-control" placeholder="Email" 
                                                            value="{{ !empty($patientData['email']) ? $patientData['email'] : $appointment['email'] ?? ''}}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label for="">First visit date</label>
                                                        <input class="form-control" type="date"
                                                            placeholder="contant Number" value="{{ !empty($appointment['first_visit_date']) ? date('Y-m-d', strtotime($appointment['first_visit_date'])) : '' }}"> 
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label for="">Appointment Date</label>
                                                        <input class="form-control" type="date" name="appointment_date" required
                                                            value="{{ !empty($appointment['appointment_date']) ? date('Y-m-d', strtotime($appointment['appointment_date'])) : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label for="">Appointment Time</label>
                                                        <input class="form-control" type="time" name="appointment_time" required
                                                            value="{{ !empty($appointment['appointment_date']) ? date('H:i', strtotime($appointment['appointment_date'])) : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="">Doctor Name</label>
                                                        <select class="form-control" name="doctor_id" required>
                                                            @foreach ($doctorData as $doctor)
                                                                <option value="{{ $doctor['id'] }}"
                                                                    {{ !empty($appointment['doctor_id']) ? $doctor['id'] == $appointment['doctor_id'] ? 'selected' : '' : '' }}>
                                                                    {{ $doctor['first_name'] . ' ' . $doctor['last_name'] }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-sm-6">
                                                <div class="col-sm-12">
                                                    <div class="form-group"><label for="">Address</label><input
                                                            class="form-control" name="address" placeholder="Address"  required
                                                            value="{{ !empty($patientData['address']) ? $patientData['address'] : $appointment['address'] ?? '' }}"
                                                            type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label for="">Pin Code</label><input
                                                            class="form-control" name="pincode" placeholder="pincode" 
                                                            type="text"
                                                            value="{{ !empty($patientData['pincode']) ? $patientData['pincode'] : $appointment['pincode'] ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label for="">Area</label><input
                                                            class="form-control" name="area" type="text"
                                                            placeholder="Area"  
                                                            value="{{ !empty($patientData['area']) ? $patientData['area'] : $appointment['area'] ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label for="">City</label><input
                                                            class="form-control" name="city" type="text"
                                                            placeholder="City" 
                                                            value="{{ !empty($patientData['city']) ? $patientData['city'] : $appointment['city'] ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label for="">District</label><input
                                                            class="form-control" name="district" placeholder="District"
                                                            type="text" 
                                                            value="{{ !empty($patientData['district']) ? $patientData['district'] : $appointment['district'] ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label for="">State</label><input
                                                            class="form-control" name="state" type="text"
                                                            placeholder="state" 
                                                            value="{{ !empty($patientData['state']) ? $patientData['state'] : $appointment['state'] ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label for="">Country</label><input
                                                            class="form-control" name="country" type="text"
                                                            placeholder="Country" 
                                                            value="{{ !empty($patientData['country']) ? $patientData['country'] : $appointment['country'] ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label for="">Last Visit</label>
                                                        <input class="form-control" type="date" required
                                                            placeholder="Last Visit" value="{{ !empty($appointment['last_visit_date']) ? date('Y-m-d', strtotime($appointment['last_visit_date'])) : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label for="">Select Case
                                                            Type</label>
                                                            <select class="form-control" name="case_type" required>
                                                            <option selected
                                                            @if (!empty($appointment)) @if($appointment['case_type']=='new') selected
                                                            @endif @endif value="new">New</option>
                                                            <option @if (!empty($appointment)) @if($appointment['case_type']=='follow-up') selected
                                                            @endif @endif value="follow-up">Follow-Up </option>
                                                            <option @if (!empty($appointment)) @if($appointment['case_type']=='urgent') selected
                                                            @endif @endif value="urgent">Urgent</option>
                                                        </select></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Select Payment Type</label><select
                                                            class="form-control" required name="payment_method" required>
                                                            <option selected @if (!empty($patientData)) @if($patientData['payment_method']=='offline_payment') selected
                                                            @endif @endif value="offline_payment">Offline Payment</option>
                                                            <option @if (!empty($patientData)) @if($patientData['payment_method']=='credit_card') selected
                                                            @endif @endif value="credit_card">Credit cards</option>
                                                            <option @if (!empty($patientData)) @if($patientData['payment_method']=='digital_wallet') selected
                                                            @endif @endif value="digital_wallet" >Digital wallets</option>
                                                            <option  @if (!empty($patientData)) @if($patientData['payment_method']=='direct_debit') selected
                                                            @endif @endif value="direct_debit">Direct debit</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label for="">Mediclaim</label>
                                                            <select class="form-control" name="mediclaim" required>
                                                            <option selected disabled value="">--</option>
                                                            <option value="0" {{ (!empty($appointment) && $appointment['mediclaim'] == '0') ? 'selected' : '' }}>Yes</option>
                                                            <option value="1" {{ (!empty($appointment) && $appointment['mediclaim'] == '1') ? 'selected' : '' }}>No</option>
                                                        </select></div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="form-group"><label for="">Remark</label><input
                                                            class="form-control" placeholder="Appointment Remark" name="remarks"
                                                            value="{{ $appointment['remarks'] ?? '' }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" text-right"><button class="btn btn-primary" type="submit"
                                                style="margin-right: 40px;">
                                                Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="display-type"></div>
            </div>
        </div>
        <div class="display-type"></div>
    </div>
@endsection
