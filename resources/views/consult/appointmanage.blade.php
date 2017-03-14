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
                    <li class="active">预约管理</li>
                    <!--	<li class="active">Dashboard</li>-->
                </ul>
                <!-- /.breadcrumb -->
            </div>

            <!-- /section:basics/content.breadcrumbs -->
            <div class="page-content">
                <div class="page-content-area">
                    <div class="row">
                        <!--必须整体包含在这里-->
                        <div class="col-md-12">
                            <div class="row">
                                <!--正文-->
                                <div class="col-md-12">
                                    <form action="test.php" id="date" method="post" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">预约日期</label>
                                            <div class="col-md-2">
                                                <div class="input-group date" id="dateSelect">
                                                    <input type="text" class="form-control" name="dateSelect">
                                                    <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">咨询师</label>
                                            <div class="col-md-2">
                                                <select name="counselor" style="width:100%">
                                                    <option value="0">--请选择--</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-8 text-center">
                                                <input type="submit" value="查询" class="btn btn-info">
                                            </div>
                                        </div>
                                    </form>
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
            <script src="../assets/js2/date-time/bootstrap-datepicker.min.js"></script>
            <script src="../assets/js2/date-time/locales/bootstrap-datepicker.zh-CN.js"></script>
            <script src="../assets/js2/bootstrapValidator.min.js"></script>
            <script>
                $(function () {
                    var $dateSelect = $("#dateSelect");
                    if ($dateSelect.type !== 'date') { //if browser doesn't support "date" input
                        $dateSelect.datepicker({
                            autoclose: true,
                            todayHighlight: true,
                            language: 'zh-CN',
                            startDate: new Date()
                        });
                    }
                    $('#date').bootstrapValidator({
                        fields: {
                            dateSelect: {
                                validators: {
                                    notEmpty: {
                                        message: '日期不能为空'
                                    }
                                }
                            }
                        }
                    });
                    $dateSelect.on('hide', function (e) {
                        $('#date').data('bootstrapValidator').updateStatus('dateSelect', 'NOT_VALIDATED', null).validateField('dateSelect');
                    });
                    $($(".light-blue")[1]).on("click",function(){
                        window.location="index.html";
                    }); 
                });
            </script>

            <!-- ace scripts -->
            <script src="../assets/js2/ace-elements.min.js"></script>
            <script src="../assets/js2/ace.min.js"></script>

</html>