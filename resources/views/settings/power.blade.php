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
                    <li>成员管理</li>
                    <li class="active">权限分配</li>
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
                                    <form name="form1" method="post" action="" id="form1">
                                        <div class="page-content">
                                            <div class="widget-header widget-hea1der-small">
                                                <div style="margin-top: 6px" class="widget-toolbar align-middle">
                                                    <a class="btn btn-info btn-sm" href="{{ url('/rolemanage') }}">返 回</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="profile-user-info profile-user-info-striped">
                                                    <div class="alert alert-block alert-success" style="margin-bottom:0px;padding:10px;background-color:#f5f5f5;border:0;color:#438eb9">基础设置&nbsp;&nbsp;&nbsp;
                                                        <input checked style="opacity:1;height:15px" onclick="onQuanxuan(this,1)" type="checkbox" id="M_1" value="1" data-ctrl runat="server" class="ace">
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name">系统设置</div>
                                                        <div class="profile-info-value">
                                                            <input style="opacity:1;height:15px" onclick="onQuanxuan(this,2)" type="checkbox" checked name="M_1" id="M_1_1" runat="server" value="1_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">系统设置</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <input style="margin-left:24px;opacity:1;height:30px;display:none;" onclick="onQuanxuan(this,2)" type="checkbox" name="M_1" id="M_8" runat="server" class="ace">
                                                        <div class="profile-info-name">角色管理</div>
                                                        <div class="profile-info-value">
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" type="checkbox" checked name="M_8" id="PD_115" value="1_2_1" runat="server" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">修改角色</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" type="checkbox" checked name="M_8" id="PD_116" runat="server" value="1_2_2" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">编辑权限</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" type="checkbox" checked name="M_8" id="PD_117" runat="server" value="1_2_3" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">删除权限</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <input style="margin-left:24px;opacity:1;height:30px;display:none;" onclick="onQuanxuan(this,2)" type="checkbox" name="M_1" id="M_10" runat="server" value="ul_li_10" class="ace">
                                                        <div class="profile-info-name">成员管理</div>
                                                        <div class="profile-info-value">
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_10" id="PD_21" runat="server" value="1_3_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">添加成员</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_10" id="PD_23" runat="server" value="1_3_2" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">查看用户</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_10" id="PD_24" runat="server" value="1_3_3" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">编辑用户</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" type="checkbox" name="M_10" id="PD_25" runat="server" checked value="1_3_4" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">删除用户</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name">数据备份</div>
                                                        <div class="profile-info-value">
                                                            <input style="opacity:1;height:15px" onclick="onQuanxuan(this,2)" type="checkbox" checked name="M_1" id="M_41" runat="server" value="1_4_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">数据备份</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="alert alert-block alert-success" style="margin-bottom:0px;padding:10px;background-color:#f5f5f5;border:0;color:#438eb9">心理测验&nbsp;&nbsp;&nbsp;
                                                        <input style="opacity:1;height:15px" onclick="onQuanxuan(this,1)" checked="" type="checkbox" data-ctrl id="M_2" runat="server" value="2" class="ace">
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <input style="margin-left:24px;opacity:1;height:30px;display:none;" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_2" id="M_27" runat="server" value="ul_li_27" class="ace">
                                                        <div class="profile-info-name">量表管理</div>
                                                        <div class="profile-info-value">
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_27" id="PD_64" runat="server" value="2_1_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">量表类别管理</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_27" id="PD_65" runat="server" value="2_1_2" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">查看</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_27" id="PD_66" runat="server" value="2_1_3" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">修改</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <input style="margin-left:24px;opacity:1;height:30px;display:none;" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_2" id="M_28" runat="server" value="ul_li_28" class="ace">
                                                        <div class="profile-info-name">我的测验</div>
                                                        <div class="profile-info-value">
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_28" id="PD_72" runat="server" value="2_2_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">量表作答</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <input style="margin-left:24px;opacity:1;height:30px;display:none;" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_2" id="M_29" runat="server" value="ul_li_29" class="ace">
                                                        <div class="profile-info-name">量表分配</div>
                                                        <div class="profile-info-value">
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_29" id="PD_69" runat="server" value="2_3_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">分配量表</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <input style="margin-left:24px;opacity:1;height:30px;display:none;" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_2" id="M_30" runat="server" value="ul_li_30" class="ace">
                                                        <div class="profile-info-name">测试结果录入</div>
                                                        <div class="profile-info-value">
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_30" id="PD_96" runat="server" value="2_4_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">确定录入</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_30" id="PD_97" runat="server" value="2_4_2" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">查看结果</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <input style="margin-left:24px;opacity:1;height:30px;display:none;" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_2" id="M_32" runat="server" value="ul_li_32" class="ace">
                                                        <div class="profile-info-name">查看测试结果</div>
                                                        <div class="profile-info-value">
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_32" id="PD_73" runat="server" value="2_5_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">查看报告</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_32" id="PD_74" runat="server" value="2_5_2" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">作答报告</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_32" id="PD_77" runat="server" value="2_5_3" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">提醒作答</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="alert alert-block alert-success" style="margin-bottom:0px;padding:10px;background-color:#f5f5f5;border:0;color:#438eb9">危机预警&nbsp;&nbsp;&nbsp;
                                                        <input style="opacity:1;height:15px" onclick="onQuanxuan(this,1)" checked="" type="checkbox" data-ctrl id="M_3" runat="server" value="3" class="ace">
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <input style="margin-left:24px;opacity:1;height:30px;display:none;" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_3" id="M_33" runat="server" value="ul_li_33" class="ace">
                                                        <div class="profile-info-name">查看预警</div>
                                                        <div class="profile-info-value">
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_33" id="PD_106" runat="server" value="3_1_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">查看报告</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_33" id="PD_107" runat="server" value="3_1_2" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">添加预约</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <input style="margin-left:24px;opacity:1;height:30px;display:none;" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_3" id="M_34" runat="server" value="ul_li_34" class="ace">
                                                        <div class="profile-info-name">预警设置</div>
                                                        <div class="profile-info-value">
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_34" id="PD_108" runat="server" value="3_2_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">查看预警</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_34" id="PD_109" runat="server" value="3_2_2" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">修改预警</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_34" id="PD_110" runat="server" value="3_2_3" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">还原默认</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_34" id="PD_111" runat="server" value="3_2_4" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">操作记录</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="alert alert-block alert-success" style="margin-bottom:0px;padding:10px;background-color:#f5f5f5;border:0;color:#438eb9">问卷调查&nbsp;&nbsp;&nbsp;
                                                        <input style="opacity:1;height:15px" onclick="onQuanxuan(this,1)" checked="" type="checkbox" data-ctrl id="M_4" runat="server" value="4" class="ace">
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <input style="margin-left:24px;opacity:1;height:30px;display:none;" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_4" id="M_13" runat="server" value="ul_li_13" class="ace">
                                                        <div class="profile-info-name">问卷管理</div>
                                                        <div class="profile-info-value">
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_13" id="PD_27" runat="server" value="4_1_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">添加问卷</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_13" id="PD_28" runat="server" value="4_1_2" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">查看问卷</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_13" id="PD_29" runat="server" value="4_1_3" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">编辑问卷</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_13" id="PD_32" runat="server" value="4_1_4" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">删除问卷</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <input style="margin-left:24px;opacity:1;height:30px;display:none;" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_4" id="M_14" runat="server" value="ul_li_14" class="ace">
                                                        <div class="profile-info-name">问卷分配</div>
                                                        <div class="profile-info-value">
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_14" id="PD_35" runat="server" value="4_2_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">分配问卷</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_14" id="PD_36" runat="server" value="4_2_2" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">撤销分配</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <input style="margin-left:24px;opacity:1;height:30px;display:none;" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_4" id="M_15" runat="server" value="ul_li_15" class="ace">
                                                        <div class="profile-info-name">调查结果</div>
                                                        <div class="profile-info-value">
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_15" id="PD_45" runat="server" value="4_3_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">答卷收集</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_15" id="PD_46" runat="server" value="4_3_2" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">统计分析</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <input style="margin-left:24px;opacity:1;height:30px;display:none;" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_4" id="M_19" runat="server" value="ul_li_19" class="ace">
                                                        <div class="profile-info-name">我的问卷</div>
                                                        <div class="profile-info-value">
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_19" id="PD_48" runat="server" value="4_4_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">问卷作答</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name">作答记录</div>
                                                        <div class="profile-info-value">
                                                            <input style="opacity:1;height:15px" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_4" id="M_40" runat="server" value="4_5_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">作答记录</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="alert alert-block alert-success" style="margin-bottom:0px;padding:10px;background-color:#f5f5f5;border:0;color:#438eb9">预约咨询&nbsp;&nbsp;&nbsp;
                                                        <input style="opacity:1;height:15px" onclick="onQuanxuan(this,1)" checked="" type="checkbox" data-ctrl id="M_5" runat="server" value="5" class="ace">
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name">参数设置</div>
                                                        <div class="profile-info-value">
                                                            <input style="opacity:1;height:15px" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_5" id="M_16" runat="server" value="5_1_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">参数设置</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <input style="margin-left:24px;opacity:1;height:30px;display:none;" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_5" id="M_21" runat="server" value="ul_li_21" class="ace">
                                                        <div class="profile-info-name">个案辅导</div>
                                                        <div class="profile-info-value">
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_21" id="PD_38" runat="server" value="5_2_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">添加个案</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_21" id="PD_39" runat="server" value="5_2_2" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">查看个案</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_21" id="PD_40" runat="server" value="5_2_3" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">编辑个案</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_21" id="PD_42" runat="server" value="5_2_4" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">删除个案</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name">我的预约</div>
                                                        <div class="profile-info-value">
                                                            <input style="opacity:1;height:15px" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_5" id="M_25" runat="server" value="5_3_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">我的预约</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name">预约管理</div>
                                                        <div class="profile-info-value">
                                                            <input style="opacity:1;height:15px" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_5" id="M_26" runat="server" value="5_4_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">预约管理</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="alert alert-block alert-success" style="margin-bottom:0px;padding:10px;background-color:#f5f5f5;border:0;color:#438eb9">档案管理&nbsp;&nbsp;&nbsp;
                                                        <input style="opacity:1;height:15px" onclick="onQuanxuan(this,1)" checked="" type="checkbox" data-ctrl id="M_6" runat="server" value="6" class="ace">
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <input style="margin-left:24px;opacity:1;height:30px;display:none;" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_6" id="M_35" runat="server" value="ul_li_35" class="ace">
                                                        <div class="profile-info-name">问卷档案</div>
                                                        <div class="profile-info-value">
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_35" id="PD_79" runat="server" value="6_1_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">查看档案</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <input style="margin-left:24px;opacity:1;height:30px;display:none;" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_6" id="M_36" runat="server" value="ul_li_36" class="ace">
                                                        <div class="profile-info-name">测评档案</div>
                                                        <div class="profile-info-value">
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_36" id="PD_81" runat="server" value="6_2_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">新建档案</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_36" id="PD_82" runat="server" value="6_2_2" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">查看档案</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_36" id="PD_112" runat="server" value="6_2_3" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">删除档案</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <input style="margin-left:24px;opacity:1;height:30px;display:none;" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_6" id="M_37" runat="server" value="ul_li_37" class="ace">
                                                        <div class="profile-info-name">个案档案</div>
                                                        <div class="profile-info-value">
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_37" id="PD_84" runat="server" value="6_3_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">查看档案</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <input style="margin-left:24px;opacity:1;height:30px;display:none;" onclick="onQuanxuan(this,2)" checked="" type="checkbox" name="M_6" id="M_38" runat="server" value="ul_li_38" class="ace">
                                                        <div class="profile-info-name">综合档案</div>
                                                        <div class="profile-info-value">
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_38" id="PD_92" runat="server" value="6_4_1" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">新建档案</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_38" id="PD_93" runat="server" value="6_4_2" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">查看档案</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input onclick="onQuanxuan(this,3)" style="opacity:1;height:15px" checked="" type="checkbox" name="M_38" id="PD_113" runat="server" value="6_4_3" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">删除档案</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                    <div class="alert alert-block alert-success" style="margin-bottom:0px;padding:10px;background-color:#f5f5f5;border:0;color:#438eb9">回 收 站&nbsp;&nbsp;&nbsp;</div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name">回 收 站</div>
                                                        <div class="profile-info-value">
                                                            <input style="opacity:1;height:15px" onclick="onQuanxuan(this,1)" checked="" type="checkbox" id="M_12" runat="server" value="7" class="ace"><span id="Span3" class="editable" style="margin-left:25px;">回 收 站</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="text-align: center">
                                                <input name="hidPD" type="hidden" id="hidPD">
                                                <a id="LinkButton2" class="btn btn-info btn-sm" href="javascript:;">保 存</a> &nbsp; <a class="btn btn-info btn-sm" href="U_RoleInfoLists.aspx">返 回</a>
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

            <!-- ace scripts -->
            <script src="../assets/js2/ace-elements.min.js"></script>
            <script src="../assets/js2/ace.min.js"></script>
            <script>
                jQuery(function ($) {
                    $('#LinkButton2').on('click', function () {
                        if (confirm("权限为重要数据，请慎重操作！是否继续？")) {
                            var str = "";
                            $('input:checkbox').each(function () {
                                str += this.id + ":"; //ID
                                str += this.checked ? "1" : "0"; //权限
                                str += ",";
                            });
                            document.getElementById("hidPD").value = str;
                            //获取数据
                            var data = [],
                                seting = [],
                                test = [],
                                warning = [],
                                questallot = [],
                                appointmy = [],
                                archives = [],
                                recovery = [],
                                $inputs = $("input:checkbox");
                            $inputs.each(function () {
                                if (this.style.display !== "none") {
                                    $(this).is(":checked") ? $(this).val("1") : $(this).val("0");
                                    data.push($(this).val());
                                }
                            });
                            seting = data.slice(0, 10);
                            test = data.slice(10, 21);
                            warning = data.slice(21, 28);
                            questallot = data.slice(28, 39);
                            appointmy = data.slice(39, 47);
                            archives = data.slice(47, 56);
                            recovery = data.slice(56);
                            alert(seting + "&" + test + "&" + warning + "&" + questallot + "&" + appointmy + "&" + archives + "&" + recovery);
                            $.ajax({
                                url: "test.php",
                                type: "post",
                                data:  seting + "&" + test + "&" + warning + "&" + questallot + "&" + appointmy + "&" + archives + "&" + recovery,
                                dataType: "json",
                                success: function (res) {
                                    console.log(res);
                                }
                            });
                        } else {
                            return false;
                        }
                    });
                    $($(".light-blue")[1]).on("click", function () {
                        window.location = "index.html";
                    });
                });

                function onckeckradio(sid, value) {
                    document.getElementById("hidCkeckContent_" + sid).value = value;
                    alert(document.getElementById("hidCkeckContent_" + sid).value);
                }

                //选中父级  子级选中
                function onQuanxuan(obj, type) {
                    var id = obj.id;
                    var parentid = obj.name;
                    var b1 = false;
                    var b2 = false;
                    if (type == 1) {
                        //全选功能
                        var items = document.getElementsByName(id);
                        for (var i = 0; i < items.length; i++) {
                            if (items[i].id == id) continue;
                            items[i].checked = obj.checked; //选中
                            var itemss = document.getElementsByName(items[i].id);
                            for (var j = 0; j < itemss.length; j++) {
                                itemss[j].checked = obj.checked; //选中
                            }
                        }
                    } else if (type == 2) {
                        //当前是二级触发
                        //全选回返父级是否选中状态
                        var items = document.getElementsByName(parentid);
                        for (var i = 0; i < items.length; i++) {
                            if (items[i].checked) {
                                b1 = true;
                                break;
                            }
                        }
                        var item = document.getElementById(parentid);
                        item.checked = b1;
                    } else if (type == 3) {
                        //当前是三级触发
                        //全选回返父级及父级的父级是否选中状态
                        var items = document.getElementsByName(parentid);
                        for (var i = 0; i < items.length; i++) {
                            if (items[i].checked) {
                                b1 = true;
                                break;
                            }
                        }
                        var item = document.getElementById(parentid);
                        item.checked = b1;
                        var itemss = document.getElementsByName(item.name);
                        for (var i = 0; i < itemss.length; i++) {
                            if (itemss[i].checked) {
                                b2 = true;
                                break;
                            }
                        }
                        var item_p = document.getElementById(item.name);
                        item_p.checked = b2;
                    }
                }
            </script>

</html>