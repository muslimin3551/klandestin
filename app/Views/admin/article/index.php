<?= $this->extend('admin/layouts/app') ?>
<?= $this->section('content') ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Article Menu</h3>
                <p class="text-subtitle text-muted">List Data Article </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin/dashboard') ?> ">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Article</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?php if (session()->getFlashdata('msg_succes')) : ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('msg_succes') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="<?= base_url('admin/article/new') ?>" class="btn btn-primary"><i class="bi bi-person-plus"></i> Add Article</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Tag</th>
                                <th>Published</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($article as $item) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $item['title'] ?></td>
                                    <td><?= $item['tag'] ?></td>
                                    <td>
                                        <?php if ($item['is_published'] == 1) { ?>
                                            <span class="badge bg-primary">Yes</span>
                                        <?php } else { ?>
                                            <span class="badge bg-danger">No</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('admin/article/' . $item['id'] . '/edit') ?>" class="btn btn-sm btn-outline-success m-1">Edit</a>
                                        <a href="<?= base_url('admin/article/' . $item['id'] . '/delete') ?>" class="btn btn-sm btn-outline-danger m-1">delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
</div>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="h2">Apakah anda yakin ingin menghapus data ini?</h2>
                <p>Data akan terhapus permanen</p>
            </div>
            <div class="modal-footer">
                <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmToDelete(el) {
        $("#delete-button").attr("href", el.dataset.href);
        $("#confirm-dialog").modal('show');
    }
</script>
<?= $this->endSection() ?>