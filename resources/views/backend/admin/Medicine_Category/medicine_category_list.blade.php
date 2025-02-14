@extends('backend.admin.layout.app')
@push('title')
    <title>Medicine Category</title>
@endpush
@section('content')
<div class="content-w">
    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-lg-12">
                    <div class="element-wrapper">
                            @include('flash-message')
                            <div class="element-actions"><a class="btn btn-primary btn-primary"
                                    href="{{url('admin/add_medicine_category')}}"><i class="os-icon os-icon-ui-22"></i>
                                    <span>Add
                                        Medicine </span></a></div>
                            <h6 class="element-header">Medicine Category List
                            </h6>
                            <div class="element-box-tp">
                                <div class="table-responsive">
                                    <table class="table table-padded">
                                        <thead>
                                            <tr>
                                                <th>SR</th>
                                                <th>Category Name </th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($medicineCategoryData))
                                                @foreach ($medicineCategoryData as $item)
                                                    <tr>
                                                        <td>{{ $loop->index + 1 }}</td>
                                                        <td>{{ $item->category_name }}</td>
                                                        <td>{{ $item->description }}</td>
                                                        <td>
                                                            @if ($item->status == 1)
                                                                <span class="badge badge-success">Active</span>
                                                            @else
                                                                <span class="badge badge-danger">Inactive</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('admin/add_medicine_category/'. $item->id) }}">
                                                                <i class="os-icon os-icon-edit"></i>
                                                            </a>
                                                            {{-- <a href="{{ url('admin/delete_medicine_category/'. $item->id) }}">
                                                                <i class="os-icon os-icon-trash"></i>
                                                            </a> --}}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="5" class="text-right" style="justify-content: end !important;">
                                                        {{ $medicineCategoryData->links('pagination::bootstrap-4') }}
                                                    </td>
                                                </tr>
                                            @endif
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
    </div>
    <div class="display-type"></div>
    </div>
@endsection
