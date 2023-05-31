@extends('layouts.default')
@section('title')
    Edit Comic
@endsection

@section('content')
    <main>
        <div class="jumbotron"></div>

        <div class="admin">
            <div class="container d-flex justify-content-center mb-3">
                <div class="title p-4">
                    <h1>Edit comic</h1>
                </div>
            </div>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <div class="col-6">
                        <label for="title" class="form-label @error('title') text-danger @enderror">Title</label>
                        <input required minlength="3" maxlength="255" value="{{ $comic->title }}" name="title"
                            type="text" class="form-control @error('title') is-invalid @enderror" id="title">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="thumb" class="form-label @error('thumb') text-danger @enderror">Image url</label>
                        <input class="form-control @error('thumb') is-invalid @enderror" required
                            value="{{ $comic->thumb }}" name="thumb" type="url" placeholder="https://example.com"
                            pattern="https://.*">
                        <div class="form-text @error('thumb') text-danger @enderror">An url start with https://</div>
                        @error('thumb')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="type" class="form-label @error('type') text-danger @enderror">Type</label>
                        <input required value="{{ $comic->type }}" name="type" type="text"
                            class="form-control @error('type') is-invalid @enderror" id="type">
                        @error('type')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="sale_date" class="form-label @error('sale_date') text-danger @enderror">Sale
                            date</label>
                        <input required value="{{ $comic->sale_date }}" name="sale_date" type="date"
                            class="form-control @error('sale_date') is-invalid @enderror" id="sale_date">
                        @error('sale_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="writers" class="form-label @error('writers') text-danger @enderror">Writers</label>
                        <input required value="{{ $comic->writers }}" name="writers" type="text"
                            class="form-control @error('writers') is-invalid @enderror" id="writers">
                        @error('writers')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="artists" class="form-label @error('writers') text-danger @enderror">Artists</label>
                        <input required value="{{ $comic->artists }}" name="artists" type="text"
                            class="form-control @error('artists') is-invalid @enderror" id="artists">
                        @error('artists')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3 ">
                    <div class="col-6">
                        <label for="series" class="form-label @error('series') text-danger @enderror">Series</label>
                        <input value="{{ $comic->series }}" required name="series"
                            type="text"class="form-control @error('series') is-invalid @enderror" id="series">
                        @error('series')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6 ">
                        <label for="price" class="form-label @error('price') text-danger @enderror">Price</label>
                        <input name="price" value="{{ $comic->price }}" required type="number" min="0.01"
                            max="90000" step="0.01" class="form-control @error('price') is-invalid @enderror"
                            id="price">
                        <div class="form-text @error('price') text-danger @enderror">Enter a number with two decimals</div>
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="description"
                            class="form-label @error('description') text-danger @enderror">Description</label>
                        <textarea name="description" required placeholder="A description for the comic" type="text"
                            class="form-control @error('description') is-invalid @enderror">{{ $comic->description }}</textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-3 gap-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-secondary">Reset form</button>


                </div>
            </form>
        </div>

    </main>
@endsection
