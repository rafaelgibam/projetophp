<?php

function getNomeSite($separator = null)
{
    return "TurismoSys $separator ";
}

function raizName()
{
    return $_SERVER['REQUEST_URI'];
}
