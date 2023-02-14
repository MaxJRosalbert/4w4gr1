# Résumé des commandes git et github

## Création d'un dépôt local

- Dans l'explorateur pour voir les fichiers caché : **affichage/éléments masqu**és (qu'il faut côcher)
- Le dépôt locat se nomme; **.git**
- Dans visual code sélectionner le dossier du **thème** et avec touche droite le la souris **open in integrated terminal**
- git init (on exécute une seule fois cette commande. Permet de créer le dossier **.git**
- git status (permet de vérifier l'état de notre dépôt:)
  - Des fichiers doivent être indexé si ils apparaissent en rouge
  - en vert ils ont été indexé et on doit faire un commit
  - après avoir fait un commit le dépôt est clair
- git **add --all** ou **git add .**
- git **commit -m "s2c1 on décrit les modification"**
- **git log**
- **git log --oneline**
- **git remote add 4w4 https://github.com/eddytuto/2023-4w4-gr1.git** (créer un alias qui pointe vers votre dépôt github)
- **git branch -m main** (change le nom de la branche master pour main)
- **git branch lab1** (créer la branche «lab1» )
- **git checkout lab1** (pour changer de branche vers «lab1»)
- **git log --oneline** (les branches lab1 et main pointe vers le même commit)
- **git chechout main** (pour activer la branche « main »)
- git push 4w4 main (pousse la branche active «main» vers github dans le dépôt 4w4 vers la branche main)
- git checkout lab1
- git push 4w4 lab1
- git branch lab2
- git checkout lab2
- git push 4w4 lab2 (pousse la branche active lab2 vers 4w4 dans la branche lab2)