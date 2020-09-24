@extends('frontend.layouts.app')

@section('content')
<div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <ul class="breadcrumb breadcrumb-col-pink">
                        <li><a href="index.html"><i class="material-icons">home</i> Home</a></li>
                        <li class="active"><i class="material-icons">add_alert</i>create Notice</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Add Notice Area Start Here -->
                    <div class="col-4-xxxl col-12">
                        @if($message = Session::get('success'))
                            <div class="alert alert-success">
                                {{$message}}
                            </div>   
                        @endif  

                        @if($errors->any())
                            @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                            @endforeach   
                        @endif  
                        <div class="card height-auto">
                            <div class="card-body">
                                <form action="{{route('school.notice.store')}}" method='post' class="new-added-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Title</label>
                                            <input type="text" name='title' placeholder="" class="form-control" required>
                                        </div>
                                        
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Posted By </label>
                                            <input type="text" placeholder="" name='postedby' class="form-control" required>
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="col-lg-12 col-12 form-group">
                                            <label>Message</label>
                                            <textarea class="textarea form-control" name="message" id="form-message" cols="4"
                                                    rows="8" required></textarea>
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Add Notice Area End Here -->

                <!-- Footer Area Start Here -->
                @include('frontend.inc.footer')
                 <!-- Footer Area End Here -->
            </div>
@endsection