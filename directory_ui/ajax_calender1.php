<?php 
 session_start();
	include 'db.php';

	$spe_id=$_GET['spe_id'];
	$ser_id=$_GET['ser_id'];

	$jour = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");

	$data_value12=mysqli_query($con,"SELECT * FROM service WHERE spe_id='$spe_id'and serv_title='$ser_id' ");
	$data_ar11=mysqli_fetch_array($data_value12);
	$service_time=$data_ar11['time'];
?>

<div class="my_table">
<div class="head_div">
<!--<span class="table_icon left"> <img src="images/left1.png"> </span>-->

<?php for($k=0;$k<3;$k++) { 

	$hou=9;
	$j=0;
?>

<div class="head_part">
	<h3> 	<?php echo $jour[date('w',strtotime("+$k day"))];echo "<br>"; ?>
			<?php echo date('d-m-Y',strtotime("+$k day")); ?>
	</h3>
</div>
	
<?php } ?>

<!--<span class="table_icon right"> <img src="images/right1.png" onclick="right('<?php //echo date('Y-m-d',strtotime("+2 day"));?>','<?php //echo $spe_id; ?>','<?php //echo $ser_id; ?>')"> </span>-->
</div>
<div class="body_div">
	
<?php for($k=0;$k<3;$k++) { 

	$hou=9;
	$j=0;
?>
	
<div class="body_row">
	
<?php
	$sql=mysqli_query($con,"SELECT * FROM specialist WHERE spr_id='$spe_id'");
    $sql1=mysqli_fetch_array($sql);

    /*
	$str_am=$sql1['shop_str_time_am'];
    $en_am=$sql1['shop_en_time_am'];
   
    $str_pm=$sql1['shop_str_time_pm'];
    $en_pm=$sql1['shop_en_time_pm'];
	*/
	
	//Les plages d'ouvertures/fermetures sont calquées sur le lundi	
	$str_am=$sql1['mon_from_am_time'];
	$en_am=$sql1['mon_to_am_time'];
	$str_pm=$sql1['mon_from_pm_time'];	
	$en_pm=$sql1['mon_to_pm_time'];	
		
	/*
	$mon_from_am_time=$sql1['mon_from_am_time'];
	$mon_to_am_time=$sql1['mon_to_am_time'];
	$mon_from_pm_time=$sql1['mon_from_pm_time'];	
	$mon_to_pm_time=$sql1['mon_to_pm_time'];
		
	$tue_from_am_time=$sql1['$tue_from_am_time'];
	$tue_to_am_time=$sql1['$tue_to_am_time'];
	$tue_from_pm_time=$sql1['$tue_from_pm_time'];	
	$tue_to_pm_time=$sql1['$tue_to_pm_time'];
		
	$wed_from_am_time=$sql1['$wed_from_am_time'];
	$wed_to_am_time=$sql1['$wed_to_am_time'];
	$wed_from_pm_time=$sql1['$wed_from_pm_time'];	
	$wed_to_pm_time=$sql1['$wed_to_pm_time'];
		
	$thu_from_am_time=$sql1['$thu_from_am_time'];
	$thu_to_am_time=$sql1['$thu_to_am_time'];
	$thu_from_pm_time=$sql1['$thu_from_pm_time'];	
	$thu_to_pm_time=$sql1['$thu_to_pm_time'];
		
	$fri_from_am_time=$sql1['$fri_from_am_time'];
	$fri_to_am_time=$sql1['$fri_to_am_time'];
	$fri_from_pm_time=$sql1['$fri_from_pm_time'];	
	$fri_to_pm_time=$sql1['$fri_to_pm_time'];
		
	$sat_from_am_time=$sql1['$sat_from_am_time'];
	$sat_to_am_time=$sql1['$sat_to_am_time'];
	$sat_from_pm_time=$sql1['$sat_from_pm_time'];	
	$sat_to_pm_time=$sql1['$sat_to_pm_time'];
		
	$sun_from_am_time=$sql1['$sun_from_am_time'];
	$sun_to_am_time=$sql1['$sun_to_am_time'];
	$sun_from_pm_time=$sql1['$sun_from_pm_time'];	
	$sun_to_pm_time=$sql1['$sun_to_pm_time'];
	*/	
		
    $weekend=$sql1['weekend'];
	
	for($i=0;$i<25;$i++){
		
		$start_time=$str_am;
		$start_time1=explode(':',$start_time);
		$end_time=$en_am;
		$end_time1=explode(':',$end_time);
		
		for($i=$start_time*60+$start_time1[1];$i<=$end_time*60+$end_time1[1];$i+=15){
  			
			$show_new_time= floor($i/60) . ":" . ($i/60-floor($i/60))*60; 
  			$current_date=date('m/d/Y',strtotime("+$k day"));
  			$time=$hou+$j.":00:00";

			$a=mysqli_query($con,"select * from worker where spe_id='$spe_id'"); 
			$sum=0;
			$sum1=0;
			$sum3=0;
			
			while($data=mysqli_fetch_array($a)){
				
				$worker=$data['work_id']; 
				
				$ser=mysqli_query($con,"select * from worker_service where worker_service_id='$worker' and service_id='$ser_id' ");
				$worker_id_with_service=mysqli_fetch_array($ser);
				$worker_id1=$worker_id_with_service['worker_service_id'];
				$num_rows1 = mysqli_num_rows($ser);
				$sum+=$num_rows1;
				
				$worker_holiday=mysqli_query($con,"select * from worker_holiday where worker_id='$worker_id1' ");
				$data1=mysqli_fetch_array($worker_holiday);
				$query1 = "";
                              
				if(!empty($data1['day_leave_start']) || !empty($data1['day_leave_end'])){
					
					$day_leave_start=$data1['day_leave_start'];
					$day_leave_end=$data1['day_leave_end'];
					$query1 = "BETWEEN '$day_leave_start' and '$day_leave_end'";
					$worker_holiday1=mysqli_query($con,"select * from worker_holiday where worker_id='$worker_id1' and  '$current_date' $query1 ");
					$num_rows11 = mysqli_num_rows($worker_holiday1);
					$sum1+=$num_rows11;                              
				}  
			}
			
			//$sum1;
			//$sum1;
			$abc=$sum-$sum1;
			$current_date1=date('Y-m-d',strtotime("+$k day"));
			$a=explode(':', $show_new_time);
			
			if(strlen($a[0])==1 || strlen($a[1])==1){
				
				if(strlen($a[1])==1){
					$show_new_time=$show_new_time.'0';
				}else{
					$show_new_time=$show_new_time;
				}
                
				if(strlen($a[0])==1){
					$show_new_time='0'.$show_new_time;
				}else{
					$show_new_time=$show_new_time;
				}
                
				$showdata=$show_new_time.':00';//09:00:00
			}
			else{
				$showdata=$show_new_time.':00';             
			}
            
			//$add_booking=mysqli_query($con,"select * from add_booking_new where spe_id='$spe_id' and service_id='$ser_id' and date_booking='$current_date1' and FIND_IN_SET('$showdata',time_booking) and status='1' ");
			$add_booking=mysqli_query($con,"select * from add_booking_new where spe_id='$spe_id' and date_booking='$current_date1' and FIND_IN_SET('$showdata',time_booking) and status='1' ");
                            
			while($data3=mysqli_fetch_array($add_booking)){
				
				if($data3['worker_id']!='0'){
					$sum3+=count($data3['worker_id']);
				}
			} 
			
			//$sum3;

			date_default_timezone_set('Europe/Paris');
			
			$current_time=date('H:i:s');
			$current_date_loop=date('m/d/Y',strtotime("+$k day"));
			$current_date_show=date('m/d/Y');   

			$loop_day=date('l',strtotime("+$k day"));
			$database_day1=explode(',',$weekend);
			$database_day=in_array($loop_day, $database_day1);

			if(($abc<=$sum3) || (($current_date_show==$current_date_loop) && ($showdata<$current_time)) || ($database_day)){
?>

				<div class="body_part">
					<button type="button" disabled style="background-color: gray;"> <?php echo $show_new_time; ?> </button>
				</div>
                       
<?php 		}else{ ?>

  <?php if (!isset($_SESSION['email'])) { ?>
             
				<div class="body_part">
                    <button type="button" data-toggle="modal" data-target="#login"> <?php echo $show_new_time; ?> </button>
				</div>
				
				<?php } else { ?>
					
				<div class="body_part">
                    <button type="button" onclick="valid('<?php echo date('l',strtotime("+$k day")); ?>','<?php echo date('Y-m-d',strtotime("+$k day")); ?>','<?php echo $showdata; ?>','<?php echo $spe_id; ?>','<?php echo $ser_id; ?>');"> <?php echo $show_new_time; ?> </button>
				</div>
				<?php  }  ?>
<?php } 

		}//for loop new

		$start_time=$str_pm;
		$start_time11=explode(':',$start_time);
		$end_time=$en_pm;
		$end_time11=explode(':',$end_time);
		
		for($i=$start_time*60+$start_time11[1];$i<=$end_time*60+$end_time11[1];$i+=15){
			
  			$show_new_time= floor($i/60) . ":" . ($i/60-floor($i/60))*60;  

			$current_date=date('m/d/Y',strtotime("+$k day"));
			$time=$hou+$j.":00:00";

			$a=mysqli_query($con,"select * from worker where spe_id='$spe_id'"); 
			$sum=0;
			$sum1=0;
			$sum3=0;
                            
			while($data=mysqli_fetch_array($a)){
				
				$worker=$data['work_id']; 
				
				$ser=mysqli_query($con,"select * from worker_service where worker_service_id='$worker' and service_id='$ser_id' ");
				$worker_id_with_service=mysqli_fetch_array($ser);
				$worker_id1=$worker_id_with_service['worker_service_id'];
				$num_rows1 = mysqli_num_rows($ser);
				
				$sum+=$num_rows1;
				
				$worker_holiday=mysqli_query($con,"select * from worker_holiday where worker_id='$worker_id1' ");
				$data1=mysqli_fetch_array($worker_holiday);
				$query1 = "";
				
				if(!empty($data1['day_leave_start']) || !empty($data1['day_leave_end'])){
                                  
					$day_leave_start=$data1['day_leave_start'];
					$day_leave_end=$data1['day_leave_end'];
					$query1 = "BETWEEN '$day_leave_start' and '$day_leave_end'";
					$worker_holiday1=mysqli_query($con,"select * from worker_holiday where worker_id='$worker_id1' and  '$current_date' $query1 ");
					$num_rows11 = mysqli_num_rows($worker_holiday1);
					$sum1+=$num_rows11; 
				}  
            }
             
			$sum1;
			$sum1;
			$abc=$sum-$sum1;
			$current_date1=date('Y-m-d',strtotime("+$k day"));
			$a=explode(':', $show_new_time);
			
            if(strlen($a[0])==1 || strlen($a[1])==1){
				
				if(strlen($a[1])==1){
					$show_new_time=$show_new_time.'0';
				}else{
					$show_new_time=$show_new_time;
				}
                                
				if(strlen($a[0])==1){
					$show_new_time='0'.$show_new_time;
				}else{
					$show_new_time=$show_new_time;
				}
                                
				$showdata=$show_new_time.':00';//09:00:00
			}
			else{
				$showdata=$show_new_time.':00';             
			}
            
			$add_booking=mysqli_query($con,"select * from add_booking_new where spe_id='$spe_id' and service_id='$ser_id' and date_booking='$current_date1' and FIND_IN_SET('$showdata',time_booking) and status='1' ");
                            
			while($data3=mysqli_fetch_array($add_booking)){
				
				if($data3['worker_id']!='0'){
					$sum3+=count($data3['worker_id']);
				}
			} 
                              
			$sum3;   
			date_default_timezone_set('Europe/Paris'); 
			$current_time=date('H:i:s');
			$current_date_loop=date('m/d/Y',strtotime("+$k day"));
			$current_date_show=date('m/d/Y');   
			$loop_day=date('l',strtotime("+$k day"));
			$database_day1=explode(',',$weekend);
			$database_day=in_array($loop_day, $database_day1);

			if(($abc<=$sum3) || (($current_date_show==$current_date_loop) && ($showdata<$current_time)) || ($database_day)){
?>
	
				<div class="body_part">
					<button type="button" disabled style="background-color: gray;"> <?php echo$show_new_time; ?> </button>
				</div>
<?php }else{ ?>
 <?php if (!isset($_SESSION['email'])) { ?>
             	<div class="body_part">
                    <button type="button" data-toggle="modal" data-target="#login" > <?php echo $show_new_time; ?> </button>
				</div>
				
				
				<?php } else { ?>
				<div class="body_part">
                    <button type="button" onclick="valid('<?php echo date('l',strtotime("+$k day")); ?>','<?php echo date('Y-m-d',strtotime("+$k day")); ?>','<?php echo $showdata; ?>','<?php echo $spe_id; ?>','<?php echo $ser_id; ?>');"> <?php echo $show_new_time; ?> </button>
				</div>
				<?php  }  ?>


<?php } 
		}//for loop new
	}
?>
	
</div>
	
<?php } ?>
	
</div>
</div>
 <script type="text/javascript">
    $('.body_part button').on('click', function(){
		  $('.body_part button').removeClass('active');
		  $(this).addClass('active');
  	})
 </script>