<!-- Sidebar Area Start Here -->
<div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
    <div class="mobile-sidebar-header d-md-none">
        <div class="header-logo">
            <a href="/home"><img src="img/logo1.png" alt="logo"></a>
        </div>
    </div>
    <div class="sidebar-menu-content">
        <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            @role('admin')
            <li class="nav-item">
                <!-- The dashboard loads acording to autheticated users but the default is the admin -->
                <a href="/" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Schools</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{route('students.index')}}" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Schools</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('students.create')}}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Add Schools</a>
                    </li>
                    <li class="nav-item">
                        <a href="/student-promotion" class="nav-link"><i
                                class="fas fa-angle-right"></i>Edit Schools</a>
                    </li>

                    <li class="nav-item">
                        <a href="/student-promotion" class="nav-link"><i
                                class="fas fa-angle-right"></i>Disable Schools</a>
                    </li>
                </ul>
            </li>
            @endrole
            @role('school')
            <li class="nav-item">
                <!-- The dashboard loads acording to autheticated users but the default is the admin -->
                <a href="/" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{route('students.index')}}" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Students</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('students.create')}}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Add Student</a>
                    </li>
                    <li class="nav-item">
                        <a href="/student-promotion" class="nav-link"><i
                                class="fas fa-angle-right"></i>Student Promotion</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i
                        class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="/all-teacher" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Teachers</a>
                    </li>
                    <li class="nav-item">
                        <a href="/teacher-details" class="nav-link"><i
                                class="fas fa-angle-right"></i>Teacher Details</a>
                    </li>
                    <li class="nav-item">
                        <a href="/teacher-add" class="nav-link"><i class="fas fa-angle-right"></i>Add
                            Teacher</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="/#" class="nav-link"><i class="flaticon-couple"></i><span>Parents</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="/all-parents" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Parents</a>
                    </li>
                    <li class="nav-item">
                        <a href="/parents-details" class="nav-link"><i
                                class="fas fa-angle-right"></i>Parents Details</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="/add-parents" class="nav-link"><i class="fas fa-angle-right"></i>Add
                            Parent</a>
                    </li> -->
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="/#" class="nav-link"><i class="flaticon-books"></i><span>Manage Library</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="/all-book" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Book</a>
                    </li>
                    <li class="nav-item">
                        <a href="/add-book" class="nav-link"><i class="fas fa-angle-right"></i>Add New
                            Book</a>
                    </li>
                </ul>
            </li>
            <!-- <li class="nav-item sidebar-nav-item">
                <a href="/#" class="nav-link"><i class="flaticon-technological"></i><span>Account</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="/all-fees" class="nav-link"><i class="fas fa-angle-right"></i>All Fees
                            Collection</a>
                    </li>
                    <li class="nav-item">
                        <a href="/all-expense" class="nav-link"><i
                                class="fas fa-angle-right"></i>Expenses</a>
                    </li>
                    <li class="nav-item">
                        <a href="/add-expense" class="nav-link"><i class="fas fa-angle-right"></i>Add
                            Expenses</a>
                    </li>
                </ul>
            </li> -->
            <li class="nav-item sidebar-nav-item">
                <a href="/#" class="nav-link"><i
                        class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Class</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="/all-class" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Classes</a>
                    </li>
                    <li class="nav-item">
                        <a href="/add-class" class="nav-link"><i class="fas fa-angle-right"></i>Add New
                            Class</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="/all-subject" class="nav-link"><i
                        class="flaticon-open-book"></i><span>Subject</span></a>
            </li>
            <li class="nav-item">
                <a href="/class-routine" class="nav-link"><i class="flaticon-calendar"></i><span>Time
                                    Table</span></a>
            </li>
            <li class="nav-item">
                <!-- <a href="/student-attendence" class="nav-link"><i
                        class="flaticon-checklist"></i><span>Attendence</span></a>
            </li> -->
            <li class="nav-item">
                <a href="/map" class="nav-link"><i
                        class="flaticon-menu-1"></i><span>Syllabus</span></a>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="/#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Exam</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="/exam-schedule" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                            Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a href="/exam-grade" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                            Grades</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="/notice-board" class="nav-link"><i
                        class="flaticon-script"></i><span>Notice</span></a>
            </li>
            <li class="nav-item">
                <a href="/messaging" class="nav-link"><i
                        class="flaticon-chat"></i><span>Messeage</span></a>
            </li>
            <li class="nav-item">
                <a href="/map" class="nav-link"><i
                        class="flaticon-planet-earth"></i><span>Map</span></a>
            </li>
            <li class="nav-item">
                <a href="/account-settings" class="nav-link"><i
                        class="flaticon-settings"></i><span>Account</span></a>
            </li>
            @endrole
            @role('student')
            <li class="nav-item">
                <!-- The dashboard loads acording to autheticated users but the default is the admin -->
                <a href="/" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{route('students.index')}}" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Students</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('students.create')}}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Add Student</a>
                    </li>
                    <li class="nav-item">
                        <a href="/student-promotion" class="nav-link"><i
                                class="fas fa-angle-right"></i>Student Promotion</a>
                    </li>
                </ul>
            </li>
            @endrole
        </ul>
    </div>
</div>
<!-- Sidebar Area End Here -->