<?php
// Navbar
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-lg">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand fw-bold fs-3" href="index.php">
            <i class="fas fa-dumbbell"></i> FlowGym
        </a>
        
        <!-- Hamburger Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Navigation Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/contact.php">Contact</a>
                </li>
                
                <?php
                // Check if user is logged in
                session_start();
                if (isset($_SESSION['user_id'])) {
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle"></i> <?php echo $_SESSION['first_name']; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <?php
                            if ($_SESSION['role'] == 'client') {
                                echo '<li><a class="dropdown-item" href="dashboard/client.php">Dashboard</a></li>';
                            } elseif ($_SESSION['role'] == 'trainer') {
                                echo '<li><a class="dropdown-item" href="dashboard/trainer.php">Dashboard</a></li>';
                            } elseif ($_SESSION['role'] == 'admin') {
                                echo '<li><a class="dropdown-item" href="dashboard/admin.php">Dashboard</a></li>';
                            }
                            ?>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                    <?php
                } else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white ms-2" href="pages/login.php">Login</a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
