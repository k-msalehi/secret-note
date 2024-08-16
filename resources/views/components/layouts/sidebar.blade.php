<button id="sidebarToggle" class="sidebar-toggle" aria-label="Toggle Sidebar">☰</button>

<aside id="sidebar" class="sidebar hidden" aria-label="Sidebar Navigation">
    <nav>
        <ul>
            <li>
                <a href="{{route('dashboard')}}" @class(['active'=> request()->routeIs('dashboard')])>
                    <span class="icon">🏠</span>
                    <span class="label">داشبورد</span>
                </a>
            </li>
            <li>
            <a href="{{route('dashboard')}}" @class(['active'=> request()->routeIs('notes.*')])>
            <span class="icon">📝</span>
                    <span class="label">یادداشت ها</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">⚙️</span>
                    <span class="label">Settings</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">📊</span>
                    <span class="label">Reports</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">🚪</span>
                    <span class="label">Logout</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>