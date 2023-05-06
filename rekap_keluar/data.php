<div class="container">
  <p>Data Surat Keluar</p>

  <?php
  if (isset($_GET['message'])) {
  ?>
    <div class="alert alert-primary" role="alert">
      <?php echo $_GET['message']; ?>
    </div>
  <?php
  }
  ?>
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Pengirim</th>
        <th class="text-center">Penerima</th>
        <th class="text-center">No. Surat</th>
        <th class="text-center">Perihal</th>
        <th class="text-center">Penyimpanan</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      include "conn.php";
      $q = "SELECT * FROM surat WHERE jenis='keluar'";
      $res = $mysqli->query($q);
      $i = 0;
      while ($r = $res->fetch_assoc()) {
        $i = $i + 1;
        echo "
            <tr>
              <td>" . $i . "</td>
              <td>" . $r['pengirim'] . "</td>
              <td>" . $r['penerima'] . "</td>
              <td>" . $r['no_surat'] . "</td>
              <td>" . $r['perihal'] . "</td>
              <td>" . $r['penyimpanan'] . "</td>
              <td class='text-center'>
              <a type='button' href='?page=form_keluar&type=form&id=" . $r['id'] . "' class='btn btn-info btn-sm'>Edit</a>
              <a type='button' href='javascript:void()' onClick='hapus(" . $r['id'] . ")' class='btn btn-danger btn-sm'>Hapus</a>
              </td>
            </tr>
          ";
      }
      ?>
    </tbody>
  </table>
</div>
<script>
  function hapus(id) {
    if (confirm("Apakah akan menghapus data siswa!") == true) {
      location.href = "form_keluar/proses.php?id="+id; 
    } else {
      
    }
  }
</script>