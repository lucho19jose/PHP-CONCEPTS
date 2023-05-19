## SOLID - SingleResponsibilityPrinciple

- cinco principios básicos de la programación orientada a objetos.
- su objetivo es apuntar a desarrollar aplicaciones más facilmente mantenibles a lo largo del tiempo.

SOLID son cinco principios básicos de la programación orientada a objetos que ayudan a crear software mantenible en el tiempo.

SOLID significa:

- S: Single Reponsibility Principle
- O: Open/Closed Principle
- L: Liskov Substitution Principle
- I: Interface Segregation Principle
- D: Dependency Inversion Principle

### La S
La S se trata de una clase que debe tener sólo una razón para cambiar.

en este caso quiere decir que debemos tener clases que hagan solo una función especifica y no como unaorquesta. esto nos permitiradetectar facilmente los errores.

### La O

Una entidad de software debe quedarse abierta para su extensión, pero cerrada para su modificación.

“La clase debe quedar abierta para añadir nuevos features, pero que esos nuevos features no impliquen modificar el código que ya estaba (A eso se refiere cerrada para su modificación)”


### La L

Cada clase que hereda de otra puede usarse como su padre sin necesidad de conocer las diferencias entre ellas.

### LA I
El Interface Segregation Principle establece que los clientes de un programa sólo deberían conocer de éste los métodos que realmente usan.


### LA D: Dependency Inversion Principle

existen clases de alto nivel y del bajo nivel

Dependency Inversion Principle detalla que los módulos de alto nivel no deben depender de los de bajo nivel, ambos deben depender de abstracciones.

Las abstracciones no deben depender de los detalles, los detalles deben depender de las abstracciones.


