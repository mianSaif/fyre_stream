<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="version" content="2.9">
    <title>Fyre Stream &rsaquo; Getting Started</title>
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
    </style>
</head>
<body>
<header class="sticky-top" id="top">
    <div class="header-top">
        <div class="  container-fluid ">
            <nav class="navbar navbar-expand-lg"><a class="navbar-brand p-0" href="http://fyrestream.com/"> <img
                        src="http://fyrestream.com//content/themes/default/frontend/images/Fyre 01.svg"
                        alt="brand-logo"> <img
                        src="http://fyrestream.com//content/themes/default/frontend/images/Fyre 02.svg"
                        class="nav-logo-text" alt="brand-logo"> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline mx-auto mt-2 mt-sm-0 position-relative header-top-searchbar"><input
                            id="search-input" autocomplete="off"
                            class="form-control ml-sm-2 rounded-pill shadow-none bg-white w-100" type="text"
                            placeholder="Search" aria-label="Search">
                        <button class="btn shadow-none my-2 my-sm-0 position-absolute" type="submit"><i
                                class="fa text-danger fa-search"></i></button>
                        <div id="search-results"
                             class="dropdown-menu dropdown-widget dropdown-search js_dropdown-keepopen">
                            <div class="dropdown-widget-header"><span class="title">Search Results</span> <span
                                    style="float: right;    cursor: pointer;" id="closedSearchBtn"> <i
                                        class="fa fa-times-circle"></i></span></div>
                            <div class="dropdown-widget-body">
                                <div class="loader loader_small ptb10"></div>
                            </div>
                            <a class="dropdown-widget-footer" id="search-results-all"
                               href="http://fyrestream.com//search/">See All Results</a></div>
                    </form>
                    <ul class="navbar-nav flex-row justify-content-around my-3 my-lg-0 notification-icons"
                        style="margin: 0px !important; transform: translate(-30px)">
                        <li class="nav-item dropdown mr-2"><a class="nav-link dropdown-toggle" href="#"> <img
                                    src="http://fyrestream.com//content/themes/default/frontend/img/all_red_flash_black-02.png">
                            </a></li>
                        <li class="nav-item dropdown mr-3 ml-4">
                        <li class="nav-item dropdown mx-1 headerTooltip"><a class="nav-link dropdown-toggle" href="#"
                                                                            id="navbarDropdownFriendReq" role="button"
                                                                            aria-haspopup="true" aria-expanded="false">
                                <img src="http://fyrestream.com//content/themes/default/frontend/img/Friends-top.png"
                                     class="top-notification-pic" alt=""> <img
                                    src="http://fyrestream.com//content/themes/default/frontend/images/Friends-Dark.png"
                                    class="top-notification-pic-hover" alt="">
                                <div class="tooltip">Friend Requests</div>
                            </a>
                            <div class="dropdown-menu py-0 rounded border-0 position-absolute"
                                 aria-labelledby="navbarDropdown" id="dropDownequestShow">
                                <div
                                    class="dropdown-menu-head rounded-top p-2 text-white d-flex align-items-center position-relative">
                                    Follower Requests
                                </div>
                                <p class="text-center text-muted mt10">
                                <div class="text-center"><img
                                        src="http://fyrestream.com//content/themes/default/images/no_results.png"
                                        class="img-resposive no-req-img" alt=""></div>
                                <div class="text-center text-muted py-4 no-req-text">
                                    You do not have any requests
                                </div>
                                </p> </div>
                        </li>
                        </li>
                        <li class="nav-item dropdown mr-3 ml-4">
                        <li class="nav-item dropdown mx-1 headerTooltip"><a
                                class="nav-link dropdown-toggle navbarDropdown" href="#" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="notify x-hidden"> <span class="counter red shadow-sm ">
               0
               0
             </span></div>
                                <img
                                    src="http://fyrestream.com//content/themes/default/frontend/img/Notification-top.png"
                                    class="top-notification-pic" alt=""> <img
                                    src="http://fyrestream.com//content/themes/default/frontend/images/Notification-Dark.png"
                                    class="top-notification-pic-hover" alt="">
                                <div class="tooltip">Notifications</div>
                            </a>
                            <div class="dropdown-menu notify-dropdown-menu py-0 rounded border-0 position-absolute"
                                 aria-labelledby="navbarDropdown">
                                <div
                                    class="dropdown-menu-head rounded-top p-2 text-white d-flex align-items-center position-relative">
                                    Notifications
                                </div>
                                <div class="dropdown-widget-body">
                                    <div class="js_scroller" style="height: unset !important;"><p
                                            class="text-center text-muted mt10">
                                            No notifications
                                        </p></div>
                                </div>
                            </div>
                        </li>
                        </li>
                        <li class="nav-item mr-3 ml-4">
                        <li class="nav-item dropdown js_live-messages headerTooltip"><a href="javascript:void(0);"
                                                                                        style="padding: 0px ;"
                                                                                        class="nav-link message-header-icon navbarDropdown"
                                                                                        data-toggle="dropdown"
                                                                                        id="navbarDropdownMessage"
                                                                                        data-display="static"> <img
                                    style=""
                                    src="http://fyrestream.com//content/themes/default/frontend/img/Mail_Icon_White_FS.png"
                                    class="top-notification-pic" alt=""> <img style=""
                                                                              src="http://fyrestream.com//content/themes/default/frontend/img/Mail_Icon_White_FS.png"
                                                                              class="top-notification-pic-hover" alt="">
                                <span class="customNotify shadow-sm counter blue shadow-sm x-hidden">
            0
        </span>
                                <div class="tooltip">Messages</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-widget with-arrow">
                                <div class="dropdown-widget-header"><h4>Messages</h4></div>
                                <div class="dropdown-widget-body">
                                    <div class="js_scroller"><p class="text-center text-muted mt10">
                                            No new messages
                                        </p></div>
                                </div>
                            </div>
                        </li>
                        </li> </ul>
                    <div class="profile-nav ml-auto">
                        <div class="btn-group"> <span type="button" style="color: black;"
                                                      class=" dropdown-toggle font-weight-bolder" data-toggle="dropdown"
                                                      aria-haspopup="true" aria-expanded="false">
                                {{Auth::user()->last_name}}  <img
                                    src="http://fyrestream.com//content/themes/default/images/blank_profile_male.jpg"
                                    style="    width: 40px; height: 40px;   border-radius: 50%;" alt="profile2"
                                    class="ml-2"> </span>
                            <div
                                class="dropdown-menu dropdown-menu-right bg-black dropdownMenuCustom profile-dropdown ">
                                <div class="text-left pl10 "><h4>{{Auth::user()->last_name}} </h4></div>
                                <div class="bg-white pt10"><a href="http://fyrestream.com//bismaat395">
                                        <button class="dropdown-item" type="button"><i class="fa fa-user"></i>
                                            My Profile
                                        </button>
                                    </a> <a href="http://fyrestream.com//settings">
                                        <button class="dropdown-item" type="button"><i class="fa fa-cog"></i>
                                            Setting and Privacy
                                        </button>
                                    </a> <a href="http://fyrestream.com//market">
                                        <button class="dropdown-item" type="button"><i class="fa fa-fire"></i>
                                            Trending Streams
                                        </button>
                                    </a> <a href="http://fyrestream.com//bismaat395/followers">
                                        <button class="dropdown-item" type="button"><i class="fa fa-users"></i>
                                            Followers
                                        </button>
                                    </a> <a href="http://fyrestream.com//bismaat395/followings">
                                        <button class="dropdown-item" type="button"><i class="fa fa-user-plus"></i>
                                            Following
                                        </button>
                                    </a> <a href="http://fyrestream.com//signout">
                                        <button class="dropdown-item" type="button"><i class="fa fa-sliders-h"></i> Log
                                            out
                                        </button>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-side-bars d-block d-sm-none">
                        <div class="categories">
                            <div class="categorie-list">
                                <div class="vertical-side-head"><h2 class="my-2">Categories</h2></div>
                                <div class="categorie-items py-3"><a class="d-flex align-items-center" href="#">
                                        <div class="img-box"><img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/videos.png"
                                                class="real-img"> <img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/videos-red.png"
                                                class="hover-img"></div>
                                        <p class="mb-0 ml-3">Videos</p></a></div>
                                <div class="categorie-items py-3"><a class="d-flex align-items-center" href="#">
                                        <div class="img-box"><img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/market_classifieds.png"
                                                class="real-img"> <img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/market_classifieds-red.png"
                                                class="hover-img"></div>
                                        <p class="mb-0 ml-3">Market Classifieds</p></a></div>
                                <div class="categorie-items py-3"><a class="d-flex align-items-center" href="#">
                                        <div class="img-box"><img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/twitch_stream.png"
                                                class="real-img"> <img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/twitch_stream-red.png"
                                                class="hover-img"></div>
                                        <p class="mb-0 ml-3">Twitch Stream</p></a></div>
                                <div class="categorie-items py-3"><a class="d-flex align-items-center" href="#">
                                        <div class="img-box"><img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/live_stream.png"
                                                class="real-img"> <img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/live_stream-red.png"
                                                class="hover-img"></div>
                                        <p class="mb-0 ml-3">Live Stream</p></a></div>
                                <div class="categorie-items py-3"><a class="d-flex align-items-center" href="#">
                                        <div class="img-box"><img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/events.png"
                                                class="real-img"> <img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/events-red.png"
                                                class="hover-img"></div>
                                        <p class="mb-0 ml-3">Events</p></a></div>
                                <div class="categorie-items py-3"><a class="d-flex align-items-center" href="#">
                                        <div class="img-box"><img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/group_channels.png"
                                                class="real-img"> <img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/group_channels-red.png"
                                                class="hover-img"></div>
                                        <p class="mb-0 ml-3">Group Channels</p></a></div>
                                <div class="categorie-items py-3"><a class="d-flex align-items-center" href="#">
                                        <div class="img-box"><img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/discover_members.png"
                                                class="real-img"> <img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/discover_members-red.png"
                                                class="hover-img"></div>
                                        <p class="mb-0 ml-3">Discover Members</p></a></div>
                                <div class="categorie-items py-3"><a class="d-flex align-items-center" href="#">
                                        <div class="img-box"><img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/custom_themes.png"
                                                class="real-img"> <img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/custom_themes-red.png"
                                                class="hover-img"></div>
                                        <p class="mb-0 ml-3">Custom Themes</p></a></div>
                                <div class="categorie-items py-3"><a class="d-flex align-items-center" href="#">
                                        <div class="img-box"><img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/pro_services.png"
                                                class="real-img"> <img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/pro_services-red.png"
                                                class="hover-img"></div>
                                        <p class="mb-0 ml-3">Pro Services</p></a></div>
                                <div class="categorie-items py-3"><a class="d-flex align-items-center" href="#">
                                        <div class="img-box"><img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/Invite_new.png"
                                                class="real-img"> <img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/Invite_new-red.png"
                                                class="hover-img"></div>
                                        <p class="mb-0 ml-3">Invite</p></a></div>
                                <div class="categorie-items py-3"><a class="d-flex align-items-center" href="#">
                                        <div class="img-box"><img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/resources.png"
                                                class="real-img"> <img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/resources-red.png"
                                                class="hover-img"></div>
                                        <p class="mb-0 ml-3">Resources</p></a></div>
                                <div class="categorie-items py-3"><a class="d-flex align-items-center" href="#">
                                        <div class="img-box"><img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/saved.png"
                                                class="real-img"> <img
                                                src="http://fyrestream.com//content/themes/default/frontend/images/saved-red.png"
                                                class="hover-img"></div>
                                        <p class="mb-0 ml-3">Saved</p></a></div>
                            </div>
                        </div>
                        <div class="contacts">
                            <div class="vertical-side-head border-top"><h2 class="my-2">Contacts</h2></div>
                            <div class="contacts-items py-3"><a class="d-flex align-items-center active" href="#"> <img
                                        src="http://fyrestream.com//content/themes/default/frontend/images/five.png"
                                        class="mr-1">
                                    <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p></a></div>
                            <div class="contacts-items py-3"><a class="d-flex align-items-center active" href="#"> <img
                                        src="http://fyrestream.com//content/themes/default/frontend/images/six.png"
                                        class="mr-1">
                                    <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p></a></div>
                            <div class="contacts-items py-3"><a class="d-flex align-items-center active" href="#"> <img
                                        src="http://fyrestream.com//content/themes/default/frontend/images/seven.png"
                                        class="mr-1">
                                    <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p></a></div>
                            <div class="contacts-items py-3"><a class="d-flex align-items-center active" href="#"> <img
                                        src="http://fyrestream.com//content/themes/default/frontend/images/eight.png"
                                        class="mr-1">
                                    <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p></a></div>
                            <div class="contacts-items py-3"><a class="d-flex align-items-center active" href="#"> <img
                                        src="http://fyrestream.com//content/themes/default/frontend/images/nine.png"
                                        class="mr-1">
                                    <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p></a></div>
                            <div class="contacts-items py-3"><a class="d-flex align-items-center active" href="#"> <img
                                        src="http://fyrestream.com//content/themes/default/frontend/images/ten.png"
                                        class="mr-1">
                                    <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p></a></div>
                            <div class="contacts-items py-3"><a class="d-flex align-items-center active" href="#"> <img
                                        src="http://fyrestream.com//content/themes/default/frontend/images/11.png"
                                        class="mr-1">
                                    <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p></a></div>
                            <div class="contacts-items py-3"><a class="d-flex align-items-center active" href="#"> <img
                                        src="http://fyrestream.com//content/themes/default/frontend/images/12.png"
                                        class="mr-1">
                                    <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p></a></div>
                            <div class="contacts-items py-3 mb-5"><a class="d-flex align-items-center active" href="#">
                                    <img src="http://fyrestream.com//content/themes/default/frontend/images/13.png"
                                         class="mr-1">
                                    <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p></a></div>
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
<style>
    .text-center {
        color: #e04e5c;
    }
</style>
<div class="page-header">
    <div class="container" style="margin-top: -25px;">
        <div class="row">
            <div class="col-12 col-md-10 mx-md-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <form method="POST" class="js_ajax-forms" action="{{url('update_user')}}" enctype="multipart/form-data">
                            @csrf
                        <ul class="nav nav-pills nav-fill nav-started mb30 js_wizard-steps">
                            <li class="nav-item"><a class="nav-link active" href="#step-1"><p class="mb0">Upload your
                                        photo</p></a></li>
                            <li class="nav-item"><a class="nav-link disabled" href="#step-2"><p class="mb0">Update your
                                        info</p></a></li>
                            <li class="nav-item"><a class="nav-link disabled" href="#step-3"><p class="mb0">Add
                                        Friends</p></a></li>
                        </ul>
                        <div class="js_wizard-content" id="step-1">
                            <div class="text-center" style="color: #e04e5c;"><h3 class="mb5">Welcome <span
                                        class="text-primary">{{Auth::user()->last_name}} </span></h3>
                                <p class="mb20">Let's start with your photo</p></div>
                            <div class="position-relative" style="height: 170px;">
                                <div class="profile-avatar-wrapper static"><img
                                        src="http://fyrestream.com//content/themes/default/images/blank_profile_male.jpg"
                                        alt="Bismaat Jondy">
                                    <div class="profile-avatar-change"><i class="fa fa-camera js_x-uploader"
                                                                          data-handle="picture-user"></i></div>
                                    <div class="profile-avatar-change-loader">
                                        <div class="progress x-progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="profile-avatar-crop x-hidden"><i
                                            class="fa fa-crop-alt js_init-crop-picture" data-image="" data-handle="user"
                                            data-id="62"></i></div>
                                    <div class="profile-avatar-delete x-hidden"><i class="fa fa-trash js_delete-picture"
                                                                                   data-handle="picture-user"></i></div>
                                </div>
                            </div>
                            <div class="clearfix mt20">
                                <button type="button" id="activate-step-2" class="btn btn-primary float-right">Next Step<i
                                        class="fa fa-arrow-circle-right ml5"></i></button>
                            </div>
                        </div>
                        <div class="js_wizard-content x-hidden" id="step-2">
                            <div class="text-center"><h3 class="mb5">Update your info</h3></div>
                                <div class="heading-small mb20">
                                    Location
                                </div>
                                <div class="pl-md-4">
                                    <div class="form-group"><label class="form-control-label"
                                                                   for="country">Country</label> <select
                                            class="form-control" name="country" id="country">
                                            <option value="230">United States</option>
                                            <option value="1">Afghanistan</option>
                                            <option value="2">Albania</option>
                                            <option value="3">Algeria</option>
                                            <option value="4">American Samoa</option>
                                            <option value="5">Andorra</option>
                                            <option value="6">Angola</option>
                                            <option value="7">Anguilla</option>
                                            <option value="8">Antarctica</option>
                                            <option value="9">Antigua and Barbuda</option>
                                            <option value="10">Argentina</option>
                                            <option value="11">Armenia</option>
                                            <option value="12">Aruba</option>
                                            <option value="13">Australia</option>
                                            <option value="14">Austria</option>
                                            <option value="15">Azerbaijan</option>
                                            <option value="16">Bahamas</option>
                                            <option value="17">Bahrain</option>
                                            <option value="18">Bangladesh</option>
                                            <option value="19">Barbados</option>
                                            <option value="20">Belarus</option>
                                            <option value="21">Belgium</option>
                                            <option value="22">Belize</option>
                                            <option value="23">Benin</option>
                                            <option value="24">Bermuda</option>
                                            <option value="25">Bhutan</option>
                                            <option value="26">Bolivia</option>
                                            <option value="27">Bosnia and Herzegovina</option>
                                            <option value="28">Botswana</option>
                                            <option value="29">Bouvet Island</option>
                                            <option value="30">Brazil</option>
                                            <option value="31">British Indian Ocean Territory</option>
                                            <option value="32">Brunei Darussalam</option>
                                            <option value="33">Bulgaria</option>
                                            <option value="34">Burkina fao</option>
                                            <option value="35">Burundi</option>
                                            <option value="36">Cambodia</option>
                                            <option value="37">Cameroon</option>
                                            <option value="38">Canada</option>
                                            <option value="39">Cape Verde</option>
                                            <option value="40">Cayman Islands</option>
                                            <option value="41">Central African Republic</option>
                                            <option value="42">Chad</option>
                                            <option value="43">Chile</option>
                                            <option value="44">China</option>
                                            <option value="45">Christmas Island</option>
                                            <option value="46">Cocos (Keeling) Islands</option>
                                            <option value="47">Colombia</option>
                                            <option value="48">Comoros</option>
                                            <option value="49">Congo</option>
                                            <option value="50">Cook Islands</option>
                                            <option value="51">Costa Rica</option>
                                            <option value="52">Croatia (Hrvatska)</option>
                                            <option value="53">Cuba</option>
                                            <option value="54">Cyprus</option>
                                            <option value="55">Czech Republic</option>
                                            <option value="56">Denmark</option>
                                            <option value="57">Djibouti</option>
                                            <option value="58">Dominica</option>
                                            <option value="59">Dominican Republic</option>
                                            <option value="60">East Timor</option>
                                            <option value="61">Ecuador</option>
                                            <option value="62">Egypt</option>
                                            <option value="63">El Salvador</option>
                                            <option value="64">Equatorial Guinea</option>
                                            <option value="65">Eritrea</option>
                                            <option value="66">Estonia</option>
                                            <option value="67">Ethiopia</option>
                                            <option value="68">Falkland Islands (Malvinas)</option>
                                            <option value="69">Faroe Islands</option>
                                            <option value="70">Fiji</option>
                                            <option value="71">Finland</option>
                                            <option value="72">France</option>
                                            <option value="73">France, Metropolitan</option>
                                            <option value="74">French Guiana</option>
                                            <option value="75">French Polynesia</option>
                                            <option value="76">French Southern Territories</option>
                                            <option value="77">Gabon</option>
                                            <option value="78">Gambia</option>
                                            <option value="79">Georgia</option>
                                            <option value="80">Germany</option>
                                            <option value="81">Ghana</option>
                                            <option value="82">Gibraltar</option>
                                            <option value="83">Guernsey</option>
                                            <option value="84">Greece</option>
                                            <option value="85">Greenland</option>
                                            <option value="86">Grenada</option>
                                            <option value="87">Guadeloupe</option>
                                            <option value="88">Guam</option>
                                            <option value="89">Guatemala</option>
                                            <option value="90">Guinea</option>
                                            <option value="91">Guinea-Bissau</option>
                                            <option value="92">Guyana</option>
                                            <option value="93">Haiti</option>
                                            <option value="94">Heard and Mc Donald Islands</option>
                                            <option value="95">Honduras</option>
                                            <option value="96">Hong Kong</option>
                                            <option value="97">Hungary</option>
                                            <option value="98">Iceland</option>
                                            <option value="99">India</option>
                                            <option value="100">Isle of Man</option>
                                            <option value="101">Indonesia</option>
                                            <option value="102">Iran (Islamic Republic of)</option>
                                            <option value="103">Iraq</option>
                                            <option value="104">Ireland</option>
                                            <option value="105">Israel</option>
                                            <option value="106">Italy</option>
                                            <option value="107">Ivory Coast</option>
                                            <option value="108">Jersey</option>
                                            <option value="109">Jamaica</option>
                                            <option value="110">Japan</option>
                                            <option value="111">Jordan</option>
                                            <option value="112">Kazakhstan</option>
                                            <option value="113">Kenya</option>
                                            <option value="114">Kiribati</option>
                                            <option value="115">Korea, Democratic People's Republic of</option>
                                            <option value="116">Korea, Republic of</option>
                                            <option value="117">Kosovo</option>
                                            <option value="118">Kuwait</option>
                                            <option value="119">Kyrgyzstan</option>
                                            <option value="120">Lao People's Democratic Republic</option>
                                            <option value="121">Latvia</option>
                                            <option value="122">Lebanon</option>
                                            <option value="123">Lesotho</option>
                                            <option value="124">Liberia</option>
                                            <option value="125">Libyan Arab Jamahiriya</option>
                                            <option value="126">Liechtenstein</option>
                                            <option value="127">Lithuania</option>
                                            <option value="128">Luxembourg</option>
                                            <option value="129">Macau</option>
                                            <option value="130">Macedonia</option>
                                            <option value="131">Madagascar</option>
                                            <option value="132">Malawi</option>
                                            <option value="133">Malaysia</option>
                                            <option value="134">Maldives</option>
                                            <option value="135">Mali</option>
                                            <option value="136">Malta</option>
                                            <option value="137">Marshall Islands</option>
                                            <option value="138">Martinique</option>
                                            <option value="139">Mauritania</option>
                                            <option value="140">Mauritius</option>
                                            <option value="141">Mayotte</option>
                                            <option value="142">Mexico</option>
                                            <option value="143">Micronesia, Federated States of</option>
                                            <option value="144">Moldova, Republic of</option>
                                            <option value="145">Monaco</option>
                                            <option value="146">Mongolia</option>
                                            <option value="147">Montenegro</option>
                                            <option value="148">Montserrat</option>
                                            <option value="149">Morocco</option>
                                            <option value="150">Mozambique</option>
                                            <option value="151">Myanmar</option>
                                            <option value="152">Namibia</option>
                                            <option value="153">Nauru</option>
                                            <option value="154">Nepal</option>
                                            <option value="155">Netherlands</option>
                                            <option value="156">Netherlands Antilles</option>
                                            <option value="157">New Caledonia</option>
                                            <option value="158">New Zealand</option>
                                            <option value="159">Nicaragua</option>
                                            <option value="160">Niger</option>
                                            <option value="161">Nigeria</option>
                                            <option value="162">Niue</option>
                                            <option value="163">Norfolk Island</option>
                                            <option value="164">Northern Mariana Islands</option>
                                            <option value="165">Norway</option>
                                            <option value="166">Oman</option>
                                            <option value="167">Pakistan</option>
                                            <option value="168">Palau</option>
                                            <option value="169">Palestine</option>
                                            <option value="170">Panama</option>
                                            <option value="171">Papua New Guinea</option>
                                            <option value="172">Paraguay</option>
                                            <option value="173">Peru</option>
                                            <option value="174">Philippines</option>
                                            <option value="175">Pitcairn</option>
                                            <option value="176">Poland</option>
                                            <option value="177">Portugal</option>
                                            <option value="178">Puerto Rico</option>
                                            <option value="179">Qatar</option>
                                            <option value="180">Reunion</option>
                                            <option value="181">Romania</option>
                                            <option value="182">Russian Federation</option>
                                            <option value="183">Rwanda</option>
                                            <option value="184">Saint Kitts and Nevis</option>
                                            <option value="185">Saint Lucia</option>
                                            <option value="186">Saint Vincent and the Grenadines</option>
                                            <option value="187">Samoa</option>
                                            <option value="188">San Marino</option>
                                            <option value="189">Sao Tome and Principe</option>
                                            <option value="190">Saudi Arabia</option>
                                            <option value="191">Senegal</option>
                                            <option value="192">Serbia</option>
                                            <option value="193">Seychelles</option>
                                            <option value="194">Sierra Leone</option>
                                            <option value="195">Singapore</option>
                                            <option value="196">Slovakia</option>
                                            <option value="197">Slovenia</option>
                                            <option value="198">Solomon Islands</option>
                                            <option value="199">Somalia</option>
                                            <option value="200">South Africa</option>
                                            <option value="201">South Georgia South Sandwich Islands</option>
                                            <option value="202">Spain</option>
                                            <option value="203">Sri Lanka</option>
                                            <option value="204">St. Helena</option>
                                            <option value="205">St. Pierre and Miquelon</option>
                                            <option value="206">Sudan</option>
                                            <option value="207">Suriname</option>
                                            <option value="208">Svalbard and Jan Mayen Islands</option>
                                            <option value="209">Swaziland</option>
                                            <option value="210">Sweden</option>
                                            <option value="211">Switzerland</option>
                                            <option value="212">Syrian Arab Republic</option>
                                            <option value="213">Taiwan</option>
                                            <option value="214">Tajikistan</option>
                                            <option value="215">Tanzania, United Republic of</option>
                                            <option value="216">Thailand</option>
                                            <option value="217">Togo</option>
                                            <option value="218">Tokelau</option>
                                            <option value="219">Tonga</option>
                                            <option value="220">Trinidad and Tobago</option>
                                            <option value="221">Tunisia</option>
                                            <option value="222">Turkey</option>
                                            <option value="223">Turkmenistan</option>
                                            <option value="224">Turks and Caicos Islands</option>
                                            <option value="225">Tuvalu</option>
                                            <option value="226">Uganda</option>
                                            <option value="227">Ukraine</option>
                                            <option value="228">United Arab Emirates</option>
                                            <option value="229">United Kingdom</option>
                                            <option value="230">United States</option>
                                            <option value="231">United States minor outlying islands</option>
                                            <option value="232">Uruguay</option>
                                            <option value="233">Uzbekistan</option>
                                            <option value="234">Vanuatu</option>
                                            <option value="235">Vatican City State</option>
                                            <option value="236">Venezuela</option>
                                            <option value="237">Vietnam</option>
                                            <option value="238">Virgin Islands (British)</option>
                                            <option value="239">Virgin Islands (U.S.)</option>
                                            <option value="240">Wallis and Futuna Islands</option>
                                            <option value="241">Western Sahara</option>
                                            <option value="242">Yemen</option>
                                            <option value="243">Zaire</option>
                                            <option value="244">Zambia</option>
                                            <option value="245">Zimbabwe</option>
                                        </select></div>
                                    <div class="row">
                                        <div class="form-group col-md-6"><label class="form-control-label" for="city">Current
                                                City</label> <input type="text" placeholder="Current City"
                                                                    class="form-control js_geocomplete" name="city"
                                                                    id="city" value=""></div>
                                        <div class="form-group col-md-6"><label class="form-control-label"
                                                                                for="hometown">Hometown</label> <input
                                                type="text" placeholder="Hometown" class="form-control js_geocomplete"
                                                name="hometown" id="hometown" value=""></div>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="heading-small mb20">
                                    Work
                                </div>
                                <div class="pl-md-4">
                                    <div class="form-group"><label class="form-control-label" for="work_title">Work
                                            Title</label> <input type="text" class="form-control"
                                                                 placeholder="Work Title" name="work_title"
                                                                 id="work_title" value=""></div>
                                    <div class="row">
                                        <div class="form-group col-md-6"><label class="form-control-label"
                                                                                for="work_place">Work Place</label>
                                            <input type="text" class="form-control" placeholder="Work Place"
                                                   name="work_place" id="work_place" value=""></div>
                                        <div class="form-group col-md-6"><label class="form-control-label"
                                                                                for="work_url">Work Website</label>
                                            <input type="text" class="form-control" placeholder="Work Website"
                                                   name="work_url" id="work_url" value=""></div>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="heading-small mb20">
                                    Education
                                </div>
                                <div class="pl-md-4">
                                    <div class="form-group"><label class="form-control-label"
                                                                   for="edu_major">Major</label> <input type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder="Major"
                                                                                                        name="edu_major"
                                                                                                        id="edu_major"
                                                                                                        value=""></div>
                                    <div class="row">
                                        <div class="form-group col-md-6"><label class="form-control-label"
                                                                                for="edu_school">School</label> <input
                                                type="text" class="form-control" placeholder="School" name="edu_school"
                                                id="edu_school" value=""></div>
                                        <div class="form-group col-md-6"><label class="form-control-label"
                                                                                for="edu_class">Class</label> <input
                                                type="text" class="form-control" placeholder="Class" name="edu_class"
                                                id="edu_class" value=""></div>
                                    </div>
                                </div>
                                <div class="alert alert-success x-hidden"></div>
                                <div class="alert alert-danger x-hidden"></div>
                                <div class="clearfix mt20">
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-success"><i
                                                class="fa fa-check-circle mr5"></i>Save Changes
                                        </button>
                                        <button type="button" class="btn btn-primary" id="activate-step-3">Next Step<i
                                                class="fa fa-arrow-circle-right ml5"></i></button>
                                    </div>
                                </div>
                        </div>
                        <div class="js_wizard-content x-hidden" id="step-3">
                            <div class="text-center"><h3 class="mb5">Add Friends</h3></div>
                            <ul class="row">
                                <div class="col-md-6 col-lg-3"><i class="fa fa-times-circle follow-close-btn"></i>
                                    <div class="ui-box">
                                        <div class="img"><a href="http://fyrestream.com//danishrehman1447"> <img
                                                    alt="Danish Rehman"
                                                    src="http://fyrestream.com//content/themes/default/images/blank_profile_male.jpg"/>
                                            </a></div>
                                        <div class="mt10"> <span class="js_user-popover" data-uid="13"> <a class="h6"
                                                                                                           href="http://fyrestream.com//danishrehman1447"
                                                                                                           title="Danish Rehman">
                        Danish Rehman
                    </a> </span></div>
                                        <div class="mt10">
                                            <button type="button" class="btn btn-sm btn-success js_friend-add"
                                                    data-uid="13"><i class="fa fa-user-plus mr5"></i>Add Friend
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3"><i class="fa fa-times-circle follow-close-btn"></i>
                                    <div class="ui-box">
                                        <div class="img"><a href="http://fyrestream.com//mudassirmehdi"> <img
                                                    alt="Mudassir  Mehdi"
                                                    src="http://fyrestream.com//content/themes/default/images/blank_profile_male.jpg"/>
                                            </a></div>
                                        <div class="mt10"> <span class="js_user-popover" data-uid="41"> <a class="h6"
                                                                                                           href="http://fyrestream.com//mudassirmehdi"
                                                                                                           title="Mudassir  Mehdi">
                        Mudassir  Mehdi
                    </a> </span></div>
                                        <div class="mt10">
                                            <button type="button" class="btn btn-sm btn-success js_friend-add"
                                                    data-uid="41"><i class="fa fa-user-plus mr5"></i>Add Friend
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3"><i class="fa fa-times-circle follow-close-btn"></i>
                                    <div class="ui-box">
                                        <div class="img"><a href="http://fyrestream.com//zainali"> <img alt="Zain Ali"
                                                                                                        src="http://fyrestream.com//content/uploads/photos/2020/11/sngine_4b996d8ffd412bbe095d69510fc17ec1_cropped.jpg"/>
                                            </a></div>
                                        <div class="mt10"> <span class="js_user-popover" data-uid="6"> <a class="h6"
                                                                                                          href="http://fyrestream.com//zainali"
                                                                                                          title="Zain Ali">
                        Zain Ali
                    </a> </span></div>
                                        <div class="mt10">
                                            <button type="button" class="btn btn-sm btn-success js_friend-add"
                                                    data-uid="6"><i class="fa fa-user-plus mr5"></i>Add Friend
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3"><i class="fa fa-times-circle follow-close-btn"></i>
                                    <div class="ui-box">
                                        <div class="img"><a href="http://fyrestream.com//danish402"> <img
                                                    alt="Danish Rehman"
                                                    src="http://fyrestream.com//content/themes/default/images/blank_profile_male.jpg"/>
                                            </a></div>
                                        <div class="mt10"> <span class="js_user-popover" data-uid="37"> <a class="h6"
                                                                                                           href="http://fyrestream.com//danish402"
                                                                                                           title="Danish Rehman">
                        Danish Rehman
                    </a> </span></div>
                                        <div class="mt10">
                                            <button type="button" class="btn btn-sm btn-success js_friend-add"
                                                    data-uid="37"><i class="fa fa-user-plus mr5"></i>Add Friend
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3"><i class="fa fa-times-circle follow-close-btn"></i>
                                    <div class="ui-box">
                                        <div class="img"><a href="http://fyrestream.com//danish4045"> <img
                                                    alt="Danish Rehman"
                                                    src="http://fyrestream.com//content/uploads/photos/2020/11/sngine_bf7ee3cfc81d2d833abcd6fec85f5d18_cropped.jpg"/>
                                            </a></div>
                                        <div class="mt10"> <span class="js_user-popover" data-uid="12"> <a class="h6"
                                                                                                           href="http://fyrestream.com//danish4045"
                                                                                                           title="Danish Rehman">
                        Danish Rehman
                    </a> </span></div>
                                        <div class="mt10">
                                            <button type="button" class="btn btn-sm btn-success js_friend-add"
                                                    data-uid="12"><i class="fa fa-user-plus mr5"></i>Add Friend
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                            <div class="clearfix mt20"><button href=""
                                                          class="btn btn-danger float-right"><i
                                        class="fa fa-check-circle mr5"></i>Finish</button></div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<div class="container">
    <div class="row footer ">
        <div class="col-sm-6">
            &copy; 2021 Fyre Stream · <span class="text-link" data-toggle="modal" data-url="#translator">English</span>
        </div>
        <div class="col-sm-6 links"></div>
    </div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
</body>
</html>
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
