<!-- PAGE -->
<section id="page">
	<!-- SIDEBAR -->
	<div id="sidebar" class="sidebar">
		<div class="sidebar-menu nav-collapse">
			<div class="divide-50"><img src="<?=base_url();?>frontend/images/Race_logo.jpg" style="
			    width: 90%;
			    margin: auto;
			    display: block;
			    padding-top: 10px;">
			</div>

			<!-- SEARCH BAR -->
			<!-- <div id="search-bar">
				<input class="search" type="text" placeholder="Search"><i class="fa fa-search search-icon"></i>
			</div> -->
			<!-- /SEARCH BAR -->
			
			<!-- SIDEBAR MENU -->
			<ul>
				<li class="<?php if(isset($dash)){echo $dash;}?>">
					<a href="<?php echo base_url(); ?>supplier">
						<i class="fa fa-tachometer fa-fw"></i> <span class="menu-text">Dashboard</span>
					</a>
				</li>
				<li class="has-sub <?php if(isset($task)){echo $task;}?>">
					<a href="javascript:;" class="">
						<i class="fa fa-list fa-fw"></i>
						<span class="menu-text">Tasks</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="<?php echo base_url(); ?>supplier/list_task"><span class="sub-menu-text">View Tasks</span></a></li>
						<li><a class="" href="<?php echo base_url(); ?>supplier/add_task"><span class="sub-menu-text">Add Task</span></a></li>
					</ul>
				</li>
			</ul>
			<!-- /SIDEBAR MENU -->
		</div>
	</div>
	<!-- /SIDEBAR -->
	<div id="main-content">