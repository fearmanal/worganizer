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
        default:
            echo "Error! Table Not Found";
    }

    
    while($r=mysqli_fetch_array($modal)){
?>

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

           

        </div>

           
    </div>
</div>