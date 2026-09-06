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
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 40px 20px;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f4f4;
            color: #222;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 600;
            color: #222;
            text-align: center;
        }

        .description {
            margin: 8px 0 30px;
            text-align: center;
            color: #666;
            font-size: 14px;
        }

        .table-container {
            background: #fff;
            border: 1px solid #d9d9d9;
        }

        .table-title {
            padding: 18px 20px;
            border-bottom: 1px solid #ddd;
            font-size: 18px;
            font-weight: 600;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            padding: 14px 16px;
            background: #222;
            color: #fff;
            text-align: left;
            font-size: 13px;
            font-weight: 600;
        }

        td {
            padding: 14px 16px;
            border-bottom: 1px solid #e5e5e5;
            font-size: 14px;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody tr:hover {
            background: #f7f7f7;
        }

        .id {
            font-weight: bold;
        }

        .footer {
            padding: 14px 20px;
            border-top: 1px solid #ddd;
            color: #666;
            font-size: 13px;
        }

        .empty {
            padding: 25px;
            text-align: center;
            color: #777;
        }

        @media (max-width: 700px) {
            body {
                padding: 25px 10px;
            }

            .container {
                width: 100%;
            }

            table {
                min-width: 700px;
            }

            h1 {
                font-size: 24px;
            }
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

        <div class="table-title">
            Users Table
        </div>

        <div class="table-wrapper">

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

                    <?php if (!empty($users)): ?>

                        <?php foreach ($users as $user): ?>

                            <tr>
                                <td class="id"><?= $user['id']; ?></td>
                                <td><?= $user['firstname']; ?></td>
                                <td><?= $user['lastname']; ?></td>
                                <td><?= $user['email']; ?></td>
                                <td><?= $user['username']; ?></td>
                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="5" class="empty">
                                No users found.
                            </td>
                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>

        <div class="footer">
            Total Users: <?= count($users); ?>
        </div>

    </div>

</div>

</body>
</html>
