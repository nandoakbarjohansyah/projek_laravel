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
          <h3 class="text-center pt-3">Peraturan Menteri Keuangan Nomor 212/PMK.03/2018</h3>
          <hr style="width: 50%;">
          <p class="pt-3 pb-3" style="text-indent: 50px; text-align: justify;">
            Menetapkan  : PERATURAN MENTERI KEUANGAN TENTANG PEMOTONGAN PAJAK PENGHASILAN ATAS BUNGA DEPOSITO DAN TABUNGAN SERTA DISKONTO SERTIFIKAT BANK INDONESIA.
            <p class="text-center pt-2">
              Pasal 1
              <hr style="width: 30%; border-color: black;">
            </p>
            <p class="pb-3 pt-2 pl-2 pr-2">
              Dalam Peraturan Menteri ini yang dimaksud dengan: <br><br>
              1.  
              Deposito adalah Deposito dengan nama dan dalam bentuk apapun, baik dalam mata uang Rupiah maupun dalam mata uang asing yang ditempatkan pada atau diterbitkan oleh bank sebagaimana dimaksud dalam ketentuan peraturan perundang-undangan tentang Perbankan.<br><br>


              2.
              Tabungan adalah simpanan yang penarikannya hanya dapat dilakukan menurut syarat tertentu yang disepakati, tetapi tidak dapat ditarik dengan cek atau alat yang dapat dipersamakan dengan itu sebagaimana dimaksud dalam ketentuan peraturan perundang-undangan tentang Perbankan.<br><br>


              3.
              Giro adalah simpanan yang penarikannya dapat dilakukan setiap saat dengan menggunakan cek, bilyet giro, sarana perintah pembayaran lainnya, atau dengan pemindahbukuan sebagaimana dimaksud dalam ketentuan peraturan perundang-undangan tentang Perbankan.<br><br>


              4.
              Sertifikat Bank Indonesia yang selanjutnya disingkat SBI adalah surat berharga dalam mata uang Rupiah yang diterbitkan oleh Bank Indonesia sebagai pengakuan utang berjangka waktu pendek sebagaimana dimaksud dalam ketentuan yang mengatur tentang Operasi Moneter.<br><br>

              5.  Diskonto Sertifikat Bank Indonesia atau yang selanjutnya disebut Diskonto SBI adalah selisih lebih antara:<br><br>
              a.  
              nilai nominal SBI pada saat jatuh tempo dengan nilai tunai perolehan SBI; atau
              <br><br>


              b.
              nilai tunai penjualan SBI dengan nilai tunai perolehan SBI.

              <br><br>
              6.
              Eksportir adalah orang perseorangan, badan hukum, atau badan lainnya yang tidak berbadan hukum yang melakukan kegiatan mengeluarkan barang dari daerah pabean termasuk melalui Perusahaan Jasa Titipan atau pihak-pihak yang tunduk kepada kontrak kerja sama minyak dan gas bumi sebagaimana dimaksud dalam ketentuan yang mengatur tentang Devisa Hasil Ekspor.

              <br><br>
              7.
              Devisa Hasil Ekspor yang selanjutnya disingkat DHE adalah devisa dari hasil kegiatan ekspor sebagaimana dimaksud dalam ketentuan yang mengatur tentang Penerimaan Devisa Hasil Ekspor dan Penarikan Devisa Utang Luar Negeri.

              <br><br>
              8.
              Deposito Devisa Hasil Ekspor yang selanjutnya disingkat Deposito DHE adalah Deposito yang dananya bersumber dari Devisa Hasil Ekspor.

              <br><br>
              9.
              Pajak Penghasilan yang bersifat final adalah Pajak Penghasilan dengan pengaturan khusus yang tidak dapat diperhitungkan terhadap Pajak Penghasilan yang dikenakan berdasarkan ketentuan umum.
            </p>
            <p class="text-center pt-2">
              Pasal 2
              <hr style="width: 30%; border-color: black;">
            </p>
            <p class="pb-3 pt-2 pl-2 pr-2">
              (1) Terhadap Penghasilan berupa bunga yang diterima atau diperoleh dari Deposito dan Tabungan serta Diskonto SBI dipotong Pajak Penghasilan yang bersifat final. <br><br>

              (2) Termasuk bunga yang dipotong Pajak Penghasilan sebagaimana dimaksud pada ayat (1) merupakan bunga yang diterima atau diperoleh dari Deposito dan Tabungan yang ditempatkan di luar negeri melalui bank yang didirikan atau bertempat kedudukan di Indonesia atau cabang bank luar negeri di Indonesia.<br><br>
              
              (3) Ketentuan sebagaimana dimaksud pada ayat (1) tidak berlaku terhadap orang pribadi Subjek Pajak Dalam Negeri yang seluruh penghasilannya dalam 1 (satu) Tahun Pajak, termasuk bunga dan diskonto, tidak melebihi Penghasilan Tidak Kena Pajak.<br><br>
              
              (4) Orang pribadi sebagaimana dimaksud pada ayat (3) dapat mengajukan permohonan pengembalian pajak yang tidak seharusnya terutang atas pajak yang telah dipotong sebagaimana dimaksud pada ayat (1).
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
              <p><a class="text-dark" href="struktur">Sruktur Kerja Organisasi</a></p>
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