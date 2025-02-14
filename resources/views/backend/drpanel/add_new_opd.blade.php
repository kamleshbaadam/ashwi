@extends('backend.drpanel.layout.app')

@push('title')
<title>Add New OPD</title>
@endpush

@section('content')


            <div class="content-w">

                <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
                </div>

                <div class="content-w" style="margin-top: -50px;">
                <div class="content-i">
                    <div class="content-box">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="element-wrapper">



                                    <h6 class="element-header">Add Patient</h6>
                                    <div class="element-box">
                                        <form>
                                            <h5 class="form-header">Add Patient</h5>


                                            <div class="form-buttons-w form-desc" style="color: white;">
                                                <a class="btn btn-primary" type="submit" href="add_new_opd.html">
                                                    New patient </a>
                                                <a class="btn btn-primary" type="submit" href="/drpanel/old-patients">
                                                    Old patient </a>
                                                <a class="btn btn-primary" type="submit" href="/drpanel/temporary-appointment
                                            ">
                                                    Temporary Appoinment </a>
                                            </div>
                                            <div class="form-group row">

                                                <div class="row col-sm-6">

                                                    <div class="col-sm-6">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Patient ID" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Refeferce ID" type="Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group"><select class="form-control">
                                                                <option>Salutation</option>
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

                                                    <div class="col-sm-6">
                                                        <div class="form-group"><select class="form-control">
                                                                <option>select language</option>
                                                                <option>Receptionist</option>
                                                                <option>Bed Manager</option>
                                                                <option>Laboratory</option>

                                                            </select></div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="occupation">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Refeferce">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-2">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="new add">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Referred case(s)">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12">
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
                                                                placeholder="Date of birth">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group"><select class="form-control">
                                                                <option>E.N.T</option>
                                                                <option>Receptionist</option>
                                                                <option>Bed Manager</option>
                                                                <option>Laboratory</option>

                                                            </select></div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group"><select class="form-control">
                                                                <option>Dr.Mihir mahta</option>
                                                                <option>Receptionist</option>
                                                                <option>Bed Manager</option>
                                                                <option>Laboratory</option>

                                                            </select></div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Last Visit">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group"><label for="">Appoinment Date</label>
                                                            <input class="form-control" type="date"
                                                                placeholder="content Number">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group"><label for="">Appoinment Time</label>
                                                            <input class="form-control" type="time"
                                                                placeholder="content Number">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group"><label for="">Duration</label>
                                                            <input class="form-control" type="number"
                                                                placeholder="5 min">
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
                                                        <div class="form-group"><select class="form-control">
                                                                <option>patient Category</option>
                                                                <option>Ears</option>
                                                                <option>Nose </option>
                                                                <option>Throat</option>
                                                                <option>Biopsy</option>
                                                                <option>Covid</option>


                                                            </select></div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Appoinment Remark">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-buttons-w"><button class="btn btn-primary"
                                                        type="submit">
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
        </div>
    </div>
    <div class="display-type"></div>
    </div>
@endsection