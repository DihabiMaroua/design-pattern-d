<?php
// Déclaration d'une interface 'Shareable' qui exige une méthode 'share'.
interface Shareable {
    public function share();
}

// Classe 'EmailShare' qui implémente l'interface 'Shareable'.
class EmailShare implements Shareable {
    // Implémentation concrète de la méthode 'share' pour le partage par email.
    public function share() {
        echo "Share by email.";
    }
}

// Classe 'SocialMediaShare' qui implémente l'interface 'Shareable'.
class SocialMediaShare implements Shareable {
    // Implémentation concrète de la méthode 'share' pour le partage sur les réseaux sociaux.
    public function share() {
        echo "Share on social media.";
    }
}

// Fonction qui prend un paramètre de type 'Shareable'.
// Peu importe la classe, tant qu'elle implémente 'Shareable'.
function shareContent(Shareable $shareMethod) {
    $shareMethod->share(); // Appelle la méthode 'share' de l'objet fourni.
}

// Exécution avec une instance de 'EmailShare'.
shareContent(new EmailShare()); // Affiche "Share by email."

// Exécution avec une instance de 'SocialMediaShare'.
shareContent(new SocialMediaShare()); // Affiche "Share on social media."
?>