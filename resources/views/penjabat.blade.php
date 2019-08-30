@extends('layouts.app')

@section('content')
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<button class="bg-primary" onclick="topFunction()" id="myBtn" title="Go to top" style="display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 20px;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;"><i class="fas fa-arrow-up text-white"></i></button>

  <!-- navbar -->
  <!-- header -->
  <div class="container-fluid" style="background-color: blue;">
    <img src="asset/brand.png">
    <img src="asset/logo.png" class="d-inline-block  mx-auto d-block text-center" style="height: 150px;">
    <p class="d-inline-block  mx-auto d-block text-center pb-3" style="color: white; font-size: 40px;">Direktorat Jenderal Pajak</p>
  </div>
  <!-- header -->
  <!-- content -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="container-fluid shadow">
          <h3 class="text-center pt-3">Profil anggota </h3>
          <hr style="width: 50%;">
          <div class="container">
            <div class="row">
              <div class="col-md-4 pt-4 pb-3">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="asset/ripki.jpg" alt="Card image cap" style="height: 300px;">
                  <div class="card-body">
                    <h5 class="card-title">Alrifki fajriansyah</h5>
                    <p class="card-text">Perancang mockup </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 pt-4 pb-3">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="asset/nando.jpg" alt="Card image cap" style="height: 300px;">
                  <div class="card-body">
                    <h5 class="card-title">Nando akbar</h5>
                    <p class="card-text">Web Designer</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 pt-4 pb-3">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="asset/bowo.jpg" alt="Card image cap" style="height: 300px;">
                  <div class="card-body">
                    <h5 class="card-title">Setyo wibowo</h5>
                    <p class="card-text">Perancang mockup</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 pt-4 pb-3">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="asset/reja.jpg" alt="Card image cap" style="height: 300px;">
                  <div class="card-body">
                    <h5 class="card-title">M Fairu reza</h5>
                    <p class="card-text">Back end desainer </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 pt-4 pb-3">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="asset/didi.jpg" alt="Card image cap" style="height: 300px;">
                  <div class="card-body">
                    <h5 class="card-title">Diaz puspasari</h5>
                    <p class="card-text">Perancang basis data dan ppl</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 pt-4 pb-3">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="asset/excel.jpg" alt="Card image cap" style="height: 300px;">
                  <div class="card-body">
                    <h5 class="card-title">M excel</h5>
                    <p class="card-text">Perancang basis data dan ppl</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="container-fluid">
          <h3 class="p-2 bg-primary text-white">DJP ONLINE</h3>
          <ul class="border border border-dark p-2" style="list-style-type: none;">
            <li>e regirstration</li>
            <li>e faktur</li>
            <li>e billing</li>
          </ul>
        </div>
        <div class="container-fluid">
          <h3 class="p-2 bg-primary text-white">Formulir Perpajakan</h3>
          <div class="container border border border-dark p-2 mb-3 text-white" style="list-style-type: none;">
            <p><a class="text-dark" href="">Formulir Pendaftaran Elektronik LK (EOI)</a></p>
            <p><a class="text-dark" href="">Laporan Pasca Amnesti Pajak</a></p>
            <p><a class="text-dark" href="">Formulir Aktivasi EFIN</a></p>
            <P><a class="text-dark" href="">Form DGT-1</a></P>
            <P><a class="text-dark" href="">Format Pelaporan Utang dan Modal</a></P>
          </div>
        </div>
        <div class="container-fluid">
          <h3 class="p-2 bg-primary text-white">Organisasi</h3>
          <div class="container border border border-dark p-2" style="list-style-type: none;">
            <p><a class="text-dark" href="unit">Unit kerja DJP</a></p>
            <p><a class="text-dark" href="struktur">Struktur Kerja Organisasi</a></p>
            <P><a class="text-white" href="pejabat">Profil Pejabat</a></P>
          </div>
        </div>
      </div>
    </div>
    <a class="btn btn-primary mt-3" href="homee">Kembali</a>
  </div>
  <div class="footer-2 mt-5" style="background-color: #555; height:60px;">
   <p class="text-center pt-3" style="color: #aeb7b7">Copyright &copy; Kelompok 6 orang 2019</p>
 </div>
 <script type="text/javascript">
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

@endsection