@extends('layouts.navbar')

@section('content')

{{-- <div class="inner-content-tabbing-reservation my-3 py-3">
    <div class="content-reservation"> --}}

        
            

    @livewire('registrasi')
    @stack('scripts')

    <div id="card-error" class="mt-5 mx-4 card px-3 border-radius-8 mb-3 py-2">
        <div class="card-body">

            <h5 class="mb-3 text-left text-semibold">Kebijakan Privasi</h5>
            
            <div class="mb-3 d-flex align-items-center">

                <input type="checkbox" id="agreement" data-parsley-errors-container="#container-error-aggrement" data-parsley-class-handler="#card-error" data-parsley-error-message="Please Accept The Aggrement" class="me-3" style="cursor: pointer;" required="" data-parsley-multiple="agreement">

                <label for="agreement" style="cursor: pointer;">
                Dengan mengirimkan formulir ini, saya telah membaca secara seksama dan menyetujui 
                <a href="#" data-bs-toggle="modal" data-bs-target="#privacy-policy">Syarat dan Kententuan serta Kebijakan Privasi</a> yang berlaku.</label>
                
            </div>
            <div id="container-error-aggrement" class="mt-3"></div>
        </div>
    </div>

    <div class="flex-between w-100 mb-4 submit-reservation-xev">
        <div class="flex-end w-100 px-4 py-1">
            <button class="btn btn-primary flex-center py-1 px-4 border-radius-8" type="submit" id="submit-reservation" style="background-color: #008DB9; color: white; font-weight: bold; float: right;">Submit</button>
        </div>
    </div>
    
  </form>
    
<div class="modal fade" id="privacy-policy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Syarat &amp; Kententuan</h5>
                            </div>
            <div class="modal-body">

                        <p>Dengan mengirimkan formulir ini, saya telah membaca secara seksama dan menyetujui Syarat dan
                        Kententuan serta Kebijakan Privasi yang berlaku.</p>

                    <p><b>Harap diperhatikan: Informasi pribadi yang Anda berikan akan dikumpulkan, digunakan, dan
                            disimpan
                            pada halaman ini untuk memberikan pengalaman terbaik dalam mengakses situs TMMIN. Kami
                            menganggap
                            perlindungan atas data dan privasi Anda sebagai hal yang penting. Untuk itu, kami tidak
                            membagikan
                            informasi pribadi apapun kepada siapapun, kecuali sebagaimana yang telah dijelaskan dalam
                            Kebijakan
                            Privasi ini.</b></p>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="continue-aggrement">Lanjutkan</button>
            </div>
        </div>
    </div>
</div>
            </div>

@endsection