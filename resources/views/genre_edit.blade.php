@extends('layouts.sbadmin2')
@section('isinya')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Genre
                </div>
                <div class="card-body">
                    <form action="{{ url('genre',[]) }}" method="POST">

                        @method('POST')
                        @csrf

                        <div class="form-group">
                            <label for="my-input">Nama</label>
                            <input id="my-input" class="form-control" type="text" name="nama"
                                value="{{ old('nama') }}">
                                <span class="text-danger">{{ $errors->first('nama') }}</span>

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