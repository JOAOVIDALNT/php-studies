# Entrada de dados com formulário

No capítulo anterior, foram apresentadas várias funcionalidades do PHP e também
sua sintaxe para blocos e laços utilizados em diversas linguagens. Agora vamos a um
novo projeto: a construção de uma lista de tarefas.


## 4.1 Definindo a lista de tarefas
Nosso projeto será composto por apenas algumas páginas, como a lista de tarefas
e um formulário para adicioná-las e editá-las. Durante este projeto será necessário
receber dados do usuário, no caso, as descrições das tarefas. É muito provável que
você já tenha usado sites que pedem algum tipo de informação, ou mesmo sistemas
online nos quais é necessário cadastrar vários tipos de dados. Pois é exatamente isso
o que faremos — exibiremos um formulário perguntando algumas informações para
o usuário e quando ele inserir as informações, iremos tratá-las.

## Como funcionam as sessões?

Se colocamos os dados na sessão, por que eles não aparecem quando
usamos outro navegador?
Para o PHP saber qual usuário é o dono de uma sessão, ele guarda

algumas informações nos Cookies do navegador. Na verdade, a infor-
mação mais importante fica em um cookie chamado PHPSESSID, que

guarda um código único de identificação da sessão daquele usuário que
está acessando a aplicação PHP.
Nós também podemos usar os Cookies para guardar informações que
serão mantidas entre as requisições. Para isso, basta usar uma outra super
global do PHP chamada $_COOKIE. Esta super global também é um
array, assim como a $_SESSION.
