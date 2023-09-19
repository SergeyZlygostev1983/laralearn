<div>Каталог авто</div>
<hr>
<a href="/cars/create">Create car</a>
<hr>
<ul>
    @foreach ($cars as $car)
        <li>
            <a href="{{ route('cars.show', [ $car->id ]) }}">Авто №{{$car->id}}</a> - <i>{{$car->brand}}, {{$car->model}}</i>
        </li>
    @endforeach
</ul>