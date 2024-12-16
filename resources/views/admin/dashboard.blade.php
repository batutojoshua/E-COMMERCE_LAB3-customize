<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Link to External CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-header">
        <h3>Admin Panel</h3>
    </div>
    <ul class="sidebar-links">
        <li><a href="#"><i class="fas fa-users"></i> Users</a></li>
        <li><a href=""><i class="fas fa-cogs"></i> Products</a></li>
        <li><a href="#"><i class="fas fa-briefcase"></i> Brands</a></li>
        <li><a href="#"><i class="fas fa-tag"></i> Discount</a></li>
        <li><a href="#"><i class="fas fa-history"></i> History</a></li>
        <li><a href="#"><i class="fas fa-cogs"></i> Settings</a></li>
    </ul>
    <div class="logout">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn-logout">Logout</button>
        </form>
    </div>
</div>

<!-- Main Content Area -->
<div class="content-area">
    <div class="content-header">
        <h2>Dashboard</h2>
    </div>

    <div class="content-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <p>You are logged in!</p>
    </div>
</div>

</body>
</html>
