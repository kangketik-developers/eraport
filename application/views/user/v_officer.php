<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
	<div class="col-lg-6">
		<div class="box">
			<div class="box-header with-border">
				<div class="col-lg-12">
					<h3 class="box-title"><?= $Title ?> Lists</h3>
				</div>
			</div>
			<?= form_open('', array("id" => 'FrmOfficer')) ?>
				<div class="box-body">
					<div class="col-lg-12">
						<div class="form-group">
							<label>Officer Code</label>
							<?php
								$data = array(
									'id' => 'user_id',
									'name' => 'user_id',
									'class' => 'form-control',
									'readonly' => 'true',
									'autocomplete' => 'off'
								);
								echo form_input($data);
							?>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
							<label>Officer Name</label>
							<?php
								$data = array(
									'id' => 'user_nama',
									'name' => 'user_nama',
									'class' => 'form-control',
									'required' => 'true',
									'autocomplete' => 'off'
								);
								echo form_input($data);
							?>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>Username</label>
							<?php
								$data = array(
									'id' => 'user_login',
									'name' => 'user_login',
									'class' => 'form-control',
									'required' => 'true',
									'autocomplete' => 'off'
								);
								echo form_input($data);
							?>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>Password</label>
							<?php
								$data = array(
									'id' => 'user_pass',
									'name' => 'user_pass',
									'class' => 'form-control',
									'type' => 'password',
									'required' => 'true',
									'autocomplete' => 'off'
								);
								echo form_input($data);
							?>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
							<label>Division</label>
							<?php
								$data = array(
									'id' => 'level_id',
									'name' => 'level_id',
									'class' => 'form-control',
									'required' => 'true',
									'autocomplete' => 'off'
								);
								$options = array(
									'' => ''
								);
								echo form_dropdown($data,$options);
							?>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<div class="col-lg-12">
						<button type="submit" class="btn btn-success">Save</button>
					</div>
				</div>
			<?= form_close() ?>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title"><?= $Title ?> Lists</h3>
			</div>
			<div class="box-body">
				<table id="dtTable" class="table table-bordered table-striped">
					<thead>
						<th>Code</th>
						<th>Name</th>
						<th>Division</th>
						<th></th>
					</thead>
					<tbody></tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('user/js/js_page_officer') ?>