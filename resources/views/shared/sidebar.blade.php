<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="{{ asset('img/admin-avatar.png') }}" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">Admin User</div><small>Administrator</small>
            </div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="{{ route('dashboard') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="heading">FEATURES</li>

            {{-- doctors --}}
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Doctors</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="">Doctor List</a>
                    </li>
                    <li>
                        <a href="">Pending Request</a>
                    </li>
                </ul>
            </li>

            {{-- appointments --}}
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Appointments</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="">Add Appointment</a>
                    </li>
                    <li>
                        <a href="">Appointment List</a>
                    </li>
                </ul>
            </li>

            {{-- hospitals --}}
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Hospitals</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="">Hospital List</a>
                    </li>
                    <li>
                        <a href="">Pending Request</a>
                    </li>
                </ul>
            </li>

            {{-- Diagnostic --}}
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Diagnostic</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="">Diagnostic</a>
                    </li>
                    <li>
                        <a href="">Pending Request</a>
                    </li>
                </ul>
            </li>

            {{-- Blood Donor --}}
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Blood Donor</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="">Donor List</a>
                    </li>
                    <li>
                        <a href="">Pending Request</a>
                    </li>
                </ul>
            </li>

            {{-- Ambulance --}}
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Ambulance</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="">Ambulance</a>
                    </li>
                    <li>
                        <a href="">Pending Request</a>
                    </li>
                </ul>
            </li>

            {{-- Pharmacy --}}
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Pharmacy</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="">Pharmacy List</a>
                    </li>
                    <li>
                        <a href="">Pending Request</a>
                    </li>
                </ul>
            </li>

            {{-- Health Card --}}
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Health Card</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="">Health Card</a>
                    </li>
                    <li>
                        <a href="">Pending Request</a>
                    </li>
                    <li>
                        <a href="">B2B Company with Discount</a>
                    </li>
                    <li>
                        <a href="">Package List</a>
                    </li>
                </ul>
            </li>

            {{-- Document --}}
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Document</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="">Document List</a>
                    </li>
                    <li>
                        <a href="">Document User</a>
                    </li>
                </ul>
            </li>

            {{-- Prescription --}}
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Prescription</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="">Prescription List</a>
                    </li>
                    <li>
                        <a href="">E-Pres User</a>
                    </li>
                </ul>
            </li>

            <li><a href=""><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">User List</span></a></li>

            {{-- Settings --}}
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Prescription</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="">Blood Group</a>
                    </li>
                    <li>
                        <a href="">Doctor Speciality</a>
                    </li>
                    <li>
                        <a href="">District</a>
                    </li>
                    <li>
                        <a href="">Upazilla</a>
                    </li>
                    <li>
                        <a href="">Investigation List</a>
                    </li>
                    <li>
                        <a href="">City Wise Rate Chart</a>
                    </li>
                    <li>
                        <a href="">Medicine List</a>
                    </li>
                </ul>
            </li>


        </ul>
    </div>
</nav>
<!-- END SIDEBAR-->
