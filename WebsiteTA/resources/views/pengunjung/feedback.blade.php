<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>visitor_detail_user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  
</head>
  </head>
  <body>
    <div class="container my-5">
        <div class="row">

            <div class="col-md-12">

                <div class="form-feedback-xev my-3 py-3">

                    <form action='{{ url('feedback')}}' id="form-feedback-xev" method='post'>
                        @csrf

                            <div class="form-section current">

                                <div class="box-feedback mb-3 mt-5 py-5">
                                    <h2 class="mx-5 mb-4 d-block">Data Visitor</h2>

                                    <div class="card border-radius-8 p-5">
                                        <div class="card-header text-end border-0 bg-transparent flex-end py-0 px-3">
                                            <h4 class="number-page">1</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <div class="">
                                                            <label for="" class="form-label text-semibold">Email</label>
                                                            <input data-parsley-pattern="[a-zA-Z0-9\-\@\.\_]*" name="email" placeholder="Email" value="" required="required" type="email" class="form-control " id="" data-parsley-group="block-0">                                                           
                                                        </div>
                                                    </div>                                                
                                                </div>
                                                <div class="col-md-6">                                            
                                                    <div class="mb-3">
                                                        <div class="">
                                                            <label for="" class="form-label text-semibold">Institution Name</label>
                                                            <small class="d-block mb-2 text-capitalize">Nama Institusi</small>
                                                            <input name="institution" data-parsley-pattern="[a-zA-Z0-9\.\,\s]*" maxlength="100" placeholder="Institution Name" value="" required="required" type="text" class="form-control " id="" data-parsley-group="block-0">                                                       
                                                        </div>
                                                    </div>                                           
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <div class="">
                                                            <label for="" class="form-label text-semibold">Age</label>
                                                            <small class="d-block mb-2 text-capitalize">Umur</small>
                                                            <input name="age" data-parsley-pattern="[0-9]*" placeholder="Age" maxlength="2" value="" required="required" type="number" class="form-control " id="" data-parsley-group="block-0">
                                                        </div>
                                                    </div>                                     
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
    
                                    <h2 class="mx-5 mb-4 d-block mt-4">Waktu Kunjungan</h2>
    
                                    <div class="card border-radius-8 p-5 mb-5">                           
                                        <div class="card-header text-end border-0 bg-transparent flex-end py-0 px-3">
                                            <h4 class="number-page">2</h4>
                                        </div>
                            
                                        <div class="card-body">                           
                                            <div class="row">                  
                                                <div class="col-md-12">                 
                                                    <div class="mb-3">
                                                        <div class="">
                                                            <label for="visit-date" class="form-label text-semibold">Date of Visit</label>
                                                            <small class="d-block mb-2 text-capitalize">Tanggal Visit</small>
                                                            <input readonly="readonly" placeholder="DD/MM/YYYY" name="tanggal" value="" required="required" type="text" class="form-control " id="arrival-date">      
                                                        </div>
                                                    </div>                            
                                                </div>                           
                                            </div>                           
                                        </div>                           
                                    </div>
    
                                    <hr>
                            
                                    <div class="card border-radius-8 p-5 mb-4 mt-5">
                            
                                        <div class="card-header text-end border-0 bg-transparent flex-end py-0 px-3">
                                            <h4 class="number-page">3</h4>
                                        </div>
                            
                                        <div class="card-body">
                            
                                            <div class="row">
                            
                                                <div class="col-md-9">

                                                    <div class="col-md-12">

                                                        <label class="mb-0"><strong>Where do you know xEV Center from?</strong></label>
                            
                                                        <small class="d-block mb-2">Darimana anda tau xEV Center?</small>
                            
                                                        <div class="form-check mb-3">
                            
                                                            <input class="form-check-input global-trigger-how-they-know" type="radio" name="how_they_know" id="internal" data-parsley-multiple="how-they-know" data-parsley-errors-container="#how-they-know-container" value="1" required="" data-parsley-group="block-0">
                            
                                                            <label class="form-check-label" for="internal">
                            
                                                                Internal Toyota info
                            
                                                            </label>
                            
                                                        </div>
                            
                            
                            
                                                        <div class="form-check mb-3">
                            
                                                            <input class="form-check-input global-trigger-how-they-know" type="radio" name="how_they_know" id="instagram" data-parsley-multiple="how-they-know" value="2" required="" data-parsley-group="block-0">
                            
                                                            <label class="form-check-label" for="instagram">
                            
                                                                Instagram
                            
                                                            </label>
                            
                                                        </div>
                            
                                                        <div class="form-check mb-3">
                            
                                                            <input class="form-check-input global-trigger-how-they-know" type="radio" name="how_they_know" id="news" data-parsley-multiple="how-they-know" data-parsley-errors-container="#how-they-know-container" value="3" required="" data-parsley-group="block-0">
                            
                                                            <label class="form-check-label" for="news">
                            
                                                                News
                            
                                                            </label>
                            
                                                        </div>
                            
                            
                            
                                                        <div class="form-check mb-3">
                            
                                                            <input class="form-check-input global-trigger-how-they-know" type="radio" name="how_they_know" id="linkedin" data-parsley-multiple="how-they-know" value="4" required="" data-parsley-group="block-0">
                            
                                                            <label class="form-check-label" for="linkedin">
                            
                                                                Linkedin
                            
                                                            </label>
                            
                                                        </div>
                            
                                                        <div class="form-check mb-3">
                            
                                                            <input class="form-check-input global-trigger-how-they-know" type="radio" name="how_they_know" id="youtube" data-parsley-multiple="how-they-know" data-parsley-errors-container="#how-they-know-container" value="5" required="" data-parsley-group="block-0">
                            
                                                            <label class="form-check-label" for="youtube">
                            
                                                                Youtube
                            
                                                            </label>
                            
                                                        </div>
                            
                            
                            
                                                        <div class="form-check mb-3">
                            
                                                            <input class="form-check-input global-trigger-how-they-know" type="radio" name="how_they_know" id="friend" data-parsley-multiple="how-they-know" value="6" required="" data-parsley-group="block-0">
                            
                                                            <label class="form-check-label" for="friend">
                            
                                                                Friend / Family
                            
                                                            </label>
                            
                                                        </div>
                            
                            
                            
                                                        <div class="col-md-6 mb-2">
                            
                                                            <div class="form-check">
                            
                                                                <input class="form-check-input" data-parsley-multiple="how-they-know" type="radio" name="how_they_know" value="7" id="radio-other" required="" data-parsley-group="block-0">
                            
                                                                <label class="form-check-label" for="other-how-they">
                            
                                                                    Other
                            
                                                                </label>
                            
                                                                <input type="text" name="how_they_know_other" data-parsley-pattern="[a-zA-Z0-9\.\,\s]*" class="other-how-they" data-parsley-group="block-0" id="input-radio-other">
                            
                                                            </div>
                            
                                                        </div>
                            
                            
                                                        <div class="col-md-12 mt-3">
                            
                                                            <div id="how-they-know-container"></div>
                            
                                                        </div>
                            
                                                    </div>
                            
                                                    
                                                    <div class="mb-4">
                            
                                                        <label class="mb-0"><strong>How your level Knowledge about Electrification Vehicle BEFORE
                                                                visit xEV Center
                                                            </strong></label>
                                                        <small class="d-block mb-2">Bagaimana level pengetahuan anda mengenai kendaraan
                                                            elektrifikasi sebelum
                            
                                                            mendatangi
                            
                                                            xEV Center</small>
                            
                            
                            
                                                        <div class="d-flex justify-content-between align-items-center mt-3">
                            
                                                            <label class="form-check-label ">
                            
                                                                Low
                            
                                                            </label>
                            
                                                                                                <div class="form-check">
                            
                                                                    <label class="d-inline-block">1</label>
                            
                                                                    <input class="form-check-input" type="radio" required="" data-parsley-multiple="knowledge-before-xev" data-parsley-errors-container="#knowledge-before-container" value="1" name="knowledge_before_xev" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                            
                                                                    <label class="d-inline-block">2</label>
                            
                                                                    <input class="form-check-input" type="radio" required="" data-parsley-multiple="knowledge-before-xev" value="2" name="knowledge_before_xev" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                            
                                                                    <label class="d-inline-block">3</label>
                            
                                                                    <input class="form-check-input" type="radio" required="" data-parsley-multiple="knowledge-before-xev" value="3" name="knowledge_before_xev" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                            
                                                                    <label class="d-inline-block">4</label>
                            
                                                                    <input class="form-check-input" type="radio" required="" data-parsley-multiple="knowledge-before-xev" value="4" name="knowledge_before_xev" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                            
                                                                    <label class="d-inline-block">5</label>
                            
                                                                    <input class="form-check-input" type="radio" required="" data-parsley-multiple="knowledge-before-xev" value="5" name="knowledge_before_xev" data-parsley-group="block-0">
                            
                                                                </div>
                                                            
                                                            <label class="form-check-label ">
                            
                                                                Advance
                            
                                                            </label>
                            
                                                        </div>
                            
                                                        <div id="knowledge-before-container" class="my-3"></div>
                            
                                                    </div>
                            
                                                    
                            
                            
                            
                                                    <div class="mb-4">
                            
                                                        <label class="mb-0"><strong>How your level Knowledge about Electrification Vehicle AFTER
                                                                visit xEV Center
                                                            </strong></label>
                            
                                                        <small class="d-block mb-2">Bagaimana level pengetahuan anda mengenai kendaraan
                                                            elektrifikasi setelah
                            
                                                            mendatangi
                            
                                                            xEV Center</small>
                            
                            
                                                        <div class="d-flex justify-content-between align-items-center mt-3">
                            
                            
                            
                                                            <label class="form-check-label ">
                            
                                                                Low
                            
                                                            </label>
                            
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">1</label>
                                                                    <input class="form-check-input" data-parsley-multiple="knowledge-after-xev" data-parsley-errors-container="#knowledge-after-container" type="radio" required="" value="1" name="knowledge_after_xev" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">2</label>
                                                                    <input class="form-check-input" data-parsley-multiple="knowledge-after-xev" type="radio" required="" value="2" name="knowledge_after_xev" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">3</label>
                                                                    <input class="form-check-input" data-parsley-multiple="knowledge-after-xev" type="radio" required="" value="3" name="knowledge_after_xev" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">4</label>
                                                                    <input class="form-check-input" data-parsley-multiple="knowledge-after-xev" type="radio" required="" value="4" name="knowledge_after_xev" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">5</label>
                                                                    <input class="form-check-input" data-parsley-multiple="knowledge-after-xev" type="radio" required="" value="5" name="knowledge_after_xev" data-parsley-group="block-0">
                            
                                                                </div>
                                                            
                                                            <label class="form-check-label ">
                            
                                                                Advance
                            
                                                            </label>
                            
                                                        </div>
                            
                                                        <div id="knowledge-after-container" class="my-3"></div>
                            
                                                    </div>
                            
                                                    
                            
                            
                            
                                                    <div class="mb-4">
                            
                                                        <label class="mb-0"><strong>What knowledge is increases ?</strong></label>
                            
                                                        <small class="mb-2 d-block">Pengetahuan apa yang bertambah ?</small>
                            
                                                        <div class="d-flex justify-content-between align-items-center mt-3">
                            
                                                            <div class="row">
                            
                                                                <div class="col-md-6 mb-2">
                            
                                                                    <div class="form-check">
                            
                                                                        <input class="form-check-input" type="checkbox" data-parsley-errors-container="#knowledge-container" data-parsley-multiple="knowledge-xev" name="knowledge_increases[]" required="" value="xEv Ecosystem" id="xEv-Ecosystem" data-parsley-group="block-0">
                            
                                                                        <label class="form-check-label" for="xEv-Ecosystem">
                            
                                                                            xEv Ecosystem
                            
                                                                        </label>
                            
                                                                    </div>
                            
                                                                </div>
                            
                                                                <div class="col-md-6 mb-2">
                            
                                                                    <div class="form-check">
                            
                                                                        <input class="form-check-input" data-parsley-multiple="knowledge-xev" type="checkbox" name="knowledge_increases[]" required="" value="Differences of xEV technologies" id="xev-technologies" data-parsley-group="block-0">
                            
                                                                        <label class="form-check-label" for="xev-technologies">
                            
                                                                            Differences of xEV technologies
                            
                                                                        </label>
                            
                                                                    </div>
                            
                                                                </div>
                            
                                                                <div class="col-md-6 mb-2">
                            
                                                                    <div class="form-check">
                            
                                                                        <input class="form-check-input" data-parsley-multiple="knowledge-xev" type="checkbox" name="knowledge_increases[]" required="" value="Multi pathway approaches" id="pathway-approaches" data-parsley-group="block-0">
                            
                                                                        <label class="form-check-label" for="pathway-approaches">
                            
                                                                            Multi pathway approaches
                            
                                                                        </label>
                            
                                                                    </div>
                            
                                                                </div>
                            
                                                                <div class="col-md-6 mb-2">
                            
                                                                    <div class="form-check">
                            
                                                                        <input class="form-check-input" data-parsley-multiple="knowledge-xev" type="checkbox" name="knowledge_increases[]" value="4" id="other-checkbox" data-parsley-group="block-0">
                            
                                                                        <label class="form-check-label" for="other-pengetahuan">
                            
                                                                            Other
                            
                                                                        </label>
                            
                                                                        <input type="text" name="increases_other" data-parsley-pattern="[a-zA-Z0-9\.\,\s]*" class="other-pengetahuan" disabled="" data-parsley-group="block-0" id="input-other-checkbox">
                            
                                                                    </div>
                            
                                                                </div>
                            
                                                                <div class="col-md-12">
                            
                                                                    <div id="knowledge-container"></div>
                            
                                                                </div>
                            
                                                            </div>
                            
                                                        </div>
                            
                                                    </div>
                            
                                                    
                            
                                                    <div class="mb-4">
                            
                                                        <label class="mb-0"><strong>What's your opinion about the content and flow of the content
                                                                in
                                                                xEV
                                                                Center?</strong></label>
                            
                                                        <small class="mb-2 d-block">Apa pendapat anda mengenai isi konten dan alur konten
                                                            xEv Center ?</small>
                            
                                                        <div class="d-flex justify-content-between align-items-center mt-3">
                            
                                                            <label class="form-check-label ">
                            
                                                                Not Good
                            
                                                            </label>
                            
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">1</label>
                                                                    <input class="form-check-input" data-parsley-multiple="opinion-xev" data-parsley-errors-container="#opinion-container" type="radio" required="" value="1" name="content_opinion" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">2</label>
                                                                    <input class="form-check-input" data-parsley-multiple="opinion-xev" type="radio" required="" value="2" name="content_opinion" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">3</label>
                                                                    <input class="form-check-input" data-parsley-multiple="opinion-xev" type="radio" required="" value="3" name="content_opinion" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">4</label>
                                                                    <input class="form-check-input" data-parsley-multiple="opinion-xev" type="radio" required="" value="4" name="content_opinion" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">5</label>
                                                                    <input class="form-check-input" data-parsley-multiple="opinion-xev" type="radio" required="" value="5" name="content_opinion" data-parsley-group="block-0">
                            
                                                                </div>
                                                            
                            
                            
                                                            <label class="form-check-label ">
                            
                                                                Excellent
                            
                                                            </label>
                            
                                                        </div>
                            
                                                    </div>
                            
                                                    
                            
                                                    <div id="opinion-container" class="my-3"></div>
                            
                                                </div>
                            
                                                <div class="col-md-12">
                            
                                <div class="mb-3">
                                    <div class="">
                                        <label for="" class="form-label text-semibold">Mohon berikan alasan anda terkait penilaian tersebut</label>
                                                    <input name="reason_opinion" value="" required="required" data-parsley-pattern="[a-zA-Z0-9\.\,\s]*" placeholder="Your Answer" type="text" class="form-control " id="" data-parsley-group="block-0">
                                        
                                    </div>
                                </div>
                            
                            </div>
                            
                                            </div>
                            
                                        </div>
                            
                                    </div>
                            
                                    <div class="card border-radius-8 p-5 mb-4">
                            
                                        <div class="card-header text-end border-0 bg-transparent flex-end py-0 px-3">
                                            <h4 class="number-page">4</h4>
                                        </div>
                            
                                        <div class="card-body">
                            
                                            <div class="row">
                            
                                                <div class="col-md-9">
                            
                                                    <div class="mb-4">
                            
                                                        <label class="mb-0"><strong>Please give rate to the presenter</strong></label>
                            
                                                        <small class="mb-2 d-block">Mohon berikan nilai untuk presenter</small>
                            
                                                        <div class="d-flex justify-content-between align-items-center mt-3">
                            
                                                            <label class="form-check-label ">
                            
                                                                Not Good
                            
                                                            </label>
                            
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">1</label>
                                                                    <input class="form-check-input" data-parsley-multiple="presenter-xev" data-parsley-errors-container="#presenter-container" type="radio" required="" value="1" name="presenter_score" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">2</label>
                                                                    <input class="form-check-input" data-parsley-multiple="presenter-xev" type="radio" required="" value="2" name="presenter_score" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">3</label>
                                                                    <input class="form-check-input" data-parsley-multiple="presenter-xev" type="radio" required="" value="3" name="presenter_score" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">4</label>
                                                                    <input class="form-check-input" data-parsley-multiple="presenter-xev" type="radio" required="" value="4" name="presenter_score" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">5</label>
                                                                    <input class="form-check-input" data-parsley-multiple="presenter-xev" type="radio" required="" value="5" name="presenter_score" data-parsley-group="block-0">
                            
                                                                </div>
                                                            
                                                            <label class="form-check-label ">
                            
                                                                Excellent
                            
                                                            </label>
                            
                                                        </div>
                            
                                                        <div id="presenter-container" class="my-3"></div>
                            
                                                    </div>
                            
                                                </div>
                            
                                                <div class="col-md-12">
                            
                                <div class="mb-3">
                                    <div class="">
                                        <label for="" class="form-label text-semibold">Please give a reason why you rate that much</label>
                                                        <small class="d-block mb-2 text-capitalize">Mohon berikan alasan anda terkait penilaian tersebut</small>
                                                    <input name="reason_score" placeholder="Your Answer" value="" required="required" data-parsley-pattern="[a-zA-Z0-9\.\,\s]*" type="text" class="form-control " id="" data-parsley-group="block-0">
                                        
                                    </div>
                                </div>
                            
                            </div>
                            
                                            </div>
                            
                                        </div>
                            
                                    </div>
                            
                                    <div class="card border-radius-8 p-5 mb-4">
                            
                                        <div class="card-header text-end border-0 bg-transparent flex-end py-0 px-3">
                                            <h4 class="number-page">5</h4>
                                        </div>
                            
                                        <div class="card-body">
                            
                                            <div class="row">
                            
                                                <div class="col-md-9">
                            
                                                    <div class="mb-4">
                            
                                                        <label class="mb-0"><strong>How are the facilities at the xEV Center? (unit driving
                                                                experience, charging station, VR, cut body)
                                                            </strong></label>
                            
                                                        <small class="d-block mb-2">Mohon berikan pendapat anda mengenai fasilitas xEV Center
                                                            ( Unit driving
                            
                                                            experience, charging station, VR, cut body )</small>
                            
                                                        <div class="d-flex justify-content-between align-items-center mt-3">
                            
                                                            <label class="form-check-label ">
                            
                                                                Not Attractive
                            
                                                            </label>
                            
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">1</label>
                                                                    <input class="form-check-input" data-parsley-multiple="facility-xev" data-parsley-errors-container="#facility-container" type="radio" required="" value="1" name="xev_center_facility" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">2</label>
                                                                    <input class="form-check-input" data-parsley-multiple="facility-xev" type="radio" required="" value="2" name="xev_center_facility" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">3</label>
                                                                    <input class="form-check-input" data-parsley-multiple="facility-xev" type="radio" required="" value="3" name="xev_center_facility" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">4</label>
                                                                    <input class="form-check-input" data-parsley-multiple="facility-xev" type="radio" required="" value="4" name="xev_center_facility" data-parsley-group="block-0">
                            
                                                                </div>
                                                                                                <div class="form-check">
                                                                    <label class="d-inline-block">5</label>
                                                                    <input class="form-check-input" data-parsley-multiple="facility-xev" type="radio" required="" value="5" name="xev_center_facility" data-parsley-group="block-0">
                            
                                                                </div>
                                                            
                                                            <label class="form-check-label ">
                            
                                                                Very Attractive
                            
                                                            </label>
                            
                                                        </div>
                            
                                                        <div id="facility-container" class="my-3"></div>
                            
                                                    </div>
                            
                                                </div>
                            
                                                <div class="col-md-12">
                            
                                <div class="mb-3">
                                    <div class="">
                                        <label for="" class="form-label text-semibold">Please give a reason why you rate that much</label>
                                                        <small class="d-block mb-2 text-capitalize">Mohon berikan alasan anda terkait penilaian tersebut</small>
                                                    <input name="reason_xev_center_facility" placeholder="Your Answer" value="" required="required" data-parsley-pattern="[a-zA-Z0-9\.\,\s]*" type="text" class="form-control " id="" data-parsley-group="block-0">
                                        
                                    </div>
                                </div>
                            
                            </div>
                            
                                            </div>
                            
                                        </div>
                            
                                    </div>
                            
                            
                                    <div class="card border-radius-8 p-5 mb-4 mt-5">
                            
                                        <div class="card-header text-end border-0 bg-transparent flex-end py-0 px-3">
                                            <h4 class="number-page">6</h4>
                                        </div>
                            
                                        <div class="card-body">
                            
                                            <div class="row">
                            
                                                <div class="col-md-12">
                            
                                                    <label class="mb-0"><strong>Are you interested in buying an xEV car?</strong></label>
                            
                                                    <small class="d-block mb-2">Apakah kamu tertarik membeli mobil elektrifikasi ?</small>
                            
                                                    <div class="form-check mb-3">
                            
                                                        <input class="form-check-input global-trigger-hidden trigger-showing-interest" type="radio" name="interested_to_buy" id="yes-interest" data-parsley-multiple="electric-xev-interest" data-parsley-errors-container="#electric-xev-interest-container" value="y" required="" data-parsley-group="block-0">
                            
                                                        <label class="form-check-label" for="yes-interest">
                            
                                                            Ya
                            
                                                        </label>
                            
                                                    </div>
                            
                                                    <div class="form-check mb-3">
                            
                                                        <input class="form-check-input global-trigger-hidden trigger-hidden-interest" type="radio" name="interested_to_buy" id="interest-no" data-parsley-multiple="electric-xev-interest" value="n" required="" data-parsley-group="block-0">
                            
                                                        <label class="form-check-label" for="interest-no">
                            
                                                            Tidak
                            
                                                        </label>
                            
                                                    </div>
                            
                                                    <div class="col-md-12 mt-3">
                            
                                                        <div id="electric-xev-interest-container"></div>
                            
                                                    </div>
                            
                                                </div>
                            
                                                <div class="col-md-9 hidden-interest" id="hidden-1" style="display: none;">
                            
                                                    <label class="mb-0"><strong>What kind of xEV are you interested in buying?</strong></label>
                            
                                                    <small class="mb-2 d-block">Kamu berminat untuk beli jenis mobil xEV apa ?</small>
                            
                                                    <div class="row">
                            
                                                        <div class="col-md-6">
                            
                                                            <div class="form-check">
                            
                                                                <input class="form-check-input global-hidden-interest" type="radio" name="car_series" id="hev" data-parsley-multiple="type-xev-interest" data-parsley-errors-container="#type-xev-interest-container" value="hev" data-parsley-group="block-0">
                            
                                                                <label class="form-check-label" for="hev">
                            
                                                                    Hybrid Electric Vehicle (HEV)
                            
                                                                </label>
                            
                                                            </div>
                            
                                                            <div class="form-check">
                            
                                                                <input class="form-check-input global-hidden-interest" type="radio" name="car_series" data-parsley-multiple="type-xev-interest" id="phev" value="phev" data-parsley-group="block-0">
                            
                                                                <label class="form-check-label" for="phev">
                            
                                                                    Plug In Hybrid Vehicle (PHEV)
                            
                                                                </label>
                            
                                                            </div>
                            
                                                        </div>
                            
                                                        <div class="col-md-6">
                            
                                                            <div class="form-check">
                            
                                                                <input class="form-check-input global-hidden-interest" type="radio" name="car_series" data-parsley-multiple="type-xev-interest" id="bev" value="bev" data-parsley-group="block-0">
                            
                                                                <label class="form-check-label" for="bev">
                            
                                                                    Battery Electric Vehicle (BEV)
                            
                                                                </label>
                            
                                                            </div>
                            
                            
                            
                                                            <div class="form-check">
                            
                                                                <input class="form-check-input global-hidden-interest" type="radio" name="car_series" data-parsley-multiple="type-xev-interest" id="fcev" value="fcev" data-parsley-group="block-0">
                            
                                                                <label class="form-check-label" for="fcev">
                            
                                                                    Full Cell Electric Vehicle (FCEV)
                            
                                                                </label>
                            
                                                            </div>
                            
                                                        </div>
                            
                                                        <div class="col-md-12 mt-3">
                            
                                                            <div id="hidden-2"></div>
                            
                                                        </div>
                            
                                                    </div>
                            
                                                    
                            
                                                    <label class="mb-0"><strong>What type of xEV Car are you interested in
                                                            buying?</strong></label>
                            
                                                    <small class="d-block mb-2">Kamu berminat untuk beli tipe mobil xEV apa ? </small>
                            
                                                    <div class="row">
                            
                                                        <div class="col-md-6">
                            
                                                            <div class="form-check">
                            
                                                                <input class="form-check-input global-hidden-interest" data-parsley-multiple="type-xev" type="radio" data-parsley-errors-container="#type-xev-container" name="car_type" id="mpv-5" value="1" data-parsley-group="block-0">
                            
                                                                <label class="form-check-label" for="mpv-5">
                            
                                                                    MPV 5 Seater
                            
                                                                </label>
                            
                                                            </div>
                            
                            
                            
                                                            <div class="form-check">
                            
                                                                <input class="form-check-input global-hidden-interest" type="radio" name="car_type" data-parsley-multiple="type-xev" id="suv-5" value="2" data-parsley-group="block-0">
                            
                                                                <label class="form-check-label" for="suv-5">
                            
                                                                    SUV 5 Seater
                            
                                                                </label>
                            
                                                            </div>
                            
                                                            <div class="form-check">
                            
                                                                <input class="form-check-input global-hidden-interest" type="radio" name="car_type" id="small-seater" data-parsley-multiple="type-xev" value="3" data-parsley-group="block-0">
                            
                                                                <label class="form-check-label" for="small-seater">
                            
                                                                    Small 2 Seaters Car
                            
                                                                </label>
                            
                                                            </div>
                            
                                                        </div>
                            
                                                        <div class="col-md-6">
                            
                                                            <div class="form-check">
                            
                                                                <input class="form-check-input global-hidden-interest" type="radio" name="car_type" id="mpv-7" data-parsley-multiple="type-xev" value="4" data-parsley-group="block-0">
                            
                                                                <label class="form-check-label" for="mpv-7">
                            
                                                                    MPV 7 Seater
                            
                                                                </label>
                            
                                                            </div>
                            
                                                            <div class="form-check">
                            
                                                                <input class="form-check-input global-hidden-interest" type="radio" name="car_type" id="suv-7" data-parsley-multiple="type-xev" value="5" data-parsley-group="block-0">
                            
                                                                <label class="form-check-label" for="suv-7">
                            
                                                                    SUV 7 Seater
                            
                                                                </label>
                            
                                                            </div>
                            
                                                            <div class="form-check">
                            
                                                                <input class="form-check-input global-hidden-interest" type="radio" name="car_type" id="Sedan" data-parsley-multiple="type-xev" value="6" data-parsley-group="block-0">
                            
                                                                <label class="form-check-label" for="Sedan">
                            
                                                                    Sedan
                            
                                                                </label>
                            
                                                            </div>
                            
                                                        </div>
                            
                                                        <div class="col-md-12 mt-3">
                            
                                                            <div id="type-xev-container"></div>
                            
                                                        </div>
                            
                                                    </div>
                            
                                                </div>
                            
                                            </div>
                            
                                        </div>
                            
                                    </div>
                            
                                    <hr>
                            
                                    <div class="card border-radius-8 p-5 mb-5">
                            
                                        <div class="card-header text-end border-0 bg-transparent flex-end py-0 px-3">
                                            <h4 class="number-page">7</h4>
                                        </div>
                            
                                        <div class="card-body">
                            
                                            <div class="row">
                            
                                                <div class="col-md-12">
                            
                                <div class="mb-3">
                                    <div class="">
                                        <label for="" class="form-label text-semibold">Will you recommend your colleagues/family/friends to visit xEV Center? Why?</label>
                                                        <small class="d-block mb-2 text-capitalize">Apakah xEV Center layak untuk di rekomendasikan ke kolega, teman, atau keluarga anda? Berikan alasan nya</small>
                                                    <input name="reason_xev_center_is_worth" value="" placeholder="Your Answer" required="required" data-parsley-pattern="[a-zA-Z0-9\.\,\s]*" type="text" class="form-control " id="" data-parsley-group="block-0">
                                        
                                    </div>
                                </div>
                            
                            </div>
                            
                                                
                            
                                                <div class="col-md-12">
                            
                                <div class="mb-3">
                                    <div class="">
                                        <label for="" class="form-label text-semibold">Please share your testimony about the xEV Center</label>
                                                        <small class="d-block mb-2 text-capitalize">Mohon berikan testimoni anda mengenai xEV Center</small>
                                                    <input name="testimoni" placeholder="Your Answer" value="" required="required" data-parsley-pattern="[a-zA-Z0-9\.\,\s]*" type="text" class="form-control " id="" data-parsley-group="block-0">
                                        
                                    </div>
                                </div>
                            
                            </div>
                                                
                                                <div class="col-md-12">
                            
                                <div class="mb-3">
                                    <div class="">
                                        <label for="" class="form-label text-semibold">What is your advice about xev center</label>
                                                        <small class="d-block mb-2 text-capitalize">Apa saran anda mengenai xev center</small>
                                                    <input name="advice" placeholder="Your Answer" value="" required="required" data-parsley-pattern="[a-zA-Z0-9\.\,\s]*" type="textarea" class="form-control " id="" data-parsley-group="block-0">
                                        
                                    </div>
                                </div>
                            
                            </div>
                            
                                            </div>
                            
                                        </div>
                            
                                    </div>
                            
                                </div>
                            
                                {{-- <div>
                                        
                                    <div class="g-recaptcha mb-4 flex-end" data-sitekey="6Lc6Jx0lAAAAAB0w2eYio82EuoSwCjHrfiv4dgd7"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lc6Jx0lAAAAAB0w2eYio82EuoSwCjHrfiv4dgd7&amp;co=aHR0cHM6Ly94ZXZjZW50ZXIudG95b3RhLmNvLmlkOjQ0Mw..&amp;hl=en&amp;v=sNQO7xVld1CuA2hfFHvkpVL-&amp;size=normal&amp;cb=omselg4o3gst" width="304" height="78" role="presentation" name="a-lqtd6w4w6wpo" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                            
                                </div> --}}
                            
                            </div>
                            
                            
                            
                                                
                            
                                                <div class="form-navigation d-flex w-100 align-items-center pt-3 justify-content-end">
                            
                                                    <button type="button" class="previous btn btn-light pull-left border-radius-50 bg-white" data-navigation="navigate" style="display: none;">&lt;
                            
                                                        Previous</button>
                            
                                                    <button type="button" class="next btn btn-primary pull-right border-radius-50 text-white" data-navigation="navigate" style="display: none;">Next
                            
                                                        &gt;</button>
                            
                                                    <input type="submit" class="btn btn-primary pull-right border-radius-50 text-white submit-feedback" data-navigation="navigate">
                            
                                                </div>
                            
                                            </form>
                            
                                        </div>
                            
                                    </div>
                                        </div>
                            </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script>
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


    $(document).ready(function() {
      $('#radio-other').click(function() {
        $('#input-radio-other').prop('disabled', false);
      });

      $('#other-checkbox').change(function() {
        if ($(this).is(':checked')) {
          $('#input-other-checkbox').prop('disabled', false);
        } else {
          $('#input-other-checkbox').prop('disabled', true);
        }
      });

      $('#yes-interest').click(function() {
        $('#hidden-1').show();
        $('#hidden-2').show();
      });

      $('#interest-no').click(function() {
        $('#hidden-1').hide();
        $('#hidden-2').hide();
      });
    });
    
    </script>

    
</body>
</html>