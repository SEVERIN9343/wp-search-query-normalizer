# WP Search Query Normalizer

Plugin WordPress orienté SEO technique permettant d'améliorer la pertinence de la recherche interne.

---

## 🎯 Problème

Sur un site WordPress, les utilisateurs peuvent effectuer des recherches avec des variantes (fautes, synonymes, termes différents).

Résultat :
- recherches sans résultat
- mauvaise pertinence des contenus affichés
- expérience utilisateur dégradée

---

## 💡 Solution

WP Search Query Normalizer intercepte les requêtes de recherche et les normalise automatiquement pour rediriger l’utilisateur vers le terme le plus pertinent.

---

## 🚀 Bénéfices

- Amélioration de la pertinence des résultats
- Réduction des recherches sans résultat
- Meilleure expérience utilisateur (UX)
- Cohérence sémantique SEO renforcée
- Optimisation de la recherche interne WordPress

---

## 🖼️ Aperçu

![Recherche normalisée](assets/images/search-normalized.png)

---

## ⚙️ Fonctionnement

Le plugin utilise le hook WordPress `template_redirect` pour intercepter les requêtes de recherche et appliquer des règles de normalisation définies.

---

## 🛠️ Stack

- PHP
- WordPress Hooks
- SEO technique

---

## 📦 Installation

1. Télécharger le plugin
2. Copier le dossier dans :

```bash
wp-content/plugins/wp-search-query-normalizer/

Extensions > Activer

### Avant
![Avant](assets/images/search-before.png)

### Après
![Après](assets/images/search-after.png)


👤 Auteur

Sévérin OGAH