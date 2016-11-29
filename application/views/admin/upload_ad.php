<div class="container">
	<div class="row">
		<div id="content" class="col-lg-12">
			<!-- PAGE HEADER-->
			<div class="row">
				<div class="col-sm-12">
					<div class="page-header">
						<br>
						<div class="clearfix">
							<h3 class="content-title pull-left">AD</h3>
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
						<h4><i class="fa fa-calendar fa-fw"></i>Upload Ad</h4>
							<div class="tools hidden-xs">
								<a href="javascript:;" class="collapse">
									<i class="fa fa-chevron-up"></i>
								</a>
							</div>
						</div>
						<div class="box-body row" style="margin-left: 0px; margin-right: 0px;">
							<div class="col-md-12">
								<?php if (isset($ad_path)): ?>
									<div class="form-group">
										<label for="image">Current Ad</label>
										<img class="img-responsive" src="<?php echo $ad_path; ?>" alt="" />
									</div>
								<?php endif; ?>
							</div>
							<div class="col-md-12">
								<form role="form" action="<?php echo base_url(); ?>process/add_ad" method="POST" enctype="multipart/form-data">
									<div class="form-group">
										<label for="image">Image</label>
										<input type="file" class="btn btn-danger" name="ad" id="image" required>
									</div>
									<button type="submit" class="btn btn-success">Update</button>
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
