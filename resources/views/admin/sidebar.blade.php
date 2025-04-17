<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="{{route('admin.dashboard')}}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    {{-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Alerts</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>Accordion</span>
            </a>
          </li>
          <li>
            <a href="components-badges.html">
              <i class="bi bi-circle"></i><span>Badges</span>
            </a>
          </li>
          <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Breadcrumbs</span>
            </a>
          </li>
          <li>
            <a href="components-buttons.html">
              <i class="bi bi-circle"></i><span>Buttons</span>
            </a>
          </li>
          <li>
            <a href="components-cards.html">
              <i class="bi bi-circle"></i><span>Cards</span>
            </a>
          </li>
          <li>
            <a href="components-carousel.html">
              <i class="bi bi-circle"></i><span>Carousel</span>
            </a>
          </li>
          <li>
            <a href="components-list-group.html">
              <i class="bi bi-circle"></i><span>List group</span>
            </a>
          </li>
          <li>
            <a href="components-modal.html">
              <i class="bi bi-circle"></i><span>Modal</span>
            </a>
          </li>
          <li>
            <a href="components-tabs.html">
              <i class="bi bi-circle"></i><span>Tabs</span>
            </a>
          </li>
          <li>
            <a href="components-pagination.html">
              <i class="bi bi-circle"></i><span>Pagination</span>
            </a>
          </li>
          <li>
            <a href="components-progress.html">
              <i class="bi bi-circle"></i><span>Progress</span>
            </a>
          </li>
          <li>
            <a href="components-spinners.html">
              <i class="bi bi-circle"></i><span>Spinners</span>
            </a>
          </li>
          <li>
            <a href="components-tooltips.html">
              <i class="bi bi-circle"></i><span>Tooltips</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav --> --}}

    {{-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav --> --}}

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#roles-and-permissions-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person"></i><span>Roles and Permissions</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="roles-and-permissions-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">


        @if(Auth::user()->can('Add Permission'))
        <li>
          <a href="{{route('add.permission')}}">
            <i class="bi bi-circle"></i><span>Add Permission</span>
          </a>
        </li>
        @endif
        @if(Auth::user()->can('View Permissions'))
        <li>
          <a href="{{route('all.permission')}}">
            <i class="bi bi-circle"></i><span>All Permission</span>
          </a>
        </li>
        @endif
        @if(Auth::user()->can('Import Permissions'))
        <li>
          <a href="{{route('import.permission')}}">
            <i class="bi bi-circle"></i><span>Import Permission</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('View Roles'))
        <li>
          <a href="{{route('all.roles')}}">
            <i class="bi bi-circle"></i><span>All Roles</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('Add Roles & Permissions'))
        <li>
          <a href="{{route('add.roles.permission')}}">
            <i class="bi bi-circle"></i><span>Add Roles Permission</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('View Roles & Permissions'))
        <li>
          <a href="{{route('all.roles.permission')}}">
            <i class="bi bi-circle"></i><span>All Roles & Permission</span>
          </a>
        </li>
        @endif


      </ul>
    </li><!-- End Tables Nav -->



    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#manage-news" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person"></i><span>Manage News</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="manage-news" class="nav-content collapse " data-bs-parent="#sidebar-nav">

        <li>
          @if(Auth::user()->can('View All News'))
          <a href="{{route('all.news')}}">
            <i class="bi bi-circle"></i><span>All News</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('Add News'))
        <li>
          <a href="{{route('add.news.post')}}">
            <i class="bi bi-circle"></i><span>Add News</span>
          </a>
        </li>
        @endif



      </ul>
    </li><!-- End Tables Nav -->



    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#manage-blogs" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person"></i><span>Manage Blogs</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="manage-blogs" class="nav-content collapse " data-bs-parent="#sidebar-nav">

        @if(Auth::user()->can('All Blog Category'))

        <li>
          <a href="{{route('blogs.category')}}">
            <i class="bi bi-circle"></i><span>All Blogs Category</span>
          </a>
        </li>

        @endif



        @if(Auth::user()->can('View All Blogs'))
        <li>
          <a href="{{route('all.blogs')}}">
            <i class="bi bi-circle"></i><span>All Blogs</span>
          </a>
        </li>
        @endif


        @if(Auth::user()->can('Add Blog'))
        <li>
          <a href="{{route('add.blog')}}">
            <i class="bi bi-circle"></i><span>Add Blog</span>
          </a>
        </li>
        @endif


      </ul>
    </li>


    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#manage-programmes" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person"></i><span>Manage Programmes</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="manage-programmes" class="nav-content collapse " data-bs-parent="#sidebar-nav">

        @if(Auth::user()->can('View Programmes'))
        <li>
          <a href="{{route('all.programmes')}}">
            <i class="bi bi-circle"></i><span>All Programmes</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('Add Programme'))
        <li>
          <a href="{{route('add.programme')}}">
            <i class="bi bi-circle"></i><span>Add Programmes</span>
          </a>
        </li>
        @endif


        @if(Auth::user()->can('View All Syllabus'))
        <li>
          <a href="{{route('all.syllabus')}}">
            <i class="bi bi-circle"></i><span>All Syllabus</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('Add Syllabus'))
        <li>
          <a href="{{route('add.syllabus')}}">
            <i class="bi bi-circle"></i><span>Add Syllabus</span>
          </a>
        </li>
        @endif

      </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#manage-faqs" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person"></i><span>Manage Faqs</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="manage-faqs" class="nav-content collapse " data-bs-parent="#sidebar-nav">

        @if(Auth::user()->can('View Faqs'))
        <li>
          <a href="{{route('all.faqs')}}">
            <i class="bi bi-circle"></i><span>All Faqs</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('Add Faq'))
        <li>
          <a href="{{route('add.faq')}}">
            <i class="bi bi-circle"></i><span>Add Faq</span>
          </a>
        </li>
        @endif

      </ul>
    </li>


    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#manage-iqac" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person"></i><span>Manage IQAC</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="manage-iqac" class="nav-content collapse " data-bs-parent="#sidebar-nav">

        @if(Auth::user()->can('View All NAAC Criterions'))
        <li>
          <a href="{{route('all_naac_criterions')}}">
            <i class="bi bi-circle"></i><span>All Naac Criterions</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('Add NAAC Criterion'))
        <li>
          <a href="{{route('add.naac_criterion')}}">
            <i class="bi bi-circle"></i><span>Add NAAC Criterion</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('View All NAAC KeyIndicators'))
        <li>
          <a href="{{route('all_naac_keyindicator')}}">
            <i class="bi bi-circle"></i><span>All Naac KeyIndicators</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('Add NAAC Criterion'))
        <li>
          <a href="{{route('add.naac_keyindicator')}}">
            <i class="bi bi-circle"></i><span>Add Naac KeyIndicator</span>
          </a>
        </li>
        @endif


        @if(Auth::user()->can('View All NAAC Metrics'))
        <li>
          <a href="{{route('all_naac_metric')}}">
            <i class="bi bi-circle"></i><span>All Naac Metrics</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('Add NAAC Metric'))
        <li>
          <a href="{{route('add.naac_metric')}}">
            <i class="bi bi-circle"></i><span>Add Naac Metric</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('View All NAAC PDFS'))
        <li>
          <a href="{{route('all_naac_pdfs')}}">
            <i class="bi bi-circle"></i><span>All Naac PDFS</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('Add NAAC PDF'))
        <li>
          <a href="{{route('add.naac_pdf')}}">
            <i class="bi bi-circle"></i><span>Add Naac PDF</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('Add NAAC PDF'))
        <li>
          <a href="{{route('feedback.forms')}}">
            <i class="bi bi-circle"></i><span>All Feedback Forms</span>
          </a>
        </li>
        @endif

      </ul>
    </li>


    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#manage-hr" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person"></i><span>Manage HR</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="manage-hr" class="nav-content collapse " data-bs-parent="#sidebar-nav">

        @if(Auth::user()->can('View All Departments'))
        <li>
          <a href="{{route('all.departments')}}">
            <i class="bi bi-circle"></i><span>All Departments</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('Add Department'))
        <li>
          <a href="{{route('add.department')}}">
            <i class="bi bi-circle"></i><span>Add Department</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('View All Designations'))
        <li>
          <a href="{{route('all.designations')}}">
            <i class="bi bi-circle"></i><span>All Designations</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('Add Designation'))
        <li>
          <a href="{{route('add.designation')}}">
            <i class="bi bi-circle"></i><span>Add Designation</span>
          </a>
        </li>
        @endif


        @if(Auth::user()->can('View All Employees'))
        <li>
          <a href="{{route('all.employees')}}">
            <i class="bi bi-circle"></i><span>All Employees</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('Add Employee'))
        <li>
          <a href="{{route('add.employee')}}">
            <i class="bi bi-circle"></i><span>Add Employee</span>
          </a>
        </li>
        @endif



        @if(Auth::user()->can('View Departments Designations'))
        <li>
          <a href="{{route('all.departments.designations')}}">
            <i class="bi bi-circle"></i><span>All Department Designation</span>
          </a>
        </li>
        @endif


        @if(Auth::user()->can('Add Department Designation'))
        <li>
          <a href="{{route('add.departmentdesignation')}}">
            <i class="bi bi-circle"></i><span>Add Department Designation</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('View All Job Openings'))
        <li>
          <a href="{{route('all.jobopenings')}}">
            <i class="bi bi-circle"></i><span>All Job Openings</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('Add Job Opening'))
        <li>
          <a href="{{route('add.jobopening')}}">
            <i class="bi bi-circle"></i><span>Add Job Opening</span>
          </a>
        </li>
        @endif


        @if(Auth::user()->can('View All Jobs'))
        <li>
          <a href="{{route('all.jobapplications')}}">
            <i class="bi bi-circle"></i><span>Job Applications</span>
          </a>
        </li>
        @endif
      </ul>
    </li>


    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#manage-admin-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person"></i><span>Manage Admin</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="manage-admin-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        @if(Auth::user()->can('View Users'))
        <li>
          <a href="{{route('all.admin')}}">
            <i class="bi bi-circle"></i><span>All Admin</span>
          </a>
        </li>
        @endif
        @if(Auth::user()->can('Add User'))
        <li>
          <a href="{{route('add.admin')}}">
            <i class="bi bi-circle"></i><span>Add Admin</span>
          </a>
        </li>
        @endif



      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#manage-testimonials-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person"></i><span>Manage Testimonials</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="manage-testimonials-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

        @if(Auth::user()->can('View All Testimonials'))
        <li>
          <a href="{{route('all.testimonials')}}">
            <i class="bi bi-circle"></i><span>All Testimonial</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('Add Testimonial'))
        <li>
          <a href="{{route('add.testimonial')}}">
            <i class="bi bi-circle"></i><span>Add Testimonial</span>
          </a>
        </li>
        @endif



      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#manage-recruiters-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person"></i><span>Manage Recruiters</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="manage-recruiters-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

        @if(Auth::user()->can('View All Recruiters'))
        <li>
          <a href="{{route('all.recruiters')}}">
            <i class="bi bi-circle"></i><span>All Recruiters</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('Add Recruiter'))
        <li>
          <a href="{{route('add.recruiter')}}">
            <i class="bi bi-circle"></i><span>Add Recruiter</span>
          </a>
        </li>
        @endif



      </ul>
    </li>


    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#manage-metas-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person"></i><span>Manage Metas / Search</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="manage-metas-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

        @if(Auth::user()->can('View Metas'))
        <li>
          <a href="{{route('all.metas')}}">
            <i class="bi bi-circle"></i><span>All Metas</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->can('Add Meta'))
        <li>
          <a href="{{route('add.meta')}}">
            <i class="bi bi-circle"></i><span>Add Meta</span>
          </a>
        </li>
        @endif



      </ul>
    </li>




    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#manage-aebes-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person"></i><span>Manage AEBES</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="manage-aebes-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">


        <li>
          <a href="{{route('aebes.view')}}">
            <i class="bi bi-circle"></i><span>View AEBES attendance</span>
          </a>
        </li>

        <li>
          <a href="{{route('aebes.add')}}">
            <i class="bi bi-circle"></i><span>Add AEBES attendance</span>
          </a>
        </li>





      </ul>
    </li>



    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('admin.logout')}}">
        <i class="bi bi-person"></i>
        <span>Logout</span>
      </a>
    </li><!-- End Profile Page Nav -->



  </ul>

</aside><!-- End Sidebar-->