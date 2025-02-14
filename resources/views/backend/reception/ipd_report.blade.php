@extends('backend.reception.layout.app')

@push('title')
<title>IPD Report</title>
@endpush

@section('content')


        <div class="content-w" style="margin-top: -50px;">
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">

                                <div class="element-actions"><a class="btn btn-primary btn-primary"
                                        href="Patients.html"><i class="os-icon os-icon-ui-22"></i><span>Back</span></a>
                                </div>


                                <h6 class="element-header">Data analytics</h6>
                                <div class="element-box">
                                    <form>
                                        <h5 class="form-header">IPD Report</h5>
                                        <div class="form-desc"></div>




                                        <div class="form-group">

                                            <div class="row">

                                                <div class="col-sm-12">
                                                    <h6>Report Type</h6>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Admittng
                                                            Report</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Discharged
                                                            Report </label>
                                                    </div>

                                                </div>

                                                <div class="col-sm-6" style="margin-top: 20px;">

                                                    <div class="form-group">
                                                        <label for="" class="">
                                                            <h6>Hospital</h6>
                                                        </label><select class="form-control">
                                                            <option>Aashwi E.N.T Hospital</option>
                                                            <option>OPD</option>
                                                            <option>IPD </option>


                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6" style="margin-top: 20px;">

                                                    <div class="form-group">
                                                        <label for="" class="">
                                                            <h6>Deparment Or Doctor</h6>
                                                        </label><select class="form-control">
                                                            <option>Doctor</option>
                                                            <option>OPD</option>
                                                            <option>IPD </option>


                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=" col-sm-12">
                                                    <h6>Select Doctor</h6>
                                                    <input type="text">

                                                </div>


                                                <div class=" col-sm-3" style="margin-top: 60px;">
                                                    <label for="">Start Date </label>
                                                    <input class="" type="date" name="" id="" value="">

                                                </div>

                                                <div class="col-sm-3" style="margin-top: 60px;">
                                                    <label for="">End Date</label>

                                                    <input class="" type="date" name="" id="" value="">

                                                </div>



                                            </div>
                                            <div class="form-buttons-w"><button class="btn btn-primary" type="submit">
                                                    Search</button>

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