<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/" class="app-brand-link">
            <span class="app-brand-logo demo">
                <i class='bx bx-street-view fs-1'></i>
            </span>
            <span class="app-brand-text text-capitalize demo menu-text fw-bolder ms-2">Undangan</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->path() == '/' ? 'active' : false }}">
            <a href="/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Undangan</span>
        </li>
        <li class="menu-item {{ strpos(request()->url(), 'invited') || request()->path() == 'invitation' ? 'active' : false }}">
            <a href="/invitation" class="menu-link">
                <i class="menu-icon tf-icons bx bx-poll"></i>
                <div data-i18n="Analytics">
                    @can('admin')
                        Semua Undangan
                    @else
                        Undangan Saya
                    @endcan
                </div>
            </a>
        </li>
        @can('admin')
            <li class="menu-item {{ request()->path() == 'invitation/create' ? 'active' : false }}">
                <a href="/invitation/create" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-add-to-queue"></i>
                    <div data-i18n="Analytics">Buat Undangan</div>
                </a>
            </li>
            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Others</span></li>
            <!-- Cards -->
            <li class="menu-item {{ in_array(request()->path(), ['auth/register', 'users']) ? 'active open' : false }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                    <div data-i18n="Authentications">Authentikasi</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ request()->path() == 'users' ? 'active' : false }}">
                        <a href="/users" class="menu-link">
                            <div data-i18n="Basic">Semua Pengguna</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->path() == 'auth/register' ? 'active' : false }}">
                        <a href="/auth/register" class="menu-link">
                            <div data-i18n="Basic">Registrasi</div>
                        </a>
                    </li>
                </ul>
            </li>
        @endcan
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Logout</span></li>
        <li class="menu-item mb-2">
            <a href="/auth/logout" class="menu-link">
                <i class="menu-icon tf-icons bx bx-power-off"></i>
                <div data-i18n="Support">Logout</div>
            </a>
        </li>
    </ul>
</aside>
