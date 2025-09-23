@extends('backend.admin.layout.app')
@push('title')
    <title>Instrument Management</title>
@endpush
@section('content')

    <div class="content-w">
        <div class="content-i">
            <div class="content-box">
                <div class="element-wrapper compact pt- accordion">
                    <div class="element-actions">
                        <a class="btn btn-primary btn-sm" href="{{ url('admin/add-instrument') }}">
                            <i class="os-icon os-icon-ui-22"></i>
                            <span>Add Instrument</span>
                        </a>
                    </div>
                    <h6 class="element-header">Instrument Management</h6>
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
                                            <th>AREA</th>
                                            <th>NAME</th>
                                            <th>ASSIGNED TO</th>
                                            <th>PERIOD</th>
                                            <th>CONDITION</th>
                                            <th>LAST CHECK DATE</th>
                                            <th>GIVEN FOR</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($instrumentsData as $val)
                                        <tr>
                                            <td class="text-center">{{$loop->iteration}}</td>
                                            <td>
                                                {{$val['area']}}
                                            </td>
                                            <td>
                                                {{$val['name']}}
                                            </td>
                                            <td>
                                                {{$val['staff']['first_name'] ?? 'N/A'}}
                                            </td>
                                            <td>
                                                {{ucfirst($val['period'])}}
                                            </td>
                                            <td>
                                                <span class="status-pill smaller {{ $val['condition'] == 'good' ? 'green' : ($val['condition'] == 'fair' ? 'yellow' : 'red') }}"></span>
                                                {{ucfirst($val['condition'])}}
                                            </td>
                                            <td>
                                                {{date('d-m-Y', strtotime($val['last_check_date']))}}
                                            </td>
                                            <td>
                                                @if($val['given_for'] == 'yes')
                                                    <span class="status-pill smaller green"></span>Yes
                                                    @if($val['name_of_given'])
                                                        <br><small>{{$val['name_of_given']}}</small>
                                                    @endif
                                                @else
                                                    <span class="status-pill smaller red"></span>No
                                                @endif
                                            </td>
                                            <td class="row-actions">
                                                <a href="{{ url('admin/add-instrument/'.$val['id'])}}">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="javascript:void(0)" onclick="deleteInstrument({{$val['id']}})">
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
        function deleteInstrument(id) {
            if(confirm('Are you sure you want to delete this instrument?')) {
                window.location.href = "{{ url('admin/delete-instrument') }}/" + id;
            }
        }
    </script>
@endsection
