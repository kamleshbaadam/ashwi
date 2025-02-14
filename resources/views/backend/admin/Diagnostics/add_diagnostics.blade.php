@extends('backend.admin.layout.app')
@push('title')
    <title>Add Diagnosis</title>
@endpush
@section('content')
    <div class="content-w">
        <div class="content-i">
            <div class="content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="element-wrapper">
                            <h6 class="element-header">Add Diagnosis</h6>
                            @include('flash-message')
                            <div class="element-box">
                                <form action="{{ url('admin/store_diagnostics') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$diagnosticsData['id'] ?? '' }}" hidden>
                                    <h5 class="form-header">Add Diagnosis</h5>
                                    <div class="form-desc">Discharge best employed your phase each the of shine.
                                        Be met even reason consider logbook redesigns. Never a turned interfaces
                                        among asking</div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="">Diagnosis Name</label>
                                                <input type="text" class="form-control" placeholder="Diagnosis Name"
                                                    name="diagnostics_name" value="{{$diagnosticsData['diagnostics_name'] ?? ''}}">
                                            </div>

                                            <div class="col-sm-6 ">
                                                <div class="form-group">
                                                    <div> <label for="">Status</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="status"
                                                            id="inlineRadio1" value="1" {{ !empty($diagnosticsData) && $diagnosticsData['status'] == 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="inlineRadio1">Active</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="status"
                                                            id="inlineRadio2" value="0" {{ !empty($diagnosticsData) && $diagnosticsData['status'] == 0 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="inlineRadio2">In Active</label>
                                                    </div>
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
@endsection
