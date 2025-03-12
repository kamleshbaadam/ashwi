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
                <div class="element-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h6 class="element-header">CREATE BILL </h6>
                        </div>
                        <div class="col-lg-12">
                            @include('flash-message')
                            <form action="{{ url('reception/create-bill') }}" method="get">
                                <div class="element-box">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="form-group"><label for="">Taxation</label>
                                                    <select class="form-control">
                                                        <option>Non-Gst</option>
                                                        <option>Ears</option>
                                                        <option>Nose </option>
                                                        <option>Throat</option>
                                                        <option>Biopsy</option>
                                                        <option>Covid</option>


                                                    </select>
                                                </div>
                                            </div>



                                            <div class="col-sm-3">
                                                <div class="form-group"><label for="">Patient Name</label><input
                                                        class="form-control" placeholder="Patient Name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group"><label for="">Patient Id</label><input
                                                        class="form-control" placeholder="patient Id" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group"><label for="">Category</label>
                                                    <select class="form-control">
                                                        <option>OPD</option>
                                                        <option>Ears</option>
                                                        <option>Nose </option>
                                                        <option>Throat</option>
                                                        <option>Biopsy</option>
                                                        <option>Covid</option>


                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">

                                                <div class="form-group">
                                                    <label for="">Account</label>
                                                    <select class="form-control">
                                                        <option>Aashwi ENT Hospital</option>
                                                        <option>Ears</option>
                                                        <option>Nose </option>
                                                        <option>Throat</option>
                                                        <option>Biopsy</option>
                                                        <option>Covid</option>


                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-2">

                                                <div class="form-group"><label for="">Case Memo Date</label><input
                                                        class="form-control" placeholder="Ref No" type="date">
                                                </div>
                                            </div>

                                            <div class="col-sm-2">

                                                <div class="form-group"><label for="">Balance</label><input
                                                        class="form-control" placeholder="0.00" type="text">
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
                                                                    data-target="#onboardingSlideModal"
                                                                    data-toggle="modal" type="button">Add
                                                                    Services</button></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>

                                                            <td>

                                                                <input class="form-control" placeholder=""
                                                                    type="date">

                                                            </td>
                                                            <td>
                                                                <select class="form-control">
                                                                    <option>Select package</option>
                                                                    <option>Ears</option>
                                                                    <option>Nose </option>
                                                                    <option>Throat</option>
                                                                    <option>Biopsy</option>
                                                                    <option>Covid</option>


                                                                </select>

                                                            </td>
                                                            <td>

                                                                <input class="form-control"
                                                                    placeholder="description" type="text">
                                                            </td>

                                                            <td style="width: 200px;">

                                                                <select class="form-control">
                                                                    <option>-Select-</option>
                                                                    <option>Ears</option>
                                                                    <option>Nose </option>
                                                                    <option>Throat</option>
                                                                    <option>Biopsy</option>
                                                                    <option>Covid</option>


                                                                </select>
                                                            </td>

                                                            <td style="width: 100px;">

                                                                <input class="form-control" placeholder="1"
                                                                    type="text">
                                                            </td>


                                                            <td style="width: 100px;">

                                                                <input class="form-control" placeholder="0"
                                                                    type="text">
                                                            </td>

                                                            <td style="width: 100px;">

                                                                <input class="form-control" placeholder="0"
                                                                    type="text">
                                                            </td>



                                                            <td style="width: 150px;">

                                                                <input class="form-control" placeholder="100"
                                                                    type="text">
                                                            </td>
                                                            <td class="row-actions"><a
                                                                    class="mr-2 mb-2"
                                                                    data-target="#onboardingSlideModal"
                                                                    data-toggle="modal" ><i
                                                                        class="os-icon os-icon-grid-10"></i></a><a
                                                                    class="danger" href="#"><i
                                                                        class="os-icon os-icon-ui-15"></i></a></td>

                                                        </tr>
                                                        <tr>

                                                            <td>

                                                                <input class="form-control" placeholder=""
                                                                    type="date">

                                                            </td>
                                                            <td>
                                                                <select class="form-control">
                                                                    <option>Select package</option>
                                                                    <option>Ears</option>
                                                                    <option>Nose </option>
                                                                    <option>Throat</option>
                                                                    <option>Biopsy</option>
                                                                    <option>Covid</option>


                                                                </select>

                                                            </td>
                                                            <td>

                                                                <input class="form-control"
                                                                    placeholder="description" type="text">
                                                            </td>

                                                            <td>

                                                                <select class="form-control">
                                                                    <option>-Select-</option>
                                                                    <option>Ears</option>
                                                                    <option>Nose </option>
                                                                    <option>Throat</option>
                                                                    <option>Biopsy</option>
                                                                    <option>Covid</option>


                                                                </select>
                                                            </td>

                                                            <td>

                                                                <input class="form-control" placeholder="1"
                                                                    type="text">
                                                            </td>


                                                            <td>

                                                                <input class="form-control" placeholder="0"
                                                                    type="text">
                                                            </td>

                                                            <td>

                                                                <input class="form-control" placeholder="0"
                                                                    type="text">
                                                            </td>



                                                            <td>

                                                                <input class="form-control" placeholder="100"
                                                                    type="text">
                                                            </td>

                                                            <td class="row-actions"><a 
                                                                class="mr-2 mb-2"
                                                                data-target="#onboardingSlideModal"
                                                                data-toggle="modal"><i
                                                                        class="os-icon os-icon-grid-10"></i></a><a
                                                                    class="danger" href="#"><i
                                                                        class="os-icon os-icon-ui-15"></i></a></td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <hr>
                                            <div class="col-sm-2">
                                                <div class="form-group"><label for="">Mode Of Payment</label>
                                                    <select class="form-control">
                                                        <option>Case</option>
                                                        <option>Ears</option>
                                                        <option>Nose </option>
                                                        <option>Throat</option>
                                                        <option>Biopsy</option>
                                                        <option>Covid</option>


                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group"><label for="">Ref No</label><input
                                                        class="form-control" placeholder="Ref No" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group"><label for="">Overall Discount</label>
                                                    <select class="form-control">
                                                        <option>AMT</option>
                                                        <option>Ears</option>
                                                        <option>Nose </option>
                                                        <option>Throat</option>
                                                        <option>Biopsy</option>
                                                        <option>Covid</option>


                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group"><label for="">Overall Discount</label><input
                                                        class="form-control" placeholder="overall" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group"><label for="">Subtotal</label><input
                                                        class="form-control" placeholder="Subtotal" type="text">
                                                </div>
                                            </div>


                                            <div class="col-sm-6">

                                                <textarea class="form-control" placeholder="description"
                                                    type="text"></textarea>
                                            </div>


                                            <div class="col-sm-3">

                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group"><label for="">Total</label><input
                                                        class="form-control" placeholder="Total" type="text">
                                                </div>
                                            </div>


                                            <div class="form-buttons-w col-sm-12 text-right ">
                                                <button class="btn btn-primary" type="submit">
                                                    Submit</button>
                                                <button class="btn btn-primary" type="submit">
                                                    Save & Print</button>
                                                <button class="btn btn-primary" type="submit"
                                                    style="background-color: white; color: black;">
                                                    Discard</button>
                                            </div>
                                            <!-- 
                                            <div class="form-buttons-w col-sm-6 text-right">

                                                <button class="btn btn-primary" type="submit"
                                                    style="background-color: white; color: black;">
                                                    Add new Services</button>

                                                <button class="btn btn-primary" type="submit">
                                                    Add Services</button>
                                            </div> -->



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
                                                                                for="">Group</label><select
                                                                                class="form-control">
                                                                                <option>OPD</option>
                                                                                <option>IPD</option>
                                                                                <option>Other</option>
                                                                            </select></div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group"><label
                                                                                for="">Services Name</label><input
                                                                                class="form-control" placeholder=""
                                                                                value=""></div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group"><label
                                                                                for="">Rate</label><input
                                                                                class="form-control" placeholder=""
                                                                                value=""></div>
                                                                    </div>

                                                                    <div class="col-sm-12">
                                                                        <div class="form-group"><label
                                                                                for="">description</label>
                                                                            <textarea class="form-control"
                                                                                placeholder="description"
                                                                                type="text"></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-6 text-right">
                                                                        <div class="form-buttons-w"><button
                                                                                class="btn btn-primary"
                                                                                type="submit">
                                                                                Save</button>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-buttons-w"><button
                                                                                class="btn btn-primary"
                                                                                type="submit"
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
