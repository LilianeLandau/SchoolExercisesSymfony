/*Retourne les noms, prénoms, rôle 
et équipe de tous les joueurs, 
classés dans l’ordre alphabétique par équipe, 
puis par rôle dans l’équipe, 
puis par nom de famille, 
puis par prénom.
*/

SELECT 
    wizard.last_name AS Nom,
    wizard.first_name AS Prénom,
    player.role AS Rôle,
    team.name AS Equipe
FROM 
    player
JOIN 
    wizard ON player.wizard_id = wizard.id
JOIN 
    team ON player.team_id = team.id
ORDER BY 
    team.name ASC,
    player.role ASC,
    wizard.last_name ASC,
    wizard.first_name ASC;



/*
Retourne uniquement les prénoms 
et noms des joueurs ayant le rôle de seeker (attrapeur), 
classés par ordre alphabétique de nom puis prénom
*/
 SELECT 
    wizard.first_name AS Prénom,
    wizard.last_name AS Nom
FROM 
    player 
JOIN 
    wizard ON player.wizard_id = wizard.id
JOIN 
    team ON player.team_id = team.id
    
    WHERE player.role ='seeker'
ORDER BY 
    wizard.last_name ASC,
    wizard.first_name ASC;   



/*
Retourne la liste de tous les sorciers 
qui ne pratiquent pas le quidditch
*/    

SELECT 
    wizard.first_name AS Prénom,
    wizard.last_name AS Nom
FROM 
  wizard
LEFT JOIN 
   player  on wizard.id=player.wizard_id    
    WHERE player.wizard_id  IS NULL;