
<!doctype html>
<html lang="en">
    <head>  
        <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body>
        
@if (session('message'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
  {{ session('message') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
        <form action="/ConfirmationCode" method="post">
            @csrf
            {{-- <input type="hidden" name="booking_code" id="booking_code"> --}}
            <br><br><br>
      <div class="inner-content-tabbing-visitordetail my-3 py-3">
        <div class="col-md-12">
            <h1 class="mx-5 mb-3 d-block">
                Check in Arrival to xEV Center
            </h1>
        </div>

        <div class="col-md-12">
            <hr class="mx-5 mb-3 d-block" />
        </div>
        <br><br>
        <div class="col-md-12" style="margin-left: 45px">
            <h6 for="Email" class="form-label text-semibold">
                Registration Code
            </h6>
        </div>

        <div
            class="col-md-6 mt-3"
            style="
                display: flex;
                justify-content: center;
                align-items: center;
                margin-left: 45px;
            "
        >
            <div class="mb-3 input-group">
                <input
                    name="booking_code"
                    placeholder="Code Booking"
                    type="code"
                    class="form-control"
                    id="booking_code"
                />
                <div class="input-group-append">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="input-group-text p-3">
                        <i class="fa-solid fa-camera"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="flex-between w-100 mb-4 submit-booking-code">
            <div class="flex-end w-100 px-4 py-1">
                <button
                    class="btn btn-primary flex-center py-1 px-4 border-radius-8 mx-3 btn-lg"
                    type="submit"
                    id="submit-reservation"
                    style="
                        background-color: #008db9;
                        color: white;
                        font-weight: bold;
                        float: right;
                    "
                >
                    Submit
                </button>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Getting Camera</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
        <div class="mx-auto" style="width:400px; height:400px">
            <div id="reader" width="200px"></div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

        </form>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script> 
    let isScanned = false;
    let html5QrcodeScanner;
    $('#exampleModal').on('show.bs.modal', function (event) {

        let html5QrcodeScanner = new Html5QrcodeScanner(
          "reader",
          { fps: 10, qrbox: {width: 250, height: 250} },
          /* verbose= */ false);
          
        html5QrcodeScanner.render(onScanSuccess);
    
        function onScanSuccess(decodedText, decodedResult) {
          // handle the scanned code as you like, for example:
          if (!isScanned) {
            isScanned = true; 
            $('#booking_code').val(decodedText);
            document.forms[0].submit();
          }
        }

        $('#exampleModal').on('hidden.bs.modal', function (event) {
    // Menghentikan pemindaian QR code
    if (html5QrcodeScanner) {
        html5QrcodeScanner.clear(); // Membersihkan layar scanner
        html5QrcodeScanner.stop(); // Menghentikan pemindaian
        isScanned = false; // Setel ulang status pemindaian
    }
});

    });
    

    </script>

       </html>
