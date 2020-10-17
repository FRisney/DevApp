<?php

class Titulo {
    private $tamanho;
    private $cor;
    private $texto;

    public function __construct(String $texto, int $tamanho, String $cor)
    {
        $this->texto = $texto;
        $this->tamanho = $tamanho;
        $this->cor = $cor;

        $this->imprime();
    }

    private function leTemplate()
    {
        $arquivo = file_get_contents('titulo.html');
        return $arquivo;
    }

    private function alteraTexto(String $arquivo)
    {
        $arquivo = str_replace('#TEXTO#', $this->texto, $arquivo);
        return $arquivo;
    }

    private function alteraTamanho(String $arquivo)
    {
        $arquivo = str_replace('#TAMANHO#', $this->tamanho, $arquivo);
        return $arquivo;
    }

    private function alteraCor(String $arquivo)
    {
        $arquivo = str_replace('#COR#', $this->cor, $arquivo);
        return $arquivo;
    }

    private function imprime()
    {
        $arquivo = $this->leTemplate();
        $arquivo = $this->alteraTexto($arquivo);
        $arquivo = $this->alteraTamanho($arquivo);
        $arquivo = $this->alteraCor($arquivo);
        echo $arquivo;
    }
}

