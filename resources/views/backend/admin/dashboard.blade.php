@extends('backend.admin.layout.app')
@push('title')
<title>Admin</title>
@endpush
@section('content')

    <div class="content-w">
        <div class="content-i">
            <div class="content-box">
                <div class="element-wrapper compact pt- accordion">
                    <div class="element-actions">
                        <a class="btn btn-primary btn-sm" href="{{ url('admin/staffAdd') }}">
                            <i class="os-icon os-icon-ui-22"></i>
                            <span>Add Staff</span>
                        </a>
                        <a class="btn btn-success btn-sm" href="javascript:">
                            <i class="os-icon os-icon-grid-10"></i>
                            <span>View OPD </span>
                        </a>
                    </div>
                    <h6 class="element-header">Recent OPD</h6>
                </div>
                <div class="element-wrapper">
                    <div class="element-wrapper">
                        <div class="element-box-tp">
                            <div class="table-responsive">
                                <table class="table table-padded">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NAME</th>
                                            <th>DIGNOSE</th>
                                            <th>AGE</th>
                                            <th>deparment</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>
                                                <div class="user-with-avatar"><img alt=""
                                                    src="{{ asset('backend/admin/img/avatar1.png') }}"><span>Mehta</span></div>
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
                                                    class="status-pill smaller yellow"></span><span>Pending</span>
                                            </td>
                                            <td class="row-actions">
                                                <div class=""><a class="btn btn-primary btn-primary"
                                                        href="/admin/add-opd" style="color: white;"><span>
                                                            Start Diagnos</span></a></div>

                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>
                                                <div class="user-with-avatar"><img alt=""
                                                    src="{{ asset('backend/admin/img/avatar1.png') }}"><span>Jigar</span></div>
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
                                                    class="status-pill smaller yellow"></span><span>Pending</span>
                                            </td>
                                            <td class="row-actions">
                                                <div class=""><a class="btn btn-primary btn-primary"
                                                        href="/admin/add-opd" style="color: white;"><span>
                                                            Start Diagnos</span></a></div>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>
                                                <div class="user-with-avatar"><img alt=""
                                                    src="{{ asset('backend/admin/img/avatar1.png') }}"><span>Tomy</span></div>
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
                                                    class="status-pill smaller yellow"></span><span>Pending</span>
                                            </td>
                                            <td class="row-actions">
                                                <div class=""><a class="btn btn-primary btn-primary"
                                                        href="/admin/add-opd" style="color: white;"><span>
                                                            Start Diagnos</span></a></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td>
                                                <div class="user-with-avatar"><img alt=""
                                                    src="{{ asset('backend/admin/img/avatar1.png') }}"><span>Harshil</span>
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
                                                    class="status-pill smaller yellow"></span><span>Pending</span>
                                            </td>
                                            <td class="row-actions">
                                                <div class=""><a class="btn btn-primary btn-primary"
                                                        href="/admin/add-opd" style="color: white;"><span>
                                                            Start Diagnos</span></a></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td>
                                                <div class="user-with-avatar"><img alt=""
                                                    src="{{ asset('backend/admin/img/avatar2.png') }}"><span>Dhruvi</span>
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
                                                    class="status-pill smaller yellow"></span><span>Pending</span>
                                            </td>
                                            <td class="row-actions">
                                                <div class=""><a class="btn btn-primary btn-primary"
                                                        href="/admin/add-opd" style="color: white;"><span>
                                                            Start Diagnos</span></a></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td>
                                                <div class="user-with-avatar"><img alt=""
                                                    src="{{ asset('backend/admin/img/avatar1.png') }}"><span>kahati</span></div>
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
                                                    class="status-pill smaller yellow"></span><span>Pending</span>
                                            </td>
                                            <td class="row-actions">
                                                <div class=""><a class="btn btn-primary btn-primary"
                                                        href="/admin/add-opd" style="color: white;"><span>
                                                            Start Diagnos</span></a></div>
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
@endsection 