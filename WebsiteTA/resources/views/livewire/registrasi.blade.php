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

    
    
</div>