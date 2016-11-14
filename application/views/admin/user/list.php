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
            <td><?php echo HTML::anchor("/u/{$u['user_id']}", $u['user_id']); ?></td>
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
<?php echo(View::factory('block/pager', array('base_url' => '/admin/user', 'total' => $total)));?>
<div id="main" class="row" style="height:400px;"></div>
<script type="text/javascript">
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));

    // 指定图表的配置项和数据

    option = {
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        legend: {
            data:['直接访问','邮件营销','联盟广告','视频广告','搜索引擎','百度','谷歌','必应','其他']
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis : [
            {
                type : 'category',
                data : ['周一','周二','周三','周四','周五','周六','周日']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'阶段一',
                type:'bar',
                stack: '广告',
                data:[120, 132, 101, 134, 90, 230, 210]
            },
            {
                name:'阶段二',
                type:'bar',
                stack: '广告',
                data:[220, 182, 191, 234, 290, 330, 310]
            },
            {
                name:'阶段三',
                type:'bar',
                stack: '广告',
                data:[150, 232, 201, 154, 190, 330, 410]
            },
        ]
    };

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);
</script>

