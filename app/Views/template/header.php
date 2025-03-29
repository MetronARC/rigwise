<header id="header" class="header d-flex align-items-center fixed-top">
    <div
        class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a
            href="index.html"
            class="logo d-flex align-items-center me-auto me-xl-0">
            <img src="assets/img/rigwise-logo.png" alt="" />
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="<?= base_url('/') ?>" class="<?= ($active_page ?? '') === 'home' ? 'active' : '' ?>">Home</a></li>
                <li><a href="<?= base_url('/about') ?>" class="<?= ($active_page ?? '') === 'about' ? 'active' : '' ?>">About Us</a></li>
                <li><a href="<?= base_url('/contact') ?>" class="<?= ($active_page ?? '') === 'contact' ? 'active' : '' ?>">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>