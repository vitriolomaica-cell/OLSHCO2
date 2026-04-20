<?php
    session_start();

    require_once __DIR__ . '/config/dbconnect.php';

    $role = $_SESSION['role'] ?? 'Student';   

    $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
    $allowed = ['auth', 'dashboard', 'posting', 'calendar', 'events', 'contacts', 'academic_offerings', 'testing'];

    if (!in_array($page, $allowed, true)) {
        $page = 'auth';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLSHCO Digital Hub</title>
    <link rel="stylesheet" href="assets/css/base.css">

    <?php if ($page === 'auth'): ?>

    <link rel="stylesheet" href="assets/css/auth.css">

    <?php else: ?>

    <link rel="stylesheet" href="assets/css/layout.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/components.css">

    <?php
        if ($page === 'calendar')
            echo '<link rel="stylesheet" href="assets/css/calendar.css">';

        if ($page === 'posting')
            echo '<link rel="stylesheet" href="assets/css/posting.css">';

        if ($page === 'academic_offerings')
            echo '<link rel="stylesheet" href="assets/css/academic.css">';
    ?>

    <?php endif; ?>

    <link href="https://github.githubassets.com/assets/mona-sans-c6a8f8da.woff2" rel="preload" as="font" type="font/woff2" crossOrigin="anonymous">
</head>

<body>
    <div class="app-shell <?= ($page === 'auth') ? 'no-sidebar' : '' ?>">
        <?php if ($page != 'auth'):?>
            <?php include __DIR__ . '/includes/sidebar.php'; ?>
        <?php endif; ?>
        <div class="main-panel">
            <main class="page-content">
                <?php include __DIR__ . '/pages/' . $page . '.php'; ?>
            </main>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>