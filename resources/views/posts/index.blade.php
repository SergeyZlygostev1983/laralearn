<div>Список новостей</div>
<hr>
<a href="/posts/create">Create post</a>
<hr>
<ul>
    @foreach ($posts as $post)
        <li><a href="/posts/{{$post->id}}">Новость №{{$post->id}}</a> - <i>{{$post->title}}</i></li>
    @endforeach
</ul>