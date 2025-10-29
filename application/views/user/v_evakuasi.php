<div class="w3-content w3-justify w3-text-grey w3-padding-64" >
  <script type="text/javascript">
  $(document).ready( function () {
$('#table').DataTable();
} );
    function tambah() {
      $("input[name=id_ev]").val(0);
      $("input[name=nama]").val("");
      $("input[name=alamat]").val("");
      $("input[name=lat]").val("");
      $("input[name=lng]").val("");
    }
    function edit(isi) {
      var isi = atob(isi);
      isi = JSON.parse(isi);
      $("input[name=id_ev]").val(isi.id_ev);
      $("input[name=nama]").val(isi.nama);
      $("input[name=alamat]").val(isi.alamat);
      $("input[name=lat]").val(isi.lat);
      $("input[name=lng]").val(isi.lng);
    }
  </script>
  <h2> Data Lokasi Evakuasi </h2>
  <hr>
     <button type="button" id="tambah" class="btn btn-primary" style="margin-bottom: 5px"
      data-toggle="modal" data-target="#exampleModal" onclick="tambah()" >Tambah</button>
     <table class="table" id="table">
        <thead>
          <th>No.</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Lokasi</th>
          <th>Action</th>
        </thead>

        <tbody>
            <?php
              foreach ($evakuasi as $key => $v) {
                ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><?php echo htmlentities($v['nama']); ?></td>
                    <td><?php echo htmlentities($v['alamat']); ?></td>
                    <td><?php echo htmlentities($v['lat'].";".$v['lng']); ?></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Data Pengungsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/user/modev" method="post">
          <input type="hidden" name="id_ev" class="form-control" value="0" readonly>
          Nama : <input type="text" name="nama" class="form-control" placeholder="Nama" required>
          Alamat : <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
          Latitude : <input type="text" name="lat" class="form-control" placeholder="Lat" required>
          Longitude : <input type="text" name="lng" class="form-control" placeholder="Long" required>
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
