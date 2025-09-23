@extends('backend.admin.layout.app')
@push('title')
    <title>Services</title>
@endpush
@section('content')

    <div class="content-w">
        <div class="content-i">
            <div class="content-box">
                <div class="element-wrapper compact pt- accordion">
                    <div class="element-actions">
                        <a class="btn btn-primary btn-sm" href="{{ url('admin/add-service') }}">
                            <i class="os-icon os-icon-ui-22"></i>
                            <span>Add Service</span>
                        </a>
                    </div>
                    <h6 class="element-header">Recent Services</h6>
                </div>
                @include('flash-message')
                <div class="element-wrapper">
                    <div class="element-wrapper">
                        <div class="element-box-tp">
                            <div class="table-responsive">
                                <table class="table table-padded">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NAME</th>
                                            <th>ASSIGNED TO</th>
                                            <th>PERIOD</th>
                                            <th>QUANTITY</th>
                                            <th>LAST CHECK DATE</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($servicesData as $val)
                                        <tr>
                                            <td class="text-center">{{$loop->iteration}}</td>
                                            <td>
                                                {{$val['name']}}
                                            </td>
                                            <td>
                                                {{$val['staff']['first_name']}}
                                            </td>
                                            <td>
                                                {{ucfirst($val['period'])}}
                                            </td>
                                            <td>
                                                {{$val['quantity']}}
                                            </td>
                                            <td>
                                                {{date('d-m-Y', strtotime($val['last_check_date']))}}
                                            </td>
                                            <td class="nowrap"><span
                                                    class="status-pill smaller {{ $val['status'] == 'active' ? 'green' : 'red' }}"></span><span>{{ucfirst($val['status'])}}</span>
                                            </td>
                                            <td class="row-actions">
                                                <a href="{{ url('admin/add-service/'.$val['id'])}}">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="javascript:void(0)" onclick="deleteService({{$val['id']}})">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deleteService(id) {
            if(confirm('Are you sure you want to delete this service?')) {
                window.location.href = "{{ url('admin/delete-service') }}/" + id;
            }
        }
    </script>
@endsection