<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/beranda') ? 'active' : '' }}" aria-current="page" href="/dashboard/beranda">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Beranda
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/postingan*') ? 'active' : '' }}" href="/dashboard/postingan">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Postingan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/produk*') ? 'active' : '' }}" href="/dashboard/produk">
                    <span data-feather="tool" class="align-text-bottom"></span>
                    Produk
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/tentangkami*') ? 'active' : '' }}" href="/dashboard/tentangkami">
                    <span data-feather="info" class="align-text-bottom"></span>
                    Tentang Kami
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/kontak*') ? 'active' : '' }}" href="/dashboard/kontak">
                    <span data-feather="phone" class="align-text-bottom"></span>
                    Kontak
                </a>
            </li>
        </ul>

     
            {{-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Administrator</span>
            </h6>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" aria-current="page"
                        href="/dashboard/categories">
                        <span data-feather="grid" class="align-text-bottom"></span>
                        Post Categories
                    </a>
                </li>
            </ul> --}}
      
    </div>
</nav>