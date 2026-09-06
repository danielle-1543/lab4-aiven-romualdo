```php
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Users Management</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: #f1f3f6;
            color: #111827;
            min-height: 100vh;
        }

        /* TOP NAVIGATION */
        .navbar {
            height: 68px;
            background: #0b1220;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 45px;
            border-bottom: 1px solid #1e293b;
        }

        .brand {
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .brand span {
            color: #3b82f6;
        }

        .nav-label {
            color: #94a3b8;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* MAIN */
        .main {
            max-width: 1200px;
            margin: 45px auto;
            padding: 0 25px;
        }

        /* PAGE HEADER */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 28px;
        }

        .page-header h1 {
            font-size: 32px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .page-header p {
            margin-top: 7px;
            color: #64748b;
            font-size: 14px;
        }

        .total-users {
            background: #0b1220;
            color: white;
            padding: 11px 18px;
            font-size: 13px;
            font-weight: 600;
            border-radius: 5px;
        }

        .total-users strong {
            color: #60a5fa;
            margin-left: 5px;
        }

        /* TABLE CONTAINER */
        .table-container {
            background: white;
            border: 1px solid #dbe1e8;
            box-shadow: 0 8px 25px rgba(15, 23, 42, 0.06);
            overflow: hidden;
        }

        /* TABLE HEADER */
        .table-top {
            padding: 20px 24px;
            border-bottom: 1px solid #e2e8f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table-top h2 {
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }

        .status {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 12px;
            color: #64748b;
        }

        .status-dot {
            width: 7px;
            height: 7px;
            background: #22c55e;
            border-radius: 50%;
        }

        /* TABLE */
        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 800px;
        }

        thead {
            background: #f8fafc;
        }

        th {
            padding: 15px 24px;
            text-align: left;
            font-size: 11px;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            border-bottom: 1px solid #dbe1e8;
        }

        td {
            padding: 17px 24px;
            border-bottom: 1px solid #edf0f3;
            font-size: 14px;
        }

        tbody tr {
            transition: background 0.15s ease;
        }

        tbody tr:hover {
            background: #f8fafc;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        /* ID */
        .id {
            font-family: Consolas, monospace;
            font-weight: 700;
            color: #2563eb;
        }

        /* NAME */
        .name {
            font-weight: 600;
            color: #111827;
        }

        /* EMAIL */
        .email {
            color: #64748b;
        }

        /* USERNAME */
        .username {
            display: inline-block;
            background: #eff6ff;
            color: #1d4ed8;
            border: 1px solid #bfdbfe;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 700;
        }

        /* FOOTER */
        .footer {
            padding: 18px 24px;
            border-top: 1px solid #e2e8f0;
            background: #fafbfc;
            color: #94a3b8;
            font-size: 12px;
        }

        /* EMPTY STATE */
        .empty {
            text-align: center;
            padding: 50px !important;
            color: #94a3b8;
        }

        /* RESPONSIVE */
        @media (max-width: 700px) {

            .navbar {
                padding: 0 20px;
            }

            .nav-label {
                display: none;
            }

            .main {
                margin: 25px auto;
                padding: 0 12px;
            }

            .page-header {
                align-items: flex-start;
                flex-direction: column;
                gap: 18px;
            }

            .page-header h1 {
                font-size: 26px;
            }

            .total-users {
                align-self: stretch;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="brand">
            USER<span>ADMIN</span>
        </div>

        <div class="nav-label">
            User Management System
        </div>
    </nav>


    <!-- MAIN CONTENT -->
    <main class="main">

        <!-- PAGE HEADER -->
        <div class="page-header">

            <div>
                <h1>Users</h1>
                <p>View and manage registered users in the system.</p>
            </div>

            <div class="total-users">
                TOTAL USERS
                <strong><?= count($users); ?></strong>
            </div>

        </div>


        <!-- TABLE -->
        <section class="table-container">

            <div class="table-top">

                <h2>Users Directory</h2>

                <div class="status">
                    <span class="status-dot"></span>
                    Database Connected
                </div>

            </div>


            <div class="table-wrapper">

                <table>

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email Address</th>
                            <th>Username</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php if (!empty($users)): ?>

                            <?php foreach ($users as $user): ?>

                                <tr>

                                    <td class="id">
                                        #<?= htmlspecialchars($user->id); ?>
                                    </td>

                                    <td class="name">
                                        <?= htmlspecialchars($user->firstname); ?>
                                    </td>

                                    <td class="name">
                                        <?= htmlspecialchars($user->lastname); ?>
                                    </td>

                                    <td class="email">
                                        <?= htmlspecialchars($user->email); ?>
                                    </td>

                                    <td>
                                        <span class="username">
                                            @<?= htmlspecialchars($user->username); ?>
                                        </span>
                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        <?php else: ?>

                            <tr>
                                <td colspan="5" class="empty">
                                    No users found in the database.
                                </td>
                            </tr>

                        <?php endif; ?>

                    </tbody>

                </table>

            </div>


            <div class="footer">
                Showing <?= count($users); ?> registered user(s)
            </div>

        </section>

    </main>

</body>
</html>
```
