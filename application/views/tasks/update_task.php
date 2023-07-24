<!DOCTYPE html>
<html>
<head>
    <title>Update Task</title>
    <!-- Add Bootstrap CSS link here -->
	<?php $this->load->view('includes/header'); ?>

</head>
<body>
    <div class="container mt-5">
        <h1>Update Task</h1>
        <form action="<?= base_url('task/update/'.$task->id) ?>" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="<?= $task->title ?>" required>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control" value="<?= $task->date ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"><?= $task->description ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Task</button>
        </form>
    </div>
	<?php $this->load->view('includes/footer'); ?>

</body>
</html>
