

@extends('backend.reception.layout.app')

@push('title')
<title>Old Patients</title>
@endpush
@section('content')       

        <div class="content-w" style="margin-top: -50px;">
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">



                                <div class="element-box">
                                    <form>


                                        <div class="element-wrapper compact pt-4">
                                            <div class="element-actions"> <a class="btn btn-primary" type="submit"
                                                    href="/add-new-opd">
                                                    New patient </a>
                                                <a class="btn btn-primary" type="submit" href="/old-patients">
                                                    Old patient </a>
                                                <a class="btn btn-primary" type="submit" href="/temporary-appointment
                                            ">
                                                    Temporary Appoinmentt </a>
                                            </div>
                                            <h6 class="element-header">Add Appoinments</h6>
                                            <div class="form-group row">

                                                <div class="row col-sm-6">

                                                    <div class="col-sm-6">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Patient ID" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Reference Name" type="Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group"><select class="form-control">
                                                                <option>MR</option>
                                                                <option>MS</option>
                                                                <option>MRS</option>

                                                            </select></div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Middle Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Last name">
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-4">
                                                        <div class="form-group"><select class="form-control">
                                                                <option>Select Gender</option>
                                                                <option>Receptionist</option>
                                                                <option>Bed Manager</option>
                                                                <option>Laboratory</option>

                                                            </select></div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Date of birth">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Age">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Contact Number">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Email">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group"><select class="form-control">
                                                                <option>DND"NO"</option>
                                                                <option>Receptionist</option>
                                                                <option>Bed Manager</option>
                                                                <option>Laboratory</option>

                                                            </select></div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group"><label for="">Appointment  Date</label>
                                                            <input class="form-control" type="date"
                                                                placeholder="Contoct Number">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group"><label for="">Appointment Time</label>
                                                            <input class="form-control" type="time"
                                                                placeholder="content Number">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="">Dr.Name</label><select class="form-control">
                                                                <option>Dr.Mihir mahta</option>
                                                                <option>Receptionist</option>
                                                                <option>Bed Manager</option>
                                                                <option>Laboratory</option>

                                                            </select></div>
                                                    </div>

                                                    <!-- <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <h6>secondary contact</h6>

                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="First Name">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group"><select class="form-control">
                                                            <option>select Gender</option>
                                                            <option>male</option>
                                                            <option>Female</option>
                                                            <option>Other</option>

                                                        </select></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="Age">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="phone number">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="relatiship">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="occupation">
                                                    </div>
                                                </div>



 -->

                                                </div>

                                                <div class="row col-sm-6">

                                                    <div class="col-sm-12">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Address" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="pincode" type="Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Area">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="City">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="District" type="Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="state">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Country">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Other Address">
                                                        </div>
                                                    </div>




                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control" type="date"
                                                                placeholder="Last Visit">
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-4">
                                                        <div class="form-group"><select class="form-control">
                                                                <option>select case type</option>
                                                                <option>new</option>
                                                                <option>Follow-Up </option>
                                                                <option>urgent</option>

                                                            </select></div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Appointment Remark">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class=" text-right"><button class="btn btn-primary" type="submit">
                                                    Submit</button>

                                            </div>

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