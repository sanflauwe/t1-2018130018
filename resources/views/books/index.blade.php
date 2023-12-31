@extends('layouts.template')

@section('title', 'Book List')

@section('content')
    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>All Books</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success mt-4">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">#</th>
                    <td scope="col">ISBN</td>
                    <th scope="col">Judul</th>
                    <th scope="col">Halaman</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)
                    <tr>
                        <th scope="row">{{ $book->ISBN }}</th>
                        <td>
                            <a href="{{ route('show', $book) }}">
                                {{ $book->Judul }}
                            </a>
                        </td>
                        <td>{{ $book->Halaman }}</td>
                        <td>{{ $book->Kategori }}</td>
                        <td>{{ $book->Penerbit }}</td>
                        <td>{{ $book->created_at }}</td>
                        <td>{{ $book->updated_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No book found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {!! $books->links() !!}
        </div>

    </div>
@endsection
