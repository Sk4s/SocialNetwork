@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <!-- USERNAME -->
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">*Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- FIRSTNAME -->
                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">*Firstname</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- LASTNAME -->
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">*Lastname</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- ADRESS -->
                        <div class="form-group{{ $errors->has('adress') ? ' has-error' : '' }}">
                            <label for="adress" class="col-md-4 control-label">*Adress</label>

                            <div class="col-md-6">
                                <input id="adress" type="text" class="form-control" name="adress" value="{{ old('adress') }}" required>

                                @if ($errors->has('adress'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- POSTAL CODE -->
                        <div class="form-group{{ $errors->has('postal_code') ? ' has-error' : '' }}">
                            <label for="postal_code" class="col-md-4 control-label">*Postal Code</label>

                            <div class="col-md-6">
                                <input id="postal_code" type="text" class="form-control" name="postal_code" value="{{ old('postal_code') }}" required>

                                @if ($errors->has('postal_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('postal_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- CITY -->
                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">*City</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" required>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- EMAIL -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">*E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- MOBILE -->
                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="mobile" class="col-md-4 control-label">*Mobile</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" required>

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- PHONE -->
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- LINKEDIN -->
                        <div class="form-group{{ $errors->has('linkedin') ? ' has-error' : '' }}">
                            <label for="linkedin" class="col-md-4 control-label">Linkedin</label>

                            <div class="col-md-6">
                                <input id="linkedin" type="text" class="form-control" name="linkedin" value="{{ old('linkedin') }}">

                                @if ($errors->has('linkedin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('linkedin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- GITHUB -->
                        <div class="form-group{{ $errors->has('github') ? ' has-error' : '' }}">
                            <label for="github" class="col-md-4 control-label">Github</label>

                            <div class="col-md-6">
                                <input id="github" type="text" class="form-control" name="github" value="{{ old('github') }}">

                                @if ($errors->has('github'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('github') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- WEBSITE -->
                        <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                            <label for="website" class="col-md-4 control-label">Website</label>

                            <div class="col-md-6">
                                <input id="website" type="text" class="form-control" name="website" value="{{ old('website') }}">

                                @if ($errors->has('website'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- ILANGUAGE -->
                        <div class="form-group{{ $errors->has('ilanguage') ? ' has-error' : '' }}">
                            <label for="ilanguage" class="col-md-4 control-label">I-Language</label>

                            <div class="col-md-6">
                                <input id="ilanguage" type="text" class="form-control" name="ilanguage" value="{{ old('ilanguage') }}">

                                @if ($errors->has('ilanguage'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ilanguage') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- LANGUAGE -->
                        <div class="form-group{{ $errors->has('language') ? ' has-error' : '' }}">
                            <label for="language" class="col-md-4 control-label">Language</label>

                            <div class="col-md-6">
                                <input id="language" type="text" class="form-control" name="language" value="{{ old('language') }}">

                                @if ($errors->has('language'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('language') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- TOOL -->
                        <div class="form-group{{ $errors->has('tool') ? ' has-error' : '' }}">
                            <label for="tool" class="col-md-4 control-label">Tool</label>

                            <div class="col-md-6">
                                <input id="tool" type="text" class="form-control" name="tool" value="{{ old('tool') }}">

                                @if ($errors->has('tool'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tool') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- KNOW HOW -->
                        <div class="form-group{{ $errors->has('know_how') ? ' has-error' : '' }}">
                            <label for="know_how" class="col-md-4 control-label">Know-How</label>

                            <div class="col-md-6">
                                <input id="know_how" type="text" class="form-control" name="know_how" value="{{ old('know_how') }}">

                                @if ($errors->has('know_how'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('know_how') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- EXPERTISE -->
                        <div class="form-group{{ $errors->has('expertise') ? ' has-error' : '' }}">
                            <label for="expertise" class="col-md-4 control-label">Expertise</label>

                            <div class="col-md-6">
                                <input id="expertise" type="text" class="form-control" name="expertise" value="{{ old('expertise') }}">

                                @if ($errors->has('expertise'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('expertise') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- BIO -->
                        <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
                            <label for="bio" class="col-md-4 control-label">Bio</label>

                            <div class="col-md-6">
                                <textarea id="bio" type="text" class="form-control" name="bio" value="{{ old('bio') }}"></textarea>
                            </div>

                            @if ($errors->has('bio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bio') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <!-- PROFILE PICTURE -->
                        <!-- <div class="form-group{{ $errors->has('profile_picture') ? ' has-error' : '' }}">
                            <label for="profile_picture" class="col-md-4 control-label">Profile Picture</label>
                            <input type="file" class="form-control" name="profile_picture">

                            @if ($errors->has('profile_picture'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profile_picture') }}</strong>
                                    </span>
                                @endif
                        </div> -->

                        <!-- AVATAR -->
                        <!-- <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                            <label for="avatar" class="col-md-4 control-label">Profile Picture</label>
                            <input type="file" class="form-control" name="avatar">

                            @if ($errors->has('avatar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
                        </div> -->

                        <!-- DISPLAY PROFILE PICTURE -->
                        <!-- <div>
                           
                        </div> -->

                        <!-- CV -->
                        <!-- <div class="form-group{{ $errors->has('cv') ? ' has-error' : '' }}">
                            <label for="cv" class="col-md-4 control-label">Cv</label>
                            <input type="file" class="form-control" name="cv">

                            @if ($errors->has('cv'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cv') }}</strong>
                                    </span>
                                @endif
                        </div> -->

                        <!-- PASSWORD -->
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">*Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- CONFIRM PASSWORD -->
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">*Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                                <!-- <button class="btn btn-primary" > <a href="/register">Reset</a></button> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
