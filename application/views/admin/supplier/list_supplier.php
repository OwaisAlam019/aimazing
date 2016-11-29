<div class="container">
	<div class="row">
		<div id="content" class="col-lg-12">
			<!-- PAGE HEADER-->
			<div class="row">
				<div class="col-sm-12">
					<div class="page-header">
						<br>
						<div class="clearfix">
							<h3 class="content-title pull-left">Suppliers</h3>
						</div>
					</div>
					<div class="row">
						
						<div class="col-md-12">
							<!-- BOX -->
							<div class="box border red">
								<div class="box-title">
									<h4><i class="fa fa-users"></i>Supplier List</h4>
								</div>
								<div class="box-body">
									<table id="datatable1" class="datatable table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th>S.No.</th>
												<th>Name</th>
												<th>Booth</th>
												<th>User</th>
												<th>Logo</th>
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
													<td><?php echo $row->booth_no; ?></td>
													<td><?php echo $row->username; ?></td>
													<td><img src="<?php echo base_url().$row->image; ?>" height="50"></td>
													<td class="text-center"><a href="<?php echo base_url(); ?>admin/edit_del_supplier/<?php echo $row->login_id?>/edit" class="glyphicon glyphicon-pencil"></a></td>
                                        			<td class="text-center"><a href="<?php echo base_url(); ?>admin/edit_del_supplier/<?php echo $row->login_id?>/delete" class="glyphicon glyphicon-remove del"></td>
												</tr>
											<?php $n++; endforeach; ?>
										<?php endif; ?>
											
										</tbody>
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