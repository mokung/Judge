<!-- <div class="dashboard-widget row"> -->
  
<!--   <form action="<?php e::url("/admin/groups/create"); ?>" role="form" method="get" class="form-horizontal col-sm-6 col-sm-offset-2">
  Group Name: <input type="text" name="id"><br>
  <input type="submit">
  </form> -->
  <!-- <div class="col-md-12"> -->
      <table class="table table-striped">
      <thead>
        <tr>
            <th><?php echo(__('admin.gorups.list.group_id')); ?></th>
            <th><?php echo(__('admin.gorups.list.timecreated')); ?></th>
            <th><?php echo(__('admin.gorups.list.member')); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($groups as $u):?>
            <tr>
                <td><?php echo HTML::anchor("{$u['group_id']}", $u['group_id']); ?></td>
                <td><?php echo $u['time_created']; ?></td>
                <td><?php echo $u['member']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
  <!-- </div> -->
<!-- </div> -->
<?php echo(View::factory('block/pager', array('base_url' => '/admin/groups', 'total' => $total_page)));?>
