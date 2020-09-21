@extends('frontend.layouts.app')

@section('content')
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <ul class="breadcrumb breadcrumb-col-pink">
            <li><a href="index.html"><i class="material-icons">home</i> Home</a></li>
            <li class="active"><i class="material-icons">person_add</i> Create Courses</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->

                    <!-- Add courses Start Here -->
                    <div class="card height-auto">
                    <div class="card-body">
                        <form class="new-added-form">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Uploade Date *</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <!-- Editor Starts Here -->
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <!-- <div class="header">
                                                <h2>
                                                    TINYMCE
                                                    <small>Taken from <a href="https://www.tinymce.com" target="_blank">www.tinymce.com</a></small>
                                                </h2>
                                                <ul class="header-dropdown m-r--5">
                                                    <li class="dropdown">
                                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                            <i class="material-icons">more_vert</i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="javascript:void(0);">Action</a></li>
                                                            <li><a href="javascript:void(0);">Another action</a></li>
                                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div> -->
                                            <div class="body">
                                                <textarea id="tinymce">
                                                    <h2>WYSIWYG Editor</h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>
                                                    <h3>Lacinia</h3>
                                                    <ul>
                                                        <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                                                        <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                                                        <li>Praesent non lacinia mi.</li>
                                                        <li>Mauris a ante neque.</li>
                                                        <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                                                    </ul>
                                                    <h3>Pellentesque adipiscing</h3>
                                                    <p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- #END# TinyMCE -->

                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add courses End Here -->

                <!-- Footer Area Start Here -->
                @include('frontend.inc.footer')
                 <!-- Footer Area End Here -->
            </div>
@endsection