@extends('frontend.layouts.app')

@section('content')
<div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <ul class="breadcrumb breadcrumb-col-pink">
                        <li><a href="index.html"><i class="material-icons">home</i> Home</a></li>
                        <li class="active"><i class="material-icons">notifications_active</i>Mailbox</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->

                <!--Main container start -->
                    <main class="ttr-wrapper">
                        <div class="">	
                            <div class="row">
                                <!-- Your Profile Views Chart -->
                                <div class="col-lg-12 mg-b-30">
                                    <div class="widget-box">
                                        <div class="email-wrapper">
                                             <!-- email menu-bar Start Here -->
                                            @include('frontend.inc.email-menu-bar')
                                            <!-- email menu bar End Here -->
                                            <div class="mail-list-container">
                                                <div class="mail-toolbar">
                                                    <div class="check-all">
                                                        <div class="custom-control custom-checkbox checkbox-st1">
                                                            <input type="checkbox" class="custom-control-input" id="check1">
                                                            <label class="custom-control-label" for="check1"></label>
                                                        </div>
                                                    </div>
                                                    <div class="mail-search-bar">
                                                        <input type="text" class="form-control" placeholder="Search"/>
                                                    </div>
                                                        <div class="dropdown all-msg-toolbar">
                                                        <span class="btn btn-info-icon fw-btn-fill btn-gradient-yellow" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></span>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#"><i class="far fa-trash-alt"></i> Delete</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-down"></i> Archive</a></li>
                                                            <li><a href="#"><i class="far fa-clock"></i> Snooze</a></li>
                                                            <li><a href="#"><i class="fa fa-envelope-open"></i> Mark as unread</a></li>
                                                        </ul>
                                                    </div> 
                                                    <div class="next-prev-btn">
                                                        <a href="#"><i class="fa fa-angle-left"></i></a>
                                                        <a href="#"><i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="mail-box-list">
                                                    <div class="mail-list-info">
                                                        <div class="checkbox-list">
                                                            <div class="custom-control custom-checkbox checkbox-st1">
                                                                <input type="checkbox" class="custom-control-input" id="check2">
                                                                <label class="custom-control-label" for="check2"></label>
                                                            </div>
                                                        </div>
                                                        <div class="mail-rateing">
                                                            <span><i class="far fa-star"></i></span>
                                                        </div>
                                                        <div class="mail-list-title">
                                                            <h6>David Moore</h6>
                                                        </div>
                                                        <div class="mail-list-title-info">
                                                            <p>Change the password for your Micr</p>
                                                        </div>
                                                        <div class="mail-list-time">
                                                            <span>10:59 AM</span>
                                                        </div>
                                                        <ul class="mailbox-toolbar">
                                                            <li data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></li>
                                                            <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
                                                            <li data-toggle="tooltip" title="Snooze"><i class="far fa-clock"></i></li>
                                                            <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mail-list-info">
                                                        <div class="checkbox-list">
                                                            <div class="custom-control custom-checkbox checkbox-st1">
                                                                <input type="checkbox" class="custom-control-input" id="check3">
                                                                <label class="custom-control-label" for="check3"></label>
                                                            </div>
                                                        </div>
                                                        <div class="mail-rateing">
                                                            <span><i class="far fa-star"></i></span>
                                                        </div>
                                                        <div class="mail-list-title">
                                                            <h6>David Moore</h6>
                                                        </div>
                                                        <div class="mail-list-title-info">
                                                            <p>Change the password for your Micr</p>
                                                        </div>
                                                        <div class="mail-list-time">
                                                            <span>10:59 AM</span>
                                                        </div>
                                                        <ul class="mailbox-toolbar">
                                                            <li data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></li>
                                                            <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
                                                            <li data-toggle="tooltip" title="Snooze"><i class="far fa-clock"></i></li>
                                                            <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mail-list-info">
                                                        <div class="checkbox-list">
                                                            <div class="custom-control custom-checkbox checkbox-st1">
                                                                <input type="checkbox" class="custom-control-input" id="check4">
                                                                <label class="custom-control-label" for="check4"></label>
                                                            </div>
                                                        </div>
                                                        <div class="mail-rateing">
                                                            <span><i class="far fa-star"></i></span>
                                                        </div>
                                                        <div class="mail-list-title">
                                                            <h6>David Moore</h6>
                                                        </div>
                                                        <div class="mail-list-title-info">
                                                            <p>Change the password for your Micr</p>
                                                        </div>
                                                        <div class="mail-list-time">
                                                            <span>10:59 AM</span>
                                                        </div>
                                                        <ul class="mailbox-toolbar">
                                                            <li data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></li>
                                                            <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
                                                            <li data-toggle="tooltip" title="Snooze"><i class="far fa-clock"></i></li>
                                                            <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mail-list-info">
                                                        <div class="checkbox-list">
                                                            <div class="custom-control custom-checkbox checkbox-st1">
                                                                <input type="checkbox" class="custom-control-input" id="check5">
                                                                <label class="custom-control-label" for="check5"></label>
                                                            </div>
                                                        </div>
                                                        <div class="mail-rateing">
                                                            <span><i class="far fa-star"></i></span>
                                                        </div>
                                                        <div class="mail-list-title">
                                                            <h6>David Moore</h6>
                                                        </div>
                                                        <div class="mail-list-title-info">
                                                            <p>Change the password for your Micr</p>
                                                        </div>
                                                        <div class="mail-list-time">
                                                            <span>10:59 AM</span>
                                                        </div>
                                                        <ul class="mailbox-toolbar">
                                                            <li data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></li>
                                                            <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
                                                            <li data-toggle="tooltip" title="Snooze"><i class="far fa-clock"></i></li>
                                                            <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mail-list-info">
                                                        <div class="checkbox-list">
                                                            <div class="custom-control custom-checkbox checkbox-st1">
                                                                <input type="checkbox" class="custom-control-input" id="check6">
                                                                <label class="custom-control-label" for="check6"></label>
                                                            </div>
                                                        </div>
                                                        <div class="mail-rateing">
                                                            <span><i class="far fa-star"></i></span>
                                                        </div>
                                                        <div class="mail-list-title">
                                                            <h6>David Moore</h6>
                                                        </div>
                                                        <div class="mail-list-title-info">
                                                            <p>Change the password for your Micr</p>
                                                        </div>
                                                        <div class="mail-list-time">
                                                            <span>10:59 AM</span>
                                                        </div>
                                                        <ul class="mailbox-toolbar">
                                                            <li data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></li>
                                                            <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
                                                            <li data-toggle="tooltip" title="Snooze"><i class="far fa-clock"></i></li>
                                                            <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mail-list-info">
                                                        <div class="checkbox-list">
                                                            <div class="custom-control custom-checkbox checkbox-st1">
                                                                <input type="checkbox" class="custom-control-input" id="check7">
                                                                <label class="custom-control-label" for="check7"></label>
                                                            </div>
                                                        </div>
                                                        <div class="mail-rateing">
                                                            <span><i class="far fa-star"></i></span>
                                                        </div>
                                                        <div class="mail-list-title">
                                                            <h6>David Moore</h6>
                                                        </div>
                                                        <div class="mail-list-title-info">
                                                            <p>Change the password for your Micr</p>
                                                        </div>
                                                        <div class="mail-list-time">
                                                            <span>10:59 AM</span>
                                                        </div>
                                                        <ul class="mailbox-toolbar">
                                                            <li data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></li>
                                                            <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
                                                            <li data-toggle="tooltip" title="Snooze"><i class="far fa-clock"></i></li>
                                                            <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mail-list-info">
                                                        <div class="checkbox-list">
                                                            <div class="custom-control custom-checkbox checkbox-st1">
                                                                <input type="checkbox" class="custom-control-input" id="check8">
                                                                <label class="custom-control-label" for="check8"></label>
                                                            </div>
                                                        </div>
                                                        <div class="mail-rateing">
                                                            <span><i class="far fa-star"></i></span>
                                                        </div>
                                                        <div class="mail-list-title">
                                                            <h6>David Moore</h6>
                                                        </div>
                                                        <div class="mail-list-title-info">
                                                            <p>Change the password for your Micr</p>
                                                        </div>
                                                        <div class="mail-list-time">
                                                            <span>10:59 AM</span>
                                                        </div>
                                                        <ul class="mailbox-toolbar">
                                                            <li data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></li>
                                                            <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
                                                            <li data-toggle="tooltip" title="Snooze"><i class="far fa-clock"></i></li>
                                                            <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mail-list-info">
                                                        <div class="checkbox-list">
                                                            <div class="custom-control custom-checkbox checkbox-st1">
                                                                <input type="checkbox" class="custom-control-input" id="check9">
                                                                <label class="custom-control-label" for="check9"></label>
                                                            </div>
                                                        </div>
                                                        <div class="mail-rateing">
                                                            <span><i class="far fa-star"></i></span>
                                                        </div>
                                                        <div class="mail-list-title">
                                                            <h6>David Moore</h6>
                                                        </div>
                                                        <div class="mail-list-title-info">
                                                            <p>Change the password for your Micr</p>
                                                        </div>
                                                        <div class="mail-list-time">
                                                            <span>10:59 AM</span>
                                                        </div>
                                                        <ul class="mailbox-toolbar">
                                                            <li data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></li>
                                                            <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
                                                            <li data-toggle="tooltip" title="Snooze"><i class="far fa-clock"></i></li>
                                                            <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mail-list-info">
                                                        <div class="checkbox-list">
                                                            <div class="custom-control custom-checkbox checkbox-st1">
                                                                <input type="checkbox" class="custom-control-input" id="check10">
                                                                <label class="custom-control-label" for="check10"></label>
                                                            </div>
                                                        </div>
                                                        <div class="mail-rateing">
                                                            <span><i class="far fa-star"></i></span>
                                                        </div>
                                                        <div class="mail-list-title">
                                                            <h6>David Moore</h6>
                                                        </div>
                                                        <div class="mail-list-title-info">
                                                            <p>Change the password for your Micr</p>
                                                        </div>
                                                        <div class="mail-list-time">
                                                            <span>10:59 AM</span>
                                                        </div>
                                                        <ul class="mailbox-toolbar">
                                                            <li data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></li>
                                                            <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
                                                            <li data-toggle="tooltip" title="Snooze"><i class="far fa-clock"></i></li>
                                                            <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mail-list-info">
                                                        <div class="checkbox-list">
                                                            <div class="custom-control custom-checkbox checkbox-st1">
                                                                <input type="checkbox" class="custom-control-input" id="check11">
                                                                <label class="custom-control-label" for="check11"></label>
                                                            </div>
                                                        </div>
                                                        <div class="mail-rateing">
                                                            <span><i class="far fa-star"></i></span>
                                                        </div>
                                                        <div class="mail-list-title">
                                                            <h6>David Moore</h6>
                                                        </div>
                                                        <div class="mail-list-title-info">
                                                            <p>Change the password for your Micr</p>
                                                        </div>
                                                        <div class="mail-list-time">
                                                            <span>10:59 AM</span>
                                                        </div>
                                                        <ul class="mailbox-toolbar">
                                                            <li data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></li>
                                                            <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
                                                            <li data-toggle="tooltip" title="Snooze"><i class="far fa-clock"></i></li>
                                                            <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mail-list-info">
                                                        <div class="checkbox-list">
                                                            <div class="custom-control custom-checkbox checkbox-st1">
                                                                <input type="checkbox" class="custom-control-input" id="check12">
                                                                <label class="custom-control-label" for="check12"></label>
                                                            </div>
                                                        </div>
                                                        <div class="mail-rateing">
                                                            <span><i class="far fa-star"></i></span>
                                                        </div>
                                                        <div class="mail-list-title">
                                                            <h6>David Moore</h6>
                                                        </div>
                                                        <div class="mail-list-title-info">
                                                            <p>Change the password for your Micr</p>
                                                        </div>
                                                        <div class="mail-list-time">
                                                            <span>10:59 AM</span>
                                                        </div>
                                                        <ul class="mailbox-toolbar">
                                                            <li data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></li>
                                                            <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
                                                            <li data-toggle="tooltip" title="Snooze"><i class="far fa-clock"></i></li>
                                                            <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mail-list-info">
                                                        <div class="checkbox-list">
                                                            <div class="custom-control custom-checkbox checkbox-st1">
                                                                <input type="checkbox" class="custom-control-input" id="check13">
                                                                <label class="custom-control-label" for="check13"></label>
                                                            </div>
                                                        </div>
                                                        <div class="mail-rateing">
                                                            <span><i class="far fa-star"></i></span>
                                                        </div>
                                                        <div class="mail-list-title">
                                                            <h6>David Moore</h6>
                                                        </div>
                                                        <div class="mail-list-title-info">
                                                            <p>Change the password for your Micr</p>
                                                        </div>
                                                        <div class="mail-list-time">
                                                            <span>10:59 AM</span>
                                                        </div>
                                                        <ul class="mailbox-toolbar">
                                                            <li data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></li>
                                                            <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
                                                            <li data-toggle="tooltip" title="Snooze"><i class="far fa-clock"></i></li>
                                                            <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mail-list-info">
                                                        <div class="checkbox-list">
                                                            <div class="custom-control custom-checkbox checkbox-st1">
                                                                <input type="checkbox" class="custom-control-input" id="check14">
                                                                <label class="custom-control-label" for="check14"></label>
                                                            </div>
                                                        </div>
                                                        <div class="mail-rateing">
                                                            <span><i class="far fa-star"></i></span>
                                                        </div>
                                                        <div class="mail-list-title">
                                                            <h6>David Moore</h6>
                                                        </div>
                                                        <div class="mail-list-title-info">
                                                            <p>Change the password for your Micr</p>
                                                        </div>
                                                        <div class="mail-list-time">
                                                            <span>10:59 AM</span>
                                                        </div>
                                                        <ul class="mailbox-toolbar">
                                                            <li data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></li>
                                                            <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
                                                            <li data-toggle="tooltip" title="Snooze"><i class="far fa-clock"></i></li>
                                                            <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mail-list-info">
                                                        <div class="checkbox-list">
                                                            <div class="custom-control custom-checkbox checkbox-st1">
                                                                <input type="checkbox" class="custom-control-input" id="check15">
                                                                <label class="custom-control-label" for="check15"></label>
                                                            </div>
                                                        </div>
                                                        <div class="mail-rateing">
                                                            <span><i class="far fa-star"></i></span>
                                                        </div>
                                                        <div class="mail-list-title">
                                                            <h6>David Moore</h6>
                                                        </div>
                                                        <div class="mail-list-title-info">
                                                            <p>Change the password for your Micr</p>
                                                        </div>
                                                        <div class="mail-list-time">
                                                            <span>10:59 AM</span>
                                                        </div>
                                                        <ul class="mailbox-toolbar">
                                                            <li data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></li>
                                                            <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
                                                            <li data-toggle="tooltip" title="Snooze"><i class="far fa-clock"></i></li>
                                                            <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mail-list-info">
                                                        <div class="checkbox-list">
                                                            <div class="custom-control custom-checkbox checkbox-st1">
                                                                <input type="checkbox" class="custom-control-input" id="check16">
                                                                <label class="custom-control-label" for="check16"></label>
                                                            </div>
                                                        </div>
                                                        <div class="mail-rateing">
                                                            <span><i class="far fa-star"></i></span>
                                                        </div>
                                                        <div class="mail-list-title">
                                                            <h6>David Moore</h6>
                                                        </div>
                                                        <div class="mail-list-title-info">
                                                            <p>Change the password for your Micr</p>
                                                        </div>
                                                        <div class="mail-list-time">
                                                            <span>10:59 AM</span>
                                                        </div>
                                                        <ul class="mailbox-toolbar">
                                                            <li data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></li>
                                                            <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
                                                            <li data-toggle="tooltip" title="Snooze"><i class="far fa-clock"></i></li>
                                                            <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mail-list-info">
                                                        <div class="checkbox-list">
                                                            <div class="custom-control custom-checkbox checkbox-st1">
                                                                <input type="checkbox" class="custom-control-input" id="check17">
                                                                <label class="custom-control-label" for="check17"></label>
                                                            </div>
                                                        </div>
                                                        <div class="mail-rateing">
                                                            <span><i class="far fa-star"></i></span>
                                                        </div>
                                                        <div class="mail-list-title">
                                                            <h6>David Moore</h6>
                                                        </div>
                                                        <div class="mail-list-title-info">
                                                            <p>Change the password for your Micr</p>
                                                        </div>
                                                        <div class="mail-list-time">
                                                            <span>10:59 AM</span>
                                                        </div>
                                                        <ul class="mailbox-toolbar">
                                                            <li data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></li>
                                                            <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
                                                            <li data-toggle="tooltip" title="Snooze"><i class="far fa-clock"></i></li>
                                                            <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mail-list-info">
                                                        <div class="checkbox-list">
                                                            <div class="custom-control custom-checkbox checkbox-st1">
                                                                <input type="checkbox" class="custom-control-input" id="check18">
                                                                <label class="custom-control-label" for="check18"></label>
                                                            </div>
                                                        </div>
                                                        <div class="mail-rateing">
                                                            <span><i class="far fa-star"></i></span>
                                                        </div>
                                                        <div class="mail-list-title">
                                                            <h6>David Moore</h6>
                                                        </div>
                                                        <div class="mail-list-title-info">
                                                            <p>Change the password for your Micr</p>
                                                        </div>
                                                        <div class="mail-list-time">
                                                            <span>10:59 AM</span>
                                                        </div>
                                                        <ul class="mailbox-toolbar">
                                                            <li data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></li>
                                                            <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
                                                            <li data-toggle="tooltip" title="Snooze"><i class="far fa-clock"></i></li>
                                                            <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mail-list-info">
                                                        <div class="checkbox-list">
                                                            <div class="custom-control custom-checkbox checkbox-st1">
                                                                <input type="checkbox" class="custom-control-input" id="check19">
                                                                <label class="custom-control-label" for="check19"></label>
                                                            </div>
                                                        </div>
                                                        <div class="mail-rateing">
                                                            <span><i class="far fa-star"></i></span>
                                                        </div>
                                                        <div class="mail-list-title">
                                                            <h6>David Moore</h6>
                                                        </div>
                                                        <div class="mail-list-title-info">
                                                            <p>Change the password for your Micr</p>
                                                        </div>
                                                        <div class="mail-list-time">
                                                            <span>10:59 AM</span>
                                                        </div>
                                                        <ul class="mailbox-toolbar">
                                                            <li data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></li>
                                                            <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
                                                            <li data-toggle="tooltip" title="Snooze"><i class="far fa-clock"></i></li>
                                                            <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
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