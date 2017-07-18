<?php   

      session_start(); 

      if(!isset($_SESSION['ulogin'])) {
           header("location:login.php");  
      }
      else {

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>W Organizer | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../vendors/build/css/custom.min.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Custom Style -->
    <link href="../css/admin-style.css" rel="stylesheet">
    
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><span>GGWP</span></a>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li class="active"><a href="index.php?menu=dashboard"><i class="fa fa-home"></i> Home </a></li>
                  <li><a href="index.php?menu=order"><i class="fa fa-shopping-cart"></i> Order </a></li>
                  <li><a><i class="fa fa-edit"></i> Manage Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?menu=cake">Cake</a></li>
                      <li><a href="index.php?menu=catering">Catering</a></li>
                      <li><a href="index.php?menu=dekorasi">Dekorasi</a></li>
                      <li><a href="index.php?menu=dokumentasi">Dokumentasi</a></li>
                      <li><a href="index.php?menu=gedung">Gedung</a></li>
                      <li><a href="index.php?menu=hiburan">Hiburan</a></li>
                      <li><a href="index.php?menu=riasnbaju">Baju &amp; Rias</a></li>
                      <li><a href="index.php?menu=service">Service</a></li>
                      <li><a href="index.php?menu=souvenir">Souvenir</a></li>
                      <li><a href="index.php?menu=undangan">Undangan</a></li>
                    </ul>
                  </li>
                  <li><a href="index.php?menu=user"><i class="fa fa-users"></i> Manage User </a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

			<div class="row">
			  <div class="col-md-12 col-sm-12 col-xs-12">
			    <div class="x_panel">
			      <div class="x_title">
			        <h2>Hasil Pencarian</h2>
			        <ul class="nav navbar-right panel_toolbox">
			          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
			        </ul>
			        <div class="clearfix"></div>
			      </div>
			      <div class="x_content">

			        <div class="row">
			          <div class="col-md-3 col-xs-12">			            
			          </div>
			          <div class="col-md-9 col-xs-12">
			            <?php 
			                include "koneksi.php";
			                $tbname = $_POST['tbname'];
			            ?>
			            <form action="pencarian.php" name="modal_popup" enctype="multipart/form-data" method="POST">               
			              <input type="hidden" name="tbname"  class="form-control" value="<?php echo $tbname; ?>" />
			              <ul class="searchtool">
			              <li>
			                <select name="searchby" class="form-control">
			                  <option value="-">Cari Berdasarkan</option>
			                  <option value="name">Nama</option>
			                  <option value="price">Harga</option>
			                  <option value="description">Description</option>
			                </select>
			              </li>
			              <li>
			                <input type="text" name="search"  class="form-control" placeholder="Cari Data" required/>
			              </li>
			              <li>
			                <button class="btn btn-success" type="submit">
			                    <i class="fa fa-search" aria-hidden="true"></i>
			                </button>
			              </li>
			              </ul>
			            </form>
			          </div>
			        </div>

					<div class="table-responsive">			          
			              <?php 
			                //menampilkan data mysqli
			                include "koneksi.php";
						    $tbname = $_POST['tbname'];
						    $search =  mysqli_real_escape_string($connection, $_POST['search']);
						    $searchby = $_POST['searchby'];   
			                $no = 0;
			                $modal=mysqli_query($connection, "SELECT * FROM $tbname WHERE $searchby like '%$search%'");
			                if ($modal) {
			                	if (mysqli_num_rows($modal)<1) {
			                		echo "<br><center>Maaf data yang anda cari tidak tersedia</center>";
			                	}
			                	else {
			              ?>
			              <table class="table table-striped jambo_table bulk_action">
				            <thead>
				              <tr class="headings">
				                <th class="column-title">ID</th>
				                <th class="column-title">Nama</th>
				                <th class="column-title">Harga</th>
				                <th class="column-title">Gambar</th>
				                <th class="column-title">Deskripsi</th>
				                <th class="column-title">Timestamp</th>
				                <th class="column-title no-link last"><span class="nobr">Action</span></th>
				              </tr>
				            </thead>
				            <tbody>
			              <?php
			                while($r=mysqli_fetch_array($modal)){
			                $no++;
			                     
			              ?>
			                <tr class="even pointer">
			                    <td><?php echo $r['id']; ?></td>
			                    <td><?php echo $r['name']; ?></td>
			                    <td><?php echo $r['price']; ?></td>
			                    <td><?php echo $r['image']; ?></td>
			                    <td><a href="#" data-target="#ModalDesc<?php echo $r['id']; ?>" data-toggle="modal">Lihat Deskripsi</a></td>
			                    <td><?php echo $r['create_date']; ?></td>
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
			                            <h4>Deskripsi <?php echo $r['name']; ?></h4>
			                        </div>
			                        <div class="modal-body">           
			                          <?php echo $r['description']; ?>
			                        </div>     
			                      </div>
			                  </div>
			                </div>
			              <?php 
			              			}
			          			}
			          		}
			          		else {
			          			echo "<br><center>Maaf data yang anda cari tidak tersedia</center>";
			          		} 

			              ?>
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

			                <div class="form-group" style="padding-bottom: 20px;">
			                  <label for="name">Nama</label>
			                  <input type="text" name="name"  class="form-control" placeholder="Nama" required/>
			                </div>

			                <div class="form-group" style="padding-bottom: 20px;">
			                  <label for="price">Harga</label>
			                  <input type="text" name="price"  class="form-control" placeholder="Harga" required/>
			                </div>                

			                <div class="form-group" style="padding-bottom: 20px;">
			                  <label for="description">Deskripsi</label>
			                   <textarea name="description"  class="form-control" placeholder="Deskripsi" required/></textarea>
			                </div>
			                
			                <div class="form-group" style="padding-bottom: 20px;">
			                  <label for="image">Gambar</label>
			                  <input type="file" name="image" class="form-control" required/>
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


          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gal Gadot Wedding Planner @2017
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->        


      </div>
    </div>


    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../vendors/build/js/custom.min.js"></script>
  </body>
</html>

<?php } ?>