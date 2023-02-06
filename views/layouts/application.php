<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Venn</title>
    <!----CSS link----->
    <link rel="stylesheet" href="/assets/stylesheets/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        </nav>
    </div>
    <?= @$content ?>
</body>
</html>



