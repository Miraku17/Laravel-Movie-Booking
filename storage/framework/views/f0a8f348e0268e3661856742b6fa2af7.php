<!DOCTYPE html>
<html>

<head>
    <title>Inventory System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            display: inline-block;
            margin-right: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
        }

        main {
            padding: 20px;
        }

        section {
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 20px 90px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        footer {
            background-color: #333;
            color: #fff;
            height: 80px;
            text-align: center;
            margin-top: 600px;
        }

        footer p {
            padding: 30px;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Movie Booking System</h1>
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Movies</a></li>
                <li><a href="">Today's Booking</a></li>
                <li><a href="<?php echo e(url('movie-list')); ?>">Customers</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Running Movies</h2>
            <table>
                <thead>
                    <tr>
                        <th>Movie ID</th>
                        <th>Movie Name</th>
                        <th>Screen</th>
                        <th>Price</th>
                        <th>Schedule</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Movie A</td>
                        <td>10</td>
                        <td>$20</td>
                        <td>Noon(12:00PM)</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Movie B</td>
                        <td>5</td>
                        <td>$15</td>
                        <td>Noon(12:00PM)</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 CineTa System</p>
    </footer>
</body>

</html><?php /**PATH C:\Users\Zhazted Rhixin\Desktop\Admin Movie Book\test-app\resources\views/welcome.blade.php ENDPATH**/ ?>