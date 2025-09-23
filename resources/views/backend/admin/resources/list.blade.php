@extends('backend.admin.layout.app')
@push('title')
    <title>Hospital Resources</title>
@endpush
@section('content')

    <div class="content-w">
        <div class="content-i">
            <div class="content-box">
                <div class="element-wrapper compact pt- accordion">
                    <div class="element-actions">
                        <a class="btn btn-primary btn-sm" href="{{ url('admin/add-resource') }}">
                            <i class="os-icon os-icon-ui-22"></i>
                            <span>Add Resource</span>
                        </a>
                    </div>
                    <h6 class="element-header">Hospital Resource Management</h6>
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
                                            <th>USES</th>
                                            <th>MAINTENANCE DATE</th>
                                            <th>AMOUNT</th>
                                            <th>QUANTITY</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($resourcesData as $val)
                                        <tr>
                                            <td class="text-center">{{$loop->iteration}}</td>
                                            <td>
                                                {{$val['name']}}
                                            </td>
                                            <td>
                                                {{$val['uses']}}
                                            </td>
                                            <td>
                                                {{date('d-m-Y', strtotime($val['maintainance_date']))}}
                                            </td>
                                            <td>
                                                ₹{{number_format($val['amount'], 2)}}
                                            </td>
                                            <td>
                                                {{$val['quantity']}}
                                            </td>
                                            <td class="row-actions">
                                                <a href="{{ url('admin/add-resource/'.$val['id'])}}">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="javascript:void(0)" onclick="deleteResource({{$val['id']}})">
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
        function deleteResource(id) {
            if(confirm('Are you sure you want to delete this resource?')) {
                window.location.href = "{{ url('admin/delete-resource') }}/" + id;
            }
        }
    </script>
@endsection
