  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Dashboard</li>
        <li class="treeview">
         <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Monitoring</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('monitoring') }}"><i class="fa fa-circle-o"></i> Diagram</a></li>
            <li><a href="{{ route('mytable') }}"><i class="fa fa-circle-o"></i> Table </a></li>
          </ul>
        </li>
        <li>
          <a href="{{ route('upload') }}">
            <i class="fa fa-archive"></i> <span>Upload File</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>