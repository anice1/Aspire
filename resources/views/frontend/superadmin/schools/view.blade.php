@extends('frontend.layouts.app')

@section('content')
<div class="dashboard-content-one">
               <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <ul class="breadcrumb breadcrumb-col-pink">
                    <li><a href="index.html"><i class="material-icons">home</i> Home</a></li>
                    <li class="active"><i class="material-icons">person</i> Profile</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
                <!-- Student Details Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>About {{ $school->school_name}}</h3>
                            </div>
                        </div>
                        <div class="single-info-details">
                            <div class="item-img">
                                <img src="{{asset('/storage'.$school->profile_image)}}" alt="student" style="max-height: 700px;max-width: 500px;">
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium"> {{ $school->school_name }}</h3>
                                    <div class="header-elements">
                                        <ul>
                                            <li><a href="#"><i class="far fa-edit"></i></a></li>
                                            <li><a href="javascript:window.print()"><i class="fas fa-print"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>{{$school->bio}}</p>
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>Name:</td>
                                                <td class="font-medium text-dark-medium"> {{ $school->school_name}}</td>
                                            </tr>
                                            <tr>
                                                <td>Gender:</td>
                                                <td class="font-medium text-dark-medium">{{$school->gender}}</td>
                                            </tr>
                                            <tr>
                                                <td>Proprietors Name:</td>
                                                <td class="font-medium text-dark-medium">{{$school->firstname . ' ' . $school->lastname}}</td>
                                            </tr>
                                            <tr>
                                                <td>Date Of Birth:</td>
                                                <td class="font-medium text-dark-medium">{{$school->dob}}</td>
                                            </tr>
                                            <tr>
                                                <td>E-mail:</td>
                                                <td class="font-medium text-dark-medium">{{$school->user->email}}</td>
                                            </tr>
                                            <tr>
                                                <td>Admission Date:</td>
                                                <td class="font-medium text-dark-medium">{{$school->created_at}}</td>
                                            </tr>
                                            <tr>
                                                <td>Address:</td>
                                                <td class="font-medium text-dark-medium">{{$school->school_address}}</td>
                                            </tr>
                                            <tr>
                                                <td>Phone:</td>
                                                <td class="font-medium text-dark-medium">{{$school->phone}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Student Details Area End Here -->
                @include('frontend.inc.footer')
            </div>
@endsection
