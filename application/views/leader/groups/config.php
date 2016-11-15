<div class="row">
<div class="col-md-8">
<table class="table table-striped">
    <thead>
    <tr>
        <th><?php echo(__('leader.group.configure.stage')); ?></th>
        <th><?php echo(__('leader.group.configure.difficulty')); ?></th>
        <th><?php echo(__('leader.group.configure.problem_num')); ?></th>
        <th><?php echo(__('leader.group.configure.problem_passed')); ?></th>
        <?php echo "$num1";?>

    </tr>
    </thead>
    <?php for($i = 1; $i <= $levelnum; $i++){ ?>
        <tr>
        <td>
            <div class="form-group"><?php echo $i; ?></div>
        </td>
        <td>
            <div class="form-group">
                <select type="text" class="form-control difficulty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>

                </select>
            </div></td>
        <td>
            <div class="form-group">
                <input type="text" class="form-control problem_num">
            </div>
        </td>
        <td>
            <div class="form-group">
                <input type="text" class="form-control problem_passed">
            </div>
        </td>
        </tr>
    <?php } ?>
        <tr>
            <td colspan='4'><button class="addStage btn btn-default" onclick="add()">添加阶段</button></td>
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
                <input type="text" class="form-control level_num">
            </div>
        </td>
    </tr>
    <?php }?>
</table>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
  <button type="submit" class="submit btn btn-primary">提交</button>
</div>
</div>


<script>
    var s = <?php echo $i; ?>,
        difficulty_num = <?php echo $levelnum; ?>;
    $(".submit").click(function(){
     $.post('<?php e::url("/leader/groups/config");?>',
            {
                data:JSON.stringify(getData())
            },
            function(){
                alert('success');
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
            problem_passed = $('.problem_passed');
        for (var i = 1; i <= difficulty.length; i++) {
            stagelevel[i] = difficulty.eq(i-1).val();
            shownum[i] = problem_num.eq(i-1).val();
            passnum[i] = problem_passed.eq(i-1).val();
        };
        for (var i = 1; i <= difficulty_num; i++) {
            levelnum[i] = level_num.eq(i-1).val();
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
        $(".addStage").parent().parent().before('<tr><td><div class="form-group">'+(s++)+'</div></td><td><div class="form-group"><select type="text" class="form-control difficulty"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></div></td><td><div class="form-group"><input type="text" class="form-control problem_num"></div></td><td><div class="form-group"><input type="text" class="form-control problem_passed"></div></td></tr>');

    }



</script>


