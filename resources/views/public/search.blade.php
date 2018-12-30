@extends('app.template')

@section('title', 'Search')

@section('content')

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