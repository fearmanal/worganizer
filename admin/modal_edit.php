<?php
    include "koneksi.php";
    $tbname=$_GET['tbname'];
    $modal_id=$_GET['id'];

    switch ($tbname) {
        case "cake":
            $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id='$modal_id'");
            break;
        case "catering":
            $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id='$modal_id'");
            break;
        case "dekorasi":
            $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id='$modal_id'");
            break;
        case "dokumentasi":
            $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id='$modal_id'");
            break;
        case "gedung":
            $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id='$modal_id'");
            break;
        case "hiburan":
            $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id='$modal_id'");
            break;
        case "orderwo":
            $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id='$modal_id'");
            break;
        case "riasnbaju":
            $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id='$modal_id'");
            break;
        case "service":
            $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id='$modal_id'");
            break;
        case "souvenir":
            $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id='$modal_id'");
            break;
        case "undangan":
            $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id='$modal_id'");
            break;
        case "user":
            $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE id='$modal_id'");
            break;       
        default:
            echo "Error! Table Not Found";
    }

    
    while($r=mysqli_fetch_array($modal)){

        if ($tbname == 'user') {
?>
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Tambah Data Baru</h4>
        </div>

        <div class="modal-body">
          <form action="edit_data.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                
                <input type="hidden" name="tbname"  class="form-control" value="<?php echo $tbname; ?>" />
                <input type="hidden" name="id"  class="form-control" value="<?php echo $r['id']; ?>" />
                <input type="hidden" name="eximage"  class="form-control" value="<?php echo $r['image']; ?>" />

                <div class="row">
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                  <label for="username">Username</label>
                  <input type="text" name="username"  class="form-control" value="<?php echo $r['username']; ?>"/>
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                  <label for="email">Email</label>
                  <input type="text" name="email"  class="form-control" value="<?php echo $r['email']; ?>"/>
                </div>                

                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                  <label for="name">Nama</label>
                  <input type="text" name="name"  class="form-control" value="<?php echo $r['name']; ?>"/>
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                  <label for="phone">Phone</label>
                  <input type="text" name="phone"  class="form-control" value="<?php echo $r['phone']; ?>"/>
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                  <label for="gender">Jenis Kelamin</label>
                  <select name="gender" class="form-control">
                      <option value="Pria">Pria</option>
                      <option value="Wanita">Wanita</option>
                  </select>
                </div>                

                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <label for="birthdate">Tanggal Lahir</label>
                    <div class='input-group date' id='myDatepicker2'>
                        <input type='text' name="birthdate" class="form-control" value="<?php echo $r['birthdate']; ?>"/>
                        <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                  <label for="address">Alamat</label>
                  <input type="text" name="address"  class="form-control" value="<?php echo $r['address']; ?>"/>
                </div>                

                <div class="form-group col-md-2 col-sm-2 col-xs-12">
                  <label for="zip">Kode Pos</label>
                  <input type="text" name="zip"  class="form-control" value="<?php echo $r['zip']; ?>"/>
                </div>

                <div class="form-group col-md-3 col-sm-3 col-xs-12">
                  <label for="city">Kota</label>
                  <input type="text" name="city"  class="form-control" value="<?php echo $r['city']; ?>"/>
                </div>

                <div class="form-group col-md-3 col-sm-3 col-xs-12">
                  <label for="province">Provinsi</label>
                  <input type="text" name="province"  class="form-control" value="<?php echo $r['province']; ?>"/>
                </div>

                <div class="form-group col-md-4 col-sm-4 col-xs-12">
                  <label for="country">Negara</label>
                  <input type="text" name="country"  class="form-control" value="<?php echo $r['country']; ?>"/>
                </div>
                
                <div class="form-group col-md-5 col-sm-5 col-xs-12">
                  <label for="image">Gambar</label>
                  <input type="file" name="image" class="form-control"/>
                </div>

                <div class="form-group col-md-3 col-sm-3 col-xs-12">
                  <label for="type">Type</label>
                  <select name="type" class="form-control">
                      <option value="User">User</option>
                      <option value="Admin">Admin</option>
                  </select>
                </div>

                <div class="form-group col-md-4 col-sm-4 col-xs-12">
                  <label for="status">Status</label>
                  <select name="status" class="form-control">
                      <option value="Enable">Enable</option>
                      <option value="Disable">Disable</option>
                  </select>
                </div>

              </div>
              <div class="modal-footer">
                  <button class="btn btn-success" type="submit">
                      Confirm
                  </button>

                  <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Cancel
                  </button>
              </div>

              </form>
        </div>       
    </div>
</div>

<?php } else { ?>

<div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
        </div>

        <div class="modal-body">
            <form action="edit_data.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                
                <input type="hidden" name="tbname"  class="form-control" value="<?php echo $tbname; ?>" />
                <input type="hidden" name="id"  class="form-control" value="<?php echo $r['id']; ?>" />
                <input type="hidden" name="eximage"  class="form-control" value="<?php echo $r['image']; ?>" />

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="name">Nama</label>
                  <input type="text" name="name"  class="form-control" value="<?php echo $r['name']; ?>"/>
                </div>

                <?php 
                    if ($tbname == 'gedung') {
                ?>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="address">Alamat</label>
                  <input type="text" name="address"  class="form-control" value="<?php echo $r['address']; ?>" />
                </div>
                <?php
                    }
                ?>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="price">Harga</label>
                  <input type="text" name="price"  class="form-control" value="<?php echo $r['price']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="description">Deskripsi</label>
                   <textarea name="description"  class="form-control"><?php echo $r['description']; ?></textarea>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="image">Gambar</label>
                  <input type="file" name="image" class="form-control"/>
                </div>

                <div class="modal-footer">
                      <button class="btn btn-success" type="submit">
                          Confirm
                      </button>

                      <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                        Cancel
                      </button>
                </div>

            </form>
        <?php } ?>
        <?php } ?>

           

        </div>

           
    </div>
</div>