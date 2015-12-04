<?php
//exemple de model

// Return crise qui correspond
function getTypeCrise(type) {
    $crise = $pdo->query('select id,desc from crise where crise.cat ='.$type.';');
    return $crise;
}

