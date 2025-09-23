@extends('backend.admin.layout.app')
@push('title')
    <title>Add Resource</title>
@endpush
@section('content')
    <div class="content-w">
        <div class="content-i">
            <div class="content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="element-wrapper">
                            <h6 class="element-header">Add New Resource</h6>
                            <div class="element-box">
                                <form autocomplete="off" action="{{ url('admin/addResource') }}" method="POST">
                                    @include('flash-message')
                                    <input type="hidden" value="{{ $resourcesData['id'] ?? '' }}" hidden name="resource_id">
                                    @csrf
                                    <h5 class="form-header">Hospital Resource Management</h5>
                                    <div class="form-desc">Manage hospital resources including equipment, supplies, and other assets.</div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Resource Name <span class="text-danger">*</span></label>
                                                <input type="text" value="{{ $resourcesData['name'] ?? '' }}"
                                                    class="form-control" name="name" placeholder="Enter resource name" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Uses <span class="text-danger">*</span></label>
                                                <input type="text" value="{{ $resourcesData['uses'] ?? '' }}"
                                                    class="form-control" name="uses" placeholder="Enter resource uses" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Maintenance Date <span class="text-danger">*</span></label>
                                                <input type="date" value="{{ $resourcesData['maintainance_date'] ?? '' }}"
                                                    class="form-control" name="maintainance_date" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Amount (₹) <span class="text-danger">*</span></label>
                                                <input type="number" value="{{ $resourcesData['amount'] ?? '' }}"
                                                    class="form-control" name="amount" placeholder="Enter amount" step="0.01" min="0" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Quantity <span class="text-danger">*</span></label>
                                                <input type="number" value="{{ $resourcesData['quantity'] ?? '' }}"
                                                    class="form-control" name="quantity" placeholder="Enter quantity" min="1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-buttons-w">
                                        <button class="btn btn-primary" type="submit">
                                            {{ $resourcesData ? 'Update Resource' : 'Add Resource' }}
                                        </button>
                                        <a href="{{ url('admin/resources/list') }}" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="display-type"></div>
@endsection
