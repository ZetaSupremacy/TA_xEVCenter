@extends('layouts.navbar')

@section('content')

{{-- <div class="inner-content-tabbing-reservation my-3 py-3">
    <div class="content-reservation"> --}}


<form action='{{ url('pengunjung')}}' method='post'>
    @csrf
    <input type="hidden" name="_token" value="0IJziL5EHfppnXoJtecvK7ecPEVLX15kKG7FHQ68">
    <div class="box-reservation-xev my-3 py-5">

        <h2 class="mx-5 mb-4 d-block">Detail Reservasi</h2>

        <div class="card border-radius-8 p-5 mx-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="custom-form-date">
                                <label for="arrival-date" class="form-label text-semibold">Tanggal Kedatangan</label>
                                    <input readonly="readonly" placeholder="DD/MM/YYYY" name="arrival_date" value="" required="required" type="text" class="form-control " id="arrival-date">      
                            </div>
                        </div>
                    </div>                     
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="">
                                <label for="group-name" class="form-label text-semibold">Nama Group</label>
                                    <input name="group_name" placeholder="Group Name" data-parsley-pattern="[a-zA-Z0-9.,-_()\.\,\-\(\)\_\/\s]*" data-parsley-error-message="Format Is Invalid" required="required" type="text" class="form-control " id="group-name">                                  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="">
                                <label for="booking-person-name" class="form-label text-semibold">Nama Pemesan</label>
                                     <input name="booking_person_name" placeholder="Booking Person Name" data-parsley-pattern="[a-zA-Z0-9.,-_()\.\,\-\(\)\_\/\s]*" data-parsley-error-message="Format Is Invalid" required="required" type="text" class="form-control " id="booking-person-name">          
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="">
                                <label for="Email" class="form-label text-semibold">Email</label>
                                    <input name="email" placeholder="email" required="required" type="email" class="form-control " id="Email">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="">
                                <label for="phone-number" class="form-label text-semibold">Nomor Telepon</label>
                                            <input name="phone_number[]" data-parsley-pattern="[0-9\s\-\+\(\)]*" placeholder="+62 081XXXXXXXX" min="1" minlength="10" maxlength="13" required="required" type="text" class="form-control " id="phone-number">
                                
                            </div>
                        </div>
                    </div>                   
                    <div class="col-md-8">
                        <div class="mb-3">
                            <div class="">
                                <label for="address-person" class="form-label text-semibold">Alamat</label>
                                    <input name="address" data-parsley-pattern="[a-zA-Z0-9.,-_()\.\,\s]*" data-parsley-error-message="Format Is Invalid" placeholder="Address" required="required" type="text" class="form-control " id="address-person">                         
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-3">
                        <div class="custom-form-session">
                            <label for="session" class="form-label text-semibold">Pilih Sesi</label>
                            <select name="select_session" class="form-select select-session" id="session" required="">
                                <option value="">Choose Session</option>                                                                           
                                    <option value="1">
                                        Session 1 ( 09.00 AM - 11.00 AM )
                                    </option>
                                    <option value="2">
                                        Session 2 ( 01.00 PM - 03.00 PM )
                                    </option>                                                
                            </select>
                        </div>                       
                    </div>                        
                    <div class="col-md-4 mb-3">
                        <div class="flex-between w-100">
                            <label for="total-visitor" class="form-label text-semibold">Jumlah Pengunjung</label>
                            <div class="quota-checking">
                            </div>
                        </div>
                        <select class="form-select total-visitor" name="total_visitor" id="total-visitor" disabled="" required="">
                            <option value="" readonly="">Number Of Visitor</option>
                        </select>
                    </div>                       
                </div>
            </div>
        </div>
    </div>       
    
    
    <hr class="mx-4">


    @livewire('registrasi')
    
    {{-- <div class="col-md-12 my-4 mx-4">
        <div id="card-error" class="card border-radius-8 p-5 section-license">
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
    </div> --}}
    {{-- <div class="flex-between w-100 mb-4 submit-reservation-xev">
        <div class="flex-end w-100 px-4 py-1">
            <button class="btn btn-primary flex-center py-1 px-4 border-radius-8" type="submit" id="submit-reservation" style="background-color: #008DB9; color: white; font-weight: bold; float: right;">Submit</button>
        </div>
    </div>
  </form>
</div> --}}

{{-- <div class="modal fade" id="privacy-policy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


 --}}

            {{-- </div> --}}

@endsection