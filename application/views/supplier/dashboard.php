<div class="container">
	<div class="row">
		<div id="content" class="col-lg-12">
			<!-- PAGE HEADER-->
			<div class="row">
				<div class="col-sm-12">
					<div class="page-header">
						<br>
						<div class="clearfix">
							<h3 class="content-title pull-left">Dashboard</h3>
						</div>
					</div>
				</div>
			</div>
			<!-- /PAGE HEADER -->
			<div class="row">
				<?php if (isset($count)): ?>
				<?php foreach ($count as $row): ?>
				<div class="col-md-3">
					<div class="box border red">
						<div class="box-title">
							<h4><i class="fa fa-briefcase"></i><?php echo $row->type; ?></h4>
						</div>
						<div class="box-body">
							<div class="sparkline-row">
								<span class="title">In Progress <i class="pull-right text-primary fa fa-spinner fa-3x"></i></span>
								<span class="value"><?php echo $row->progress; ?></span>
							</div>
							<div class="sparkline-row">
								<span class="title">Completed <i class="pull-right text-success fa fa-check fa-3x"></i></span>
								<span class="value"><?php echo $row->completed; ?></span>
							</div>
							<div class="sparkline-row">
								<span class="title">Pending <i class="pull-right text-yellow fa fa-exclamation-circle fa-3x"></i></span>
								<span class="value"><?php echo $row->pending; ?></span>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach ?>
				<?php endif ?>
			</div>
			<div class="row" id="chart-view">
			<?php if (isset($chart)): ?>
				<?php foreach ($chart as $key => $value): ?>
						<div class="col-md-12">
							<div class="box border orange">
								<div class="box-title">
									<h4><i class="fa fa-bar-chart-o"></i><?php echo $key; ?> - Monthly Overview</h4>
								</div>
								<div class="box-body">
									<div id="<?php if(isset($key))echo strtolower(str_replace(" ","_",$key)); ?>" style="height:400px"></div>
								</div>
							</div>
						</div>
				<?php endforeach ?>
			<?php endif ?>
			</div>
		</div>
	</div>
</div>
</div>
