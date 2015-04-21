
function isSizeValid($string, $min, $max)
{
	if (strlen($string) >= $min && strlen($string) < $max)
		return true;
	return false;
}

// preg_match() va vérifier les caractères contenus dans le pseudo selon ceux que nous avons déclarés. -> retourne 0 si caractères interdits sinon retour 1
/*[] contiennent les caract. autorisés a ltr min, zA ltr maj. les # marquent le début et la fin nous permettant de préciser les options :
    ^ indique le pseudo va devoir forcément commencer par l'un des caractères cités.
    $ indique le pseudo va devoir forcément finir par l'un des caractères cités.
    ^ et $ utilisés ensemble indiquent que le pseudo ne contiendra que les caractères cités.
    le + autorisera la répétition de ces caractères.
*/
function pregMatch($string)
{
	if (preg_match('#^[a-zA-Z0-9._-]+$#', $string) && !empty($string))
		return true;
	return false;
}