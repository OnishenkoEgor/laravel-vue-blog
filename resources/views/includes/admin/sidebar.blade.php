<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column">
        <li class="nav-item">
            <a href="{{ route('admin.index') }}" class="nav-link">
                <p>
                    Main
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.post.index') }}" class="nav-link">
                <p>
                    Posts
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.user.index') }}" class="nav-link">
                <p>
                    Users
                </p>
            </a>
        </li>
    </ul>
</nav>
