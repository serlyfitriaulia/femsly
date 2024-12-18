@extends('layouts.sbadmin2')
@section('isinya')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Film
                </div>
                <div class="card-body">
                    <form action="{{ url('film',[]) }}" method="POST">

                        @method('POST')
                        @csrf

                        <div class="form-group">
                            <label for="my-input">Genre id</label>
                            <input id="my-input" class="form-control" type="text" name="genre_id"
                                value="{{ old('genre_id') }}">
                                <span class="text-danger">{{ $errors->first('genre_id') }}</span>

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
                            <input id="my-input" class="form-control" type="text" name="poster_url"
                                value="{{ old('poster_url') }}">
                                <span class="text-danger">{{ $errors->first('poster_url') }}</span>

                        </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>
</div>
@endsection