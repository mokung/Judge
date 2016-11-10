<ul class="pagination problem-pagination">

</ul>
<div class="problem-search">
<?php echo(View::factory('problem/searchform'));?>
</div>
<table class="table table-striped">
<thead>
    <tr>
        <th><?php echo(__('problem.list.id')); ?></th>
        <th><?php echo(__('problem.list.title')); ?></th>
        <th><?php echo(__('problem.list.ratio_ac_submit')); ?></th>
    </tr>
</thead>
<tbody>
<th><?php echo  ($stagenum); ?></th>
<th><?php print_r  ($stagelevel); ?></th>
<th><?php print_r  ($stagelevel); ?></th>
<th><?php print_r  ($stagelevel); ?></th>
</tbody>
</table>
