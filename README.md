<h1 align="center"> Validação de CPF utilizando PHP </h1>
<div>
 <ul>
  <li> 
   <h1> Entenda o cálculo </h1>
   <p align="justify"> O CPF é formado por 11 dígitos numéricos que seguem a máscara "###.###.###-##", a verificação do CPF acontece utilizando os 9 primeiros dígitos e, com um cálculo simples, verificando se o resultado corresponde aos dois últimos dígitos (depois do sinal "-"). Vamos usar como exemplo, um CPF fictício "529.982.247-25". </p> </br>
   <ul>
    <li>
     <h2> Validação do primeiro dígito </h2>
     <p>Primeiramente multiplica-se os 9 primeiros dígitos pela sequência decrescente de números de 10 à 2 e soma os resultados. Assim:</p>
     <p align="center">5 * <b>10</b> + 2 * <b>9</b> + 9 * <b>8</b> + 9 * <b>7</b> + 8 * <b>6</b> + 2 * <b>5</b> + 2 * <b>4</b> + 4 * <b>3</b> + 7 * <b>2</b> </p>
     <p>O resultado do nosso exemplo é: 295</p>
     <p>O próximo passo da verificação também é simples, basta multiplicarmos esse resultado por 10 e dividirmos por 11.</p>
     <p align="center"> 295 * 10 / 11 </p>
     <p align="justify"> O resultado que nos interessa na verdade é o RESTO da divisão. Se ele for igual ao primeiro dígito verificador (primeiro dígito depois do '-'), a primeira parte da validação está correta. </p>
     <p> Observação Importante: Se o resto da divisão for igual a 10, nós o consideramos como 0. </p>
     <p> Vamos conferir o primeiro dígito verificador do nosso exemplo: </p>
     <p> O resultado da divisão acima é '268' e o RESTO é 2. <p>
     <p align="center"> Isso significa que o nosso CPF exemplo passou na validação do primeiro dígito. </p>
    </li></br>
    <li>
     <h2> Validação do segundo dígito </h2>
     <p align="justify">A validação do segundo dígito é semelhante à primeira, porém vamos considerar os 9 primeiros dígitos, mais o primeiro dígito verificador, e vamos multiplicar esses 10 números pela sequencia decrescente de 11 a 2. Vejamos:</p>
     <p align="center">5 * 11 + 2 * 10 + 9 * 9 + 9 * 8 + 8 * 7 + 2 * 6 + 2 * 5 + 4 * 4 + 7 * 3 + 2 * 2 </p>
     <p>O resultado do nosso exemplo é: 347</p>
     <p>Seguindo o mesmo processo da primeira verificação, multiplicamos por 10 e dividimos por 11.</p>
     <p align="center"> 347 * 10 / 11 </p>
     <p> Verificando o RESTO, como fizemos anteriormente, temos: </p>
     <p> O resultado da divisão é '315' e o RESTO é 5. <p>
     <p> Verificamos, se o resto corresponde ao segundo dígito verificador. </p>
     <p align="center"> Com essa verificação, constatamos que o CPF 529.982.247-25 é válido. </p>
    </li>
   </ul>
  </li>
 </ul>
</div>
