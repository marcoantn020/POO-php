# POO

## Class

Uma classe é um modelo ou um plano para criar objetos. 
Ela funciona como um "template" que define atributos (variáveis) e comportamentos (métodos)
que os objetos vai ter.

Um objeto é uma instância de uma classe, ou seja, quando você cria um objeto usando uma classe,
você está criando uma instância específica com suas próprias características,
baseadas na estrutura definida pela classe. A classe é como um molde que descreve as propriedades
e comportamentos que os objetos de um determinado tipo terão.
#

## Namespaces

Um namespace em programação é um mecanismo que permite organizar o código em um espaço de nomes específico.
Ele é usado para evitar conflitos de nomeação e para modularizar o código, permitindo que partes diferentes
do código usem os mesmos nomes sem colidir.

Os namespaces ajudam na legibilidade, manutenção e reutilização do código,
facilitando a identificação e agrupamento de elementos relacionados.
#

## StdClass (stander class)

É uma classe predefinida que é utilizada para criar objetos de forma dinâmica. Esses objetos podem receber
propriedades(variáveis) e métodos de forma dinâmica durante a execução do código.

A classe stdClass é útil em situações em que você precisa de um objeto simples para armazenar dados temporários
ou quando não é necessário criar uma classe personalizada.

ao usar stdClass, você não tem a definição explícita de propriedades ou métodos(stdClass não tem métodos),
e isso pode tornar o código menos previsível em comparação com o uso de classes definidas pelo programador.
É mais comum usar stdClass em situações específicas e simples, optando por classes personalizadas quando
a lógica do programa se torna mais complexa.
#

## This
A palavra-chave this é usada em linguagens de programação orientadas a objetos para se referir
ao próprio objeto no contexto atual. Ela é usada dentro de métodos de uma classe para acessar 
os membros (variáveis ou métodos) desse objeto.

this é uma referência contextual que permite aos objetos se referirem a si mesmos,
acessando seus próprias propriedades e métodos dentro do escopo de uma classe.
#

## Tipagem e type hint

**Tipagem Estática:** Refere-se à declaração de tipos de variáveis em tempo de compilação, onde os tipos de dados 
são verificados antes da execução do programa. Isso significa que você precisa especificar o tipo 
de uma variável (inteiro, string, etc.) e a linguagem de programação irá garantir que apenas valores compatíveis com
esse tipo sejam atribuídos à variável.

**Tipagem Dinâmica**: É quando a verificação de tipos ocorre em tempo de execução. Neste caso, 
a linguagem de programação verifica os tipos de dados quando o código é executado. Python é um exemplo de uma linguagem
com tipagem dinâmica, onde você pode atribuir diferentes tipos de valores a uma variável sem especificar explicitamente o tipo.

**Type Hinting (ou Type Annotations):** É uma forma de fornecer dicas ou informações sobre tipos de dados em linguagens
que suportam tipagem estática. Com o Type Hinting, você pode especificar explicitamente os tipos de 
parâmetros de função, valores de retorno ou até mesmo variáveis. Isso ajuda a tornar o código mais legível e fornece
informações úteis para ferramentas de análise estática e editores de código.

O Type Hinting não altera o comportamento em tempo de execução da linguagem, mas pode ser útil para documentação,
legibilidade e detecção de erros em tempo de desenvolvimento
#
**Parâmetros de função**: Você pode aplicar tipagem a parâmetros de função para indicar os tipos de dados que devem
ser passados quando a função é chamada.

**Valores de retorno:** Da mesma forma, você pode definir o tipo de dado que uma função deve retornar

**Propriedades de classes (a partir do PHP 7.4):** Em versões mais recentes do PHP, é possível declarar o tipo das
propriedades das classes:

**Type Hinting para objetos:** Você pode usar type hinting para indicar que um parâmetro de função ou método deve 
ser uma instância de uma determinada classe ou interface

**OBERVAÇÂO:**  é importante notar que, embora o PHP ofereça essas capacidades de tipagem para parâmetros de função,
valores de retorno e propriedades de classe, ele ainda é uma linguagem predominantemente dinâmica. Isso significa que 
você pode optar por não usar a tipagem em muitos casos, e o PHP não imporá restrições estritas de tipo em todo o código,
ao contrário de linguagens estritamente tipadas como Java ou C#.

Caso queira aplicar uma tipagem forte você pode utilizar o declare(strict_types=1); no inicio do arquivo, ele esta 
disponivel a partir da versão 7 do php, você tmabem pode optar por ferramentas de análise estática 
(por exemplo, PHPStan, Psalm).




