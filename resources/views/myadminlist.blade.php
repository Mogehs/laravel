<!DOCTYPE html>
<html lang="en">
@include("components.myadminheader",['title' => $title ?? 'Default Title'])
<body>
@include("components.myadminhelperheader")
@include("components.myadminsidebar", ['services' => $allServices]);

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Admins</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('my.AdminDashboard') }}">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Admin Lists</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Admins' Details</h5>

            <!-- Default Table for Admins -->
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Change Role To</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($adminUsers as $user)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td style="font-size:0.8rem">{{ $user->name }}
        @if($user->admin && $user->admin->is_super_admin)
          <span class="badge bg-danger">Super Admin</span>
        @elseif($user->is_admin)
          <span class="badge bg-secondary">Admin</span>
        @endif
      </td>
      <td style="font-size:0.8rem">{{ $user->email }}</td>

      <!-- Show role and role change options only for non-super admins -->
      @if(!($user->admin && $user->admin->is_super_admin))
        <td style="font-size:0.8rem">{{ $user->role }}</td>

        <td>
          <form action="{{ route('users.updateRole', $user->id) }}" method="POST" style="display:flex; justify-content:center;">
            @csrf
            @method('PATCH') <!-- Use PATCH for role update -->
            
            <select name="role" class="form-select" style="font-size:0.8rem; width: auto;">
              <option value="services_manager" {{ $user->role == 'services_manager' ? 'selected' : '' }}>Services Manager</option>
              <option value="testimonials_manager" {{ $user->role == 'testimonials_manager' ? 'selected' : '' }}>Testimonials Manager</option>
              <option value="faq_manager" {{ $user->role == 'faq_manager' ? 'selected' : '' }}>Faq Manager</option>
              <option value="contacts_manager" {{ $user->role == 'contacts_manager' ? 'selected' : '' }}>Contacts Manager</option>
              <!-- Add more roles if needed -->
            </select>

            <button type="submit" class="btn btn-primary btn-sm" style="font-size:0.8rem; margin-left: 5px;">Change Role</button>
          </form>
        </td>

        <td>
          @if(auth()->id() === $user->id || ($user->admin && $user->admin->is_super_admin))
            <button type="button" class="btn btn-secondary" disabled style="font-size:0.8rem">Delete</button>
          @else
            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" style="font-size:0.8rem">Delete</button>
            </form>
          @endif
        </td>
      @else
        <!-- For Super Admin, hide the Role, Role Change, and Delete options -->
        <td colspan="3" style="text-align:center;">No actions available for Super Admin</td>
      @endif
    </tr>
  @endforeach
</tbody>

</table>

            <!-- End Default Table Example -->
          </div>
        </div>

      </div>
    </div>

    @if( $user->admin->is_super_admin) <!-- Check if the logged-in user is a Super Admin -->
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Users' Details</h5>

          <!-- Default Table for Simple Users -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($simpleUsers as $user)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td style="font-size:0.8rem">{{ $user->name }}</td>
                  <td style="font-size:0.8rem">{{ $user->email }}</td>
                  <td style="font-size:0.8rem">{{ $user->role }}</td>
                  <td>
                    @if(auth()->id() === $user->id)
                      <button type="button" class="btn btn-secondary" disabled>Delete</button>
                    @else
                      <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger" style="font-size:0.8rem">Delete</button>
                      </form>
                    @endif

                    @if(auth()->id() !== $user->id && !$user->is_admin)
                      <form action="{{ route('user.promoteToAdmin', $user->id) }}" method="POST" style="display:inline;">
                      @csrf
                        <button type="submit" class="btn btn-success" style="font-size:0.8rem">Promote to Admin</button>
                      </form>
                    @else
                      <button type="button" class="btn btn-secondary" disabled style="font-size:0.8rem">Already Admin</button>
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <!-- End Default Table Example -->
        </div>
      </div>

    </div>
  </div>
@endif


</main><!-- End #main -->
@include('components.myadminfooter')


<!-- Vendor JS Files -->
<script src="{{ asset('assets2/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets2/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('assets2/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('assets2/vendor/quill/quill.js') }}"></script>
<script src="{{ asset('assets2/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('assets2/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets2/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets2/js/main.js') }}"></script>

</body>
</html>
