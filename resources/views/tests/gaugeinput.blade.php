<!DOCTYPE html>
<html lang="zh-CN">
@include('common/_head')
        <!--侧边栏-->
@include('common/_left')
        <!-- /.nav-list -->

        <!-- 主体 -->
        <div class="main-content">
            <!-- #section:basics/content.breadcrumbs -->
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try {
                        ace.settings.check('breadcrumbs', 'fixed')
                    } catch (e) {}
                </script>
                <!--路径导航-->
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="{{ url('/home') }}">首页</a>
                    </li>
                    <li>心理测验</li>
                    <li class="active">测试结果录入</li>
                    <!--	<li class="active">Dashboard</li>-->
                </ul>
                <!-- /.breadcrumb -->
            </div>

            <!-- /section:basics/content.breadcrumbs -->
            <div class="page-content">
                <div class="page-content-area">
                    <div class="row">
                        <!--必须整体包含在这里-->
                        <div class="col-xs-12">
                            <div class="row">
                                <!--正文-->
                                <div class="col-sm-12">
                                    <div class="tabbable">

                                        <ul id="myTab" class="nav nav-tabs tab-color-blue background-blue" style="height:45px">    
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane in active" id="home">
                                               <form action="test.php">
                                                <div class="row">
                                                    <div class="col-md-6 text-center">
                                                        <label for="select">量表选择：</label>
                                                        <select name="select">
                                                            <option value="0">==请选择量表==</option>
                                                        </select>
                                                        <p class="mt-10">简易录入模式为答题卡录入；标准录入模式为检测作答形式录入</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <lable>录入方式：</lable>
                                                        <input type="radio" name="methon" value="1">简易录入
                                                        <input type="radio" name="methon" value="2">标准录入
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <input class="btn btn-info" type="submit" value="确定">
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <table class="table table-striped table-bordered table-hover mt-10">
                                        <thead>
                                            <tr>
                                                <th>序号</th>
                                                <th>登录名</th>
                                                <th>姓名</th>
                                                <th>量表名称</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <!--/.row-->

                        </div>
                        <!-- /.page-content-area -->
                    </div>
                    <!-- /.page-content -->
                </div>
                <!-- /.main-content -->
                @include('common/_footer')

                <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
                </a>
            </div>
            <!-- /.main-container -->

            <!-- basic scripts -->

            <!--[if !IE]> -->
            <script type="text/javascript">
                window.jQuery || document.write("<script src='../assets/js2/jquery.min.js'>" + "<" + "/script>");
            </script>

            <!-- <![endif]-->

            <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../assets/js2/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
            <script type="text/javascript">
                if ('ontouchstart' in document.documentElement) document.write("<script src='../assets/js2/jquery.mobile.custom.min.js'>" + "<" + "/script>");
            </script>
            <script src="../assets/js2/bootstrap.min.js"></script>

            <!-- page specific plugin scripts -->

            <!--[if lte IE 8]>
		  <script src="../assets/js2/excanvas.min.js"></script>
		<![endif]-->
            <script src="../assets/js2/jquery-ui.custom.min.js"></script>
            <script src="../assets/js2/jquery.ui.touch-punch.min.js"></script>
            <script src="../assets/js2/jquery.easypiechart.min.js"></script>
            <script src="../assets/js2/jquery.sparkline.min.js"></script>
            <script src="../assets/js2/flot/jquery.flot.min.js"></script>
            <script src="../assets/js2/flot/jquery.flot.pie.min.js"></script>
            <script src="../assets/js2/flot/jquery.flot.resize.min.js"></script>

            <!-- ace scripts -->
            <script src="../assets/js2/ace-elements.min.js"></script>
            <script src="../assets/js2/ace.min.js"></script>
            <script>
                $(function(){
                    $($(".light-blue")[1]).on("click",function(){
                        window.location="index.html";
                    }); 
                });
            </script>

</html>