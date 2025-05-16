# 🚀 Elevador Class in PHP

Este projeto implementa uma classe simples de **Elevador** em PHP, simulando chamadas de andares e movimentação entre os níveis. Ideal para fins educacionais e para demonstrar conceitos básicos de POO (Programação Orientada a Objetos) em PHP.

## 🧩 Funcionalidades

- Controla o nível atual do elevador
- Gerencia uma fila de chamadas para diferentes andares
- Move o elevador conforme os chamados recebidos (FIFO)
- Capacidade configurável (considerando uma pessoa por chamada)

## 🛠️ Requisitos

- PHP 8.0 ou superior
- Nenhuma dependência externa

### 📦 Instalação

1. Clone o repositório:
```
git clone https://github.com/fhariano/elevador-php.git
cd elevador-php
```

2. Execute o script diretamente no terminal (caso esteja usando CLI):
```
php index.php
```
Ou, se preferir, pode testar dentro de um servidor local como o XAMPP ou Laragon.

### 📄 Como Usar
A classe elevador está definida da seguinte forma:

### Métodos disponíveis:

```
__construct(int $capacidade)
Inicializa o elevador com capacidade especificada.

chamar(int $andar): void
Solicita que o elevador vá até o andar informado.

mover(): void
Move o elevador para o próximo andar solicitado.

getAndarAtual(): int
Retorna o andar atual do elevador.

getChamadosPendentes(): SplQueue
Retorna a lista de andares chamados que ainda estão pendentes.
```

### Exemplo de uso (index.php incluso):
```
<?php

require 'Elevador.php';

$elevador = new Elevador(5);            // Cria elevador com capacidade 5
$elevador->chamar(3);                   // Chama para o andar 3
$elevador->chamar(7);                   // Chama para o andar 7

$elevador->mover();                     // Move para o andar 3
$elevador->mover();                     // Move para o andar 7
$elevador->mover();                     // Nenhuma chamada pendente
```

### 🧪 Testes
Testes simples podem ser feitos adicionando chamadas ao arquivo index.php ou criando um arquivo de teste separado.

### 📁 Estrutura de Arquivos
```
elevador-php/
│
├── elevador.php       # Classe principal
├── index.php          # Exemplo de execução
└── README.md          # Este arquivo
```
### 📄 Licença
Este projeto está licenciado sob a licença MIT.
