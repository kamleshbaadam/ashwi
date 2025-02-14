@extends('backend.reception.layout.app')

@push('title')
<title>Master Date</title>
@endpush

@section('content')



        <div class="content-w" style="margin-top: -50px;">
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">



                                <h6 class="element-header">Date Analytics</h6>
                                <div class="element-box">
                                    <form>

                                        <div class="form-group">
                                            <h5 class="" style="margin-bottom: 30px;"> Master Date </h5>

                                            <div class="row">

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
                                                                <th>Phone</th>
                                                                <th>Referred Cases</th>
                                                                <th>Created on</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="">
                                                                    1
                                                                </td>
                                                                <td>
                                                                    <div class="smaller">Dhruvi</div>

                                                                </td>
                                                                <td>
                                                                    <div class="smaller">OP1234</div>

                                                                </td>
                                                                <td>
                                                                    <div class="smaller">933985723</div>

                                                                </td>
                                                                <td>
                                                                    <div class="smaller">view Details</div>

                                                                </td>
                                                                <td>
                                                                    <div class="smaller">6/12/2023</div>

                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="">
                                                                    2
                                                                </td>
                                                                <td>
                                                                    <div class="smaller">Dhruvi</div>

                                                                </td>
                                                                <td>
                                                                    <div class="smaller">OP1234</div>

                                                                </td>
                                                                <td>
                                                                    <div class="smaller">933985723</div>

                                                                </td>
                                                                <td>
                                                                    <div class="smaller">view Details</div>

                                                                </td>
                                                                <td>
                                                                    <div class="smaller">6/12/2023</div>

                                                                </td>
                                                            </tr>

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