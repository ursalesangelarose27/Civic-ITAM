<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIVIC | Dashboard</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <link rel="stylesheet" href="../public/css/admin/dashboard.css">
    <link rel="stylesheet" href="../public/css/admin/sidebar.css">

</head>

<body>

<div id="sidebar" class="col-12 col-md-3 col-lg-2 px-0 bg-orange text-white">
        <div class="sidebar-header text-center py-3">
            <img src="../images/civicph_logo.png" alt="CIVIC" style="max-width: 60%; height: auto;">
        </div>
        <ul class="nav flex-column">
            <li><a href="./dashboard.php" class="nav-link text-white active"><i class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
            <li><a href="./assetsmanagement.php" class="nav-link text-white"><i class="bi bi-ui-checks-grid"></i> Asset Management</a></li>
            <li><a href="./maintenancemanagement.php" class="nav-link text-white"><i class="bi bi-tools"></i> Maintenance Management</a></li>
            <li><a href="./pcassets.php" class="nav-link text-white"><i class="bi bi-laptop"></i> PC's</a></li>
            <li><a href="./ticketsmanagement.php" class="nav-link text-white"><i class="bi bi-ticket-perforated"></i> Tickets</a></li>
            <li><a href="./reminders.php" class="nav-link text-white"><i class="bi bi-clipboard-pulse"></i> Overdue</a></li>
            <li><a href="./reports.php" class="nav-link text-white"><i class="bi bi-file-earmark-text"></i> Reports</a></li>
            <li><a href="./diagnostichistory.php" class="nav-link text-white"><i class="fas fa-history"></i> Diagnostic History</a></li>
            <li><a href="./usermanagement.php" class="nav-link text-white"><i class="bi bi-person"></i> Manage Users</a></li>
        </ul>
    </div>
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <button class="btn btn-orange" id="sidebarToggle">
                    <i class="bi bi-list"></i>
                </button>
                <a class="navbar-brand ms-3" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userMenu" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script>
    document.getElementById('sidebarToggle').addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('collapsed');
        document.getElementById('content').classList.toggle('collapsed');
    });

    var ctx = document.getElementById('assetGrowthChart').getContext('2d');
    var assetGrowthChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Assets Growth',
                data: [50, 60, 70, 90, 100, 120, 150],
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                tension: 0.1
            }]
        }
    });

    var ctx2 = document.getElementById('assetPieChart').getContext('2d');
    var assetPieChart = new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: ['Laptops', 'Monitors', 'Printers', 'Accessories'],
            datasets: [{
                label: 'Asset Distribution',
                data: [50, 30, 40, 30],
                backgroundColor: ['#ff6384', '#36a2eb', '#ffcd56', '#4bc0c0'],
                hoverOffset: 4
            }]
        }
    });
        </script>
</body>

</html>