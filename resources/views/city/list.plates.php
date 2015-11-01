<?php $this->layout('layouts/main') ?>
 

        <section class="wrapper retracted scrollable">
            
            <nav class="user-menu">
                <a href="javascript:;" class="main-menu-access">
                    <i class="icon-proton-logo"></i>
                    <i class="icon-reorder"></i>
                </a>
                <section class="user-menu-wrapper">
                    <a href="javascript:;" data-expand=".theme-view" class="view-menu-access">
                        <i class="icon-eye-open"></i>
                    </a>
                    <a href="javascript:;" data-expand=".messages-view" class="messages-access">
                        <i class="icon-envelope-alt"></i>
                    </a>
                    <a href="javascript:;" data-expand=".notifications-view" class="notifications-access unread">
                        <i class="icon-comment-alt"></i>
                        <div class="menu-counter">6</div>
                    </a>
                </section>

                <div class="panel panel-default nav-view theme-view">
                    <div class="arrow user-menu-arrow"></div>
                    <div class="panel-heading">
                        <i class="icon-eye-open"></i>
                        <span>Color Scheme</span>
                        <a href="javascript:;" class="close-user-menu"><i class="icon-remove"></i></a>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item" data-theme="default">
                            <a href="javascript:;">
                                <i><b class="dark"></b></i>
                                <div class="text-holder">
                                    <span class="title-text">
                                        Dark
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item" data-theme="theme-light">
                            <a href="javascript:;">
                                <i><b></b></i>
                                <div class="text-holder">
                                    <span class="title-text">
                                        Light
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item" data-theme="theme-pastel">
                            <a href="javascript:;">
                                <i><b class="pastel"></b></i>
                                <div class="text-holder">
                                    <span class="title-text">
                                        Pastel Green
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item" data-theme="theme-pastel-marine">
                            <a href="javascript:;">
                                <i><b class="pastel-marine"></b></i>
                                <div class="text-holder">
                                    <span class="title-text">
                                        Pastel Marine
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item" data-theme="theme-terminal">
                            <a href="javascript:;">
                                <i><b class="terminal"></b></i>
                                <div class="text-holder">
                                    <span class="title-text">
                                        Terminal
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item" data-theme="theme-rio">
                            <a href="javascript:;">
                                <i><b class="rio"></b></i>
                                <div class="text-holder">
                                    <span class="title-text">
                                        Rio
                                    </span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="panel panel-default nav-view messages-view">
                    <div class="arrow user-menu-arrow"></div>
                    <div class="panel-heading">
                        <i class="icon-envelope-alt"></i>
                        <span>Messages</span>
                        <a href="javascript:;" class="close-user-menu"><i class="icon-remove"></i></a>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <i><img src="images/user-icons/user1.jpg" alt="User Icon"></i>
                            <div class="text-holder">
                                <span class="title-text">
                                    Nunc Cenenatis:
                                </span>
                                <span class="description-text">
                                    Hi, can you meet me at the office tomorrow morning?
                                </span>
                            </div>
                            <span class="time-ago">
                                3 mins ago
                            </span>
                        </li>
                        <li class="list-group-item">
                            <i><img src="images/user-icons/user5.jpg" alt="User Icon"></i>
                            <div class="text-holder">
                                <span class="title-text">
                                    Prasent Neque:
                                </span>
                                <span class="description-text">
                                    Just a quick question: do you know the balance on the adsense account?
                                </span>
                            </div>
                            <span class="time-ago">
                                17 mins ago
                            </span>
                        </li>
                        <li class="list-group-item">
                            <i><img src="images/user-icons/user2.jpg" alt="User Icon"></i>
                            <div class="text-holder">
                                <span class="title-text">
                                    Flor Demoa:
                                </span>
                                <span class="description-text">
                                    Hey, we're going surfing tomorrow. Feel free to join in.
                                </span>
                            </div>
                            <span class="time-ago">
                                3 hrs ago
                            </span>
                        </li>
                    </ul>
                </div>


            </nav>
                
            <?=$panel?>  
            <div class="row">
                <div class="col-md-12">
                          
                    <div class="panel panel-default panel-block">
                        <div id="data-table" class="panel-heading datatable-heading">
                            <h4 class="section-title">Data Table</h4>
                        </div>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Название</th>
                                    <th>Действие</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($city as $item):?>
                                    
                                    <tr class="gradeX">     
                                        <td><?=$item->id?></td>
                                        <td class="center"><?=$item->name?></td>
                                        <td class="center">
                                            <button class="btn btn-sm btn-primary btn-redirect btn-greed" data-href="<?=url('/city/' . $item->id)?>">Редактировать</button>
                                            <form action="<?=url('/city/remove/' . $item->id)?>" method="post" data-parsley-namespace="data-parsley-" data-parsley-validate>
                                                <input type="hidden" name="_token" value="<?=csrf_token()?>" />
                                                <button type="submit" class="btn-confirm btn btn-sm btn-primary">Удалить</button>
                                            </form>
                                        </td>
                                    </tr>

                                <?php endforeach?>    
                            </tbody>
                        </table>
                        <?=$city->render()?>
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