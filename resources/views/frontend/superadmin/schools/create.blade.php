@extends('frontend.layouts.app')

@section('content')

    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>School</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Add New School</li>
            </ul>
        </div>
        @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{$message}}
                    </div>
        @endif
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
                        <h3>Add New School</h3>
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
                <form class="new-added-form" action="{{route('super.schools.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>School Name *</label>
                            <input type="text" name="school_name" placeholder="" class="form-control" required>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>email</label>
                            <input type="email" name="email"  placeholder="" class="form-control" required>
                        </div>
                        <!-- <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Last Name *</label>
                            <input type="text" name="lastname" placeholder="" class="form-control">
                        </div> -->
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Phone *</label>
                            <input type="text" name="phone" placeholder="" class="form-control" required>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Date Founded *</label>
                            <input type="date" name="dob" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                   data-position='bottom right' required>
                            <i class="far fa-calendar-alt"></i>
                        </div>

                                            
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Proprietor's Firstname</label>
                            <input type="text" name="firstname"  placeholder="" class="form-control" required>
                        </div>
                                            
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Proprietor's Lastname</label>
                            <input type="text" name="lastname"  placeholder="" class="form-control" required>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Proprietor's Gender *</label>
                            <select class="select2" name="gender" required>
                                <option >Please Select Gender *</option>
                                <option >Male</option>
                                <option >Female</option>
                                <option >Others</option>
                            </select>
                        </div>
                        
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="" class="form-control" required>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="cpass" placeholder="" class="form-control" required>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>School Address</label>
                            <input type="text" name="school_address" id="" class="form-control" required>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Owner's Address</label>
                            <input type="text" name="owner_address" id="" class="form-control" required>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label class="text-dark-medium">Upload School Logo (150px X 150px)</label>
                            <input type="file" name='profile_image' class="form-control-file">
                        </div>
                        <div class="col-lg-6 col-12 form-group">
                            <label>Short bio</label>
                            <textarea class="textarea form-control" name="bio" id="form-message" cols="8"
                                      rows="7" required></textarea>
                        </div>
                        
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Admit Form Area End Here -->
        @include('frontend.inc.footer')
    </div>

@endsection
