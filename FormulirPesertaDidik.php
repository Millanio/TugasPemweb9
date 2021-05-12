<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
    .warning {color: #FF0000;}
</style>
</head>
<body> 
<?php 
$error_tgl = "";
$error_jp ="";
$error_tglmk = "";
$error_nis = "";
$error_noujian = "";
$error_paud = "";
$error_tk = "";
$error_skhun = "";
$error_ijazah = "";
$error_hobi = "";
$error_citacita = "";
$error_nama = "";
$error_jk = "";
$error_nisn = "";
$error_nik = "";
$error_tmpl = "";
$error_tgll = "";
$error_agama = "";
$error_berkhus = "";
$error_alamat = "";
$error_rt = "";
$error_rw = "";
$error_dusun = "";
$error_desa = "";
$error_camat = "";
$error_kodepos = "";
$error_tmptinggal = "";
$error_transport = "";
$error_nohp = "";
$error_notelp = "";
$error_email = "";
$error_kps = "";
$error_nokps = "";
$error_kwn = "";
$error_negara = "";

$tgl="";
$jp = "";
$tglmk="";
$nis="";
$noujian="";
$paud="";
$tk="";
$skhun="";
$ijazah="";
$hobi = "";
$citacita = "";
$nama = "";
$jk = "";
$nisn = "";
$nik = "";
$tmpl = "";
$tgll = "";
$agama = "";
$berkhus = "";
$alamat = "";
$rt = "";
$rw = "";
$dusun = "";
$desa = "";
$camat = "";
$kodepos = "";
$tmptinggal = "";
$transport = "";
$nohp = "";
$notelp = "";
$email = "";
$kps = "";
$nokps = "";
$kwn = "";
$negara = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["tgl"]))
    {
        $error_tgl="Tidak boleh kosong";
    }
    else
    {
        $tgl = cek_input($_POST["tgl"]);
    }
    if (empty($_POST["jp"]))
    {
        $error_jp="Tidak boleh kosong";
    }
    else
    {
        $jp = cek_input($_POST["jp"]);
    }
    if (empty($_POST["tglmk"]))
    {
        $error_tglmk="Tidak boleh kosong";
    }
    else
    {
        $tglmk = cek_input($_POST["tglmk"]);
    }
    if (empty($_POST["nis"]))
    {
        $error_nis = "NIS tidak boleh kosong";
    }
    else
    {
        $nis = cek_input($_POST["nis"]);
        if (!is_numeric($nis))
        {
            $error_nis = 'Nomor NIS hanya boleh angka';
        }
    }
    if (empty($_POST["noujian"]))
    {
        $error_noujian = "Nomor Ujian tidak boleh kosong";
    }
    else
    {
        $noujian = cek_input($_POST["noujian"]);
        if (!is_numeric($noujian))
        {
            $error_noujian = 'Nomor Ujian hanya boleh angka';
        }
    }
    if (empty($_POST["paud"]))
    {
        $error_paud="Tidak boleh kosong";
    }
    else
    {
        $paud = cek_input($_POST["paud"]);
    }
    if (empty($_POST["tk"]))
    {
        $error_tk="Tidak boleh kosong";
    }
    else
    {
        $tk = cek_input($_POST["tk"]);
    }
    if (empty($_POST["skhun"]))
    {
        $error_skhun = "Nomor SKHUN tidak boleh kosong";
    }
    else
    {
        $skhun = cek_input($_POST["skhun"]);
        if (!is_numeric($skhun))
        {
            $error_skhun = 'Nomor SKHUN hanya boleh angka';
        }
    }
    if (empty($_POST["ijazah"]))
    {
        $error_ijazah = "Nomor Ijazah tidak boleh kosong";
    }
    else
    {
        $ijazah = cek_input($_POST["ijazah"]);
        if (!is_numeric($ijazah))
        {
            $error_ijazah = 'Nomor Ijazah hanya boleh angka';
        }
    }
    if (empty($_POST["hobi"]))
    {
        $error_hobi="Tidak boleh kosong";
    }
    else
    {
        $hobi = cek_input($_POST["hobi"]);
    }
    if (empty($_POST["citacita"]))
    {
        $error_citacita="Tidak boleh kosong";
    }
    else
    {
        $citacita = cek_input($_POST["citacita"]);
    }
    if (empty($_POST["nama"]))
    {
      $error_nama = "Nama tidak boleh kosong";
    }
    else
    {
      $nama = cek_input($_POST["nama"]);
      if (!preg_match("/^[a-zA-Z]*$/",$nama))
      {
          $namaErr = "Inputan Hanya boleh huruf dan spasi";
      }
    }
    if (empty($_POST["jk"]))
    {
        $error_jk="Tidak boleh kosong";
    }
    else
    {
        $jk = cek_input($_POST["jk"]);
    }
    if (empty($_POST["nisn"]))
    {
        $error_nisn = "Nomor NISN tidak boleh kosong";
    }
    else
    {
        $nisn = cek_input($_POST["nisn"]);
        if (!is_numeric($nisn))
        {
            $error_skhun = 'Nomor NISN hanya boleh angka';
        }
    }
    if (empty($_POST["nik"]))
    {
        $error_nik = "Nomor NIK tidak boleh kosong";
    }
    else
    {
        $nik = cek_input($_POST["nik"]);
        if (!is_numeric($nik))
        {
            $error_nik = 'Nomor NIK hanya boleh angka';
        }
    }
    if (empty($_POST["tmpl"]))
    {
        $error_tmpl="Tidak boleh kosong";
    }
    else
    {
        $tmpl = cek_input($_POST["tmpl"]);
    }
    if (empty($_POST["tgll"]))
    {
        $error_tgll="Tidak boleh kosong";
    }
    else
    {
        $tgll = cek_input($_POST["tgll"]);
    }
    if (empty($_POST["agama"]))
    {
        $error_agama="Tidak boleh kosong";
    }
    else
    {
        $agama = cek_input($_POST["agama"]);
    }
    if (empty($_POST["berkhus"]))
    {
        $error_berkhus="Tidak boleh kosong";
    }
    else
    {
        $berkhus = cek_input($_POST["berkhus"]);
    }
    if (empty($_POST["alamat"]))
    {
        $error_alamat="Tidak boleh kosong";
    }
    else
    {
        $alamat = cek_input($_POST["alamat"]);
    }
    if (empty($_POST["rt"]))
    {
        $error_rt="Tidak boleh kosong";
    }
    else
    {
        $rt = cek_input($_POST["rt"]);
    }
    if (empty($_POST["rw"]))
    {
        $error_rw="Tidak boleh kosong";
    }
    else
    {
        $rw = cek_input($_POST["rw"]);
    }
    if (empty($_POST["dusun"]))
    {
        $error_dusun="Tidak boleh kosong";
    }
    else
    {
        $dusun = cek_input($_POST["dusun"]);
    }
    if (empty($_POST["desa"]))
    {
        $error_desa="Tidak boleh kosong";
    }
    else
    {
        $desa = cek_input($_POST["desa"]);
    }
    if (empty($_POST["camat"]))
    {
        $error_camat="Tidak boleh kosong";
    }
    else
    {
        $camat = cek_input($_POST["camat"]);
    }
    if (empty($_POST["kodepos"]))
    {
        $error_kodepos = "Nomor Kodepos tidak boleh kosong";
    }
    else
    {
        $kodepos = cek_input($_POST["kodepos"]);
        if (!is_numeric($kodepos))
        {
            $error_kodepos = 'Nomor NIK hanya boleh angka';
        }
    }
    if (empty($_POST["tmptinggal"]))
    {
        $error_tmptinggal="Tidak boleh kosong";
    }
    else
    {
        $tmptinggal = cek_input($_POST["tmptinggal"]);
    }
    if (empty($_POST["transport"]))
    {
        $error_transport="Tidak boleh kosong";
    }
    else
    {
        $transport = cek_input($_POST["transport"]);
    }
    if (empty($_POST["nohp"]))
    {
        $error_nohp = "Nomor HP tidak boleh kosong";
    }
    else
    {
        $nohp = cek_input($_POST["nohp"]);
        if (!is_numeric($nohp))
        {
            $error_nohp = 'Nomor NP hanya boleh angka';
        }
    }
    if (empty($_POST["notelp"]))
    {
        $error_notelp = "Nomor Telepon tidak boleh kosong";
    }
    else
    {
        $notelp = cek_input($_POST["notelp"]);
        if (!is_numeric($notelp))
        {
            $error_notelp = 'Nomor Telepon hanya boleh angka';
        }
    }
    if (empty($_POST["email"]))
    {
      $error_email = "Email tidak boleh kosong";
    }
    else 
    {
      $email = cek_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL))
      {
          $error_email = "Format email Invalid";
      }
    }
    if (empty($_POST["kps"]))
    {
        $error_kps="Tidak boleh kosong";
    }
    else
    {
        $kps = cek_input($_POST["kps"]);
    }
    if (empty($_POST["nokps"]))
    {
        $error_nokps = "Nomor KPS tidak boleh kosong";
    }
    else
    {
        $nokps = cek_input($_POST["nokps"]);
        if (!is_numeric($nokps))
        {
            $error_nokps = 'Nomor KPS hanya boleh angka';
        }
    }
    if (empty($_POST["kwn"]))
    {
        $error_kwn="Tidak boleh kosong";
    }
    else
    {
        $kwn = cek_input($_POST["kwn"]);
    }
    if (empty($_POST["negara"]))
    {
      $error_negara = "Negara tidak boleh kosong";
    }
    else
    {
      $negara = cek_input($_POST["negara"]);
      if (!preg_match("/^[a-zA-Z]*$/",$negara))
      {
          $error_negara = "Inputan Hanya boleh huruf dan spasi";
      }
    }
}
function cek_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
   }
?>

<div class="row"> 
<div class="col-md-6"> 
<div class="card"> 
 <div class="card-header">
  Formulir Peserta Didik 
 </div>
 <div class="card-body"> 
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

   <div class="form-group row">
     <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
     <div class="col-sm-10">
      <input type="date" name="tgl" class="form-control <?php echo ($error_tgl !="" ? "is-invalid" : ""); ?>" id="
      tgl" placeholder="Tanggal" value="<?php echo $tgl; ?>"><span class="warning"><?php echo $error_tgl; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="jp" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
     <div class="col-xs-3 form-check">
      <input type="radio" name="jp" class="form-check-input <?php echo ($error_jp !="" ? "is-invalid" : ""); ?>" id="
      jp"  value="Siswa Baru" checked="">Siswa Baru <br>
      <input type="radio" name="jp" class="form-check-input <?php echo ($error_jp !="" ? "is-invalid" : ""); ?>" id="
      jp"  value="Pindahan" checked="">Pindahan<br>
      <span class="warning"><?php echo $error_jp; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="tglmk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
     <div class="col-sm-10">
      <input type="date" name="tglmk" class="form-control <?php echo ($error_tglmk !="" ? "is-invalid" : ""); ?>" id="
      tglmk" placeholder="Tanggal Masuk" value="<?php echo $tglmk; ?>"><span class="warning"><?php echo $error_tglmk; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="nis" class="col-sm-2 col-form-label">NIS</label>
     <div class="col-sm-10">
      <input type="text" name="nis" class="form-control <?php echo ($error_nis !="" ? "is-invalid" : ""); ?>" id="
      nis" placeholder="NIS" value="<?php echo $nis; ?>"><span class="warning"><?php echo $error_nis; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="noujian" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
     <div class="col-sm-10">
      <input type="text" name="noujian" class="form-control <?php echo ($error_noujian !="" ? "is-invalid" : ""); ?>" id="
      noujian" placeholder="Nomor Peserta Ujian" value="<?php echo $noujian; ?>"><span class="warning"><?php echo $error_noujian; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="paud" class="col-sm-2 col-form-label">Apakah Pernah PAUD</label>
     <div class="col-xs-3 form-check">
      <input type="radio" name="paud" class="form-check-input <?php echo ($error_paud !="" ? "is-invalid" : ""); ?>" id="
      paud"  value="Ya Pernah PAUD" checked="">Ya <br>
      <input type="radio" name="paud" class="form-check-input <?php echo ($error_paud !="" ? "is-invalid" : ""); ?>" id="
      paud"  value="Tidak Pernah PAUD" checked="">Tidak<br>
      <span class="warning"><?php echo $error_paud; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="tk" class="col-sm-2 col-form-label">Apakah Pernah TK</label>
     <div class="col-xs-3 form-check">
      <input type="radio" name="tk" class="form-check-input <?php echo ($error_tk !="" ? "is-invalid" : ""); ?>" id="
      tk"  value="Iya Pernah TK" checked="">Ya <br>
      <input type="radio" name="tk" class="form-check-input <?php echo ($error_tk !="" ? "is-invalid" : ""); ?>" id="
      tk"  value="Tidak Pernah TK" checked="">Tidak<br>
      <span class="warning"><?php echo $error_tk; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="skhun" class="col-sm-2 col-form-label">No. Seri SKHUN Sebelumnya</label>
     <div class="col-sm-10">
      <input type="text" name="skhun" class="form-control <?php echo ($error_skhun !="" ? "is-invalid" : ""); ?>" id="
      skhun" placeholder="No. Seri SKHUN" value="<?php echo $skhun; ?>"><span class="warning"><?php echo $error_skhun; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="ijazah" class="col-sm-2 col-form-label">No. Seri Ijazah Sebelumnya</label>
     <div class="col-sm-10">
      <input type="text" name="ijazah" class="form-control <?php echo ($error_ijazah !="" ? "is-invalid" : ""); ?>" id="
      ijazah" placeholder="No. Seri Ijazah" value="<?php echo $ijazah; ?>"><span class="warning"><?php echo $error_ijazah; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="hobi" class="col-sm-4 col-form-label">Hobi</label>
     <div class="col-sm-16 form-check">
      <select class="form-control" id="hobi" name="hobi">
       <option value="Olahraga">Olah Raga</option>
       <option value="Kesenian">Kesenian</option>
       <option value="Membaca">Membaca</option>
       <option value="Menulis">Menulis</option>
       <option value="Travelin">Travelin</option>
       <option value="Hobi Lainnya">Lainnya</option>
      </select><span class="warning"><?php echo $error_hobi; ?></span>       
     </div> 
   </div>  

   <div class="form-group row">
     <label for="citacita" class="col-sm-4 col-form-label">Cita cita</label>
     <div class="col-sm-16 form-check">
      <select class="form-control" id="citacita" name="citacita">
       <option value="PNS">PNS</option>
       <option value="TNI">TNI/POLRI</option>
       <option value="Guru/Dosen">Guru/Dosen</option>
       <option value="Dokter">Dokter</option>
       <option value="Politikus">Politikus</option>
       <option value="Wiraswasta">Wiraswasta</option>
       <option value="Seni/Lukis/Artis/Sejenis">Seni/Lukis/Artis/Sejenis</option>
       <option value="Cita - cita Lainnya">Lainnya</option>
      </select><span class="warning"><?php echo $error_citacita; ?></span>       
     </div> 
   </div>  

   <div class="form-group row">
     <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
     <div class="col-sm-10">
      <input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="
      nama" placeholder="Nama" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
     <div class="col-xs-3 form-check">
      <input type="radio" name="jk" class="form-check-input <?php echo ($error_jk !="" ? "is-invalid" : ""); ?>" id="
      jk"  value="Laki - laki" checked="">Laki - laki <br>
      <input type="radio" name="jk" class="form-check-input <?php echo ($error_jk !="" ? "is-invalid" : ""); ?>" id="
      jk"  value="Perempuan" checked="">Perempuan<br>
      <span class="warning"><?php echo $error_jk; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
     <div class="col-sm-10">
      <input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" id="
      nisn" placeholder="NISN" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="nik" class="col-sm-2 col-form-label">NIK</label>
     <div class="col-sm-10">
      <input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" id="
      nik" placeholder="NIK" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="tmpl" class="col-sm-2 col-form-label">Tempat Lahir</label>
     <div class="col-sm-10">
      <input type="text" name="tmpl" class="form-control <?php echo ($error_tmpl !="" ? "is-invalid" : ""); ?>" id="
      tmpl" placeholder="Tempat Lahir" value="<?php echo $tmpl; ?>"><span class="warning"><?php echo $error_tmpl; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="tgll" class="col-sm-2 col-form-label">Tanggal Lahir</label>
     <div class="col-sm-10">
      <input type="date" name="tgll" class="form-control <?php echo ($error_tgll !="" ? "is-invalid" : ""); ?>" id="
      tgll" placeholder="Tanggal Lahir" value="<?php echo $tgll; ?>"><span class="warning"><?php echo $error_tgll; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="agama" class="col-sm-4 col-form-label">Agama</label>
     <div class="col-sm-16 form-check">
      <select class="form-control" id="agama" name="agama">
       <option value="Islam">Islam</option>
       <option value="Kristen">Kristen/Protestan</option>
       <option value="Katholik">Katholik</option>
       <option value="Hindu">Hindu</option>
       <option value="Budha">Budha</option>
       <option value="Khonghucu">Khong Hu Chu</option>
       <option value="Agama Lainnya">Lainnya</option>
      </select><span class="warning"><?php echo $error_agama; ?></span>       
     </div> 
   </div> 

   <div class="form-group row">
     <label for="berhkus" class="col-sm-4 col-form-label">Berkebutuhan Khusus</label>
     <div class="col-sm-16 form-check">
      <select class="form-control" id="berkhus" name="berkhus">
       <option value="Tidak">Tidak</option>
       <option value="Netra (A)">Netra (A)</option>
       <option value="Rungu (B)">Rungu (B)</option>
       <option value="Grahita Ringan (C)">Grahita Ringan (C)</option>
       <option value="Grahita Sedang (C1)">Grahita Sedang (C1)</option>
       <option value="Daksa Ringan (D)">Daksa Ringan (D)</option>
       <option value="Daksa Sedang (D1)">Daksa Sedang (D1)</option>
       <option value="Laras (E)">Laras (E)</option>
       <option value="Wicara (F)">Wicara (F)</option>
       <option value="Tuna Ganda (G)">Tuna Ganda (G)</option>
       <option value="Hiper Aktif (H)">Hiper Aktif (H)</option>
       <option value="Cerdas Istimewa (I)">Cerdas Istimewa (I)</option>
       <option value="Bakat Istimewa (J)">Bakat Istimewa (J)</option>
       <option value="Kesulitan Belajar (K)">Kesulitan Belajar (K)</option>
       <option value="Narkoba (N)">Narkoba (N)</option>
       <option value="Indigo (O)">Indigo (O)</option>
       <option value="Down Sindrome (P)">Down Sindrome (P)</option>
       <option value="Autis (Q)">Autis (Q)</option>
      </select><span class="warning"><?php echo $error_berkhus; ?></span>       
     </div> 
   </div>  

    <div class="form-group row">
     <label for="alamat" class="col-sm-2 col-form-label">Alamat Jalan</label>
     <div class="col-sm-10">
      <input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" id="
      alamat" placeholder="Alamat Jalan" value="<?php echo $alamat; ?>"><span class="warning"><?php echo $error_alamat; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="rt" class="col-sm-2 col-form-label">RT</label>
     <div class="col-sm-10">
      <input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>" id="
      rt" placeholder="RT" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="rw" class="col-sm-2 col-form-label">RW</label>
     <div class="col-sm-10">
      <input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>" id="
      rw" placeholder="RW" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="dusun" class="col-sm-2 col-form-label">Nama Dusun</label>
     <div class="col-sm-10">
      <input type="text" name="dusun" class="form-control <?php echo ($error_dusun !="" ? "is-invalid" : ""); ?>" id="
      dusun" placeholder="Nama Dusun" value="<?php echo $dusun; ?>"><span class="warning"><?php echo $error_dusun; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="desa" class="col-sm-2 col-form-label">Nama Kelurahan/Desa</label>
     <div class="col-sm-10">
      <input type="text" name="desa" class="form-control <?php echo ($error_desa !="" ? "is-invalid" : ""); ?>" id="
      desa" placeholder="Nama Kelurahan/Desa" value="<?php echo $desa; ?>"><span class="warning"><?php echo $error_desa; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="camat" class="col-sm-2 col-form-label">Kecamatan</label>
     <div class="col-sm-10">
      <input type="text" name="camat" class="form-control <?php echo ($error_camat !="" ? "is-invalid" : ""); ?>" id="
      camat" placeholder="Kecamatan" value="<?php echo $camat; ?>"><span class="warning"><?php echo $error_camat; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
     <div class="col-sm-10">
      <input type="text" name="kodepos" class="form-control <?php echo ($error_kodepos !="" ? "is-invalid" : ""); ?>" id="
      kodepos" placeholder="Kode Pos" value="<?php echo $kodepos; ?>"><span class="warning"><?php echo $error_kodepos; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="tmptinggal" class="col-sm-4 col-form-label">Tempat Tinggal</label>
     <div class="col-sm-16 form-check">
      <select class="form-control" id="tmptinggal" name="tmptinggal">
       <option value="Bersama Orang Tua">Bersama Orang Tua</option>
       <option value="Wali">Wali</option>
       <option value="Kos">Kos</option>
       <option value="Asrama">Asrama</option>
       <option value="Panti Asuhan">Panti Asuhan</option>
       <option value="Tempat Tinggal Lainnya">Lainnya</option>
      </select><span class="warning"><?php echo $error_tmptinggal; ?></span>       
     </div> 
   </div> 

   <div class="form-group row">
     <label for="transport" class="col-sm-4 col-form-label">Modal Transport</label>
     <div class="col-sm-16 form-check">
      <select class="form-control" id="transport" name="transport">
       <option value="Jalan Kaki">Jalan Kaki</option>
       <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
       <option value="Kendaraan Umum/Angkot/Pete-pete">Kendaraan Umum/Angkot/Pete-pete</option>
       <option value="Jemputan Sekolah">Jemputan Sekolah</option>
       <option value="Kereta Api">Kereta Api</option>
       <option value="Ojek">Ojek</option>
       <option value="Andong/Bendi/Sado/Dokar/Delman/Beca">Andong/Bendi/Sado/Dokar/Delman/Beca</option>
       <option value="Perahu Penyebrangan/Rakit/Getek">Perahu Penyebrangan/Rakit/Getek</option>
       <option value="Transportasi Lainnya">Lainnya</option>
      </select><span class="warning"><?php echo $error_transport; ?></span>       
     </div> 
   </div>

    <div class="form-group row">
     <label for="nohp" class="col-sm-2 col-form-label">Nomor HP</label>
     <div class="col-sm-10">
      <input type="text" name="nohp" class="form-control <?php echo ($error_nohp !="" ? "is-invalid" : ""); ?>" id="
      nohp" placeholder="Nomor HP" value="<?php echo $nohp; ?>"><span class="warning"><?php echo $error_nohp; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="notelp" class="col-sm-2 col-form-label">Nomor Telepon</label>
     <div class="col-sm-10">
      <input type="text" name="notelp" class="form-control <?php echo ($error_notelp !="" ? "is-invalid" : ""); ?>" id="
      notelp" placeholder="Nomor Telepon" value="<?php echo $notelp; ?>"><span class="warning"><?php echo $error_notelp; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="email" class="col-sm-2 col-form-label">Email</label>
     <div class="col-sm-10">
      <input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" id="
      email" placeholder="Email" value="<?php echo $email; ?>"><span class="warning"><?php echo $error_email; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="kps" class="col-sm-2 col-form-label">Penerima KPS/PKH/KIP</label>
     <div class="col-xs-3 form-check">
      <input type="radio" name="kps" class="form-check-input <?php echo ($error_kps !="" ? "is-invalid" : ""); ?>" id="
      kps"  value="Ya Penerima KPS/PKH/KIP" checked="">Ya <br>
      <input type="radio" name="kps" class="form-check-input <?php echo ($error_kps !="" ? "is-invalid" : ""); ?>" id="
      kps"  value="Tidak Penerima KPS/PKH/KIP" checked="">Tidak<br>
      <span class="warning"><?php echo $error_kps; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="nokps" class="col-sm-2 col-form-label">No. KPS/KKS/PKH/KIP</label>
     <div class="col-sm-10">
      <input type="text" name="nokps" class="form-control <?php echo ($error_nokps !="" ? "is-invalid" : ""); ?>" id="
      nokps" placeholder="No. KPS/KKS/PKH/KIP" value="<?php echo $nokps; ?>"><span class="warning"><?php echo $error_nokps; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="kwn" class="col-sm-2 col-form-label">Kewarganegaraan</label>
     <div class="col-xs-3 form-check">
      <input type="radio" name="kwn" class="form-check-input <?php echo ($error_kwn !="" ? "is-invalid" : ""); ?>" id="
      kwn"  value="Indonesia (WNI)" checked="">Indonesia (WNI) <br>
      <input type="radio" name="kwn" class="form-check-input <?php echo ($error_kwn !="" ? "is-invalid" : ""); ?>" id="
      kwn"  value="Asing (WNA)" checked="">Asing (WNA)<br>
      <span class="warning"><?php echo $error_kwn; ?></span>
     </div>
   </div>

   <div class="form-group row">
     <label for="negara" class="col-sm-2 col-form-label">Nama Negara</label>
     <div class="col-sm-10">
      <input type="text" name="negara" class="form-control <?php echo ($error_negara !="" ? "is-invalid" : ""); ?>" id="
      negara" placeholder="Nama Negara" value="<?php echo $negara; ?>"><span class="warning"><?php echo $error_negara; ?></span>
     </div>
   </div>

   <div class="form-group row">
   <div class="col-sm-10">
    <button type="submit" class="btn btn-primary"> Serahkan</button>
   </div> 
  </div>
 </form>

 </div>
</div>
</div>
</div>
</body>
</html>

<?php 
include 'Koneksi.php';
$query = "INSERT INTO formulir SET tgl='$tgl', jp='$jp', tglmk='$tglmk', nis='$nis', noujian='$noujian', paud='$paud', tk='$tk', skhun='$skhun', 
ijazah='$ijazah',hobi='$hobi', citacita='$citacita', nama='$nama', jk='$jk', nisn='$nisn', nik='$nik', tmpl='$tmpl', tgll='$tgll', agama='$agama', 
berkhus='$berkhus', alamat='$alamat',rt='$rt', rw='$rw', dusun='$dusun', desa='$desa', camat='$camat', kodepos='$kodepos', tmptinggal='$tmptinggal', 
transport='$transport', nohp='$nohp', notelp='$notelp', email='$email', kps='$kps', nokps='$nokps', kwn='$kwn', negara='$negara'";

if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('Data berhasil di simpan');window.location='FormulirPesertaDidik.php'</script>";
}
else {
    echo "<h4>Data Gagal Disimpan</h4>";
		echo "<hr>";
		echo "<a href='FormulirPesertaDidik.php'>Kembali";
}
?>

<?php 
include('Koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Nomor');
$sheet->setCellValue('B1', 'Tanggal');
$sheet->setCellValue('C1', 'Jenis Pendaftaran');
$sheet->setCellValue('D1', 'Tanggal Masuk Sekolah');
$sheet->setCellValue('E1', 'NIS');
$sheet->setCellValue('F1', 'Nomor Peserta Ujian');
$sheet->setCellValue('G1', 'Apakah pernah PAUD');
$sheet->setCellValue('H1', 'Apakah pernah TK');
$sheet->setCellValue('I1', 'No Seri SKHUN Sebelumnya');
$sheet->setCellValue('J1', 'No Seri Ijazah Sebelumnya');
$sheet->setCellValue('K1', 'Hobi');
$sheet->setCellValue('L1', 'Cita-cita');
$sheet->setCellValue('M1', 'Nama Lengkap');
$sheet->setCellValue('N1', 'Jenis kelamin');
$sheet->setCellValue('O1', 'NISN');
$sheet->setCellValue('P1', 'NIK');
$sheet->setCellValue('Q1', 'Tempat Lahir');
$sheet->setCellValue('R1', 'Tanggal Lahir');
$sheet->setCellValue('S1', 'Agama');
$sheet->setCellValue('T1', 'Berkebutuhan Khusus');
$sheet->setCellValue('U1', 'Alamat Jalan');
$sheet->setCellValue('V1', 'RT');
$sheet->setCellValue('W1', 'RW');
$sheet->setCellValue('X1', 'Nama Dusun');
$sheet->setCellValue('Y1', 'Nama Kelurahan/Desa');
$sheet->setCellValue('Z1', 'Kecamatan');
$sheet->setCellValue('AA1', 'Kode Pos');
$sheet->setCellValue('AB1', 'Tempat Tinggal');
$sheet->setCellValue('AC1', 'Moda Transportasi');
$sheet->setCellValue('AD1', 'Nomor HP');
$sheet->setCellValue('AE1', 'Nomor Telepon');
$sheet->setCellValue('AF1', 'E-mail Pribadi');
$sheet->setCellValue('AG1', 'Penerima KPS/PKH/KIP');
$sheet->setCellValue('AH1', 'No KPS/KKS/PKH/KIP');
$sheet->setCellValue('AI1', 'Kewarganegaraan');
$sheet->setCellValue('AJ1', 'Nama Negara');

$query = mysqli_query($koneksi,"select * from formulir");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, $row['tgl']);
    $sheet->setCellValue('C'.$i, $row['jp']);
    $sheet->setCellValue('D'.$i, $row['tglmk']);
    $sheet->setCellValue('E'.$i, $row['nis']);
    $sheet->setCellValue('F'.$i, $row['noujian']);
    $sheet->setCellValue('G'.$i, $row['paud']);
    $sheet->setCellValue('H'.$i, $row['tk']);
    $sheet->setCellValue('I'.$i, $row['skhun']);
    $sheet->setCellValue('J'.$i, $row['ijazah']);
    $sheet->setCellValue('K'.$i, $row['hobi']);
    $sheet->setCellValue('L'.$i, $row['citacita']);
    $sheet->setCellValue('M'.$i, $row['nama']);
    $sheet->setCellValue('N'.$i, $row['jk']);
    $sheet->setCellValue('O'.$i, $row['nisn']);
    $sheet->setCellValue('P'.$i, $row['nik']);
    $sheet->setCellValue('Q'.$i, $row['tmpl']);
    $sheet->setCellValue('R'.$i, $row['tgll']);
    $sheet->setCellValue('S'.$i, $row['agama']);
    $sheet->setCellValue('T'.$i, $row['berkhus']);
    $sheet->setCellValue('U'.$i, $row['alamat']);
    $sheet->setCellValue('V'.$i, $row['rt']);
    $sheet->setCellValue('W'.$i, $row['rw']);
    $sheet->setCellValue('X'.$i, $row['dusun']);
    $sheet->setCellValue('Y'.$i, $row['desa']);
    $sheet->setCellValue('Z'.$i, $row['camat']);
    $sheet->setCellValue('AA'.$i, $row['kodepos']);
    $sheet->setCellValue('AB'.$i, $row['tmptinggal']);
    $sheet->setCellValue('AC'.$i, $row['transport']);
    $sheet->setCellValue('AD'.$i, $row['nohp']);
    $sheet->setCellValue('AE'.$i, $row['notelp']);
    $sheet->setCellValue('AF'.$i, $row['email']);
    $sheet->setCellValue('AG'.$i, $row['kps']);
    $sheet->setCellValue('AH'.$i, $row['nokps']);
    $sheet->setCellValue('AI'.$i, $row['kwn']);
    $sheet->setCellValue('AJ'.$i, $row['negara']);
    $i++;
}

$styleArray = [
            'borders'=> [
                'allBorders'=> [
                    'borderStyle'=> \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];
$i = $i - 1;
$sheet->getStyle('A1:AJ'.$i)->applyFromArray($styleArray);


$writer = new Xlsx($spreadsheet);
$writer->save('Report Peserta Didik.xlsx');
?>
