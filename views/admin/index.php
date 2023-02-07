<h3>Danh sach tat ca bai post</h3>
<ul>
<?php foreach ($posts as $post) { ?>
    <li>
        <?= $post->title ?>
        <a href="admin/updatePost/<?=$post->id ?>">Update</a>
        <a href="admin/deletePost/<?=$post->id ?>">Delete</a>
    </li>
<?php } ?>
</ul>



