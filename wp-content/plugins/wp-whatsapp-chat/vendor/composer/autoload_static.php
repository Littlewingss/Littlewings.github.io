<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b13824f71742eef3e3e96575718f7c6
{
    public static $files = array (
        '3773ef3f09c37da5478d578e32b03a4b' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/actions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Q' => 
        array (
            'QuadLayers\\WP_Plugin_Table_Links\\' => 33,
            'QuadLayers\\WP_Plugin_Suggestions\\' => 33,
            'QuadLayers\\WP_Notice_Plugin_Required\\' => 37,
            'QuadLayers\\WP_Notice_Plugin_Promote\\' => 36,
            'QuadLayers\\WP_Dashboard_Widget_News\\' => 36,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'QuadLayers\\WP_Plugin_Table_Links\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-table-links/src',
        ),
        'QuadLayers\\WP_Plugin_Suggestions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src',
        ),
        'QuadLayers\\WP_Notice_Plugin_Required\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-required/src',
        ),
        'QuadLayers\\WP_Notice_Plugin_Promote\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src',
        ),
        'QuadLayers\\WP_Dashboard_Widget_News\\' => 
        array (
            0 => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-dashboard-widget-news/src',
        ),
    );

    public static $classMap = array (
        'Automattic\\Jetpack\\Assets' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/src/class-assets.php',
        'Automattic\\Jetpack\\Assets\\Semver' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-assets/src/class-semver.php',
        'Automattic\\Jetpack\\Composer\\Manager' => __DIR__ . '/..' . '/automattic/jetpack-composer-plugin/src/class-manager.php',
        'Automattic\\Jetpack\\Composer\\Plugin' => __DIR__ . '/..' . '/automattic/jetpack-composer-plugin/src/class-plugin.php',
        'Automattic\\Jetpack\\Constants' => __DIR__ . '/../..' . '/jetpack_vendor/automattic/jetpack-constants/src/class-constants.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'QuadLayers\\QLWAPP\\Backend' => __DIR__ . '/../..' . '/lib/class-backend.php',
        'QuadLayers\\QLWAPP\\Controllers\\Base' => __DIR__ . '/../..' . '/lib/controllers/class-base.php',
        'QuadLayers\\QLWAPP\\Controllers\\Box' => __DIR__ . '/../..' . '/lib/controllers/class-box.php',
        'QuadLayers\\QLWAPP\\Controllers\\Button' => __DIR__ . '/../..' . '/lib/controllers/class-button.php',
        'QuadLayers\\QLWAPP\\Controllers\\Contact' => __DIR__ . '/../..' . '/lib/controllers/class-contact.php',
        'QuadLayers\\QLWAPP\\Controllers\\Display' => __DIR__ . '/../..' . '/lib/controllers/class-display.php',
        'QuadLayers\\QLWAPP\\Controllers\\Display_Services' => __DIR__ . '/../..' . '/lib/controllers/class-display-services.php',
        'QuadLayers\\QLWAPP\\Controllers\\Premium' => __DIR__ . '/../..' . '/lib/controllers/class-premium.php',
        'QuadLayers\\QLWAPP\\Controllers\\Scheme' => __DIR__ . '/../..' . '/lib/controllers/class-scheme.php',
        'QuadLayers\\QLWAPP\\Controllers\\Settings' => __DIR__ . '/../..' . '/lib/controllers/class-settings.php',
        'QuadLayers\\QLWAPP\\Controllers\\Welcome' => __DIR__ . '/../..' . '/lib/controllers/class-welcome.php',
        'QuadLayers\\QLWAPP\\Controllers\\WooCommerce' => __DIR__ . '/../..' . '/lib/controllers/class-woocommerce.php',
        'QuadLayers\\QLWAPP\\Frontend' => __DIR__ . '/../..' . '/lib/class-frontend.php',
        'QuadLayers\\QLWAPP\\Models\\Base' => __DIR__ . '/../..' . '/lib/models/class-base.php',
        'QuadLayers\\QLWAPP\\Models\\Box' => __DIR__ . '/../..' . '/lib/models/class-box.php',
        'QuadLayers\\QLWAPP\\Models\\Button' => __DIR__ . '/../..' . '/lib/models/class-button.php',
        'QuadLayers\\QLWAPP\\Models\\Chat' => __DIR__ . '/../..' . '/lib/models/class-chat.php',
        'QuadLayers\\QLWAPP\\Models\\Contact' => __DIR__ . '/../..' . '/lib/models/class-contact.php',
        'QuadLayers\\QLWAPP\\Models\\Display' => __DIR__ . '/../..' . '/lib/models/class-display.php',
        'QuadLayers\\QLWAPP\\Models\\Display_Component' => __DIR__ . '/../..' . '/lib/models/class-display-component.php',
        'QuadLayers\\QLWAPP\\Models\\License' => __DIR__ . '/../..' . '/lib/models/class-license.php',
        'QuadLayers\\QLWAPP\\Models\\Scheme' => __DIR__ . '/../..' . '/lib/models/class-scheme.php',
        'QuadLayers\\QLWAPP\\Models\\Settings' => __DIR__ . '/../..' . '/lib/models/class-settings.php',
        'QuadLayers\\QLWAPP\\Models\\WooCommerce' => __DIR__ . '/../..' . '/lib/models/class-woocommerce.php',
        'QuadLayers\\QLWAPP\\Plugin' => __DIR__ . '/../..' . '/lib/class-plugin.php',
        'QuadLayers\\WP_Dashboard_Widget_News\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-dashboard-widget-news/src/Load.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Load.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\PluginByFile' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginByFile.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\PluginBySlug' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginBySlug.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\PluginBySlugV2' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/PluginBySlugV2.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginActions' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginActions.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginActionsLinks' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginActionsLinks.php',
        'QuadLayers\\WP_Notice_Plugin_Promote\\Traits\\PluginDataByFile' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-promote/src/Traits/PluginDataByFile.php',
        'QuadLayers\\WP_Notice_Plugin_Required\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-required/src/Load.php',
        'QuadLayers\\WP_Notice_Plugin_Required\\Plugin' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-notice-plugin-required/src/Plugin.php',
        'QuadLayers\\WP_Plugin_Suggestions\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Load.php',
        'QuadLayers\\WP_Plugin_Suggestions\\Page' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Page.php',
        'QuadLayers\\WP_Plugin_Suggestions\\Table' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-suggestions/src/Table.php',
        'QuadLayers\\WP_Plugin_Table_Links\\Load' => __DIR__ . '/../..' . '/jetpack_vendor/quadlayers/wp-plugin-table-links/src/Load.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b13824f71742eef3e3e96575718f7c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b13824f71742eef3e3e96575718f7c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5b13824f71742eef3e3e96575718f7c6::$classMap;

        }, null, ClassLoader::class);
    }
}
