@extends('frontend.layouts.app')

@section('content')
<div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <ul class="breadcrumb breadcrumb-col-pink">
                        <li><a href="index.html"><i class="material-icons">home</i> Home</a></li>
                        <li class="active"><i class="material-icons">add_alert</i>Compose</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!--Main container start -->
                <main class="ttr-wrapper">
                    <div class="container-fluid">	
                        <div class="row">
                            <!-- Your Profile Views Chart -->
                            <div class="col-lg-12 m-b30">
                                <div class="widget-box">
                                    <div class="email-wrapper">
                                        <!-- email menu-bar Start Here -->
                                        @include('frontend.inc.email-menu-bar')
                                        <!-- email menu bar End Here -->
                                        <div class="mail-list-container">
                                            <form class="mail-compose">
                                                <div class="form-group col-12">
                                                    <input class="textarea form-control" type="email" placeholder="To">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input class="textarea form-control" type="email" placeholder="CC">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input class="textarea form-control" type="text" placeholder="Subject">
                                                </div>
                                                <div class="form-group col-12">
                                                    <div class="summernote"></div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <input type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                                                </div>
                                                <div class="form-group col-12">
                                                    <button type="submit" class="btn fw-btn-fill btn-gradient-yellow btn-lg">Send</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <!-- Your Profile Views Chart END-->
                        </div>
                    </div>
                </main>

                <!-- Footer Area Start Here -->
                @include('frontend.inc.footer')
                 <!-- Footer Area End Here -->
            </div>
@endsection