<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <!-- Dashboard Nav -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('my.AdminDashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <!-- Services Section (Visible only to Services Manager) -->
    @if(auth()->user() && auth()->user()->role == 'admin' || auth()->user()->role == 'services_manager')
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          @foreach($services as $service)
            <li>
              <a href="{{ route('update.AdminServices', ['service_id' => $service->service_id]) }}">
                <i class="bi bi-circle"></i><span>{{ $service->service_name }}</span>
              </a>
            </li>
          @endforeach
          <li>
            <a href="{{ route('my.AdminServices') }}">
              <i class="bi bi-circle"></i><span>Add Category</span>
            </a>
          </li>
        </ul>
      </li>
    @endif

    <!-- Pages Section -->
    <li class="nav-heading">Pages</li>

    <!-- Admin List (Visible only to admin users) -->
    @if(auth()->user() && auth()->user()->role == 'admin')
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('my.AdminList') }}">
          <i class="bi bi-journal-text"></i>
          <span>Admin List</span>
        </a>
      </li>
    @endif

    <!-- Testimonials (Visible to all roles) -->
    @if(auth()->user() && in_array(auth()->user()->role, ['admin', 'testimonials_manager']))
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('my.AdminTestimonials') }}">
          <i class="bi bi-card-list"></i>
          <span>Testimonials</span>
        </a>
      </li>
    @endif

    <!-- F.A.Q (Visible to all roles) -->
    @if(auth()->user() && in_array(auth()->user()->role, ['admin', 'faq_manager']))
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('my.AdminFaq') }}">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li>
    @endif

    <!-- Contact (Visible to all roles) -->
    @if(auth()->user() && in_array(auth()->user()->role, ['admin', 'contacts_manager']))
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('my.AdminContact') }}">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li>
    @endif

    <!-- Profile (Visible to all users) -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/profile') }}">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li>

    <!-- Login/Logout Links -->
    @if(!auth()->check())
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('my.Login') }}">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li>
    @else
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('my.Logout') }}">
          <i class="bi bi-box-arrow-in-left"></i>
          <span>Logout</span>
        </a>
      </li>
    @endif

    <!-- Register Page (Visible only to non-authenticated users) -->
    @if(!auth()->check())
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('my.Register') }}">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li>
    @endif

    <!-- Visit Site Link (Visible to all) -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('my.Home') }}">
        <i class="bi bi-house-door"></i>
        <span>Visit Site</span>
      </a>
    </li>

  </ul>

</aside>
