<!DOCTYPE html>
<html lang="zh-CN">

@include('common/_head')
        <!--侧边栏-->
@include('common/_left')
        <!-- /.nav-list -->

        <!-- /section:basics/sidebar -->
        <div class="main-content">
            <!-- #section:basics/content.breadcrumbs -->
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try {
                        ace.settings.check('breadcrumbs', 'fixed')
                    } catch (e) {}
                </script>

                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="{{ url('/home') }}">首页</a>
                    </li>
                    <li class="active">档案管理</li>
                    <li class="active">测评档案</li>
                </ul>
                <!-- /.breadcrumb -->
            </div>

            <!-- /section:basics/content.breadcrumbs -->
            <div class="page-content">
                <div class="page-content-area">
                    <div class="row">
                        <!--必须整体包含在这里-->
                        <div class="col-xs-12">
                            <table id="test" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>序号</th>
                                        <th>登录名</th>
                                        <th>量表名称</th>
                                        <th>生成时间</th>
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
    <script src="../assets/js2/jquery.dataTables.min.js"></script>
    <script src="../assets/js2/jquery.dataTables.bootstrap.js"></script>

    <!-- ace scripts -->
    <script src="../assets/js2/ace-elements.min.js"></script>
    <script src="../assets/js2/ace.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#test').dataTable({
                "bSort": false,
                "aoColumns": [
                    {

                        bSearchable: true,
                        bSortable: false
                },
                    {

                        bSearchable: true,
                        bSortable: false
                },
                    {

                        bSearchable: true,
                        bSortable: false
                },
                    {

                        bSearchable: true,
                        bSortable: false
                },
                    {

                        bSearchable: true,
                        bSortable: false
                }
        ],
                "oLanguage": {
                    "sLengthMenu": "每页显示 _MENU_ 条记录",
                    "sZeroRecords": "抱歉， 没有找到",
                    "sInfo": "从 _START_ 到 _END_ /共 _TOTAL_ 条数据",
                    "sInfoEmpty": "没有数据",
                    "sInfoFiltered": "(从 _MAX_ 条数据中检索)",
                    "oPaginate": {
                        "sFirst": "首页",
                        "sPrevious": "前一页",
                        "sNext": "后一页",
                        "sLast": "尾页"
                    },
                    "sZeroRecords": "没有检索到数据",
                },
                "bProcessing": true,
                "bAutoWidth": true,
                "sScrollX": "100%",
                "sScrollXInner": "100%",
                "sAjaxSource": 'data.json'
            });
        });
    </script>
</body>

</html>