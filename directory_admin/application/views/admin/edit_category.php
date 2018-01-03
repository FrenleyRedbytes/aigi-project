<?php 
  include('header.php');
  include('sidebar.php'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <style type="text/css">
  @media only screen and (max-width: 800px) {
    #unseen table td:nth-child(2), 
    #unseen table th:nth-child(2) {display: none;}
  }
  @media only screen and (max-width: 640px) {
      #unseen table td:nth-child(4),
      #unseen table th:nth-child(4),
      #unseen table td:nth-child(7),
      #unseen table th:nth-child(7),
      #unseen table td:nth-child(8),
      #unseen table th:nth-child(8){display: none;}
  }
  td {
  word-wrap:break-word!important;
  }
</style>
    <style type="text/css">
      .paginate_button{
        padding: 0px 10px;
      }
      .dataTables_filter{
        margin-top: -25px;
      }
      .page-header {
        padding-bottom: 0px;
        margin: 14px 1px 0px;
        border-bottom: 0px solid #eee;
      }
      /*.navbar .navbar-brand{
        margin-left: -90px !important;
      }*/
    </style>
    <script>
      $(document).ready(function() {
      $('#example').DataTable();
      } );
    </script>
  </head>
  <body>
<div id="content">
  <div class="container">
    <!-- <div class="crumbs">
      <ul id="breadcrumbs" class="breadcrumb">
        <li class="current">
          <i class="fa fa-home"></i>Edit Category
        </li>
      </ul>
    </div> -->
    <div class="page-header" >
      <div class="page-title">
        <h3 style="color: #850035;">Modifier une cat&eacute;gorie</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
                <?php
                    echo form_open_multipart('dashboard/update_enquiry');
                    foreach($res as $x){
                  ?>
                      <div class="form-group has-success col-md-8">
                          <label class="control-label" for="inputSuccess1"> Nom de la cat&eacute;gorie<span style="color:red;">*</span></label>
                          <input type="hidden" class="form-control" id="inputSuccess1" name="cat_id" value="<?php echo $x['cat_id'];?>" readonly>
                          <input type="text" class="form-control" id="inputSuccess1" name="name" value="<?php echo $x['name'];?>">
                      </div>
		      
		 <div class="form-group has-success col-md-8">
                          <label class="control-label" for="inputSuccess1"> Position<span style="color:red;">*</span></label>
                          <input type="text" class="form-control" id="inputSuccess1" name="icon" value="<?php echo $x['icon'];?>">
                      </div>    
		      
		      
		      
                      <div class="form-group has-success col-md-8">
                          <label class="control-label" for="inputSuccess1">Image Web<span style="color:red;">*</span></label>
                          <input type="file" class="form-control" id="inputSuccess1" name="userfile" value="/directory_admin/uploads/<?php echo $x['logo']; ?>">
                           <img src="/directory_admin/uploads/<?php echo $x['logo']; ?>" style="height:50px;width:50px">
                           <input type="hidden" name="abc1" value="<?php echo $x['logo']; ?>">
                      </div>
                        <div class="form-group has-success col-md-8">
                          <label class="control-label" for="inputSuccess1">Image Application<span style="color:red;">*</span></label>
                          <input type="file" class="form-control" id="inputSuccess1" name="userfile1" value="/directory_admin/uploads/<?php echo $x['logo1']; ?>">
                          <img src="/directory_admin/uploads/<?php echo $x['logo1']; ?>" style="height:50px;width:50px">
                          <input type="hidden" name="abc" value="<?php echo $x['logo1']; ?>">
                      </div>
                      <div class="form-group has-success col-md-6">
                          <button class="btn btn-danger" name="add_category" type="submit">METTRE A JOUR</button><br/><br/>
                      </div>

                    <?php }
                    echo form_close(); 
                    ?>

            </div>
          </div>
        </div>
      </div>
      <a href="javascript:void(0);" class="scrollup">Scroll</a>
    </div>
  </div>
  <?php include('footer.php');?>
  </body>
  </html>