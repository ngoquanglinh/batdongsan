<div class="navbar sidebar p-0" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav flex-column nav-pills" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="admin/trang-chu"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="admin/loaisanpham/danhsach"><i class="fa fa-bar-chart-o fa-fw"></i>Dự Án<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/duan/danhsach">Danh Sách Dự Án</a>
                    </li>
                    @can('create')
                    <li>
                        <a href="admin/duan/them">Thêm Dự Án</a>
                    </li>
                    @endcan
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="admin/loaisanpham/danhsach"><i class="fa fa-bar-chart-o fa-fw"></i>Tin Rao Cần Bán/Cho Thuê<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/tinraoban/danhsach">Danh Sách Tin Rao Cần Bán/Cho Thuê</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="admin/tinraomua/danhsach"><i class="fa fa-bar-chart-o fa-fw"></i>Tin Rao Cần Mua/Cần Thuê<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/tinraomua/danhsach">Danh Sách Tin Rao Cần Mua/Cần Thuê</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="admin/tintuc/danhsach"><i class="fa fa-cube fa-fw"></i>Tin Tức<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/tintuc/danhsach">Danh Sách Tin Tức</a>
                    </li>
                    @can('create')
                    <li>
                        <a href="admin/tintuc/them">Thêm Tin</a>
                    </li>
                    @endcan
                </ul>
                <!-- /.nav-second-level -->
            </li>
            @role('admin')
            <li>
                <a href="admin/user/danhsach"><i class="fa fa-users fa-fw"></i>User<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/user/danhsach">Danh Sách Người Dùng</a>
                    </li>
                    <li>
                        <a href="admin/user/them">Thêm Người Dùng</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            @endrole
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>