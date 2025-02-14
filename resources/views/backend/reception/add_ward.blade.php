
@extends('backend.reception.layout.app')

@push('title')
<title>Add Ward</title>
@endpush

@section('content')


        <div class="content-w" style="margin-top: -50px;">
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">



                                <h6 class="element-header">Add New Ward</h6>
                                <div class="element-box">
                                    <form>
                                        <h5 class="form-header">Add New Ward</h5>
                                        <div class="form-desc">Discharge best employed your phase each the of shine.
                                            Be met even reason consider logbook redesigns. Never a turned interfaces
                                            among asking</div>




                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="">Capacity </label>

                                                    <input type="text" class="form-control" placeholder="">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="">Category </label>

                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="row">



                                            </div>
                                            <div class="row" style="padding-top: 20px;">

                                                <div class="col-sm-6">
                                                    <label for="">Name </label>

                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group"><label for="">Fasality</label><input
                                                            class="form-control" placeholder="Charges" type="number">
                                                    </div>
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


                <!-- <div class="display-type"></div> -->
            </div>

        </div>


        <div class="display-type"></div>
    </div>
 @endsection