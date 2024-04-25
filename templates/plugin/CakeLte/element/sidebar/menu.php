<?php
$menu = [
    'mainHeader' => [
        'label' => __('MAIN MENU'),
        'type' => $this->MenuLte::ITEM_TYPE_HEADER, // or 'header'
    ],
    'Photos' => [
        'label' => __('Photos'),
        'icon' => 'fas fa-image',
        'uri' => ['controller' => 'photos', 'action' => 'index', 'home', 'plugin' => false],
        ],
    'Albums' => [
        'label' => __('Albums'),
        'icon' => 'fas fa-images',
        'uri' => ['controller' => 'albums', 'action' => 'index', 'home', 'plugin' => false],
        ],
        'Users' => [
            'label' => __('Other Menu'),
            'icon' => 'fas fa-cog',
            'dropdown'=> [
                'Logout' => [
                    'label' => __('logout'),
                    'icon' => 'fas fa-sign-out-alt',
                    'uri' => ['controller' => 'users', 'action' => 'logout', 'home', 'plugin' => false],
                ],
                'Themes' => [
                    'label' => __('Themes'),
                    'icon' => 'fas fa-brush',
                    'uri' => ['controller' => 'adminlte', 'action' => 'index.html', 'plugin' => false],
                ],
                'Users' => [
                    'label' => __('Users'),
                    'icon' => 'fas fa-users',
                    'uri' => ['controller' => 'users', 'action' => 'index', 'home', 'plugin' => false],
                ],
                'Comments' => [
                    'label' => __('Comments'),
                    'icon' => 'fas fa-comments',
                    'uri' => ['controller' => 'comments', 'action' => 'index', 'home', 'plugin' => false],
                ],
                'Likes' => [
                    'label' => __('Likes'),
                    'icon' => 'fas fa-heart',
                    'uri' => ['controller' => 'likes', 'action' => 'index', 'home', 'plugin' => false],
                ],
            ],
            
    ],

                
            
    // 'simpleLink' => [
    //     'label' => __('Simple Link'),
    //     'badge' => ['text' => __('New'), 'color' => 'danger'],
    //     'uri' => ['controller' => 'Pages', 'action' => 'display', 'home', 'plugin' => false],
    //     'icon' => 'fas fa-th text-danger',
    //     'show' => function () {
    //         // logic condition to show item, return a bool
    //         return true;
    //     }
    // ],
];

echo $this->MenuLte->render($menu);

/*
- To activate an item, you can pass the `active` variable, or use method `activeItem` from the template
    Example: 
        $this->MenuLte->activeItem('startPages.activePage');

- It is also possible to create the menu using the html code
    <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Active Page</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Inactive Page</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
            </p>
        </a>
    </li>
*/
