<?php

class Elevador
{
    private int $andarAtual; // Andar atual do elevador
    private int $capacidade; // Capacidade máxima do elevador
    private SplQueue $filaChamados; // Fila de andares chamados

    // Construtor define a capacidade do elevador
    // Seta o andar atual como zero (térreo) e
    // cria a fila de andares chamados
    public function __construct(int $capacidade)
    {
        $this->capacidade = $capacidade;
        $this->andarAtual = 0;
        $this->filaChamados = new SplQueue();
    }

    // Chama o elevador para um andar específico
    public function chamar(int $andar): void
    {
        if (($this->filaChamados->count() + 1) > $this->capacidade) {
            echo "\nCapacidade do elevador de " . $this->capacidade . " foi ultrapassada!\n";
        } else {
            if ($andar >= 0) {
                if (!in_array($andar, iterator_to_array($this->filaChamados))) {
                    $this->filaChamados->enqueue($andar);
                }
            } else {
                echo "\nEste andar " . $andar . " não existe!\n";
            }
        }
    }

    // Move o elevador para o próximo nível chamado
    public function mover(): void
    {
        if (!$this->filaChamados->isEmpty()) {
            $proximoAndar = $this->filaChamados->dequeue();
            do {
                if ($proximoAndar > $this->andarAtual) {
                    $this->andarAtual++;
                    echo "\nSubindo: " . $this->andarAtual;
                } elseif ($proximoAndar < $this->andarAtual) {
                    $this->andarAtual--;
                    echo "\nDescendo: " . $this->andarAtual;
                }
            } while ($this->andarAtual != $proximoAndar);
            echo "\nAndar: " . $this->andarAtual . "\n";
        } else {
            echo "\nNão há chamados pendentes!\n";
        }
    }

    // Retorna o andar atual
    public function getAndarAtual(): int
    {
        return $this->andarAtual;
    }

    // Retorna a fila de andares pendentes
    public function getChamadosPendentes(): SplQueue
    {
        return $this->filaChamados;
    }
}
