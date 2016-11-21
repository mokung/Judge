<table class="table table-striped">
    <thead>
    <tr>
        <th><?php echo(__('admin.user.list.user_id')); ?></th>
        <th><?php echo(__('admin.user.list.stage')); ?></th>
        <th><?php echo(__('admin.user.list.solved')); ?></th>
        <th><?php echo(__('admin.user.list.submit')); ?></th>
        <th><?php echo(__('admin.user.list.ratio')); ?></th>
        <th><?php echo(__('admin.user.list.reg_time')); ?></th>
        <th><?php echo(__('admin.user.list.accesstime')); ?></th>
        <th><?php echo(__('admin.user.list.op')); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($user_list as $u):?>
        <tr>
            <td><?php echo HTML::anchor("/leader/user/form?user={$u['user_id']}", $u['user_id']); ?></td>
            <td><?php echo HTML::chars($u['stage']); ?></td>
            <td><?php echo $u['solved']; ?></td>
            <td><?php echo $u['submit']; ?></td>
            <td><?php if($u['solved'] == 0):?>
            0.00%
            <?php else: ?>
            <?php echo sprintf( "%.02lf%%", $u['solved']/$u['submit'] * 100); ?>
            <?php endif; ?>
            </td>
            <td><?php echo $u['reg_time']; ?></td>
            <td><?php echo $u['accesstime']; ?></td>
            <td><a class="edit-link" href="<?php e::url("/leader/user/edit/{$u['user_id']}");?>"><?php echo(__('admin.user.list.edit')); ?></a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php echo(View::factory('block/pager', array('base_url' => '/leader/user', 'total' => $total_page)));?>
