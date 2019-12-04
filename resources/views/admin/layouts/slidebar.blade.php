<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="admin/dist/img/iconfi.svg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <sidebar menu: : style can be found in sidebar.less>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
          <li>
          <a href="{{ url('admin/home/')}}">
          <i class="fa fa-dashboard"></i>Dashboard</a>
          </li>
          <li>
          <a href="{{ url('admin/user/')}}">
          <i class="fa fa-cog"></i>Admin</a>
          </li>
          <li>
          <a href="{{ url('admin/approve/')}}">
          <i class="fa fa-check-square"></i>Online Register </a>
          </li>
          <li>
          <a href="{{ url('admin/assignment/')}}">
            <i class="fa fa-exchange"></i> <span>Assignment</span>
          </a>
        </li>
         
          <li>
          <a href="{{ url('admin/post/post')}}">
          <i class="fa fa-search-plus"></i>Post</a>
          </li>
          @can('posts.category',Auth::user())
          <li>
          <a href="{{ url('admin/category/category')}}">
          <i class="fa fa-align-justify"></i> Category</a>
          </li>
          @endcan
          @can('posts.tag',Auth::user())
          <li>
          <a href="{{ url('admin/tag/tag')}}">
          <i class="fa fa-tags"></i> Tag</a>
          </li>
          @endcan
         
          <li>
          <a href="{{ url('admin/students/')}}">
          <i class="fa fa-user-plus"></i>Stdents</a>
          </li>
          <li>
          <a href="{{ url('admin/class/')}}">
          <i class="fa fa-paper-plane-o"></i>Class and Sections</a>
          </li>
          <li>
          <a href="{{ url('admin/teachers/')}}">
          <i class="fa fa-user-plus"></i>Teachers</a>
          </li>
          <li>
          <a href="{{ url('admin/role')}}">
          <i class="fa fa-question-circle"></i> User Role</a>
          </li>
           @can('posts.tag',Auth::user())
          <li>
          <a href="{{ url('admin/permession')}}">
          <i class="fa fa-ban"></i>Permession</a>
          </li>
          @endcan
         

        <li>
          <a href="{{ url('admin/adminsetting')}}">
          <i class="fa fa-cogs"></i>Setting</a>
        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>