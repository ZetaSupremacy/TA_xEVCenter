@extends('layouts.navbar')

@section('content')

<form>
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" placeholder="Ex : Budi Susanto">
    </div>
    <div class="mb-3">
        <label for="nohp" class="form-label">Nomer Handphone</label>
        <input type="text" class="form-control" id="nohp" placeholder="Ex : +62852315497865">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" placeholder="Ex : Sukabirus">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Ex : Budi@gmail.com">
    </div>
    <div>
        <label for="select" class="form-label">Pilih Lembaga</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">Internal</option>
            <option value="2">Pemerintah</option>
            <option value="3">Sekolah / Universitas</option>
            <option value="4">Masyarakat Umum</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="namalb" class="form-label">Nama Lembaga</label>
        <input type="text" class="form-control" id="namalb" placeholder="Ex : Universitas Telkom">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection