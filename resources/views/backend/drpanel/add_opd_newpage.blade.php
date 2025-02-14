@extends('backend.drpanel.layout.app')
@push('title')
    <title>Add OPD New Page</title>
@endpush
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #medicineTable>input {
            max-width: 150px !important;
        }

        .scrollbox {
            overflow-y: scroll;
            max-height: 150px !important;
        }

        .btn-outline-secondary {
            border-radius: 5px !important;
        }

        .btn {
            font-size: 12px !important;
        }

        ::-webkit-input-placeholder {
            font-size: 14px;
        }

        .text-input {
            width: 60px;
        }

        body {
            background-color: #f9f9f9;
        }

        .form-label {
            margin: 0px;
        }

        .table th,
        .table td {
            text-align: center;
            padding: 4px;
            vertical-align: middle;
            font-size: 12px;
        }

        .table thead th {
            background-color: #e9ecef;
            font-size: 12px;
        }

        .form-control {
            height: auto;
            font-size: 16px;
            padding: 2px 8px;
        }

        .header-table th {
            background-color: #d1ecf1;
        }

        .btn {
            font-size: 12px;
            padding: 2px 8px;
        }

        .form-label {
            font-weight: bold;
        }

        .section-title {
            margin: 20px 0 10px;
            font-weight: bold;
            font-size: 12px;
            text-transform: uppercase;
        }

        .footer-links a {
            margin-right: 10px;
        }

        textarea {
            width: 100%;
        }

        .footer-buttons button {
            margin-right: 10px;
        }

        .text-end {
            text-align: right;
        }

        .btn-group .btn {
            margin: 0 5px;
        }

        @media (max-width: 768px) {
            .btn-group .btn {
                margin-bottom: 5px;
                width: 100%;
            }
        }
    </style>
    <form action="{{ url('doctor/opdFormSave') }}" method="POST">
        @csrf
        <input type="hidden" name="opd_id" hidden value="{{ $opdData['id'] }}">
        <div class="">
            <div class="element-box" style="margin-top: -40px; background-color: white;">
                @include('flash-message')
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-bordered form-table mb-0">
                            <thead>
                                <tr>
                                    <td colspan="5">
                                        <div class="text-start">
                                            <label class="form-label">Patient Information</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Case No</th>
                                    <th>Reference Name</th>
                                    <th>Visit No</th>
                                    <th colspan="2">Time/Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $opdData['case_no'] }}</td>
                                    <td>{{ $patientData['reference_name'] }}</td>
                                    <td style="color:red">NA</td>
                                    <td colspan="2">{{ date('h:i A') }}</td>

                                </tr>
                                <thead>
                                    <tr>
                                    <tr>
                                        <td colspan="5">
                                            <div class="text-start">
                                                <label class="form-label">Addional Information</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>City</th>
                                    <th>Visit Date</th>
                                    <th>Mediclaim</th>
                                    </tr>
                                </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $patientData['first_name'] . ' ' . $patientData['last_name'] }}</td>
                                    <td>{{ $patientData['age'] }}</td>
                                    <td>{{ $patientData['city'] }}</td>
                                    <td>{{ date('d-m-Y') }}</td>
                                    <td>{{ $patientData['mediclaim'] == 0 ? 'No' : 'Yes' }}</td>
                                </tr>
                            </tbody>
                            <tr>
                                <td colspan="5">
                                    <div class="text-start">
                                        <label class="form-label">Risk Factor</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="weight" placeholder="WT"
                                                value="{{ $opdData['weight'] }}">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="height" placeholder="HT"
                                                value="{{ $opdData['height'] }}">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="oxygen" placeholder="O2"
                                                value="{{ $opdData['oxygen'] }}">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="temperature" placeholder="TM"
                                                value="{{ $opdData['temperature'] }}">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered form-table mb-0">
                            <tbody>
                                <tr>
                                    <td class="text-start">
                                        <textarea name="complain" placeholder=">>Complain:">{{ $opdData['complain'] }}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        <textarea name="examination" placeholder=">>Examination:">{{ $opdData['examination'] }}</textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="scrollbox">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Case No.</th>
                                        <th>Diagnosis</th>
                                        <th>Visit Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($historyData))
                                        @foreach ($historyData as $val)
                                            <tr>
                                                <td><a href="{{ url('doctor/view-opdAppointment/' . $val['id']) }}"
                                                        class="text-dark"> {{ $val['case_no'] }}</a></td>
                                                <td>{{ $val['diagnosis_name'] }}</td>
                                                <td>{{ date('d-m-Y', strtotime($val['visit_date'])) }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="3" style="text-align: center; color: red; font-weight: bold;">
                                                Patient History Not Available
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <select id="diagnosisSelect" onChange="getDiagnosis();" class="form-control select2"
                                name="diagnosis_ids[]" style="height: 70px !important;">
                                <option selected disabled>Select Diagnosis</option>
                                @foreach ($diagnosticsData as $diagnosis)
                                    <option value="{{ $diagnosis['id'] }}">
                                        {{ $diagnosis['diagnostics_name'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="scrollbox">
                            <table class="table table-bordered mb-0" id="diagnosisTable" style="display: table;">
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Diagnosis</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="diagnosisTableBody">
                                    @if (!empty($opdDiagData))
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($opdDiagData as $val)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $val['diagnosis_name'] }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                        onclick="deleteDiagnosis(this,'{{ $val['diagnosis_id'] }}')">X</button>
                                                    <input type="hidden" hidden name="diagnosis_id[]"
                                                        value="{{ $val['diagnosis_id'] }}">
                                                    <input type="hidden" hidden name="diagnosis_name[]"
                                                        value="{{ $val['diagnosis_name'] }}">
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr id="noDiagnosisRow">
                                            <td colspan="3" style="color: red;font-weight: bold;text-align: center;">
                                                No Diagnosis Added</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- Medicine Section -->
                        <div class="">
                            <select id="medicineSelect" onChange="getMedicine();" class="form-control select2"
                                name="medicine_id1[]" style="height: 70px !important;">
                                <option selected disabled>Select Medicine</option>
                                @foreach ($medicineData as $medicine)
                                    <option data-id="{{ $medicine['id'] }}" value="{{ $medicine['id'] }}"
                                        data-description="{{ $medicine['description'] }}">
                                        {{ $medicine['medicine_name'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="scrollbox">
                            <table class="table table-bordered mb-0" id="medicineTable">
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Medicine Name</th>
                                        <th>Advice</th>
                                        <th>Unit</th>
                                        <th>Days</th>
                                        <th>Qty</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="medicineTableBody">
                                    @if (!empty($opdMedicine))
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($opdMedicine as $val)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $val['medicine_name'] }}</td>
                                                <td>
                                                    <input type="hidden" name="medicine_id[]" hidden class="medicineid"
                                                        value="{{ $val['medicine_id'] }}">
                                                    <input type="hidden" name="medicine_name[]" hidden
                                                        value="{{ $val['medicine_name'] }}">
                                                    <input type="hidden" name="medicine_description[]" hidden
                                                        value="{{ $val['medicine_description'] }}">
                                                    {{ $val['medicine_description'] }}
                                                </td>
                                                <td><input type="text" class="text-input" value="{{ $val['unit'] }}"
                                                        name="unit[]"></td>
                                                <td><input type="text" class="text-input" value="{{ $val['days'] }}"
                                                        name="days[]"></td>
                                                <td><input type="text" class="text-input" value="{{ $val['qty'] }}"
                                                        name="qty[]"></td>
                                                <td><button class="btn btn-danger btn-sm"
                                                        onclick="deleteMedicine(this)">X</button></td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr id="noMedicineRow">
                                            <td colspan="7" style="color: red;font-weight: bold;text-align: center;">
                                                No Medicine Added
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="">
                            <select id="reportSelect" class="form-control select2">
                                <option value="" disabled selected>Select Report</option>
                                <option value="Biopsy">Biopsy</option>
                                <option value="Audiogram">Audiogram</option>
                                <option value="CT Scan">CT Scan</option>
                                <option value="MRI">MRI</option>
                            </select>
                        </div>
                        <div class="scrollbox">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Report</th>
                                        <th>Report Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="reportTableBody">
                                    @if (!empty($opdReport))
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($opdReport as $val)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $val['report_name'] }}</td>
                                                <td>{{ $val['report_description'] }}</td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm deleteBtn">X</button>
                                                    <input type="hidden" hidden name="report_id[]"
                                                        value="{{ $val['report_id'] }}">
                                                    <input type="hidden" hidden name="report_name[]"
                                                        value="{{ $val['report_name'] }}">
                                                    <input type="hidden" hidden name="report_description[]"
                                                        value="{{ $val['report_description'] }}">
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr id="noReportRow" style="display: none;">
                                            <td colspan="4" style="color: red; font-weight: bold; text-align: center;">
                                                No Report Added
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-12" style="font-size: 14px;">
                                <!-- Text Links Section -->
                                <div class="footer-links text-start mb-2">
                                    {{-- <a href="javascript:" class="text-primary">Investigation | Advice | Billing |
                                            Surgery | Admit</a> --}}
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="investigation-tab" data-bs-toggle="tab"
                                                data-bs-target="#investigation" type="button" role="tab"
                                                aria-controls="investigation" aria-selected="true">Investigation</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="advise-tab" data-bs-toggle="tab"
                                                data-bs-target="#advise" type="button" role="tab"
                                                aria-controls="advise" aria-selected="false">Advise</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="billing-tab" data-bs-toggle="tab"
                                                data-bs-target="#billing" type="button" role="tab"
                                                aria-controls="billing" aria-selected="false">Billing</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="surgery-tab" data-bs-toggle="tab"
                                                data-bs-target="#surgery" type="button" role="tab"
                                                aria-controls="surgery" aria-selected="false">Surgery</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="admit-tab" data-bs-toggle="tab"
                                                data-bs-target="#admit" type="button" role="tab"
                                                aria-controls="admit" aria-selected="false">Admit</button>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row g-0" style="display: flex;align-items: center;">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="investigation" role="tabpanel"
                                            aria-labelledby="investigation-tab">
                                            <div class="col-md-12" style="margin: 5px;">
                                                <textarea class="form-control" name="investigation" placeholder="Enter Investigation Descripation" rows="2">{{ $opdData['investigation'] }}</textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="advise" role="tabpanel"
                                            aria-labelledby="advise-tab">
                                            <div class="col-md-12" style="margin: 5px;">
                                                <textarea class="form-control" name="advise" placeholder="Enter Advise Descripation" rows="2">{{ $opdData['advise'] }}</textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="billing" role="tabpanel"
                                            aria-labelledby="billing-tab">
                                            <div class="col-md-12" style="margin: 5px;">
                                                <textarea class="form-control" name="billing" placeholder="Enter Billing Descripation" rows="2">{{ $opdData['billing'] }}</textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="surgery" role="tabpanel"
                                            aria-labelledby="surgery-tab">
                                            <div class="col-md-12" style="margin: 5px;">
                                                <textarea class="form-control" name="surgery" placeholder="Enter Surgery Descripation" rows="2">{{ $opdData['surgery'] }}</textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="admit" role="tabpanel"
                                            aria-labelledby="admit-tab">
                                            <div class="col-md-12" style="margin: 5px;">
                                                <textarea class="form-control" name="admit" placeholder="Enter Admit Descripation" rows="2">{{ $opdData['admit'] }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center" style="margin: 5px;">
                                        <div class="btn-group d-flex" role="group" style="width: 100%;">
                                            <input type="radio" class="btn-check" name="language" id="hindi"
                                                value="hindi" {{ $opdData['language'] == 'hindi' ? 'checked' : '' }}>
                                            <label class="btn btn-outline-secondary" for="hindi">HINDI</label>
                                            <input type="radio" class="btn-check" name="language" id="gujarati"
                                                value="gujarati"
                                                {{ $opdData['language'] == 'gujarati' ? 'checked' : '' }}>
                                            <label class="btn btn-outline-secondary" for="gujarati">GUJARATI</label>
                                            <input type="radio" class="btn-check" name="language" id="marathi"
                                                value="marathi" {{ $opdData['language'] == 'marathi' ? 'checked' : '' }}>
                                            <label class="btn btn-outline-secondary" for="marathi">MARATHI</label>
                                            <input type="radio" class="btn-check" name="language" id="english"
                                                value="english" {{ $opdData['language'] == 'english' ? 'checked' : '' }}>
                                            <label class="btn btn-outline-secondary" for="english">ENGLISH</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row align-items-center g-0">
                                    <!-- Regular, F-UP, 80%, FOC Buttons -->
                                    <div class="col-md-9 d-flex align-items-center">
                                        <input type="radio" class="btn-check" name="checkup_type" id="regular"
                                            value="regular" {{ $opdData['checkup_type'] == 'regular' ? 'checked' : '' }}>
                                        <label class="btn btn-outline-secondary flex-fill me-1"
                                            for="regular">Regular</label>
                                        <input type="radio" class="btn-check" name="checkup_type" id="f-up"
                                            value="f-up" {{ $opdData['checkup_type'] == 'f-up' ? 'checked' : '' }}>
                                        <label class="btn btn-outline-secondary flex-fill me-1"
                                            for="f-up">F-Up</label>
                                        <input type="radio" class="btn-check" name="checkup_type" id="80%"
                                            value="80%" {{ $opdData['checkup_type'] == '80%' ? 'checked' : '' }}>
                                        <label class="btn btn-outline-secondary flex-fill me-1" for="80%">80%</label>
                                        <input type="radio" class="btn-check" name="checkup_type" id="foc"
                                            value="foc" {{ $opdData['checkup_type'] == 'foc' ? 'checked' : '' }}>
                                        <label class="btn btn-outline-secondary flex-fill" for="foc">FOC</label>
                                        <!-- Date Input -->
                                        <span class="me-2 ml-1">Next Visit:</span>
                                        <input type="date" class="form-control d-inline-block" name="next_visit_date"
                                            style="width: 150px;"
                                            value="{{ old('next_visit_date', $opdData['next_visit_date'] ?? '') }}">

                                    </div>
                                    <!-- Submit and Print Buttons -->
                                    <div class="col-md-3 text-end">
                                        <button
                                            class="btn btn-primary me-1"style="font-size: 12px !important;">Submit</button>
                                        <button class="btn btn-info"style="font-size: 12px !important;">Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        // Add diagnosis row to the table with Onchange Event
        var rowCount = 0; // To keep track of the number of rows added

        function getDiagnosis() {
            var select = document.getElementById('diagnosisSelect');
            var selectedOptions = Array.from(select.selectedOptions);
            var diagnosis_val = select.value;

            // Make the table visible
            document.getElementById('diagnosisTable').style.display = 'table';

            // Check if any diagnosis has been selected
            if (selectedOptions.length > 0) {
                // Remove the "No Diagnosis Added" row if it exists
                var noDiagnosisRow = document.getElementById('noDiagnosisRow');
                if (noDiagnosisRow) {
                    noDiagnosisRow.remove();
                }

                // Only display the selected diagnoses
                selectedOptions.forEach(function(option) {
                    if (!isDiagnosisAlreadyAdded(option.text)) {
                        addDiagnosisRow(diagnosis_val, option.text);
                    }
                });
            } else {
                // If no diagnosis is selected, show the "No Diagnosis Added" message
                showNoDiagnosisMessage();
            }

            getDiagnosisMedicineFun(diagnosis_val);
        }

        function getDiagnosisMedicineFun(id) {
            $.ajax({
                url: "{{ url('doctor/getdiagnosismedicine') }}",
                method: 'POST',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'id': id
                },
                cache: false,
                success: function(result) {
                    var medicineids = [];
                    $(".medicineid").each(function() {
                        medicineids.push($(this).val());
                    });

                    console.log(medicineids);
                    if (result.status) {
                        var html = '';
                        $("#noMedicineRow").hide();
                        result.data.forEach(function(item) {

                            if (jQuery.inArray(item.id.toString(), medicineids) < 0) {
                                medicineRowCount++;
                                html += '<tr class="diag' + id + '">';
                                html += '<td>' + medicineRowCount +
                                    '<input type="hidden" name="medicine_id[]" hidden class="medicineid" value="' +
                                    item.id +
                                    '" ><input type="hidden" name="medicine_name[]" hidden value="' +
                                    item.medicine_name + '" ></td>';
                                html += '<td>' + item.medicine_name + '</td>';
                                html += '<td>' + item.description +
                                    '<input type="hidden" name="medicine_description[]" hidden value="' +
                                    item
                                    .description + '" ></td>';
                                html += '<td><input type="text" class="text-input" name="unit[]"></td>';
                                html += '<td><input type="text" class="text-input" name="days[]"></td>';
                                html += '<td><input type="text" class="text-input" name="qty[]"></td>';
                                html +=
                                    '<td><button class="btn btn-danger btn-sm" onclick="deleteMedicine(this)">X</button></td>';
                                html += '</tr>';
                            }
                        });

                        $("#medicineTable").append(html);

                        // Set the width of the input fields dynamically
                        $(".text-input").css('width', '60px');
                    }
                }
            });
        }




        // Function to check if a diagnosis is already added
        function isDiagnosisAlreadyAdded(diagnosisText) {
            var allDiagnosisCells = document.querySelectorAll('#diagnosisTableBody td:nth-child(2)');
            for (var i = 0; i < allDiagnosisCells.length; i++) {
                if (allDiagnosisCells[i].textContent === diagnosisText) {
                    return true; // Diagnosis is already in the table
                }
            }
            return false;
        }

        // Function to add a new row for each diagnosis selection
        function addDiagnosisRow(id, diagnosisText) {
            rowCount++;

            // Create a new row
            var newRow = document.createElement('tr');

            // Create the columns
            var srTd = document.createElement('td');
            srTd.textContent = rowCount; // Add the new row number

            var diagnosisTd = document.createElement('td');
            diagnosisTd.textContent = diagnosisText; // Add the selected diagnosis text

            var actionTd = document.createElement('td');
            actionTd.innerHTML = `<button type="button" class="btn btn-danger btn-sm" onclick="deleteDiagnosis(this, ` +
                id +
                `)">X</button><input type="hidden" hidden name="diagnosis_id[]" value="` + id +
                `" ><input type="hidden" hidden name="diagnosis_name[]" value="` + diagnosisText + `" >`;

            // Append the columns to the new row
            newRow.appendChild(srTd);
            newRow.appendChild(diagnosisTd);
            newRow.appendChild(actionTd);

            // Add the new row to the table body
            document.getElementById('diagnosisTableBody').appendChild(newRow);
        }

        // Function to show "No Diagnosis Added" message
        function showNoDiagnosisMessage() {
            document.getElementById('diagnosisTableBody').innerHTML = `
            <tr id="noDiagnosisRow">
                <td colspan="3" style="text-align: center; color: red; font-weight: bold;">No Diagnosis Added</td>
            </tr>`;
        }

        // Function to delete a diagnosis row
        function deleteDiagnosis(button, id) {
            // Get the row to be deleted
            var row = button.closest('tr');

            // Remove the row from the table
            row.remove();

            // Update the row count
            updateRowCount();

            // Check if the table is empty and show "No Diagnosis Added" message if necessary
            checkIfNoDiagnoses();

            $(".diag" + id + "").remove();
        }

        // Function to update row count and adjust serial numbers
        function updateRowCount() {
            const rows = document.querySelectorAll('#diagnosisTableBody tr');
            rowCount = 0; // Reset row count
            rows.forEach((row, index) => {
                if (row.id !== 'noDiagnosisRow') { // Ignore the "No Diagnosis Added" row
                    rowCount++;
                    row.cells[0].textContent = rowCount; // Update serial number
                }
            });
        }

        // Function to check if the table has no diagnoses and show the message if necessary
        function checkIfNoDiagnoses() {
            const rows = document.querySelectorAll('#diagnosisTableBody tr');
            if (rows.length === 0 || (rows.length === 1 && rows[0].id === 'noDiagnosisRow')) {
                // If there are no rows or only the "No Diagnosis Added" row
                showNoDiagnosisMessage();
                // Ensure the table is visible
                document.getElementById('diagnosisTable').style.display = 'table';
            }
        }
    </script>

    {{-- For Medicine --}}
    <script>
        var medicineRowCount = "{{ count($opdMedicine) ?? 0 }}"; // To keep track of the number of medicine rows added

        // Function to initialize the table state on page load
        function initializeMedicineTable() {
            // Check if there are any medicines added
            checkIfNoMedicines();
        }

        function getMedicine() {
            var select = document.getElementById('medicineSelect');
            var selectedOptions = Array.from(select.selectedOptions);

            // Make the table visible
            document.getElementById('medicineTable').style.display = 'table';

            // Check if any Medicine has been selected
            if (selectedOptions.length > 0) {
                // Remove the "No Medicine Added" row if it exists
                var noMedicineRow = document.getElementById('noMedicineRow');
                if (noMedicineRow) {
                    noMedicineRow.remove();
                }

                // Only display the selected medicines
                selectedOptions.forEach(function(option) {
                    if (!isMedicineAlreadyAdded(option.text)) {
                        // Add the selected medicine with its description (from the data attribute)
                        addMedicineRow(option.getAttribute('data-id'), option.text, option.getAttribute(
                            'data-description'));
                    }
                });
            } else {
                // If no Medicine is selected, show the "No Medicine Added" message
                showNoMedicineMessage();
            }
        }

        // Function to check if a medicine is already added
        function isMedicineAlreadyAdded(medicineName) {
            var allMedicineCells = document.querySelectorAll('#medicineTableBody td:nth-child(2)');
            for (var i = 0; i < allMedicineCells.length; i++) {
                if (allMedicineCells[i].textContent === medicineName) {
                    return true; // Medicine is already in the table
                }
            }
            return false;
        }

        // Function to add a new row for each selected medicine
        function addMedicineRow(id, medicineName, advice) {
            medicineRowCount++;

            var html = '<tr><td>' + medicineRowCount +
                '<input type="hidden" name="medicine_id[]" hidden class="medicineid" value="' + id +
                '" ><input type="hidden" name="medicine_name[]" hidden value="' + medicineName +
                '" ><input type="hidden" name="medicine_description[]" hidden value="' + advice +
                '" ></td><td>' + medicineName + '</td><td>' + advice +
                '</td><td><input type="text" class="text-input" name="unit[]"></td><td><input type="text" class="text-input" name="days[]"></td><td><input type="text" class="text-input" name="qty[]"></td><td><button class="btn btn-danger btn-sm" onclick="deleteMedicine(this)">X</button></td></tr>';

            $("#medicineTable").append(html);

            // Now apply the width styling
            $(".text-input").css('width', '60px');


            document.getElementById('medicineTableBody').appendChild(newRow);
        }

        // Function to show "No Medicine Added" message
        function showNoMedicineMessage() {
            document.getElementById('medicineTableBody').innerHTML = `
                <tr id="noMedicineRow">
                    <td colspan="7" style="text-align: center; color: red; font-weight: bold;">No Medicine Added</td>
                </tr>
            `;
        }

        // Function to delete a medicine row
        function deleteMedicine(button) {
            var row = button.closest('tr');
            row.remove();
            updateMedicineRowCount();
            checkIfNoMedicines();
        }

        // Function to update row count and adjust serial numbers
        function updateMedicineRowCount() {
            const rows = document.querySelectorAll('#medicineTableBody tr');
            medicineRowCount = 0; // Reset row count
            rows.forEach((row) => {
                if (row.id !== 'noMedicineRow') { // Ignore the "No Medicine Added" row
                    medicineRowCount++;
                    row.cells[0].textContent = medicineRowCount; // Update serial number
                }
            });
        }
        // Function to check if the table has no medicines and show the message if necessary
        function checkIfNoMedicines() {
            const rows = document.querySelectorAll('#medicineTableBody tr');
            if (rows.length === 0 || (rows.length === 1 && rows[0].id === 'noMedicineRow')) {
                showNoMedicineMessage();
                document.getElementById('medicineTable').style.display = 'table';
            }
        }
        // Initialize the table state when the page loads
        window.onload = initializeMedicineTable;
    </script>
    <!-- jQuery Script to handle report selection -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var reportDescriptions = {
                'Biopsy': 'Lorem ipsum dolor sit amet consectetur.',
                'Audiogram': 'Hearing test description.',
                'CT Scan': 'A detailed X-ray scan.',
                'MRI': 'Magnetic resonance imaging description.'
            };

            var srNo = 1;

            // Function to update no report message visibility
            function updateNoReportRow() {
                if ($('#reportTableBody tr').length === 1) { // Only the "No Report Added" row is present
                    $('#noReportRow').show();
                } else {
                    $('#noReportRow').hide();
                }
            }

            // Add report to the table on selection
            $('#reportSelect').change(function() {
                var selectedReport = $(this).val();
                var reportDescription = reportDescriptions[selectedReport];

                // Check if the report is already in the table
                if ($('#reportTableBody tr').filter(function() {
                        return $(this).find('td:eq(1)').text() === selectedReport;
                    }).length === 0) {
                    var newRow = `
                    <tr>
                        <td>${srNo}</td>
                        <td>${selectedReport}</td>
                        <td>${reportDescription}</td>
                        <td>
                            <input type="hidden" name="report_id[]" hidden value="` + srNo + `">
                            <input type="hidden" name="report_name[]" hidden value="` + selectedReport + `">
                            <input type="hidden" name="report_description[]" hidden value="` + reportDescription + `">
                            <button class="btn btn-danger btn-sm deleteBtn">X</button>
                        </td>
                    </tr>
                `;

                    $('#reportTableBody').append(newRow);
                    srNo++;
                    updateNoReportRow(); // Update message visibility
                } else {
                    alert('This report is already added to the table.');
                }

                // Clear the selected option
                $(this).val('');
            });

            // Delete a report from the table
            $(document).on('click', '.deleteBtn', function() {
                $(this).closest('tr').remove();
                updateNoReportRow(); // Update message visibility
            });

            // Initial check for no reports
            updateNoReportRow();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
