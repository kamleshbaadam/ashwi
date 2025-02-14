
@extends('backend.reception.layout.app')

@push('title')
<title>Add Bed</title>
@endpush

@section('content')




        <div class="content-w" style="margin-top: -50px;">
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">



                                <h6 class="element-header">Add New Bed</h6>
                                <div class="element-box">
                                    <form>
                                        <h5 class="form-header">Add New Bed</h5>
                                        <div class="form-desc">Discharge best employed your phase each the of
                                            shine.
                                            Be met even reason consider logbook redesigns. Never a turned
                                            interfaces
                                            among asking</div>




                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group"><label for=""> Bed Type
                                                        </label><select class="form-control">
                                                            <option>Bed Type </option>
                                                            <option> A</option>
                                                            <option> B</option>
                                                            <option> C</option>

                                                        </select></div>
                                                    <!-- <label for="">Bed Type </label>

                                                        <input type="text" class="form-control"
                                                            placeholder="Bed Type "> -->
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">Bed Capacity </label>

                                                    <input type="text" class="form-control" placeholder="Bed Capacity">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="row">



                                            </div>
                                            <div class="row" style="padding-top: 20px;">
                                                <div class="col-sm-6 ">
                                                    <div class="form-group">
                                                        <div> <label for="">Status</label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio1"
                                                                value="option1">
                                                            <label class="form-check-label" for="inlineRadio1">Active
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio2"
                                                                value="option2">
                                                            <label class="form-check-label"
                                                                for="inlineRadio2">In Active</label>
                                                        </div>



                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group"><label for="">Charges</label><input
                                                            class="form-control" placeholder="Charges" type="number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 ">
                                                <label for="">Description</label>

                                                <input type="text" class="form-control" placeholder="Description">
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


                <!-- <div class="display-type"></div> -->
            </div>

        </div>


        <!-- <div class="display-type"></div> -->
    </div>
   @endsection