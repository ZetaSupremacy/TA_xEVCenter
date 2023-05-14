@extends('layouts.navbar')

<div class="containerform border p-3 mb-5 bg-body rounded">
        <center><a style=" font-size: medium; font-weight:bold;"> LOGIN</a></center>
          <hr>
          
        <form action="/test" method="POST">
          @csrf
            <div class="m-4">
              <label for="name" class="form-label">name</label>
              <input type="name" class="form-control" id="name" placeholder="Masukan Alamat E-Mail" name = "name" required autofocus value={{ old('name') }}>
            </div>
            
            <div class="m-4 ">
              <label for="password" class="form-label">Kata Sandi</label>
              <input type="password" class="form-control" id="password" placeholder="Kata Sandi Anda" name = "password">
            </div>
            <center><button type="submit" class="btn btn-primary d-grid gap-2 col-5 mx-auto mb-3 rounded-pill" name = "login">Sign In</button></center>
          </form>
            </div>