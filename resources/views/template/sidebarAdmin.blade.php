@extends("template.master")

@push("style")
<link rel="stylesheet" href="{{asset('asset/css/template/sidebar.css')}}">
@endpush

@section("value-body")

<div class="sidebar close">
  <div class="logo-details">
    <i class='bx bxl-c-plus-plus'></i>
    <span class="logo_name">Ditarah</span>
  </div>
  <ul class="nav-links">
    <!--Dashboard admin only start-->

    @can('show dashboard')
    <li>
      <a href="dashboard">
        <i class='bx bx-grid-alt'></i>
        <span class="link_name">Dashboard</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="dashboard">Dashboard</a></li>
      </ul>
    </li>

    @endcan
    <!--Dashboard admin only end-->
    <!--Home admin and user end-->
    <!--Category content only admin-->

    @can('show konten')
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-collection'></i>
          <span class="link_name">Konten</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Konten</a></li>
        <li><a href="topikUtama">Topik utama</a></li>
        <li><a href="trendingIsu">Trending Isu</a></li>
        <li><a href="sejarah">Sejarah</a></li>
        <li><a href="kisahInspiratif">Kisah Inspiratif</a></li>
      </ul>
    </li>
    @endcan
    <!--Category content only admin-->
    <!--Content only user start-->

    <!--Content only user end-->

    <!---Only admin start--->

    @can('show users')
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-user'></i>
          <span class="link_name">Users</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Users</a></li>
        <li><a href="#">Users</a></li>
        <li><a href="#">Roles</a></li>
      </ul>
    </li>
    @endcan

    @can('show events')
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-calendar-event'></i>
          <span class="link_name">Event</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Event</a></li>
        <li><a href="eventLogin">Login</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </li>
    @endcan
    @can('show nontifikasi')
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-bell'></i>
          <span class="link_name">Nontifikasi</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Nontifikasi</a></li>
        <li><a href="/calonAdmin">calon admin</a></li>

      </ul>
    </li>

    @endcan
    @can('show profile')
    <div class="profile-details">
      <div class="profile-content">
        <img src="image/profile.jpg" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name">{{Auth::user()->name}}</div>
        <div class="job">{{Auth::user()->getRoleNames()}}</div>
      </div>
      <div class="text-decoration-none" style="color:#fff; margin-right:15px;">
        <a href="logout" style="z-index:100px;color:#fff">
          <i class='bx bx-log-out'></i>
        </a>
      </div>
    </div>
    @endcan

    <!---Only admin end--->
    </li>
  </ul>
</div>

@yield('content')
<script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e) => {
      let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
      arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", () => {
    sidebar.classList.toggle("close");
  });
</script>
@endsection