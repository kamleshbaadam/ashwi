
@extends('backend.reception.layout.app')

@push('title')
<title>Out Patient Invoice</title>
@endpush

@section('content')



        <div class="content-w" style="margin-top: -50px;">
        <div class="content-i">
            <div class="content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="element-wrapper">
                            <h6 class="element-header">Billing</h6>





                            <div class="element-box">
                                <form>

                                    <div class="element-actions"><a class="btn btn-primary btn-primary"
                                            href="Out_patient_Receipt.html">
                                            <i class="os-icon os-icon-ui-22"></i><span>Add
                                                Receipt</span></a>
                                    </div>


                                    <h6 class="element-header">OutPatient Receipt</h6>

                                    <div class="form-group">
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
                                                    class="os-icon os-icon-search" style="margin-left:-20px ;"></i></a>
                                            </div>
                                        </div>


                                        <div class="element-box-tp">
                                            <div class="table-responsive">
                                                <table class="table table-padded text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>Patient Name</th>
                                                            <th>Patient ID</th>
                                                            <th>Invoice ID</th>
                                                            <th>Date</th>
                                                            <th>Amount</th>
                                                            <th>Created By</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>

                                                            <td>
                                                                <div class="smaller">Dhruvi</div>

                                                            </td>
                                                            <td>
                                                                <div class="smaller">OP1234</div>

                                                            </td>
                                                            <td>
                                                                <div class="smaller">IP1234</div>

                                                            </td>

                                                            <td>
                                                                <div class="smaller">6/12/2023</div>

                                                            </td>

                                                            <td>
                                                                <div class="smaller">2382.2</div>

                                                            </td>


                                                            <td>
                                                                <div class="smaller">Reception</div>

                                                            </td>
                                                            <td class="row-actions"><a href="#"><i
                                                                        class="os-icon os-icon-grid-10"></i></a><a
                                                                    href="#"><i class="os-icon os-icon-ui-44"></i></a><a
                                                                    class="danger" href="#"><i
                                                                        class="os-icon os-icon-ui-15"></i></a></td>
                                                        </tr>
                                                        <tr>

                                                            <td>
                                                                <div class="smaller">Dhruvi</div>

                                                            </td>
                                                            <td>
                                                                <div class="smaller">OP1234</div>

                                                            </td>
                                                            <td>
                                                                <div class="smaller">IP1234</div>

                                                            </td>

                                                            <td>
                                                                <div class="smaller">6/12/2023</div>

                                                            </td>

                                                            <td>
                                                                <div class="smaller">2382.2</div>

                                                            </td>


                                                            <td>
                                                                <div class="smaller">Reception</div>

                                                            </td>
                                                            <td class="row-actions"><a href="#"><i
                                                                        class="os-icon os-icon-grid-10"></i></a><a
                                                                    href="#"><i class="os-icon os-icon-ui-44"></i></a><a
                                                                    class="danger" href="#"><i
                                                                        class="os-icon os-icon-ui-15"></i></a></td>
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