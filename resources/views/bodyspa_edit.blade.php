@extends('index')
@section('content')
<h2>Edit bodyspa</h2>
<table class="table">
  <form action= "/bodyspa/{{$bodyspa->id}}/update" method="POST"  >
            @csrf
            @method('POST')
        <div class="form-group">
          <label for="exampleInputtext1">Nama Paket</label>
          <input name="nama_paket" value="{{$bodyspa->nama_paket}}" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Nama Paket">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Deskripsi</label>
          <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" placeholder="Deskripsi paket" rows="3">{{$bodyspa->deskripsi}}</textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputtext1">Harga</label>
          <input name="harga" value="{{$bodyspa->harga}}" type="number" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Harga">
        </div>
        <input type="submit" class="btn btn-primary" value="Save">
        </form>
</table>
@endsection