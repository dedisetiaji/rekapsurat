<?php
include "conn.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $action = "update";
  $q = "SELECT * FROM surat WHERE id='$id'";
  $r = $mysqli->query($q);
  $res = $r->fetch_assoc();
  $jenis = $res['jenis'];
  $pengirim = $res['pengirim'];
  $penerima = $res['penerima'];
  $no_surat = $res['no_surat'];
  $perihal = $res['perihal'];
  $penyimpanan = $res['penyimpanan'];
} else {
  $id = 0;
  $action = "add";
  $pengirim = "";
  $penerima ="";
  $no_surat = "";
  $perihal = "";
  $penyimpanan = "";
}


?>
<div class="container">
  <h5>Form Surat Keluar</h5>
  <form method="POST" action="form_keluar/proses.php">
    <input name="id" value="<?php echo $id; ?>" type="hidden" />
    <input name="action" value="<?php echo $action; ?>" type="hidden" />
    <p>Pengirim</p>
    <select class="form-control" name="pengirim">
      <option value="<?php echo $pengirim; ?>"> <?php echo $pengirim; ?></option>
      <option value="SUBBAGRENMIN">SUBBAGRENMIN</option>
      <option value="IRBID 1">IRBID 1</option>
      <option value="IRBID 2">IRBID 2</option>
      <option value="SUBBAGDUMAASANWAS">SUBBAGDUMAASANWAS</option>
    </select>
    <br />
    <p>Penerima</p>
    <select class="form-control" name="penerima">
      <option value="<?php echo $penerima; ?>"> <?php echo $penerima; ?></option>
      <option value="SUBBAGRENMIN">SUBBAGRENMIN</option>
      <option value="IRBID 1">IRBID 1</option>
      <option value="IRBID 2">IRBID 2</option>
      <option value="SUBBAGDUMAASANWAS">SUBBAGDUMAASANWAS</option>
    </select>
    <br /> 
     <p>No. Surat</p>
     <select class="form-control" name="no_surat">
      <option value="<?php echo $no_surat; ?>"> <?php echo $no_surat; ?></option>
      <option value="SURAT BIASA">SURAT BIASA</option>
      <option value="SURAT TELEGRAM">SURAT TELEGRAM</option>
      <option value="NOTA DINAS">NOTA DINAS</option>
    </select>
    <br />
    <p>Perihal</p>
    <input class="form-control" name="perihal" type="text" placeholder="Perihal" value="<?php echo $perihal;?>" />
    <br />  
    <p>Penyimpanan</p>
    <select class="form-control" name="penyimpanan">
      <option value="<?php echo $penyimpanan; ?>"> <?php echo $penyimpanan; ?></option>
      <option value="LOKER 1">LOKER 1</option>
      <option value="LOKER 2">LOKER 2</option>
      <option value="LOKER 3">LOKER 3</option>
    </select>
    <br />
    <button type='submit' class='btn btn-primary btn-lg btn-block'>Submit</button>
  </form>
</div>