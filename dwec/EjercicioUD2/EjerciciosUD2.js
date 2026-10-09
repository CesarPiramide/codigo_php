/*Declara 6 variables a las que asignaremos los siguientes valores. 1357, 135.7, 135e7, 0b1010, 0o1357 y 0x1A57. Una vez creadas muestra por consola los valores almacenados y el tipo de dato que nos indica el operador typeof.


let num1 = 1357;
let num2 = 135.7;
let num3 = 135e7;
let num4 = 0b1010;

console.log(num1);
console.log(num2);
console.log(num3);
console.log(num4);


Ejercicio 2


let numero = Number(prompt("Introduce un número:"));

console.log(typeof numero);


Ejercicio 3

let numero1 = prompt("Introduce el primer número:");
let numero2 = prompt("Introduce el segundo número:");


console.log(numero1 + numero2);


numero1 = Number(numero1);
numero2 = Number(numero2);


console.log(numero1 + numero2);


Ejercicio 4 
Pide al usuario que te indique su nombre, apellidos ,  edad y un número del 1 al 10. Almacena cada dato en una variable diferente.  A continuación muestra la siguiente información.
Por consola una frase que incluya su nombre , apellidos y la edad.
En el documento html incluye con formato h3 la misma información.
En un alert muestra la siguiente información “Dentro de número años tendras x años”. Ayuda: usa los backticks para crear un template literal que te permita hacer este ejercicio


let nombre = prompt("Introduce tu nombre:");
let apellidos = prompt("Introduce tus apellidos:");
let edad = prompt("Introduce tu edad:");
let numeroentre = prompt("Introduce un numero entre el 1 y el 10:");

const mensaje = `Hola me llamo ${nombre}, mis apellidos son ${apellidos} y tengo ${edad} años `;

console.log(mensaje);


Ejercicio 5 Pide al usuario su nombre, una afición y si le gusta programar usando confirm(). Muestra en un párrafo del documento un texto que combine los tres datos usando un único template literal.

let nombre5 = prompt("Introduce tu nombre:");
let aficion = prompt("Introduce una aficion que te guste:");
let pregunta = prompt("¿Te gusta programar?")
if (pregunta){
    console.log("El usuario ha dicho que si");
}else{
    console.log("Acabas de decir que no te gusta programar");
}

const mensaje = `Hola me llamo ${nombre5}, me gusta ${aficion} y mi respuesta es ${pregunta}`;

Ejercicio 5 sin el if else

let nombre6 = prompt("Introduce tu nombre:");
let aficion2 = prompt("Introduce una aficion que te guste:");
let pregunta2 = prompt("¿Te gusta programar?");
const pregunta = true;


Ejercicio 6 Pide al usuario un string, Muestra en el documento la posición que ocupa la primera “a”

const texto = "Hola soy Cesar";
const posicion = texto.indexOf("a");

console.log(posicion);


Ejercicio 7 Pide al usuario un string con espacios de más al principio o al final. Muestra por consola: el string sin esos espacios, el mismo string en mayúsculas y los 3 primeros caracteres.


let pedirstring = prompt("    Introduce un texto");


Ejercicio 8 Pide al usuario tres strings, debes sustituir en el primer string la primera ocurrencia del segundo string por el contenido del tercer string
let string1 = prompt("Ingresa el primer string:");
let string2 = prompt("Ingresa el string a buscar:");
let string3 = prompt("Ingresa el string de reemplazo:");

let resultado1 = string1.replace(string2, string3);
alert("Resultado: " + resultado1);




Ejercicio 9 Amplía el ejercicio anterior a todas las ocurrencias.
let texto = prompt("Ingresa el texto completo:");
let buscar = prompt("Ingresa el string a buscar:");
let reemplazar = prompt("Ingresa el string de reemplazo:");



let resultado2 = texto.replaceAll(buscar, reemplazar);

alert("Resultado con todas las ocurrencias: " + resultado2);




Ejercicio 10 Pide dos strings al usuario. Debes mostrar el número de veces que el segundo string está incluido en el primero.

let textoCompleto = prompt("Ingresa el texto completo:");
let textoBuscar = prompt("Ingresa el texto a buscar:");

let contador = 0;
let posicion = textoCompleto.indexOf(textoBuscar); 




Ejercicio 11
¿Cuáles son los resultados de estas expresiones?. Anotalo en un comentario antes de ejecutarlo y luego compruébalo mostrándolo por consola.
 
console.log("" + 1 + 0)// Va a dar 10
"" - 1 + 0 // Nos va dar 
true + false //
6 / "3" //
"2" * "3" //
4 + 5 + "px"
"$" + 4 + 5
"4" - 2
"4px" - 2
"  -9 " + 5
"  -9 " - 5
null + 1
undefined + 1
" \t \n" - 2  



//Ejercicio 12
//Arregla el código del ejemplo para que el resultado sea 3.

let a = Number(prompt("¿Primer numero?","1,5"));
let b = Number(prompt("¿Segundo numero?",2));

alert(a + b);



//Ejercicio 13
//¿Cuáles son los valores finales de todas las variables a, b, c y d después del código a continuación?

let a = 1,b = 1;

let c = ++a; 

let d = b++;

console.log("a =", a);
console.log("b =", b);
console.log("c =", c); 





// 14 Cual sera el resultado de las siguientes expresiones?

5 > 4
"apple" > "pineapple"
"2" > "12"
undefined == null
undefined === null
null == "\n0\n"
null === +"\n0\n"


Escribe en un comentario el resultado que esperas de cada expresión y el tipo de dato del resultado. Después compruébalo por consola usando typeof.



"5" + 3 //53
"5" - 3 //2
"5" * "2" //10
true + 1 // 2
"3" + 4 + 5 // 345
3 + 4 + "5" //75



Dado el siguiente código, muestra por consola el resultado de cantidad || 10 y de cantidad ?? 10 para cada una de las variables. ¿En qué casos dan resultados distintos? Si el valor 0 fuera una cantidad válida, ¿qué operador usarías? Razona la respuesta.




let cantidad1;
let cantidad2 = null;
let cantidad3 = 0;
let cantidad4 = "";
let cantidad5 = 5;

console.log(cantidad1 || 10); // 5  5
console.log(cantidad2 )




Crea un programa que pida al usuario un número entero de minutos y muestre cuántas horas y minutos son. Por ejemplo, para 135 debe mostrar "2 horas y 15 minutos". Solo puedes usar los operadores aritméticos. Antes de programarlo, comprueba por consola cuánto vale 135 / 60. ¿Qué diferencia hay con Java?



console.log(135 / 60); 

let total = Number(prompt("Pon solo los minutos:"));

let minutos = total % 60;
let horas = (total - minutos) / 60;

alert(horas + " horas y " + minutos + " minutos");




Escribe en un comentario qué crees que mostrará cada console.log. Después ejecútalo. Si alguna línea produce un error, explica por qué y coméntala para que el resto del código pueda ejecutarse.



	console.log(a);  // mostrara undefined
var a = 5;
 
if (true) {
  		var x = 1;
  		let y = 2;
}
console.log(x); // mostrará 1
console.log(y); // mostrará Error
 
for (var i = 0; i < 3; i++) {}
console.log(i); // Mostrará 3
 
for (let j = 0; j < 3; j++) {}
console.log(j); //Mostrará errpr


Crea un programa que pida un texto al usuario y muestre "Has escrito algo" o "No has escrito nada". En la condición del if solo puedes poner la variable, sin ningún operador de comparación. Prueba con estas entradas y explica qué ocurre en cada caso:
Un texto cualquiera
Dejar el campo vacío
Pulsar Cancelar
Escribir 0
Escribir un espacio


*/





