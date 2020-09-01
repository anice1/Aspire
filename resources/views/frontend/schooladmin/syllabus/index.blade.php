@extends('frontend.layouts.app')

@section('content')
<div class="dashboard-content-one">
               <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <ul class="breadcrumb breadcrumb-col-pink">
                    <li><a href="index.html"><i class="material-icons">home</i> Home</a></li>
                    <li class="active"><i class="material-icons">picture_as_pdf</i> Syllabus</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            
                <!-- Teacher Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                <!-- Student Details Area Start Here -->
                        <div class="single-info-details">
                            <div class="item-img">
                                <img src="img/figure/student1.jpg" alt="student">
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium">Download pdf</h3>
                                    <div class="header-elements">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-print"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>Aliquam erat volutpat. Curabiene natis massa sedde lacu stiquen sodale 
                                word moun taiery.Aliquam erat volutpaturabiene natis massa sedde  sodale 
                                word moun taiery.</p>
                            </div>
                        </div>
                    </div>
                </div>
                @include('frontend.inc.footer')
            </div>
@endsection