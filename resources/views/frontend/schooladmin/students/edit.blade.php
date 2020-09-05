@extends('frontend.layouts.app')

@section('content')

    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <ul class="breadcrumb breadcrumb-col-pink">
                <li><a href="index.html"><i class="material-icons">home</i> Home</a></li>
                <li><i class="material-icons">person_add</i> {{'Edit Students Details'}}</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
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
                                <h3>{{'Edit ' . $student->lastname . ' Details'}}</h3>
                            </div>
                        </div>
                        {!! Form::model($student, ['method' => 'PUT','route' => ['students.update', $student]]) !!}
{{--                        <form class="new-added-form" action="{{route('students.edit', $student)}}" method="POST">--}}
                            @csrf`
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>First Name *</label>
                                    <input type="text" name="firstname" value="{{$student->user->firstname}}" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Last Name *</label>
                                    <input type="text" name="lastname" value="{{$student->user->lastname}}" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date Of Birth *</label>
                                    <input type="date" name="dob" value="{{$student->dob}}" class="form-control air-datepicker"
                                        data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                </div>
{{--                                <div class="col-xl-3 col-lg-6 col-12 form-group">--}}
{{--                                    <label>email</label>--}}
{{--                                    <input type="email" name="email"  value="{{$student->user->email}}" class="form-control">--}}
{{--                                </div>--}}
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
{{--                                <div class="col-xl-3 col-lg-6 col-12 form-group">--}}
{{--                                    <label>Password</label>--}}
{{--                                    <input type="password" name="password" value="{{$student->password}}" class="form-control">--}}
{{--                                </div>--}}
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class *</label>
                                    <select class="select2" name="class">
                                        <option value="{{$student->class}}">Please Select Class *</option>
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
                                    <label>Gender *</label>
                                    <select class="select2" name="gender">
                                        <option value="{{$student->gender}}">Please Select Class *</option>
                                        <option value="creche">Female</option>
                                        <option value="nursery">Male</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="{{$student->phone}}" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Guardian FullName *</label>
                                    <input type="text" name="guardian" value="{{$student->guardian}}" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Guardian phone *</label>
                                    <input type="text" name="guardian_phone" value="{{$student->guardian_phone}}" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Guardian Email</label>
                                    <input type="email" name="guardian_email" value="{{$student->guardian_email}}" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Guardian Occupation *</label>
                                    <input type="text" name="guardian_occupation" value="{{$student->guardian_occupation}}" class="form-control">
                                </div>
                                <!--  <div class="col-lg-6 col-12 form-group mg-t-30">
                                     <label class="text-dark-medium">Upload Guardian Photo (150px X 150px)</label>
                                     <input type="file" class="form-control-file">
                                 </div> -->
                                <div class="col-lg-6 col-12 form-group">
                                    <label>address</label>
                                    <textarea class="textarea form-control" name="address" value="{{$student->address}}"id="form-message" cols="4"
                                              rows="9"></textarea>
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Short BIO</label>
                                    <textarea class="textarea form-control" name="bio" value="{{$student->bio}}"id="form-message" cols="4"
                                              rows="9"></textarea>
                                </div>

                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">update</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
{{--                    </form>--}}
                </div>
            </div>
            <!-- Admit Form Area End Here -->
        @include('frontend.inc.footer')

    </div>
                <!-- Student Details Area End Here -->
            </div>

@endsection
