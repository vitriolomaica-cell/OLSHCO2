<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
$allowed = ['dashboard', 'home', 'posting', 'calendar', 'events', 'contacts', 'academic_offerings'];
if (!in_array($page, $allowed, true)) {
    $page = 'dashboard';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLSHCO Digital Hub</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://github.githubassets.com/assets/mona-sans-c6a8f8da.woff2" rel="preload" as="font" type="font/woff2" crossOrigin="anonymous">
</head>

<body>
    <div class="app-shell">
        <?php include __DIR__ . '/includes/sidebar.php'; ?>
        <div class="main-panel">
            <main class="page-content">
                <?php include __DIR__ . '/pages/' . $page . '.php'; ?>
            </main>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>