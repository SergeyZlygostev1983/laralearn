<h2>Авто №{{$car->id}}</h2>
<div>{{$car->brand}}</div>
<div>{{$car->model}}</div>
<div>{{$car->price}}</div>
<br>
<div><a href="/cars/{{$car->id}}/edit">Редактировать</a></div>
<div><a href="{{ route('cars.delete', [ $car->id ]) }}">Удалить</a></div>