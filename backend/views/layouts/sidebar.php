
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link">
        <img src="< ?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a> -->


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/images/G.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo Yii::$app->user->identity->username ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'Admins',
                        // 'icon' => 'tachometer-alt',
                        // 'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => 'All Admins', 'url' => ['admin/index'], 'iconStyle' => 'far'],
                        ]
                    ],
                    [
                        'label' => 'Users',
                        // 'icon' => 'tachometer-alt',
                        // 'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => 'All Users', 'url' => ['user/index'], 'iconStyle' => 'far'],
                        ]
                    ],
                    [
                        'label' => 'Applicants',
                        // 'icon' => 'tachometer-alt',
                        // 'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => 'All Applicants', 'url' => ['applicant/index'], 'iconStyle' => 'far'],
                        ]
                    ],
                    [
                        'label' => 'Workers',
                        // 'icon' => 'tachometer-alt',
                        // 'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => 'All Workers', 'url' => ['worker/index'], 'iconStyle' => 'far'],
                        ]
                    ],
                    [
                        'label' => 'Tasks',
                        // 'icon' => 'tachometer-alt',
                        // 'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => 'All Tasks', 'url' => ['task/index'], 'iconStyle' => 'far'],
                        ]
                    ],
                    [
                        'label' => 'Task Assignments',
                        // 'icon' => 'tachometer-alt',
                        // 'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => 'Assignments', 'url' => ['assignment/index'], 'iconStyle' => 'far'],
                        ]
                    ],
                    [
                        'label' => 'Expenses',
                        // 'icon' => 'tachometer-alt',
                        // 'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => 'Expenses', 'url' => ['expense/index'], 'iconStyle' => 'far'],
                        ]
                    ],
                    [
                        'label' => 'Equipments',
                        // 'icon' => 'tachometer-alt',
                        // 'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => 'Equipments', 'url' => ['equipment/index'], 'iconStyle' => 'far'],
                        ]
                    ],
                    [
                        'label' => 'Reports',
                        // 'icon' => 'tachometer-alt',
                        // 'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => 'Reports', 'url' => ['report/index'], 'iconStyle' => 'far'],
                        ]
                    ],
                    // ['label' => 'Yii2 PROVIDED', 'header' => true],
                    // // ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    // ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                    // ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                    // ['label' => 'V TYPE','url' =>['v-type/index'] ,'iconStyle' => 'far', 'icon' => 'fa fa-file'],
                    // ['label' => 'Vipodozi','url' =>['vipodoz/index'] ,'iconStyle' => 'far', 'icon' => 'fas fa-users'],
                    // ['label' => 'MULTI LEVEL EXAMPLE', 'header' => true],
                    // ['label' => 'Level1'],
                    // [
                    //     'label' => 'Level1',
                    //     'items' => [
                    //         ['label' => 'Level2', 'iconStyle' => 'far'],
                    //         [
                    //             'label' => 'Level2',
                    //             'iconStyle' => 'far',
                    //             'items' => [
                    //                 ['label' => 'Level3','url' =>['v-type/index'] ,'iconStyle' => 'far', 'icon' => 'dot-circle'],
                    //                 ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                    //                 ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle']
                    //             ]
                    //         ],
                    //         ['label' => 'Level2', 'iconStyle' => 'far']
                    //     ]
                    // ],
                    // ['label' => 'Level1'],
                    // ['label' => 'LABELS', 'header' => true],
                    // ['label' => 'Important', 'iconStyle' => 'far', 'iconClassAdded' => 'text-danger'],
                    // ['label' => 'Warning', 'iconClass' => 'nav-icon far fa-circle text-warning'],
                    // ['label' => 'Informational', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>