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
                                    <label for="arrival-date" class="form-label text-semibold">Arrival Date</label>
                                        <input wire:model="date" wire:ignore readonly="readonly" placeholder="DD/MM/YYYY" name="arrival_date" value="" required="required" type="text" class="form-control " id="arrival-date">      
                                </div>
                            </div>
                        </div>                     
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="">
                                    <label for="group-name" class="form-label text-semibold">Group Name</label>
                                        <input name="group_name" placeholder="Group Name" data-parsley-pattern="[a-zA-Z0-9.,-_()\.\,\-\(\)\_\/\s]*" data-parsley-error-message="Format Is Invalid" required="required" type="text" class="form-control " id="group-name">                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="">
                                    <label for="booking-person-name" class="form-label text-semibold">PIC Group Name</label>
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
                                    <label for="phone-number" class="form-label text-semibold">Phone Number</label>
                                                <input name="phone_number[]" data-parsley-pattern="[0-9\s\-\+\(\)]*" placeholder="+62 081XXXXXXXX" min="1" minlength="10" maxlength="13" required="required" type="text" class="form-control " id="phone-number">
                                    
                                </div>
                            </div>
                        </div>                   
                        <div class="col-md-8">
                            <div class="mb-3">
                                <div class="">
                                    <label for="address-person" class="form-label text-semibold">Address</label>
                                        <input name="address" data-parsley-pattern="[a-zA-Z0-9.,-_()\.\,\s]*" data-parsley-error-message="Format Is Invalid" placeholder="Address" required="required" type="text" class="form-control " id="address-person">                         
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <div class="custom-form-session">
                                <label for="session" class="form-label text-semibold">Choose Session</label>
                                <select wire:model="sessionselected" wire:ignore name="session" class="form-select select-session" id="session" required="" disabled>
                                    <option value="">Choose Session</option>
                                    @foreach($sessions as $session) 
                                    {
                                        <option value="{{ $session->id }}">
                                             {{ $session->session_name }} ( {{ $session->start_time }} - {{ $session->end_time }} )
                                        </option>                                      
                                    }
                                    @endforeach                                                                   
                                </select>
                            </div>                       
                        </div>                        
                        <div class="col-md-4 mb-3">
                            <div class="flex-between w-100">
                                <label for="total-visitor" class="form-label text-semibold">Number Of Visitor</label>
                                <div class="quota-checking">
                                </div>
                            </div>
                            <select class="form-select total-visitor" name="total_visitor" id="total-visitor"@if($kuotaDisabled) disabled @endif required>
                                <option value="" readonly="" selected>Number Of Visitor</option>
                                @for($i=1; $i <= $kuota; $i++)
                                <option value="" readonly="">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>   

            <hr class="mx-4">     
    
<div class="visitor-list my-3 py-5" id="dynamic-visitor-list">
    <h2 class="mx-5 mb-4 d-block">Visitor List</h2> 
    <div class="visitor-list-default">
        @for($i=0; $i < $pengunjung ; $i++)   
        <div class="card p-5 border-radius-8 mx-4 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="">
                                <label for="list-visitor-name{{ $i }}" class="form-label text-semibold">Name</label>
                                        <input name="visitor_name[]" placeholder="List Visitor Name" data-parsley-pattern="[a-zA-Z0-9.,-_()\.\,\-\(\)\_\/\s]*" data-parsley-error-message="Format Is Invalid" required="required" type="text" class="form-control " id="list-visitor-name{{ $i }}">          
                            </div>
                        </div>
                    </div>
                      
                        <div class="col-md-3 mb-3">
                            <label for="gender{{ $i }}" class="form-label text-semibold">Gender</label>
                            <select name="gender" class="form-select" id="gender{{ $i }}" required="">
                                <option value="">Choose</option>
                                <option value="m"> Male </option>
                                <option value="f"> Female </option>
                            </select>
                        </div>
                    <div class="col-md-1">
                        <div class="mb-3">
                            <label for="age{{ $i }}" class="form-label text-semibold">Age</label>

                            <input type="number" name="age[]" data-parsley-error-message="Invalid!!" placeholder="age" min="1" minlength="1" maxlength="2" data-parsley-errors-container="#age-container" class="form-control" required="" id="age{{ $i }}">

                            <div id="age-container"></div>
                        </div>
                    </div>
                    

                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="">
                                <label for="job-title{{ $i }}" class="form-label text-semibold">Job Title</label>
                                            <input name="job_title[]" placeholder="Job Title" data-parsley-pattern="[a-zA-Z0-9.,-_()\.\,\-\(\)\_\/\s]*" data-parsley-error-message="Format Is Invalid" required="required" type="text" class="form-control " id="job-title{{ $i }}">
                                            
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 mb-3">
                        <label for="institusi{{ $i }}" class="form-label text-semibold">Institution Category</label>
                        <select name="institution_category[]" class="form-select" id="institusi{{ $i }}" required="">
                            <option value="">Choose</option>
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
                <a wire:click="switchroom" onclick="updatePengunjung()" class="btn btn-primary mx-2" style="float: right; background-color: #04BD00; color: black;">
                    <i class="fa-solid fa-plus fa-lg px-2"></i>Add Visitor
                </a>
            </div>
        </div>
</div>


@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script>
        function updatePengunjung() {
            console.log('Pengunjung terbaru:', @this.pengunjung+1);
        // Lakukan operasi JavaScript lainnya setelah nilai pengunjung diperbarui
    }
        document.addEventListener('livewire:load', () => {
            
            var disabledDates = ["2023-05-25", "2023-05-28"];
        
            $( function() {
            $( "#arrival-date" ).datepicker(
                {minDate :new Date(),
                maxDate: "+2m +1w",
                beforeShowDay: function(date) {
                var day = date.getDay(); // Mendapatkan hari (0: Minggu, 1: Senin, dst.)
                return [(day == 2 || day == 4)]; // Menonaktifkan Selasa (2) dan Rabu (3)
            }
                }
            );
            } );
            
        });


        $(document).ready(function() {
        // Mengambil referensi elemen input dan datepicker
        const datepicker = $('#arrival-date');
        const totalVisitor = $('#total-visitor');
        const session = $('#session');

        // Menambahkan event listener pada datepicker untuk memantau perubahan nilainya
        datepicker.on('change', function() {
            @this.date = datepicker.val()
            console.log(datepicker.val())
            // Jika datepicker telah diisi, aktifkan semua input
            if (datepicker.val() !== '') {
            session.prop('disabled', false);
            } else {
            // Jika datepicker kosong, nonaktifkan semua input
            session.prop('disabled', true);
            }
        });

        session.on('change', function() {
            // 
            // Jika datepicker telah diisi, aktifkan semua input
            if (session.val() !== '') {
            totalVisitor.prop('disabled', false);
            } else {
            // Jika datepicker kosong, nonaktifkan semua input
            totalVisitor.prop('disabled', true);
            }
        });
        });

    </script>
@endpush