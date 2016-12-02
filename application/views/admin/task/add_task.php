<div class="container">
	<div class="row">
		<div id="content" class="col-lg-12">
			<!-- PAGE HEADER-->
			<div class="row">
				<div class="col-sm-12">
					<div class="page-header">
						<br>
						<div class="clearfix">
							<h3 class="content-title pull-left">Tasks</h3>
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
						<h4><i class="fa fa-list fa-fw"></i>Add Task</h4>
							<div class="tools hidden-xs">
								<a href="javascript:;" class="collapse">
									<i class="fa fa-chevron-up"></i>
								</a>
							</div>
						</div>
						<div class="box-body row" style="margin-left: 0px; margin-right: 0px;">
							<div class="col-md-12">
								<form role="form" action="<?php echo base_url(); ?>process/add_task" method="POST">
									<div class="form-group">
										<label for="name">Task Name</label>
										<input type="text" class="form-control" name="name" id="name" placeholder="Title">
									</div>
									<div class="form-group">
										<label for="reward">Reward</label>
										<input type="text" class="form-control" name="reward" id="reward" placeholder="Details">
									</div>
									<div class="form-group">
										<label for="task_type">Task Type</label>
										<select class="form-control" name="task_type_id" id="task_type">
											<?php if (isset($task_types)): ?>
												<?php foreach ($task_types as $task_type ): ?>
													<option value="<?php echo $task_type->task_type_id; ?>"><?php echo $task_type->name; ?></option>
												<?php endforeach ?>
											<?php endif ?>
										</select>
									</div>
									<div class="form-group">
										<label for="task_type">Supplier</label>
										<select class="form-control" name="supplier_login_id" id="login_id">
											<?php if (isset($suppliers)): ?>
												<?php foreach ($suppliers as $supplier ): ?>
													<option value="<?php echo $supplier->login_id; ?>"><?php echo $supplier->name; ?></option>
												<?php endforeach ?>
											<?php endif ?>
										</select>
									</div>
									<div class="form-group">
										<label for="task_type">Default text</label>
										<textarea class="form-control" name="placeholder_text" id="placeholder_text" placeholder="Default Text"></textarea>
									</div>
									<div class="form-group">
										<label for="event">Event</label>
										<select class="form-control" name="event_id" id="event">
											<?php if (isset($events)): ?>
												<?php foreach ($events as $event ): ?>
													<option value="<?php echo $event->event_id; ?>"><?php echo $event->name; ?></option>
												<?php endforeach ?>
											<?php endif ?>
										</select>
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
