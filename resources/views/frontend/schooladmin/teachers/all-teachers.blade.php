@extends('frontend.layouts.app')

@section('content')
    <div class="dashboard-content-one">
               <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <ul class="breadcrumb breadcrumb-col-pink">
                        <li><a href="index.html"><i class="material-icons">home</i> Home</a></li>
                        <li class="active"><i class="material-icons">people</i>All Students</li>
                    </ul>
                </div>
        <!-- Breadcubs Area End Here -->
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                {{$message}}
            </div>
        @endif
                    <!-- Student Table Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            <form class="mg-b-20">
                                <div class="row gutters-8">
                                    <div class="col-11-xxxl col-xl-10 col-lg-3 col-12 form-group">
                                        <input type="text" placeholder="Search by Name ..." class="form-control">
                                    </div>
                                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table display data-table text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Class</th>
                                        <th>Address</th>
                                        <th>Date Of Birth</th>
                                        <th>Phone</th>
                                        <th>E-mail</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($teachers as $teacher)
                                    <tr>
                                        <td>{{'#00' . $teacher->id}}</td>
                                        <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                                        <td>{{$teacher->user->firstname . ' ' . $teacher->user->lastname}}</td>
                                        <td>{{$teacher->gender}}</td>
                                        <td>{{$teacher->class}}</td>
                                        <td>{{$teacher->address}}</td>
                                        <td>{{$teacher->dob}}</td>
                                        <td>{{$teacher->phone}}</td>
                                        <td>{{$teacher->user->email}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- <a class="dropdown-item" href="{{route('students.edit', $student ?? '')}}"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a> -->
                                                    <!-- <form action="{{route('teachers.destroy', $teacher->id)}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="_method" value='DELETE'>
                                                        <button type="submit" class='dropdown-item'><i class="fa fa-times text-dark-pastel-red"></i> Delete</button>
                                                    </form> -->
                                                    
                                                    <a class="dropdown-item" href="{{route('teachers.edit', $teacher->id)}}">
                                                        <i class="fas fa-cogs text-dark-pastel-green"></i>Edit
                                                    </a>
                                                    
                                                    <a class="dropdown-item" href="{{route('teachers.show', $teacher->id)}}">
                                                        <i class="fas fa-cogs text-dark-pastel-green"></i>View
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                {!! $teachers->links() !!}
                            </div>
                        </div>
                    </div>
                    <!-- Student Table Area End Here -->
                    @include('frontend.inc.footer')
                </div>
            </div>
@endsection
