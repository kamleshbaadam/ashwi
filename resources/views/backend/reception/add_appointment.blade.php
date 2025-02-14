@extends('backend.reception.layout.app')

@push('title')
    <title>Add Appointment</title>
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
                                <div class="element-wrapper compact pt-4">
                                    @include('flash-message')
                                    <h6 class="element-header">Add Appoinments</h6>
                                    <form action="{{ route('add_appointment') }}" method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="row col-sm-6">
                                                <div class="col-sm-6">
                                                    <div class="form-group"><label for="">Patient ID</label>
                                                        <input class="form-control" name="patient_id"
                                                            placeholder="Patient ID" type="text" readonly required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group"><label for="">Reference
                                                            Name</label><input class="form-control" name="reference_name"
                                                            placeholder="Reference Name" type="text" required></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="">Prefix</label>
                                                        <select class="form-control" name="name_prefix" required>
                                                            <option selected disabled>Prefix</option>
                                                            <option value="mr">MR</option>
                                                            <option value="mrs">MRS</option>
                                                            <option value="ms">MS</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="">First Name</label>
                                                        <input class="form-control" name="first_name"
                                                            placeholder="First Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label for="">Middle Name</label>
                                                    <div class="form-group"><input class="form-control" name="middle_name"
                                                            placeholder="Middle Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label for="">Last Name</label>
                                                    <div class="form-group"><input class="form-control" name="last_name"
                                                            placeholder="Last name" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label for="">Gender</label>
                                                    <div class="form-group">
                                                        <select class="form-control" name="gender" required>
                                                            <option selected disabled>Select Gender</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                            <option value="other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="">Date of Birth</label>
                                                        <input class="form-control" type="date" name="dob"
                                                            placeholder="Date of Birth" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label for="">Age</label>
                                                    <div class="form-group"><input class="form-control" type="number"
                                                            name="age" placeholder="Age" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label for="">Blood Group</label>
                                                    <div class="form-group"><input class="form-control" type="text"
                                                            name="blood_group" placeholder="Blood Group" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label for="">Contact Number</label>
                                                    <div class="form-group"><input class="form-control" type="number"
                                                            name="phone_no" placeholder="Contact Number" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <label for="">Email</label>
                                                        <input class="form-control" type="email" name="email"
                                                            placeholder="Email" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="">First Visit Date</label>
                                                        <input class="form-control" type="date" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label for="">Appointment
                                                            Date</label>
                                                        <input class="form-control" type="date"
                                                            name="appointment_date" value="{{ date('Y-m-d') }}"
                                                            placeholder="Contact Number" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><label for="">Appointment Time</label>
                                                        <input class="form-control" type="time"
                                                            name="appointment_time" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label for="">Doctor Name</label>
                                                    <select class="form-control" name="doctor_id">
                                                        <option selected disabled>Select Doctor</option>
                                                        @foreach ($doctorData as $doctor)
                                                            <option value="{{ $doctor['id'] }}">
                                                                {{ $doctor['first_name'] . ' ' . $doctor['last_name'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row col-sm-6">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Address</label>
                                                        <input class="form-control" name="address" placeholder="Address"
                                                            type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label for="">Pin Code</label><input
                                                            class="form-control" name="pincode" placeholder="Pin Code"
                                                            type="number">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label for="">Area</label><input
                                                            class="form-control" name="area" type="text"
                                                            placeholder="Area">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label for="">City</label><input
                                                            class="form-control" name="city" type="text"
                                                            placeholder="City">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label for="">District</label><input
                                                            class="form-control" name="district" placeholder="District"
                                                            type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label for="">State</label><input
                                                            class="form-control" name="state" type="text"
                                                            placeholder="State">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label for="">Country</label><input
                                                            class="form-control" name="country" type="text"
                                                            placeholder="Country">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <!-- <div class="form-group"><label for="">Reference Name</label><input class="form-control"
                                                                name="other_address" type="text"
                                                                placeholder="Other Address">
                                                        </div> -->
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label for="">Last Visit</label><input
                                                            class="form-control" type="date" placeholder="Last Visit">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label for="">Select Case Type</label>
                                                        <select class="form-control" name="case_type">
                                                            <option selected disabled>Select Case Type</option>
                                                            <option value="new">New</option>
                                                            <option value="follow-up">Follow-Up </option>
                                                            <option value="urgent">Urgent</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><label for="">Payment Method</label>
                                                        <select class="form-control" name="payment_method">
                                                            <option selected disabled>Payment Method</option>
                                                            <option value="cash">Cash</option>
                                                            <option value="credit_cards">Credit Cards</option>
                                                            <option value="digital_wallets">Digital Wallets</option>
                                                            <option value="direct_debit">Direct Debit</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group"><label for="">Appointment
                                                            Remark</label><input class="form-control" name="remarks"
                                                            type="text" placeholder="Appointment Remark">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right"><button class="btn btn-primary" type="submit"
                                                style="margin-right: 40px;">
                                                Submit</button>
                                        </div>
                                    </form>
                                </div>
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
