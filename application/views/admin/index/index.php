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
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading" style="padding:0;border:0;">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active text-center" style="width:50%;"><a href="#new_in" style="border-left:0;border-top:0;margin:0"><?php echo __('admin.index.generate_invitation'); ?></a></li>
                  <li class="text-center" style="width:50%;"><a href="#list_in" style="border-right:0;border-top:0;margin:0"><?php echo __('admin.index.exist_invitation'); ?></a></li>
                </ul>
            </div>
            <div class="panel-body">
                <div class="tab-content" style="min-height:200px;">
                    <div class="tab-pane active" id="new_in" >
                        <form role="form" class="form-horizontal col-sm-12" action="<?php e::url('/admin/index/code');?>">
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-7">
                                    <label class="radio-inline pull-left">
                                        <input type="radio" name="type" id="type" value="1" checked> <?php echo __('admin.index.group_member'); ?>
                                    </label>
                                    <label class="radio-inline pull-right">
                                        <input type="radio" name="type" id="type" value="2"> <?php echo __('admin.index.group_leader'); ?>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-8">
                                <!-- 此处需要组数据option遍历组名称 -->
                                    <select class="form-control" name="id" id="id">
                                        <option><?php echo __('admin.index.choose_group'); ?></option>
                                        <?php foreach($all_group_id as $g):?>
                                        <option value="<?php echo $g['group_id']; ?>"><?php echo $g['group_id']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <input type="number" class="form-control" name="num" placeholder="<?php echo __('admin.index.effective_counts'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <input type="number" class="form-control" name="time" placeholder="<?php echo __('admin.index.effective_time'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <button id="adm_in_su" type="submit" class="btn btn-primary col-sm-12"><?php echo __('admin.index.generate_invitation'); ?></button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="alert alert-info col-sm-offset-2 col-sm-8" role="alert">
                                    <?php if(isset( $code ))
                                        print_r($code);
                                        else
                                            echo  __('admin.index.generate_here');;
                                    ?>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="list_in">
                        <table class="table table-striped">
                                <thead>
                                    <th><?php echo __('admin.index.index.invitation'); ?></th>
                                    <th><?php echo __('admin.index.group'); ?></th>
                                    <th><?php echo __('admin.index.counts'); ?></th>
                                    <th><?php echo __('admin.index.type'); ?></th>
                                    <th><?php echo __('admin.index.time'); ?></th>
                                </thead>
                                <tbody>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#adm_in_su').click(function(){
        var is_num = /(^[1-9]\d*$)/;
        var form = $(this).parents("form").get(0),
            num = form.num.value,
            time = form.time.value,
            group_id = form.id.value;
        if(group_id=='' || num=="" || !is_num.test(num)|| time=="" || !is_num.test(time)){
            alert("<?php echo __('admin.index.input_error'); ?>");
            return false;
        }
        return true;
    });
    function showList(e){
        var $button = $(this);
        var href = $(this).attr("href");
        e.preventDefault();
        // 显示生成邀请码页面，并初始化表单
        if(href=='#new_in'){
            $(href).find('form').get(0).reset();
        }else{
            $button.unbind('click');
            //显示有效的邀请码列表
            $.ajax({
                url: '<?php e::url('/admin/index/list/');?>',
                type:'post',
                dataType:'json',
                error: function(){
                    $button.bind('click',showList);
                },
                success:function(data){
                    $(href).find('tbody').empty();
                    $.each(data, function(index, value) {
                        var value_j = $.parseJSON(value);
                        var tr = '<tr>'+
                                 '<td>'+value_j.code+'</td>'+
                                 '<td>'+value_j.group_id+'</td>'+
                                 '<td>'+value_j.num+'</td>'+
                                 '<td>'+(value_j.type=="1"?"<?php echo __('admin.index.group_member'); ?>":"<?php echo __('admin.index.group_leader'); ?>")+'</td>'+
                                 '<td>'+value_j.cereatetime+'</td>'+
                                 '</tr>';
                        $(href).find('tbody').append(tr);
                    });
                    $button.bind('click',showList);
                }
            });
        }
        $(this).tab('show');
    }
    $('#myTab a').on('click',showList);
</script>
