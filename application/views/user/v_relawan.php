<div class="w3-content w3-justify w3-text-grey w3-padding-64" >
  <script type="text/javascript">
  $(document).ready( function () {
$('#table').DataTable();
} );
function tambah() {
  $("input[name=id_rl]").val(0);
  $("input[name=nama]").val("");
  $("input[name=jabatan]").val("");
  $("input[name=alamat]").val("");
  $("input[name=telp]").val("");
  $("input[name=jangkauan]").val("");
}
function edit(isi) {
  var isi = atob(isi);
  isi = JSON.parse(isi);
  $("input[name=id_rl]").val(isi.id_rl);
  $("input[name=nama]").val(isi.nama);
  $("input[name=jabatan]").val(isi.jabatan);
  $("input[name=alamat]").val(isi.alamat);
  $("input[name=telp]").val(isi.telp);
  $("input[name=jangkauan]").val(isi.jangkauan);
}
  function cetak() {
    window.open();
  }
  </script>

  <h2> Daftar Relawan </h2>
  <hr>
     <table class="table" id="table">
        <thead>
          <th>No.</th>
          <th>Nama</th>
          <th>Jabatan</th>
          <th>Alamat</th>
          <th>Telp</th>
          <th>Jangkauan</th>
          <th>foto</th>
          <th>Status</th>
          <th>Action</th>
        </thead>
          <button type="button" onclick="tambah()" class="btn btn-primary" style="margin: 5px" data-toggle="modal" data-target="#exampleModal" >Tambah</button>
          <button type="button" onclick="cetak()" class="btn btn-info" style="margin: 5px" >Cetak</button>
        <tbody>
            <?php
              foreach ($relawan as $key => $v) {
                ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><?php echo htmlentities($v['nama']); ?></td>
                    <td><?php echo htmlentities($v['jabatan']); ?></td>
                    <td><?php echo htmlentities($v['alamat']); ?></td>
                    <td><?php echo htmlentities($v['telp']); ?></td>
                    <td><?php echo htmlentities($v['jangkauan']); ?></td>
                    <td>
                      <?php
                      if ($v['foto'] != "") {
                        ?>
                          <img width="200px" loading='lazy' src="<?php echo base_url().$v['foto']; ?>">
                        <?php
                      }else {
                        echo "-";
                      }
                      ?>

                    </td>

                    <td><?php
                    $btn = "";
                    if ($v['status'] == 0) {
                      echo "Calon Relawan";
                      $btn = "<form action='/user/verifrelawan' method='post'><input type='hidden' name='id' value='".$v['id_rl']."'/>
                      <button class='btn btn-success' type='submit' >Aktifkan</button></form>";
                    }else {
                        echo "Relawan";
                        $btn = "<form action='/user/verifrelawan' method='post'><input type='hidden' name='id' value='".$v['id_rl']."'/>
                        <button class='btn btn-danger' type='submit' >Nonaktifkan</button></form>";
                    }
                    ?></td>

                    <td> <button id="edit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"  onclick="edit('<?php echo base64_encode(json_encode($v));?>')"  style="margin: 2px" >Edit</button>
                      <!-- <button type="button" id="del" class="btn btn-danger" style="margin: 2px">Hapus</button>  -->
                      <?php echo $btn ?>
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
        <h5 class="modal-title" id="exampleModalLabel">Data Agenda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/user/modrla" method="post">
          ID : <input type="text" name="id_rl" class="form-control" value="0" readonly>
          Nama : <input type="text" name="nama" class="form-control" placeholder="Nama" required>
          Jabatan : <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" required>
          Alamat : <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
          Telp : <input type="text" name="telp" class="form-control" placeholder="Telp" required>
          Jangkauan : <input type="text" name="jangkauan" class="form-control" placeholder="Jangkauan" required>
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
