<?php
// Classe 'Watermark' avec une méthode pour ajouter un filigrane.
class Watermark {
    // Méthode pour ajouter un filigrane à l'image.
    public function add() {
        echo "Watermark added.";
    }
}

// Classe 'Image' qui utilise la composition pour inclure un objet 'Watermark'.
class Image {
    // Propriété privée pour stocker l'objet 'Watermark'.
    private $watermark;

    // Le constructeur reçoit un objet 'Watermark' et l'assigne à la propriété locale.
    public function __construct(Watermark $watermark) {
        $this->watermark = $watermark;
    }

    // Méthode pour sauvegarder l'image. Utilise l'objet 'Watermark'.
    public function save() {
        $this->watermark->add(); // Ajoute le filigrane.
        echo "Image saved."; // Enregistre l'image.
    }
}

// Création d'un objet 'Watermark'.
$watermark = new Watermark();

// Création d'un objet 'Image' avec composition d'un 'Watermark'.
$image = new Image($watermark);

// Appel de la méthode 'save' de l'objet 'Image', qui à son tour appelle 'add' sur 'Watermark'.
$image->save(); // Affiche "Watermark added. Image saved."
?>