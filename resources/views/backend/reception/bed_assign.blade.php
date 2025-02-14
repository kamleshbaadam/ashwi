

@extends('backend.reception.layout.app')

@push('title')
<title>Bed Assign</title>
@endpush

@section('content')



        <div class="content-w" style="margin-top: -50px;">
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">

                                <h6 class="element-header">Bed Assign</h6>
                                <div class="element-box">
                                    <form>
                                        <h5 class="form-header">Bed Assign </h5>
                                        <div class="form-desc">Discharge best employed your phase each the of shine.
                                            Be met even reason consider logbook redesigns. Never a turned interfaces
                                            among asking</div>


                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="">First Name</label>

                                                    <input type="text" class="form-control"
                                                        placeholder="First name">
                                                </div>
                                                <div class="col">
                                                    <label for="">Last Name</label>

                                                    <input type="text" class="form-control" placeholder="Last name">
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="">Patient ID</label><input
                                                            class="form-control" placeholder="Patient ID" type="Password">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                         
                                            <div class="col">
                                                <div class="form-group"><label for=""> Bed Type</label><select
                                                        class="form-control">
                                                        <option>bed 1</option>
                                                        <option>bed 2</option>
                                                        <option>bed 3</option>
                                                    </select></div>
                                            </div>
                                            
                                            <div class="col">
                                                <label for="">Assign Date</label>

                                                <input type="date" class="form-control" 
                                                placeholder="Assign Date">
                                            </div>
                                            <div class="col">
                                                <label for="">Package</label>

                                                <input type="text" class="form-control"
                                                    placeholder="Package">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="">Discharge Date</label>

                                                    <input type="date" class="form-control"
                                                        placeholder="Discharge Date">
                                                </div>
                                                <div class="col">
                                                    <label for="">Description</label>

                                                    <input type="text" class="form-control"
                                                     placeholder="Description">
                                                </div>
                                                <div class="col">
                                                    <label for="">Surgery time</label>

                                                    <input type="time" class="form-control" 
                                                    placeholder="Surgery time">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                            
                                                <div class="col">
                                                    <label for="">Doctors name </label>

                                                    <input type="text" class="form-control" 
                                                    placeholder="Doctors name ">
                                                </div>
                                                
                                                <div class="col">
                                                    <label for="">Anesthesist </label>

                                                    <input type="text" class="form-control" 
                                                    placeholder="Anesthesist ">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="">Payment done</label>

                                                    <input type="number" class="form-control" 
                                                    placeholder="Payment done">
                                                </div>
                                                <div class="col">
                                                    <label for="">Pending payment</label>

                                                    <input type="number" class="form-control" 
                                                    placeholder="Pending payment ">
                                                </div>
                                                
                                            </div>

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