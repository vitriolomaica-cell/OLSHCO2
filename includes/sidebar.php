<?php
$currentPage = $page ?? 'dashboard';
$nav = [
    'dashboard' => [
        'label' => 'Dashboard',
        'roles' => ['student', 'faculty', 'admin']
    ],
    'posting' => [
        'label' => 'Posting',
        'roles' => ['student', 'faculty', 'admin']
    ],
    'calendar' => [
        'label' => 'Calendar',
        'roles' => ['student', 'faculty', 'admin']
    ],
    'events' => [
        'roles' => ['student', 'faculty', 'admin']
    ]'Events',
    'academic_offerings' => 'Academic Offerings',
    'contacts' => 'Contacts',
    'testing' => 'Testing',
];
?>
<aside class="sidebar">
    <div class="brand">
        <img src="assets/images/logo.jpeg" alt="OLSHCO logo" class="brand-logo-image">
        <div class="brand-logo">OLSHCO</div>
    </div>
    <nav class="sidebar-nav">
        <?php foreach ($nav as $key => $item): ?>
            <?php if (in_array($role, $item['roles'])): ?>
                <a href="?page=<?php echo $key; ?>" 
                    class="nav-link<?php echo $currentPage === $key ? ' active' : ''; ?>">
                    <span><?php echo $item['label']; ?></span>
                </a>
            <?php endif; ?>
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