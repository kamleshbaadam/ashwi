
@extends('backend.reception.layout.app')

@push('title')
<title>Appointment</title>
@endpush

@section('content')
        <div class="content-w" style="margin-top: -50px;">
            <div class="content-box">


                <div class="element-wrapper row">
                    <!-- <div class="col-lg-12">
                            <h6 class="element-header">APPOINTMENT </h6>

                        </div> -->
                    <div class="col-sm-2">
                        <div class="form-group">Start date<input class="form-control" placeholder="time" type="date">
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="form-group">End date<input class="form-control" placeholder="time" type="date">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                        </div>
                    </div>



                    <div class="col-sm-3 text-right">
                        <div class="form-group "><input class="form-control" placeholder="search" type="search">
                        </div>
                    </div>


                </div>



                <div class="element-box-tp" style="margin-top: -50px;">

                    <div class="table-responsive">
                        <table class="table table-padded">
                            <thead>
                                <tr class="">
                                    <th>SR</th>
                                    <th>Name </th>
                                    <th>phone number</th>
                                    <th>REFERENCE</th>
                                    <th>Case_type</th>
                                    <th>Dr_Name </th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>RECEIPT</th>
                                    <th>Remark</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        1</td>


                                    <td>
                                        <div class="smaller"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>
                                    </td>
                                    <td>
                                        <div class="smaller">9852735582</div>
                                    </td>
                                    
                                    <td>
                                        <div class="user-with-avatar"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="smaller ">Follow-Up</div>
                                    </td>


                                    <td>
                                        <div class="smaller ">Dr.Mihir </div>
                                    </td>
                                    <td>
                                        <div class="smaller ">26/12/2000</div>
                                    </td>
                                    <td>
                                        <div class="smaller ">12:00 pm</div>
                                    </td>
                                    <!-- <td>
                                            <div class="smaller yellow status-pill"  class="status-pill smaller yellow">book</div>
                                        </td> -->

                                    <td class="nowrap"><span
                                            class="status-pill smaller yellow"></span><span>Confirmed</span>
                                    </td>
                                    <td>
                                        <div class="smaller ">he is not coming </div>
                                    </td>

                                    <td class="row-actions">
                                        <a href="add_new_opd.html"><i class="os-icon os-icon-ui-49"></i></a>
                                    </td>
                                    <td><a class="btn btn-primary btn-sm"
                                            href="outpatient_case_memo.html"><span>Print</span></a></td>

                                </tr>

                                <tr>
                                    <td class="text-center">
                                        2</td>


                                    <td>
                                        <div class="smaller"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>
                                    </td>
                                    <td>
                                        <div class="smaller">9852735582</div>
                                    </td>
                                    
                                    <td>
                                        <div class="user-with-avatar"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="smaller ">Follow-Up</div>
                                    </td>


                                    <td>
                                        <div class="smaller ">Dr.Mihir </div>
                                    </td>
                                    <td>
                                        <div class="smaller ">26/12/2000</div>
                                    </td>
                                    <td>
                                        <div class="smaller ">12:00 pm</div>
                                    </td>
                                    <!-- <td>
                                            <div class="smaller yellow status-pill"  class="status-pill smaller yellow">book</div>
                                        </td> -->

                                    <td class="nowrap"><span
                                            class="status-pill smaller yellow"></span><span>Confirmed</span>
                                    </td>
                                    <td>
                                        <div class="smaller ">he is not coming </div>
                                    </td>

                                    <td class="row-actions">
                                        <a href="add_new_opd.html"><i class="os-icon os-icon-ui-49"></i></a>
                                    </td>
                                    <td><a class="btn btn-primary btn-sm"
                                            href="outpatient_case_memo.html"><span>Print</span></a></td>

                                </tr>
                                <tr>
                                    <td class="text-center">
                                        3</td>


                                    <td>
                                        <div class="smaller"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>
                                    </td>
                                    <td>
                                        <div class="smaller">9852735582</div>
                                    </td>
                                    
                                    <td>
                                        <div class="user-with-avatar"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="smaller ">Follow-Up</div>
                                    </td>


                                    <td>
                                        <div class="smaller ">Dr.Mihir </div>
                                    </td>
                                    <td>
                                        <div class="smaller ">26/12/2000</div>
                                    </td>
                                    <td>
                                        <div class="smaller ">12:00 pm</div>
                                    </td>
                                    <!-- <td>
                                            <div class="smaller yellow status-pill"  class="status-pill smaller yellow">book</div>
                                        </td> -->

                                    <td class="nowrap"><span
                                            class="status-pill smaller yellow"></span><span>Confirmed</span>
                                    </td>
                                    <td>
                                        <div class="smaller ">he is not coming </div>
                                    </td>

                                    <td class="row-actions">
                                        <a href="add_new_opd.html"><i class="os-icon os-icon-ui-49"></i></a>
                                    </td>
                                    <td><a class="btn btn-primary btn-sm"
                                            href="outpatient_case_memo.html"><span>Print</span></a></td>

                                </tr>
                                <tr>
                                    <td class="text-center">
                                        4</td>


                                    <td>
                                        <div class="smaller"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>
                                    </td>
                                    <td>
                                        <div class="smaller">9852735582</div>
                                    </td>
                                    
                                    <td>
                                        <div class="user-with-avatar"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="smaller ">Follow-Up</div>
                                    </td>


                                    <td>
                                        <div class="smaller ">Dr.Mihir </div>
                                    </td>
                                    <td>
                                        <div class="smaller ">26/12/2000</div>
                                    </td>
                                    <td>
                                        <div class="smaller ">12:00 pm</div>
                                    </td>
                                    <!-- <td>
                                            <div class="smaller yellow status-pill"  class="status-pill smaller yellow">book</div>
                                        </td> -->

                                    <td class="nowrap"><span
                                            class="status-pill smaller yellow"></span><span>Confirmed</span>
                                    </td>
                                    <td>
                                        <div class="smaller ">he is not coming </div>
                                    </td>

                                    <td class="row-actions">
                                        <a href="add_new_opd.html"><i class="os-icon os-icon-ui-49"></i></a>
                                    </td>
                                    <td><a class="btn btn-primary btn-sm"
                                            href="outpatient_case_memo.html"><span>Print</span></a></td>

                                </tr>
                                <tr>
                                    <td class="text-center">
                                        5</td>


                                    <td>
                                        <div class="smaller"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>
                                    </td>
                                    <td>
                                        <div class="smaller">9852735582</div>
                                    </td>
                                    
                                    <td>
                                        <div class="user-with-avatar"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="smaller ">Follow-Up</div>
                                    </td>


                                    <td>
                                        <div class="smaller ">Dr.Mihir </div>
                                    </td>
                                    <td>
                                        <div class="smaller ">26/12/2000</div>
                                    </td>
                                    <td>
                                        <div class="smaller ">12:00 pm</div>
                                    </td>
                                    <!-- <td>
                                            <div class="smaller yellow status-pill"  class="status-pill smaller yellow">book</div>
                                        </td> -->

                                    <td class="nowrap"><span
                                            class="status-pill smaller yellow"></span><span>Confirmed</span>
                                    </td>
                                    <td>
                                        <div class="smaller ">he is not coming </div>
                                    </td>

                                    <td class="row-actions">
                                        <a href="add_new_opd.html"><i class="os-icon os-icon-ui-49"></i></a>
                                    </td>
                                    <td><a class="btn btn-primary btn-sm"
                                            href="outpatient_case_memo.html"><span>Print</span></a></td>

                                </tr>
                                <tr>
                                    <td class="text-center">
                                        6</td>


                                    <td>
                                        <div class="smaller"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>
                                    </td>
                                    <td>
                                        <div class="smaller">9852735582</div>
                                    </td>
                                    
                                    <td>
                                        <div class="user-with-avatar"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="smaller ">Follow-Up</div>
                                    </td>


                                    <td>
                                        <div class="smaller ">Dr.Mihir </div>
                                    </td>
                                    <td>
                                        <div class="smaller ">26/12/2000</div>
                                    </td>
                                    <td>
                                        <div class="smaller ">12:00 pm</div>
                                    </td>
                                    <!-- <td>
                                            <div class="smaller yellow status-pill"  class="status-pill smaller yellow">book</div>
                                        </td> -->

                                    <td class="nowrap"><span
                                            class="status-pill smaller yellow"></span><span>Confirmed</span>
                                    </td>
                                    <td>
                                        <div class="smaller ">he is not coming </div>
                                    </td>

                                    <td class="row-actions">
                                        <a href="add_new_opd.html"><i class="os-icon os-icon-ui-49"></i></a>
                                    </td>
                                    <td><a class="btn btn-primary btn-sm"
                                            href="outpatient_case_memo.html"><span>Print</span></a></td>

                                </tr>
                                <tr>
                                    <td class="text-center">
                                        7</td>


                                    <td>
                                        <div class="smaller"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>
                                    </td>
                                    <td>
                                        <div class="smaller">9852735582</div>
                                    </td>
                                    
                                    <td>
                                        <div class="user-with-avatar"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="smaller ">Follow-Up</div>
                                    </td>


                                    <td>
                                        <div class="smaller ">Dr.Mihir </div>
                                    </td>
                                    <td>
                                        <div class="smaller ">26/12/2000</div>
                                    </td>
                                    <td>
                                        <div class="smaller ">12:00 pm</div>
                                    </td>
                                    <!-- <td>
                                            <div class="smaller yellow status-pill"  class="status-pill smaller yellow">book</div>
                                        </td> -->

                                    <td class="nowrap"><span
                                            class="status-pill smaller yellow"></span><span>Confirmed</span>
                                    </td>
                                    <td>
                                        <div class="smaller ">he is not coming </div>
                                    </td>

                                    <td class="row-actions">
                                        <a href="add_new_opd.html"><i class="os-icon os-icon-ui-49"></i></a>
                                    </td>
                                    <td><a class="btn btn-primary btn-sm"
                                            href="outpatient_case_memo.html"><span>Print</span></a></td>

                                </tr>
                                <tr>
                                    <td class="text-center">
                                        8</td>


                                    <td>
                                        <div class="smaller"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>
                                    </td>
                                    <td>
                                        <div class="smaller">9852735582</div>
                                    </td>
                                    
                                    <td>
                                        <div class="user-with-avatar"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="smaller ">Follow-Up</div>
                                    </td>


                                    <td>
                                        <div class="smaller ">Dr.Mihir </div>
                                    </td>
                                    <td>
                                        <div class="smaller ">26/12/2000</div>
                                    </td>
                                    <td>
                                        <div class="smaller ">12:00 pm</div>
                                    </td>
                                    <!-- <td>
                                            <div class="smaller yellow status-pill"  class="status-pill smaller yellow">book</div>
                                        </td> -->

                                    <td class="nowrap"><span
                                            class="status-pill smaller yellow"></span><span>Confirmed</span>
                                    </td>
                                    <td>
                                        <div class="smaller ">he is not coming </div>
                                    </td>

                                    <td class="row-actions">
                                        <a href="add_new_opd.html"><i class="os-icon os-icon-ui-49"></i></a>
                                    </td>
                                    <td><a class="btn btn-primary btn-sm"
                                            href="outpatient_case_memo.html"><span>Print</span></a></td>

                                </tr>
                                <tr>
                                    <td class="text-center">
                                        9</td>


                                    <td>
                                        <div class="smaller"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>
                                    </td>
                                    <td>
                                        <div class="smaller">9852735582</div>
                                    </td>
                                    
                                    <td>
                                        <div class="user-with-avatar"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="smaller ">Follow-Up</div>
                                    </td>


                                    <td>
                                        <div class="smaller ">Dr.Mihir </div>
                                    </td>
                                    <td>
                                        <div class="smaller ">26/12/2000</div>
                                    </td>
                                    <td>
                                        <div class="smaller ">12:00 pm</div>
                                    </td>
                                    <!-- <td>
                                            <div class="smaller yellow status-pill"  class="status-pill smaller yellow">book</div>
                                        </td> -->

                                    <td class="nowrap"><span
                                            class="status-pill smaller yellow"></span><span>Confirmed</span>
                                    </td>
                                    <td>
                                        <div class="smaller ">he is not coming </div>
                                    </td>

                                    <td class="row-actions">
                                        <a href="add_new_opd.html"><i class="os-icon os-icon-ui-49"></i></a>
                                    </td>
                                    <td><a class="btn btn-primary btn-sm"
                                            href="outpatient_case_memo.html"><span>Print</span></a></td>

                                </tr>
                                <tr>
                                    <td class="text-center">
                                        10</td>


                                    <td>
                                        <div class="smaller"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>
                                    </td>
                                    <td>
                                        <div class="smaller">9852735582</div>
                                    </td>
                                    
                                    <td>
                                        <div class="user-with-avatar"><span>Dhruvi Satani</span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="smaller ">Follow-Up</div>
                                    </td>


                                    <td>
                                        <div class="smaller ">Dr.Mihir </div>
                                    </td>
                                    <td>
                                        <div class="smaller ">26/12/2000</div>
                                    </td>
                                    <td>
                                        <div class="smaller ">12:00 pm</div>
                                    </td>
                                    <!-- <td>
                                            <div class="smaller yellow status-pill"  class="status-pill smaller yellow">book</div>
                                        </td> -->

                                    <td class="nowrap"><span
                                            class="status-pill smaller yellow"></span><span>Confirmed</span>
                                    </td>
                                    <td>
                                        <div class="smaller ">he is not coming </div>
                                    </td>

                                    <td class="row-actions">
                                        <a href="add_new_opd.html"><i class="os-icon os-icon-ui-49"></i></a>
                                    </td>
                                    <td><a class="btn btn-primary btn-sm"
                                            href="outpatient_case_memo.html"><span>Print</span></a></td>

                                </tr>


                            </tbody>



                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-9">
                        <div class="dataTables_info" id="dataTable1_info" role="status" aria-live="polite">Showing 1
                            to
                            10 of 100 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable1_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous" id="dataTable1_previous"><a href="#"
                                        aria-controls="dataTable1" data-dt-idx="0" tabindex="0"
                                        class="page-link">Previous</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable1"
                                        data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable1"
                                        data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable1"
                                        data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable1"
                                        data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable1"
                                        data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable1"
                                        data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                <li class="paginate_button page-item next" id="dataTable1_next"><a href="#"
                                        aria-controls="dataTable1" data-dt-idx="7" tabindex="0"
                                        class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="display-type"></div>
        </div>
       
@endsection