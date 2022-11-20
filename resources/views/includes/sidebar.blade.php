 <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
 <aside class="left-sidebar sidebar-dark" id="left-sidebar">
     <div id="sidebar" class="sidebar sidebar-with-footer">
         <!-- Aplication Brand -->
         <div class="app-brand">
             <a href="{{ route('admin.dashboard') }}">
                 <img src="{{ asset('admin-assets/images/logo.png') }}" alt="Vape Pa More">
                 <span class="brand-name">Vape Pa More</span>
             </a>
         </div>
         <!-- begin sidebar scrollbar -->
         <div class="sidebar-left" data-simplebar style="height: 100%;">
             <!-- sidebar menu -->
             <ul class="nav sidebar-inner" id="sidebar-menu">



                 <li class="{{ Request::route()->getName() == 'admin.dashboard' ? 'active' : '' }}">
                     <a class="sidenav-item-link" href="{{ route('admin.dashboard') }}">
                         <i class="mdi mdi-briefcase-account-outline"></i>
                         <span class="nav-text">Dashboard</span>
                     </a>

                     @if (auth()->user()->role == 1)
                 <li class="{{ Request::route()->getName() == 'admin-payments' ? 'active' : '' }}">
                     <a class="sidenav-item-link" href="{{ route('admin-payments') }}">
                         <i class="mdi mdi-cash-multiple"></i>
                         <span class="nav-text">Payments Management</span>
                     </a>
                 </li>
             @elseif(auth()->user()->role == 2)
                 <li class="{{ Request::route()->getName() == 'admin-payments' ? 'active' : '' }}">
                     <a class="sidenav-item-link" href="/employee/users">
                         <i class="mdi mdi-cash-multiple"></i>
                         <span class="nav-text">Payments Management</span>
                     </a>
                 </li>
             @else
                 <li class="{{ Request::route()->getName() == 'admin-payments' ? 'active' : '' }}">
                     <a class="sidenav-item-link" href="/customer/users">
                         <i class="mdi mdi-cash-multiple"></i>
                         <span class="nav-text">Payments Management</span>
                     </a>
                 </li>
                 @endif

                     @if (auth()->user()->role == 1)
                 <li class="{{ Request::route()->getName() == 'admin-products' ? 'active' : '' }}">
                     <a class="sidenav-item-link" href="{{ route('admin-products') }}">
                         <i class="mdi mdi-package-variant-closed"></i>
                         <span class="nav-text">Products Management</span>
                     </a>
                 </li>
             @elseif(auth()->user()->role == 2)
                 <li class="{{ Request::route()->getName() == 'admin-products' ? 'active' : '' }}">
                     <a class="sidenav-item-link" href="/employee/users">
                         <i class="mdi mdi-package-variant-closed"></i>
                         <span class="nav-text">Products Management</span>
                     </a>
                 </li>
             @else
                 <li class="{{ Request::route()->getName() == 'admin-products' ? 'active' : '' }}">
                     <a class="sidenav-item-link" href="/customer/users">
                         <i class="mdi mdi-package-variant-closed"></i>
                         <span class="nav-text">Products Management</span>
                     </a>
                 </li>
                 @endif

                 @if (auth()->user()->role == 1)
                     <li class="{{ Request::route()->getName() == 'admin-user' ? 'active' : '' }}">
                         <a class="sidenav-item-link" href="{{ route('admin-user') }}">
                             <i class="mdi mdi-account-group"></i>
                             <span class="nav-text">Users Management</span>
                         </a>
                     </li>
                 @elseif(auth()->user()->role == 2)
                     <li class="{{ Request::route()->getName() == 'admin-user' ? 'active' : '' }}">
                         <a class="sidenav-item-link" href="/employee/users">
                             <i class="mdi mdi-account-group"></i>
                             <span class="nav-text">Users Management</span>
                         </a>
                     </li>
                 @else
                     <li class="{{ Request::route()->getName() == 'admin-user' ? 'active' : '' }}">
                         <a class="sidenav-item-link" href="/customer/users">
                             <i class="mdi mdi-account-group"></i>
                             <span class="nav-text">Users Management</span>
                         </a>
                     </li>
                 @endif

                 <li class="has-sub">
                     <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                         data-target="#account_settings" aria-expanded="false" aria-controls="account_settings">
                         <i class="mdi mdi-account"></i>
                         <span class="nav-text">Account Settings</span> <b class="caret"></b>
                     </a>
                     <ul class="collapse" id="account_settings" data-parent="#sidebar-menu">
                         <div class="sub-menu">
                             <li>
                                 <a class="sidenav-item-link" href="user-profile.html">
                                     <span class="nav-text">User Profile</span>

                                 </a>
                             </li>

                             <li>
                                 <a class="sidenav-item-link" href="user-activities.html">
                                     <span class="nav-text">User Activities</span>

                                 </a>
                             </li>

                             <li>
                                 <a class="sidenav-item-link" href="user-profile-settings.html">
                                     <span class="nav-text">Change Password</span>

                                 </a>
                             </li>
                         </div>
                     </ul>
                 </li>
             </ul>

         </div>

         <div class="sidebar-footer">
             <div class="sidebar-footer-content">

             </div>
         </div>
     </div>
 </aside>
