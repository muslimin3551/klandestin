<?= $this->extend('admin/layouts/app') ?>
<?= $this->section('content') ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Anonymous Post Menu</h3>
                <p class="text-subtitle text-muted">List Data Anonymous Post </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin/dashboard') ?> ">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Anonymous Post</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <?php if (isset($validation)) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $validation->listErrors() ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <section class="row">
        <!-- Checkout Form -->
        <div class="col-md-12">
            <?php foreach ($anonymous as $item) { ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Latest Posting</h5>
                        <hr>
                        <div class="anonymous-post">
                            <?php if ($item['image']) { ?>
                                <img src="<?= base_url('uploads/anonymous/') . $item['image'] ?>" class="card-img-top" alt="Article Image">
                            <?php } ?>
                            <div class="card-body">
                                <p class="card-text">
                                    <?= $item['description'] ?>
                                </p>
                                <!-- Like and Comment Section -->
                                <div class="d-flex justify-content-between">
                                    <div class="btn-group">
                                        <a href="<?= base_url('/anonymous/like/' . $item['id'])  ?>" type="button" class="btn btn-sm btn-outline-primary"><?= $item['like_count'] ?> Like</a>
                                    </div>
                                    <?php
                                    $createdAt = $item['created_at'];
                                    $formattedDate = date('Y. F j', strtotime($createdAt));
                                    ?>
                                    <small class="text-muted">Posted on <?= $formattedDate ?> by <?= get_user_anonym_name($item['user_id']) ?></small>
                                </div>
                                <!-- Comment Section -->
                                <div class="divider">
                                    <div class="divider-text">Comment Section</div>
                                </div>
                                <div class="comment-section mt-3">
                                    <!-- Display list of comments here -->
                                    <ul class="list-group">
                                        <!-- Example comment item -->
                                        <div class="d-flex justify-content-between">
                                            <li class="list-group-item">
                                                <?php foreach ($item['comments'] as $comment) { ?>
                                                    <div class="comment">
                                                        <p><?= $comment['description'] ?></p>
                                                        <?php
                                                        $createdAt = $comment['created_at'];
                                                        $formattedDate = date('Y. F j', strtotime($createdAt));
                                                        ?>
                                                        <?php if ($comment['created_at']) { ?>
                                                            <small class="text-muted">Posted on <?= $formattedDate ?> by <?= get_user_anonym_name($item['user_id']) ?></small>
                                                        <?php } else { ?>
                                                            <p>No comment yet</p>
                                                        <?php } ?>
                                                    </div>
                                                    <hr>
                                                <?php } ?>
                                            </li>
                                        </div>
                                        <!-- Add more comments dynamically -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</div>

<script>
    function confirmToDelete(el) {
        $("#delete-button").attr("href", el.dataset.href);
        $("#confirm-dialog").modal('show');
    }
</script>
<?= $this->endSection() ?>