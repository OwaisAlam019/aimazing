<?php
	if(isset($list)){
		foreach ($list as $row) {
			$data = $row;
		}
	}
 ?>

<div class="container">
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
	<div class="row">
		<div id="content" class="col-lg-12">
			<!-- PAGE HEADER-->
			<div class="row">
				<div class="col-sm-12">
					<div class="page-header">
						<br>
						<div class="clearfix">
							<h3 class="content-title pull-left">Events</h3>
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
							<h4><i class="fa fa-calendar fa-fw"></i>Event Info</h4>
							<div class="tools hidden-xs">
								<a href="javascript:;" class="collapse">
									<i class="fa fa-chevron-up"></i>
								</a>
							</div>
						</div>
						<div class="box-body row" style="margin-left: 0px; margin-right: 0px;">
							<div class="col-md-12">
								<form role="form" action="<?php echo base_url(); ?>process/update_event" method="POST" enctype="multipart/form-data">
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" required class="form-control" name="name" value="<?php if(isset($data->name)){echo $data->name;} ?>" id="name" placeholder="Enter Full Name">
									</div>
									<div class="form-group">
										<label for="start">Start Date</label>
										<input type="text" required class="form-control datepicker" name="start" value="<?php if(isset($data->start)){echo $data->start;} ?>" id="start">
									</div>
									<div class="form-group">
										<label for="end">End Date</label>
										<input type="text" required class="form-control datepicker" name="end" value="<?php if(isset($data->end)){echo $data->end;} ?>" id="end">
									</div>
									<div class="form-group">
										<label for="image">Image</label>
										<input type="file" class="btn btn-danger" name="image" id="image">
									</div>
									<div class="box-body">
									<table  class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th>S.No.</th>
												<th>Supplier</th>
												<th>Booth Number</th>
											</tr>
										</thead>
										<tbody>

										<?php if(isset($event_suppliers)): ?>
											<?php $n = 1; foreach ($event_suppliers as $event_supplier): ?>
												<tr>
													<td><?php echo $n; ?></td>
													<td>
													<label><?php echo $event_supplier['name']; ?></label>
													<input type="hidden" name="supplier_id[]" value="<?php echo $event_supplier['supplier_id']; ?>">
													</td>
													<td><input type="text" name="booth_no[]" value="<?php echo $event_supplier['booth_no'] ?>"></td>
												</tr>
											<?php $n++; endforeach; ?>
										<?php endif; ?>

										</tbody>
									</table>
								</div>

									<input type="text" required name="event_id" value="<?php if(isset($data->event_id)){echo $data->event_id;} ?>" hidden>
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


				</div>
			</div>
		</div>
	</div>
</div>
