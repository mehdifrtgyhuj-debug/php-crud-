<?php
include "confing.php";
$query = mysqli_query($conn, "SELECT * FROM users");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User management</title>
    <link rel="stylesheet" href="php.css">
</head>

<body>
    <div class="container">
        <h1>user list</h1>
        <a href="add.php">Add user</a>


        <table>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>Email</td>
                <td>phone</td>
                <td>address</td>
                <td>Actions</td>
            </tr>
            <?php
            $no = 1;
            while ($user = mysqli_fetch_assoc($query)) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['phone'] ?></td>
                    <td><?= $user['address'] ?></td>


                    <td>


                        <a href="edit.php?id=<?= $user['id'] ?>">Edit</a>
                        <a class="btn-delete"
                            href="delete.php?id=<?= $user['id'] ?>"
                            onclick="return confirm('آیا مطمئن هستید که می‌خواهید این کاربر را حذف کنید؟')">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>