<!DOCTYPE html>
<html>
  <head>
    <title>Database Mahasiswa</title>
  </head>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
  <body>
<div class="container" style="margin-top: 20px">
  <div class = "col-md-12">
    <h2 style="text-align: center;margin-bottom:30px">Data Mahasiswa </h2>
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>NO</th>
          <th>NIM</th>
          <th>NAMA LENGKAP</th>
          <th>TANGGAL LAHIR</th>
          <th>ASAL KOTA</th>
          <th style="width: 125px;">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no=1;
        foreach ($data_mahasiswa as $mahasiswa) {
          ?>
          <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $mahasiswa->NIM; ?></td>
            <td><?php echo $mahasiswa->Nama; ?></td>
            <td><?php echo $mahasiswa->TTL; ?></td>
            <td><?php echo $mahasiswa->Kota_Asal; ?></td>
            <td style="text-align: center;">
              <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $mahasiswa->NIM;?>)"><i class=
                "glyphicon glyphicon-pencil"></i></button>
              <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $mahasiswa->NIM;?>)"><i class=
                "glyphicon glyphicon-pencil"></i></button>
              </td>
            </tr>
            <?php } ?>
      </tbody>
    </table>
  </div>
<form action = "mailto:nisyacnblue@gmail.com" method = "post" enctype="text/plain">
<fieldset>
  <legend align: "center">Input Data Mahasiswa</legend>
  <!-- mencoba fitur input-->
  <label>NIM</label><br>
  <input type="text" name="text" value="" required>
  <br><br>
  <label>Nama Lengkap</label><br>
  <input type="text" name="nama" value="">
  <br><br>
  <label>Tanggal Lahir</label><br>
  <input type="text" name="ttl" value="" required>
  <br><br>
  <label>Kota Asal</label><br>
  <select name = "location">
    <option value "Balikpapan">Balikpapan</option>
    <option value="Samarinda">Samarinda</option>
    <option value="Tenggarong" selected>Tenggarong</option>
  </select><br><br>
</fieldset>
<button id = "submit" name="submit" class="btn btn-danger btn-block">Submit</button>
<input type="submit" name="Submit" value="Submit">
</div>

</form>
<script type="text/javascript" src="https://code.jquery.com/jQuery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.boostrapcdn.com/bootstrap/3.3.7/js/bootstrap.min/js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.101.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.coostrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready( function (){
      $('#table_id').DataTable();
    } );
</script>
</body>
</html>
