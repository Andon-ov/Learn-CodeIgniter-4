<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Tasks <?= $this->endSection(); ?>


<?= $this->section("content") ?>

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