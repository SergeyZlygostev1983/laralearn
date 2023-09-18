<ul>
    {{-- @dd($posts) --}}
    @foreach ($posts as $post)
        <li>Новость №{{$post['id']}}</li>
    @endforeach
</ul>