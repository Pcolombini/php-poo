# Aula 05

## Exemplo prático

Implementação de uma conta bancária

Os clientes abaixo precisam abrir uma nova conta, e realizar operações

- Jubileu -> 300,00 -> poupança
- Creusa -> 500,00 -> corrente

|class|ContaBanco|
|---|---|
|numConta|+|
|tipo|#|
|saldo|-|
|dono|-|
|status|-|
|metodos||
|abrirConta()|+|
|fecharConta()|+|
|depositar()|+|
|sacar()|+|
|pagarMensal()|+|

Para abrir a conta, precisamos do tipo de conta:

tipo da conta -> conta poupança -> cp
tipo da conta -> conta corrente -> cc

Consultar o status da conta:

status de conta aberta -> true
status de conta fechada -> false

se abrir corrente, ganha 50,00
se abrir poupança, ganha 150,00

Para fechar conta:

não pode haver saldo
não pode haver débito pendente

Para depositar

conta precisa estar com conta aberta

Para sacar

precisa de saldo

pagar mensalidade

cobra direto do saldo, 12 para cc e 20 para cp

adicionar get e set de todos os atributos

metodo contrutor
seta conta como fechada e saldo como 0,00
