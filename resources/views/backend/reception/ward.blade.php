
@extends('backend.reception.layout.app')

@push('title')
<title>Ward</title>
@endpush

@section('content')

        <div class="content-w" style="margin-top: -50px;">
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">

                                <div class="element-actions"><a class="btn btn-primary btn-primary"
                                        href="Add_ward.html"><i class="os-icon os-icon-ui-22"></i><span>Add
                                            Ward</span></a></div>
                                <h6 class="element-header">Ward</h6>
                                <div class="element-box">
                                    <form>

                                        <div class="form-group">
                                            <div class="row">

                                                <div class="col-sm-0">
                                                    <h6 class="">Show </h6>

                                                </div>
                                                <div class="col-sm-0">
                                                    <div class=""><select class="">
                                                            <option>10</option>
                                                            <option>10</option>
                                                            <option>10</option>




                                                        </select></div>
                                                </div>

                                                <div class="col-sm-9">
                                                    <h6 class="">Entries </h6>

                                                </div>
                                                <div class="element-actions col-sm-2">
                                                    <input type="text" placeholder="search"><i
                                                        class="os-icon os-icon-search"
                                                        style="margin-left:-20px ;"></i></a>
                                                </div>
                                            </div>


                                            <div class="element-box-tp">

                                                <div class="table-responsive">
                                                    <table class="table table-padded text-center">
                                                        <thead>
                                                            <tr>
                                                                <th>Sr</th>
                                                                <th>Capacity</th>
                                                                <th>Category</th>
                                                                <th>Name</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <tr>
                                                                <td class="">
                                                                    1
                                                                </td>
                                                                <td>
                                                                    <div class="smaller">1</div>

                                                                </td>
                                                                <td>
                                                                    <div class="smaller">Bad</div>

                                                                </td>

                                                                <td>
                                                                    <div class="smaller lighter">Dhruvi</div>
                                                                </td>
                                                                <td class="row-actions"><a href="#"><i
                                                                            class="os-icon os-icon-grid-10"></i></a><a
                                                                        href="#"><i
                                                                            class="os-icon os-icon-ui-44"></i></a><a
                                                                        class="danger" href="#"><i
                                                                            class="os-icon os-icon-ui-15"></i></a></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>


                                </div>
                            </div>
                        </div>

                        <div class="display-type"></div>
                    </div>
      @endsection