<h2>Create post</h2>

<form action="/posts" method="POST">
    @csrf

    <div>Title: <input type="text" name="title" class="@error('title') is-invalid @enderror" value="{{ old('title') }}"></div>
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div>Content: <textarea name="content" class="@error('content') is-invalid @enderror">{{ old('content') }}</textarea></div>
    @error('content')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button>Send</button>
</form>