<!DOCTYPE html>
<html>

  <?php $this->load->view('ClassGenerator/head') ?>

  <body class="container">
    <h1>Welcome To UMLGenerator_To_Code CodeIgniter</h1>
    <br>
    <div class="col-md-6">
      <form class="form" action="<?php echo base_url() ?>index.php/CodeGenerator/generate_class_name" method="post">
          <div class="form-group">
            <label for="nama_kelas">Nama Kelas Controller</label>
            <input class="form-control" type="text" name="nama_kelas" placeholder="nama_kelas">
          </div>
          <div class="form-group form-inline">
            <select class="btn btn-default" name="status_fungsi">
              <option value="+">+</option>
              <option value="-">-</option>
              <option value="#">#</option>
            </select>
            <input class="form-control" type="text" name="nama_fungsi" placeholder="nama_fungsi"><span> </span><button type="button" class="btn btn-info" name="button">Tambah Fungsi</button>
          </div>
          <button class="btn btn-success" type="submit" name="button">Buat Kelas</button>
      </form>
    </div>
  </body>
</html>
