<h1>{{ count($users) }} Kişi var</h1>

@foreach($users as $u)
@if($u=='Mehmet')
<h3>{{$u}} Harika bir yazılımcı</h3>
@elseif($u=='Ahmet')
<h3>{{$u}} Müthiş bir çiftçi</h3>
@elseif($u=='Ali')
<h3>{{$u}} Ata bakıyor</h3>
@elseif($u=='Emel')
<h3>{{$u}} Eve geliyor</h3>
@else
<h3>Tanımıyorum</h3>
@endif
@endforeach

@for($i=0; $i<10; $i++)
<h4>{{$i}}</h4>
@endfor

@foreach($users as $us)
<h1>{{ $us }}</h1>
@endforeach