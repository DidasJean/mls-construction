<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Realisation;
use Illuminate\Support\Facades\DB;

class ImportRealisations extends Command
{
    protected $signature = 'import:realisations';
    protected $description = 'Importe les 45 réalisations depuis le frontend vers la base de données';

    public function handle()
    {
        $this->info('🚀 Importation des 45 réalisations de MLS Construction...');
        
        // Assurer que le champ image est nullable
        $this->ensureImageIsNullable();
        
        // Vider la table si besoin
        if ($this->confirm('Vider la table realisations existante ?')) {
            Realisation::truncate();
            $this->info('Table realisations vidée.');
        }
        
        // Préparer les données pour les 45 réalisations
        $categories = ['villa', 'batiment', 'piscine', 'renovation', 'amenagement'];
        $locations = ['Lubumbashi', 'Kinshasa', 'Goma', 'Bukavu', 'Kisangani', 'Matadi', 'Kolwezi', 'Mbuji-Mayi', 'Likasi', 'RDC'];
        
        $realisations = [];
        
        for ($i = 1; $i <= 45; $i++) {
            // Catégorie selon le même algorithme que le frontend
            $categoryIndex = array_rand($categories);
            $category = $categories[$categoryIndex];
            
            // Attribution de certaines catégories spécifiques comme dans le frontend
            if ($i == 1) $category = 'villa';
            if ($i == 2) $category = 'villa';
            if ($i == 3) $category = 'piscine';
            if ($i == 4) $category = 'renovation';
            if ($i == 5) $category = 'villa';
            if ($i == 6) $category = 'amenagement';
            if ($i == 7) $category = 'batiment';
            if ($i == 8) $category = 'piscine';
            if ($i == 9) $category = 'villa';
            if ($i == 10) $category = 'renovation';
            
            $location = $locations[array_rand($locations)];
            
            // Déterminer le titre selon la catégorie
            $titre = $this->getTitleForCategory($category, $i, $location);
            $description = $this->getDescriptionForCategory($category);
            
            // Déterminer les surfaces et durées comme dans le frontend
            list($surface, $duree) = $this->getSurfaceAndDuree($category);
            
            // Image (numéro d'image comme dans le frontend)
            $imageNumber = $i % 20;
            if ($imageNumber == 0) $imageNumber = 20;
            
            // Date d'achèvement (aléatoire dans les 3 dernières années)
            $completionDate = now()->subDays(rand(1, 1000))->format('Y-m-d');
            
            $realisations[] = [
                'title' => $titre,
                'location' => $location,
                'description' => $description,
                'category' => $this->mapCategory($category),
                'featured' => $i <= 10, // Les 10 premiers sont en vedette
                'image' => "realisations/{$imageNumber}.jpg",
                'surface' => $surface,
                'duree' => $duree,
                'completion_date' => $completionDate,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        
        $this->info('📥 Importation en cours...');
        $bar = $this->output->createProgressBar(count($realisations));
        
        $imported = 0;
        $errors = 0;
        
        foreach ($realisations as $data) {
            try {
                Realisation::create($data);
                $imported++;
                $bar->advance();
            } catch (\Exception $e) {
                $this->error("Erreur sur : {$data['title']} - {$e->getMessage()}");
                $errors++;
            }
        }
        
        $bar->finish();
        $this->newLine(2);
        
        if ($errors > 0) {
            $this->error("⚠️  Import terminé avec {$errors} erreur(s)");
        } else {
            $this->info("✅ Import réussi ! {$imported}/45 réalisations importées.");
        }
        
        // Vérification
        $this->info("\n📊 VÉRIFICATION :");
        $this->table(
            ['ID', 'Titre', 'Lieu', 'Catégorie', 'Vedette'],
            Realisation::all(['id', 'title', 'location', 'category', 'featured'])->toArray()
        );
        
        $this->info("\n📈 STATISTIQUES :");
        $this->info("• Total réalisations : " . Realisation::count());
        $this->info("• Réalisations en vedette : " . Realisation::where('featured', true)->count());
        $this->info("• Réalisations par catégorie :");
        
        $categoriesCount = Realisation::select('category', DB::raw('count(*) as count'))
            ->groupBy('category')
            ->get()
            ->pluck('count', 'category');
        
        foreach ($categoriesCount as $category => $count) {
            $this->info("  - {$category} : {$count}");
        }
        
        $this->info("\n🎉 Ton dashboard affichera maintenant :");
        $this->info("  • Services : " . \App\Models\Service::count());
        $this->info("  • Réalisations : " . Realisation::count());
        
        return Command::SUCCESS;
    }
    
    private function ensureImageIsNullable()
    {
        try {
            // Vérifier si le champ image est nullable
            $columns = DB::select('SHOW COLUMNS FROM realisations WHERE Field = "image"');
            if (!empty($columns)) {
                $column = $columns[0];
                if ($column->Null === 'NO') {
                    $this->info('🛠️  Rendre le champ image nullable...');
                    DB::statement('ALTER TABLE realisations MODIFY COLUMN image VARCHAR(255) NULL');
                    $this->info('✅ Champ image rendu nullable.');
                }
            }
        } catch (\Exception $e) {
            $this->warn("⚠️  Impossible de vérifier/modifier le champ image : {$e->getMessage()}");
        }
    }
    
    private function getTitleForCategory($category, $index, $location)
    {
        $titres = [
            'villa' => ["Villa Moderne #{$index}", "Résidence {$location}", "Villa Contemporaine", "Maison Familiale", "Villa Design"],
            'batiment' => ["Bâtiment Commercial", "Immeuble #{$index}", "Centre d'Affaires", "Édifice Moderne", "Structure #{$index}"],
            'piscine' => ["Piscine {$location}", "Bassin #{$index}", "Piscine Familiale", "Espace Aquatique", "Piscine Design"],
            'renovation' => ["Rénovation #{$index}", "Transformation", "Réhabilitation", "Modernisation", "Restauration"],
            'amenagement' => ["Aménagement #{$index}", "Jardin {$location}", "Espace Vert", "Paysagement", "Terrasse"]
        ];
        
        return $titres[$category][array_rand($titres[$category])];
    }
    
    private function getDescriptionForCategory($category)
    {
        $descriptions = [
            'villa' => [
                'Construction d\'une villa contemporaine',
                'Villa familiale spacieuse avec jardin privé',
                'Villa moderne avec piscine intégrée',
                'Villa design de luxe avec finitions premium',
                'Villa écologique avec matériaux durables'
            ],
            'batiment' => [
                'Bâtiment commercial moderne avec locaux adaptés',
                'Immeuble de bureaux avec espaces modulables',
                'Bâtiment administratif conforme aux normes',
                'Centre commercial avec parking souterrain',
                'Structure industrielle robuste et fonctionnelle'
            ],
            'piscine' => [
                'Piscine résidentielle avec système de filtration avancé',
                'Piscine olympique aux normes internationales',
                'Piscine avec spa et système de chauffage',
                'Piscine naturelle avec écosystème intégré',
                'Piscine de loisir avec toboggan et éclairage LED'
            ],
            'renovation' => [
                'Rénovation complète avec modernisation des équipements',
                'Transformation moderne avec extension',
                'Réhabilitation structurelle avec renforcement',
                'Rénovation énergétique avec isolation performante',
                'Modernisation intérieure avec redesign complet'
            ],
            'amenagement' => [
                'Aménagement paysager avec plantes locales',
                'Jardin d\'agrément avec éclairage décoratif',
                'Terrasse extérieure avec mobilier intégré',
                'Espace vert urbain avec aires de détente',
                'Parc de loisirs avec équipements de jeux'
            ]
        ];
        
        return $descriptions[$category][array_rand($descriptions[$category])];
    }
    
    private function getSurfaceAndDuree($category)
    {
        $surfaces = [
            'villa' => ['200 m²', '300 m²', '350 m²', '400 m²', '500 m²'],
            'batiment' => ['1000 m²', '1500 m²', '2000 m²', '2500 m²', '3000 m²'],
            'piscine' => ['8x4 m', '10x5 m', '12x6 m', '15x7 m', '25x10 m'],
            'renovation' => ['150 m²', '250 m²', '350 m²', '450 m²', '550 m²'],
            'amenagement' => ['500 m²', '1000 m²', '1500 m²', '2000 m²', '2500 m²']
        ];
        
        $durees = [
            'villa' => ['6 mois', '8 mois', '10 mois', '12 mois', '14 mois'],
            'batiment' => ['10 mois', '12 mois', '15 mois', '18 mois', '24 mois'],
            'piscine' => ['3 semaines', '4 semaines', '6 semaines', '8 semaines', '10 semaines'],
            'renovation' => ['2 mois', '3 mois', '4 mois', '5 mois', '6 mois'],
            'amenagement' => ['1 mois', '2 mois', '3 mois', '4 mois', '5 mois']
        ];
        
        $surface = $surfaces[$category][array_rand($surfaces[$category])];
        $duree = $durees[$category][array_rand($durees[$category])];
        
        return [$surface, $duree];
    }
    
    private function mapCategory($category)
    {
        $mapping = [
            'villa' => 'résidentiel',
            'batiment' => 'commercial',
            'piscine' => 'loisir',
            'renovation' => 'rénovation',
            'amenagement' => 'paysager'
        ];
        
        return $mapping[$category] ?? $category;
    }
}