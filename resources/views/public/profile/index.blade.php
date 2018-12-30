@extends('app.template')

@section('title', 'Profile')

@section('content')
<header class="content__title">
                    

                        <div class="actions">
                        	@if(Auth::check() && Auth::user()->id == $user->id)
                            <a href="{{ env('APP_URL') }}/profile/edit"><button type="button" class="btn btn-dark">Edit My Profile</button></a>
                            @endif
                        </div>
                    </header>

                    <div class="card profile">
                        <div class="profile__img">
                            <img src="{{ env('APP_URL') }}/avatars/{{ $user->avatar }}" alt="">

                            
                        </div>

                        <div class="profile__info">
                        	<h4>{{ $user->name }} @if($user->isOnline())
                        	 <span class="badge badge-pill badge-success">Online</span>
                        	 @else
                        	 <span class="badge badge-pill badge-danger">Offline</span> 
                        	@endif</h4>
                        <strong>{{ $user->role }}</strong>


                            <ul style="margin-top: 10px;" class="icon-list">
                                @if($user->ign)
                                <li><strong>IGN:</strong> {{ $user->ign }}</li>
                                @endif
                                @if($user->growtopia_forums)
                                <li><strong>GT Forums:</strong> {{ $user->growtopia_forums }}</li>
                                @endif
                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-body__title mb-4">About {{ $user->name }}</h4>

                           	@if($user->bio)
                           	<p>{{ $user->bio }}</p>
                           	@else
                           	<p>This user has no bio</p>
                           	@endif
                            

                            <!-- <br> -->

                            <!-- <h4 class="card-body__title mb-4">Contact Information</h4>

                            <ul class="icon-list">
                                <li><i class="zmdi zmdi-phone"></i>308-360-8938</li>
                                <li><i class="zmdi zmdi-email"></i>robertbosborne@inbound.plus</li>
                                <li><i class="zmdi zmdi-facebook"></i>robertbosborne</li>
                                <li><i class="zmdi zmdi-twitter"></i>@robertbosborne</li>
                                <li><i class="zmdi zmdi-pin"></i>5470 Madison Street Severna Park, MD 21146</li>
                            </ul> -->
                        </div>
                    </div>
@endsection