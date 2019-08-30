@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3 class="text-center">FORMULIR PENDAFTARAN NPWP</h3>
    <div class="apa  d-inline-block  mx-auto d-block text-center"><img src="asset/logo.png" style="height: 150px;"></div>
    <form action="{{ route('admin.store') }}" method="Post" enctype="multipart/form-data">
        @csrf
<div class="container">
  
  <label>Jenis Pendaftaran : </label>
  <select class="form-control" name="jenis">
    <option>1. Permohonan Wajib Pajak</option>
    <option>2. Pendaftaran Secara Jabatan</option>
  </select>

  <br>
  <table>
    <tr>Kategori :</tr>
    <td>
      <select name="kategori">
        <option>1. Orang Pribadi</option>
        <option>2. Wanita yang telah hidup terpisah berdasarkan putusan hukum ( HB )</option>
        <option>3. Istri dengan perjanjian pemisahan harta dan penghasilan (
        PH )</option>
        <option>4. Istri memilih menjalankan hak dan kewajiban perpajakan
        terpisah ( MT )</option>
        <option> 5. Warisan yang belum terbagi sebagai satu kesatuan
        menggantikan yang berhak ( WHT )</option>
        <option>1. Orang Pribadi</option>
      </select>
    </td>
      
        <h5>A. IDENTITAS WAJIB PAJAK</h5>
        <table class="mt-lg-4">
          <tr>
            <td>Nama </td>
            <td>:</td>
            <td><input type="text" name="nama" id=""></td>
          </tr>
          <tr>
            <td>Gelar Depan</td>
            <td>:</td>
            <td><input type="text" name="gelardepan" id=""></td>
          </tr>
          <tr>
            <td>Gelar Belakang</td>
            <td>:</td>
            <td><input type="text" name="gelarbelakang" id=""></td>
          </tr>
          <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempatlahir" id=""></td>
          </tr>
          <tr>
            <td>Status Perkawinan</td>
            <td>:</td>
            <td><input type="text" name="status" id=""></td>
          </tr>
          <tr>
            <td>Kebangsaan </td>
            <td>:</td>
            <td><input type="text" name="kebangsaan" id=""></td>
          </tr>
          <tr>
            <td>NO Telp</td>
            <td>:</td>
            <td><input type="text" name="notelp" id=""></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email" id=""></td>
          </tr>
          <tr>
            <td>masukan gambar KTP</td>
            <td>:</td>
            <td><input type="file" name="gambar" id=""></td>
          </tr>
        </table>

<input type="submit" value="POST" class="btn btn-primary">

</form>
</div>



@endsection