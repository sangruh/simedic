<div class="w3-content w3-justify w3-text-grey w3-padding-64" >
  <script type="text/javascript">
  $(document).ready( function () {
$('#table').DataTable();
} );

    function resetFields(fields) {
      fields.forEach(function(field) {
        var selector = "[name=" + field + "]";
        $(selector).val('');
      });
    }

    function fillFields(fields, data) {
      fields.forEach(function(field) {
        var selector = "[name=" + field + "]";
        $(selector).val(data[field] !== undefined ? data[field] : '');
      });
    }

    function tambah() {
      $("input[name=id_png]").val(0);
<?php if ($jenis == "2") { ?>
      resetFields(['nik','nama','desa','jk','tgl_lahir','jenis','obat']);
<?php } else { ?>
      resetFields(['nik','nama','asal','jk','usia','golongan']);
<?php } ?>
    }
    function edit(isi) {
      var isi = atob(isi);
      isi = JSON.parse(isi);
      $("input[name=id_png]").val(isi.id_png);
<?php if ($jenis == "2") { ?>
      fillFields(['nik','nama','desa','jk','tgl_lahir','jenis','obat'], isi);
<?php } else { ?>
      fillFields(['nik','nama','asal','jk','usia','golongan'], isi);
<?php } ?>
    }
  </script>
  <?php
    if ($jenis == "1") {
      $slugJenis = 'pengungsi';
    } elseif ($jenis == "2") {
      $slugJenis = 'pasien';
    } else {
      $slugJenis = 'pekerja';
    }
  ?>
  <h2> Data <?php echo $judul; ?> </h2>
  <hr>
     <button type="button" id="tambah" class="btn btn-primary" style="margin-bottom: 5px"
      data-toggle="modal" data-target="#exampleModal" onclick="tambah()" >Tambah</button>
     <table class="table" id="table">
        <thead>
          <th>No.</th>
          <th>Nik</th>
          <th>Info</th>
<?php if ($jenis == "2") { ?>
          <th>Desa</th>
          <th>Jenis Kelamin</th>
          <th>Tanggal Lahir</th>
          <th>Jenis</th>
          <th>Obat</th>
<?php } else { ?>
          <th>Asal</th>
          <th>Jenis Kelamin</th>
          <th>Lahir/Usia</th>
          <th>Golongan</th>
<?php } ?>
          <th>Action</th>
        </thead>

        <tbody>
            <?php
              foreach ($pengungsi as $key => $v) {
                ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><?php echo htmlentities($v['nik']); ?></td>
                    <td><?php echo htmlentities($v['nama']); ?></td>
<?php if ($jenis == "2") { ?>
                    <td><?php echo htmlentities($v['desa']); ?></td>
                    <td><?php echo htmlentities($v['jk']); ?></td>
                    <td><?php echo htmlentities($v['tgl_lahir']); ?></td>
                    <td><?php echo htmlentities($v['jenis']); ?></td>
                    <td><?php echo htmlentities($v['obat']); ?></td>
<?php } else { ?>
                    <td><?php echo htmlentities($v['asal']); ?></td>
                    <td><?php echo htmlentities($v['jk']); ?></td>
                    <td><?php echo htmlentities($v['usia']); ?></td>
                    <td><?php echo htmlentities($v['golongan']); ?></td>
<?php } ?>
                    <td><button type="button" id="edit" class="btn btn-primary" onclick="edit('<?php echo base64_encode(json_encode($v));?>')" style="margin: 2px" data-toggle="modal" data-target="#exampleModal">Edit</button>
                    <a href="<?php echo base_url('user/hapus/'.$slugJenis.'/'.$v['id_png']); ?>" class="btn btn-danger" style="margin: 2px" onclick="return confirm('Hapus data ini?');">Hapus</a>
                  </td>
                   </tr>
                <?php
              }
            ?>

        </tbody>
     </table>

     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data <?php echo $judul ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
      //  echo $jenis;
        $js = "";
          if ($jenis == 1) {
            $js =  "/user/modpng";
          }elseif ($jenis == 2) {
            $js =  "/user/modpas";
          }else {
            $js =  "/user/modpkr";
          }
         ?>
        <form action="<?php echo $js; ?>" method="post">
          <input type="hidden" name="id_png" class="form-control" value="0" readonly>
          NIK : <input type="text" name="nik" class="form-control" placeholder="Nomor Induk Kependudukan" required>
          Nama : <input type="text" name="nama" class="form-control" placeholder="Nama" required>
<?php if ($jenis == "2") { ?>
          Desa : <input type="text" name="desa" class="form-control" placeholder="Desa" required>
          Jenis Kelamin : <input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin : L/P" required>
          Tanggal Lahir : <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required>
          Jenis : <input type="text" name="jenis" class="form-control" placeholder="Jenis" required>
          Obat : <input type="text" name="obat" class="form-control" placeholder="Obat" required>
<?php } else { ?>
          Asal : <input type="text" name="asal" class="form-control" placeholder="Asal" required>
          Jenis Kelamin : <input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin : L/P" required>
          Usia : <input type="text" name="usia" class="form-control" placeholder="Usia" required>
          Golongan : <input type="text" name="golongan" class="form-control" placeholder="Golongan : Lansia/Dewasa/Anak2" required>
<?php } ?>
          <button  type="submit" class="btn btn-primary" style="margin-top: 5px">Simpan</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
    </div>
  </div>

</div>
