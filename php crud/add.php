<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <link rel="stylesheet" href="php.css">
</head>
<body>
    

    <div class="wrapper">
        <div class="form-wrapper">
            <h1>Add user</h1>
            <form method="POST" action="action.php">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="phone" placeholder="phone" required>
                <textarea name="address" placeholder="Address" required></textarea>
                <div class="btn-box">
                    <button type="submit" class="btn" name="add">submit</button>
                    <a href="index.php" class="btn">cancel</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>