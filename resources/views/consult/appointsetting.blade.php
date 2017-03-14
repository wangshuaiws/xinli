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
                    <li>预约咨询</li>
                    <li class="active">参数设置</li>
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

                                        <ul id="tab" class="nav nav-tabs tab-color-blue background-blue">
                                            <li class="active">
                                                <a href="#means" data-toggle="tab">咨询方式</a>
                                            </li>
                                            <li>
                                                <a href="#place" data-toggle="tab">咨询地点</a>
                                            </li>
                                            <li>
                                                <a href="#type" data-toggle="tab">问题类型</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content">
                                            <div class="tab-pane in active" id="means">
                                                <div class="widget-header widget-hea1der-small">
                                                    <h5 style="display:inline;float:left">咨询方式</h5>
                                                    <div class="widget-toolbar align-middle" style=" width: 100px">
                                                        <a class="btn btn-xs btn-info" href="javascript:void(0)" onclick="CAdd()" style="width: 83px"><i class="ui-icon ace-icon fa fa-plus center bigger-110 white">
                                                            </i>新增</a>
                                                    </div>
                                                </div>
                                                <table id="means" class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>名称</th>
                                                            <th>描述</th>
                                                            <th>操作</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="place">
                                                <div class="widget-header widget-hea1der-small">
                                                    <h5 style="display:inline;float:left">咨询地点</h5>
                                                    <div class="widget-toolbar align-middle" style=" width: 100px">
                                                        <a class="btn btn-xs btn-info" href="javascript:void(0)" onclick="CAdd()" style="width: 83px"><i class="ui-icon ace-icon fa fa-plus center bigger-110 white">
                                                            </i>新增</a>
                                                    </div>
                                                </div>
                                                <table id="means" class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>名称</th>
                                                            <th>描述</th>
                                                            <th>操作</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="type">
                                                 <div class="widget-header widget-hea1der-small">
                                                    <h5 style="display:inline;float:left">问题类型</h5>
                                                    <div class="widget-toolbar align-middle" style=" width: 100px">
                                                        <a class="btn btn-xs btn-info" href="javascript:void(0)" onclick="CAdd()" style="width: 83px"><i class="ui-icon ace-icon fa fa-plus center bigger-110 white">
                                                            </i>新增</a>
                                                    </div>
                                                </div>
                                                <table id="means" class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>名称</th>
                                                            <th>描述</th>
                                                            <th>操作</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
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