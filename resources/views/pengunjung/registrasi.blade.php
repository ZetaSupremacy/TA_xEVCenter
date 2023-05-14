@extends('layouts.navbar')

@section('content')

<form action='{{ url('pengunjung')}}' method='post'>
    @csrf
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama" value="{{ Session::get('nama') }}" id="nama" placeholder="Ex : Budi Susanto">
    </div>
    <div class="mb-3">
        <label for="nohp" class="form-label">Nomer Handphone</label>
        <input type="text" class="form-control" name="nohp" value="{{ Session::get('nohp') }}" id="nohp" placeholder="Ex : +62852315497865">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" value="{{ Session::get('alamat') }}" id="alamat" placeholder="Ex : Sukabirus">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" value="{{ Session::get('email') }}" id="email" placeholder="Ex : Budi@gmail.com">
    </div>
    <div>
        <label for="lembaga" class="form-label">Pilih Lembaga</label>
        <select class="form-select" aria-label="Default select example" name="lembaga" value="{{ Session::get('lembaga') }}" id="lembaga">
            <option selected>Open this select menu</option>
            <option value="1">Internal</option>
            <option value="2">Pemerintah</option>
            <option value="3">Sekolah / Universitas</option>
            <option value="4">Masyarakat Umum</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="namalembaga" class="form-label">Nama Lembaga</label>
        <input type="text" class="form-control" name="namalembaga" value="{{ Session::get('namalembaga') }}" id="namalembaga" placeholder="Ex : Universitas Telkom">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection