<!--内页-->
<!--您还在等待？-->
<form id="form1" name="form1" method="post" action="<?php echo sys_href($params['id'],'form_action');?>">
<div class="attract_t2">
    <div class="attract_t2_in">
        <span>· 您还在等待? ·</span>
        <label>Are you just waiting</label>
    </div>
</div>
<div class="attract5">
    <div class="attract5_t">把自己铸造成器，方才可以希望有益于社会。真实的为我，便是最有益的为人。</div>

    <div class="attract5_m">



        <div class="clear"></div>
        <div class="txb1">
            <div class="txb1_l">学员姓名</div>
            <div class="txb1_r">
                <input type="text" class="txt1" placeholder="请输入学员姓名" id="name">
            </div>
        </div>
        <div class="txb1">
            <div class="txb1_l">选择性别</div>
            <div class="txb1_r">
                <select id="sex" style="width: 100%;">
                    <option value="-1">请选择性别</option>
                    <option value="女">女</option>
                    <option value="男">男</option>
                </select>
            </div>
        </div>
        <div class="txb1">
            <div class="txb1_l">报读专业</div>
            <div class="txb1_r">
                <select id="subject" style="width: 100%;">
                    <option value="-1">请选择专业</option>
                    <option value="播音主持">播音主持</option>
                    <option value="编导">编导</option>
                    <option value="摄影摄像">摄影摄像</option>
                    <option value="表演">表演</option>
                </select>
            </div>
        </div>
        <div class="txb1">
            <div class="txb1_l">本人电话</div>
            <div class="txb1_r">
                <input type="text" class="txt1" placeholder="请输入本人电话" id="myPhone">
            </div>
        </div>
        <div class="txb1">
            <div class="txb1_l">老师电话</div>
            <div class="txb1_r">
                <input type="text" class="txt1" placeholder="请输入班主任电话" id="techPhone">
            </div>
        </div>
        <div class="txb1">
            <div class="txb1_l">在读学校</div>
            <div class="txb1_r">
                <input type="text" class="txt1" placeholder="请输入在读学校" id="school">
            </div>
        </div>
        <div class="txb1">
            <div class="txb1_l">年级班级</div>
            <div class="txb1_r">
                <input type="text" class="txt1" placeholder="请输入年级班级" id="grade">
            </div>
        </div>
        <div class="txb1">
            <div class="txb1_l">学籍所在</div>
            <div class="txb1_r">
                <input type="text" class="txt1" placeholder="请输入学籍所在地" id="city">
            </div>
        </div>
        <div class="txb1">
            <div class="txb1_l">本人身高</div>
            <div class="txb1_r">
                <input type="text" class="txt1" placeholder="请输入本人身高" id="high">
            </div>
        </div>
        <div class="txb1">
            <div class="txb1_l">身份证号</div>
            <div class="txb1_r">
                <input type="text" class="txt1" placeholder="请输入身份证号" id="cdid">
            </div>
        </div>
        <div class="txb1">
            <div class="txb1_l">文 理 科</div>
            <div class="txb1_r">
                <select style="width: 100%;" id="subjectType">
                    <option value="-1">请选择文理科</option>
                    <option value="文科">文科</option>
                    <option value="理科">理科</option>
                </select>
            </div>
        </div>
        <div class="txb1">
            <div class="txb1_l">电子邮箱</div>
            <div class="txb1_r">
                <input type="text" class="txt1" placeholder="请输入电子邮箱" id="mail">
            </div>
        </div>


        <div class="clear"></div>
        <div class="txb2">
            <div class="txb1_l">家庭地址</div>
            <div class="txb1_r2">
                <textarea placeholder="请输入家庭地址" id="address"></textarea>
            </div>
        </div>
        <div class="attract_btn"><input type="image" src="<?php echo $tag['path.skin']; ?>images/attract_btn.png" /></div>

        <div class="txb2">
            <div class="txb1_l">验证码</div>
            <div class="txb1_r2">
                <input type="text" name="checkcode">&nbsp;
                <img src="<?php echo URLREWRITE? '/':'./'; ?>inc/verifycode.php" /></div>
        </div>
        <input id="msg" name="content" style="display: none"/>
    </div>
    <div class="attract5_b">其他详情请咨询服务热线：0757-82360855</div>
</div>
</form>


<!--带搜索的select-->
<link rel="stylesheet" href="<?php echo $tag['path.skin']; ?>css/tinyselect.css">
<style>.searchcontainer{display:none;}</style>
<!--带搜索的select js-->
<script src="<?php echo $tag['path.skin']; ?>js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php echo $tag['path.skin']; ?>js/tinyselect.js"></script>
<script>
    /* This parser won't respect "---" selection */
    function dataParserA(data, selected) {
        retval = [ { val: "-1" , text: "---" } ];

        data.forEach(function(v){
            if(selected == "-1" && v.val == 3)
                v.selected = true;
            retval.push(v);
        });

        return retval;
    }

    /* This parser let's the component to handle selection */
    function dataParserB(data, selected) {
        retval = [ { val: "-1" , text: "---" } ];
        data.forEach(function(v){ retval.push(v); });
        return retval;
    }

    /* Create select elements */
    $("#sex").tinyselect();
    $("#subject").tinyselect();
    $("#subjectType").tinyselect();

    $(function(){
        $("form").submit(function(e){
            var msg='学员姓名：'+$('#name').val()+'，';
            msg+='性别：'+$('#sex').val()+'，';
            msg+='报读专业：'+$('#subject').val();
            msg+='本人电话：'+$('#myPhone').val();
            msg+='老师电话：'+$('#techPhone').val();
            msg+='在读学校：'+$('#school').val();
            msg+='年级班级：'+$('#grade').val();
            msg+='学籍所在：'+$('#city').val();
            msg+='本人身高：'+$('#high').val();
            msg+='身份证号：'+$('#cdid').val();
            msg+='文理科：'+$('#subjectType').val();
            msg+='电子邮箱：'+$('#mail').val();
            msg+='家庭地址：'+$('#address').val();

            $('#msg').val(msg);
            console.log(msg);
            //$form.submit();
            return true;
        });
    });
</script>