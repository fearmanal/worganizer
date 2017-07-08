<script>
  $('#myDatepicker2').datetimepicker({
      format: 'YYYY-MM-DD'
  });
</script>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Table design <small>Custom design</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <p><a href="#" class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Add Data</a></p>

        <div class="table-responsive">
          <table class="table table-striped jambo_table bulk_action">
            <thead>
              <tr class="headings">
                <th class="column-title">ID</th>
                <th class="column-title">Username</th>
                <th class="column-title">Email</th>
                <th class="column-title">Nama</th>
                <th class="column-title">Type</th>
                <th class="column-title">Status</th>
                <th class="column-title">Detail</th>
                <th class="column-title no-link last"><span class="nobr">Action</span></th>
              </tr>
            </thead>
            <tbody>
              <?php 
                //menampilkan data mysqli
                include "koneksi.php";
                $tbname="user";
                $no = 0;
                $modal=mysqli_query($connection, "SELECT * FROM $tbname");
                while($r=mysqli_fetch_array($modal)){
                $no++;
                     
              ?>
                <tr class="even pointer">
                    <td><?php echo $r['id']; ?></td>
                    <td><?php echo $r['username']; ?></td>
                    <td><?php echo $r['email']; ?></td>
                    <td><?php echo $r['name']; ?></td>
                    <td><?php echo $r['type']; ?></td>
                    <td><?php echo $r['status']; ?></td>
                    <td><a href="#">Change Password</a></td>
                    <td>
                       <a href="#" class='open_modal' id='<?php echo $r['id']; ?>' tbname="<?php echo $tbname; ?>"><i class="fa fa-pencil"></i></a>
                       <a href="#" onclick="confirm_modal('delete_data.php?id=<?php echo $r['id']; ?>&amp;tbname=<?php echo $tbname; ?>');"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
               
                <div id="ModalDesc<?php echo $r['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4>Detail <?php echo $r['name']; ?></h4>
                        </div>
                        <div class="modal-body">           
                          <?php echo $r['email']; ?>
                        </div>     
                      </div>
                  </div>
                </div>
              <?php } ?>
        </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Popup untuk Add--> 
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Tambah Data Baru</h4>
        </div>

        <div class="modal-body">
          <form action="add_data.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                
                <input type="hidden" name="tbname"  class="form-control" value="<?php echo $tbname; ?>" />
                <div class="row">
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                  <label for="username">Username</label>
                  <input type="text" name="username"  class="form-control" placeholder="Username" required/>
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                  <label for="email">Email</label>
                  <input type="text" name="email"  class="form-control" placeholder="Email"/>
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                  <label for="password">Password</label>
                  <input type="password" name="password"  class="form-control" placeholder="Password" required/>
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                  <label for="xpassword">Confirm Password</label>
                  <input type="password" name="xpassword"  class="form-control" placeholder="Password" required/>
                </div>                

                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                  <label for="name">Nama</label>
                  <input type="text" name="name"  class="form-control" placeholder="Nama"/>
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                  <label for="phone">Phone</label>
                  <input type="text" name="phone"  class="form-control" placeholder="Phone"/>
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
                        <input type='text' name="birthdate" class="form-control" placeholder="YYYY-MM-DD"/>
                        <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                  <label for="address">Alamat</label>
                  <input type="text" name="address"  class="form-control" placeholder="Alamat"/>
                </div>                

                <div class="form-group col-md-2 col-sm-2 col-xs-12">
                  <label for="zip">Kode Pos</label>
                  <input type="text" name="zip"  class="form-control" placeholder="Pos"/>
                </div>

                <div class="form-group col-md-3 col-sm-3 col-xs-12">
                  <label for="city">Kota</label>
                  <input type="text" name="city"  class="form-control" placeholder="Kota"/>
                </div>

                <div class="form-group col-md-3 col-sm-3 col-xs-12">
                  <label for="province">Provinsi</label>
                  <input type="text" name="province"  class="form-control" placeholder="Provinsi"/>
                </div>

                <div class="form-group col-md-4 col-sm-4 col-xs-12">
                  <label for="country">Negara</label>
                  <input type="text" name="country"  class="form-control" placeholder="Negara"/>
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
</div>

<!-- Modal Popup untuk Edit--> 
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- Modal Popup untuk delete--> 
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>



<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var idx = $(this).attr("id");
      var tbname = $(this).attr("tbname");
		   $.ajax({
    			   url: "modal_edit.php",
    			   type: "GET",
    			   data : {id: idx, tbname: tbname},
    			   success: function (ajaxData){
      			   $("#ModalEdit").html(ajaxData);
      			   $("#ModalEdit").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
      });
</script>

<!-- Javascript untuk popup modal Delete--> 
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>

  



