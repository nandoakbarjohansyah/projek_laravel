    
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
          <h3 class="text-center pt-3">Unit Kerja Direktorat Jenderal Perpajakan</h3>
          <hr style="width: 50%;">
          <p class="pt-3 pb-3" style="text-indent: 50px; text-align: justify;">
            Daftar Unit Kerja Direktorat Jenderal Pajak
          </p>
          <table class="table pb-3">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Nama Kantor</th>
                <th scope="col">Alamat</th>
                <th scope="col">Fax</th>
                <th scope="col">Kanwil</th>
                <th scope="col">Kode kantor</th>
                <th scope="col">Nomor Telepon</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Alamat Kantor Wilayah DJP Kepulauan Riau</th>
                <td>Jalan Yos Sudarso, Baloi Indah, Lubuk Baja, Kota Batam, Kepulauan Riau - 29432</td>
                <td>(0778) 4885370</td>
                <td>DJP Kepulauan Riau</td>
                <td>340</td>
                <td>(0778) 4885762, 4885811</td>
              </tr>
              <tr>
                <th scope="row">Alamat Kantor Kanwil DJP Sumatera Selatan dan Kep. Bangka Belitung</th>
                <td>jalan tasik, kambang iwak</td>
                <td>0711-313119</td>
                <td>djp sumatera selatan dan kep. babel</td>
                <td>60</td>
                <td>0711-357077</td>
              </tr>
              <tr>
                <th scope="row">Direktorat Ekstensifikasi dan Penilaian</th>
                <td>Jalan Gatot Subroto Kav. 40-42, Gedung Utama Lt.12, Jakarta, 12190</td>
                <td>021-5736176</td>
                <td>021-5250208 Ext. 51261, 51262</td>
              </tr>
              <tr>
                <th scope="row">Direktorat Keberatan dan Banding</th>
                <td>Jalan Gatot Subroto Kav. 40-42, Gedung Utama Lt.18, Jakarta, 12190</td>
                <td>021-5255767</td>
                <td>021-5250208 Ext. 51845, 51839</td>
              </tr>
              <tr>
                <th scope="row">Direktorat Kepatuhan Internal dan Transformasi Sumber Daya Aparatur</th>
                <td>Jalan Gatot Subroto Kav. 40-42, Gedung Utama Lt.20, Jakarta, 12190</td>
                <td>021-52970756, 52970757</td>
                <td>021-5250208 Ext. 52003</td>
              </tr>
              <tr>
                <th scope="row">Direktorat Pemeriksaan dan Penagihan</th>
                <td>Jalan Gatot Subroto Kav. 40-42, Gedung Utama Lt.15, Jakarta, 12190</td>
                <td>021-5736093</td>
                <td>  021-5250208 ext. 51508, 51555</td>
              </tr>
              <tr>
                <th scope="row">Direktorat Penegakan Hukum</th>
                <td>Jalan Gatot Subroto Kav. 40-42, Gedung Utama Lt.13, Jakarta Selatan, 12190</td>
                <td>021-5272726</td>
                <td> 021-5250208 Ext. 51335, 51333</td>
              </tr>
              <tr>
                <th scope="row">Direktorat Penyuluhan, Pelayanan dan Hubungan Masyarakat</th>
                <td>Jalan Gatot Subroto Kav. 40-42, Gedung Utama Lt.16, Jakarta, 12190</td>
                <td>021-5736176</td>
                <td>021-5250208 Ext. 51261, 51262</td>
              </tr>
              <tr>
                <th scope="row">Direktorat Peraturan Perpajakan I</th>
                <td>Jalan Gatot Subroto Kav. 40-42, Gedung Utama Lt.9, Jakarta, 12190</td>
                <td>021-5736132</td>
                <td>021-5250208 ext. 50948,50949</td>
              </tr>
              <tr>
                <th scope="row">Direktorat Peraturan Perpajakan II</th>
                <td>Jalan Gatot Subroto Kav. 40-42, Gedung Utama Lt.11, Jakarta, 12190</td>
                <td>021-52921037  </td>
                <td>  021-52921037 Ext. 51130, 51160</td>
              </tr>
            </tbody>
          </table>

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
            <p><a class="text-white" href="unit">Unit kerja DJP</a></p>
            <p><a class="text-dark" href="struktur">Struktur Kerja Organisasi</a></p>
            <P><a class="text-dark" href="pejabat">Profil Pejabat</a></P>
          </div>
        </div>
      </div>
    </div>
    <a class="btn btn-primary" href="homee">Kembali</a>
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