@extends('backend.reception.layout.app')

@push('title')
<title>Add IPD Advance</title>
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


                                <h6 class="element-header">Billing</h6>
                                <div class="element-box">
                                    <form>
                                        <h5 class="form-header">Add IPD Advance</h5>
                                        <div class="form-desc"></div>




                                        <div class="form-group">

                                            <div class="row">

                                                <div class="col-sm-6">
                                                    <div class="form-group"><label for="">IN-Patient No</label><input
                                                            class="form-control" placeholder="IN-Patient No"
                                                            type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group"><label for="">patient Name</label><input
                                                            class="form-control" placeholder="Pay to" type="number">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group"><label for="">Advance Date</label><input
                                                            class="form-control" placeholder="particular" type="date">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group"><label for="">Advance Amount</label><input
                                                            class="form-control" placeholder="Advance Amount"
                                                            type="number">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <label for="">Mode Of Payment</label><select
                                                            class="form-control">
                                                            <option>Case</option>
                                                            <option>Ears</option>
                                                            <option>Nose </option>
                                                            <option>Throat</option>
                                                            <option>Biopsy</option>
                                                            <option>Covid</option>


                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">

                                                    <div class="form-group"><label for="">Ref No</label><input
                                                            class="form-control" placeholder="Ref No" type="text">
                                                    </div>
                                                </div>
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

                                                    <div class="form-group"><label for="">Notes</label><input
                                                            class="form-control" placeholder="Notes" type="text">
                                                    </div>
                                                </div>



                                                <div class="form-buttons-w"><button class="btn btn-primary"
                                                        type="submit">
                                                        Submit</button>
                                                    <button class="btn btn-primary" type="submit">
                                                        Save & Print</button>
                                                    <button class="btn btn-primary" type="submit" style="background-color: white; color: black;">
                                                        Discard</button>
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