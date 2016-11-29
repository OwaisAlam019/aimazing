<?php
	if(isset($list)){
		foreach ($list as $row) {
			$data = $row;
		}
	}
 ?>

<div class="container">
	<div class="row">
		<div id="content" class="col-lg-12">
			<!-- PAGE HEADER-->
			<div class="row">
				<div class="col-sm-12">
					<div class="page-header">
						<br>
						<div class="clearfix">
							<h3 class="content-title pull-left">NEWS</h3>
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
							<h4><i class="fa fa-newspaper-o fa-fw"></i>NEWS Info</h4>
							<div class="tools hidden-xs">
								<a href="javascript:;" class="collapse">
									<i class="fa fa-chevron-up"></i>
								</a>
							</div>
						</div>
						<div class="box-body row" style="margin-left: 0px; margin-right: 0px;">
							<div class="col-md-12">
								<form role="form" action="<?php echo base_url(); ?>process/update_news" method="POST" enctype="multipart/form-data">
									<div class="form-group">
										<label for="title">Title</label>
										<input type="text" class="form-control" name="title" value="<?php if(isset($data->title)){echo $data->title;} ?>" id="title" placeholder="Title">
									</div>
									<div class="form-group">
										<label for="details">Details</label>
										<textarea class="form-control" name="details" id="details" ><?php if(isset($data->details)){echo $data->details;} ?></textarea>
									</div>
									<div class="form-group">
										<label for="image">Image</label>
										<input type="file" class="btn btn-danger" name="image" >
									</div>
									<input type="text" name="news_id" value="<?php if(isset($data->news_id)){echo $data->news_id;} ?>" hidden>
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
