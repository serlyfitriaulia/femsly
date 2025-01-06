@extends('layouts.admin')
@section('admin')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Film Aktor
                </div>
                <div class="card-body">
                    <form action="{{ url('film_aktor',[]) }}" method="POST">

                        @method('POST')
                        @csrf

                        <div class="form-group">
                            <label for="my-select">Nama Film</label>
                            <select id="my-select" class="form-control" name="film_id">
                                <option value="">Pilih Film</option>
                                @foreach ($list_film as $id => $a)
                                <option value="{{ $id }}" @selected($id==old('film_id'))>{{ $a }}
                                </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('film_id') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="my-select">Nama Aktor</label>
                            <select id="my-select" class="form-control" name="aktor_id">
                                <option value="">Pilih Aktor</option>
                                @foreach ($list_aktor as $id => $a)
                                <option value="{{ $id }}" @selected($id==old('aktor_id'))>{{ $a }}
                                </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('aktor_id') }}</span>

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