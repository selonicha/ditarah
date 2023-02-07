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
  <ul class="nav-links">'
    <!--Dashboard admin only start-->
    <!--Dashboard admin only end-->
    <!--Home admin and user start-->

    <li>
      <a href="#">
        <i class='bx bx-home-alt-2'></i>
        <span class="link_name">Home</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Home</a></li>
      </ul>
    </li>

    <!--Home admin and user end-->
    <!--Category content only admin-->

    <!-- <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-collection'></i>
          <span class="link_name">Konten</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Konten</a></li>
        <li><a href="#">Topik utama</a></li>
        <li><a href="#">Trending Isu</a></li>
        <li><a href="#">Sejarah</a></li>
        <li><a href="#">Kisah Inspiratif</a></li>
      </ul>
    </li> -->

    <!--Category content only admin-->
    <!--Content only user start-->

    <li>
      <a href="#">
        <i class='bx bx-history'></i>
        <span class="link_name">Sejarah</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Sejarah</a></li>
      </ul>
    </li>


    <li>
      <a href="#">
        <i class='bx bx-book-heart'></i>
        <span class="link_name">Kisah Inspiratif</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Kisah Inspiratif</a></li>
      </ul>
    </li>
    <!--Content only user end-->

    <!---Only admin start--->

    <!-- <li>
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
    </li> -->

    <!-- <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-calendar-event'></i>
          <span class="link_name">Event</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Event</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </li> -->
    <!-- <div class="profile-details">
      <div class="profile-content">
        <img src="image/profile.jpg" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name">Prem Shahi</div>
        <div class="job">Web Desginer</div>
      </div>
      <div class="text-decoration-none" style="color:#fff; margin: right 5px;">
        <a href="login">
          <i class='bx bx-log-out'></i>
        </a>
      </div>
    </div> -->

    <div class="default_profile profile-details d-flex justify-content-center align-items-center">
      <div class="name-job">
        <a href="login" class="text-decoration-none">
          <a href="login" class="text-decoration-none">
            <button class="fw-bold btn rounded-pill" role="button" style="background-color:#fff; width:100%">
              <div class="profile_name" style="color:black">Saya Admin?</div>
              <div class="job" style="color:black">klik ini</div>
            </button>
          </a>
        </a>
      </div>
    </div>

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