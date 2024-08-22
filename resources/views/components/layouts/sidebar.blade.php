<button id="sidebarToggle" class="sidebar-toggle" aria-label="Toggle Sidebar">☰</button>

<aside id="sidebar" class="sidebar hidden" aria-label="Sidebar Navigation">
    <nav>
        <ul>
            <li>
                <a wire:navigate href="{{route('dashboard')}}" @class(['active'=> request()->routeIs('dashboard')])>
                    <span class="icon">🏠</span>
                    <span class="label">داشبورد</span>
                </a>
            </li>
            <li>
                <a wire:navigate href="{{route('notes.index')}}" @class(['active'=> request()->routeIs('notes.*')])>
                    <span class="icon">📝</span>
                    <span class="label">یادداشت ها</span>
                </a>
            </li>
            <li>
                <a href="#!" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="icon">🚪</span>
                    <span class="label">
                        خروج
                    </span>
                </a>

                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
</aside>