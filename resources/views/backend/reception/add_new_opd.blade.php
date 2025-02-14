@extends('backend.reception.layout.app')

@push('title')
<title>Add New Opd</title>
@endpush

@section('content')

    <div class="all-wrapper with-side-panel solid-bg-all">
        <div class="search-with-suggestions-w">
            <div class="search-with-suggestions-modal">
                <div class="element-search"><input class="search-suggest-input" placeholder="Start typing to search...">
                    <div class="close-search-suggestions"><i class="os-icon os-icon-x"></i></div>
                </div>
                <div class="search-suggestions-group">
                    <div class="ssg-header">
                        <div class="ssg-icon">
                            <div class="os-icon os-icon-box"></div>
                        </div>
                        <div class="ssg-name">Projects</div>
                        <div class="ssg-info">24 Total</div>
                    </div>
                    <div class="ssg-content">
                        <div class="ssg-items ssg-items-boxed"><a class="ssg-item" href="users_profile_big.html">
                                <div class="item-media" style="background-image: url(img/company6.png)"></div>
                                <div class="item-name">Integ<span>ration</span> with API</div>
                            </a><a class="ssg-item" href="users_profile_big.html">
                                <div class="item-media" style="background-image: url(img/company7.png)"></div>
                                <div class="item-name">Deve<span>lopm</span>ent Project</div>
                            </a></div>
                    </div>
                </div>
                <div class="search-suggestions-group">
                    <div class="ssg-header">
                        <div class="ssg-icon">
                            <div class="os-icon os-icon-users"></div>
                        </div>
                        <div class="ssg-name">Customers</div>
                        <div class="ssg-info">12 Total</div>
                    </div>
                    <div class="ssg-content">
                        <div class="ssg-items ssg-items-list"><a class="ssg-item" href="users_profile_big.html">
                                <div class="item-media" style="background-image: url(img/avatar1.jpg)"></div>
                                <div class="item-name">John Ma<span>yer</span>s</div>
                            </a><a class="ssg-item" href="users_profile_big.html">
                                <div class="item-media" style="background-image: url(img/avatar2.jpg)"></div>
                                <div class="item-name">Th<span>omas</span> Mullier</div>
                            </a><a class="ssg-item" href="users_profile_big.html">
                                <div class="item-media" style="background-image: url(img/avatar3.jpg)"></div>
                                <div class="item-name">Kim C<span>olli</span>ns</div>
                            </a></div>
                    </div>
                </div>
                <div class="search-suggestions-group">
                    <div class="ssg-header">
                        <div class="ssg-icon">
                            <div class="os-icon os-icon-folder"></div>
                        </div>
                        <div class="ssg-name">Files</div>
                        <div class="ssg-info">17 Total</div>
                    </div>
                    <div class="ssg-content">
                        <div class="ssg-items ssg-items-blocks"><a class="ssg-item" href="#">
                                <div class="item-icon"><i class="os-icon os-icon-file-text"></i></div>
                                <div class="item-name">Work<span>Not</span>e.txt</div>
                            </a><a class="ssg-item" href="#">
                                <div class="item-icon"><i class="os-icon os-icon-film"></i></div>
                                <div class="item-name">V<span>ideo</span>.avi</div>
                            </a><a class="ssg-item" href="#">
                                <div class="item-icon"><i class="os-icon os-icon-database"></i></div>
                                <div class="item-name">User<span>Tabl</span>e.sql</div>
                            </a><a class="ssg-item" href="#">
                                <div class="item-icon"><i class="os-icon os-icon-image"></i></div>
                                <div class="item-name">wed<span>din</span>g.jpg</div>
                            </a></div>
                        <div class="ssg-nothing-found">
                            <div class="icon-w"><i class="os-icon os-icon-eye-off"></i></div><span>No files were found.
                                Try changing your query...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        



        <div class="content-w" style="margin-top: -50px;">
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">



                                <div class="element-box">
                                    <form>


                                        <div class="element-wrapper compact pt-4">
                                            <div class="element-actions"> <a class="btn btn-primary" type="submit"
                                                    href="/add-new-opd">
                                                    New patient </a>
                                                <a class="btn btn-primary" type="submit" href="/old-patients">
                                                    Old patient </a>
                                                <a class="btn btn-primary" type="submit" href="/temporary-appointment
                                            ">
                                                    Temporary Appoinmentt </a>
                                                    
                                                <a class="btn btn-primary" type="submit" href="Add_services.html">
                                                    Add Services </a>
                                            </div>
                                            <h6 class="element-header">AddAppoinments</h6>
                                            <div class="form-group row">

                                                <div class="row col-sm-6">

                                                    <div class="col-sm-6">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Patient ID" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Reference Name" type="Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group"><select class="form-control">
                                                                <option>MR</option>
                                                                <option>MS</option>
                                                                <option>MRS</option>

                                                            </select></div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Middle Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Last name">
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-3">
                                                        <div class="form-group"><select class="form-control">
                                                                <option>Select Gender</option>
                                                                <option>Receptionist</option>
                                                                <option>Bed Manager</option>
                                                                <option>Laboratory</option>

                                                            </select></div>
                                                    </div>



                                                    <div class="col-sm-3">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Date of birth">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Age">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Blood Group">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Contact Number">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-9">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Email">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group"><label for="">Fist visit date</label>
                                                            <input class="form-control" type="date"
                                                                placeholder="content Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group"><label for="">Appointment Date</label>
                                                            <input class="form-control" type="date"
                                                                placeholder="Contoct Number">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group"><label for="">Appointment Time</label>
                                                            <input class="form-control" type="time"
                                                                placeholder="content Number">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="">Dr.Name</label><select class="form-control">
                                                                <option>Dr.Mihir mahta</option>
                                                                <option>Receptionist</option>
                                                                <option>Bed Manager</option>
                                                                <option>Laboratory</option>

                                                            </select>
                                                        </div>
                                                    </div>



                                                </div>

                                                <div class="row col-sm-6">

                                                    <div class="col-sm-12">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Address" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="pincode" type="Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Area">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="City">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="District" type="Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="state">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Country">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Other Address">
                                                        </div>
                                                    </div>




                                                    <div class="col-sm-4">
                                                        <div class="form-group"><input class="form-control" type="date"
                                                                placeholder="Last Visit">
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-4">
                                                        <div class="form-group"><select class="form-control">
                                                                <option>select case type</option>
                                                                <option>new</option>
                                                                <option>Follow-Up </option>
                                                                <option>urgent</option>

                                                            </select></div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group"><select class="form-control">
                                                                <option>Payment method</option>
                                                                <option>Offline payment</option>
                                                                <option>Credit cards</option>
                                                                <option>Digital wallets</option>

                                                                <option>Direct debit</option>

                                                            </select></div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group"><input class="form-control"
                                                                placeholder="Appointment Remark">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>




                                            <div class=" text-right"><button class="btn btn-primary" type="submit">
                                                    Submit</button>

                                            </div>

                                        </div>
                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="display-type"></div>
                </div>
            </div>

            <div class="display-type"></div>
        </div>
    </div>
@endsection