<div class="dashboard-widget row">
    <div class="carousel slide col-md-md-12">
        <div id="user-form-submited" class="carousel-inner" style="height:400px;"></div>

        <a id="g-l" class="left carousel-control user-left" style="width:6%; color:#000;background:transparent;">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a id="g-r" class="right carousel-control user-right" style="width:6%; color:#000;background:transparent;">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<div class="dashboard-widget row">
    <div class="carousel slide col-md-md-12">
        <div id="user-form-addscore" class="carousel-inner" style="height:400px;"></div>

        <a class="left carousel-control user-left" style="width:6%; color:#000;background:transparent;">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control user-right" style="width:6%; color:#000;background:transparent;">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<script type="text/javascript">
;(function(){
     //获得当前时间
    var now = new Date();
    var date_addstore = (now.getFullYear()+"-"+((now.getMonth()+1)<10?"0":"")+(now.getMonth()+1)),
        date_submited = (now.getFullYear()+"-"+((now.getMonth()+1)<10?"0":"")+(now.getMonth()+1));
    // 基于准备好的dom，初始化echarts实例
    var $user_addscore = echarts.init($('#user-form-addscore').get(0));//用户每日增分量
    var option_addscore = {
        title:{
            text:"<?php echo __('leader.user.list.increase'); ?>",
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
            data:["<?php echo __('leader.user.list.increasing'); ?>"]
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
            name:"<?php echo __('leader.user.list.score'); ?>",
        },
        series: [{
                name: "<?php echo __('leader.user.list.increasing'); ?>",
                type: 'line',
            }]
    };
    var $user_submited = echarts.init($('#user-form-submited').get(0));//用户每日增分量
    var option_submited = {
        title:{
            text:"<?php echo __('leader.user.list.submit_perday'); ?>",
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
            data:["<?php echo __('leader.user.list.total_submit'); ?>",'00:00-05:00','05:00-11:00','12:00-17:00','17:00-21:00','21:00-00:00']
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
            name:"<?php echo __('leader.user.list.submit'); ?>",
        },
        series: [{
                name: "<?php echo __('leader.user.list.total_submit'); ?>",
                type: 'line',
                data:[],
            },{
                name:'00:00-05:00',
                type: 'bar',
                stack:1,
                data:[]
            },{
                name:'05:00-11:00',
                type: 'bar',
                stack:1,
                data:[]
            },{
                name:'12:00-17:00',
                type: 'bar',
                stack:1,
                data:[]
            },{
                name:'17:00-21:00',
                type: 'bar',
                stack:1,
                data:[]
            },{
                name:'21:00-00:00',
                type: 'bar',
                stack:1,
                data:[]
            }]
    };
    // 使用刚指定的配置项和数据显示图表。
    // $user_addscore.setOption(option_addscore);

    // $user_submited.setOption(option_submited);
    getUserSubmited();
    getUserAddScore();
    //获得用户增数据
    function getUserAddScore(button,flag){
        button && $(button).unbind('click');
        $user_addscore.showLoading();
        option_addscore.title.subtext = date_addstore;
        $.ajax({
            url: '<?php e::url('/admin/user/addscore/');?>?user=<?php echo($title)?>&date='+date_addstore,
            type:'post',
            dataType:'json',
            success:function(data){
                var data_x = new Array(),//时间轴坐标
                    data_y = new Array();//提交量坐标

                var json={};
                var i=0,
                    len = data.length,//数据长度
                    data_item,
                    data_len;
                if(len>0){
                    var data_len = $.parseJSON(data[len-1]).hasOwnProperty('lastmonth')? (len-1):len;
                    for(i=0; i<data.length; i++){
                        data_item = $.parseJSON(data[i]);
                        var time = data_item.data;
                        if(i>=1){
                            json[time] = parseInt(data_item.score) - parseInt($.parseJSON(data[i-1]).score)
                        }else{
                            json[time] = (data_len == len) ? parseInt(data_item.score):(parseInt(data_item.score)-$.parseJSON(data[len-1]).lastmonth);
                        }
                    }
                    for(var cc in json){
                        data_x.push(cc);
                        data_y.push(json[cc]);
                    }
                }
                option_addscore.xAxis.data = data_x;
                option_addscore.series[0].data = data_y;
                $user_addscore.setOption(option_addscore);
                $user_addscore.hideLoading();
                if(flag==1){
                    $(button).bind('click',prevMonth);
                }else{
                    $(button).bind('click',nextMonth);
                }
            }
        });
    }
    //获得用户每日提交量
    function getUserSubmited(button,flag){
        button && $(button).unbind('click');
        $user_submited.showLoading();
        option_submited.title.subtext = date_submited;
        $.ajax({
            url: '<?php e::url('/admin/user/submited/');?>?user=<?php echo($title)?>&date='+date_submited,
            type:'post',
            dataType:'json',
            success:function(data){
                 var data_x = new Array();//时间轴坐标
                 var i,j;
                 var json = {
                    '0':0,
                    '1':0,
                    '2':0,
                    '3':0,
                    '4':0
                 };//存储各个时间段的提交量
                 var score_sum = 0;//记录当天总提交两
                 //初始化series里的数据
                 for(i=0; i<6; i++){
                    option_submited.series[i].data = new Array();
                 }
                 for(i=0; i<data.length; i++){
                    score_sum = 0;
                    json = {
                        '1':0,
                        '2':0,
                        '3':0,
                        '4':0,
                        '5':0
                    };
                    data_item = $.parseJSON(data[i]);
                    var time = data_item.data.split(' ')[0];
                    data_x.push(time);
                    var temp = data_item.during_time.substring(1,data_item.during_time.length-1).split(',');
                    for(j=0; j<temp.length; j++){
                        var current = temp[j].substring(1,temp[j].length-1);
                        if(checkTime("00:00","05:00",current)){
                            json['1']++;
                        }else if(checkTime("05:00","11:00",current)){
                            json['2']++;
                        }else if(checkTime("11:00","17:00",current)){
                            json['3']++;
                        }else if(checkTime("17:00","21:00",current)){
                            json['4']++;
                        }else if(checkTime("21:00","24:00",current)){
                            json['5']++;
                        }
                    }
                    for(var cc in json){
                        option_submited.series[cc].data.push(json[cc]);
                        score_sum += json[cc]
                    }
                    option_submited.series[0].data.push(score_sum);
                 }
                 option_submited.xAxis.data = data_x;
                 $user_submited.setOption(option_submited);
                 $user_submited.hideLoading();
                 if(flag==1){
                    $(button).bind('click',prevMonth);
                 }else{
                 $(button).bind('click',nextMonth);
                 }
            }
        });
    }
    function checkTime(begin,end,current) {
        var d = new Date();
        var current = parseInt(current.split(':')[0])*60+parseInt(current.split(':')[1]);
        var begin = begin.split(':');
        var end = end.split(':');
        var b = parseInt(begin[0]) * 60 + parseInt(begin[1]);
        var e = parseInt(end[0]) * 60 + parseInt(end[1]);
        if (current >= b && current < e) return true;
        else return false;
    }
    function prevMonth(){
        if($(this).prev().attr('id')=='user-form-submited'){
            var year = parseInt(date_submited.split('-')[0]),
                month = parseInt(date_submited.split('-')[1]);
            if(month==1){
                month = 12;
                year--;
            }else{
                month--;
            }
            date_submited = year+'-'+((month>9)?month:('0'+month));
            getUserSubmited(this,1);
        }else{
            var year = parseInt(date_addstore.split('-')[0]),
                month = parseInt(date_addstore.split('-')[1]);
            if(month==1){
                month = 12;
                year--;
            }else{
                month--;
            }
            date_addstore = year+'-'+((month>9)?month:('0'+month));
            getUserAddScore(this,1);
        }
    }
    function nextMonth(){
        if($(this).prevAll('div').attr('id')=='user-form-submited'){
            var year = parseInt(date_submited.split('-')[0]),
                month = parseInt(date_submited.split('-')[1]);
            if(month==12){
                month = 1;
                year++;
            }else{
                month++;
            }
            date_submited = year+'-'+((month>9)?month:('0'+month));
            getUserSubmited(this,2);
        }else{
            var year = parseInt(date_addstore.split('-')[0]),
                month = parseInt(date_addstore.split('-')[1]);
            if(month==12){
                month = 1;
                year++;
            }else{
                month++;
            }
            date_addstore = year+'-'+((month>9)?month:('0'+month));
            getUserAddScore(this,2);
        }
    }
    $('.user-left').on('click',prevMonth);
    $('.user-right').on('click',nextMonth);
})();
</script>