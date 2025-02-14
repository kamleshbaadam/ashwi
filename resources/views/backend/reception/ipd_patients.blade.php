
@extends('backend.reception.layout.app')

@push('title')
<title>IPD</title>
@endpush

@section('content')

        <div class="content-w" style="margin-top: -50px;">
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">


                                <h6 class="element-header">IPD Patient</h6>
                                <div class="element-box">
                                    <form>
                                        <h5 class="form-header">IPD Patient</h5>

                                        <div class="form-buttons-w form-desc"><a class="btn btn-primary"
                                                href="/opd-patients" type="submit">
                                                OPD patient</a>
                                            <a class="btn btn-primary" type="submit" href="/ipd-patients">
                                                IPD patient </a>

                                        </div>

                                        <div class="form-group row">

                                            <div class="row col-sm-6">

                                                <div class="col-sm-4">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="Patient ID" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="Refeferce ID" type="Name">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group"><select class="form-control">
                                                            <option>Select IP Number</option>
                                                            <option>Receptionist</option>
                                                            <option>Bed Manager</option>
                                                            <option>Laboratory</option>

                                                        </select></div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="form-group"><select class="form-control">
                                                            <option>Salutation-</option>
                                                            <option>Receptionist</option>
                                                            <option>Bed Manager</option>
                                                            <option>Laboratory</option>

                                                        </select></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><select class="form-control">
                                                            <option>Select Name</option>
                                                            <option>Receptionist</option>
                                                            <option>Bed Manager</option>
                                                            <option>Laboratory</option>

                                                        </select></div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="Last Name">
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
                                                            placeholder="content Number">
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
                                                    <div class="form-group"><select class="form-control">
                                                            <option>select language</option>
                                                            <option>Receptionist</option>
                                                            <option>Bed Manager</option>
                                                            <option>Laboratory</option>

                                                        </select></div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="occupation">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><select class="form-control">
                                                            <option>select Blood group</option>
                                                            <option>A</option>
                                                            <option>A+</option>
                                                            <option>B</option>
                                                            <option>B+</option>
                                                            <option>B</option>
                                                            <option>O</option>
                                                            <option>O+</option>




                                                        </select></div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="Refeferce">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group"><select class="form-control">
                                                            <option>Patient Category</option>
                                                            <option>A</option>
                                                            <option>A+</option>
                                                            <option>B</option>
                                                            <option>B+</option>
                                                            <option>B</option>
                                                            <option>O</option>
                                                            <option>O+</option>




                                                        </select></div>
                                                </div>


                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <h6>Admission Details</h6>

                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group"><select class="form-control">
                                                            <option>E.N.T</option>
                                                            <option>A</option>
                                                            <option>A+</option>
                                                            <option>B</option>
                                                            <option>B+</option>
                                                            <option>B</option>
                                                            <option>O</option>
                                                            <option>O+</option>




                                                        </select></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><select class="form-control">
                                                            <option>select Ward</option>
                                                            <option>male</option>
                                                            <option>Female</option>
                                                            <option>Other</option>

                                                        </select></div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group"><select class="form-control">
                                                            <option>Room / Bad</option>
                                                            <option>male</option>
                                                            <option>Female</option>
                                                            <option>Other</option>

                                                        </select></div>
                                                </div>



                                                <div class="col-sm-4">
                                                    <div class="form-group"><select class="form-control">
                                                            <option>Admitting Doctor</option>
                                                            <option>male</option>
                                                            <option>Female</option>
                                                            <option>Other</option>

                                                        </select></div>
                                                </div>


                                                <div class="col-sm-4">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="phone number" type="date">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="phone number" type="time">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group"><select class="form-control">
                                                            <option>Attending Doctor</option>
                                                            <option>male</option>
                                                            <option>Female</option>
                                                            <option>Other</option>

                                                        </select></div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="Refeferce">
                                                    </div>
                                                </div>





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
                                                <div class="col-sm-8">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="Other Address">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="Nationality">
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <h6>Other Details</h6>

                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="Care Taker" type="Name">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="content No">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="Relationship">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="Insurance Name" type="Name">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="Policy Number">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group"><input class="form-control"
                                                            placeholder="TPA Number">
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <h6>Other Details</h6>

                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group"><select class="form-control">
                                                            <option>Oprating Doctor</option>
                                                            <option>Receptionist</option>
                                                            <option>Bed Manager</option>
                                                            <option>Laboratory</option>

                                                        </select></div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group"><select class="form-control">
                                                            <option>Opration Type</option>
                                                            <option>Receptionist</option>
                                                            <option>Bed Manager</option>
                                                            <option>Laboratory</option>

                                                        </select></div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group"><select class="form-control">
                                                            <option>Select Anaestesia</option>
                                                            <option>Receptionist</option>
                                                            <option>Bed Manager</option>
                                                            <option>Laboratory</option>

                                                        </select></div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group"><select class="form-control">
                                                            <option>Anaestesia Type</option>
                                                            <option>Receptionist</option>
                                                            <option>Bed Manager</option>
                                                            <option>Laboratory</option>

                                                        </select></div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group"><select class="form-control">
                                                            <option>Other Doctor</option>
                                                            <option>Receptionist</option>
                                                            <option>Bed Manager</option>
                                                            <option>Laboratory</option>

                                                        </select></div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group"><select class="form-control">
                                                            <option>Other Staff</option>
                                                            <option>Receptionist</option>
                                                            <option>Bed Manager</option>
                                                            <option>Laboratory</option>

                                                        </select></div>
                                                </div>


                                            </div>
                                            <div class="form-buttons-w"><button class="btn btn-primary" type="submit">
                                                    Submit</button>
                                            </div>
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