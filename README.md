# WP Search Query Normalizer

## 🎯 Problème
Sur un site WordPress, les utilisateurs peuvent rechercher un même sujet avec des mots différents, des fautes ou des variantes sémantiques. Cela peut réduire la pertinence des résultats et créer une expérience frustrante.

## 💡 Solution
WP Search Query Normalizer normalise automatiquement certaines requêtes de recherche afin de rediriger l’utilisateur vers le terme le plus pertinent.

## 🚀 Bénéfices
- Améliore la pertinence de la recherche interne
- Réduit les recherches sans résultat
- Optimise l’expérience utilisateur
- Renforce la cohérence sémantique SEO

## Stack

- PHP  
- WordPress Hooks  
- SEO Technique  

## Installation

1. Télécharger le plugin  
2. Copier le dossier dans :

```bash
wp-content/plugins/wp-search-query-normalizer/
```

3. Activer le plugin depuis l’admin WordPress :

```text
Extensions > Activer
```

## Exemple d’usage

Le plugin utilise `template_redirect` pour intercepter les recherches et rediriger automatiquement les termes définis.

## Auteur

Sévérin OGAH