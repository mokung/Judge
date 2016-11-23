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
    <?php for($i = 1; $i <= $levelnum; $i++){ ?>
        <tr class="<?php echo 'stage'.$i ?>">
        <td>
            <div class="form-group"><?php echo $i; ?></div>
        </td>
        <td>
            <div class="form-group">
                <select type="text" class="form-control difficulty">
                    <option value="1" <?php if($i == 1): ?>selected<?php endif; ?>>1</option>
                    <option value="2" <?php if($i == 2): ?>selected<?php endif; ?>>2</option>
                    <option value="3" <?php if($i == 3): ?>selected<?php endif; ?>>3</option>
                    <option value="4" <?php if($i == 4): ?>selected<?php endif; ?>>4</option>
                    <option value="5" <?php if($i == 5): ?>selected<?php endif; ?>>5</option>
                </select>
            </div></td>
        <td>
            <div class="form-group">
                <input type="text" class="form-control problem_num" placeholder="<?php echo $default_problem; ?>">
            </div>
        </td>
        <td>
            <div class="form-group">
                <input type="text" class="form-control problem_passed" placeholder="<?php echo $default_passed; ?>">
            </div>
        </td>
        </tr>
    <?php } ?>
        <tr>
            <td colspan='2'><button class="addStage btn btn-default" onclick="add()"><?php echo __('leader.group.configure.add_stage'); ?></button></td>
            <td colspan='2'><button class="btn btn-default" onclick="deleteStage()"><?php echo __('leader.group.configure.delete_stage'); ?></button></td>
        </tr>
</table>
</div>
<div class="col-md-4">
<table class="table table-striped">
    <thead>
    <tr>
        <th><?php echo(__('leader.group.configure.difficulty')); ?></th>
        <th><?php echo(__('leader.group.configure.score')); ?></th>
    </tr>
    </thead>
    <?php for($i = 1; $i <= $levelnum; $i ++){?>
    <tr>
        <td><?php echo $i; ?></td>
        <td>
            <div class="form-group">
                <input type="text" class="form-control level_num" placeholder="<?php echo $default_score[$i-1]; ?>">
            </div>
        </td>
    </tr>
    <?php }?>
</table>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
  <button type="submit" class="submit btn btn-primary"><?php echo __('leader.group.configure.submit'); ?></button>
</div>
</div>


<script>
    var s = <?php echo $i; ?>,
        default_num = s,
        difficulty_num = <?php echo $levelnum; ?>;
    $(".submit").click(function(){
     $.post('<?php e::url("/leader/groups/config");?>',
            {
                data:JSON.stringify(getData())
            },
            function(){
                window.location.href = '<?php e::url("/leader/groups/list");?>';
            }
        );
    });
    function getData(){
        var res = {},
            stagelevel = {},
            shownum = {},
            passnum = {},
            levelnum = {},
            difficulty = $('.difficulty'),
            problem_num = $('.problem_num'),
            level_num = $('.level_num'),
            problem_passed = $('.problem_passed'),
            is_num = /(^[1-9]\d*$)/;;
        for (var i = 1; i <= difficulty.length; i++) {
            stagelevel[i] = difficulty.eq(i-1).val() || difficulty.eq(i-1).attr('placeholder');
            shownum[i] = problem_num.eq(i-1).val() || problem_num.eq(i-1).attr('placeholder');
            passnum[i] = problem_passed.eq(i-1).val() || problem_passed.eq(i-1).attr('placeholder');
            if(!is_num.test(stagelevel[i]) || !is_num.test(shownum[i]) || !is_num.test(passnum[i])){
                alert("<?php echo __('leader.group.configure.input_nonumber'); ?>");
                return;
            }
        };
        for (var i = 1; i <= difficulty_num; i++) {
            levelnum[i] = level_num.eq(i-1).val() || level_num.eq(i-1).attr('placeholder');
            if(!is_num.test(levelnum[i])){
                alert("<?php echo __('leader.group.configure.input_nonumber'); ?>");
                return;
            }
        };
        res.stagenum = s-1;
        res.stagelevel = stagelevel;
        res.shownum = shownum;
        res.passnum = passnum;
        res.levelscore    = levelnum;
        // console.log(JSON.stringify(res));
        return res;
    }

    function add(){
        $(".addStage").parent().parent().before('<tr class="stage'+s+'""><td><div class="form-group">'+s+'</div></td><td><div class="form-group"><select type="test" class="form-control difficulty"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5" selected>5</option></select></div></td><td><div class="form-group"><input type="text" class="form-control problem_num"  placeholder="<?php echo $default_problem; ?>"></div></td><td><div class="form-group"><input type="text" class="form-control problem_passed"  placeholder="<?php echo $default_passed; ?>"></div></td></tr>');
        s ++;
    }

    function deleteStage(){
        if(s - 1 < default_num){
            alert("<?php echo __('leader.group.configure.least_stage'); ?>");
            return;
        }
        $('.stage'+(--s)).remove();
    }


</script>


