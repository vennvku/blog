<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Venn</title>
    <!----CSS link----->
    <link rel="stylesheet" href="/assets/stylesheets/app.css">
  </head>
  <body>
    <div class="hero">
        <nav>
            <img src="/assets/images/logo.png" class="logo" />
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="index.php?controller=posts">Post</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <a href="#" class="btn">Resume</a>
        </nav>
    </div>
    <?= @$content ?>
</body>
</html>



