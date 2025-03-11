<?php
    namespace PHP\Modelo;
    require_once ('CadastroLog.php');
    require_once ('CadastrarLivro.php');

    use PHP\Modelo\Cadastrar;
    use PHP\Modelo\CadastrarLivros;

   class CompraLivro{
        private Cadastrar $cadastroCliente;
        private CadastrarLivros $livros;
        private string $cartao;
        private string $dataCompra;


        public function __construct(Cadastrar $cadastroCliente,
                                    CadastrarLivros $livros, 
                                    string $cartao, 
                                    string $dataCompra)
           
        {
            $this->cadastroCliente = $cadastroCliente;
            $this->livros = $livros;
            $this->cartao = $cartao;
            $this->dataCompra = $dataCompra;
        }

        public function __get(string $dados):string
        {
            return $this->dados;
        }
     
        public function __set(string $variavel, string $dados):void
        {
            $this->variavel = $dados;
        }

        public function imprimir():string
        {
            return "<br>Cadastro Cliente: ".$this->cadastroCliente->imprimir().
                    "<br>Seu livro é: ".$this->livros->imprimir().
                    "<br>Forma de pagamento: ".$this->cartao.
                    "<br>Data da sua Compra: ".$this->dataCompra;
                       
        }        

   }//fim da classe



?>