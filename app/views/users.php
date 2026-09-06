```php
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 40px;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #222;
            margin-bottom: 10px;
        }

        .description {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
        }

        .table-container {
            background: #fff;
            padding: 25px;
            border: 1px solid #ddd;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #222;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f7f7f7;
        }

        .id {
            font-weight: bold;
        }

        .footer {
            margin-top: 15px;
            color: #777;
            font-size: 13px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Welcome to Users View</h1>

    <p class="description">
        Users Table
    </p>

    <div class="table-container">

        <table>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Username</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($users as $user): ?>

                <tr>
                    <td class="id"><?= $user->id; ?></td>
                    <td><?= $user->firstname; ?></td>
                    <td><?= $user->lastname; ?></td>
                    <td><?= $user->email; ?></td>
                    <td><?= $user->username; ?></td>
                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

        <div class="footer">
            Total Users: <?= count($users); ?>
        </div>

    </div>

</div>

</body>
</html>
