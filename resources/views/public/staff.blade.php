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

                                    <p class="card-text">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leoquam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus.</p>

                                    <div class="team__social">
                                        <a href="" class="zmdi zmdi-facebook"></a>
                                        <a href="" class="zmdi zmdi-twitter"></a>
                                        <a href="" class="zmdi zmdi-google"></a>
                                    </div>
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

                                    <p class="card-text">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet.</p>

                                    <div class="team__social">
                                        <a href="" class="zmdi zmdi-facebook"></a>
                                        <a href="" class="zmdi zmdi-google"></a>
                                    </div>
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

                                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue.</p>

                                    <div class="team__social">
                                        <a href="" class="zmdi zmdi-facebook"></a>
                                        <a href="" class="zmdi zmdi-twitter"></a>
                                    </div>
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

                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus.</p>

                                    <div class="team__social">
                                        <a href="" class="zmdi zmdi-facebook"></a>
                                        <a href="" class="zmdi zmdi-twitter"></a>
                                        <a href="" class="zmdi zmdi-google"></a>
                                    </div>
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

                                    <p class="card-text">Commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet.</p>

                                    <div class="team__social">
                                        <a href="" class="zmdi zmdi-twitter"></a>
                                        <a href="" class="zmdi zmdi-google"></a>
                                    </div>
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

                                    <p class="card-text">Sed posuere consectetur est at lobortis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare veleuleo.</p>

                                    <div class="team__social">
                                        <a href="" class="zmdi zmdi-facebook"></a>
                                        <a href="" class="zmdi zmdi-twitter"></a>
                                        <a href="" class="zmdi zmdi-google"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
@endsection