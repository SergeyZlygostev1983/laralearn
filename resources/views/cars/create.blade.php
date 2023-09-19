<h2>Create car</h2>

<form action="/cars" method="POST">
    @csrf

    <div>Brand: <input type="text" name="brand" class="@error('brand') is-invalid @enderror" value="{{ old('brand') }}"></div>
    @error('brand')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div>Model: <input type="text" name="model" class="@error('model') is-invalid @enderror" value="{{ old('model') }}"></div>
    @error('model')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div>Price: <input type="number" name="price" class="@error('price') is-invalid @enderror" value="{{ old('price') }}"></div>
    @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <br>
    <button>Send</button>
</form>