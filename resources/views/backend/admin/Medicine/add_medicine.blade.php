@extends('backend.admin.layout.app')
@push('title')
    <title>Add Medicine</title>
@endpush
@section('content')
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
    <div class="content-w">
        <div class="content-i">
            <div class="content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="element-wrapper">
                            <h6 class="element-header">Add Medicine</h6>
                            <div class="element-box">
                                @include('flash-message')
                                <form action="{{ url('admin/store_medicine') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $medicineData['id'] ?? '' }}" hidden>
                                    <h5 class="form-header">Add Medicine</h5>
                                    <div class="form-desc">Discharge best employed your phase each the of shine.
                                        Be met even reason consider logbook redesigns. Never a turned interfaces
                                        among asking</div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="">Medicine Name</label>
                                                <input type="text" class="form-control" placeholder="Medicine Name"
                                                    name="medicine_name" value="{{ $medicineData['medicine_name'] ?? '' }}"
                                                    required>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Category</label>
                                                    <select class="form-control" name="category_id" required>
                                                        <option selected disabled>Select Category</option>
                                                        @foreach ($categoryData as $category)
                                                            <option value="{{ $category['id'] }}"
                                                                {{ isset($medicineData['category_id']) && $medicineData['category_id'] == $category['id'] ? 'selected' : '' }}>
                                                                {{ $category['category_name'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="form-group"><label for="">Power</label><input
                                                        class="form-control" placeholder="Power" type="number"
                                                        name="power" value="{{ $medicineData['power'] ?? '' }}" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label for="measure">Measure</label>
                                                    <select class="form-control" name="measure" required>
                                                        <option value="mg"
                                                            {{ isset($medicineData['measure']) && $medicineData['measure'] == 'mg' ? 'selected' : '' }}>
                                                            Mg</option>
                                                        <option value="ml"
                                                            {{ isset($medicineData['measure']) && $medicineData['measure'] == 'ml' ? 'selected' : '' }}>
                                                            Ml</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="form-group"><label for="">Price</label><input
                                                        step="0.01" class="form-control" placeholder="Price"
                                                        type="number" name="price"
                                                        value="{{ $medicineData['price'] ?? '' }}" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="">Description</label>
                                                <textarea rows="1" class="form-control" required placeholder="Description" name="description">{{ $medicineData['description'] ?? '' }}</textarea>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="form-group">
                                            <div> <label for="">Status</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status"
                                                    id="inlineRadio1" value="1"
                                                    {{ !empty($medicineData) && $medicineData['status'] == 1 ? 'checked' : 'checked' }}>
                                                <label class="form-check-label" for="inlineRadio1">Active</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status"
                                                    id="inlineRadio2" value="0"
                                                    {{ !empty($medicineData) && $medicineData['status'] == 0 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="inlineRadio2">In Active</label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-buttons-w"><button class="btn btn-primary" type="submit">
                                            Submit</button>
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
