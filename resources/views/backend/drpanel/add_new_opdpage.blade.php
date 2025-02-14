@extends('backend.drpanel.layout.app')

@push('title')
<title>Add New OPD Page</title>
@endpush

@section('content')


        <div class="">
            <div class="element-box" style="margin-top: -40px; background-color: white;">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="element-wrapper">
                            <div class="">
                                <form>
                                    <div class="row">


                                        <div class="col-sm-12" style="background-color: whitesmoke;">
                                            <div class="table-responsive">
                                                <table class="table table-padded">
                                                    <thead>
                                                        <tr>

                                                            <th>Case No.</th>
                                                            <th>Reference No.</th>
                                                            <th>Visit No.</th>
                                                            <th>Time</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">111</td>

                                                            <td>
                                                                <div class="">3518979844</div>
                                                            </td>
                                                            <td>
                                                                <div class="">3518979844</div>
                                                            </td>
                                                            <td>
                                                                <div>11:12 <small>pm</small> </div>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-sm-12"
                                            style="padding-left: 0 !important;padding-right: 0 !important;">
                                            <div><input class="form-control" type="" placeholder="Risk Factor">
                                            </div>
                                        </div>
                                        <div class="col-sm-3"
                                            style="padding-left: 0 !important;padding-right: 0 !important;">
                                            <div><input class="form-control" type="" placeholder="wT">
                                            </div>
                                        </div>

                                        <div class="col-sm-3"
                                            style="padding-left: 0 !important;padding-right: 0 !important;">
                                            <div><input class="form-control" type="" placeholder="HT">
                                            </div>
                                        </div>
                                        <div class="col-sm-3"
                                            style="padding-left: 0 !important;padding-right: 0 !important;">
                                            <div><input class="form-control" type="" placeholder="O2">
                                            </div>
                                        </div>
                                        <div class="col-sm-3"
                                            style="padding-left: 0 !important;padding-right: 0 !important;">
                                            <div><input class="form-control" type="" placeholder="TM">
                                            </div>
                                        </div>
                                        <div class="table-responsive col-sm-12"
                                            style="padding-left: 0 !important;padding-right: 0 !important;">
                                            <textarea name="" id="" cols="71" rows="3"
                                                placeholder="  >>complain:"></textarea>
                                        </div>

                                        <div class="table-responsive col-sm-12"
                                            style="padding-left: 0 !important;padding-right: 0 !important;">
                                            <textarea name="" id="" cols="71" rows="3"
                                                placeholder=" >>examinattion:"></textarea>
                                        </div>

                                        <div class="element-box-tp col-sm-12"
                                            style="padding-left: 0 !important;padding-right: 0 !important; background-color: whitesmoke;">
                                            <div class="table-responsive">
                                                <table class="table table-padded">
                                                    <thead>
                                                        <tr>

                                                            <th>HISTORY</th>

                                                            <th>DIAGNOSIS & TRANSPARENT</th>
                                                            <th>Visit_Date</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">111</td>

                                                            <td>
                                                                <div class="">Lorem ipsum dolor sit amet
                                                                    consectetur adipisicing elit.</div>
                                                            </td>
                                                            <td>
                                                                <div class="">14/12/2024</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">122</td>

                                                            <td>
                                                                <div class="">Lorem ipsum dolor sit amet
                                                                    consectetur adipisicing elit.</div>
                                                            </td>
                                                            <td>
                                                                <div class="">14/12/2024</div>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="element-wrapper">

                            <div class="row">
                                <div class="col-sm-12" style="background-color: whitesmoke;">
                                    <div class="table-responsive">
                                        <table class="table table-padded">
                                            <thead>
                                                <tr>

                                                    <th>Name</th>
                                                    <th>Age</th>
                                                    <th>City</th>
                                                    <th>Visit Date</th>
                                                    <th>mediclaim</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">Satani dhruvi</td>

                                                    <td>
                                                        <div class="">24</div>
                                                    </td>
                                                    <td>
                                                        <div class="">Ahemdabad</div>
                                                    </td>
                                                    <td>
                                                        <div>23/4/2022 </div>
                                                    </td>

                                                    <td>
                                                        <div>Yes </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="col-sm-8" style="padding-left: 0 !important;padding-right: 0 !important;">
                                    <div><input class="form-control" placeholder="DIAGNOSIS" type="">
                                    </div>
                                </div>

                                <div class="col-sm-2" style="padding-left: 0 !important;padding-right: 0 !important;">
                                    <div><input class="form-control" placeholder="RX" type="">
                                    </div>
                                </div>

                                <div class="table-responsive col-sm-2"
                                    style="padding-left: 0 !important;padding-right: 0 !important;">
                                    <textarea name="" id="" cols="23" rows="5" placeholder="ALERGY"></textarea>
                                </div>



                                <div class="element-box-tp col-sm-10">
                                    <div class="table-responsive text-center" style="margin-top: -80px;">
                                        <table id="example" class="table table-striped table-bordered" cellspacing="0">
                                            <thead style="text-align: start;">
                                                <tr>
                                                    <th class="name">Sr</th>
                                                    <th class="position">DIGNOSIS</th>
                                                    <th class="office">D.DATE
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="row1" style="text-align: start;">

                                                    <td style="width: 20px;"><input id="data5" value="1"><span
                                                            style="display:none"></span>
                                                    </td>
                                                    <td><input id="data5"
                                                            value="Lorem ipsum dolor sit amet consectetur adipisicing elit."><span
                                                            style="display:none"></span>
                                                    </td>
                                                    <td style="width: 100px;"> <input id="data4" value="1/12/12"><span
                                                            style="display:none">1/12/12</span></td>

                                                </tr>

                                                <tr id="row1" style="text-align: start;">

                                                    <td style="width: 20px;"><input id="data5" value="2"><span
                                                            style="display:none"></span>
                                                    </td>
                                                    <td><input id="data5"
                                                            value="Lorem ipsum dolor sit amet consectetur adipisicing elit."><span
                                                            style="display:none"></span>
                                                    </td>
                                                    <td style="width: 100px;"> <input id="data4" value="1/12/12"><span
                                                            style="display:none">1/12/12</span></td>

                                                </tr>

                                            </tbody>
                                        </table>
                                        <style>
                                            #example input,
                                            #example select {
                                                font-size: 14px;
                                                padding: 5px 5 5px 5px;
                                                display: block;
                                                width: 80%;
                                                border: none;
                                                background: transparent;

                                            }

                                            #example input:focus,
                                            #example select:focus {
                                                outline: none;
                                                border-bottom: 1px solid #757575;
                                            }
                                        </style>
                                    </div>
                                </div>




                                <div class="col-sm-8" style="padding-left: 0 !important;padding-right: 0 !important;">
                                    <div><input class="form-control" placeholder="Medicine " type="">
                                    </div>
                                </div>

                                <div class="col-sm-2" style="padding-left: 0 !important;padding-right: 0 !important;">
                                    <div><input class="form-control" placeholder="LAST RX  " type="">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <a>RX for
                                        <a> Days</a>
                                        <input type="number" style="width: 60px; height: 20px; ">
                                    </a>
                                </div>


                                <div class="element-box-tp col-sm-12"
                                    style="background-color: whitesmoke;margin-top: 5px;">
                                    <div class="table-responsive text-center">
                                        <table id="example" class="table table-striped table-bordered" cellspacing="0">
                                            <thead style="text-align: start;">
                                                <tr>
                                                    <th class="name">+</th>
                                                    <th class="position">U</th>
                                                    <th class="office">Medicine Name</th>
                                                    <th class="age">Advice</th>
                                                    <th class="start_date">UNit</th>
                                                    <th class="area">days</th>
                                                    <th class="area">Qty</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="row1">

                                                    <td><input id="data5" value="E"><span style="display:none"></span>
                                                    </td>
                                                    <td><input id="data5" value=""><span style="display:none"></span>
                                                    </td>
                                                    <td><input id="data4" value="loridine-D"><span
                                                            style="display:none">-Mornig</span></td>

                                                    <td><input id="data4" value="1-mornig 1-evening"><span
                                                            style="display:none">-Mornig</span></td>

                                                    <td><input id="data5" value=""><span style="display:none"></span>
                                                    </td>
                                                    <td><input id="data5" value=""><span style="display:none"></span>
                                                    </td>
                                                    <td><input id="data5" value=""><span style="display:none"></span>
                                                    </td>
                                                </tr>

                                                <tr id="row1">

                                                    <td style="width: 40px;"><input id="data5" value="E"><span
                                                            style="display:none"></span>
                                                    </td>
                                                    <td style="width: 40px;"><input id="data5" value=""><span
                                                            style="display:none"></span>
                                                    </td>
                                                    <td style="width: 200px;"><input id="data4" value="loridine-D"><span
                                                            style="display:none">-Mornig</span></td>

                                                    <td><input id="data4" value="1-mornig 1-evening"><span
                                                            style="display:none">-Mornig</span></td>

                                                    <td style="width: 40px;"><input id="data5" value=""><span
                                                            style="display:none"></span>
                                                    </td>
                                                    <td style="width: 40px;"><input id="data5" value=""><span
                                                            style="display:none"></span>
                                                    </td>
                                                    <td style="width: 40px;"><input id="data5" value=""><span
                                                            style="display:none"></span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <style>
                                            #example input,
                                            #example select {
                                                font-size: 14px;
                                                padding: 5px 5 5px 5px;
                                                display: block;
                                                width: 80%;
                                                border: none;
                                                background: transparent;

                                            }

                                            #example input:focus,
                                            #example select:focus {
                                                outline: none;
                                                border-bottom: 1px solid #757575;
                                            }
                                        </style>
                                    </div>
                                </div>


                                <div class="col-lg-10" style="padding-left: 0 !important;padding-right: 0 !important;">
                                    <select class="form-control">
                                        <OPtion>Report </OPtion>
                                        <option>Biopsy</option>
                                        <option>Audiogram</option>
                                        <option>Impendence</option>
                                        <option>Allergy Test</option>
                                    </select>
                                </div>
                                <div class="col-sm-2" style="padding-left: 0 !important;padding-right: 0 !important;">
                                    <div><input class="form-control" placeholder="Date  " type="date">
                                    </div>
                                </div>


                                <div class="element-box-tp col-sm-12"
                                    style="background-color: whitesmoke;margin-top: 5px;">
                                    <div class="table-responsive text-center">
                                        <table id="example" class="table table-striped table-bordered" cellspacing="0">
                                            <thead style="text-align: start;">
                                                <tr>
                                                    <th class="name" style="width: 20px;">Sr</th>
                                                    <th class="office">Report</th>
                                                    <th class="area">Report Date</th>
                                                    <th class="area">Report Description</th>
                                                    <th class="name" style="width: 100px;">View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="row1">

                                                    <td><input id="data5" value="1"><span style="display:none;"></span>
                                                    </td>
                                                    <td><input id="data5" value="Biopsy"><span
                                                            style="display:none"></span>
                                                    </td>
                                                    <td><input id="data5" value="29/4/2024"><span
                                                            style="display:none"></span>
                                                    </td>


                                                    <td><input id="data5" value=""><span style="display:none"></span>
                                                    </td>

                                                    <td><i class="os-icon os-icon-grid-10"></i>
                                                    </td>
                                                </tr>

                                                <tr id="row1">

                                                    <td><input id="data5" value="2"><span style="display:none;"></span>
                                                    </td>
                                                    <td><input id="data5" value="Audiogram"><span
                                                            style="display:none"></span>
                                                    </td>
                                                    <td><input id="data5" value="29/4/2024"><span
                                                            style="display:none"></span>
                                                    </td>

                                                    <td><input id="data5" value=""><span style="display:none"></span>
                                                    </td>

                                                    <td><i class="os-icon os-icon-grid-10"></i></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div>
                                        <div class="">
                                            <a href="#">Investigation</a><span> |</span></a>
                                            <a href="#">Advice</a><span> |</span></a>
                                            <a href="#"> Billing</a><span> |</span></a>
                                            <a href="#"> Surgery </a><span> |</span></a>
                                            <a href="#">Admit</a><span> |</span></a>
                                        </div>
                                        <textarea name="" id="" cols="100" rows="4"></textarea>
                                        <br>
                                        <button>Detail</button>
                                        <button>OT</button>
                                        <button>stock</button>
                                        <button>SMS</button>
                                        <a href=""><Input type="checkbox"> </Input>Print With RX </a>
                                        <a href=""><Input type="checkbox"> </Input>Next Visit </a>

                                        <!-- <button>Next Visit</button> -->
                                        <a><input type="date" class=""> </a>
                                    </div>

                                </div>
                                <div class="col-sm-2 ">
                                    <div class="table-responsive ">
                                        <table class="table table-bordered table-lg table-v2 table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Hindi</th>
                                                    <th>T</th>


                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>Gujarati</th>
                                                    <th>T</th>


                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>Marathi</th>
                                                    <th>T</th>


                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>English</th>
                                                    <th>T</th>


                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>Print Bill</th>
                                                    <th>T</th>


                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>View Bill</th>
                                                    <th></th>


                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>Save</th>
                                                    <th></th>


                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>Wait_0</th>
                                                    <th></th>


                                                </tr>
                                            </thead>


                                        </table>
                                    </div>
                                </div>



                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12" style="text-align: end;">
                        <a class="btn btn-primary btn-primary" href="OPD.html"><span>Submit
                            </span></a>
                    </div>
                    <div class="floated-chat-btn"><i class="os-icon os-icon-mail-07"></i><span>Demo Chat</span>
                    </div>
                    <div class="floated-chat-w">
                        <div class="floated-chat-i">
                            <div class="chat-close"><i class="os-icon os-icon-close"></i></div>
                            <div class="chat-head">
                                <div class="user-w with-status status-green">
                                    <div class="user-avatar-w">
                                        <div class="user-avatar"><img alt="" src="{{ asset('backend/drpanel/img/avatar1.png') }}"></div>
                                    </div>
                                    <div class="user-name">
                                        <h6 class="user-title">Dr.mihir M</h6>
                                        <div class="user-role">Dr.Penal</div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-messages">
                                <div class="message">
                                    <div class="message-content">Hi, how can I help you?</div>
                                </div>
                                <div class="date-break">Mon 10:20am</div>
                                <div class="message">
                                    <div class="message-content">Hi, my name is Mike, I will be happy to assist you
                                    </div>
                                </div>
                                <div class="message self">
                                    <div class="message-content">Hi, I tried ordering this product and it keeps
                                        showing me error code.</div>
                                </div>
                            </div>
                            <div class="chat-controls"><input class="message-input"
                                    placeholder="Type your message here...">
                                <div class="chat-extra"><a href="#"><span class="extra-tooltip">Attach
                                            Document</span><i class="os-icon os-icon-documents-07"></i></a><a
                                        href="#"><span class="extra-tooltip">Insert Photo</span><i
                                            class="os-icon os-icon-others-29"></i></a><a href="#"><span
                                            class="extra-tooltip">Upload Video</span><i
                                            class="os-icon os-icon-ui-51"></i></a></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
  @endsection