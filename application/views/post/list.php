<!doctype html>
<html lang="en">

<head>
  <?php $this->load->view('includes/header'); ?>
  <title>Employee Task Management</title>
</head>

<body>

  <div class="container">
    <div class="row">

      <div class="col-lg-12 my-5">
        <h2 class="text-center mb-3">Employee Task Management</h2>
      </div>

      <div class="col-lg-12">

        <?php echo $this->session->flashdata('message'); ?>

        <div class="d-flex justify-content-between mb-3">
          <h4>Employee List</h4>
          <a href="<?= base_url('post/create') ?>" class="btn btn-success"> <i class="fas fa-plus"></i> Add New Employee</a>
        </div>

        <table class="table table-bordered table-default">

          <thead class="thead-light">
            <tr>
              <th >#</th>
              <th >Name</th>
              <th >Phone</th>
							<th >Address</th>

              <th >Action</th>
            </tr>
          </thead>

          <tbody>

            <?php $i = 1; foreach ($data as $post) { ?>

              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $post->name; ?></td>
                <td><?php echo $post->phone; ?></td>
                <td><?php echo $post->address; ?></td>

                <td>
									<a href="<?= base_url('post/show/' . $post->id) ?>" class="btn btn-secondary"> <i class="fas fa-eye"></i> View </a>

                  <a href="<?= base_url('post/edit/' . $post->id) ?>" class="btn btn-primary"> <i class="fas fa-edit"></i> Edit </a>
                  <a href="<?= base_url('post/delete/' . $post->id) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')"> <i class="fas fa-trash"></i> Delete </a>
                </td>

              </tr>

            <?php $i++; } ?>

          </tbody>

        </table>

      </div>
    </div>
  </div>
  <?php $this->load->view('includes/footer'); ?>

</body>

</html>
