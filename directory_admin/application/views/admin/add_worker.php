<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
      <title>specialist</title>
    </head>
    <body>
      <!-- Start : Side bar -->
      <?php 
         include('header.php');
         include('sidebar.php'); 
         ?>
      <!-- End : Side bar -->
      <div id="content">
        <!-- Start : Inner Page Content -->
        <div class="container">
          <!-- Start : Inner Page container -->
          <div class="crumbs">
            <ul id="breadcrumbs" class="breadcrumb">
              <li class="current">
                <i class="fa fa-home"></i>Ajouter un Emplo&eacute;
              </li>
            </ul>
          </div>
          <div class="page-header">
            <div class="page-title">
              <h3>Ajouter Employ&eacute;</h3>
            </div>
          </div>
          <div class="row">

            <div class="col-md-12">
                                <?php
	                                 echo form_open_multipart('specialist/add_worker');
	                             ?>
                     
					    <div class="form-group has-success col-md-8">
                         <label class="control-label" for="inputSuccess1"> Nom de l'employ&eacute;<span style="color:red;">*</span></label>
                         <input type="text" class="form-control" id="inputSuccess1" name="first_name" required>
                       </div>
					       <div class="form-group has-success col-md-8">
                         <label class="control-label" for="inputSuccess1"> Pr&eacute;nom de l'employ&eacute;<span style="color:red;">*</span></label>
                         <input type="text" class="form-control" id="inputSuccess1" name="last_name" required>
                       </div>
					    <div class="form-group has-success col-md-8">
                         <label class="control-label" for="inputSuccess1"> Adresse de l'employ&eacute;<span style="color:red;">*</span></label>
                         <input type="text" class="form-control" id="inputSuccess1" name="address" required>
                       </div>
					                     
                       <div class="form-group has-success col-md-8">
                         <label class="control-label" for="inputSuccess1">Ville<span style="color:red;">*</span></label>
                         <input type="text" class="form-control" id="inputSuccess1" name="city" required>
                       </div>
					    <div class="form-group has-success col-md-8">
                         <label class="control-label" for="inputSuccess1"> Num&eacute;ro de Mobile<span style="color:red;">*</span></label>
                         <input type="text" class="form-control" id="inputSuccess1" name="mobile" required>
                       </div>
              <div class="form-group has-success col-md-8">
                         <label class="control-label" for="inputSuccess1"> Email de l'enploy&eacute;<span style="color:red;">*</span></label>
                         <input type="email" class="form-control" id="inputSuccess1" name="email" required>
                       </div>   
					    <div class="form-group has-success col-md-8">
                         <label class="control-label" for="inputSuccess1"> Worker Join Date<span style="color:red;">*</span></label>
                         <input type="date" class="form-control" id="inputSuccess1" name="join_date" required>
                       </div>
              <div class="form-group has-success col-md-8">
                         <label class="control-label" for="inputSuccess1"> Worker working Time<span style="color:red;">*</span></label>
                         <input type="time" class="form-control" id="inputSuccess1" name="work_time" required>
                       </div>
            <div class="form-group has-success col-md-8">
                         <label class="control-label" for="inputSuccess1"> Image de l'employ&eacute;<span style="color:red;">*</span></label>
                         <input type="file" class="form-control" id="inputSuccess1" name="image" required>
                       </div>

					   <div>
                           <input type="hidden" class="form-control" id="inputSuccess1" name="created_by" required>
						</div>
                       <div class="form-group has-success col-md-6">
                          <button class="btn btn-danger" name="add_user" type="submit">AJOUTER</button><br/><br/>
                      </div>
                <?php
	       if(isset($res))
	         echo $res;
	      echo validation_errors(); ?>
	      <?php
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