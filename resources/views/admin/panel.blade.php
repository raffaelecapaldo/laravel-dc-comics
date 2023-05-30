@extends('layouts.default')
@section('title')
    Admin panel
@endsection

@section('content')
    <main>
        <div class="jumbotron"></div>

        <div class="admin">
            <div class="container d-flex justify-content-center mb-3">
                <div class="title p-4">
                    <h1>Welcome to the Admin Panel</h1>
                </div>

            </div>
        </div>

        <div class="container d-flex flex-column">
            <div class="comics-list-title d-flex justify-content-center gap-3">
                <h3>Comics list management</h3>
                <a href="{{ route('comics.create') }}"><button type="button" class="btn btn-primary">Add comic</button></a>
            </div>



        </div>
        <div class="container">
            @if (session('message'))
            <div class="alert alert-success text-center">
                {{ session('message') }}
            </div>
        @endif
            <div class="table-responsive">
                <table class="table table-bordered table-hover border-secondary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Thumb</th>
                            <th scope="col">Price</th>
                            <th scope="col">Series</th>
                            <th scope="col">Sale date</th>
                            <th scope="col">Type</th>
                            <th scope="col">Artists</th>
                            <th scope="col">Writers</th>
                            <th scope="col">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>
                                <th scope="row">{{ $comic->id }}</th>
                                <td>{{ $comic->title }}</td>
                                <td>{{ substr($comic->description, 0, 150) }}
                                    @if (strlen($comic->description) > 150)
                                        &hellip;
                                    @endif
                                </td>
                                <td><img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></td>
                                <td>{{ $comic->price }}$</td>
                                <td>{{ $comic->series }}</td>
                                <td style="white-space:nowrap">{{ $comic->sale_date }}</td>
                                <td>{{ $comic->type }}</td>
                                <td>{{ $comic->artists }}</td>
                                <td>{{ $comic->writers }}</td>
                                <td><a href="{{ route('comics.edit', $comic->id) }}"><button type="button"
                                            class="btn btn-warning mb-2">Edit comic</button></a>
                                    <form method="POST" action="{{ route('comics.destroy', $comic->id) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete comic</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                </table>
            </div>
        </div>
    </main>
@endsection
