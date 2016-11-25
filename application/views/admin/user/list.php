<div class="dashboard-widget row">
    <div class="col-sm-12">
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?php echo(__('admin.user.list.user_id')); ?></th>
                <th><?php echo(__('admin.user.list.stage')); ?></th>
                <th><?php echo(__('admin.user.list.solved')); ?></th>
                <th><?php echo(__('admin.user.list.submit')); ?></th>
                <th><?php echo(__('admin.user.list.ratio')); ?></th>
                <th><?php echo(__('admin.user.list.reg_time')); ?></th>
                <th><?php echo(__('admin.user.list.accesstime')); ?></th>
                <th><?php echo(__('admin.user.list.op')); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($user_list as $u):?>
                <tr>
                    <td><?php echo HTML::anchor("/admin/user/form?user={$u['user_id']}", $u['user_id']); ?></td>
                    <td><?php echo HTML::chars($u['stage']); ?></td>
                    <td><?php echo $u['solved']; ?></td>
                    <td><?php echo $u['submit']; ?></td>
                    <td><?php if($u['solved'] == 0):?>
                    0.00%
                    <?php else: ?>
                    <?php echo sprintf( "%.02lf%%", $u['solved']/$u['submit'] * 100); ?>
                    <?php endif; ?>
                    </td>
                    <td><?php echo $u['reg_time']; ?></td>
                    <td><?php echo $u['accesstime']; ?></td>
                    <td><a class="edit-link" href="<?php e::url("/admin/user/edit/{$u['user_id']}");?>"><?php echo(__('admin.user.list.edit')); ?></a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php echo(View::factory('block/pager', array('base_url' => '/admin/user', 'total' => $total_page)));?>
    </div>
</div>
<div class="dashboard-widget row">
    <div class="carousel slide col-md-md-12">
        <div id="main" class="carousel-inner" style="height:400px;"></div>

        <a id="g-l" class="left carousel-control" style="width:6%; color:#000;background:transparent;">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <!-- <span class="sr-only">Previous</span> -->
        </a>
        <a id="g-r" class="right carousel-control" style="width:6%; color:#000;background:transparent;">
            <span class="glyphicon glyphicon-chevron-right"></span>
<!--             <span class="sr-only">Next</span> -->
        </a>
    </div>
</div>
<script type="text/javascript">
;(function(){
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init($('#main').get(0));
    //获得当前时间
    var now = new Date();
    var date = (now.getFullYear()+"-"+((now.getMonth()+1)<10?"0":"")+(now.getMonth()+1));
    var option = {
        title:{
            show:true,
            textStyle:{
                color:"#000",
                fontFamily: 'sans-serif',
                fontSize:'20',
            },
            textAlign: 'left',
            textBaseline: 'top',
        },
        legend:{
            show:true,
        },
        tooltip:{
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        grid:{
            show:true,
        },
        xAxis:{
            max:10,
            name:"<?php echo __('leader.user.list.time'); ?>",
        },
        yAxis:{
            name:"<?php echo __('leader.user.list.member'); ?>",
        },
    };
    // 使用刚指定的配置项和数据显示图表。
    // myChart.setOption(option);
    myChart.showLoading();
    function getGroupStage(button,flag){
        button&&$(button).unbind('click');
        $.ajax({
            url: '<?php e::url('/admin/groups/status/');?>?id=<?php echo($title)?>&date='+date,
            type:'post',
            dataType:'json',
            success:function(data){
                myChart.hideLoading();
                var item = null,
                    series_item = {},
                    i = 0;
                var legend_data = new Array(),
                    xAxis_data = new Array(),
                    series = new Array();
                for(i=1; i<=data.stage_num; i++){
                    legend_data.push("<?php echo __('leader.user.list.stage'); ?>"+i);
                    series_item.name = "<?php echo __('leader.user.list.stage'); ?>"+i;
                    series_item.type = 'bar';
                    series_item.stack = '1';
                    series_item.data = new Array();
                    series.push(series_item);
                    series_item = {};
                }
                for(var p in data){
                    item = (p.indexOf('-')>-1);
                    if(item){
                        xAxis_data.push('11-'+p);
                        for(i=1; i<=data.stage_num; i++){
                            if(data[p][i]){
                                series[i-1].data.push(data[p][i]);
                            }else{
                                series[i-1].data.push(0);
                            }
                        }
                    }
                }
                option.legend.data = legend_data;
                option.xAxis.data = xAxis_data;
                option.series = series;
                option.title.text = date;
                myChart.setOption(option);
                if(flag==1){
                    $(button).bind('click',prevMonth);
                }else{
                    $(button).bind('click',nextMonth);
                }
            }
        });
    }
    getGroupStage();
    function prevMonth(){
        myChart.showLoading();
        var year = parseInt(date.split('-')[0]),
            month = parseInt(date.split('-')[1]);
        if(month==1){
            month = 12;
            year--;
        }else{
            month--;
        }
        date = year+'-'+((month>9)?month:('0'+month));
        getGroupStage(this,1);
    }
    function nextMonth(){
        myChart.showLoading();
        var year = parseInt(date.split('-')[0]),
            month = parseInt(date.split('-')[1]);
        if(month==12){
            month = 1;
            year++;

        }else{
            month++;
        }
        date = year+'-'+((month>9)?month:('0'+month));
        getGroupStage(this,2);
    }
    $('#g-l').on('click',prevMonth);
    $('#g-r').on('click',nextMonth);
})();
</script>

