<?php
namespace App\Entity;

final class SubmitFormInfo
{
    private $nome;
    private $cognome;
    private $indirizzo;

    public function __construct()
    {
    }

    public function getNome(): string   
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getCognome(): string   
    {
        return $this->cognome;
    }

    public function setCognome(string $cognome): void
    {
        $this->cognome = $cognome;
    }

    public function getIndirizzo(): string   
    {
        return $this->indirizzo;
    }

    public function setIndirizzo(string $indirizzo): void
    {
        $this->indirizzo = $indirizzo;
    }

}