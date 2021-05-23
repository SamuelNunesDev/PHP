<?php


interface Publicacao{
    function abrir();
    function fechar();
    function folhear($value);
    function avancarPag();
    function voltarPag();
}