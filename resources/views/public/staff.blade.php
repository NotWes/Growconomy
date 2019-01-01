@extends('app.template')

@section('title', 'Staff')

@section('content')

<header class="content__title">
                        <h1>Meet Our Team</h1>
                    </header>

                    <div class="row team">
                        @foreach($owner as $owner)
                        <div class="col-md-6 col-lg-4">
                            <div class="card team__item">
                                <img src="{{ env('APP_URL') }}/avatars/{{ $owner->avatar }}" class="team__img" alt="">

                                <div class="card-body">
                                    <h4 class="card-title">{{ $owner->name }}</h4>
                                    <h6 class="card-subtitle">Owner</h6>

                                    <p class="card-text">"{{ $owner->quote }}"</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @foreach($admin as $admin)
                        <div class="col-md-6 col-lg-4">
                            <div class="card team__item">
                                <img src="{{ env('APP_URL') }}/avatars/{{ $admin->avatar }}" class="team__img" alt="">

                                <div class="card-body">
                                    <h4 class="card-title">{{ $admin->name }}</h4>
                                    <h6 class="card-subtitle">Administrator</h6>

                                    <p class="card-text">"{{ $admin->quote }}"</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @foreach($manager as $manager)
                        <div class="col-md-6 col-lg-4">
                            <div class="card team__item">
                                <img src="{{ env('APP_URL') }}/avatars/{{ $manager->avatar }}" class="team__img" alt="">

                                <div class="card-body">
                                    <h4 class="card-title">{{ $manager->name }}</h4>
                                    <h6 class="card-subtitle">Manager</h6>

                                    <p class="card-text">"{{ $manager->quote }}"</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @foreach($seditor as $seditor)
                        <div class="col-md-6 col-lg-4">
                            <div class="card team__item">
                                <img src="{{ env('APP_URL') }}/avatars/{{ $seditor->avatar }}" class="team__img" alt="">

                                <div class="card-body">
                                    <h4 class="card-title">{{ $seditor->name }}</h4>
                                    <h6 class="card-subtitle">Senior Editor</h6>

                                    <p class="card-text">"{{ $seditor->quote }}"</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @foreach($editor as $editor)
                        <div class="col-md-6 col-lg-4">
                            <div class="card team__item">
                                <img src="{{ env('APP_URL') }}/avatars/{{ $editor->avatar }}" class="team__img" alt="">

                                <div class="card-body">
                                    <h4 class="card-title">{{ $editor->name }}</h4>
                                    <h6 class="card-subtitle">Editor</h6>

                                    <p class="card-text">"{{ $editor->quote }}"</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @foreach($intern as $intern)
                        <div class="col-md-6 col-lg-4">
                            <div class="card team__item">
                                <img src="{{ env('APP_URL') }}/avatars/{{ $intern->avatar }}" class="team__img" alt="">

                                <div class="card-body">
                                    <h4 class="card-title">{{ $intern->name }}</h4>
                                    <h6 class="card-subtitle">Intern</h6>

                                    <p class="card-text">"{{ $intern->quote }}"</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
@endsection