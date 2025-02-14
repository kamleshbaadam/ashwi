@extends('backend.admin.layout.app')

@push('title')
<title>Patients</title>
@endpush

@section('content')



        <div class="content-w">
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">

                                <div class="element-box">
                                    <h5 class="form-header">Check Patient</h5>
                                    <div class="form-desc">Discharge best employed your phase each the of shine. Be
                                        met even
                                        reason consider logbook redesigns. Never a turned interfaces among asking
                                    </div>
                                    <form class="form-inline">
                                        <label class="sr-only"> Phone Number </label><input
                                            class="form-control col-sm-4 mb-2 mr-sm-3 mb-sm-0"
                                            placeholder="Phone Number">

                                        <button class="btn btn-primary btn-lg" type="submit"> Check Details
                                        </button>
                                    </form>
                                </div>

                                <h6 class="element-header">Add New OPD</h6>
                                <div class="element-box">
                                    <form>
                                        <h5 class="form-header">List of OPD Patients </h5>
                                        <div class="form-desc">Discharge best employed your phase each the of shine.
                                            Be met even reason consider logbook redesigns. Never a turned interfaces
                                            among asking</div>


                                        <div class="form-group">
                                            <!-- <div class="row">
                                                    <div class="col">
                                                        <div>
                                                            <label for="">Number</label>

                                                            <input type="text" class="form-control" placeholder="+91">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="col">
                                                            <button type="submit"
                                                                class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </div> -->

                                            <!-- <div class="row">
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <label for=""> Number</label><input class="form-control"
                                                                placeholder="+91">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                <div class="form-group">
                                                            <button
                                                                type="submit" class="mt-10 mr-5 mb-2 btn btn-primary btn-lg">Submit</button>
                                                        </div>
                                                    </div>
                                                </div> -->


                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="">First Name</label>

                                                    <input type="text" class="form-control" placeholder="First name">
                                                </div>
                                                <div class="col">
                                                    <label for="">Last Name</label>

                                                    <input type="text" class="form-control" placeholder="Last name">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <div> <label for="">Gender</label>
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label"
                                                            for="inlineRadio2">Female</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">Other</label>
                                                    </div>



                                                </div>
                                                <!-- <div>
                                                        <label for="">Age</label>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio1"
                                                                value="option1">
                                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio2"
                                                                value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio3"
                                                                value="option3" disabled>
                                                            <label class="form-check-label" for="inlineRadio3">3
                                                                (disabled)</label>

                                                        </div>

                                                    </div> -->
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group"><label for="">Age</label><input
                                                        class="form-control" placeholder="Adress" type="Adress">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group"><label for=""> Depatment</label><select
                                                        class="form-control">
                                                        <option>Select Depatment</option>
                                                        <option>New York</option>
                                                        <option>California</option>
                                                        <option>Boston</option>
                                                        <option>Texas</option>
                                                        <option>Colorado</option>
                                                    </select></div>
                                            </div>
                                        </div>



                                        <div class="form-group"><label for="">Address</label>
                                            <input class="form-control" placeholder="Address" type="Address">
                                            <!-- <select
                                                        class="form-control">
                                                        <option>Select State</option>
                                                        <option>New York</option>
                                                        <option>California</option>
                                                        <option>Boston</option>
                                                        <option>Texas</option>
                                                        <option>Colorado</option>
                                                    </select> -->
                                        </div>

                                        <div class="form-buttons-w"><button class="btn btn-primary" type="submit">
                                                Submit</button></div>
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