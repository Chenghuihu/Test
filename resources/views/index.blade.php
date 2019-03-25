
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" name="viewport" id="viewport" />
    <title>E8招新</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript">
        $(document).ready(
            function() {
                var nowpage = 0;
                //给最大的盒子增加事件监听
                $(".container").swipe(
                    {
                        swipe:function(event, direction, distance, duration, fingerCount) {
                            if(direction == "up"){
                                nowpage = nowpage + 1;

                            }else if(direction == "down"){
                                nowpage = nowpage - 1;
                            }
                            if(nowpage > 4){
                                nowpage = 4;
                            }
                            if(nowpage < 0){
                                nowpage = 0;
                            }
                            $(".container").animate({"top":nowpage * -100 + "%"},400);
                            $(".page").eq(nowpage).addClass("cur").siblings().removeClass("cur");
                        }

                    }

                );

            }

        );
    </script>
    <style>
        .page{
            position: relative;
        }
        .mask{
            width: 80%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        .produce{
            font-size: 19px;
            width: 80%;
            margin: 50px auto;
        }
        .wrap{
            width: 70%;
            margin: 0 auto;
        }
        .wrap select{
            font-family: "微软雅黑";
            background: rgba(0,0,0,0);
            width: 100%;
            height: 40px;
            font-size: 18px;
            text-align: center;
            border: 1px #1a1a1a solid;
            border-radius: 5px;
            color:#e8e8e8;
        }
        .wrap option{
            color: #e8e8e8;
            background: blueviolet;
            line-height: 20px;
        }
        .wrap option:hover{
            background: blueviolet;
        }
        .wrap span{
            display: inline-block;
            margin: 10px 5px;
            border: 1px solid;
            border-radius: 5px;
            padding: 4px;
        }
        .wrap span:hover{
            cursor: pointer;
            background: lightsalmon;
        }
        .btn{
            width: 50%;
            background: none;
            border: 1px solid #f6f6f6;
            color: #f5f5f5;
            line-height: 30px;
            margin-top: 20px;
        }
        input{
            border-radius: 5px;
            outline: none;
            border: none;
            margin: 8px 0;
            padding: 8px;
            width: 70%;
        }
        .alert-danger{
            padding: 20px 0;
            font-size: 17px;
            text-align: center;
        }
    </style>
</head>
<body>
<!--效果html开始-->
<div class="container">
<!--<div class="page page0 cur">
        <div class='mask'>
            <h1 class="animated bounceInLeft">E8工作室招新啦</h1>
            <div class=' animated bounce produce'>
                <p>hello 小伙伴们,不知道你是否对计算机感兴趣呢？别以为学计算机的都是总是掉头发，常年格子衫。</p>
                <p>No No 还不止这些...</p>
            </div>
            <span>点击往下滑了解更多</span>
        </div>
    </div>
    <div class="page page1">
        <div class='mask'>
            <h1>E8是什么?</h1>
            <div class='produce'>
                <p>
                E8 网络工作室是一个以技术为根本，以服务同学为宗旨，坚持不断学习、不断创造、不断创新的理念；最终以实验团队所有成员的价值为最终目标的团队；还是一个相互激励、相互关爱、一起拼搏奋斗的大家庭。
                E8 成员，是一群怀揣着it技术梦想，追求不断超越自我，永远积极乐观、团结友爱的小伙伴们。
                    我们的口号：E8 网络，爱梦想，爱超越！
                    以上为 E8 网络工作室的核心宗旨。
                   </p>
        </div>
        </div>
    </div>
    <div class="page page2">
        <div class='mask'>
            <h1>E8做什么？</h1>
                <div class='produce bounceInUp'>
                <p>我们为全校师生免费维护电脑，定期为同学进行专业性培训，此外我们还为学校和企业开发网站、研发软件等等。</p>
            </div>
        </div>
    </div>
    <div class="page page3">
        <div class='mask'>
            <h1>加入我们有什么好处？</h1>
            <div class="produce">
                <p>1. 学习方面</p>
                <p>团队学习氛围强，学习环境好，能够更好的学习专业技能。</p>
                <p>2. 竞赛方面</p>
                <p>有专业的指导老师以及有经验的学长学姐带领参加比赛，不仅能够学习知识还能拿到荣誉和学分。</p>
                <p>3. 未来方面</p>
                <p>毕业时当所有人为工作、为未来迷茫时，E8团队出去的成员很容易能找到满意的工作，因为在E8团队里他们已经有了一技之长。</p>
            </div>
        </div>
    </div>
    -->
    <div class="page page4">
        <h1>加入方式</h1>
        <form method="post" action="{{ route('users.store') }}">
            {{ csrf_field() }}
            <p><input type="text"name="name"  placeholder="姓名"></p>
            @if ($errors->has('name'))
            <p style="text-align: left; padding-left: 15%; color: #f5f5f5;">{{ $errors->first('name') }}</p>
            @endif
            <p ><input type="text"name="school_number" placeholder="学号"></p>
            @if ($errors->has('school_number'))
           <p style="text-align: left; padding-left: 15%; color: #f5f5f5;">{{ $errors->first('school_number') }}</p>
            @endif
            <p><input type="text"name="class" placeholder="班级"></p>
            @if ($errors->has('class'))
           <p style="text-align: left; padding-left: 15%; color: #f5f5f5;">{{ $errors->first('class') }}</p>
            @endif
            <div class='wrap'>
                <p style='padding: 10px 0;font-size:20px;'>感兴趣的方向：</p>
                <select name="professional" id="">
                    <option value="web前端开发">web前端开发</option>
                    <option value="后端开发">后端开发</option>
                    <option value="UI">UI</option>
                    <option value="Python">Python</option>
                    <option value="其他方向">其他方向</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">提交</button>
        </form>
    </div>
</div>
<!--效果html结束-->

</body>

<script>

</script>
</html>