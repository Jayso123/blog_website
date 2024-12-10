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
                    <!-- <th>Actions</th> -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sample Blog Post</td>
                    <!-- <td>
                        <a href="edit_post.php?id=1">Edit</a> |
                        <a href="delete_post.php?id=1">Delete</a>
                    </td> -->
                </tr>
            </tbody>
        </table>
    </main>
    <footer>
        <p>&copy; 2024 Admin Dashboard. All rights reserved.</p>
    </footer>
</body>

</html>