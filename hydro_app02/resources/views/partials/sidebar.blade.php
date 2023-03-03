<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="../../assets/images/HPlogobig.png" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">HydroPlanters</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                {{-- <img src="{{ auth()->user()->getAvatar() }}" class="img-circle elevation-2" alt="User Image"> --}}
                <img src="../../assets/images/userimg/nilo.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('products.index') }}" class="nav-link">
                    {{-- <a href="#" class="nav-link"> --}}
                        <i class="nav-icon fas fa-th-large"></i>
                        <p>Products</p>
                    </a>
                </li>
                {{-- <li class="nav-item has-treeview"> --}}
                    {{-- <a href="{{ route('cart.index') }}" class="nav-link {{ activeSegment('cart') }}"> --}}
                    {{-- <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cart-plus"></i>
                        <p>Open POS</p>
                    </a>
                </li> --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cart-plus"></i>
                        <p>Orders</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    {{-- <a href="{{ route('customers.index') }}" class="nav-link {{ activeSegment('customers') }}"> --}}
                    <a href="#" class="nav-link">        
                        <i class="nav-icon fas fa-users"></i>
                        <p>Customers</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    {{-- <a href="{{ route('settings.index') }}" class="nav-link {{ activeSegment('settings') }}"> --}}
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>Settings</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="document.getElementById('logout-form').submit()">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                        <form action="#" method="POST" id="logout-form">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
