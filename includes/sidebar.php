<?php
    $currentPage = $page ?? 'dashboard';
    $nav = [
        'dashboard' => [
            'label' => 'Dashboard',
            'roles' => ['faculty', 'admin']
        ],
        'posting' => [
            'label' => 'Posting',
            'roles' => ['faculty', 'admin']
        ],
        'calendar' => [
            'label' => 'Calendar',
            'roles' => ['student', 'faculty', 'admin']
        ],
        'events' => [
            'label' => 'Events',
            'roles' => ['student', 'faculty', 'admin']
        ],
        'academic_offerings' => [
            'label' => 'Academic Offerings',
            'roles' => ['student', 'faculty', 'admin']
        ],
        'contacts' => [
            'label' => 'Contacts',
            'roles' => ['student', 'faculty', 'admin']
        ],
        'auth' => [ 
            'label' => 'Auth',
            'roles' => ['student', 'faculty', 'admin']
        ],
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