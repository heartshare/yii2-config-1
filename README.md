Yii2 Config Manager
=================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist krok/yii2-config "*"
```

or add

```
"krok/yii2-config": "*"
```

to the require section of your `composer.json` file.

Configure
-----------------

Add to config file (config/web.php or common/config/main.php)

```
    'bootstrap' => [
        'config',
    ],
```

```
    'modules' => [
        'config' => [
            'class' => 'krok\config\Config',
        ],
    ],
```

register modules

```
    'modules' => [
        'cp' => [
            'class' => 'krok\cp\Cp',
            'modules' => [
                'config' => [
                    'class' => 'krok\config\Manage',
                ],
            ],
        ],
    ],
```

Add to config file (config/params.php or common/config/params.php)

```
    'nav' => [
        [
            'label' => ['category' => 'cp', 'context' => 'Administration'],
            'items' => [
                [
                    'label' => ['category' => 'config', 'context' => 'Config'],
                    'url' => ['/cp/config'],
                ],
                '<li class="divider"></li>',
            ],
        ],
    ],
```
