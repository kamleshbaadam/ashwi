@extends('backend.reception.layout.app')

@push('title')
    <title>Print Bill</title>
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
                            <div class="">
                                <form>
                                    <div class="invoice-box" id="invoice-box">
                                        <h6 class="element-header text-center">Aashwi E.N.T Hospital<br> 25 sumangalam Cooperative housing society,<br>
                                            opp drive in cinema gate, Bodakdev-380054
                                            <hr style="color: black;">
                                         
                                        </h6>
                                        <div class="row col-sm-12">

                                            <div class="col-sm-6">

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for=""> <b>Patient Name:</b> {{ $billing->patient->first_name ?? '' }} {{ $billing->patient->middle_name ?? '' }} {{ $billing->patient->last_name ?? '' }} </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for=""> <b>Patient Number:</b> {{ $billing->patient->phone_no ?? '' }}</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for=""><b>Department:</b> General Medicine</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for=""><b>Phone Number:</b> 971211111</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for=""><b>Mode oF payment:</b> {{$billing->mode_of_payment}}</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-6" style="padding-left: 170px;">
                                                <div class="col-sm-12">

                                                    <div class="form-group"><label for=""><b>Bill id:</b> {{$billing->billing_no}}</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for=""><b> Age / DOB:</b> 23</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for=""><b>Category</b>:{{$billing->category}}</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for=""><b>Patient Id:</b> {{ $billing->patient->patient_id ?? '' }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for=""><b>Bill Date:</b> {{$billing->created_at}}</label>
                                                    </div>
                                                </div>


                                            </div>




                                        </div>
                                        <table cellpadding="0" cellspacing="0">




                                            <tbody><tr class="heading">
                                                <td>
                                                    DIGNOSIS
                                                </td>
                                                <td style="padding-right: 50px;">
                                                    QTY
                                                </td>
                                                <td>RATE</td>
                                                <td>TOTAL</td>
                                            </tr>

                                            <tr class="item">
                                                <td>29/04/2024- First Confirmation
                                                </td>

                                                <td style="padding-right: 50px;">1

                                                </td>
                                                <td>0.00</td>
                                                <td>100</td>
                                            </tr>

                                            <tr class="item">
                                                <td>29/04/2024- First Confirmation
                                                </td>

                                                <td style="padding-right: 50px;">1

                                                </td>
                                                <td>0.00</td>
                                                <td>100</td>
                                            </tr>
                                            <tr class="item ">
                                                <td>29/04/2024- First Confirmation
                                                </td>

                                                <td style="padding-right: 50px;">1

                                                </td>
                                                <td>0.00</td>
                                                <td>100</td>
                                            </tr>
                                            <tr class="item ">
                                                <td></td>

                                                <td>

                                                </td>
                                                <td>
                                                    Subtotal : </td>
                                                <td>100</td>
                                            </tr>

                                            <tr class=" heading">
                                                <td>Eight Thousand Eight Hundred Only</td>

                                                <td>

                                                </td>
                                                <td>

                                                    Grand.Total : </td>
                                                <td>100</td>
                                            </tr>





                                        </tbody></table>

                                        <div class="col-lg-12 pt-4" style="display: flex;justify-content: end;">


                                            <b>Created By:</b> Reception
                                        </div>
                                    </div>

                                    <style>
                                        .invoice-box {
                                            max-width: 800px;
                                            margin: auto;
                                            padding: 30px;
                                            border: 1px solid #eee;
                                            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
                                            font-size: 16px;
                                            line-height: 24px;
                                            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                                            color: #555;
                                        }

                                        .invoice-box table {
                                            width: 100%;
                                            line-height: inherit;
                                            text-align: left;
                                        }

                                        .invoice-box table td {
                                            padding: 5px;
                                            vertical-align: top;
                                        }

                                        .invoice-box table tr td:nth-child(2) {
                                            text-align: right;
                                        }

                                        .invoice-box table tr.top table td {
                                            padding-bottom: 20px;
                                        }

                                        .invoice-box table tr.top table td.title {
                                            font-size: 45px;
                                            line-height: 45px;
                                            color: #333;
                                        }

                                        .invoice-box table tr.information table td {
                                            padding-bottom: 40px;
                                        }

                                        .invoice-box table tr.heading td {
                                            background: #eee;
                                            border-bottom: 1px solid #ddd;
                                            font-weight: bold;
                                        }

                                        .invoice-box table tr.details td {
                                            padding-bottom: 20px;
                                        }

                                        .invoice-box table tr.item td {
                                            border-bottom: 1px solid #eee;
                                        }

                                        .invoice-box table tr.item.last td {
                                            border-bottom: none;
                                        }

                                        .invoice-box table tr.total td:nth-child(2) {
                                            border-top: 2px solid #eee;
                                            font-weight: bold;
                                        }

                                        @media only screen and (max-width: 600px) {
                                            .invoice-box table tr.top table td {
                                                width: 100%;
                                                display: block;
                                                text-align: center;
                                            }

                                            .invoice-box table tr.information table td {
                                                width: 100%;
                                                display: block;
                                                text-align: center;
                                            }
                                        }
                                    </style>


                                    <div class="col-lg-9" style="display: flex;justify-content: end;margin-top: 20px;">
                                        <a class="btn btn-primary btn-w" href="#" onclick="printInvoice()"><span>Print</span></a>
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

    <script>
        function printInvoice() {
            var printContents = document.getElementById('invoice-box').innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
            window.location.reload();
        }
    </script>
@endsection