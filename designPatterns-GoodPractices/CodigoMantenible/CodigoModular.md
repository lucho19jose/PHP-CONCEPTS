# Código modular
a mayor cantidad de codigo los bugs quedan más ocultos.

- separar en funciones 

## Destructuring assignment
Con Arrays despende del orden y con Objetos del nombre, por ejemplo:

```javascript
const arr = [1, 2, 3];
const [a, b, c] = arr;
// Resultado
a = 1;
n = 2;
c = 3;

const person = {
  name: 'Pablo',
  age: 12
};
const { name, age } = person;
// Resultado
name = 'Pablo';
age = 12;
```


