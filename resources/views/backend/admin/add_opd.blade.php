@extends('backend.admin.layout.app')

@push('title')
<title>Add OPD</title>
@endpush

@section('content')




        <div class="content-i">
            <div class="content-box">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="element-box col">
                            <div class="row">
                                <div class="element-box-content col-lg-6">

                                    <h5 class="form-header">Visit on 25/7/2023</h5>
                                    <div class="form-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Aliquid,
                                        dicta alias aperiam sit ipsam laborum? Repudiandae natus placeat error quidem,
                                        sunt
                                        autem commodi amet fuga expedita et suscipit. Quasi, odio.</div>
                                </div>

                                <div class="element-box-content col-lg-6">

                                    <h5 class="form-header">Visit on 20/6/2023</h5>
                                    <div class="form-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Aliquid,
                                        dicta alias aperiam sit ipsam laborum? Repudiandae natus placeat error quidem,
                                        sunt
                                        autem commodi amet fuga expedita et suscipit. Quasi, odio.</div>
                                </div>
                            </div>
                        </div>

                        <div class="element-box">

                            <form>
                                <h5 class="form-header">Start Dignos</h5>


                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="">Complaint</label><textarea
                                                class="form-control rounded-0" id="exampleFormControlTextarea2"
                                                rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="">Finding</label>
                                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2"
                                                rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for=""> Dignosis</label><textarea
                                                class="form-control rounded-0" id="exampleFormControlTextarea2"
                                                rows="3"></textarea></div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="">Advice</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <textarea class="form-control rounded-0"
                                                    id="exampleFormControlTextarea2" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                 <fieldset class="form-group">

                                    <div class="row">

                                        <div class="col-sm-6">

                                            <div class="form-group"><label for="">Medicine</label><select
                                                    class="form-control select2" multiple="true">
                                                    <option selected="true">Medicine 1</option>
                                                    <option selected="true">Medicine 2</option>
                                                    <option>Medicine 3</option>
                                                    <option>Medicine 4</option>
                                                    <option>Medicine 5</option>
                                                </select></div>

  
                                        </div>

                                        <div class="col-sm-6">

                                            <div class="form-group"><label for="">Report</label><select
                                                    class="form-control select2" multiple="true">
                                                    <option selected="true">XRY</option>
                                                    <option selected="true">Audio</option>
                                                    <option>LAB</option>
                                                    <option>CT SCAN</option>
                                                    <option>SLLEEP FOR</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-sm-0">
                                            <div class="form-group">
                                                <h6>sr</h6>
                                                <h6>1</h6>
                                                <h6>2</h6>

                                            </div>

                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <h6>Medicine</h6>
                                                <h6>Medicine1</h6>
                                                <h6>Medicine2</h6>


                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <h6>M N E</h6>

                                                <h6><input type="checkbox"> <input type="checkbox"> <input
                                                        type="checkbox"> </h6>
                                                <h6><input type="checkbox"> <input type="checkbox"> <input
                                                        type="checkbox"> </h6>


                                            </div>

                                        </div>

                                        <div class="col-sm-0">
                                            <div class="form-group">
                                                <h6></h6>
                                                <h6>1</h6>
                                                <h6>2</h6>

                                            </div>

                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <h6></h6>
                                                <h6>XRY</h6>
                                                <h6>Audio</h6>


                                            </div>

                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <h6></h6>

                                                <h6><input type="text"></h6>
                                                <h6><input type="text"></h6>



                                            </div>

                                        </div>


                                    </div>

                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="form-group"><label for="">Biling
                                                    amount</label><input class="form-control"
                                                    placeholder=" Biling amount"></div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Admint</label>
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <input type="radio"> Yes

                                                    </div>
                                                    <div class="col-lg-2">
                                                        <input type="radio"> NO

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Surgery </label>
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <input type="radio"> Yes

                                                    </div>
                                                    <div class="col-lg-2">
                                                        <input type="radio"> NO

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group"><label for="">Surgery Type </label><select
                                                    class="form-control">
                                                    <option>Surgery Type </option>
                                                    <option> A</option>
                                                    <option> B</option>
                                                    <option> C</option>

                                                </select></div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Surgery Date</label>
                                                <input class="form-control" type="date" placeholder=" Biling amount">
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Surgery Time</label>
                                                <input class="form-control" type="time" placeholder=" Biling amount">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group"><label for="">Description</label><textarea
                                                    class="form-control rounded-0" id="exampleFormControlTextarea2"
                                                    rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>





                                    <div class="form-buttons-w"><button class="btn btn-primary" type="submit">
                                            Submit</button></div>
                            </form>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ecommerce-customer-info">
                            <div class="ecommerce-customer-main-info">
                                <div class="ecc-avatar" style="background-image: url(img/avatar1.png)"></div>
                                <div class="ecc-name">Michael Collins</div>
                            </div>
                            <div class="ecommerce-customer-sub-info">
                                <div class="ecc-sub-info-row">
                                    <div class="sub-info-label">Email</div>
                                    <div class="sub-info-value"><a href="#">michael.collins@gmail.com</a></div>
                                </div>
                                <div class="ecc-sub-info-row">
                                    <div class="sub-info-label">Phone</div>
                                    <div class="sub-info-value">839.938.3944</div>
                                </div>
                            </div>
                            <div class="os-tabs-controls">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                            href="#tab_overview"> Billing</a></li>


                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="ecc-sub-info-row">
                                    <div class="sub-info-label">Address</div>
                                    <div class="sub-info-value">1726 Pasadena Drive, apt 726<br>Los Angeles, CA
                                        97263</div>
                                </div>
                                <div class="ecc-sub-info-row">
                                    <div class="sub-info-label">Payment Method</div>
                                    <div class="sub-info-value"><img alt="" src="img/mastercard.png"
                                            style="width: auto; height: 40px;"><span>ending 8374</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="display-type"></div>
    </div>
  @endsection