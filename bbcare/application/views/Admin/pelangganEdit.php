<br>
<br>
<div class="content">
  <div class="col-md-12 mx-auto">
    <div class="card card-user">
      <div class="card-header">
        <h5 class="card-title pl-5">Edit Pelanggan</h5>
      </div>
      <form action="" method="POST">
      <div class="card-body">
        <div class="row">                   
          <div class="col-md-6 ml-5">
            <div class="form-group">
              <label>Nama Pelanggan</label>
              <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Pelanggan" value="<?=$get->nama?>">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>No. Telepon</label>
              <input type="text" id="telepon" name="telepon" class="form-control" placeholder="No. Telepon" value="<?=$get->telepon?>">
            </div>
          </div>

          <div class="mt-3 mx-auto">
            <input class="btn btn-primary btn-round" name="submit" type="submit" value="Update">
          </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>