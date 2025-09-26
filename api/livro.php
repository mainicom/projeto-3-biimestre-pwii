<?php
class livro{
    private string $titulo;
    private string $autor;
    private int $id;
    private string $capa;

        function __construct(int $id, string $titulo, string $autor, string $capa){
            $this-> id = $id;
            $this-> titulo = $titulo
            $this-> autor = $autor;
            $this-> capa = $capa;
        }
        function getId(){
            return $this->id;
        }
        function getTitulo(){
            return $this->titulo;
        }
        function getAutor(){
            return $this->autor;
        }
        function getCapa(){
            return $this->Capa;
        }

}
?>
