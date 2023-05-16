# Capítulo 5
## Tratamento de diferentes campos de formulários

No capítulo anterior, construímos a base para a nossa lista de tarefas. Agora vamos
adicionar mais informações e funcionalidades ao projeto.
Antes de começar a adicionar mais informações e funcionalidade podemos parar
para analisar um pouco nosso cenário atual e então decidir se podemos continuar
com ele como está ou se podemos fazer algo para melhorar.
Esta pode ser uma etapa importante no desenvolvimento de uma aplicação, pois
pode tornar o trabalho à frente mais simples ou mais complicado. Às vezes é melhor
alterar a base da aplicação para poder evoluir de forma mais eficiente do que insistir
em um código não muito bom. Não se preocupe se não conseguir fazer isso logo no
começo, pois a experiência também ajuda bastante neste tipo de decisão.

## 5.1 Organizando o código em arquivos separados

O que temos até o momento é uma lista de tarefas que tem apenas o nome da ta-
refa e só permite adicionar novas tarefas. Tudo isso foi feito em apenas um arquivo

que contém um pouco de HTML e um pouco de PHP. Podemos continuar com esta
estrutura, mas com o tempo o arquivo vai crescer e pode ficar complicado de ler e
entender um arquivo muito grande e dividido em mais de uma linguagem. Por isso,

aqui entra uma decisão importante, vamos separar nossa aplicação em dois arqui-
vos, um deles fará o processamento de entrada de dados e manipulação da sessão e

o outro irá exibir o formulário de cadastro de tarefas e a lista das tarefas cadastradas.