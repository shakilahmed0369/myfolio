<style>
    .br-menu-sub .active
    {
        display: block;
    }
</style>


<div class="br-logo"><a href="{{ URL::to('/admin') }}"><span>[</span>bracket<span>]</span></a></div>
<div class="br-sideleft overflow-y-auto">
  <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
  <div class="br-sideleft-menu">
    <a href="{{ URL::to('/admin') }}" class="br-menu-link active">
      <div class="br-menu-item">
        <i class="menu-item-icon fas fa-house-user tx-18 "></i>
        <span class="menu-item-label">Dashboard</span>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->

    {{-- profile settings --}}
    <a href="#" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon far fa-address-card  tx-18"></i>
        <span class="menu-item-label">Profile Setting</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>

      </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
      <li class="nav-item"><a href="{{ route('admin.profile-settings.index') }}" class="nav-link">Profile Update</a></li>

      <li class="nav-item"><a href="{{ route('admin.profile-sociallink.create') }}" class="nav-link">Add Social Links</a></li>
      <li class="nav-item"><a href="{{ route('admin.profile-sociallink.index') }}" class="nav-link">Social Links List</a></li>
    </ul>
    {{-- profile settings End--}}

    {{-- about settings --}}
    <a href="#" class="br-menu-link">
      <div class="br-menu-item">
        <i class="fas fa-user-alt"></i>
        <span class="menu-item-label">About Page</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
      </div><!-- menu-item -->
    </a><!-- br-menu-link -->

    <ul class="br-menu-sub nav flex-column">
      <li class="nav-item"><a href="{{ route('admin.about-me.index') }}" class="nav-link">Update About info</a></li>

      <hr class="my-2">
      <i>Services Section --</i>

      <li class="nav-item"><a href="{{ route('admin.services.index') }}" class="nav-link">Services List</a></li>
      <li class="nav-item"><a href="{{ route('admin.services.create') }}" class="nav-link">Add Service</a></li>

      <hr class="my-2">
      <i>Fun Fact Section --</i>

      <li class="nav-item"><a href="{{ route('admin.fun-fact.index') }}" class="nav-link">Fun Fact List</a></li>
      <li class="nav-item"><a href="{{ route('admin.fun-fact.create') }}" class="nav-link">Add Fun Fact</a></li>

      <hr class="my-2">
      <i>Clints Section --</i>

      <li class="nav-item"><a href="{{ route('admin.clients.index') }}" class="nav-link">Clients List</a></li>
      <li class="nav-item"><a href="{{ route('admin.clients.create') }}" class="nav-link">Add Client</a></li>

      <hr class="my-2">
      <i>Testimonial Section --</i>

      <li class="nav-item"><a href="{{ route('admin.testimonial.index') }}" class="nav-link">testimonial List</a></li>
      <li class="nav-item"><a href="{{ route('admin.testimonial.create') }}" class="nav-link">Add testimonial</a></li>

    </ul>
    {{-- about settings End--}}


    {{-- Skill settings --}}
    <a href="#" class="br-menu-link">
      <div class="br-menu-item">
        <i class="fas fa-dharmachakra"></i>
        <span class="menu-item-label">Skill Page</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>

      </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
      <hr class="my-2">
      <i>Knowledges Section --</i>

      <li class="nav-item"><a href="{{ route('admin.knowledge.index') }}" class="nav-link">List Knowledges</a></li>

      <li class="nav-item"><a href="{{ route('admin.knowledge.create') }}" class="nav-link">Add Knowledge</a></li>

      <hr class="my-2">
      <i>TechKnowledeys Section --</i>

      <li class="nav-item"><a href="{{ route('admin.technology.index') }}" class="nav-link">List TechKnowledeys</a></li>

      <li class="nav-item"><a href="{{ route('admin.technology.create') }}" class="nav-link">Add TechKnowledey</a></li>

    </ul>
    {{-- Skill settings End--}}

        {{-- profile settings --}}
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="fas fa-briefcase"></i>
            <span class="menu-item-label">Works Section</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>

          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <hr class="my-2">
          <i>Works Category --</i>
          <li class="nav-item"><a href="{{ route('admin.work-category.index') }}" class="nav-link">Works Category List</a></li>

          <li class="nav-item"><a href="{{ route('admin.work-category.create') }}" class="nav-link">Add Work Category</a></li>
          <hr class="my-2">
          <i>Works Posts--</i>
          <li class="nav-item"><a href="{{ route('admin.works.index') }}" class="nav-link">Works List</a></li>

          <li class="nav-item"><a href="{{ route('admin.works.create') }}" class="nav-link">Add Works</a></li>

        </ul>
        {{-- profile settings End--}}


        {{-- blog settings --}}
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="fas fa-blog"></i>
            <span class="menu-item-label">Blog Section</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>

          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <hr class="my-2">
          <i>Blog Category --</i>
          <li class="nav-item"><a href="{{ route('admin.blog-category.index') }}" class="nav-link">Blog Category List</a></li>

          <li class="nav-item"><a href="{{ route('admin.blog-category.create') }}" class="nav-link">Add Blog Category</a></li>
          <hr class="my-2">
          <i>Blog Posts--</i>
          <li class="nav-item"><a href="{{ route('admin.blog-post.index') }}" class="nav-link">Blog Post List</a></li>

          <li class="nav-item"><a href="{{ route('admin.blog-post.create') }}" class="nav-link">Add Blog Post</a></li>

        </ul>
        {{-- blog settings End--}}


        {{-- contact settings --}}
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="fas fa-id-badge"></i>
            <span class="menu-item-label">Contact Section</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>

          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">

          <li class="nav-item"><a href="{{ route('admin.contact.index') }}" class="nav-link">Contact List</a></li>
        </ul>
        {{-- contact settings End--}}

        {{-- acount settings --}}
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="far fa-user-circle"></i>
            <span class="menu-item-label">Account Setting</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>

          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">

          <li class="nav-item"><a href="{{ route('admin.account.edit', 1) }}" class="nav-link">Update Account</a></li>

        </ul>
        {{-- acount settings End--}}

              {{-- settings settings --}}
              <a href="#" class="br-menu-link">
                <div class="br-menu-item">
                  <i class="fas fa-cogs"></i>
                  <span class="menu-item-label">Settings</span>
                  <i class="menu-item-arrow fa fa-angle-down"></i>

                </div><!-- menu-item -->
              </a><!-- br-menu-link -->
              <ul class="br-menu-sub nav flex-column">

                <li class="nav-item"><a href="{{ route('admin.settings.edit',1) }}" class="nav-link">Web Settings</a></li>

              </ul>
              {{-- settings settings End--}}






  </div><!-- br-sideleft-menu -->
</div>

<!-- ########## START: HEAD PANEL ########## -->
@include('backend.layouts.navbar')
<!-- ########## END: HEAD PANEL ########## -->
