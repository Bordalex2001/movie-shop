@extends('main')

@section('content')
    <div class="container">
        <h1 class="mb-4">Add movie</h1>

        <!-- Показываем ошибки валидации -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('movie-store') }}" method="POST">
            @csrf <!-- Токен защиты -->

            <div class="mb-3">
                <label for="name" class="form-label">Movie name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>

            <div class="mb-3">
                <label for="director" class="form-label">Director</label>
                <input type="text" class="form-control" id="director" name="director" value="{{ old('director') }}">
            </div>

            <div class="mb-3">
                <label for="poster" class="form-label">Link to poster</label>
                <input type="url" class="form-control" id="poster" name="poster" value="{{ old('poster') }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}">
            </div>

            <button type="submit" class="btn btn-success">Add</button>
            <a href="{{ url('movie-list') }}" class="btn btn-secondary">Back to store</a>
        </form>
    </div>
@endsection
