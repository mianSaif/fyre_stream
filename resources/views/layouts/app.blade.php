<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="version" content="2.9">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fyre Stream</title>
    <link rel="shortcut icon" href="{{asset('assets/img/icons/Fyre01.svg')}}"/>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <link rel="stylesheet" type='text/css' href="{{asset('assets/css/style.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/css/all.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fyrestream.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fix.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/timeline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom-style.scss')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/reaction/style.css')}}" />
    <!-- Css for reaction system -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/reaction/reaction.css')}}" />

{{--    <script type="text/javascript" src="js/jquery.min.js"></script>--}}
    <!-- jQuery for Reaction system -->
    <script type="text/javascript" src="{{asset('assets/js/reaction/reaction.js')}}"></script>
    <style>
        .post-left.post-left-only.d-none.d-sm-block.position-fixed {
            /*left: 20px;*/
        }

        .left-menu ul.two li:nth-child(1) a, .right-menu ul.two li:nth-child(1) a {
            background-color: transparent !important;
        }

        .default-moment-box {
            background-image: url("http://fyrestream.com//content/themes/default/images/Moments.png");
            background-size: contain;
        }

        #postInput:focus {
            border-color: inherit;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        /* ::-webkit-input-placeholder {
  white-space:pre-line;
  position:relative;
  top:-7px;

}
::-moz-placeholder {
     white-space:pre-line;
  position:relative;
  top:-7px;
}
:-ms-input-placeholder {
    white-space:pre-line;
  position:relative;
  top:-7px;
}
:-moz-placeholder {
     white-space:pre-line;
  position:relative;
  top:-7px;
} */
    </style>





    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->



    <!-- Scripts -->
{{--    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->--}}

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
{{--    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->--}}

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <!-- Emotion Smileys -->
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/faceMocion.css') }}" rel="stylesheet" type="text/css" />
    <script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
    <script src="{{ asset('assets/js/faceMocion.js') }}"></script>

</head>
<body class="bg-light">
    <header class="sticky-top" id="top">
        <div class="header-top">
            <div class="  container-fluid ">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand p-0" href="http://fyrestream.com/">
                        <img src="http://fyrestream.com//content/themes/default/frontend/images/Fyre 01.svg" alt="brand-logo">
                        <img src="http://fyrestream.com//content/themes/default/frontend/images/Fyre 02.svg" class="nav-logo-text" alt="brand-logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">

                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="form-inline mx-auto mt-2 mt-sm-0 position-relative header-top-searchbar">
                            <input id="search-input" autocomplete="off" class="form-control ml-sm-2 rounded-pill shadow-none bg-white w-100" type="text"
                            placeholder="Search" aria-label="Search">
                            <button class="btn shadow-none my-2 my-sm-0 position-absolute" type="submit">
                                <i class="fa text-danger fa-search"></i>
                            </button>
                            <div id="search-results" class="dropdown-menu dropdown-widget dropdown-search js_dropdown-keepopen">
                                <div class="dropdown-widget-header">
                                    <span class="title">Search Results</span>
                                    <span style="float: right;    cursor: pointer;" id="closedSearchBtn">
                                        <i class="fa fa-times-circle"></i>
                                    </span>
                                </div>
                                <div class="dropdown-widget-body">
                                    <div class="loader loader_small ptb10"></div>
                                </div>
                                <a class="dropdown-widget-footer" id="search-results-all" href="http://fyrestream.com//search/">See All Results</a>
                            </div>
                        </form>
                        <ul class="navbar-nav flex-row justify-content-around my-3 my-lg-0 notification-icons" style="margin: 0px !important; transform: translate(-30px)">
                            <li class="nav-item dropdown mr-2">
                                <a class="nav-link dropdown-toggle" href="#">
                                    <img src="http://fyrestream.com//content/themes/default/frontend/img/all_red_flash_black-02.png">
                                </a>
                            </li>
                            <li class="nav-item dropdown mr-3 ml-4">
                                <li class="nav-item dropdown mx-1 headerTooltip">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownFriendReq" role="button" aria-haspopup="true" aria-expanded="false">
                                        <img src="http://fyrestream.com//content/themes/default/frontend/img/Friends-top.png" class="top-notification-pic" alt="">
                                        <img src="http://fyrestream.com//content/themes/default/frontend/images/Friends-Dark.png" class="top-notification-pic-hover" alt="">
                                        <div class="tooltip">Friend Requests</div>
                                    </a>
                                    <div class="dropdown-menu py-0 rounded border-0 position-absolute" aria-labelledby="navbarDropdown" id="dropDownequestShow">
                                        <div class="dropdown-menu-head rounded-top p-2 text-white d-flex align-items-center position-relative">Follower Requests</div>
                                        <p class="text-center text-muted mt10">
                                            <div class="text-center">
                                                <img src="http://fyrestream.com//content/themes/default/images/no_results.png" class="img-resposive no-req-img" alt="">
                                            </div>
                                            <div class="text-center text-muted py-4 no-req-text">You do not have any requests</div>
                                        </p>
                                    </div>
                                </li>
                            </li>
                            <li class="nav-item dropdown mr-3 ml-4">
                                <li class="nav-item dropdown mx-1 headerTooltip">
                                    <a class="nav-link dropdown-toggle navbarDropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                        <div class="notify x-hidden">
                                            <span class="counter red shadow-sm ">
                                                0
                                                0
                                            </span>
                                        </div>
                                        <img src="http://fyrestream.com//content/themes/default/frontend/img/Notification-top.png" class="top-notification-pic" alt="">
                                        <img src="http://fyrestream.com//content/themes/default/frontend/images/Notification-Dark.png" class="top-notification-pic-hover" alt="">
                                        <div class="tooltip">Notifications</div>
                                    </a>
                                    <div class="dropdown-menu notify-dropdown-menu py-0 rounded border-0 position-absolute" aria-labelledby="navbarDropdown">
                                        <div class="dropdown-menu-head rounded-top p-2 text-white d-flex align-items-center position-relative">Notifications</div>
                                        <div class="dropdown-widget-body">
                                            <div class="js_scroller" style="height: unset !important;">
                                                <p class="text-center text-muted mt10">No notifications</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </li>
                            <li class="nav-item mr-3 ml-4">
                                <li class="nav-item dropdown js_live-messages headerTooltip">
                                    <a href="javascript:void(0);" style="padding: 0px ;" class="nav-link message-header-icon navbarDropdown" data-toggle="dropdown"
                                        id="navbarDropdownMessage" data-display="static">
                                        <img style="" src="http://fyrestream.com//content/themes/default/frontend/img/Mail_Icon_White_FS.png" class="top-notification-pic" alt="">
                                        <img style="" src="http://fyrestream.com//content/themes/default/frontend/img/Mail_Icon_White_FS.png" class="top-notification-pic-hover" alt="">
                                        <span class="customNotify shadow-sm counter blue shadow-sm x-hidden">0</span>
                                        <div class="tooltip">Messages</div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-widget with-arrow">
                                        <div class="dropdown-widget-header">
                                            <h4>Messages</h4>
                                        </div>
                                        <div class="dropdown-widget-body">
                                            <div class="js_scroller">
                                                <p class="text-center text-muted mt10">No new messages</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </li>
                        </ul>
                        <div class="profile-nav ml-auto">
                            <div class="btn-group">
                                <span type="button" style="color: black;" class=" dropdown-toggle font-weight-bolder" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{Auth::user()->first_name}}
                                    <img src="http://fyrestream.com//content/themes/default/images/blank_profile_male.jpg" style="width: 40px; height: 40px; border-radius: 50%;"
                                    alt="profile2" class="ml-2">
                                </span>

                                <div class="dropdown-menu dropdown-menu-right bg-black dropdownMenuCustom profile-dropdown">
                                    <div class="text-left pl10">
                                        <h4>{{Auth::user()->first_name}} </h4>
                                    </div>
                                    <div class="bg-white pt10">
                                        <a href="http://fyrestream.com//bismaat395">
                                            <button class="dropdown-item" type="button">
                                                <i class="fa fa-user"></i>
                                                My Profile
                                            </button>
                                        </a>
                                        <a href="http://fyrestream.com//settings">
                                            <button class="dropdown-item" type="button">
                                                <i class="fa fa-cog"></i>
                                                Setting and Privacy
                                            </button>
                                        </a>
                                        <a href="http://fyrestream.com//market">
                                            <button class="dropdown-item" type="button">
                                                <i class="fa fa-fire"></i>
                                                Trending Streams
                                            </button>
                                        </a>
                                        <a href="http://fyrestream.com//bismaat395/followers">
                                            <button class="dropdown-item" type="button">
                                                <i class="fa fa-users"></i>
                                                Followers
                                            </button>
                                        </a>
                                        <a href="http://fyrestream.com//bismaat395/followings">
                                            <button class="dropdown-item" type="button">
                                                <i class="fa fa-user-plus"></i>
                                                Following
                                            </button>
                                        </a>
                                        <a href="http://fyrestream.com//signout">
                                            <button class="dropdown-item" type="button">
                                                <i class="fa fa-sliders-h"></i> Log out
                                            </button>
                                        </a>

{{--                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">--}}
{{--                                            Logout--}}
{{--                                        </a>--}}
{{--                                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                            {{ csrf_field() }}--}}
{{--                                        </form>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-side-bars d-block d-sm-none">
                            <div class="categories">
                                <div class="categorie-list">
                                    <div class="vertical-side-head">
                                        <h2 class="my-2">Categories</h2>
                                    </div>
                                    <div class="categorie-items py-3">
                                        <a class="d-flex align-items-center" href="#">
                                            <div class="img-box">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/videos.png" class="real-img">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/videos-red.png" class="hover-img">
                                            </div>
                                            <p class="mb-0 ml-3">Videos</p>
                                        </a>
                                    </div>
                                    <div class="categorie-items py-3">
                                        <a class="d-flex align-items-center" href="#">
                                            <div class="img-box">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/market_classifieds.png" class="real-img">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/market_classifieds-red.png" class="hover-img">
                                            </div>
                                            <p class="mb-0 ml-3">Market Classifieds</p>
                                        </a>
                                    </div>
                                    <div class="categorie-items py-3">
                                        <a class="d-flex align-items-center" href="#">
                                            <div class="img-box">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/twitch_stream.png" class="real-img">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/twitch_stream-red.png" class="hover-img">
                                            </div>
                                            <p class="mb-0 ml-3">Twitch Stream</p>
                                        </a>
                                    </div>
                                    <div class="categorie-items py-3">
                                        <a class="d-flex align-items-center" href="#">
                                            <div class="img-box">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/live_stream.png" class="real-img">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/live_stream-red.png" class="hover-img">
                                            </div>
                                            <p class="mb-0 ml-3">Live Stream</p>
                                        </a>
                                    </div>
                                    <div class="categorie-items py-3">
                                        <a class="d-flex align-items-center" href="#">
                                            <div class="img-box">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/events.png" class="real-img">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/events-red.png" class="hover-img">
                                            </div>
                                            <p class="mb-0 ml-3">Events</p>
                                        </a>
                                    </div>
                                    <div class="categorie-items py-3">
                                        <a class="d-flex align-items-center" href="#">
                                            <div class="img-box">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/group_channels.png" class="real-img">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/group_channels-red.png" class="hover-img">
                                            </div>
                                            <p class="mb-0 ml-3">Group Channels</p>
                                        </a>
                                    </div>
                                    <div class="categorie-items py-3">
                                        <a class="d-flex align-items-center" href="#">
                                            <div class="img-box">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/discover_members.png" class="real-img">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/discover_members-red.png" class="hover-img">
                                            </div>
                                            <p class="mb-0 ml-3">Discover Members</p>
                                        </a>
                                    </div>
                                    <div class="categorie-items py-3">
                                        <a class="d-flex align-items-center" href="#">
                                            <div class="img-box">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/custom_themes.png" class="real-img">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/custom_themes-red.png" class="hover-img">
                                            </div>
                                            <p class="mb-0 ml-3">Custom Themes</p>
                                        </a>
                                    </div>
                                    <div class="categorie-items py-3">
                                        <a class="d-flex align-items-center" href="#">
                                            <div class="img-box">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/pro_services.png" class="real-img">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/pro_services-red.png" class="hover-img">
                                            </div>
                                            <p class="mb-0 ml-3">Pro Services</p>
                                        </a>
                                    </div>
                                    <div class="categorie-items py-3">
                                        <a class="d-flex align-items-center" href="#">
                                            <div class="img-box">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/Invite_new.png" class="real-img">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/Invite_new-red.png" class="hover-img">
                                            </div>
                                            <p class="mb-0 ml-3">Invite</p>
                                        </a>
                                    </div>
                                    <div class="categorie-items py-3">
                                        <a class="d-flex align-items-center" href="#">
                                            <div class="img-box">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/resources.png" class="real-img">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/resources-red.png" class="hover-img">
                                            </div>
                                            <p class="mb-0 ml-3">Resources</p>
                                        </a>
                                    </div>
                                    <div class="categorie-items py-3">
                                        <a class="d-flex align-items-center" href="#">
                                            <div class="img-box">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/saved.png" class="real-img">
                                                <img src="http://fyrestream.com//content/themes/default/frontend/images/saved-red.png" class="hover-img">
                                            </div>
                                            <p class="mb-0 ml-3">Saved</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="contacts">
                                <div class="vertical-side-head border-top">
                                    <h2 class="my-2">Contacts</h2>
                                </div>
                                <div class="contacts-items py-3">
                                    <a class="d-flex align-items-center active" href="#">
                                        <img src="http://fyrestream.com//content/themes/default/frontend/images/five.png" class="mr-1">
                                        <p class="mb-0 panel-text">
                                            <b>Katie Daviscourt</b>
                                        </p>
                                    </a>
                                </div>
                                <div class="contacts-items py-3">
                                    <a class="d-flex align-items-center active" href="#">
                                        <img src="http://fyrestream.com//content/themes/default/frontend/images/six.png" class="mr-1">
                                        <p class="mb-0 panel-text">
                                            <b>Katie Daviscourt</b>
                                        </p>
                                    </a>
                                </div>
                                <div class="contacts-items py-3">
                                    <a class="d-flex align-items-center active" href="#">
                                        <img src="http://fyrestream.com//content/themes/default/frontend/images/seven.png" class="mr-1">
                                        <p class="mb-0 panel-text">
                                            <b>Katie Daviscourt</b>
                                        </p>
                                    </a>
                                </div>
                                <div class="contacts-items py-3">
                                    <a class="d-flex align-items-center active" href="#">
                                        <img src="http://fyrestream.com//content/themes/default/frontend/images/eight.png" class="mr-1">
                                        <p class="mb-0 panel-text">
                                            <b>Katie Daviscourt</b>
                                        </p>
                                    </a>
                                </div>
                                <div class="contacts-items py-3">
                                    <a class="d-flex align-items-center active" href="#">
                                        <img src="http://fyrestream.com//content/themes/default/frontend/images/nine.png" class="mr-1">
                                        <p class="mb-0 panel-text">
                                            <b>Katie Daviscourt</b>
                                        </p>
                                    </a>
                                </div>
                                <div class="contacts-items py-3">
                                    <a class="d-flex align-items-center active" href="#">
                                        <img src="http://fyrestream.com//content/themes/default/frontend/images/ten.png" class="mr-1">
                                        <p class="mb-0 panel-text">
                                            <b>Katie Daviscourt</b>
                                        </p>
                                    </a>
                                </div>
                                <div class="contacts-items py-3">
                                    <a class="d-flex align-items-center active" href="#">
                                        <img src="http://fyrestream.com//content/themes/default/frontend/images/11.png" class="mr-1">
                                        <p class="mb-0 panel-text">
                                            <b>Katie Daviscourt</b>
                                        </p>
                                    </a>
                                </div>
                                <div class="contacts-items py-3">
                                    <a class="d-flex align-items-center active" href="#">
                                        <img src="http://fyrestream.com//content/themes/default/frontend/images/12.png" class="mr-1">
                                        <p class="mb-0 panel-text">
                                            <b>Katie Daviscourt</b>
                                        </p>
                                    </a>
                                </div>
                                <div class="contacts-items py-3 mb-5">
                                    <a class="d-flex align-items-center active" href="#">
                                        <img src="http://fyrestream.com//content/themes/default/frontend/images/13.png" class="mr-1">
                                        <p class="mb-0 panel-text">
                                            <b>Katie Daviscourt</b>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="header-bottom bg-white">
            <div class="container-fluid"></div>
        </div>
    </header>

    <div class="mt-4">
        @yield('content')
    </div>

    <br>
    <div class="modal status-modal fade" id="exampleModalMoments" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"
             style="max-width: 100%; width: 100%;height: 100%; margin: 0; padding: 0;">
            <div class="modal-content create-post-box create border-0"
                 style="padding: 0px; height: auto; min-height: 100%;border-radius: 0;">
                <style>
                    .displayNoneBtn {
                        display: none;
                    }
                </style>
                <div class="modal-body px-0" style="background: #1B1A1A; padding: 0rem !important;">
                    <div class="container-fluid">
                        <div class="row mb-2 pt-0 mt-0">
                            <div class="col-md-12 text-right pt-0">
                                <button style="color: white; padding: 0px; margin: 0px;" type="button"
                                        class="btn btn-common text-white rounded-pill" data-dismiss="modal"
                                        aria-label="Close"><span style="font-size: 40px; font-weight: bold; margin: 0px;"
                                                                 aria-hidden="true">&times;</span></button>
                            </div>
                        </div>
                        <div class="row">
                            <div style="background: #1B1A1A;" class="col-lg-9 col-md-9">
                                <div class="left-wrapper mainDivStory">
                                    <div class="owl-carousel owl-theme" id="moment-modal"></div>
                                </div>
                            </div>
                            <div style="background: #1B1A1A; border-left: 1px solid #0b2e13;"
                                 class="col-lg-3 col-md-3 col-sm-8">
                                <div class="right-wrapper text-white" style="height: 100%;overflow: hidden;">
                                    <div class="right-wrapper-head d-flex align-items-center justify-content-between p-3">
                                        <h3 class="mb-0">Moments</h3> <a href="#" class="font-weight-bold">
                                            Preferences
                                            <img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/double-arrow.png"
                                                alt="double-arrow" class="ml-1"> </a></div>
                                    <div id="addNewMoments" data-target="#exampleModal" data-toggle="modal"
                                         data-url="posts/story.php?do=create"
                                         class="d-flex align-items-center justify-content-between px-1 px-sm-2 py-3">
                                        <button type="button" class="btn btn-sm" style="background-color: #e4606d;"><i
                                                style="font-size: 25px; color:white;" class="fa fa-plus"></i></button>
                                        <div><h6 class="mb-0">Add Your Best Moments!</h6> <small style="font-size: 10px;">Shows
                                                48 hours of photos, videos, or words</small></div>
                                    </div>
                                    <div class="watch m-2 p-2 rounded" style="height: 100%; background: #1b1a1a;"><h6
                                            class="text-center">More Moments</h6>
                                        <div class="watch-height-wrapper overflow-auto"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
    <script src="http://fyrestream.com//includes/assets/js/plugins/owlcarousel/owl.carousel.min.js"></script>
    <script src="http://fyrestream.com//includes/assets/js/custom.js"></script>
    <script src="http://fyrestream.com//includes/assets/js/plugins/mustache/mustache.min.js"></script>
    <script src="http://fyrestream.com//includes/assets/js/plugins/jquery.form/jquery.form.min.js"></script>
    <script src="http://fyrestream.com//includes/assets/js/plugins/jquery.inview/jquery.inview.min.js"></script>
    <script src="http://fyrestream.com//includes/assets/js/plugins/autosize/autosize.min.js"></script>
    <script src="http://fyrestream.com//includes/assets/js/plugins/readmore/readmore.min.js"></script>
    <script src="http://fyrestream.com//includes/assets/js/plugins/moment/moment-with-locales.min.js"></script>
    <script src="https://unpkg.com/video.js@7.8.4/dist/video.min.js"></script>
    <script src="https://unpkg.com/videojs-contrib-hls@5.15.0/dist/videojs-contrib-hls.min.js"></script>
    <link href="https://unpkg.com/video.js@7.8.4/dist/video-js.min.css" rel="stylesheet">
    <script>var _tooltip = jQuery.fn.tooltip;</script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script>jQuery.fn.tooltip = _tooltip;</script>
    <script
        src="http://fyrestream.com//includes/assets/js/plugins/jquery-ui.triggeredAutocomplete/jquery-ui.triggeredAutocomplete.js"></script>
    <script src="http://fyrestream.com//includes/assets/js/plugins/sticky-sidebar/theia-sticky-sidebar.min.js"></script>
    <script src="http://fyrestream.com//includes/assets/js/plugins/noty/noty.min.js"></script>
    <link rel="stylesheet" type='text/css' href="http://fyrestream.com//includes/assets/js/plugins/noty/noty.css">
    <script
        src="http://fyrestream.com//includes/assets/js/plugins/jquery-ui.touch-punch/jquery-ui.touch-punch.min.js"></script>
    <script src="http://fyrestream.com//includes/assets/js/plugins/jquery.imagedrag/jquery.imagedrag.min.js"></script>
    <script src="http://fyrestream.com//includes/assets/js/plugins/rcrop/rcrop.min.js"></script>
    <link rel="stylesheet" type='text/css' href="http://fyrestream.com//includes/assets/js/plugins/rcrop/rcrop.min.css">
    <script src="http://fyrestream.com//includes/assets/js/plugins/recorder/recorder.js"></script>
    <script src="http://fyrestream.com//includes/assets/js/plugins/easytimer/easytimer.min.js"></script>
    <script src="http://fyrestream.com//includes/assets/js/sngine/core.js"></script>
    <script src="http://fyrestream.com//includes/assets/js/sngine/user.js"></script>
    <script src="http://fyrestream.com//includes/assets/js/sngine/post.js"></script>
    <script src="http://fyrestream.com//includes/assets/js/sngine/chat.js"></script>
    <script src="http://fyrestream.com//includes/assets/js/sngine/showads.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css"/>
    <script>window.addEventListener("load", function () {
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {"background": "#ff6961", "text": "#fff"},
                    "button": {"background": "#FF0101"// "background-image": "linear-gradient(#ff6961, #ffa500f7)"}},"theme": "edgeless","position": "bottom-left","content": {"message": __['This website uses cookies to ensure you get the best experience on our website'],"dismiss": __['Got It!'],"link": __['Learn More'],"href": site_path+"/static/privacy"}})});</script>
    <script>
        $(document).ready(function () {
            $(".follow-close-btn").click(function () {
                // var uuid=$(this).attr('data-uidRemove');
                // $("#friendRequestBox"+uuid).css('display','none');
                // $("#friendRequestBox"+uuid).remove();
                $(this).parent('.feeds-item').remove();
            });
            $(".chat-sidebar-content ul li ").hover(function () {
                $(this).find('.grey-icon').hide();
                $(this).find('.colorful-icon').show();
            }, function () {
                $(this).find('.grey-icon').show();
                $(this).find('.colorful-icon').hide();
            });
        });
    </script>
    <link rel="stylesheet" href="http://fyrestream.com//includes/assets/css/magnific-popup.css">
    <script src="http://fyrestream.com//includes/assets/js/plugins/plugins.js"></script>
    <script>
        $('#smilePublish').fadeOut();
        $('#arrowTop').fadeOut();
        $('.video-popup').magnificPopup({
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            zoom: {
                enabled: true,
            }
        });

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        $(document).scroll(function () {
            var y = $(this).scrollTop();
            if (y > 100) {
                $('#arrowTop').fadeIn();
                $('#smilePublish').fadeIn();
            } else {
                $('#arrowTop').fadeOut();
                $('#smilePublish').fadeOut();
            }
        });
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#postSection').addClass('scrollTopClass');
            } else {
                $('#postSection').removeClass('scrollTopClass');
            }
        });
    </script>
    <div id="modalMoments" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body" style="padding: 0rem;">
                    <div style="border-bottom: 0px;" class="modal-header bg-light"><h5 class="modal-title text-dark">
                            Share A New Moment
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                                class="fa fa-times-circle"></i></button>
                    </div>
                    <style>
                        .x-uploader input[type=file] {
                            width: 100%;
                            /*top: 45% !important;
                            min-height: 50% !important;*/
                        }
                    </style>
                    <form class="publisher-mini status-modal">
                        <div class="modal-content">
                            <div class="modal-body bg-white">
                                <div class="modal-body pt-0">
                                    <div class="form-group w-100 position-relative"><textarea name="message"
                                                                                              class="form-control w-100 h-80 shadow-none m-0"
                                                                                              style="padding: 20px 0 0 0px; background-color: rgb(231, 234, 239); text-align: center; border: 0px; border-radius: 50px"
                                                                                              placeholder="Enter Your Caption Here..."></textarea>
                                    </div>
                                    <div style="position: relative;"></div>
                                    <div class="row">
                                        <div class="col-md-12" style="position: relative;">
                                            <div class="attachments clearfix" data-type="photos">
                                                <div class="add" style="margin: 10px;"><i class="js_x-uploader"
                                                                                          data-type="photos"
                                                                                          data-handle="publisher-mini"
                                                                                          data-multiple="true"></i></div>
                                            </div>
                                            <div style="border: 3px dashed #9d9d9d; height: 150px;"
                                                 class="text-muted text-center font-weight-bold"><i
                                                    style="font-size: 70px; margin-top: 20px;"
                                                    class="fa fa-cloud-upload-alt"></i>
                                                <p>Drag and Drop Your Image/Video Here or <a style="color: #1f9cff;"
                                                                                             href="#"
                                                                                             class="link">Browse</a>
                                                    Photos/Videos</p></div>
                                        </div>
                                    </div>
                                    <br></div>
                                <div class="clearfix"></div>
                                <hr>
                                <br>
                                <div class="modal-footer align-items-center justify-content-center border-0 pt-0">
                                    <div>
                                        <div class="input-group"><select class="custom-select shadow-none">
                                                <option selected>Public Audience</option>
                                                <option value="1">Personal</option>
                                                <option value="2">Friends</option>
                                                <option value="3">Custom</option>
                                            </select></div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <button
                                            style="background-image: linear-gradient(0deg, #F6A41A, #D64C97); border: 0px; height: 38px;"
                                            class="btn-post d-inline-block text-white rounded js_publisher-btn js_publisher-story"
                                            data-dismiss="modal" aria-label="Close">Share This Moment
                                        </button>
                                    </div>
                                </div>
                                <div class="alert alert-danger mb0 x-hidden"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="uploadimageModal" class="modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload & Crop Image</h4></div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8 text-center">
                            <div id="image_demo" style="width:350px; margin-top:30px"></div>
                        </div>
                        <div class="col-md-4" style="padding-top:30px;"><br/> <br/> <br/>
                            <button class="btn btn-success crop_image">Crop & Upload Image</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="loader pt10 pb10"></div>
                </div>
            </div>
        </div>
    </div>
    <script id="modal-message" type="text/template">
        <div class="modal-header">
            <h6 class="modal-title">title}}</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>message}}</p>
        </div>
    </script>
    <script id="modal-login" type="text/template">
        <div class="modal-header">
            <h6 class="modal-title">Not Logged In</h6>
        </div>
        <div class="modal-body">
            <p>Please log in to continue</p>
        </div>
        <div class="modal-footer">
            <a class="btn btn-primary" href="http://fyrestream.com//signin">Login</a>
        </div>
    </script>
    <script id="modal-message" type="text/template">
        <div class="modal-header">
            <h6 class="modal-title">title}}</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>message}}</p>
        </div>
    </script>
    <script id="modal-success" type="text/template">
        <div class="modal-body text-center">
            <div class="big-icon success">
                <i class="fa fa-thumbs-up fa-3x"></i>
            </div>
            <h4>title}}</h4>
            <p class="mt20">message}}</p>
        </div>
    </script>
    <script id="modal-error" type="text/template">
        <div class="modal-body text-center">
            <div class="big-icon error">
                <i class="fa fa-times fa-3x"></i>
            </div>
            <h4>title}}</h4>
            <p class="mt20">message}}</p>
        </div>
    </script>
    <script id="modal-confirm" type="text/template">
        <div class="modal-header">
            <h6 class="modal-title">title}}</h6>
        </div>
        <div class="modal-body">
            <h6>message}}</h6>

            <div class="form-group mt20">
                <label class="form-control-label" for="modal-password-check">Confirm Password</label>
                <input id="modal-password-check" name="password_check" type="password" class="form-control">
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary" id="modal-confirm-ok">Confirm</button>
        </div>
    </script>
    <script id="modal-loading" type="text/template">
        <div class="modal-body text-center">
            <div class="spinner-border text-primary"></div>
        </div>
    </script>
    <script id="translator" type="text/template">
        <div class="modal-header">
            <h6 class="modal-title"><i class="fa fa-globe-americas mr5"></i>Select Your Language</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <ul>
                <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">
                    <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;"
                       href="?lang=en_us">
                        English
                        <div
                            style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">
                            <img width="50" src="http://fyrestream.com//content/uploads/flags/en_us.png">
                        </div>
                    </a>
                </li>
                <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">
                    <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;"
                       href="?lang=ar_sa">
                        Arabic
                        <div
                            style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">
                            <img width="50" src="http://fyrestream.com//content/uploads/flags/ar_sa.png">
                        </div>
                    </a>
                </li>
                <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">
                    <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;"
                       href="?lang=fr_fr">
                        French
                        <div
                            style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">
                            <img width="50" src="http://fyrestream.com//content/uploads/flags/fr_fr.png">
                        </div>
                    </a>
                </li>
                <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">
                    <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;"
                       href="?lang=es_es">
                        Spanish
                        <div
                            style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">
                            <img width="50" src="http://fyrestream.com//content/uploads/flags/es_es.png">
                        </div>
                    </a>
                </li>
                <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">
                    <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;"
                       href="?lang=pt_pt">
                        Portuguese
                        <div
                            style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">
                            <img width="50" src="http://fyrestream.com//content/uploads/flags/pt_pt.png">
                        </div>
                    </a>
                </li>
                <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">
                    <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;"
                       href="?lang=de_de">
                        Deutsch
                        <div
                            style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">
                            <img width="50" src="http://fyrestream.com//content/uploads/flags/de_de.png">
                        </div>
                    </a>
                </li>
                <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">
                    <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;"
                       href="?lang=tr_tr">
                        Turkish
                        <div
                            style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">
                            <img width="50" src="http://fyrestream.com//content/uploads/flags/tr_tr.png">
                        </div>
                    </a>
                </li>
                <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">
                    <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;"
                       href="?lang=nl_nl">
                        Dutch
                        <div
                            style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">
                            <img width="50" src="http://fyrestream.com//content/uploads/flags/nl_nl.png">
                        </div>
                    </a>
                </li>
                <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">
                    <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;"
                       href="?lang=it_it">
                        Italiano
                        <div
                            style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">
                            <img width="50" src="http://fyrestream.com//content/uploads/flags/it_it.png">
                        </div>
                    </a>
                </li>
                <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">
                    <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;"
                       href="?lang=ru_ru">
                        Russian
                        <div
                            style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">
                            <img width="50" src="http://fyrestream.com//content/uploads/flags/ru_ru.png">
                        </div>
                    </a>
                </li>
                <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">
                    <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;"
                       href="?lang=ro_ro">
                        Romaian
                        <div
                            style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">
                            <img width="50" src="http://fyrestream.com//content/uploads/flags/ro_ro.png">
                        </div>
                    </a>
                </li>
                <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">
                    <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;"
                       href="?lang=pt_br">
                        Portuguese (Brazil)
                        <div
                            style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">
                            <img width="50" src="http://fyrestream.com//content/uploads/flags/pt_br.png">
                        </div>
                    </a>
                </li>
                <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">
                    <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;"
                       href="?lang=el_gr">
                        Greek
                        <div
                            style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">
                            <img width="50" src="http://fyrestream.com//content/uploads/flags/el_gr.png">
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </script>
    <script id="search-for" type="text/template">
        <div class="ptb10 plr10">
            <a href="http://fyrestream.com//search/#hashtag}}hashtag//hashtag}}query}}">
                <i class="fa fa-search pr5"></i> Search for #hashtag}}#/hashtag}}query}}
            </a>
        </div>
    </script>
    <script id="lightbox" type="text/template">
        <div class="lightbox">
            <div class="container lightbox-container">
                <div class="lightbox-preview">
                    <div class="lightbox-next js_lightbox-slider">
                        <i class="fa fa-chevron-right fa-3x"></i>
                    </div>
                    <div class="lightbox-prev js_lightbox-slider">
                        <i class="fa fa-chevron-left fa-3x"></i>
                    </div>
                    <img alt="" class="img-fluid" src="image}}">
                </div>
                <div class="lightbox-data">
                    <div class="clearfix">
                        <div class="pt5 pr5 float-right">
                            <button type="button" class="close lightbox-close js_lightbox-close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="lightbox-post">
                        <div class="js_scroller" data-slimScroll-height="100%">
                            <div class="loader mtb10"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </script>
    <script id="lightbox-nodata" type="text/template">
        <div class="lightbox">
            <div class="container lightbox-container">
                <div class="lightbox-preview nodata">
                    <img alt="" class="img-fluid" src="image}}">
                </div>
            </div>
        </div>
    </script>
    <script id="lightbox-live" type="text/template">
        <div class="lightbox" data-live-post-id="post_id}}">
            <div class="container lightbox-container">
                <div class="lightbox-preview with-live">
                    <div class="live-stream-video" id="js_live-video">
                        <div class="live-counter" id="js_live-counter">
                            <span class="status offline" id=js_live-counter-status>Offline</span>
                            <span class="number">
                            <i class="fa fa-eye mr5"></i><strong id="js_live-counter-number">0</strong>
                        </span>
                        </div>

                        <div class="live-status" id="js_live-status">
                            Loading<span class="spinner-grow spinner-grow-sm ml10"></span>
                        </div>
                    </div>
                </div>
                <div class="lightbox-data">
                    <div class="clearfix">
                        <div class="pt5 pr5 float-right">
                            <button type="button" class="close lightbox-close js_lightbox-close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="lightbox-post">
                        <div class="js_scroller" data-slimScroll-height="100%">
                            <div class="loader mtb10"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </script>
    <script id="activation-email-reset" type="text/template">
        <div class="modal-header">
            <h6 class="modal-title">Change Email Address</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="js_ajax-forms" data-url="core/activation_email_reset.php">
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-control-label mb10">Current Email</label><br>
                    <span class="badge badge-lg badge-info">miansaif395@gmail.com</span>

                </div>
                <div class="form-group">
                    <label class="form-control-label" for="email">New Email</label>
                    <input name="email" id="email" type="email" class="form-control" required autofocus>
                </div>

                <div class="alert alert-danger mb0 mt10 x-hidden"></div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Continue</button>
            </div>
        </form>
    </script>
    <script id="activation-phone" type="text/template">
        <div class="modal-header">
            <h6 class="modal-title">Enter the code from the SMS message</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="js_ajax-forms" data-url="core/activation_phone_confirm.php">
            <div class="modal-body">
                <div class="mb20">
                    Let us know if this mobile number belongs to you. Enter the code in the SMS
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input name="token" type="text" class="form-control" placeholder="######" required autofocus>
                        </div>


                        <div class="alert alert-danger mb0 mt10 x-hidden"></div>

                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Continue</button>
            </div>
        </form>
    </script>
    <script id="activation-phone-reset" type="text/template">
        <div class="modal-header">
            <h6 class="modal-title">Change Phone Number</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="js_ajax-forms" data-url="core/activation_phone_reset.php">
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-control-label">New Phone</label>
                    <input name="phone" type="text" class="form-control" required autofocus>
                    <span class="form-text">
                        For example: +12344567890
                    </span>
                </div>

                <div class="alert alert-danger mb0 mt10 x-hidden"></div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Continue</button>
            </div>
        </form>
    </script>
    <script id="x-uploader" type="text/template">
        <form class="x-uploader" action="url" method="post" enctype="multipart/form-data"><input name="file[]" type="file"
                                                                                                 multiple="multiple"
                                                                                                 accept="accept}}"><input
                name="file" type="file" accept=""><input type="hidden" name="secret" value=""></form></script>
    <script id="noty-notification" type="text/template">
        <div class="data-container small">
            <div class="data-avatar">
                <img src="image">
            </div>
            <div class="data-content"></div>
        </div>
    </script>
    <script id="adblock-detector" type="text/template">
        <div class="adblock-detector">
            Our website is made possible by displaying online advertisements to our visitors<br>
            Please consider supporting us by disabling your ad blocker.
        </div>
    </script>
    <script id="keyboard-shortcuts" type="text/template">
        <div class="modal-header">
            <h6 class="modal-title"><i class="fa fa-keyboard mr5"></i>Keyboard Shortcuts</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body text-xlg">
            <div class="mb10">
                <kbd>J</kbd> Scroll to the next post
            </div>
            <div>
                <kbd>K</kbd> Scroll to the previous post
            </div>
        </div>
    </script>
    <script id="emoji-menu" type="text/template">
        <div class="emoji-menu">
            <div class="tab-content">
                <div class="tab-pane active" id="tab-emojis-id}}">
                    <div class="js_scroller" data-slimScroll-height="180">
                        <div class="item">
                            <i data-emoji=":)" class="js_emoji twa twa-2x twa-smile"></i>
                        </div>
                        <div class="item">
                            <i data-emoji="(&lt;" class="js_emoji twa twa-2x twa-joy"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":D" class="js_emoji twa twa-2x twa-smiley"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":(" class="js_emoji twa twa-2x twa-worried"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":relaxed:" class="js_emoji twa twa-2x twa-relaxed"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":P" class="js_emoji twa twa-2x twa-stuck-out-tongue"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":O" class="js_emoji twa twa-2x twa-open-mouth"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":/" class="js_emoji twa twa-2x twa-confused"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=";)" class="js_emoji twa twa-2x twa-wink"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=";(" class="js_emoji twa twa-2x twa-sob"></i>
                        </div>
                        <div class="item">
                            <i data-emoji="B|" class="js_emoji twa twa-2x twa-sunglasses"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":disappointed:" class="js_emoji twa twa-2x twa-disappointed"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":yum:" class="js_emoji twa twa-2x twa-yum"></i>
                        </div>
                        <div class="item">
                            <i data-emoji="^_^" class="js_emoji twa twa-2x twa-grin"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":no_mouth:" class="js_emoji twa twa-2x twa-no-mouth"></i>
                        </div>
                        <div class="item">
                            <i data-emoji="*_*" class="js_emoji twa twa-2x twa-heart-eyes"></i>
                        </div>
                        <div class="item">
                            <i data-emoji="*)" class="js_emoji twa twa-2x twa-kissing-heart"></i>
                        </div>
                        <div class="item">
                            <i data-emoji="O:)" class="js_emoji twa twa-2x twa-innocent"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":angry:" class="js_emoji twa twa-2x twa-angry"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":rage:" class="js_emoji twa twa-2x twa-rage"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":smirk:" class="js_emoji twa twa-2x twa-smirk"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":flushed:" class="js_emoji twa twa-2x twa-flushed"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":satisfied:" class="js_emoji twa twa-2x twa-satisfied"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":relieved:" class="js_emoji twa twa-2x twa-relieved"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":sleeping:" class="js_emoji twa twa-2x twa-sleeping"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":stuck_out_tongue:" class="js_emoji twa twa-2x twa-stuck-out-tongue"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":stuck_out_tongue_closed_eyes:"
                               class="js_emoji twa twa-2x twa-stuck-out-tongue-closed-eyes"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":frowning:" class="js_emoji twa twa-2x twa-frowning"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":anguished:" class="js_emoji twa twa-2x twa-anguished"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":open_mouth:" class="js_emoji twa twa-2x twa-open-mouth"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":grimacing:" class="js_emoji twa twa-2x twa-grimacing"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":hushed:" class="js_emoji twa twa-2x twa-hushed"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":expressionless:" class="js_emoji twa twa-2x twa-expressionless"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":unamused:" class="js_emoji twa twa-2x twa-unamused"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":sweat_smile:" class="js_emoji twa twa-2x twa-sweat-smile"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":sweat:" class="js_emoji twa twa-2x twa-sweat"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":confounded:" class="js_emoji twa twa-2x twa-confounded"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":weary:" class="js_emoji twa twa-2x twa-weary"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":pensive:" class="js_emoji twa twa-2x twa-pensive"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":fearful:" class="js_emoji twa twa-2x twa-fearful"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":cold_sweat:" class="js_emoji twa twa-2x twa-cold-sweat"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":persevere:" class="js_emoji twa twa-2x twa-persevere"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":cry:" class="js_emoji twa twa-2x twa-cry"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":astonished:" class="js_emoji twa twa-2x twa-astonished"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":scream:" class="js_emoji twa twa-2x twa-scream"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":mask:" class="js_emoji twa twa-2x twa-mask"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":tired_face:" class="js_emoji twa twa-2x twa-tired-face"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":triumph:" class="js_emoji twa twa-2x twa-triumph"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":dizzy_face:" class="js_emoji twa twa-2x twa-dizzy-face"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":imp:" class="js_emoji twa twa-2x twa-imp"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":smiling_imp:" class="js_emoji twa twa-2x twa-smiling-imp"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":neutral_face:" class="js_emoji twa twa-2x twa-neutral-face"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":alien:" class="js_emoji twa twa-2x twa-alien"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":yellow_heart:" class="js_emoji twa twa-2x twa-yellow-heart"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":blue_heart:" class="js_emoji twa twa-2x twa-blue-heart"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":blue_heart:" class="js_emoji twa twa-2x twa-blue-heart"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":heart:" class="js_emoji twa twa-2x twa-heart"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":green_heart:" class="js_emoji twa twa-2x twa-green-heart"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":broken_heart:" class="js_emoji twa twa-2x twa-broken-heart"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":heartbeat:" class="js_emoji twa twa-2x twa-heartbeat"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":heartpulse:" class="js_emoji twa twa-2x twa-heartpulse"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":two_hearts:" class="js_emoji twa twa-2x twa-two-hearts"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":revolving_hearts:" class="js_emoji twa twa-2x twa-revolving-hearts"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":cupid:" class="js_emoji twa twa-2x twa-cupid"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":sparkling_heart:" class="js_emoji twa twa-2x twa-sparkling-heart"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":sparkles:" class="js_emoji twa twa-2x twa-sparkles"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":star:" class="js_emoji twa twa-2x twa-star"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":star2:" class="js_emoji twa twa-2x twa-star2"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":dizzy:" class="js_emoji twa twa-2x twa-dizzy"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":boom:" class="js_emoji twa twa-2x twa-boom"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":exclamation:" class="js_emoji twa twa-2x twa-exclamation"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":anger:" class="js_emoji twa twa-2x twa-anger"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":question:" class="js_emoji twa twa-2x twa-question"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":grey_exclamation:" class="js_emoji twa twa-2x twa-grey-exclamation"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":grey_question:" class="js_emoji twa twa-2x twa-grey-question"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":zzz:" class="js_emoji twa twa-2x twa-zzz"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":dash:" class="js_emoji twa twa-2x twa-dash"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":sweat_drops:" class="js_emoji twa twa-2x twa-sweat-drops"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":notes:" class="js_emoji twa twa-2x twa-notes"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":musical_note:" class="js_emoji twa twa-2x twa-musical-note"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":fire:" class="js_emoji twa twa-2x twa-fire"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":poop:" class="js_emoji twa twa-2x twa-poop"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":thumbsup:" class="js_emoji twa twa-2x twa-thumbsup"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":thumbsdown:" class="js_emoji twa twa-2x twa-thumbsdown"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":ok_hand:" class="js_emoji twa twa-2x twa-ok-hand"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":punch:" class="js_emoji twa twa-2x twa-punch"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":fist:" class="js_emoji twa twa-2x twa-fist"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":v:" class="js_emoji twa twa-2x twa-v"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":wave:" class="js_emoji twa twa-2x twa-wave"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":hand:" class="js_emoji twa twa-2x twa-hand"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":raised_hand:" class="js_emoji twa twa-2x twa-raised-hand"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":open_hands:" class="js_emoji twa twa-2x twa-open-hands"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":point_up:" class="js_emoji twa twa-2x twa-point-up"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":point_down:" class="js_emoji twa twa-2x twa-point-down"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":point_left:" class="js_emoji twa twa-2x twa-point-left"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":point_right:" class="js_emoji twa twa-2x twa-point-right"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":raised_hands:" class="js_emoji twa twa-2x twa-raised-hands"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":pray:" class="js_emoji twa twa-2x twa-pray"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":clap:" class="js_emoji twa twa-2x twa-clap"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":muscle:" class="js_emoji twa twa-2x twa-muscle"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":runner:" class="js_emoji twa twa-2x twa-runner"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":couple:" class="js_emoji twa twa-2x twa-couple"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":family:" class="js_emoji twa twa-2x twa-family"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":two_men_holding_hands:"
                               class="js_emoji twa twa-2x twa-two-men-holding-hands"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":two_women_holding_hands:"
                               class="js_emoji twa twa-2x twa-two-women-holding-hands"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":dancer:" class="js_emoji twa twa-2x twa-dancer"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":dancers:" class="js_emoji twa twa-2x twa-dancers"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":ok_woman:" class="js_emoji twa twa-2x twa-ok-woman"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":no_good:" class="js_emoji twa twa-2x twa-no-good"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":information_desk_person:"
                               class="js_emoji twa twa-2x twa-information-desk-person"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":bride_with_veil:" class="js_emoji twa twa-2x twa-bride-with-veil"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":couplekiss:" class="js_emoji twa twa-2x twa-couplekiss"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":couple_with_heart:" class="js_emoji twa twa-2x twa-couple-with-heart"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":nail_care:" class="js_emoji twa twa-2x twa-nail-care"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":boy:" class="js_emoji twa twa-2x twa-boy"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":girl:" class="js_emoji twa twa-2x twa-girl"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":woman:" class="js_emoji twa twa-2x twa-woman"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":man:" class="js_emoji twa twa-2x twa-man"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":baby:" class="js_emoji twa twa-2x twa-baby"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":older_woman:" class="js_emoji twa twa-2x twa-older-woman"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":older_man:" class="js_emoji twa twa-2x twa-older-man"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":cop:" class="js_emoji twa twa-2x twa-cop"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":angel:" class="js_emoji twa twa-2x twa-angel"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":princess:" class="js_emoji twa twa-2x twa-princess"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":smiley_cat:" class="js_emoji twa twa-2x twa-smiley-cat"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":smile_cat:" class="js_emoji twa twa-2x twa-smile-cat"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":heart_eyes_cat:" class="js_emoji twa twa-2x twa-heart-eyes-cat"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":kissing_cat:" class="js_emoji twa twa-2x twa-kissing-cat"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":smirk_cat:" class="js_emoji twa twa-2x twa-smirk-cat"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":scream_cat:" class="js_emoji twa twa-2x twa-scream-cat"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":crying_cat_face:" class="js_emoji twa twa-2x twa-crying-cat-face"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":joy_cat:" class="js_emoji twa twa-2x twa-joy-cat"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":pouting_cat:" class="js_emoji twa twa-2x twa-pouting-cat"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":japanese_ogre:" class="js_emoji twa twa-2x twa-japanese-ogre"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":see_no_evil:" class="js_emoji twa twa-2x twa-see-no-evil"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":hear_no_evil:" class="js_emoji twa twa-2x twa-hear-no-evil"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":speak_no_evil:" class="js_emoji twa twa-2x twa-speak-no-evil"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":guardsman:" class="js_emoji twa twa-2x twa-guardsman"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":skull:" class="js_emoji twa twa-2x twa-skull"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":feet:" class="js_emoji twa twa-2x twa-feet"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":lips:" class="js_emoji twa twa-2x twa-lips"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":kiss:" class="js_emoji twa twa-2x twa-kiss"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":droplet:" class="js_emoji twa twa-2x twa-droplet"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":ear:" class="js_emoji twa twa-2x twa-ear"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":eyes:" class="js_emoji twa twa-2x twa-eyes"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":nose:" class="js_emoji twa twa-2x twa-nose"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":tongue:" class="js_emoji twa twa-2x twa-tongue"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":love_letter:" class="js_emoji twa twa-2x twa-love-letter"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":speech_balloon:" class="js_emoji twa twa-2x twa-speech-balloon"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":thought_balloon:" class="js_emoji twa twa-2x twa-thought-balloon"></i>
                        </div>
                        <div class="item">
                            <i data-emoji=":sunny:" class="js_emoji twa twa-2x twa-sunny"></i>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab-stickers-id}}">
                    <div class="js_scroller" data-slimScroll-height="180">
                        <div class="item">
                            <img data-emoji=":STK-1:" src="http://fyrestream.com//content/uploads/stickers/1.png"
                                 class="js_emoji">
                        </div>
                        <div class="item">
                            <img data-emoji=":STK-2:" src="http://fyrestream.com//content/uploads/stickers/2.png"
                                 class="js_emoji">
                        </div>
                        <div class="item">
                            <img data-emoji=":STK-3:" src="http://fyrestream.com//content/uploads/stickers/3.png"
                                 class="js_emoji">
                        </div>
                        <div class="item">
                            <img data-emoji=":STK-4:" src="http://fyrestream.com//content/uploads/stickers/4.png"
                                 class="js_emoji">
                        </div>
                        <div class="item">
                            <img data-emoji=":STK-5:" src="http://fyrestream.com//content/uploads/stickers/5.png"
                                 class="js_emoji">
                        </div>
                        <div class="item">
                            <img data-emoji=":STK-6:" src="http://fyrestream.com//content/uploads/stickers/6.png"
                                 class="js_emoji">
                        </div>
                        <div class="item">
                            <img data-emoji=":STK-7:" src="http://fyrestream.com//content/uploads/stickers/7.png"
                                 class="js_emoji">
                        </div>
                        <div class="item">
                            <img data-emoji=":STK-8:" src="http://fyrestream.com//content/uploads/stickers/8.png"
                                 class="js_emoji">
                        </div>
                        <div class="item">
                            <img data-emoji=":STK-9:" src="http://fyrestream.com//content/uploads/stickers/9.png"
                                 class="js_emoji">
                        </div>
                        <div class="item">
                            <img data-emoji=":STK-10:" src="http://fyrestream.com//content/uploads/stickers/10.png"
                                 class="js_emoji">
                        </div>
                        <div class="item">
                            <img data-emoji=":STK-11:" src="http://fyrestream.com//content/uploads/stickers/11.png"
                                 class="js_emoji">
                        </div>
                        <div class="item">
                            <img data-emoji=":STK-12:" src="http://fyrestream.com//content/uploads/stickers/12.png"
                                 class="js_emoji">
                        </div>
                        <div class="item">
                            <img data-emoji=":STK-13:" src="http://fyrestream.com//content/uploads/stickers/13.png"
                                 class="js_emoji">
                        </div>
                        <div class="item">
                            <img data-emoji=":STK-14:" src="http://fyrestream.com//content/uploads/stickers/14.png"
                                 class="js_emoji">
                        </div>
                        <div class="item">
                            <img data-emoji=":STK-15:" src="http://fyrestream.com//content/uploads/stickers/15.png"
                                 class="js_emoji">
                        </div>
                        <div class="item">
                            <img data-emoji=":STK-16:" src="http://fyrestream.com//content/uploads/stickers/16.png"
                                 class="js_emoji">
                        </div>
                        <div class="item">
                            <img data-emoji=":STK-17:" src="http://fyrestream.com//content/uploads/stickers/17.png"
                                 class="js_emoji">
                        </div>
                        <div class="item">
                            <img data-emoji=":STK-18:" src="http://fyrestream.com//content/uploads/stickers/18.png"
                                 class="js_emoji">
                        </div>
                        <div class="item">
                            <img data-emoji=":STK-19:" src="http://fyrestream.com//content/uploads/stickers/19.png"
                                 class="js_emoji">
                        </div>
                        <div class="item">
                            <img data-emoji=":STK-20:" src="http://fyrestream.com//content/uploads/stickers/20.png"
                                 class="js_emoji">
                        </div>
                    </div>
                </div>
            </div>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#tab-emojis-id}}" data-toggle="tab">
                        <i class="fa fa-smile fa-fw mr5"></i>Emojis
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab-stickers-id}}" data-toggle="tab">
                        <i class="fa fa-hand-peace fa-fw mr5"></i>Stickers
                    </a>
                </li>
            </ul>
        </div>
    </script>
    <div id="rightSideBar" class="chat-sidebar " style="    background: #f2f2f2;">
        <div class="chat-sidebar-header"></div>
        <div class="chat-sidebar-content">
            <div>
                <ul class="right-menu-to-hide right-bar-buttons text-center md-0">
                    <li><a class=" " href="#"><img
                                src="http://fyrestream.com//content/themes/default/frontend/images/Right Side Icons/Color/PNGs/Fyre diamond.png"
                                alt=""></a></li>
                    <li><a class=" " href="#"><img
                                src="http://fyrestream.com//content/themes/default/frontend/images/Right Side Icons/Color/PNGs/Marketplace.png"
                                alt=""></a></li>
                    <li><a class=" " href="#"><img
                                src="http://fyrestream.com//content/themes/default/frontend/images/Right Side Icons/Color/PNGs/Video.png"
                                alt=""></a></li>
                    <li><a class=" " href="#"><img
                                src="http://fyrestream.com//content/themes/default/frontend/images/Right Side Icons/Color/PNGs/Dating.png"
                                alt=""></a></li>
                </ul>
                <ul class="right-menu-to-hide text-center mb-0"><i class="fa fa-plus-circle right-bar-add-circlr"></i></ul>
            </div>
            <div class="js_scroller" style="margin-left: 1.5em;">
                <ul></ul>
            </div>
        </div>
        <div class="chat-sidebar-footer"></div>
    </div>
    <script id="chat-box-new" type="text/template">
        <div class="chat-widget chat-box opened fresh">

            <div class="chat-widget-head">
                New Message

                <div class="float-right">
                    <i class="fa fa-times-circle js_chat-box-close"></i>
                </div>

            </div>


            <div class="chat-widget-content">
                <div class="chat-conversations js_scroller"></div>
                <div class="chat-to clearfix js_autocomplete-tags">
                    <div class="to">To:</div>
                    <ul class="tags"></ul>
                    <div class="typeahead">
                        <input type="text" size="1" autofocus>
                    </div>
                </div>
                <div class="chat-voice-notes">
                    <div class="voice-recording-wrapper" data-handle="chat">

                        <div class="x-hidden js_voice-processing-message">
                            <div
                                class="svg-container mr5"
                                style="width:16px; height:16px; ">


                                <?xml version = "1.0" encoding = "iso-8859-1"?>

                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                     viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;"
                                     xml:space="preserve">
<path style="fill:#2196F3;" d="M245.333,0C109.839,0,0,109.839,0,245.333s109.839,245.333,245.333,245.333
	s245.333-109.839,245.333-245.333C490.514,109.903,380.764,0.153,245.333,0z"/>
                                    <path style="fill:#FAFAFA;" d="M267.968,82.219c-12.496-12.492-32.752-12.492-45.248,0L104.533,200.533
	c-18.889,18.894-18.889,49.522,0,68.416c19.139,18.289,49.277,18.289,68.416,0l19.2-19.2v123.584
	c0,29.455,23.878,53.333,53.333,53.333c29.455,0,53.333-23.878,53.333-53.333V249.749l19.2,19.2
	c19.139,18.289,49.277,18.289,68.416,0c18.889-18.894,18.889-49.522,0-68.416L267.968,82.219z"/>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
</svg>

                            </div>
                            Processing<span class="loading-dots"></span>
                        </div>


                        <div
                            class="svg-container mr5"
                            style="width:16px; height:16px; ">


                            <svg height="512pt" viewBox="0 -21 512.00533 512" width="512pt"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0"
                                    fill="#4caf50"/>
                                <path
                                    d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0"
                                    fill="#2196f3"/>
                            </svg>
                        </div>
                        Voice note recorded successfully
                        <div class="float-right">
                            <button type="button" class="close js_voice-remove">
                                <span>&times;</span>
                            </button>
                        </div>
                    </div>


                    <div class="btn-voice-start js_voice-start">
                        <i class="fa fa-microphone mr5"></i>Record
                    </div>


                    <div class="btn-voice-stop js_voice-stop" style="display: none">
                        <i class="far fa-stop-circle mr5"></i>Recording <span class="js_voice-timer">00:00</span>
                    </div>

                </div>
            </div>
            <div class="chat-attachments attachments clearfix x-hidden">
                <ul>
                    <li class="loading">
                        <div class="progress x-progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="x-form chat-form invisible">
                <div class="chat-form-message">
                <textarea class="js_autosize js_post-message" dir="auto" rows="1"
                          placeholder='Write a message'></textarea>
                </div>
                <ul class="x-form-tools clearfix">
                    <li class="x-form-tools-attach">
                        <i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="chat"></i>
                    </li>
                    <li class="x-form-tools-voice js_chat-voice-notes-toggle">
                        <i class="fa fa-microphone fa-lg fa-fw"></i>
                    </li>
                    <li class="x-form-tools-emoji js_emoji-menu-toggle">
                        <i class="far fa-smile-wink fa-lg fa-fw"></i>
                    </li>
                </ul>
            </div>
        </div>

        </div>
    </script>
    <script id="chat-box" type="text/template">
        <div class="chat-widget chat-box opened " id="chat_key_value}}"
             #conversation_id}}data-cid="conversation_id}}"/conversation_id}}
        #user_id}}data-uid="user_id}}"/user_id}}>


        <div style="padding: 8px; height: 65px;"
             class=" js_chat-color-me messenger-header bg-white border-bottom d-flex align-items-center">
            <div class="user img-profile">
                <img src="picture}}" width="35" height="35" alt="avtar1"/>
            </div>
            <div style="padding: 5px;">
                ^multiple}}
                <a class="prof-name" href="http://fyrestream.com//link}}" title="name_list}}">name}}</a>
                /multiple}}
                #multiple}}
                <a class="prof-name" href="http://fyrestream.com//messages/link}}" title="name_list}}">name}}</a>
                /multiple}}
            </div>

            <div class="chat-head-label"><span class="badge badge-pill badge-lg badge-danger js_chat-box-label"></span>
            </div>


            <div class="float-right" style="margin-left:auto; margin-right: 10px;">

                ^multiple}}
                /multiple}}

                <i class="fa fa-times fa-lg js_chat-box-close"></i>
            </div>

        </div>


        <div style="background-color: #F2F2F2;" class="chat-widget-content">
            <div class="chat-conversations js_scroller">
                <ul></ul>
            </div>
            <div class="chat-typing">
                <i class="far fa-comment-dots mr5"></i><span class="loading-dots"><span class="js_chat-typing-users"></span> Typing</span>
            </div>
            <div class="chat-voice-notes">
                <div class="voice-recording-wrapper" data-handle="chat">

                    <div class="x-hidden js_voice-processing-message">
                        <div
                            class="svg-container mr5"
                            style="width:16px; height:16px; ">


                            <?xml version = "1.0" encoding = "iso-8859-1"?>

                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;"
                                 xml:space="preserve">
<path style="fill:#2196F3;" d="M245.333,0C109.839,0,0,109.839,0,245.333s109.839,245.333,245.333,245.333
	s245.333-109.839,245.333-245.333C490.514,109.903,380.764,0.153,245.333,0z"/>
                                <path style="fill:#FAFAFA;" d="M267.968,82.219c-12.496-12.492-32.752-12.492-45.248,0L104.533,200.533
	c-18.889,18.894-18.889,49.522,0,68.416c19.139,18.289,49.277,18.289,68.416,0l19.2-19.2v123.584
	c0,29.455,23.878,53.333,53.333,53.333c29.455,0,53.333-23.878,53.333-53.333V249.749l19.2,19.2
	c19.139,18.289,49.277,18.289,68.416,0c18.889-18.894,18.889-49.522,0-68.416L267.968,82.219z"/>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
</svg>

                        </div>
                        Processing<span class="loading-dots"></span>
                    </div>


                    <div class="x-hidden js_voice-success-message">
                        <div
                            class="svg-container mr5"
                            style="width:16px; height:16px; ">


                            <svg height="512pt" viewBox="0 -21 512.00533 512" width="512pt"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0"
                                    fill="#4caf50"/>
                                <path
                                    d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0"
                                    fill="#2196f3"/>
                            </svg>
                        </div>
                        Voice note recorded successfully
                        <div class="float-right">
                            <button type="button" class="close js_voice-remove">
                                <span>&times;</span>
                            </button>
                        </div>
                    </div>


                    <div class="btn-voice-start js_voice-start">
                        <i class="fa fa-microphone mr5"></i>Record
                    </div>


                    <div class="btn-voice-stop js_voice-stop" style="display: none">
                        <i class="far fa-stop-circle mr5"></i>Recording <span class="js_voice-timer">00:00</span>
                    </div>

                </div>
            </div>
            <div class="chat-attachments attachments clearfix x-hidden">
                <ul>
                    <li class="loading">
                        <div class="progress x-progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="x-form chat-form">
                <ul class="x-form-tools clearfix" style="padding-left: 90px; background-color: #F2F2F2;">
                    <li class="x-form-tools-attach shadow-lg">
                        <i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="chat"></i>
                    </li>
                    <li class="x-form-tools-voice js_chat-voice-notes-toggle shadow-lg">
                        <i class="fa fa-microphone fa-lg fa-fw"></i>
                    </li>
                    <li class="x-form-tools-emoji js_emoji-menu-toggle shadow-lg">
                        <i class="far fa-smile-wink fa-lg fa-fw"></i>
                    </li>
                    <li class="shadow-lg x-form-tools-colors js_chat-colors-menu-toggle js_chat-color-me ^conversation_id}}x-hidden/conversation_id}}">
                        <i class="fa fa-circle fa-lg fa-fw"></i>
                    </li>
                </ul>
                <div class="chat-form-message">
                <textarea style="background-color: white; border-radius: 30px; padding: 12px; margin-bottom: 10px;"
                          class="js_autosize js_post-message shadow-lg" dir="auto" rows="1"
                          placeholder='Write a message'></textarea>
                </div>
            </div>
        </div>

        </div>
    </script>
    <script id="chat-message" type="text/template">
        <li>
            <div class="conversation clearfix right" id="id}}">
                <div class="conversation-body">
                    <div class="text js_chat-color-me" #color}}style="background-color: color}}"
                    /color}}>
                    {message}}}
                    #image}}
                    <span class="text-link js_lightbox-nodata #message}}mt5/message}}"
                          data-image="http://fyrestream.com//content/uploads/image}}">
                                <img alt="" class="img-fluid" src="http://fyrestream.com//content/uploads/image}}">
                            </span>
                    /image}}

                    #voice_note}}
                    <audio class="js_audio" id="audio-id}}" controls preload="auto" style="width: 100%; min-width: 100px;">
                        <source src="http://fyrestream.com//content/uploads/voice_note}}" type="audio/mpeg">
                        <source src="http://fyrestream.com//content/uploads/voice_note}}" type="audio/mp3">
                        Your browser does not support HTML5 audio
                    </audio>
                    /voice_note}}
                </div>
                <div class="time js_moment" data-time="time}}">
                    time}}
                </div>
            </div>
            </div>
        </li>
    </script>
    <script id="chat-calling" type="text/template">
        <div class="modal-header border-0">
            <h6 class="modal-title  mx-auto">
                #is_video}}<i class="fa fa-video mr5"></i>/is_video}}
                #is_audio}}<i class="fa fa-phone-volume mr5"></i>/is_audio}}
                Calling
            </h6>
        </div>
        <div class="modal-body text-center">
            <h3>name}}</h3>
            <p class="text-lg js_chat-calling-message">Connecting<span class="loading-dots"></span></p>

            <div class="twilio-stream-wrapper">
                <div class="twilio-stream"></div>
                <video class="twilio-stream-local" autoplay=""></video>
            </div>

            <div class="mt30">
                <button type="button" class="btn btn-light x-hidden js_chat-call-close" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-icon btn-rounded btn-danger x-hidden js_chat-call-cancel"
                        data-type="type}}" data-dismiss="modal">
                    <i class="fa fa-phone-slash fa-lg fa-fw"></i>
                </button>
                <button type="button" class="btn btn-icon btn-rounded btn-danger x-hidden js_chat-call-end"
                        data-type="type}}" data-dismiss="modal">
                    <i class="fa fa-phone-slash fa-lg fa-fw"></i>
                </button>
            </div>
        </div>
        <div class="modal-footer border-0"></div>
    </script>
    <script id="chat-ringing" type="text/template">
        <div class="modal-header border-0">
            <h6 class="modal-title mx-auto">
                #is_video}}<i class="fa fa-video mr5"></i>New Video Call/is_video}}
                #is_audio}}<i class="fa fa-phone-volume mr5"></i>New Audio Call/is_audio}}
            </h6>
        </div>
        <div class="modal-body text-center">
            <div class="position-relative mb10" style="height: 106px;">
                <div class="profile-avatar-wrapper static">
                    <img src="image}}" alt="name}}" style="width: 98px; height: 98px;">
                </div>
            </div>
            <h3>name}}</h3>
            #is_video}}<p class="text-lg js_chat-ringing-message">Wants to have video call with you</p>/is_video}}
            #is_audio}}<p class="text-lg js_chat-ringing-message">Wants to have audio call with you</p>/is_audio}}

            <div class="twilio-stream-wrapper">
                <div class="twilio-stream"></div>
                <video class="twilio-stream-local" autoplay=""></video>
            </div>

            <div class="mt30">
                <button type="submit" class="btn btn-icon btn-rounded btn-success mr10 js_chat-call-answer"
                        data-type="type}}" data-id="id}}"><i class="fa fa-phone-alt fa-lg fa-fw"></i></button>
                <button type="button" class="btn btn-icon btn-rounded btn-danger js_chat-call-decline" data-type="type}}"
                        data-id="id}}" data-dismiss="modal"><i class="fa fa-phone-slash fa-lg fa-fw"></i></button>
                <button type="button" class="btn btn-icon btn-rounded btn-danger x-hidden js_chat-call-end"
                        data-type="type}}" data-id="id}}" data-dismiss="modal"><i
                        class="fa fa-phone-slash fa-lg fa-fw"></i></button>
            </div>
        </div>
        <div class="modal-footer border-0"></div>
    </script>
    <script id="chat-colors-menu" type="text/template">
        <div class="chat-colors-menu">
            <div class="js_scroller" data-slimScroll-height="180">
                <div class="item js_chat-color" data-color="#3367d6" style="color: #3367d6;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#0ba05d" style="color: #0ba05d;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#ed9e6a" style="color: #ed9e6a;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#a085e2" style="color: #a085e2;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#01a5a5" style="color: #01a5a5;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#2b87ce" style="color: #2b87ce;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#ff72d2" style="color: #ff72d2;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#c9605e" style="color: #c9605e;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#056bba" style="color: #056bba;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#fc9cde" style="color: #fc9cde;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#70a0e0" style="color: #70a0e0;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#f2812b" style="color: #f2812b;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#8ec96c" style="color: #8ec96c;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#f33d4c" style="color: #f33d4c;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#aa2294" style="color: #aa2294;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#0e71ea" style="color: #0e71ea;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#b582af" style="color: #b582af;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#a1ce79" style="color: #a1ce79;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#56c4c5" style="color: #56c4c5;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#f9a722" style="color: #f9a722;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#f9c270" style="color: #f9c270;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#609b41" style="color: #609b41;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#51bcbc" style="color: #51bcbc;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#008484" style="color: #008484;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
                <div class="item js_chat-color" data-color="#5462a5" style="color: #5462a5;">
                    <i class="fa fa-circle fa-2x"></i>
                </div>
            </div>
        </div>
    </script>
    <script id="chat-attachments-item" type="text/template">
        <li class="item deletable" data-src="src}}">
            <img alt="" src="image_path}}">
            <button type="button" class="close js_chat-attachment-remover" title='Remove'><span>&times;</span></button>
        </li>
    </script>
    <script id="crop-profile-picture" type="text/template">
        <div class="modal-header">
            <h6 class="modal-title"><i class="fa fa-crop-alt mr5"></i>Crop Picture</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body text-center">
            <img id="cropped-profile-picture" src="image}}" style="max-width: 100%;">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary js_crop-picture" data-handle="handle}}" data-id="id}}">Save
            </button>
        </div>
    </script>
    <script>
        /*
    You can add your JavaScript code here

    Example:

    var x, y, z;
    x = 1;
    y = 2;
    z = x + y;
    */
    </script>
    <script src="http://fyrestream.com//content/themes/default/frontend/js/script.js"></script>
    <audio id="notification-sound" preload="auto">
        <source src="http://fyrestream.com//includes/assets/sounds/notification.mp3" type="audio/mpeg">
    </audio>
    <audio id="chat-sound" preload="auto">
        <source src="http://fyrestream.com//includes/assets/sounds/chat.mp3" type="audio/mpeg">
    </audio>
    <audio id="chat-calling-sound" preload="auto" loop="true">
        <source src="http://fyrestream.com//includes/assets/sounds/calling.mp3" type="audio/mpeg">
    </audio>
    <audio id="chat-ringing-sound" preload="auto" loop="true">
        <source src="http://fyrestream.com//includes/assets/sounds/ringing.mp3" type="audio/mpeg">
    </audio>
    <script>
        var vid = document.getElementById("videoPlayOnClick");
        var play = document.getElementById("playVideoBtn");
        var pause = document.getElementById("pauseVideoBtn");

        function playVid() {
            pause.style.display = "block";
            play.style.display = "none";
            vid.play();
        }

        function pauseVid() {
            vid.pause();
            pause.style.display = "none";
            play.style.display = "block";
        }

        $(document).ready(function () {
            $("#exampleModalMoments").on("hidden.bs.modal", function () {
                vid.pause();
            });

        })
        $(document).on('click', '.dropdown-item.pointer', function () {
            $('#postTypePFM').attr('data-value', $(this).data('values'));
            $('#postTypePFM').attr('title', 'Shared with: ' + $(this).data('values'));

            if ($(this).data('values') == 'public') {
                var privacy = 'Public';
            } else if ($(this).data('values') == 'friends') {
                var privacy = 'Friends';
            } else {
                var privacy = 'Only Me';
            }
            $('#postTypePFM').attr('data-original-title', 'Shared with: ' + privacy);
            $('#postTypeText').text(privacy)
        });
        $(document).ready(function () {
            $("img.side-bar-reopen").click(function () {
                $("#rightSideBar").toggle();
            });
            $("#closedSearchBtn").click(function () {
                document.getElementById('search-results').style.display = 'none'
            });
        });
    </script>
    <script>

        var elem = document.getElementById("videoPlayOnClick");

        function openFullscreen() {
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.webkitRequestFullscreen) { /* Safari */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) { /* IE11 */
                elem.msRequestFullscreen();
            }
        }
    </script>
    <script>
        $('.carouselControlPrev').on('click', function () {
            var id = $(this).data('id');
            $('.storysCutomDiv').removeClass('active');
            $('#storyId' + id).addClass('active');
        });
    </script>
    <script>

        /*$(document).ready(function() {
            $("a[rel^='prettyPhoto']").prettyPhoto();
        });*/
        /*  $(".video").click(function () {

              var theModal = $(this).data("target"),
                  videoSRC = $(this).attr("data-video"),
                  videoSRCauto = videoSRC + "";

              $(theModal + ' source').attr('src', videoSRCauto);
              $(theModal + ' video').load();
              $(theModal + ' button.close').click(function () {
                  $(theModal + ' source').attr('src', videoSRC);
              });

          });*/
        $('#navbarDropdownFriendReq').on('click', function (event) {
            $('#dropDownequestShow').toggle();
        });
        $('.navbarDropdown').on('click', function () {
            $('#dropDownequestShow').hide();
        });
        $('.customClickLikeReaction1').on('click', function () {
            $(this).parent('.reaction-btn').parent('.action-btn').find('.duration-1.js_react-post').click();
        });
        $('.customClickLikeReaction2').on('click', function () {
            $(this).parent('.reaction-btn').parent('.action-btn').find('.duration-1.js_react-post').click();
        });
    </script>

    <script>
        $(function () {

            var wizard_steps = $('.js_wizard-steps li a');
            var wizard_content = $('.js_wizard-content');

            wizard_content.hide();

            wizard_steps.click(function (e) {
                e.preventDefault();
                var $target = $($(this).attr('href'));
                if (!$(this).hasClass('disabled')) {
                    wizard_steps.removeClass('active');
                    $(this).addClass('active');
                    wizard_content.hide();
                    $target.show();
                }
            });

            $('.js_wizard-steps li a.active').trigger('click');

            $('#activate-step-2').on('click', function (e) {
                $('.js_wizard-steps li:eq(1) a').removeClass('disabled');
                $('.js_wizard-steps li a[href="#step-2"]').trigger('click');
            });

            $('#activate-step-3').on('click', function (e) {
                $('.js_wizard-steps li:eq(2) a').removeClass('disabled');
                $('.js_wizard-steps li a[href="#step-3"]').trigger('click');
            });

        });
    </script>




    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });

        $('.prueba').faceMocion({emociones:[
                {"emocion":"amo","TextoEmocion":"I love"},
                {"emocion":"molesto","TextoEmocion":"It bothers me"},
                {"emocion":"asusta","TextoEmocion":"it scares"},
                {"emocion":"divierte","TextoEmocion":"I enjoy"},
                {"emocion":"gusta","TextoEmocion":"I like"},
                {"emocion":"triste","TextoEmocion":"It saddens"},
                {"emocion":"asombro","TextoEmocion":"It amazes me"},
                {"emocion":"alegre","TextoEmocion":"I am glad"}
            ]});


        // $( "#comment").keypress(function(e) {
        //     $.ajax({
        //         url: "/comment/".$("#post_id").val(),
        //         type: post,
        //         data: e.target.value,
        //         success: function( data ) {
        //
        //         }
        //     });
        // });

        // $( "#editComment").keypress(function(e) {
        //     $.ajax({
        //         url: "/comment/".$("#comment_id").val(),
        //         type: patch,
        //         data: e.target.value,
        //         success: function( data ) {
        //
        //         }
        //     });
        // });
    </script>
</body>
</html>










{{--    <!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <meta name="generator" content="Fyre stream">--}}
{{--    <meta name="version" content="2.9">--}}
{{--    <title>Fyre Stream</title>--}}
{{--    <meta name="description" content="Fyre Stream is a Social Network Platform is the best way to create your own social website or online community, Launch it in just 1 minute with ultimate features, Fyre Stream is fast, secured, and it will be regularly updated.">--}}
{{--    <meta name="keywords" content="php social network, php social platform, Fyre Stream, Fyre Stream v2, social network, social network platform, Social network Script, social platform">--}}
{{--    <meta property="og:title" content="Fyre Stream"/>--}}
{{--    <meta property="og:description" content="Fyre Stream is a Social Network Platform is the best way to create your own social website or online community, Launch it in just 1 minute with ultimate features, Fyre Stream is fast, secured, and it will be regularly updated."/>--}}
{{--    <meta property="og:site_name" content="Fyre Stream"/>--}}
{{--    <meta property="og:image" content="http://fyrestream.com//content/themes/default/images/og-image.jpg"/>--}}
{{--    <meta name="twitter:card" content="summary">--}}
{{--    <meta name="twitter:title" content="Fyre Stream"/>--}}
{{--    <meta name="twitter:description" content="Fyre Stream is a Social Network Platform is the best way to create your own social website or online community, Launch it in just 1 minute with ultimate features, Fyre Stream is fast, secured, and it will be regularly updated."/>--}}
{{--    <meta name="twitter:image" content="http://fyrestream.com//content/themes/default/images/og-image.jpg"/>--}}
{{--    <link rel="shortcut icon" href="http://fyrestream.com//content/themes/default/frontend/images/Fyre 01.svg" />--}}
{{--    <script src="http://fyrestream.com//includes/assets/js/plugins/jquery-3.5.1.min.js"></script>--}}
{{--    <link rel="stylesheet" type='text/css' href="http://fyrestream.com//content/themes/default/css/style.min.css">--}}
{{--    <link rel="stylesheet" href="http://fyrestream.com//content/themes/default/frontend/plugins/bootstrap/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="http://fyrestream.com//content/themes/default/frontend/plugins/fontawesome/css/all.css">--}}
{{--    <link rel="stylesheet" href="http://fyrestream.com//content/themes/default/frontend/plugins/slick-slider/css/slick.css">--}}
{{--    <link rel="stylesheet" href="http://fyrestream.com//content/themes/default/frontend/css/style.css">--}}
{{--    <link rel="stylesheet" href="http://fyrestream.com//content/themes/default/frontend/css/fix.css">--}}
{{--    <link rel="stylesheet" href="http://fyrestream.com//content/themes/default/frontend/css/timeline.css">--}}
{{--    <link rel="stylesheet" href="http://fyrestream.com//content/themes/default/frontend/css/custom-style.scss">--}}
{{--    <link rel="stylesheet" href="http://fyrestream.com//content/themes/default/frontend/css/custom.css">--}}
{{--    <link rel="stylesheet" href="http://fyrestream.com//includes/assets/css/owlcarousel/owl.carousel.min.css">--}}
{{--    <link rel="stylesheet" href="http://fyrestream.com//includes/assets/css/owlcarousel/owl.theme.default.min.css">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">--}}

{{--    <style>--}}
{{--        .post-left.post-left-only.d-none.d-sm-block.position-fixed{--}}
{{--            /*left: 20px;*/--}}
{{--        }--}}
{{--        .left-menu ul.two li:nth-child(1) a, .right-menu ul.two li:nth-child(1) a{--}}
{{--            background-color: transparent !important;--}}
{{--        }--}}

{{--        .default-moment-box {--}}
{{--            background-image: url("http://fyrestream.com//content/themes/default/images/Moments.png");--}}
{{--            background-size: contain;--}}
{{--        }--}}
{{--    </style> </head><body> <header class="sticky-top" id="top"> <div class="header-top"> <div class="  container-fluid "> <nav class="navbar navbar-expand-lg"> <a class="navbar-brand p-0" href="http://fyrestream.com/"> <img src="http://fyrestream.com//content/themes/default/frontend/images/Fyre 01.svg" alt="brand-logo"> <img src="http://fyrestream.com//content/themes/default/frontend/images/Fyre 02.svg" class="nav-logo-text" alt="brand-logo"> </a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button> <div class="collapse navbar-collapse" id="navbarSupportedContent"> <form class="form-inline mx-auto mt-2 mt-sm-0 position-relative header-top-searchbar"> <input id="search-input" autocomplete="off" class="form-control ml-sm-2 rounded-pill shadow-none bg-white w-100" type="text" placeholder="Search" aria-label="Search"> <button class="btn shadow-none my-2 my-sm-0 position-absolute" type="submit"> <i class="fas text-danger fa-search"></i> </button> <div id="search-results" class="dropdown-menu dropdown-widget dropdown-search js_dropdown-keepopen"> <div class="dropdown-widget-header"> <span class="title">Search Results</span> <span style="float: right;    cursor: pointer;" id="closedSearchBtn"> <i class="fa fa-times-circle"></i></span> </div> <div class="dropdown-widget-body"> <div class="loader loader_small ptb10"></div> </div> <a class="dropdown-widget-footer" id="search-results-all" href="http://fyrestream.com//search/">See All Results</a> </div> </form> <ul class="navbar-nav flex-row justify-content-around my-3 my-lg-0 notification-icons" style="margin: 0px !important; transform: translate(-30px)"> <li class="nav-item dropdown mr-2"> <a class="nav-link dropdown-toggle" href="#"> <img src="http://fyrestream.com//content/themes/default/frontend/img/all_red_flash_black-02.png"> </a> </li> <li class="nav-item dropdown mr-3 ml-4"> <li class="nav-item dropdown mx-1 headerTooltip"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownFriendReq" role="button" aria-haspopup="true" aria-expanded="false"> <img src="http://fyrestream.com//content/themes/default/frontend/img/Friends-top.png" class="top-notification-pic" alt=""> <img src="http://fyrestream.com//content/themes/default/frontend/images/Friends-Dark.png" class="top-notification-pic-hover" alt=""> <div class="tooltip">Friend Requests</div> </a> <div class="dropdown-menu py-0 rounded border-0 position-absolute" aria-labelledby="navbarDropdown" id="dropDownequestShow"> <div class="dropdown-menu-head rounded-top p-2 text-white d-flex align-items-center position-relative">--}}
{{--                                    Follower Requests--}}
{{--                                </div> <p class="text-center text-muted mt10"> <div class="text-center"> <img src="http://fyrestream.com//content/themes/default/images/no_results.png" class="img-resposive no-req-img" alt=""> </div> <div class="text-center text-muted py-4 no-req-text">--}}
{{--                                    You do not have any requests--}}
{{--                                </div> </p> </div> </li> </li> <li class="nav-item dropdown mr-3 ml-4"> <li class="nav-item dropdown mx-1 headerTooltip"> <a class="nav-link dropdown-toggle navbarDropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <div class="notify x-hidden"> <span class="counter red shadow-sm ">--}}
{{--               0--}}
{{--               0--}}
{{--             </span> </div> <img src="http://fyrestream.com//content/themes/default/frontend/img/Notification-top.png" class="top-notification-pic" alt=""> <img src="http://fyrestream.com//content/themes/default/frontend/images/Notification-Dark.png" class="top-notification-pic-hover" alt=""> <div class="tooltip">Notifications</div> </a> <div class="dropdown-menu notify-dropdown-menu py-0 rounded border-0 position-absolute" aria-labelledby="navbarDropdown"> <div class="dropdown-menu-head rounded-top p-2 text-white d-flex align-items-center position-relative">--}}
{{--                                    Notifications--}}
{{--                                </div> <div class="dropdown-widget-body"> <div class="js_scroller" style="height: unset !important;"> <p class="text-center text-muted mt10">--}}
{{--                                            No notifications--}}
{{--                                        </p> </div> </div> </div> </li> </li> <li class="nav-item mr-3 ml-4"> <li class="nav-item dropdown js_live-messages headerTooltip"> <a href="javascript:void(0);" style="padding: 0px ;" class="nav-link message-header-icon navbarDropdown" data-toggle="dropdown" id="navbarDropdownMessage" data-display="static"> <img style="" src="http://fyrestream.com//content/themes/default/frontend/img/Mail_Icon_White_FS.png" class="top-notification-pic" alt=""> <img style="" src="http://fyrestream.com//content/themes/default/frontend/img/Mail_Icon_White_FS.png" class="top-notification-pic-hover" alt=""> <span class="customNotify shadow-sm counter blue shadow-sm x-hidden">--}}
{{--            0--}}
{{--        </span> <div class="tooltip">Messages</div> </a> <div class="dropdown-menu dropdown-menu-right dropdown-widget with-arrow"> <div class="dropdown-widget-header"> <h4>Messages</h4> </div> <div class="dropdown-widget-body"> <div class="js_scroller"> <p class="text-center text-muted mt10">--}}
{{--                                            No new messages--}}
{{--                                        </p> </div> </div> </div> </li> </li> </ul> <div class="profile-nav ml-auto"> <div class="btn-group"> <span type="button" style="color: black;" class=" dropdown-toggle font-weight-bolder" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                Danish  <img src="http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png" style="    width: 40px; height: 40px;   border-radius: 50%;" alt="profile2" class="ml-2"> </span> <div class="dropdown-menu dropdown-menu-right bg-black dropdownMenuCustom profile-dropdown "> <div class="text-left pl10 "> <h4>Danish</h4> </div> <div class="bg-white pt10"> <a href="http://fyrestream.com//danishtest"> <button class="dropdown-item" type="button"><i class="fas fa-user"></i>--}}
{{--                                            My Profile--}}
{{--                                        </button> </a> <a href="http://fyrestream.com//settings"> <button class="dropdown-item" type="button"><i class="fas fa-cog"></i>--}}
{{--                                            Setting and Privacy--}}
{{--                                        </button> </a> <a href="http://fyrestream.com//market"> <button class="dropdown-item" type="button"><i class="fas fa-fire"></i>--}}
{{--                                            Trending Streams--}}
{{--                                        </button> </a> <a href="http://fyrestream.com//danishtest/followers"> <button class="dropdown-item" type="button"> <i class="fas fa-users"></i>--}}
{{--                                            Followers--}}
{{--                                        </button> </a> <a href="http://fyrestream.com//danishtest/followings"> <button class="dropdown-item" type="button"> <i class="fas fa-user-plus"></i>--}}
{{--                                            Following--}}
{{--                                        </button> </a> <a href="http://fyrestream.com//signout"> <button class="dropdown-item" type="button"><i class="fas fa-sliders-h"></i> Log--}}
{{--                                            out--}}
{{--                                        </button> </a> </div> </div> </div> </div> <div class="vertical-side-bars d-block d-sm-none"> <div class="categories"> <div class="categorie-list"> <div class="vertical-side-head"><h2 class="my-2">Categories</h2></div> <div class="categorie-items py-3"> <a class="d-flex align-items-center" href="#"> <div class="img-box"> <img src="http://fyrestream.com//content/themes/default/frontend/images/videos.png" class="real-img"> <img src="http://fyrestream.com//content/themes/default/frontend/images/videos-red.png" class="hover-img"> </div> <p class="mb-0 ml-3">Videos</p> </a> </div> <div class="categorie-items py-3"> <a class="d-flex align-items-center" href="#"> <div class="img-box"> <img src="http://fyrestream.com//content/themes/default/frontend/images/market_classifieds.png" class="real-img"> <img src="http://fyrestream.com//content/themes/default/frontend/images/market_classifieds-red.png" class="hover-img"> </div> <p class="mb-0 ml-3">Market Classifieds</p> </a> </div> <div class="categorie-items py-3"> <a class="d-flex align-items-center" href="#"> <div class="img-box"> <img src="http://fyrestream.com//content/themes/default/frontend/images/twitch_stream.png" class="real-img"> <img src="http://fyrestream.com//content/themes/default/frontend/images/twitch_stream-red.png" class="hover-img"> </div> <p class="mb-0 ml-3">Twitch Stream</p> </a> </div> <div class="categorie-items py-3"> <a class="d-flex align-items-center" href="#"> <div class="img-box"> <img src="http://fyrestream.com//content/themes/default/frontend/images/live_stream.png" class="real-img"> <img src="http://fyrestream.com//content/themes/default/frontend/images/live_stream-red.png" class="hover-img"> </div> <p class="mb-0 ml-3">Live Stream</p> </a> </div> <div class="categorie-items py-3"> <a class="d-flex align-items-center" href="#"> <div class="img-box"> <img src="http://fyrestream.com//content/themes/default/frontend/images/events.png" class="real-img"> <img src="http://fyrestream.com//content/themes/default/frontend/images/events-red.png" class="hover-img"> </div> <p class="mb-0 ml-3">Events</p> </a> </div> <div class="categorie-items py-3"> <a class="d-flex align-items-center" href="#"> <div class="img-box"> <img src="http://fyrestream.com//content/themes/default/frontend/images/group_channels.png" class="real-img"> <img src="http://fyrestream.com//content/themes/default/frontend/images/group_channels-red.png" class="hover-img"> </div> <p class="mb-0 ml-3">Group Channels</p> </a> </div> <div class="categorie-items py-3"> <a class="d-flex align-items-center" href="#"> <div class="img-box"> <img src="http://fyrestream.com//content/themes/default/frontend/images/discover_members.png" class="real-img"> <img src="http://fyrestream.com//content/themes/default/frontend/images/discover_members-red.png" class="hover-img"> </div> <p class="mb-0 ml-3">Discover Members</p> </a> </div> <div class="categorie-items py-3"> <a class="d-flex align-items-center" href="#"> <div class="img-box"> <img src="http://fyrestream.com//content/themes/default/frontend/images/custom_themes.png" class="real-img"> <img src="http://fyrestream.com//content/themes/default/frontend/images/custom_themes-red.png" class="hover-img"> </div> <p class="mb-0 ml-3">Custom Themes</p> </a> </div> <div class="categorie-items py-3"> <a class="d-flex align-items-center" href="#"> <div class="img-box"> <img src="http://fyrestream.com//content/themes/default/frontend/images/pro_services.png" class="real-img"> <img src="http://fyrestream.com//content/themes/default/frontend/images/pro_services-red.png" class="hover-img"> </div> <p class="mb-0 ml-3">Pro Services</p> </a> </div> <div class="categorie-items py-3"> <a class="d-flex align-items-center" href="#"> <div class="img-box"> <img src="http://fyrestream.com//content/themes/default/frontend/images/Invite_new.png" class="real-img"> <img src="http://fyrestream.com//content/themes/default/frontend/images/Invite_new-red.png" class="hover-img"> </div> <p class="mb-0 ml-3">Invite</p> </a> </div> <div class="categorie-items py-3"> <a class="d-flex align-items-center" href="#"> <div class="img-box"> <img src="http://fyrestream.com//content/themes/default/frontend/images/resources.png" class="real-img"> <img src="http://fyrestream.com//content/themes/default/frontend/images/resources-red.png" class="hover-img"> </div> <p class="mb-0 ml-3">Resources</p> </a> </div> <div class="categorie-items py-3"> <a class="d-flex align-items-center" href="#"> <div class="img-box"> <img src="http://fyrestream.com//content/themes/default/frontend/images/saved.png" class="real-img"> <img src="http://fyrestream.com//content/themes/default/frontend/images/saved-red.png" class="hover-img"> </div> <p class="mb-0 ml-3">Saved</p> </a> </div> </div> </div> <div class="contacts"> <div class="vertical-side-head border-top"><h2 class="my-2">Contacts</h2></div> <div class="contacts-items py-3"> <a class="d-flex align-items-center active" href="#"> <img src="http://fyrestream.com//content/themes/default/frontend/images/five.png" class="mr-1"> <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p> </a> </div> <div class="contacts-items py-3"> <a class="d-flex align-items-center active" href="#"> <img src="http://fyrestream.com//content/themes/default/frontend/images/six.png" class="mr-1"> <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p> </a> </div> <div class="contacts-items py-3"> <a class="d-flex align-items-center active" href="#"> <img src="http://fyrestream.com//content/themes/default/frontend/images/seven.png" class="mr-1"> <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p> </a> </div> <div class="contacts-items py-3"> <a class="d-flex align-items-center active" href="#"> <img src="http://fyrestream.com//content/themes/default/frontend/images/eight.png" class="mr-1"> <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p> </a> </div> <div class="contacts-items py-3"> <a class="d-flex align-items-center active" href="#"> <img src="http://fyrestream.com//content/themes/default/frontend/images/nine.png" class="mr-1"> <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p> </a> </div> <div class="contacts-items py-3"> <a class="d-flex align-items-center active" href="#"> <img src="http://fyrestream.com//content/themes/default/frontend/images/ten.png" class="mr-1"> <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p> </a> </div> <div class="contacts-items py-3"> <a class="d-flex align-items-center active" href="#"> <img src="http://fyrestream.com//content/themes/default/frontend/images/11.png" class="mr-1"> <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p> </a> </div> <div class="contacts-items py-3"> <a class="d-flex align-items-center active" href="#"> <img src="http://fyrestream.com//content/themes/default/frontend/images/12.png" class="mr-1"> <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p> </a> </div> <div class="contacts-items py-3 mb-5"> <a class="d-flex align-items-center active" href="#"> <img src="http://fyrestream.com//content/themes/default/frontend/images/13.png" class="mr-1"> <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p> </a> </div> </div> </div> </div> </nav> </div> </div> <div class="header-bottom bg-white"> <div class="container-fluid"> </div> </div> </header> <div class="post-wrapper py-3"> <div class="container-fluid"> <div class="row justify-content-between"> <aside class="col-lg-1 left-bar-to-shrink col-sm-2 pl-0"> <div class="post-left post-left-only d-none d-sm-block position-fixed"> <div class="left-menu h-100"> <ul class="two mb-0" style=""> <li style=""> <a href="http://fyrestream.com//videos" class="mySidebar-toggoler"> <img src="http://fyrestream.com//content/themes/default/frontend/images/videos-red.png" class="hover-img"> <div class="tooltip">Videos</div> </a> </li> <li> <a href="http://fyrestream.com//people" class="mySidebar-toggoler"> <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-06.png" class="hover-img"> <div class="tooltip">People</div> </a> </li> <li> <a href="http://fyrestream.com//market" class="mySidebar-toggoler"> <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-05.png" class="hover-img"> <div class="tooltip">Marketplace</div> </a> </li> <li> <a href="#" class="mySidebar-toggoler"> <img src="http://fyrestream.com//content/themes/default/frontend/images/entertainment-red.png" class="hover-img"> <div class="tooltip">Entertainment</div> </a> </li> <li> <a href="javascript:void(0);" class="mySidebar-toggoler"> <img src="http://fyrestream.com//content/themes/default/frontend/images/group_channels-red.png" class="hover-img"> <div class="tooltip">Events</div> </a> </li> <li> <a href="http://fyrestream.com//groups" class="mySidebar-toggoler"> <img src="http://fyrestream.com//content/themes/default/frontend/images/discover_members-red.png" class="hover-img"> <div class="tooltip">Groups</div> </a> </li> <li> <a href="http://fyrestream.com//groups" class="mySidebar-toggoler"> <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-11.png" class="hover-img"> <div class="tooltip">Groups</div> </a> </li> <li> <a href="http://fyrestream.com//groups" class="mySidebar-toggoler"> <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-08.png" class="hover-img"> <div class="tooltip">Groups</div> </a> </li> <li> <a href="http://fyrestream.com//groups" class="mySidebar-toggoler"> <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-14.png" class="hover-img"> <div class="tooltip">Groups</div> </a> </li> <li> <a href="http://fyrestream.com//groups" class="mySidebar-toggoler"> <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-12.png" class="hover-img"> <div class="tooltip">Groups</div> </a> </li> <li> <a href="http://fyrestream.com//groups" class="mySidebar-toggoler"> <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-03.png" class="hover-img"> <div class="tooltip">Groups</div> </a> </li> <li> <a href="#" class="create-tab"> <i class="fas fa-plus-circle"></i> </a> </li> </ul> </div> <div class="create-container position-fixed border py-2"> <h3 class="text-dark pl-2">Create</h3> <div class="create-items"> <a href="http://fyrestream.com//groups" class="d-flex align-items-center p-2"> <i class="fas fa-users rounded-circle bg-white text-center border"></i> <div class="ml-2"> <h5 class="mb-1">Group</h5> <span>Connect with people</span> </div> </a> </div> <div class="create-items"> <a href="" class="d-flex align-items-center p-2"> <i class="fas fa-store rounded-circle bg-white text-center border"></i> <div class="ml-2"> <h5 class="mb-1">Marketplace Listing</h5> <span>Sell items to people</span> </div> </a> </div> </div> </div> <div class="modal status-modal fade" id="createPostModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> <div class="modal-dialog modal-dialog-centered"> <div class="modal-content border-0"> <div class="modal-header border-0 p-0"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div> <div class="modal-body pt-0"> <div class="form-group w-100 position-relative"> <textarea class="form-control w-100 h-100 shadow-none m-0"--}}
{{--                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          placeholder="What do you want to share"></textarea> <ul class="color-plate text-center list-inline mb-0 position-absolute"> <li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block active"></a> </li> <li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a> </li> <li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a> </li> <li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a> </li> <li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a> </li> <li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a> </li> <li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a> </li> <li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a> </li> <li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a> </li> <li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a> </li> <li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a> </li> <li class="list-inline-item"><a href="#" class="d-inline-block"></a></li> </ul> <div class="user-icon rounded-circle overflow-hidden position-absolute"> <img class="w-100 h-100" src="http://fyrestream.com//content/themes/default/frontend/images/tanya.png" alt="tanya"> </div> </div> <div class="text-muted text-center font-weight-bold">Drag and drop image/video hera or--}}
{{--                                    <a href="#" class="link">Browse</a></div> </div> <div class="modal-footer align-items-center justify-content-center border-0 pt-0"> <div> <div class="input-group"> <select class="custom-select shadow-none"> <option selected>Public Audience</option> <option value="1">Personal</option> <option value="2">Friends</option> <option value="3">Custom</option> </select> </div> </div> <div class="d-flex align-items-center justify-content-between"> <a href="#" class="btn-tag rounded d-inline-block">Friend Tagging</a> <a href="#" class="d-inline-block mx-3"><img src="http://fyrestream.com//content/themes/default/frontend/images/camera3.png" alt="camera3"></a> <a href="#" class="btn-post d-inline-block text-white rounded" data-dismiss="modal" aria-label="Close">Post</a> </div> </div> </div> </div> </div> </aside> <div class="col-lg-11 col-sm-8 col-break"> <div class="row"> <div class="col-lg-3 first-column d-flex flex-column column-to-hide js_sticky-sidebar" id="left-sidebar-section"> <div class="card news-card p-3"> <div class="text-center"> <img style="width: min-content;position: relative; right: -10px;" src="http://fyrestream.com//content/themes/default/frontend/images/four.png" alt=""> <img style="width: min-content; position: relative; left: -10px;" src="http://fyrestream.com//content/themes/default/frontend/images/three.png" alt=""> <p style="font-size: 12px; margin-top: 5px;margin-bottom: 10px;"><b>Active Events Around--}}
{{--                                        You</b></p> <p style="font-size: 9px;">Good morning, Welcome to Fyrestream.--}}
{{--                                    This is where all the latest events, group--}}
{{--                                    notices, and system announcements will--}}
{{--                                    appear on your activity page. </p> </div> </div> <div class="card news-card add-ad">--}}
{{--                            For Ad--}}
{{--                        </div> <div class="card news-card add-moments-left"> <div class="add-moments birthdays align-items-center" title=" Birthdays" style="cursor: pointer"> <div class="bday-cake-img"> <img src="http://fyrestream.com//content/themes/default/frontend/img/Pastel_Balloons_Fyre.png" alt=""> </div> <span> <span class="moments-left-heading">--}}
{{--                                       Birthdays--}}
{{--                                    </span> </span> </div> </div> <div class="card news-card add-ad">--}}
{{--                            For Ad--}}
{{--                        </div> </div> <div class="col-lg-5 second-column px-lg-0 mb-5"> <div class="card status-card" id="postSection" style="    position: fixed;--}}
{{--    z-index:  999;--}}
{{--    width: 38.2%;"> <div style="    height: 45px;    box-shadow: 3px 2px 6px -1px;" class="relative-parent card-body d-flex flex-column flex-sm-row align-items-center p-2"> <form action="#" class=""> <div class="create-post-div"> <div class="d-flex" data-toggle="modal" data-target="#exampleModalPost"> <div class="p-2 text-warning"><i class="far fa-smile" id="smilePublish" style="padding: 0px;"></i></div> <div class="flex-grow-1 text-center justify-content-center"> <input type="text" class="write-post" placeholder="What do you want to share now, Danish?" /> </div> <div class="p-2"> <i id="arrowTop" onclick="backToTop();event.stopPropagation();" style=" cursor: pointer; " class="fas fa-arrow-up back-to-top-btn"></i> </div> </div> </div> </form> <div class="modal status-modal fade" id="exampleModalPost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> <div class="modal-dialog modal-dialog-centered"> <div class="modal-content create-post-box create border-0"> <div class="d-flex align-items-start justify-content-between"> <h4>Create Your Post--}}
{{--                                                </h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div> <div class="x-form publisher" data-handle="me" > <div class="publisher-loader"> <div class="loader loader_small"></div> </div> <div class="publisher-message" style="display:block !important;"> <img class="publisher-avatar" src="http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png"> <div class="colored-text-wrapper"> <textarea dir="auto" class="js_autosize js_mention js_publisher-scraper" data-init-placeholder='What is on your mind? #Hashtag.. @Mention.. Link..' placeholder='What is on your mind? #Hashtag.. @Mention.. Link..'></textarea> </div> <div class="publisher-emojis"> <div class="position-relative"> <span class="js_emoji-menu-toggle" data-toggle="tooltip" data-placement="top" title='Insert an emoji'> <i class="far fa-smile-wink fa-lg"></i> </span> </div> </div> </div> <div class="" style="display:block !important;" > <div class="publisher-attachments attachments clearfix x-hidden"></div> <div class="publisher-meta" data-meta="album"> <div class="svg-container " style="width:16px; height:16px; "> <svg height="469pt" viewBox="0 0 469 469.33336" width="469pt" xmlns="http://www.w3.org/2000/svg"><path d="m320.167969 149.332031v-106.664062c0-23.566407-19.105469-42.667969-42.667969-42.667969h-234.667969c-23.5625 0-42.664062 19.101562-42.664062 42.667969v320h277.332031c23.5625 0 42.667969-19.105469 42.667969-42.667969zm0 0" fill="#f56054"/><path d="m320.167969 320h-21.335938v-277.332031c-.011719-11.777344-9.554687-21.324219-21.332031-21.335938h-234.667969v-21.332031h234.667969c23.554688.0273438 42.640625 19.113281 42.667969 42.667969zm0 0" fill="#f78980"/><path d="m85.5 42.667969h256v341.332031h-256zm0 0" fill="#cfdbf2"/><path d="m106.832031 64h213.335938v298.667969h-213.335938zm0 0" fill="#afc3e9"/><path d="m213.5 85.332031h256v341.335938h-256zm0 0" fill="#e6ecf8"/><path d="m234.832031 106.667969h213.335938v298.664062h-213.335938zm0 0" fill="#0053b1"/><path d="m405.5 309.332031c0 29.457031-23.878906 53.335938-53.332031 53.335938-29.457031 0-53.335938-23.878907-53.335938-53.335938 0-29.453125 23.878907-53.332031 53.335938-53.332031 29.453125 0 53.332031 23.878906 53.332031 53.332031zm0 0" fill="#cfdbf2"/><path d="m448.167969 277.332031c-70.695313 0-128 57.308594-128 128h128zm0 0" fill="#669ede"/><path d="m256.167969 161.3125c0-19.578125-13.324219-36.644531-32.320313-41.390625l-207.523437-51.882813c-9.496094-2.375-16.15625-10.90625-16.15625-20.695312v327.238281c0 18.363281 11.75 34.667969 29.171875 40.476563l179 52.753906c11.273437 3.324219 23.457031 1.132812 32.871094-5.90625 9.414062-7.039062 14.957031-18.105469 14.957031-29.859375zm0 0" fill="#f78980"/><path d="m29.339844 415.058594 13.492187 3.976562v-344.367187l-26.507812-6.628907c-9.496094-2.375-16.15625-10.90625-16.15625-20.695312v327.238281c0 18.363281 11.75 34.667969 29.171875 40.476563zm0 0" fill="#f6766b"/><path d="m21.5 106.667969h21.332031v277.332031h-21.332031zm0 0" fill="#f56054"/><path d="m42.832031 128h21.335938v277.332031h-21.335938zm0 0" fill="#f9a29b"/><path d="m218.875 469.332031h-5.375v-21.332031h5.375c8.808594-.011719 15.945312-7.148438 15.957031-15.957031v-270.730469c.007813-9.796875-6.660156-18.339844-16.164062-20.707031l-186.1875-46.679688c-19-4.734375-32.328125-21.804687-32.3125-41.382812v-9.875c.027343-23.554688 19.113281-42.6406252 42.664062-42.667969v21.332031c-11.777343.011719-21.320312 9.558594-21.332031 21.335938v9.875c-.007812 9.792969 6.664062 18.332031 16.167969 20.695312l186.1875 46.679688c19 4.738281 32.324219 21.8125 32.3125 41.394531v270.730469c-.023438 20.585937-16.707031 37.265625-37.292969 37.289062zm0 0" fill="#f9a29b"/><path d="m426.832031 192c0 11.78125-9.550781 21.332031-21.332031 21.332031s-21.332031-9.550781-21.332031-21.332031 9.550781-21.332031 21.332031-21.332031 21.332031 9.550781 21.332031 21.332031zm0 0" fill="#f78980"/><g fill="#cfdbf2"><path d="m298.832031 224c0 5.890625-4.773437 10.667969-10.664062 10.667969s-10.667969-4.777344-10.667969-10.667969 4.777344-10.667969 10.667969-10.667969 10.664062 4.777344 10.664062 10.667969zm0 0"/><path d="m341.5 160c0 5.890625-4.777344 10.667969-10.667969 10.667969s-10.664062-4.777344-10.664062-10.667969 4.773437-10.667969 10.664062-10.667969 10.667969 4.777344 10.667969 10.667969zm0 0"/><path d="m201.039062 289.777344c-14-13.984375-34.09375-16.5625-44.882812-5.761719s-8.191406 30.890625 5.804688 44.875c14 13.980469 34.09375 16.5625 44.882812 5.761719 10.789062-10.800782 8.191406-30.890625-5.804688-44.875zm0 0"/></g><path d="m183.078125 307.746094c-9.648437-9.640625-22.949219-11.96875-29.714844-5.203125-6.761719 6.769531-4.421875 20.070312 5.226563 29.710937 9.644531 9.640625 22.949218 11.96875 29.710937 5.203125 6.765625-6.769531 4.425781-20.070312-5.222656-29.710937zm0 0" fill="#afc3e9"/></svg> </div> <input type="text" placeholder='Album title'> </div> <div class="publisher-meta" data-meta="feelings"> <div id="feelings-menu-toggle" data-init-text='What are you doing?'>What are you doing?</div> <div id="feelings-data" style="display: none"> <input type="text" class="no-icon" placeholder='What are you doing?'> <span></span> </div> <div id="feelings-menu" class="dropdown-menu dropdown-widget"> <div class="dropdown-widget-body ptb5"> <div class="js_scroller"> <ul class="feelings-list"> <li class="feeling-item js_feelings-add" data-action="Feeling" data-placeholder="How are you feeling?"> <div class="icon"> <i class="twa twa-3x twa-smile"></i> </div> <div class="data">--}}
{{--                                                                                Feeling--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-add" data-action="Listening To" data-placeholder="What are you listening to?"> <div class="icon"> <i class="twa twa-3x twa-headphones"></i> </div> <div class="data">--}}
{{--                                                                                Listening To--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-add" data-action="Watching" data-placeholder="What are you watching?"> <div class="icon"> <i class="twa twa-3x twa-eyeglasses"></i> </div> <div class="data">--}}
{{--                                                                                Watching--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-add" data-action="Playing" data-placeholder="What are you playing?"> <div class="icon"> <i class="twa twa-3x twa-video-game"></i> </div> <div class="data">--}}
{{--                                                                                Playing--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-add" data-action="Eating" data-placeholder="What are you eating?"> <div class="icon"> <i class="twa twa-3x twa-cake"></i> </div> <div class="data">--}}
{{--                                                                                Eating--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-add" data-action="Drinking" data-placeholder="What are you drinking?"> <div class="icon"> <i class="twa twa-3x twa-tropical-drink"></i> </div> <div class="data">--}}
{{--                                                                                Drinking--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-add" data-action="Traveling To" data-placeholder="Where are you going?"> <div class="icon"> <i class="twa twa-3x twa-airplane"></i> </div> <div class="data">--}}
{{--                                                                                Traveling To--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-add" data-action="Reading" data-placeholder="What are you reading?"> <div class="icon"> <i class="twa twa-3x twa-books"></i> </div> <div class="data">--}}
{{--                                                                                Reading--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-add" data-action="Attending" data-placeholder="What are you attending?"> <div class="icon"> <i class="twa twa-3x twa-calendar"></i> </div> <div class="data">--}}
{{--                                                                                Attending--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-add" data-action="Celebrating" data-placeholder="What are you celebrating?"> <div class="icon"> <i class="twa twa-3x twa-tada"></i> </div> <div class="data">--}}
{{--                                                                                Celebrating--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-add" data-action="Looking For" data-placeholder="What are you looking for?"> <div class="icon"> <i class="twa twa-3x twa-mag-right"></i> </div> <div class="data">--}}
{{--                                                                                Looking For--}}
{{--                                                                            </div> </li> </ul> </div> </div> </div> <div id="feelings-types" class="dropdown-menu dropdown-widget"> <div class="dropdown-widget-body ptb5"> <div class="js_scroller"> <ul class="feelings-list"> <li class="feeling-item js_feelings-type" data-type="Happy" data-icon="smile"> <div class="icon"> <i class="twa twa-3x twa-smile"></i> </div> <div class="data">--}}
{{--                                                                                Happy--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-type" data-type="Loved" data-icon="heart-eyes"> <div class="icon"> <i class="twa twa-3x twa-heart-eyes"></i> </div> <div class="data">--}}
{{--                                                                                Loved--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-type" data-type="Satisfied" data-icon="satisfied"> <div class="icon"> <i class="twa twa-3x twa-satisfied"></i> </div> <div class="data">--}}
{{--                                                                                Satisfied--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-type" data-type="Strong" data-icon="muscle"> <div class="icon"> <i class="twa twa-3x twa-muscle"></i> </div> <div class="data">--}}
{{--                                                                                Strong--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-type" data-type="Sad" data-icon="disappointed"> <div class="icon"> <i class="twa twa-3x twa-disappointed"></i> </div> <div class="data">--}}
{{--                                                                                Sad--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-type" data-type="Crazy" data-icon="stuck-out-tongue-winking-eye"> <div class="icon"> <i class="twa twa-3x twa-stuck-out-tongue-winking-eye"></i> </div> <div class="data">--}}
{{--                                                                                Crazy--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-type" data-type="Tired" data-icon="sweat"> <div class="icon"> <i class="twa twa-3x twa-sweat"></i> </div> <div class="data">--}}
{{--                                                                                Tired--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-type" data-type="Sleepy" data-icon="sleeping"> <div class="icon"> <i class="twa twa-3x twa-sleeping"></i> </div> <div class="data">--}}
{{--                                                                                Sleepy--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-type" data-type="Confused" data-icon="confused"> <div class="icon"> <i class="twa twa-3x twa-confused"></i> </div> <div class="data">--}}
{{--                                                                                Confused--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-type" data-type="Worried" data-icon="worried"> <div class="icon"> <i class="twa twa-3x twa-worried"></i> </div> <div class="data">--}}
{{--                                                                                Worried--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-type" data-type="Angry" data-icon="angry"> <div class="icon"> <i class="twa twa-3x twa-angry"></i> </div> <div class="data">--}}
{{--                                                                                Angry--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-type" data-type="Annoyed" data-icon="rage"> <div class="icon"> <i class="twa twa-3x twa-rage"></i> </div> <div class="data">--}}
{{--                                                                                Annoyed--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-type" data-type="Shocked" data-icon="open-mouth"> <div class="icon"> <i class="twa twa-3x twa-open-mouth"></i> </div> <div class="data">--}}
{{--                                                                                Shocked--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-type" data-type="Down" data-icon="pensive"> <div class="icon"> <i class="twa twa-3x twa-pensive"></i> </div> <div class="data">--}}
{{--                                                                                Down--}}
{{--                                                                            </div> </li> <li class="feeling-item js_feelings-type" data-type="Confounded" data-icon="confounded"> <div class="icon"> <i class="twa twa-3x twa-confounded"></i> </div> <div class="data">--}}
{{--                                                                                Confounded--}}
{{--                                                                            </div> </li> </ul> </div> </div> </div> </div> <div class="publisher-meta" data-meta="location"> <div class="svg-container " style="width:16px; height:16px; "> <?xml version="1.0" encoding="iso-8859-1"?> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve"> <g> <path style="fill:#44C868;" d="M511.879,475.685l-40.224-221.611c-0.401-2.212-1.773-4.128-3.739-5.221l-101.242-56.31--}}
{{--		c-1.314-0.732-2.787-1.023-4.234-0.911l18.419,237.608l-0.617,0.276l121.164,54.357c0.986,0.441,2.034,0.659,3.077,0.659--}}
{{--		c1.651,0,3.287-0.543,4.632-1.596C511.313,481.22,512.376,478.428,511.879,475.685z"/> <path style="fill:#44C868;" d="M256,246.375l-103.545-53.931c-1.241-0.647-2.617-0.911-3.972-0.82--}}
{{--		c0.359-0.022,0.72-0.02,1.078,0.008l-18.419,237.608l121.781,54.634c0.983,0.44,2.032,0.659,3.077,0.659l0,0V246.375z"/> </g> <g> <path style="fill:#4CE166;" d="M149.56,191.633c-1.447-0.112-2.92,0.179-4.234,0.91l-101.243,56.31--}}
{{--		c-1.966,1.093-3.338,3.008-3.739,5.221L0.121,475.685c-0.498,2.742,0.566,5.534,2.763,7.252c1.347,1.053,2.982,1.596,4.632,1.596--}}
{{--		c1.043,0,2.092-0.217,3.077-0.659l120.504-54.061L149.56,191.633z"/> <path style="fill:#4CE166;" d="M362.439,191.628c-0.996,0.077-1.981,0.342-2.894,0.818L256,246.376v238.158c0,0,0,0,0.001,0--}}
{{--		c1.045,0,2.095-0.218,3.077-0.659l121.781-54.634L362.439,191.628z"/> </g> <polygon style="fill:#FFDB56;" points="28.154,321.233 19.983,366.252 140.977,302.346 143.786,266.107 144.252,260.097 "/> <path style="fill:#A8EEFC;" d="M142.066,288.294l-1.089,14.052L19.983,366.252L0.121,475.685c-0.498,2.742,0.566,5.534,2.763,7.252--}}
{{--	c1.347,1.053,2.982,1.596,4.632,1.596c1.043,0,2.092-0.217,3.077-0.659l120.504-54.061L142.066,288.294L142.066,288.294z"/> <g> <polygon style="fill:#FFBB24;" points="256.03,276.08 144.252,260.097 140.977,302.346 256,477.025 256,413.507 187.363,305.429--}}
{{--		256.03,313.642 	"/> <polygon style="fill:#FFBB24;" points="459.946,244.421 411.311,217.37 365.269,228.128 365.845,235.564 368.119,264.898 	"/> </g> <polygon style="fill:#FFDB56;" points="372.202,317.576 367.842,261.327 367.842,261.327 365.269,228.128 256.03,276.08--}}
{{--	256.03,313.642 327.386,282.612 "/> <path style="fill:#FFBB24;" d="M511.879,475.685l-10.103-55.666L368.119,264.898l4.084,52.678l137.07,165.221--}}
{{--	C511.357,481.07,512.364,478.358,511.879,475.685z"/> <path style="fill:#FF4A4A;" d="M256.481,27.465c-57.963,0-105.12,47.118-105.12,105.034c0,35.826,17.009,74.29,50.556,114.322--}}
{{--	c24.639,29.403,48.943,48.314,49.966,49.105c1.354,1.047,2.976,1.57,4.599,1.57c1.622,0,3.245-0.523,4.599-1.57--}}
{{--	c1.022-0.791,25.327-19.702,49.966-49.105c33.547-40.032,50.556-78.495,50.556-114.322--}}
{{--	C361.601,74.583,314.444,27.465,256.481,27.465z M295.411,132.498c0,21.482-17.43,38.898-38.93,38.898--}}
{{--	c-21.5,0-38.93-17.415-38.93-38.898s17.43-38.898,38.93-38.898C277.981,93.6,295.411,111.016,295.411,132.498z"/> <path style="fill:#E7343F;" d="M256.481,27.465c-4.594,0-9.119,0.298-13.559,0.872c51.583,6.667,91.562,50.836,91.562,104.162--}}
{{--	c0,35.826-17.009,74.29-50.556,114.322c-15.845,18.908-31.54,33.467-41.005,41.669c5.254,4.552,8.596,7.154,8.96,7.436--}}
{{--	c1.354,1.047,2.976,1.57,4.599,1.57c1.622,0,3.245-0.523,4.599-1.57c1.022-0.791,25.327-19.702,49.966-49.105--}}
{{--	c33.547-40.032,50.556-78.495,50.556-114.322C361.601,74.583,314.444,27.465,256.481,27.465z"/> <path style="fill:#FFDB56;" d="M259.078,483.874l45.285-20.316L256,413.507v71.026c0,0,0,0,0.001,0--}}
{{--	C257.046,484.533,258.095,484.316,259.078,483.874z"/> <g> <path style="fill:#1EA4E9;" d="M471.654,254.074c-0.401-2.212-1.773-4.128-3.739-5.221l-7.97-4.433l-91.827,20.477l0,0--}}
{{--		l133.656,155.121L471.654,254.074z"/> <path style="fill:#1EA4E9;" d="M255.999,484.533C256,484.533,256,484.533,255.999,484.533v-7.508L140.977,302.346l-9.837,126.895--}}
{{--		l121.781,54.634C253.904,484.316,254.953,484.533,255.999,484.533z"/> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg> </div> <input class="js_geocomplete" type="text" placeholder='Where are you?'> </div> <div class="publisher-meta" data-meta="colored"> <div class="colored-pattern-item js_publisher-pattern" data-id="1" data-type="image" data-background-image="patterns/1.jpg" data-background-color-1="" data-background-color-2="" data-text-color="#FFFFFF" style="background-image: url(http://fyrestream.com//content/uploads/patterns/1.jpg)" > </div> <div class="colored-pattern-item js_publisher-pattern" data-id="2" data-type="image" data-background-image="patterns/2.jpg" data-background-color-1="" data-background-color-2="" data-text-color="#FFFFFF" style="background-image: url(http://fyrestream.com//content/uploads/patterns/2.jpg)" > </div> <div class="colored-pattern-item js_publisher-pattern" data-id="3" data-type="image" data-background-image="patterns/3.jpg" data-background-color-1="" data-background-color-2="" data-text-color="#FFFFFF" style="background-image: url(http://fyrestream.com//content/uploads/patterns/3.jpg)" > </div> <div class="colored-pattern-item js_publisher-pattern" data-id="4" data-type="image" data-background-image="patterns/4.jpg" data-background-color-1="" data-background-color-2="" data-text-color="#000000" style="background-image: url(http://fyrestream.com//content/uploads/patterns/4.jpg)" > </div> <div class="colored-pattern-item js_publisher-pattern" data-id="5" data-type="image" data-background-image="patterns/5.jpg" data-background-color-1="" data-background-color-2="" data-text-color="#FFFFFF" style="background-image: url(http://fyrestream.com//content/uploads/patterns/5.jpg)" > </div> <div class="colored-pattern-item js_publisher-pattern" data-id="6" data-type="color" data-background-image="" data-background-color-1="#FF00FF" data-background-color-2="#030355" data-text-color="#FFF300" style="background-image: linear-gradient(45deg, #FF00FF, #030355);" > </div> <div class="colored-pattern-item js_publisher-pattern" data-id="7" data-type="color" data-background-image="" data-background-color-1="#FF003D" data-background-color-2="#D73A3A" data-text-color="#FFFFFF" style="background-image: linear-gradient(45deg, #FF003D, #D73A3A);" > </div> </div> <div class="publisher-meta" data-meta="voice_notes"> <div class="voice-recording-wrapper" data-handle="publisher"> <div class="x-hidden js_voice-processing-message"> <div class="svg-container static mr5" style="width:16px; height:16px; "> <?xml version="1.0" encoding="iso-8859-1"?> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;" xml:space="preserve"> <path style="fill:#2196F3;" d="M245.333,0C109.839,0,0,109.839,0,245.333s109.839,245.333,245.333,245.333--}}
{{--	s245.333-109.839,245.333-245.333C490.514,109.903,380.764,0.153,245.333,0z"/> <path style="fill:#FAFAFA;" d="M267.968,82.219c-12.496-12.492-32.752-12.492-45.248,0L104.533,200.533--}}
{{--	c-18.889,18.894-18.889,49.522,0,68.416c19.139,18.289,49.277,18.289,68.416,0l19.2-19.2v123.584--}}
{{--	c0,29.455,23.878,53.333,53.333,53.333c29.455,0,53.333-23.878,53.333-53.333V249.749l19.2,19.2--}}
{{--	c19.139,18.289,49.277,18.289,68.416,0c18.889-18.894,18.889-49.522,0-68.416L267.968,82.219z"/> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg> </div>                    Processing<span class="loading-dots"></span> </div> <div class="x-hidden js_voice-success-message"> <div class="svg-container static mr5" style="width:16px; height:16px; "> <svg height="512pt" viewBox="0 -21 512.00533 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0" fill="#4caf50"/><path d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0" fill="#2196f3"/></svg> </div>                    Voice note recorded successfully--}}
{{--                                                                <div class="float-right"> <button type="button" class="close js_voice-remove"> <span>&times;</span> </button> </div> </div> <div class="btn-voice-start js_voice-start"> <i class="fas fa-microphone mr5"></i>Record--}}
{{--                                                            </div> <div class="btn-voice-stop js_voice-stop" style="display: none"> <i class="far fa-stop-circle mr5"></i>Recording <span class="js_voice-timer">00:00</span> </div> </div> </div> <div class="publisher-meta" data-meta="gif"> <div class="svg-container " style="width:16px; height:16px; "> <svg id="Filled" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m392 488h-272a48 48 0 0 1 -48-48v-368a48 48 0 0 1 48-48h224l96 96v320a48 48 0 0 1 -48 48z" fill="#8690fa"/><circle cx="256" cy="200" fill="#fff" r="96"/><path d="m72 360h368a0 0 0 0 1 0 0v80a48 48 0 0 1 -48 48h-272a48 48 0 0 1 -48-48v-80a0 0 0 0 1 0 0z" fill="#cfd2fc"/><path d="m440 120h-48a48 48 0 0 1 -48-48v-48z" fill="#cfd2fc"/><path d="m232 232v-64l64 32z" fill="#5153ff"/><path d="m349.657 18.343a8 8 0 0 0 -5.657-2.343h-224a56.063 56.063 0 0 0 -56 56v368a56.063 56.063 0 0 0 56 56h272a56.063 56.063 0 0 0 56-56v-320a8 8 0 0 0 -2.343-5.657zm2.343 24.97 68.687 68.687h-28.687a40.045 40.045 0 0 1 -40-40zm-232-11.313h216v40a56.063 56.063 0 0 0 56 56h40v224h-352v-280a40.045 40.045 0 0 1 40-40zm272 448h-272a40.045 40.045 0 0 1 -40-40v-72h352v72a40.045 40.045 0 0 1 -40 40z"/><path d="m216 416h-16a8 8 0 0 0 0 16h7.049c-2.252 9.217-8.236 16-15.049 16-8.673 0-16-10.991-16-24s7.327-24 16-24a10.71 10.71 0 0 1 4.589 1.057 8 8 0 0 0 6.822-14.473 26.6 26.6 0 0 0 -11.411-2.584c-17.645 0-32 17.944-32 40s14.355 40 32 40 32-17.944 32-40a8 8 0 0 0 -8-8z"/><path d="m280 400a8 8 0 0 0 0-16h-32a8 8 0 0 0 0 16h8v48h-8a8 8 0 0 0 0 16h32a8 8 0 0 0 0-16h-8v-48z"/><path d="m344 384h-32a8 8 0 0 0 -8 8v64a8 8 0 0 0 16 0v-24h8a8 8 0 0 0 0-16h-8v-16h24a8 8 0 0 0 0-16z"/><path d="m178.765 142.42a8 8 0 0 0 11.292-.692 88.911 88.911 0 0 1 10.205-9.829 8 8 0 0 0 -10.145-12.374 105.136 105.136 0 0 0 -12.045 11.6 8 8 0 0 0 .693 11.295z"/><path d="m201.122 279.184a8 8 0 0 0 2.925 10.929 104.005 104.005 0 0 0 15.129 7.178 8 8 0 0 0 5.666-14.963 87.887 87.887 0 0 1 -12.791-6.07 8 8 0 0 0 -10.929 2.926z"/><path d="m221.819 118.266a7.971 7.971 0 0 0 2.848-.527 87.421 87.421 0 0 1 13.585-3.95 8 8 0 1 0 -3.207-15.675 103.393 103.393 0 0 0 -16.077 4.675 8 8 0 0 0 2.851 15.477z"/><path d="m181.648 247.1a8 8 0 1 0 -13.507 8.574 104.5 104.5 0 0 0 10.067 13.357 8 8 0 1 0 11.965-10.631 88.639 88.639 0 0 1 -8.525-11.3z"/><path d="m160.842 184.9a7.99 7.99 0 0 0 9.671-5.872 87.512 87.512 0 0 1 4.466-13.434 8 8 0 0 0 -14.725-6.261 103.59 103.59 0 0 0 -5.284 15.9 8 8 0 0 0 5.872 9.667z"/><path d="m155.021 224.984a8 8 0 0 0 15.536-3.831 88.218 88.218 0 0 1 -2.27-13.973 8 8 0 1 0 -15.947 1.288 104.185 104.185 0 0 0 2.681 16.516z"/><path d="m266.47 112.616a87.821 87.821 0 0 1 13.873 2.793 8 8 0 0 0 4.418-15.378 103.811 103.811 0 0 0 -16.408-3.3 8 8 0 0 0 -1.883 15.889z"/><path d="m266.665 287.361a89.709 89.709 0 0 1 -14.162.571 8 8 0 1 0 -.623 15.988c1.365.053 2.751.08 4.12.08a105.523 105.523 0 0 0 12.583-.754 8 8 0 0 0 -1.918-15.885z"/><path d="m339.438 171.951a8 8 0 0 0 15.166-5.1 103.911 103.911 0 0 0 -6.6-15.385 8 8 0 0 0 -14.147 7.476 87.753 87.753 0 0 1 5.581 13.009z"/><path d="m306.008 272.421a88.161 88.161 0 0 1 -12.246 7.09 8 8 0 1 0 6.873 14.448 104.1 104.1 0 0 0 14.478-8.382 8 8 0 1 0 -9.105-13.156z"/><path d="m344.751 237.527a8 8 0 0 0 -10.8 3.358 88.437 88.437 0 0 1 -7.579 11.966 8 8 0 1 0 12.785 9.619 104.3 104.3 0 0 0 8.956-14.139 8 8 0 0 0 -3.362-10.804z"/><path d="m344 199.786v.214a89.065 89.065 0 0 1 -1.126 14.123 8 8 0 1 0 15.8 2.544 105.119 105.119 0 0 0 1.326-16.667c0-.036 0-.073 0-.109v-.1a8 8 0 0 0 -16 0z"/><path d="m305.854 127.473a88.855 88.855 0 0 1 10.986 8.945 8 8 0 0 0 11.06-11.558 104.765 104.765 0 0 0 -12.97-10.56 8 8 0 0 0 -9.076 13.177z"/><path d="m227.794 161.2a8 8 0 0 0 -3.794 6.8v64a8 8 0 0 0 11.578 7.155l64-32a8 8 0 0 0 0-14.31l-64-32a8 8 0 0 0 -7.784.355zm12.206 19.744 38.111 19.056-38.111 19.056z"/></svg> </div> <input class="js_publisher-gif-search" type="text" placeholder='Search GIFs'> </div> <div class="publisher-meta" data-meta="poll"> <div class="svg-container " style="width:16px; height:16px; "> <svg height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm0 0" fill="#2196f3"/><path d="m368 277.332031h-90.667969v90.667969c0 11.777344-9.554687 21.332031-21.332031 21.332031s-21.332031-9.554687-21.332031-21.332031v-90.667969h-90.667969c-11.777344 0-21.332031-9.554687-21.332031-21.332031s9.554687-21.332031 21.332031-21.332031h90.667969v-90.667969c0-11.777344 9.554687-21.332031 21.332031-21.332031s21.332031 9.554687 21.332031 21.332031v90.667969h90.667969c11.777344 0 21.332031 9.554687 21.332031 21.332031s-9.554687 21.332031-21.332031 21.332031zm0 0" fill="#fafafa"/></svg> </div> <input type="text" placeholder='Add an option...'> </div> <div class="publisher-meta" data-meta="poll"> <div class="svg-container " style="width:16px; height:16px; "> <svg height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm0 0" fill="#2196f3"/><path d="m368 277.332031h-90.667969v90.667969c0 11.777344-9.554687 21.332031-21.332031 21.332031s-21.332031-9.554687-21.332031-21.332031v-90.667969h-90.667969c-11.777344 0-21.332031-9.554687-21.332031-21.332031s9.554687-21.332031 21.332031-21.332031h90.667969v-90.667969c0-11.777344 9.554687-21.332031 21.332031-21.332031s21.332031 9.554687 21.332031 21.332031v90.667969h90.667969c11.777344 0 21.332031 9.554687 21.332031 21.332031s-9.554687 21.332031-21.332031 21.332031zm0 0" fill="#fafafa"/></svg> </div> <input type="text" placeholder='Add an option...'> </div> <div class="publisher-meta" data-meta="video"> <div class="svg-container static mr5" style="width:16px; height:16px; "> <svg height="512pt" viewBox="0 -21 512.00533 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0" fill="#4caf50"/><path d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0" fill="#2196f3"/></svg> </div>            Video uploaded successfully--}}
{{--                                                        <div class="float-right"> <button type="button" class="close js_publisher-attachment-file-remover" data-type="video"> <span>&times;</span> </button> </div> </div> <div class="publisher-custom-thumbnail">--}}
{{--                                                        Custom Video Thumbnail--}}
{{--                                                        <div class="x-image"> <button type="button" class="close x-hidden js_x-image-remover" title='Remove'> <span>×</span> </button> <div class="x-image-loader"> <div class="progress x-progress"> <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div> </div> </div> <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i> <input type="hidden" class="js_x-image-input" name="video_thumbnail" value=""> </div> </div> <div class="publisher-meta" data-meta="audio"> <div class="svg-container static mr5" style="width:16px; height:16px; "> <svg height="512pt" viewBox="0 -21 512.00533 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0" fill="#4caf50"/><path d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0" fill="#2196f3"/></svg> </div>            Audio uploaded successfully--}}
{{--                                                        <div class="float-right"> <button type="button" class="close js_publisher-attachment-file-remover" data-type="audio"> <span>&times;</span> </button> </div> </div> <div class="publisher-meta" data-meta="file"> <div class="svg-container static mr5" style="width:16px; height:16px; "> <svg height="512pt" viewBox="0 -21 512.00533 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0" fill="#4caf50"/><path d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0" fill="#2196f3"/></svg> </div>            File uploaded successfully--}}
{{--                                                        <div class="float-right"> <button type="button" class="close js_publisher-attachment-file-remover" data-type="file"> <span>&times;</span> </button> </div> </div> <div class="publisher-scraper"></div> <div class="publisher-tools-tabs"> <ul class="row"> <li class="col-md-6"> <div class="publisher-tools-tab attach js_publisher-tab" data-tab="photos"> <img src="http://fyrestream.com//content/themes/default/frontend/images/story-image.png" class="js_x-uploader" data-handle="publisher" data-multiple="true">--}}
{{--                                                                    Upload Photos--}}
{{--                                                                </div> </li> <li class="col-md-6"> <div class="publisher-tools-tab attach js_publisher-tab" data-tab="video"> <img src="http://fyrestream.com//content/themes/default/frontend/images/story-video.png" class="js_x-uploader" data-handle="publisher" data-type="video">--}}
{{--                                                                    Upload Video--}}
{{--                                                                </div> </li> <li class="col-md-6"> <div class="publisher-tools-tab js_publisher-tab" data-tab="colored"> <div class="svg-container mr5" style="width:24px; height:24px; "> <?xml version="1.0" encoding="utf-8"?> <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 180 180" enable-background="new 0 0 180 180" xml:space="preserve"> <g> <g> <path fill="#66FFFF" d="M124,136.8H26c-7.1,0-12.8-5.7-12.8-12.8V26c0-7.1,5.7-12.8,12.8-12.8h98c7.1,0,12.8,5.7,12.8,12.8v98--}}
{{--			C136.8,131,131,136.8,124,136.8z"/> </g> <g> <path fill="#949DC2" d="M154,166.8H56c-7.1,0-12.8-5.7-12.8-12.8V56c0-7.1,5.7-12.8,12.8-12.8h98c7.1,0,12.8,5.7,12.8,12.8v98--}}
{{--			C166.8,161,161,166.8,154,166.8z"/> </g> </g> </svg> </div>                            Backgrounds--}}
{{--                                                                </div> </li> <li class="col-md-6"> <div class="publisher-tools-tab js_publisher-tab" data-tab="poll"> <div class="svg-container mr5" style="width:24px; height:24px; "> <svg height="512pt" viewBox="-32 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m426.167969 264.75h-85.164063c-3.640625 0-6.59375 2.949219-6.59375 6.59375v233.042969h98.347656v-233.042969c0-3.640625-2.949218-6.59375-6.589843-6.59375zm0 0" fill="#ffc850"/><path d="m371.550781 264.75h-30.546875c-3.640625 0-6.59375 2.953125-6.59375 6.59375v233.046875h30.550782v-233.046875c0-3.640625 2.949218-6.59375 6.589843-6.59375zm0 0" fill="#feb644"/><path d="m266.277344 375.886719h-85.164063c-3.640625 0-6.589843 2.953125-6.589843 6.59375v121.910156h98.34375v-121.910156c0-3.640625-2.949219-6.59375-6.589844-6.59375zm0 0" fill="#00aaf0"/><path d="m211.664062 375.886719h-30.550781c-3.640625 0-6.589843 2.953125-6.589843 6.59375v121.910156h30.546874v-121.910156c0-3.640625 2.953126-6.59375 6.59375-6.59375zm0 0" fill="#059adb"/><path d="m63.808594 0c-16.035156 0-29.152344 13.117188-29.152344 29.148438 0 16.035156 13.117188 29.152343 29.152344 29.152343 16.03125 0 29.148437-13.117187 29.148437-29.152343 0-16.03125-13.117187-29.148438-29.148437-29.148438zm0 0" fill="#f7b594"/><path d="m65.207031 29.148438c0-10.4375 5.566407-19.640626 13.875-24.792969-4.449219-2.757813-9.683593-4.355469-15.273437-4.355469-16.035156 0-29.152344 13.117188-29.152344 29.148438 0 16.035156 13.117188 29.152343 29.152344 29.152343 5.589844 0 10.824218-1.601562 15.273437-4.359375-8.308593-5.148437-13.875-14.351562-13.875-24.792968zm0 0" fill="#f0a479"/><path d="m106.390625 152.335938h-85.164063c-3.640624 0-6.59375 2.953124-6.59375 6.59375v345.457031h98.347657v-345.457031c0-3.640626-2.953125-6.59375-6.589844-6.59375zm0 0" fill="#f25c5c"/><path d="m51.773438 152.335938h-30.546876c-3.640624 0-6.59375 2.953124-6.59375 6.59375v345.457031h30.550782v-345.457031c0-3.640626 2.949218-6.59375 6.589844-6.59375zm0 0" fill="#e54a4a"/><path d="m87.074219 58.300781h-46.535157c-14.734374 0-26.789062 12.054688-26.789062 26.789063v32.515625c0 3.640625 2.949219 6.59375 6.589844 6.59375h86.933594c3.640624 0 6.59375-2.953125 6.59375-6.59375v-32.515625c-.003907-14.734375-12.058594-26.789063-26.792969-26.789063zm0 0" fill="#f25c5c"/><path d="m44.296875 117.605469v-32.515625c0-14.734375 12.058594-26.789063 26.792969-26.789063h-30.550782c-14.734374 0-26.789062 12.054688-26.789062 26.789063v32.515625c0 3.640625 2.949219 6.59375 6.589844 6.59375h30.550781c-3.640625 0-6.59375-2.953125-6.59375-6.59375zm0 0" fill="#e54a4a"/><path d="m441.320312 512h-433.707031c-4.207031 0-7.613281-3.40625-7.613281-7.613281 0-4.203125 3.40625-7.609375 7.613281-7.609375h433.710938c4.203125 0 7.609375 3.40625 7.609375 7.609375 0 4.207031-3.40625 7.613281-7.613282 7.613281zm0 0" fill="#52586d"/><path d="m48.480469 124.199219v-26.125c0-4.203125-3.40625-7.613281-7.609375-7.613281-4.207032 0-7.613282 3.410156-7.613282 7.613281v26.121093h15.222657zm0 0" fill="#d83f3f"/><path d="m94.355469 98.074219c0-4.203125-3.40625-7.613281-7.613281-7.613281-4.203126 0-7.609376 3.410156-7.609376 7.613281v26.121093h15.222657zm0 0" fill="#e54a4a"/><path d="m223.695312 223.550781c-16.03125 0-29.148437 13.117188-29.148437 29.148438 0 16.035156 13.117187 29.152343 29.148437 29.152343 16.035157 0 29.152344-13.117187 29.152344-29.152343 0-16.03125-13.121094-29.148438-29.152344-29.148438zm0 0" fill="#f7b594"/><path d="m225.09375 252.699219c0-10.441407 5.566406-19.640625 13.875-24.792969-4.449219-2.757812-9.683594-4.355469-15.273438-4.355469-16.03125 0-29.148437 13.117188-29.148437 29.148438s13.117187 29.148437 29.148437 29.148437c5.589844 0 10.824219-1.597656 15.273438-4.355468-8.308594-5.148438-13.875-14.351563-13.875-24.792969zm0 0" fill="#f0a479"/><path d="m246.960938 281.847656h-46.53125c-14.734376 0-26.792969 12.058594-26.792969 26.792969v32.515625c0 3.640625 2.953125 6.589844 6.59375 6.589844h86.933593c3.640626 0 6.589844-2.949219 6.589844-6.589844v-32.515625c0-14.734375-12.054687-26.792969-26.792968-26.792969zm0 0" fill="#00c3ff"/><path d="m204.1875 341.15625v-32.515625c0-14.734375 12.054688-26.792969 26.789062-26.792969h-30.546874c-14.734376 0-26.792969 12.058594-26.792969 26.792969v32.515625c0 3.640625 2.953125 6.589844 6.59375 6.589844h30.546875c-3.640625 0-6.589844-2.949219-6.589844-6.589844zm0 0" fill="#00aaf0"/><path d="m208.371094 347.746094v-26.121094c0-4.203125-3.40625-7.613281-7.613282-7.613281-4.203124 0-7.609374 3.410156-7.609374 7.613281v26.121094zm0 0" fill="#059adb"/><path d="m254.246094 321.625c0-4.203125-3.410156-7.613281-7.613282-7.613281-4.203124 0-7.613281 3.410156-7.613281 7.613281v26.121094h15.226563zm0 0" fill="#00aaf0"/><path d="m383.585938 112.414062c-16.035157 0-29.152344 13.117188-29.152344 29.148438 0 16.035156 13.117187 29.152344 29.152344 29.152344 16.03125 0 29.148437-13.117188 29.148437-29.152344 0-16.03125-13.117187-29.148438-29.148437-29.148438zm0 0" fill="#f7b594"/><path d="m384.984375 141.5625c0-10.441406 5.566406-19.640625 13.875-24.792969-4.449219-2.757812-9.683594-4.355469-15.273437-4.355469-16.035157 0-29.152344 13.117188-29.152344 29.148438s13.117187 29.152344 29.152344 29.152344c5.589843 0 10.824218-1.601563 15.273437-4.359375-8.308594-5.148438-13.875-14.351563-13.875-24.792969zm0 0" fill="#f0a479"/><path d="m406.851562 170.714844h-46.535156c-14.734375 0-26.789062 12.054687-26.789062 26.789062v32.515625c0 3.640625 2.949218 6.589844 6.589844 6.589844h86.933593c3.640625 0 6.59375-2.949219 6.59375-6.589844v-32.515625c0-14.734375-12.058593-26.789062-26.792969-26.789062zm0 0" fill="#ffc850"/><path d="m364.074219 230.019531v-32.515625c0-14.734375 12.058593-26.789062 26.792969-26.789062h-30.550782c-14.734375 0-26.789062 12.054687-26.789062 26.789062v32.515625c0 3.640625 2.949218 6.589844 6.589844 6.589844h30.550781c-3.640625 0-6.59375-2.949219-6.59375-6.589844zm0 0" fill="#feb644"/><path d="m368.261719 236.609375v-26.121094c0-4.203125-3.410157-7.613281-7.613281-7.613281-4.203126 0-7.613282 3.410156-7.613282 7.613281v26.121094zm0 0" fill="#f9972d"/><path d="m414.132812 210.488281c0-4.203125-3.40625-7.613281-7.609374-7.613281-4.207032 0-7.613282 3.410156-7.613282 7.613281v26.121094h15.222656zm0 0" fill="#feb644"/></svg> </div>                            Create Poll--}}
{{--                                                                </div> </li> <li class="col-md-6"> <div class="publisher-tools-tab js_publisher-feelings"> <div class="svg-container mr5" style="width:24px; height:24px; "> <?xml version="1.0" encoding="iso-8859-1"?> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <circle style="fill:#FFD93B;" cx="256" cy="256" r="256"/> <path style="fill:#3E4347;" d="M256,420.544c-74.864,0-140.096-50.704-158.624-123.28c-1.456-5.712,1.984-11.52,7.696-12.976--}}
{{--	c5.68-1.488,11.504,1.984,12.96,7.696c16.128,63.136,72.848,107.232,137.952,107.232s121.84-44.096,137.952-107.232--}}
{{--	c1.44-5.712,7.248-9.184,12.976-7.696c5.712,1.456,9.152,7.264,7.696,12.976C396.096,369.84,330.864,420.544,256,420.544z"/> <path style="fill:#F4C534;" d="M512,256c0,141.44-114.64,256-256,256c-80.48,0-152.32-37.12-199.28-95.28--}}
{{--	c43.92,35.52,99.84,56.72,160.72,56.72c141.36,0,256-114.56,256-256c0-60.88-21.2-116.8-56.72-160.72--}}
{{--	C474.8,103.68,512,175.52,512,256z"/> <ellipse style="fill:#3E4347;" cx="173.328" cy="220.304" rx="39.232" ry="46.624"/> <path style="fill:#5A5F63;" d="M191.024,210.272c-3.056,2.4-8.08,1.216-11.296-2.688s-3.376-9.136-0.32-11.536--}}
{{--	c3.04-2.512,8.08-1.328,11.28,2.576C193.92,202.64,193.952,207.776,191.024,210.272z"/> <ellipse style="fill:#3E4347;" cx="338.72" cy="220.304" rx="39.232" ry="46.624"/> <path style="fill:#5A5F63;" d="M356.384,210.272c-3.056,2.4-8.08,1.216-11.296-2.688s-3.376-9.136-0.32-11.536--}}
{{--	c3.04-2.512,8.064-1.328,11.28,2.576C359.28,202.64,359.312,207.776,356.384,210.272z"/> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg> </div>                            Feelings/Activity--}}
{{--                                                                </div> </li> <li class="col-md-6"> <div class="publisher-tools-tab" id="addMomentModal" data-url="posts/story.php?do=create"> <div class="svg-container mr5" style="width:24px; height:24px; "> <?xml version="1.0" encoding="utf-8"?> <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 180 180" enable-background="new 0 0 180 180" xml:space="preserve"> <g> <g> <g> <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="31.6088" y1="76.1398" x2="163.6088" y2="31.1398"> <stop offset="0" style="stop-color:#7029B7"/> <stop offset="0.9946" style="stop-color:#F52883"/> </linearGradient> <path fill="url(#SVGID_1_)" d="M161.7,64.7c-0.1,0-0.2,0-0.2,0L33.9,45.3c-0.7-0.1-1.3-0.7-1.3-1.5c0-0.7,0.5-1.4,1.3-1.5L146,25--}}
{{--				c0.6-0.1,1.1-0.1,1.7-0.1c5.5,0,10.2,4,11,9.5l4.4,28.6c0.1,0.5-0.1,1-0.4,1.3C162.5,64.6,162.1,64.7,161.7,64.7z M44,43.8--}}
{{--				l115.9,17.6l-4.1-26.6c-0.6-4-4.1-6.9-8.1-6.9c-0.4,0-0.8,0-1.3,0.1L44,43.8z"/> </g> </g> <g> <g> <g> <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="5.612" y1="161.5582" x2="139.112" y2="60.0582"> <stop offset="0" style="stop-color:#7029B7"/> <stop offset="0.9946" style="stop-color:#F52883"/> </linearGradient> <path fill="url(#SVGID_2_)" d="M161.3,155.1H18.7c-5.3,0-9.7-4.3-9.7-9.7v-96c0-5.3,4.3-9.7,9.7-9.7h142.5--}}
{{--					c5.3,0,9.7,4.3,9.7,9.7v96C170.9,150.7,166.6,155.1,161.3,155.1z"/> </g> </g> </g> <g> <g> <g> <circle fill="#F7F7F7" cx="90" cy="97.4" r="45.3"/> </g> </g> <g> <g> <g> <g> <path fill="#74CAFE" d="M78.1,98.7c0.9-0.9,1.7-1.9,2.6-2.7c7.6-6.6,19.6-3,22.2,6.9c1.1,4,0.1,7.7-2,11.2--}}
{{--							c-2.1,3.5-4.9,6.4-7.9,9.1c-4.4,3.9-9.3,7.3-14.4,10.2c-0.3,0.2-0.5,0.2-0.8,0c-6.5-3.8-12.5-8.1-17.8-13.5--}}
{{--							c-2.3-2.4-4.4-5.1-5.8-8.2c-3.6-8,1.3-17.2,9.7-18.8c5.6-1.1,10.2,0.8,13.7,5.3C77.9,98.4,78,98.6,78.1,98.7z"/> </g> </g> </g> </g> <g> <g> <g> <g> <path fill="#F7B0BB" d="M106.6,75.7c0.5-0.5,1-1.1,1.5-1.6c4.4-3.8,11.3-1.7,12.8,4c0.6,2.3,0,4.5-1.1,6.5--}}
{{--							c-1.2,2-2.8,3.7-4.6,5.3c-2.6,2.3-5.4,4.2-8.3,5.9c-0.2,0.1-0.3,0.1-0.5,0c-3.7-2.2-7.3-4.7-10.3-7.8c-1.4-1.4-2.5-3-3.3-4.8--}}
{{--							c-2.1-4.7,0.8-9.9,5.6-10.9c3.2-0.6,5.9,0.4,7.9,3C106.5,75.5,106.6,75.6,106.6,75.7z"/> </g> </g> </g> </g> </g> <g> <g> <path fill="#9CFF9C" d="M126.2,107.4c-0.7-2.4-1.4-4.7-2.1-7c-1.5,1-3,2-4.5,2.9c-1.5,1-3,2-4.5,2.9c-0.4,0.3-0.6,0.5-0.4,1.1--}}
{{--				c1.1,3.5,2.1,6.9,3.2,10.4c0.7,2.2-0.2,4.2-2.2,5.2c-2.1,1.1-4.7,0.2-5.8-1.9c-1.1-2.1-0.2-4.7,1.8-5.8c1-0.5,2-0.6,3.1-0.4--}}
{{--				c-0.1-0.3-0.2-0.6-0.2-0.8c-1.1-3.5-2.1-7-3.2-10.5c-0.2-0.5-0.1-0.8,0.4-1.1c4.1-2.6,8.1-5.2,12.2-7.8c0.2-0.1,0.3-0.2,0.6-0.3--}}
{{--				c0.1,0.3,0.1,0.5,0.2,0.7c1.5,5.1,3.1,10.2,4.6,15.4c0.6,2.1-0.3,4.4-2.3,5.2c-2.1,0.9-4.4,0.3-5.6-1.7c-0.8-1.5-0.9-3,0-4.4--}}
{{--				c0.9-1.4,2.2-2.1,3.9-2.1C125.6,107.4,125.9,107.4,126.2,107.4z"/> </g> </g> <path fill="#FF9248" d="M76.7,60.6l4.2,8.6c0,0.1,0.1,0.1,0.2,0.2l9.4,1.4c0.2,0,0.3,0.3,0.2,0.5l-6.8,6.7--}}
{{--		c-0.1,0.1-0.1,0.2-0.1,0.2l1.6,9.4c0,0.2-0.2,0.4-0.4,0.3l-8.4-4.4c-0.1,0-0.2,0-0.3,0l-8.4,4.4c-0.2,0.1-0.4-0.1-0.4-0.3l1.6-9.4--}}
{{--		c0-0.1,0-0.2-0.1-0.2l-6.8-6.7c-0.2-0.2-0.1-0.4,0.2-0.5l9.4-1.4c0.1,0,0.2-0.1,0.2-0.2l4.2-8.6C76.3,60.4,76.6,60.4,76.7,60.6z"/> </g> </svg> </div>                            Moments--}}
{{--                                                                </div> </li> </ul> </div> <div class="publisher-footer"> <div class="btn-group js_publisher-privacy" id="postTypePFM" data-toggle="tooltip" data-placement="top" data-value="public" title='Shared with: Public'> <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" data-display="static"> <span class="btn-group-text" id="postTypeText">Public</span> </button> <div class="dropdown-menu dropdown-menu-right"> <div class="dropdown-item pointer" data-title='Shared with: Public' data-values="public"> <i class="fa fa-globe mr5"></i>Public--}}
{{--                                                                </div> <div class="dropdown-item pointer" data-title='Shared with: Friends' data-values="friends"> <i class="fa fa-users mr5"></i>Friends--}}
{{--                                                                </div> <div class="dropdown-item pointer" data-title='Shared with: Only Me' data-values="me"> <i class="fa fa-lock mr5"></i>Only Me--}}
{{--                                                                </div> </div> </div> <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-sm btn-primary ml5 js_publisher-btn js_publisher">Post</button> </div> </div> </div> </div> </div> </div> </div> </div> <div class="card status-card create-modify"> <div class="card-top py-1 d-flex flex-column flex-lg-row justify-content-between align-items-center"> <div class="relative-parent"> <ul class="list-inline row mb-0"> <li class="col-md-3 col-sm-6 col-6 list-inline-item mb-3 mb-md-0"><a href="#" data-toggle="modal" data-target="#exampleModalPost"><img src="http://fyrestream.com//content/themes/default/frontend/images/create-post.png" class="create-post-icon" alt="story-video"> Create Post</a> </li> <li class="col-md-3 col-sm-6 col-6 list-inline-item mb-3 mb-md-0"><a href="http://fyrestream.com//market"><img src="http://fyrestream.com//content/themes/default/frontend/images/shopping-zone-marker.png" class="story-stop-img" alt="story-shop"> Market Listing</a> </li> <li class="col-md-4 col-sm-6 col-6 list-inline-item toggler-li mb-md-0"> <div class="story-card-toggoler d-flex align-items-center"> <img src="http://fyrestream.com//content/themes/default/frontend/img/f-stream-round-red-moments.png" alt="story-moments"> <span class="font-weight-bold mr-2">Share moments</span> <div class="show-moments-toggler-switch switch d-flex align-items-center rounded-pill position-relative"> <div class="toggle-tip">Show Moments</div> </div> </div> </li> <li class="col-md-2 col-sm-6 col-6 list-inline-item mb-3 mb-md-0"> <a href="#top"><img src="http://fyrestream.com//content/themes/default/frontend/images/Airplane Icon - Back to Top.png" alt=""></a> </li> </ul> </div> </div> </div> <div class="card story-card big-moments-div"> <div class="card"> <div class="card-header bg-transparent border-bottom-0"> <strong class="text-muted">Moments</strong> <div class="d-none d-sm-block text-muted pointer float-right"> <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title='Moments are photos and videos that only last 24 hours'></i> </div> </div> <div class="row"> </div> </div> </div> <div class="post-body" style="margin-top: 4em;"> <div class="js_posts_stream" data-get="newsfeed" data-filter="all" > <ul> <li class="margin-bottom-1em" style="list-style: none;"> <div class="post-card d-flex flex-column flex-md-row border rounded p-2 mt-2"> <a href="" data-toggle="dropdown" style="cursor: pointer;    z-index: 1;" data-display="static" class="more-btn "><i class="fas fa-ellipsis-h"></i></a> <div style="position: relative;  margin-bottom: 0px;background: none;border-radius: 0px; box-shadow: none; width: 100%" class="post--}}
{{--                                                            " data-id="260"> <div class="full-width post-body"> <div class="post-header"> <div class="post-avatar"> <a class="post-avatar-picture" href="http://fyrestream.com//danishtest" style="background-image:url(http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png);"> </a> <i class="fa fa-circle online-dot"></i> </div> <div class="post-meta"> <div class="float-right dropdown"> <div class="dropdown-menu dropdown-menu-right post-dropdown-menu"> <div class="dropdown-item pointer js_save-post"> <div class="action no-desc"> <i class="fa fa-bookmark fa-fw"></i> <span>Save Post</span> </div> </div> <div class="dropdown-divider"></div> <div class="dropdown-item pointer js_pin-post"> <div class="action no-desc"> <i class="fa fa-thumbtack fa-fw"></i> <span>Pin Post</span> </div> </div> <div class="dropdown-item pointer js_edit-post"> <div class="action no-desc"> <i class="fa fa-pencil-alt fa-fw"></i> Edit Post--}}
{{--                                                                        </div> </div> <div class="dropdown-item pointer js_delete-post"> <div class="action no-desc"> <i class="fa fa-trash-alt fa-fw"></i> Delete Post--}}
{{--                                                                        </div> </div> <div class="dropdown-item pointer js_disable-post-comments"> <div class="action no-desc"> <i class="fa fa-comment-slash fa-fw"></i> <span>Turn off Commenting</span> </div> </div> <div class="dropdown-divider"></div> <a href="http://fyrestream.com//posts/260" target="_blank" class="dropdown-item"> <div class="action no-desc"> <i class="fa fa-link fa-fw"></i> Open post in new tab--}}
{{--                                                                        </div> </a> </div> </div> <span class="js_user-popover" data-type="user" data-uid="58"> <a class="post-author" href="http://fyrestream.com//danishtest">Danish Test</a> </span> <span class="post-title"> </span> <div class="post-time"> <a href="http://fyrestream.com//posts/260" class="js_moment" data-time="2021-04-27 08:15:25">2021-04-27 08:15:25</a>--}}
{{--                                                                ---}}

{{--                                                                <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="public" title='Shared with: Public'> <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-display="static"> <i class="btn-group-icon fa fa-globe"></i> </button> <div class="dropdown-menu dropdown-menu-left"> <div onClick="setTimeout(function() { location.reload() },1000)" class="dropdown-item pointer js_edit-privacy" data-title='Shared with: Public' data-value="public"> <i class="fa fa-globe"></i> Public--}}
{{--                                                                        </div> <div onClick="setTimeout(function() { location.reload() },1000)" class="dropdown-item pointer js_edit-privacy" data-title='Shared with: Friends' data-value="friends"> <i class="fa fa-users"></i> Friends--}}
{{--                                                                        </div> <div onClick="setTimeout(function() { location.reload() },1000)" class="dropdown-item pointer js_edit-privacy" data-title='Shared with: Only Me' data-value="me"> <i class="fa fa-lock"></i> Only Me--}}
{{--                                                                        </div> </div> </div> </div> </div> </div> <div class="textBoldDiv "> <div class="post-replace textBoldDiv "> <div class="post-text js_readmore" dir="auto">yes</div> <div class="post-text-translation x-hidden" dir="auto"></div> <div class="post-text-plain x-hidden">yes</div> </div> </div> <div class="post-stats clearfix"> <div class="float-right mr10 customReactionLive" data-toggle="modal" data-url="posts/who_reacts.php?post_id=260"> <div class="reactions-stats"> <div class="reaction-btn-icon-custom" style="    margin-top: 2px;"> <div class="inline-emoji no_animation"> <div class="emoji emoji--wow"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> </div> <span>--}}
{{--                                1--}}
{{--                            </span> </div> </div> <span class="float-left"> <span class="pointer js_comments-toggle"> <i class="fa fa-comments"></i> 2 Comments--}}
{{--                    </span> <span class="pointer shareModal ml10 x-hidden" data-url="posts/who_shares.php?post_id=260"> <i class="fa fa-share"></i> 0 Shares--}}
{{--                    </span> </span> </div> <div class="post-actions clearfix"> <div class="action-btn unselectable reactions-wrapper js_unreact-post" data-reaction="wow"> <div class="reaction-btn"> <div class="reaction-btn-icon"> <div class="inline-emoji no_animation"> <div class="emoji emoji--wow"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> </div> <span class="reaction-btn-name yellow">wow</span> </div> <div class="reactions-container"> <div class="reactions_item duration-1 js_react-post" data-reaction="like" data-reaction-color="blue" data-title="like"> <div class="emoji emoji--like"> <div class="emoji__hand"> <div class="emoji__thumb"></div> </div> </div> </div> <div class="reactions_item duration-2 js_react-post" data-reaction="love" data-reaction-color="red" data-title="love"> <div class="emoji emoji--love"> <div class="emoji__heart"></div> </div> </div> <div class="reactions_item duration-3 js_react-post" data-reaction="haha" data-reaction-color="yellow" data-title="haha"> <div class="emoji emoji--haha"> <div class="emoji__face"> <div class="emoji__eyes"></div> <div class="emoji__mouth"> <div class="emoji__tongue"></div> </div> </div> </div> </div> <div class="reactions_item duration-4 js_react-post" data-reaction="yay" data-reaction-color="yellow" data-title="yay"> <div class="emoji emoji--yay"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__mouth"></div> </div> </div> </div> <div class="reactions_item duration-5 js_react-post" data-reaction="wow" data-reaction-color="yellow" data-title="wow"> <div class="emoji emoji--wow"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> <div class="reactions_item duration-6 js_react-post" data-reaction="sad" data-reaction-color="yellow" data-title="sad"> <div class="emoji emoji--sad"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> <div class="reactions_item duration-7 js_react-post" data-reaction="angry" data-reaction-color="orange" data-title="angry"> <div class="emoji emoji--angry"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> </div> </div> <div class="action-btn js_comment "> <div class="svg-container mr5" style="width:16px; height:16px; "> <?xml version="1.0" encoding="iso-8859-1"?> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <g> <path d="M448,0H64C28.704,0,0,28.704,0,64v288c0,35.296,28.704,64,64,64h32v80c0,6.208,3.584,11.872,9.216,14.496--}}
{{--			c2.144,0.992,4.48,1.504,6.784,1.504c3.68,0,7.328-1.28,10.24-3.712L232.992,416H448c35.296,0,64-28.704,64-64V64--}}
{{--			C512,28.704,483.296,0,448,0z M480,352c0,17.632-14.368,32-32,32H227.2c-3.744,0-7.36,1.312-10.24,3.712L128,461.856V400--}}
{{--			c0-8.832-7.168-16-16-16H64c-17.632,0-32-14.368-32-32V64c0-17.632,14.368-32,32-32h384c17.632,0,32,14.368,32,32V352z"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg> </div> <span>Comment</span> </div> <div class="action-btn" data-toggle="modal" data-url="posts/share.php?do=create&post_id=260"> <div class="svg-container mr5" style="width:16px; height:16px; "> <?xml version="1.0" encoding="iso-8859-1"?> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.008 512.008" style="enable-background:new 0 0 512.008 512.008;" xml:space="preserve"> <g> <g> <path d="M507.328,228.708l-160-160.032c-4.576-4.576-11.392-5.92-17.44-3.456C323.904,67.684,320,73.54,320,80.004v80h-48--}}
{{--			c-149.984,0-272,122.016-272,272c0,7.136,4.736,13.408,11.584,15.36c1.472,0.448,2.944,0.64,4.416,0.64--}}
{{--			c5.408,0,10.592-2.752,13.568-7.52l4.8-7.68c43.424-69.568,121.344-112.8,203.392-112.8H320v80c0,6.464,3.904,12.32,9.888,14.784--}}
{{--			c6.016,2.432,12.864,1.088,17.44-3.456l160-160C513.568,245.092,513.568,234.948,507.328,228.708z M352,361.38v-57.376--}}
{{--			c0-8.832-7.168-16-16-16h-98.24c-75.488,0-147.936,32.288-198.816,86.624C64.704,269.924,159.424,192.004,272,192.004h64--}}
{{--			c8.832,0,16-7.168,16-16v-57.376l121.376,121.376L352,361.38z"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg> </div> <span>Share</span> </div> </div> </div> <div class="post-footer "> <div class="post-comments"> <div class="comments-filter"> <div class="btn-group btn-group-sm js_comments-filter" data-value="post_comments"> <button type="button" class="btn dropdown-toggle ptb0 plr0" data-toggle="dropdown" data-display="static"> <span class="btn-group-text">Most Recent</span> </button> <div class="dropdown-menu dropdown-menu-left"> <div class="dropdown-item pointer" data-value="post_comments" data-id="260">Most Recent</div> <div class="dropdown-item pointer" data-value="post_comments_top" data-id="260">Top Comments</div> </div> </div> </div> <div class="comment js_comment-form " data-handle="post" data-id="260"> <div class="comment-avatar"> <a class="comment-avatar-picture" href="http://fyrestream.com//danishtest" style="background-image:url(http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png);"> </a> </div> <div class="comment-data"> <div class="x-form comment-form"> <textarea dir="auto" class="js_autosize js_mention js_post-comment" rows="1" placeholder='Write a comment...'></textarea> <ul class="x-form-tools clearfix"> <li class="x-form-tools-post js_post-comment"> <i class="far fa-paper-plane fa-lg fa-fw"></i> </li> <li class="x-form-tools-attach"> <i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="comment"></i> </li> <li class="x-form-tools-voice js_comment-voice-notes-toggle"> <i class="fas fa-microphone fa-lg fa-fw"></i> </li> <li class="x-form-tools-emoji js_emoji-menu-toggle"> <i class="far fa-smile-wink fa-lg fa-fw"></i> </li> </ul> </div> <div class="comment-voice-notes"> <div class="voice-recording-wrapper" data-handle="comment"> <div class="x-hidden js_voice-processing-message"> <div class="svg-container mr5" style="width:16px; height:16px; "> <?xml version="1.0" encoding="iso-8859-1"?> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;" xml:space="preserve"> <path style="fill:#2196F3;" d="M245.333,0C109.839,0,0,109.839,0,245.333s109.839,245.333,245.333,245.333--}}
{{--	s245.333-109.839,245.333-245.333C490.514,109.903,380.764,0.153,245.333,0z"/> <path style="fill:#FAFAFA;" d="M267.968,82.219c-12.496-12.492-32.752-12.492-45.248,0L104.533,200.533--}}
{{--	c-18.889,18.894-18.889,49.522,0,68.416c19.139,18.289,49.277,18.289,68.416,0l19.2-19.2v123.584--}}
{{--	c0,29.455,23.878,53.333,53.333,53.333c29.455,0,53.333-23.878,53.333-53.333V249.749l19.2,19.2--}}
{{--	c19.139,18.289,49.277,18.289,68.416,0c18.889-18.894,18.889-49.522,0-68.416L267.968,82.219z"/> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg> </div>                    Processing<span class="loading-dots"></span> </div> <div class="x-hidden js_voice-success-message"> <div class="svg-container mr5" style="width:16px; height:16px; "> <svg height="512pt" viewBox="0 -21 512.00533 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0" fill="#4caf50"/><path d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0" fill="#2196f3"/></svg> </div>                    Voice note recorded successfully--}}
{{--                                                                            <div class="float-right"> <button type="button" class="close js_voice-remove"> <span>&times;</span> </button> </div> </div> <div class="btn-voice-start js_voice-start"> <i class="fas fa-microphone mr5"></i>Record--}}
{{--                                                                        </div> <div class="btn-voice-stop js_voice-stop" style="display: none"> <i class="far fa-stop-circle mr5"></i>Recording <span class="js_voice-timer">00:00</span> </div> </div> </div> <div class="comment-attachments attachments clearfix x-hidden"> <ul> <li class="loading"> <div class="progress x-progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div> </li> </ul> </div> </div> </div> <div class="pb10 text-center js_comment-disabled-msg x-hidden">--}}
{{--                                                            Commenting has been turned off for this post.--}}
{{--                                                        </div> <div class="text-center x-hidden js_comments-filter-loader"> <div class="loader loader_large"></div> </div> <ul class="js_comments pt10 "> <li> <div class="comment " data-id="83" id="comment_83"> <div class="comment-avatar"> <a class="comment-avatar-picture" href="http://fyrestream.com//danishtest" style="background-image:url(http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png);"> </a> </div> <div class="comment-data"> <div class="comment-btn dropdown"> <i class="fas fa-ellipsis-h dropdown-toggle-icon" data-toggle="dropdown" data-display="static"></i> <div class="dropdown-menu dropdown-menu-right"> <div class="dropdown-item pointer js_edit-comment">Edit Comment</div> <div class="dropdown-item pointer js_delete-comment">Delete Comment</div> </div> </div> <div class="comment-inner-wrapper"> <div class="comment-inner js_notifier-flasher"> <div class="comment-author"> <span class="js_user-popover" data-type="user" data-uid="58"> <a href="http://fyrestream.com//danishtest" >Danish Test</a> </span> </div> <div class="comment-replace"> <div class="comment-text js_readmore" dir="auto">abc</div> <div class="comment-text-plain x-hidden">abc</div> </div> </div> </div> <ul class="comment-actions clearfix"> <li> <div class="pointer unselectable reactions-wrapper " data-reaction=""> <div class="reaction-btn"> <div class="reaction-btn-icon d-none"> <i class="fa fa-thumbs-up fa-fw"></i> </div> <span class="reaction-btn-name text-link">Like</span> </div> <div class="reactions-container"> <div class="reactions_item duration-1 js_react-comment" data-reaction="like" data-reaction-color="blue" data-title="like"> <div class="emoji emoji--like"> <div class="emoji__hand"> <div class="emoji__thumb"></div> </div> </div> </div> <div class="reactions_item duration-2 js_react-comment" data-reaction="love" data-reaction-color="red" data-title="love"> <div class="emoji emoji--love"> <div class="emoji__heart"></div> </div> </div> <div class="reactions_item duration-3 js_react-comment" data-reaction="haha" data-reaction-color="yellow" data-title="haha"> <div class="emoji emoji--haha"> <div class="emoji__face"> <div class="emoji__eyes"></div> <div class="emoji__mouth"> <div class="emoji__tongue"></div> </div> </div> </div> </div> <div class="reactions_item duration-4 js_react-comment" data-reaction="yay" data-reaction-color="yellow" data-title="yay"> <div class="emoji emoji--yay"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__mouth"></div> </div> </div> </div> <div class="reactions_item duration-5 js_react-comment" data-reaction="wow" data-reaction-color="yellow" data-title="wow"> <div class="emoji emoji--wow"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> <div class="reactions_item duration-6 js_react-comment" data-reaction="sad" data-reaction-color="yellow" data-title="sad"> <div class="emoji emoji--sad"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> <div class="reactions_item duration-7 js_react-comment" data-reaction="angry" data-reaction-color="orange" data-title="angry"> <div class="emoji emoji--angry"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> </div> </div> </li> <li> <span class="text-link js_reply " data-username="">--}}
{{--                        Reply--}}
{{--                    </span> </li> </ul> <div class="comment-replies x-hidden"> <ul class="js_replies"> </ul> <div class="x-hidden js_reply-form"> <div class="x-form comment-form"> <textarea dir="auto" class="js_autosize js_mention js_post-reply" rows="1" placeholder='Write a Reply'></textarea> <ul class="x-form-tools clearfix"> <li class="x-form-tools-post js_post-reply"> <i class="far fa-paper-plane fa-lg fa-fw"></i> </li> <li class="x-form-tools-attach"> <i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="comment"></i> </li> <li class="x-form-tools-voice js_comment-voice-notes-toggle"> <i class="fas fa-microphone fa-lg fa-fw"></i> </li> <li class="x-form-tools-emoji js_emoji-menu-toggle"> <i class="far fa-smile-wink fa-lg fa-fw"></i> </li> </ul> </div> <div class="comment-voice-notes"> <div class="voice-recording-wrapper" data-handle="comment"> <div class="x-hidden js_voice-processing-message"> <div class="svg-container mr5" style="width:16px; height:16px; "> <?xml version="1.0" encoding="iso-8859-1"?> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;" xml:space="preserve"> <path style="fill:#2196F3;" d="M245.333,0C109.839,0,0,109.839,0,245.333s109.839,245.333,245.333,245.333--}}
{{--	s245.333-109.839,245.333-245.333C490.514,109.903,380.764,0.153,245.333,0z"/> <path style="fill:#FAFAFA;" d="M267.968,82.219c-12.496-12.492-32.752-12.492-45.248,0L104.533,200.533--}}
{{--	c-18.889,18.894-18.889,49.522,0,68.416c19.139,18.289,49.277,18.289,68.416,0l19.2-19.2v123.584--}}
{{--	c0,29.455,23.878,53.333,53.333,53.333c29.455,0,53.333-23.878,53.333-53.333V249.749l19.2,19.2--}}
{{--	c19.139,18.289,49.277,18.289,68.416,0c18.889-18.894,18.889-49.522,0-68.416L267.968,82.219z"/> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg> </div>                                        Processing<span class="loading-dots"></span> </div> <div class="x-hidden js_voice-success-message"> <div class="svg-container mr5" style="width:16px; height:16px; "> <svg height="512pt" viewBox="0 -21 512.00533 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0" fill="#4caf50"/><path d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0" fill="#2196f3"/></svg> </div>                                        Voice note recorded successfully--}}
{{--                                                                                            <div class="float-right"> <button type="button" class="close js_voice-remove"> <span>&times;</span> </button> </div> </div> <div class="btn-voice-start js_voice-start"> <i class="fas fa-microphone mr5"></i>Record--}}
{{--                                                                                        </div> <div class="btn-voice-stop js_voice-stop" style="display: none"> <i class="far fa-stop-circle mr5"></i>Recording <span class="js_voice-timer">00:00</span> </div> </div> </div> <div class="comment-attachments attachments clearfix x-hidden"> <ul> <li class="loading"> <div class="progress x-progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div> </li> </ul> </div> </div> </div> </div> </div> </li> <li> <div class="comment " data-id="82" id="comment_82"> <div class="comment-avatar"> <a class="comment-avatar-picture" href="http://fyrestream.com//danishtest" style="background-image:url(http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png);"> </a> </div> <div class="comment-data"> <div class="comment-btn dropdown"> <i class="fas fa-ellipsis-h dropdown-toggle-icon" data-toggle="dropdown" data-display="static"></i> <div class="dropdown-menu dropdown-menu-right"> <div class="dropdown-item pointer js_edit-comment">Edit Comment</div> <div class="dropdown-item pointer js_delete-comment">Delete Comment</div> </div> </div> <div class="comment-inner-wrapper"> <div class="comment-inner js_notifier-flasher"> <div class="comment-author"> <span class="js_user-popover" data-type="user" data-uid="58"> <a href="http://fyrestream.com//danishtest" >Danish Test</a> </span> </div> <div class="comment-replace"> <div class="comment-text js_readmore" dir="auto">abc</div> <div class="comment-text-plain x-hidden">abc</div> </div> </div> </div> <ul class="comment-actions clearfix"> <li> <div class="pointer unselectable reactions-wrapper " data-reaction=""> <div class="reaction-btn"> <div class="reaction-btn-icon d-none"> <i class="fa fa-thumbs-up fa-fw"></i> </div> <span class="reaction-btn-name text-link">Like</span> </div> <div class="reactions-container"> <div class="reactions_item duration-1 js_react-comment" data-reaction="like" data-reaction-color="blue" data-title="like"> <div class="emoji emoji--like"> <div class="emoji__hand"> <div class="emoji__thumb"></div> </div> </div> </div> <div class="reactions_item duration-2 js_react-comment" data-reaction="love" data-reaction-color="red" data-title="love"> <div class="emoji emoji--love"> <div class="emoji__heart"></div> </div> </div> <div class="reactions_item duration-3 js_react-comment" data-reaction="haha" data-reaction-color="yellow" data-title="haha"> <div class="emoji emoji--haha"> <div class="emoji__face"> <div class="emoji__eyes"></div> <div class="emoji__mouth"> <div class="emoji__tongue"></div> </div> </div> </div> </div> <div class="reactions_item duration-4 js_react-comment" data-reaction="yay" data-reaction-color="yellow" data-title="yay"> <div class="emoji emoji--yay"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__mouth"></div> </div> </div> </div> <div class="reactions_item duration-5 js_react-comment" data-reaction="wow" data-reaction-color="yellow" data-title="wow"> <div class="emoji emoji--wow"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> <div class="reactions_item duration-6 js_react-comment" data-reaction="sad" data-reaction-color="yellow" data-title="sad"> <div class="emoji emoji--sad"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> <div class="reactions_item duration-7 js_react-comment" data-reaction="angry" data-reaction-color="orange" data-title="angry"> <div class="emoji emoji--angry"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> </div> </div> </li> <li> <span class="text-link js_reply " data-username="">--}}
{{--                        Reply--}}
{{--                    </span> </li> </ul> <div class="comment-replies x-hidden"> <ul class="js_replies"> </ul> <div class="x-hidden js_reply-form"> <div class="x-form comment-form"> <textarea dir="auto" class="js_autosize js_mention js_post-reply" rows="1" placeholder='Write a Reply'></textarea> <ul class="x-form-tools clearfix"> <li class="x-form-tools-post js_post-reply"> <i class="far fa-paper-plane fa-lg fa-fw"></i> </li> <li class="x-form-tools-attach"> <i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="comment"></i> </li> <li class="x-form-tools-voice js_comment-voice-notes-toggle"> <i class="fas fa-microphone fa-lg fa-fw"></i> </li> <li class="x-form-tools-emoji js_emoji-menu-toggle"> <i class="far fa-smile-wink fa-lg fa-fw"></i> </li> </ul> </div> <div class="comment-voice-notes"> <div class="voice-recording-wrapper" data-handle="comment"> <div class="x-hidden js_voice-processing-message"> <div class="svg-container mr5" style="width:16px; height:16px; "> <?xml version="1.0" encoding="iso-8859-1"?> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;" xml:space="preserve"> <path style="fill:#2196F3;" d="M245.333,0C109.839,0,0,109.839,0,245.333s109.839,245.333,245.333,245.333--}}
{{--	s245.333-109.839,245.333-245.333C490.514,109.903,380.764,0.153,245.333,0z"/> <path style="fill:#FAFAFA;" d="M267.968,82.219c-12.496-12.492-32.752-12.492-45.248,0L104.533,200.533--}}
{{--	c-18.889,18.894-18.889,49.522,0,68.416c19.139,18.289,49.277,18.289,68.416,0l19.2-19.2v123.584--}}
{{--	c0,29.455,23.878,53.333,53.333,53.333c29.455,0,53.333-23.878,53.333-53.333V249.749l19.2,19.2--}}
{{--	c19.139,18.289,49.277,18.289,68.416,0c18.889-18.894,18.889-49.522,0-68.416L267.968,82.219z"/> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg> </div>                                        Processing<span class="loading-dots"></span> </div> <div class="x-hidden js_voice-success-message"> <div class="svg-container mr5" style="width:16px; height:16px; "> <svg height="512pt" viewBox="0 -21 512.00533 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0" fill="#4caf50"/><path d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0" fill="#2196f3"/></svg> </div>                                        Voice note recorded successfully--}}
{{--                                                                                            <div class="float-right"> <button type="button" class="close js_voice-remove"> <span>&times;</span> </button> </div> </div> <div class="btn-voice-start js_voice-start"> <i class="fas fa-microphone mr5"></i>Record--}}
{{--                                                                                        </div> <div class="btn-voice-stop js_voice-stop" style="display: none"> <i class="far fa-stop-circle mr5"></i>Recording <span class="js_voice-timer">00:00</span> </div> </div> </div> <div class="comment-attachments attachments clearfix x-hidden"> <ul> <li class="loading"> <div class="progress x-progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div> </li> </ul> </div> </div> </div> </div> </div> </li> </ul> </div> </div> </div> </div> </li> <li class="margin-bottom-1em" style="list-style: none;"> <div class="post-card d-flex flex-column flex-md-row border rounded p-2 mt-2"> <a href="" data-toggle="dropdown" style="cursor: pointer;    z-index: 1;" data-display="static" class="more-btn "><i class="fas fa-ellipsis-h"></i></a> <div style="position: relative;  margin-bottom: 0px;background: none;border-radius: 0px; box-shadow: none; width: 100%" class="post--}}
{{--                                                            " data-id="250"> <div class="full-width post-body"> <div class="post-header"> <div class="post-avatar"> <a class="post-avatar-picture" href="http://fyrestream.com//danishtest" style="background-image:url(http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png);"> </a> <i class="fa fa-circle online-dot"></i> </div> <div class="post-meta"> <div class="float-right dropdown"> <div class="dropdown-menu dropdown-menu-right post-dropdown-menu"> <div class="dropdown-item pointer js_save-post"> <div class="action no-desc"> <i class="fa fa-bookmark fa-fw"></i> <span>Save Post</span> </div> </div> <div class="dropdown-divider"></div> <div class="dropdown-item pointer js_pin-post"> <div class="action no-desc"> <i class="fa fa-thumbtack fa-fw"></i> <span>Pin Post</span> </div> </div> <div class="dropdown-item pointer js_edit-post"> <div class="action no-desc"> <i class="fa fa-pencil-alt fa-fw"></i> Edit Post--}}
{{--                                                                        </div> </div> <div class="dropdown-item pointer js_delete-post"> <div class="action no-desc"> <i class="fa fa-trash-alt fa-fw"></i> Delete Post--}}
{{--                                                                        </div> </div> <div class="dropdown-item pointer js_disable-post-comments"> <div class="action no-desc"> <i class="fa fa-comment-slash fa-fw"></i> <span>Turn off Commenting</span> </div> </div> <div class="dropdown-divider"></div> <a href="http://fyrestream.com//posts/250" target="_blank" class="dropdown-item"> <div class="action no-desc"> <i class="fa fa-link fa-fw"></i> Open post in new tab--}}
{{--                                                                        </div> </a> </div> </div> <span class="js_user-popover" data-type="user" data-uid="58"> <a class="post-author" href="http://fyrestream.com//danishtest">Danish Test</a> </span> <span class="post-title">--}}
{{--                                                added a photo--}}


{{--                    </span> <span class="post-title">--}}
{{--                 & is Feeling Loved <i class="twa twa-lg twa-heart-eyes"></i> </span> <div class="post-time"> <a href="http://fyrestream.com//posts/250" class="js_moment" data-time="2021-04-23 06:58:26">2021-04-23 06:58:26</a>--}}
{{--                                                                ---}}

{{--                                                                <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="public" title='Shared with: Public'> <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-display="static"> <i class="btn-group-icon fa fa-globe"></i> </button> <div class="dropdown-menu dropdown-menu-left"> <div onClick="setTimeout(function() { location.reload() },1000)" class="dropdown-item pointer js_edit-privacy" data-title='Shared with: Public' data-value="public"> <i class="fa fa-globe"></i> Public--}}
{{--                                                                        </div> <div onClick="setTimeout(function() { location.reload() },1000)" class="dropdown-item pointer js_edit-privacy" data-title='Shared with: Friends' data-value="friends"> <i class="fa fa-users"></i> Friends--}}
{{--                                                                        </div> <div onClick="setTimeout(function() { location.reload() },1000)" class="dropdown-item pointer js_edit-privacy" data-title='Shared with: Only Me' data-value="me"> <i class="fa fa-lock"></i> Only Me--}}
{{--                                                                        </div> </div> </div> </div> </div> </div> <div class="textBoldDiv "> <div class="post-replace textBoldDiv "> <div class="post-text js_readmore" dir="auto">Hello</div> <div class="post-text-translation x-hidden" dir="auto"></div> <div class="post-text-plain x-hidden">Hello</div> </div> </div> <div class="mt10 clearfix"> <div class="pg_wrapper" style="overflow: hidden"> <div class="pg_1x "> <a href="http://fyrestream.com//photos/125" class="js_lightbox" data-id="125" data-image="http://fyrestream.com//content/uploads/photos/2021/04/sngine_1f719d2ed526b91d1296e376a5eaee62.png" data-context="album"> <img src="http://fyrestream.com//content/uploads/photos/2021/04/sngine_1f719d2ed526b91d1296e376a5eaee62.png"> </a> </div> </div> </div> <div class="post-stats clearfix"> <div class="float-right mr10 customReactionLive" data-toggle="modal" data-url="posts/who_reacts.php?post_id=250"> <div class="reactions-stats"> <div class="reaction-btn-icon-custom" style="    margin-top: 2px;"> <div class="inline-emoji no_animation"> <img style="width: 20px;position: relative;" src="http://fyrestream.com//content/themes/default/frontend/like_images/group_28.png" alt=""> </div> </div> <span>--}}
{{--                                1--}}
{{--                            </span> </div> </div> <span class="float-left"> <span class="pointer js_comments-toggle"> <i class="fa fa-comments"></i> 1 Comments--}}
{{--                    </span> <span class="pointer shareModal ml10 x-hidden" data-url="posts/who_shares.php?post_id=250"> <i class="fa fa-share"></i> 0 Shares--}}
{{--                    </span> </span> </div> <div class="post-actions clearfix"> <div class="action-btn unselectable reactions-wrapper js_unreact-post" data-reaction="like"> <div class="reaction-btn"> <div class="reaction-btn-icon"> <div class="inline-emoji no_animation"> <img style="width: 20px;position: relative;" src="http://fyrestream.com//content/themes/default/frontend/like_images/group_28.png" alt=""> </div> </div> <span class="reaction-btn-name blue">like</span> </div> <div class="reactions-container"> <div class="reactions_item duration-1 js_react-post" data-reaction="like" data-reaction-color="blue" data-title="like"> <div class="emoji emoji--like"> <div class="emoji__hand"> <div class="emoji__thumb"></div> </div> </div> </div> <div class="reactions_item duration-2 js_react-post" data-reaction="love" data-reaction-color="red" data-title="love"> <div class="emoji emoji--love"> <div class="emoji__heart"></div> </div> </div> <div class="reactions_item duration-3 js_react-post" data-reaction="haha" data-reaction-color="yellow" data-title="haha"> <div class="emoji emoji--haha"> <div class="emoji__face"> <div class="emoji__eyes"></div> <div class="emoji__mouth"> <div class="emoji__tongue"></div> </div> </div> </div> </div> <div class="reactions_item duration-4 js_react-post" data-reaction="yay" data-reaction-color="yellow" data-title="yay"> <div class="emoji emoji--yay"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__mouth"></div> </div> </div> </div> <div class="reactions_item duration-5 js_react-post" data-reaction="wow" data-reaction-color="yellow" data-title="wow"> <div class="emoji emoji--wow"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> <div class="reactions_item duration-6 js_react-post" data-reaction="sad" data-reaction-color="yellow" data-title="sad"> <div class="emoji emoji--sad"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> <div class="reactions_item duration-7 js_react-post" data-reaction="angry" data-reaction-color="orange" data-title="angry"> <div class="emoji emoji--angry"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> </div> </div> <div class="action-btn js_comment "> <div class="svg-container mr5" style="width:16px; height:16px; "> <?xml version="1.0" encoding="iso-8859-1"?> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <g> <path d="M448,0H64C28.704,0,0,28.704,0,64v288c0,35.296,28.704,64,64,64h32v80c0,6.208,3.584,11.872,9.216,14.496--}}
{{--			c2.144,0.992,4.48,1.504,6.784,1.504c3.68,0,7.328-1.28,10.24-3.712L232.992,416H448c35.296,0,64-28.704,64-64V64--}}
{{--			C512,28.704,483.296,0,448,0z M480,352c0,17.632-14.368,32-32,32H227.2c-3.744,0-7.36,1.312-10.24,3.712L128,461.856V400--}}
{{--			c0-8.832-7.168-16-16-16H64c-17.632,0-32-14.368-32-32V64c0-17.632,14.368-32,32-32h384c17.632,0,32,14.368,32,32V352z"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg> </div> <span>Comment</span> </div> <div class="action-btn" data-toggle="modal" data-url="posts/share.php?do=create&post_id=250"> <div class="svg-container mr5" style="width:16px; height:16px; "> <?xml version="1.0" encoding="iso-8859-1"?> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.008 512.008" style="enable-background:new 0 0 512.008 512.008;" xml:space="preserve"> <g> <g> <path d="M507.328,228.708l-160-160.032c-4.576-4.576-11.392-5.92-17.44-3.456C323.904,67.684,320,73.54,320,80.004v80h-48--}}
{{--			c-149.984,0-272,122.016-272,272c0,7.136,4.736,13.408,11.584,15.36c1.472,0.448,2.944,0.64,4.416,0.64--}}
{{--			c5.408,0,10.592-2.752,13.568-7.52l4.8-7.68c43.424-69.568,121.344-112.8,203.392-112.8H320v80c0,6.464,3.904,12.32,9.888,14.784--}}
{{--			c6.016,2.432,12.864,1.088,17.44-3.456l160-160C513.568,245.092,513.568,234.948,507.328,228.708z M352,361.38v-57.376--}}
{{--			c0-8.832-7.168-16-16-16h-98.24c-75.488,0-147.936,32.288-198.816,86.624C64.704,269.924,159.424,192.004,272,192.004h64--}}
{{--			c8.832,0,16-7.168,16-16v-57.376l121.376,121.376L352,361.38z"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg> </div> <span>Share</span> </div> </div> </div> <div class="post-footer "> <div class="post-comments"> <div class="comments-filter"> <div class="btn-group btn-group-sm js_comments-filter" data-value="post_comments"> <button type="button" class="btn dropdown-toggle ptb0 plr0" data-toggle="dropdown" data-display="static"> <span class="btn-group-text">Most Recent</span> </button> <div class="dropdown-menu dropdown-menu-left"> <div class="dropdown-item pointer" data-value="post_comments" data-id="250">Most Recent</div> <div class="dropdown-item pointer" data-value="post_comments_top" data-id="250">Top Comments</div> </div> </div> </div> <div class="comment js_comment-form " data-handle="post" data-id="250"> <div class="comment-avatar"> <a class="comment-avatar-picture" href="http://fyrestream.com//danishtest" style="background-image:url(http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png);"> </a> </div> <div class="comment-data"> <div class="x-form comment-form"> <textarea dir="auto" class="js_autosize js_mention js_post-comment" rows="1" placeholder='Write a comment...'></textarea> <ul class="x-form-tools clearfix"> <li class="x-form-tools-post js_post-comment"> <i class="far fa-paper-plane fa-lg fa-fw"></i> </li> <li class="x-form-tools-attach"> <i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="comment"></i> </li> <li class="x-form-tools-voice js_comment-voice-notes-toggle"> <i class="fas fa-microphone fa-lg fa-fw"></i> </li> <li class="x-form-tools-emoji js_emoji-menu-toggle"> <i class="far fa-smile-wink fa-lg fa-fw"></i> </li> </ul> </div> <div class="comment-voice-notes"> <div class="voice-recording-wrapper" data-handle="comment"> <div class="x-hidden js_voice-processing-message"> <div class="svg-container mr5" style="width:16px; height:16px; "> <?xml version="1.0" encoding="iso-8859-1"?> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;" xml:space="preserve"> <path style="fill:#2196F3;" d="M245.333,0C109.839,0,0,109.839,0,245.333s109.839,245.333,245.333,245.333--}}
{{--	s245.333-109.839,245.333-245.333C490.514,109.903,380.764,0.153,245.333,0z"/> <path style="fill:#FAFAFA;" d="M267.968,82.219c-12.496-12.492-32.752-12.492-45.248,0L104.533,200.533--}}
{{--	c-18.889,18.894-18.889,49.522,0,68.416c19.139,18.289,49.277,18.289,68.416,0l19.2-19.2v123.584--}}
{{--	c0,29.455,23.878,53.333,53.333,53.333c29.455,0,53.333-23.878,53.333-53.333V249.749l19.2,19.2--}}
{{--	c19.139,18.289,49.277,18.289,68.416,0c18.889-18.894,18.889-49.522,0-68.416L267.968,82.219z"/> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg> </div>                    Processing<span class="loading-dots"></span> </div> <div class="x-hidden js_voice-success-message"> <div class="svg-container mr5" style="width:16px; height:16px; "> <svg height="512pt" viewBox="0 -21 512.00533 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0" fill="#4caf50"/><path d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0" fill="#2196f3"/></svg> </div>                    Voice note recorded successfully--}}
{{--                                                                            <div class="float-right"> <button type="button" class="close js_voice-remove"> <span>&times;</span> </button> </div> </div> <div class="btn-voice-start js_voice-start"> <i class="fas fa-microphone mr5"></i>Record--}}
{{--                                                                        </div> <div class="btn-voice-stop js_voice-stop" style="display: none"> <i class="far fa-stop-circle mr5"></i>Recording <span class="js_voice-timer">00:00</span> </div> </div> </div> <div class="comment-attachments attachments clearfix x-hidden"> <ul> <li class="loading"> <div class="progress x-progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div> </li> </ul> </div> </div> </div> <div class="pb10 text-center js_comment-disabled-msg x-hidden">--}}
{{--                                                            Commenting has been turned off for this post.--}}
{{--                                                        </div> <div class="text-center x-hidden js_comments-filter-loader"> <div class="loader loader_large"></div> </div> <ul class="js_comments pt10 "> <li> <div class="comment " data-id="80" id="comment_80"> <div class="comment-avatar"> <a class="comment-avatar-picture" href="http://fyrestream.com//danishtest" style="background-image:url(http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png);"> </a> </div> <div class="comment-data"> <div class="comment-btn dropdown"> <i class="fas fa-ellipsis-h dropdown-toggle-icon" data-toggle="dropdown" data-display="static"></i> <div class="dropdown-menu dropdown-menu-right"> <div class="dropdown-item pointer js_edit-comment">Edit Comment</div> <div class="dropdown-item pointer js_delete-comment">Delete Comment</div> </div> </div> <div class="comment-inner-wrapper"> <div class="comment-inner js_notifier-flasher"> <div class="comment-author"> <span class="js_user-popover" data-type="user" data-uid="58"> <a href="http://fyrestream.com//danishtest" >Danish Test</a> </span> </div> <div class="comment-replace"> <div class="comment-text js_readmore" dir="auto">good</div> <div class="comment-text-plain x-hidden">good</div> </div> </div> </div> <ul class="comment-actions clearfix"> <li> <div class="pointer unselectable reactions-wrapper " data-reaction=""> <div class="reaction-btn"> <div class="reaction-btn-icon d-none"> <i class="fa fa-thumbs-up fa-fw"></i> </div> <span class="reaction-btn-name text-link">Like</span> </div> <div class="reactions-container"> <div class="reactions_item duration-1 js_react-comment" data-reaction="like" data-reaction-color="blue" data-title="like"> <div class="emoji emoji--like"> <div class="emoji__hand"> <div class="emoji__thumb"></div> </div> </div> </div> <div class="reactions_item duration-2 js_react-comment" data-reaction="love" data-reaction-color="red" data-title="love"> <div class="emoji emoji--love"> <div class="emoji__heart"></div> </div> </div> <div class="reactions_item duration-3 js_react-comment" data-reaction="haha" data-reaction-color="yellow" data-title="haha"> <div class="emoji emoji--haha"> <div class="emoji__face"> <div class="emoji__eyes"></div> <div class="emoji__mouth"> <div class="emoji__tongue"></div> </div> </div> </div> </div> <div class="reactions_item duration-4 js_react-comment" data-reaction="yay" data-reaction-color="yellow" data-title="yay"> <div class="emoji emoji--yay"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__mouth"></div> </div> </div> </div> <div class="reactions_item duration-5 js_react-comment" data-reaction="wow" data-reaction-color="yellow" data-title="wow"> <div class="emoji emoji--wow"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> <div class="reactions_item duration-6 js_react-comment" data-reaction="sad" data-reaction-color="yellow" data-title="sad"> <div class="emoji emoji--sad"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> <div class="reactions_item duration-7 js_react-comment" data-reaction="angry" data-reaction-color="orange" data-title="angry"> <div class="emoji emoji--angry"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> </div> </div> </li> <li> <span class="text-link js_reply " data-username="">--}}
{{--                        Reply--}}
{{--                    </span> </li> </ul> <div class="comment-replies x-hidden"> <ul class="js_replies"> </ul> <div class="x-hidden js_reply-form"> <div class="x-form comment-form"> <textarea dir="auto" class="js_autosize js_mention js_post-reply" rows="1" placeholder='Write a Reply'></textarea> <ul class="x-form-tools clearfix"> <li class="x-form-tools-post js_post-reply"> <i class="far fa-paper-plane fa-lg fa-fw"></i> </li> <li class="x-form-tools-attach"> <i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="comment"></i> </li> <li class="x-form-tools-voice js_comment-voice-notes-toggle"> <i class="fas fa-microphone fa-lg fa-fw"></i> </li> <li class="x-form-tools-emoji js_emoji-menu-toggle"> <i class="far fa-smile-wink fa-lg fa-fw"></i> </li> </ul> </div> <div class="comment-voice-notes"> <div class="voice-recording-wrapper" data-handle="comment"> <div class="x-hidden js_voice-processing-message"> <div class="svg-container mr5" style="width:16px; height:16px; "> <?xml version="1.0" encoding="iso-8859-1"?> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;" xml:space="preserve"> <path style="fill:#2196F3;" d="M245.333,0C109.839,0,0,109.839,0,245.333s109.839,245.333,245.333,245.333--}}
{{--	s245.333-109.839,245.333-245.333C490.514,109.903,380.764,0.153,245.333,0z"/> <path style="fill:#FAFAFA;" d="M267.968,82.219c-12.496-12.492-32.752-12.492-45.248,0L104.533,200.533--}}
{{--	c-18.889,18.894-18.889,49.522,0,68.416c19.139,18.289,49.277,18.289,68.416,0l19.2-19.2v123.584--}}
{{--	c0,29.455,23.878,53.333,53.333,53.333c29.455,0,53.333-23.878,53.333-53.333V249.749l19.2,19.2--}}
{{--	c19.139,18.289,49.277,18.289,68.416,0c18.889-18.894,18.889-49.522,0-68.416L267.968,82.219z"/> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg> </div>                                        Processing<span class="loading-dots"></span> </div> <div class="x-hidden js_voice-success-message"> <div class="svg-container mr5" style="width:16px; height:16px; "> <svg height="512pt" viewBox="0 -21 512.00533 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0" fill="#4caf50"/><path d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0" fill="#2196f3"/></svg> </div>                                        Voice note recorded successfully--}}
{{--                                                                                            <div class="float-right"> <button type="button" class="close js_voice-remove"> <span>&times;</span> </button> </div> </div> <div class="btn-voice-start js_voice-start"> <i class="fas fa-microphone mr5"></i>Record--}}
{{--                                                                                        </div> <div class="btn-voice-stop js_voice-stop" style="display: none"> <i class="far fa-stop-circle mr5"></i>Recording <span class="js_voice-timer">00:00</span> </div> </div> </div> <div class="comment-attachments attachments clearfix x-hidden"> <ul> <li class="loading"> <div class="progress x-progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div> </li> </ul> </div> </div> </div> </div> </div> </li> </ul> </div> </div> </div> </div> </li> <li class="margin-bottom-1em" style="list-style: none;"> <div class="post-card d-flex flex-column flex-md-row border rounded p-2 mt-2"> <a href="" data-toggle="dropdown" style="cursor: pointer;    z-index: 1;" data-display="static" class="more-btn "><i class="fas fa-ellipsis-h"></i></a> <div style="position: relative;  margin-bottom: 0px;background: none;border-radius: 0px; box-shadow: none; width: 100%" class="post--}}
{{--                                                            " data-id="249"> <div class="full-width post-body"> <div class="post-header"> <div class="post-avatar"> <a class="post-avatar-picture" href="http://fyrestream.com//danishtest" style="background-image:url(http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png);"> </a> <i class="fa fa-circle online-dot"></i> </div> <div class="post-meta"> <div class="float-right dropdown"> <div class="dropdown-menu dropdown-menu-right post-dropdown-menu"> <div class="dropdown-item pointer js_save-post"> <div class="action no-desc"> <i class="fa fa-bookmark fa-fw"></i> <span>Save Post</span> </div> </div> <div class="dropdown-divider"></div> <div class="dropdown-item pointer js_pin-post"> <div class="action no-desc"> <i class="fa fa-thumbtack fa-fw"></i> <span>Pin Post</span> </div> </div> <div class="dropdown-item pointer js_edit-post"> <div class="action no-desc"> <i class="fa fa-pencil-alt fa-fw"></i> Edit Post--}}
{{--                                                                        </div> </div> <div class="dropdown-item pointer js_delete-post"> <div class="action no-desc"> <i class="fa fa-trash-alt fa-fw"></i> Delete Post--}}
{{--                                                                        </div> </div> <div class="dropdown-item pointer js_disable-post-comments"> <div class="action no-desc"> <i class="fa fa-comment-slash fa-fw"></i> <span>Turn off Commenting</span> </div> </div> <div class="dropdown-divider"></div> <a href="http://fyrestream.com//posts/249" target="_blank" class="dropdown-item"> <div class="action no-desc"> <i class="fa fa-link fa-fw"></i> Open post in new tab--}}
{{--                                                                        </div> </a> </div> </div> <span class="js_user-popover" data-type="user" data-uid="58"> <a class="post-author" href="http://fyrestream.com//danishtest">Danish Test</a> </span> <span class="post-title">--}}
{{--                            updated the profile picture--}}


{{--                    </span> <div class="post-time"> <a href="http://fyrestream.com//posts/249" class="js_moment" data-time="2021-04-23 06:55:59">2021-04-23 06:55:59</a>--}}
{{--                                                                ---}}

{{--                                                                <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="public" title='Shared with: Public'> <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-display="static"> <i class="btn-group-icon fa fa-globe"></i> </button> <div class="dropdown-menu dropdown-menu-left"> <div onClick="setTimeout(function() { location.reload() },1000)" class="dropdown-item pointer js_edit-privacy" data-title='Shared with: Public' data-value="public"> <i class="fa fa-globe"></i> Public--}}
{{--                                                                        </div> <div onClick="setTimeout(function() { location.reload() },1000)" class="dropdown-item pointer js_edit-privacy" data-title='Shared with: Friends' data-value="friends"> <i class="fa fa-users"></i> Friends--}}
{{--                                                                        </div> <div onClick="setTimeout(function() { location.reload() },1000)" class="dropdown-item pointer js_edit-privacy" data-title='Shared with: Only Me' data-value="me"> <i class="fa fa-lock"></i> Only Me--}}
{{--                                                                        </div> </div> </div> </div> </div> </div> <div class="textBoldDiv "> <div class="post-replace textBoldDiv "> <div class="post-text js_readmore" dir="auto"></div> <div class="post-text-translation x-hidden" dir="auto"></div> <div class="post-text-plain x-hidden"></div> </div> </div> <div class="mt10 clearfix"> <div class="pg_wrapper" style="overflow: hidden"> <div class="pg_1x "> <a href="http://fyrestream.com//photos/124" class="js_lightbox" data-id="124" data-image="http://fyrestream.com//content/uploads/photos/2021/04/sngine_356feaec21c0f5a215d5b555d114e8e6.png" data-context="album"> <img src="http://fyrestream.com//content/uploads/photos/2021/04/sngine_356feaec21c0f5a215d5b555d114e8e6.png"> </a> </div> </div> </div> <div class="post-stats clearfix"> <div class="float-right mr10 customReactionLive" data-toggle="modal" data-url="posts/who_reacts.php?post_id=249"> <div class="reactions-stats"> <div class="reaction-btn-icon-custom" style="    margin-top: 2px;"> <div class="inline-emoji no_animation"> </div> </div> <span> </span> </div> </div> <span class="float-left"> <span class="pointer js_comments-toggle"> <i class="fa fa-comments"></i> 0 Comments--}}
{{--                    </span> <span class="pointer shareModal ml10 x-hidden" data-url="posts/who_shares.php?post_id=249"> <i class="fa fa-share"></i> 0 Shares--}}
{{--                    </span> </span> </div> <div class="post-actions clearfix"> <div class="action-btn unselectable reactions-wrapper " data-reaction=""> <div class="reaction-btn"> <div class="reaction-btn-icon customClickLikeReaction1"> <img style="width: 16px;position: relative;" src="http://fyrestream.com//content/themes/default/frontend/like_images/group_29.png" alt=""> </div> <span class="reaction-btn-name cus customClickLikeReaction2">Like</span> </div> <div class="reactions-container"> <div class="reactions_item duration-1 js_react-post" data-reaction="like" data-reaction-color="blue" data-title="like"> <div class="emoji emoji--like"> <div class="emoji__hand"> <div class="emoji__thumb"></div> </div> </div> </div> <div class="reactions_item duration-2 js_react-post" data-reaction="love" data-reaction-color="red" data-title="love"> <div class="emoji emoji--love"> <div class="emoji__heart"></div> </div> </div> <div class="reactions_item duration-3 js_react-post" data-reaction="haha" data-reaction-color="yellow" data-title="haha"> <div class="emoji emoji--haha"> <div class="emoji__face"> <div class="emoji__eyes"></div> <div class="emoji__mouth"> <div class="emoji__tongue"></div> </div> </div> </div> </div> <div class="reactions_item duration-4 js_react-post" data-reaction="yay" data-reaction-color="yellow" data-title="yay"> <div class="emoji emoji--yay"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__mouth"></div> </div> </div> </div> <div class="reactions_item duration-5 js_react-post" data-reaction="wow" data-reaction-color="yellow" data-title="wow"> <div class="emoji emoji--wow"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> <div class="reactions_item duration-6 js_react-post" data-reaction="sad" data-reaction-color="yellow" data-title="sad"> <div class="emoji emoji--sad"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> <div class="reactions_item duration-7 js_react-post" data-reaction="angry" data-reaction-color="orange" data-title="angry"> <div class="emoji emoji--angry"> <div class="emoji__face"> <div class="emoji__eyebrows"></div> <div class="emoji__eyes"></div> <div class="emoji__mouth"></div> </div> </div> </div> </div> </div> <div class="action-btn js_comment "> <div class="svg-container mr5" style="width:16px; height:16px; "> <?xml version="1.0" encoding="iso-8859-1"?> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <g> <path d="M448,0H64C28.704,0,0,28.704,0,64v288c0,35.296,28.704,64,64,64h32v80c0,6.208,3.584,11.872,9.216,14.496--}}
{{--			c2.144,0.992,4.48,1.504,6.784,1.504c3.68,0,7.328-1.28,10.24-3.712L232.992,416H448c35.296,0,64-28.704,64-64V64--}}
{{--			C512,28.704,483.296,0,448,0z M480,352c0,17.632-14.368,32-32,32H227.2c-3.744,0-7.36,1.312-10.24,3.712L128,461.856V400--}}
{{--			c0-8.832-7.168-16-16-16H64c-17.632,0-32-14.368-32-32V64c0-17.632,14.368-32,32-32h384c17.632,0,32,14.368,32,32V352z"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg> </div> <span>Comment</span> </div> <div class="action-btn" data-toggle="modal" data-url="posts/share.php?do=create&post_id=249"> <div class="svg-container mr5" style="width:16px; height:16px; "> <?xml version="1.0" encoding="iso-8859-1"?> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.008 512.008" style="enable-background:new 0 0 512.008 512.008;" xml:space="preserve"> <g> <g> <path d="M507.328,228.708l-160-160.032c-4.576-4.576-11.392-5.92-17.44-3.456C323.904,67.684,320,73.54,320,80.004v80h-48--}}
{{--			c-149.984,0-272,122.016-272,272c0,7.136,4.736,13.408,11.584,15.36c1.472,0.448,2.944,0.64,4.416,0.64--}}
{{--			c5.408,0,10.592-2.752,13.568-7.52l4.8-7.68c43.424-69.568,121.344-112.8,203.392-112.8H320v80c0,6.464,3.904,12.32,9.888,14.784--}}
{{--			c6.016,2.432,12.864,1.088,17.44-3.456l160-160C513.568,245.092,513.568,234.948,507.328,228.708z M352,361.38v-57.376--}}
{{--			c0-8.832-7.168-16-16-16h-98.24c-75.488,0-147.936,32.288-198.816,86.624C64.704,269.924,159.424,192.004,272,192.004h64--}}
{{--			c8.832,0,16-7.168,16-16v-57.376l121.376,121.376L352,361.38z"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg> </div> <span>Share</span> </div> </div> </div> <div class="post-footer "> <div class="post-comments"> <div class="comment js_comment-form " data-handle="post" data-id="249"> <div class="comment-avatar"> <a class="comment-avatar-picture" href="http://fyrestream.com//danishtest" style="background-image:url(http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png);"> </a> </div> <div class="comment-data"> <div class="x-form comment-form"> <textarea dir="auto" class="js_autosize js_mention js_post-comment" rows="1" placeholder='Write a comment...'></textarea> <ul class="x-form-tools clearfix"> <li class="x-form-tools-post js_post-comment"> <i class="far fa-paper-plane fa-lg fa-fw"></i> </li> <li class="x-form-tools-attach"> <i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="comment"></i> </li> <li class="x-form-tools-voice js_comment-voice-notes-toggle"> <i class="fas fa-microphone fa-lg fa-fw"></i> </li> <li class="x-form-tools-emoji js_emoji-menu-toggle"> <i class="far fa-smile-wink fa-lg fa-fw"></i> </li> </ul> </div> <div class="comment-voice-notes"> <div class="voice-recording-wrapper" data-handle="comment"> <div class="x-hidden js_voice-processing-message"> <div class="svg-container mr5" style="width:16px; height:16px; "> <?xml version="1.0" encoding="iso-8859-1"?> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;" xml:space="preserve"> <path style="fill:#2196F3;" d="M245.333,0C109.839,0,0,109.839,0,245.333s109.839,245.333,245.333,245.333--}}
{{--	s245.333-109.839,245.333-245.333C490.514,109.903,380.764,0.153,245.333,0z"/> <path style="fill:#FAFAFA;" d="M267.968,82.219c-12.496-12.492-32.752-12.492-45.248,0L104.533,200.533--}}
{{--	c-18.889,18.894-18.889,49.522,0,68.416c19.139,18.289,49.277,18.289,68.416,0l19.2-19.2v123.584--}}
{{--	c0,29.455,23.878,53.333,53.333,53.333c29.455,0,53.333-23.878,53.333-53.333V249.749l19.2,19.2--}}
{{--	c19.139,18.289,49.277,18.289,68.416,0c18.889-18.894,18.889-49.522,0-68.416L267.968,82.219z"/> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg> </div>                    Processing<span class="loading-dots"></span> </div> <div class="x-hidden js_voice-success-message"> <div class="svg-container mr5" style="width:16px; height:16px; "> <svg height="512pt" viewBox="0 -21 512.00533 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0" fill="#4caf50"/><path d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0" fill="#2196f3"/></svg> </div>                    Voice note recorded successfully--}}
{{--                                                                            <div class="float-right"> <button type="button" class="close js_voice-remove"> <span>&times;</span> </button> </div> </div> <div class="btn-voice-start js_voice-start"> <i class="fas fa-microphone mr5"></i>Record--}}
{{--                                                                        </div> <div class="btn-voice-stop js_voice-stop" style="display: none"> <i class="far fa-stop-circle mr5"></i>Recording <span class="js_voice-timer">00:00</span> </div> </div> </div> <div class="comment-attachments attachments clearfix x-hidden"> <ul> <li class="loading"> <div class="progress x-progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div> </li> </ul> </div> </div> </div> <div class="pb10 text-center js_comment-disabled-msg x-hidden">--}}
{{--                                                            Commenting has been turned off for this post.--}}
{{--                                                        </div> <div class="text-center x-hidden js_comments-filter-loader"> <div class="loader loader_large"></div> </div> <ul class="js_comments  "> </ul> </div> </div> </div> </div> </li> </ul> <div class="alert alert-post see-more mb20 js_see-more js_see-more-infinite" data-get="newsfeed" data-filter="all" > <span>More Stories</span> <div class="loader loader_small x-hidden"></div> </div> </div> </div> </div> <div class="col-lg-4 third-column div-to-shrink d-flex flex-column js_sticky-sidebar" id="moments-sections" style="position: relative;"> <div class="rightSectionCustom"> <div class="card" style="background:#F0F4F8; border:none;"> <div class="card-top d-flex align-items-center p-2"> <h5 class="mb-0 ml-2 text-dark"> <a href="#"> <i class="fas fa-plus-circle right-bar-add-circlr addMomentModal" data-url="posts/story.php?do=create" style="background: none;padding: 0px;font-size: 16px;"></i>--}}
{{--                                            Moments--}}
{{--                                        </a> </h5> <div class="div-right" style="    position: absolute;right: 8px;top: 12px;"> <a href="javascript:void(0);" class="setting-icon" style="    font-size: 12px;"> <i class="fas fa-ellipsis-h"></i> </a> </div> </div> <div class="container"> <div class="row"> <div class="col-md-4 col-sm-6 col-6 px-1 addMomentModal" data-url="posts/story.php?do=create" style="max-width: 120px"> <div class="default-moment-box overflow-hidden position-relative text-center text-white" style="height: 195px"> <i class="fas fa-plus right-bar-add-circlr"></i> </div> </div> <div class="col-md-4 col-sm-6 col-6 px-1 addMomentModal" data-url="posts/story.php?do=create" style="max-width: 120px"> <div class="default-moment-box overflow-hidden position-relative text-center text-white" style="height: 195px"> <i class="fas fa-plus right-bar-add-circlr"></i> </div> </div> <div class="col-md-4 col-sm-6 col-6 px-1 addMomentModal" data-url="posts/story.php?do=create" style="max-width: 120px"> <div class="default-moment-box overflow-hidden position-relative text-center text-white" style="height: 195px"> <i class="fas fa-plus right-bar-add-circlr"></i> </div> </div> </div> </div> </div> <div class="card news-card"> <div class="card-top d-flex align-items-center justify-content-between p-2" style="background: white;margin-bottom: 10px;"> <div class="d-flex align-items-center"> <h5 class="mb-0 ml-2 text-dark">Most Watched</h5> </div> <div> <a href="#" class="setting-icon"> <i class="fas fa-cog"></i> </a> </div> </div> <div class="most-viewed-list-scroll"> <div class="most-watched-post"> <div class="row w-100"> <div class="col-md-12"> <h6 class="p-3">--}}
{{--                                                    Most watched videos not here!--}}
{{--                                                </h6> </div> <hr style="width: 100%;left: 15px;position: relative;"> </div> </div> </div> </div> <div class="card news-card"> <div class="card-top d-flex align-items-center justify-content-between p-2"> <div class="d-flex align-items-center"> <i class="fas fa-search"></i> <h5 class="mb-0 ml-2 text-dark">Market Classifieds</h5> </div> </div> <div class="container classifieds-parent"> <div class="row"> <div class="col-md-6 col-sm-6 col-6"> <div class="classifieds"> <a href="" class="cross"> <img src="http://fyrestream.com//content/uploads/photos/2021/01/sngine_f1571491b96cb34425af4e690e8caf05.jpg" class="width-50" alt="mobsm"> <div class="price-div"> <p style="background: #00000036;--}}
{{--    padding: 5px;">--}}
{{--                                                            $25.00--}}
{{--                                                        </p> </div> </a> </div> </div> <div class="col-md-6 col-sm-6 col-6"> <div class="classifieds"> <a href="" class="cross"> <img src="http://fyrestream.com//content/uploads/photos/2021/01/sngine_173c40cb3197d45e0b1d191dadb44b87.jpg" class="width-50" alt="mobsm"> <div class="price-div"> <p style="background: #00000036;--}}
{{--    padding: 5px;">--}}
{{--                                                            $10.00--}}
{{--                                                        </p> </div> </a> </div> </div> </div> </div> </div> <div class="sideBarCustom"> <div class="card"> <div class="card-body with-list" style="padding-top: 0px"> <ul class="custom-friends" style="height: 70px; overflow: hidden"> <li class="feeds-item" style="position: relative" id="friendRequestBox14" > <i class="fas fa-times-circle follow-close-btn" data-uidRemove="14"></i> <div class="data-container small"> <a class="data-avatar" href="http://fyrestream.com//fyrestream"> <img src="http://fyrestream.com//content/uploads/photos/2020/11/sngine_55427339eb83ca165fe9b591d93c4da2_cropped.jpg" alt="Sean David"> </a> <div class="data-content"> <div class="float-right"> <button type="button" class="btn btn-sm btn-success js_friend-add" data-uid="14"> <i class="fa fa-user-plus mr5"></i>Add                        </button> </div> <div class="mt5"> <span class="name js_user-popover" data-uid="14"> <a href="http://fyrestream.com//fyrestream">Sean David</a> </span> </div> </div> </div> </li> <li class="feeds-item" style="position: relative" id="friendRequestBox11" > <i class="fas fa-times-circle follow-close-btn" data-uidRemove="11"></i> <div class="data-container small"> <a class="data-avatar" href="http://fyrestream.com//hiraasif"> <img src="http://fyrestream.com//content/uploads/photos/2020/11/sngine_9e3aca91670c9cbbcf4918c339489eca_cropped.jpg" alt="Hira Asif"> </a> <div class="data-content"> <div class="float-right"> <button type="button" class="btn btn-sm btn-success js_friend-add" data-uid="11"> <i class="fa fa-user-plus mr5"></i>Add                        </button> </div> <div class="mt5"> <span class="name js_user-popover" data-uid="11"> <a href="http://fyrestream.com//hiraasif">Hira Asif</a> </span> </div> </div> </div> </li> <li class="feeds-item" style="position: relative" id="friendRequestBox12" > <i class="fas fa-times-circle follow-close-btn" data-uidRemove="12"></i> <div class="data-container small"> <a class="data-avatar" href="http://fyrestream.com//danish4045"> <img src="http://fyrestream.com//content/uploads/photos/2020/11/sngine_bf7ee3cfc81d2d833abcd6fec85f5d18_cropped.jpg" alt="Danish Rehman"> </a> <div class="data-content"> <div class="float-right"> <button type="button" class="btn btn-sm btn-success js_friend-add" data-uid="12"> <i class="fa fa-user-plus mr5"></i>Add                        </button> </div> <div class="mt5"> <span class="name js_user-popover" data-uid="12"> <a href="http://fyrestream.com//danish4045">Danish Rehman</a> </span> </div> </div> </div> </li> <li class="feeds-item" style="position: relative" id="friendRequestBox7" > <i class="fas fa-times-circle follow-close-btn" data-uidRemove="7"></i> <div class="data-container small"> <a class="data-avatar" href="http://fyrestream.com//danish2202"> <img src="http://fyrestream.com//content/uploads/photos/2020/11/sngine_12f5df85c8981af4e5902254dabf0e6b_cropped.jpg" alt="Danish Rehman"> </a> <div class="data-content"> <div class="float-right"> <button type="button" class="btn btn-sm btn-success js_friend-add" data-uid="7"> <i class="fa fa-user-plus mr5"></i>Add                        </button> </div> <div class="mt5"> <span class="name js_user-popover" data-uid="7"> <a href="http://fyrestream.com//danish2202">Danish Rehman</a> </span> </div> </div> </div> </li> <li class="feeds-item" style="position: relative" id="friendRequestBox3" > <i class="fas fa-times-circle follow-close-btn" data-uidRemove="3"></i> <div class="data-container small"> <a class="data-avatar" href="http://fyrestream.com//irfan"> <img src="http://fyrestream.com//content/uploads/photos/2020/11/sngine_79eb59301027061241bb17898ac52934_cropped.png" alt="Irfan Ali ch"> </a> <div class="data-content"> <div class="float-right"> <button type="button" class="btn btn-sm btn-success js_friend-add" data-uid="3"> <i class="fa fa-user-plus mr5"></i>Add                        </button> </div> <div class="mt5"> <span class="name js_user-popover" data-uid="3"> <a href="http://fyrestream.com//irfan">Irfan Ali ch</a> </span> </div> </div> </div> </li> <li class="feeds-item" style="text-align: center">--}}
{{--                                                To search more people click here <br> <a style="    color: #007bff;" href="http://fyrestream.com//people">See More</a> </li> </ul> </div> </div> <div class="card" style="    background: #f0f4f8; border: none;"> <div class="card-header bg-transparent"> <h5 class="mb-0 ml-2 text-dark suggested-group-custom">Suggested Groups</h5> </div> <div class="card-body with-list"> <ul> <li class="feeds-item"> <div class="data-container "> <a class="data-avatar" href="http://fyrestream.com//groups/grrer"> <img src="http://fyrestream.com//content/uploads/photos/2020/11/sngine_876431e9b99de114922ab483cd87059a.jpg" alt="Test Group"> </a> <div class="data-content"> <div style="    margin-left: 2em;"> <span class="name"> <a href="http://fyrestream.com//groups/grrer">Test Group</a> </span> <div>4 Members</div> </div> </div> </div> </li> <li class="feeds-item"> <div class="data-container "> <a class="data-avatar" href="http://fyrestream.com//groups/FyrestreamBetaCrew"> <img src="http://fyrestream.com//content/uploads/photos/2020/11/sngine_47653300e92b1874b75ddb44b9ce8447_cropped.png" alt="Fyrestream Beta Crew"> </a> <div class="data-content"> <div style="    margin-left: 2em;"> <span class="name"> <a href="http://fyrestream.com//groups/FyrestreamBetaCrew">Fyrestream Beta Crew</a> </span> <div>9 Members</div> </div> </div> </div> </li> <li class="feeds-item"> <div class="data-container "> <a class="data-avatar" href="http://fyrestream.com//groups/test"> <img src="http://fyrestream.com//content/uploads/photos/2021/01/sngine_ef54039290e0507a68d9e04656ceab2d_cropped.jpg" alt="Test"> </a> <div class="data-content"> <div style="    margin-left: 2em;"> <span class="name"> <a href="http://fyrestream.com//groups/test">Test</a> </span> <div>2 Members</div> </div> </div> </div> </li> <li class="feeds-item"> <div class="data-container "> <a class="data-avatar" href="http://fyrestream.com//groups/npmjs"> <img src="http://fyrestream.com//content/uploads/photos/2020/11/sngine_6f522218992bc5e2fd8b6b6631bc29ab.jpg" alt="pakistan "> </a> <div class="data-content"> <div style="    margin-left: 2em;"> <span class="name"> <a href="http://fyrestream.com//groups/npmjs">pakistan </a> </span> <div>1 Members</div> </div> </div> </div> </li> </ul> <button style="margin-bottom: 15px;" class="see-more w-100"> <a href="http://fyrestream.com//groups"> See More </a></button> </div> </div> <div class="card"> <div class="card-header bg-transparent"> <div class="float-right"> <small><a href="http://fyrestream.com//events">See All</a></small> </div> <h5 class="mb-0 ml-2 text-dark">Suggested Events</h5> </div> <div class="card-body with-list"> <ul> <li class="feeds-item"> <div class="data-container small"> <a class="data-avatar" href="http://fyrestream.com//events/1"> <img src="http://fyrestream.com//content/themes/default/images/blank_event.jpg" alt="hhh"> </a> <div class="data-content"> <div class="float-right"> <button type="button" class="btn btn-sm btn-primary js_interest-event" data-id="1"> <i class="fa fa-star mr5"></i>Interested--}}
{{--                                                            </button> </div> <div> <span class="name"> <a href="http://fyrestream.com//events/1">hhh</a> </span> <div>1 Interested</div> </div> </div> </div> </li> </ul> </div> </div> </div> <div class=" news-card"> <div class="text-center mini-footer"> <p>© 2020 by Fyrestream.</p> <a href="#" class="side-border">Advertise?</a> <a href="#" class="side-border">Help</a> <a href="#">Privacy</a> <br> <img src="http://fyrestream.com//content/themes/default/frontend/login/images/fyrestream.png" alt=""> </div> </div> </div> </div> </div> </div> </div> </div> </div> <div class="modal status-modal fade" id="exampleModalMoments" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> <div class="modal-dialog modal-dialog-centered" style="max-width: 100%; width: 100%;height: 100%; margin: 0; padding: 0;"> <div class="modal-content create-post-box create border-0" style="padding: 0px; height: auto; min-height: 100%;border-radius: 0;"> <style>--}}
{{--                .displayNoneBtn {--}}
{{--                    display: none;--}}
{{--                }--}}
{{--            </style> <div class="modal-body px-0" style="background: #1B1A1A; padding: 0rem !important;"> <div class="container-fluid"> <div class="row mb-2 pt-0 mt-0"> <div class="col-md-12 text-right pt-0"> <button style="color: white; padding: 0px; margin: 0px;" type="button" class="btn btn-common text-white rounded-pill" data-dismiss="modal" aria-label="Close"> <span style="font-size: 40px; font-weight: bold; margin: 0px;" aria-hidden="true">&times;</span> </button> </div> </div> <div class="row"> <div style="background: #1B1A1A;" class="col-lg-9 col-md-9"> <div class="left-wrapper mainDivStory"> <div class="owl-carousel owl-theme" id="moment-modal"> </div> </div> </div> <div style="background: #1B1A1A; border-left: 1px solid #0b2e13;" class="col-lg-3 col-md-3 col-sm-8"> <div class="right-wrapper text-white" style="height: 100%;overflow: hidden;"> <div class="right-wrapper-head d-flex align-items-center justify-content-between p-3"> <h3 class="mb-0">Moments</h3> <a href="#" class="font-weight-bold">--}}
{{--                                        Preferences--}}
{{--                                        <img src="http://fyrestream.com//content/themes/default/frontend/images/double-arrow.png" alt="double-arrow" class="ml-1"> </a> </div> <div id="addNewMoments" data-target="#exampleModal" data-toggle="modal" data-url="posts/story.php?do=create" class="d-flex align-items-center justify-content-between px-1 px-sm-2 py-3"> <button type="button" class="btn btn-sm" style="background-color: #e4606d;"><i style="font-size: 25px; color:white;" class="fa fa-plus"></i></button> <div> <h6 class="mb-0">Add Your Best Moments!</h6> <small style="font-size: 10px;">Shows 48 hours of photos, videos, or words</small> </div> </div> <div class="watch m-2 p-2 rounded" style="height: 100%; background: #1b1a1a;"> <h6 class="text-center">More Moments</h6> <div class="watch-height-wrapper overflow-auto"> </div> </div> </div> </div> </div> </div> </div> </div> </div> </div> </div> <link rel="stylesheet" href="http://fyrestream.com//includes/assets/css/twemoji-awesome/twemoji-awesome.min.css"> <script>/* initialize vars */var site_title = "Fyre Stream";var site_path = "http://fyrestream.com/";var ajax_path = site_path+"/includes/ajax/";var uploads_path = "http://fyrestream.com//content/uploads";var current_page = "index";/* language */var system_langauge_dir = "ltr";var system_langauge_code = "en";/* datetime */var system_datetime_format = 'DD/MM/YYYY HH:mm';/* theme */var theme_mode_night = false;var theme_dir_rtl = false;/* ajax */var min_data_heartbeat = "5000";var min_chat_heartbeat = "5000";/* uploads */var secret = "d70991f2a11cd8425ee11176ed47a702";var accpeted_video_extensions = ".mp4,.webm,.ogg";var accpeted_audio_extensions = ".mp3,.wav,.ogg";var accpeted_file_extensions = ".txt,.zip";var tinymce_photos_enabled = true;/* chat */var chat_enabled = true;var chat_typing_enabled = true;var chat_seen_enabled = true;var chat_sound = true;/* live *//* notifications */var notifications_sound = true;var noty_notifications_enabled = true;var browser_notifications_enabled = true;/* posts */var daytime_msg_enabled = true;var giphy_key = "";var geolocation_enabled = false;var yandex_key = "";var post_translation_enabled = false;var mobile_infinite_scroll = false;/* payments */var currency = "USD";var stripe_key = "";var twocheckout_merchant_code = "";var twocheckout_publishable_key = "";/* features */var adblock_detector = true;</script><script>/* i18n for JS */var __ = [];__['Ask something'] = "Ask something";__['Add Friend'] = "Add Friend";__['Friends'] = "Friends";__['Requested'] = "Requested";__['Following'] = "Following";__['Follow'] = "Follow";__['Pending'] = "Pending";__['Remove'] = "Remove";__['Error'] = "Error";__['Success'] = "Success";__['Loading'] = "Loading";__['Like'] = "Like";__['Unlike'] = "Unlike";__['Joined'] = "Joined";__['Join'] = "Join";__['Remove Admin'] = "Remove Admin";__['Make Admin'] = "Make Admin";__['Going'] = "Going";__['Interested'] = "Interested";__['Delete'] = "Delete";__['Delete Cover'] = "Delete Cover";__['Delete Picture'] = "Delete Picture";__['Delete Post'] = "Delete Post";__['Delete Comment'] = "Delete Comment";__['Delete Conversation'] = "Delete Conversation";__['Report'] = "Report";__['Block User'] = "Block User";__['Unblock User'] = "Unblock User";__['Mark as Available'] = "Mark as Available";__['Mark as Sold'] = "Mark as Sold";__['Save Post'] = "Save Post";__['Unsave Post'] = "Unsave Post";__['Boost Post'] = "Boost Post";__['Unboost Post'] = "Unboost Post";__['Pin Post'] = "Pin Post";__['Unpin Post'] = "Unpin Post";__['Verify'] = "Verify";__['Decline'] = "Decline";__['Boost'] = "Boost";__['Unboost'] = "Unboost";__['Mark as Paid'] = "Mark as Paid";__['See More'] = "See More";__['See Less'] = "See Less";__['Turn On Chat'] = "Turn On Chat";__['Turn Off Chat'] = "Turn Off Chat";__['Monthly Average'] = "Monthly Average";__['Jan'] = "Jan";__['Feb'] = "Feb";__['Mar'] = "Mar";__['Apr'] = "Apr";__['May'] = "May";__['Jun'] = "Jun";__['Jul'] = "Jul";__['Aug'] = "Aug";__['Sep'] = "Sep";__['Oct'] = "Oct";__['Nov'] = "Nov";__['Dec'] = "Dec";__['Users'] = "Users";__['Pages'] = "Pages";__['Groups'] = "Groups";__['Events'] = "Events";__['Posts'] = "Posts";__['Translated'] = "Translated";__['Are you sure you want to delete this?'] = "Are you sure you want to delete this?";__['Are you sure you want to remove your cover photo?'] = "Are you sure you want to remove your cover photo?";__['Are you sure you want to remove your profile picture?'] = "Are you sure you want to remove your profile picture?";__['Are you sure you want to delete this post?'] = "Are you sure you want to delete this post?";__['Are you sure you want to delete this comment?'] = "Are you sure you want to delete this comment?";__['Are you sure you want to delete this conversation?'] = "Are you sure you want to delete this conversation?";__['Are you sure you want to report this?'] = "Are you sure you want to report this?";__['Are you sure you want to block this user?'] = "Are you sure you want to block this user?";__['Are you sure you want to unblock this user?'] = "Are you sure you want to unblock this user?";__['Are you sure you want to delete your account?'] = "Are you sure you want to delete your account?";__['Are you sure you want to verify this request?'] = "Are you sure you want to verify this request?";__['Are you sure you want to decline this request?'] = "Are you sure you want to decline this request?";__['Are you sure you want to approve this request?'] = "Are you sure you want to approve this request?";__['Are you sure you want to do this?'] = "Are you sure you want to do this?";__['There is something that went wrong!'] = "There is something that went wrong!";__['There is no more data to show'] = "There is no more data to show";__['This website uses cookies to ensure you get the best experience on our website'] = "This website uses cookies to ensure you get the best experience on our website";__['Got It!'] = "Got It!";__['Learn More'] = "Learn More";__['No result found'] = "No result found";__['Turn on Commenting'] = "Turn on Commenting";__['Turn off Commenting'] = "Turn off Commenting";__['Day Mode'] = "Day Mode";__['Night Mode'] = "Night Mode";__['Message'] = "Message";__['You haved poked'] = "You haved poked";__['Touch to unmute'] = "Touch to unmute";__['Press space to see next'] = "Press space to see next";__['Visit link'] = "Visit link";__['ago'] = "ago";__['hour ago'] = "hour ago";__['hours ago'] = "hours ago";__['minute ago'] = "minute ago";__['minutes ago'] = "minutes ago";__['from now'] = "from now";__['seconds ago'] = "seconds ago";__['yesterday'] = "yesterday";__['tomorrow'] = "tomorrow";__['days ago'] = "days ago";__['Nothing selected'] = "Nothing selected";__['Seen by'] = "Seen by";__['Ringing'] = "Ringing";__['is Offline'] = "is Offline";__['is Busy'] = "is Busy";__['No Answer'] = "No Answer";__['You can not connect to this user'] = "You can not connect to this user";__['You have an active call already'] = "You have an active call already";__['The recipient declined the call'] = "The recipient declined the call";__['Connection has been lost'] = "Connection has been lost";__['You must fill in all of the fields'] = "You must fill in all of the fields";__['Hide from Timeline'] = "Hide from Timeline";__['Allow on Timeline'] = "Allow on Timeline";__['Are you sure you want to hide this post from your profile timeline? It may still appear in other places like newsfeed and search results'] = "Are you sure you want to hide this post from your profile timeline? It may still appear in other places like newsfeed and search results";__['Select All'] = "Select All";__['Deselect All'] = "Deselect All";__['Total'] = "Total";__['Stop Campaign'] = "Stop Campaign";__['Resume Campaign'] = "Resume Campaign";__['Sorry, WebRTC is not available in your browser'] = "Sorry, WebRTC is not available in your browser";__['You are ready to Go Live now'] = "You are ready to Go Live now";__['Getting permissions failed'] = "Getting permissions failed";__['Going Live'] = "Going Live";__['You are live now'] = "You are live now";__['You are offline now'] = "You are offline now";__['Going live failed'] = "Going live failed";__['Online'] = "Online";__['Offline'] = "Offline";__['Switching stream sources'] = "Switching stream sources";__['Successfully switched to new device'] = "Successfully switched to new device";__['Unable to determine device type'] = "Unable to determine device type";__['Failed to switch to new device'] = "Failed to switch to new device";__['Ending live error'] = "Ending live error";__['Joining live stream failed'] = "Joining live stream failed";__['Live Ended'] = "Live Ended";/* i18n for DataTables */__['Processing...'] = "Processing...";__['Search:'] = "Search:";__['Show _MENU_ entries'] = "Show _MENU_ entries";__['Showing _START_ to _END_ of _TOTAL_ entries'] = "Showing _START_ to _END_ of _TOTAL_ entries";__['Showing 0 to 0 of 0 entries'] = "Showing 0 to 0 of 0 entries";__['(filtered from _MAX_ total entries)'] = "(filtered from _MAX_ total entries)";__['Loading...'] = "Loading...";__['No matching records found'] = "No matching records found";__['No data available in table'] = "No data available in table";__['First'] = "First";__['Previous'] = "Previous";__['Next'] = "Next";__['Last'] = "Last";__[': activate to sort column ascending'] = ": activate to sort column ascending";__[': activate to sort column descending'] = ": activate to sort column descending";/* i18n for OneSignal */__['Subscribe to notifications'] = "Subscribe to notifications";__['You are subscribed to notifications'] = "You are subscribed to notifications";__['You have blocked notifications'] = "You have blocked notifications";__['Click to subscribe to notifications'] = "Click to subscribe to notifications";__['Thanks for subscribing!'] = "Thanks for subscribing!";__['You are subscribed to notifications'] = "You are subscribed to notifications";__['You will not receive notifications again'] = "You will not receive notifications again";__['Manage Site Notifications'] = "Manage Site Notifications";__['SUBSCRIBE'] = "SUBSCRIBE";__['UNSUBSCRIBE'] = "UNSUBSCRIBE";__['Unblock Notifications'] = "Unblock Notifications";__['Follow these instructions to allow notifications:'] = "Follow these instructions to allow notifications:";</script><script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous" ></script><script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous" ></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous" ></script><script src="http://fyrestream.com//includes/assets/js/plugins/owlcarousel/owl.carousel.min.js"></script><script src="http://fyrestream.com//includes/assets/js/custom.js"></script><script src="http://fyrestream.com//includes/assets/js/plugins/mustache/mustache.min.js" ></script><script src="http://fyrestream.com//includes/assets/js/plugins/jquery.form/jquery.form.min.js" ></script><script src="http://fyrestream.com//includes/assets/js/plugins/jquery.inview/jquery.inview.min.js" ></script><script src="http://fyrestream.com//includes/assets/js/plugins/autosize/autosize.min.js" ></script><script src="http://fyrestream.com//includes/assets/js/plugins/readmore/readmore.min.js" ></script><script src="http://fyrestream.com//includes/assets/js/plugins/moment/moment-with-locales.min.js" ></script><script src="https://unpkg.com/video.js@7.8.4/dist/video.min.js" ></script><script src="https://unpkg.com/videojs-contrib-hls@5.15.0/dist/videojs-contrib-hls.min.js" ></script><link href="https://unpkg.com/video.js@7.8.4/dist/video-js.min.css" rel="stylesheet"><script>var _tooltip = jQuery.fn.tooltip;</script><script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script><script>jQuery.fn.tooltip = _tooltip;</script><script src="http://fyrestream.com//includes/assets/js/plugins/jquery-ui.triggeredAutocomplete/jquery-ui.triggeredAutocomplete.js"></script><script src="http://fyrestream.com//includes/assets/js/plugins/sticky-sidebar/theia-sticky-sidebar.min.js"></script><script src="http://fyrestream.com//includes/assets/js/plugins/noty/noty.min.js"></script><link rel="stylesheet" type='text/css' href="http://fyrestream.com//includes/assets/js/plugins/noty/noty.css"><script src="http://fyrestream.com//includes/assets/js/plugins/zuck/zuck.js"></script><link rel="stylesheet" type='text/css' href="http://fyrestream.com//includes/assets/js/plugins/zuck/zuck.css"><script src="http://fyrestream.com//includes/assets/js/plugins/slick/slick.min.js"></script><link rel="stylesheet" type='text/css' href="http://fyrestream.com//includes/assets/js/plugins/slick/slick.css"><link rel="stylesheet" type='text/css' href="http://fyrestream.com//includes/assets/js/plugins/slick/slick-theme.css"><script src="http://fyrestream.com//includes/assets/js/plugins/recorder/recorder.js"></script><script src="http://fyrestream.com//includes/assets/js/plugins/slick/slick.min.js"></script><link rel="stylesheet" type='text/css' href="http://fyrestream.com//includes/assets/js/plugins/slick/slick.css"><link rel="stylesheet" type='text/css' href="http://fyrestream.com//includes/assets/js/plugins/slick/slick-theme.css"><script src="http://fyrestream.com//includes/assets/js/plugins/bootstrap.datetimepicker/bootstrap-datetimepicker.min.js"></script><link rel="stylesheet" type='text/css' href="http://fyrestream.com//includes/assets/js/plugins/bootstrap.datetimepicker/bootstrap-datetimepicker.min.css"><script src="http://fyrestream.com//includes/assets/js/plugins/easytimer/easytimer.min.js"></script><script src="http://fyrestream.com//includes/assets/js/sngine/core.js"></script><script src="http://fyrestream.com//includes/assets/js/sngine/user.js"></script><script src="http://fyrestream.com//includes/assets/js/sngine/post.js"></script><script src="http://fyrestream.com//includes/assets/js/sngine/chat.js"></script><script src="http://fyrestream.com//includes/assets/js/sngine/showads.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js" ></script><link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" /><script>window.addEventListener("load", function(){window.cookieconsent.initialise({"palette": {"popup": {"background": "#ff6961","text": "#fff"},"button": {"background": "#FF0101"// "background-image": "linear-gradient(#ff6961, #ffa500f7)"}},"theme": "edgeless","position": "bottom-left","content": {"message": __['This website uses cookies to ensure you get the best experience on our website'],"dismiss": __['Got It!'],"link": __['Learn More'],"href": site_path+"/static/privacy"}})});</script><script>--}}
{{--    $(document).ready(function(){--}}
{{--        $(".follow-close-btn").click(function() {--}}
{{--            // var uuid=$(this).attr('data-uidRemove');--}}
{{--            // $("#friendRequestBox"+uuid).css('display','none');--}}
{{--            // $("#friendRequestBox"+uuid).remove();--}}
{{--            $(this).parent('.feeds-item').remove();--}}
{{--        });--}}
{{--        $(".chat-sidebar-content ul li ").hover(function(){--}}
{{--            $(this).find('.grey-icon').hide();--}}
{{--            $(this).find('.colorful-icon').show();--}}
{{--        }, function(){--}}
{{--            $(this).find('.grey-icon').show();--}}
{{--            $(this).find('.colorful-icon').hide();--}}
{{--        });--}}
{{--    });--}}
{{--</script><link rel="stylesheet" href="http://fyrestream.com//includes/assets/css/magnific-popup.css"><script src="http://fyrestream.com//includes/assets/js/plugins/plugins.js"></script><script>--}}
{{--    $('#smilePublish').fadeOut();--}}
{{--    $('#arrowTop').fadeOut();--}}
{{--    $('.video-popup').magnificPopup({--}}
{{--        type: 'iframe',--}}
{{--        mainClass: 'mfp-fade',--}}
{{--        removalDelay: 160,--}}
{{--        preloader: false,--}}
{{--        zoom: {--}}
{{--            enabled: true,--}}
{{--        }--}}
{{--    });--}}
{{--    function backToTop() {--}}
{{--        document.body.scrollTop = 0;--}}
{{--        document.documentElement.scrollTop = 0;--}}
{{--    }--}}
{{--    $(document).scroll(function() {--}}
{{--        var y = $(this).scrollTop();--}}
{{--        if (y > 100) {--}}
{{--            $('#arrowTop').fadeIn();--}}
{{--            $('#smilePublish').fadeIn();--}}
{{--        } else {--}}
{{--            $('#arrowTop').fadeOut();--}}
{{--            $('#smilePublish').fadeOut();--}}
{{--        }--}}
{{--    });--}}
{{--    $(window).scroll(function(){--}}
{{--        if ($(this).scrollTop() > 50) {--}}
{{--            $('#postSection').addClass('scrollTopClass');--}}
{{--        } else {--}}
{{--            $('#postSection').removeClass('scrollTopClass');--}}
{{--        }--}}
{{--    });--}}
{{--</script> <div id="modalMoments" class="modal fade"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-body" style="padding: 0rem;"> <div style="border-bottom: 0px;" class="modal-header bg-light"> <h5 class="modal-title text-dark">--}}
{{--                        Share A New Moment--}}
{{--                    </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i class="fa fa-times-circle"></i> </button> </div> <style>--}}
{{--                    .x-uploader input[type=file] {--}}
{{--                        width: 100%;--}}
{{--                        /*top: 45% !important;--}}
{{--                        min-height: 50% !important;*/--}}
{{--                    }--}}
{{--                </style> <form class="publisher-mini status-modal"> <div class="modal-content"> <div class="modal-body bg-white"> <div class="modal-body pt-0"> <div class="form-group w-100 position-relative"> <textarea name="message" class="form-control w-100 h-80 shadow-none m-0" style="padding: 20px 0 0 0px; background-color: rgb(231, 234, 239); text-align: center; border: 0px; border-radius: 50px" placeholder="Enter Your Caption Here..."></textarea> </div> <div style="position: relative;"> </div> <div class="row"> <div class="col-md-12" style="position: relative;"> <div class="attachments clearfix" data-type="photos"> <div class="add" style="margin: 10px;"> <i class="js_x-uploader" data-type="photos" data-handle="publisher-mini" data-multiple="true"></i> </div> </div> <div style="border: 3px dashed #9d9d9d; height: 150px;" class="text-muted text-center font-weight-bold"> <i style="font-size: 70px; margin-top: 20px;" class="fa fa-cloud-upload-alt"></i> <p>Drag and Drop Your Image/Video Here or <a style="color: #1f9cff;" href="#" class="link">Browse</a> Photos/Videos</p> </div> </div> </div> <br> </div> <div class="clearfix"></div> <hr> <br> <div class="modal-footer align-items-center justify-content-center border-0 pt-0"> <div> <div class="input-group"> <select class="custom-select shadow-none"> <option selected>Public Audience</option> <option value="1">Personal</option> <option value="2">Friends</option> <option value="3">Custom</option> </select> </div> </div> <div class="d-flex align-items-center justify-content-between"> <button style="background-image: linear-gradient(0deg, #F6A41A, #D64C97); border: 0px; height: 38px;" class="btn-post d-inline-block text-white rounded js_publisher-btn js_publisher-story" data-dismiss="modal" aria-label="Close">Share This Moment</button> </div> </div> <div class="alert alert-danger mb0 x-hidden"></div> </div> </div> </form> </div> </div> </div> </div> <div id="uploadimageModal" class="modal" role="dialog"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button> <h4 class="modal-title">Upload & Crop Image</h4> </div> <div class="modal-body"> <div class="row"> <div class="col-md-8 text-center"> <div id="image_demo" style="width:350px; margin-top:30px"></div> </div> <div class="col-md-4" style="padding-top:30px;"> <br /> <br /> <br/> <button class="btn btn-success crop_image">Crop & Upload Image</button> </div> </div> </div> <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </div> </div> </div> </div> <div id="modal" class="modal fade"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-body"> <div class="loader pt10 pb10"></div> </div> </div> </div> </div> <script id="modal-message" type="text/template">--}}
{{--    <div class="modal-header">--}}
{{--        --}}{{--        <h6 class="modal-title">{{title}}</h6>--}}
{{--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--            <span aria-hidden="true">&times;</span>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--    <div class="modal-body">--}}
{{--        --}}{{--        <p>{{message}}</p>--}}
{{--    </div>--}}
{{--</script> <script id="modal-login" type="text/template">--}}
{{--    <div class="modal-header">--}}
{{--        <h6 class="modal-title">Not Logged In</h6>--}}
{{--    </div>--}}
{{--    <div class="modal-body">--}}
{{--        <p>Please log in to continue</p>--}}
{{--    </div>--}}
{{--    <div class="modal-footer">--}}
{{--        <a class="btn btn-primary" href="http://fyrestream.com//signin">Login</a>--}}
{{--    </div>--}}
{{--</script> <script id="modal-message" type="text/template">--}}
{{--    <div class="modal-header">--}}
{{--        --}}{{--        <h6 class="modal-title">{{title}}</h6>--}}
{{--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--            <span aria-hidden="true">&times;</span>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--    <div class="modal-body">--}}
{{--        --}}{{--        <p>{{message}}</p>--}}
{{--    </div>--}}
{{--</script> <script id="modal-success" type="text/template">--}}
{{--    <div class="modal-body text-center">--}}
{{--        <div class="big-icon success">--}}
{{--            <i class="fa fa-thumbs-up fa-3x"></i>--}}
{{--        </div>--}}
{{--        --}}{{--        <h4>{{title}}</h4>--}}
{{--        --}}{{--        <p class="mt20">{{message}}</p>--}}
{{--    </div>--}}
{{--</script> <script id="modal-error" type="text/template">--}}
{{--    <div class="modal-body text-center">--}}
{{--        <div class="big-icon error">--}}
{{--            <i class="fa fa-times fa-3x"></i>--}}
{{--        </div>--}}
{{--        --}}{{--        <h4>{{title}}</h4>--}}
{{--        --}}{{--        <p class="mt20">{{message}}</p>--}}
{{--    </div>--}}
{{--</script> <script id="modal-confirm" type="text/template">--}}
{{--    <div class="modal-header">--}}
{{--        --}}{{--        <h6 class="modal-title">{{title}}</h6>--}}
{{--    </div>--}}
{{--    <div class="modal-body">--}}
{{--        --}}{{--        <h6>{{message}}</h6>--}}
{{--        <div class="form-group mt20">--}}
{{--            <label class="form-control-label" for="modal-password-check">Confirm Password</label>--}}
{{--            <input id="modal-password-check" name="password_check" type="password" class="form-control">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="modal-footer">--}}
{{--        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>--}}
{{--        <button type="button" class="btn btn-primary" id="modal-confirm-ok">Confirm</button>--}}
{{--    </div>--}}
{{--</script> <script id="modal-loading" type="text/template">--}}
{{--    <div class="modal-body text-center">--}}
{{--        <div class="spinner-border text-primary"></div>--}}
{{--    </div>--}}
{{--</script> <script id="translator" type="text/template">--}}
{{--    <div class="modal-header">--}}
{{--        <h6 class="modal-title"><i class="fas fa-globe-americas mr5"></i>Select Your Language</h6>--}}
{{--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--            <span aria-hidden="true">&times;</span>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--    <div class="modal-body">--}}
{{--        <ul>--}}
{{--            <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">--}}
{{--                <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;" href="?lang=en_us">--}}
{{--                    English--}}
{{--                    <div style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">--}}
{{--                        <img width="50" src="http://fyrestream.com//content/uploads/flags/en_us.png">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">--}}
{{--                <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;" href="?lang=ar_sa">--}}
{{--                    Arabic--}}
{{--                    <div style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">--}}
{{--                        <img width="50" src="http://fyrestream.com//content/uploads/flags/ar_sa.png">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">--}}
{{--                <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;" href="?lang=fr_fr">--}}
{{--                    French--}}
{{--                    <div style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">--}}
{{--                        <img width="50" src="http://fyrestream.com//content/uploads/flags/fr_fr.png">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">--}}
{{--                <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;" href="?lang=es_es">--}}
{{--                    Spanish--}}
{{--                    <div style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">--}}
{{--                        <img width="50" src="http://fyrestream.com//content/uploads/flags/es_es.png">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">--}}
{{--                <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;" href="?lang=pt_pt">--}}
{{--                    Portuguese--}}
{{--                    <div style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">--}}
{{--                        <img width="50" src="http://fyrestream.com//content/uploads/flags/pt_pt.png">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">--}}
{{--                <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;" href="?lang=de_de">--}}
{{--                    Deutsch--}}
{{--                    <div style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">--}}
{{--                        <img width="50" src="http://fyrestream.com//content/uploads/flags/de_de.png">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">--}}
{{--                <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;" href="?lang=tr_tr">--}}
{{--                    Turkish--}}
{{--                    <div style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">--}}
{{--                        <img width="50" src="http://fyrestream.com//content/uploads/flags/tr_tr.png">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">--}}
{{--                <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;" href="?lang=nl_nl">--}}
{{--                    Dutch--}}
{{--                    <div style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">--}}
{{--                        <img width="50" src="http://fyrestream.com//content/uploads/flags/nl_nl.png">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">--}}
{{--                <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;" href="?lang=it_it">--}}
{{--                    Italiano--}}
{{--                    <div style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">--}}
{{--                        <img width="50" src="http://fyrestream.com//content/uploads/flags/it_it.png">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">--}}
{{--                <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;" href="?lang=ru_ru">--}}
{{--                    Russian--}}
{{--                    <div style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">--}}
{{--                        <img width="50" src="http://fyrestream.com//content/uploads/flags/ru_ru.png">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">--}}
{{--                <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;" href="?lang=ro_ro">--}}
{{--                    Romaian--}}
{{--                    <div style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">--}}
{{--                        <img width="50" src="http://fyrestream.com//content/uploads/flags/ro_ro.png">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">--}}
{{--                <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;" href="?lang=pt_br">--}}
{{--                    Portuguese (Brazil)--}}
{{--                    <div style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">--}}
{{--                        <img width="50" src="http://fyrestream.com//content/uploads/flags/pt_br.png">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li style="width: 18.7%; display: inline-block; text-align: center; margin: 30px 2px 5px;">--}}
{{--                <a style="display: table; text-decoration: none; font-weight: 700; font-size: 13px; width: 100%;" href="?lang=el_gr">--}}
{{--                    Greek--}}
{{--                    <div style="display: table-caption; width: 50px; height: 50px; background: 0 0; margin: 0 auto 8px; box-shadow: 0 1px 3px rgba(0,0,0,.24); border-radius: 50%; transition: all .2s ease-in-out;">--}}
{{--                        <img width="50" src="http://fyrestream.com//content/uploads/flags/el_gr.png">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</script> <script id="search-for" type="text/template">--}}
{{--    <div class="ptb10 plr10">--}}
{{--        <a href="http://fyrestream.com//search/">--}}
{{--            <i class="fa fa-search pr5"></i> Search for--}}
{{--        </a>--}}
{{--    </div>--}}
{{--</script> <script id="lightbox" type="text/template">--}}
{{--    <div class="lightbox">--}}
{{--        <div class="container lightbox-container">--}}
{{--            <div class="lightbox-preview">--}}
{{--                <div class="lightbox-next js_lightbox-slider">--}}
{{--                    <i class="fa fa-chevron-right fa-3x"></i>--}}
{{--                </div>--}}
{{--                <div class="lightbox-prev js_lightbox-slider">--}}
{{--                    <i class="fa fa-chevron-left fa-3x"></i>--}}
{{--                </div>--}}
{{--                --}}{{--                <img alt="" class="img-fluid" src="{{image}}">--}}
{{--            </div>--}}
{{--            <div class="lightbox-data">--}}
{{--                <div class="clearfix">--}}
{{--                    <div class="pt5 pr5 float-right">--}}
{{--                        <button type="button" class="close lightbox-close js_lightbox-close">--}}
{{--                            <span aria-hidden="true">&times;</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="lightbox-post">--}}
{{--                    <div class="js_scroller" data-slimScroll-height="100%">--}}
{{--                        <div class="loader mtb10"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</script> <script id="lightbox-nodata" type="text/template">--}}
{{--    <div class="lightbox">--}}
{{--        <div class="container lightbox-container">--}}
{{--            <div class="lightbox-preview nodata">--}}
{{--                --}}{{--                <img alt="" class="img-fluid" src="{{image}}">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</script> <script id="lightbox-live" type="text/template">--}}
{{--    --}}{{--    <div class="lightbox" data-live-post-id="{{post_id}}">--}}
{{--    <div class="container lightbox-container">--}}
{{--        <div class="lightbox-preview with-live">--}}
{{--            <div class="live-stream-video" id="js_live-video">--}}
{{--                <div class="live-counter" id="js_live-counter">--}}
{{--                    <span class="status offline" id=js_live-counter-status>Offline</span>--}}
{{--                    <span class="number">--}}
{{--                            <i class="fas fa-eye mr5"></i><strong id="js_live-counter-number">0</strong>--}}
{{--                        </span>--}}
{{--                </div>--}}

{{--                <div class="live-status" id="js_live-status">--}}
{{--                    Loading<span class="spinner-grow spinner-grow-sm ml10"></span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="lightbox-data">--}}
{{--            <div class="clearfix">--}}
{{--                <div class="pt5 pr5 float-right">--}}
{{--                    <button type="button" class="close lightbox-close js_lightbox-close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="lightbox-post">--}}
{{--                <div class="js_scroller" data-slimScroll-height="100%">--}}
{{--                    <div class="loader mtb10"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    --}}{{--    </div>--}}
{{--</script> <script id="activation-email-reset" type="text/template">--}}
{{--    <div class="modal-header">--}}
{{--        <h6 class="modal-title">Change Email Address</h6>--}}
{{--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--            <span aria-hidden="true">&times;</span>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--    <form class="js_ajax-forms" data-url="core/activation_email_reset.php">--}}
{{--        <div class="modal-body">--}}
{{--            <div class="form-group">--}}
{{--                <label class="form-control-label mb10">Current Email</label><br>--}}
{{--                <span class="badge badge-lg badge-info">danishtariq2050@gmail.com</span>--}}

{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label class="form-control-label" for="email">New Email</label>--}}
{{--                <input name="email" id="email" type="email" class="form-control" required autofocus>--}}
{{--            </div>--}}

{{--            <div class="alert alert-danger mb0 mt10 x-hidden"></div>--}}

{{--        </div>--}}
{{--        <div class="modal-footer">--}}
{{--            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>--}}
{{--            <button type="submit" class="btn btn-primary">Continue</button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</script> <script id="activation-phone" type="text/template">--}}
{{--    <div class="modal-header">--}}
{{--        <h6 class="modal-title">Enter the code from the SMS message</h6>--}}
{{--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--            <span aria-hidden="true">&times;</span>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--    <form class="js_ajax-forms" data-url="core/activation_phone_confirm.php">--}}
{{--        <div class="modal-body">--}}
{{--            <div class="mb20">--}}
{{--                Let us know if this mobile number belongs to you. Enter the code in the SMS--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <input name="token" type="text" class="form-control" placeholder="######" required autofocus>--}}
{{--                    </div>--}}


{{--                    <div class="alert alert-danger mb0 mt10 x-hidden"></div>--}}

{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="modal-footer">--}}
{{--            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>--}}
{{--            <button type="submit" class="btn btn-primary">Continue</button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</script> <script id="activation-phone-reset" type="text/template">--}}
{{--    <div class="modal-header">--}}
{{--        <h6 class="modal-title">Change Phone Number</h6>--}}
{{--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--            <span aria-hidden="true">&times;</span>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--    <form class="js_ajax-forms" data-url="core/activation_phone_reset.php">--}}
{{--        <div class="modal-body">--}}
{{--            <div class="form-group">--}}
{{--                <label class="form-control-label">New Phone</label>--}}
{{--                <input name="phone" type="text" class="form-control" required autofocus>--}}
{{--                <span class="form-text">--}}
{{--                        For example: +12344567890--}}
{{--                    </span>--}}
{{--            </div>--}}

{{--            <div class="alert alert-danger mb0 mt10 x-hidden"></div>--}}

{{--        </div>--}}
{{--        <div class="modal-footer">--}}
{{--            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>--}}
{{--            <button type="submit" class="btn btn-primary">Continue</button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</script>--}}
{{--<script id="x-uploader" type="text/template">--}}
{{--    <form class="x-uploader" action="{{url}}" method="post" enctype="multipart/form-data">--}}
{{--        {{#multiple}}--}}
{{--        <input name="file[]" type="file" multiple="multiple" accept="{{accept}}">{{/multiple}}{{^multiple}}--}}
{{--        <input name="file" type="file" accept="{{accept}}">{{/multiple}}<input type="hidden" name="secret" value="{{secret}}"></form></script> --}}
{{--<script id="noty-notification" type="text/template">--}}
{{--    <div class="data-container small">--}}
{{--        <div class="data-avatar">--}}
{{--            --}}{{--                    <img src="{{image}}">--}}
{{--        </div>--}}
{{--        --}}{{--                <div class="data-content">{{message}}</div>--}}
{{--    </div>--}}
{{--</script> <script id="adblock-detector" type="text/template">--}}
{{--    <div class="adblock-detector">--}}
{{--        Our website is made possible by displaying online advertisements to our visitors<br>--}}
{{--        Please consider supporting us by disabling your ad blocker.--}}
{{--    </div>--}}
{{--</script> <script id="keyboard-shortcuts" type="text/template">--}}
{{--    <div class="modal-header">--}}
{{--        <h6 class="modal-title"><i class="fa fa-keyboard mr5"></i>Keyboard Shortcuts</h6>--}}
{{--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--            <span aria-hidden="true">&times;</span>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--    <div class="modal-body text-xlg">--}}
{{--        <div class="mb10">--}}
{{--            <kbd>J</kbd> Scroll to the next post--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <kbd>K</kbd> Scroll to the previous post--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</script> <script id="emoji-menu" type="text/template">--}}
{{--    <div class="emoji-menu">--}}
{{--        <div class="tab-content">--}}
{{--            --}}{{--                <div class="tab-pane active" id="tab-emojis-{{id}}">--}}
{{--            <div class="tab-pane active" id="tab-emojis">--}}
{{--                <div class="js_scroller" data-slimScroll-height="180">--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":)" class="js_emoji twa twa-2x twa-smile"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji="(&lt;" class="js_emoji twa twa-2x twa-joy"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":D" class="js_emoji twa twa-2x twa-smiley"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":(" class="js_emoji twa twa-2x twa-worried"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":relaxed:" class="js_emoji twa twa-2x twa-relaxed"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":P" class="js_emoji twa twa-2x twa-stuck-out-tongue"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":O" class="js_emoji twa twa-2x twa-open-mouth"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":/" class="js_emoji twa twa-2x twa-confused"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=";)" class="js_emoji twa twa-2x twa-wink"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=";(" class="js_emoji twa twa-2x twa-sob"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji="B|" class="js_emoji twa twa-2x twa-sunglasses"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":disappointed:" class="js_emoji twa twa-2x twa-disappointed"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":yum:" class="js_emoji twa twa-2x twa-yum"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji="^_^" class="js_emoji twa twa-2x twa-grin"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":no_mouth:" class="js_emoji twa twa-2x twa-no-mouth"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji="*_*" class="js_emoji twa twa-2x twa-heart-eyes"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji="*)" class="js_emoji twa twa-2x twa-kissing-heart"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji="O:)" class="js_emoji twa twa-2x twa-innocent"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":angry:" class="js_emoji twa twa-2x twa-angry"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":rage:" class="js_emoji twa twa-2x twa-rage"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":smirk:" class="js_emoji twa twa-2x twa-smirk"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":flushed:" class="js_emoji twa twa-2x twa-flushed"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":satisfied:" class="js_emoji twa twa-2x twa-satisfied"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":relieved:" class="js_emoji twa twa-2x twa-relieved"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":sleeping:" class="js_emoji twa twa-2x twa-sleeping"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":stuck_out_tongue:" class="js_emoji twa twa-2x twa-stuck-out-tongue"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":stuck_out_tongue_closed_eyes:" class="js_emoji twa twa-2x twa-stuck-out-tongue-closed-eyes"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":frowning:" class="js_emoji twa twa-2x twa-frowning"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":anguished:" class="js_emoji twa twa-2x twa-anguished"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":open_mouth:" class="js_emoji twa twa-2x twa-open-mouth"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":grimacing:" class="js_emoji twa twa-2x twa-grimacing"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":hushed:" class="js_emoji twa twa-2x twa-hushed"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":expressionless:" class="js_emoji twa twa-2x twa-expressionless"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":unamused:" class="js_emoji twa twa-2x twa-unamused"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":sweat_smile:" class="js_emoji twa twa-2x twa-sweat-smile"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":sweat:" class="js_emoji twa twa-2x twa-sweat"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":confounded:" class="js_emoji twa twa-2x twa-confounded"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":weary:" class="js_emoji twa twa-2x twa-weary"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":pensive:" class="js_emoji twa twa-2x twa-pensive"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":fearful:" class="js_emoji twa twa-2x twa-fearful"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":cold_sweat:" class="js_emoji twa twa-2x twa-cold-sweat"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":persevere:" class="js_emoji twa twa-2x twa-persevere"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":cry:" class="js_emoji twa twa-2x twa-cry"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":astonished:" class="js_emoji twa twa-2x twa-astonished"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":scream:" class="js_emoji twa twa-2x twa-scream"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":mask:" class="js_emoji twa twa-2x twa-mask"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":tired_face:" class="js_emoji twa twa-2x twa-tired-face"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":triumph:" class="js_emoji twa twa-2x twa-triumph"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":dizzy_face:" class="js_emoji twa twa-2x twa-dizzy-face"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":imp:" class="js_emoji twa twa-2x twa-imp"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":smiling_imp:" class="js_emoji twa twa-2x twa-smiling-imp"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":neutral_face:" class="js_emoji twa twa-2x twa-neutral-face"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":alien:" class="js_emoji twa twa-2x twa-alien"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":yellow_heart:" class="js_emoji twa twa-2x twa-yellow-heart"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":blue_heart:" class="js_emoji twa twa-2x twa-blue-heart"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":blue_heart:" class="js_emoji twa twa-2x twa-blue-heart"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":heart:" class="js_emoji twa twa-2x twa-heart"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":green_heart:" class="js_emoji twa twa-2x twa-green-heart"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":broken_heart:" class="js_emoji twa twa-2x twa-broken-heart"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":heartbeat:" class="js_emoji twa twa-2x twa-heartbeat"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":heartpulse:" class="js_emoji twa twa-2x twa-heartpulse"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":two_hearts:" class="js_emoji twa twa-2x twa-two-hearts"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":revolving_hearts:" class="js_emoji twa twa-2x twa-revolving-hearts"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":cupid:" class="js_emoji twa twa-2x twa-cupid"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":sparkling_heart:" class="js_emoji twa twa-2x twa-sparkling-heart"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":sparkles:" class="js_emoji twa twa-2x twa-sparkles"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":star:" class="js_emoji twa twa-2x twa-star"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":star2:" class="js_emoji twa twa-2x twa-star2"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":dizzy:" class="js_emoji twa twa-2x twa-dizzy"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":boom:" class="js_emoji twa twa-2x twa-boom"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":exclamation:" class="js_emoji twa twa-2x twa-exclamation"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":anger:" class="js_emoji twa twa-2x twa-anger"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":question:" class="js_emoji twa twa-2x twa-question"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":grey_exclamation:" class="js_emoji twa twa-2x twa-grey-exclamation"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":grey_question:" class="js_emoji twa twa-2x twa-grey-question"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":zzz:" class="js_emoji twa twa-2x twa-zzz"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":dash:" class="js_emoji twa twa-2x twa-dash"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":sweat_drops:" class="js_emoji twa twa-2x twa-sweat-drops"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":notes:" class="js_emoji twa twa-2x twa-notes"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":musical_note:" class="js_emoji twa twa-2x twa-musical-note"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":fire:" class="js_emoji twa twa-2x twa-fire"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":poop:" class="js_emoji twa twa-2x twa-poop"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":thumbsup:" class="js_emoji twa twa-2x twa-thumbsup"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":thumbsdown:" class="js_emoji twa twa-2x twa-thumbsdown"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":ok_hand:" class="js_emoji twa twa-2x twa-ok-hand"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":punch:" class="js_emoji twa twa-2x twa-punch"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":fist:" class="js_emoji twa twa-2x twa-fist"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":v:" class="js_emoji twa twa-2x twa-v"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":wave:" class="js_emoji twa twa-2x twa-wave"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":hand:" class="js_emoji twa twa-2x twa-hand"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":raised_hand:" class="js_emoji twa twa-2x twa-raised-hand"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":open_hands:" class="js_emoji twa twa-2x twa-open-hands"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":point_up:" class="js_emoji twa twa-2x twa-point-up"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":point_down:" class="js_emoji twa twa-2x twa-point-down"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":point_left:" class="js_emoji twa twa-2x twa-point-left"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":point_right:" class="js_emoji twa twa-2x twa-point-right"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":raised_hands:" class="js_emoji twa twa-2x twa-raised-hands"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":pray:" class="js_emoji twa twa-2x twa-pray"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":clap:" class="js_emoji twa twa-2x twa-clap"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":muscle:" class="js_emoji twa twa-2x twa-muscle"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":runner:" class="js_emoji twa twa-2x twa-runner"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":couple:" class="js_emoji twa twa-2x twa-couple"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":family:" class="js_emoji twa twa-2x twa-family"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":two_men_holding_hands:" class="js_emoji twa twa-2x twa-two-men-holding-hands"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":two_women_holding_hands:" class="js_emoji twa twa-2x twa-two-women-holding-hands"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":dancer:" class="js_emoji twa twa-2x twa-dancer"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":dancers:" class="js_emoji twa twa-2x twa-dancers"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":ok_woman:" class="js_emoji twa twa-2x twa-ok-woman"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":no_good:" class="js_emoji twa twa-2x twa-no-good"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":information_desk_person:" class="js_emoji twa twa-2x twa-information-desk-person"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":bride_with_veil:" class="js_emoji twa twa-2x twa-bride-with-veil"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":couplekiss:" class="js_emoji twa twa-2x twa-couplekiss"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":couple_with_heart:" class="js_emoji twa twa-2x twa-couple-with-heart"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":nail_care:" class="js_emoji twa twa-2x twa-nail-care"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":boy:" class="js_emoji twa twa-2x twa-boy"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":girl:" class="js_emoji twa twa-2x twa-girl"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":woman:" class="js_emoji twa twa-2x twa-woman"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":man:" class="js_emoji twa twa-2x twa-man"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":baby:" class="js_emoji twa twa-2x twa-baby"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":older_woman:" class="js_emoji twa twa-2x twa-older-woman"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":older_man:" class="js_emoji twa twa-2x twa-older-man"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":cop:" class="js_emoji twa twa-2x twa-cop"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":angel:" class="js_emoji twa twa-2x twa-angel"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":princess:" class="js_emoji twa twa-2x twa-princess"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":smiley_cat:" class="js_emoji twa twa-2x twa-smiley-cat"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":smile_cat:" class="js_emoji twa twa-2x twa-smile-cat"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":heart_eyes_cat:" class="js_emoji twa twa-2x twa-heart-eyes-cat"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":kissing_cat:" class="js_emoji twa twa-2x twa-kissing-cat"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":smirk_cat:" class="js_emoji twa twa-2x twa-smirk-cat"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":scream_cat:" class="js_emoji twa twa-2x twa-scream-cat"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":crying_cat_face:" class="js_emoji twa twa-2x twa-crying-cat-face"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":joy_cat:" class="js_emoji twa twa-2x twa-joy-cat"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":pouting_cat:" class="js_emoji twa twa-2x twa-pouting-cat"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":japanese_ogre:" class="js_emoji twa twa-2x twa-japanese-ogre"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":see_no_evil:" class="js_emoji twa twa-2x twa-see-no-evil"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":hear_no_evil:" class="js_emoji twa twa-2x twa-hear-no-evil"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":speak_no_evil:" class="js_emoji twa twa-2x twa-speak-no-evil"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":guardsman:" class="js_emoji twa twa-2x twa-guardsman"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":skull:" class="js_emoji twa twa-2x twa-skull"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":feet:" class="js_emoji twa twa-2x twa-feet"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":lips:" class="js_emoji twa twa-2x twa-lips"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":kiss:" class="js_emoji twa twa-2x twa-kiss"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":droplet:" class="js_emoji twa twa-2x twa-droplet"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":ear:" class="js_emoji twa twa-2x twa-ear"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":eyes:" class="js_emoji twa twa-2x twa-eyes"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":nose:" class="js_emoji twa twa-2x twa-nose"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":tongue:" class="js_emoji twa twa-2x twa-tongue"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":love_letter:" class="js_emoji twa twa-2x twa-love-letter"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":speech_balloon:" class="js_emoji twa twa-2x twa-speech-balloon"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":thought_balloon:" class="js_emoji twa twa-2x twa-thought-balloon"></i>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <i data-emoji=":sunny:" class="js_emoji twa twa-2x twa-sunny"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="tab-pane" id="tab-stickers">--}}
{{--                --}}{{--                <div class="tab-pane" id="tab-stickers-{{id}}">--}}
{{--                <div class="js_scroller" data-slimScroll-height="180">--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-1:" src="http://fyrestream.com//content/uploads/stickers/1.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-2:" src="http://fyrestream.com//content/uploads/stickers/2.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-3:" src="http://fyrestream.com//content/uploads/stickers/3.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-4:" src="http://fyrestream.com//content/uploads/stickers/4.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-5:" src="http://fyrestream.com//content/uploads/stickers/5.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-6:" src="http://fyrestream.com//content/uploads/stickers/6.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-7:" src="http://fyrestream.com//content/uploads/stickers/7.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-8:" src="http://fyrestream.com//content/uploads/stickers/8.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-9:" src="http://fyrestream.com//content/uploads/stickers/9.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-10:" src="http://fyrestream.com//content/uploads/stickers/10.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-11:" src="http://fyrestream.com//content/uploads/stickers/11.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-12:" src="http://fyrestream.com//content/uploads/stickers/12.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-13:" src="http://fyrestream.com//content/uploads/stickers/13.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-14:" src="http://fyrestream.com//content/uploads/stickers/14.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-15:" src="http://fyrestream.com//content/uploads/stickers/15.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-16:" src="http://fyrestream.com//content/uploads/stickers/16.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-17:" src="http://fyrestream.com//content/uploads/stickers/17.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-18:" src="http://fyrestream.com//content/uploads/stickers/18.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-19:" src="http://fyrestream.com//content/uploads/stickers/19.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img data-emoji=":STK-20:" src="http://fyrestream.com//content/uploads/stickers/20.png" class="js_emoji">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <ul class="nav nav-tabs">--}}
{{--            <li class="nav-item">--}}
{{--                --}}{{--                    <a class="nav-link active" href="#tab-emojis-{{id}}" data-toggle="tab">--}}
{{--                <a class="nav-link active" href="#tab-emojis" data-toggle="tab">--}}
{{--                    <i class="fa fa-smile fa-fw mr5"></i>Emojis--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                --}}{{--                    <a class="nav-link" href="#tab-stickers-{{id}}" data-toggle="tab">--}}
{{--                <a class="nav-link" href="#tab-stickers" data-toggle="tab">--}}
{{--                    <i class="fa fa-hand-peace fa-fw mr5"></i>Stickers--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</script> <div id="rightSideBar" class="chat-sidebar " style="    background: #f2f2f2;"> <div class="chat-sidebar-header"> </div> <div class="chat-sidebar-content"> <div> <ul class="right-menu-to-hide right-bar-buttons text-center md-0"> <li> <a class=" " href="#"><img src="http://fyrestream.com//content/themes/default/frontend/images/Right Side Icons/Color/PNGs/Fyre diamond.png" alt=""></a> </li> <li> <a class=" " href="#"><img src="http://fyrestream.com//content/themes/default/frontend/images/Right Side Icons/Color/PNGs/Marketplace.png" alt=""></a> </li> <li> <a class=" " href="#"><img src="http://fyrestream.com//content/themes/default/frontend/images/Right Side Icons/Color/PNGs/Video.png" alt=""></a> </li> <li> <a class=" " href="#"><img src="http://fyrestream.com//content/themes/default/frontend/images/Right Side Icons/Color/PNGs/Dating.png" alt=""></a> </li> </ul> <ul class="right-menu-to-hide text-center mb-0"> <i class="fas fa-plus-circle right-bar-add-circlr"></i> </ul> </div> <div class="js_scroller" style="margin-left: 1.5em;"> <ul> </ul> </div> </div> <div class="chat-sidebar-footer"> </div> </div> <script id="chat-box-new" type="text/template">--}}
{{--    <div class="chat-widget chat-box opened fresh">--}}

{{--        <div class="chat-widget-head">--}}
{{--            New Message--}}

{{--            <div class="float-right">--}}
{{--                <i class="fa fa-times-circle js_chat-box-close"></i>--}}
{{--            </div>--}}

{{--        </div>--}}


{{--        <div class="chat-widget-content">--}}
{{--            <div class="chat-conversations js_scroller"></div>--}}
{{--            <div class="chat-to clearfix js_autocomplete-tags">--}}
{{--                <div class="to">To:</div>--}}
{{--                <ul class="tags"></ul>--}}
{{--                <div class="typeahead">--}}
{{--                    <input type="text" size="1" autofocus>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="chat-voice-notes">--}}
{{--                <div class="voice-recording-wrapper" data-handle="chat">--}}

{{--                    <div class="x-hidden js_voice-processing-message">--}}
{{--                        <div--}}
{{--                            class="svg-container mr5"--}}
{{--                            style="width:16px; height:16px; ">--}}


{{--                            <?xml version="1.0" encoding="iso-8859-1"?>--}}

{{--                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"--}}
{{--                                 viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;" xml:space="preserve">--}}
{{--<path style="fill:#2196F3;" d="M245.333,0C109.839,0,0,109.839,0,245.333s109.839,245.333,245.333,245.333--}}
{{--	s245.333-109.839,245.333-245.333C490.514,109.903,380.764,0.153,245.333,0z"/>--}}
{{--                                <path style="fill:#FAFAFA;" d="M267.968,82.219c-12.496-12.492-32.752-12.492-45.248,0L104.533,200.533--}}
{{--	c-18.889,18.894-18.889,49.522,0,68.416c19.139,18.289,49.277,18.289,68.416,0l19.2-19.2v123.584--}}
{{--	c0,29.455,23.878,53.333,53.333,53.333c29.455,0,53.333-23.878,53.333-53.333V249.749l19.2,19.2--}}
{{--	c19.139,18.289,49.277,18.289,68.416,0c18.889-18.894,18.889-49.522,0-68.416L267.968,82.219z"/>--}}
{{--                                <g>--}}
{{--                                </g>--}}
{{--                                <g>--}}
{{--                                </g>--}}
{{--                                <g>--}}
{{--                                </g>--}}
{{--                                <g>--}}
{{--                                </g>--}}
{{--                                <g>--}}
{{--                                </g>--}}
{{--                                <g>--}}
{{--                                </g>--}}
{{--                                <g>--}}
{{--                                </g>--}}
{{--                                <g>--}}
{{--                                </g>--}}
{{--                                <g>--}}
{{--                                </g>--}}
{{--                                <g>--}}
{{--                                </g>--}}
{{--                                <g>--}}
{{--                                </g>--}}
{{--                                <g>--}}
{{--                                </g>--}}
{{--                                <g>--}}
{{--                                </g>--}}
{{--                                <g>--}}
{{--                                </g>--}}
{{--                                <g>--}}
{{--                                </g>--}}
{{--</svg>--}}

{{--                        </div>                            Processing<span class="loading-dots"></span>--}}
{{--                    </div>--}}



{{--                    <div--}}
{{--                        class="svg-container mr5"--}}
{{--                        style="width:16px; height:16px; ">--}}


{{--                        <svg height="512pt" viewBox="0 -21 512.00533 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0" fill="#4caf50"/><path d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0" fill="#2196f3"/></svg>--}}
{{--                    </div>                            Voice note recorded successfully--}}
{{--                    <div class="float-right">--}}
{{--                        <button type="button" class="close js_voice-remove">--}}
{{--                            <span>&times;</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}



{{--                <div class="btn-voice-start js_voice-start">--}}
{{--                    <i class="fas fa-microphone mr5"></i>Record--}}
{{--                </div>--}}



{{--                <div class="btn-voice-stop js_voice-stop" style="display: none">--}}
{{--                    <i class="far fa-stop-circle mr5"></i>Recording <span class="js_voice-timer">00:00</span>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="chat-attachments attachments clearfix x-hidden">--}}
{{--            <ul>--}}
{{--                <li class="loading">--}}
{{--                    <div class="progress x-progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="x-form chat-form invisible">--}}
{{--            <div class="chat-form-message">--}}
{{--                <textarea class="js_autosize js_post-message" dir="auto" rows="1" placeholder='Write a message'></textarea>--}}
{{--            </div>--}}
{{--            <ul class="x-form-tools clearfix">--}}
{{--                <li class="x-form-tools-attach">--}}
{{--                    <i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="chat"></i>--}}
{{--                </li>--}}
{{--                <li class="x-form-tools-voice js_chat-voice-notes-toggle">--}}
{{--                    <i class="fas fa-microphone fa-lg fa-fw"></i>--}}
{{--                </li>--}}
{{--                <li class="x-form-tools-emoji js_emoji-menu-toggle">--}}
{{--                    <i class="far fa-smile-wink fa-lg fa-fw"></i>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    </div>--}}
{{--</script>--}}


{{--<script id="chat-message" type="text/template">--}}
{{--        <li>--}}
{{--            <div class="conversation clearfix right" id="{{id}}">--}}
{{--                <div class="conversation-body">--}}
{{--                    <div class="text js_chat-color-me" {{#color}}style="background-color: {{color}}"{{/color}}>--}}
{{--                        {{{message}}}--}}
{{--                        {{#image}}--}}
{{--                            <span class="text-link js_lightbox-nodata {{#message}}mt5{{/message}}" data-image="http://fyrestream.com//content/uploads/{{image}}">--}}
{{--                                <img alt="" class="img-fluid" src="http://fyrestream.com//content/uploads/{{image}}">--}}
{{--                            </span>--}}
{{--                        {{/image}}--}}

{{--                        {{#voice_note}}--}}
{{--                            <audio class="js_audio" id="audio-{{id}}" controls preload="auto" style="width: 100%; min-width: 100px;">--}}
{{--                                <source src="http://fyrestream.com//content/uploads/{{voice_note}}" type="audio/mpeg">--}}
{{--                                <source src="http://fyrestream.com//content/uploads/{{voice_note}}" type="audio/mp3">--}}
{{--                                Your browser does not support HTML5 audio--}}
{{--                            </audio>--}}
{{--                        {{/voice_note}}--}}
{{--                    </div>--}}
{{--                    <div class="time js_moment" data-time="{{time}}">--}}
{{--                        {{time}}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--    </script> --}}
{{--<script id="chat-calling" type="text/template">--}}
{{--    <div class="modal-header border-0">--}}
{{--        <h6 class="modal-title  mx-auto">--}}
{{--            --}}{{--                {{#is_video}}<i class="fa fa-video mr5"></i>{{/is_video}}--}}
{{--            --}}{{--                {{#is_audio}}<i class="fa fa-phone-volume mr5"></i>{{/is_audio}}--}}
{{--            Calling--}}
{{--        </h6>--}}
{{--    </div>--}}
{{--    <div class="modal-body text-center">--}}
{{--        --}}{{--            <h3>{{name}}</h3>--}}
{{--        <p class="text-lg js_chat-calling-message">Connecting<span class="loading-dots"></span></p>--}}

{{--        <div class="twilio-stream-wrapper">--}}
{{--            <div class="twilio-stream"></div>--}}
{{--            <video class="twilio-stream-local" autoplay=""></video>--}}
{{--        </div>--}}

{{--        <div class="mt30">--}}
{{--            <button type="button" class="btn btn-light x-hidden js_chat-call-close" data-dismiss="modal">Close</button>--}}
{{--            --}}{{--                <button type="button" class="btn btn-icon btn-rounded btn-danger x-hidden js_chat-call-cancel" data-type="{{type}}" data-dismiss="modal">--}}
{{--            <button type="button" class="btn btn-icon btn-rounded btn-danger x-hidden js_chat-call-cancel" data-dismiss="modal">--}}
{{--                <i class="fas fa-phone-slash fa-lg fa-fw"></i>--}}
{{--            </button>--}}
{{--            --}}{{--                <button type="button" class="btn btn-icon btn-rounded btn-danger x-hidden js_chat-call-end" data-type="{{type}}" data-dismiss="modal">--}}
{{--            <button type="button" class="btn btn-icon btn-rounded btn-danger x-hidden js_chat-call-end" data-dismiss="modal">--}}
{{--                <i class="fas fa-phone-slash fa-lg fa-fw"></i>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="modal-footer border-0"></div>--}}
{{--</script> <script id="chat-ringing" type="text/template">--}}
{{--    <div class="modal-header border-0">--}}
{{--        <h6 class="modal-title mx-auto">--}}
{{--            --}}{{--                {{#is_video}}<i class="fa fa-video mr5"></i>New Video Call{{/is_video}}--}}
{{--            --}}{{--                {{#is_audio}}<i class="fa fa-phone-volume mr5"></i>New Audio Call{{/is_audio}}--}}
{{--        </h6>--}}
{{--    </div>--}}
{{--    <div class="modal-body text-center">--}}
{{--        <div class="position-relative mb10" style="height: 106px;">--}}
{{--            <div class="profile-avatar-wrapper static">--}}
{{--                --}}{{--                    <img src="{{image}}" alt="{{name}}" style="width: 98px; height: 98px;">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        --}}{{--            <h3>{{name}}</h3>--}}
{{--        --}}{{--            {{#is_video}}<p class="text-lg js_chat-ringing-message">Wants to have video call with you</p>{{/is_video}}--}}
{{--        --}}{{--            {{#is_audio}}<p class="text-lg js_chat-ringing-message">Wants to have audio call with you</p>{{/is_audio}}--}}

{{--        <div class="twilio-stream-wrapper">--}}
{{--            <div class="twilio-stream"></div>--}}
{{--            <video class="twilio-stream-local" autoplay=""></video>--}}
{{--        </div>--}}

{{--        <div class="mt30">--}}
{{--            --}}{{--                <button type="submit" class="btn btn-icon btn-rounded btn-success mr10 js_chat-call-answer" data-type="{{type}}" data-id="{{id}}"><i class="fas fa-phone-alt fa-lg fa-fw"></i></button>--}}
{{--            --}}{{--                <button type="button" class="btn btn-icon btn-rounded btn-danger js_chat-call-decline" data-type="{{type}}" data-id="{{id}}" data-dismiss="modal"><i class="fas fa-phone-slash fa-lg fa-fw"></i></button>--}}
{{--            --}}{{--                <button type="button" class="btn btn-icon btn-rounded btn-danger x-hidden js_chat-call-end" data-type="{{type}}" data-id="{{id}}" data-dismiss="modal"><i class="fas fa-phone-slash fa-lg fa-fw"></i></button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="modal-footer border-0"></div>--}}
{{--</script> <script id="chat-colors-menu" type="text/template">--}}
{{--    <div class="chat-colors-menu">--}}
{{--        <div class="js_scroller" data-slimScroll-height="180">--}}
{{--            <div class="item js_chat-color" data-color="#3367d6" style="color: #3367d6;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#0ba05d" style="color: #0ba05d;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#ed9e6a" style="color: #ed9e6a;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#a085e2" style="color: #a085e2;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#01a5a5" style="color: #01a5a5;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#2b87ce" style="color: #2b87ce;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#ff72d2" style="color: #ff72d2;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#c9605e" style="color: #c9605e;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#056bba" style="color: #056bba;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#fc9cde" style="color: #fc9cde;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#70a0e0" style="color: #70a0e0;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#f2812b" style="color: #f2812b;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#8ec96c" style="color: #8ec96c;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#f33d4c" style="color: #f33d4c;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#aa2294" style="color: #aa2294;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#0e71ea" style="color: #0e71ea;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#b582af" style="color: #b582af;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#a1ce79" style="color: #a1ce79;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#56c4c5" style="color: #56c4c5;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#f9a722" style="color: #f9a722;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#f9c270" style="color: #f9c270;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#609b41" style="color: #609b41;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#51bcbc" style="color: #51bcbc;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#008484" style="color: #008484;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--            <div class="item js_chat-color" data-color="#5462a5" style="color: #5462a5;">--}}
{{--                <i class="fa fa-circle fa-2x"></i>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</script>--}}
{{--<script id="chat-attachments-item" type="text/template">--}}
{{--        <li class="item deletable" data-src="{{src}}">--}}
{{--            <img alt="" src="{{image_path}}">--}}
{{--            <button type="button" class="close js_chat-attachment-remover" title='Remove'><span>&times;</span></button>--}}
{{--        </li>--}}
{{--    </script> <script id="publisher-attachments-image-item" type="text/template">--}}
{{--            <li class="item deletable" data-src="{{src}}">--}}
{{--                <img alt="" src="{{image_path}}">--}}
{{--                <button type="button" class="close {{#mini}}js_publisher-mini-attachment-image-remover{{/mini}}{{^mini}}js_publisher-attachment-image-remover{{/mini}}" title='Remove'><span>&times;</span></button>--}}
{{--            </li>--}}
{{--        </script> <script id="publisher-attachments-video-item" type="text/template">--}}
{{--            <li class="item deletable" data-src="{{src}}">--}}
{{--                <div class="name">{{name}}</div>--}}
{{--                <button type="button" class="close js_publisher-mini-attachment-video-remover" title='Remove'><span>&times;</span></button>--}}
{{--            </li>--}}
{{--        </script> <script id="scraper-media" type="text/template">--}}
{{--            <div class="publisher-scraper-remover js_publisher-scraper-remover">--}}
{{--                <button type="button" class="close"><span>&times;</span></button>--}}
{{--            </div>--}}
{{--            <div class="post-media">--}}
{{--                <div class="post-media-embed-responsive">--}}
{{--                    {{{html}}}--}}
{{--                </div>--}}
{{--                <div class="post-media-meta">--}}
{{--                    <a class="title mb5" href="{{url}}" target="_blank">{{title}}</a>--}}
{{--                    <div class="text mb5">{{text}}</div>--}}
{{--                    <div class="source">{{provider}}</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </script> <script id="scraper-photo" type="text/template">--}}
{{--            <div class="publisher-scraper-remover js_publisher-scraper-remover">--}}
{{--                <button type="button" class="close"><span>&times;</span></button>--}}
{{--            </div>--}}
{{--            <div class="post-media">--}}
{{--                <div class="post-media-image">--}}
{{--                    <div class="image" style="background-image:url('{{url}}');"></div>--}}
{{--                </div>--}}
{{--                <div class="post-media-meta">--}}
{{--                    <div class="source">{{provider}}</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </script> <script id="scraper-link" type="text/template">--}}
{{--            <div class="publisher-scraper-remover js_publisher-scraper-remover">--}}
{{--                <button type="button" class="close"><span>&times;</span></button>--}}
{{--            </div>--}}
{{--            <div class="post-media">--}}
{{--                {{#thumbnail}}--}}
{{--                <a class="post-media-image" href="{{url}}" target="_blank">--}}
{{--                    <div class="image" style="background-image:url('{{thumbnail}}');"></div>--}}
{{--                    <div class="source">{{host}}</div>--}}
{{--                </a>--}}
{{--                {{/thumbnail}}--}}
{{--                <div class="post-media-meta">--}}
{{--                    <a class="title mb5" href="{{url}}" target="_blank">{{title}}</a>--}}
{{--                    <div class="text mb5">{{text}}</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </script>--}}{{-- <script id="poll-option" type="text/template">--}}
{{--    <div class="publisher-meta" data-meta="poll">--}}
{{--        <div--}}
{{--            class="svg-container "--}}
{{--            style="width:16px; height:16px; ">--}}


{{--            <svg height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm0 0" fill="#2196f3"/><path d="m368 277.332031h-90.667969v90.667969c0 11.777344-9.554687 21.332031-21.332031 21.332031s-21.332031-9.554687-21.332031-21.332031v-90.667969h-90.667969c-11.777344 0-21.332031-9.554687-21.332031-21.332031s9.554687-21.332031 21.332031-21.332031h90.667969v-90.667969c0-11.777344 9.554687-21.332031 21.332031-21.332031s21.332031 9.554687 21.332031 21.332031v90.667969h90.667969c11.777344 0 21.332031 9.554687 21.332031 21.332031s-9.554687 21.332031-21.332031 21.332031zm0 0" fill="#fafafa"/></svg>--}}
{{--        </div>                <input type="text" placeholder='Add an option...'>--}}
{{--    </div>--}}
{{--</script> <script id="pubisher-gif" type="text/template">--}}
{{--    <div class="publisher-scraper-remover js_publisher-gif-remover">--}}
{{--        <button type="button" class="close"><span>&times;</span></button>--}}
{{--    </div>--}}
{{--    <div class="post-media">--}}
{{--        --}}{{--                <div class="post-media-image">--}}
{{--        --}}{{--                    <div class="image" style="background-image:url('{{src}}');"></div>--}}
{{--        --}}{{--                </div>--}}
{{--    </div>--}}
{{--</script> <script id="comment-attachments-item" type="text/template">--}}
{{--            <li class="item deletable" data-src="{{src}}">--}}
{{--    --}}{{--                <img alt="" src="{{image_path}}">--}}
{{--    --}}{{--                <button type="button" class="close js_comment-attachment-remover" title='Remove'><span>&times;</span></button>--}}
{{--    --}}{{--            </li>--}}
{{--</script> <script id="edit-post" type="text/template">--}}
{{--    <div class="post-edit">--}}
{{--        <div class="x-form comment-form">--}}
{{--            --}}{{--                    <textarea rows="2" class="js_autosize js_mention js_update-post">{{text}}</textarea>--}}
{{--            <ul class="x-form-tools clearfix">--}}
{{--                <li class="x-form-tools-post js_update-post">--}}
{{--                    <i class="far fa-paper-plane fa-lg fa-fw"></i>--}}
{{--                </li>--}}
{{--                <li class="x-form-tools-emoji js_emoji-menu-toggle">--}}
{{--                    <i class="far fa-smile-wink fa-lg fa-fw"></i>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <small class="text-link js_unedit-post">Cancel</small>--}}
{{--    </div>--}}
{{--</script> <script id="edit-comment" type="text/template">--}}
{{--    <div class="comment-edit">--}}
{{--        <div class="x-form comment-form">--}}
{{--            --}}{{--                    <textarea rows="1" class="js_autosize js_mention js_update-comment">{{text}}</textarea>--}}
{{--            <ul class="x-form-tools clearfix">--}}
{{--                <li class="x-form-tools-post js_update-comment">--}}
{{--                    <i class="far fa-paper-plane fa-lg fa-fw"></i>--}}
{{--                </li>--}}
{{--                <li class="x-form-tools-attach">--}}
{{--                    <i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="comment"></i>--}}
{{--                </li>--}}
{{--                <li class="x-form-tools-emoji js_emoji-menu-toggle">--}}
{{--                    <i class="far fa-smile-wink fa-lg fa-fw"></i>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="comment-attachments attachments clearfix x-hidden">--}}
{{--            <ul>--}}
{{--                <li class="loading">--}}
{{--                    <div class="progress x-progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <small class="text-link js_unedit-comment">Cancel</small>--}}
{{--    </div>--}}
{{--</script> <script id="hidden-post" type="text/template">--}}
{{--    --}}{{--            <div class="post flagged" data-id="{{id}}">--}}
{{--    <div class="text-semibold mb5">Post Hidden</div>--}}
{{--    This post will no longer appear to you <span class="text-link js_unhide-post">Undo</span>--}}
{{--    --}}{{--            </div>--}}
{{--</script> <script id="hidden-author" type="text/template">--}}
{{--            <div class="post flagged" data-id="{{id}}">--}}
{{--    --}}{{--                You won't see posts from {{name}} in News Feed anymore. <span class="text-link js_unhide-author" data-author-id="{{uid}}" data-author-name="{{name}}">Undo</span>--}}
{{--    --}}{{--            </div>--}}
{{--</script> <script>--}}
{{--    /*--}}
{{--You can add your JavaScript code here--}}

{{--Example:--}}

{{--var x, y, z;--}}
{{--x = 1;--}}
{{--y = 2;--}}
{{--z = x + y;--}}
{{--*/--}}
{{--</script> <script src="http://fyrestream.com//content/themes/default/frontend/js/script.js"></script> <audio id="notification-sound" preload="auto"> <source src="http://fyrestream.com//includes/assets/sounds/notification.mp3" type="audio/mpeg"> </audio> <audio id="chat-sound" preload="auto"> <source src="http://fyrestream.com//includes/assets/sounds/chat.mp3" type="audio/mpeg"> </audio> <audio id="chat-calling-sound" preload="auto" loop="true"> <source src="http://fyrestream.com//includes/assets/sounds/calling.mp3" type="audio/mpeg"> </audio> <audio id="chat-ringing-sound" preload="auto" loop="true"> <source src="http://fyrestream.com//includes/assets/sounds/ringing.mp3" type="audio/mpeg"> </audio> <script>--}}
{{--    var vid = document.getElementById("videoPlayOnClick");--}}
{{--    var play = document.getElementById("playVideoBtn");--}}
{{--    var pause = document.getElementById("pauseVideoBtn");--}}
{{--    function playVid() {--}}
{{--        pause.style.display = "block";--}}
{{--        play.style.display = "none";--}}
{{--        vid.play();--}}
{{--    }--}}
{{--    function pauseVid() {--}}
{{--        vid.pause();--}}
{{--        pause.style.display = "none";--}}
{{--        play.style.display = "block";--}}
{{--    }--}}
{{--    $(document).ready(function () {--}}
{{--        $("#exampleModalMoments").on("hidden.bs.modal", function () {--}}
{{--            vid.pause();--}}
{{--        });--}}

{{--    })--}}
{{--    $(document).on('click', '.dropdown-item.pointer', function () {--}}
{{--        $('#postTypePFM').attr('data-value', $(this).data('values'));--}}
{{--        $('#postTypePFM').attr('title', 'Shared with: ' + $(this).data('values'));--}}

{{--        if($(this).data('values')=='public'){--}}
{{--            var privacy='Public';--}}
{{--        }else if($(this).data('values')=='friends'){--}}
{{--            var privacy='Friends';--}}
{{--        }else{--}}
{{--            var privacy='Only Me';--}}
{{--        }--}}
{{--        $('#postTypePFM').attr('data-original-title', 'Shared with: ' + privacy);--}}
{{--        $('#postTypeText').text(privacy)--}}
{{--    });--}}
{{--    $(document).ready(function() {--}}
{{--        $("img.side-bar-reopen").click(function() {--}}
{{--            $("#rightSideBar").toggle();--}}
{{--        });--}}
{{--        $("#closedSearchBtn").click(function() {--}}
{{--            document.getElementById('search-results').style.display='none'--}}
{{--        });--}}
{{--    });--}}
{{--</script> <script>--}}

{{--    var elem = document.getElementById("videoPlayOnClick");--}}
{{--    function openFullscreen() {--}}
{{--        if (elem.requestFullscreen) {--}}
{{--            elem.requestFullscreen();--}}
{{--        } else if (elem.webkitRequestFullscreen) { /* Safari */--}}
{{--            elem.webkitRequestFullscreen();--}}
{{--        } else if (elem.msRequestFullscreen) { /* IE11 */--}}
{{--            elem.msRequestFullscreen();--}}
{{--        }--}}
{{--    }--}}
{{--</script> <script>--}}
{{--    $('.carouselControlPrev').on('click', function(){--}}
{{--        var id=$(this).data('id');--}}
{{--        $('.storysCutomDiv').removeClass('active');--}}
{{--        $('#storyId'+id).addClass('active');--}}
{{--    });--}}
{{--</script> <script>--}}

{{--    /*$(document).ready(function() {--}}
{{--        $("a[rel^='prettyPhoto']").prettyPhoto();--}}
{{--    });*/--}}
{{--    /*  $(".video").click(function () {--}}

{{--          var theModal = $(this).data("target"),--}}
{{--              videoSRC = $(this).attr("data-video"),--}}
{{--              videoSRCauto = videoSRC + "";--}}

{{--          $(theModal + ' source').attr('src', videoSRCauto);--}}
{{--          $(theModal + ' video').load();--}}
{{--          $(theModal + ' button.close').click(function () {--}}
{{--              $(theModal + ' source').attr('src', videoSRC);--}}
{{--          });--}}

{{--      });*/--}}
{{--    $('#navbarDropdownFriendReq').on('click', function (event) {--}}
{{--        $('#dropDownequestShow').toggle();--}}
{{--    });--}}
{{--    $('.navbarDropdown').on('click', function () {--}}
{{--        $('#dropDownequestShow').hide();--}}
{{--    });--}}
{{--    $('.customClickLikeReaction1').on('click', function () {--}}
{{--        $(this).parent('.reaction-btn').parent('.action-btn').find('.duration-1.js_react-post').click();--}}
{{--    });--}}
{{--    $('.customClickLikeReaction2').on('click', function () {--}}
{{--        $(this).parent('.reaction-btn').parent('.action-btn').find('.duration-1.js_react-post').click();--}}
{{--    });--}}
{{--</script> </body> </html> <script>--}}
{{--    $(document).ready(function () {--}}
{{--        $('#addNewMoments').click(function () {--}}

{{--            $('#onLoadModal').modal('hide');--}}
{{--            $('.storyModal').modal('show');--}}
{{--        });--}}
{{--        $('.story-show-click').click(function () {--}}
{{--            $('#onLoadModal').modal('show');--}}
{{--        })--}}
{{--    })--}}
{{--</script>--}}
