@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Film
                </div>
                <div class="card-body">
                    <form action="{{ url('film',[]) }}" method="POST" enctype="multipart/form-data">

                        @method('POST')
                        @csrf

                        <div class="form-group">
                            <label for="my-input">Genre </label>
                            <input id="my-input" class="form-control" type="text" name="genre"
                                value="{{ old('genre') }}">
                                <span class="text-danger">{{ $errors->first('genre') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Judul</label>
                            <input id="my-input" class="form-control" type="text" name="judul"
                                value="{{ old('judul') }}">
                                <span class="text-danger">{{ $errors->first('judul') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Deskripsi</label>
                            <input id="my-input" class="form-control" type="text" name="deskripsi"
                                value="{{ old('deskripsi') }}">
                                <span class="text-danger">{{ $errors->first('deskripsi') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Tahun Rilis</label>
                            <input id="my-input" class="form-control" type="text" name="tahun_rilis"
                                value="{{ old('tahun_rilis') }}">
                                <span class="text-danger">{{ $errors->first('tahun_rilis') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Rating</label>
                            <input id="my-input" class="form-control" type="text" name="rating"
                                value="{{ old('rating') }}">
                                <span class="text-danger">{{ $errors->first('rating') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Poster Url</label>
                            <input id="my-input" class="form-control" type="file" name="poster_url"
                                value="{{ old('poster_url') }}">
                                <span class="text-danger">{{ $errors->first('poster_url') }}</span>

                        </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>
</div>
@endsection