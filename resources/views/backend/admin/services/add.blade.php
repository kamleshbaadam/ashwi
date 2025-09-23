@extends('backend.admin.layout.app')
@push('title')
    <title>Add Service</title>
@endpush
@section('content')
    <div class="content-w">
        <div class="content-i">
            <div class="content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="element-wrapper">
                            <h6 class="element-header">Add New Service
                                </h6>
                            <div class="element-box">
                                <form autocomplete="off" action="{{ url('admin/addService') }}" method="POST">
                                    @include('flash-message')
                                    <input type="hidden" value="{{ $servicesData['id'] ?? '' }}" hidden name="service_id">
                                    @csrf
                                    <h5 class="form-header">Add New Service
                                        Service </h5>
                                    <div class="form-desc">Discharge best employed your phase each the of shine.
                                        Be met even reason consider logbook redesigns. Never a turned interfaces
                                        among asking</div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Name</label>
                                                <input type="text" value="{{ $servicesData['name'] ?? '' }}"
                                                    class="form-control" name="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Assigned To</label>
                                                <select name="assigned_to" class="form-control">
                                                    <option value="" selected disabled>Select Assigned To</option>
                                                    @foreach($staffData as $val)
                                                        <option value="{{ $val['id'] }}" {{ ($servicesData['assigned_to'] ?? null) == $val['id'] ? 'selected' : '' }}>{{ $val['first_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Period</label>
                                                <select name="period" class="form-control">
                                                    <option value="" selected disabled>Select Period</option>
                                                    <option value="daily" {{ ($servicesData['period'] ?? null) == 'daily' ? 'selected' : '' }}>Daily</option>
                                                    <option value="weekly" {{ ($servicesData['period'] ?? null) == 'weekly' ? 'selected' : '' }}>Weekly</option>
                                                    <option value="monthly" {{ ($servicesData['period'] ?? null) == 'monthly' ? 'selected' : '' }}>Monthly</option>
                                                    <option value="yearly" {{ ($servicesData['period'] ?? null) == 'yearly' ? 'selected' : '' }}>Yearly</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Quantity</label>
                                                <input type="number" value="{{ $servicesData['quantity'] ?? '' }}"
                                                    class="form-control" name="quantity" placeholder="Quantity">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Last Check Date</label>
                                                <input type="date" value="{{ $servicesData['last_check_date'] ?? '' }}"
                                                    class="form-control" name="last_check_date" placeholder="Last Check Date">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select name="status" class="form-control">
                                                    <option value="" selected disabled>Select Status</option>
                                                    <option value="active" {{ ($servicesData['status'] ?? null) == 'active' ? 'selected' : '' }}>Active</option>
                                                    <option value="inactive" {{ ($servicesData['status'] ?? null) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-buttons-w">
                                        <button class="btn btn-primary" type="submit">Submit</button>
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