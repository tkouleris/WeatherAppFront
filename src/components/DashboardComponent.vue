<template>
  <div class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
<!--    <div class="preloader flex-column justify-content-center align-items-center">-->
<!--      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">-->
<!--    </div>-->

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">


        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
            <i class="fas fa-terminal"> Log out</i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Weather App</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{getUser().username}}</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
<!--        <div class="form-inline">-->
<!--          <div class="input-group" data-widget="sidebar-search">-->
<!--            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">-->
<!--            <div class="input-group-append">-->
<!--              <button class="btn btn-sidebar">-->
<!--                <i class="fas fa-search fa-fw"></i>-->
<!--              </button>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
              <button  @click="goToDashboard()" id="btn_dashboard" class="nav-link active" style="text-align: left;">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  Dashboard
              </button>
            </li>
            <li class="nav-item">

              <button  @click="goToSettings()" id="btn_settings" class="nav-link active" style="text-align: left;">
                <i class="nav-icon fas fa-puzzle-piece"></i>
                Settings
              </button>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Weather
                  <span class="badge badge-info right">{{weather_data.length}}</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item" v-for="w in weather_data" :key="w.city_id" >
                  <a :href="'#' + w.city_name+'_'+w.country" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <a :href="'#' + w.city_name+'_'+w.country">{{w.city_name}} - {{w.country}}</a>
                  </a>
                </li>
              </ul>
            </li>

<!--            <li class="nav-item">-->
<!--              <a href="pages/widgets.html" class="nav-link">-->
<!--                <i class="nav-icon fas fa-th"></i>-->
<!--                <p>-->
<!--                  Widgets-->
<!--                  <span class="right badge badge-danger">New</span>-->
<!--                </p>-->
<!--              </a>-->
<!--            </li>-->

<!--            <li class="nav-item">-->
<!--              <a href="#" class="nav-link">-->
<!--                <i class="nav-icon fas fa-chart-pie"></i>-->
<!--                <p>-->
<!--                  Charts-->
<!--                  <i class="right fas fa-angle-left"></i>-->
<!--                </p>-->
<!--              </a>-->
<!--              <ul class="nav nav-treeview">-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/charts/chartjs.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>ChartJS</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/charts/flot.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Flot</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/charts/inline.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Inline</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/charts/uplot.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>uPlot</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--              </ul>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a href="#" class="nav-link">-->
<!--                <i class="nav-icon fas fa-tree"></i>-->
<!--                <p>-->
<!--                  UI Elements-->
<!--                  <i class="fas fa-angle-left right"></i>-->
<!--                </p>-->
<!--              </a>-->
<!--              <ul class="nav nav-treeview">-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/UI/general.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>General</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/UI/icons.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Icons</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/UI/buttons.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Buttons</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/UI/sliders.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Sliders</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/UI/modals.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Modals & Alerts</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/UI/navbar.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Navbar & Tabs</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/UI/timeline.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Timeline</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/UI/ribbons.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Ribbons</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--              </ul>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a href="#" class="nav-link">-->
<!--                <i class="nav-icon fas fa-edit"></i>-->
<!--                <p>-->
<!--                  Forms-->
<!--                  <i class="fas fa-angle-left right"></i>-->
<!--                </p>-->
<!--              </a>-->
<!--              <ul class="nav nav-treeview">-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/forms/general.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>General Elements</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/forms/advanced.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Advanced Elements</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/forms/editors.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Editors</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/forms/validation.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Validation</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--              </ul>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a href="#" class="nav-link">-->
<!--                <i class="nav-icon fas fa-table"></i>-->
<!--                <p>-->
<!--                  Tables-->
<!--                  <i class="fas fa-angle-left right"></i>-->
<!--                </p>-->
<!--              </a>-->
<!--              <ul class="nav nav-treeview">-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/tables/simple.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Simple Tables</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/tables/data.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>DataTables</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/tables/jsgrid.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>jsGrid</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--              </ul>-->
<!--            </li>-->
<!--            <li class="nav-header">EXAMPLES</li>-->
<!--            <li class="nav-item">-->
<!--              <a href="pages/calendar.html" class="nav-link">-->
<!--                <i class="nav-icon far fa-calendar-alt"></i>-->
<!--                <p>-->
<!--                  Calendar-->
<!--                  <span class="badge badge-info right">2</span>-->
<!--                </p>-->
<!--              </a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a href="pages/gallery.html" class="nav-link">-->
<!--                <i class="nav-icon far fa-image"></i>-->
<!--                <p>-->
<!--                  Gallery-->
<!--                </p>-->
<!--              </a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a href="pages/kanban.html" class="nav-link">-->
<!--                <i class="nav-icon fas fa-columns"></i>-->
<!--                <p>-->
<!--                  Kanban Board-->
<!--                </p>-->
<!--              </a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a href="#" class="nav-link">-->
<!--                <i class="nav-icon far fa-envelope"></i>-->
<!--                <p>-->
<!--                  Mailbox-->
<!--                  <i class="fas fa-angle-left right"></i>-->
<!--                </p>-->
<!--              </a>-->
<!--              <ul class="nav nav-treeview">-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/mailbox/mailbox.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Inbox</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/mailbox/compose.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Compose</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/mailbox/read-mail.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Read</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--              </ul>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a href="#" class="nav-link">-->
<!--                <i class="nav-icon fas fa-book"></i>-->
<!--                <p>-->
<!--                  Pages-->
<!--                  <i class="fas fa-angle-left right"></i>-->
<!--                </p>-->
<!--              </a>-->
<!--              <ul class="nav nav-treeview">-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/examples/invoice.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Invoice</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/examples/profile.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Profile</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/examples/e-commerce.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>E-commerce</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/examples/projects.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Projects</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/examples/project-add.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Project Add</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/examples/project-edit.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Project Edit</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/examples/project-detail.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Project Detail</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/examples/contacts.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Contacts</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/examples/faq.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>FAQ</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/examples/contact-us.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Contact us</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--              </ul>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a href="#" class="nav-link">-->
<!--                <i class="nav-icon far fa-plus-square"></i>-->
<!--                <p>-->
<!--                  Extras-->
<!--                  <i class="fas fa-angle-left right"></i>-->
<!--                </p>-->
<!--              </a>-->
<!--              <ul class="nav nav-treeview">-->
<!--                <li class="nav-item">-->
<!--                  <a href="#" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>-->
<!--                      Login & Register v1-->
<!--                      <i class="fas fa-angle-left right"></i>-->
<!--                    </p>-->
<!--                  </a>-->
<!--                  <ul class="nav nav-treeview">-->
<!--                    <li class="nav-item">-->
<!--                      <a href="pages/examples/login.html" class="nav-link">-->
<!--                        <i class="far fa-circle nav-icon"></i>-->
<!--                        <p>Login v1</p>-->
<!--                      </a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                      <a href="pages/examples/register.html" class="nav-link">-->
<!--                        <i class="far fa-circle nav-icon"></i>-->
<!--                        <p>Register v1</p>-->
<!--                      </a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                      <a href="pages/examples/forgot-password.html" class="nav-link">-->
<!--                        <i class="far fa-circle nav-icon"></i>-->
<!--                        <p>Forgot Password v1</p>-->
<!--                      </a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                      <a href="pages/examples/recover-password.html" class="nav-link">-->
<!--                        <i class="far fa-circle nav-icon"></i>-->
<!--                        <p>Recover Password v1</p>-->
<!--                      </a>-->
<!--                    </li>-->
<!--                  </ul>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="#" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>-->
<!--                      Login & Register v2-->
<!--                      <i class="fas fa-angle-left right"></i>-->
<!--                    </p>-->
<!--                  </a>-->
<!--                  <ul class="nav nav-treeview">-->
<!--                    <li class="nav-item">-->
<!--                      <a href="pages/examples/login-v2.html" class="nav-link">-->
<!--                        <i class="far fa-circle nav-icon"></i>-->
<!--                        <p>Login v2</p>-->
<!--                      </a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                      <a href="pages/examples/register-v2.html" class="nav-link">-->
<!--                        <i class="far fa-circle nav-icon"></i>-->
<!--                        <p>Register v2</p>-->
<!--                      </a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                      <a href="pages/examples/forgot-password-v2.html" class="nav-link">-->
<!--                        <i class="far fa-circle nav-icon"></i>-->
<!--                        <p>Forgot Password v2</p>-->
<!--                      </a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                      <a href="pages/examples/recover-password-v2.html" class="nav-link">-->
<!--                        <i class="far fa-circle nav-icon"></i>-->
<!--                        <p>Recover Password v2</p>-->
<!--                      </a>-->
<!--                    </li>-->
<!--                  </ul>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/examples/lockscreen.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Lockscreen</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/examples/legacy-user-menu.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Legacy User Menu</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/examples/language-menu.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Language Menu</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/examples/404.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Error 404</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/examples/500.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Error 500</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/examples/pace.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Pace</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/examples/blank.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Blank Page</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="starter.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Starter Page</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--              </ul>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a href="#" class="nav-link">-->
<!--                <i class="nav-icon fas fa-search"></i>-->
<!--                <p>-->
<!--                  Search-->
<!--                  <i class="fas fa-angle-left right"></i>-->
<!--                </p>-->
<!--              </a>-->
<!--              <ul class="nav nav-treeview">-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/search/simple.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Simple Search</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="pages/search/enhanced.html" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Enhanced</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--              </ul>-->
<!--            </li>-->
<!--            <li class="nav-header">MISCELLANEOUS</li>-->
<!--            <li class="nav-item">-->
<!--              <a href="iframe.html" class="nav-link">-->
<!--                <i class="nav-icon fas fa-ellipsis-h"></i>-->
<!--                <p>Tabbed IFrame Plugin</p>-->
<!--              </a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a href="https://adminlte.io/docs/3.1/" class="nav-link">-->
<!--                <i class="nav-icon fas fa-file"></i>-->
<!--                <p>Documentation</p>-->
<!--              </a>-->
<!--            </li>-->
<!--            <li class="nav-header">MULTI LEVEL EXAMPLE</li>-->
<!--            <li class="nav-item">-->
<!--              <a href="#" class="nav-link">-->
<!--                <i class="fas fa-circle nav-icon"></i>-->
<!--                <p>Level 1</p>-->
<!--              </a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a href="#" class="nav-link">-->
<!--                <i class="nav-icon fas fa-circle"></i>-->
<!--                <p>-->
<!--                  Level 1-->
<!--                  <i class="right fas fa-angle-left"></i>-->
<!--                </p>-->
<!--              </a>-->
<!--              <ul class="nav nav-treeview">-->
<!--                <li class="nav-item">-->
<!--                  <a href="#" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Level 2</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="#" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>-->
<!--                      Level 2-->
<!--                      <i class="right fas fa-angle-left"></i>-->
<!--                    </p>-->
<!--                  </a>-->
<!--                  <ul class="nav nav-treeview">-->
<!--                    <li class="nav-item">-->
<!--                      <a href="#" class="nav-link">-->
<!--                        <i class="far fa-dot-circle nav-icon"></i>-->
<!--                        <p>Level 3</p>-->
<!--                      </a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                      <a href="#" class="nav-link">-->
<!--                        <i class="far fa-dot-circle nav-icon"></i>-->
<!--                        <p>Level 3</p>-->
<!--                      </a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                      <a href="#" class="nav-link">-->
<!--                        <i class="far fa-dot-circle nav-icon"></i>-->
<!--                        <p>Level 3</p>-->
<!--                      </a>-->
<!--                    </li>-->
<!--                  </ul>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a href="#" class="nav-link">-->
<!--                    <i class="far fa-circle nav-icon"></i>-->
<!--                    <p>Level 2</p>-->
<!--                  </a>-->
<!--                </li>-->
<!--              </ul>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a href="#" class="nav-link">-->
<!--                <i class="fas fa-circle nav-icon"></i>-->
<!--                <p>Level 1</p>-->
<!--              </a>-->
<!--            </li>-->
<!--            <li class="nav-header">LABELS</li>-->
<!--            <li class="nav-item">-->
<!--              <a href="#" class="nav-link">-->
<!--                <i class="nav-icon far fa-circle text-danger"></i>-->
<!--                <p class="text">Important</p>-->
<!--              </a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a href="#" class="nav-link">-->
<!--                <i class="nav-icon far fa-circle text-warning"></i>-->
<!--                <p>Warning</p>-->
<!--              </a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a href="#" class="nav-link">-->
<!--                <i class="nav-icon far fa-circle text-info"></i>-->
<!--                <p>Informational</p>-->
<!--              </a>-->
<!--            </li>-->
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">

            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container" >
          <div class="row" v-for="w in weather_data" :key="w.city_id">
            <div class="col-12" :id="w.city_name + '_' + w.country">
              <h3>{{w.city_name}} - {{w.country}}</h3>
            </div>

            <div class="col-12" v-for=" (c, index) in w.weather" :key="c.timestamp">
              <div class="row">
                <div class="col-3 col-lg-3" >
                  <!-- small box -->
                  <div class="small-box bg-olive">
                    <div class="inner">
                      <p>{{timestampToDay(c.timestamp)}}</p>
                      <h3>{{timestampToHour(c.timestamp)}}</h3>
                    </div>
                  </div>
                </div>
                <div class="col-3 col-lg-3" >
                  <!-- small box -->
                  <div :class="temperatureClass(c.temperature)">
                    <div class="inner">
                      <p>Temperature</p>
                      <h3>{{ round(c.temperature) }}<sup style="font-size: 20px;">&#8451;</sup></h3>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-3 col-lg-3">
                  <!-- small box -->
                  <div :class="humidityClass(c.humidity)">
                    <div class="inner">
                      <p>Humidity</p>
                      <h3>{{c.humidity}}<sup style="font-size: 20px">%</sup></h3>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-3 col-lg-3">
                  <!-- small box -->
                  <div class="small-box bg-lightblue">
                    <div class="inner">
                      <p>{{ c.weather_description}}</p>
                    </div>

                    <img style="width: 50px;height: 15%" :src="c.icon" />
                  </div>
                </div>
              </div>
              <!-- ./col -->
              <div  v-html="checkNextDay(w.weather, index)">
              </div>
<!--              <hr>-->
              <!-- ./col -->
            </div>
<!--            <table>-->
<!--              <tr v-for="c in w.weather" :key="c.timestamp">-->
<!--                <td>{{timestampConverter(c.timestamp)}}</td>-->
<!--                <td><img  :src="c.icon" /></td>-->
<!--                <td>{{c.temperature}}C</td>-->
<!--                <td>{{c.humidity}}%</td>-->
<!--                <td>{{c.weather_description}}</td>-->
<!--              </tr>-->
<!--            </table>-->
          </div>
          <!-- Small boxes (Stat box) -->

          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong><a href="http://tkouleris.eu">Weather App</a> </strong>
>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
<!--  <script src="plugins/jquery/jquery.min.js"></script>-->
<!--  &lt;!&ndash; jQuery UI 1.11.4 &ndash;&gt;-->
<!--  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>-->
<!--  &lt;!&ndash; Resolve conflict in jQuery UI tooltip with Bootstrap tooltip &ndash;&gt;-->
<!--  <script>-->
<!--    $.widget.bridge('uibutton', $.ui.button)-->
<!--  </script>-->
<!--  &lt;!&ndash; Bootstrap 4 &ndash;&gt;-->
<!--  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>-->
<!--  &lt;!&ndash; ChartJS &ndash;&gt;-->
<!--  <script src="plugins/chart.js/Chart.min.js"></script>-->
<!--  &lt;!&ndash; Sparkline &ndash;&gt;-->
<!--  <script src="plugins/sparklines/sparkline.js"></script>-->
<!--  &lt;!&ndash; JQVMap &ndash;&gt;-->
<!--  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>-->
<!--  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>-->
<!--  &lt;!&ndash; jQuery Knob Chart &ndash;&gt;-->
<!--  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>-->
<!--  &lt;!&ndash; daterangepicker &ndash;&gt;-->
<!--  <script src="plugins/moment/moment.min.js"></script>-->
<!--  <script src="plugins/daterangepicker/daterangepicker.js"></script>-->
<!--  &lt;!&ndash; Tempusdominus Bootstrap 4 &ndash;&gt;-->
<!--  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>-->
<!--  &lt;!&ndash; Summernote &ndash;&gt;-->
<!--  <script src="plugins/summernote/summernote-bs4.min.js"></script>-->
<!--  &lt;!&ndash; overlayScrollbars &ndash;&gt;-->
<!--  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>-->
<!--  &lt;!&ndash; AdminLTE App &ndash;&gt;-->
<!--  <script src="dist/js/adminlte.js"></script>-->
<!--  &lt;!&ndash; AdminLTE for demo purposes &ndash;&gt;-->
<!--  <script src="dist/js/demo.js"></script>-->
<!--  &lt;!&ndash; AdminLTE dashboard demo (This is only for demo purposes) &ndash;&gt;-->
<!--  <script src="dist/js/pages/dashboard.js"></script>-->
  </div>
</template>

<script>
import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
// import moment from 'vue-moment'

Vue.use(VueAxios,axios)
import $ from 'jquery'
export default {
  name: "DashboardComponent",
  data(){
    return {
      weather_data: [],
      current_page: 'dashboard'
    }
  },
  mounted() {
    const jquery_ui_min = document.createElement("script");
    jquery_ui_min.async = true;
    jquery_ui_min.setAttribute(
        "src",
        "plugins/jquery-ui/jquery-ui.min.js"
    );
    document.head.appendChild(jquery_ui_min);
    const chart_min = document.createElement("script");
    chart_min.setAttribute(
        "src",
        "plugins/chart.js/Chart.min.js"
    );
    chart_min.async = true;
    document.head.appendChild(chart_min);
    const bootstrap_bundle_min = document.createElement("script");
    bootstrap_bundle_min.setAttribute(
        "src",
        "plugins/bootstrap/js/bootstrap.bundle.min.js"
    );
    bootstrap_bundle_min.async = true;
    document.head.appendChild(bootstrap_bundle_min);

    const sparkline = document.createElement("script");
    sparkline.setAttribute(
        "src",
        "plugins/sparklines/sparkline.js"
    );
    sparkline.async = true;
    document.head.appendChild(sparkline);

    const jquery_vmap_min = document.createElement("script");
    jquery_vmap_min.setAttribute(
        "src",
        "plugins/jqvmap/jquery.vmap.min.js"
    );
    jquery_vmap_min.async = true;
    document.head.appendChild(jquery_vmap_min);

    this.setButtonColor()
    this.getWeather();
  },
  methods:{
    getWeather:function () {
      let self = this;
      this.initHeader();
      Vue.axios.get('http://localhost:8080/weather/forecasts', this.header)
          .then(response =>{
            // response.data.forEach(function (item){
            //   moment.unix(1)
            //   console.log(item);
            //   // item.weather.forEach(function(weather){
            //   //   console.log(moment.unix(weather.timestamp));
            //   // })
            // })
            self.weather_data = response.data;
            console.log(self.weather_data);
          })
          .catch(
              error => {
                console.log(error)
                if (error.response.status === 401) {
                  localStorage.clear();
                  this.$router.push('/vue/');
                  return;
                }
                alert('No news found with this keyword')
              }
          );
    },
    initHeader: function (){
      this.header = {
        headers: {
          Authorization: "Bearer " + localStorage.token
        }
      }
    },
    getUser()
    {
      return {
        username: localStorage.username,
        id: localStorage.id,
      }
    },
    timestampConverter(timestamp){
      let date = new Date(timestamp*1000);
      return date.getFullYear()+'/'+this.pad(date.getMonth(),2)+'/'+this.pad(date.getDay(),2)+' '+this.pad(date.getHours(),2)+':'+this.pad(date.getMinutes(),2);
    },
    timestampToHour(timestamp){
      let date = new Date(timestamp*1000);
      return this.pad(date.getHours(),2)+':'+this.pad(date.getMinutes(),2);
    },
    timestampToDay(timestamp){
      var weekday=new Array(7);
      weekday[0]="Sunday";
      weekday[1]="Monday";
      weekday[2]="Tuesday";
      weekday[3]="Wednesday";
      weekday[4]="Thursday";
      weekday[5]="Friday";
      weekday[6]="Saturday";
      let date = new Date(timestamp*1000);
      console.log(date.getDay());
      return weekday[date.getDay()];
    },
    checkNextDay(weather_data, index)
    {
      if(weather_data[index+1] === undefined){
        return "<hr/>"
      }
      let currentDay = this.timestampToDay(weather_data[index].timestamp);
      let nextDay = this.timestampToDay(weather_data[index+1].timestamp);
      if(currentDay !== nextDay){
        return "<hr style='border: 1px dotted black' />";
      }
      return "";
    },
    pad(num, size) {
      num = num.toString();
      while (num.length < size) num = "0" + num;
      return num;
    },
    round(value){
      return Math.round(value)
    },
    humidityClass(humidity){
      let hum = this.round(humidity);
      if(hum > 60)
        return 'small-box bg-danger'
      if(hum < 30)
        return 'small-box bg-info'
      if(hum >= 30 && hum <= 60)
        return 'small-box bg-success'
    },
    temperatureClass(temperature){
      let temp = this.round(temperature);
      if(temp > 25)
        return 'small-box bg-danger'
      if(temp < 10)
        return 'small-box bg-info'
      if(temp >=10 && temp <= 25)
        return 'small-box bg-success'
    },
    goToDashboard(){
      this.$router.push('/dashboard');
    },
    goToSettings(){
      this.$router.push('/settings');
    },
    setButtonColor(){
      if(this.current_page === 'dashboard'){

        $('#btn_settings').css('background-color','transparent');
        $('#btn_settings').css('border-style','solid');
        $('#btn_settings').css('border-color','transparent');
      }
      if(this.current_page === 'settings'){
        $('#btn_dashboard').css('background-color','transparent');
        $('#btn_dashboard').css('border-style','solid');
        $('#btn_dashboard').css('border-color','transparent');

      }
    }
  }
}
</script>

<style scoped>

</style>