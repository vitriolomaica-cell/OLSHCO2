<?php
$currentPage = $page ?? 'dashboard';
$nav = [
    'Dashboard',
    'posting' => 'Announcements & Events',
    'calendar' => 'Calendar',
    'events' => 'Posting',
    'academic_offerings' => 'Academic Offerings',
    'contacts' => 'Contacts',
];
?>
<aside class="sidebar">
    <div class="brand">
        <img src="assets/images/logo.jpeg" alt="OLSHCO logo" class="brand-logo-image">
        <div class="brand-logo">OLSHCO</div>
    </div>
    <nav class="sidebar-nav">
        <?php foreach ($nav as $key => $label): ?>
            <a href="?page=<?php echo $key; ?>" class="nav-link<?php echo $currentPage === $key ? ' active' : ''; ?>">
                <span><?php echo $label; ?></span>
            </a>
        <?php endforeach; ?>
    </nav>
    <div class="sidebar-footer">
        <div class="user-card">
            <div class="avatar"></div>
            <div>
                <strong>User</strong>
                <span>Admin</span>
            </div>
        </div>
        <button id="themeToggle" class="theme-toggle" type="button">Dark Mode</button>
    </div>
</aside>