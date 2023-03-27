<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class=active><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <li class="menu-header">Starter</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="far fa-clipboard"></i> <span>Category</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('category.index')}}">List Category</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="far fa-bookmark"></i> <span>Tags</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('tags.index')}}">List Tags</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-book-open"></i> <span>Post</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('post.index')}}">List Post</a></li>
                    <li><a class="nav-link" href="{{route('post.delete')}}">List Trashed</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-users"></i> <span>Users</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('users.index') }}">List Users</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="{{ route('contact.index') }}"><i class="fas fa-fire"></i> <span>Contact</span></a></li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="/" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> TEH SULTHANAH
            </a>
        </div>
    </aside>
</div>
