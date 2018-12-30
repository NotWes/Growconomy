@extends('app.template')

@section('title', 'History')

@section('content')

<div class="col-md-12">
    @if($item->daily === '1')
    <div style="text-align: center; font-size: 23px;" class="alert alert-info" role="alert">Daily Item</div>
    @endif

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
            <strong>Last edited by: <a href="{{env('APP_URL')}}/user/{{$item->lastedit}}">{{$item->lastedit}}</a></strong>
        </div>

        <!-- <div cslass="quick-stats__chart peity-bar">6,4,8,6,5,6,7,8,3,5,9</div> -->
        <!-- <img class="peity" style="height: 35px; margin-right: 5px;" src="https://vignette.wikia.nocookie.net/growtopia/images/8/8f/ItemSprites.png/revision/latest/window-crop/width/32/x-offset/96/y-offset/1408/window-width/32/window-height/32"> -->

                                    
    </div>





    

@if(Auth::check() && Auth::user()->permission >= 1)
<div class="card">
    <div class="card-body">
        <h3 style="font-size: 23px;">Edit {{$item->name }}</h3>  
        <form method="POST" action="{{ env('APP_URL') }}/history/{{$item->name}}/edit">
            @csrf
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Item Amount:</label>
                    <input name="amount" id="amount" type="text" class="form-control" value="{{$item->amount}}">
                    <i class="form-group__bar"></i>
                </div>
            </div>
            <p>for</p>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>World Lock(s):</label>
                    <input name="price" id="price" type="text" class="form-control" value="{{$item->price}}">
                    <i class="form-group__bar"></i>
                </div>
            </div>
        </div>


        
                <div class="form-group">
                    <label>Nullable?</label>
                    <select>
                        <option value="1">YES</option>
                        <option value="0">NO</option>
                    </select>
                    
                </div>
                <div class="form-group">
                    <label>Daily Item?</label>
                    <select>
                        <option value="1">YES</option>
                        <option value="0">NO</option>
                    </select>
                    
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            
        
</form>

    </div>
</div>
@endif



</div>

<script>


// Chart Data
var lineChartData = [
    {
        label: '2014',
        data: [[1,0], [2,30], [3,50], [4,100], [5,10], [6,90], [7,85]],
        color: '#fff'
    },
    {
        label: '2016',
        data: [[1,20], [2,90], [3,60], [4,40], [5,100], [6,25], [7,65]],
        color: 'rgba(255,255,255,0.5)'
    },
    {
        label: '2017',
        data: [[1,100], [2,20], [3,60], [4,90], [5,80], [6,10], [7,5]],
        color: 'rgba(255,255,255,0.15)'
    }
];

// Chart Options
var lineChartOptions = {
    series: {
        lines: {
            show: true,
            barWidth: 0.05,
            fill: 0
        }
    },
    shadowSize: 0.1,
    grid : {
        borderWidth: 1,
        borderColor: 'rgba(255,255,255,0.1)',
        show : true,
        hoverable : true,
        clickable : true
    },
    yaxis: {
        tickColor: 'rgba(255,255,255,0.1)',
        tickDecimals: 0,
        font: {
            lineHeight: 13,
            style: 'normal',
            color: 'rgba(255,255,255,0.75)',
            size: 11
        },
        shadowSize: 0
    },

    xaxis: {
        tickColor: 'rgba(255,255,255,0.1)',
        tickDecimals: 0,
        font: {
            lineHeight: 13,
            style: 'normal',
            color: 'rgba(255,255,255,0.75)',
            size: 11
        },
        shadowSize: 0
    },
    legend:{
        container: '.flot-chart-legends--line',
        backgroundOpacity: 0.5,
        noColumns: 0,
        lineWidth: 0,
        labelBoxBorderColor: 'rgba(255,255,255,0)'
    }
};

// Create chart
if ($('.flot-line')[0]) {
    $.plot($('.flot-line'), lineChartData, lineChartOptions);
}


	</script>




@endsection