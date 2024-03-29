<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <ul class="breadcrumb breadcrumb-col-pink">
            <li><a href="index.html"><i class="material-icons">home</i> Home</a></li>
            <li class="active"><i class="material-icons">dashboard</i> Admin</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->

    <!-- Dashboard summery Start Here -->
    <div class="row gutters-20">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-green ">
                            <i class="flaticon-classmates text-green"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Students</div>
                            <div class="item-number"><span class="counter" data-num="150000">1,50,000</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-blue">
                            <i class="flaticon-multiple-users-silhouette text-blue"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Teachers</div>
                            <div class="item-number"><span class="counter" data-num="2250">2,250</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-yellow">
                            <i class="flaticon-couple text-orange"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Parents</div>
                            <div class="item-number"><span class="counter" data-num="5690">5,690</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-red">
                            <i class="flaticon-books text-red"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Library</div>
                            <div class="item-number"><span class="counter" data-num="193000">1,93,000</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gutters-20">
        <div>
            <div class="dashboard-summery mg-b-20">
                <div class="panel-body">

                    <h3 class="tainer">  Welcome {{ auth()->user()->username}}</h3>
                    <p class="typewrite" data-period="2000" data-type='[ "Your presence and cooperation will help us to improve the education system of our organization.",
                        "Education is not to reform students or amuse them or to make them experts technicians.",
                        "It is to unsettle their minds, widen their horizons, inflame their intellects, teach them to think straight, if possible." ]'>
                    <span class="wrap"></span> 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard summery End Here -->
