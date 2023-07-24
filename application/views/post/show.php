<!doctype html>
<html lang="en">

<head>
  <?php $this->load->view('includes/header'); ?>
  <title>View Employee</title>
</head>

<body>

  <div class="container">
    <div class="row">

      <div class="col-lg-12 my-5">
        <h2 class="text-center mb-3">Employee Task Management</h2>
      </div>

      <div class="col-lg-12">

        
<div class="card mb-4">
    <div class="card-header">
	<div class="d-flex justify-content-between ">
          <h4>Employee Details</h4>
          <a class="btn btn-warning" href="<?php echo base_url(); ?>"> <i class="fas fa-angle-left"></i> Back</a>
        </div>
    </div>
    <div class="card-body">
       <b class="text-muted">Name:</b>
       <p><?php echo $employee->name;?></p>
       <b class="text-muted">Phone:</b>
       <p><?php echo $employee->phone;?></p>
	   <b class="text-muted">Address:</b>
       <p><?php echo $employee->address;?></p>
    <!-- </div> -->
	<h2>Tasks</h2>
	<a href="<?= base_url('task/add/'.$employee->id) ?>" class="btn btn-primary mb-3">Add New Task</a>

	<?php if (empty($tasks)): ?>
    <p>No tasks found for this employee.</p>
<?php else: ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Date</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= $task->id ?></td>
                    <td><?= $task->title ?></td>
                    <td><?= $task->date ?></td>
                    <td><?= $task->description ?></td>
                    <td>
                        <a href="<?= base_url('task/edit/'.$task->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="<?= base_url('task/delete/'.$task->id) ?>" method="POST" class="d-inline">
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
</div>
</div>
     


      </div>
    </div>
  </div>



  <?php $this->load->view('includes/footer'); ?>

</body>

</html>
