@extends('backend.admin.layout.app')
@push('title')
    <title>Add Instrument</title>
@endpush
@section('content')
    <div class="content-w">
        <div class="content-i">
            <div class="content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="element-wrapper">
                            <h6 class="element-header">Add New Instrument</h6>
                            <div class="element-box">
                                <form autocomplete="off" action="{{ url('admin/addInstrument') }}" method="POST">
                                    @include('flash-message')
                                    <input type="hidden" value="{{ $instrumentsData['id'] ?? '' }}" hidden name="instrument_id">
                                    @csrf
                                    <h5 class="form-header">Instrument Management</h5>
                                    <div class="form-desc">Manage hospital instruments including equipment, tools, and other medical devices.</div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Area <span class="text-danger">*</span></label>
                                                <input type="text" value="{{ $instrumentsData['area'] ?? '' }}"
                                                    class="form-control" name="area" placeholder="Enter area/location" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Name of Instrument <span class="text-danger">*</span></label>
                                                <input type="text" value="{{ $instrumentsData['name'] ?? '' }}"
                                                    class="form-control" name="name" placeholder="Enter instrument name" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Assign To <span class="text-danger">*</span></label>
                                                <select name="assigned_to" class="form-control" required>
                                                    <option value="" selected disabled>Select Staff Member</option>
                                                    @foreach($staffData as $val)
                                                        <option value="{{ $val['id'] }}" {{ ($instrumentsData['assigned_to'] ?? null) == $val['id'] ? 'selected' : '' }}>{{ $val['first_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Period <span class="text-danger">*</span></label>
                                                <select name="period" class="form-control" required>
                                                    <option value="" selected disabled>Select Period</option>
                                                    <option value="daily" {{ ($instrumentsData['period'] ?? null) == 'daily' ? 'selected' : '' }}>Daily</option>
                                                    <option value="weekly" {{ ($instrumentsData['period'] ?? null) == 'weekly' ? 'selected' : '' }}>Weekly</option>
                                                    <option value="monthly" {{ ($instrumentsData['period'] ?? null) == 'monthly' ? 'selected' : '' }}>Monthly</option>
                                                    <option value="yearly" {{ ($instrumentsData['period'] ?? null) == 'yearly' ? 'selected' : '' }}>Yearly</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Condition <span class="text-danger">*</span></label>
                                                <select name="condition" class="form-control" required>
                                                    <option value="" selected disabled>Select Condition</option>
                                                    <option value="excellent" {{ ($instrumentsData['condition'] ?? null) == 'excellent' ? 'selected' : '' }}>Excellent</option>
                                                    <option value="good" {{ ($instrumentsData['condition'] ?? null) == 'good' ? 'selected' : '' }}>Good</option>
                                                    <option value="fair" {{ ($instrumentsData['condition'] ?? null) == 'fair' ? 'selected' : '' }}>Fair</option>
                                                    <option value="poor" {{ ($instrumentsData['condition'] ?? null) == 'poor' ? 'selected' : '' }}>Poor</option>
                                                    <option value="needs_repair" {{ ($instrumentsData['condition'] ?? null) == 'needs_repair' ? 'selected' : '' }}>Needs Repair</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Last Check Date <span class="text-danger">*</span></label>
                                                <input type="date" value="{{ $instrumentsData['last_check_date'] ?? '' }}"
                                                    class="form-control" name="last_check_date" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Given For <span class="text-danger">*</span></label>
                                                <select name="given_for" class="form-control" id="given_for" required onchange="toggleGivenFields()">
                                                    <option value="" selected disabled>Select Option</option>
                                                    <option value="yes" {{ ($instrumentsData['given_for'] ?? null) == 'yes' ? 'selected' : '' }}>Yes</option>
                                                    <option value="no" {{ ($instrumentsData['given_for'] ?? null) == 'no' ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6" id="name_of_given_field" style="display: none;">
                                            <div class="form-group">
                                                <label for="">Name of Given <span class="text-danger">*</span></label>
                                                <input type="text" value="{{ $instrumentsData['name_of_given'] ?? '' }}"
                                                    class="form-control" name="name_of_given" placeholder="Enter name">
                                            </div>
                                        </div>
                                        <div class="col-6" id="date_of_given_field" style="display: none;">
                                            <div class="form-group">
                                                <label for="">Date of Given <span class="text-danger">*</span></label>
                                                <input type="date" value="{{ $instrumentsData['date_of_given'] ?? '' }}"
                                                    class="form-control" name="date_of_given">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-buttons-w">
                                        <button class="btn btn-primary" type="submit">
                                            {{ $instrumentsData ? 'Update Instrument' : 'Add Instrument' }}
                                        </button>
                                        <a href="{{ url('admin/instruments/list') }}" class="btn btn-secondary">Cancel</a>
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
    
    <script>
        function toggleGivenFields() {
            const givenFor = document.getElementById('given_for').value;
            const nameField = document.getElementById('name_of_given_field');
            const dateField = document.getElementById('date_of_given_field');
            const nameInput = document.querySelector('input[name="name_of_given"]');
            const dateInput = document.querySelector('input[name="date_of_given"]');
            
            if (givenFor === 'yes') {
                nameField.style.display = 'block';
                dateField.style.display = 'block';
                nameInput.required = true;
                dateInput.required = true;
            } else {
                nameField.style.display = 'none';
                dateField.style.display = 'none';
                nameInput.required = false;
                dateInput.required = false;
                // Clear the values when hiding fields
                nameInput.value = '';
                dateInput.value = '';
                // Remove any validation errors
                nameInput.classList.remove('is-invalid');
                dateInput.classList.remove('is-invalid');
            }
        }
        
        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            toggleGivenFields();
        });
    </script>
@endsection
