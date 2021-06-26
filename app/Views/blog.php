<?= $this->extend('layout') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="css/blog_style.css">
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
    $( document ).ready(function() {
        $('.modal').on('show.bs.modal', function (e) {
            $('.modal .modal-dialog').attr('class', 'modal-dialog modal-dialog-centered  animate__animated animate__zoomIn');
            console.log($('.modal .modal-dialog').attr('class'))
        })
        $('.modal').on('hide.bs.modal', function (e) {
            $('.modal .modal-dialog').attr('class', 'modal-dialog modal-dialog-centered  animate__animated animate__zoomOut');
            console.log($('.modal .modal-dialog').attr('class'))
        })
    }); 
</script>
<?= $this->endSection() ?>

<?= $this->section('title') ?>
Blog
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-image" id="banner">
    <h2 class="mx-auto my-auto text-white">Read About My Story</h2>
</div>
<div class="container-fluid">
    <div class="row py-5 text-center">
        <div class="col-2"></div>
        <div class="col-8 border-bottom" id="story">
            <h1><strong>Newest Story</strong></h1>
        </div>
        <div class="col-2"></div>
    </div>
</div>
<?php 
$blog_chunked = array_chunk($blog, 3);
foreach($blog_chunked as $row)
{
?>
<div class="row">
    <div class="container menu-section">
        <div class="row py-5 align-items-center ">
            <?php
            foreach($row as $ablog)
            {
            ?>
            <div class="col-4">
                <div class="card custom-card">
                    <div class="card-body">
                        <p hidden></p>
                        <h5 class="card-title"><?= $ablog['blog_title'] ?></h5>
                        <small class="text-muted">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <?= ceil(str_word_count($ablog['blog_description'])/200)?> minutes
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <?= str_word_count($ablog['blog_description'])?> words
                        </small>
                        <p class="card-text card-preview overflow-hidden">
                            <?= $ablog['blog_description'] ?>
                        </p>
                        <small class="text-primary text-left">
                            <a type="button" data-toggle="modal" data-target="#viewModal<?= $ablog['blog_id']?>">read more ...</a> 
                        </small>
                        <small class=" btn btn-outline-warning  btn-sm float-right">
                            <a type="button" data-toggle="modal" data-target="#editModal<?= $ablog['blog_id']?>">edit</a> 
                        </small><br>
                        <small class="text-muted text-left">
                            <?= date("M j, g:ia",strtotime($ablog['created_at']))?>
                        </small>
                    </div>
                </div>
                <!-- View Story Modal -->
                <div class="modal fade" id="viewModal<?= $ablog['blog_id']?>" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $ablog['blog_title'] ?>
                                        <!-- Form to delete Story -->
                                        <form class="d-inline justify-content-end" action="/blog/<?=$ablog['blog_id']?>/delete" method="post">
                                            <?= csrf_field(); ?>
                                            <button class="btn btn-outline-danger btn-sm">Delete</button>
                                        </form>
                                    </h5>
                                    
                                    <small class="text-muted text-left">
                                        <?= date("M j, g:ia",strtotime($ablog['created_at']))?>
                                    </small><br>

                                    <small class="text-muted">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <?= ceil(str_word_count($ablog['blog_description'])/200)?> minutes
                                        <i class="fa fa-book" aria-hidden="true"></i>
                                        <?= str_word_count($ablog['blog_description'])?> words
                                    </small>
                                    <p class="card-text">
                                        <?= $ablog['blog_description'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Story Modal -->
                <div class="modal fade" id="editModal<?= $ablog['blog_id']?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="post" action="/blog/<?= $ablog['blog_id']?>/update" >
                                <?= csrf_field(); ?>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <div class="form-group">
                                                <label >Edit Story</label>
                                                <input name="blog_title" type="text" class="form-control" id="formGroupEditInput" placeholder="Title" value="<?= $ablog['blog_title']?>"">
                                            </div>
                                        </h5>
                                        <p class="card-text">
                                            <div class="form-group">
                                                <textarea rows="10" cols="100" name="blog_description" class="form-control" id="formGroupEditInput2" placeholder="The Story ..."><?= $ablog['blog_description']?></textarea>
                                            </div>
                                        </p>
                                        <div class="form-group">
                                            <input type="submit" value="Update" class="btn btn-block btn-outline-primary "/>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>

            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<!-- Add Story button -->
<div data-toggle="tooltip" data-placement="top" title="Add New Story">
    <p type="button" data-toggle="modal" data-target="#addModal" class="float">
        <i class="fa fa-plus my-float"></i>
    </p>
</div>

<!-- Add Story Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="/blog/store" >
                <?= csrf_field(); ?>
                <div class="card custom-card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <div class="form-group">
                                <label >Add New Story</label>
                                <input name="blog_title" type="text" class="form-control" id="formGroupAddInput" placeholder="Title">
                            </div>
                        </h5>
                        <p class="card-text">
                            <div class="form-group">
                                <textarea rows="10" cols="100" name="blog_description" class="form-control" id="formGroupAddInput2" placeholder="The Story ..."></textarea>
                            </div>
                        </p>
                        <div class="form-group">
                            <input type="submit" value="Save" class="btn btn-block btn-outline-primary "/>
                        </div>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>
<?php
}
?>
<?= $this->endSection() ?>