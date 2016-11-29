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
				<?php if (isset($card_data)): ?>
				<?php foreach ($card_data as $row): ?>
				<div class="col-md-4">
					<div class="box border red">
						<div class="box-title">
							<h4><i class="fa fa-briefcase"></i><?php echo $row->event_name;?></h4>
							&nbsp;<span><?php echo " ".Date('m/d',strtotime($row->start))." - ".Date('m/d/Y',strtotime($row->end)); ?></span>
						</div>
						<div class="box-body">
							<div class="sparkline-row">
								<span class="title">Total tasks</span>
								<span class="value"><?php echo $row->total_tasks; ?></span>
							</div>
							<div class="sparkline-row">
								<span class="title">Total Attempted</span>
								<span class="value"><?php echo $row->tasks_completed; ?></span>
							</div>
								<a href="<?php echo base_url(); ?>admin/list_tasks/<?php echo $row->event_id ?>" class="btn btn-default btn-block">View Tasks</a>
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
