<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Magento 2',
            'slug' => 'magento2',
            'description' => 'Découvrez la puissance de Magento 2, la plateforme de commerce électronique leader pour créer de superbes boutiques en ligne. Explorez ses riches fonctionnalités, ses options personnalisables et son évolutivité pour transformer votre entreprise en une puissance de commerce numérique.',
            'created_at' => now(),
            'updated_at' => now(),
            'parent_id' => null,
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Linux',
            'slug' => 'linux',
            'description' => "Explorez le système d'exploitation Linux, une plateforme robuste et open-source utilisée dans le monde entier pour l'hébergement de serveurs et le développement logiciel.",
            'created_at' => now(),
            'updated_at' => now(),
            'parent_id' => null,
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'SQL',
            'slug' => 'sql',
            'description' => "Découvrez SQL, le langage de requête universel pour la gestion des bases de données relationnelles, essentiel pour stocker et récupérer des données de manière efficace.",
            'created_at' => now(),
            'updated_at' => now(),
            'parent_id' => null,
        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'PHP',
            'slug' => 'php',
            'description' => 'Plongez dans le monde du développement web avec PHP, un langage de programmation populaire pour la création de sites web dynamiques et interactifs.',
            'created_at' => now(),
            'updated_at' => now(),
            'parent_id' => null,
        ]);
        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'JavaScript',
            'slug' => 'javascript',
            'description' => 'Explorez JavaScript, le langage de programmation essentiel pour le développement web côté client, permettant des fonctionnalités interactives sur les sites.',
            'created_at' => now(),
            'updated_at' => now(),
            'parent_id' => null,
        ]);
        DB::table('categories')->insert([
            'id' => 6,
            'name' => 'IA',
            'slug' => 'ia',
            'description' => "Découvrez l'Intelligence Artificielle (IA) et ses applications passionnantes, de l'apprentissage automatique à la vision par ordinateur",
            'created_at' => now(),
            'updated_at' => now(),
            'parent_id' => null,
        ]);
        DB::table('categories')->insert([
            'id' => 7,
            'name' => 'GIT',
            'slug' => 'git',
            'description' => 'Maîtrisez Git, un système de contrôle de version puissant et incontournable pour le suivi des modifications de code source.',
            'created_at' => now(),
            'updated_at' => now(),
            'parent_id' => null,
        ]);
        DB::table('categories')->insert([
            'id' => 8,
            'name' => 'Deployer',
            'slug' => 'deployer',
            'description' => 'Explorez les outils et les méthodes pour le déploiement efficace de vos applications et sites web.',
            'created_at' => now(),
            'updated_at' => now(),
            'parent_id' => null,
        ]);
        DB::table('categories')->insert([
            'id' => 9,
            'name' => 'Redis',
            'slug' => 'redis',
            'description' => 'Découvrez Redis, une base de données en mémoire rapide et polyvalente, idéale pour la mise en cache et la gestion des données.',
            'created_at' => now(),
            'updated_at' => now(),
            'parent_id' => null,
        ]);
        DB::table('categories')->insert([
            'id' => 10,
            'name' => 'Varnish',
            'slug' => 'varnish',
            'description' => 'Explorez Varnish, un proxy de mise en cache HTTP qui accélère la livraison de contenu web en réduisant la charge sur le serveur.',
            'created_at' => now(),
            'updated_at' => now(),
            'parent_id' => null,
        ]);
        DB::table('categories')->insert([
            'id' => 11,
            'name' => 'Elasticsearch',
            'slug' => 'elasticsearch',
            'description' => "Découvrez Elasticsearch, un moteur de recherche et d'analyse de données distribué, idéal pour l'exploration et la recherche de données volumineuses.",
            'created_at' => now(),
            'updated_at' => now(),
            'parent_id' => null,
        ]);
        DB::table('categories')->insert([
            'id' => 12,
            'name' => 'Laravel',
            'slug' => 'laravel',
            'description' => "Plongez dans le cadre de développement web Laravel, réputé pour sa simplicité et sa robustesse dans la création d'applications web modernes.",
            'created_at' => now(),
            'updated_at' => now(),
            'parent_id' => null,
        ]);
        DB::table('categories')->insert([
            'id' => 13,
            'name' => 'Node',
            'slug' => 'node',
            'description' => "Explorez Node.js, une plateforme de développement JavaScript côté serveur, idéale pour la création d'applications réseau rapides et évolutives.",
            'created_at' => now(),
            'updated_at' => now(),
            'parent_id' => null,
        ]);
        DB::table('categories')->insert([
            'id' => 14,
            'name' => 'Wordpress',
            'slug' => 'wordpress',
            'description' => "Découvrez WordPress, l'une des plates-formes de gestion de contenu les plus populaires pour la création de sites web et de blogs.",
            'created_at' => now(),
            'updated_at' => now(),
            'parent_id' => null,
        ]);
        DB::table('categories')->insert([
            'id' => 15,
            'name' => 'Apache',
            'slug' => 'apache',
            'description' => "Explorez le serveur web Apache, l'un des serveurs web les plus utilisés au monde, réputé pour sa stabilité et ses performances.",
            'created_at' => now(),
            'updated_at' => now(),
            'parent_id' => null,
        ]);
        DB::table('categories')->insert([
            'id' => 16,
            'name' => 'Regex',
            'slug' => 'regex',
            'description' => 'Maîtrisez les expressions régulières, un puissant outil pour la recherche de motifs dans les chaînes de caractères, utilisé dans le traitement de texte et la validation de données.',
            'created_at' => now(),
            'updated_at' => now(),
            'parent_id' => null,
        ]);
    }
}
