<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Homepage</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">My Blog</div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <h1>Welcome to My Blog</h1>
            <p>Read the latest posts from amazing authors!</p>
        </section>
        <section class="posts">
            <h2>Recent Posts</h2>
            <div class="post">
                <h3><a href="post.php?id=1">Sample Blog Post Title</a></h3>
                <p>This is a short description of the blog post...</p>
                <a href="post.php?id=1" class="read-more">Read More</a>
            </div>
            <div class="post">
                <h3><a href="post.php?id=2">Another Blog Post</a></h3>
                <p>A brief summary of another amazing post...</p>
                <a href="post.php?id=2" class="read-more">Read More</a>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 My Blog. All rights reserved.</p>
    </footer>
</body>
</html>
