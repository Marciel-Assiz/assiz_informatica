/* 

 */
 function validacao() {
      var formulario = document.forms["form"] 
      var nome = formulario.nome.value
        alert("Você digitou: " + nome)
        alert("Por favor, indique o seu nome.");

        return false;
    }
