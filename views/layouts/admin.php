<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Admin Venn</title>
    <link rel="stylesheet" href="/assets/stylesheets/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

    <div class="admin">
      <div class="left-side-bar">
          <h3><a href="/admin">Home</a></h3>
          <ul>
            <li><a href="/admin/insertPost">Insert</a></li>
          </ul>
      </div>
      <div class="content">
        <?= @$content ?>
      </div>
    </div>

    
</body>
</html>



