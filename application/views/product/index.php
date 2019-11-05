<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">

	<div class="row">
		<div class="col-5 align-self-center">
			<h4 class="page-title">Dashboard</h4>
			<div class="d-flex align-items-center">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Library</li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="col-7 align-self-center">
			<div class="d-flex no-block justify-content-end align-items-center">
				<div class="m-r-10">
					<div class="lastmonth"></div>
				</div>
				<div class=""><small>LAST MONTH</small>
					<h4 class="text-info m-b-0 font-medium">$58,256</h4>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<!-- File export -->
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Product </h4>
					<h6 class="card-subtitle">Manage Product</a></h6>
					<a href="<?php echo base_url() . "index.php/ProductController/createNewProduct"; ?>" id="addRow" class="btn btn-primary mb-2"><i class="fas fa-plus"></i>&nbsp; Add New Product</a>
					<!-- Display status message -->
					<?php if (!empty($success_msg)) { ?>
						<div class="col-xs-12">
							<div class="alert alert-success"><?php echo $success_msg; ?></div>
						</div>
					<?php } elseif (!empty($error_msg)) { ?>
						<div class="col-xs-12">
							<div class="alert alert-danger"><?php echo $error_msg; ?></div>
						</div>
					<?php } ?>
					<div class="col-md-6 search-panel">
						<!-- Search form -->
						<form method="post">
							<div class="input-group mb-3">
								<input type="text" name="searchKeyword" class="form-control" placeholder="Search by keyword..." value="<?php echo $searchKeyword; ?>">
								<div class="input-group-append">
									<input type="submit" name="submitSearch" class="btn btn-outline-secondary" value="Search">
									<input type="submit" name="submitSearchReset" class="btn btn-outline-secondary" value="Reset">
								</div>
							</div>
						</form>


					</div>

					<div class="table-responsive">
						<?php if (!empty($datalst)) { ?>
							<table id="file_export" class="table table-striped table-bordered display">
								<thead>
									<tr>
										<th>#</th>
										<th>Product Name</th>
										<th>Brand Name</th>
										<th>Category</th>
										<th>Is Active</th>
										<th>Weight</th>
										<th>Photo</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
										foreach ($datalst as $row) { ?>
										<tr>
											<td><?php echo $row['product_id']; ?></td>
											<td><?php echo $row['product_name']; ?></td>
											<td><?php echo $row['brand']; ?></td>
											<td><?php echo $row['cat_name']; ?></td>
											<td><?php echo $row['is_active']; ?></td>
											<td><?php echo $row['weight']; ?> &nbsp <?php echo $row['unit']; ?></td>
											<td><img hight="100" width="100" name="cat logo" alt="Logo" src="<?php echo 'http://localhost:8888/GroceryMS/uploads/ProductImage/' . $row['photo']; ?>" /></td>

											<td>
												<a href="<?php echo site_url('ProductController/view/' . $row['product_id']); ?>" class="btn btn-primary">View</a>
												<a href="<?php echo site_url('ProductController/edit/' . $row['product_id']); ?>" class="btn btn-warning">Edit</a>
												<a href="<?php echo site_url('ProductController/delete/' . $row['product_id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
											</td>
										</tr>
									<?php
										}
										?>
								</tbody>
								<!-- <tfoot>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start date</th>
									<th>Salary</th>
								</tr>
							</tfoot> -->
							</table>
							<!-- Display pagination links -->
							<div class="pagination pull-right">
								<?php echo $this->pagination->create_links(); ?>
							</div>

						<?php } else { ?>
							<p>Brand's(s) not available.</p>
						<?php } ?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="row">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
