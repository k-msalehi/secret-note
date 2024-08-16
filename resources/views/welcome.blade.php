    <!DOCTYPE html>
    <html lang="ar" dir="rtl" data-theme="light">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RTL Admin Panel</title>
        @vite(['resources/css/app.scss','resources/js/app.js'])
    </head>

    <body>

        <!-- Sidebar -->
        <button id="sidebarToggle" class="sidebar-toggle" aria-label="Toggle Sidebar">☰</button>

        <aside id="sidebar" class="sidebar hidden" aria-label="Sidebar Navigation">
            <nav>
                <ul>
                    <li>
                        <a href="#" class="active">
                            <span class="icon">🏠</span>
                            <span class="label">داشبورد</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="">🙍🏻‍♂️</span>
                            <span class="label">Users</span>
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

        <!-- Main Content -->
        <main class="content">
            <header>
                <h1>داشبورد</h1>
            </header>

            <section class="cards">
                <article>
                    <h2>آمار</h2>
                    <p>خلاصه آمار.</p>
                </article>
                <article>
                    <h2>User Activity</h2>
                    <p>Recent user activity and logs.</p>
                </article>
                <article>
                    <h2>System Health</h2>
                    <p>Status of system resources and performance.</p>
                </article>
            </section>
        </main>

    </body>

    </html>