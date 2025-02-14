@extends('backend.reception.layout.app')

@push('title')
<title>Temporary Appointment</title>
@endpush

@section('content')

        <div class="content-w" style="margin-top: -50px;">
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">



                                <!-- <h6 class="element-header">TemporaryAppoinmentt</h6> -->

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
                                                    TemporaryAppoinment </a>
                                                <a class="btn btn-primary btn-primary"
                                                    href="/temporary-appointment"><i
                                                        class="os-icon os-icon-ui-22"></i><span>Back</span></a>
                                            </div>
                                            <h6 class="element-header">Add Appoinments</h6>
                                        </div>

                                        <div class="form-group row">

                                            <div class="row col-sm-6">

                                                <div class="col-sm-4">

                                                    <div class="form-group"><label for="">First Name</label>
                                                        <input class="form-control" placeholder="First Name">
                                                    </div>
                                                </div>


                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Last Name</label>
                                                        <input class="form-control" placeholder="Last name">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Mobail No</label>
                                                        <input class="form-control" placeholder="number" type="number">
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group"><select class="form-control">
                                                            <option>E.N.T</option>
                                                            <option>Receptionist</option>
                                                            <option>Bed Manager</option>
                                                            <option>Laboratory</option>

                                                        </select></div>
                                                </div>




                                            </div>

                                            <div class="row col-sm-6">


                                                <div class="col-sm-6">
                                                    <div class="form-group"><label for="">Appointment Date</label>
                                                        <input class="form-control" type="date"
                                                            placeholder="content Number">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group"><label for="">Appointment Time</label>
                                                        <input class="form-control" type="time"
                                                            placeholder="content Number">
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group"><select class="form-control">
                                                            <option>Dr.Mahta</option>
                                                            <option>Receptionist</option>
                                                            <option>Bed Manager</option>
                                                            <option>Laboratory</option>

                                                        </select></div>
                                                </div>


                                            </div>

                                            <div class="col-sm-2">

                                                <div class="">
                                                    <button class="btn btn-primary" type="submit">
                                                        Submit</button>

                                                    <button class="btn btn-primary" type="submit"
                                                        style="background-color:white; color: black;">
                                                        cancel</button>
                                                </div>
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