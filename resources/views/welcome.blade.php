<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <title>登录页面</title>

    <meta name="description" content="User login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

    <!-- text fonts -->
    <link rel="stylesheet" href="../assets/css/ace-fonts.css">

    <!-- ace styles -->
    <link rel="stylesheet" href="../assets/css/ace.min.css">

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="../assets/css/ace-part2.min.css">
    <![endif]-->
    <link rel="stylesheet" href="../assets/css/ace-rtl.min.css">

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="../assets/css/ace-ie.min.css">
    <![endif]-->
    <link rel="stylesheet" href="../assets/css/ace.onpage-help.css">
    <link rel="stylesheet" href="../assets/css/datepicker.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <script src="../assets/js/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            background: url(../images/1.jpg) no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body class="login-layout">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                        <h1>
                            <i class="ace-icon fa fa-leaf green"></i>
                            <span class="red">安阳工学院</span>
                            <span class="white" id="id-text2">心理测评</span>
                        </h1>
                        <h4 class="blue" id="id-company-text">&copy; 安阳工学院</h4>
                    </div>

                    <div class="space-6"></div>

                    <div class="position-relative">
                        <!--登录框-->
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        <i class="ace-icon fa fa-coffee green"></i>
                                    </h4>

                                    <div class="space-6"></div>
                                    <form id="login" method="post" class="form-horizontal" action="{{ url('/login') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">用户名</label>
                                            <div class="col-sm-8">
                                                    <span class="block input-icon input-icon-right">
                                                    <input type="text" class="form-control" name="l-username"
                                                           data-bv-message="用户名不为空"
                                                           data-bv-notempty="true"
                                                           data-bv-notempty-message="用户名不为空"
                                                           data-bv-regexp="true"
                                                           data-bv-regexp-regexp="[a-zA-Z0-9_\.]+"
                                                           data-bv-regexp-message="用户名只允许字母，数字，下划线"
                                                           data-bv-stringlength="true"
                                                           data-bv-stringlength-min="3"
                                                           data-bv-stringlength-max="20"
                                                           data-bv-stringlength-message="用户名长度在3-20之间">
                                                    <i class="ace-icon fa fa-user"></i>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">密码</label>
                                            <div class="col-sm-8">
                                                    <span class="block input-icon input-icon-right">
                                                    <input type="password" class="form-control" name="l-password"
                                                           data-bv-notempty="true"
                                                           data-bv-notempty-message="密码不能为空"
                                                           data-bv-stringlength="true"
                                                           data-bv-stringlength-min="6"
                                                           data-bv-stringlength-max="20"
                                                           data-bv-stringlength-message="密码长度在6-20之间">
                                                    <i class="ace-icon fa fa-lock"></i>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="inline">
                                                <input type="checkbox" class="ace">
                                                <span class="lbl"> 记住密码</span>
                                            </label>
                                            <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                <i class="ace-icon fa fa-key"></i>
                                                <span class="bigger-110">登录</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.widget-main -->

                                <div class="toolbar clearfix">
                                    <div>
                                        <a href="#" data-target="#forgot-box" class="forgot-password-link">
                                            <i class="ace-icon fa fa-arrow-left"></i> 找回密码
                                        </a>
                                    </div>

                                    <div>
                                        <a href="#" data-target="#signup-box" class="user-signup-link">
                                            去注册
                                            <i class="ace-icon fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.login-box -->
                        <!--找回密码框-->
                        <div id="forgot-box" class="forgot-box widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header red lighter bigger">
                                        <i class="ace-icon fa fa-key"></i>
                                        找回密码
                                    </h4>

                                    <div class="space-6"></div>
                                    <p>
                                        请填写您的注册邮箱
                                    </p>

                                    <form>
                                        <fieldset>
                                            <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="邮箱地址" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
                                            </label>

                                            <div class="clearfix">
                                                <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                                                    <i class="ace-icon fa fa-lightbulb-o"></i>
                                                    <span class="bigger-110">发送</span>
                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <!-- /.widget-main -->

                                <div class="toolbar center">
                                    <a href="#" data-target="#login-box" class="back-to-login-link">
                                        返回登录
                                        <i class="ace-icon fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.forgot-box -->
                        <!--注册框-->
                        <div id="signup-box" class="signup-box widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header green lighter bigger">
                                        <i class="ace-icon fa fa-users blue"></i>
                                        新用户注册
                                    </h4>

                                    <div class="space-6"></div>
                                    <form action="{{ url('/register') }}" id="register" role="form" method="POST" class="form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">用户名</label>
                                            <div class="col-sm-8">
                                                    <span class="block input-icon input-icon-right">
                                                    <input type="text" class="form-control" name="name"
                                                           data-bv-message="用户名不能为空"
                                                           data-bv-notempty="true"
                                                           data-bv-notempty-message="用户名不能为空"
                                                           data-bv-regexp="true"
                                                           data-bv-regexp-regexp="[a-zA-Z0-9_]+"
                                                           data-bv-regexp-message="用户名为字母、数字、下划线" data-bv-stringlength="true"
                                                           data-bv-stringlength-min="3"
                                                           data-bv-stringlength-max="20"
                                                           data-bv-stringlength-message="用户名为3-20个字符">
                                                    <i class="ace-icon fa fa-user"></i>
                                                    </span>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">性别</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="sex">
                                                    <option value="man">男</option>
                                                    <option value="woman">女</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">生日</label>
                                            <div class="col-sm-8">
                                                <div class="input-group date" id="birthday">
                                                    <input type="text" class="form-control" name="birthday">
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">邮箱</label>
                                            <div class="col-sm-8">
                                                    <span class="block input-icon input-icon-right">
                                                    <input type="email" class="form-control" name="email"
                                                           data-bv-notempty="true"
                                                           data-bv-notempty-message="邮箱不能为空">
                                                    <i class="ace-icon fa fa-envelope"></i>
                                                    </span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">密码</label>
                                            <div class="col-sm-8">
                                                    <span class="block input-icon input-icon-right">
                                                    <input type="password" class="form-control" name="password"
                                                           data-bv-notempty="true"
                                                           data-bv-notempty-message="密码不能为空"
                                                           data-bv-stringlength="true"
                                                           data-bv-stringlength-min="6"
                                                           data-bv-stringlength-max="20"
                                                           data-bv-stringlength-message="密码长度在6-20之间">
                                                    <i class="ace-icon fa fa-lock"></i>
                                                    </span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">确认密码</label>
                                            <div class="col-sm-7">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" class="form-control" name="password_confirmation"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="确认密码不能为空" data-bv-identical="true"
                                                               data-bv-identical-field="password"
                                                               data-bv-identical-message="两次输入密码不一致">
                                                        <i class="ace-icon fa fa-lock"></i>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="reset" class="width-30 pull-left btn btn-sm">
                                                <i class="ace-icon fa fa-refresh"></i>
                                                <span class="bigger-110">重置</span>
                                            </button>

                                            <button type="submit" class="width-65 pull-right btn btn-sm btn-success">
                                                <span class="bigger-110">注册</span>

                                                <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <div class="toolbar center">
                                    <a href="#" data-target="#login-box" class="back-to-login-link">
                                        <i class="ace-icon fa fa-arrow-left"></i> 返回登录
                                    </a>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.signup-box -->
                    </div>
                    <!-- /.position-relative -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.main-content -->
</div>
<!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='../assets/js/jquery.min.js'>" + "<" + "/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='../assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="../assets/js2/date-time/bootstrap-datepicker.min.js"></script>
<script src="../assets/js2/date-time/locales/bootstrap-datepicker.zh-CN.js"></script>
<script src="../assets/js2/bootstrapValidator.min.js"></script>
<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function ($) {
        $(document).on('click', '.toolbar a[data-target]', function (e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('.widget-box.visible').removeClass('visible'); //hide others
            $(target).addClass('visible'); //show target
        });
        //$birthday
        var $birthday = $("#birthday");
        if ($birthday.type !== 'date') { //if browser doesn't support "date" input
            $birthday.datepicker({
                autoclose: true,
                todayHighlight: true,
                language: 'zh-CN',
            });
        }
        $('#login').bootstrapValidator();
        $('#register').bootstrapValidator({
            fields: {
                birthday: {
                    validators: {
                        notEmpty: {
                            message: '生日不能为空'
                        }
                    }
                },
                email: {
                    validators: {
                        emailAddress: { //　　邮箱格式校验
                            message: '请输入正确的邮箱'
                        }
                    }
                },
            }
        });
        $birthday.on('hide', function (e) {
            $('#register').data('bootstrapValidator').updateStatus('birthday', 'NOT_VALIDATED', null).validateField('birthday');
        });
    });
</script>
<script>
</script>
</body>

</html>