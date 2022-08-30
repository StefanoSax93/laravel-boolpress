<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item h4">
            <a href="{{ route('admin.index') }}"
                class="nav-link {{ Request::route()->getName() === 'admin.index' ? 'active' : '' }}" aria-current="page">
                <i class="fa-solid fa-home"></i>
                Home
            </a>
        </li>

        <li class="nav-item h4">
            <a href="{{ route('admin.users.index') }}"
                class="nav-link {{ Request::route()->getName() === 'admin.users.index' ? 'active' : '' }}" aria-current="page">
                <i class="fa-solid fa-users"></i>
                Users
            </a>
        </li>

        <li class="nav-item h4">
            <a href="{{ route('admin.posts.index') }}"
                class="nav-link {{ Request::route()->getName() === 'admin.posts.index' ? 'active' : '' }}" aria-current="page">
                <i class="fa-solid fa-note-sticky"></i>
                Posts
            </a>
        </li>

        <li class="nav-item h4">
            <a href="{{ route('admin.tags.index') }}"
                class="nav-link {{ Request::route()->getName() === 'admin.tags.index' ? 'active' : '' }}" aria-current="page">
                <i class="fa-solid fa-tags"></i>
                Tags
            </a>
        </li>

        <li class="nav-item h4">
            <a href="{{ route('admin.categories.index') }}"
                class="nav-link {{ Request::route()->getName() === 'admin.categories.index' ? 'active' : '' }}" aria-current="page">
                <i class="fa-solid fa-cat"></i>
                Categories
            </a>
        </li>
    </ul>
    
</div>