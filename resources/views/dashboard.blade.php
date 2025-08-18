<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Meeting System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        .navbar {
            background: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            color: #333;
            font-size: 1.5rem;
        }

        .logout-btn {
            background: #dc3545;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
            text-decoration: none;
            display: inline-block;
        }

        .logout-btn:hover {
            background: #c82333;
        }

        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .welcome-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .welcome-card h2 {
            color: #333;
            margin-bottom: 1rem;
            font-size: 2rem;
        }

        .welcome-card p {
            color: #666;
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .user-info {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
        }

        .user-info h3 {
            color: #333;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        .info-item {
            text-align: left;
        }

        .info-item label {
            font-weight: 600;
            color: #555;
            display: block;
            margin-bottom: 0.25rem;
        }

        .info-item span {
            color: #333;
            font-size: 1.1rem;
        }

        .role-badge {
            background: #667eea;
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            display: inline-block;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <h1>Meeting System</h1>
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </nav>

    <div class="container">
        <div class="welcome-card">
            <h2>Welcome, {{ Auth::user()->name }}!</h2>
            <p>You have successfully logged into the Meeting System.</p>
            
            <div class="user-info">
                <h3>Account Information</h3>
                <div class="info-grid">
                    <div class="info-item">
                        <label>Full Name:</label>
                        <span>{{ Auth::user()->name }}</span>
                    </div>
                    <div class="info-item">
                        <label>Email:</label>
                        <span>{{ Auth::user()->email }}</span>
                    </div>
                    <div class="info-item">
                        <label>Role:</label>
                        <span class="role-badge">{{ ucfirst(Auth::user()->role) }}</span>
                    </div>
                    <div class="info-item">
                        <label>Member Since:</label>
                        <span>{{ Auth::user()->createdate ? \Carbon\Carbon::parse(Auth::user()->createdate)->format('M d, Y') : 'N/A' }}</span>
                    </div>
                </div>
            </div>

            <p style="color: #666; font-size: 0.9rem;">
                This is your dashboard. More features will be available here soon.
            </p>
        </div>
    </div>
</body>
</html>
