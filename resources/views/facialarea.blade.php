@extends('index')
@section('content')
@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
<h2>Facial Area</h2>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Paket</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Harga</th>
      <th>Aksi</th>
    </tr>
    @foreach($data_facialarea as $facialarea)
  </thead>
  <tbody>
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$facialarea->nama_paket}}</td>
      <td>{{$facialarea->deskripsi}}</td>
      <td>{{$facialarea->harga}}</td>
      <td>
      <a href="/facialarea/{{$facialarea->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
      <a href="/facialarea/{{$facialarea->id}}/delete" class="btn btn-danger btn-sm " onclick= "return confirm ('Yakin mau dihapus?')">Delete</a>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Data
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action= "/facialarea/store" method="POST"  >
            @csrf
            @method('POST')

            
        <div class="form-group">
          <label for="exampleInputtext1">Nama Paket</label>
          <input name="nama_paket" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Nama Paket">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Deskripsi</label>
          <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" placeholder="Deskripsi paket" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputtext1">Harga</label>
          <input name="harga" type="number" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Harga">
        </div>
            </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection