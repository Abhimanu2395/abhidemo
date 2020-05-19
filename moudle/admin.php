	
  <!DOCTYPE html>
<html lang="en">
<head>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>

	<body>      

			
			
		
            <div class="col-12 text-center my-5">
             <h4>
               Registration
             </h4>
            
            </div>
					
			<!--<form action="<?php //echo base_url(); ?>auth/register_auth" method="post" enctype="multipart/form-data">*/-->
		       
				<?php echo form_open_multipart('auth/abhi');?>
				      <form action ="auth/register_auth" method ="post" enctype="multipart/form-data">
 
	
				<div class="col-8 mx-auto">
					<div class="form-group">
						<label for="text-input">Name</label>
						
						  <input class="form-control" type="text" name="name" id="name"  placeholder="Enter Name" >
					</div>

					<div class="form-group">
						<label for="email-input">Email</label>
						
						  <input class="form-control" type="email" name="email"  id="email"  placeholder="Enter email" >
					</div>

          <!-- <a href="#" class="fa fa-facebook"></a> -->


					
					
					<!--<div class="form-group">
						<label for="example-phone-input">Phone</label>
						<?php echo form_error('phone'); ?>
						  <input class="form-control" type="text" name="phone"  id="phone"  placeholder="Enter Phone " >
					</div>
					
					
					<div class="form-group">
						<label for="example-password-input">Password</label>
						<?php echo form_error('password'); ?>
						  <input class="form-control" type="password" name="password"  id="password"  placeholder="Enter password" >
					</div>
					
					<div class="form-group">
						<label for="example-conpass-input">Confirm Password</label>
						<?php echo form_error('conpass'); ?>
						  <input class="form-control" type="password" name="conpass"  id="conpass"  placeholder="Enter Confirm Password" >
					</div>
					
					<div class="form-group">
						<label for="gender">Gender</label><br>
						<?php echo form_error('gender'); ?>
						  <input type="radio" name="gender" value="male" >Male
						  <input type="radio" name="gender" value="female" >Female
					</div>
				  
				    <div class="form-group">
						<label for="example-file-input" >File</label>
						<input class="form-control" type="file" name="resume" id="resume" >
					</div>
				  
				</div>-->

				<!--image-->
					<!-- <div class="form-group">
            <label for="email-input">image</label>
           
              <input type="file" name="uploaded_file[]" multiple="multiple">
          </div> -->
				  
				<center><input class="btn btn-primary " type="submit" name="submit" id="submit"  ></center>
			</form>
				<p>&nbsp;</p>
                <p>&nbsp;</p>

<script type="text/javascript">
   

 
 

</script>

              
						
			