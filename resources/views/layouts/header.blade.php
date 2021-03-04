
@foreach($serieslists as $serieslist)

    <li><a href="{{url('/shop?search=')}}{{$serieslist->sname}}">{{$serieslist->sname}}系列</a></li>

@endforeach


