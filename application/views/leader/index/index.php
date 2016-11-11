<div class="dashboard-widget row">
    <div class="col-md-offset-3 col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading text-center"><?php echo(__('leader.index.index.invitation')); ?></div>
            <div class="panel-body">
                <form role="form" class="form-horizontal col-sm-12" action="<?php e::url('/leader/index/code');?>">
                    <input type="hidden" name="type" id="type" value="1">
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <input type="number" class="form-control" name="num" value=“1” placeholder="请输入生效次数">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <button id="lead_in_sub" type="submit" class="btn btn-primary col-sm-12">生成邀请码</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="alert alert-info col-sm-offset-2 col-sm-8" role="alert">

                            <?php if(isset( $incode ))
                                echo $incode;
                                else
                                    echo "此处生成邀请码";
                            ?>


                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#lead_in_sub').click(function(){
        var is_num = /(^[1-9]\d*$)/;
        var form = $(this).parents("form").get(0),
            num = form.num.value;
        if(num!=""||!is_num.test(num)){
            alert("输入信息有误！");
            return false;
        }
        return true;

    });
</script>
