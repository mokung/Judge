<ul class="pagination problem-pagination">
    <?php for($i = 1; $i <= $pages; $i++): ?>
        <li<?php if($i == Request::$current->param('id')):?> class="active"<?php endif;?>><a href="<?php e::url("/leader/problem/list/{$i}");?>"><?php echo($i);?></a></li>
    <?php endfor;?>
</ul>
<ul class="new-problem">
    <a href="<?php e::url("/leader/problem/new");?>" class="btn btn-primary"><?php echo(__('admin.problem.sidebar.new')); ?></a>   
</ul>
<table class="table table-striped">
    <thead>
    <tr>
        <th><?php echo(__('admin.problem.list.problem_id')); ?></th>
        <th><?php echo(__('admin.problem.list.title')); ?></th>
        <th><?php echo(__('admin.problem.list.level')); ?></th>
        <th><?php echo(__('admin.problem.list.created')); ?></th>
        <th><?php echo(__('admin.problem.list.op')); ?></th>
    </tr>
    </thead>
<?php /* @var Model_Problem[] $problem_list */ foreach($problem_list as $p):?>
<tr>
<td><?php echo $p->problem_id;?></td>
<td><?php echo $p->title;?></td>
<td><?php echo $p->level;?></td>
<td><?php echo($p->in_date);?></td>
<td><a class="edit-link" href="<?php e::url("/leader/problem/edit/{$p->problem_id}");?>"><?php echo(__('admin.problem.list.edit')); ?></a></td>
<?php endforeach;?>
</table>
