<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="{{url('employee/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{url('employee/assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES -->
    <link href="{{url('employee/assets/css/bootstrap-fileupload.min.css')}}" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="{{url('employee/assets/css/basic.css')}}" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{url('employee/assets/css/custom.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">COMPANY NAME</a>
            </div>

            <div class="header-right">

                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i
                        class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i
                        class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i
                        class="fa fa-exclamation-circle fa-2x"></i></a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>

                        @if(session()->get('userid'))
                        <div class="user-img-div">
                            <img src="{{url('employee/assets/img/user.png')}}" class="img-thumbnail" />

                            <div class="inner-text">
                                {{session('name')}}
                                <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>
                        @else
                        <div class="user-img-div">
                            <img src="{{url('employee/assets/img/user.png')}}" class="img-thumbnail" />

                            <div class="inner-text">
                                john 
                                <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>
                        @endif

                    </li>


                    <li>
                        <a href="{{url('/index')}}"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>UI Elements <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('/panel-tabs')}}"><i class="fa fa-toggle-on"></i>Tabs & Panels</a>
                            </li>
                            <li>
                                <a href="{{url('/notification')}}"><i class="fa fa-bell "></i>Notifications</a>
                            </li>
                            <li>
                                <a href="{{url('/progress')}}"><i class="fa fa-circle-o "></i>Progressbars</a>
                            </li>
                            <li>
                                <a href="{{url('/buttons')}}"><i class="fa fa-code "></i>Buttons</a>
                            </li>
                            <li>
                                <a href="{{url('/icons')}}"><i class="fa fa-bug "></i>Icons</a>
                            </li>
                            <li>
                                <a href="{{url('/wizard')}}"><i class="fa fa-bug "></i>Wizard</a>
                            </li>
                            <li>
                                <a href="{{url('/typography')}}"><i class="fa fa-edit "></i>Typography</a>
                            </li>
                            <li>
                                <a href="{{url('/grid')}}"><i class="fa fa-eyedropper "></i>Grid</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>Extra Pages <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('/invoice')}}"><i class="fa fa-coffee"></i>Invoice</a>
                            </li>
                            <li>
                                <a href="{{url('/pricing')}}"><i class="fa fa-flash "></i>Pricing</a>
                            </li>
                            <li>
                                <a href="{{url('/component')}}"><i class="fa fa-key "></i>Components</a>
                            </li>
                            <li>
                                <a href="{{url('/social')}}"><i class="fa fa-send "></i>Social</a>
                            </li>

                            <li>
                                <a href="{{url('/message-task')}}"><i class="fa fa-recycle "></i>Messages & Tasks</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/table')}}"><i class="fa fa-flash "></i>Data Tables </a>

                    </li>
                    <li>
                        <a class="active-menu-top" href="#"><i class="fa fa-bicycle "></i>Forms <span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse in">

                            <li>
                                <a href="{{url('/form')}}"><i class="fa fa-desktop "></i>Basic </a>
                            </li>
                            <li>
                                <a class="active-menu" href="{{url('/form-advance')}}"><i
                                        class="fa fa-code "></i>Advance</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/gallery')}}"><i class="fa fa-anchor "></i>Gallery</a>
                    </li>
                    <li>
                        <a href="{{url('/error')}}"><i class="fa fa-bug "></i>Error Page</a>
                    </li>
                    <li>
                        <a href="{{url('/login')}}"><i class="fa fa-sign-in "></i>Login Page</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Multilevel Link <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-bicycle "></i>Second Level Link</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-flask "></i>Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#"><i class="fa fa-plus "></i>Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments-o "></i>Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{url('/blank')}}"><i class="fa fa-square-o "></i>Blank Page</a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->