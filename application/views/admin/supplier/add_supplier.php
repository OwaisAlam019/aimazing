<div class="container">
	<div class="row">
		<div id="content" class="col-lg-12">
			<!-- PAGE HEADER-->
			<div class="row">
				<div class="col-sm-12">
					<div class="page-header">
						<br>
						<div class="clearfix">
							<h3 class="content-title pull-left">Supplier</h3>
						</div>
					</div>
				</div>
			</div>
			<!-- /PAGE HEADER -->
			<div class="row">
				<div class="col-md-12">
					<!-- BOX -->
					<div class="box border red">
						<div class="box-title">
						<h4><i class="fa fa-users"></i>Add Supplier</h4>
							<div class="tools hidden-xs">
								<a href="javascript:;" class="collapse">
									<i class="fa fa-chevron-up"></i>
								</a>
							</div>
						</div>
						<div class="box-body row" style="margin-left: 0px; margin-right: 0px;">
							<div class="col-md-12">
								<form role="form" action="<?php echo base_url(); ?>process/add_supplier" method="POST" enctype="multipart/form-data">
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>" id="name"  placeholder="Enter Full Name">
									</div>
									<div class="form-group">
										<label for="logo">Logo</label>
										<input type="file" class="btn btn-danger" name="logo" id="logo">
									</div>
									<div class="form-group">
										<label for="username">Username</label>
										<input type="text" class="form-control" name="username"  value="<?php echo set_value('username'); ?>" id="username" placeholder="Username">
									</div>
									<div class="form-group">
										<label for="password">Password</label>
										<input type="password" class="form-control" name="password"  value="<?php echo set_value('password'); ?>" id="password" placeholder="Password">
									</div>
									<div class="form-group">
										<label for="conf_password">Confirm Password</label>
										<input type="password" class="form-control" name="conf_password"  value="<?php echo set_value('conf_password'); ?>" id="conf_password" placeholder="Password">
									</div>
									<button type="submit" class="btn btn-success">Add</button>
								</form>
							</div>
						</div>
					</div>

					<?php if(validation_errors()): ?>
			            <div class="row">
			                <div class="col-md-4 col-md-offset-4">
			                    <div class="alert alert-danger text-center" role="alert" style="margin-left:0px">
			                        <?php echo validation_errors(); ?>
			                    </div>
			                </div>
			            </div>
			        <?php endif; ?>

					<?php if(isset($status)): ?>
			            <div class="row">
			                <div class="col-md-4 col-md-offset-4">
			                    <div class="alert alert-success text-center" role="alert" id="alert" style="margin-left:0px">
			                        <h3>Form Submitted Successfully!</h3>
			                    </div>
			                </div>
			            </div>

				        <script type="text/javascript">
				            document.addEventListener("DOMContentLoaded", function(){
				                $("#alert").fadeOut(5000);
				            }, false);
				        </script>
			        <?php endif; ?>

				</div>
			</div>
			
		</div>
	</div>
</div>