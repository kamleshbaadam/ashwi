@extends('backend.telecaller.layout.app')
@push('title')
    <title>Tele Caller</title>
@endpush

@push('styles')
<style>
    /* Essential styles only */
    #search_list {
        padding-left: 1rem !important;
    }
    .searchdata_height {
        background: #bcd2bd;
        width: 100% !important;
        margin-top: 10px;
        z-index: 9;
        border-radius: 4px;
    }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
@endpush

@section('content')
    <div class="content-w" style="margin-top: -50px;">
        <div class="content-i">
            <div class="content-box">
                <h6 class="element-header">APPOINTMENT</h6>
                @include('flash-message')
                
                <!-- Appointment Form -->
                <form action="{{ url('telecaller/store-appointment') }}" method="post">
                    @csrf
                    <div class="element-box">
                        <div class="row">
                            <!-- Basic Information -->
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Phone Number" type="number" name="phone_no" required autocomplete="off">
                                    <input class="form-control" hidden type="hidden" name="patient_id" id="patient_id" required autocomplete="off">
                                    <div id="phoneNoSuggestions" style="display: none; position: absolute; border: 1px solid #ccc; background: #fff; max-height: 150px; overflow-y: auto; width:100%"></div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" id="nameSuggestions" type="text" name="name" required>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Reference" type="text" name="reference" required>
                                </div>
                            </div>
                            
                            <!-- Appointment Types -->
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input value="dr_time" name="type" type="radio" class="form-check-input">
                                            <label class="form-check-label">Dr Time</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input value="marketing" name="type" type="radio" class="form-check-input">
                                            <label class="form-check-label">Marketing</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input name="type" value="advertisement" type="radio" class="form-check-input">
                                            <label class="form-check-label">Advertisement</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input name="type" type="radio" value="appointment" class="form-check-input">
                                            <label class="form-check-label">Appointments</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Appointment Details (hidden by default) -->
                            <div id="appointment" style="display: none;" class="col-12 mt-3">
                                <div class="row">
                                    <!-- Case Type and Doctor -->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Case Type</label>
                                            <select class="form-control" name="case_type">
                                                <option selected disabled>Select Case Type</option>
                                                <option value="new">New</option>
                                                <option value="follow-up">Follow-Up</option>
                                                <option value="urgent">Urgent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Doctor Name</label>
                                            <select class="form-control" name="doctor_id" required>
                                                <option value="" disabled selected>Select Doctor</option>
                                                @if (!empty($doctorData))
                                                    @foreach ($doctorData as $val)
                                                        <option value="{{ $val['id'] }}">
                                                            {{ $val['first_name'] . ' ' . $val['last_name'] }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Appointment Date</label>
                                            <input class="form-control" value="{{ date('Y-m-d', strtotime('+1 day')) }}" type="date" name="appointment_date" id="appointment_date">
                                        </div>
                                    </div>
                                    
                                    <!-- Morning Schedule -->
                                    <div class="col-12 mt-2">
                                        <h6>Morning</h6>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            @foreach(['10:00', '10:10', '10:20', '10:30', '10:40', '10:50', '11:00', '11:10', '11:20', '11:30', '11:40', '11:50','12:00','12:10','12:20','12:30','12:40','12:50','13:00'] as $time)
                                                <div class="col-md-1 mb-2">
                                                    <input type="radio" name="time" class="timeRadio" value="{{ $time }}">
                                                    <span>{{ $time }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    
                                    <!-- Morning Waiting -->
                                    <div class="col-12 mt-2">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-check">
                                                    <input type="checkbox" id="waitingMorningCheckbox" class="form-check-input">
                                                    <label class="form-check-label text-danger">Morning Waiting</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="time" name="morning_waiting_time" id="waitingMorningTime" class="form-control" min="10:00" max="13:00" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Evening Schedule -->
                                    <div class="col-12 mt-3">
                                        <h6>Evening</h6>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            @foreach(['15:00','15:10','15:20','15:30','15:40','15:50','16:00','16:10','16:20','16:30','16:40','16:50','17:00','17:10','17:20','17:30','17:40','17:50','18:00','18:10','18:20','18:30','18:40','18:50','19:00'] as $time)
                                                <div class="col-md-1 mb-2">
                                                    <input type="radio" name="time" class="timeRadio" value="{{ $time }}">
                                                    <span>{{ $time }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    
                                    <!-- Evening Waiting -->
                                    <div class="col-12 mt-2">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-check">
                                                    <input type="checkbox" id="waitingEveningCheckbox" class="form-check-input">
                                                    <label class="form-check-label text-danger">Evening Waiting</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="time" name="evening_waiting_time" id="waitingEveningTime" class="form-control" min="15:00" max="19:00" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Submit Button -->
                            <div class="col-sm-12 text-right mt-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
                
                <!-- Recent Appointments Table -->
                <div class="element-wrapper compact pt-4">
                    <div class="element-actions">
                        <a class="btn btn-success btn-sm" href="/telecaller/view-appointment">
                            <i class="os-icon os-icon-grid-10"></i><span>View All</span>
                        </a>
                    </div>
                    <h6 class="element-header">Appointments</h6>
                    <div class="table-responsive">
                        <table class="table table-padded">
                            <thead>
                                <tr>
                                    <th>SR</th>
                                    <th>Name</th>
                                    <th>Phone No</th>
                                    <th>Case Type</th>
                                    <th>Reference</th>
                                    <th>Doctor Name</th>
                                    <th>Appointment Date</th>
                                    <th>Status</th>
                                    <th>Remark</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $appointment->name }}</td>
                                        <td>{{ $appointment->phone_no }}</td>
                                        <td>{{ $appointment->case_type ? ucfirst($appointment->case_type) : 'Not Provided' }}</td>
                                        <td>{{ $appointment->reference }}</td>
                                        <td>{{ $appointment->doctor_id ? optional($appointment->doctor)->first_name . ' ' . optional($appointment->doctor)->last_name : 'User Not Selected' }}</td>
                                        <td>{{ $appointment->appointment_date ?? 'Not Provided' }}</td>
                                        <td>
                                            @if ($appointment->status == 'booked')
                                                <span class="status-pill smaller green"></span>
                                            @elseif($appointment->status == 'confirmed')
                                                <span class="status-pill smaller yellow"></span>
                                            @else
                                                <span class="status-pill smaller red"></span>
                                            @endif
                                            <span>{{ ucwords($appointment->status) }}</span>
                                        </td>
                                        <td>{{ $appointment->remark ?? 'Not Provided' }}</td>
                                        <td>
                                            <a href="{{ url('telecaller/edit-appointment/' . $appointment->id) }}" class="btn btn-sm btn-info">
                                                <i class="os-icon os-icon-ui-49"></i>
                                            </a>
                                            <form action="{{ url('telecaller/view-appointment/' . $appointment->id) }}" style="display: inline;" method="post" onsubmit="return confirm('Are you sure you want to delete this appointment?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="os-icon os-icon-ui-15"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Outreach Table -->
                <div class="element-wrapper compact pt-4">
                    <div class="element-actions">
                        <a class="btn btn-success btn-sm" href="/telecaller/view-outreach">
                            <i class="os-icon os-icon-grid-10"></i><span>View All</span>
                        </a>
                    </div>
                    <h6 class="element-header">Outreach</h6>
                    <div class="table-responsive">
                        <table class="table table-padded">
                            <thead>
                                <tr>
                                    <th>SR</th>
                                    <th>Name</th>
                                    <th>Phone No</th>
                                    <th>Meeting Type</th>
                                    <th>Reference</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Remark</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($outreachData as $orData)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $orData->name }}</td>
                                        <td>{{ $orData->phone_no }}</td>
                                        <td>{{ !empty($orData->type) ? ucwords(str_replace('_', ' ', $orData->type)) : '' }}</td>
                                        <td>{{ $orData->reference }}</td>
                                        <td>{{ $orData->appointment_date ? date('Y-m-d', strtotime($orData->appointment_date)) : 'Not Provided' }}</td>
                                        <td>
                                            @if ($orData->status == 'booked')
                                                <span class="status-pill smaller green"></span>
                                            @elseif($orData->status == 'confirmed')
                                                <span class="status-pill smaller yellow"></span>
                                            @else
                                                <span class="status-pill smaller red"></span>
                                            @endif
                                            <span>{{ ucwords($orData->status) }}</span>
                                        </td>
                                        <td>{{ $orData->remark ?? 'Not Provided' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script>
        $(document).ready(function() {
            // Toggle appointment form section when appointment radio is selected
            $('input[name="type"]:radio').change(function() {
                $("#appointment").css('display', 'none');
                if ($(this).val() == "appointment") {
                    $("#appointment").css('display', 'block');
                }
            });

            // Phone number suggestions
            $('input[name="phone_no"]').on('keyup', function() {
                var query = $(this).val();

                if (query.length >= 3) {
                    $.ajax({
                        url: "{{ url('/telecaller/phone-suggestions') }}",
                        method: "POST",
                        data: {
                            '_token': '{{ csrf_token() }}',
                            'query': query
                        },
                        success: function(data) {
                            $('#patient_id').val('');
                            var html = '<ul id="search_list" style="list-style: none; padding: 0; margin: 0;">';
                            
                            $.each(data, function(k, v) {
                                html += `<li class="su_Best_li btn btn-default" style="width:100%; text-align:left;"
                                            data-phone="${v.phone_no}" 
                                            data-name="${v.name}" 
                                            data-reference="${v.reference_name}" 
                                            data-id="${v.id}">
                                            ${v.name} (${v.phone_no})
                                        </li>`;
                            });

                            html += '</ul>';
                            $("#phoneNoSuggestions").html(html).show();
                        }
                    });
                } else {
                    $('#phoneNoSuggestions').html('').hide();
                }
            });

            // Handle click event on the suggestion list items
            $(document).on('click', '.su_Best_li', function() {
                let phone = $(this).data('phone');
                let name = $(this).data('name');
                let reference = $(this).data('reference');
                let id = $(this).data('id');

                $('input[name="phone_no"]').val(phone);
                $('input[name="name"]').val(name);
                $('input[name="reference"]').val(reference);
                $('#patient_id').val(id);

                $('#phoneNoSuggestions').hide();
            });

            // Hide suggestions when clicking outside
            $(document).on('click', function(e) {
                if (!$(e.target).closest('input[name="phone_no"], #phoneNoSuggestions').length) {
                    $('#phoneNoSuggestions').hide();
                }
            });
            
            // Waiting time checkboxes
            var morningCheckbox = document.getElementById('waitingMorningCheckbox');
            var eveningCheckbox = document.getElementById('waitingEveningCheckbox');
            var morningTimeInput = document.getElementById('waitingMorningTime');
            var eveningTimeInput = document.getElementById('waitingEveningTime');

            morningCheckbox.addEventListener('change', function() {
                morningTimeInput.disabled = !this.checked;
                if (this.checked) {
                    eveningTimeInput.disabled = true;
                    eveningCheckbox.checked = false;
                    $(".timeRadio").prop('checked', false);
                }
            });

            eveningCheckbox.addEventListener('change', function() {
                eveningTimeInput.disabled = !this.checked;
                if (this.checked) {
                    morningTimeInput.disabled = true;
                    morningCheckbox.checked = false;
                    $(".timeRadio").prop('checked', false);
                }
            });

            $(".timeRadio").click(function() {
                if (this.checked) {
                    morningTimeInput.disabled = true;
                    eveningTimeInput.disabled = true;
                    morningCheckbox.checked = false;
                    eveningCheckbox.checked = false;   
                }
            });
            
            // Check time availability when date changes
            $('#appointment_date').on('change', function() {
                var selectedDate = $(this).val();
                
                $.ajax({
                    url: "{{ url('/telecaller/check-time-availability') }}",
                    method: 'POST',
                    data: {
                        appointment_date: selectedDate,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        var bookedTimes = response;
                        $(".timeRadio").prop('checked', false).prop('disabled', false);
                        
                        $.each(bookedTimes, function(index, timeValue) {
                            $(".timeRadio[value='" + timeValue + "']").prop('disabled', true);
                        });
                    }
                });
            });
        });
    </script>
@endpush
