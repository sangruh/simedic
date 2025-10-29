<div class="w3-content w3-justify w3-text-grey w3-padding-64" >
  <script type="text/javascript">
  $(document).ready( function () {
$('#table').DataTable();
} );
function edit(id, data){
     $('input[name=id_pdl]').val(id);
     if (data != "") {
       var obj = JSON.parse(atob(data));
    //   console.log(obj);
       if (Object.keys(obj).length > 0) {
          $('input[name=tgl]').val(obj.tgl);
          $('input[name=jam]').val(obj.jam);
          $('input[name=petugas]').val(obj.petugas);
          $('textarea[name=ket]').html(obj.ket);
          $('input[name=id_tpd]').val(obj.id_tpd);
       }
     }else {
       $('input[name=tgl]').val('<?php echo date('Y-m-d'); ?>');
       $('input[name=jam]').val('<?php echo date('H:i:s'); ?>');
       $('input[name=petugas]').val("");
       $('textarea[name=ket]').html("");
       $('input[name=id_tkl]').val("");
     }


}
  </script>
  <h2> Data Masyarakat Peduli Pengungsi </h2>
  <hr>
     <table class="table" id="table">
        <thead>
          <th>No.</th>
          <th>Nik</th>
          <th>Data</th>
          <th>Informasi</th>
          <th>Lokasi</th>
          <th>Status</th>
          <th>Action</th>

        </thead>

        <tbody>
            <?php
              foreach ($peduli as $key => $v) {
                $this->db->where('id_pdl', $v['id_pdl']);
                $dt = $this->db->get('tbl_tlpeduli')->result_array();
                $img = "";
                if (!empty($dt)) {
                  $dtt = base64_encode(json_encode($dt[0]));
                  $img =  "<a href='".base_url().$dt[0]['bukti']."' target='_target' ><img loading='lazy' src='".base_url().$dt[0]['bukti']."' width='100px' style='padding: 5px'/> </a>";
                }else {
                  $dtt = "";
                }

                ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><?php echo htmlentities($v['nik']); ?></td>
                    <td><?php echo htmlentities($v['nama']." - ".$v['alamat']." - ".$v['telp']); ?></td>
                    <td><?php echo htmlentities($v['info']); ?></td>
                    <td> <a href="<?php echo "https://www.google.com/maps?q=".$v['lat'].",".$v['lng']; ?>" target="_blank">Google Maps</a> </td>
                <td>  <?php
                    if ($v['status'] == 0) {
                        echo "<span style='color: white; background-color: red; border-radius: 5px; padding: 5px;'>Belum </span>";
                    }else{
                        echo "<span style='color: white; background-color: green; border-radius: 5px; padding: 5px;'>Sudah </span>";
                    }

                  ?></td>
                  <td><?php echo $img; ?><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal" onclick="edit('<?php echo $v['id_pdl'] ?>', '<?php echo $dtt ?>');" > TL </button></td>
                   </tr>
                <?php
              }
            ?>

        </tbody>
     </table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
 <div class="modal-header">
   <h5 class="modal-title" id="exampleModalLabel">Status</h5>
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>
 <div class="modal-body">
   <form action="/user/modpdlst" method="post" enctype="multipart/form-data">
     <input type="hidden" name="id_tpd" value="0">
     <input type="hidden" name="id_pdl" value="">
     Tanggal : <input type="date" name="tgl" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
     Jam : <input type="time" name="jam" class="form-control" value="<?php echo date('H:i:s'); ?>" step="any" >
     Petugas : <input type="text" name="petugas" class="form-control" placeholder="Nama Petugas yang Menindaklanjuti" required>
     Foto Bukti : <input type="file" name="bukti" class="form-control" >
     Keterangan : <textarea name="ket" class="form-control" rows="7" cols="7" placeholder="Keterangan" required></textarea>
     <button  type="submit" class="btn btn-primary" style="margin-top: 5px">Simpan</button>
   </form>
 </div>
 <div class="modal-footer">
   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 </div>
</div>
</div>
</div>
