<?php 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=laporan_SPK.csv");
header("Pragma: no-cache");
header("Expires: 0");
?>

<table border="1" width="100%">
  <thead>
    <tr>
      <th>No.</th>
      <th>Id</th>
      <th>Pendidikan Terakhir (K1)</th>
      <th>Pengalaman Kerja Formal/Informal (K2)</th>
      <th>Kesehatan (K3)</th>
      <th>Usia (K4)</th>
      <th>Alamat (K5)</th>
      <th>Micro Teaching (K6)</th>
      <th>Test IT (K7)</th>
      <th>Alquran & Arab (K8)</th>
      <th>TPA & Psikologi (K9)</th>
      <th>Moral & Perilaku (K10)</th>
    </tr>
  </thead>

  <tbody>
   <?php $i=1; foreach ($dataLaporan as $data_matriks) { ?>
    <tr>   
      <td><?php echo $data_matriks -> id_pelamar; ?></td>
      <td><?php echo $data_matriks -> pend; ?></td>
      <td><?php echo $data_matriks -> peng_kerja; ?></td>
      <td><?php echo $data_matriks -> kesehatan; ?></td>
      <td><?php echo $data_matriks -> usia; ?></td>
      <td><?php echo $data_matriks -> alamat; ?></td>
      <td><?php echo $data_matriks -> micro; ?></td>
      <td><?php echo $data_matriks -> test_it; ?></td>
      <td><?php echo $data_matriks -> alquran_arab; ?></td>
      <td><?php echo $data_matriks -> tpa_psi; ?></td>
      <td><?php echo $data_matriks -> moral; ?></td>
    </tr>
    <?php $i++; } ?>
  </tbody>

</table>