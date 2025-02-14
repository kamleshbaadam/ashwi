@extends('backend.drpanel.layout.app')

@push('title')
<title>IPD List</title>
@endpush

@section('content')

            <div class="content-w">

                <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
                </div>

                <div class="content-w" style="margin-top: -50px;">
            <div class="content-i">
                <div class="content-box">
                    <div class="element-wrapper compact pt-4">
                        <div class="element-actions"><a class="btn btn-primary btn-primary" href="/drpanel/old-patients"><i
                                    class="os-icon os-icon-ui-22"></i><span>Add
                                    IPD</span></a></div>
                        <!-- <h6 class="element-header">Overview</h6> -->
                        <div class="element-wrapper">
                            <h6 class="element-header">IPD List</h6>
                            <div class="element-box-tp">
                                <div class="table-responsive">
                                    <table class="table table-padded text-center">
                                        <thead>
                                            <tr>
                                                <th>Sr</th>
                                                <th>Patient Id</th>
                                                <th>IPD NO</th>
                                                <th>PATIENT
                                                </th>
                                                <th>DOCTOR </th>
                                                <th>ADMISSION DATE</th>
                                                <th>BED</th>
                                                <th>BILL STATUS</th>
                                                <th>ACTION</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>123</td>
                                                <td class="text-center">13322334</td>
                                                <td>
                                                    <div class="user-with-avatar"><span>Mehta</span></div>
                                                </td>
                                                <td>
                                                    <div class="user-with-avatar"><span>Dr.Dhruvi</span></div>

                                                </td>
                                                <td>
                                                    <div class="smaller lighter">2/2/301</div>
                                                </td>
                                                <td>
                                                    <div> 1 </div>
                                                </td>
                                                <td class="nowrap"><span
                                                        class="status-pill smaller red"></span><span>Not Paid</span>
                                                </td>

                                                <td class="row-actions"><a href="IPD_Patient_Details.html"><i
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
@endsection