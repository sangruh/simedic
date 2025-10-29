<div class="w3-content w3-justify w3-text-grey w3-padding-64" >
  <script type="text/javascript">
  $(document).ready( function () {
$('#table').DataTable();
} );
function tambah() {
  $("input[name=id_ag]").val(0);
  $("input[name=nama]").val("");
  $("input[name=lokasi]").val("");
  $("input[name=tgl]").val("");
}
function edit(isi) {
  var isi = atob(isi);
  isi = JSON.parse(isi);
  $("input[name=id_ag]").val(isi.id_ag);
  $("input[name=nama]").val(isi.nama);
  $("input[name=lokasi]").val(isi.lokasi);
  $("input[name=tgl]").val(isi.tgl);
  console.log(isi);
}
  </script>
  <h2> Agenda Kesehatan </h2>
  <hr>
     <table class="table" id="table">
        <thead>
          <th>No.</th>
          <th>Kegiatan</th>
          <th>Lokasi</th>
          <th>Waktu Pelaksanaan</th>
          <th>Action</th>
        </thead>
          <button type="button" onclick="tambah()" class="btn btn-primary" style="margin-bottom: 5px" data-toggle="modal" data-target="#exampleModal" >Tambah</button>
        <tbody>
            <?php
              foreach ($agenda as $key => $v) {
                ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><?php echo htmlentities($v['nama']); ?></td>
                    <td><?php echo htmlentities($v['lokasi']); ?></td>
                    <td><?php echo date('d F Y', strtotime($v['tgl'])); ?></td>
                      <td> <button type="button" id="edit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"  onclick="edit('<?php echo base64_encode(json_encode($v));?>')"  style="margin: 2px" >Edit</button>
                      <!-- <button type="button" id="del" class="btn btn-danger" style="margin: 2px">Hapus</button>  -->
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
        <form action="/user/modagd" method="post">
          ID : <input type="text" name="id_ag" class="form-control" value="0" readonly>
          Nama Kegiatan : <input type="text" name="nama" class="form-control" placeholder="Kegiatan" required>
          Lokasi : <input type="text" name="lokasi" class="form-control" placeholder="Lokasi Kegiatan" required>
          Tanggal : <input type="date" name="tgl" class="form-control" placeholder="Tanggal Pelaksanaan" required>
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
