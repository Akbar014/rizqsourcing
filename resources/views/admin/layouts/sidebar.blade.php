<div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="#" class="logo text-white">
              RIZQ SOURCING
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">

              <li class="nav-item {{ Request::is('*dashboard*') ? 'active' : '' }}">
                <a
                  href="{{route('dashboard')}}"
                >
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
                
              </li>
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Features</h4>
              </li>
              <li class="nav-item {{ Request::is('*products*') ? 'active' : '' }}">
                <a href="{{route('products')}}">
                  <i class="fas fa-layer-group"></i>
                  <p>Products</p>
                </a>

                <!-- <div class="collapse" id="base">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="components/avatars.html">
                        <span class="sub-item">Avatars</span>
                      </a>
                    </li>
                    <li>
                      <a href="components/buttons.html">
                        <span class="sub-item">Buttons</span>
                      </a>
                    </li>
                    <li>
                      <a href="components/gridsystem.html">
                        <span class="sub-item">Grid System</span>
                      </a>
                    </li>
                    <li>
                      <a href="components/panels.html">
                        <span class="sub-item">Panels</span>
                      </a>
                    </li>
                    <li>
                      <a href="components/notifications.html">
                        <span class="sub-item">Notifications</span>
                      </a>
                    </li>
                    <li>
                      <a href="components/sweetalert.html">
                        <span class="sub-item">Sweet Alert</span>
                      </a>
                    </li>
                    <li>
                      <a href="components/font-awesome-icons.html">
                        <span class="sub-item">Font Awesome Icons</span>
                      </a>
                    </li>
                    <li>
                      <a href="components/simple-line-icons.html">
                        <span class="sub-item">Simple Line Icons</span>
                      </a>
                    </li>
                    <li>
                      <a href="components/typography.html">
                        <span class="sub-item">Typography</span>
                      </a>
                    </li>
                  </ul>
                </div> -->
              </li>
              <li class="nav-item {{ Request::is('*categories*') ? 'active' : '' }}">
                <a href="categories">
                  <i class="fas fa-th-list"></i>
                  <p>Buying Services</p>
                </a>
              </li>
              <li class="nav-item {{ Request::is('*capabilities*') ? 'active' : '' }}">
                <a href="capabilities">
                  <i class="fas fa-th-list"></i>
                  <p>Capabilities</p>
                </a>
              </li>
              <li class="nav-item {{ Request::is('*sliders*') ? 'active' : '' }}">
                <a href="{{route('sliders')}}">
                  <i class="fas fa-pen-square"></i>
                  <p>Sliders </p>
                </a>
              </li>
              <li class="nav-item {{ Request::is('*contacts*') ? 'active' : '' }}">
                <a href="{{route('contacts')}}">
                  <i class="fas fa-file"></i>
                  <p>Contacts</p>
                  <!-- <span class="badge badge-secondary">1</span> -->
                </a>
              </li>
              <li class="nav-item {{ Request::is('*company_profile*') ? 'active' : '' }}">
                <a href="{{ route('company_profile') }}">
                  <i class="fas fa-table"></i>
                  <p>Company Profile</p>
                </a>
              </li>

              <li class="nav-item {{ Request::is('*quality*') ? 'active' : '' }}">
                <a href="{{ route('quality') }}">
                  <i class="fas fa-table"></i>
                  <p>Quality</p>
                </a>
              </li>

              <li class="nav-item {{ Request::is('*compliance*') ? 'active' : '' }}">
                <a href="{{ route('compliance') }}">
                  <i class="fas fa-table"></i>
                  <p>Compliance</p>
                </a>
              </li>
              
              {{-- <li class="nav-item {{ Request::is('*production_unit*') ? 'active' : '' }}">
                <a href="{{ route('production_unit') }}">
                  <i class="fas fa-table"></i>
                  <p>Production Unit</p>
                </a>
              </li> --}}

              <li class="nav-item {{ Request::is('*sustainability*') ? 'active' : '' }}">
                <a href="{{ route('sustainability') }}">
                  <i class="fas fa-table"></i>
                  <p>Sustainability</p>
                </a>
              </li>

              <li class="nav-item {{ Request::is('*who_we_are*') ? 'active' : '' }}">
                <a href="{{ route('who_we_are') }}">
                  <i class="fas fa-table"></i>
                  <p>Who_we_are</p>
                </a>
              </li>
              <li class="nav-item {{ Request::is('*what_we_do*') ? 'active' : '' }}">
                <a href="{{ route('what_we_do') }}">
                  <i class="fas fa-table"></i>
                  <p>What_we_do</p>
                </a>
              </li>

              <li class="nav-item {{ Request::is('*queries*') ? 'active' : '' }}">
                <a href="{{ route('queries') }}">
                  <i class="fas fa-table"></i>
                  <p>Queries</p>
                </a>
              </li>

              {{-- <li class="nav-item">
                <a data-bs-toggle="collapse" href="#tables">
                  <i class="fas fa-table"></i>
                  <p>Others</p>
                </a>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#tables">
                  <i class="fas fa-table"></i>
                  <p>Others</p>
                </a>
              </li> --}}
             

              <!-- <li class="nav-item">
                <a data-bs-toggle="collapse" href="#maps">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Maps</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="maps">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="maps/googlemaps.html">
                        <span class="sub-item">Google Maps</span>
                      </a>
                    </li>
                    <li>
                      <a href="maps/jsvectormap.html">
                        <span class="sub-item">Jsvectormap</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#charts">
                  <i class="far fa-chart-bar"></i>
                  <p>Charts</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="charts">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="charts/charts.html">
                        <span class="sub-item">Chart Js</span>
                      </a>
                    </li>
                    <li>
                      <a href="charts/sparkline.html">
                        <span class="sub-item">Sparkline</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="widgets.html">
                  <i class="fas fa-desktop"></i>
                  <p>Widgets</p>
                  <span class="badge badge-success">4</span>
                </a>
              </li>
              
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#submenu">
                  <i class="fas fa-bars"></i>
                  <p>Menu Levels</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="submenu">
                  <ul class="nav nav-collapse">
                    <li>
                      <a data-bs-toggle="collapse" href="#subnav1">
                        <span class="sub-item">Level 1</span>
                        <span class="caret"></span>
                      </a>
                      <div class="collapse" id="subnav1">
                        <ul class="nav nav-collapse subnav">
                          <li>
                            <a href="#">
                              <span class="sub-item">Level 2</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="sub-item">Level 2</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a data-bs-toggle="collapse" href="#subnav2">
                        <span class="sub-item">Level 1</span>
                        <span class="caret"></span>
                      </a>
                      <div class="collapse" id="subnav2">
                        <ul class="nav nav-collapse subnav">
                          <li>
                            <a href="#">
                              <span class="sub-item">Level 2</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a href="#">
                        <span class="sub-item">Level 1</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li> -->


            </ul>
          </div>
        </div>
      </div>