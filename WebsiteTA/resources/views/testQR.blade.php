
<!doctype htmk>
<html lang="en">
    <head>  
        <script type="text/javascript" src="instascan.min.js"></script>
    </head>

    <body> 

        <div id="reader" width="600px"></div>

        {{-- @dd($pengunjung) --}}
        {!! QrCode::size(250)->generate($pengunjung); !!}
        {{-- <img src="data:image/png;base64,{{ base64_encode($svg) }}" alt="QR Code" /> --}}
        {{-- {!! $svg !!} --}}
        
        
        {{-- 
        <form method="POST" action="/generate-qrcode">
            @csrf
            <label for="scan" style="display: block;">
                <img src="{{ asset('images/camera.png') }}" alt="Camera Icon" style="width: 32px; height: 32px; margin-bottom: -8px;">
                Scan QR Code
            </label>
            <input type="file" id="scan" accept="image/*" capture="camera" style="display: none;" onchange="this.form.submit();" />
            <button type="submit">Buat QR code dan kirimkan data ke API</button>
        </form> --}}
        
        
        
    </body>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript">   </script>

    <script> 
        function onScanSuccess(decodedText, decodedResult) {
    // handle the scanned code as you like, for example:
    console.log(`Code matched = ${decodedText}`, decodedResult);
    }

    function onScanFailure(error) {
    // handle scan failure, usually better to ignore and keep scanning.
    // for example:
    // console.warn(`Code scan error = ${error}`);
    }

    let html5QrcodeScanner = new Html5QrcodeScanner(
    "reader",
    { fps: 10, qrbox: {width: 250, height: 250} },
    /* verbose= */ false);
    html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>

       </html>
