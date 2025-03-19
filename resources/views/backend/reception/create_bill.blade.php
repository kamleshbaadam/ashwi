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

                            <div class="element-actions"><a class="btn btn-primary btn-primary"
                                    href="{{ url('reception/view_opd_appointment')}}"><i
                                        class="os-icon os-icon-ui-22"></i><span>Back</span></a>
                            </div>
                            @include('flash-message')
                            <h6 class="element-header">Add OutPatient Case Memo </h6>
                            <div class="element-box">
                                <form method="post" action="{{ url('reception/store_bill') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $billing->id ?? 0 }}">
                                    <input type="hidden" name="appointments_id" value="{{ $billing->appointments_id ?? 0 }}">
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
                                                    <input name="patient_name" class="form-control" placeholder="Patient Name" type="text" value="{{ $billing->patient->first_name ?? '' }} {{ $billing->patient->middle_name ?? '' }} {{ $billing->patient->last_name ?? '' }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group"><label for="">Patient Id</label>
                                                    <input class="form-control" placeholder="patient Id" type="text" name="patient_id" value="{{ $billing->patient->patient_id ?? '' }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group"><label for="">Patient Address</label>
                                                    <input class="form-control" placeholder="Patient Address" type="text" name="patient_address" value="{{ $billing->patient->address ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group"><label for="">Category</label>
                                                    <select class="form-control" name="category">
                                                        <option value="opd" {{ $billing->category == 'opd' ? 'selected' : '' }}>OPD</option>
                                                        <option value="ears" {{ $billing->category == 'ears' ? 'selected' : '' }}>Ears</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">

                                                <div class="form-group">
                                                    <label for="">Package</label>
                                                    <select class="form-control" name="package">
                                                        <option selected disabled>Select package</option>
                                                        <option value="opd" {{ $billing->package == 'opd' ? 'selected' : '' }}>OPD</option>
                                                        <option value="ears" {{ $billing->package == 'ears' ? 'selected' : '' }}>Ears</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">

                                                <div class="form-group">
                                                    <label for="">Account</label>
                                                    <select class="form-control" name="account">
                                                        <option selected disabled>Select Account</option>
                                                        <option value="opd" {{ $billing->account == 'opd' ? 'selected' : '' }}>OPD</option>
                                                        <option value="ears" {{ $billing->account == 'ears' ? 'selected' : '' }}>Ears</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group"><label for="">Case Memo Date</label>
                                                    <input class="form-control" placeholder="Ref No" type="date" name="case_memo_date" value="{{ $billing->case_memo_date ?? date('Y-m-d')}}">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group"><label for="">Balance</label>
                                                    <input class="form-control" placeholder="0.00" type="text" name="balance" value="{{ $billing->balance ?? 0 }}">
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-padded ">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th>Date</th>
                                                            <th>Services</th>
                                                            <th>description</th>
                                                            <th>Incentive</th>
                                                            <th>Qty</th>
                                                            <th>Rate</th>
                                                            <th>Discount</th>
                                                            <th>Total</th>
                                                            <th><button class="mr-2 mb-2 btn btn-primary"
                                                                    data-target="#onboardingSlideModal" data-toggle="modal"
                                                                    type="button">Add
                                                                    Services</button></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <input class="form-control" placeholder="" type="date" name="date" value="{{ $billing->date ?? date('Y-m-d')}}">
                                                            </td>
                                                            <td>
                                                                <select class="form-control" name="services">
                                                                    <option selected disabled>Select Service</option>
                                                                    <option value="regular" {{ $billing->services == 'regular' ? 'selected' : '' }}>Regular</option>
                                                                    <option value="followup" {{ $billing->services == 'followup' ? 'selected' : '' }} >Followup</option>
                                                                    <option value="80%" {{ $billing->services == '80%' ? 'selected' : '' }}>80%</option>
                                                                    <option value="foc" {{ $billing->services == 'foc' ? 'selected' : '' }}>FOC</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input class="form-control" placeholder="description" type="text" name="description">
                                                            </td>

                                                            <td style="width: 200px;">
                                                                <select class="form-control" name="incentive">
                                                                    <option>-Select-</option>
                                                                    <option value="no" {{ $billing->incentive == 'no' ? 'selected' : '' }}>No</option>
                                                                    <option value="yes" {{ $billing->incentive == 'yes' ? 'selected' : '' }}>Yes </option>
                                                                </select>
                                                            </td>
                                                            <td style="width: 100px;">
                                                                <input class="form-control" placeholder="1" type="text" name="qty">
                                                            </td>
                                                            <td style="width: 100px;">
                                                                <input class="form-control" placeholder="0" type="text" name="rate">
                                                            </td>
                                                            <td style="width: 100px;">
                                                                <input class="form-control" placeholder="0" type="text" name="discount">
                                                            </td>
                                                            <td style="width: 150px;">
                                                                <input class="form-control" placeholder="100" type="text" name="total">
                                                            </td>
                                                            <td class="row-actions">
                                                                <a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <hr>
                                            <div class="col-sm-2">
                                                <div class="form-group"><label for="">Mode Of Payment</label>
                                                    <select class="form-control" name="mode_of_payment">
                                                        <option value="cash" {{ $billing->mode_of_payment == 'cash' ? 'selected' : '' }}>cash</option>
                                                        <option value="google_pay" {{ $billing->mode_of_payment == 'google_pay' ? 'selected' : '' }}>Google Pay</option>
                                                        <option value="paytm" {{ $billing->mode_of_payment == 'paytm' ? 'selected' : '' }}>PayTM </option>
                                                        <option value="credit_card" {{ $billing->mode_of_payment == 'credit_card' ? 'selected' : '' }}>Credit card </option>
                                                        <option value="bank_transfer" {{ $billing->mode_of_payment == 'bank_transfer' ? 'selected' : '' }}>Bank transfer </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group"><label for="">Ref No</label>
                                                    <input class="form-control" placeholder="Ref No" type="text" name="ref_no" value="{{ $billing->ref_no ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group"><label for="">Overall Discount</label>
                                                    <select class="form-control" name="overall_discount">
                                                        <option value="no" {{ $billing->overall_discount == 'no' ? 'selected' : '' }}>No</option>
                                                        <option value="yes" {{ $billing->overall_discount == 'yes' ? 'selected' : '' }}>Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group"><label for="">Subtotal</label>
                                                    <input class="form-control" placeholder="Subtotal" type="text" name="subtotal" value="{{ $billing->subtotal ?? 0 }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" placeholder="description" type="text" name="description"> {{ $billing->description ?? '' }}</textarea>
                                            </div>
                                            <div class="form-buttons-w col-sm-12 text-right">
                                                <button class="btn btn-primary" type="submit"> Submit</button>
                                                <a class="btn btn-primary" href="{{ url('reception/preview_bill/'. $billing->id )}}"> Print</a>
                                                <a class="btn btn-primary" href="{{url('reception/view_opd_appointment')}}"
                                                    style="background-color: white; color: black;">
                                                    Discard</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div aria-hidden="true" class="onboarding-modal modal fade animated"
                                        id="onboardingSlideModal" role="dialog" tabindex="-1">
                                        <div class="modal-dialog modal-centered" role="document">
                                            <div class="modal-content text-center"><button aria-label="Close"
                                                    class="close" data-dismiss="modal" type="button"><span
                                                        class="os-icon os-icon-close"></span></button>
                                                <div class="onboarding-slider-w">
                                                    <div class="onboarding-slide">

                                                        <div class="onboarding-content with-gradient">
                                                            <h4 class="onboarding-title">Add Services
                                                            </h4>
                                                            <form>
                                                                <div class="row text-left">

                                                                    <div class="col-sm-12">
                                                                        <div class="form-group"><label
                                                                                for="">Group</label>
                                                                            <select class="form-control" name="group">
                                                                                <option>OPD</option>
                                                                                <option>IPD</option>
                                                                                <option>Other</option>
                                                                            </select></div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="">Services Name</label>
                                                                            <input class="form-control" name="services" placeholder="" value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="">Rate</label>
                                                                            <input class="form-control" name="rate" placeholder="" value="">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-12">
                                                                        <div class="form-group"><label
                                                                                for="">description</label>
                                                                            <textarea class="form-control" placeholder="description" name="description"></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-6 text-right">
                                                                        <div class="form-buttons-w"><button
                                                                                class="btn btn-primary" type="submit">
                                                                                Save</button>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-buttons-w"><button
                                                                                class="btn btn-primary" type="button"
                                                                                style="background-color: white;color: black;">
                                                                                cancel</button>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="display-type"></div>
            </div>
        </div>
    </div>
@endsection
