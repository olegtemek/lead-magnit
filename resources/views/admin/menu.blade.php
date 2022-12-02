<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{route('admin.home.index')}}" class="brand-link">
    <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Dashboard</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
       
        <li class="nav-item  mt-4"">
          <a href="{{route('admin.portfolio.index')}}" class="nav-link {{(request()->is('admin/portfolio*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Кейсы</p>
          </a>
        </li>

        <li class="nav-item  mt-4"">
          <a href="{{route('admin.question.index')}}" class="nav-link {{(request()->is('admin/question*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Вопрос-ответ</p>
          </a>
        </li>
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>