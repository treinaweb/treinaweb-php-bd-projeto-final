<?php

require_once "autoload/autoload.php";

use App\Repositorio\Curso;
use App\Uteis\Conexao;

$configBancoDeDados = require 'config/banco-de-dados.php';
$conexao = new Conexao($configBancoDeDados);

var_dump($conexao);

$cursoRepositorio = new Curso;

require_once "exibicao/principal.php";

