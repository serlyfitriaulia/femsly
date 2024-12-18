@extends('layouts.sbadmin2')
@section('isinya')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Ulasan
                </div>
                <div class="card-body">
                    <form action="{{ url('ulasan',[]) }}" method="POST">

                        @method('POST')
                        @csrf

                        <div class="form-group">
                            <label for="my-input">Id Pengguna</label>
                            <input id="my-input" class="form-control" type="text" name="id_pengguna"
                                value="{{ old('id_pengguna') }}">
                                <span class="text-danger">{{ $errors->first('id_pengguna') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Id Film</label>
                            <input id="my-input" class="form-control" type="text" name="id_film"
                                value="{{ old('id_film') }}">
                                <span class="text-danger">{{ $errors->first('id_film') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Rating</label>
                            <input id="my-input" class="form-control" type="text" name="rating"
                                value="{{ old('rating') }}">
                                <span class="text-danger">{{ $errors->first('rating') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-input">Komentar</label>
                            <input id="my-input" class="form-control" type="text" name="komentar"
                                value="{{ old('komentar') }}">
                                <span class="text-danger">{{ $errors->first('rating') }}</span>

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