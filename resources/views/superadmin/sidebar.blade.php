  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Dashboard</li>
<!--         <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Monitoring</span>
          </a>
        </li> -->
        <li>
          <a href="{{ route('monitoring') }}">
            <i class="fa fa-pc"></i> <span>Monitoring</span>
          </a>
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