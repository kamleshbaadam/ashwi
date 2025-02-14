
@extends('backend.reception.layout.app')

@push('title')
<title>Bed Assign List</title>
@endpush

@section('content')



        <div class="content-w" style="margin-top: -50px;">
            <div class="content-i">
                <div class="content-box">

                    <div class="element-wrapper">
                        <div class="element-actions"><a class="btn btn-primary btn-primary"
                                href="Bed_Assign.html"><i class="os-icon os-icon-ui-22"></i><span>
                                    Bed Assign </span></a></div>
                        <h6 class="element-header">Bed Assign List</h6>

                        <div class="element-box-tp">
                            <div class="table-responsive">
                                <table class="table table-padded text-center">
                                    <thead>
                                        <tr>
                                            <th>SR</th>
                                            <th>Patient Name </th>
                                            <th>Patient ID</th>
                                            <th>Bed Type </th>
                                            <th>Days of admition</th>

                                            <th>Package </th>
                                            <th>Payment done </th>
                                            <th>Pending payment</th>
                                            <th>Status</th>
                                            <th>Edit Delet</th>


                                        </tr>
                                    </thead> 
                                    <tbody>
                                        <tr>
                                            <td class="">
                                                1
                                            </td>
                                            <td>
                                                <div class="user-with-avatar"><span>kenneth christian</span>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="smaller lighter">0987654321</div>
                                            </td>

                                            <td>
                                                <div class="smaller lighter">1</div>
                                            </td>
                                            
                                            <td class="nowrap"><span>1</span>
                                            </td>
                                            <td class="row-actions">
                                                1/8/2023
                                            </td>
                                            <td>
                                                <div class="smaller lighter">Done</div>
                                            </td>
                                            <td class="nowrap"><span
                                                    class="status-pill smaller red"></span><span>no</span>
                                            </td>

                                            <td class="nowrap"><span>Admit</span>
                                            </td>

                                            <td class="row-actions"><a href="#"><i
                                                        class="os-icon os-icon-grid-10"></i></a><a href="#"><i
                                                        class="os-icon os-icon-ui-44"></i></a><a class="danger"
                                                    href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                2
                                            </td>
                                            <td>
                                                <div class="user-with-avatar"><span>manshi</span>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="smaller lighter">0987654321</div>
                                            </td>

                                            <td>
                                                <div class="smaller lighter">1</div>
                                            </td>
                                            
                                            <td class="nowrap"><span>1</span>
                                            </td>
                                            <td class="row-actions">
                                                1/8/2023
                                            </td>
                                            <td>
                                                <div class="smaller lighter">Done</div>
                                            </td>
                                            <td class="nowrap"><span
                                                    class="status-pill smaller green"></span><span>yes</span>
                                            </td>

                                            <td class="nowrap"><span>Admit</span>
                                            </td>

                                            <td class="row-actions"><a href="#"><i
                                                        class="os-icon os-icon-grid-10"></i></a><a href="#"><i
                                                        class="os-icon os-icon-ui-44"></i></a><a class="danger"
                                                    href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                3
                                            </td>
                                            <td>
                                                <div class="user-with-avatar"><span>parli</span>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="smaller lighter">0987654321</div>
                                            </td>

                                            <td>
                                                <div class="smaller lighter">1</div>
                                            </td>
                                            
                                            <td class="nowrap"><span>1</span>
                                            </td>
                                            <td class="row-actions">
                                                1/8/2023
                                            </td>
                                            <td>
                                                <div class="smaller lighter">Done</div>
                                            </td>
                                            <td class="nowrap"><span
                                                    class="status-pill smaller red"></span><span>no</span>
                                            </td>

                                            <td class="nowrap"><span>Admit</span>
                                            </td>

                                            <td class="row-actions"><a href="#"><i
                                                        class="os-icon os-icon-grid-10"></i></a><a href="#"><i
                                                        class="os-icon os-icon-ui-44"></i></a><a class="danger"
                                                    href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                            </td>

                                        </tr>   <tr>
                                            <td class="text-center">
                                                4
                                            </td>
                                            <td>
                                                <div class="user-with-avatar"><span>hardik</span>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="smaller lighter">0987654321</div>
                                            </td>

                                            <td>
                                                <div class="smaller lighter">1</div>
                                            </td>
                                            
                                            <td class="nowrap"><span>1</span>
                                            </td>
                                            <td class="row-actions">
                                                1/8/2023
                                            </td>
                                            <td>
                                                <div class="smaller lighter">No</div>
                                            </td>
                                            <td class="nowrap"><span
                                                    class="status-pill smaller red"></span><span>no</span>
                                            </td>

                                            <td class="nowrap"><span>Dischareg</span>
                                            </td>

                                            <td class="row-actions"><a href="#"><i
                                                        class="os-icon os-icon-grid-10"></i></a><a href="#"><i
                                                        class="os-icon os-icon-ui-44"></i></a><a class="danger"
                                                    href="#"><i class="os-icon os-icon-ui-15"></i></a>
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