@extends('layouts.master')
@section('title','Edit Stand')
@section('heading','Edit')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/stand/{{$std->id}}">
                @method('PUT')
                @csrf

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">kode Stand</label>
                    <input type="text" name="kd_stand" value="{{$std->kd_stand}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Stand</label>
                    <input type="text" name="stand" value="{{$std->stand}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telepon</label>
                    <input type="text" name="telp" value="{{$std->telp}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection