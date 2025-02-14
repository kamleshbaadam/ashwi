@extends('backend.admin.layout.app')
@push('title')
    <title>Medicine List</title>
@endpush
@section('content')
    <div class="content-w">
        <div class="content-i">
            <div class="content-box">

                <div class="element-wrapper">
                    @include('flash-message')
                    <div class="element-actions"><a class="btn btn-primary btn-primary"
                            href="{{ url('admin/add_medicine') }}"><i class="os-icon os-icon-ui-22"></i><span>Add
                                Medicine </span></a></div>
                    <h6 class="element-header">Medicine List</h6>

                    <div class="element-box-tp">
                        <div class="table-responsive">
                            <table class="table table-padded">
                                <thead>
                                    <tr>
                                        <th>SR</th>
                                        <th>Medicine </th>
                                        <th>Power</th>
                                        <th>Description</th>
                                        <th>Category </th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($medicineData as $medicine)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $medicine->medicine_name }}</td>
                                            <td>{{ $medicine->power . ' ' . $medicine->measure  }}</td>
                                            <td>{{ $medicine->description }}</td>
                                            <td>{{ $medicine->category_name }}</td>
                                            <td>{{ $medicine->price }}</td>
                                            <td>
                                                @if ($medicine->status == 1)
                                                    <span class="badge badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('admin/add_medicine/'. $medicine->id) }}">
                                                <i class="os-icon os-icon-edit"></i>
                                            </a>
                                                {{-- <a href="{{ url('admin/delete_medicine_category/'. $item->id) }}">
                                                <i class="os-icon os-icon-trash"></i>
                                            </a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="8">
                                            <div class="col-12 justify-content-center">
                                                {{ $medicineData->withQueryString()->links('pagination::bootstrap-4') }}
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
