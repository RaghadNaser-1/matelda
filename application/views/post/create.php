<!doctype html>
<html lang="en">

<head>
  <?php $this->load->view('includes/header'); ?>
  <title>Add New Employee</title>
</head>

<body>

  <div class="container">
    <div class="row">

      <div class="col-lg-12 my-5">
        <h2 class="text-center mb-3">Employee Task Management</h2>
      </div>

      <div class="col-lg-12">

        <div class="d-flex justify-content-between ">
          <h4>Add New Employee</h4>
          <a class="btn btn-warning" href="<?php echo base_url(); ?>"> <i class="fas fa-angle-left"></i> Back</a>
        </div>

        <form method="post" action="<?php echo base_url('post/store'); ?>">

          <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="name">
          </div>

					<div class="form-group">
            <label>Phone</label>
            <input class="form-control" type="text" name="phone">
          </div>

					<div class="form-group">
            <label>Address</label>
            <input class="form-control" type="text" name="address">
          </div>
          <!-- <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"></textarea>
          </div> -->

          <div class="form-group">
            <button type="submit" class="btn btn-success"> <i class="fas fa-plus"></i> Add Employee</button>
          </div>

        </form>


      </div>
    </div>
  </div>



  <?php $this->load->view('includes/footer'); ?>

</body>

</html>
