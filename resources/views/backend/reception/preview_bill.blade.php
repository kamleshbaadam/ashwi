@extends('backend.reception.layout.app')

@push('title')
    <title>Print Bill</title>
@endpush

@section('content')
    <style>
        /* Reset & base */
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

        /* Header */
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

        /* Patient and bill info */
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

        /* Table styling */
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

        td.qty,
        td.rate,
        td.total {
            text-align: right;
            font-variant-numeric: tabular-nums;
        }

        /* Summary box */
        .summary-box {
            max-width: 350px;
            margin-left: auto;
            padding: 20px 25px;
            border: 1px solid #d0dff7;
            border-radius: 6px;
            background: #f8fbff;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            font-weight: 600;
            border-bottom: 1px solid #dbe5f7;
            color: #333;
        }

        .summary-row:last-child {
            border-bottom: none;
            font-size: 20px;
            color: #1e88e5;
            font-weight: 700;
        }

        .amount-in-words {
            margin-top: 12px;
            font-style: italic;
            font-size: 14px;
            color: #555;
            text-align: center;
        }

        /* Footer */
        .footer-text {
            text-align: center;
            color: #666;
            font-size: 14px;
            margin-top: 40px;
        }

        /* Print button */
        .print-btn {
            background: #1e88e5;
            color: white;
            border: none;
            padding: 12px 28px;
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

        /* Responsive adjustments */
        @media (max-width: 600px) {
            .info-section {
                flex-direction: column;
            }

            .info-block {
                flex: 1 1 100%;
                text-align: center;
            }

            .info-block.text-right p {
                text-align: center;
            }

            .summary-box {
                max-width: 100%;
                margin-left: 0;
            }

            .print-btn {
                float: none;
                width: 100%;
            }
        }

        /* Print styles */
        @media print {
            body {
                background: white;
                color: #000;
            }

            .invoice-wrapper {
                box-shadow: none;
                border: none;
                max-width: 100%;
                margin: 0;
                padding: 0;
            }

            .print-btn {
                display: none;
            }

            table thead tr {
                background-color: #ddd !important;
                -webkit-print-color-adjust: exact;
            }

            table tbody tr:hover {
                background-color: transparent !important;
            }
        }
    </style>
    <div class="invoice-wrapper" id="invoice-box">
        <button class="print-btn" onclick="window.print()">Print Bill</button>
        <header class="invoice-header">
            <h1>Aashwi E.N.T Hospital</h1>
            <p>25 Sumangalam Cooperative Housing Society, Opp Drive In Cinema Gate, Bodakdev-380054</p>
        </header>
        <section class="info-section">
            <div class="info-block">
                <p><strong>Patient Name:</strong> {{ $billing->patient->first_name ?? '' }}
                    {{ $billing->patient->middle_name ?? '' }} {{ $billing->patient->last_name ?? '' }}
                </p>
                <p><strong>Patient Number:</strong> {{ $billing->patient->phone_no ?? '' }}</p>
                <p><strong>Department:</strong> {{ $billing->category ?? '' }}</p>
                <p><strong>Phone Number:</strong> {{ $billing->patient->phone_no ?? '' }}</p>
                <p><strong>Mode of Payment:</strong>
                    {{ ucfirst($billing->mode_of_payment) ?? ''}}</p>
            </div>
            <div class="info-block text-right">
                <p><strong>Bill ID:</strong> {{ $billing->billing_no }}</p>
                <p><strong>Age / DOB:</strong> {{ $billing->patient->age ?? '' }}</p>
                <p><strong>Category:</strong> {{ $billing->category }}</p>
                <p><strong>Patient ID:</strong> {{ $billing->patient->patient_id ?? '' }}</p>
                <p><strong>Bill Date:</strong> {{ $billing->created_at->format('d M, Y') }}</p>
            </div>
        </section>
        <table>
            <thead>
                <tr>
                    <th>Services</th>
                    <th>Qty</th>
                    <th>Rate</th>
                    <th>Discount</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @php
                        $checkupType = $billing->opdMaster->checkup_type ?? '';

                        $checkupLabels = [
                            'f-up' => 'Follow Up',
                            'regular' => 'Regular',
                            'foc' => 'FOC',
                            '80%' => '80%',
                        ];

                        $checkupAmounts = [
                            'f-up' => 1000,
                            'regular' => 2000,
                            'foc' => 0,
                            '80%' => 1600,
                        ];

                        $label = $checkupLabels[$checkupType] ?? $checkupType;
                        $amount = $checkupAmounts[$checkupType] ?? 0;
                    @endphp
                    <td>{{ $label }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ $amount }}</td>
                </tr>
                @php
                    $dates = json_decode($billing->date ?? '[]');
                    $services = json_decode($billing->services ?? '[]');
                    $qty = json_decode($billing->qty ?? '[]');
                    $rate = json_decode($billing->rate ?? '[]');
                    $discount = json_decode($billing->discount ?? '[]');
                    $total = json_decode($billing->total ?? '[]');
                @endphp

                @foreach($services as $index => $service)
                    <tr>
                        <td>{{ ((date('d-m-Y', strtotime($dates[$index]))) ?? '-') . ' - ' . $service }}</td>
                        <td>{{ $qty[$index] ?? '0' }}</td>
                        <td>{{ number_format($rate[$index] ?? 0, 2) }}</td>
                        <td>{{ number_format($discount[$index] ?? 0, 2) }}</td>
                        <td>{{ number_format($total[$index] ?? 0, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>

        <div class="summary-box">
            <div class="summary-row">
                <span>Sub Total:</span>
                <span>{{ number_format($billing->subtotal ?? 0, 2) }}</span>
            </div>
            <div class="summary-row">
                <strong>Grand Total:</strong>
                <strong>{{ number_format($billing->subtotal ?? 0, 2) }}</strong>
            </div>
            <div class="amount-in-words">Amount in words: Eight Thousand Eight Hundred Only</div>
        </div>

        <div class="footer-text" style="text-align: right;">
            <p><strong>Created By:</strong> Reception</p>
        </div>

    </div>
@endsection