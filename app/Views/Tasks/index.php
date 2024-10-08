<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Tasks <?= $this->endSection(); ?>


<?= $this->section("content") ?>

<h1>Tasks</h1>

<a href=" <?= site_url("/tasks/new") ?>">New Task</a>

<ul>
    <?php foreach ($tasks as $task): ?>
        <li>
            <!-- Hardcoded URL -->
            <!-- <a href="/tasks/show/<?= $task['id'] ?>"> -->

            <!-- Abstract URL -->
            <a href="<?= site_url("tasks/show/" . $task['id']) ?>">
                <?= esc($task['description']) ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>




<?= $this->endSection() ?>