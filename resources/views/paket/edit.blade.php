@extends('layouts.master')
@section('judul','Edit Data Paket')
@section('content-header')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Data Paket</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Data Paket</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
@endsection

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>

      <div class="card-body">
        <form method="POST" action="/paket/{{$paket->id}}">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kode</label>
              <input type="text" name="kode" value="{{$paket->kode}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"> Nama Paket</label>
              <input type="text" name="nm_paket" value="{{$paket->nm_paket}}" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Harga</label>
              <input type="text" name="harga" value="{{$paket->harga}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Edit Data</button>
          </form>
      </div>
      <!-- /.card-body -->

    </div>
    <!-- /.card -->

  </section>
@endsection