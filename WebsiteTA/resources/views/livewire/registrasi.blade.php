<div>
    
<form action='{{ url('pengunjung')}}' method='post'>
    @csrf
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


<div class="visitor-list my-3 py-5" id="dynamic-visitor-list">
    <h2 class="mx-5 mb-4 d-block">Daftar Pengunjung</h2> 
    <div class="visitor-list-default">
        @for($i=0; $i < $pengunjung ; $i++)   
        <div class="card p-5 border-radius-8 mx-4 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="">
                                <label for="list-visitor-name{{ $i }}" class="form-label text-semibold">Daftar Nama Pengunjung</label>
                                        <input name="visitor_name[]" placeholder="List Visitor Name" data-parsley-pattern="[a-zA-Z0-9.,-_()\.\,\-\(\)\_\/\s]*" data-parsley-error-message="Format Is Invalid" required="required" type="text" class="form-control " id="list-visitor-name{{ $i }}">          
                            </div>
                        </div>
                    </div>
                        <div class="col-md-3 mb-3">
                            <label for="gender{{ $i }}" class="form-label text-semibold">Jenis Kelamin</label>
                            <select name="gender" class="form-select" id="gender{{ $i }}" required="">
                                <option value="">Pilih</option>
                                <option value="m"> Laki Laki </option>
                                <option value="f"> Perempuan </option>
                            </select>
                        </div>
                    <div class="col-md-1">
                        <div class="mb-3">
                            <label for="age{{ $i }}" class="form-label text-semibold">Usia</label>

                            <input type="number" name="age[]" data-parsley-error-message="Invalid!!" placeholder="age" min="1" minlength="1" maxlength="2" data-parsley-errors-container="#age-container" class="form-control" required="" id="age{{ $i }}">

                            <div id="age-container"></div>
                        </div>
                    </div>
                    

                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="">
                                <label for="job-title{{ $i }}" class="form-label text-semibold">Pekerjaan</label>
                                            <input name="job_title[]" placeholder="Job Title" data-parsley-pattern="[a-zA-Z0-9.,-_()\.\,\-\(\)\_\/\s]*" data-parsley-error-message="Format Is Invalid" required="required" type="text" class="form-control " id="job-title{{ $i }}">
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 mb-3">
                        <label for="institusi{{ $i }}" class="form-label text-semibold">Kategori Institusi</label>
                        <select name="institution_category[]" class="form-select" id="institusi{{ $i }}" required="">
                            <option value="">Pilih</option>
                            <option value="1"> Government </option>
                            <option value="2"> Association </option>
                            <option value="3"> University </option>
                            <option value="4"> SHS/Vocational </option>
                            <option value="5"> Internal </option>
                            <option value="6"> Supply Chain </option>
                            <option value="7"> Media </option>
                            <option value="8"> Key Opinion Leader </option>
                            <option value="9"> Public </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        @endfor

        <div class="flex-between w-100 mb-4 mt-3 add-visitor-xev">
            <div class="flex-end w-100 px-4 py-1">
                <a wire:click="switchroom" class="btn btn-primary mx-2" style="float: right; background-color: #04BD00; color: black;">
                    <i class="fa-solid fa-plus fa-lg px-2"></i>Add Visitor
                </a>
            </div>
        </div>

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
</div>