<?php

class Cliente{

    public string $nome;

    public string $cpf;

    public string $nomeDaMae;

    public string $nomeDoPai;

    public float $saldoDevedor;

    public function __construct(
        string $nome, 
        string $cpf,
        string $nomeDaMae,
        string $nomeDoPai,
        float $saldoDevedor
        )
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->nomeDaMae = $nomeDaMae;
        $this->nomeDoPai = $nomeDoPai;
        $this->saldoDevedor = $saldoDevedor;
    }


    public function salvarCliente()
    {
        echo "Tudo pronto para salvar no Banco de Dados";

    }

    public function listarCliente()
    {
        echo "Tudo pronto para listar no Banco de Dados";

    }
    
}