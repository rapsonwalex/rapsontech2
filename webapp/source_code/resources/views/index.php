<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>

   img{
	   height:100px;
	   weight:100px;
	   border-radius: 100%;
   }
   .name{
	  color: gray; 
	  padding-top:15px;
   }
   
   .title
   {
	    margin: 0;
		font-weight: 700;
		font-size: 28px;
		line-height: 32px;
   }
   
   .select_date_time{
    margin: 0;
    font-weight: 700;
    font-size: 19px;
    line-height: 32px;
    margin-bottom: 30px;
   }
   
   .write_up{
	   
	margin: 0;
    padding: 0;
    font-size: 16px;
    font-family: proxima nova,sans-serif;
    line-height: 1.5;
	   
   }
   .col-one{   
	   padding: 3% 3% 2% 0;
       border-right: 1px solid #b9c6b9;
   }
    .col-two{   
	   padding: 3% 3% 2% 3%;
   }
   
   .col-three{
	   padding: 3% 3% 2% 3%;
   }
   
   .box{
	box-shadow: 1px 1px 25px 1px #e1dada;
    margin-top: 300px;
    padding-left: 50px;
    border-radius: 20px;
   }
   
   body
   {
	   
   }
   
   p{
	margin: 0;
    padding: 0;
    font-size: 16px;
    font-family: proxima nova,sans-serif;
    line-height: 1.5;
   }
   
   .table-condensed{
	   font-size:27 !important;
   }
   
   
   .day{
	width: 44px !important;
    height: 44px !important;
    margin-right: auto;
    margin-left: auto;
    padding: 1px 0 0;
    font-size: 16px;
    text-align: center;
    border: 1px solid transparent;
    border-radius: 50%;
    color: #0060e6;
    font-weight: 700 !important;
    background-color: var(--primary-color-level4,rgba(0,105,255,0.065));
    border-radius: 100% !important;
	
	   
   }
   
   .disabled{
    color: var(--text-color-level2,rgba(26,26,26,0.6)) !important;
	    background-color: white;
   }
   
   .dow{
	font-weight: 400;
    font-size: 12px;
    line-height: 1;
    text-transform: uppercase;
   }
   
   .time-btn
   {
	       width: 70%;
			height: 52px;
			color: var(--primary-color,rgb(0,105,255));
			border: 1px solid var(--primary-color-level2,rgba(0,105,255,0.5));
			margin-bottom:10px;
   }
   
   #selected_date{
	   margin-bottom:15px;
   }
   
   .right{
	    margin-bottom:15px;
   }
   
   
   
  
   
</style>
<div class="container">
	<div class="row box">
	<div class="col-one col-md-4">
	   <div class="row">
		  <div class="col-md-12">
			 <img src="https://d3v0px0pttie1i.cloudfront.net/uploads/team/avatar/117739/18e6a694.jpeg" alt="Avatar" class="_y8IoUsgEFlwh0CSC69R _y4Zi2iE_a7Rsg377UWG PFFjeYwGn2sDlJIk0mB2 TCyA5oyVnMjxYa3Ytspi">
		  </div>
	   </div>
	   <div class="row">
		  <div class="col-md-12">
			 <div class="name">Ashoori Law</div>
		  </div>
	   </div>
	   <div class="row">
		  <div class="col-md-12">
			 <div class="title">Initial Immigration Telephone Consultation</div>
		  </div>
	   </div>
	   <div class="row">
		  <div class="col-md-12">
			 <div class="name"><i class="fas fa-clock"></i> 30 min</div>
			 <br/>
			 <p>Please select a day and time for your consultation. We are looking forward to speaking with you!</p>
			 <br/>
			 <br/>
			 <br/>
			 <p>Exclusions Apply. Not everyone will qualify for a free consultation. <a href="https://www.ashoorilaw.com/disclaimer/" target="_blank">Disclaimer</a>.</p>
		  </div>
	   </div>
	   <div class="row">
	</div>
	</div>
	<div class="col-two col-md-4">
		  <div style="overflow:hidden;">
			   <div class="form-group">
			       <div class="row">
					 <div class="col-md-8">
						<div class="select_date_time">Select Date & Time</div>
					 </div>
				  </div>
				  <div class="row">
					 <div class="col-md-8">
						<div id="datetimepicker12"></div>
					 </div>
				  </div>
			   </div>
				   
		   </div>
	   </div>
	   <div id="ajax" class="col-three col-md-4">
	      
	   </div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js" integrity="sha512-eYSzo+20ajZMRsjxB6L7eyqo5kuXuS2+wEbbOkpaur+sA2shQameiJiWEzCIDwJqaB0a4a6tCuEvCOBHUg3Skg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">

				  $(function () {
					  $('#datetimepicker12').datepicker({
						  inline: true,
						  sideBySide: true,
						  startDate: new Date(),
						  daysOfWeekDisabled: [0],
						  
					  }).on('changeDate', function(e) {  
							//console.log(e.format());  
							$("#query_date").val(e.format())
							
							  var url = "confirm_btn.php"
							  $.ajax({
								type: 'POST',
								url: url,
								data: {date_string: e.format()},
								beforeSend: function() {
									$('div.box').block({ message: "loading" });
								},
								success: function(data) {
									$('div.box').unblock();
									$("#ajax").html(data);
								},
								error: function(xhr) { // if error occured
									
									
								},
								complete: function() {
									
								},
								dataType: 'html'
							});
							
						});  


				  });
				  
				  function show_confirm(btn_id)
				  {
					  $(".left").show();
					  $(".right").hide();
					  
					  $(".div"+btn_id+"confirm").show("fast");
					  $(".div"+btn_id+"btn").hide("fast");
					  
					  
				  }
				  
				  
				  
				  
			   </script>