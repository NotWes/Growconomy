@extends('app.template')

@section('title', 'Staff')

@section('content')

<header class="content__title">
                        <h1>Meet Our Team</h1>
                    </header>

                    <div class="row team">
                        @foreach($ceo as $ceo)
                        <div class="col-md-6 col-lg-4">
                            <div class="card team__item">
                                <img src="{{ env('APP_URL') }}/avatars/default.jpg" class="team__img" alt="">

                                <div class="card-body">
                                    <h4 class="card-title">Jermaine S. Wilson</h4>
                                    <h6 class="card-subtitle">Chairman / Chief Executive Officer</h6>

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

                        <div class="col-md-6 col-lg-4">
                            <div class="card team__item">
                                <img src="{{ env('APP_URL') }}/avatars/default.jpg" class="team__img" alt="">

                                <div class="card-body">
                                    <h4 class="card-title">Kay C. Lowery</h4>
                                    <h6 class="card-subtitle">Group CEO / Executive Director</h6>

                                    <p class="card-text">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet.</p>

                                    <div class="team__social">
                                        <a href="" class="zmdi zmdi-facebook"></a>
                                        <a href="" class="zmdi zmdi-google"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card team__item">
                                <img src="{{ env('APP_URL') }}/avatars/default.jpg" class="team__img" alt="">

                                <div class="card-body">
                                    <h4 class="card-title">Linda R. Jarrett</h4>
                                    <h6 class="card-subtitle">Non-Executive Director</h6>

                                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue.</p>

                                    <div class="team__social">
                                        <a href="" class="zmdi zmdi-facebook"></a>
                                        <a href="" class="zmdi zmdi-twitter"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card team__item">
                                <img src="{{ env('APP_URL') }}/avatars/default.jpg" class="team__img" alt="">

                                <div class="card-body">
                                    <h4 class="card-title">Jan J. Larrison</h4>
                                    <h6 class="card-subtitle">Executive Director - Finance</h6>

                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus.</p>

                                    <div class="team__social">
                                        <a href="" class="zmdi zmdi-facebook"></a>
                                        <a href="" class="zmdi zmdi-twitter"></a>
                                        <a href="" class="zmdi zmdi-google"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card team__item">
                                <img src="{{ env('APP_URL') }}/avatars/default.jpg" class="team__img" alt="">

                                <div class="card-body">
                                    <h4 class="card-title">Kay C. Lowery</h4>
                                    <h6 class="card-subtitle">Chief Technology Officer</h6>

                                    <p class="card-text">Commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet.</p>

                                    <div class="team__social">
                                        <a href="" class="zmdi zmdi-twitter"></a>
                                        <a href="" class="zmdi zmdi-google"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card team__item">
                                <img src="{{ env('APP_URL') }}/avatars/default.jpg" class="team__img" alt="">

                                <div class="card-body">
                                    <h4 class="card-title">Bobbie D. Classen</h4>
                                    <h6 class="card-subtitle">Director - After Sales Services</h6>

                                    <p class="card-text">Sed posuere consectetur est at lobortis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare veleuleo.</p>

                                    <div class="team__social">
                                        <a href="" class="zmdi zmdi-facebook"></a>
                                        <a href="" class="zmdi zmdi-twitter"></a>
                                        <a href="" class="zmdi zmdi-google"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection