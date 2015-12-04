<?php
function get_all_cat(){
$all_cat = $pdo->query("select cat from crise;");
return $all_cat;								//envoyer à la view
};
?>