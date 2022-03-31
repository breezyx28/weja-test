<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('countries.index') }}" class="nav-link {{ Request::is('countries.index') ? 'active' : '' }}">
        <i class="nav-icon fas fa-flag"></i>
        <p>Countries</p>
        <i class="right fas fa-angle-left"></i>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('countries.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('countries.index') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>report</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item">
    <a href="{{ route('states.index') }}" class="nav-link {{ Request::is('states.index') ? 'active' : '' }}">
        <i class="nav-icon fas fa-star"></i>
        <p>States</p>
        <i class="right fas fa-angle-left"></i>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('states.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('states.index') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>report</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item">
    <a href="{{ route('cities.index') }}" class="nav-link {{ Request::is('cities.index') ? 'active' : '' }}">
        <i class="nav-icon fas fa-city"></i>
        <p>Cities</p>
        <i class="right fas fa-angle-left"></i>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('cities.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('cities.index') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>report</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item">
    <a href="{{ route('neighborhoods.index') }}"
        class="nav-link {{ Request::is('neighborhoods.index') ? 'active' : '' }}">
        <i class="nav-icon fas fa-building"></i>
        <p>Neighborhoods</p>
        <i class="right fas fa-angle-left"></i>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('neighborhoods.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('neighborhoods.index') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>report</p>
            </a>
        </li>
    </ul>
</li>
