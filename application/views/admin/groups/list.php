<div class="dashboard-widget row">


  <div class="col-md-12">
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
                <td><?php echo HTML::anchor("/admin/user/list?id={$u['group_id']}", $u['group_id']); ?></td>
                <td><?php echo $u['time_created']; ?></td>
                <td><?php echo $u['member']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo(View::factory('block/pager', array('base_url' => '/admin/groups', 'total' => $total_page)));?>
  </div>
</div>
