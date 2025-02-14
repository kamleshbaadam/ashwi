
@extends('backend.reception.layout.app')
@push('title')
    <title>ATD</title>
@endpush
@section('content')


        <div class="content-w" style="margin-top: -50px;">
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">
                                <h6 class="element-header">ATD</h6>

                                <div class="element-box">
                                    <div class="element-actions " style="padding-left: 10px;"><a
                                            class="btn btn-primary btn-primary" href="add_medicine.html">
                                            <span><i class="os-icon os-icon-file-text"></i> </span></a></div>

                                    <div class="element-actions " style="padding-left: 10px;"><a
                                            class="btn btn-primary btn-primary" href="add_medicine.html"><span>Check
                                                Availability
                                            </span></a></div>

                                    <div class="element-actions"><a class="btn btn-primary btn-primary"
                                            href="add_medicine.html"><span>AllAppoinmentts </span></a></div>
                                    <h6 class="element-header">ATD</h6>

                                    <form>

                                        <div class="form-group">


                                            <div class="row">

                                                <div class="col-sm-12">
                                                    <div class="" style="margin-bottom: 20px;"><select class="">
                                                            <option>All Ward (0) </option>
                                                            <option>All Ward (0) </option>
                                                            <option>Dulux (0)</option>
                                                            <option>Special Room (0)</option>
                                                            <option>Semi Special (0)</option>
                                                            <option>General (0)</option>
                                                            <option>I.C.U (0)</option>
                                                            <option> Day Care (0)</option>
                                                            <option>Post-op Ward (0)</option>
                                                        </select></div>
                                                </div>


                                                <div class="col-sm-0">
                                                    <h6 class="">Show </h6>

                                                </div>
                                                <div class="col-sm-0">
                                                    <div class=""><select class="">
                                                            <option>10</option>
                                                            <option>10</option>
                                                            <option>10</option>




                                                        </select></div>
                                                </div>

                                                <div class="col-sm-9">
                                                    <h6 class="">Entries </h6>

                                                </div>
                                                <div class="element-actions col-sm-2">
                                                    <input type="text" placeholder="search"><i
                                                        class="os-icon os-icon-search"
                                                        style="margin-left:-20px ;"></i></a>
                                                </div>
                                            </div>


                                            <div class="element-box-tp">
                                                <div class="table-responsive">
                                                    <table class="table table-padded text-center">
                                                        <thead>
                                                            <tr>
                                                                <th>Sr</th>
                                                                <th>Patient Name</th>
                                                                <th>Patient ID</th>
                                                                <th>IP NO</th>
                                                                <th>Content</th>
                                                                <th>Room/Ward</th>
                                                                <th>Dr Name</th>
                                                                <th>Department</th>
                                                                <th>Status</th>
                                                                <th>Option</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>

                                </div>
                            </div>
                        </div>

                        <div class="display-type"></div>
                    </div>
@endsection