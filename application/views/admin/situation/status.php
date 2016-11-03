<ul class="pagination situation-pagination">

</ul>
<div class="problem-search">
<?php echo(View::factory('problem/searchform'));?>
</div>
<table class="table table-striped">
<thead>
    <tr>
        <th><?php echo(__('top_backend.user')); ?></th>
        <th><?php echo(__('data')); ?></th>
        <th><?php echo(__('group')); ?></th>
        <th><?php echo(__('submited')); ?></th>
        <th><?php echo(__('score')); ?></th>
        <th><?php echo(__('staged')); ?></th>
        <th><?php echo(__('during_time')); ?></th>
        <th><?php echo(__('defunct')); ?></th>



    </tr>
</thead>
<tbody>
<?php /* @var Model_Problem[] $problemlist */ ?>
<?php foreach($oneday as $solution): ?>
    <tr>

        <td class="pid "><?php   echo($solution->user_id); ?></td>
        <td class="pid "><?php   echo($solution->date); ?></td>
        <td class="pid "><?php   echo($solution->group_id); ?></td>
        <td class="pid "><?php   echo($solution->submited); ?></td>
        <td class="pid "><?php   echo($solution->score); ?></td>
        <td class="pid "><?php   echo($solution->staged); ?></td>
        <td class="pid "><?php   echo($solution->during_time); ?></td>
        <td class="pid "><?php   echo($solution->defunct); ?></td>

    </tr>
<?php endforeach;?>






</tbody>
</table>
