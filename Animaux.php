<?php

/**
 * Classe de base (parent) : Animal
 * - Illustrations :
 *   - Encapsulation : on utilise des propriétés protégées (protected).
 *   - Abstraction : la classe est abstraite, on ne peut pas l'instancier directement.
 *   - Polymorphisme : on force les classes filles à implémenter certaines méthodes abstraites.
 */
abstract class Animal
{
    protected string $nom;
    
    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }
    
    /**
     * Méthode abstraite : toutes les classes filles devront implémenter un cri ou un son.
     */
    abstract public function crier(): void;
    
    /**
     * Méthode normale : on peut la surcharger (override) dans les classes filles si besoin.
     */
    public function seDeplacer(): void
    {
        echo $this->nom . " se déplace.\n";
    }

    /**
     * Accesseur (getter) pour le nom de l'animal.
     */
    public function getNom(): string
    {
        return $this->nom;
    }
}

/**
 * Classe Imaginaire (hérite d'Animal)
 * - Illustre un type spécial d'Animal qui peut avoir des capacités magiques.
 */
abstract class Imaginaire extends Animal
{
    protected bool $magique = true;

    public function estMagique(): bool
    {
        return $this->magique;
    }

    /**
     * On pourrait ajouter ici des méthodes spécifiques au type "imaginaire"
     * par exemple "voler()", "cracherDuFeu()", etc.
     */
}

/**
 * Classe Mammifere (hérite d'Animal)
 * - Ajoute une propriété ou un comportement propre aux mammifères.
 */
abstract class Mammifere extends Animal
{
    protected bool $allaite = true;

    public function estAllaite(): bool
    {
        return $this->allaite;
    }
}

class Truc extends Animal
{
    public function crier(): void
    {
        echo $this->nom . " fait un bruis : oiqsfgoihxfvôh<xcv!\n";
    }

    /**
     * On peut surcharger la méthode seDeplacer() pour être plus précis.
     */
    public function seDeplacer(): void
    {
        echo $this->nom . " rampe en l'air.\n";
    }
}
/**
 * Classe Reptile (hérite d'Animal)
 * - Ajoute un comportement, une caractéristique spécifique aux reptiles.
 */
abstract class Reptile extends Animal
{
    protected bool $aSangFroid = true;

    public function estASangFroid(): bool
    {
        return $this->aSangFroid;
    }
}

/**
 * Classe Chien (hérite de Mammifere)
 * - Exemple d'un mammifère concret.
 * - Implémente la méthode abstraite crier().
 */
class Chien extends Mammifere
{
    public function crier(): void
    {
        echo $this->nom . " aboie: Ouaf!\n";
    }

    /**
     * On peut surcharger la méthode seDeplacer() pour être plus précis.
     */
    public function seDeplacer(): void
    {
        echo $this->nom . " court sur ses pattes.\n";
    }
}


class Humain extends Mammifere
{
    public function crier(): void
    {
        echo $this->nom . " gueule: J'ai faim!\n";
    }

    public function seDeplacer(): void
    {
        echo $this->nom . " traîne des pieds.\n";
    }
}

/**
 * Classe Lezard (hérite de Reptile)
 * - Exemple de reptile concret.
 */
class Lezard extends Reptile
{
    public function crier(): void
    {
        echo $this->nom . " émet un petit sifflement.\n";
    }
    
    public function seDeplacer(): void
    {
        echo $this->nom . " rampe sur le sol.\n";
    }
}

/**
 * Classe Licorne (hérite d'Imaginaire)
 * - Exemple d'animal imaginaire concret.
 */
class Licorne extends Imaginaire
{
    public function crier(): void
    {
        // On peut imaginer un son typique de la licorne :)
        echo $this->nom . " pousse un hennissement magique!\n";
    }

    public function seDeplacer(): void
    {
        echo $this->nom . " galope gracieusement et laisse une traînée d'arc-en-ciel.\n";
    }
}


/*******************************************************************************************************/


/**
 * Exemple d'utilisation (test)
 */
function testPOO()
{
    // Instancier des animaux concrets
    $chien = new Chien("Plouf");
    $humain = new Humain("Juliette");
    $lezard = new Lezard("Fafnir");
    $licorne = new Licorne("Bella");
    $bizarre = new Truc("Bizarre");

    // Polymorphisme : on peut stocker des objets différents
    // (Chien, Lezard, Licorne) dans un tableau d'Animal
    $mesAnimaux = [$chien, $lezard, $licorne, $humain, $bizarre];

    foreach ($mesAnimaux as $animal) {
        // Tous héritent de la méthode getNom()
        echo "Nom : " . $animal->getNom() . "\n";
        //$animal->nom = "plouf___";
        echo "Nom : " . $animal->getNom() . "\n";

        // Chaque sous-classe a sa propre version de crier() et seDeplacer()
        $animal->crier();
        $animal->seDeplacer();
        
        echo "\n";
    }
}

// Lancer le test
testPOO();

