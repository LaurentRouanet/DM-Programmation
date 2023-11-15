<?php
// Classe de base Personne
class Personne {
    protected $prenom;
    protected $age;

    public function __construct($prenom, $age) {
        $this->prenom = $prenom;
        $this->age = $age;
    }
}

// Interface pour la méthode sePresenter
interface Presentation {
    public function sePresenter();
}

// Classe Homme qui hérite de Personne et implémente Presentation
class Homme extends Personne implements Presentation {
    public function sePresenter() {
        return "Je suis un Homme de {$this->age} ans et je m'appelle {$this->prenom}";
    }
}

// Classe Femme qui hérite de Personne et implémente Presentation
class Femme extends Personne implements Presentation {
    public function sePresenter() {
        return "Je suis une Femme de {$this->age} ans et je m'appelle {$this->prenom}";
    }
}

// Exemple d'utilisation
$homme = new Homme("John", 30);
$femme = new Femme("Alice", 25);

echo $homme->sePresenter(); // Affiche : Je suis un Homme de 30 ans et je m'appelle John
echo "<br>";
echo $femme->sePresenter(); // Affiche : Je suis une Femme de 25 ans et je m'appelle Alice
?>