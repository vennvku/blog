<div class="container">
    <div class="row add-post">
        <div class="col-lg-12">

            <form action="/admin/actionUpdatePost" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $post->id ?>"><br>
                <table>
                    <tr>
                        <td class="row-left">Title:</td>
                        <td><input type="text" name="title" value="<?= $post->title ?>"></td>
                    </tr>
                    <tr>
                        <td class="row-left">Content:</td>
                        <td class="row-left"><textarea  type="text" name="content" ><?= $post->content ?></textarea></td>
                    </tr>
                    <tr>
                        <td class="row-left">File:</td>
                        <td><input type="file" name="fileImage" ></td>
                    </tr>
                </table>
                <div class="btn-action">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
                
            </form>
        </div>
    </div>
</div>

