@extends('backend.reception.layout.app')

@push('title')
    <title>Print OPD Bill</title>
@endpush

@section('content')
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f7fa;
            color: #222;
        }

        .invoice-wrapper {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
            padding: 30px 35px;
        }

        .invoice-header {
            border-bottom: 3px solid #1e88e5;
            padding-bottom: 15px;
            margin-bottom: 30px;
            text-align: center;
        }

        .invoice-header h1 {
            font-weight: 700;
            font-size: 34px;
            color: #1e88e5;
            margin-bottom: 8px;
            letter-spacing: 1.1px;
        }

        .invoice-header p {
            font-size: 14px;
            color: #555;
            margin: 0;
            line-height: 1.4;
        }

        .info-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 30px;
            gap: 20px;
        }

        .info-block {
            flex: 1 1 45%;
            min-width: 250px;
        }

        .info-block p {
            margin: 6px 0;
            font-size: 15px;
            line-height: 1.3;
        }

        .info-block p strong {
            width: 140px;
            display: inline-block;
            color: #444;
        }

        .info-block.text-right p {
            text-align: right;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
            font-size: 15px;
            box-shadow: 0 0 12px rgb(0 0 0 / 0.05);
            border-radius: 6px;
            overflow: hidden;
        }

        thead tr {
            background-color: #1e88e5;
            color: #fff;
            font-weight: 600;
        }

        th,
        td {
            padding: 14px 18px;
            border-bottom: 1px solid #eaeaea;
            vertical-align: middle;
        }

        tbody tr:hover {
            background-color: #f0f5fb;
        }

        .print-btn {
            background: #1e88e5;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            float: right;
            margin-bottom: 10px;
        }

        .print-btn:hover {
            background-color: #155f9e;
        }

        @media print {
            .print-btn {
                display: none;
            }

            table thead tr {
                background-color: #ddd !important;
                -webkit-print-color-adjust: exact;
            }

            .invoice-wrapper {
                box-shadow: none;
                border: none;
                max-width: 100%;
                margin: 0;
                padding: 0;
            }
        }
    </style>

    <div class="invoice-wrapper" id="invoice-box">
        <button class="print-btn ml-1" onclick="window.print()">Print Bill</button>
        <button class="print-btn" onclick="window.history.back()">Back</button>

        <header class="invoice-header">
            <h1>Aashwi E.N.T. Hospital</h1>
            <p>25 Sumangalam Cooperative Housing Society, Opp Drive In Cinema Gate, Bodakdev-380054</p>
        </header>

        <section class="info-section">
            <div class="info-block">
                <p><strong>Patient Name:</strong> {{ ucwords($opdData['name_prefix']) }}
                    {{ ucwords($opdData['first_name']) }}
                    {{ ucwords($opdData['last_name']) }}
                </p>
                <p><strong>Patient ID:</strong> {{ ucwords($opdData['patient_id']) }}</p>
                <p><strong>Phone:</strong> {{ ucwords($opdData['phone_no']) }}</p>
                <p><strong>Gender:</strong> {{ ucwords($opdData['gender']) }}</p>
            </div>
            <div class="info-block text-right">
                <p><strong>Case No:</strong> {{ ucwords($opdData['opdmaster']['case_no']) }}</p>
                <p><strong>Age / DOB:</strong> {{ ucwords($opdData['age']) }} /
                    {{ date('d M, Y', strtotime($opdData['dob'])) }}
                </p>
                <p><strong>Doctor:</strong> Dr. {{ ucwords($opdData['opdmaster']['doctor']['first_name']) }}
                    {{ ucwords($opdData['opdmaster']['doctor']['last_name']) }}
                </p>
                <p><strong>Visit Date:</strong>
                    {{ date('d M, Y', strtotime($opdData['opdmaster']['created_at'])) }}
                </p>
            </div>
        </section>


        <h5>Diagnosis</h5>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Diagnosis</th>
                </tr>
            </thead>
            <tbody>
                @foreach($opdData['opddiagnosis'] as $index => $diagnosis)
                    <tr>
                        <td>{{ ucwords($index + 1) }}</td>
                        <td>{{ ucwords($diagnosis['diagnosis_name']) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>


        <h5>Medicines</h5>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Medicine</th>
                    <th>Description</th>
                    <th>Unit</th>
                    <th>Days</th>
                    <th>Qty</th>
                </tr>
            </thead>
            <tbody>
                @foreach($opdData['opdmedicine'] as $index => $medicine)
                    <tr>
                        <td>{{ ucwords($index + 1) }}</td>
                        <td>{{ ucwords($medicine['medicine_name']) }}</td>
                        <td>{{ ucwords($medicine['medicine_description']) }}</td>
                        <td>{{ ucwords($medicine['unit']) }}</td>
                        <td>{{ ucwords($medicine['days']) }}</td>
                        <td>{{ ucwords($medicine['qty']) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>


        @if(!empty($opdData['opdreport']))
            <h5>Reports</h5>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Report Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($opdData['opdreport'] as $index => $report)
                        <tr>
                            <td>{{ ucwords($index + 1) }}</td>
                            <td>{{ ucwords($report['report_name']) }}</td>
                            <td>{{ ucwords($report['report_description']) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        @if (!empty($opdData['opdmaster']['advise']))
            <h5>Advise</h5>
            {{ ucwords($opdData['opdmaster']['advise']) }}
        @endif
        <div class="footer-text" style="text-align: right;">
            <p><strong>Created By:</strong> Doctor</p>
        </div>
    </div>
@endsection