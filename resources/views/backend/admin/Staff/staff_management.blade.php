@extends('backend.admin.layout.app')
@push('title')
<title>Staff Management</title>
@endpush
@section('content')
    <div class="content-w">
        <div class="content-i">
            <div class="content-box">
                <div class="element-wrapper">
                    <div class="element-actions">
                        <a class="btn btn-primary btn-primary" href="{{ url('admin/staffAdd') }}">
                            <i class="os-icon os-icon-ui-22"></i>
                            <span>Add Staff</span>
                        </a>
                    </div>
                    @include('flash-message')
                    <h6 class="element-header">Staff Management</h6>
                    <div class="element-box-tp">
                        <div class="table-responsive">
                            <table class="table table-padded">
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Staff Name</th>
                                        <th>Role</th>
                                        <th>Phone no</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($staffData))
                                        @php
                                            $i=1;
                                        @endphp
                                        @foreach($staffData as $val)
                                            <tr>
                                                <td class="text-center">{{ $i++ }}</td>
                                                <td>
                                                    <div class="user-with-avatar">
                                                        <span>{{ $val['first_name'].' '.$val['last_name']}}</span>
                                                    </div>
                                                </td>
                                                <td>{{ ucfirst($val['role']) }}</td>
                                                <td>0987654321</td>
                                                <td class="nowrap">
                                                    <span class="status-pill smaller green"></span><span>Active</span>
                                                </td>
                                                <td class="row-actions">
                                                    <a href="{{ url('admin/staffAdd'.'/'.$val['id']) }}">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
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