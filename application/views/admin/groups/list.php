<div class="dashboard-widget row">
  
<!--   <form action="<?php e::url("/admin/groups/create"); ?>" role="form" method="get" class="form-horizontal col-sm-6 col-sm-offset-2">
  Group Name: <input type="text" name="id"><br>
  <input type="submit">
  </form> -->
  <div class="col-md-12">
      <table class="table table-striped">
      <thead>
        <tr>
            <th><?php echo(__('admin.gorups.list.group_id')); ?></th>
            <th><?php echo(__('admin.gorups.list.leader')); ?></th>
            <th><?php echo(__('admin.gorups.list.member')); ?></th>
            <th><?php echo(__('admin.gorups.list.timecreated')); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($groups as $u):?>
            <tr>
                <td><?php echo HTML::anchor("{$u['group_id']}", $u['group_id']); ?></td>
                <td>郑垒</td>
                <td><?php echo $u['member']; ?></td>
                <td><?php echo $u['time_created']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo(View::factory('block/pager', array('base_url' => '/admin/user', 'total' => $total)));?>
  </div>
</div>

