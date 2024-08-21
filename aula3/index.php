<?php

class Filme {
    public int $id;

    public string $titulo;

    public string $diretor;

    public int $classificacao;

    public int $quantidade;


    public function __construct(
        string $titulo,
        string $diretor,
        int $classificacao,
        int $quantidade

    )
    {
        $this->titulo = $titulo;
        $this->diretor = $diretor;
        $this->classificacao = $classificacao;
        $this->quantidade = $quantidade;
    }
}

class Cliente {
    public int $id;

    public string $nome;

    public string $telefone;

    public int $cpf;

    public float $saldoDevedor;

    public string $endereco;


    public function __construct(
        string $nome,
        string $telefone,
        int $cpf,
        float $saldoDevedor,
        string $endereco
    )
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
        $this->saldoDevedor = $saldoDevedor;
        $this->endereco = $endereco;
    }
}

class Locacao {
    public int $id;

    public int $date;

    public int $dateDevolucao;

    public float $valor;

    public int $cliente_id;


    public function __construct(
        int $date,
        int $dateDevolucao,
        float $valor
    )
    {
        $this->date = $date;
        $this->dateDevolucao = $dateDevolucao;
        $this->valor = $valor;
    }
}

class Filme_Locacao {
    public int $id_filme;
    public int $id_locacao;
    public int $quantidade;

    public function __construct
    (
        int $quantidade
    )
    {
        $this->quantidade = $quantidade;
    }

}


echo "<pre>";
    $filme = new Filme("Caçador","Joao",18,5);
    var_dump($filme);

    $cliente = new Cliente("Pedro",55445544,00012122365,10,"Rua Albert Sort");
    var_dump($cliente);

    $locacao = new Locacao(181818,181818,15);
    var_dump($locacao);

    $filme_locacao = new Filme_Locacao(3);
    var_dump($filme_locacao);
?>