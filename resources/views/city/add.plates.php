<?php $this->layout('layouts/main') ?>        
       
        <section class="wrapper retracted scrollable">
            
            <script>
                if (!($('body').is('.dashboard-page') || $('body').is('.login-page'))){
                    if ($.cookie('protonSidebar') == 'retracted') {
                        $('.wrapper').removeClass('retracted').addClass('extended');
                    }
                    if ($.cookie('protonSidebar') == 'extended') {
                        $('.wrapper').removeClass('extended').addClass('retracted');
                    }
                }
            </script>
            
            <nav class="user-menu">
                <a href="javascript:;" class="main-menu-access">
                    <i class="icon-proton-logo"></i>
                    <i class="icon-reorder"></i>
                </a>
                <section class="user-menu-wrapper">
                    <a href="javascript:;" data-expand=".theme-view" class="view-menu-access">
                        <i class="icon-eye-open"></i>
                    </a>
                
                    <a href="javascript:;" data-expand=".notifications-view" class="notifications-access unread">
                        <i class="icon-comment-alt"></i>
                        <div class="menu-counter">6</div>
                    </a>
                </section>

            </nav>
            
            <ol class="breadcrumb breadcrumb-nav">
                <li><a href="."><i class="icon-home"></i></a></li>
                <li class="active">
                    <a class="bread-page-title" data-toggle="dropdown" href="#"></a>
                    <ul class="dropdown-menu dropdown-menu-arrow" role="menu">
                    </ul>
                </li>
            </ol>
            
            <?=$panel?>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default panel-block">
                            <form action="/city/add" method="post" data-parsley-namespace="data-parsley-" data-parsley-validate>
                                <input type="hidden" name="_token" value="<?=csrf_token()?>";
                                <div class="panel panel-default panel-block">
                                    <div class="list-group">
                                        <div class="list-group-item">
                                            <div class="form-group">
                                                <label>Название города<span class="text-danger">*</span></label>

                                                <input type="text" name="name" value="" class="form-control parsley-error" placeholder="Username" data-parsley-required="true">
                                                <ul id="parsley-6099321319480859" class="parsley-error-list">
                                                    <?php foreach ($errors->all() as $message):?>
                                                        <li class="required" style="display: list-item;"><?=$message?></li>
                                                    <?php endforeach?>
                                                </ul>
                                            </div>
             
                                        </div>
                                    </div>
                                    <footer class="panel-footer text-right">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </footer>
                                </div>
                            </form>                	
                    </div>
                </div>
            </div>
        </section>

        <script src="/scripts/bootstrap.min.js"></script>

		<!-- Proton base scripts: -->
        
        <script src="/scripts/main.js"></script>
		<script src="/scripts/proton/common.js"></script>
		<script src="/scripts/proton/main-nav.js"></script>
		<script src="/scripts/proton/user-nav.js"></script>
		


        <!-- Page-specific scripts: -->
        <script src="/scripts/proton/sidebar.js"></script>
        <script src="/scripts/proton/tables.js"></script>
        <!-- jsTree -->
        <script src="/scripts/vendor/jquery.jstree.js"></script>
        <!-- Data Tables -->
        <!-- http://datatables.net/ -->
        <script src="/scripts/vendor/jquery.dataTables.min.js"></script>
        
        <!-- Data Tables for BS3 -->
        <!-- https://github.com/Jowin/Datatables-Bootstrap3/ -->
        <!-- NOTE: Original JS file is modified -->
            <script src="/scripts/vendor/datatables.js"></script>
        <!-- Select2 Required To Style Datatable Select Box(es) -->
        <!-- https://github.com/fk/select2-bootstrap-css -->
            <script src="/scripts/vendor/select2.min.js"></script>