@extends('backend.telecaller.layout.app')
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
                <h5 class="element-header">Edit Appointment</h5>
                <div class="element-box ">
                    <div class="form-group">
                        <form action="{{ url('telecaller/store-appointment') }}" method="post">
                            @csrf
                            <input type="hidden"  name="appointment_id" hidden value="{{$appointment->id}}">
                            <input type="hidden" name="type" hidden value="{{ $appointment->type }}">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Phone Number</label>

                                        <input class="form-control" name="phone_no" placeholder="Phone Number"
                                            type="number" value="{{ $appointment->phone_no }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Name</label>

                                        <input class="form-control" name="name" placeholder="Name" type="text"
                                            value="{{ $appointment->name }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="">Referance Name</label>

                                        <input class="form-control" name="reference" placeholder="Reference" type="text"
                                            value="{{  $appointment->reference }}">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Case Type</label>

                                        <select class="form-control" name="case_type">
                                            <option disabled selected>Case Type</option>
                                            <option value="New"
                                                {{ $appointment->case_type == 'new' ? 'selected' : '' }}>
                                                New</option>
                                            <option value="follow-up"
                                                {{ $appointment->case_type == 'follow-up' ? 'selected' : '' }}>
                                                Follow Up</option>
                                            <option value="Urgent"
                                                {{ $appointment->case_type == 'urgent' ? 'selected' : '' }}>
                                                Urgent</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Doctor Name</label>

                                        <select class="form-control" name="doctor_id">
                                            <option disabled selected>Select Doctor</option>
                                            @foreach ($doctorData as $doctor)
                                                <option value="{{ $doctor['id'] }}"
                                                    {{ $appointment->doctor_id == $doctor['id'] ? 'selected' : '' }}>
                                                    {{ $doctor['first_name'] .' '. $doctor['last_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Appointmente Date</label>

                                        <input class="form-control" name="appointment_date" placeholder="Date"
                                            type="date"
                                            value="{{ date('Y-m-d', strtotime($appointment->appointment_date)) }}">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Appointment Time</label>

                                        <input class="form-control" name="time" placeholder="Time"
                                            type="time"
                                            value="{{ date('H:m:s', strtotime($appointment->appointment_date)) }}">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">Status</label>

                                        <select class="form-control" name="status">
                                            <option disabled selected>Status</option>
                                            <option value="booked" 
                                            {{ $appointment->status == 'booked' ? 'selected' : '' }}> Booked</option>
                                            <option value="confirmed"
                                                {{ $appointment->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                            <option value="not confirmed"
                                                {{ $appointment->status == 'not confirmed' ? 'selected': '' }}>Not Confirmed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label for="">Remarks</label>

                                        <textarea class="form-control" name="remark" rows="1" placeholder="Remark">{{  $appointment->remark }}</textarea>
                                    </div>
                                </div>
                                <div class="col-sm-11 text-right">
                                    <div class="">
                                        <button class="btn btn-primary" name="submit" type="submit" 
                                        style="margin: -125px !important;"
                                        >Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="display-type"></div>
    </div>
@endsection
