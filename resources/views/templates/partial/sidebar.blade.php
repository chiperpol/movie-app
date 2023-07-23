<div class="sidebar">
    <!-- sidebar logo -->
    <a href="index.html" class="sidebar__logo">
        <img src="{{ asset('admin') }}/img/logo.svg" alt="">
    </a>
    <!-- end sidebar logo -->

    <!-- sidebar user -->
    <div class="sidebar__user">
        <div class="sidebar__user-img">
            <img src="{{ asset('admin') }}/img/user.svg" alt="">
        </div>

        <div class="sidebar__user-title">
            <span>Admin</span>
            <p>John Doe</p>
        </div>

        <button class="sidebar__user-btn" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4,12a1,1,0,0,0,1,1h7.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H5A1,1,0,0,0,4,12ZM17,2H7A3,3,0,0,0,4,5V8A1,1,0,0,0,6,8V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Z"/></svg>
        </button>
    </div>
    <!-- end sidebar user -->

    <!-- sidebar nav -->
    <ul class="sidebar__nav">
        <li class="sidebar__nav-item ">
            <a href="{{ route('dashboard.index') }}" class="sidebar__nav-link {{ Request::is('dashboard') ? 'sidebar__nav-link--active' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M20,8h0L14,2.74a3,3,0,0,0-4,0L4,8a3,3,0,0,0-1,2.26V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V10.25A3,3,0,0,0,20,8ZM14,20H10V15a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H16V15a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v5H6a1,1,0,0,1-1-1V10.25a1,1,0,0,1,.34-.75l6-5.25a1,1,0,0,1,1.32,0l6,5.25a1,1,0,0,1,.34.75Z"/>
                </svg>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar__nav-item">
            <a href="{{ route('movies.index') }}" class="sidebar__nav-link {{ Request::is('movies') ? 'sidebar__nav-link--active' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M10,13H3a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,10,13ZM9,20H4V15H9ZM21,2H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,9H15V4h5Zm1,4H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,21,13Zm-1,7H15V15h5ZM10,2H3A1,1,0,0,0,2,3v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,10,2ZM9,9H4V4H9Z"/>
                </svg>
                <span>Movies</span>
            </a>
        </li>

        <li class="sidebar__nav-item">
            <a class="sidebar__nav-link {{ Request::is('master/negara', 'master/genre') ? 'sidebar__nav-link--active' : '' }}" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="false" aria-controls="collapseMenu">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M19,5.5H12.72l-.32-1a3,3,0,0,0-2.84-2H5a3,3,0,0,0-3,3v13a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V8.5A3,3,0,0,0,19,5.5Zm1,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5.5a1,1,0,0,1,1-1H9.56a1,1,0,0,1,.95.68l.54,1.64A1,1,0,0,0,12,7.5h7a1,1,0,0,1,1,1Z"/>
                </svg>
                <span>Master</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/>
                </svg>
            </a>

            <ul class="collapse sidebar__menu" id="collapseMenu">
                <li><a href="{{ route('negara.index') }}" class="{{ Request::is('master/negara') ? 'active' : '' }}">Negara</a></li>
                <li><a href="{{ route('genre.index') }}" class="{{ Request::is('master/genre') ? 'active' : '' }}">Genre</a></li>
            </ul>
        </li>
    </ul>
    <!-- end sidebar nav -->

    <!-- sidebar copyright -->
    <div class="sidebar__copyright">© FlixTV.template, 2021. <br>Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></div>
    <!-- end sidebar copyright -->
</div>

<script>
    $(document).ready(function() {
    $('.sidebar__nav-link[data-toggle="collapse"]').click(function(e) {
        e.preventDefault();

        // Cek apakah submenu sebelumnya terbuka
        var isOpen = $(this).next('.sidebar__menu').hasClass('show');

        // Tutup semua submenu yang terbuka
        $('.sidebar__menu.show').removeClass('show');

        // Jika submenu sebelumnya tertutup, buka submenu yang saat ini diakses
        if (!isOpen) {
        $(this).next('.sidebar__menu').addClass('show');
        }
    });
    });
</script>
