


//Récupère tous les champs pour les sorciers nés entre 1975 et 1985
//Le prénom uniquement des sorciers dont le prénom commence par la lettre ‘H’
//Les prénom et nom de tous les membres de la famille ‘Potter’, classés par ordre de prénom
//Le prénom, nom et date de naissance du plus vieux sorcier (doit fonctionner quelque soit le contenu de la table)


SELECT *
FROM `wizard`
WHERE `birthday` BETWEEN '1975-01-01' AND '1985-12-31';


SELECT *
FROM `wizard`
WHERE `firstname` LIKE 'H%';

SELECT *
FROM `wizard`
WHERE LOWER(`firstname`) LIKE 'h%';

SELECT `firstname`, `lastname`
FROM `wizard`
WHERE `lastname` = 'Potter'
ORDER BY `firstname`;


SELECT `firstname`, `lastname`, `birthday`
FROM `wizard`
ORDER BY `birthday` ASC
LIMIT 1;
