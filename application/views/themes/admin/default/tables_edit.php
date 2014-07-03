<?php echo $header; ?>
<div class="row content">
	<div class="col-md-12">
		<div id="notification">
			<div class="alert alert-dismissable">
				<?php if (!empty($alert)) { ?>
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $alert; ?>
				<?php } ?>
				<?php if (validation_errors()) { ?>
					<p class="alert-danger">Sorry but validation has failed, please check for errors.</p>
				<?php } ?>
			</div>
		</div>

		<div class="row wrap-vertical">
			<ul id="nav-tabs" class="nav nav-tabs">
				<li class="active"><a href="#table-details" data-toggle="tab">Table Details</a></li>
			</ul>
		</div>

		<form role="form" id="edit-form" class="form-horizontal" accept-charset="utf-8" method="post" action="<?php echo $action; ?>">
			<div class="tab-content">
				<div id="table-details" class="tab-pane row wrap-all active">
					<div class="form-group">
						<label for="input-name" class="col-sm-2 control-label">Name:</label>
						<div class="col-sm-5">
							<input type="text" name="table_name" id="input-name" class="form-control" value="<?php echo set_value('table_name', $table_name); ?>" />
							<?php echo form_error('table_name', '<span class="text-danger">', '</span>'); ?>
						</div>
					</div>
					<div class="form-group">
						<label for="input-min-capacity" class="col-sm-2 control-label">Minimum:</label>
						<div class="col-sm-5">
							<input type="text" name="min_capacity" id="input-min-capacity" class="form-control" value="<?php echo set_value('min_capacity', $min_capacity); ?>" />
							<?php echo form_error('min_capacity', '<span class="text-danger">', '</span>'); ?>
						</div>
					</div>
					<div class="form-group">
						<label for="input-max-capacity" class="col-sm-2 control-label">Capacity:</label>
						<div class="col-sm-5">
							<input type="text" name="max_capacity" id="input-max-capacity" class="form-control" value="<?php echo set_value('max_capacity', $max_capacity); ?>" />
							<?php echo form_error('max_capacity', '<span class="text-danger">', '</span>'); ?>
						</div>
					</div>
					<div class="form-group">
						<label for="input-status" class="col-sm-2 control-label">Status:</label>
						<div class="col-sm-5">
							<select name="table_status" id="input-status" class="form-control">
								<option value="0" <?php echo set_select('table_status', '0'); ?> >Disabled</option>
							<?php if ($table_status === '1') { ?>
								<option value="1" <?php echo set_select('table_status', '1', TRUE); ?> >Enabled</option>
							<?php } else { ?>  
								<option value="1" <?php echo set_select('table_status', '1'); ?> >Enabled</option>
							<?php } ?>  
							</select>
							<?php echo form_error('table_status', '<span class="text-danger">', '</span>'); ?>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<?php echo $footer; ?>