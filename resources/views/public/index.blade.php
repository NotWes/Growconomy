@extends('app.template')

@section('title', 'Welcome')

@section('content')

                    

                    <div style="background-color: rgba(16, 111, 234, 0.5);" class="card widget-signups">
                        <div class="card-body">
                            <h4  class="card-title" style="text-align: center;">Daily Quest</h4>
                        </div>
                    </div>

                    <div class="row quick-stats">
                        @foreach($daily as $daily)
                            <div class="col-sm-12 col-md-12">
                                <div class="quick-stats__item">
                                    <div class="quick-stats__info">
                                        <h2>{{$daily->name}}</h2>
                                        <strong style="color: #FFD700;">
                                            @if($daily->amount === '1')
                                                {{$daily->price}} WL(s)
                                            @elseif($daily->price === '0')
                                                No Price Availible
                                            @else
                                                {{$daily->amount}} for {{$daily->price}} WL(s)
                                            @endif
                                        </strong>
                                    </div>

                                    <!-- <div class="quick-stats__chart peity-bar">6,4,8,6,5,6,7,8,3,5,9</div> -->
                                    <img class="peity" style="height: 35px; margin-right: 5px;" src="">

                                    <div class="actions actions--inverse">
                                    <div class="actions__item">
                                        <i data-toggle="dropdown" class="zmdi zmdi-more-vert" aria-expanded="false"></i>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(35px, 26px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <!-- <a href="" class="dropdown-item">Report</a>
                                            <a href="" class="dropdown-item">Wiki</a> -->
                                            <a href="{{ env('APP_URL') }}/history/{{$daily->name}}" class="dropdown-item">History</a>
                                            <!-- <a href="" class="dropdown-item">Market</a> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        @endforeach
                    

                        <!-- <div class="col-sm-6 col-md-3">
                            <div class="quick-stats__item">
                                <div class="quick-stats__info">
                                    <h2>356,785K</h2>
                                    <small>Total Website Clicks</small>
                                </div>

                                <div class="quick-stats__chart peity-bar">4,7,6,2,5,3,8,6,6,4,8</div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="quick-stats__item">
                                <div class="quick-stats__info">
                                    <h2>$58,778</h2>
                                    <small>Total Sales Orders</small>
                                </div>

                                <div class="quick-stats__chart peity-bar">9,4,6,5,6,4,5,7,9,3,6</div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="quick-stats__item">
                                <div class="quick-stats__info">
                                    <h2>214</h2>
                                    <small>Total Support Tickets</small>
                                </div>

                                <div class="quick-stats__chart peity-bar">5,6,3,9,7,5,4,6,5,6,4</div>
                            </div>
                        </div> -->
                    </div>

                    <div style="background-color: rgba(100, 12, 210, 0.5);" class="card widget-signups">
                        <div class="card-body">
                            <h4  class="card-title" style="text-align: center;">Popular Items</h4>
                        </div>
                    </div>

                    <div class="row quick-stats">
                    @foreach($items as $item)
                        <div class="col-sm-12 col-md-12">
                                <div class="quick-stats__item">
                                    <div class="quick-stats__info">
                                        <h2>{{$item->name}}</h2>
                                        <strong style="color: #FFD700;">
                                            @if($item->amount === '1')
                                                {{$item->price}} WL(s)
                                            @elseif($item->price === '0')
                                                No Price Availible
                                            @else
                                                {{$item->amount}} for {{$item->price}} WL(s)
                                            @endif
                                        </strong><br>
                                    </div>

                                    <!-- <div class="quick-stats__chart peity-bar">6,4,8,6,5,6,7,8,3,5,9</div> -->
                                    <img class="peity" style="height: 35px; margin-right: 5px;" src="">

                                    <div class="actions actions--inverse">
                                    <div class="actions__item">
                                        <i data-toggle="dropdown" class="zmdi zmdi-more-vert" aria-expanded="false"></i>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(35px, 26px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <!-- <a href="" class="dropdown-item">Report</a>
                                            <a href="" class="dropdown-item">Wiki</a> -->
                                            <a href="{{ env('APP_URL') }}/history/{{$item->name}}" class="dropdown-item">History</a>
                                            <!-- <a href="" class="dropdown-item">Market</a> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                    @endforeach
                    </div>
                    
@endsection