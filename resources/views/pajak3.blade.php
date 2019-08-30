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
          <h3 class="text-center pt-3">Peraturan Direktur Jenderal Pajak Nomor PER-03/PJ/2019</h3>
          <hr style="width: 50%;">
          <p class="pt-3 pb-3" style="text-indent: 50px; text-align: justify;">
            Menetapkan :

            PERATURAN DIREKTUR JENDERAL PAJAK TENTANG TATA CARA PEMBERIAN SURAT KETERANGAN FISKAL.
            <p class="text-center pt-2">
              Pasal 1
              <hr style="width: 30%; border-color: black;">
            </p>
            <p class="pb-3 pt-2 pl-2 pr-2">
              Dalam Peraturan Direktur Jenderal ini, yang dimaksud dengan:<br><br>

              Undang-Undang Ketentuan Umum dan Tata Cara Perpajakan yang selanjutnya disingkat Undang-Undang KUP adalah Undang-Undang Nomor 6 Tahun 1983 tentang Ketentuan Umum dan Tata Cara Perpajakan sebagaimana telah beberapa kali diubah terakhir dengan Undang-Undang Nomor 16 Tahun 2009. <br><br>
              Surat Keterangan Fiskal yang selanjutnya disingkat SKF adalah informasi yang diberikan oleh Direktorat Jenderal Pajak mengenai kepatuhan Wajib Pajak selama periode tertentu untuk memenuhi persyaratan memperoleh pelayanan atau dalam rangka pelaksanaan kegiatan tertentu.<br><br>
              Kantor Pelayanan Pajak yang selanjutnya disingkat KPP adalah instansi vertikal Direktorat Jenderal Pajak yang berada di bawah dan bertanggung jawab langsung kepada Kepala Kantor Wilayah Direktorat Jenderal Pajak.<br><br>
              Kantor Pelayanan, Penyuluhan, dan Konsultasi Perpajakan yang selanjutnya disingkat KP2KP adalah instansi vertikal Direktorat Jenderal Pajak yang berada di bawah dan bertanggung jawab langsung kepada Kepala KPP Pratama.<br><br>
              Utang Pajak adalah pajak yang masih harus dibayar termasuk sanksi administrasi berupa bunga, denda, atau kenaikan yang tercantum dalam surat ketetapan pajak atau surat sejenisnya berdasarkan ketentuan peraturan perundang-undangan di bidang perpajakan.<br><br>
              Wajib Pajak Berstatus Pusat yang selanjutnya disebut Wajib Pajak Pusat adalah Wajib Pajak yang terdaftar di KPP dan memiliki Nomor Pokok Wajib Pajak dengan kode 3 (tiga) digit terakhirnya adalah 000.
              Wajib Pajak Berstatus Cabang yang selanjutnya disebut Wajib Pajak Cabang adalah Wajib Pajak yang terdaftar di KPP yang memiliki Nomor Pokok Wajib Pajak sama dengan Wajib Pajak Pusat untuk kode 9 (sembilan) digit pertama dan dengan kode 3 (tiga) digit terakhirnya selain 000.
              Kode Verifikasi SKF adalah kode yang digunakan untuk memverifikasi kebenaran SKF.
            </p>
            <p class="text-center pt-2">
              Pasal 2
              <hr style="width: 30%; border-color: black;">
            </p>
            <p class="pb-3 pt-2 pl-2 pr-2">

              (1) Wajib Pajak yang memerlukan SKF untuk mendapatkan pelayanan tertentu dan/atau pelaksanaan kegiatan tertentu dari Kementerian/Lembaga atau pihak lain, dapat memperoleh SKF dengan mengajukan permohonan melalui laman Direktorat Jenderal Pajak. <br><br>
              (2) Dalam hal Wajib Pajak tidak mengakses laman sebagaimana dimaksud pada ayat (1), Wajib Pajak dapat mengajukan permohonan tertulis penerbitan SKF secara langsung ke KPP/KP2KP yang ditujukan kepada Direktur Jenderal Pajak c.q. Kepala KPP tempat permohonan diajukan. <br><br>
              (3) Permohonan tertulis sebagaimana dimaksud pada ayat (2) ditandatangani oleh:
              Wajib Pajak orang pribadi yang bersangkutan; atau
              pimpinan tertinggi Wajib Pajak badan atau pengurus yang diberikan wewenang untuk menjalankan kegiatan perusahaan yang berkaitan dengan perpajakan, yang dibuktikan dengan fotokopi akta pendirian atau dokumen pendukung lainnya. <br><br>
              (4) Permohonan tertulis sebagaimana dimaksud pada ayat (3) dapat disampaikan oleh Wajib Pajak atau melalui kuasa/pihak yang ditunjuk sesuai dengan ketentuan peraturan perundang-undangan di bidang perpajakan.<br><br>
              (5) Dokumen meliputi:
              SKF sebagaimana dimaksud pada ayat (1) dibuat sesuai dengan format tercantum dalam Lampiran huruf A; dan
              Permohonan SKF secara tertulis sebagaimana dimaksud pada ayat (2) dibuat sesuai dengan format tercantum dalam Lampiran huruf B,
              yang merupakan bagian tidak terpisahkan dari Peraturan Direktur Jenderal ini.
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