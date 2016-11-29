<?php if (isset($list)): ?>
	<?php foreach ($list as $row): ?>

<div class="container">
	<div class="row">
		<div id="content" class="col-lg-12">
			<!-- PAGE HEADER-->
			<div class="row">
				<div class="col-sm-12">
					<div class="page-header">
						<div class="clearfix">
							<br>
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
							<h4><i class="fa fa-table"></i>Basic Info</h4>
							<div class="tools hidden-xs">
								<a href="javascript:;" class="collapse">
									<i class="fa fa-chevron-up"></i>
								</a>
							</div>
						</div>
						<div class="box-body row" style="margin-left: 0px; margin-right: 0px;">
							<div class="col-md-12">
								<form role="form" action="<?php echo base_url(); ?>process/update_supplier" method="POST" enctype="multipart/form-data">
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" class="form-control" name="name" value="<?php if(isset($row->name)){echo $row->name;} ?>" id="name" placeholder="Enter Full Name">
									</div>
									<div class="form-group">
										<label for="booth_no">Booth #</label>
										<input type="text" class="form-control" name="booth_no" value="<?php if(isset($row->booth_no)){echo $row->booth_no;} ?>" id="booth_no"  placeholder="Booth #">
									</div>
									<div class="form-group">
										<label for="logo">Logo</label>
										<input type="file" class="btn btn-danger" name="logo" id="logo">
									</div>
									<div class="form-group">
										<label for="username">Username</label>
										<input type="text" class="form-control" name="username"  value="<?php if(isset($row->username)){echo $row->username;} ?>" id="username" placeholder="Username">
									</div>
									<input type="text" name="login_id" value="<?php if(isset($row->login_id)){echo $row->login_id;} ?>" hidden>
									<button type="submit" class="btn btn-success">Update</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BOX -->
					<div class="box border red">
						<div class="box-title">
							<h4><i class="fa fa-lock"></i>Credentials</h4>
							<div class="tools hidden-xs">
								<a href="javascript:;" class="collapse">
									<i class="fa fa-chevron-up"></i>
								</a>
							</div>
						</div>
						<div class="box-body row" style="margin-left: 0px; margin-right: 0px;">
							<div class="col-md-12">
								<form role="form" action="<?php echo base_url(); ?>process/update_supplier_credentials" method="POST">
									<div class="form-group">
										<label for="password">Password</label>
										<input type="password" class="form-control" name="password" value="<?php if(isset($row->password)){echo $row->password;} ?>" id="password" placeholder="Password">
									</div>
									<input type="text" name="login_id" value="<?php if(isset($row->login_id)){echo $row->login_id;} ?>" hidden>
									<button type="submit" class="btn btn-success">Update</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

	<?php break; ?>
	<?php endforeach ?>
<?php endif ?>
