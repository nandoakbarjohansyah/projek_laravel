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
  border-radius: 4px;"><i class="fas fa-arrow-up text-dark"></i></button>

  <!--   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link btn btn-primary mr-2 text-white" href="home.html" target="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-primary mr-2 text-white" href="login.html" target="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-primary text-white" href="register.html" target="#">Register</a>
        </li>
      </ul>
    </div>
  </nav> -->
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
          <h3 class="text-center pt-3">Apa Itu Pajak?</h3>
          <hr style="width: 50%;">
          <p class="pt-3 pb-3" style="text-indent: 50px; text-align: justify;">Pajak adalah pungutan wajib yang dibayar rakyat untuk negara dan akan digunakan untuk kepentingan pemerintah dan masyarakat umum. Rakyat yang membayar pajak tidak akan merasakan manfaat dari pajak secara langsung, karena pajak digunakan untuk kepentingan umum, bukan untuk kepentingan pribadi. Pajak merupakan salah satu sumber dana pemerintah untuk melakukan pembangunan, baik pemerintah pusat maupun pemerintah daerah. Pemungutan pajak dapat dipaksakan karena dilaksanakan berdasarkan undang-undang.</p>
        </div><br>
        <div class="container-fluid shadow mt-3">
          <h3 class="text-center pt-3">Hak-Hak Wajib Pajak</h3>
          <hr style="width: 50%;">
          <p class="pt-3 pl-3 pr-3" style="text-indent: 50px; text-align: justify;"> pertama, hak atas kelebihan pembayaran pajak. Hak ini berarti bahwa jika pembayaran pajak yang dibayar/dipotong/dipungut lebih besar dari yang seharusnya terutang, WP memiliki hak untuk mendapatkan kembali kelebihan tersebut. Pengembalian kelebihan pembayaran pajak dapat diberikan dalam waktu 12 bulan sejak surat permohonan diterima secara lengkap.

          Kedua, hak kerahasiaan bagi wajib pajak. Dalam hal ini, WP memiliki hak untuk mendapat perlindungan kerahasiaan atas segala informasi yang telah disampaikan kepada Direktorat Jenderal Pajak (DJP) dalam rangka menjalankan ketentuan perpajakan.</p> 

          <p class="pl-3 pr-3" style="text-indent: 50px; text-align: justify;">Namun demikian, dalam rangka penyidikan, penuntutan atau dalam rangka kerja sama dengan instansi pemerintah lainnya, keterangan atau bukti tertulis dari atau tentang WP dapat diberikan atau diperlihatkan kepada pihak tertentu yang ditetapkan oleh Menteri Keuangan.

            Ketiga, dalam hal atau kondisi tertentu, WP dapat mengajukan permohonan pengangsuran atau penundaan pembayaran pajak. Keempat, dengan alasan tertentu, WP dapat menyampaikan perpanjangan penyampaian SPT Tahunan, baik Pajak Penghasilan (PPh) Badan maupun PPh Orang Pribadi. Kelima, dengan alasan tertentu, WP dapat mengajukan pengurangan besarnya angsuran PPh Pasal 25.

          Keenam, dalam kondisi tertentu, misalnya objek pajak terkena bencana alam, WP dapat mengajukan permohonan pengurangan atas Pajak Bumi dan Bangunan (PBB) terutang. Hak pengurangan PBB ini juga berlaku bagi WP yang merupakan anggota veteran pejuang kemerdekaan dan veteran pembela kemerdekaan. Ketujuh, WP dapat mengajukan permohonan pembebasan atas pemotongan/pemungutan PPh.</p>

          <p class="pl-3 pr-3 pb-3" style="text-indent: 50px; text-align: justify;">Kedelapan, hak pengembalian pendahuluan kelebihan pembayaran pajak. Dalam hal ini, WP
            yang telah memenuhi kriteria tertentu sebagai WP Patuh dapat diberikan pengembalian pendahuluan kelebihan pembayaran pajak, dalam jangka waktu paling lambat 1 bulan untuk Pajak Pertambahan Nilai (PPN) dan 3 bulan untuk PPh sejak tanggal permohonan.

          Kesembilan, hak untuk mendapatkan pajak ditanggung pemerintah. Terakhir, hak untuk memperoleh insentif perpajakan di bidang PPN. Barang Kena Pajak tertentu yang dibebaskan dari pengenaan PPN antara lain Kereta Api, Pesawat Udara, Kapal Laut, Buku-buku, perlengkapan TNI/POLRI yang diimpor maupun yang penyerahannya di dalam daerah pabean oleh WP tertentu. Selain itu, perusahaan yang melakukan kegiatan di kawasan tertentu seperti kawasan berikat, berhak mendapat fasilitas PPN Tidak Dipungut antara lain atas impor dan perolehan bahan baku.</p>
        </div><br>
        <div class="container-fluid shadow pb-3">
          <h3 class="text-center pt-3">Peraturan Perpajakan Pilihan</h3>
          <hr style="width: 50%;">
          <div class="card mb-2">
            <div class="card-body">
              <a class="text-dark" href="pajak1">Peraturan Dirjen Pajak Nomor PER-28/PJ/2015</a>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-body">
              <a class="text-dark" href="pajak2">Peraturan Menteri Keuangan Nomor 212/PMK.03/2018</a>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-body">
              <a class="text-dark" href="pajak3">Peraturan Direktur Jenderal Pajak Nomor PER-03/PJ/2019</a>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-body">
              <a class="text-dark" href="pajak4">Peraturan Direktur Jenderal Pajak Nomor PER-02/PJ/2019</a>
            </div>
          </div>
          <div class="card mb-2s">
            <div class="card-body">
              <a class="text-dark" href="pajak5">Peraturan Menteri Keuangan Nomor 210/PMK.10/2018</a>
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
            <P><a class="text-dark" href="penjabat">Profil Pejabat</a></P>
          </div>
        </div>
      </div>
    </div>
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
