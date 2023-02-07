<form action="/admin/actionUpdatePost" method="post">
    <input type="hidden" name="id" value="<?= $post->id ?>"><br>
    <label>Title:</label>
    <input type="text" name="title" value="<?= $post->title ?>"><br>

    <label>Content:</label>
    <input type="text" name="content" value="<?= $post->content ?>"><br>

    <button type="submit">Update</button>

</form>

