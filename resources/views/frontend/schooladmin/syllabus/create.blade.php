@extends('frontend.layouts.app')

@section('content')

<!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
               <!-- Breadcubs Area Start Here -->
               <div class="breadcrumbs-area">
                    <ul class="breadcrumb breadcrumb-col-pink">
                        <li><a href="index.html"><i class="material-icons">home</i> Home</a></li>
                        <li class="active"><i class="material-icons">picture_as_pdf</i> Syllabus</li>
                    </ul>
                </div>
        <!-- Breadcubs Area End Here -->
                <!-- Add New Book Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <form class="new-added-form">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Uploade Date *</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-lg-6 col-12 form-group mg-t-30">
                            <label class="text-dark-medium">Upload pdf file*</label>
                            <input type="file" class="form-control-file">
                        </div>
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Create</button>
                        </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add New Book Area End Here -->

                @include('frontend.inc.footer')
            </div>
@endsection