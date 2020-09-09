@extends('frontend.layouts.app')

@section('content')
    <div class="dashboard-content-one">
               <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <ul class="breadcrumb breadcrumb-col-pink">
                        <li><a href="index.html"><i class="material-icons">home</i> Home</a></li>
                        <li class="active"><i class="material-icons">people</i> All Schools</li>
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
                                        <input type="text" placeholder="Search by Name ..." class="form-control" id='search-btn'>
                                    </div>
                                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                        <button type="button" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table display data-table text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Photo</th>
                                        <th>School Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Date Founded</th>
                                        <th>Proprietor</th>
                                        <th>Address</th>
                                        <th>Date Added</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                    @endphp
                                    @foreach($schools as $school)
                                    <tr class='datatable'>
                                        <td>{{'#00' . $i++}}</td>
                                        <td class="text-center"><a href="{{route('super.schools.show', $school->id)}}">
                                            <img src="{{asset('/storage'.$school->profile_image)}}" alt="student"></a></td>
                                        <td><a href="{{route('super.schools.show', $school->id)}}">
                                                {{$school->school_name}}
                                            </a>
                                        </td>
                                        <td>{{$school->user->email}}</td>
                                        <td>{{$school->phone}}</td>
                                        <td>{{$school->dob}}</td>
                                        <td>{{$school->firstname.' '.$school->lastname}}</td>
                                        <td>{{$school->school_address}}</td>
                                        <td>{{$school->created_at->diffForHumans()}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{route('super.schools.show', $school)}}"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Show</a>

                                                    <a class="dropdown-item" href="{{route('super.schools.edit', $schools)}}"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <form action="{{route('super.schools.destroy', $school->id)}}" method="post">
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

                                {!! $schools->links() !!}
                            </div>
                        </div>
                    </div>
                    <!-- Student Table Area End Here -->
                    @include('frontend.inc.footer')
                </div>
            </div>
@endsection
