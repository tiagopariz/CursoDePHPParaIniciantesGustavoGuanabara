#Curso de PHP para Iniciantes (Gustavo Guanabara)

## 01 História do PHP

- Pré-requisitos: HTML, CSS e Javascript
- Criadores: Rasmus Lerdof, Zeev Suraskí e Andi Gutmans
- Origens: C, PHPT, Perl, PHPFI, CGI, PHP
- Versão 3 (1999), Versão 4 (2000), Versão 5 (2004)
- Problema com Unicode
- Ferramentas que usam PHP: Wordpress, Joomla, Moodle... 

## 02 Como funciona o PHP

- Trás novas funcionalidades ao HTML
- Client-side: HTML, JavaScript, CSS...
- Server-side: Apache, MySQL, PHP...
- Wamp, Lamp ou Mamp

## 03 Como instalar o PHP no Windows

- Servidor: Xampp
- Editor: PhpStorm, Notepad++, Sublime
- Olá mundo!
- Supertag <?php ?>

## 04 Variáveis

- Linguagem de script
- Requisitos: Algoritmos
- comando echo: alusão a eco, pode usar a print ou printf
- echo "Aceita texto e HTML <BR />"
- Começam com sifrão $
- Todas em letras minúsculas
- Linha deve terminar com ponto e vírgula ";"
- Não existe declaração, o tipo é inferido por coersão
- Tipos: Inteiro, Real, Caractere e Lógico
- Type cast de Inteiro: (int) ou (integer)
- Type cast de Real: (real), (float) ou (double)
- Type cast de Caractere: (string)
- Type cast de Lógico: não tem
- Lógico: true = 1 e false = vazio
- PhpStorm: New file PHP alterar template
- Concatenação: Usar . ou "";
- Case sensitive: $Idade é diferente de $idade

## 05 Operadores aritméticos

- Soma: $n1 + $n2
- Operadores: + (adição), - (subtração), * (multiplicação), / (divisão) e % (módulo)
- Ordem de precedência: (), */%, +-
- Passa QueryString: url?a=3&b=2
- Recupera QueryString: $n1 = $_GET["a"]
- Funções matemáticas: abs, pow, sqrt, round, ceil, floor, intval e numberformat

## 06 Operadores de atribuição

- Sinal de igual: =
- Simplificação: $c += 5, $c += $a ou $a .= $b
- Incremento: $b++
- Decremento: $b--
- Tipos: $b++ (pós), ++$b (pré)
- Operadores: +=, -=, *=, /=, %= e .=
- Comentários: // ou # (inline), /* */ (multiline)
- Por referência: $a = &$b;
- Variáveis variantes: $b = "c", $$b = "d", então $c = "d"

## 07 Operadores relacionais

- Operadores de comparação: >, <, >=, <=, <>, !=, == e ===
- Operador ternário: expressão ? verdadeiro : false
- Operador de igual e do mesmo tipo: $a === $b
- Operadores lógicos: and, &&, or, ||, xor e !

## 08 Integração HTML 5 + PHP

- Formulários: Método e ação
- Ação: POST e GET
- Inputs: text, submit
- Enviando e recebendo: name="a", $_GET["a"] ou $_POST["a"]
- Ano atual: date("Y")
- Conferir se foi passado: isset()
- Montar CSS dinamicamente

## 09 Estrutura condicional if

- Condições
- if (...) {...} else {...}
- Condição composta
- if (cond1 && cond2) {...} else {if...}
- if (cond1 && cond2) {...} elseif (...) {...}

## 10 Estrutura condicional switch

- switch ($op) { case 1 : echo "1"; case 2 : echo "2"; default : echo "d"; }

## 11 Estrutura de repetição while - parte 1

- while (true) {}
- while (true) { break; }
- while (true) { continue; }

## 12 Estrutura de repetição do while - parte 2

- do {} while (true);

## 13 Estrutura de repetição for

- for (c$ = 1; $c <= 10; $c++) {...}
- print "$i ";

## 14 Rotinas em PHP - parte 1

- Procedimento: function nome($param1, $param2) {...}
- Função: function nome($param1, $param2) { return $ret}
- Argumentos em array: func_get_args()
- Quantidade de argumentos: func_num_arg()

## 15 Rotinas em PHP - parte 2

- Passagem de parâmetros por valor não altera a variável (padrão)
- Passagem de parâmetros por referência altera a variável: use o & antes do nome do parâmetros
- Por referência: function name(&$param) {...}
- Rotinas externas: include "nomedoarquivo.php";
- Chamando arquivos externos requeridos: require "nomedoarquivo.php";
- Chamando arquivos externos sem repetir: include_once "nomedoarquivo.php";
- Chamando arquivos externos requeridos sem repetir: require_once "nomedoarquivo.php";

## 16 Funções string em PHP - parte 1

- Manipular strings
- "string", "1", ...
- 25 funções
- printf("%s texto %.2f)
- String: %s
- Float: %f ou %.2f
- Decimal: %d ou %u
- print_r($vetor), var_dump($vetor) e var_export($vetor)
- wordwrap(texto, tamanho, quebra, quebrapalavra)
- strlen($text)
- trim($t), ltrim($t) e rtrim($t)
- str_word_count($t, formato = 0 (palavras), 1 (array) e 2 (array com posições))
- explode($t)
- str_split($word)
- implode($array) ou join($array)
- chr(codigo) ou ord(letra)


## 17 Funções string em PHP - parte 2

- Converte para minúsculas: strtolower($string)
- Converte para maiúsculas: strtoupper($string)
- A primeira letra capitalizada: ucfirst($string)
- A primeira letra de cada palavra em maiúsculas: ucwords($string)
- Reverter o texto: strrev($string)
- Posição da primeira ocorrência: strpos($string, $termo)
- Posição da primeira ocorrência ignorando o case: stripos($string, $termo)
- Contar ocorrências: substr_count($string, $termo)
- Retorna parte do texto: substr($string, $inicio, $tamanho)
- Preenche: str_pad($string, $tamanho, $caractere, $direção)
- Repete o texto: str_repeat($string, $vezes)
- Substitui: str_replace($termo, $substituto, $string)

