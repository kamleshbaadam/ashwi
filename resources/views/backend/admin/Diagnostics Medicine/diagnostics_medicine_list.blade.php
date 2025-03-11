@extends('backend.admin.layout.app')
@push('title')
    <title>Diagnosis Medicine List</title>
@endpush
@section('content')
    <div class="content-w">
        <div class="content-i">
            <div class="content-box">

                <div class="element-wrapper">
                    @include('flash-message')
                    <div class="element-actions"><a class="btn btn-primary btn-primary"
                            href="{{ url('admin/add_diagnostics_medicine') }}"><i class="os-icon os-icon-ui-22"></i><span>Add Diagnosis Medicine </span></a></div>
                    <h6 class="element-header">Diagnosis Medicine List</h6>

                    <div class="element-box-tp">
                        <div class="table-responsive">
                            <table class="table table-padded">
                                <thead>
                                    <tr>
                                        <th>SR</th>
                                        <th>Diagnosis Name</th>
                                        <th>Medicine Name</th>
                                        <th>Report Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($diagnosticsMedicineData as $diagnosticsMedicine)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $diagnosticsMedicine->diagnostics_name }}</td>
                                            <td>{{ $diagnosticsMedicine->medicine_name }}</td>
                                            <td>{{ $diagnosticsMedicine->report_name }}</td>
                                            <td>
                                                @if ($diagnosticsMedicine->status == 1)
                                                    <span class="badge badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('admin/add_diagnostics_medicine/'. $diagnosticsMedicine->id) }}">
                                                <i class="os-icon os-icon-edit"></i>
                                            </a>
                                                {{-- <a href="{{ url('admin/delete_medicine_category/'. $diagnosticsMedicine->id) }}">
                                                <i class="os-icon os-icon-trash"></i>
                                            </a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="5">

                                            <div class="col-12 justify-content-center">
                                                {{ $diagnosticsMedicineData->withQueryString()->links('pagination::bootstrap-4') }}
                                            </div>
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
@endsection
