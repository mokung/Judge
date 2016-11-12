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
<div id="main" style="width: 600px;height:400px;"></div>
<script type="text/javascript">
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));

    // 指定图表的配置项和数据
    var option = {
        title: {
            text: 'ECharts 入门示例'
        },
        tooltip: {},
        legend: {
            data:['销量']
        },
        xAxis: {
            data: ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"]
        },
        yAxis: {},
        series: [{
            name: '销量',
            type: 'bar',
            data: [5, 20, 36, 10, 10, 20]
        }]
    };

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);
</script>
<?php echo(View::factory('block/pager', array('base_url' => '/admin/user', 'total' => $total)));?>
