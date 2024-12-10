<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <header>
        <h1>Admin Dashboard</h1>
    </header>
    <main>
        <a href="create_post.php" class="button">Create New Post</a>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sample Blog Post</td>
                    <td>
                        <a href="edit_post.php?id=1">Edit</a> |
                        <a href="delete_post.php?id=1">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
    <!-- <footer style="
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 50px;"> -->
    <footer style=" position: fixed;
  bottom: 0px;
  margin-right: 30%;
  margin-left: 40%;">
        <p class="foot">&copy; 2024 Admin Dashboard. All rights reserved.</p>
    </footer>
</body>

</html>