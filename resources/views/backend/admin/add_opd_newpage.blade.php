@extends('backend.admin.layout.app')

@push('title')
<title>Add OPD New Page</title>
@endpush

@section('content')


            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">


                            <div class="element-box ">
                                <div class="row">
                                    <div class=" col-lg-6">
                                        <div class=" text-center">
                                            <h4>Satani Dhruv</h4        >

                                        </div>
                                    </div>

                                    <div class="ecommerce-customer-sub-info col-lg-2">

                                        <div class="ecc-sub-info-row row">
                                            <div class="sub-info-label">
                                                <h6>OPD ID:</h6>
                                            </div>
                                            <div class="sub-info-value"> 839</div>
                                        </div>
                                    </div>

                                    <div class="ecommerce-customer-sub-info  col-lg-2">

                                        <div class="ecc-sub-info-row row">
                                            <div class="sub-info-label">
                                                <h6>Patient ID :</h6>
                                            </div>
                                            <div class="sub-info-value">111</div>
                                        </div>
                                    </div>

                                    <div class="ecommerce-customer-sub-info  col-lg-2">

                                        <div class="ecc-sub-info-row row">
                                            <div class="sub-info-label">
                                                <h6>Patient Age:</h6>
                                            </div>
                                            <div class="sub-info-value">23</div>
                                        </div>
                                    </div>


                                </div>

                                <form>



                                    <div class="element-wrapper compact pt-4" style="margin-top: -30px;">
                                        <div class=" row">

                                            <div class="col-lg-6">
                                                <div class="row" >
                                                    <div class="col-lg-12 form-buttons-w">
                                                        <h6 class="element-header">Start Dignos</h6>

                                                    </div>


                                                    <div class="col-sm-3">

                                                        <div class="form-group"><label for="">Complaint</label><select
                                                                class="form-control select2" multiple="true">
                                                                <option selected="true"> Complaint</option>
                                                                <option selected="true">Complaint</option>
                                                                <option>Complaint</option>
                                                                <option>Complaint</option>
                                                                <option>Complaint</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-3">

                                                        <div class="form-group"><label for="">Finding</label><select
                                                                class="form-control select2" multiple="true">
                                                                <option selected="true">Finding</option>
                                                                <option selected="true">Finding</option>
                                                                <option>Finding</option>
                                                                <option>Finding</option>
                                                                <option>Finding</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">

                                                        <div class="form-group"><label for="">Dignosis</label><select
                                                                class="form-control select2" multiple="true">
                                                                <option selected="true">Dignosis</option>
                                                                <option selected="true">Dignosis</option>
                                                                <option>Dignosis</option>
                                                                <option>Dignosis</option>
                                                                <option>Finding</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">

                                                        <div class="form-group"><label for="">Advice</label><select
                                                                class="form-control select2" multiple="true">
                                                                <option selected="true">Advice</option>
                                                                <option selected="true">Advice</option>
                                                                <option>Advice</option>
                                                                <option>Advice</option>
                                                                <option>Advice</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="table-responsive col-lg-6">

                                                <table class="table table-padded text-center">
                                                    <div class="col-lg-12 form-buttons-w">
                                                        <h5 class=""></h5>
                                                    </div>
                                                    <h6 class="element-header">Prescription</h6>

                                                    <thead>
                                                        <tr>
                                                            <th>SR</th>
                                                            <th style="width: 200px;">MEDICINE</th>
                                                            <th style="width: 20px;">DOSAGE</th>
                                                            <th style="width: 250px;">Quantity</th>
                                                            <th style="width: 350px;">INTERVAL</th>
                                                            <th style="width: 250px;">INSTRUCTION</th>

                                                            <th>ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">
                                                                1
                                                            </td>

                                                            <td>
                                                                <div class="smaller lighter">

                                                                    <div class="form-group"><select
                                                                            class="form-control">
                                                                            <option> text</option>
                                                                            <option> A</option>
                                                                            <option> B</option>
                                                                            <option> C</option>

                                                                        </select></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="smaller lighter">
                                                                    <div class="form-group"><input class="form-control"
                                                                            placeholder="" type="text">
                                                                    </div>
                                                            </td>

                                                            <td>

                                                                <div class="smaller lighter">
                                                                    <div class="form-group"><input class="form-control"
                                                                            placeholder="" type="text">
                                                                    </div>
                                                            </td>
                                                            <td>
                                                                <div class="smaller lighter">

                                                                    <div class="form-group"><select
                                                                            class="form-control">
                                                                            <option>Daily Mornig</option>
                                                                            <option>Daily Mornig and evenig</option>
                                                                            <option>Daily Mornig,noon,and evenig
                                                                            </option>
                                                                            <option>4 times in a day</option>
                                                                            <option>Daily Mornig and evenig</option>


                                                                        </select></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control rounded-0"
                                                                    id="exampleFormControlTextarea2"
                                                                    rows="1"></textarea>
                                                            </td>
                                                            <td class="row-actions"><a class="danger" href="#"><i
                                                                        class="os-icon os-icon-ui-15"></i></a></td>
                                                        </tr>


                                                    </tbody>

                                                </table>
                                                <div class="col-12 text-right">
                                                    <a class="btn btn-primary btn-primary"
                                                        href="/admin/add-prescreption"><i
                                                            class="os-icon os-icon-ui-22"></i><span>Add
                                                            Prescription</span></a>
                                                </div>
                                                <!-- <div>
                                    <h6>Note</h6>
                                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2"
                                        rows="6" cols="2"></textarea>
                                </div> -->
                                            </div>
                                            <div class="table-responsive col-lg-6 ">

                                                <table class="table table-padded text-center ">
                                                    <div class="col-lg-12 form-buttons-w">
                                                        <h5 class=""></h5>
                                                    </div>
                                                    <h6 class="element-header">Report</h6>

                                                    <thead>
                                                        <tr>
                                                            <th>SR</th>
                                                            <th style="width: 200px;">Report</th>
                                                            <th style="width: 650px;">Description Report</th>
                                                            <th>ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">
                                                                1
                                                            </td>

                                                            <td>
                                                                <div class="smaller lighter">

                                                                    <div class="form-group"><select
                                                                            class="form-control">
                                                                            <option> Report</option>
                                                                            <option> A</option>
                                                                            <option> B</option>
                                                                            <option> C</option>

                                                                        </select></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control rounded-0"
                                                                    id="exampleFormControlTextarea2"
                                                                    rows="1"></textarea>
                                                            </td>
                                                            <td class="row-actions"><a class="danger" href="#"><i
                                                                        class="os-icon os-icon-ui-15"></i></a>
                                                            </td>
                                                        </tr>



                                                    </tbody>

                                                </table>

                                                <div class="col-12 text-right">
                                                    <a class="btn btn-primary btn-primary" href="/admin/ipd-report"><i
                                                            class="os-icon os-icon-ui-22"></i><span>add
                                                            Report</span></a>
                                                </div>


                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="col-lg-12 form-buttons-w">
                                                            <h5 class=""></h5>
                                                        </div>
                                                        <h6 class="element-header">Past History</h6>
                                                    </div>

                                                    <div class=" col-lg-4 " style="display: flex;">
                                                        <div class="">
                                                            <h6>Date :</h6>
                                                        </div>
                                                        <div class="">24th Oct, 2023</div>
                                                    </div>


                                                    <div class="ecommerce-customer-sub-info col-4">

                                                        <div class="ecc-sub-info-row" style="display: flex;">
                                                            <div class="sub-info-value">
                                                                <h6>OPT ID :</h6>
                                                            </div>
                                                            <div class="sub-info-label"> 839</div>
                                                        </div>
                                                    </div>

                                                    <div class="ecommerce-customer-sub-info col-4">

                                                        <div class="ecc-sub-info-row" style="display: flex;">
                                                            <div class="sub-info-value">
                                                                <h6> Name :</h6>
                                                            </div>
                                                            <div class="sub-info-label">Satani Dhruvi</div>
                                                        </div>
                                                    </div>
                                                    <div class="ecommerce-customer-sub-info col-4">

                                                        <div class="ecc-sub-info-row" style="display: flex;">
                                                            <div class="sub-info-value">
                                                                <h6>Gender :</h6>
                                                            </div>
                                                            <div class="sub-info-label">Female</div>
                                                        </div>
                                                    </div>



                                                    <div class="ecommerce-customer-sub-info col-4 ">

                                                        <div class="ecc-sub-info-row" style="display: flex;">
                                                            <div class="sub-info-value">
                                                                <h6>Age:</h6>
                                                            </div>
                                                            <div class="sub-info-label">23</div>
                                                        </div>
                                                    </div>

                                                    <div class="ecommerce-customer-sub-info col-4 ">

                                                        <div class="ecc-sub-info-row" style="display: flex;">
                                                            <div class="sub-info-value">
                                                                <h6>Complaint :</h6>
                                                            </div>
                                                            <div class="sub-info-label">Complaint1111</div>
                                                        </div>
                                                    </div>

                                                    <div class="ecommerce-customer-sub-info col-4 ">

                                                        <div class="ecc-sub-info-row" style="display: flex;">
                                                            <div class="sub-info-value">
                                                                <h6>Finding :</h6>
                                                            </div>
                                                            <div class="sub-info-label">Finding111</div>
                                                        </div>
                                                    </div>
                                                    <div class="ecommerce-customer-sub-info col-4 ">

                                                        <div class="ecc-sub-info-row" style="display: flex;">
                                                            <div class="sub-info-value">
                                                                <h6>Dignosis :</h6>
                                                            </div>
                                                            <div class="sub-info-label">Dignosis111</div>
                                                        </div>
                                                    </div>
                                                    <div class="ecommerce-customer-sub-info col-4 ">

                                                        <div class="ecc-sub-info-row" style="display: flex;">
                                                            <div class="sub-info-value">
                                                                <h6>Advice :</h6>
                                                            </div>
                                                            <div class="sub-info-label">Advice1111</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 ">
                                                <div class="row">
                                                    <div class="col-lg-12 form-buttons-w">
                                                        <h5 class=""></h5>
                                                    </div>
                                                    <div class="col-lg-12 ">
                                                        <h5 class="element-header">Prescription</h5>
                                                    </div>

                                                    <div class="ecommerce-customer-sub-info col-4">

                                                        <div class="ecc-sub-info-row" style="display: flex;">
                                                            <div class="sub-info-value">
                                                                <h6>MEDICINE :</h6>
                                                            </div>
                                                            <div class="sub-info-label"> 839</div>
                                                        </div>
                                                    </div>

                                                    <div class="ecommerce-customer-sub-info col-4">

                                                        <div class="ecc-sub-info-row" style="display: flex;">
                                                            <div class="sub-info-value">
                                                                <h6>DOSAGE :</h6>
                                                            </div>
                                                            <div class="sub-info-label">DOSAGE</div>
                                                        </div>
                                                    </div>
                                                    <div class="ecommerce-customer-sub-info col-4">

                                                        <div class="ecc-sub-info-row" style="display: flex;">
                                                            <div class="sub-info-value">
                                                                <h6>QUANTITY :</h6>
                                                            </div>
                                                            <div class="sub-info-label">QUANTITY12</div>
                                                        </div>
                                                    </div>
                                                    <div class="ecommerce-customer-sub-info col-4 ">

                                                        <div class="ecc-sub-info-row" style="display: flex;">
                                                            <div class="sub-info-value">
                                                                <h6>INTERVAL:</h6>
                                                            </div>
                                                            <div class="sub-info-label">Daily Mornig</div>
                                                        </div>
                                                    </div>

                                                    <div class="ecommerce-customer-sub-info col-8 ">

                                                        <div class="ecc-sub-info-row" style="display: flex;">
                                                            <div class="sub-info-value">
                                                                <h6>INSTRUCTION:</h6>
                                                            </div>
                                                            <div class="sub-info-label">Lorem ipsum, dolor sit amet
                                                                consectetur
                                                                adipisicing

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row ">
                                                    <div class="col-lg-12 form-buttons-w">
                                                        <h5 class=""></h5>
                                                    </div>
                                                    <div class="col-lg-12 ">
                                                        <h5 class="element-header">Report</h5>
                                                    </div>

                                                    <div class="ecommerce-customer-sub-info col-12">

                                                        <div class="ecc-sub-info-row" style="display: flex;">
                                                            <div class="sub-info-value">
                                                                <h6>REPORT :</h6>
                                                            </div>
                                                            <div class="sub-info-label"> 839</div>
                                                        </div>
                                                    </div>


                                                    <div class="ecommerce-customer-sub-info col-12 ">

                                                        <div class="ecc-sub-info-row" style="display: flex;">
                                                            <div class="sub-info-value">
                                                                <h6>DESCRIPTION REPORT :</h6>
                                                            </div>
                                                            <div class="sub-info-label">Lorem ipsum, dolor sit amet
                                                                consectetur
                                                                adipisicing
                                                                elit. Dolor alias, dolore incidunt at sed quia quis
                                                                omnis fuga
                                                                excepturi
                                                                eveniet totam dolores quisquam libero aut et,
                                                                eligendi illo natus
                                                                quam.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                    </div>



                            </div>
                            </form>
                        </div>

                        <div class="display-type"></div>
                    </div>
     @endsection