@extends('backend.telecaller.layout.app')
@push('title')
    <title>Tele Caller</title>
@endpush
@section('content')
    <style>
        li {
            list-style-type: none;
        }

        ul {
            padding-left: 10px;
            padding-top: 5px;
            width: 100% !important;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        #search_list {
            padding-left: 1rem !important;
        }

        li.su_Best_li {
            padding: 0.5rem 0.5rem 0.5rem 0;
            margin-bottom: 0rem;
        }

        .searchdata_height {
            background: #bcd2bd;
            width: 100% !important;
            margin-top: 10px;
            z-index: 9;
            border-radius: 4px;
        }

        #search_list li {
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
        }
    </style>
    <div class="content-w" style="margin-top: -50px;">
        <div class="content-i">
            <div class="content-box">
                <h6 class="element-header">APPOINTMENT</h6>
                @include('flash-message')
                <form action="{{ url('telecaller/store-appointment') }}" method="post">
                    @csrf
                    <div class="">
                        <div class="form-group">
                            <div class="row element-box">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Phone Number" type="number"
                                            name="phone_no" required autocomplete="off">
                                        <input class="form-control" hidden type="hidden" name="patient_id" id="patient_id"
                                            required autocomplete="off">
                                        <div id="phoneNoSuggestions"
                                            style="display: none; position: absolute; border: 1px solid #ccc; background: #fff; max-height: 150px; overflow-y: auto; width:100%">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Name" id="nameSuggestions" type="text"
                                            name="name" required>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group"><input class="form-control" placeholder="Reference"
                                            type="text" name="reference" required>
                                    </div>
                                </div>
                                <div style="display: flex; gap: 2px; margin-top: 15px;" class="col-md-1">
                                    <input value="dr_time" name="type" type="radio" style="margin-top: -20px;">
                                    Dr Time
                                </div>
                                <div style="display: flex; gap: 2px; margin-top: 15px;" class="col-md-1">
                                    <input value="marketing" name="type" type="radio" style="margin-top: -20px;">
                                    Marketing
                                </div>
                                <div style="display: flex; gap: 2px; margin-top: 15px;" class="col-md-1 mr-3">
                                    <input name="type" value="advertisement" type="radio" style="margin-top: -20px;">
                                    Advertisement
                                </div>
                                <div style="display: flex; gap: 2px; margin-top: 15px;" class="col-md-2">
                                    <input name="type" type="radio" value="appointment" style="margin-top: -20px;">
                                    Appointments
                                </div>
                                <div id="appointment" style="display: none;margin-left:10px;">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                        <label for="">Case Type</label>
                                                <select class="form-control" name="case_type">
                                                    <option selected disabled>Select Case Type</option>
                                                    <option value="new">New</option>
                                                    <option value="follow-up">Follow-Up </option>
                                                    <option value="urgent">Urgent</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                        <label for="">Doctor Name</label>
                                                <select class="form-control" name="doctor_id">
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
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                        <label for="">Appointment Date</label>
                                                <input class="form-control" value="{{ date('Y-m-d', strtotime('+1 day')) }}"
                                                    placeholder="time" type="date" name="appointment_date" id="appointment_date">
                                            </div>
                                        </div>
                                        <h6 class="col-sm-12">Morning</h6>
                                        @foreach(['10:00', '10:10', '10:20', '10:30', '10:40', '10:50', '11:00', '11:10', '11:20', '11:30', '11:40', '11:50','12:00','12:10','12:20','12:30','12:40','12:50','13:00'] as $time)
                                            <div class="col-md-1 mb-2">
                                                <input type="radio" name="time" class="timeRadio" value="{{ $time }}">
                                                <span>{{ $time }}</span>
                                            </div>
                                        @endforeach
                                        <div class="col-sm-12"></div>
                                        <div class="col-md-1" style="margin-top: 5px;">
                                            <input type="checkbox" id="waitingMorningCheckbox" style="margin-top: 10px;">
                                            <label for="waitingMorningCheckbox"
                                                style="font-weight: bold;color: #ff0000;">Waiting</label>
                                        </div>
                                        <div class="col-lg-4" style="margin-top: 5px;">
                                            <input type="time" name="morning_waiting_time" id="waitingMorningTime"
                                                class="form-control" style="width: 120px;" min="10:00" max="13:00"
                                                disabled>
                                        </div>
                                        <div class="col-lg-12" style="margin-bottom: 5px;">
                                        </div>
                                        <div class="col-sm-12">
                                            <h6>Evening</h6>
                                        </div>
                                        @foreach(['15:00','15:10','15:20','15:30','15:40','15:50','16:00','16:10','16:20','16:30','16:40','16:50','17:00','17:10','17:20','17:30','17:40','17:50','18:00','18:00','18:10','18:20','18:30','18:40','18:50','19:00'] as $time)
                                            <div class="col-md-1 mb-2">
                                                <input type="radio" name="time" class="timeRadio" value="{{ $time }}">
                                                <span>{{ $time }}</span>
                                            </div>
                                        @endforeach
                                        <div class="col-sm-12"></div>
                                        <div class="col-md-1" style="margin-top: 5px;">
                                            <input type="checkbox" id="waitingEveningCheckbox" style="margin-top: 10px;">
                                            <label for="waitingEveningCheckbox"
                                                style="font-weight: bold;color: #ff0000;">Waiting</label>
                                        </div>
                                        <div class="col-lg-4" style="margin-top: 5px;">
                                            <input type="time" name="evening_waiting_time" id="waitingEveningTime"
                                                class="form-control" style="width: 120px;" min="15:00" max="19:00"
                                                disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-right" style="margin-top: 5px;">
                                        <div class="">
                                            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="element-wrapper compact pt-4">
                    <div class="element-actions">
                        {{-- <a class="btn btn-primary btn-sm"
                            href="{{ url('reception/edit-appointment') }}">
                            <i class="os-icon os-icon-ui-22"></i><span>Add Patient</span>
                        </a> --}}
                        <a class="btn btn-success btn-sm" href="/telecaller/view-appointment">
                            <i class="os-icon os-icon-grid-10"></i><span>View All</span></a>
                    </div>
                    <h6 class="element-header">Appointments</h6>
                    <div class="table-responsive">
                        <table class="table table-padded" style="text-align: center !important">
                            <thead>
                                <tr>
                                    <th>SR</th>
                                    <th>Name </th>
                                    <th>phone No</th>
                                    {{-- <th>Meeting Type</th> --}}
                                    <th>Case Type</th>
                                    <th>Reference</th>
                                    <th>Doctor Name </th>
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
                                        {{-- <td>{{ !empty($appointment->type) ? ucwords(str_replace('_', ' ', $appointment->type)) : '' }}
                                        </td> --}}
                                        <td>
                                            @if ($appointment->case_type)
                                                {{ ucfirst($appointment->case_type) }}
                                            @else
                                                Not Provided
                                            @endif
                                        </td>
                                        <td>{{ $appointment->reference }}</td>
                                        <td>
                                            @if ($appointment->doctor_id)
                                                {{ optional($appointment->doctor)->first_name . ' ' . optional($appointment->doctor)->last_name }}
                                            @else
                                                User Not Selected
                                            @endif
                                        </td>
                                        <td>
                                            @if ($appointment->appointment_date)
                                                {{ $appointment->appointment_date }}
                                            @else
                                                Not Provided
                                            @endif
                                        </td>
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
                                        <td>
                                            @if ($appointment->remark)
                                                {{ $appointment->remark }}
                                            @else
                                                Not Provided
                                            @endif
                                        </td>
                                        <td style="display: flex;font-size: 20px;">
                                            <a href="{{ url('telecaller/edit-appointment/' . $appointment->id) }}"
                                                type="button" class="btn btn-info" name="submit"><i class="os-icon os-icon-ui-49"
                                                    style="color: black;"></i><span></span></a>
                                            <form action="{{ url('telecaller/view-appointment/' . $appointment->id) }}"
                                                style="padding-left: 5px;" method="post"
                                                onsubmit="return confirm('Are you sure you want to delete this appointment?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" name="submit" style="border:none">
                                                    <i class="os-icon os-icon-ui-15"><span></span></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="element-wrapper compact pt-4">
                    <div class="element-actions">
                        {{-- <a class="btn btn-primary btn-sm"
                            href="{{ url('reception/edit-appointment') }}">
                            <i class="os-icon os-icon-ui-22"></i><span>Add Patient</span>
                        </a> --}}
                        <a class="btn btn-success btn-sm" href="/telecaller/view-outreach">
                            <i class="os-icon os-icon-grid-10"></i><span>View All</span></a>
                    </div>
                    <h6 class="element-header">Outreach</h6>
                    <div class="table-responsive">
                        <table class="table table-padded" style="text-align: center !important">
                            <thead>
                                <tr>
                                    <th>SR</th>
                                    <th>Name </th>
                                    <th>phone No</th>
                                    <th>Meeting Type</th>
                                    {{-- <th>Case Type</th> --}}
                                    <th>Reference</th>
                                    {{-- <th>Doctor Name </th> --}}
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
                                        <td>{{ !empty($orData->type) ? ucwords(str_replace('_', ' ', $orData->type)) : '' }}
                                        </td>
                                        {{-- <td>
                                            @if ($orData->case_type)
                                                {{ ucfirst($orData->case_type) }}
                                            @else
                                                Not Provided
                                            @endif
                                        </td> --}}
                                        <td>{{ $orData->reference }}</td>
                                        {{-- <td>
                                            @if ($orData->doctor_id)
                                                {{ optional($orData->doctor)->first_name . ' ' . optional($orData->doctor)->last_name }}
                                            @else
                                                User Not Selected
                                            @endif
                                        </td> --}}
                                        <td>
                                            @if ($orData->appointment_date)
                                                {{ (date('Y-m-d', strtotime($orData->appointment_date))) }}
                                            @else
                                                Not Provided
                                            @endif
                                        </td>
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
                                        <td>
                                            @if ($orData->remark)
                                                {{ $orData->remark }}
                                            @else
                                                Not Provided
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="display-type"></div>
    </div>
@endsection
@push('javascript')
    <script>
        $('input[name="type"]:radio').change(function() {
            $("#appointment").css('display', 'none');
            if ($(this).val() == "appointment") {
                $("#appointment").css('display', 'block');
                // Make fields required when appointment is selected
                $('select[name="case_type"]').prop('required', true);
                $('select[name="doctor_id"]').prop('required', true); 
                $('input[name="appointment_date"]').prop('required', true);
                $('input[name="time"]').prop('required', true);
            } else {
                // Remove required when appointment not selected
                $('select[name="case_type"]').prop('required', false);
                $('select[name="doctor_id"]').prop('required', false);
                $('input[name="appointment_date"]').prop('required', false); 
                $('input[name="time"]').prop('required', false);
            }
        });
        $(document).ready(function() {
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
                $('#patient_id').val(id); // Set hidden patient ID field

                $('#phoneNoSuggestions').hide();
            });

            // Hide suggestions when clicking outside
            $(document).on('click', function(e) {
                if (!$(e.target).closest('input[name="phone_no"], #phoneNoSuggestions').length) {
                    $('#phoneNoSuggestions').hide();
                }
            });
        });

        function getPatientData(id) {
            $('input[name="phone_no"]').val('');
            $('input[name="name"]').val('');
            $('input[name="reference"]').val('');
            $('#patient_id').val('');

            var selectedPhone = $("#patientli" + id + "").data('phone');
            var selectedName = $("#patientli" + id + "").data('name');
            var selectedReference = $("#patientli" + id + "").data('reference');
            var patient_id = $("#patientli" + id + "").data('id');

            $('input[name="phone_no"]').val(selectedPhone);
            $('#patient_id').val(patient_id);
            $('input[name="name"]').val(selectedName);
            $('input[name="reference"]').val(selectedReference);

            $("#phoneNoSuggestions").hide();
            $('#search_list').html('');
            $('#search_list').hide();
        }
        var morningCheckbox = document.getElementById('waitingMorningCheckbox');
        var eveningCheckbox = document.getElementById('waitingEveningCheckbox');
        var morningTimeInput = document.getElementById('waitingMorningTime');
        var eveningTimeInput = document.getElementById('waitingEveningTime');
        // var timeRadio = document.getElementsByClassName('timeRadio');

        morningCheckbox.addEventListener('change', function() {
            morningTimeInput.disabled = true;
            eveningTimeInput.disabled = true;

            if (this.checked) {
                morningTimeInput.disabled = false;
                eveningTimeInput.disabled = true;
                eveningCheckbox.checked = false;
                $(".timeRadio").prop('checked', false);
                // timeRadio.checked = false;

            }
        });

        $(".timeRadio").click(function()
        {
            if (this.checked)
            {
                morningTimeInput.disabled = true;
                eveningTimeInput.disabled = true;
                morningCheckbox.checked = false;
                eveningCheckbox.checked = false;   
            }
        })

        eveningCheckbox.addEventListener('change', function() {
            morningTimeInput.disabled = true;
            eveningTimeInput.disabled = true;

            if (this.checked) {
                morningTimeInput.disabled = true;
                eveningTimeInput.disabled = false;
                morningCheckbox.checked = false;
                $(".timeRadio").prop('checked', false);

            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            var input = document.getElementById('waitingMorningTime');
            input.min = '10:00';
            input.max = '13:00';
        });
        document.addEventListener('DOMContentLoaded', function() {
            var input = document.getElementById('waitingEveningTime');
            input.min = '15:00';
            input.max = '19:00';
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var dateInput = $('#appointment_date');
    
            dateInput.on('change', function() {
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
                        $(this).prop('disabled', false);
                        $(".timeRadio").each(function()
                        {
                            var timeValue = $(this).val();
                            $(".timeRadio").prop('checked', false);
                            if ($.inArray(timeValue, bookedTimes) !== -1)
                            {
                                $(this).prop('disabled', true);
                            }
                            else
                            {
                                $(this).prop('disabled', false);
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
