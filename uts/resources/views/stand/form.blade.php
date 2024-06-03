@extends('layouts.master')
@section('title','Form Stand')
@section('heading','Form Stand')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/stand/store/">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Stand</label>
                    <input type="text" name="kd_stand" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Stand</label>
                    <input type="text" name="stand" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telepon</label>
                    <input type="text" name="telp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>