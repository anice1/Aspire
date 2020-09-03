@extends('frontend.layouts.app')

@section('content')
<div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <ul class="breadcrumb breadcrumb-col-pink">
                    <li><a href="index.html"><i class="material-icons">home</i> Home</a></li>
                    <li class="active"><i class="material-icons">timer</i> Timetable</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Class Routine Area Start Here -->
            <div class="row">
                <div class="col-8-xxxl col-12">
                            <div class="card height-auto">
                                <div class="card-body">
                                    <form class="mg-b-20">
                                        <div class="row gutters-8">
                                            <div class="col-lg-4 col-12 form-group">
                                                <input type="text" placeholder="Search by Day ..." class="form-control">
                                            </div>
                                            <div class="col-lg-3 col-12 form-group">
                                                <input type="text" placeholder="Search by Class ..." class="form-control">
                                            </div>
                                            <div class="col-lg-3 col-12 form-group">
                                                <input type="text" placeholder="Search by Section ..." class="form-control">
                                            </div>
                                            <div class="col-lg-2 col-12 form-group">
                                                <button type="submit"
                                                    class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="table-responsive">
                                        <table class="table display data-table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input checkAll">
                                                            <label class="form-check-label">Day</label>
                                                        </div>
                                                    </th>
                                                    <th>Class</th>
                                                    <th>Subject</th>
                                                    <th>Section</th>
                                                    <th>Teacher</th>
                                                    <th>Time</th>
                                                    <th>Date</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label">Sunday</label>
                                                        </div>
                                                    </td>
                                                    <td>4</td>
                                                    <td>Accounting</td>
                                                    <td>A</td>
                                                    <td>Mike John</td>
                                                    <td>10.00 am-11.00 am</td>
                                                    <td>20/06/2019</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label">Monday</label>
                                                        </div>
                                                    </td>
                                                    <td>4</td>
                                                    <td>English</td>
                                                    <td>A</td>
                                                    <td>Adam John</td>
                                                    <td>10.00 am-11.00 am</td>
                                                    <td>20/06/2019</td>
                                                    <td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label">Tuesday</label>
                                                        </div>
                                                    </td>
                                                    <td>4</td>
                                                    <td>Economics</td>
                                                    <td>A</td>
                                                    <td>Johanthon Ray</td>
                                                    <td>10.00 am-11.00 am</td>
                                                    <td>20/06/2019</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label">Wednesday</label>
                                                        </div>
                                                    </td>
                                                    <td>4</td>
                                                    <td>Drawing</td>
                                                    <td>A</td>
                                                    <td>Mike Jonas</td>
                                                    <td>10.00 am-11.00 am</td>
                                                    <td>20/06/2019</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label">Thursday</label>
                                                        </div>
                                                    </td>
                                                    <td>4</td>
                                                    <td>English</td>
                                                    <td>A</td>
                                                    <td>Kate Well</td>
                                                    <td>10.00 am-11.00 am</td>
                                                    <td>20/06/2019</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label">Friday</label>
                                                        </div>
                                                    </td>
                                                    <td>4</td>
                                                    <td>Chemistry</td>
                                                    <td>A</td>
                                                    <td>Mike John</td>
                                                    <td>10.00 am-11.00 am</td>
                                                    <td>20/06/2019</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label">Saturday</label>
                                                        </div>
                                                    </td>
                                                    <td>4</td>
                                                    <td>English</td>
                                                    <td>A</td>
                                                    <td>Mike John</td>
                                                    <td>10.00 am-11.00 am</td>
                                                    <td>20/06/2019</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Class Routine Area End Here -->
            </div>
                <!-- Student Details Area End Here -->
                @include('frontend.inc.footer')
            </div>
@endsection