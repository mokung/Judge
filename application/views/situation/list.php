<ul class="pagination situation-pagination">
<?php for($i = 1; $i <= $pages; $i++): ?>
    <li<?php if($i == $page):?> class="active"<?php endif;?>><a href="<?php e::url("/situation/list/{$i}");?>"><?php echo($i);?></a></li>
<?php endfor;?>
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
<?php foreach($problemlist as $problem): ?>
    <tr>

        <td class="pid "><?php echo($problem->user_id); ?></td>
        <td class="ptitle"><?php echo($problem->date);?></td>
        <td class="ptitle"><?php echo($problem->group_id); ?></td>
        <td class="ptitle"><?php echo($problem->submited); ?></td>
        <td class="ptitle"><?php echo($problem->score); ?></td>
        <td class="ptitle"><?php echo($problem->staged); ?></td>
        <td class="ptitle"><?php $arr = (json_decode($problem->during_time));

        for($i=0; $i<count($arr); $i++)
            echo $arr[$i]."  ";?>

        </td>

        <td class="ptitle"><?php echo($problem->defunct); ?></td>

    </tr>
<?php endforeach;?>

</tbody>
</table>
