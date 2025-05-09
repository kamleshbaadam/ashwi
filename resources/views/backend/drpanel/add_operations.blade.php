@extends('backend.drpanel.layout.app')

@push('title')
<title>Add Operations</title>
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
                                <div class="element-wrapper">



                                    <h6 class="element-header">Add New Operation</h6>
                                    <div class="element-box">
                                        <form>
                                            <h5 class="form-header">Add New Operation</h5>
                                            <div class="form-desc">Discharge best employed your phase each the of shine.
                                                Be met even reason consider logbook redesigns. Never a turned interfaces
                                                among asking</div>




                                            <div class="form-group">
                                                <div class="row">

                                                    <div class="col-sm-6">
                                                        <label for="">Operation Date </label>

                                                        <input type="text" class="form-control"
                                                            placeholder="Bed Capacity">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group"><label for=""> Operation
                                                                Category</label><select class="form-control">
                                                                <option>Operation Category </option>
                                                                <option> A</option>
                                                                <option> B</option>
                                                                <option> C</option>

                                                            </select></div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group"><label for=""> Operation
                                                                Name</label><select class="form-control">
                                                                <option>Operation Category </option>
                                                                <option> A</option>
                                                                <option> B</option>
                                                                <option> C</option>

                                                            </select></div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group"><label for=""> Consultant Doctor
                                                            </label><select class="form-control">
                                                                <option>Consultant Doctor </option>
                                                                <option> A</option>
                                                                <option> B</option>
                                                                <option> C</option>

                                                            </select></div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group"><label for="">Assistant Consultant
                                                                1</label><input class="form-control"
                                                                placeholder="Charges" type="number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 ">
                                                        <label for="">Assistant Consultant 2 </label>

                                                        <input type="text" class="form-control"
                                                            placeholder="Description">
                                                    </div>

                                                    <div class="col-lg-6 ">
                                                        <label for="">Anesthetist </label>

                                                        <input type="text" class="form-control"
                                                            placeholder="Description">
                                                    </div>
                                                    <div class="col-lg-6 ">
                                                        <label for="">
                                                            Anesthesia Type </label>

                                                        <input type="text" class="form-control"
                                                            placeholder="Description">
                                                    </div>

                                                    <div class="col-lg-6 ">
                                                        <label for="">
                                                            OT Technician </label>

                                                        <input type="text" class="form-control"
                                                            placeholder="Description">
                                                    </div>

                                                    <div class="col-lg-6 ">
                                                        <label for="">
                                                            OT Assistant : </label>

                                                        <input type="text" class="form-control"
                                                            placeholder="Description">
                                                    </div>

                                                    <div class="col-lg-6 ">
                                                        <label for="">
                                                            Remark </label>

                                                        <input type="text" class="form-control"
                                                            placeholder="Description">
                                                    </div>

                                                    <div class="col-lg-6 ">
                                                        <label for="">
                                                            Result : </label>

                                                        <input type="text" class="form-control"
                                                            placeholder="Description">
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
                                                <!-- 
                                        <div class="floated-customizer-panel">
                                            <div class="fcp-content">
                                                <div class="close-customizer-btn">
                                                    <i class="os-icon os-icon-x"></i>
                                                </div>
                                                <div class="fcp-group">
                                                    <div class="fcp-group-header">Menu Settings</div>
                                                    <div class="fcp-group-contents">
                                                        <div class="fcp-field"><label for="">Menu
                                                                Position</label><select class="menu-position-selector">
                                                                <option value="left">Left</option>
                                                                <option value="right">Right</option>
                                                                <option value="top">Top</option>
                                                            </select></div>
                                                        <div class="fcp-field"><label for="">Menu
                                                                Style</label><select class="menu-layout-selector">
                                                                <option value="compact">Compact</option>
                                                                <option value="full">Full</option>
                                                                <option value="mini">Mini</option>
                                                            </select></div>
                                                        <div class="fcp-field with-image-selector-w"><label for="">With
                                                                Image</label><select class="with-image-selector">
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
                                                                Style</label><select class="sub-menu-style-selector">
                                                                <option value="flyout">Flyout</option>
                                                                <option value="inside">Inside/Click</option>
                                                                <option value="over">Over</option>
                                                            </select></div>
                                                        <div class="fcp-field"><label for="">Sub Menu Color</label>
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
                                                                Screen?</label><select class="full-screen-selector">
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select></div>
                                                        <div class="fcp-field"><label for="">Show Top
                                                                Bar</label><select class="top-bar-visibility-selector">
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select></div>
                                                        <div class="fcp-field"><label for="">Above
                                                                Menu?</label><select
                                                                class="top-bar-above-menu-selector">
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select></div>
                                                        <div class="fcp-field"><label for="">Top Bar Color</label>
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
                                        </div> -->

                                            </div>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- <div class="display-type"></div> -->
                    </div>

                </div>


                <div class="display-type"></div>
            </div>
        </div>
    </div>
@endsection