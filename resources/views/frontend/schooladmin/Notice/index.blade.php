@extends('frontend.layouts.app')

@section('content')
<div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <ul class="breadcrumb breadcrumb-col-pink">
                        <li><a href="index.html"><i class="material-icons">home</i> Home</a></li>
                        <li class="active"><i class="material-icons">notifications_active</i>Notice board</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- All Notice Area Start Here -->
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <form class="mg-b-20">
                                    <div class="row gutters-8">
                                        <div class="col-lg-5 col-12 form-group">
                                            <input type="text" placeholder="Search by Date ..." class="form-control">
                                        </div>
                                        <div class="col-lg-5 col-12 form-group">
                                            <input type="text" placeholder="Search by Title ..." class="form-control">
                                        </div>
                                        <div class="col-lg-2 col-12 form-group">
                                            <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="notice-board-wrap">
                                    @foreach($notices as $notice)
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">{{$notice->created_at->diffForHumans()}}</div>
                                        <h6 class="notice-title">
                                            <a href="#"> {{$notice->title}}</a>
                                        </h6>
                                        <div class="entry-meta">  {{$notice->postedBy}} / <span>{{$notice->created_at->diffForHumans()}}</span></div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- All Notice Area End Here -->
                </div>


                <!-- Footer Area Start Here -->
                @include('frontend.inc.footer')
                 <!-- Footer Area End Here -->
            </div>
@endsection