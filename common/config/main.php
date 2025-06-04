<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'extensions' => require(__DIR__ . '/../../vendor/yiisoft/extensions.php'),
    'modules' => [
        'social' => [
            // la clase del módulo
            'class' => 'kartik\social\Module',

            // la configuración global para el widget disqus
            'disqus' => [
                'settings' => ['shortname' => 'DISQUS_SHORTNAME'] // conf por defecto
            ],

            // la configuración global para el widget de los plugins de facebook
            'facebook' => [
                'appId' => '2888418048022004',
                'secret' => 'cc6f461a292e2614c6a6f60ef54e7ae2',
            ],

            // la configuración social para el widget del plugin social de google
            'google' => [
                'clientId' => 'GOOGLE_API_CLIENT_ID',
                'pageId' => 'GOOGLE_PLUS_PAGE_ID',
                'profileId' => 'GOOGLE_PLUS_PROFILE_ID',
            ],

            // la configuración global para el widget del plugin de google analytic
            'googleAnalytics' => [
                'id' => 'TRACKING_ID',
                'domain' => 'TRACKING_DOMAIN',
            ],

            // la configuración global para el widget del plugin de twitter
            'twitter' => [
                'screenName' => 'TWITTER_SCREEN_NAME'
            ],
        ],
        // sus otros módulos
    ],

    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

    ],
];
