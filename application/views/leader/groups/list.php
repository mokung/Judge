<div class="row">
<div class="col-md-8">
<table class="table table-striped">
    <thead>
    <tr>
        <th><?php echo(__('leader.group.configure.stage')); ?></th>
        <th><?php echo(__('leader.group.configure.difficulty')); ?></th>
        <th><?php echo(__('leader.group.configure.problem_num')); ?></th>
        <th><?php echo(__('leader.group.configure.problem_passed')); ?></th>
    </tr>
    </thead>
    <?php for($i = 1; $i <= $stagenum; $i ++){?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $stagelevel->$i;?></td>
        <td><?php echo $shownum->$i;?></td>
        <td><?php echo $passnum->$i;?></td>
    </tr>
    <?php }?>
</table></div>
<div class="col-md-4">
<table class="table table-striped">
    <thead>
    <tr>
        <th><?php echo(__('leader.group.configure.difficulty')); ?></th>
        <th><?php echo(__('leader.group.configure.score')); ?></th>
    </tr>
    </thead>
    <?php for($i = 1; $i <= $levelnum && $showconfigure; $i ++){ ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $levelscore->$i;?></td>
    </tr>
    <?php }?>
</table>

</div>

</div>
