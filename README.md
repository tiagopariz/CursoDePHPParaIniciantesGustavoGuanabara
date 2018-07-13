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