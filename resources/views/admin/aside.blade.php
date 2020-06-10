<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('/upload/avatar2.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Main Navigation</li>
            <li class="#">
                <a href="#">
                    <i class="fa fa-product-hunt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- Optionally, you can add icons to the links -->
            <li>
                <a href="{{route('job.index')}}">
                    <i class="fa fa-product-hunt"></i><span>Jobs</span>
                </a>
            </li>
            <li>
                <a href="{{route('type.index')}}">
                    <i class="fa fa-product-hunt"></i><span>Job Type</span>
                </a>
            </li>
            <li>
                <a href="{{route('company.index')}}">
                    <i class="fa fa-product-hunt"></i><span>Companies</span>
                </a>
            </li>
            <li>
                <a href="{{route('category.index')}}">
                    <i class="fa fa-product-hunt"></i><span>Categories</span>
                </a>
            </li>
            <li>
                <a href="{{route('location.index')}}">
                    <i class="fa fa-product-hunt"></i><span>Locations</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-product-hunt"></i>
                    <span>Setting</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"> <i class="fa fa-product-hunt"></i>User Profile</a></li>
                    <li><a href="#"> <i class="fa fa-product-hunt"></i>User Management</a></li>
                </ul>
            </li>

        </ul>
        <!-- /.sidebar-menu -->

    </section>
    <!-- /.sidebar -->

</aside>
