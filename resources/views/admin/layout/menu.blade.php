<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="{{ asset('/assets/img/avatar-6.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h5">Admin</h1>
            <p>Web Designer</p>
        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
        <li><a href="#dropdown-admin" aria-expanded="false" data-toggle="collapse"> <i class='fas fa-user-graduate'></i>Manage User </a>
            <ul id="dropdown-admin" class="collapse list-unstyled ">
                <li><a href="{{ route('admin.user.show') }}">List User</a></li>
                <li><a href="{{ route('admin.user.add') }}">Add User</a></li>
            </ul>
        </li>
        <li><a href="#dropdow-customer" aria-expanded="false" data-toggle="collapse"> <i class='fas fas fa-users'></i>Khách Hàng </a>
            <ul id="dropdow-customer" class="collapse list-unstyled ">
                <li><a href="/customer/list">Danh Sách</a></li>
                <li><a href="/customer/add">Đăng Ký</a></li>
            </ul>
        </li>
        <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li>
        <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>
        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
            </ul>
        </li>
        <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
    </ul><span class="heading">Extras</span>
    <ul class="list-unstyled">
        <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
        <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
        <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
    </ul>
</nav>
