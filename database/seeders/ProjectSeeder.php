<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'name' => 'Magento 2 Multistore',
            'url' => 'https://www.esprit-moto-quad.com',
            'description' => "
            # Projet : Migration et Optimisation d'un Site de Vente de Pièces Détachées pour Motos et Quads

            ## Aperçu
            
            Ce projet captivant a consisté en la transformation complète d'un site de vente en ligne spécialisé dans les pièces détachées pour motos et quads. L'objectif principal était de moderniser l'infrastructure existante, d'améliorer l'expérience utilisateur, d'optimiser les performances du site et de garantir la conformité aux réglementations RGPD. Voici un aperçu plus détaillé des principales réalisations :
            
            ## Tâches Accomplies
            
            ### Migration Complexes de Magento 1 vers Magento 2
            
            - **Migration de Magento 1 vers Magento 2** : Ce projet a commencé par une migration complexe des sites existants de Magento 1 vers la dernière version de Magento 2. Cette migration a été réalisée avec succès sans interruption majeure du service, préservant ainsi la continuité des opérations.
            
            - **Transition vers Multistore** : En parallèle, nous avons transformé un simple store (M1) en une plateforme Multistore (M2) pour permettre une diversification plus efficace de l'offre de produits.
            
            ### Amélioration de l'Expérience Client
            
            - **Optimisation de l'Ergonomie** : L'ergonomie du site a été améliorée pour offrir aux utilisateurs une expérience fluide et intuitive de la navigation et de la recherche de pièces.
            
            - **URLs Dynamiques pour une Meilleure Visibilité** : Pour améliorer la visibilité sur les moteurs de recherche, nous avons mis en place des URLs dynamiques pour les produits groupés en fonction du modèle sélectionné. Cela a eu un impact significatif sur le référencement (SEO) et la visibilité en ligne.
            
            ### Développement de Modules Magento 2
            
            - **Modules Sur Mesure** : Plusieurs modules Magento 2 ont été développés sur mesure pour répondre aux besoins spécifiques du client, notamment :
              - Export des caisses pour faciliter la comptabilité.
              - Import de fichiers (stock, produits, prix) en mode cron et en terminal.
              - Export du fichier des commandes pour le préparateur des commandes.
              - Mise en place de Google Tag Manager et intégration des balises Google Ads Remarketing.
              - Automatisation de la génération des fichiers de flux Google Shopping pour les importer dans Merchant Center.
              - Gestion complexe de l'inventaire avec plusieurs statuts de produit en fonction de la disponibilité chez le fournisseur et du stock physique.
            
            ### Récupération et Intégration de Données
            
            - **Crawling de Vues Éclatées** : Nous avons mis en place un système de récupération (crawling) des vues éclatées des motos directement depuis le fournisseur. Cette opération a permis d'obtenir des données précieuses sur les pièces.
            
            - **Coordonnées des Pièces** : Les coordonnées des pièces ont été importées et associées aux produits pour différentes marques, améliorant ainsi la précision des informations sur les pièces.
            
            ### Autres Améliorations
            
            - **Intégration de Vuejs** : Nous avons intégré Vue.js pour optimiser le chargement des vues éclatées, permettant le chargement progressif des données pour améliorer le temps de chargement et éviter la surcharge lors du passage des robots des moteurs de recherche.
            
            - **Module Partfinder** : Le module Partfinder a été amélioré pour permettre aux clients de filtrer les produits en fonction de catégories filtrables, et les sélections de modèle sont maintenant conservées en session.
            
            - **Optimisation des Performances Web** : Le site a fait l'objet d'une optimisation rigoureuse des performances web, garantissant une vitesse et une réactivité maximales pour les utilisateurs.
            
            - **Conformité RGPD** : Une attention particulière a été portée à la conformité RGPD pour protéger les données des utilisateurs.
            
            ## Conclusion
            
            Ce projet a été une expérience passionnante qui a mis en avant notre expertise en matière de migration complexe de plateformes e-commerce, de développement de modules sur mesure, d'optimisation des performances web et d'amélioration de l'expérience utilisateur. Le résultat final est un site web moderne, performant et conforme à la réglementation, offrant une expérience d'achat optimale pour les amateurs de motos et de quads à la recherche de pièces détachées de haute qualité.
                        ",
            'featured_image' => 'projects/motoshop.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('projects')->insert([
            'category_id' => 14,
            'user_id' => 1,
            'name' => 'Rivalwork',
            'url' => 'https://rivalwork.pl',
            'description' => "# Projet : Site Vitrine Multilingue pour une Entreprise d'Externalisation (Outsourcing)

            ## Aperçu
            
            Le projet \"RivalWork\" est un exemple remarquable de création d'un site web vitrine et d'un outil en laravel pour une entreprise de services d'externalisation (outsourcing). Ce site, disponible en plusieurs langues, a été conçu pour mettre en avant les compétences et les avantages de l'entreprise tout en offrant une expérience conviviale aux visiteurs internationaux. Avec un design moderne et des informations clés présentées de manière claire, ce site web constitue un outil efficace pour promouvoir les services de l'entreprise.
            
            ## Principales Caractéristiques
            
            ### Site Web Multilingue
            
            - **Interface Multilingue** : Le site est disponible en plusieurs langues pour atteindre un public international. Cela permet une communication efficace avec des clients potentiels dans diverses régions du monde.
            
            ### Design Moderne et Convivial
            
            - **Design Épuré et Moderne** : Le design du site est à la fois épuré et moderne, créant une image professionnelle et attrayante pour l'entreprise.
            
            - **Navigation Conviviale** : L'interface utilisateur a été soigneusement conçue pour garantir une navigation conviviale, permettant aux visiteurs de trouver rapidement les informations dont ils ont besoin.
            
            ### Mise en Avant des Compétences et des Avantages
            
            - **Présentation des Compétences** : Le site met en avant les compétences clés de l'entreprise dans le domaine de l'externalisation, montrant sa capacité à répondre aux besoins des clients.
            
            - **Avantages Clairs** : Les avantages de l'entreprise sont présentés de manière claire et concise, aidant les visiteurs à comprendre pourquoi ils devraient choisir RivalWork pour leurs besoins d'externalisation.
            
            ### Outil de Traitement des Demandes sous Laravel
            
            - **Outil de Gestion des Demandes** : En plus du site web, un outil de traitement des demandes a été développé en utilisant Laravel. Cet outil permet à l'entreprise de gérer efficacement les demandes de renseignements et de services de ses clients.
                        
            ",
            'featured_image' => 'projects/rivalwork.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('projects')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'name' => "Kira's Web",
            'url' => 'https://vmi1171183.contaboserver.net',
            'description' => "
            # Projet : Site Web Lancé Entièrement dans un Environnement Docker avec Configuration Nginx et Intégration du Thème Porto

## Aperçu

Le projet \"KirasWeb\" est une réalisation exceptionnelle qui a permis de créer un site web entièrement lancé dans un environnement Docker, tout en utilisant une configuration Nginx optimisée et en intégrant le thème Porto. Cette approche innovante repousse les limites de la flexibilité et de l'efficacité en utilisant des services tels qu'Elasticsearch, Varnish, Redis et RabbitMQ pour offrir une expérience utilisateur exceptionnelle.

## Principales Caractéristiques

### Environnement Docker

- **Déploiement dans un Conteneur Docker** : Tout le site web a été lancé dans des conteneurs Docker, ce qui offre une grande flexibilité et une gestion simplifiée de l'infrastructure.

### Utilisation de Services de Pointe

- **Elasticsearch** : L'intégration d'Elasticsearch permet une recherche avancée et une indexation efficace des données.

- **Varnish** : Varnish est utilisé pour accélérer la mise en cache des pages web, améliorant ainsi la vitesse de chargement du site.

- **Redis** : Redis est utilisé comme système de mise en cache en mémoire pour accélérer les opérations de lecture/écriture.

- **RabbitMQ** : RabbitMQ facilite la gestion des files d'attente pour les opérations asynchrones, garantissant une expérience utilisateur fluide.

### Configuration Nginx Optimisée

- **Nginx** : La configuration Nginx a été optimisée pour garantir des performances de serveur web de premier ordre, avec des fonctionnalités telles que la compression Gzip, la gestion des connexions et la distribution de charge.

### Intégration du Thème Porto

- **Thème Porto** : Le thème Porto, connu pour son design moderne et élégant, a été intégré au site pour offrir une expérience visuelle attrayante aux utilisateurs.

### Flexibilité et Efficacité

- **Flexibilité de Configuration** : L'environnement Docker permet une configuration flexible, ce qui facilite l'ajout ou la suppression de services en fonction des besoins.

- **Efficacité Opérationnelle** : L'utilisation de conteneurs Docker simplifie la gestion opérationnelle et permet une évolutivité facile.

## Résultats

Le projet \"KirasWeb\" démontre l'innovation et la maîtrise technique en créant un site web entièrement basé sur Docker, tout en optimisant la configuration Nginx et en intégrant le thème Porto. L'utilisation de technologies avancées telles qu'Elasticsearch, Varnish, Redis et RabbitMQ garantit une expérience utilisateur exceptionnelle, tandis que l'approche axée sur la flexibilité et l'efficacité garantit une gestion simplifiée de l'infrastructure et des performances élevées. C'est un projet exemplaire dans le domaine de la mise en œuvre de technologies de pointe pour les sites web.

",
            'featured_image' => 'projects/kirasweb.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
