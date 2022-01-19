<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="/assets/images/logo_telkom.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text text-danger">MONOLINE</h4>
        </div>
        {{-- <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div> --}}
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('dashboard.index') }}">
                <div class="parent-icon"><i class="bx bx-home-circle"></i>
                </div>
                <div class="menu-title active">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ route('profile.edit', auth()->user()) }}">
                <div class="parent-icon"><i class="bx bx-user"></i>
                </div>
                <div class="menu-title">Profile</div>
            </a>
        </li>
        <li class="menu-label">BA Digital</li>
        <li>
            <a href="{{ route('baonline.index') }}">
                <div class="parent-icon"><i class="bx bx-news"></i>
                </div>
                <div class="menu-title">BA Online</div>
            </a>
        </li>
        <li>
            <a href="{{ route('ba.rejected') }}">
                <div class="parent-icon"><i class="bx bx-columns"></i>
                </div>
                <div class="menu-title">Rejected</div>
            </a>
        </li>
        <li>
            <a href="{{ route('ba.needapproved') }}">
                <div class="parent-icon"><i class="bx bx-edit"></i>
                </div>
                <div class="menu-title">Need Approve</div>
            </a>
        </li>
        <li>
            <a href="{{ route('ba.approved') }}">
                <div class="parent-icon"><i class="bx bx-check-square"></i>
                </div>
                <div class="menu-title">Approved</div>
            </a>
        </li>
        @can('admin')
            <li class="menu-label">Admin Access</li>
            <li>
                <a href="{{ route('user.index') }}">
                    <div class="parent-icon"><i class="bx bx-user-plus"></i>
                    </div>
                    <div class="menu-title">List Users</div>
                </a>
            </li>
            <li>
                <a href="{{ route('mitra.index') }}">
                    <div class="parent-icon"><i class="bx bx-briefcase"></i>
                    </div>
                    <div class="menu-title">Mitra</div>
                </a>
            </li>
            <li>
                <a href="{{ route('sto.index') }}">
                    <div class="parent-icon"><i class="bx bx-buildings"></i>
                    </div>
                    <div class="menu-title">STO</div>
                </a>
            </li>
        @endcan
        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-check-square'></i>
                </div>
                <div class="menu-title">Approval</div>
            </a>
            <ul>
                <li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>Rekap Approval</a>
                </li>
                <li> <a href="index2.html"><i class="bx bx-right-arrow-alt"></i>Need Approval</a>
                </li>
                <li> <a href="index2.html"><i class="bx bx-right-arrow-alt"></i>Approved</a>
                </li>
            </ul>
        </li> --}}
    </ul>
    <!--end navigation-->
</div>
