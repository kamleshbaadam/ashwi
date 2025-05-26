@extends('backend.reception.layout.app')
@push('title')
    <title>Create Bill</title>
@endpush
@section('content')
    <style>
        td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
    <div class="content-w" style="margin-top: -50px;">
        <div class="content-i">
            <div class="content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="element-wrapper">
                            <div class="element-actions mr-2"><a class="btn btn-primary btn-sm btn-primary"
                                    href="{{ url('reception/view_opd_appointment')}}"><span>Back</span></a>
                            </div>
                            <div class="element-actions mr-2">
                                <a class="btn btn-primary btn-sm" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#serviceModal">
                                    <i class="os-icon os-icon-ui-22"></i><span>Service</span>
                                </a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg"> <!-- use modal-sm or modal-xl if needed -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="serviceModalLabel">Service Form</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Your form goes here -->
                                            <form id="serviceForm">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="Name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="Name"
                                                        placeholder="Enter Name" name="name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Description" class="form-label">Description</label>
                                                    <textarea class="form-control" id="Description"
                                                        placeholder="Enter Description" name="description"></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Rate" class="form-label">Rate</label>
                                                    <input type="number" class="form-control" id="rate"
                                                        placeholder="Enter Rate" name="rate">
                                                </div>
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @include('flash-message')
                            <h6 class="element-header">Add OutPatient Case Memo </h6>
                            <div class="element-box">
                                <form method="post" action="{{ url('reception/store_bill') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $billing->id ?? 0 }}">
                                    <input type="hidden" name="appointments_id"
                                        value="{{ $billing->appointments_id ?? 0 }}">
                                    <input type="hidden" name="patient_master_id" value="{{ $billing->patient_id ?? 0 }}">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="form-group"><label for="">Taxation</label>
                                                    <select class="form-control" name="taxation">
                                                        <option value="non-gst" {{ $billing->taxation == 'non-gst' ? 'selected' : '' }}>Non-Gst</option>
                                                        <option value="ears" {{ $billing->taxation == 'ears' ? 'selected' : '' }}>Ears</option>
                                                        <option value="nose" {{ $billing->taxation == 'nose' ? 'selected' : '' }}>Nose </option>
                                                        <option value="throat" {{ $billing->taxation == 'throat' ? 'selected' : '' }}>Throat</option>
                                                        <option value="biopsy" {{ $billing->taxation == 'biopsy' ? 'selected' : '' }}>Biopsy</option>
                                                        <option value="covid" {{ $billing->taxation == 'covid' ? 'selected' : '' }}>Covid</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group"><label for="">Patient Name</label>
                                                    <input name="patient_name" class="form-control"
                                                        placeholder="Patient Name" type="text"
                                                        value="{{ $billing->patient->first_name ?? '' }} {{ $billing->patient->middle_name ?? '' }} {{ $billing->patient->last_name ?? '' }}"
                                                        readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group"><label for="">Patient Id</label>
                                                    <input class="form-control" placeholder="patient Id" type="text"
                                                        name="patient_id" value="{{ $billing->patient->patient_id ?? '' }}"
                                                        readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group"><label for="">Patient Address</label>
                                                    <input class="form-control" placeholder="Patient Address" type="text"
                                                        name="patient_address"
                                                        value="{{ $billing->patient->address ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group"><label for="">Category</label>
                                                    <select class="form-control" name="category">
                                                        <option value="opd" selected {{ $billing->category == 'opd' ? 'selected' : '' }}>OPD</option>
                                                        <option value="ears" {{ $billing->category == 'ears' ? 'selected' : '' }}>Ears</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">

                                                <div class="form-group">
                                                    <label for="">Package</label>
                                                    <select class="form-control" name="package">
                                                        <option selected disabled>Select package</option>
                                                        <option value="opd" selected{{ $billing->package == 'opd' ? 'selected' : '' }}>OPD</option>
                                                        <option value="ears" {{ $billing->package == 'ears' ? 'selected' : '' }}>Ears</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">

                                                <div class="form-group">
                                                    <label for="">Account</label>
                                                    <select class="form-control" name="account">
                                                        <option selected disabled>Select Account</option>
                                                        <option value="opd" selected {{ $billing->account == 'opd' ? 'selected' : '' }}>OPD</option>
                                                        <option value="ears" {{ $billing->account == 'ears' ? 'selected' : '' }}>Ears</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group"><label for="">Case Memo Date</label>
                                                    <input class="form-control" placeholder="Ref No" type="date"
                                                        name="case_memo_date"
                                                        value="{{ $billing->case_memo_date ?? date('Y-m-d')}}">
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-padded">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th>Date</th>
                                                            <th>Services</th>
                                                            <th>Description</th>
                                                            <th>Qty</th>
                                                            <th>Rate</th>
                                                            <th>Discount</th>
                                                            <th>Total</th>
                                                            <th>
                                                                <button class="mr-2 mb-2 btn btn-primary" id="addServiceBtn"
                                                                    type="button">Add</button>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="servicesTableBody">
                                                        @if (!empty($billing) && count($billing->services) > 0)
                                                            @foreach ($billing->services as $index => $serviceName)
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-control" type="date" name="date[]" value="{{ $billing->date[$index] ?? date('Y-m-d') }}">
                                                                    </td>
                                                                    <td>
                                                                        <select class="form-control service-select" name="services[]">
                                                                            <option selected disabled value="">Select Service</option>
                                                                            @foreach ($serviceData as $service)
                                                                                <option value="{{ $service->name }}"
                                                                                    data-description="{{ $service->description }}"
                                                                                    data-rate="{{ $service->rate }}"
                                                                                    {{ $serviceName == $service->name ? 'selected' : '' }}>
                                                                                    {{ $service->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <input class="form-control" type="text" name="description[]" placeholder="Description" value="{{ $billing->description[$index] ?? '' }}" readonly>
                                                                    </td>
                                                                    <td style="width: 100px;">
                                                                        <input class="form-control qty" type="number" name="qty[]" value="{{ $billing->qty[$index] ?? 1 }}">
                                                                    </td>
                                                                    <td style="width: 100px;">
                                                                        <input class="form-control rate" type="number" name="rate[]" value="{{ $billing->rate[$index] ?? 0 }}" readonly>
                                                                    </td>
                                                                    <td style="width: 100px;">
                                                                        <input class="form-control discount" type="number" name="discount[]" value="{{ $billing->discount[$index] ?? 0 }}">
                                                                    </td>
                                                                    <td style="width: 150px;">
                                                                        <input class="form-control total" type="number" name="total[]" value="{{ $billing->total[$index] ?? 0 }}" readonly>
                                                                    </td>
                                                                    <td class="row-actions">
                                                                        <a class="danger remove-service" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @else
                                                            <tr>
                                                                <td>
                                                                    <input class="form-control" type="date" name="date[]" value="{{ date('Y-m-d') }}">
                                                                </td>
                                                                <td>
                                                                    <select class="form-control service-select" name="services[]">
                                                                        <option selected disabled value="">Select Service</option>
                                                                        @foreach ($serviceData as $service)
                                                                            <option value="{{ $service->name }}" data-description="{{ $service->description }}" data-rate="{{ $service->rate }}">
                                                                                {{ $service->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" type="text" name="description[]" placeholder="Description" readonly>
                                                                </td>
                                                                <td style="width: 100px;">
                                                                    <input class="form-control qty" type="number" name="qty[]" value="1">
                                                                </td>
                                                                <td style="width: 100px;">
                                                                    <input class="form-control rate" type="number" name="rate[]" value="0" readonly>
                                                                </td>
                                                                <td style="width: 100px;">
                                                                    <input class="form-control discount" type="number" name="discount[]" value="0">
                                                                </td>
                                                                <td style="width: 150px;">
                                                                    <input class="form-control total" type="number" name="total[]" value="0" readonly>
                                                                </td>
                                                                <td class="row-actions">
                                                                    <a class="danger remove-service" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                            <hr>
                                            <div class="col-sm-2">
                                                <div class="form-group"><label for="">Mode Of Payment</label>
                                                    <select class="form-control" name="mode_of_payment">
                                                        <option value="cash" {{ $billing->mode_of_payment == 'cash' ? 'selected' : '' }}>cash</option>
                                                        <option value="google_pay" {{ $billing->mode_of_payment == 'google_pay' ? 'selected' : '' }}>
                                                            Google Pay</option>
                                                        <option value="paytm" {{ $billing->mode_of_payment == 'paytm' ? 'selected' : '' }}>PayTM </option>
                                                        <option value="credit_card" {{ $billing->mode_of_payment == 'credit_card' ? 'selected' : '' }}>
                                                            Credit card </option>
                                                        <option value="bank_transfer" {{ $billing->mode_of_payment == 'bank_transfer' ? 'selected' : '' }}>
                                                            Bank transfer </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group"><label for="">Ref No</label>
                                                    <input class="form-control" placeholder="Ref No" type="text"
                                                        name="ref_no" value="{{ $billing->ref_no ?? '' }}">
                                                </div>
                                            </div>
                                            <input type="hidden" id="checkup_type_value" value="{{ $billing->checkup_type ?? '' }}">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="">Subtotal</label>
                                                    <input class="form-control" type="text" name="subtotal" id="subtotal"
                                                        value="{{ $billing->subtotal ?? 0 }}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-buttons-w col-sm-12 text-right">
                                                <button class="btn btn-primary" type="submit"> Submit</button>
                                                <a class="btn btn-primary"
                                                    href="{{ url("reception/preview_bill/{$billing->id}") }}"> Print</a>
                                                <a class="btn btn-primary" href="{{url('reception/view_opd_appointment')}}"
                                                    style="background-color: white; color: black;">
                                                    Discard</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="display-type"></div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#serviceForm').on('submit', function (e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ url('reception/store_service') }}",
                    method: "POST",
                    data: $(this).serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    },
                    success: function (response) {
                        $('#serviceModal').modal('hide');
                        $('#serviceForm')[0].reset();
                        alert('Service added successfully');
                        // You can reload a section or DataTable here if needed
                    },
                    error: function (xhr) {
                        let errors = xhr.responseJSON.errors;
                        let message = 'Validation failed:\n';
                        $.each(errors, function (key, value) {
                            message += `- ${value[0]}\n`;
                        });
                        alert(message);
                    }
                });
            });
        });
    </script>
<script>
 $(document).ready(function () {
    function calculateSubtotal() {
        let serviceTotal = 0;
        $('input[name="total[]"]').each(function () {
            serviceTotal += parseFloat($(this).val()) || 0;
        });

        let extra = 0;
        const checkupType = $('#checkup_type_value').val();

        switch (checkupType) {
            case 'regular':
                extra = 2000;
                break;
            case 'f-up':
                extra = 1000;
                break;
            case '%80':
                extra = 1600;
                break;
            case 'foc':
                extra = 0;
                break;
        }

        const subtotal = serviceTotal + extra;
        $('#subtotal').val(subtotal.toFixed(2));
    }

    function bindEvents($row) {
        $row.find('select[name="services[]"]').off('change').on('change', function () {
            const selected = $(this).find('option:selected');
            const desc = selected.data('description') || '';
            const rate = selected.data('rate') || 0;

            $row.find('input[name="description[]"]').val(desc);
            $row.find('input[name="rate[]"]').val(rate);
            $row.find('.qty').trigger('input');
        });

        $row.find('.qty, .rate, .discount').off('input').on('input', function () {
            const row = $(this).closest('tr');
            const qty = parseFloat(row.find('.qty').val()) || 0;
            const rate = parseFloat(row.find('.rate').val()) || 0;
            const discount = parseFloat(row.find('.discount').val()) || 0;
            const total = (qty * rate) - discount;
            row.find('.total').val(total.toFixed(2));
            calculateSubtotal();
        });
    }

    $('#servicesTableBody tr').each(function () {
        bindEvents($(this));
    });

    $('#addServiceBtn').click(function () {
        const $original = $('#servicesTableBody tr:first');
        const $clone = $original.clone();

        $clone.find('input').each(function () {
            const type = $(this).attr('type');
            if (type === 'number') $(this).val('0');
            if (type === 'date') $(this).val(new Date().toISOString().split('T')[0]);
            if ($(this).hasClass('qty')) $(this).val('1');
            if ($(this).hasClass('discount')) $(this).val('0');
            if ($(this).hasClass('total')) $(this).val('0');
            if ($(this).attr('name') === 'description[]') $(this).val('');
        });

        const selectHTML = $original.find('select[name="services[]"]').html();
        $clone.find('select[name="services[]"]').html(selectHTML).val('');

        bindEvents($clone);
        $('#servicesTableBody').append($clone);
    });

    $(document).on('click', '.remove-service', function (e) {
        e.preventDefault();
        if ($('#servicesTableBody tr').length > 1) {
            $(this).closest('tr').remove();
            calculateSubtotal();
        }
    });

    $('#checkup_type_value').on('change', function () {
        calculateSubtotal();
    });

    calculateSubtotal();
});

</script>

@endsection