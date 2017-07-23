<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Order History</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <div class="table-responsive">
          <table class="table table-striped jambo_table bulk_action">
            <thead>
              <tr class="headings">
                <th class="column-title">Invoice ID</th>
                <th class="column-title">Tanggal Order</th>
                <th class="column-title">Nama Pemesan</th>
                <th class="column-title">Tanggal Pernikahan</th>
                <th class="column-title">Total</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                //menampilkan data mysqli
                include "koneksi.php";
                $tbname="order";
                $no = 0;
                $modal=mysqli_query($connection, "SELECT * FROM $db.$tbname");
                while($r=mysqli_fetch_array($modal)){
                $no++;
                     
              ?>
                <tr class="even pointer">
                    <td><?php echo $r['id']; ?></td>
                    <td><?php echo $r['create_date']; ?></td>
                    <td>
                      <?php 
                        $id_user = $r['id_user']; 
                        $modal2 = mysqli_query($connection, "SELECT * FROM user WHERE user.id='$id_user'");
                        $no2=0;
                        while($r2=mysqli_fetch_array($modal2)){
                        $no2++;
                        echo $r2['name'];
                      }
                      ?>                        
                    </td>
                    <td><?php echo $r['wedding_date']; ?></td>
                    <td><?php echo $r['total']; ?></td>
                </tr>
              <?php } ?>
        </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>

  



