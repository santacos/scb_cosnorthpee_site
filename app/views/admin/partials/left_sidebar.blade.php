<section class="sidebar">
	<!-- Sidebar user panel -->
	<div class="user-panel">
		<div class="pull-left image">
			<img src="{{asset('assets/img/avatar3.png')}}" class="img-circle" alt="User Image" />
		</div>
		<div class="pull-left info">
			<p>
				Hello, Jane
			</p>

			<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		</div>
	</div>
	<!-- search form -->
	<form action="#" method="get" class="sidebar-form">
		<div class="input-group">
			<input type="text" name="q" class="form-control" placeholder="Search..."/>
			<span class="input-group-btn">
				<button type='submit' name='seach' id='search-btn' class="btn btn-flat">
					<i class="fa fa-search"></i>
				</button> </span>
		</div>
	</form>
	<!-- /.search form -->
	<!-- sidebar menu: : style can be found in sidebar.less -->
	<ul class="sidebar-menu">
		<li class="active">
			<a href="{{ URL::to('/') }}"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
		</li>
		<li>
			<a href="{{ URL::to('widgets') }}"> <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small> </a>
		</li>
		<li class="treeview">
			<a href="#"> <i class="fa fa-bar-chart-o"></i> <span>Charts</span> <i class="fa fa-angle-left pull-right"></i> </a>
			<ul class="treeview-menu">
				<li>
					<a href="{{ URL::to('morris') }}"><i class="fa fa-angle-double-right"></i> Morris</a>
				</li>
				<li>
					<a href="{{ URL::to('flot') }}"><i class="fa fa-angle-double-right"></i> Flot</a>
				</li>
				<li>
					<a href="{{ URL::to('inline') }}"><i class="fa fa-angle-double-right"></i> Inline charts</a>
				</li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#"> <i class="fa fa-laptop"></i> <span>UI Elements</span> <i class="fa fa-angle-left pull-right"></i> </a>
			<ul class="treeview-menu">
				<li>
					<a href="{{ URL::to('general') }}"><i class="fa fa-angle-double-right"></i> General</a>
				</li>
				<li>
					<a href="{{ URL::to('icons') }}"><i class="fa fa-angle-double-right"></i> Icons</a>
				</li>
				<li>
					<a href="{{ URL::to('buttons') }}"><i class="fa fa-angle-double-right"></i> Buttons</a>
				</li>
				<li>
					<a href="{{ URL::to('sliders') }}"><i class="fa fa-angle-double-right"></i> Sliders</a>
				</li>
				<li>
					<a href="{{ URL::to('timeline') }}"><i class="fa fa-angle-double-right"></i> Timeline</a>
				</li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#"> <i class="fa fa-edit"></i> <span>Forms</span> <i class="fa fa-angle-left pull-right"></i> </a>
			<ul class="treeview-menu">
				<li>
					<a href="{{ URL::to('formgeneral') }}"><i class="fa fa-angle-double-right"></i> General Elements</a>
				</li>
				<li>
					<a href="{{ URL::to('advanced') }}"><i class="fa fa-angle-double-right"></i> Advanced Elements</a>
				</li>
				<li>
					<a href="{{ URL::to('editors') }}"><i class="fa fa-angle-double-right"></i> Editors</a>
				</li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#"> <i class="fa fa-table"></i> <span>Tables</span> <i class="fa fa-angle-left pull-right"></i> </a>
			<ul class="treeview-menu">
				<li>
					<a href="{{ URL::to('tablesimple') }}"><i class="fa fa-angle-double-right"></i> Simple tables</a>
				</li>
				<li>
					<a href="{{ URL::to('tabledata') }}"><i class="fa fa-angle-double-right"></i> Data tables</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="{{ URL::to('calendar') }}"> <i class="fa fa-calendar"></i> <span>Calendar</span> <small class="badge pull-right bg-red">3</small> </a>
		</li>
		<li>
			<a href="{{ URL::to('mailbox') }}"> <i class="fa fa-envelope"></i> <span>Mailbox</span> <small class="badge pull-right bg-yellow">12</small> </a>
		</li>
		<li class="treeview">
			<a href="#"> <i class="fa fa-folder"></i> <span>Examples</span> <i class="fa fa-angle-left pull-right"></i> </a>
			<ul class="treeview-menu">
				<li>
					<a href="{{ URL::to('invoice') }}"><i class="fa fa-angle-double-right"></i> Invoice</a>
				</li>
				<li>
					<a href="{{ URL::to('login') }}"><i class="fa fa-angle-double-right"></i> Login</a>
				</li>
				<li>
					<a href="{{ URL::to('register') }}"><i class="fa fa-angle-double-right"></i> Register</a>
				</li>
				<li>
					<a href="{{ URL::to('lockscreen') }}"><i class="fa fa-angle-double-right"></i> Lockscreen</a>
				</li>
				<li>
					<a href="{{ URL::to('404') }}"><i class="fa fa-angle-double-right"></i> 404 Error</a>
				</li>
				<li>
					<a href="{{ URL::to('500') }}"><i class="fa fa-angle-double-right"></i> 500 Error</a>
				</li>
				<li>
					<a href="{{ URL::to('empty') }}"><i class="fa fa-angle-double-right"></i> Blank Page</a>
				</li>
			</ul>
		</li>
	</ul>
</section>