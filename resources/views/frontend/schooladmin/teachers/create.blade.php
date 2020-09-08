@extends('frontend.layouts.app')

@section('content')
    <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Teacher</h3>
                    <ul class="breadcrumb breadcrumb-col-pink">
                        <li><a href="index.html"><i class="material-icons">home</i> Home</a></li>
                        <li class="active"><i class="material-icons"></i>Add New Teacher</li>
                    </ul>
                </div>
                @if ($errors->any())

                <div class="alert alert-danger">

                    <strong>Whoops!</strong> There were some problems with your input.<br><br>

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

                @endif
                @if ($message = Session::get('success'))

                                <div class="alert alert-success" role='alert'>

                                    <p>{{ $message }}</p>

                                </div>

                @endif
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <form class="new-added-form" method='post' action="{{route('school.teachers.store')}}" enctype='multipart/form-data'>
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>First Name *</label>
                                    <input type="text" name='firstname' placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Last Name *</label>
                                    <input type="text" name='lastname' placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender *</label>
                                    <select class="select2 select2-hidden-accessible" name='gender' data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="3">Please Select Gender *</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Others</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-nrwp-container"><span class="select2-selection__rendered" id="select2-nrwp-container" role="textbox" aria-readonly="true" title="Please Select Gender *">Please Select Gender *</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date Of Birth *</label>
                                    <input type="date" name='dob' placeholder="dd/mm/yyyy" class="form-control air-datepicker">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Blood Group *</label>
                                    <select class="select2 select2-hidden-accessible" name='blood_group' data-select2-id="4" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="6">Please Select Group *</option>
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>O+</option>
                                        <option>O-</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-8xxo-container"><span class="select2-selection__rendered" id="select2-8xxo-container" role="textbox" aria-readonly="true" title="Please Select Group *">Please Select Group *</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Religion *</label>
                                    <select class="select2 select2-hidden-accessible" name='religion' data-select2-id="7" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="9">Please Select Religion *</option>
                                        <option>Islam</option>
                                        <option>Hindu</option>
                                        <option>Christian</option>
                                        <option>Buddish</option>
                                        <option>Others</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-098k-container"><span class="select2-selection__rendered" id="select2-098k-container" role="textbox" aria-readonly="true" title="Please Select Religion *">Please Select Religion *</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail</label>
                                    <input type="email" name='email' placeholder="example@example.com" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Password</label>
                                    <input type="password" name='password' placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name='confirm_password' placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class *</label>
                                    <select class="select2 select2-hidden-accessible" name='class' data-select2-id="10" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="12">Please Select Class *</option>
                                        <option>Play</option>
                                        <option>Nursery</option>
                                        <option>One</option>
                                        <option>Two</option>
                                        <option>Three</option>
                                        <option>Four</option>
                                        <option>Five</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="11" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-hfjo-container"><span class="select2-selection__rendered" id="select2-hfjo-container" role="textbox" aria-readonly="true" title="Please Select Class *">Please Select Class *</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Address</label>
                                    <input type="text" name='address' placeholder="" class="form-control">
                                </div>
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone</label>
                                    <input type="text" placeholder="" name='phone' class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                                    <input type="file" name='photo' class="form-control-file">
                                </div>
                                
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Short BIO</label>
                                    <textarea class="textarea form-control" name="bio" id="form-message" cols="10" rows="9"></textarea>
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add New Teacher Area End Here -->
    @include('frontend.inc.footer') 
            </div>
@endsection