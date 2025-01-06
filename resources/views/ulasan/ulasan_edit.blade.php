@extends('layouts.admin')
@section('admin')
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
                            <label for="my-select">Pengguna</label>
                            <select id="my-select" class="form-control" name="user_id">
                                <option value="">Pilih User</option>
                                @foreach ($list_user as $id => $a)
                                <option value="{{ $id }}" @selected($id==$ulasan->user_id)>{{ $a }}
                                </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('user_id') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-select">Film</label>
                            <select id="my-select" class="form-control" name="film_id">
                                <option value="">Pilih Film</option>
                                @foreach ($list_film as $id => $a)
                                <option value="{{ $id }}" @selected($id==$ulasan->film_id)>{{ $a }}
                                </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('film_id') }}</span>

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