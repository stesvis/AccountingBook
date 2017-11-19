<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas" style="min-height: 2016px;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('AdminLTE/img/avatar3.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Hello, {{Auth::user()->name}}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="seach" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active">
                <a href="index.html">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-address-card"></i>
                    <span>Customers</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/charts/morris.html" style="margin-left: 10px;"><i
                                    class="fa fa-angle-double-right"></i> All Customers</a></li>
                    <li><a href="pages/charts/flot.html" style="margin-left: 10px;"><i
                                    class="fa fa-angle-double-right"></i> Add New</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-address-book"></i>
                    <span>Vendors</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/charts/morris.html" style="margin-left: 10px;"><i
                                    class="fa fa-angle-double-right"></i> All Vendors</a></li>
                    <li><a href="pages/charts/flot.html" style="margin-left: 10px;"><i
                                    class="fa fa-angle-double-right"></i> Add New</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
