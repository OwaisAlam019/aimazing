<div class="container">
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
					<div class="row">

						<div class="col-md-12">
							<!-- BOX -->
							<div class="box border red">
								<div class="box-title">
									<h4><i class="fa fa-calendar fa-fw"></i>Event List</h4>
									<div class="tools hidden-xs">
										<a href="#box-config" data-toggle="modal" class="config">
											<i class="fa fa-cog"></i>
										</a>
										<a href="javascript:;" class="reload">
											<i class="fa fa-refresh"></i>
										</a>
										<a href="javascript:;" class="collapse">
											<i class="fa fa-chevron-up"></i>
										</a>
										<a href="javascript:;" class="remove">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="box-body">
									<table id="datatable1" class="datatable table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th>S.No.</th>
												<th>Event Name</th>
												<th>Start Date</th>
												<th>End Date</th>
												<th>Edit</th>
												<th>Delete</th>
											</tr>
										</thead>
										<tbody>

										<?php if(isset($list)): ?>
											<?php $n = 1; foreach ($list as $row): ?>
												<tr>
													<td><?php echo $n; ?></td>
													<td><?php echo $row->name; ?></td>
													<td><?php echo date('m-d-Y',strtotime($row->start)); ?></td>
													<td><?php echo date('m-d-Y',strtotime($row->end)); ?></td>
													<td class="text-center"><a href="<?php echo base_url(); ?>admin/edit_del_event/<?php echo $row->event_id?>/edit" class="glyphicon glyphicon-pencil"></a></td>
                                        			<td class="text-center"><a href="<?php echo base_url(); ?>admin/edit_del_event/<?php echo $row->event_id?>/delete" class="glyphicon glyphicon-remove del"></td>
												</tr>
											<?php $n++; endforeach; ?>
										<?php endif; ?>

										</tbody>
										<!-- <tfoot>
										<tr>
												<th>Rendering engine</th>
												<th>Browser</th>
												<th class="hidden-xs">Platform(s)</th>
												<th>Engine version</th>
												<th class="hidden-xs">CSS grade</th>
										</tr>
										</tfoot> -->
									</table>
								</div>
							</div>
							<!-- /BOX -->
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
			<!-- /PAGE HEADER -->
		</div>
	</div>
</div>
