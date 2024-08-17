<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Edit Tasks <?= $this->endSection(); ?>


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


<h1>Edit Task</h1>


<?= form_open("/tasks/update/" . $task['id']) ?>

<div>
    <input type="text" name="description" id="description" value="<?= esc($task['description']) ?>">
    <label for="description">Description</label>
</div>

<button>Save</button>
<a href=" <?= site_url("/tasks/show/" . $task['id']) ?>">Cancel</a>

</form>


<?= $this->endSection() ?>