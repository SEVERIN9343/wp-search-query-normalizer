# WP Search Query Normalizer

Plugin WordPress orienté SEO technique développé en PHP.

Ce plugin corrige et normalise automatiquement certaines requêtes utilisateurs dans le moteur de recherche WordPress afin d’améliorer :

- l’expérience utilisateur (UX)
- la pertinence des résultats
- les redirections sémantiques SEO

## Exemples de normalisation

ratification -> dératisation  
moustification -> démoustication  
infection -> désinfection  

## Fonctionnalités

- Normalisation de requêtes
- Redirections intelligentes
- Mapping synonymes / fautes fréquentes
- Amélioration UX recherche interne

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