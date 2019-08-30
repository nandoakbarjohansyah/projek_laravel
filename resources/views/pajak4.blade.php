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
    <img src="../asset/brand.png">
    <img src="../asset/logo.png" class="d-inline-block  mx-auto d-block text-center" style="height: 150px;">
    <p class="d-inline-block  mx-auto d-block text-center pb-3" style="color: white; font-size: 40px;">Direktorat Jenderal Pajak</p>
  </div>
  <!-- header -->
  <!-- content -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="container-fluid shadow">
          <h3 class="text-center pt-3">Peraturan Direktur Jenderal Pajak Nomor PER-02/PJ/2019</h3>
          <hr style="width: 50%;">
          <p class="pt-3 pb-3" style="text-indent: 50px; text-align: justify;">
            Menetapkan :

            PERATURAN DIREKTUR JENDERAL PAJAK TENTANG TATA CARA PENYAMPAIAN, PENERIMAAN, DAN PENGOLAHAN SURAT PEMBERITAHUAN.
            <p class="text-center pt-2">
              Pasal 1
              <hr style="width: 30%; border-color: black;">
            </p>
            <p class="pb-3 pt-2 pl-2 pr-2">
              Dalam Peraturan Direktur Jenderal ini, yang dimaksud dengan:<br><br>

              1.  
              Wajib Pajak adalah meliputi pembayar orang pribadi pajak, pemotong atau pajak, badan,dan pemungut pajak, yang mempunyai hak dan kewajiban perpajakan sesuru dengan ketentuan peraturan perundang-undangan perpajakan.<br><br>
              2.  Pengusaha Kena Pajak yang selanjutnya disebut dengan PKP adalah pengusaha yang melakukan penyerahan Barang Kena Pajak dan / atau penyerahan Jasa Kena Pajak yang dikenai pajak berdasarkan  Undang-Undang PPN Tahun 1984 dan  perubahannya.<br><br>
              3.  Pemungut Pajak Pertambahan Nilai yang selanjutnya disebut dengan Pemungut PPN adalah bendahara pemerintah, badan, atau instansi pemerintah yang ditunjuk oleh Menteri Keuangan untuk memungut, menyetor, dan melaporkan pajak yang terutang oleh Pengusaha Kena Pajak atas penyerahan Barang Kena Pajak dan / atau penyerahan Jasa Kena Pajak kepada bendahara pemerintah, badan, atau instansi pemerintah tersebut.<br><br>
              4.  Surat Pemberitahuan yang selanjutnya disebut SPT adalah surat yang oleh Wajib Pajak digunakan untuk melaporkan penghitungan dan/atau pembayaran pajak, objek pajak dan / atau bukan objek pajak, dan / atau harta dan kewajiban sesuai dengan ketentuan peraturan perundang-undangan perpajakan.<br><br>
              5.  Surat Pemberitahuan Tahunan Pajak Penghasilan yang selanjutnya disebut SPT Tahunan PPh adalah SPT PPh untuk suatu Tahun Pajak atau Bagian Tahun Pajak, yang meliputi SPT Tahunan Orang Pribadi dan SPT Tahunan Badan<br><br>
              6.  SPT Masa adalah Surat Pemberitahuan untuk suatu Masa Pajak.
              <br><br>7.  
              SPT Pembetulan adalah SPT yang disampaikan Wajib Pajak dalam rangka membetulkan SPT yang telah disampaikan sebelumnya.
              <br><br> 8.  e-Filing adalah cara penyampaian SPT melalui saluran tertentu yang ditetapkan  Direktur Jenderal  Pajak.
              <br><br>9.  SPT e-Filing adalah SPT dalam bentuk dokumen elektronik yang disampaikan Wajib Pajak melalui e-Filing.
              <br><br> 10. Tempat Pelayanan Terpadu yang selanjutnya disebut TPT adalah tempat pelayanan perpajakan  yang  terintegrasi pada Kantor Pelayanan Pajak (KPP) termasuk Kantor Pelayanan, Penyuluhan , dan Konsultasi Perpajakan (KP2KP);
              <br><br>11. 
              Layanan Pajak di Luar Kantor adalah tempat pelaksanaan sebagian tugas pelayanan perpajakan berupa penyuluhan, pelayanan, dan konsultasi perpajakan bagi masyarakat atau Wajib Pajak dalam melaksanakan pemenuhan hak dan kewajiban perpajakan yang bertempat di lokasi atau daerah tertentu dalam wilayah kerja Kantor Pelayanan Pajak atau Kantor Pelayanan, Penyuluhan, dan Konsultasi Perpajakan yang dilaksanakan di luar kantor baik secara manual maupun menggunakan sistem informasi Direktorat Jenderal Pajak.
              <br><br>12. Penyalur SPT Elektronik adalah pihak yang ditunjuk oleh Direktur Jenderal Pajak untuk menyalurkan SPT dalam bentuk dokumen elektronik ke Direktorat Jenderal Pajak melalui laman Penyalur SPT Elektronik.
              <br><br>13. Perusahaan jasa ekspedisi atau jasa kurir adalah perusahaan yang berbentuk badan hukum yang memberikan jasa pengiriman surat jenis tertentu termasuk pengiriman SPT ke Direktorat Jenderal Pajak.
              <br><br>14. Penelitian dalam Penerimaan SPT yang selanjutnya disebut Penelitian SPT adalah serangkaian kegiatan yang dilakukan untuk menilai kelengkapan pengisian SPT dan lampiran-lampirannya.
              <br><br>15. Pengolahan SPT adalah serangkaian kegiatan yang meliputi  validasi data, perekaman,  dan  pengemasan SPT.
              <br><br>16. 
              Perekaman SPT adalah serangkaian kegiatan yang dilakukan untuk memasukkan semua unsur SPT ke dalam basis data perpajakan dengan cara antara lain merekam, mengunggah (upload), dan/ atau memindai (scan).
              17. Unit Pengolahan Data dan Dokumen Perpajakan yang selanjutnya disebut UPDDP adalah unit pelaksana teknis yang melaksanakan  fungsi  pengolahan  data  dan dokumen perpajakan, meliputi Pusat Pengolahan  Data dan Dokumen Perpajakan (PPDDP) serta Kantor Pengolahan Data dan Dokumen Perpajakan (KPDDP).

            </p>
            <p class="text-center pt-2">
              Pasal 2
              <hr style="width: 30%; border-color: black;">
            </p>
            <p class="pb-3 pt-2 pl-2 pr-2">

              1.  
              Setiap Wajib Pajak wajib mengisi SPT dengan benar, lengkap, dan jelas, dalam bahasa Indonesia dengan menggunakan huruf Latin, angka Arab, satuan mata uang Rupiah, dan menandatangani serta menyampaikannya ke KPP, atau tempat lain yang ditetapkan oleh Direktur Jenderal Pajak. <br><br>
              2.  Wajib Pajak badan yang diizinkan untuk menyelenggarakan pembukuan dengan menggunakan bahasa Inggris dan satuan mata uang Dollar Amerika Serikat, wajib menyampaikan SPT PPh Wajib Pajak badan beserta lampirannya dalam bahasa Indonesia kecuali lampiran berupa laporan keuangan, dan menggunakan satuan mata uang  Dollar Amerika Serikat.
            </p>
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
              <p><a class="text-dark" href="">Selayang Pandang</a></p>
              <p><a class="text-dark" href="">Unit kerja DJP</a></p>
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