@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-1">
            <aside class="col-lg-1 left-bar-to-shrink col-sm-2 pl-0">
                <div class="post-left post-left-only d-none d-sm-block position-fixed">
                    <div class="left-menu h-100">
                        <ul class="two mb-0" style="">
                            <li style="">
                                <a href="http://fyrestream.com//videos" class="mySidebar-toggoler">
                                    <img src="http://fyrestream.com//content/themes/default/frontend/images/videos-red.png" class="hover-img">
                                    <div class="tooltip">Videos</div>
                                </a>
                            </li>
                            <li>
                                <a href="http://fyrestream.com//people" class="mySidebar-toggoler">
                                    <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-06.png" class="hover-img">
                                    <div class="tooltip">People</div>
                                </a>
                            </li>
                            <li>
                                <a href="http://fyrestream.com//market" class="mySidebar-toggoler">
                                    <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-05.png" class="hover-img">
                                    <div class="tooltip">Marketplace</div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="mySidebar-toggoler">
                                    <img src="http://fyrestream.com//content/themes/default/frontend/images/entertainment-red.png" class="hover-img">
                                    <div class="tooltip">Entertainment</div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="mySidebar-toggoler">
                                    <img src="http://fyrestream.com//content/themes/default/frontend/images/group_channels-red.png" class="hover-img">
                                    <div class="tooltip">Events</div>
                                </a>
                            </li>
                            <li>
                                <a href="http://fyrestream.com//groups" class="mySidebar-toggoler">
                                    <img src="http://fyrestream.com//content/themes/default/frontend/images/discover_members-red.png" class="hover-img">
                                    <div class="tooltip">Groups</div>
                                </a>
                            </li>
                            <li>
                                <a href="http://fyrestream.com//groups" class="mySidebar-toggoler">
                                    <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-11.png" class="hover-img">
                                    <div class="tooltip">Groups</div>
                                </a>
                            </li>
                            <li>
                                <a href="http://fyrestream.com//groups" class="mySidebar-toggoler">
                                    <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-08.png" class="hover-img">
                                    <div class="tooltip">Groups</div>
                                </a>
                            </li>
                            <li>
                                <a href="http://fyrestream.com//groups" class="mySidebar-toggoler">
                                    <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-14.png" class="hover-img">
                                    <div class="tooltip">Groups</div>
                                </a>
                            </li>
                            <li>
                                <a href="http://fyrestream.com//groups" class="mySidebar-toggoler">
                                    <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-12.png" class="hover-img">
                                    <div class="tooltip">Groups</div>
                                </a>
                            </li>
                            <li>
                                <a href="http://fyrestream.com//groups" class="mySidebar-toggoler">
                                    <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-03.png" class="hover-img">
                                    <div class="tooltip">Groups</div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="create-tab">
                                    <i class="fas fa-plus-circle"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="create-container position-fixed border py-2">
                        <h3 class="text-dark pl-2">Create</h3>
                        <div class="create-items">
                            <a href="http://fyrestream.com//groups" class="d-flex align-items-center p-2">
                                <i class="fas fa-users rounded-circle bg-white text-center border"></i>
                                <div class="ml-2">
                                    <h5 class="mb-1">Group</h5>
                                    <span>Connect with people</span>
                                </div>
                            </a>
                        </div>
                        <div class="create-items">
                            <a href="" class="d-flex align-items-center p-2">
                                <i class="fas fa-store rounded-circle bg-white text-center border"></i>
                                <div class="ml-2">
                                    <h5 class="mb-1">Marketplace Listing</h5>
                                    <span>Sell items to people</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal status-modal fade" id="createPostModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0">
                            <div class="modal-header border-0 p-0">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body pt-0">
                                <div class="form-group w-100 position-relative">
                                    <textarea class="form-control w-100 h-100 shadow-none m-0" placeholder="What do you want to share"></textarea>
                                    <ul class="color-plate text-center list-inline mb-0 position-absolute">
                                        <li class="list-inline-item mr-1 mb-3 mb-sm-0">
                                            <a href="#" class="d-inline-block active"></a>
                                        </li>
                                        <li class="list-inline-item mr-1 mb-3 mb-sm-0">
                                            <a href="#" class="d-inline-block"></a>
                                        </li>
                                        <li class="list-inline-item mr-1 mb-3 mb-sm-0">
                                            <a href="#" class="d-inline-block"></a>
                                        </li>
                                        <li class="list-inline-item mr-1 mb-3 mb-sm-0">
                                            <a href="#" class="d-inline-block"></a>
                                        </li>
                                        <li class="list-inline-item mr-1 mb-3 mb-sm-0">
                                            <a href="#" class="d-inline-block"></a>
                                        </li>
                                        <li class="list-inline-item mr-1 mb-3 mb-sm-0">
                                            <a href="#" class="d-inline-block"></a>
                                        </li>
                                        <li class="list-inline-item mr-1 mb-3 mb-sm-0">
                                            <a href="#" class="d-inline-block"></a>
                                        </li>
                                        <li class="list-inline-item mr-1 mb-3 mb-sm-0">
                                            <a href="#" class="d-inline-block"></a>
                                        </li>
                                        <li class="list-inline-item mr-1 mb-3 mb-sm-0">
                                            <a href="#" class="d-inline-block"></a>
                                        </li>
                                        <li class="list-inline-item mr-1 mb-3 mb-sm-0">
                                            <a href="#" class="d-inline-block"></a>
                                        </li>
                                        <li class="list-inline-item mr-1 mb-3 mb-sm-0">
                                            <a href="#" class="d-inline-block"></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="d-inline-block"></a>
                                        </li>
                                    </ul>

                                    <div class="user-icon rounded-circle overflow-hidden position-absolute">
                                        <img class="w-100 h-100" src="http://fyrestream.com//content/themes/default/frontend/images/tanya.png" alt="tanya">
                                    </div>
                                </div>

                                <div class="text-muted text-center font-weight-bold">Drag and drop image/video hera or
                                    <a href="#" class="link">Browse</a>
                                </div>
                            </div>
                            <div class="modal-footer align-items-center justify-content-center border-0 pt-0">
                                <div>
                                    <div class="input-group">
                                        <select class="custom-select shadow-none">
                                            <option selected="">Public Audience</option>
                                            <option value="1">Personal</option>
                                            <option value="2">Friends</option>
                                            <option value="3">Custom</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="#" class="btn-tag rounded d-inline-block">Friend Tagging</a>
                                    <a href="#" class="d-inline-block mx-3">
                                        <img src="http://fyrestream.com//content/themes/default/frontend/images/camera3.png" alt="camera3">
                                    </a>
                                    <a href="#" class="btn-post d-inline-block text-white rounded" data-dismiss="modal" aria-label="Close">Post</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <div class="col-2">
            <div class="p-3 bg-white rounded mb-3">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="http://fyrestream.com//content/themes/default/frontend/images/four.png" />
                    <img src="http://fyrestream.com//content/themes/default/frontend/images/three.png" class="ml-n3" />
                </div>

                <p class="text-center">Active Events Around You</p>
                <p class="text-center small">
                    Good morning, Welcome to Fyrestream. This is where all the latest events, group notices, and system announcements will appear on your activity page.
                </p>
            </div>

            <div class="rounded mb-3 d-flex justify-content-center align-items-center" style="background-color: rgb(231, 231, 231); height: 220px;">
                <span>For Ad</span>
            </div>

            <div class="rounded mb-3 pl-2 py-3 bg-white">
                <img src="http://fyrestream.com//content/themes/default/frontend/img/Pastel_Balloons_Fyre.png" alt="birthday" width="40" class="mr-1">
                <b>Birthdays</b>
            </div>

            <div class="rounded mb-3 d-flex justify-content-center align-items-center" style="background-color: rgb(231, 231, 231); height: 220px;">
                <span>For Ad</span>
            </div>
        </div>


        <div class="col mx-3">
            <div class="bg-white px-5 py-2 shadow">
                <input type="text" placeholder="What do you want to share now, {{ Auth::user()->first_name }}?" class="form-control" style="border-radius: 30px;" readonly data-toggle="modal" data-target="#myModal">
            </div>

            @foreach($timelinePost as $a)
                <div class="bg-white mt-3 p-2">
                    <div class="row no-gutters">
                        <div class="col-1 mr-3">
                            <img src="{{ asset('assets/img/dp.png') }}" alt="create post logo" class="img-fluid rounded-circle">
                        </div>
                        <div class="col">
                            <p class="mb-0">
                                <b>{{ $a->user->first_name }} {{ $a->user->last_name }}</b> {{ $a->image ? 'added a photo' : ''}} {{ $a->feeling ? ' & is Feeling Loved' : ''}}</p>
                            <p class="text-secondary small">{{$a->created_at->diffForHumans()}} -
                                <a href="#" class="text-secondary ml-2" data-toggle="tooltip" title="Shared with: {{$a->privacy}}">
                                    @if($a->privacy == 'Public')
                                        <i class="fas fa-globe"></i>
                                    @elseif($a->privacy == 'Friends')
                                        <i class="fas fa-users"></i>
                                    @else
                                        <i class="fas fa-lock"></i>
                                    @endif
                                </a>
                            </p>
                        </div>
                        <div class="col-1">
                            <a href="" class="mr-4 float-right" data-toggle="dropdown"><i class="fas fa-ellipsis-h text-secondary"></i></a>
                            <div class="dropdown-menu mt-n5 dropdown-menu-right">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-bookmark text-muted mr-1"></i> Save Post
                                </a>
                                <hr class="my-1">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-thumbtack text-muted mr-1"></i> Pin Post
                                </a>
                                <button class="dropdown-item editPostIcon" id="{{$loop->iteration}}">
                                    <i class="fas fa-pencil-alt text-muted mr-1"></i> Edit Post
                                </button>
                                <form action="{{ route('timelinepost.deletePost', ['timelinePost' => $a->id]) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="dropdown-item">
                                        <i class="fas fa-trash-alt text-muted mr-1"></i> Delete Post
                                    </button>
                                </form>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-comment-slash text-muted mr-1"></i> Turn Off Commenting
                                </a>
                                <hr class="my-1">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-link text-muted mr-1"></i> Open Post in New Tab
                                </a>

                            </div>
                        </div>
                    </div>

                    <h5 class="mt-3" id="postData{{$loop->iteration}}">{{$a->post}}</h5>
                    <form action="{{route('timelinepost.updatePost', ['timelinePost' => $a->id])}}" id="postform{{$loop->iteration}}" method="post" class="d-none">
                        @csrf
                        @method('patch')
                        <input type="text" class="form-control" id="editPost{{$loop->iteration}}" name="post">
                        <input type="hidden" class="form-control" id="post_id" value="{{$a->id}}">
                        {{--                                            <button>Update</button>--}}
                        <button type="button" class="btn cancelBtnPost p-0" id="{{$loop->iteration}}" style="font-size: 12px;">Cancel</button>
                    </form>
                    <p class="small text-muted px-2"><i class="fas fa-comments"></i> {{$a->comments->count()}} Comments</p>

                    <div class="border-top border-bottom row no-gutters mb-3">
                        <div class="col">
                            <span class="reaction-btn"> <!-- Default like button -->
                                <span class="reaction-btn-emo like-btn-default"></span> <!-- Default like button emotion-->
                                <span class="reaction-btn-text">Like</span> <!-- Default like button text,(Like, wow, sad..) default:Like  -->
                                <ul class="emojies-box"> <!-- Reaction buttons container-->
                                    <li class="emoji emo-like" data-reaction="Like"></li>
                                    <li class="emoji emo-love" data-reaction="Love"></li>
                                    <li class="emoji emo-haha" data-reaction="HaHa"></li>
                                    <li class="emoji emo-wow" data-reaction="Wow"></li>
                                    <li class="emoji emo-sad" data-reaction="Sad"></li>
                                    <li class="emoji emo-angry" data-reaction="Angry"></li>
                                </ul>
                            </span>
{{--                            <button class="btn btn-block btn-light"><i class="far fa-thumbs-up"></i> Like</button>--}}
                        </div>
                        <div class="col">
                            <button class="btn btn-block btn-light commentPostBtn" id="{{$loop->iteration}}"><i class="far fa-comment-alt"></i> Comment</button>
                        </div>
                        <div class="col">
                            <button class="btn btn-block btn-light"><i class="fas fa-share"></i> Share</button>
                        </div>
                    </div>

                    <div class="row no-gutters my-2">
                        <div class="col-1 mr-3">
                            <img src="{{ asset('assets/img/dp.png') }}" alt="create post logo" class="img-fluid rounded-circle">
                        </div>
                        <div class="col mr-3">
                            <form method="post" action="{{route('timelinepost.storeComment', ['id' => $a->id])}}">
                                @csrf
                                <input type="text" class="form-control" placeholder="Write a comment..." style="border-radius: 20px;" name="comment" id="comment{{$loop->iteration}}">
                                <input type="hidden" id="post_id" value="{{$a->id}}">
                                <!-- <button class="btn">Post</button> -->
                            </form>
                        </div>
                    </div>

                    @foreach($a->comments->sortByDesc('created_at') as $c)
                        <div class="row no-gutters my-2">
                            <div class="col-1 mr-3">
                                <img src="{{ asset('assets/img/dp.png') }}" alt="create post logo" class="img-fluid rounded-circle">
                            </div>
                            <div class="col">
                                <div class="d-flex justify-content-between">
                                    <div class="px-3 py-2 d-inline-block" style="background-color: #F0F2F5; border-radius: 15px;">
                                        <p class="mb-0" id="commentName{{$loop->iteration}}"><b>{{$c->user->first_name}} {{$c->user->last_name}}</b></p>
                                        <p class="mb-0" id="commentData{{$loop->iteration}}">{{$c->comment}}</p>
                                        <form action="{{route('timelinepost.updateComment', ['comment' => $c->id])}}" id="form{{$loop->iteration}}" method="post" class="d-none">
                                            @csrf
                                            @method('patch')
                                            <input type="text" class="form-control" id="editComment{{$loop->iteration}}" name="comment">
                                            <input type="hidden" class="form-control" id="comment_id" value="{{$c->id}}">
{{--                                            <button>Update</button>--}}
                                            <button type="button" class="btn cancelBtn p-0" id="{{$loop->iteration}}" style="font-size: 12px;">Cancel</button>
                                        </form>
                                    </div>

                                    <a href="" class="mr-4" data-toggle="dropdown"><i class="fas fa-ellipsis-h text-secondary"></i></a>
                                    <div class="dropdown-menu mt-n5 dropdown-menu-right">
                                        <button class="dropdown-item editCommentIcon" id="{{$loop->iteration}}">Edit Comment</button>
                                        <form action="{{ route('timelinepost.deleteComment', ['comment' => $c->id]) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="dropdown-item">Delete Comment</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="pl-2 pt-2">
                                    <a href="#" class="text-dark mr-2">Like</a>
                                    <a href="#" class="text-dark">Reply</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

            <div class="bg-white mt-3 p-2">
                <div class="row no-gutters">
                    <div class="col-1 mr-3">
                        <img src="{{ asset('assets/img/dp.png') }}" alt="create post logo" class="img-fluid rounded-circle">
                    </div>
                    <div class="col">
                        <p class="mb-0">
                            <b>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</b> updated the profile picture</p>
                        <p class="text-secondary small">5 days ago - <i class="fas fa-globe"></i>

                        </p>
                    </div>
                </div>

                <div>
                    <img src="{{ asset('assets/img/dp.png') }}" alt="profile photo" class="img-fluid">
                </div>
                <p class="small text-muted px-2"><i class="fas fa-comments"></i> 0 Comments</p>

                <div class="border-top border-bottom row no-gutters">
                    <div class="col">
                        <button class="btn btn-block btn-light"><i class="far fa-thumbs-up"></i> Like</button>
                        <!-- <button class="btn btn-block btn-light prueba"><i class="far fa-thumbs-up"></i> Like</button> -->
                    </div>
                    <div class="col">
                        <button class="btn btn-block btn-light"><i class="far fa-comment-alt"></i> Comment</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-block btn-light"><i class="fas fa-share"></i> Share</button>
                    </div>
                </div>

                <div class="row no-gutters my-2">
                    <div class="col-1 mr-3">
                        <img src="{{ asset('assets/img/dp.png') }}" alt="create post logo" class="img-fluid rounded-circle">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Write a comment..." style="border-radius: 20px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="col"></div>
    </div>


    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-dark">Create Your Post</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" action="{{route('timelinepost.store')}}">
                        @csrf

                        <div class="row no-gutters">
                            <div class="col-1">
                                <img src="{{ asset('assets/img/dp.png') }}" alt="create post logo" class="img-fluid rounded-circle">
                            </div>
                            <div class="col">
                                <input type="text" id="postInput" class="form-control h-100 border-0" placeholder="What is on your mind? #Hashtag.. @Mention.. Link.." name="post">
                            </div>
                        </div>

                        <hr />
                        <div class="row row-cols-2">
                            <div class="col">
                                <button class="btn btn-light btn-block rounded text-left">
                                    <img src="http://fyrestream.com//content/themes/default/frontend/images/story-image.png" alt="" width="20" class="mr-2"> Upload Photos
                                </button>
                            </div>
                            <div class="col">
                                <button class="btn btn-light btn-block rounded text-left">
                                    <img src="http://fyrestream.com//content/themes/default/frontend/images/story-video.png" alt="" width="20" class="mr-2"> Upload Video
                                </button>
                            </div>
                            <div class="col">
                                <button class="btn btn-light btn-block rounded my-2 text-left">
                                    <div class="d-inline-block mr-1" style="width:24px; height:24px;">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 180 180" enable-background="new 0 0 180 180" xml:space="preserve"> <g> <g> <path fill="#66FFFF" d="M124,136.8H26c-7.1,0-12.8-5.7-12.8-12.8V26c0-7.1,5.7-12.8,12.8-12.8h98c7.1,0,12.8,5.7,12.8,12.8v98
                                            C136.8,131,131,136.8,124,136.8z"></path> </g> <g> <path fill="#949DC2" d="M154,166.8H56c-7.1,0-12.8-5.7-12.8-12.8V56c0-7.1,5.7-12.8,12.8-12.8h98c7.1,0,12.8,5.7,12.8,12.8v98
                                            C166.8,161,161,166.8,154,166.8z"></path> </g> </g>
                                        </svg>
                                    </div> Backgrounds
                                </button>
                            </div>
                            <div class="col">
                                <button class="btn btn-light btn-block rounded my-2 text-left">
                                    <div class="d-inline-block mr-1" style="width:24px; height:24px;">
                                        <svg height="16pt" viewBox="-32 0 512 512" width="16pt" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m426.167969 264.75h-85.164063c-3.640625 0-6.59375 2.949219-6.59375 6.59375v233.042969h98.347656v-233.042969c0-3.640625-2.949218-6.59375-6.589843-6.59375zm0 0" fill="#ffc850"></path><path d="m371.550781 264.75h-30.546875c-3.640625 0-6.59375 2.953125-6.59375 6.59375v233.046875h30.550782v-233.046875c0-3.640625 2.949218-6.59375 6.589843-6.59375zm0 0" fill="#feb644"></path><path d="m266.277344 375.886719h-85.164063c-3.640625 0-6.589843 2.953125-6.589843 6.59375v121.910156h98.34375v-121.910156c0-3.640625-2.949219-6.59375-6.589844-6.59375zm0 0" fill="#00aaf0"></path><path d="m211.664062 375.886719h-30.550781c-3.640625 0-6.589843 2.953125-6.589843 6.59375v121.910156h30.546874v-121.910156c0-3.640625 2.953126-6.59375 6.59375-6.59375zm0 0" fill="#059adb"></path><path d="m63.808594 0c-16.035156 0-29.152344 13.117188-29.152344 29.148438 0 16.035156 13.117188 29.152343 29.152344 29.152343 16.03125 0 29.148437-13.117187 29.148437-29.152343 0-16.03125-13.117187-29.148438-29.148437-29.148438zm0 0" fill="#f7b594"></path><path d="m65.207031 29.148438c0-10.4375 5.566407-19.640626 13.875-24.792969-4.449219-2.757813-9.683593-4.355469-15.273437-4.355469-16.035156 0-29.152344 13.117188-29.152344 29.148438 0 16.035156 13.117188 29.152343 29.152344 29.152343 5.589844 0 10.824218-1.601562 15.273437-4.359375-8.308593-5.148437-13.875-14.351562-13.875-24.792968zm0 0" fill="#f0a479"></path><path d="m106.390625 152.335938h-85.164063c-3.640624 0-6.59375 2.953124-6.59375 6.59375v345.457031h98.347657v-345.457031c0-3.640626-2.953125-6.59375-6.589844-6.59375zm0 0" fill="#f25c5c"></path><path d="m51.773438 152.335938h-30.546876c-3.640624 0-6.59375 2.953124-6.59375 6.59375v345.457031h30.550782v-345.457031c0-3.640626 2.949218-6.59375 6.589844-6.59375zm0 0" fill="#e54a4a"></path><path d="m87.074219 58.300781h-46.535157c-14.734374 0-26.789062 12.054688-26.789062 26.789063v32.515625c0 3.640625 2.949219 6.59375 6.589844 6.59375h86.933594c3.640624 0 6.59375-2.953125 6.59375-6.59375v-32.515625c-.003907-14.734375-12.058594-26.789063-26.792969-26.789063zm0 0" fill="#f25c5c"></path><path d="m44.296875 117.605469v-32.515625c0-14.734375 12.058594-26.789063 26.792969-26.789063h-30.550782c-14.734374 0-26.789062 12.054688-26.789062 26.789063v32.515625c0 3.640625 2.949219 6.59375 6.589844 6.59375h30.550781c-3.640625 0-6.59375-2.953125-6.59375-6.59375zm0 0" fill="#e54a4a"></path><path d="m441.320312 512h-433.707031c-4.207031 0-7.613281-3.40625-7.613281-7.613281 0-4.203125 3.40625-7.609375 7.613281-7.609375h433.710938c4.203125 0 7.609375 3.40625 7.609375 7.609375 0 4.207031-3.40625 7.613281-7.613282 7.613281zm0 0" fill="#52586d"></path><path d="m48.480469 124.199219v-26.125c0-4.203125-3.40625-7.613281-7.609375-7.613281-4.207032 0-7.613282 3.410156-7.613282 7.613281v26.121093h15.222657zm0 0" fill="#d83f3f"></path><path d="m94.355469 98.074219c0-4.203125-3.40625-7.613281-7.613281-7.613281-4.203126 0-7.609376 3.410156-7.609376 7.613281v26.121093h15.222657zm0 0" fill="#e54a4a"></path><path d="m223.695312 223.550781c-16.03125 0-29.148437 13.117188-29.148437 29.148438 0 16.035156 13.117187 29.152343 29.148437 29.152343 16.035157 0 29.152344-13.117187 29.152344-29.152343 0-16.03125-13.121094-29.148438-29.152344-29.148438zm0 0" fill="#f7b594"></path><path d="m225.09375 252.699219c0-10.441407 5.566406-19.640625 13.875-24.792969-4.449219-2.757812-9.683594-4.355469-15.273438-4.355469-16.03125 0-29.148437 13.117188-29.148437 29.148438s13.117187 29.148437 29.148437 29.148437c5.589844 0 10.824219-1.597656 15.273438-4.355468-8.308594-5.148438-13.875-14.351563-13.875-24.792969zm0 0" fill="#f0a479"></path><path d="m246.960938 281.847656h-46.53125c-14.734376 0-26.792969 12.058594-26.792969 26.792969v32.515625c0 3.640625 2.953125 6.589844 6.59375 6.589844h86.933593c3.640626 0 6.589844-2.949219 6.589844-6.589844v-32.515625c0-14.734375-12.054687-26.792969-26.792968-26.792969zm0 0" fill="#00c3ff"></path><path d="m204.1875 341.15625v-32.515625c0-14.734375 12.054688-26.792969 26.789062-26.792969h-30.546874c-14.734376 0-26.792969 12.058594-26.792969 26.792969v32.515625c0 3.640625 2.953125 6.589844 6.59375 6.589844h30.546875c-3.640625 0-6.589844-2.949219-6.589844-6.589844zm0 0" fill="#00aaf0"></path><path d="m208.371094 347.746094v-26.121094c0-4.203125-3.40625-7.613281-7.613282-7.613281-4.203124 0-7.609374 3.410156-7.609374 7.613281v26.121094zm0 0" fill="#059adb"></path><path d="m254.246094 321.625c0-4.203125-3.410156-7.613281-7.613282-7.613281-4.203124 0-7.613281 3.410156-7.613281 7.613281v26.121094h15.226563zm0 0" fill="#00aaf0"></path><path d="m383.585938 112.414062c-16.035157 0-29.152344 13.117188-29.152344 29.148438 0 16.035156 13.117187 29.152344 29.152344 29.152344 16.03125 0 29.148437-13.117188 29.148437-29.152344 0-16.03125-13.117187-29.148438-29.148437-29.148438zm0 0" fill="#f7b594"></path><path d="m384.984375 141.5625c0-10.441406 5.566406-19.640625 13.875-24.792969-4.449219-2.757812-9.683594-4.355469-15.273437-4.355469-16.035157 0-29.152344 13.117188-29.152344 29.148438s13.117187 29.152344 29.152344 29.152344c5.589843 0 10.824218-1.601563 15.273437-4.359375-8.308594-5.148438-13.875-14.351563-13.875-24.792969zm0 0" fill="#f0a479"></path><path d="m406.851562 170.714844h-46.535156c-14.734375 0-26.789062 12.054687-26.789062 26.789062v32.515625c0 3.640625 2.949218 6.589844 6.589844 6.589844h86.933593c3.640625 0 6.59375-2.949219 6.59375-6.589844v-32.515625c0-14.734375-12.058593-26.789062-26.792969-26.789062zm0 0" fill="#ffc850"></path><path d="m364.074219 230.019531v-32.515625c0-14.734375 12.058593-26.789062 26.792969-26.789062h-30.550782c-14.734375 0-26.789062 12.054687-26.789062 26.789062v32.515625c0 3.640625 2.949218 6.589844 6.589844 6.589844h30.550781c-3.640625 0-6.59375-2.949219-6.59375-6.589844zm0 0" fill="#feb644"></path><path d="m368.261719 236.609375v-26.121094c0-4.203125-3.410157-7.613281-7.613281-7.613281-4.203126 0-7.613282 3.410156-7.613282 7.613281v26.121094zm0 0" fill="#f9972d"></path><path d="m414.132812 210.488281c0-4.203125-3.40625-7.613281-7.609374-7.613281-4.207032 0-7.613282 3.410156-7.613282 7.613281v26.121094h15.222656zm0 0" fill="#feb644"></path>
                                        </svg>
                                    </div> Create Poll
                                </button>
                            </div>
                            <div class="col">
                                <button class="btn btn-light btn-block rounded text-left">
                                    <div class="d-inline-block mr-1" style="width:24px; height:24px;">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <circle style="fill:#FFD93B;" cx="256" cy="256" r="256"></circle> <path style="fill:#3E4347;" d="M256,420.544c-74.864,0-140.096-50.704-158.624-123.28c-1.456-5.712,1.984-11.52,7.696-12.976
                                            c5.68-1.488,11.504,1.984,12.96,7.696c16.128,63.136,72.848,107.232,137.952,107.232s121.84-44.096,137.952-107.232
                                            c1.44-5.712,7.248-9.184,12.976-7.696c5.712,1.456,9.152,7.264,7.696,12.976C396.096,369.84,330.864,420.544,256,420.544z"></path> <path style="fill:#F4C534;" d="M512,256c0,141.44-114.64,256-256,256c-80.48,0-152.32-37.12-199.28-95.28
                                            c43.92,35.52,99.84,56.72,160.72,56.72c141.36,0,256-114.56,256-256c0-60.88-21.2-116.8-56.72-160.72
                                            C474.8,103.68,512,175.52,512,256z"></path> <ellipse style="fill:#3E4347;" cx="173.328" cy="220.304" rx="39.232" ry="46.624"></ellipse> <path style="fill:#5A5F63;" d="M191.024,210.272c-3.056,2.4-8.08,1.216-11.296-2.688s-3.376-9.136-0.32-11.536
                                            c3.04-2.512,8.08-1.328,11.28,2.576C193.92,202.64,193.952,207.776,191.024,210.272z"></path> <ellipse style="fill:#3E4347;" cx="338.72" cy="220.304" rx="39.232" ry="46.624"></ellipse> <path style="fill:#5A5F63;" d="M356.384,210.272c-3.056,2.4-8.08,1.216-11.296-2.688s-3.376-9.136-0.32-11.536
                                            c3.04-2.512,8.064-1.328,11.28,2.576C359.28,202.64,359.312,207.776,356.384,210.272z"></path> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g>
                                        </svg>
                                    </div> Feelings / Activity
                                </button>
                            </div>
                            <div class="col">
                                <button class="btn btn-light btn-block rounded text-left">
                                    <div class="d-inline-block mr-1" style="width:24px; height:24px;">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 180 180" enable-background="new 0 0 180 180" xml:space="preserve"> <g> <g> <g> <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="31.6088" y1="76.1398" x2="163.6088" y2="31.1398"> <stop offset="0" style="stop-color:#7029B7"></stop> <stop offset="0.9946" style="stop-color:#F52883"></stop> </linearGradient> <path fill="url(#SVGID_1_)" d="M161.7,64.7c-0.1,0-0.2,0-0.2,0L33.9,45.3c-0.7-0.1-1.3-0.7-1.3-1.5c0-0.7,0.5-1.4,1.3-1.5L146,25
                                            c0.6-0.1,1.1-0.1,1.7-0.1c5.5,0,10.2,4,11,9.5l4.4,28.6c0.1,0.5-0.1,1-0.4,1.3C162.5,64.6,162.1,64.7,161.7,64.7z M44,43.8
                                            l115.9,17.6l-4.1-26.6c-0.6-4-4.1-6.9-8.1-6.9c-0.4,0-0.8,0-1.3,0.1L44,43.8z"></path> </g> </g> <g> <g> <g> <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="5.612" y1="161.5582" x2="139.112" y2="60.0582"> <stop offset="0" style="stop-color:#7029B7"></stop> <stop offset="0.9946" style="stop-color:#F52883"></stop> </linearGradient> <path fill="url(#SVGID_2_)" d="M161.3,155.1H18.7c-5.3,0-9.7-4.3-9.7-9.7v-96c0-5.3,4.3-9.7,9.7-9.7h142.5
                                            c5.3,0,9.7,4.3,9.7,9.7v96C170.9,150.7,166.6,155.1,161.3,155.1z"></path> </g> </g> </g> <g> <g> <g> <circle fill="#F7F7F7" cx="90" cy="97.4" r="45.3"></circle> </g> </g> <g> <g> <g> <g> <path fill="#74CAFE" d="M78.1,98.7c0.9-0.9,1.7-1.9,2.6-2.7c7.6-6.6,19.6-3,22.2,6.9c1.1,4,0.1,7.7-2,11.2
                                                                c-2.1,3.5-4.9,6.4-7.9,9.1c-4.4,3.9-9.3,7.3-14.4,10.2c-0.3,0.2-0.5,0.2-0.8,0c-6.5-3.8-12.5-8.1-17.8-13.5
                                                                c-2.3-2.4-4.4-5.1-5.8-8.2c-3.6-8,1.3-17.2,9.7-18.8c5.6-1.1,10.2,0.8,13.7,5.3C77.9,98.4,78,98.6,78.1,98.7z"></path> </g> </g> </g> </g> <g> <g> <g> <g> <path fill="#F7B0BB" d="M106.6,75.7c0.5-0.5,1-1.1,1.5-1.6c4.4-3.8,11.3-1.7,12.8,4c0.6,2.3,0,4.5-1.1,6.5
                                                                c-1.2,2-2.8,3.7-4.6,5.3c-2.6,2.3-5.4,4.2-8.3,5.9c-0.2,0.1-0.3,0.1-0.5,0c-3.7-2.2-7.3-4.7-10.3-7.8c-1.4-1.4-2.5-3-3.3-4.8
                                                                c-2.1-4.7,0.8-9.9,5.6-10.9c3.2-0.6,5.9,0.4,7.9,3C106.5,75.5,106.6,75.6,106.6,75.7z"></path> </g> </g> </g> </g> </g> <g> <g> <path fill="#9CFF9C" d="M126.2,107.4c-0.7-2.4-1.4-4.7-2.1-7c-1.5,1-3,2-4.5,2.9c-1.5,1-3,2-4.5,2.9c-0.4,0.3-0.6,0.5-0.4,1.1
                                                    c1.1,3.5,2.1,6.9,3.2,10.4c0.7,2.2-0.2,4.2-2.2,5.2c-2.1,1.1-4.7,0.2-5.8-1.9c-1.1-2.1-0.2-4.7,1.8-5.8c1-0.5,2-0.6,3.1-0.4
                                                    c-0.1-0.3-0.2-0.6-0.2-0.8c-1.1-3.5-2.1-7-3.2-10.5c-0.2-0.5-0.1-0.8,0.4-1.1c4.1-2.6,8.1-5.2,12.2-7.8c0.2-0.1,0.3-0.2,0.6-0.3
                                                    c0.1,0.3,0.1,0.5,0.2,0.7c1.5,5.1,3.1,10.2,4.6,15.4c0.6,2.1-0.3,4.4-2.3,5.2c-2.1,0.9-4.4,0.3-5.6-1.7c-0.8-1.5-0.9-3,0-4.4
                                                    c0.9-1.4,2.2-2.1,3.9-2.1C125.6,107.4,125.9,107.4,126.2,107.4z"></path> </g> </g> <path fill="#FF9248" d="M76.7,60.6l4.2,8.6c0,0.1,0.1,0.1,0.2,0.2l9.4,1.4c0.2,0,0.3,0.3,0.2,0.5l-6.8,6.7
                                            c-0.1,0.1-0.1,0.2-0.1,0.2l1.6,9.4c0,0.2-0.2,0.4-0.4,0.3l-8.4-4.4c-0.1,0-0.2,0-0.3,0l-8.4,4.4c-0.2,0.1-0.4-0.1-0.4-0.3l1.6-9.4
                                            c0-0.1,0-0.2-0.1-0.2l-6.8-6.7c-0.2-0.2-0.1-0.4,0.2-0.5l9.4-1.4c0.1,0,0.2-0.1,0.2-0.2l4.2-8.6C76.3,60.4,76.6,60.4,76.7,60.6z"></path> </g>
                                        </svg>
                                    </div> Moments
                                </button>
                            </div>
                        </div>

                        <hr />

                        <div class="d-flex justify-content-end align-items-center">
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" style="background: #ff6961 !important; border: 1px solid #ff6961 !important; color: white;">
                                    <span id="postSelection">Public</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item postSelectionItem" href="#"><i class="fas fa-globe"></i> Public</a>
                                    <a class="dropdown-item postSelectionItem" href="#"><i class="fas fa-users"></i> Friends</a>
                                    <a class="dropdown-item postSelectionItem" href="#"><i class="fas fa-lock"></i> Only Me</a>
                                </div>
                            </div>
                            <button class="btn btn-sm ml-2" style="background-image: linear-gradient(#ff6961, #ffa500f7); border-color: #ff6961; color: white;">Post</button>
                        </div>
                        <input type="hidden" value="Public" name="privacy" id="privacySelection">
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(function () {
            $(".postSelectionItem").click(function () {
                $("#postSelection").text($(this).text());
                $("#privacySelection").val($(this).text());
            });

            $(".editCommentIcon").click(function () {
                $("#commentData"+this.id).hide();
                $("#commentName"+this.id).hide();
                $("#form"+this.id).addClass("d-block").removeClass('d-none');
                $("#editComment"+this.id).val($("#commentData"+this.id).text());
            });

            $(".cancelBtn").click(function () {
                $("#commentData"+this.id).show();
                $("#commentName"+this.id).show();
                $("#form"+this.id).addClass("d-none").removeClass('d-block');
                $("#editComment"+this.id).val('');
            });

            $(".editPostIcon").click(function () {
                $("#postData"+this.id).hide();
                $("#postform"+this.id).addClass("d-block").removeClass('d-none');
                $("#editPost"+this.id).val($("#postData"+this.id).text());
            });

            $(".cancelBtnPost").click(function () {
                $("#postData"+this.id).show();
                $("#postform"+this.id).addClass("d-none").removeClass('d-block');
                $("#editPost"+this.id).val('');
            });

            $(".commentPostBtn").click(function () {
                $("#comment"+this.id).focus();
            });
        });



    </script>
@endsection
