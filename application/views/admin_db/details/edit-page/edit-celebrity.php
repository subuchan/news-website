<main class="app-content">
<div class="app-title">
        <div>
            <h1><i class="bi bi-cricket"></i>Edit celebrity Page</h1>
        </div>
    </div>
    <div class="row form_upload_main">
        <?php
            if(isset($data1)){
            ?>
        <div class="col-md-12 col-lg-8">
            <div class="tile">
                <h3 class="tile-title">Editing Form</h3>
                <div class="tile-body">
                    <form action="<?= base_url('admin/update_celebrity') ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input class="form-control" type="text" hidden name="id" value="<?=$data1[0]->id?>">
                        </div>
    
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input class="form-control" type="text" name="title" value="<?=$data1[0]->title?>" placeholder="Write Something....">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tags</label>
                            <input class="form-control" type="text" name="tags" value="<?=$data1[0]->tags?>" placeholder="eg: #tag1 #tag2 #tag3">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sub Title-1 (sub-title 1 for set of paragraph)</label>
                            <input class="form-control" type="text" name="title1" value="<?=$data1[0]->sub_title1?>" placeholder="write Something....">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sub Description-1 (Description of sub-title 1 )</label>
                            <textarea class="form-control" rows="10" name="desc1"
                                placeholder="write Something...."><?= $data1[0]->sub_desc1?>
                            </textarea>  
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Images 1 (Image of sub-title 1)</label>
                            <img src="<?=base_url('./upload/celebrity/').$data1[0]->image1?>" width="200" height="150">
                            <input class="form-control" name="image1" value="<?=$data1[0]->image1?>" type="file">
                        </div>
                       

                        <div class="mb-3">
                            <label class="form-label">Sub Title-2 (sub-title 2 for set of paragraph)</label>
                            <input class="form-control" type="text" name="title2" value="<?=$data1[0]->sub_title2?>" placeholder="write Something....">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sub Description-2 (Description of sub-title 2 )</label>
                            <textarea class="form-control" rows="10" name="desc2"
                                placeholder="write Something...."><?=$data1[0]->sub_desc2 ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Images 2 (Image of sub-title 2)</label>
                            <img src="<?=base_url('./upload/celebrity/').$data1[0]->image2?>" alt=""  width="200" height="150">
                            <input class="form-control" type="file" value="<?=$data1[0]->image2?>" name="image2">
                            
                        </div>
                            <!-- #region-->
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit" name="submit"><i
                                    class="bi bi-check-circle-fill me-2"></i>Upload</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
        <?php
            }
            ?>

    </div>
</main>