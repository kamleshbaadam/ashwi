@extends('backend.reception.layout.app')

@push('title')
<title>Bed List</title>
@endpush

@section('content')

            <div class="content-w" style="margin-top: -50px;">
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">

                                <div class="element-actions"><a class="btn btn-primary btn-primary"
                                        href="Add_Bed.html"><i class="os-icon os-icon-ui-22"></i>
                                        <span>Add
                                            Bad </span></a></div>
                                <h6 class="element-header">Bed List
                                </h6>

                                <div class="element-box-tp">
                                    <div class="table-responsive">
                                        <table class="table table-padded">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Bed Type </th>
                                                    <th>Description</th>
                                                    <th>Bed Capacity</th>
                                                    <th>Package</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">
                                                        1
                                                    </td>
                                                    <td>
                                                        <div class="user-with-avatar"><span>Bad type 1</span>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="smaller lighter">I have tried this solution but
                                                            it does not open...</div>
                                                    </td>
                                                    <td>1</td>
                                                    <td>5</td>
                                                    <td class="nowrap"><span
                                                            class="status-pill smaller red"></span><span>not</span>
                                                    </td>
                                                    <td class="row-actions"><a href="#"><i
                                                                class="os-icon os-icon-grid-10"></i></a><a href="#"><i
                                                                class="os-icon os-icon-ui-44"></i></a><a class="danger"
                                                            href="#"><i class="os-icon os-icon-ui-15"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        2
                                                    </td>
                                                    <td>
                                                        <div class="user-with-avatar"><span>Bad type 1</span>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="smaller lighter">I have tried this solution but
                                                            it does not open...</div>
                                                    </td>
                                                    <td>1</td>
                                                    <td>5</td>
                                                    <td class="nowrap"><span
                                                            class="status-pill smaller red"></span><span>not</span>
                                                    </td>
                                                    <td class="row-actions"><a href="#"><i
                                                                class="os-icon os-icon-grid-10"></i></a><a href="#"><i
                                                                class="os-icon os-icon-ui-44"></i></a><a class="danger"
                                                            href="#"><i class="os-icon os-icon-ui-15"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        3
                                                    </td>
                                                    <td>
                                                        <div class="user-with-avatar"><span>Bad type 1</span>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="smaller lighter">I have tried this solution but
                                                            it does not open...</div>
                                                    </td>
                                                    <td>1</td>
                                                    <td>5</td>
                                                    <td class="nowrap"><span
                                                            class="status-pill smaller red"></span><span>not</span>
                                                    </td>
                                                    <td class="row-actions"><a href="#"><i
                                                                class="os-icon os-icon-grid-10"></i></a><a href="#"><i
                                                                class="os-icon os-icon-ui-44"></i></a><a class="danger"
                                                            href="#"><i class="os-icon os-icon-ui-15"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        4
                                                    </td>
                                                    <td>
                                                        <div class="user-with-avatar"><span>Bad type 1</span>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="smaller lighter">I have tried this solution but
                                                            it does not open...</div>
                                                    </td>
                                                    <td>1</td>
                                                    <td>5</td>
                                                    <td class="nowrap"><span
                                                            class="status-pill smaller red"></span><span>not</span>
                                                    </td>
                                                    <td class="row-actions"><a href="#"><i
                                                                class="os-icon os-icon-grid-10"></i></a><a href="#"><i
                                                                class="os-icon os-icon-ui-44"></i></a><a class="danger"
                                                            href="#"><i class="os-icon os-icon-ui-15"></i></a></td>
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


            <div class="display-type"></div>
        </div>

        <div class="display-type"></div>
    </div>
  @endsection