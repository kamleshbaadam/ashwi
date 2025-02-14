@extends('backend.drpanel.layout.app')

@push('title')
<title>OPD Patients</title>
@endpush

@section('content')


<div class="content-w">

    <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
    </div>

    <div class="content-w" style="margin-top: -50px;">
        <div class="content-i">
            <div class="content-box">
                <div class="element-wrapper compact pt-4">

                    
                    <div class="element-wrapper">
                        <h6 class="element-header">Completed OPD</h6>
                        <div class="element-box-tp">
                            <div class="table-responsive">
                                <table class="table table-padded">
                                    <thead>
                                        <tr>
                                            <th>Sr</th>
                                            <th>OPD ID</th>
                                            <th>NAME</th>
                                            <th>DIGNOSE</th>
                                            <th>AGE</th>
                                            <th>department</th>
                                            <th>Status</th>

                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">1</td>
                                            <td>
                                                <div class="user-with-avatar"><img alt=""
                                                        src="{{ asset('backend/drpanel/img/avatar1.png') }}"><span>Mehta</span></div>
                                            </td>
                                            <td>
                                                <div class="smaller lighter">I have enabled the software for
                                                    you, you can try now...</div>
                                            </td>
                                            <td>
                                                <div class="smaller lighter">35</div>
                                            </td>
                                            <td>
                                                <div> Neurology </div>
                                            </td>
                                            <td class="nowrap"><span
                                                    class="status-pill smaller red"></span><span>Closed</span>
                                            </td>
                                            <td class="row-actions"><a href="#"><i
                                                        class="os-icon os-icon-grid-10"></i></a><a
                                                    href="#"><i class="os-icon os-icon-ui-44"></i></a><a
                                                    class="danger" href="#"><i
                                                        class="os-icon os-icon-ui-15"></i></a></td>
                                        </tr>
                                        <tr>

                                            <td class="text-center">2</td>
                                            <td class="text-center">1</td>

                                            <td>
                                                <div class="user-with-avatar"><img alt=""
                                                        src="{{ asset('backend/drpanel/img/avatar1.png') }}"><span>jigar</span></div>
                                            </td>
                                            <td>
                                                <div class="smaller lighter">Please approve this request so
                                                    we can move...</div>
                                            </td>
                                            <td>
                                                <div class="smaller lighter">34</div>
                                            </td>
                                            <td>
                                                <div> Neurology </div>
                                            </td>
                                            <td class="nowrap"><span
                                                    class="status-pill smaller red"></span><span>Closed</span>
                                            </td>
                                            <td class="row-actions"><a href="#"><i
                                                        class="os-icon os-icon-grid-10"></i></a><a
                                                    href="#"><i class="os-icon os-icon-ui-44"></i></a><a
                                                    class="danger" href="#"><i
                                                        class="os-icon os-icon-ui-15"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">1</td>

                                            <td>
                                                <div class="user-with-avatar"><img alt=""
                                                        src="{{ asset('backend/drpanel/img/avatar1.png') }}"><span>mayank</span></div>
                                            </td>
                                            <td>
                                                <div class="smaller lighter">We will need some login
                                                    credentials to make...</div>
                                            </td>
                                            <td>
                                                <div class="smaller lighter">43</div>
                                            </td>
                                            <td>
                                                <div> Neurology </div>
                                            </td>
                                            <td class="nowrap"><span
                                                    class="status-pill smaller red"></span><span>Closed</span>
                                            </td>
                                            <td class="row-actions"><a href="#"><i
                                                        class="os-icon os-icon-grid-10"></i></a><a
                                                    href="#"><i class="os-icon os-icon-ui-44"></i></a><a
                                                    class="danger" href="#"><i
                                                        class="os-icon os-icon-ui-15"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">1</td>

                                            <td>
                                                <div class="user-with-avatar"><img alt=""
                                                        src="{{ asset('backend/drpanel/img/avatar1.png') }}"><span>hardik</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="smaller lighter">I have enabled the software for
                                                    you, you can try now...</div>
                                            </td>
                                            <td>
                                                <div class="smaller lighter">44</div>
                                            </td>
                                            <td>
                                                <div> Neurology </div>
                                            </td>
                                            <td class="nowrap"><span
                                                    class="status-pill smaller red"></span><span>Closed</span>
                                            </td>
                                            <td class="row-actions"><a href="#"><i
                                                        class="os-icon os-icon-grid-10"></i></a><a
                                                    href="#"><i class="os-icon os-icon-ui-44"></i></a><a
                                                    class="danger" href="#"><i
                                                        class="os-icon os-icon-ui-15"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">1</td>

                                            <td>
                                                <div class="user-with-avatar"><img alt=""
                                                    src="{{ asset('backend/drpanel/img/avatar2.png') }}"><span>Dhruvi</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="smaller lighter">I have tried this solution but
                                                    it does not open...</div>
                                            </td>
                                            <td>
                                                <div class="smaller lighter">87</div>
                                            </td>
                                            <td>
                                                <div> Neurology </div>
                                            </td>
                                            <td class="nowrap"><span
                                                    class="status-pill smaller red"></span><span>Closed</span>
                                            </td>
                                            <td class="row-actions"><a href="#"><i
                                                        class="os-icon os-icon-grid-10"></i></a><a
                                                    href="#"><i class="os-icon os-icon-ui-44"></i></a><a
                                                    class="danger" href="#"><i
                                                        class="os-icon os-icon-ui-15"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-center">1</td>

                                            <td>
                                                <div class="user-with-avatar"><img alt=""
                                                        src="{{ asset('backend/drpanel/img/avatar1.png') }}"><span>Mehta</span></div>
                                            </td>
                                            <td>
                                                <div class="smaller lighter">I have enabled the software for
                                                    you, you can try now...</div>
                                            </td>
                                            <td>
                                                <div class="smaller lighter">76</div>
                                            </td>
                                            <td>
                                                <div> Neurology </div>
                                            </td>
                                            <td class="nowrap"><span
                                                    class="status-pill smaller red"></span><span>Closed</span>
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
    </div>
    <div class="display-type"></div>
@endsection