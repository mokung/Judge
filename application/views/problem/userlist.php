<ul class="pagination problem-pagination">
<?php for($i = 1; $i <= $stages; $i++): ?>
    <li<?php if($i == $stage):?> class="active"<?php endif;?>><a href="<?php e::url("/problem/list?stage={$i}");?>"><?php echo($i);?></a></li>
<?php endfor;?>
</ul>
<table class="table table-striped">
<thead>
    <tr>
        <th><?php echo(__('problem.list.id')); ?></th>
        <th><?php echo(__('problem.list.title')); ?></th>
        <th><?php echo(__('problem.list.ratio_ac_submit')); ?></th>
        <th><?php echo(__('problem.list.level')); ?></th>
    </tr>
</thead>
<tbody>
<?php foreach($num as $problem): ?>
    <tr>
        <td class="pid  <?php echo e::pass_status($problem);?>"><?php echo($problem->problem_id); ?></td>
        <td class="ptitle"><?php echo HTML::anchor("/problem/show/{$problem->problem_id}", $problem->title);?></td>
        <td><?php echo($problem->accepted); ?>/<?php echo($problem->submit); ?></td>
        <td><?php echo($problem->level); ?></td>
    </tr>
<?php endforeach;?>
</tbody>
</table>
<a class="side-bar btn btn-primary" href="<?php e::url('/problem/nextstage');?>">进入下一阶段</a>