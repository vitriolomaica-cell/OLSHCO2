<?php
    $currentPage = $page ?? 'dashboard';
    $nav = [
        'dashboard' => [
            'label' => 'Dashboard',
            'roles' => ['Faculty', 'Admin']
        ],
        'posting' => [
            'label' => 'Posting',
            'roles' => ['Faculty', 'Admin']
        ],
        'calendar' => [
            'label' => 'Calendar',
            'roles' => ['Student', 'Faculty', 'Admin']
        ],
        'events' => [
            'label' => 'Events',
            'roles' => ['Student', 'Faculty', 'Admin']
        ],
        'academic_offerings' => [
            'label' => 'Academic Offerings',
            'roles' => ['Student', 'Faculty', 'Admin']
        ],
        'contacts' => [
            'label' => 'Contacts',
            'roles' => ['Student', 'Faculty', 'Admin']
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
    <form method="POST">
        <div class="select-role">
            <select name="roleSelect" onchange="this.form.submit()">
                <option value="Student" <?= $role === 'Student' ? 'selected' : '' ?>>Student</option>
                <option value="Faculty" <?= $role === 'Faculty' ? 'selected' : '' ?>>Faculty</option>
                <option value="Admin" <?= $role === 'Admin' ? 'selected' : '' ?>>Admin</option>
            </select>
        </div>
    </form>
</aside>