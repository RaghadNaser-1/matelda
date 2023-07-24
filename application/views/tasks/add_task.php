<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('includes/header'); ?>

    <title>Add Task</title>
    <!-- Add Bootstrap CSS link here -->

</head>
<body>
	
    <div class="container mt-5">
        <h1>Add Task for Employee ID <?= $employee_id ?></h1>
        <form action="<?= base_url('task/add/'.$employee_id) ?>" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
    </div>
	<?php $this->load->view('includes/footer'); ?>

</body>
</html>
