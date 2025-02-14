@extends('backend.reception.layout.app')

@push('title')
<title>Daily Collection</title>
@endpush

@section('content')




        <div class="content-w" style="margin-top: -50px;">
        <div class="content-i">
            <div class="content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="element-wrapper">
                            <h6 class="element-header">Data Analytics</h6>

                            <div class="element-box">

                                <div class="element-actions " style="padding-left: 10px;"><a
                                        class="btn btn-primary btn-primary" href="#">
                                        <span>
                                            Print
                                        </span></a></div>

                                <div class="element-actions " style="padding-left: 10px;"><a
                                        class="btn btn-primary btn-primary" href="IPD_patients.html">
                                        <span>
                                            IPD
                                        </span></a></div>

                                <div class="element-actions">
                                    <a class="btn btn-primary btn-primary" href="OPD_patients.html"><span>OPD
                                        </span></a>
                                </div>
                                <h6 class="element-header">Daily Colllection</h6>

                                <form>

                                    <div class="form-group">


                                        <div class="row">


                                            <div class="col-sm-10">

                                            </div>

                                            <div class="element-actions col-sm-2">
                                                <input type="text" placeholder="search"><i
                                                    class="os-icon os-icon-search" style="margin-left:-20px ;"></i></a>
                                            </div>
                                        </div>


                                        <div class="element-box-tp">
                                            <div class="table-responsive">
                                                <table class="table table-padded text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr</th>
                                                            <th>Type</th>
                                                            <th>Bill ID</th>
                                                            <th>Date</th>
                                                            <th>Counter</th>
                                                            <th>Issued By</th>
                                                            <th>Patient Name</th>
                                                            <th>Patient Id</th>
                                                            <th>Mode Of Payment</th>
                                                            <th>Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">
                                                                1 </td>
                                                            <td>
                                                                <div class="user-with-avatar"><span>Case</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="smaller lighter">RS.2000</div>
                                                            </td>

                                                            <td>
                                                                <div class="smaller lighter">2/3/2022</div>
                                                            </td>

                                                            <td>
                                                                <div class="smaller lighter">OPD Billing</div>
                                                            </td>

                                                            <td>
                                                                <div class="smaller lighter">Reception</div>
                                                            </td>
                                                            <td>
                                                                <div class="smaller lighter">Dhruvi</div>
                                                            </td>

                                                            <td>
                                                                <div class="smaller lighter">Op322 </div>
                                                            </td>
                                                            <td>
                                                                <div class="smaller lighter">Case</div>
                                                            </td>
                                                            <td>
                                                                <div class="smaller lighter">2200 </div>
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