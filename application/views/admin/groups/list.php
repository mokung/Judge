<div class="dashboard-widget row">
  
<form action="<?php e::url("/admin/groups/create"); ?>" role="form" method="get" class="form-horizontal col-sm-6 col-sm-offset-2">
Group Name: <input type="text" name="id"><br>
<input type="submit">
</form>

</div>


<table class="table table-striped">
    <thead>
    <tr>
        <th><?php echo(__('admin.gorups.list.group_id')); ?></th>
       <th><?php echo(__('admin.gorups.list.member')); ?></th>
        <th><?php echo(__('admin.gorups.list.timecreated')); ?></th>
  <!--       <th><?php echo(__('admin.user.list.submit')); ?></th>
        <th><?php echo(__('admin.user.list.ratio')); ?></th>
        <th><?php echo(__('admin.user.list.op')); ?></th>  -->
    </tr>
    </thead>
    <tbody>
    <?php foreach($groups as $u):?>
        <tr>
            <td><?php echo HTML::anchor("{$u['group_id']}", $u['group_id']); ?></td>
         <!--    <td><?php echo HTML::chars($u['nick']); ?></td> -->
            <td><?php echo $u['member']; ?></td>
           <td><?php echo $u['time_created']; ?></td>
          <!--   <td><?php if($u['solved'] == 0):?>
            0.00%
            <?php else: ?>
            <?php echo sprintf( "%.02lf%%", $u['solved']/$u['submit'] * 100); ?>
            <?php endif; ?>
            </td> -->
           <!--  <td><a class="edit-link" href="<?php e::url("/admin/user/edit/{$u['user_id']}");?>"><?php echo(__('admin.user.list.edit')); ?></a></td>  -->
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php echo(View::factory('block/pager', array('base_url' => '/admin/user', 'total' => $total)));?>
