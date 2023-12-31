@extends('layouts.template')

@section('title', 'Add New Book')

@section('content')
    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>Add New Book</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row my-5">
        <div class="col-12 px-5">
            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="ISBN" class="form-label">ISBN</label>
                    <input type="text" class="form-control" id="ISBN" name="ISBN" value="{{ old('ISBN') }}">
                </div>

                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="Judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="Judul" name="Judul" value="{{ old('Judul') }}">
                </div>

                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="Halaman" class="form-label">Halaman</label>
                    <input type="number" class="form-control" id="Halaman" name="Halaman" value="{{ old('Halaman') }}">
                </div>

                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="Kategori" class="form-label">Kategori</label>
                    <select class="form-select" id="Kategori" required>
                        <option value="uncategorized">Uncategorized</option>
                        <option value="sci-fi">Science Fiction</option>
                        <option value="novel">Novel</option>
                        <option value="history">History</option>
                        <option value="biography">Biography</option>
                        <option value="romance">Romance</option>
                        <option value="education">Education</option>
                        <option value="culinary">Culinary</option>
                        <option value="comic">Comic</option>
                    </select>
                </div>

                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="Penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="Penerbit" name="Penerbit" value="{{ old('Penerbit') }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
        </div>
    </div>
@endsection
