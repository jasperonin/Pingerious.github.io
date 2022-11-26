<nav class="navbar navbar-expand bg-info navbar-dark px-5">
    <a href="profile.php" class="navbar-brand">
        <h1 class="h3">Study Management</h1>
    </a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="record.php" class="nav-link text-white">My Study Record</a>
        </li>
        <li class="nav-item">
            <a href="add-post-by-user.php" class="nav-link text-white">Add Record</a>
        </li>
    </ul>
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a href="profile.php" class="nav-link text-white"> <i class="bi bi-emoji-smile"></i>Welcome<?= $_SESSION['full_name']; ?><i class="bi bi-emoji-smile"></i></a>
        </li>
        <li class="nav-item">
            <a href="logout.php" class="nav-link text-white" ><i class="me-1 fas fa-user"></i>Logout</a>
        </li>
    </ul>
</nav>



