@extends('landing.layout')

@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.css') }}" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Form Pendaftaran PPDB TP 2023-2024</div>
    <div class="content">
      <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nama Lengkap</span>
            <input name="namalengkap" type="text" placeholder="Masukkan Nama Lengkap" required>
          </div>
          <div class="input-box">
            <span class="details">NISN</span>
            <input name="nisn" type="text" placeholder="Masukkan NISN" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input name="email" type="text" placeholder="Masukkan Email" required>
          </div>
          <div class="input-box">
            <span class="details">Asal Sekolah</span>
                <select class="form-select" name="asalsekolah">
                    <option hidden>--Pilih Asal Sekolah--</option>
                    <option value="SMPN 1 Bogor">SMPN 1 Bogor</option>
                    <option value="SMPN 2 Bogor">SMPN 2 Bogor</option>
                    <option value="SMPN 3 Bogor">SMPN 3 Bogor</option>
                    <option value="SMP Amaliah">SMP Amaliah</option>
                    <option value="SMP Kesatuan Bogor">SMP Kesatuan Bogor</option>
                </select>
          </div>
          <div class="input-box">
            <span class="details">Nomor Handphone</span>
            <input name="no_hp" type="text" placeholder="Contoh : 08....." required>
          </div>
          <div class="input-box">
            <span class="details">Nomor HP Ayah</span>
            <input name="no_hp_ayah" type="text" placeholder="Contoh : 08....." required>
          </div>
          <div class="input-box">
            <span class="details">Nomor HP Ibu</span>
            <input name="no_hp_ibu" type="text" placeholder="Contoh : 08....." required>
          </div>
          <div class="input-box">
            <span class="details">Referensi</span>
                <select class="form-select" name="referensi">
                    <option hidden>--Pilih--</option>
                    <option value="Guru/Staff/Laboran/Pegawai Wikrama">Guru/Staff/Laboran/Pegawai Wikrama</option>
                    <option value="Siswa SMK Wikrama">Siswa SMK Wikrama</option>
                    <option value="Alumni SMK Wikrama">Alumni SMK Wikrama</option>
                    <option value="Guru SMP">Guru SMP</option>
                    <option value="Calon Siswa SMK Wikrama">Calon Siswa SMK Wikrama</option>
                    <option value="Sosial Media">Sosial Media</option>
                    <option value="Referensi Langsung">Referensi Langsung</option>
                </select>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="jk" id="dot-1">
          <input type="radio" name="jk" id="dot-2">
          <input type="radio" name="jk" id="dot-3">
          <span class="gender-title">Jenis Kelamin</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender" value="Laki-laki">Laki-laki</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender" value="Perempuan">Perempuan</span>
          </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Registrasi">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
