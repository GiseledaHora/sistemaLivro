<?php
    namespace PHP\Modelo;
    require_once ('CadastroLog.php');
    require_once ('CadastrarLivro.php');   // estou chamando a classe Cadastro do livro e do cliente

    use PHP\Modelo\Cadastrar;
    use PHP\Modelo\CadastrarLivros;

    class ReservaLivro{
        private Cadastrar $cadastroCliente;
        private CadastrarLivros $livros;
        private string $disponivel;
        private string $guarda;
        private string $dataReserva;
        private string $livre;




        public function __construct(Cadastrar $cadastroCliente,
                                    CadastrarLivros $livros,
                                     string $disponivel,
                                     string $guarda,
                                     string $dataReserva,
                                     string $livre)
        {
            $this->cadastroCliente  = $cadastroCliente;
            $this->livros = $livros;
            $this->disponivel = $disponivel;
            $this->guarda = $guarda;
            $this->dataReserva = $dataReserva;
            $this->livre = $livre;
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
            if($this->livre == "livre"){

                return "<br><br>Cadastro Cliente: ".$this->cadastroCliente->imprimir().
                       "<br><br>Seu livro é: ".$this->livros->imprimir().
                       "<br>Este livro está disponivel: ".$this->disponivel.
                       "<br>Podemos reservar esse livro pra você: ".$this->guarda.
                       "<br>A data da sua reserva é: ".$this->dataReserva;
            }else{
                return "Livro Indisponivel";
            }

            
        }

    } // fim de classe 


?>