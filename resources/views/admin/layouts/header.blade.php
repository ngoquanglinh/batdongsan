<nav class="navbar navbar-dark bg-dark navbar-static-top d-flex justify-content-between mb-0" role="navigation">
    <div class="w-50">
        <a class="navbar-brand" href="admin/trang-chu">Bất động sản</a>
    </div>
    <div class="w-50">
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#fff;">
                    <i class="fa fa-user fa-fw"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    @if(Auth::check())
                    <li><i class="fa fa-user fa-fw"></i>{{Auth::user()->name}}</li>
                    <li><a href="admin/user/sua/{{Auth::user()->id}}"><i class="fa fa-gear fa-fw"></i>Setting</a></li>
                    <li class="divider"></li>
                    <li><a href="admin/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
                    @endif
                </ul>
            </li>
            <!-- /.dropdown -->
        </ul>
    </div>


    <!-- /.navbar-header -->

    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>