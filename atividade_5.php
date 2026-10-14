<?php 
class Livro { 
    public string $titulo; 
    public string $autor; 
    public int $pagina; 
    public string $anoDePublicacao; 

    public function __construct($valor1, $valor2, $valor3, $valor4 = "Desconhecido") { 
        $this->titulo = $valor1; 
        $this->autor = $valor2; 
        $this->pagina = $valor3; 
        $this->anoDePublicacao = $valor4; 
    } 

    public function exibirDetalhes() { 
        echo "<b>Título: " . $this->titulo . ", Autor: " . $this->autor . ", Página: " . $this->pagina . ", Ano de Publicação:" . $this->anoDePublicacao . "</b><br>"; 
    } 
} 

$livro1 = new Livro("Dom Quixote", "Miguel de Cervantes", 643, "16 de Janeiro de 1605"); 
$livro2 = new Livro("O Pequeno Príncipe", "Antoine de Saint-Exupéry", 64, "6 de abril de 1943"); 

$livro1->exibirDetalhes();
$livro2->exibirDetalhes();
 
?>
