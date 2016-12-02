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
					<a href="<?php echo base_url(); ?>admin">
						<i class="fa fa-tachometer fa-fw"></i> <span class="menu-text">Dashboard</span>
					</a>
				</li>
				<li class="has-sub <?php if(isset($news)){echo $news;}?>">
					<a href="javascript:;" class="">
						<i class="fa fa-newspaper-o fa-fw"></i>
						<span class="menu-text">News</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="<?php echo base_url(); ?>admin/list_news"><span class="sub-menu-text">View News</span></a></li>
						<li><a class="" href="<?php echo base_url(); ?>admin/add_news"><span class="sub-menu-text">Add News</span></a></li>
					</ul>
				</li>
				<li class="has-sub <?php if(isset($supplier)){echo $supplier;}?>">
					<a href="javascript:;" class="">
						<i class="fa fa-user fa-fw"></i>
						<span class="menu-text">Suppliers</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="<?php echo base_url(); ?>admin/list_supplier"><span class="sub-menu-text">View Suppliers</span></a></li>
						<li><a class="" href="<?php echo base_url(); ?>admin/add_supplier"><span class="sub-menu-text">Add Supplier</span></a></li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
						<i class="fa fa-list fa-fw"></i>
						<span class="menu-text">Tasks</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="<?php echo base_url(); ?>admin/list_task"><span class="sub-menu-text">View Tasks</span></a></li>
						<li><a class="" href="<?php echo base_url(); ?>admin/add_task"><span class="sub-menu-text">Add Task</span></a></li>
					</ul>
				</li>
				<li class="has-sub <?php if(isset($event)){echo $event;}?>">
					<a href="javascript:;" class="">
						<i class="fa fa-calendar fa-fw"></i>
						<span class="menu-text">Events</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="<?php echo base_url(); ?>admin/list_event"><span class="sub-menu-text">View Events</span></a></li>
						<li><a class="" href="<?php echo base_url(); ?>admin/add_event"><span class="sub-menu-text">Add Event</span></a></li>
					</ul>
				</li>
				<li class="<?php if(isset($ad)){echo $ad;}?>">
					<a href="<?php echo base_url(); ?>admin/ad">
						<i class="fa fa-picture-o fa-fw"></i> <span class="menu-text">Ad</span>
					</a>
				</li>

			</ul>
			<!-- /SIDEBAR MENU -->
		</div>
	</div>
	<!-- /SIDEBAR -->
	<div id="main-content">
