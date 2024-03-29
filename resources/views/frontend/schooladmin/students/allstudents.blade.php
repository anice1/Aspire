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
                    <!-- Student Table Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            <form class="mg-b-20">
                                <div class="row gutters-8">
                                    <div class="col-11-xxxl col-xl-10 col-lg-3 col-12 form-group">
                                        <input type="text" placeholder="Search by Name ..." class="form-control" id='searchbox'>
                                    </div>
                                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                        <button type="button" class="fw-btn-fill btn-gradient-yellow" id='search-btn'>SEARCH</button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table display data-table text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Reg</th>
                                        <th>Photo</th>
                                        <th>Full Name</th>
                                        <th>Gender</th>
                                        <th>Class</th>
                                        <th>Parents</th>
                                        <th>Address</th>
                                        <th>Date Of Birth</th>
                                        <th>Phone</th>
                                        <th>E-mail</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                    @endphp
                                    @foreach($students as $student)
                                    <tr  class='datatable'>
                                        <td>{{'#00' . $i++ }}</td>
                                        <td class="text-center"><img src="{{asset('/storage'.$student->profile_image)}}" alt="student"></td>
                                        <td>{{$student->firstname . ' ' . $student->lastname}}</td>
                                        <td>{{$student->gender}}</td>
                                        <td>{{$student->class}}</td>
                                        <td>{{$student->guardian }}</td>
                                        <td>{{$student->address}}</td>
                                        <td>{{$student->dob}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td>{{$student->user->email}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{route('school.students.show', $student)}}"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Show</a>

                                                    <a class="dropdown-item" href="{{route('school.students.edit', $student)}}"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <form action="{{route('school.students.destroy', $student->id)}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="_method" value='DELETE'>
                                                        <button type="submit" class='dropdown-item'><i class="fa fa-times text-dark-pastel-red"></i> Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Student Table Area End Here -->
                </div>
            </div>
@endsection
