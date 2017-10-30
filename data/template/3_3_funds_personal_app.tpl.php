<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('personal_app');?><?php include template('common/header'); ?><style type="text/css">
    .app_funds_title{text-align: center;font-size: 22px;padding:10px;}
    .app_funds_reason{text-align: center;font-size: 20px;margin-top: 10px;}
    .app_funds_reason textarea{vertical-align: middle;}
    .app_funds_name{width: 338px;height: 32px;margin-left: 259px;font-size: 20px;}
    .curtime{border:none;outline:none;font-size: 22px;}
    .app_funds_date{font-size: 20px;margin-left: 259px;padding-top: 10px;}
    .submit_apply{text-align: center;margin-top: 20px;}
    .submit_apply input{font-size: 19px;line-height: 10px;margin: 10px;}
    .funds_list{margin-left: 20px;font-size: 20px;}
</style>

    <h1 class="app_funds_title">个人使用购买物资申请</h1>
    <form action="funds.php?mod=index&amp;action=personal_app" method="post" enctype="multi/form-data">
        <div class="app_funds_name"><span>申&ensp;请&ensp;人：</span><?php echo $_G['username'];?></div>
        <div class="app_funds_date"><span>申请日期：</span><input id="curapptime" class="curtime" name="personalApp_date"/></div>
        <div class="app_funds_date"><span>归还日期：</span><input type="date" class="curtime" name="personalApp_return"/></div>
        <div class="app_funds_reason"><span>申请事由：</span><textarea type="text" name="personalApp_reason" rows="2" cols="64" required></textarea></div>
        <div class="submit_apply"><input type="submit" value="提交申请" name="tijiao" /><a class="funds_list" href="funds.php?mod=index&amp;action=personal_list">查看个人使用物资申请记录</a></div>
    </form>

<script type="text/javascript">
        var in_1 = document.getElementById('curapptime');
        function showTime(){
          var date = new Date();
          var year = date.getFullYear();
          var month = date.getMonth() + 1;
          var day = date.getDate();
          var hour = date.getHours();
          var minute = date.getMinutes();
          var second = date.getSeconds();
          if(hour < 10){
            hour = '0' + hour;
          }
          if(minute < 10){
            minute = '0' + minute;
          }
          if(second < 10){
            second = '0' + second;
          }
          var in_1 = document.getElementById('curapptime');
          in_1.value = year + '/' + month + "/" + day + ' ' + ' ' + hour + ':' + minute + ':' + second;
          setTimeout(showTime,1000);
        }
        showTime();
</script> <?php include template('common/footer'); ?>