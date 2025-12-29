<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Service;

class ImportServices extends Command
{
    protected $signature = 'import:services';
    protected $description = 'Importe les 14 services depuis le frontend vers la base de données';

    public function handle()
    {
        $this->info('🚀 Importation des 14 services de MLS Construction...');
        
        // Vider la table si besoin
        if ($this->confirm('Vider la table services existante ?')) {
            Service::truncate();
            $this->info('Table services vidée.');
        }
        
        // Les 14 services exacts de ton frontend
        $services = [
            [
                'title' => 'Construction Générale',
                'description' => 'Construction de maisons, bâtiments commerciaux et industriels selon les normes les plus strictes et les dernières innovations.',
                'icon' => 'fas fa-building',
                'order' => 1,
                'is_active' => true,
                'image' => 'services/construction.jpg'
            ],
            [
                'title' => 'Forage Hydraulique',
                'description' => 'Forage d\'eau potable avec études géologiques avancées, installation complète et maintenance préventive des systèmes.',
                'icon' => 'fas fa-water',
                'order' => 2,
                'is_active' => true,
                'image' => 'services/forage.jpg'
            ],
            [
                'title' => 'Peinture & Finitions',
                'description' => 'Travaux de peinture intérieure et extérieure avec finitions professionnelles, garanties et choix de produits haut de gamme.',
                'icon' => 'fas fa-paint-roller',
                'order' => 3,
                'is_active' => true,
                'image' => 'services/peinture.jpg'
            ],
            [
                'title' => 'Plomberie Sanitaire',
                'description' => 'Installation et maintenance des systèmes sanitaires modernes avec garantie de conformité aux normes internationales.',
                'icon' => 'fas fa-faucet',
                'order' => 4,
                'is_active' => true,
                'image' => 'services/plomberie.jpg'
            ],
            [
                'title' => 'Froid & Climatisation',
                'description' => 'Installation et entretien de climatiseurs, chambres froides et systèmes de réfrigération industrielle.',
                'icon' => 'fas fa-snowflake',
                'order' => 5,
                'is_active' => true,
                'image' => 'services/climatisation.jpg'
            ],
            [
                'title' => 'Piscines Design',
                'description' => 'Conception et construction de piscines modernes, durables avec systèmes de filtration et traitement d\'eau avancés.',
                'icon' => 'fas fa-swimming-pool',
                'order' => 6,
                'is_active' => true,
                'image' => 'services/piscines.jpg'
            ],
            [
                'title' => 'Énergies Renouvelables',
                'description' => 'Installation de panneaux solaires et solutions énergétiques autonomes pour une consommation responsable et économique.',
                'icon' => 'fas fa-solar-panel',
                'order' => 7,
                'is_active' => true,
                'image' => 'services/solaire.jpg'
            ],
            [
                'title' => 'Carrelage Expert',
                'description' => 'Pose de carreaux pour sols et murs avec précision, choix de matériaux premium, designs innovants et durables.',
                'icon' => 'fas fa-th-large',
                'order' => 8,
                'is_active' => true,
                'image' => 'services/carrelage.jpg'
            ],
            [
                'title' => 'Plafonds Modulaires',
                'description' => 'Plafonds modernes : staff, PVC, faux plafonds avec isolation phonique et thermique pour un confort optimal.',
                'icon' => 'fas fa-layer-group',
                'order' => 9,
                'is_active' => true,
                'image' => 'services/plafonds.jpg'
            ],
            [
                'title' => 'Vente de Terrains',
                'description' => 'Vente de terrains sécurisés avec documents légaux garantis, viabilisation et accompagnement personnalisé.',
                'icon' => 'fas fa-map',
                'order' => 10,
                'is_active' => true,
                'image' => 'services/terrains.jpg'
            ],
            [
                'title' => 'Menuiserie Sur Mesure',
                'description' => 'Menuiserie bois et aluminium sur mesure pour portes, fenêtres et aménagements intérieurs personnalisés.',
                'icon' => 'fas fa-hammer',
                'order' => 11,
                'is_active' => true,
                'image' => 'services/menuiserie.jpg'
            ],
            [
                'title' => 'Location d\'Engins',
                'description' => 'Location d\'engins de chantier performants avec opérateurs qualifiés, maintenance incluse et assistance technique.',
                'icon' => 'fas fa-truck-moving',
                'order' => 12,
                'is_active' => true,
                'image' => 'services/engins.jpg'
            ],
            [
                'title' => 'Architecture & Design',
                'description' => 'Conception architecturale innovante et suivi personnalisé de vos projets de construction, du rêve à la réalité.',
                'icon' => 'fas fa-drafting-compass',
                'order' => 13,
                'is_active' => true,
                'image' => 'services/architecture.jpg'
            ],
            [
                'title' => 'Nettoyage Post-travaux',
                'description' => 'Nettoyage professionnel de bâtiments après travaux pour une remise des clés impeccable et prête à l\'emploi.',
                'icon' => 'fas fa-broom',
                'order' => 14,
                'is_active' => true,
                'image' => 'services/nettoyage.jpg'
            ],
        ];
        
        $imported = 0;
        $errors = 0;
        
        $this->info('📥 Importation en cours...');
        $bar = $this->output->createProgressBar(count($services));
        
        foreach ($services as $serviceData) {
            try {
                Service::create($serviceData);
                $imported++;
                $bar->advance();
            } catch (\Exception $e) {
                $this->error('Erreur sur : ' . $serviceData['title'] . ' - ' . $e->getMessage());
                $errors++;
            }
        }
        
        $bar->finish();
        $this->newLine(2);
        
        if ($errors > 0) {
            $this->error("⚠️  Import terminé avec {$errors} erreur(s)");
        } else {
            $this->info("✅ Import réussi ! {$imported}/14 services importés.");
        }
        
        // Vérification
        $this->info("\n📊 VÉRIFICATION :");
        $this->table(
            ['ID', 'Titre', 'Statut'],
            Service::all(['id', 'title', 'is_active'])->toArray()
        );
        
        $this->info("\n🎉 Ton dashboard affichera maintenant : Services : " . Service::count());
        
        return Command::SUCCESS;
    }
}