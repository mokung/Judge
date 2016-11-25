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

<?php print_r($result) ?>




</tbody>
</table>
