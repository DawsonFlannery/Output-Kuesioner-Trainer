@extends('layouts.app')

@section('css')
@parent

@endsection



@section('main')

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    body {
      background : radial-gradient(circle at top left, #5EABE3, #A569BA)
    }
    .image {
      height: 100px;
    }
    .table {
      margin-top: -35px;
      width: 800px;
      margin: 0 auto;
      
    }

    .scrolling-wrapper {
      overflow-x: scroll;
      overflow-y: scroll;
      white-space: nowrap;
    }

    footer {
      position: relative;
      bottom: 0;
      width: 100%;
      height: 70px;
      background-color: #333;
      padding-top: 25px;
    }

    footer p {
      color: #aaaaaa;
      font-size: 1em;
    }


  </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
      <!-- Navbar content -->   
      <a class="navbar-brand"></a>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </nav>
    <br>
    
    
    <div class="container">
      <!-- Jumbotron Top -->
      <div class="jumbotron">
        <h1 class="display-4">Daftar Trainer</h1>
        <p class="lead">Berikut adalah hasil dari kuisioner trainer</p>
        <br>
        <hr>

        <!-- Table for Trainer-->
        <div class="scrolling-wrapper">
        <table class="table table-striped table-bordered">
          <thead class="table table-dark"> 
            <th>Nama Trainer</th>
            <th>Bank Trainer</th>
            <th>Email Trainer</th>
            <th>No.Hp Trainer</th>
        </thead>
          <tbody>
            @foreach($pp as $r)
            <tr>
            <td>{{$r->nama}}</td>
            <td>{{$r->bank}}</td>
            <td>{{$r->email}}</td>
            <td>{{$r->no_hp}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
      </div>
      </div>
      </div>



      <div class="container">
      <!-- Jumbotron Top -->
      <div class="jumbotron">
        <h1 class="display-4">Daftar Trainer</h1>
        <p class="lead">Berikut adalah hasil dari kuisioner trainer</p>
        <br>
        <hr>

        <!-- Table For Participants-->
        <div class="scrolling-wrapper">
        <table class="table table-striped table-bordered">
          <thead class="table table-dark"> 
            <th>No.Rek Trainer</th>
            <th>Email Trainer</th>
            <th>No.Hp Trainer</th>
            <th>Rate Kec. Pembayaran </th>
            <th>Komen Kec. Pembayaran</th>
            <th>Rate Fas. Pendukung</th>
            <th>Komen Fas. Pendukung</th>
            <th>Rate Layanan Panitia</th>
            <th>Komen Layanan Panitia</th>
            <th>Saran Training</th>

          </thead>
          <tbody>
            @foreach($pp as $r)
            <tr>
            <td>{{$r->no_rek}}</td>
            <td>{{$r->email}}</td>
            <td>{{$r->no_telp}}</td>
            <td>{{$r->kecepatan_pembayaran}}</td>
            <td>{{$r->kp_komen}}</td>
            <td>{{$r->fasilitas_pendukung}}</td>
            <td>{{$r->fp_komen}}</td>
            <td>{{$r->layanan_panitia}}</td>
            <td>{{$r->lp_komen}}</td>
            <td>{{$r->saran_topik}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
      </div>
      </div>
  
      

      


    <!-- footer -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>
              &copy; copyright 2020 | built by.
              <a href="#">IPBT 2020</a>
            </p>
            
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap Script -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
  integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
  crossorigin="anonymous"></script>
    
</body>
</html>

@endsection