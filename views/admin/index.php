<h3>Danh sach tat ca bai post</h3>
<ul>
<?php foreach ($posts as $post) { ?>
    <li>
        <?= $post->title ?>
        <a href="index.php?controller=admin&action=updatePost&id=<?=$post->id ?>">Update</a>
        <a href="index.php?controller=admin&action=deletePost&id=<?=$post->id ?>">Delete</a>
    </li>
<?php } ?>
</ul>



