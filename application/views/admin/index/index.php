<div class="dashboard-widget row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo(__('admin.index.index.rejudge')); ?></div>
            <div class="panel-body">
                <form role="form" action="<?php e::url('/admin/index/rejudge');?>" method="post" class="form-horizontal col-sm-12">
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="type"><?php echo(__('admin.index.index.choose_type')); ?></label>
                        <div class="col-sm-7">
                            <select class="form-control" name="type" id="type">
                                <option value="PROBLEM"><?php echo(__('admin.index.index.problem')); ?></option>
                                <option value="SOLUTION"><?php echo(__('admin.index.index.runid')); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="typeid"><?php echo(__('admin.index.index.id')); ?></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="typeid" id="typeid"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class=" col-sm-offset-4 col-sm-7">
                        <button type="submit" class="btn btn-primary col-sm-12"><?php echo(__('admin.index.index.submit')); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading text-center"><?php echo(__('admin.index.index.rescore')); ?></div>
            <div class="panel-body">
                <form role="form" action="<?php e::url('/admin/index/rescore');?>" method="post" class="form-horizontal col-sm-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-info col-sm-offset-1 col-sm-10"><?php echo(__('admin.index.index.submit')); ?>
                                <span class="glyphicon glyphicon-repeat"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading text-center"><?php echo(__('admin.index.index.invitation')); ?></div>
            <div class="panel-body">
                <form role="form" class="form-horizontal col-sm-12" action="<?php e::url('/admin/index/code');?>">
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-6">
                            <label class="radio-inline pull-left">
                                <input type="radio" name="type" id="type" value="1" checked> 组员
                            </label>
                            <label class="radio-inline pull-right">
                                <input type="radio" name="type" id="type" value="2"> 组长
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                        <!-- 此处需要组数据option遍历组名称 -->
                            <select class="form-control" name="id" id="type">
                                <option>请选择组</option>
                                <option value="stju">交大</option>
                                <option value="第一组">第一组</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <input type="number" class="form-control" name="num" value=“1” placeholder="请输入生效次数">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" class="btn btn-primary col-sm-12">生成邀请码</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="alert alert-info col-sm-offset-2 col-sm-8" role="alert">
                            <?php if(isset( $code ))
                                echo $code;
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
