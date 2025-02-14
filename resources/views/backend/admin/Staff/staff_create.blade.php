@extends('backend.admin.layout.app')
@push('title')
    <title>Staff Create</title>
@endpush
@section('content')
    <div class="content-w">
        <div class="content-i">
            <div class="content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="element-wrapper">
                            <h6 class="element-header">@if(!empty($staffData)) {{ $staffData['first_name'].' '.$staffData['last_name'] }} Staff  @else Add New Staff @endif</h6>
                            <div class="element-box">
                                <form autocomplete="off" action="{{ url('admin/addStaff') }}" method="POST">
                                    @include('flash-message')
                                    <input type="hidden" value="{{ $staffData['id'] ?? '' }}" hidden name="staff_id" >
                                    @csrf
                                    <h5 class="form-header">@if(!empty($staffData)) {{ $staffData['first_name'].' '.$staffData['last_name'] }} Staff  @else Add New Staff @endif </h5>
                                    <div class="form-desc">Discharge best employed your phase each the of shine.
                                        Be met even reason consider logbook redesigns. Never a turned interfaces
                                        among asking</div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">First Name</label>
                                                <input type="text" value="{{ $staffData['first_name'] ?? '' }}" class="form-control" name="first_name" placeholder="First name">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Last Name</label>
                                                <input type="text" class="form-control" name="last_name" placeholder="Last name" value="{{ $staffData['last_name'] ?? '' }}">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Mobile Number</label>
                                                <input class="form-control" name="mobile" value="{{ $staffData['mobile'] ?? '' }}" maxlength="11" minlength="9" placeholder="Mobile Number" type="number">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input class="form-control" name="email" value="{{ $staffData['email'] ?? '' }}" placeholder="Email" type="email">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div>
                                                    <label for="">Gender</label>
                                                </div>
                                                @php
                                                    $gender=$staffData['gender'] ?? '';
                                                @endphp
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="gender" {{ $gender=='male' ? 'checked' : '' }} id="inlineRadio1" value="male">
                                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="gender" {{ $gender=='female' ? 'checked' : '' }} id="inlineRadio2" value="female">
                                                    <label class="form-check-label"
                                                        for="inlineRadio2">Female</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="gender" {{ $gender=='other' ? 'checked' : '' }}  id="inlineRadio2" value="other">
                                                    <label class="form-check-label" for="inlineRadio2">Other</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Role</label>
                                                <select class="form-control" name="role">
                                                    <option disabled selected value="">Please Select Staff</option>
                                                    @if(!empty($roleData))
                                                        @php
                                                            $role=$staffData['role'] ?? '';
                                                        @endphp
                                                        @foreach($roleData as $val)
                                                            <option {{ $role==$val['role_type'] ? 'selected' : '' }} value="{{ $val['role_type'] }}">{{ $val['title'] }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input class="form-control" name="password" placeholder="Password" type="password">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Address</label>
                                                <input class="form-control" name="address" required value="{{ $staffData['address'] ?? '' }}" placeholder="Address" type="address">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select class="form-control" name="status">
                                                    <option selected value="1">Active</option>
                                                    <option value="0">In-Active</option>
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