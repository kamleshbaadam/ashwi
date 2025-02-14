
@extends('backend.reception.layout.app')

@push('title')
<title>OT Schedule</title>
@endpush

@section('content')

        <div class="content-w" style="margin-top: -50px;">
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">



                                <h6 class="element-header">OT Schedule</h6>
                                <div class="element-box">
                                    <form>
                                        <h5 class="form-header">OT</h5>

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
                                                        class="os-icon os-icon-search"
                                                        style="margin-left:-20px ;"></i></a>
                                                </div>
                                            </div>


                                            <div class="element-box-tp">
                                                <div class="table-responsive">
                                                    <table class="table table-padded text-center">
                                                        <thead>


                                                            <tr>
                                                                <th>SR</th>
                                                                <th>patient Name </th>
                                                                <th>IP Number</th>
                                                                <th>Doctor</th>
                                                                <th>anesthesia </th>
                                                                <th>Operation</th>
                                                                <th>Time</th>
                                                                <th>Status</th>
                                                                <th>Actions</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>

                                                                <td class="text-center">
                                                                    1 </td>

                                                                <td class="text-center">
                                                                    Satani Dhruvi</td>
                                                                <td class="text-center">
                                                                    OT-1 </td>
                                                                <td>
                                                                    <div class="user-with-avatar">
                                                                        <span>Dr.Dhruvi</span>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    ANESTHESIA</td>

                                                                <td class="text-center">
                                                                    Opration</td>
                                                                <td class="text-center">
                                                                    21/2/2023</td>

                                                                <td class="text-center">
                                                                    Activ</td>

                                                                <td class="row-actions"><a href="#"><i
                                                                            class="os-icon os-icon-grid-10"></i></a><a
                                                                        href="#"><i
                                                                            class="os-icon os-icon-ui-44"></i></a><a
                                                                        class="danger" href="#"><i
                                                                            class="os-icon os-icon-ui-15"></i></a>
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

                    </div>

                </div>


                <div class="display-type"></div>
            </div>
        </div>
        <div class="display-type"></div>
    </div>
   @endsection