@extends('backend.reception.layout.app')

@push('title')
<title>3c Report</title>
@endpush

@section('content')




        <div class="content-w" style="margin-top: -50px;">
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">

                                <div class="element-actions"><a class="btn btn-primary btn-primary" href="#"><i
                                            class="os-icon os-icon-ui-22"></i><span>Back</span></a>
                                </div>


                                <h6 class="element-header">Data analytics</h6>
                                <div class="element-box">
                                    <form>
                                        <h5 class="form-header">3C Report</h5>
                                        <div class="form-desc"></div>




                                        <div class="form-group">

                                            <div class="row">
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <label for="">Account</label><select class="form-control">
                                                            <option>Aashwi ENT Hospital</option>
                                                            <option>Ears</option>
                                                            <option>Nose </option>
                                                            <option>Throat</option>
                                                            <option>Biopsy</option>
                                                            <option>Covid</option>


                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <label for="">Select</label><select class="form-control">
                                                            <option>OPD</option>
                                                            <option>Ears</option>
                                                            <option>Nose </option>
                                                            <option>Throat</option>
                                                            <option>Biopsy</option>
                                                            <option>Covid</option>


                                                        </select>
                                                    </div>
                                                </div>



                                                <div class="col-sm-6">
                                                    <h6>Select Deparment Name</h6>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">OPD
                                                            Billing</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h6>Select type</h6>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Cash
                                                            Memo</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label"
                                                            for="inlineRadio1">Invoice</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Credit
                                                            Notes</label>
                                                    </div>
                                                </div>

                                                <div class=" col-sm-3" style="margin-top: 30px;">
                                                    <label for="">Start Date </label>
                                                    <input class="" type="date" name="" id="" value="">

                                                </div>

                                                <div class="col-sm-3" style="margin-top: 30px;">
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