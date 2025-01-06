@extends('layouts.admin')
@section('admin')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center font-weight-bold" style="background-color:#3D3D3D; color: white">
                    Edit Film
                </div>
                <div class="card-body">
                    <form action="{{ url('film/'.$film->id,[]) }}" method="POST" enctype="multipart/form-data">

                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="my-select">Genre</label>
                            <select id="my-select" class="form-control" name="genre_id">
                                <option value="">Pilih Genre</option>
                                @foreach ($list_genre as $id => $a)
                                <option value="{{ $id }}" @selected($id==$film->genre_id)>{{ $a }}
                                </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('genre_id') }}</span>
                        </div>


                        <div class="form-group">
                            <label for="my-input">Judul</label>
                            <input id="my-input" class="form-control" type="text" name="judul"
                                value="{{ $film->judul ?? old('judul') }}">
                                <span class="text-danger">{{ $errors->first('judul') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Deskripsi</label>
                            <input id="my-input" class="form-control" type="text" name="deskripsi"
                                value="{{ $film->deskripsi ?? old('deskripsi') }}">
                                <span class="text-danger">{{ $errors->first('deskripsi') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Tahun Rilis</label>
                            <input id="my-input" class="form-control" type="text" name="tahun_rilis"
                                value="{{ $film->tahun_rilis ?? old('tahun_rilis') }}">
                                <span class="text-danger">{{ $errors->first('tahun_rilis') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Rating</label>
                            <input id="my-input" class="form-control" type="text" name="rating"
                                value="{{ $film->rating ?? old('rating') }}">
                                <span class="text-danger">{{ $errors->first('rating') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Poster Url</label>
                            <input id="my-input" class="form-control" type="file" name="poster_url"
                                value="{{ $film->poster_url ?? old('poster_url') }}">
                                <span class="text-danger">{{ $errors->first('poster_url') }}</span>

                        </div>

                </div>
                <div class="card-footer" style="background-color:#3D3D3D">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>
</div>
@endsection