<?php
include "confing.php";
$id = $_GET['id'];
$query = mysqli_query($conn,"SELECT * FROM users WHERE id=$id");
$user = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
    <link rel="stylesheet" href="php.css">
</head>
<body>
    

    <div class="wrapper">
        <div class="form-wrapper">
            <h1>Edit user</h1>
            <form method="POST" action="action.php?id=<?= $id ?>">
                <input type="text" name="name" placeholder="Name" value="<?= $user['name'] ?>" required>
                <input type="email" name="email" placeholder="Email" value="<?= $user['email'] ?>" required>
                <input type="text" name="phone" placeholder="phone" value="<?= $user['phone'] ?>" required>
                <textarea name="address" placeholder="Address" required><?= $user['address'] ?></textarea>
                <div class="btn-box">
                    <button type="submit" class="btn" name="update">update</button>
                    <a href="index.php" class="btn">cancel</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>