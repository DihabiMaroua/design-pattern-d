# Design Pattern

## Table des Matières
- [Réponses aux Questions](#réponses-aux-questions)
- [Design Pattern: Observer](#design-pattern-observer)
  - [Contexte](#contexte)
    - [Situation initiale](#situation-initiale)
    - [Problème à résoudre](#problème-à-résoudre)
  - [Avantages/Inconvénients](#avantagesinconvénients)
  - [Diagramme de Classes UML](#diagramme-de-classes-uml)
- [Lancer le Projet](#lancer-le-projet)

## Réponses aux Questions
### Question 1 : Avantages de programmer vers une interface et non vers une implémentation
La programmation orientée vers une interface favorise la flexibilité et l'interchangeabilité, permettant des changements d'implémentations sans impacter le code client, ce qui facilite grandement la maintenance et l'évolutivité. En réduisant les dépendances entre composants, elle encourage le dé-couplage, rendant ainsi les modifications et extensions plus aisées. Cette approche simplifie également les tests unitaires grâce à l'utilisation de mocks basés sur des interfaces, rendant les tests à la fois plus faciles et plus fiables. Enfin, le polymorphisme inhérent à cette méthode permet de traiter divers objets de différentes classes de manière uniforme, tant qu'ils adhèrent à la même interface, renforçant ainsi la modularité et la réutilisabilité du code. 
Voir l’exemple du code source `q1.php`, et diagramme `q1.png`

### Question 2 : Pourquoi préférer la composition à l'héritage
La composition est souvent préférée à l'héritage car elle offre une flexibilité accrue, une meilleure réutilisation du code, et une réduction de l'interdépendance entre les classes. Cela simplifie la maintenance, améliore la lisibilité du code grâce à une conception plus explicite, et facilite les mises à jour en permettant une substitution aisée des composants, rendant ainsi le système plus modulaire et évolutif. 
Voir l’exemple du code source `q2.php`, et diagramme `q2.png`

### Question 3 : Qu'est-ce qu'une interface en programmation orientée objet
Une interface en POO est une déclaration de méthodes qui n'ont pas d'implémentation. Elle définit un ensemble de méthodes que toutes les classes implémentant l'interface doivent fournir. Les interfaces sont un moyen de définir des types par la forme de leur comportement plutôt que par leur implémentation concrète, ce qui permet de garantir qu'une classe possède certaines méthodes.

## [Design Pattern : Observer](#design-pattern-observer)

### Contexte
#### [Situation initiale](#situation_initiale)
Imaginons une application de blog populaire où les utilisateurs peuvent publier des articles, et d'autres utilisateurs peuvent s'abonner pour recevoir des notifications sur de nouveaux posts ou mises à jour. Dans la situation initiale, chaque fois qu'un auteur publie un nouvel article ou met à jour un article existant, l'application envoie une notification par courriel à tous les abonnés de cet auteur. Cela entraîne une surcharge de travail pour le serveur lors de l'envoi de courriels, surtout si certains auteurs sont très suivis et que les abonnés ne sont intéressés que par certains types d'articles.
#### [Problème à résoudre](#Problème_à_résoudre)
Surcharge du serveur : Envoi massif de notifications par courriel, surtout lors de la publication par des auteurs populaires.
Manque de personnalisation : Les abonnés reçoivent des notifications pour tous les articles d'un auteur, même s'ils ne sont intéressés que par certains sujets.
Expérience utilisateur médiocre : Les utilisateurs peuvent se sentir submergés par un excès de notifications non pertinentes.



### Avantages/Inconvénients
**Avantages :**
- Scalabilité : Le modèle Observer permet à l'application de gérer efficacement un grand nombre d'abonnés et de notifications. Comme le système est basé sur des abonnements, il peut facilement s'adapter à un nombre croissant d'utilisateurs sans surcharger le serveur.
- Couplage faible : Les auteurs (Sujets) et les abonnés (Observateurs) sont faiblement couplés. Cela signifie que les auteurs peuvent continuer à publier des articles sans se soucier de la gestion des abonnés. De même, les abonnés peuvent choisir de suivre ou de se désabonner sans affecter le fonctionnement global de l'application.
- Personnalisation et pertinence : Les utilisateurs ont la possibilité de s'abonner à des sujets spécifiques, ce qui rend les notifications plus pertinentes. Cela améliore l'expérience utilisateur, car les abonnés ne reçoivent des notifications que pour le contenu qui les intéresse réellement.
- Maintenance et extension facilitées : Ajouter de nouvelles fonctionnalités ou modifier des comportements existants est plus facile, car les interactions entre les différents composants de l'application sont bien définies et isolées.


**Inconvénients :**
- Complexité de mise en œuvre : Le modèle Observer peut être complexe à mettre en œuvre correctement, surtout dans un système avec un grand nombre d'Observateurs et de Sujets. La gestion des notifications et la synchronisation des états peuvent devenir compliquées.
- Performances en cas de nombreux observateurs : Si un Sujet a un grand nombre d'Observateurs, notifier tous ces Observateurs à chaque mise à jour peut prendre du temps et affecter les performances.
- Gestion de la mémoire : Il est crucial de gérer correctement les références entre les Sujets et les Observateurs pour éviter les fuites de mémoire, en particulier dans les environnements où les observateurs peuvent s'inscrire et se désinscrire fréquemment.
- Difficulté de débogage : Comme le modèle introduit une couche d'indirection supplémentaire entre les Sujets et les Observateurs, cela peut compliquer le débogage, en particulier lorsqu'il y a des problèmes avec la séquence ou le contenu des notifications.


### Diagramme de Classes UML
`diagrammeUML_designPattern.png`

## Lancer le Projet
### Prérequis :
- PHP version 7.2 ou supérieure. Téléchargez et installez PHP depuis le [site officiel](https://www.php.net/).

### Étapes à suivre :
1. **Cloner le dépôt :**
   ```sh
   git clone https://github.com/DihabiMaroua/design-pattern-d.git
