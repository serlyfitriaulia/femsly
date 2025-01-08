@extends('layouts.admin')
@section('admin')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Daftar Tontonan
                </div>
                <div class="card-body">
                    <form action="{{ url('daftar_tontonan',[]) }}" method="POST">
                        @method('POST')
                        @csrf

                        <div class="form-group">
                            <label for="user_id">Pengguna</label>
                            <select id="user_id" class="form-control" name="user_id">
                                <option value="">Pilih Pengguna</option>
                                @foreach ($list_user as $id => $name)
                                    <option value="{{ $id }}" @selected($id == old('user_id'))>{{ $name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('user_id') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="film_id">Film</label>
                            <select id="film_id" class="form-control" name="film_id">
                                <option value="">Pilih Film</option>
                                @foreach ($list_film as $id => $judul)
                                    <option value="{{ $id }}" @selected($id == old('film_id'))>{{ $judul }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('film_id') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select id="status" class="form-control" name="status">
                                @foreach ($list_status as $status)
                                    <option value="{{ $status }}" @selected($status == old('status'))>{{ $status }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('status') }}</span>
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
