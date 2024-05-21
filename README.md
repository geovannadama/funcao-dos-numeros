# Identificador de Números
Este é um aplicativo web simples desenvolvido em HTML, PHP e CSS que permite aos usuários inserir uma lista de números separados por vírgula e obter informações sobre cada número, incluindo se é par ou ímpar, redondo ou não, e se é positivo, negativo ou zero.
 
## Como Usar
1. Clone este repositório para o seu ambiente local ou hospede os arquivos em um servidor web.
2. Abra o arquivo index.php em um navegador da web.
3. Digite os números escolhidos no campo.
4. Clique em verificar para obter as informações sobre os números.
 
## Funcionalidades
1. Inserção de números: Os usuários podem inserir uma lista de números separados por vírgula em um campo de entrada.
Identificação de números:
2. Par ou ímpar: O aplicativo identifica se cada número é par ou ímpar.
3. Redondo ou não: Verifica se cada número é redondo (não tem casas decimais) ou não.
4. Positivo, negativo ou zero: Informa se cada número é positivo, negativo ou zero.
 
## Explicando o código
1. foreach: percorre cada elemento do array e executa o bloco de código especificado para cada elemento. Ele é especialmente útil quando você precisa percorrer todos os elementos de um array sem se preocupar com os índices
 
2. $_SERVER["REQUEST_METHOD"] == "POST": Esta condição verifica se o método de requisição HTTP utilizado é POST. O método de requisição POST é comumente usado para enviar dados de formulários HTML.
 
3. Explode: fornece uma maneira de quebrar uma string e convertê-la em um array. Essa estrutura de dados facilita a análise de certas palavras.
 
4. Trim: o Trim serve para retirar espaços em branco de uma string.
 
5. Round: Retorna um valor arredondado de num com a precisão especificada. Número de digitos depois do ponto decimal.
 
## Tecnologias Utilizadas
1. Vs Code
2. Github
3. HTMl5
4. PHP
5. CSS
6. Chat GPT
 
## Fontes
(https://www.php.net/manual/pt_BR/function.round.php#:~:text=Retorna%20um%20valor%20arredondado%20de,d%C3%ADgitos%20depois%20do%20ponto%20decimal  ).  
(https://www.php.net/manual/pt_BR/function.trim.php#:~:text=Como%20trim()%20retira%20caracteres,in%C3%ADcio%20e%20tamb%C3%A9m%20ser%C3%A1%20retirado.  )  
(https://blog.betrybe.com/php/php-explode/  )