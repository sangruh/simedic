<div class="w3-content w3-justify w3-text-grey w3-padding-64" >
  <script type="text/javascript">
  $(document).ready( function () {
$('#table').DataTable();
} );
    function tambah() {
      $("input[name=id_png]").val(0);
      $("input[name=nik").val("");
      $("input[name=nama]").val("");
      $("input[name=asal]").val("");
      $("input[name=golongan]").val("");
      $("input[name=usia]").val("");
      $("input[name=jk]").val("");
    }
    function edit(isi) {
      var isi = atob(isi);
      isi = JSON.parse(isi);
      $("input[name=id_png]").val(isi.id_png);
      $("input[name=nik").val(isi.nik);
      $("input[name=nama]").val(isi.nama);
      $("input[name=asal]").val(isi.asal);
      $("input[name=golongan]").val(isi.golongan);
      $("input[name=usia]").val(isi.usia);
      $("input[name=jk]").val(isi.jk);
    }
  </script>
  <h2> Data <?php echo $judul; ?> </h2>
  <hr>
     <button type="button" id="tambah" class="btn btn-primary" style="margin-bottom: 5px"
      data-toggle="modal" data-target="#exampleModal" onclick="tambah()" >Tambah</button>
     <table class="table" id="table">
        <thead>
          <th>No.</th>
          <th>Nik</th>
          <th>Info</th>
          <th>Asal</th>
          <th>Jenis Kelamin</th>
          <th>Lahir/Usia</th>
          <th>Golongan</th>
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
                    <td><?php echo htmlentities($v['asal']); ?></td>
                    <td><?php echo htmlentities($v['jk']); ?></td>
                    <td><?php echo htmlentities($v['usia']); ?></td>
                    <td><?php echo htmlentities($v['golongan']); ?></td>
                    <td><button type="button" id="edit" class="btn btn-primary" onclick="edit('<?php echo base64_encode(json_encode($v));?>')" style="margin: 2px" data-toggle="modal" data-target="#exampleModal">Edit</button>
                    <!-- <button type="button" id="del" class="btn btn-danger" style="margin: 2px">Hapus</button> -->
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
          Asal : <input type="text" name="asal" class="form-control" placeholder="Asal" required>
          Jenis Kelamin : <input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin : L/P" required>
          Usia : <input type="text" name="usia" class="form-control" placeholder="Usia" required>
          Golongan : <input type="text" name="golongan" class="form-control" placeholder="Golongan : Lansia/Dewasa/Anak2" required>
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
