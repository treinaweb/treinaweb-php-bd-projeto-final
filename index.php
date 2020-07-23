<?php

require_once "autoload/autoload.php";

use App\Repositorio\Curso;

$configBancoDeDados = require 'config/banco-de-dados.php';

var_dump($configBancoDeDados);

$cursoRepositorio = new Curso;

require_once "exibicao/principal.php";

