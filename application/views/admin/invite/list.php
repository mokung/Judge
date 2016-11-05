<ul class="pagination problem-pagination">
    <?php for($i = 1; $i <= $pages; $i++): ?>
        <li<?php if($i == Request::$current->param('id')):?> class="active"<?php endif;?>><a href="<?php e::url("/admin/invite/index/{$i}");?>"><?php echo($i);?></a></li>
    <?php endfor;?>
</ul>
<table class="table table-striped">
    <thead>
    <tr>
        <th>组ID</th>
        <th>邀请码</th>
        <th>类型</th>
        <th>剩余次数</th>
        <th>创建时间</th>
        <th><?php echo($pages); ?></th>
    </tr>
    </thead>
<?php /* @var Model_Problem[] $problem_list */ foreach($problem_list as $p):?>
<tr>
<td><?php echo $p->group_id;?></td>
<td><?php echo $p->invited_code;?></td>
<td><?php echo($p->type);?></td>
<td><?php echo($p->num);?></td>
<td><?php echo($p->createtime);?></td>


<td><a class="edit-link" href="<?php e::url("/admin/problem/edit/{$p->group_id}");?>"><?php echo(__('admin.problem.list.edit')); ?></a></td>
<td><a class="edit-link" href="<?php e::url("/admin/problem/edit/{$p->group_id}");?>"><?php echo(__('delete')); ?></a></td>
<?php endforeach;?>
</table>
<script type="text/javascript">
    function check_defunct(problem_id)
    {
        var elem = $('#defunct-' + problem_id);
        if (elem.html() == '<?php echo(__('Y')); ?>')
        {
            elem.removeClass('btn-success');
            elem.addClass('btn-danger');
        } else {
            elem.removeClass('btn-danger');
            elem.addClass('btn-success');
        }
    }
    $(function(){
       $('.dp').each(function(){
           var problem_id = $(this).attr('data-value');
           check_defunct(problem_id);
       })
    });
    $('a.dp').click(function(){
        var problem_id = $(this).attr('data-value');
        console.log(problem_id);
        var user_ok = confirm('<?php echo(__('admin.problem.list.sure_to_change_defunct?')); ?>');
        if (user_ok)
        {
            var url = '/admin/problem/defunct';
            $.getJSON(url, {'problem_id': problem_id}, function(response){

                console.log(response);
                var elem = $('#defunct-' + problem_id);
                elem.html(response.result);

                check_defunct(problem_id);
            })
        }
    });
</script>
