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
                        <label for="title" class="form-label">Title</label>
                        <input required value="{{$comic->title}}" name="title" type="text" class="form-control" id="title">
                    </div>
                    <div class="col-6">
                        <label for="thumb" class="form-label">Image url</label>
                        <input required value="{{$comic->thumb}}" name="thumb" type="text" class="form-control" id="thumb">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="type" class="form-label">Type</label>
                        <input required value="{{$comic->type}}"name="type" type="text" class="form-control" id="type">
                    </div>
                    <div class="col-6">
                        <label for="sale_date" class="form-label">Sale date</label>
                        <input required value="{{$comic->sale_date}}" name="sale_date" type="date" class="form-control" id="sale_date">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="writers" class="form-label">Writers</label>
                        <input required value="{{$comic->writers}}" name="writers" type="text" class="form-control" id="writers">
                    </div>
                    <div class="col-6">
                        <label for="artists" class="form-label">Artists</label>
                        <input required value="{{$comic->artists}}" name="artists" type="text" class="form-control" id="artists">
                    </div>
                </div>
                <div class="row mb-3 ">
                    <div class="col-6">
                        <label for="series" class="form-label text-center">Series</label>
                        <input name="series" value="{{$comic->series}}" required name="series" type="text"class="form-control"
                            id="series"></textarea>
                    </div>
                    <div class="col-6 ">
                        <label for="price" class="form-label text-center">Price</label>
                        <input name="price" value="{{$comic->price}}" required name="price" type="number" min="0.01" max="90000" step="0.01"
                            class="form-control" id="price"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="writers" class="form-label">Description</label>
                        <textarea name="description" required placeholder="A description for the comic" name="writers" type="text"
                            class="form-control" id="writers">{{$comic->description}}</textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-3 gap-3">
                    <button type="submit" class="btn btn-primary">Edit comic</button>
                    <button type="reset" class="btn btn-secondary">Reset form</button>


                </div>
            </form>
        </div>
        </div>

    </main>
@endsection