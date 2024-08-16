<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Tasks <?= $this->endSection(); ?>


<?= $this->section("content") ?>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach (session('errors') as $error): ?>
            <li>
                <?= $error ?>
            </li>

        <?php endforeach ?>
    </ul>
<?php endif ?>


<h1>New Task</h1>

<!-- <form method="post" action="/tasks/create">-->

<?= form_open("/tasks/create") ?>

<div>
    <input type="text" name="description" id="description" value="">
    <label for="description">Description</label>
</div>

<button>Save</button>
<a href=" <?= site_url("/tasks") ?>">Cancel</a>

</form>


<?= $this->endSection() ?>