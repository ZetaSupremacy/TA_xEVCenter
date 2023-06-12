<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Profile | {{ auth()->user()->nama}}</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
<header class="navbar navbar-dark sticky-top bg-info flex-md-nowrap p-0 shadow">
        
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img
    src="https://drive.google.com/uc?export=view&id=1HN1WxsHtxIP0LUSI9_h35PiUGntddTlM"
    alt="Logo"
/></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse pt-0 pt-md-5">
      <div class="position-sticky pt-md-4">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/profile/{{ auth()->user()->nama}}eed">
              <span data-feather="home"></span>
              Data Visitor
            </a>
            <li class="nav-item">
              <a class="nav-link" href="/profile/{{ auth()->user()->nama}}/edit">
                <span data-feather="user"></span>
                Registration
              </a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="/profile/menu">
              <span data-feather="shopping-cart"></span>
              Check In
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/profile/customer">
              <span data-feather="users"></span>
              Feedback
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/profile/review">
              <span data-feather="eye"></span>
              Setting 
            </a>
          </li>
        </ul>

    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        
        <div class="inner-content-tabbing-visitordetail my-3 py-3">
            <div class="mx-3 mb-3">
                
                <div class="col-md-12">
                    <div class="">
                        <div class="card-body rounded-3" style="background-color: #dedede; ">
                            <h1 style="font-weight: bold; font-size: 30px">Check in - Group Arrival</h1>
                        </div>
                    </div>
                </div>

                <div class="box-reservation-xev my-3 py-5">
                    <div class="card border-radius-8">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="checkAll"></th>
                                        <th scope="col">Arrival Date</th>
                                        <th scope="col">Group Name</th>
                                        <th scope="col">Session</th>
                                        <th scope="col">PIC Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Total Arrival</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reservasi_group as $reservasiGroup)
                                    <tr>
                                        <td><input class="checkItem" type="checkbox"></td>
                                        <td>{{ $reservasiGroup->tanggal }}</td>
                                        <td>{{ $reservasiGroup->nama_group }}</td>
                                        <td>{{ $reservasiGroup->reservation_session->session_name }}</td>
                                        <td>{{ $reservasiGroup->pic_name }}</td>
                                        <td>{{ $reservasiGroup->email }}</td>
                                        <td>{{ $reservasiGroup->total_member }}</td>
                                        <td><button class="btn btn-primary flex-center mt-1 py-1 px-4 border-radius-8 btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $reservasiGroup->id  }}" id="submit-reservation" style="background-color: #00B934; color: white; font-weight: bold;">Detail</button></td>
                                    </tr>
                                    @endforeach
                                
                                    </tbody>
                                </table>
                                <div class="col-md-12">
                                    <button class="btn btn-primary flex-center mt-3 py-1 px-4 mx-2 border-radius-8 btn-sm" type="submit" id="submit-reservation" style="background-color: #CE2500; color: white; font-weight: bold; float: left;">Delete</button>
                                    <i class="fa-solid fa-circle-chevron-right fa-xl flex-center mt-4 py-2 px-3" style="color: #000000; float: right;"></i>
                                    <i class="fa-solid fa-circle-chevron-left fa-xl flex-center mt-4 py-2 px-3" style="color: #000000; float: right;"></i>
                                </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

@foreach($reservasi_group as $reservasiGroup)
  {{-- @dd($reservasiGroup->group_member) --}}
<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $reservasiGroup->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Visitor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

       <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Visitor Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Job_Title</th>
                                    <th scope="col">Institution</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reservasiGroup->group_member as $member)
                                <tr>
                                    <td>{{ $member->pengunjung->visitor_name }}</td>
                                    <td>{{ $member->pengunjung->gender }}</td>
                                    <td>{{ $member->pengunjung->age }}</td>
                                    <td>{{ $member->pengunjung->job_title }}</td>
                                    <td>{{ $member->pengunjung->intitution_category }}</td>
                                    
                                </tr>
                                @endforeach
                            
                                </tbody>
                            </table>
    </div>
  </div>
</div>
@endforeach

    </main>
</div>
</div>
      
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
      
      <script src="/js/dashboard.js"> </script> 
    </body>
</html>