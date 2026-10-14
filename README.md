# TP02-PHP-TAHIRI-BAYANE
# TP 02 PHP — Programmation Web 2 — 2026/2027

- **Nom :** Tahiri 
- **Prénom :** Bayane
- **Groupe :** 4

## Liste des exercices :
- **Exercice 1 :** `ex01.php`
- **Exercice 2 :** `ex02.php`
- **Exercice 3 :** `ex03.php`
- **Exercice 4 :** `ex04.php`
- **Exercice 5 :** `ex05.php`
- **Exercice 6 :** `ex06.php`
- **Exercice 7 :** `ex07.php`
- **Exercice 8 :** `ex08.php`
- **Exercice 9 :** `ex09.php`
- **Exercice 10 :** `ex10_get.html`, `ex10_get.php`, `ex10_post.html`, `ex10_post.php`

## Réponses aux questions du TP :

### Exercice 2
* **Différence entre `$note` et `$Note` :** Les variables en PHP sont sensibles à la casse, ce sont donc deux variables différentes.
* **Noms valides :** `$a`, `$_a`, `$a_a`, `$AAA`, `$a1`.
* **Noms invalides :** `$a!` (contient un caractère spécial), `$1a` (commence par un chiffre).

### Exercice 4
* **Différence d'affichage de `false` :** `echo` affiche une chaîne vide pour `false`, tandis que `var_dump()` affiche explicitement le type et la valeur (`bool(false)`).

### Exercice 5
* **Valeurs testées et messages :**
  * `-1` : Note invalide
  * `9` : Non validé
  * `10` : Passable
  * `12` : Assez bien
  * `14` : Bien
  * `16` : Très bien
  * `21` : Note invalide

### Exercice 10
* **Où apparaissent les valeurs :** 
  * Avec **GET**, les valeurs apparaissent clairement dans l'URL.
  * Avec **POST**, les valeurs transitent de manière invisible dans le corps de la requête.