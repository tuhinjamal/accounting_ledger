<h1>sum of 50 + 5 = {{50+5}}</h1>

{{10+10}}
@if($users=="Mujtaba" || $users=="Ahmad" || $users=="Yusuf")
<h1>Assalamu Alikum Wa Rahmatullah {{$users}}</h1>
@else
<h1>Assalamu Alikum</h1>
@endif

@for($i=0;$i<10;$i++)
<h4>mawla yasalli wasallim daiman abadan{{$i}}</h4>
@endfor
