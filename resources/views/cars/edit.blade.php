<h2>Change car</h2>

<form action="{{ route('cars.update', [ $car->id ]) }}" method="POST">
    @csrf
    @method('PUT')

    <div>Brand: <input type="text" name="brand" class="@error('brand') is-invalid @enderror" value="{{ $errors->any() ? old('brand') : $car->brand }}"></div>
    @error('brand')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div>Model: <input type="text" name="model" class="@error('model') is-invalid @enderror" value="{{ $errors->any() ? old('model') : $car->model }}"></div>
    @error('model')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div>Price: <input type="number" name="price" class="@error('price') is-invalid @enderror" value="{{ $errors->any() ? old('price') : $car->price }}"></div>
    @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <br>
    <button>Change</button>
</form>