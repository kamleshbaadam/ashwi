@extends('backend.drpanel.layout.app')

@push('title')
<title>IPD Patient Details</title>
@endpush

@section('content')

            <div class="content-w">

                <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
                </div>

                <div class="content-w" style="margin-top: -50px;">
                    <div class="content-i">
                        <div class="content-box">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tab element-wrapper">
                                        <h6 class="element-header">IPD Patient Details</h6>

                                        <div class="form-buttons-w form-desc" style="display: flex;gap: 40px;">
                                            <a href="#" class="tablinks" onclick="openCity(event, 'London')">
                                                <h6>Overview</h6>
                                            </a>
                                            <a href="#" class="tablinks" onclick="openCity(event, 'Paris')">
                                                <h6>Diagnosis</h6>
                                            </a>
                                            <a href="#" class="tablinks" onclick="openCity(event, 'Tokyo')">
                                                <h6>Consultant Instruction</h6>
                                            </a>
                                            <a href="#" class="tablinks" onclick="openCity(event, 'india')">
                                                <h6>Operations</h6>
                                            </a>
                                            <a href="#" class="tablinks" onclick="openCity(event, '123')">
                                                <h6>Charges</h6>
                                            </a>
                                            <a href="#" class="tablinks" onclick="openCity(event, '456')">
                                                <h6>Prescriptions</h6>
                                            </a>
                                            <a href="#" class="tablinks" onclick="openCity(event, '789')">

                                                <h6>Timelines</h6>
                                            </a>
                                            <a href="#" class="tablinks" onclick="openCity(event, '912')">

                                                <h6>Payments</h6>
                                            </a>
                                            <a href="#" onclick="openCity(event, '100')">
                                                <h6>Nusing</h6>
                                            </a>

                                        </div>
                                        <div class="element-box tabcontent" id="London">

                                            <form>
                                                <h5 class="form-header">IPD Patient Details</h5>

                                                <div class="form-buttons-w form-desc"
                                                    style="display: flex;justify-content: space-between;">
                                                    <h5>11111</h5>
                                                    <h6>PAYMENT / BILLINGS</h6>

                                                </div>

                                                <div class="form-group row">

                                                    <div class="row col-sm-6">

                                                        <div class="col-sm-4">
                                                            <img src="{{ asset('backend/drpanel/img/avatar7.jpg') }}" alt="">
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <h6>Gender: <span style="font-size: small; color: gray;">
                                                                    Female</span>
                                                            </h6>
                                                            <h6>Email: <span style="font-size: small; color: gray;">
                                                                    sulapojim@mailinator.com</span></h6>

                                                            <h6>Phone : <span style="font-size: small; color: gray;">
                                                                    919988774455</span></h6>

                                                        </div>

                                                        <div class="col-sm-6">
                                                            <h6>Case Id: <span style="font-size: small; color: gray;">
                                                                    MOVDSPCJ</span>
                                                            </h6>
                                                            <h6>IPD No : <span style="font-size: small; color: gray;">
                                                                    OJ3JNZ55</span></h6>

                                                            <h6>Admission Date : <span
                                                                    style="font-size: small; color: gray;">
                                                                    21st Sep, 2023</span></h6>

                                                            <h6>Bed : <span style="font-size: small; color: gray;">
                                                                    bed 50</span></h6>

                                                        </div>

                                                        <div class="col-sm-12">
                                                            <h6>Symptoms : <span style="font-size: small; color: gray;">
                                                                    N/A
                                                                </span>
                                                            </h6>

                                                        </div>
                                                        <div class="col-sm-12">
                                                            <h6>CONSULTANT DOCTOR
                                                            </h6>
                                                            <h6><span style="font-size: small; color: gray;">
                                                                    No consultant doctor registered</span></h6>

                                                            <h6>TIMELINE : <span style="font-size: small; color: gray;">
                                                                    No TimeLine Found</span></h6>

                                                        </div>


                                                    </div>

                                                    <div class="row col-sm-6">

                                                        <div class="col-sm-12">

                                                            <div class="element-box-tp">
                                                                <div class="table-responsive">
                                                                    <h6>PRESCRIPTION</h6>
                                                                    <table class="table table-padded text-center">
                                                                        <thead>
                                                                            <tr style="background-color:darkgray;">
                                                                                <th>SR</th>
                                                                                <th>IPD NO </th>
                                                                                <th>CREATED ON</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="text-center">
                                                                                    1
                                                                                </td>
                                                                                <td>
                                                                                    <div class="user-with-avatar">
                                                                                        <span>123</span>
                                                                                    </div>
                                                                                </td>

                                                                                <td>
                                                                                    <div class="smaller lighter">
                                                                                        0987654321
                                                                                    </div>
                                                                                </td>

                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12">

                                                            <div class="element-box-tp">
                                                                <div class="table-responsive">
                                                                    <h6>CONSULTANT INSTRUCTION</h6>
                                                                    <table class="table table-padded text-center">
                                                                        <thead>
                                                                            <tr style="background-color:darkgray;">
                                                                                <th>SR</th>
                                                                                <th>DOCTOR </th>
                                                                                <th>APPLIED DATE</th>
                                                                                <th>INSTRUCTION DATE </th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="text-center">
                                                                                    1
                                                                                </td>
                                                                                <td>
                                                                                    <div class="user-with-avatar">
                                                                                        <span>kenneth christian</span>
                                                                                    </div>
                                                                                </td>

                                                                                <td>
                                                                                    <div class="smaller lighter">
                                                                                        23/2/2023
                                                                                    </div>
                                                                                </td>

                                                                                <td>
                                                                                    <div class="smaller lighter">
                                                                                        23/2/2023
                                                                                    </div>
                                                                                </td>

                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12">

                                                            <div class="element-box-tp">
                                                                <div class="table-responsive">
                                                                    <h6>CHARGES</h6>
                                                                    <table class="table table-padded text-center">
                                                                        <thead>
                                                                            <tr style="background-color:darkgray;">
                                                                                <th>SR</th>
                                                                                <th>DATE </th>
                                                                                <th>CHARGE TYPE</th>
                                                                                <th>CODE</th>
                                                                                <th>STANDARD CHARGE </th>
                                                                                <th>APPLIED CHARGE</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="text-center">
                                                                                    1
                                                                                </td>
                                                                                <td>
                                                                                    <div class="user-with-avatar">
                                                                                        <span>12/3/2023</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="user-with-avatar">
                                                                                        <span>type1</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="user-with-avatar">
                                                                                        <span>123</span>
                                                                                    </div>
                                                                                </td>

                                                                                <td>
                                                                                    <div class="user-with-avatar">
                                                                                        <span>CHARGE1</span>
                                                                                    </div>
                                                                                </td>

                                                                                <td>
                                                                                    <div class="smaller lighter">CHARGE2
                                                                                    </div>
                                                                                </td>

                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12">

                                                            <div class="element-box-tp">
                                                                <div class="table-responsive">
                                                                    <h6>PAYMENT</h6>
                                                                    <table class="table table-padded text-center">
                                                                        <thead>
                                                                            <tr style="background-color:darkgray;">
                                                                                <th>SR</th>
                                                                                <th>DATE </th>
                                                                                <th>AMOUNT</th>
                                                                                <th>PAYMENT MODE</th>
                                                                                <th>DOCUMENT</th>
                                                                                <th>NOTE</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="text-center">
                                                                                    1
                                                                                </td>
                                                                                <td>
                                                                                    <div class="user-with-avatar">
                                                                                        <span>12/3/2029</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="user-with-avatar">
                                                                                        <span>200</span>
                                                                                    </div>
                                                                                </td>

                                                                                <td>
                                                                                    <div class="smaller lighter">Case
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="smaller lighter">
                                                                                        document1
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="smaller lighter">-</div>
                                                                                </td>

                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12">

                                                            <div class="element-box-tp">
                                                                <div class="table-responsive">
                                                                    <h6>DIAGNOSIS</h6>
                                                                    <table class="table table-padded text-center">
                                                                        <thead>
                                                                            <tr style="background-color:darkgray;">
                                                                                <th>SR</th>
                                                                                <th>REPORT TYPE </th>
                                                                                <th>REPORT DATE</th>
                                                                                <th>DOCUMENT</th>
                                                                                <th>DESCRIPTION</th>


                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="text-center">
                                                                                    1
                                                                                </td>
                                                                                <td>
                                                                                    <div class="user-with-avatar">
                                                                                        <span>12/3/2029</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="user-with-avatar">
                                                                                        <span>20/12/2023</span>
                                                                                    </div>
                                                                                </td>

                                                                                <td>
                                                                                    <div class="smaller lighter">
                                                                                        document1
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="smaller lighter">
                                                                                        DESCRIPTION
                                                                                    </div>
                                                                                </td>

                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-sm-12">

                                                        <div class="element-box-tp">
                                                            <div class="table-responsive">
                                                                <h6>OPERATION</h6>
                                                                <table class="table table-padded text-center">
                                                                    <thead>
                                                                        <tr style="background-color:darkgray;">
                                                                            <th>SR</th>
                                                                            <th>REFERENCE ID</th>
                                                                            <th>OPERATION DATE</th>
                                                                            <th>OPERATION NAME</th>
                                                                            <th>OPERATION CATEGORY NAME</th>
                                                                            <th>TECHNICIAN</th>


                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-center">
                                                                                1
                                                                            </td>
                                                                            <td>
                                                                                <div class="user-with-avatar">
                                                                                    <span>12/3/2029</span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="user-with-avatar">
                                                                                    <span>20/12/2023</span>
                                                                                </div>
                                                                            </td>

                                                                            <td>
                                                                                <div class="smaller lighter">kenneth
                                                                                    christian</div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="smaller lighter">DESCRIPTION
                                                                                </div>
                                                                            </td>

                                                                            <td>
                                                                                <div class="smaller lighter">TECHNICIAN
                                                                                </div>
                                                                            </td>

                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-buttons-w"><button class="btn btn-primary"
                                                            type="submit">
                                                            Submit</button>
                                                    </div>
                                                </div>



                                                <div class="floated-colors-btn second-floated-btn">
                                                    <div class="os-toggler-w">
                                                        <div class="os-toggler-i">
                                                            <div class="os-toggler-pill"></div>
                                                        </div>
                                                    </div><span>Dark </span><span>Colors</span>
                                                </div>
                                                <div class="floated-customizer-btn ">
                                                    <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                                                    <span>Customizer</span>
                                                </div>
                                                <div class="floated-customizer-panel">
                                                    <div class="fcp-content">
                                                        <div class="close-customizer-btn"><i
                                                                class="os-icon os-icon-x"></i>
                                                        </div>
                                                        <div class="fcp-group">
                                                            <div class="fcp-group-header">Menu Settings</div>
                                                            <div class="fcp-group-contents">
                                                                <div class="fcp-field"><label for="">Menu
                                                                        Position</label><select
                                                                        class="menu-position-selector">
                                                                        <option value="left">Left</option>
                                                                        <option value="right">Right</option>
                                                                        <option value="top">Top</option>
                                                                    </select></div>
                                                                <div class="fcp-field"><label for="">Menu
                                                                        Style</label><select
                                                                        class="menu-layout-selector">
                                                                        <option value="compact">Compact</option>
                                                                        <option value="full">Full</option>
                                                                        <option value="mini">Mini</option>
                                                                    </select></div>
                                                                <div class="fcp-field with-image-selector-w"><label
                                                                        for="">With
                                                                        Image</label><select
                                                                        class="with-image-selector">
                                                                        <option value="yes">Yes</option>
                                                                        <option value="no">No</option>
                                                                    </select></div>
                                                                <div class="fcp-field"><label for="">Menu Color</label>
                                                                    <div class="fcp-colors menu-color-selector">
                                                                        <div
                                                                            class="color-selector menu-color-selector color-bright selected">
                                                                        </div>
                                                                        <div
                                                                            class="color-selector menu-color-selector color-dark">
                                                                        </div>
                                                                        <div
                                                                            class="color-selector menu-color-selector color-light">
                                                                        </div>
                                                                        <div
                                                                            class="color-selector menu-color-selector color-transparent">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fcp-group">
                                                            <div class="fcp-group-header">Sub Menu</div>
                                                            <div class="fcp-group-contents">
                                                                <div class="fcp-field"><label for="">Sub Menu
                                                                        Style</label><select
                                                                        class="sub-menu-style-selector">
                                                                        <option value="flyout">Flyout</option>
                                                                        <option value="inside">Inside/Click</option>
                                                                        <option value="over">Over</option>
                                                                    </select></div>
                                                                <div class="fcp-field"><label for="">Sub Menu
                                                                        Color</label>
                                                                    <div class="fcp-colors">
                                                                        <div
                                                                            class="color-selector sub-menu-color-selector color-bright selected">
                                                                        </div>
                                                                        <div
                                                                            class="color-selector sub-menu-color-selector color-dark">
                                                                        </div>
                                                                        <div
                                                                            class="color-selector sub-menu-color-selector color-light">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fcp-group">
                                                            <div class="fcp-group-header">Other Settings</div>
                                                            <div class="fcp-group-contents">
                                                                <div class="fcp-field"><label for="">Full
                                                                        Screen?</label><select
                                                                        class="full-screen-selector">
                                                                        <option value="yes">Yes</option>
                                                                        <option value="no">No</option>
                                                                    </select></div>
                                                                <div class="fcp-field"><label for="">Show Top
                                                                        Bar</label><select
                                                                        class="top-bar-visibility-selector">
                                                                        <option value="yes">Yes</option>
                                                                        <option value="no">No</option>
                                                                    </select></div>
                                                                <div class="fcp-field"><label for="">Above
                                                                        Menu?</label><select
                                                                        class="top-bar-above-menu-selector">
                                                                        <option value="yes">Yes</option>
                                                                        <option value="no">No</option>
                                                                    </select></div>
                                                                <div class="fcp-field"><label for="">Top Bar
                                                                        Color</label>
                                                                    <div class="fcp-colors">
                                                                        <div
                                                                            class="color-selector top-bar-color-selector color-bright selected">
                                                                        </div>
                                                                        <div
                                                                            class="color-selector top-bar-color-selector color-dark">
                                                                        </div>
                                                                        <div
                                                                            class="color-selector top-bar-color-selector color-light">
                                                                        </div>
                                                                        <div
                                                                            class="color-selector top-bar-color-selector color-transparent">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                        <div id="Paris" class="tabcontent element-box-tp">

                                            <div class="element-actions"><a class="btn btn-primary btn-primary"
                                                    href="/drpanel/add-diagnosis"><i
                                                        class="os-icon os-icon-ui-22"></i><span>Add
                                                        Diagnosis
                                                    </span></a></div>
                                            <div class="table-responsive">
                                                <table class="table table-padded text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>SR</th>
                                                            <th>REPORT TYPE </th>
                                                            <th>REPORT DATE</th>
                                                            <th>DOCUMENT</th>
                                                            <th>DESCRIPTION</th>
                                                            <th>ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">
                                                                1
                                                            </td>
                                                            <td>
                                                                <div class="user-with-avatar"><span>REPORT1</span>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="smaller lighter">20/2/2023</div>
                                                            </td>


                                                            <td>
                                                                <div class="smaller lighter">DOCUMENT1</div>
                                                            </td>

                                                            <td>
                                                                <div class="smaller lighter">DESCRIPTION</div>
                                                            </td>
                                                            <td class="row-actions"><a href="#"><i
                                                                        class="os-icon os-icon-grid-10"></i></a><a
                                                                    href="#"><i class="os-icon os-icon-ui-44"></i></a><a
                                                                    class="danger" href="#"><i
                                                                        class="os-icon os-icon-ui-15"></i></a></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div id="Tokyo" class="tabcontent element-box-tp">

                                            <div class="element-actions"><a class="btn btn-primary btn-primary"
                                                    href="/drpanel/add-consultant-instruction"><i
                                                        class="os-icon os-icon-ui-22"></i><span>Add Consultant
                                                        Instruction</span></a></div>
                                            <div class="table-responsive">
                                                <table class="table table-padded text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>SR</th>
                                                            <th>DOCTOR </th>
                                                            <th>APPLIED DATE</th>

                                                            <th>INSTRUCTION DATE </th>

                                                            <th>ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">
                                                                1
                                                            </td>
                                                            <td>
                                                                <div class="user-with-avatar"><span>kenneth
                                                                        christian</span>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="smaller lighter">20/2/2023</div>
                                                            </td>


                                                            <td>
                                                                <div class="smaller lighter">20/2/2023</div>
                                                            </td>
                                                            <td class="row-actions"><a href="#"><i
                                                                        class="os-icon os-icon-grid-10"></i></a><a
                                                                    href="#"><i class="os-icon os-icon-ui-44"></i></a><a
                                                                    class="danger" href="#"><i
                                                                        class="os-icon os-icon-ui-15"></i></a></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div id="india" class="tabcontent element-box-tp">

                                            <div class="element-actions"><a class="btn btn-primary btn-primary"
                                                    href="/add-operations"><i class="os-icon os-icon-ui-22">

                                                    </i><span>Add Operations</span></a></div>
                                            <div class="table-responsive">
                                                <table class="table table-padded text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>SR</th>
                                                            <th>REFERENCE ID </th>
                                                            <th>OPERATION DATE</th>
                                                            <th>OPERATION NAME </th>
                                                            <th>OPERATION CATEGORY NAME</th>
                                                            <th>OT TECHNICIAN</th>
                                                            <th>ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">
                                                                1
                                                            </td>
                                                            <td>
                                                                <div class="user-with-avatar"><span>kenneth
                                                                        christian</span>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="smaller lighter">20/2/2023</div>
                                                            </td>

                                                            <td>
                                                                <div class="smaller lighter">name</div>
                                                            </td>
                                                            <td>
                                                                <div class="smaller lighter">name1</div>
                                                            </td>

                                                            <td>
                                                                <div class="smaller lighter"> TECHNICIAN</div>
                                                            </td>
                                                            <td class="row-actions"><a href="#"><i
                                                                        class="os-icon os-icon-grid-10"></i></a><a
                                                                    href="#"><i class="os-icon os-icon-ui-44"></i></a><a
                                                                    class="danger" href="#"><i
                                                                        class="os-icon os-icon-ui-15"></i></a></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div id="123" class="tabcontent element-box-tp">

                                            <div class="element-actions"><a class="btn btn-primary btn-primary"
                                                    href="/add-charges"><i class="os-icon os-icon-ui-22">

                                                    </i><span>Add Charges</span></a></div>


                                            <div class="table-responsive">
                                                <table class="table table-padded text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>SR</th>
                                                            <th>DATE</th>
                                                            <th>CHARGE TYPE</th>
                                                            <th>CHARGE CATEGORY</th>
                                                            <th>CODE</th>
                                                            <th>STANDARD CHARGE</th>
                                                            <th>APPLIED CHARGE</th>
                                                            <th>ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">
                                                                1
                                                            </td>


                                                            <td>
                                                                <div class="smaller lighter">20/2/2023</div>
                                                            </td>
                                                            <td>
                                                                <div class="user-with-avatar"><span>kenneth
                                                                        christian</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="user-with-avatar"><span>kenneth
                                                                        christian</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="smaller lighter">name</div>
                                                            </td>
                                                            <td>
                                                                <div class="smaller lighter">name1</div>
                                                            </td>

                                                            <td>
                                                                <div class="smaller lighter"> TECHNICIAN</div>
                                                            </td>
                                                            <td class="row-actions"><a href="#"><i
                                                                        class="os-icon os-icon-grid-10"></i></a><a
                                                                    href="#"><i class="os-icon os-icon-ui-44"></i></a><a
                                                                    class="danger" href="#"><i
                                                                        class="os-icon os-icon-ui-15"></i></a></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div id="456" class="tabcontent element-box-tp">

                                            <div class="element-actions"><a class="btn btn-primary btn-primary"
                                                    href="/add-prescriptions"><i class="os-icon os-icon-ui-22">

                                                    </i><span>Add Prescriptions</span></a></div>
                                            <div class="table-responsive">
                                                <table class="table table-padded text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>SR</th>
                                                            <th>IPD NO</th>
                                                            <th>CREATED ON</th>

                                                            <th>ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">
                                                                1
                                                            </td>



                                                            <td>
                                                                <div class="smaller lighter">12345</div>
                                                            </td>

                                                            <td>
                                                                <div class="smaller lighter"> TECHNICIAN</div>
                                                            </td>
                                                            <td class="row-actions"><a href="#"><i
                                                                        class="os-icon os-icon-grid-10"></i></a><a
                                                                    href="#"><i class="os-icon os-icon-ui-44"></i></a><a
                                                                    class="danger" href="#"><i
                                                                        class="os-icon os-icon-ui-15"></i></a></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div id="789" class="tabcontent element-box-tp">

                                            <div class="element-actions"><a class="btn btn-primary btn-primary"
                                                    href="#"><i class="os-icon os-icon-ui-22">

                                                    </i><span>Add TimeLine</span></a></div>
                                            <div class="table-responsive">
                                                <table class="table table-padded text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>SR</th>
                                                            <th>Title</th>
                                                            <th>Date</th>
                                                            <th>Description</th>

                                                            <th>ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">
                                                                1
                                                            </td>



                                                            <td>
                                                                <div class="smaller lighter"> TECHNICIAN</div>
                                                            </td>

                                                            <td class="text-center">
                                                                1/1/2023
                                                            </td>


                                                            <td>
                                                                <div class="smaller lighter">Lorem ipsum dolor sit amet
                                                                    consectetur.
                                                                </div>
                                                            </td>
                                                            <td class="row-actions"><a href="#"><i
                                                                        class="os-icon os-icon-grid-10"></i></a><a
                                                                    href="#"><i class="os-icon os-icon-ui-44"></i></a><a
                                                                    class="danger" href="#"><i
                                                                        class="os-icon os-icon-ui-15"></i></a></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div id="912" class="tabcontent element-box-tp">

                                            <div class="element-actions"><a class="btn btn-primary btn-primary"
                                                    href="/drpanel/add-payments"><i class="os-icon os-icon-ui-22">

                                                    </i><span>Add Payment</span></a></div>
                                            <div class="table-responsive">
                                                <table class="table table-padded text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>SR</th>
                                                            <th>DATE</th>
                                                            <th>AMOUNT</th>
                                                            <th>PAYMENT MODE</th>
                                                            <th>DOCUMENT</th>
                                                            <th>NOTE</th>

                                                            <th>ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">
                                                                1
                                                            </td>




                                                            <td class="text-center">
                                                                1/1/2023
                                                            </td>

                                                            <td>
                                                                <div class="smaller lighter">20000</div>
                                                            </td>
                                                            <td class="text-center">
                                                                online
                                                            </td>

                                                            <td class="text-center">
                                                                document1
                                                            </td>

                                                            <td class="text-center">

                                                            </td>

                                                            <td class="row-actions"><a href="#"><i
                                                                        class="os-icon os-icon-grid-10"></i></a><a
                                                                    href="#"><i class="os-icon os-icon-ui-44"></i></a><a
                                                                    class="danger" href="#"><i
                                                                        class="os-icon os-icon-ui-15"></i></a></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div id="100" class="tabcontent element-box-tp">

                                            <!-- <div class="element-actions"><a class="btn btn-primary btn-primary"
                                                href="add_Payments.html"><i class="os-icon os-icon-ui-22">

                                                </i><span>Add Nursing</span></a></div> -->

                                            <div class="content-i">
                                                <div class="content-box">
                                                    <div class="element-wrapper">
                                                        <h6 class="element-header">Nursing RE-Assessment Form/TPR Vitals
                                                            Chart</h6>

                                                        <div class="element-box">
                                                            <div class="form-desc ">
                                                                <div class="row">
                                                                    <h6 class="col-sm-6">Name: kenneth </h6>
                                                                    <h6 class="col-sm-6 text-right">IPD No: 905</h6>
                                                                    <h6 class="col-sm-6">Age: 30 </h6>
                                                                    <h6 class="col-sm-6 text-right">Room No: General
                                                                    </h6>
                                                                    <h6 class="col-sm-6">Date: 13/12/2023</h6>
                                                                </div>

                                                            </div>
                                                            <table class="table table-striped table-bordered"
                                                                id="editableTable">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Time</th>
                                                                        <th>Temp</th>
                                                                        <th>Resp</th>
                                                                        <th>B.P</th>
                                                                        <th>SPO</th>
                                                                        <th>IV</th>
                                                                        <th>Oral</th>
                                                                        <th>rt</th>
                                                                        <th>total</th>
                                                                        <th>sign</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>8 Am</td>
                                                                        <td>3</td>
                                                                        <td>88</td>
                                                                        <td>116/68</td>
                                                                        <td>98</td>
                                                                        <td></td>
                                                                        <td>1</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>9 Am</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>1</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>10 Am</td>
                                                                        <td>97.6</td>
                                                                        <td>88</td>
                                                                        <td>16</td>
                                                                        <td>130/80</td>
                                                                        <td>
                                                                            <x /td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>11 Am</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>12 Am</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>

                                                                    </tr>


                                                                </tbody>
                                                            </table>

                                                        </div>
                                                        <div class="element-box">

                                                            <table class="table table-striped table-bordered"
                                                                id="editableTable">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Urine</th>
                                                                        <th>OutPut</th>
                                                                        <th>Aspiration</th>
                                                                        <th>Blood sugear</th>

                                                                    </tr>
                                                                    <tr>
                                                                        <th>time</th>
                                                                        <th></th>
                                                                        <th>Time</th>
                                                                        <th>time</th>


                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>



                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>



                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>



                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>



                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>



                                                                    </tr>

                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>






                                        <script>
                                            function openCity(evt, cityName) {
                                                var i, tabcontent, tablinks;
                                                tabcontent = document.getElementsByClassName("tabcontent");
                                                for (i = 0; i < tabcontent.length; i++) {
                                                    tabcontent[i].style.display = "none";
                                                }
                                                tablinks = document.getElementsByClassName("tablinks");
                                                for (i = 0; i < tablinks.length; i++) {
                                                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                                                }
                                                document.getElementById(cityName).style.display = "block";
                                                evt.currentTarget.className += " active";
                                            }
                                        </script>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="display-type"></div>
                    </div>
                </div>

                <div class="display-type"></div>
            </div>
  @endsection