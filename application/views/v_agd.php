<div class="w3-content w3-justify w3-text-grey w3-padding-64" >
  <script type="text/javascript">
  $(document).ready( function () {
$('#table').DataTable();
} );

  </script>


  <h2> Agenda Kesehatan Puskesmas Penanggal </h2>
  <hr>
     <table class="table" id="table">
        <thead>
          <th>No.</th>
          <th>Nama</th>
          <th>Lokasi</th>
          <th>Waktu Pelaksanaan</th>
          <th>Status</th>
        </thead>

        <tbody>
            <?php
              foreach ($agenda as $key => $v) {
                ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><?php echo htmlentities($v['nama']); ?></td>
                    <td><?php echo htmlentities($v['lokasi']); ?></td>
                    <td><?php echo date('d F Y', strtotime($v['tgl'])); ?></td>
                    <td><?php
                    $now = date('Y-m-d');
                      if ($v['tgl'] < $now) {
                        echo "Sudah Selesai";
                      }elseif ($v['tgl'] == $now) {
                        echo "Sedang Berlangsung";
                      }else {
                        echo "Segera";
                      }
                    ?></td>
                   </tr>
                <?php
              }
            ?>

        </tbody>
     </table>
</div>
