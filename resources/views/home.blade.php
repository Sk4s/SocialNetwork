@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body style="background: url('default/profile-background.jpg') no-repeat center fixed; -webkit-background-size: cover; background-size: cover;">
    <div class="container w3-content">    
        <div class="row">
            <div class="col-md-4">
                <div class="w3-card w3-round w3-white">
                    <div class="w3-container">
                        <h4 class="w3-center">My Profile</h4>
                        <!-- <p class="w3-center"><img src="/w3images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p> -->
                        <hr>
                        <p style="overflow: scroll;"><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->firstname }} </p>

                        <p style="overflow: scroll;"><i class="fa fa-qq fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->lastname }}</p>

                        <p style="overflow: scroll;"><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()-> username }}</p>

                        <p style="overflow: scroll;"><i class="fa fa-angellist fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->bio }}</p>
                    </div>
                </div>
                </br>
                <div class="w3-card w3-round w3-white">
                    <div class="w3-container">
                        <h4 class="w3-center">My Details</h4>
                        <hr>
                        <p style="overflow: scroll;"><i class="fa fa-at fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->email }}</p>

                        <p style="overflow: scroll;"><i class="fa fa-mobile fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->mobile }}</p>

                        <p style="overflow: scroll;"><i class="fa fa-phone fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->phone }}</p>

                        <p style="overflow: scroll;"><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->adress }}</p>

                        <p style="overflow: scroll;"><i class="fa fa-location-arrow fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->postal_code }}</p>

                        <p style="overflow: scroll;"><i class="fa fa-map-signs fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->city }}</p>

                    </div>
                </div>
                </br>
                <div class="w3-card w3-round w3-white">
                    <div class="w3-container">
                        <h4 class="w3-center">Links</h4>
                        <hr>
                        <p style="overflow: scroll;"><i class="fa fa-sitemap fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->website }}</p>

                        <p style="overflow: scroll;"><i class="fa fa-github fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->github }}</p>

                        <p style="overflow: scroll;"><i class="fa fa-linkedin-square fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->linkedin }}</p>


                    </div>
                </div>
                </br>
                <div class="w3-card w3-round w3-white">
                    <div class="w3-container">
                        <h4 class="w3-center">About</h4>
                        <hr>
                        <p style="overflow: scroll;"><i class="fa fa-code fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->ilanguage }}</p>
                        <!-- <p><i class="fa fa-code fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->ilanguage }}</p>
                        <p><i class="fa fa-code fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->ilanguage }}</p>
                        <p><i class="fa fa-code fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->ilanguage }}</p>
                        <p><i class="fa fa-code fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->ilanguage }}</p> -->

                        <p style="overflow: scroll;"><i class="fa fa-language fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->language }}</p>
                        <!-- <p><i class="fa fa-language fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->language }}</p>
                        <p><i class="fa fa-language fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->language }}</p> -->

                        <p style="overflow: scroll;"><i class="fa fa-wrench fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->tool }}</p>
                        <!-- <p><i class="fa fa-wrench fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->tool }}</p>
                        <p><i class="fa fa-wrench fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->tool }}</p>
                        <p><i class="fa fa-wrench fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->tool }}</p>
                        <p><i class="fa fa-wrench fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->tool }}</p> -->

                        <p style="overflow: scroll;"><i class="fa fa-street-view fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->know_how }}</p>
                        <!-- <p><i class="fa fa-street-view fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->know_how }}</p>
                        <p><i class="fa fa-street-view fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->know_how }}</p>
                        <p><i class="fa fa-street-view fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->know_how }}</p>
                        <p><i class="fa fa-street-view fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->know_how }}</p> -->

                        <p style="overflow: scroll;"><i class="fa fa-suitcase fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->expertise }}</p>
                        <!-- <p><i class="fa fa-suitcase fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->expertise }}</p>
                        <p><i class="fa fa-suitcase fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->expertise }}</p>
                        <p><i class="fa fa-suitcase fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->expertise }}</p>
                        <p><i class="fa fa-suitcase fa-fw w3-margin-right w3-text-theme"></i>{{ Auth::user()->expertise }}</p> -->

                        <p style="overflow: scroll;"><i class="fa fa-file-pdf-o fa-fw w3-margin-right w3-text-theme"><a href="#"></i>{{ Auth::user()->cv }}</a></p>
                    </div>
                </div>
                <br>
          
                <div class="w3-card w3-round">
                    <div class="w3-white">
                        <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
                        <div id="Demo1" class="w3-hide w3-container">
                            <p>Some text..</p>
                        </div>
                        <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
                        <div id="Demo2" class="w3-hide w3-container">
                            <p>Some other text..</p>
                        </div>
                        <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
                        <div id="Demo3" class="w3-hide w3-container">
                            <div class="w3-row-padding">
                                <br>
                                <div class="w3-half">
                                    <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/fjords.jpg" style="width:100%" class="w3-margin-bottom">
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
                <br>
           
                <div class="w3-card w3-round w3-white w3-hide-small">
                    <div class="w3-container">
                        <p>Interests</p>
                        <p>
                        <span class="w3-tag w3-small w3-theme-d5">News</span>
                        <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
                        <span class="w3-tag w3-small w3-theme-d3">Labels</span>
                        <span class="w3-tag w3-small w3-theme-d2">Games</span>
                        <span class="w3-tag w3-small w3-theme-d1">Friends</span>
                        <span class="w3-tag w3-small w3-theme">Games</span>
                        <span class="w3-tag w3-small w3-theme-l1">Friends</span>
                        <span class="w3-tag w3-small w3-theme-l2">Food</span>
                        <span class="w3-tag w3-small w3-theme-l3">Design</span>
                        <span class="w3-tag w3-small w3-theme-l4">Art</span>
                        <span class="w3-tag w3-small w3-theme-l5">Photos</span>
                      </p>
                    </div>
                </div>
                <br>

                <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
                    <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
                    <i class="fa fa-remove"></i>
                    </span>
                    <p><strong>Hey!</strong></p>
                    <p>People are looking at your profile... Brrr so scary</p>
                </div>
            </div>

            <div class="col-md-8" style="position: -webkit-sticky; position: sticky; top: 0;">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        Welcome {{ Auth::user()->username }}
                        <!-- <img src="{{ Auth::user()->profile_picture }}" alt=""> -->
                        </br>
                        @if(Auth::user()->set_avatar == false)
                        <img src="/default/{{ Auth::user()->profile_picture }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                        @else
                        <img src="/images/{{ Auth::user()->profile_picture }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                        @endif
                        <form enctype="multipart/form-data" action="/home" method="POST">
                            <label>Update Profile Image</label>
                            <input type="file" name="profile_picture">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="pull-right btn btn-sm btn-primary">
                        </form>
                        </br>

                        <div> <!-- https://getbootstrap.com/docs/3.3/javascript/#tabs -->

                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#posts" aria-controls="posts" role="tab" data-toggle="tab">Your Posts</a></li>
                            <li role="presentation"><a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">Comments</a></li>
                            <li role="presentation"><a href="#categories" aria-controls="categories" role="tab" data-toggle="tab">Categories</a></li>
                            {{-- <li role="presentation"><a href="#likes" aria-controls="likes" role="tab" data-toggle="tab">Liked Posts</a></li> --}}
                            <!-- <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li> -->
                          </ul>

                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="posts">
                               {{ Auth::user()->posts()->count() }} Posts created
                               @foreach (Auth::user()->posts as $post)
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">{{ $post->title }}
                                                <div class="pull-right">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="background-color: rgba(24,24,24,0.8);">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px; color: white; background-color: rgba(24,24,24,0.8);">
                                                                {{-- <img src="/images/{{ Auth::user()->profile_picture }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%"> --}}
                                                                <span class="caret"></span>
                                                            </a>
                                                        </a>

                                                        <ul class="dropdown-menu" style="background-color: rgba(24,24,24,0.8);">
                                                            <li> <a style="color: white;" href="{{ route('post.show', [$post->id]) }}">Show Post</a></li>
                                                            <li> <a style="color: white;" href="{{ route('post.edit', [$post->id]) }}">Edit Post</a></li>
                                                            <li>
                                                                <a style="color: white;" href="#" onclick="document.getElementById('delete').submit()">Delete Post</a>
                                                                {!! Form::open(['method' => 'DELETE', 'id' => 'delete', 'route' => ['post.delete', $post->id]]) !!}
                                                                {!! Form::close() !!}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </h3>
                                        </div>
                                        <div class="panel-body">
                                            {{ $post->body }}
                                            </br>
                                            Category: <div class="badge">{{ $post->category->name }} </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div role="tabpanel" class="tab-pane" id="comments"> All the comments created by this user will be showed here
                            </div>
                            <div role="tabpanel" class="tab-pane" id="categories">
                                {{ Auth::user()->categories()->count() }} Categories created
                                @foreach (Auth::user()->categories as $category)
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            {{ $category->name }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{-- <div role="tabpanel" class="tab-pane" id="likes">  --}}
                                {{-- @foreach (Auth::user()->likes as $like)
                                    @if ($likes->like)
                                @endforeach --}}
                            {{-- </div> --}}
                            <!-- <div role="tabpanel" class="tab-pane" id="messages">...</div>
                            <div role="tabpanel" class="tab-pane" id="settings">...</div> -->
                          </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
