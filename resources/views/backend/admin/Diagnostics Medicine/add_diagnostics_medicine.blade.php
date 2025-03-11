@extends('backend.admin.layout.app')
@push('title')
    <title>Add Diagnosis Medicine</title>
@endpush
@section('content')
    <div class="content-w">
        <div class="content-i">
            <div class="content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="element-wrapper">
                            <h6 class="element-header">Add Diagnosis Medicine</h6>
                            @include('flash-message')
                            <div class="element-box">
                                <form action="{{ url('admin/store_diagnostics_medicine') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$diagnosticsMedicineData['id'] ?? '' }}" hidden>
                                    {{-- <input type="hidden" name="id" value="{{$medicineData['id'] ?? '' }}" hidden> --}}

                                    <h5 class="form-header">Add Diagnosis Medicine</h5>
                                    <div class="form-desc">Discharge best employed your phase each the of shine.
                                        Be met even reason consider logbook redesigns. Never a turned interfaces
                                        among asking</div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Diagnosis Name</label>
                                                    <select class="form-control select2" name="diagnostics_id">
                                                        <option selected disabled>Select Diagnosis</option>
                                                        @foreach ($diagnosticData as $diagnostic)
                                                        <option value="{{ $diagnostic['id'] }}"
                                                            {{ (isset($diagnosticsMedicineData['diagnostics_id']) && $diagnosticsMedicineData['diagnostics_id'] == $diagnostic['id']) ? 'selected' : '' }}
                                                            >
                                                            {{ $diagnostic['diagnostics_name'] }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            @php
                                                $diagnosticsMedicineData['medicine_id'] = explode(',', $diagnosticsMedicineData['medicine_id'] ?? '');
                                                $diagnosticsMedicineData['report_name'] = explode(',', $diagnosticsMedicineData['report_name'] ?? '');
                                            @endphp 
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Medicine Name</label>
                                                    <select class="form-control select2" name="medicine_id[]" multiple>
                                                        @foreach ($medicineData as $medicine)
                                                        <option value="{{ $medicine['id'] }}" {{ in_array($medicine['id'], $diagnosticsMedicineData['medicine_id'] ?? []) ? 'selected' : '' }}>
                                                            {{ $medicine['medicine_name'] }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Report Name</label>
                                                    <select class="form-control select2" name="report_name[]" multiple>
                                                        <option value="Biopsy" {{ in_array('Biopsy', $diagnosticsMedicineData['report_name'] ?? []) ? 'selected' : '' }}>Biopsy</option>
                                                        <option value="CT Scan" {{ in_array('CT Scan', $diagnosticsMedicineData['report_name'] ?? []) ? 'selected' : '' }}>CT Scan</option>
                                                        <option value="Audiogram" {{ in_array('Audiogram', $diagnosticsMedicineData['report_name'] ?? []) ? 'selected' : '' }}>Audiogram</option>
                                                        <option value="MRI" {{ in_array('MRI', $diagnosticsMedicineData['report_name'] ?? []) ? 'selected' : '' }}>MRI</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <div class="form-group">
                                                <div> <label for="">Status</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="inlineRadio1" 
                                                        value="1"
                                                        {{ !empty($diagnosticsMedicineData) && ($diagnosticsMedicineData['status'] ?? '') == 1 ? 'checked' : '' }}
                                                        >
                                                    <label class="form-check-label" for="inlineRadio1">Active</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="inlineRadio2" 
                                                        value="0"
                                                        {{ !empty($diagnosticsMedicineData) && ($diagnosticsMedicineData['status'] ?? '') == 0 ? 'checked' : '' }}
                                                        >
                                                    <label class="form-check-label" for="inlineRadio2">In Active</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-buttons-w"><button class="btn btn-primary" type="submit">
                                                Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="display-type"></div>
        </div>
    </div>
    <div class="display-type"></div>
    <script>
        $(document).ready(function() {
            $('.select2-multi').select2({
                placeholder: "Select one or more",
                allowClear: true
            });
        });
    </script>
@endsection
