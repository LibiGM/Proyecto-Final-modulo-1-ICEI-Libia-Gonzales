<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('productindex') }}" class="nav-link {{ Request::is('productindex') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>CRUD PRODUCTOS</p>
    </a>
</li>