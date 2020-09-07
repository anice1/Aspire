@extends('frontend.layouts.app')

@section('content')
    <!-- Dashboard Content Start Here -->

@include('frontend.inc.dashboardsummary')
    <div class="row gutters-20">
        <div class="col-12 col-xl-6 col-3-xxxl">
            <div class="card dashboard-card-three pd-b-20">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Students</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" onclick="this.parentNode.parentNode.parentNode.parentNode.style.display = 'none'"><i
                                        class="fas fa-times text-orange-red"></i>Close</a>
                                <a class="dropdown-item" href="#" onClick="window.location.reload();"><i
                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                            </div>
                        </div>
                    </div>
                    <div class="doughnut-chart-wrap">
                        <canvas id="student-doughnut-chart" width="100" height="300"></canvas>
                    </div>
                    <div class="student-report">
                        <div class="student-count pseudo-bg-blue">
                            <h4 class="item-title">Female Students</h4>
                            <div class="item-number">45,000</div>
                        </div>
                        <div class="student-count pseudo-bg-yellow">
                            <h4 class="item-title">Male Students</h4>
                            <div class="item-number">1,05,000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 col-4-xxxl">
            <div class="card dashboard-card-four pd-b-20">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Event Calender</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" onclick="this.parentNode.parentNode.parentNode.parentNode.style.display = 'none'"><i
                                        class="fas fa-times text-orange-red"></i>Close</a>>
                                <a class="dropdown-item" href="#" onClick="window.location.reload();"><i
                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                            </div>
                        </div>
                    </div>
                    <div class="calender-wrap">
                        <div id="fc-calender" class="fc-calender"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4-xxxl col-12">
                    <div class="card dashboard-card-six">
                        <div class="card-body">
                            <div class="heading-layout1 mg-b-17">
                                <div class="item-title">
                                    <h3>Notifications</h3>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                        aria-expanded="false">...</a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" onclick="this.parentNode.parentNode.parentNode.parentNode.style.display = 'none'"><i
                                                class="fas fa-times text-orange-red"></i>Close</a>
                                        <a class="dropdown-item" href="#" onClick="window.location.reload();"><i
                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                    </div>
                                </div>
                            </div>
                            <div class="notice-box-wrap">
                                <div class="notice-list">
                                    <div class="post-date bg-skyblue">16 June, 2019</div>
                                    <h6 class="notice-title"><a href="#">Great School manag mene esom tus eleifend
                                            lectus
                                            sed maximus mi faucibusnting.</a></h6>
                                    <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                </div>
                                <div class="notice-list">
                                    <div class="post-date bg-yellow">16 June, 2019</div>
                                    <h6 class="notice-title"><a href="#">Great School manag printing.</a></h6>
                                    <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                </div>
                                <div class="notice-list">
                                    <div class="post-date bg-pink">16 June, 2019</div>
                                    <h6 class="notice-title"><a href="#">Great School manag Nulla rhoncus eleifensed
                                            mim
                                            us mi faucibus id. Mauris vestibulum non purus lobortismenearea</a></h6>
                                    <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                </div>
                                <div class="notice-list">
                                    <div class="post-date bg-skyblue">16 June, 2019</div>
                                    <h6 class="notice-title"><a href="#">Great School manag mene esom text of the
                                            printing.</a></h6>
                                    <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                </div>
                                <div class="notice-list">
                                    <div class="post-date bg-yellow">16 June, 2019</div>
                                    <h6 class="notice-title"><a href="#">Great School manag printing.</a></h6>
                                    <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                </div>
                                <div class="notice-list">
                                    <div class="post-date bg-pink">16 June, 2019</div>
                                    <h6 class="notice-title"><a href="#">Great School manag meneesom.</a></h6>
                                    <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Footer Area Start Here -->
                @include('frontend.inc.footer')
                 <!-- Footer Area End Here -->
            </div>
@endsection

