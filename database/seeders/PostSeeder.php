<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'To see disponible composer versions, composer version',
            'slug' => 'composer version',
            'content' => 'Pour voir la liste des versions disponibles

```
            composer show magento/product-community-edition 2.4.* --all | grep -m 1 versions
            
            composer show magetrend/giftcard -l
```',
            'is_featured' => 1,
            'is_published' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Get current layout name in block or phtml',
            'slug' => 'magento block',
            'content' => '
```
            $this->getRequest()->getFullActionName();
            
            $block->getType();
```
            ',
            'is_featured' => 1,
            'is_published' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Add a template from backend',
            'slug' => 'block',
            'content' => '```
            {{block class="Magento\Framework\View\Element\Template" template="Magento_Cms::carousel.phtml"}}
```',
            'is_featured' => 1,
            'is_published' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Active grid filters in backend',
            'slug' => 'grid filters backend',
            'content' => 'dans 
```
            vendor\magento\module-ui\view\base\web\templates\grid\filters\filters.html pour la classe -  data-grid-filters-actions-wrap
            ajouter la proprieté "opened: true," pour collapsible - collapsible="opened: true, openClass: false, closeOnOuter: false"
```',
            'is_featured' => 1,
            'is_published' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Uninstall module Magento 2',
            'slug' => 'uninstall magento 2',
            'content' => '```
            // si le module est installé avec composer faire ceci:
            composer remove smile/elasticsuiteeee
            php bin/magento module:uninstall -r <Vendor>_<Module>

            //si non 
            // désactiver le module et supprimer le dossier du module app/code/<Vendor>/<Module>
            // supprimer les tables des modules
            // supprimer les configs de module -
            DELETE FROM core_config_data WHERE path LIKE "vendor_module/%"
            //supprimer le module <Vendor>_<Module> dans app/etc/config.php
            //supprimer le module <Vendor>_<Module> dans la table setup_module - 
            DELETE FROM setup_module WHERE module="<Vendor>_<Module>


```',
            'is_featured' => 1,
            'is_published' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('posts')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Get product by id with API',
            'slug' => 'getById magento 2',
            'content' => '```
    //Rest Api getProductById, de base la route n\'est pas définie mais magento 2 déjà fournie la fonction getById dans \Magento\Catalog\Api\ProductRepositoryInterface
    //donc il sera nécessaire d\'ajouter que le fichier webapi.xml dans module déjà existant ou le créer et mettre
    <?xml version="1.0"?>
    <routes xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
            xsi:noNamespaceSchemaLocation="urn:magento:module:Magento_Webapi:etc/webapi.xsd">
        <route url="/V1/products/id/:productId" method="GET">
            <service class="Magento\Catalog\Api\ProductRepositoryInterface" method="getById"/>
            <resources>
                <resource ref="Magento_Catalog::products" />
            </resources>
        </route>
    </routes>

```',
            'is_featured' => 1,
            'is_published' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Get value from core_config',
            'slug' => 'core_config',
            'content' => 'Récuperer la valeur de core_config 
```

            $website_key = $this->scopeConfig->getValue(\'av_configuration/system_integration/idwebsite\',\Magento\Store\Model\ScopeInterface::SCOPE_STORES,$store_id);
            
```',
            'is_featured' => 1,
            'is_published' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Installer package français',
            'slug' => 'package français',
            'content' => '
```

    Install french pack:
    composer require mageplaza/magento-2-french-language-pack:dev-master
    php bin/magento setup:static-content:deploy fr_FR -f
    php bin/magento indexer:reindex
    php bin/magento cache:clean
    php bin/magento cache:flush
                
```',
            'is_featured' => 1,
            'is_published' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'title' => "Changing a Block's Template",
            'slug' => 'change_block_template',
            'content' => 'Changer le template pour un block 
```

    <referenceBlock name="copyright">
        <action method="setTemplate">
            <argument name="template" xsi:type="string">Dfr_Backend::page/copyright.phtml</argument>
        </action>
    </referenceBlock>
                
```',
            'is_featured' => 1,
            'is_published' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'title' => "Make cart sticky",
            'slug' => 'sticky cart',
            'content' => "
```

    require([
        'jquery',
        'mage/smart-keyboard-handler',
        'mage/mage',
        'mage/ie-class-fixer',
        'domReady!'
    ], function ($, keyboardHandler) {
        'use strict';
        $(document).ready(function(){
            $('.cart-summary').mage('sticky', {
                container: '#maincontent'
            });

            $('.panel.header .header.links').clone().appendTo('#store\\.links');
        });
        keyboardHandler.apply();
    });
                
```",
            'is_featured' => 1,
            'is_published' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'title' => "Magento 2 debugging ",
            'slug' => 'magento debugger',
            'content' => "Modules debugger
```

composer require vpietri/adm-quickdevbar
composer require mgtcommerce/module-mgtdevelopertoolbar
composer require smile/module-debug-toolbar
                
```
in db->connection app/etc/env.php

```
'profiler' => [
    'class' => 'Smile\\DebugToolbar\\DB\\Profiler',
    'enabled' => true
]
```
",
            'is_featured' => 1,
            'is_published' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'title' => "Enabling minify js and css in Production",
            'slug' => 'minify js and css production',
            'content' => "Modules debugger
```

php bin/magento config:set dev/js/minify_files 1
php bin/magento config:set dev/js/merge_files 1

php bin/magento config:set dev/css/minify_files 1
php bin/magento config:set dev/css/merge_css_files 1

php bin/magento setup:upgrade --keep-generated
php bin/magento cache:clean
rm -rf pub/static/*
php bin/magento setup:static-content:deploy
php bin/magento c:f
*/

```

si la versionning dans pub/static n'est pas trouvé, alors voir dans conf nginx ou apache

dans mon cas c'était le ficihier magento2.include qui était pas prise en compte par le fichier de conf nginx


/****** a voir aussi ************/
à voir aussi dans les confs nginx, est-ce que c'est le même mode qu'il est configuré

",
            'is_featured' => 1,
            'is_published' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
