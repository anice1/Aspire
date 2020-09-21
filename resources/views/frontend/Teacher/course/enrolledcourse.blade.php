@extends('frontend.layouts.app')

@section('content')
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <ul class="breadcrumb breadcrumb-col-pink">
            <li><a href="index.html"><i class="material-icons">home</i> Home</a></li>
            <li class="active"><i class="material-icons">person_add</i> enrolled Courses</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->


                <!-- Footer Area Start Here -->
                @include('frontend.inc.footer')
                 <!-- Footer Area End Here -->
            </div>
@endsection