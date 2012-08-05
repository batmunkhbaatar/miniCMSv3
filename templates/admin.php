<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>miniCMS v3 Administration</title>
        <?php http_load_file('css'); ?>
        <?php http_load_file('js'); ?>
    </head>
    <body>
        <!-- Header Wrapper -->
        <div id="mbm-header" class="clearfix">
            <!-- Logo Wrapper -->
            <div id="mbm-logo-container">
                <div id="mbm-logo-wrap">
                    <?php
                    echo link_to(
                            image_tag('logos/logo-admin.png', array(
                                'border' => 0
                            )), 
                            'admin_dashboard',
                            array(
                                'title'=>__('Dashboard')
                            )
                    );
                    ?>
                </div>
            </div>
            <?php require_once(TEMPLATE_DIR . 'admin/user_block.mbm'); ?>
            <!-- Main Wrapper -->
            <?php $left_col_width = 195; ?>
            <div id="mbm-wrapper">
                <!-- Necessary markup, do not remove -->
                <div id="mbm-sidebar-bg">

                    <!-- Sidebar Wrapper -->
                    <div id="mbm-sidebar">
                        <span style="text-align: right; display: block;">
                            >>>>>>>>>>>>>>>>>>>
                        </span>
                        <?php load_component('admin_menu'); ?>
                    </div>
                </div>
                <div id="mbm-sidebar-stitch">>>>>>></div>
                <script type="text/javascript">
                    $(function(){
                        $('#mbm-sidebar-stitch').click(function(){
                            if($('#mbm-wrapper').css('margin-left') == '-<?php echo $left_col_width; ?>px'){
                                $('#mbm-wrapper').css('margin-left','0px')
                            }else{
                                $('#mbm-wrapper').css('margin-left','-<?php echo $left_col_width; ?>px')
                            }
                        });
                    });
                </script>
                <!-- Container Wrapper -->
                <div id="mbm-container" class="clearfix">
                    <!-- Main Container -->
                    <div class="container">

                        <?php load_template('body'); ?>
                    </div>
                    <br clear="all" />
                </div>
                <!-- End Main Container -->

                <!-- Footer -->
                <br clear="all" />
                <div id="mbm-footer">
                    Copyright &copy; 2003-<?php echo date('Y') ?>. All Rights Reserved. 
                    <?php echo link_to('mBm TECHNOLOGY LLC', 'http://www.mng.cc/', array('target' => '_blank')) ?>
                </div>
                <!-- End Footer -->

            </div>
            <!-- End Container Wrapper -->

        </div>
        <!-- End Main Wrapper -->

    </body>
</html>