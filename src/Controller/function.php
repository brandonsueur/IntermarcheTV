<?php

function Pourcentage($Nombre, $Total) {
    //return $Nombre * 100 / $Total;
    $prix = ($Total * 100)/$Nombre;

    return round($prix);
}