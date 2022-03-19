<div class="col-md-4">
    <div class="card px-4 mb-2">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-3 "><img src="images/foto.jpg" alt="foto profil" class="img-fluid mt-3 mb-3 border-rd"
                    width="80"></div>
            <div class="col-md-9 ">
                <h6 class="fw-bold font-poppins">Zinedine Ziddan Fahdlevy</h6>
                <small class="font-montserrat lead">089508781380</small>
            </div>
        </div>
    </div>
    <div class="card px-4 mb-2 font-poppins">
        <ul class="nav flex-column my-3">
            <li class="nav-item mb-3">
                <a class="nav-link hvr-underline-from-left text-main fw-bold {{ Request::is('my-profile') ? 'aktif' : '' }} {{ Request::is('edit-my-profile') ? 'aktif' : '' }}"
                    aria-current="page" href="/my-profile"><i class="fa-solid fa-user me-2"></i>Profile</a>
            </li>
            <li class="nav-item mb-3">
                <a class="nav-link hvr-underline-from-left text-main fw-bold {{ Request::is('my-address') ? 'aktif' : '' }} {{ Request::is('my-address') ? 'aktif' : '' }}"
                    aria-current="page" href="/my-address"><i class="fa-solid fa-location-crosshairs me-2"></i>Address
                    Settings</a>
            </li>
            <li class="nav-item mb-3">
                <a class="nav-link hvr-underline-from-left text-main fw-bold {{ Request::is('chat') ? 'aktif' : '' }}"
                    href="/chat"><i class="fa-brands fa-rocketchat me-2"></i>Chat</a>
            </li>
            <li class="nav-item mb-3">
                <a class="nav-link hvr-underline-from-left text-main fw-bold {{ Request::is('history') ? 'aktif' : '' }}"
                    href="/history"><i class="fa-solid fa-clock-rotate-left me-2"></i>History</a>
            </li>
            <hr class="text-muted mb-3">
            <li class="nav-item mb-3">
                <a class="nav-link hvr-underline-from-left text-main fw-bold {{ Request::is('account-setting') ? 'aktif' : '' }}"
                    href="/account-setting"><i class="fa-solid fa-gear me-2"></i>Account Settings</a>
            </li>
        </ul>
    </div>
</div>
