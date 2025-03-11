<?php
    namespace PHP\Modelo;

    class Logins {
        protected string $logins;
        protected string $senhas;
    
    
        public function __construct(string $logins, string $senhas) 
        {
            $this->logins = $logins;
            $this->senhas = $senhas;
        }

        public function __get(string $dados):mixed
        {
            return $this->dados;
        }

        public function __set(string $variavel, string $dados):void
        {
            $this->variavel = $dados;
        }

        public function imprimir():string
        {
            return "<br>Login: ".$this->logins.
                   "<br>Senha: ".$this->senhas;
        }
    }
?>