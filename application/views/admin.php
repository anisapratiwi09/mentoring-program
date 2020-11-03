
<body class="body">
	<div class="container-fluid" style="height : 678px;">
		<div class="d-flex justify-content-center h-100">
			<div class="card" style="background-color: rgba(168, 218, 220, 0.7) !important;">
				<div class="card-header">
					<h3><b>Admin Login</b></h3>
				</div>
				<div class="card-body">
					<form  action="<?php echo base_url('Admin/LoginAdmin'); ?>" method=POST>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control" placeholder="username">
							
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control" placeholder="password">
						</div>
						<div class="row align-items-center remember">
							<input type="checkbox">Remember Me
						</div>
						<div class="form-group">
							<input type="submit" value="Login" class="btn float-right login_btn">
						</div>
						<?php if ($this->session->flashdata('SuccessLogin')) { ?>
		          <script>
		          	swal("Success", "login Success", "success")
		          	.then((value) => {window.location.href='<?php echo base_url('dashboardadmin') ?>'});
		          </script>
		         
		          <!-- http://localhost/Mentoring-Pelindo-I/dashboardadmin -->
		        <?php } else if ($this->session->flashdata('FailedLogin')){ ?>
		        	<script type="text/javascript">
		        		swal("Failed", "Failed to login", "error");
		        	</script>
		        <?php } ?>

		        <!-- -->
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center">
						<a href="#" style="color : rgb(0, 0, 204)">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
