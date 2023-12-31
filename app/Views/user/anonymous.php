<?= $this->extend('user/layouts/app') ?>
<?= $this->section('content') ?>
<!-- Main Content -->
<!-- Checkout Page -->

<div class="page-heading">
    <h3>Anonymous Posts</h3>
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
        <div class="col-md-8">
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

                                    <!-- Form for creating a new comment -->
                                    <form class="mt-3" action="<?= base_url('anonymous/comment') ?>" method="post">
                                        <input type="hidden" name="user_id" value="<?= session()->get('id') ?>">
                                        <input type="hidden" name="anonymous_id" value="<?= $item['id'] ?>">
                                        <div class="form-group">
                                            <label for="newComment">New Comment:</label>
                                            <textarea class="form-control" id="newComment" name="description" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit Comment</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- Order Summary -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create New Post</h5>
                    <form action="<?= base_url('anonymous/add') ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="<?= session()->get('id') ?>">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description_post" name="description" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Posted</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>


<?= $this->endSection() ?>