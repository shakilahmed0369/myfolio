<div class="br-header">
  <div class="br-header-left">
    <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="fas fa-bars"></i></a></div>
    <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
    <div class="input-group hidden-xs-down wd-170 transition">
      <input id="searchbox" type="text" class="form-control" placeholder="Search">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
      </span>
    </div><!-- input-group -->
  </div><!-- br-header-left -->
  <div class="br-header-right">
    <nav class="nav">
      <div class="dropdown">
        <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
          <i class="far fa-envelope  tx-24"></i>
          <!-- start: if statement -->
          <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
          <!-- end: if statement -->
        </a>
        <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
          <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
            <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Messages</label>
            <a href="" class="tx-11">+ Add New Message</a>
          </div><!-- d-flex -->
          <div class="media-list">

            <!-- loop starts here -->
            <a href="" class="media-list-link">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <div class="d-flex align-items-center justify-content-between mg-b-5">
                    <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Donna Seay</p>
                    <span class="tx-11 tx-gray-500">2 minutes ago</span>
                  </div><!-- d-flex -->
                  <p class="tx-12 mg-b-0">A wonderful serenity has taken possessionof my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>

            <div class="pd-y-10 tx-center bd-t">
              <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Messages</a>
            </div>
          </div><!-- media-list -->
        </div><!-- dropdown-menu -->
      </div><!-- dropdown -->
      <div class="dropdown">
        <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
          <i class="far fa-bell  tx-24"></i>
          <!-- start: if statement -->
          <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
          <!-- end: if statement -->
        </a>
        <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
          <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
            <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Notifications</label>
            <a href="" class="tx-11">Mark All as Read</a>
          </div><!-- d-flex -->

          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversationwith <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">October 01, 2017 6:08pm</span>
                </div>
              </div><!-- media -->
            </a>
            <div class="pd-y-10 tx-center bd-t">
              <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
            </div>
          </div><!-- media-list -->
        </div><!-- dropdown-menu -->
      </div><!-- dropdown -->
      <div class="dropdown">
        <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
          <span class="logged-name hidden-md-down">{{ Auth::user()->name }}</span>
          <img style="height: 30px; object-fit:cover;" src="{{ asset('storage/images/profile/'.Auth::user()->image) }}" class="wd-32 rounded-circle" alt="">
          <span class="square-10 bg-success"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-header wd-200">
          <ul class="list-unstyled user-profile-nav">

            <li><a href="" onclick="event.preventDefault(); $('#logout').submit();"><i class="fas fa-sign-out-alt"></i> Sign Out</a></li>

            <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          </ul>
        </div><!-- dropdown-menu -->
      </div><!-- dropdown -->
    </nav>
    <div class="navicon-right">
      <a id="btnRightMenu" href="" class="pos-relative">
        <i class="far fa-clock tx-24"></i>
        <!-- start: if statement -->
        <span class="square-8 bg-danger pos-absolute t-10 r--5 rounded-circle"></span>
        <!-- end: if statement -->
      </a>
    </div><!-- navicon-right -->
  </div><!-- br-header-right -->
</div><!-- br-header -->