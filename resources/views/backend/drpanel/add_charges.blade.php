@extends('backend.drpanel.layout.app')

@push('title')
<title>Add Charges</title>
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



                                        <h6 class="element-header">Add New changing</h6>
                                        <div class="element-box">
                                            <form>
                                                <h5 class="form-header">Add New Charges</h5>
                                                <div class="form-desc">Discharge best employed your phase each the of
                                                    shine.
                                                    Be met even reason consider logbook redesigns. Never a turned
                                                    interfaces
                                                    among asking</div>




                                                <div class="form-group">
                                                    <div class="row">

                                                        <div class="col-sm-6">
                                                            <label for="">Date </label>

                                                            <input type="date" class="form-control" placeholder="">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group"><label for=""> Charge
                                                                    Type</label><select class="form-control">
                                                                    <option>Charge Type</option>
                                                                    <option> A</option>
                                                                    <option> B</option>
                                                                    <option> C</option>

                                                                </select></div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group"><label for=""> Charge
                                                                    Category</label><select class="form-control">
                                                                    <option>Charge Category</option>
                                                                    <option> A</option>
                                                                    <option> B</option>
                                                                    <option> C</option>

                                                                </select></div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group"><label for=""> Code
                                                                </label><select class="form-control">
                                                                    <option>Code</option>
                                                                    <option> A</option>
                                                                    <option> B</option>
                                                                    <option> C</option>

                                                                </select></div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="form-group"><label for="">Standard
                                                                    Charge</label><input class="form-control"
                                                                    placeholder="Charges" type="number">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 ">
                                                            <label for="">
                                                                Applied Charge </label>

                                                            <input type="text" class="form-control"
                                                                placeholder="Description">
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


                            <!-- <div class="display-type"></div> -->
                        </div>

                    </div>


                    <div class="display-type"></div>

                </div>
 @endsection