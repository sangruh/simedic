<div class="w3-content w3-justify w3-text-grey w3-padding-64" >
  <script type="text/javascript">
  $(document).ready( function () {
$('#table').DataTable();
} );
 
    function edit(isi) {
      var isi = atob(isi);
      isi = JSON.parse(isi);
      $("input[name=id_inf]").val(isi.id_inf);
      $("input[name=judul_inf").val(isi.judul_inf);
      $("textarea[name=urai_inf]").html(isi.urai_inf);
    }
  </script>
  <h2> Informasi Umum</h2>
  <hr>
  <?php 
		//print_r($info);  
  ?>
     
     <table class="table" id="table">
        <thead>
          <th>No.</th>
          <th>Judul</th>
          <th>Uraian</th>
          <th>Images</th>
          <th>Tanggal</th>
          <th>Action</th>
        </thead>

        <tbody>
            <?php
              foreach ($info as $key => $v) {
                ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><?php echo htmlentities($v['judul_inf']); ?></td>
                    <td><?php echo htmlentities(substr($v['urai_inf'],0,100)."..."); ?></td>
                    <td><?php echo htmlentities($v['img_inf']); ?></td>
                    <td><?php echo htmlentities($v['log']); ?></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Informasi Umum</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/user/modinfo" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_inf" class="form-control" value="0" readonly>
          Judul : <input type="text" name="judul_inf" class="form-control" placeholder="Judul" required>
          Uraian : <textarea type="text" name="urai_inf" class="form-control" placeholder="Isi" required rows="7" cols="10"></textarea>
          Images : <input type="file" name="img_inf" class="form-control">
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
