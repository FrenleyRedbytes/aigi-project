<?php 
error_reporting(E_ALL); ini_set('display_errors', 1);
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
   if(!(isset($_SESSION['id'])))
   {
      header("location:index.php");
   }
   
include('db.php'); 

   
 ?>
 <style type="text/css">@media only screen and (max-width: 800px) {
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
         <?php include('header.php');
               include('sidebar.php'); ?>            
       <!-- End : Side bar -->
        <div id="content">  <!-- Start : Inner Page Content -->
            <div class="container"> <!-- Start : Inner Page container -->
                <div class="crumbs">    <!-- Start : Breadcrumbs -->
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="dashboard.php">Tableau de Bord</a>
                        </li>
                        <li class="current">Corporate User</li>
                    </ul>
                </div>  <!-- End : Breadcrumbs -->
                <div class="page-header">   <!-- Start : Page Header -->
                    <div class="page-title">
                        <h3>Corporate User</h3>
                    </div>
                </div>  <!-- End : Page Header -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption"><i class="fa fa-table"></i> Corporate User Details</div>                               
                                <div class="actions">
                                    <div class="btn-group">
                                        <a class="btn mini green" href="add_corporate.php" >
                                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Corporate User
                                        </a>
                                       </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <table class="table table-bordered table-hover DynamicTable">
                                    <thead>
                                        <tr>
                                            <th class="numeric">Nom</th>
                                            <th class="numeric">Email</th>
                                           <th class="numeric">Modifier</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                        <?php  $sql_con = mysqli_query($con,"SELECT * FROM admin WHERE `status`='0' order by id desc");
                               $count = 0;
                               while($row_con = mysqli_fetch_array($sql_con))
                               { 
                                $count=$count+1;
                              ?>
                               <tr id='trrow".$row_con['id']."' >
                                 <td class="center" class="numeric"><?php echo $row_con['name'];?></td>
                                 <td class="center" class="numeric"><?php echo $row_con['email'];?></td>
                                  <td class="numeric">
                                   <a class='btn btn-danger' href='javascript:void(0);' title='Delete'  onclick='delete_user(<?php echo $row_con['id'];?>);' ><i class='mdi-action-delete' >Supprimer</i></a>
                                  </td>
                               </tr>
                               <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  <!-- End : Inner Page container -->
            <a href="javascript:void(0);" class="scrollup">Scroll</a>
        </div>  <!-- End : Inner Page Content -->
    </div>  <!-- End : container -->
    <!-- =====modal box===== -->

      <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="btn pull-right" data-dismiss="modal">Fermer</button>
             <form class="form-horizontal row-border" id="validate-1" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" validate="validate">
            <h4 class="modal-title" id="myModalLabel">Cat&eacutegorie</h4>
            </div>
            <div class="modal-body">
              <label>Titre</label>
                <input type="text" name="title" id="title" placeholder="enter Title" class="form-control" required >
            </div>
            <div class="modal-body">
              <label>Description</label>
                <input type="text" name="description" id="description" placeholder="enter description" class="form-control" required >
            </div>
             <div class="modal-body">
              <label>Image</label>
                   <input type="file" name="file" id="myfile" placeholder="upload img" class="form-control" required >
            </div>
             <div class="modal-body">
              <label>Date </label>
                <input type="date" name="date" id="date" placeholder="Enter Date Captured"  class="form-control" required>
             </div>
         <div class="modal-footer">
             <input type="submit" value="Submit" name="user" class="btn"/>
        </div>
    </form>
    </div>
  </div>
</div>
      <!-- =====modal box===== -->

      <div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="btn pull-right" data-dismiss="modal">Fermer</button>
             <form class="form-horizontal row-border" id="validate-1" enctype="multipart/form-data" action="category.php" method="POST" validate="validate">
            <h4 class="modal-title" id="myModalLabel">METTRE A JOUR</h4>
            </div>
             <div class="modal-body">
                <input type="hidden" name="id1" id="id2" placeholder="enter id" class="form-control" >
            </div>
                       <div class="modal-body">
              <label>Titre</label>
                <input type="text" name="title1" id="title2" placeholder="enter Title" class="form-control" required >
            </div>
            <div class="modal-body">
              <label>Description</label>
                <input type="text" name="description1" id="description2" placeholder="enter description" class="form-control" required >
            </div>
           <!--  <div class="modal-body">
                <img src="" id="imgid" style='width:50px;height:50px;'>
            </div> -->
             <div class="modal-body">
              <label> <img src="" id="imgid" style='width:50px;height:50px;'></label>
                  <input type="file" name="file" id="myfile" placeholder="upload img" class="form-control" required >
            </div>

             <div class="modal-body">
              <label>Date </label>
                <input type="date" name="date1" id="date2" placeholder="Enter Date Captured"  class="form-control" required>
            </div>
            <div class="modal-footer">
               <input type="submit" value="Submit" name="update" class="btn"/>
        </div>
         </form>
    </div>
  </div>
</div>
      <!-- =====end modal box===== -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="assets/plugins/common/jquery.blockUI.js"></script>
    <script type="text/javascript" src="assets/plugins/common/jquery.event.move.js"></script>
    <script type="text/javascript" src="assets/plugins/common/lodash.compat.js"></script>
    <script type="text/javascript" src="assets/plugins/common/respond.min.js"></script>
    <script type="text/javascript" src="assets/plugins/common/excanvas.js"></script>
    <script type="text/javascript" src="assets/plugins/common/breakpoints.js"></script>
    <script type="text/javascript" src="assets/plugins/common/touch-punch.min.js"></script>
    <script type="text/javascript" src="assets/plugins/DataTables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/plugins/DataTables/js/DT_bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/plugins.js"></script>
    <script>
        $(document).ready(function(){
            App.init();
            DataTabels.init();
        });        
    </script>
    <script>
     function edit_user(id){
            jQuery.ajax({
                  type:'POST',
                  url:'query.php',
                  data:'method=18&id='+id,
                  success:function(res){
                       $('#edit_user').modal("show");
                      var jsonData = JSON.parse(res);
                      console.log(jsonData);
                      document.getElementById('id2').value =jsonData.edit_user.id1;
                      document.getElementById('title2').value =jsonData.edit_user.title1;
                      document.getElementById('description2').value =jsonData.edit_user.description1;
                      document.getElementById('date2').value = jsonData.edit_user.date1;
                      document.getElementById("imgid").src   = jsonData.edit_user.dateimg;
                      document.getElementById('myfile').value= jsonData.edit_user.dateimg;
                     // myfile
                      
                  }
              });
      }
     function delete_user(id){
            var result= confirm("Are you really want delete this category?");
            if(result==true){
                $.ajax({
                    type:'POST',
                    url:'query.php',
                    data:'method=1&id='+id,
                    success:function(res){
                     location.reload(); 
                    }
                });
            }
     }
</script>
        </body>  

</html>
