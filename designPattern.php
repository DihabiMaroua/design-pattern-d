<?php
// Interface pour les Sujets (Auteurs)
interface Sujet {
    public function attacher(Observateur $observateur);
    public function détacher(Observateur $observateur);
    public function notifier();
}

// Interface pour les Observateurs (Abonnés)
interface Observateur {
    public function mettreÀJour(Sujet $sujet);
}

// Classe Auteur
class Auteur implements Sujet {
    private $observateurs = [];
    private $dernierArticle = "";

    // Attacher un observateur
    public function attacher(Observateur $observateur) {
        $this->observateurs[] = $observateur;
    }

    // Détacher un observateur
    public function détacher(Observateur $observateur) {
        $this->observateurs = array_filter($this->observateurs, function($o) use ($observateur) {
            return $o !== $observateur;
        });
    }

    // Notifier tous les observateurs d'une mise à jour
    public function notifier() {
        foreach ($this->observateurs as $observateur) {
            $observateur->mettreÀJour($this);
        }
    }

    // Publier un nouvel article
    public function publierArticle($article) {
        $this->dernierArticle = $article;
        $this->notifier();
    }

    // Obtenir le dernier article
    public function obtenirDernierArticle() {
        return $this->dernierArticle;
    }
}

// Classe Abonné
class Abonné implements Observateur {
    private $id;

    public function __construct($id) {
        $this->id = $id;
    }

    // Mise à jour appelée lorsque l'auteur publie un nouvel article
    public function mettreÀJour(Sujet $sujet) {
        echo "Abonné " . $this->id . " a été notifié! Nouvel article: " . $sujet->obtenirDernierArticle() . "\n";
    }
}

// Utilisation
$auteur = new Auteur();

// Créer quelques abonnés
$abonné1 = new Abonné(1);
$abonné2 = new Abonné(2);

// Attacher les abonnés à l'auteur
$auteur->attacher($abonné1);
$auteur->attacher($abonné2);

// Publier un nouvel article
$auteur->publierArticle("5 conseils pour améliorer votre écriture");

// Détacher un abonné et publier un autre article
$auteur->détacher($abonné1);
$auteur->publierArticle("Comprendre le modèle Observateur en PHP");
?>
