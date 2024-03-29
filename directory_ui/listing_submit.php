<html lang="en">
	<head>
		<style type="text/css">
			.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}
		</style>
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
		<style type="text/css">
			.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{
				font-size:10px
			}
		</style>
		<style type="text/css">
			@media print {  
				.gm-style .gmnoprint, .gmnoprint {    display:none  }
			}
			@media screen {  
				.gm-style .gmnoscreen, .gmnoscreen {    display:none  }
			}
		</style>
<?php include 'header.php'; ?> 
<script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/28/18/common.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/28/18/map.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/28/18/util.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/28/18/marker.js"></script><style type="text/css">.gm-style {
        font: 400 11px Roboto, Arial, sans-serif;
        text-decoration: none;
      }
      .gm-style img { max-width: none; }</style><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/28/18/onion.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/28/18/infowindow.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/28/18/stats.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/28/18/controls.js"></script></head>
<body>
<div id="vfx_loader_block" style="display: none;">
  <div class="vfx-loader-item"> <img src="images/loading.gif" alt=""> </div>
</div>
<?php include('menu.php');?>
<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="breadcrum-inner-header">
          <h1>Submit Listing</h1>
          <a href="index.php">Home</a> <i class="fa fa-circle"></i> <a href="about.php"><span>Submit Listing</span></a> </div>
      </div>
    </div>
  </div>
</div>
<div id="pricing-item-block" class="white_bg_block">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="col-md-12 all-categorie-list-title bt_heading_3">
          <h1>Submit <span>Listing</span></h1>
          <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-4 col-xs-12">
            <div id="leftcol_item">
              <div class="user_dashboard_pic"> <img alt="user photo" src="images/user-profile.png"> <span class="user-photo-action">Click here to Reupload</span> </div>
            </div>
            <div class="dashboard_nav_item">
              <ul>
                <li><a href="dashboard.php"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                <li class="active"><a href="listing_submit.php"><i class="fa fa-pencil"></i> Submit Listing</a></li>
                <li><a href="edit_profile.php"><i class="fa fa-user"></i> Edit Profile</a></li>
                <li><a href="my_listing.php"><i class="fa fa-list-ul"></i> My Listing</a></li>
                <li><a href="change_password.php"><i class="fa fa-key"></i> Change Password</a></li>
                <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-9 col-sm-8 col-xs-12">
            <div id="submit_listing_box">
              <h3>Description</h3>
              <form class="form-alt">
                <div class="form-group">
                  <label>Title :-</label>
                  <input placeholder="Title" class="form-control" type="text">
                </div>
                <div class="form-group">
                  <label>Listing Description :-</label>
                  <textarea placeholder="Listing description..." class="form-control" rows="5"></textarea>
                </div>
              </form>
            </div>
            <div id="submit_listing_box">
              <h3>Attributes</h3>
              <form class="form-alt">
                <div class="row">
                  <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <label>Property Type :-</label>
                    <select class="form-control selectcategory" name="parent-cateogry">
                      <option value="0">Select Category</option>
                      <option value="1">Property Type</option>
                      <option value="2">Automotive</option>
                      <option value="3">Food</option>
                      <option value="4">Shopping</option>
                      <option value="5">Other</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <label>Contract :-</label>
                    <select class="form-control selectcategory" name="parent-cateogry">
                      <option value="0">Select Contract</option>
                      <option value="1">Lorem Ipsum</option>
                      <option value="2">Lorem Ipsum</option>
                      <option value="3">Lorem Ipsum</option>
                      <option value="4">Lorem Ipsum</option>
                      <option value="5">Other</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <label>Location :-</label>
                    <select class="form-control selectcategory" name="parent-cateogry">
                      <option value="0">Select Location</option>
                      <option value="1">Lorem Ipsum</option>
                      <option value="2">Lorem Ipsum</option>
                      <option value="3">Lorem Ipsum</option>
                      <option value="4">Lorem Ipsum</option>
                      <option value="5">Other</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <label>Price :-</label>
                    <input placeholder="Price" class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <label>Address :-</label>
                    <input placeholder="Address" class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <label>City :-</label>
                    <input placeholder="City" class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <label>Phone :-</label>
                    <input placeholder="Phone" class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <label>E-mail :-</label>
                    <input placeholder="Email" class="form-control" type="text">
                  </div>
                </div>
              </form>
            </div>
            <div id="submit_listing_box">
              <h3>Working Hours</h3>
              <form class="form-alt">
                <div class="row">
                  <div class="form-group col-md-4 col-sm-6 col-xs-6">
                    <label>Monday :-</label>
                    <input class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-4 col-sm-6 col-xs-6">
                    <label>Tuesday :-</label>
                    <input class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-4 col-sm-6 col-xs-6">
                    <label>Wednesday :-</label>
                    <input class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-4 col-sm-6 col-xs-6">
                    <label>Thursday :-</label>
                    <input class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-4 col-sm-6 col-xs-6">
                    <label>Friday :-</label>
                    <input class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-4 col-sm-6 col-xs-6">
                    <label>Saturday :-</label>
                    <input class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-4 col-sm-6 col-xs-6">
                    <label>Sunday :-</label>
                    <input class="form-control" type="text">
                  </div>
                </div>
              </form>
            </div>
            <div id="submit_listing_box">
              <h3>Map Position</h3>
              <form class="form-alt">
                <div class="row">
                  <div class="form-group col-md-6 col-sm-6- col-xs-12">
                    <label>Latitude :-</label>
                    <input placeholder="Latitude" class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-6 col-sm-6- col-xs-12">
                    <label>Lontgitude :-</label>
                    <input placeholder="Lontgitude" class="form-control" type="text">
                  </div>
                </div>
              </form>
              <div id="location-map">
                <div id="googleMap" class="map_view_location" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; position: absolute; left: 225px; top: 36px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 481px; top: 36px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 481px; top: -220px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 225px; top: -220px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 225px; top: 292px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 481px; top: 292px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -31px; top: 36px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 737px; top: 36px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -31px; top: 292px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 737px; top: -220px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -31px; top: -220px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 737px; top: 292px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 225px; top: 36px;"><canvas draggable="false" height="256" width="256" style="user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 481px; top: 36px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 481px; top: -220px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 225px; top: -220px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 225px; top: 292px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 481px; top: 292px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -31px; top: 36px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 737px; top: 36px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -31px; top: 292px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 737px; top: -220px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -31px; top: -220px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 737px; top: 292px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="position: absolute; left: 225px; top: 36px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i9!2i356!3i223!4i256!2m3!1e0!2sm!3i379069348!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=80758" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 481px; top: 36px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i9!2i357!3i223!4i256!2m3!1e0!2sm!3i379069348!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=129547" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 225px; top: -220px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i9!2i356!3i222!4i256!2m3!1e0!2sm!3i379069348!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=44737" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 481px; top: -220px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i9!2i357!3i222!4i256!2m3!1e0!2sm!3i379069348!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=93526" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 481px; top: 292px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i9!2i357!3i224!4i256!2m3!1e0!2sm!3i379069348!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=34497" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -31px; top: 36px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i9!2i355!3i223!4i256!2m3!1e0!2sm!3i379069348!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=31969" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 737px; top: 36px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i9!2i358!3i223!4i256!2m3!1e0!2sm!3i379069396!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=10932" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -31px; top: 292px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i9!2i355!3i224!4i256!2m3!1e0!2sm!3i379069348!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=67990" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 225px; top: 292px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i9!2i356!3i224!4i256!2m3!1e0!2sm!3i379069348!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=116779" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 737px; top: -220px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i9!2i358!3i222!4i256!2m3!1e0!2sm!3i379069396!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=105982" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -31px; top: -220px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i9!2i355!3i222!4i256!2m3!1e0!2sm!3i379069348!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=127019" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 737px; top: 292px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i9!2i358!3i224!4i256!2m3!1e0!2sm!3i379069264!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=66048" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"><div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div></div><div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div><iframe frameborder="0" style="z-index: -1; border: 0px none; position: absolute; height: 100%; width: 100%; padding: 0px; margin: 0px; left: 0px; top: 0px;"></iframe></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=22.3039,70.8022&amp;z=9&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 253px; top: 60px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2017 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 168px; bottom: 0px; width: 121px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2017 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2017 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 96px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.php" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@22.3039,70.8022,9z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="93" style="margin: 10px; user-select: none; position: absolute; bottom: 107px; right: 28px;"><div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 38px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;"><div title="Zoom in" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div><div title="Zoom out" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div></div></div><div class="gm-svpc" controlwidth="28" controlheight="28" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px;"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"><div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Pegman is on top of the Map" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div title="Rotate map 90 degrees" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; cursor: pointer; background-color: rgb(255, 255, 255); display: none;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show street map" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 21px; font-weight: 500;">Map</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; left: 0px; top: 28px; text-align: left; display: none;"><div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div></div></div><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show satellite imagery" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-left: 0px; min-width: 37px;">Satellite</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 29px; text-align: left; display: none;"><div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div></div></div></div>
              </div>
            </div>
            <div id="submit_listing_box">
              <h3>Gallery</h3>
              <div class="fileupload_block">
                <input type="file" name="fileupload" value="fileupload" id="fileupload">
                <div class="fileupload_img"> <img type="image" src="images/add_image.png" alt="add image"> </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div id="submit_listing_box">
              <h3>Amenities</h3>
              <div class="amenities_block">
                <ul class="detail-amenities">
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-1" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-1">WiFi</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-2" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-2">Parking</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-3" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-3">Vine</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-4" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-4">Terrace</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-5" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-5">Bar</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-6" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-6">Take Away Coffee</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-7" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-7">Catering</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-8" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-8">Raw Food</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-9" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-9">Delivery</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-10" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-10">No-smoking room</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-11" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-11">WiFi</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-12" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-12">Parking</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-13" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-13">Vine</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-14" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-14">Terrace</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-15" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-15">Bar</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-16" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-16">Take Away Coffee</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-17" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-17">Catering</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-18" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-18">Raw Food</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-19" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-19">Delivery</label>
                    </div>
                  </li>
                  <li>
                    <div class="checkbox checkbox-success">
                      <input class="styled" value="5" id="checkbox-20" name="checkbox" type="checkbox">
                      <label class="control-label" for="checkbox-20">No-smoking room</label>
                    </div>
                  </li>
                  <div class="clearfix"></div>
                </ul>
              </div>
            </div>
            <div class="from-list-lt">
              <div class="form-group">
                <button class="btn pull-right" type="submit">Submit Listing</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php');?>
<!--================================ Login and Register Forms ===========================================--> 

<!-- login form -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="listing-modal-1 modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel"> Login</h4>
      </div>
      <div class="modal-body">
        <div class="listing-login-form">
          <form action="#">
            <div class="listing-form-field"> <i class="fa fa-user blue-1"></i>
              <input class="form-field bgwhite" type="text" name="user_name" placeholder="username">
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" name="user_pass" placeholder="password">
            </div>
            <div class="listing-form-field clearfix margin-top-20 margin-bottom-20">
              <input type="checkbox" id="checkbox-1-1" class="regular-checkbox">
              <label for="checkbox-1-1"></label>
              <label class="checkbox-lable">Remember me</label>
              <a href="#">forgot password?</a> </div>
            <div class="listing-form-field">
              <input class="form-field submit" type="submit" value="login">
            </div>
          </form>
          <div class="bottom-links">
            <p>not a member?<a href="#">create account</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- registration form -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="listing-modal-1 modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel2">Registration</h4>
      </div>
      <div class="modal-body">
        <div class="listing-register-form">
          <form action="#">
            <div class="listing-form-field"> <i class="fa fa-user blue-1"></i>
              <input class="form-field bgwhite" type="text" name="user_name" placeholder="name">
            </div>
            <div class="listing-form-field"> <i class="fa fa-envelope blue-1"></i>
              <input class="form-field bgwhite" type="email" name="user_email" placeholder="email">
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" name="user_password" placeholder="password">
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" name="user_confirm_password" placeholder="confirm password">
            </div>
            <div class="listing-form-field clearfix margin-top-20 margin-bottom-20">
              <input type="checkbox" id="checkbox-1-2" class="regular-checkbox">
              <label for="checkbox-1-2"></label>
              <label class="checkbox-lable">i agree with</label>
              <a href="#">terms &amp; conditions</a> </div>
            <div class="listing-form-field">
              <input class="form-field submit" type="submit" value="create account">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Scripts --> 
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script> 
<script type="text/javascript" src="js/wow.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/jquery_custom.js"></script> 
<script src="http://maps.googleapis.com/maps/api/js"></script> 
<script type="text/javascript">
$(document).ready(function(){
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn();
		} else {
			$('.scrollup').fadeOut();
		}
	});
	$('.scrollup').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
	});
});
</script> 
<script>
var myCenter=new google.maps.LatLng(22.3039,70.8022);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:9,
  scrollwheel: false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({
        position: myCenter, 
        map: map,
        title:"Hello World!"
});

marker.setMap(map);
var infowindow = new google.maps.InfoWindow({
  content:"Hello Address"
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

</body></html>