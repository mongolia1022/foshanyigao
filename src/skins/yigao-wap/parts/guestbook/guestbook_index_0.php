<form id="form1" name="form1" method="post" action="<?php echo sys_href($params['id'],'form_action');?>">

<div class="weui-cells weui-cells_form" style="margin-top:0;">

    <div class="weui-cell">
        <div class="weui-cell__hd"><label class="weui-label">学员姓名</label></div>
        <div class="weui-cell__bd">
            <input class="weui-input" type="text" placeholder="请输入学员姓名" id="name">
        </div>
    </div>

    <div class="weui-cell weui-cell_select">
        <div class="weui-cell__bd">
            <select class="weui-select" name="select1" id="sex">
                <option selected="" value="1">选择性别</option>
                <option value="2">男</option>
                <option value="3">女</option>
            </select>
        </div>
    </div>

    <div class="weui-cell weui-cell_select">
        <div class="weui-cell__bd">
            <select class="weui-select" id="subject">
                <option selected="" value="1">报读专业</option>
                <option value="2">播音主持</option>
                <option value="3">编导</option>
                <option value="4">摄影摄像</option>
                <option value="5">表演</option>
            </select>
        </div>
    </div>

    <div class="weui-cell">
        <div class="weui-cell__hd"><label class="weui-label">本人电话</label></div>
        <div class="weui-cell__bd">
            <input class="weui-input" type="text" placeholder="请输入本人电话" id="myPhone">
        </div>
    </div>

    <div class="weui-cell">
        <div class="weui-cell__hd"><label class="weui-label">老师电话</label></div>
        <div class="weui-cell__bd">
            <input class="weui-input" type="text" placeholder="请输入老师电话" id="techPhone">
        </div>
    </div>

    <div class="weui-cell">
        <div class="weui-cell__hd"><label class="weui-label">在读学校</label></div>
        <div class="weui-cell__bd">
            <input class="weui-input" type="text" placeholder="请输入在读学校" id="school">
        </div>
    </div>

    <div class="weui-cell">
        <div class="weui-cell__hd"><label class="weui-label">年级班级</label></div>
        <div class="weui-cell__bd">
            <input class="weui-input" type="text" placeholder="请输入年级班级" id="grade">
        </div>
    </div>

    <div class="weui-cell">
        <div class="weui-cell__hd"><label class="weui-label">学籍所在</label></div>
        <div class="weui-cell__bd">
            <input class="weui-input" type="text" placeholder="请输入学籍所在" id="city">
        </div>
    </div>

    <div class="weui-cell">
        <div class="weui-cell__hd"><label class="weui-label">本人身高</label></div>
        <div class="weui-cell__bd">
            <input class="weui-input" type="text" placeholder="请输入本人身高" id="high">
        </div>
    </div>


    <div class="weui-cell">
        <div class="weui-cell__hd"><label class="weui-label">身份证号</label></div>
        <div class="weui-cell__bd">
            <input class="weui-input" type="text" placeholder="请输入身份证号" id="cdid">
        </div>
    </div>

    <div class="weui-cell weui-cell_select">
        <div class="weui-cell__bd">
            <select class="weui-select" id="subjectType">
                <option selected="" value="1">选择文理科</option>
                <option value="2">文科</option>
                <option value="3">理科</option>
            </select>
        </div>
    </div>

    <div class="weui-cell">
        <div class="weui-cell__hd"><label class="weui-label">电子邮箱</label></div>
        <div class="weui-cell__bd">
            <input class="weui-input" type="text" placeholder="请输入电子邮箱" id="mail">
        </div>
    </div>

    <div class="weui-cell">
        <div class="weui-cell__hd"><label class="weui-label">家庭地址</label></div>
    </div>
    <div class="weui-cells weui-cells_form" style="margin-top:0;">
        <div class="weui-cell">
            <div class="weui-cell__bd">
                <textarea class="weui-textarea" placeholder="请输入家庭地址" rows="3" id="address"></textarea>
            </div>
        </div>
    </div>

    <div class="txb2">
        <div class="txb1_l">验证码</div>
        <div class="txb1_r2">
            <input type="text" name="checkcode">&nbsp;
            <img src="<?php echo URLREWRITE? '/':'./'; ?>inc/verifycode.php" /></div>
    </div>
    <input id="msg" name="content" style="display: none"/>

</div>
    <div class="weui-btn-area" style="margin-bottom:10px;">
        <a class="weui-btn weui-btn_primary" href="javascript:" id="submitBtn">确定提交</a>
    </div>
</form>
<script>

$(function() {
    $("form").submit(function (e) {
        var msg = '学员姓名：' + $('#name').val() + '，';
        msg += '性别：' + $('#sex').val() + '，';
        msg += '报读专业：' + $('#subject').val();
        msg += '本人电话：' + $('#myPhone').val();
        msg += '老师电话：' + $('#techPhone').val();
        msg += '在读学校：' + $('#school').val();
        msg += '年级班级：' + $('#grade').val();
        msg += '学籍所在：' + $('#city').val();
        msg += '本人身高：' + $('#high').val();
        msg += '身份证号：' + $('#cdid').val();
        msg += '文理科：' + $('#subjectType').val();
        msg += '电子邮箱：' + $('#mail').val();
        msg += '家庭地址：' + $('#address').val();

        $('#msg').val(msg);
        console.log(msg);
//$form.submit();
        return true;
    });

    $('#submitBtn').click(function(){
        $("form").submit();
    });
});
</script>