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
propriedades(variáveis).

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
#

## Herança

Herança é um conceito fundamental na Programação Orientada a Objetos (POO) que permite criar novas classes baseadas em
classes existentes. Em termos simples, uma classe filha (ou subclasse) herda atributos e métodos de uma classe pai
(ou superclasse).

Isso permite reutilizar o código existente, estabelecendo uma relação hierárquica entre as classes. A classe pai é 
muitas vezes chamada de superclasse, enquanto a classe filha é a subclasse.

A herança é útil para promover a reutilização de código, permitindo a criação de hierarquias de classes onde classes
mais específicas herdam comportamentos e características de classes mais genéricas.

**OBSERVAÇÂO:** Nem todas as linguagens de programação suportam múltiplas heranças diretas, onde uma classe pode herdar
de várias classes. Em PHP, por exemplo, você pode estender apenas uma única classe diretamente, mas pode implementar
várias interfaces, o que fornece um mecanismo semelhante para definir comportamentos. 

**CUIDADOS:**
A herança é uma ferramenta poderosa na Programação Orientada a Objetos (POO), mas seu uso deve ser cuidadoso para 
garantir um design de código sólido e de fácil manutenção. Aqui estão alguns cenários típicos onde a herança pode 
ser apropriada:

**Quando existe uma relação de "é um" (is-a relationship):**

- _**Relações lógicas de herança:**_ Se uma classe é um tipo mais específico de outra classe mais genérica, a herança
- pode ser apropriada. Por exemplo, um "Cachorro é um Animal".

**Para reutilização de código:**

- _**Compartilhamento de funcionalidades:**_ Se você tem lógicas comuns entre diferentes classes, a herança pode ser útil
para evitar repetição de código. Você pode ter uma classe pai com métodos e propriedades compartilhados por 
suas subclasses

**Para estender e especializar comportamentos:**

- _**Adicionando novos comportamentos:**_ Você pode estender uma classe pai para adicionar funcionalidades específicas à
classe filha. Por exemplo, uma classe Veiculo genérica pode ser estendida por classes mais específicas 
como Carro, Moto, etc.

**Para garantir consistência e padronização:**

- _**Mantenha uma interface consistente:**_ Ao usar herança, você pode estabelecer um conjunto comum de métodos e 
- propriedades que devem existir em todas as subclasses, garantindo consistência.

**Quando não há excesso de complexidade:**

- _**Evite hierarquias profundas:**_ Hierarquias de herança muito profundas podem tornar o código complexo e difícil de
entender. É preferível manter a hierarquia de herança simples e lógica.

**Quando outras soluções, como composição, não são mais adequadas:**

- _**Considere composição:**_ Às vezes, composição (usando objetos de outras classes como membros) pode ser 
preferível à herança, especialmente quando a relação "tem um" é mais adequada que "é um".

**OBSERVAÇÔES FINAIS:** É importante ponderar esses aspectos ao decidir usar herança. Se a relação entre as classes 
não é clara ou se a herança não oferece vantagens significativas, pode ser melhor evitar seu uso em favor de outras
técnicas de design, como composição, interfaces ou padrões de projeto específicos.
#

## Metodo magico construct

O método mágico __construct() é um método especial que é chamado automaticamente quando uma nova instância de uma 
classe é criada usando a palavra-chave new. Ele é usado para inicializar objetos e executar qualquer lógica
necessária assim que um objeto é instanciado.

O uso do método __construct() é muito útil para realizar tarefas de inicialização, como configurar propriedades,
conectar-se a um banco de dados, inicializar variáveis ou realizar outras operações necessárias no momento da criação 
do objeto.

Se a classe não define um método __construct(), o PHP chamará automaticamente um construtor padrão vazio quando um
objeto é instanciado. No entanto, é uma boa prática definir explicitamente o método __construct() para documentar e
garantir a inicialização correta dos objetos.

















