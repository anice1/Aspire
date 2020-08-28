@extends('frontend.layouts.app')

@section('content')

    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Students</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Student Admit Form</li>
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
    <!-- Breadcubs Area End Here -->
        <!-- Admit Form Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Add New Students</h3>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                           aria-expanded="false">...</a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-times text-orange-red"></i>Close</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                        </div>
                    </div>
                </div>
                <form class="new-added-form" action="{{route('students.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>First Name *</label>
                            <input type="text" name="firstname" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Last Name *</label>
                            <input type="text" name="lastname" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Other Names *</label>
                            <input type="text" name="othernames" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Gender *</label>
                            <select class="select2" name="gender">
                                <option value="">Please Select Gender *</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Others</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Date Of Birth *</label>
                            <input type="date" name="dob" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                   data-position='bottom right'>
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>email</label>
                            <input type="email" name="email"  placeholder="" class="form-control">
                        </div>
                        {{--                    <div class="col-xl-3 col-lg-6 col-12 form-group">--}}
                        {{--                        <label>Blood Group *</label>--}}
                        {{--                        <select class="select2">--}}
                        {{--                            <option value="">Please Select Group *</option>--}}
                        {{--                            <option value="1">A+</option>--}}
                        {{--                            <option value="2">A-</option>--}}
                        {{--                            <option value="3">B+</option>--}}
                        {{--                            <option value="3">B-</option>--}}
                        {{--                            <option value="3">O+</option>--}}
                        {{--                            <option value="3">O-</option>--}}
                        {{--                        </select>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="col-xl-3 col-lg-6 col-12 form-group">--}}
                        {{--                        <label>Religion *</label>--}}
                        {{--                        <select class="select2">--}}
                        {{--                            <option value="">Please Select Religion *</option>--}}
                        {{--                            <option value="1">Islam</option>--}}
                        {{--                            <option value="2">Hindu</option>--}}
                        {{--                            <option value="3">Christian</option>--}}
                        {{--                            <option value="3">Buddish</option>--}}
                        {{--                            <option value="3">Others</option>--}}
                        {{--                        </select>--}}
                        {{--                    </div>--}}
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Class *</label>
                            <select class="select2" name="class" >
                                <option value="">Please Select Class *</option>
                                <option value="creche">Play</option>
                                <option value="nursery">Nursery</option>
                                <option value="one">One</option>
                                <option value="two">Two</option>
                                <option value="three">Three</option>
                                <option value="four">Four</option>
                                <option value="five">Five</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Section *</label>
                            <select class="select2" name="section" >
                                <option value="">Please Select Section *</option>
                                <option value="pink">Pink</option>
                                <option value="blue">Blue</option>
                                <option value="bird">Bird</option>
                                <option value="rose">Rose</option>
                                <option value="red">Red</option>
                            </select>
                        </div>
                        {{--                    <div class="col-xl-3 col-lg-6 col-12 form-group">--}}
                        {{--                        <label>Admission ID</label>--}}
                        {{--                        <input type="text" placeholder="" class="form-control">--}}
                        {{--                    </div>--}}
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Guardian</label>
                            <input type="text" name="guardian" placeholder="" class="form-control">
                        </div>
                        <div class="col-lg-6 col-12 form-group">
                            <label>address</label>
                            <textarea class="textarea form-control" name="address" id="form-message" cols="8"
                                      rows="7"></textarea>
                        </div>
                        <div class="col-lg-6 col-12 form-group mg-t-30">
                            <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                            <input type="file" class="form-control-file">
                        </div>
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                            {{--                        <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>--}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Admit Form Area End Here -->
        <footer class="footer-wrap-layout1">
            <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a
                    href="#">PsdBosS</a>
            </div>
        </footer>
    </div>

@endsection
