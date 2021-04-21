<h3>
    @if($res > 0)
        Результат додатній
    @elseif($res < 0)
        Результат від'ємний
    @else
        Результат нуль
    @endif
</h3>
<h4>Числа між ними:</h4>
@foreach($arr as $num)
    <h5>{{$num}}</h5>
@endforeach
