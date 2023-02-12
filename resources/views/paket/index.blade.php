@extends('layouts.master')
@section('judul','Paket')
@section('content-header')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pilih Paket</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Paket</li>
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
        <a href="/paket/form" class="btn btn-primary">Tambah Data</a>

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
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode</th>
                <th scope="col">Nama Paket</th>
                <th scope="col">Harga Paket</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($paket as $item)
                <tr>
                    <th scope="row">{{$nomor++}}</th>
                    <td>{{$item->kode}}</td>
                    <td>{{$item->nm_paket}}</td>
                    <td>{{$item->harga_paket}}</td>
                    <td>
                        <a href="/paket/edit/{{$item->id}}" class="btn btn-sm btn-info">edit</a>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-default{{$item->id}}">hapus</button>
              
                <div class="modal fade" id="modal-default{{$item->id}}">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Peringatan!</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Yakin data paket{{$item->paket}} ingin dihapus?</p>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <form action="/paket/{{$item->id}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-primary">Hapus</button>
                        </form>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
            </td>
          </tr>
        @endforeach
              
            </tbody>
          </table>
      </div>
      <!-- /.card-body -->
      
    </div>
    <!-- /.card -->

  </section>
@endsection