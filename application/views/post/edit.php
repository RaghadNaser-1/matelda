<!doctype html>
<html lang="en">

<head>
  <?php $this->load->view('includes/header'); ?>
  <title>Edit Employee</title>
</head>

<body>

  <div class="container">
    <div class="row">

      <div class="col-lg-12 my-5">
        <h2 class="text-center mb-3">Employee Task Management</h2>
      </div>

      <div class="col-lg-12">

        <div class="d-flex justify-content-between ">
          <h4>Edit Employee</h4>
          <a class="btn btn-warning" href="<?php echo base_url(); ?>"> <i class="fas fa-angle-left"></i> Back</a>
        </div>

        <form method="post" action="<?php echo base_url('post/update/' . $data->id); ?>">

          <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="name" value="<?php echo $data->name; ?>">
          </div>

					<div class="form-group">
            <label>Phone</label>
            <input class="form-control" type="text" name="phone" value="<?php echo $data->phone; ?>">
          </div>

					<div class="form-group">
            <label>Address</label>
            <input class="form-control" type="text" name="address" value="<?php echo $data->address; ?>">
          </div>
          <!-- <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"><?php echo $data->description; ?></textarea>
          </div> -->

          <div class="form-group">
            <button type="submit" class="btn btn-success"> <i class="fas fa-check"></i> Submit </button>
          </div>

        </form>


      </div>
    </div>
  </div>



  <?php $this->load->view('includes/footer'); ?>

</body>

</html>
