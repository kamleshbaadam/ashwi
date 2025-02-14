@extends('backend.admin.layout.app')

@push('title')
<title>Add Prescription</title>
@endpush

@section('content')


        <div class="content-w">
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">
                                



                                <h6 class="element-header">Add Prescriptions</h6>
                                <div class="table-responsive">
                                    <table class="table table-padded text-center">
                                        <thead>
                                            <tr>
                                                <th>SR</th>
                                                <th>MEDICINE</th>
                                                <th>DOSAGE</th>
                                                <th>DOSE DURATION</th>
                                                <th>DOSE INTERVAL</th>
                                                <th>TIME</th>
                                                <th>INSTRUCTION</th>
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

                                                        <div class="form-group"><select class="form-control">
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

                                                        <div class="form-group"><select class="form-control">
                                                                <option>One On Day</option>
                                                                <option> A</option>
                                                                <option> B</option>
                                                                <option> C</option>

                                                            </select></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="smaller lighter">

                                                        <div class="form-group"><select class="form-control">
                                                                <option>Daily Morning</option>
                                                                <option> A</option>
                                                                <option> B</option>
                                                                <option> C</option>

                                                            </select></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="smaller lighter">

                                                        <div class="form-group"><select class="form-control">
                                                                <option>Before Meal</option>
                                                                <option>After Meal </option>
                                                                <option> B</option>
                                                                <option> C</option>

                                                            </select></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <textarea class="form-control rounded-0"
                                                        id="exampleFormControlTextarea2" rows="1"></textarea>
                                                </td>
                                                <td class="row-actions"><a href="#"><i
                                                            class="os-icon os-icon-grid-10"></i></a><a href="#"><i
                                                            class="os-icon os-icon-ui-44"></i></a><a class="danger"
                                                        href="#"><i class="os-icon os-icon-ui-15"></i></a></td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="text-center">
                                                    2
                                                </td>

                                                <td>
                                                    <div class="smaller lighter">

                                                        <div class="form-group"><select class="form-control">
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

                                                        <div class="form-group"><select class="form-control">
                                                                <option>One On Day</option>
                                                                <option> A</option>
                                                                <option> B</option>
                                                                <option> C</option>

                                                            </select></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="smaller lighter">

                                                        <div class="form-group"><select class="form-control">
                                                                <option>Daily Morning</option>
                                                                <option> A</option>
                                                                <option> B</option>
                                                                <option> C</option>

                                                            </select></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="smaller lighter">

                                                        <div class="form-group"><select class="form-control">
                                                                <option>Before Meal</option>
                                                                <option>After Meal </option>
                                                                <option> B</option>
                                                                <option> C</option>

                                                            </select></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <textarea class="form-control rounded-0"
                                                        id="exampleFormControlTextarea2" rows="1"></textarea>
                                                </td>
                                                <td class="row-actions"><a href="#"><i
                                                            class="os-icon os-icon-grid-10"></i></a><a href="#"><i
                                                            class="os-icon os-icon-ui-44"></i></a><a class="danger"
                                                        href="#"><i class="os-icon os-icon-ui-15"></i></a></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <div>
                                        <h6>Note</h6>
                                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2"
                                            rows="6"></textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="element-actions"><a class="btn btn-primary btn-primary" 
                                    href="add_Prescriptions.html">

                                    <span>Submit</span></a></div>

                        </div>

                    </div>


                    <!-- <div class="display-type"></div> -->
                </div>

            </div>


            <div class="display-type"></div>
        </div>
       @endsection