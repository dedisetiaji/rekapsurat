<?php
include "../conn.php";
if(isset($_POST['action']))
{
  $id = $_POST['id'];
  $pengirim = $_POST['pengirim'];
  $penerima = $_POST['penerima'];
  $no_surat = $_POST['no_surat'];
  $perihal = $_POST['perihal'];
  $penyimpanan = $_POST['penyimpanan'];
  if($_POST['action']=="add")
  {
    $q="INSERT INTO surat(pengirim,penerima,no_surat,perihal,penyimpanan,jenis) VALUES('$pengirim','$penerima','$no_surat','$perihal','$penyimpanan','masuk')";
    $r=$mysqli->query($q);
    header('Location:../index.php?page=form_masuk&message=Berhasil menambah data form masuk');

  }
  else
  {
    $q="UPDATE surat SET 
      pengirim='$pengirim',
      penerima='$penerima',
      no_surat='$no_surat',
      perihal='$perihal',
      penyimpanan='$penyimpanan'
    WHERE id='$id' ";
    $r=$mysqli->query($q);
    header('Location:../index.php?page=form_masuk&message=Berhasil update data form masuk');
  }

}
else
{
  $id = $_GET['id'];
  $q="DELETE FROM surat WHERE id='$id'";
  $r=$mysqli->query($q);
  header('Location:../index.php?page=form_masuk&message=Berhasil hapus data form masuk');
}

