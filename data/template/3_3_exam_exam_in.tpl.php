<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('exam_in');?><?php include template('common/header'); ?> 
<style type="text/css">
    .divForm{border: 2px solid #CDCDC1;width: 600px;height:520px;margin: 10px auto;text-align: center;font-size: 18px;}
    .wri_t{font-size: 24px;text-align: center;}
    .topic{width:335px;}
    .space{margin-left: 65px;}
    .space_d{margin-left: 36px;}
    .answerA{width:324px;}
    .answerB,.answerC,.answerD{width:324px;}
    input{margin-bottom: 15px;}
    .btn{background-color: #555555;color:#fff;border-radius: 12px;padding:10px;}
</style>
    <div class="divForm">
        <form action="exam.php?mod=index&amp;action=check_exam" method="post" enctype="multi/form-data" >
            <span class="wri_t">录入考题</span><br><span style="float:right;padding-right:100px;">出题人：<?php echo $_G['username'];?></span><br>
            题目方向：<input type="radio" name="direction" value="前端"/>前端
                      <input type="radio" name="direction" class="space" value="后端"/>后端
                      <input type="radio" name="direction" class="space" value="安卓"/>安卓<br>
            题目类型：<input type="radio" name="mold" value="单选" />单选
                      <input type="radio" name="mold" class="space" value="多选"/>多选
                      <input type="radio" name="mold" class="space" value="其他"/>其他<br>
            难度系数：<input type="radio" name="difficulty" value="1" />1
                      <input type="radio" name="difficulty" class="space_d" value="2"/>2
                      <input type="radio" name="difficulty" class="space_d" value="3"/>3
                      <input type="radio" name="difficulty" class="space_d" value="4"/>4
                      <input type="radio" name="difficulty" class="space_d" value="5"/>5<br>
            题目：<input type="text" name="topic" class="topic" /><br>
            选项：A<input type="text" name="optionA" class="answerA" /><br>
                  &emsp;&emsp;&emsp;B<input type="text" name="optionB" class="answerB" /><br>
                  &emsp;&emsp;&emsp;C<input type="text" name="optionC" class="answerC" /><br>
                  &emsp;&emsp;&emsp;D<input type="text" name="optionD" class="answerD" /><br>
            答案：<input type="text" name="answer" class="topic" /><br>
            解析：<input type="text" name="explains" class="topic" /><br>
            <input type="submit" value="提交审核" name="checking" class="btn" />
        </form>   
    </div><?php include template('common/footer'); ?>