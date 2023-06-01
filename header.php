<header>
    <div class="container header">
        <img src="<?php echo $base_url; ?>/img/logo-big-v4.png" alt="logo" class="logo">
        <h1>Attracties</h1>
        <nav>
            <a href="<?php echo $base_url; ?>/index.php">Attracties</a> |
            <a href="<?php echo $base_url; ?>/admin/index.php">Admin</a>
            <?php if(isset($_SESSION['user_id'])): ?>
                | <a href="<?php echo $base_url; ?>/admin/logout.php">Uitloggen</a>
            <?php else: ?>
                | <a href="<?php echo $base_url; ?>/admin/login.php">Inloggen</a>
            <?php endif; ?>
        </nav>
    </div>
</header>
