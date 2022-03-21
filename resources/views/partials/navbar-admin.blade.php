<ul class="nav flex-column bg-light ps-2 py-3 font-poppins fw-bold text-dark">
    <li class="nav-item my-1">
        <a class="nav-link hvr-underline-from-left  {{ Request::is('admin') ? 'aktif' : '' }}" aria-current="page"
            href="/admin">Dashboard</a>
    </li>
    <li class="nav-item my-1">
        <a class="nav-link hvr-underline-from-left {{ Request::is('admin-user') ? 'aktif' : '' }}"
            href="/admin-user">User</a>
    </li>
    <li class="nav-item my-1">
        <a class="nav-link hvr-underline-from-left {{ Request::is('admin-products') ? 'aktif' : '' }}"
            href="/admin-products">Products</a>
    </li>
    <li class="nav-item my-1">
        <a class="nav-link hvr-underline-from-left {{ Request::is('admin-order') ? 'aktif' : '' }}"
            href="/admin-order">List Order</a>
    </li>
    <li class="nav-item my-1">
        <a class="nav-link hvr-underline-from-left {{ Request::is('admin-chat*') ? 'aktif' : '' }}"
            href="/admin-chat">Chat</a>
    </li>
    <li class="nav-item my-1">
        <a class="nav-link hvr-underline-from-left {{ Request::is('admin-banner') ? 'aktif' : '' }}"
            href="/admin-banner">Banner</a>
    </li>
    <li class="nav-item my-1">
        <a class="nav-link hvr-underline-from-left {{ Request::is('admin-category') ? 'aktif' : '' }}"
            href="/admin-category">Category</a>
    </li>
</ul>
