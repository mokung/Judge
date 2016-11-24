<!-- <ul class="nav nav-pills nav-stacked">
    <li><a href="<?php e::url('/admin/groups/');?>"><?php echo(__('groups')); ?></a></li>
</ul>
 -->
<form action="<?php e::url("/admin/groups/create"); ?>" role="form" method="get" class="form-horizontal col-sm-6 col-sm-offset-2">
	<div class="form-group">
		<label for="group-name" class="col-sm-5 control-label"><?php echo __('admin.gorups.list.group_id'); ?></label>
		<div class="col-sm-5">
				<input type="text" class="form-control" id="group-name" name="id" placeholder="<?php echo __('admin.gorups.list.group_id'); ?>">
		</div>
		<input type="submit" class="btn btn-info col-sm-2" value="<?php echo __('admin.group.new_group'); ?>">
	</div>
</form> 