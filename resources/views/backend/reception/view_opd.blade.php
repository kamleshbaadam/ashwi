@extends('backend.reception.layout.app')

@push('title')
    <title>Reception</title>
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
                <div class="element-box-tp">
                    @include('flash-message')
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <div class="tab ">
                            <h6 class="element-header">OPD Patient</h6>

                            <div class="form-buttons-w form-desc" style="display: flex;gap: 40px;">

                                <a href="#" class="tablinks" onclick="openCity(event, '789')">
                                    <h6>Patient Details</h6>
                                </a>
                                <a href="#" class="tablinks" onclick="openCity(event, '123')">
                                    <h6>Past History</h6>
                                </a>

                                <a href="#" class="tablinks" onclick="openCity(event, '912')">

                                    <h6>Payments</h6>
                                </a>
                            </div> 
                        </div>
                        <div id="789" class="tabcontent element-box-tp element-box">

                                <div class="form-group row">

                                    <div class="row col-sm-6">

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Patient ID :</h6>
                                                <div>{{ $patient->patient_id }}</div>
                                            </div>
                                        </div>

                                        <!-- <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Refeferce ID :</h6>
                                                <div>123</div>
                                            </div>
                                        </div> -->

                                        <!-- <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Select IP Number :</h6>
                                                <div>Receptionist</div>

                                            </div>
                                        </div> -->

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Salutation:</h6>
                                                <div>{{ $patient->name_prefix }}</div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Select Name:</h6>
                                                <div>Receptionist</div>

                                            </div>
                                        </div> -->

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Name:</h6>
                                                <div>{{ $patient->first_name ?? '' }} {{ $patient->middle_name ?? '' }} {{ $patient->last_name ?? '' }}</div>
                                            </div>
                                        </div>



                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Gender: </h6>
                                                <div>{{ $patient->gender }}</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="form-group row">
                                                <h6>Date of birth:</h6>
                                                <div>{{ $patient->dob }}</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Age:</h6>
                                                <div>{{ $patient->age }}</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Number:</h6>
                                                <div>{{ $patient->phone_no }}</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Email:</h6>
                                                <div>{{ $patient->email }}</div>
                                            </div>
                                        </div>


                                        <!-- <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>DND"NO":</h6>
                                                <div>Bed Manager</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>select language:</h6>
                                                <div>English</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>occupation:</h6>
                                                <div>Bank Management</div>
                                            </div>
                                        </div> -->

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Blood group :</h6>
                                                <div>{{ $patient->blood_group }}</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Refeferce :</h6>
                                                <div>{{ $patient->reference_name }}</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Mediclaim :</h6>
                                                <div>{{ $patient->mediclaim }}</div>
                                            </div>
                                        </div>

                                        <!-- <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Patient Category :</h6>
                                                <div>A</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <h6>Admission Details</h6>

                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>E.N.T :</h6>
                                                <div>Abc</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>select Ward :</h6>
                                                <div>Abc</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Room / Bad :</h6>
                                                <div>Abc</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Admitting Doctor :</h6>
                                                <div>Dr.Mehta</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Date :</h6>
                                                <div>26/12/2023</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Time :</h6>
                                                <div>12:23pm</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Attending Doctor:</h6>
                                                <div>satani dhruvi</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Refeferce:</h6>
                                                <div>satani dhruvi</div>
                                            </div>
                                        </div> -->
                                    </div>

                                    <div class="row col-sm-6">
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <h6>Address 1 :</h6>
                                                <div>{{ $patient->address }}</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <h6>Address 2 :</h6>
                                                <div>{{ $patient->other_address }}</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>pincode :</h6>
                                                <div>{{ $patient->pincode }}</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Area :</h6>
                                                <div>{{ $patient->area }}</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>City :</h6>
                                                <div>{{ $patient->city }}</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>District :</h6>
                                                <div>{{ $patient->district }}</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>state :</h6>
                                                <div>{{ $patient->state }}</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Country :</h6>
                                                <div>{{ $patient->country }}</div>
                                            </div>
                                        </div>

                                        <!-- <div class="col-sm-8">
                                            <div class="form-group row">
                                                <h6>Other Address :</h6>
                                                <div>Ahemdabad,india</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Nationality :</h6>
                                                <div>Indian</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <h6>Other Details</h6>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6>Care Taker :</h6>
                                                <div>fsfiksbvb</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6> Nombar :</h6>
                                                <div>fsfiksbvb</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6> Relationship :</h6>
                                                <div>singel</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6> Insurance Name :</h6>
                                                <div>12345</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6> Policy Number :</h6>
                                                <div>12345</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <h6> TPA Number:</h6>
                                                <div>12345</div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="123" class="tabcontent element-box-tp element-box ">
                            <div class="form-buttons-w form-desc"
                                style="display: flex;justify-content: space-between;">
                                <h5>Date: {{ $patient->visit_date }}</h5>
                                <h6>OPD ID / {{ $patient->id }}</h6>
                            </div>

                            <div class="form-group row">
                                <div class="row col-sm-12">
                                    <div class="row consectetur">
                                    <div class="col-sm-3">
                                        <h6>Complaint:</h6>
                                        <p> {{ $patient->complain }}</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <h6>Investigation:</h6>
                                        <p> {{ $patient->investigation }}</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <h6>Examination:</h6>
                                        <p> {{ $patient->examination }}</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <h6>Advice:</h6>
                                        <p> {{ $patient->advise }}</p>
                                    </div>
                                    </div>                                        
                                    <div class="col-sm-12">
                                        <div class="element-box-tp">
                                            <div class="table-responsive">
                                                <h6>PRESCRIPTION</h6>
                                                    <table class="table table-padded text-center">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 1px;">SR</th>
                                                                <th style="width: 100px;">MEDICINE</th>
                                                                <th style="width: 200px;">Description</th>
                                                                <th style="width: 1px;">DOSAGE</th>
                                                                <th style="width:1px;">Day</th>
                                                                <th style="width: 1px;">Quantity</th>
                                                                <!-- <th style="width: 200px;">INTERVAL</th>
                                                                <th style="width: 200px;">INSTRUCTION</th>

                                                                <th style="width: 5px;">ACTION</th> -->
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($medicines as $medicine)
                                                                <tr>{{ $medicine-medicine_name }}</tr>>
                                                                <tr>{{ $medicine->medicine_description }}</tr>
                                                                <tr>{{ $medicine->unit }}</tr>
                                                                <tr>{{ $medicine->days }}</tr>
                                                                <tr>{{ $medicine->qtys }}</tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">

                                            <div class="element-box-tp">
                                                <div class="table-responsive">


                                                    <table class="table table-padded text-center ">
                                                        <h5>Report</h5>
                                                        <thead>
                                                            <tr>
                                                                <th>SR</th>
                                                                <th>Report</th>
                                                                <th>D Report</th>
                                                                <th>Lab Report</th>
                                                                <!-- <th></th>
                                                                <th>ACTION</th> -->
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="912" class="tabcontent element-box-tp">
                                
                                <div class="element-actions"><a class="btn btn-primary btn-primary"
                                    href="add_Payments.html"><i class="os-icon os-icon-ui-22">

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

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
            setInterval(function() {
                window.location.reload();
            }, 20000); // in ms
    </script>
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
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const tabLinks = document.querySelectorAll("#opdTabs .nav-link");
        const tabPanes = document.querySelectorAll(".tab-pane");

        tabLinks.forEach(link => {
            link.addEventListener("click", function () {
                // Remove 'active' class from all tabs and panes
                tabLinks.forEach(l => l.classList.remove("active"));
                tabPanes.forEach(pane => pane.style.display = "none");

                // Add 'active' to clicked tab and show respective pane
                this.classList.add("active");
                const tab = this.getAttribute("data-tab");
                document.getElementById(`tab-${tab}`).style.display = "block";
            });
        });
    });
</script>

@endsection