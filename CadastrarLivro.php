<?php
    namespace PHP\Modelo;

    class CadastrarLivros{
        protected int    $codigo;
        protected string $categoria;
        protected string $titulo;
        protected string $autor;
        protected int    $preco;


        public function __construct(int $codigo, string $categoria, string $titulo, string $autor, int $preco )
             {
              
                $this-> codigo = $codigo;
                $this-> categoria = $categoria;
                $this-> titulo = $titulo;
                $this-> autor = $autor;
                $this-> preco = $preco;                
             }              
        public function __get(string $dado):mixed
             {
                 return $this->dados;
             }
     
        public function __set(string $variavel, string $dados):void
             {
                 $this->variavel = $dados;
             }

             public function imprimir():string
             {
                 return
                         "<br>Código: ".$this->codigo.
                         "<br>Escolha a Categoria: ".$this->categoria.
                         "<br>Escolha o título do seu Livro: ".$this->titulo.
                         "<br>Escolha o autor: ".$this->autor.
                         "<br>O preço é R$: ".$this->preco;

             }   


    }

?>