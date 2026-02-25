# Exercícios

## Do livro

1. HTML, CSS, JavaScript e PHP.

2. HiperText Markup Language.

3. Pois se trata de uma tecnologia de banco de dados sequencial, isto é, 
    em tabelas, colunas e linhas.

4. A principal diferença é que o JavaScript roda no cliente e o PHP, no 
    servidor. É necessário utilizar ambos para separar a lógica da página da 
    lógica de negócio, do servidor, isto é, a diferença entre mostrar um 
    popup ao clicar um botão e acessar um banco de dados.

5. Cascate Style Sheets.

6. Canvas, video e áudio.

7. Simplesmente criando uma issue no repositório público ou, se tiver a 
    habilidade, criar um fork do repositório, corrigir o bug e criar uma pull 
    request no repositório.

8. Pois permitem maior agilidade na construção de páginas dinâmicas na web. 
    Além disso, disponibilizam um ecossistema de pacotes gerados pela 
    comunidade e outras funcionalidades utilizadas atualmente.

9. Pois a arquitetura orientada a eventos permite a execução assíncrona das 
    tarefas através de um laço de eventos.

## Outros

1. O protocolo HTTP (Hypertext Transfer Protocol) é a base da comunicação na World Wide Web. Criado por Tim Berners-Lee no início dos anos 1990, ele define como as mensagens são formatadas e transmitidas. No ciclo de navegação descrito no Capítulo 1 do livro de Robin Nixon, qual é a função primordial do servidor web após receber uma requisição de uma página dinâmica contendo código PHP?

A) Renderizar o layout CSS para o usuário final.
B) Processar a lógica no lado do servidor e consultar o banco de dados antes de enviar o HTML.
C) Converter o código JavaScript em linguagem de máquina para o processador do cliente.
D) Armazenar permanentemente o endereço IP do navegador no sistema DNS.
E) Ignorar o código HTML e focar apenas na execução de scripts Node.js.

Resposta: B.

2. No desenvolvimento web moderno, a separação de responsabilidades entre cliente e servidor é fundamental. O PHP e o JavaScript desempenham papéis distintos, mas complementares. Considere o seguinte cenário: Um desenvolvedor precisa validar se um campo de formulário foi preenchido antes do envio dos dados e, após o envio, salvar essas informações em um servidor. As tecnologias ideais para estas funções seriam, respectivamente:

A) MySQL para a validação e CSS para o salvamento.
B) HTML5 para a validação e Apache para o salvamento.
C) JavaScript para a validação no lado do cliente e PHP para o processamento no servidor.
D) Node.js para a validação e JavaScript para a persistência em banco de dados.
E) CSS para a lógica de interface e MySQL para a validação de campos.

Resposta: C.

3. O sistema de banco de dados é o componente responsável por gerenciar a persistência de informações em aplicações web dinâmicas. O livro de Robin Nixon destaca o MySQL e sua alternativa de código aberto, o MariaDB. Sobre a relação entre essas tecnologias, é correto afirmar que:

A) O MariaDB é uma linguagem de programação que substitui o PHP.
B) O MySQL é utilizado exclusivamente para estilização de tabelas em HTML5.
C) O MariaDB é um "clone" de código aberto totalmente compatível com o MySQL.
D) O MySQL funciona apenas em servidores que não utilizam o protocolo HTTP.
E) O MariaDB foi criado para substituir o servidor Apache na entrega de páginas.

Resposta: C.

4. O padrão HTML5 trouxe avanços significativos para a web, eliminando a dependência de plugins externos para tarefas multimídia. De acordo com o resumo do Capítulo 1, qual das alternativas abaixo descreve uma característica introduzida ou simplificada pelo HTML5?

A) A necessidade obrigatória de fechar todas as tags, como `<br></br>`.
B) O uso exclusivo do motor V8 para renderizar tabelas complexas.
C) A integração nativa para manipular gráficos (canvas), áudio e vídeo.
D) A proibição do uso de CSS3 em documentos estruturados.
E) A substituição completa do protocolo HTTP pelo protocolo de busca DNS.

Resposta: C.

5. O ciclo de requisição e resposta é o fluxo de dados entre o navegador e o servidor. Imagine que um usuário digita `www.exemplo.com.br` em seu navegador. Qual é a etapa técnica necessária para converter esse nome de domínio em um endereço IP legível para as máquinas, permitindo que a requisição chegue ao servidor correto?

A) Execução de um script assíncrono em JavaScript.
B) Consulta ao sistema DNS (Domain Name System).
C) Processamento de uma query SQL no MySQL.
D) Estilização do nome do domínio via CSS3.
E) Compactação do arquivo através do Node.js.

Resposta: B.

6. O Node.js, criado em 2009 por Ryan Dahl, apresentou uma alternativa ao modelo tradicional do servidor Apache. Com base no texto, qual é a principal característica técnica que torna o Node.js ideal para aplicações de tempo real e escaláveis, como chats?

A) O uso de HTML estático para todas as requisições.
B) A obrigatoriedade de utilizar o banco de dados MariaDB.
C) O modelo de I/O não bloqueante e orientado a eventos.
D) A capacidade de rodar exclusivamente no navegador do cliente.
E) O fechamento automático de tags HTML sem intervenção do desenvolvedor.

Resposta: C.

7. O CSS (Cascading Style Sheets) é descrito como o companheiro crucial do HTML. No contexto da 7ª edição do livro de Nixon, o padrão CSS3 é destacado por permitir:

A) A execução de consultas complexas em bancos de dados relacionais.
B) O controle total sobre o processamento de cartões de crédito no servidor.
C) A criação de animações complexas com poucas linhas de código.
D) A substituição do protocolo HTTP por comunicações assíncronas.
E) O gerenciamento de módulos de segurança no servidor Apache.

Resposta: C.

8. O conceito de "Código Aberto" (Open Source) é um dos pilares das tecnologias discutidas na obra (PHP, MySQL, Apache). Uma consequência direta desse modelo de desenvolvimento para a comunidade de programadores é:

A) O aumento dos custos de licenciamento para estudantes de informática.
B) A impossibilidade de modificar o código-fonte original.
C) A rápida correção de bugs e a constante evolução das ferramentas pela comunidade.
D) A exclusividade do uso dessas tecnologias em sistemas operacionais fechados.
E) O fim da necessidade de utilizar navegadores para acessar a web.

Resposta: C.

9. A comunicação assíncrona é mencionada no encerramento do Capítulo 1 como uma forma de melhorar a experiência do usuário. Um exemplo clássico desse recurso, citado no texto, ocorre quando:

A) O servidor Apache cai e o site para de funcionar imediatamente.
B) O navegador solicita uma página e o usuário deve esperar o carregamento total.
C) O Gmail verifica a disponibilidade de um nome de usuário em segundo plano sem recarregar a página.
D) O banco de dados MySQL deleta todos os dados após uma consulta SQL.
E) O HTML5 impede a execução de scripts JavaScript no lado do cliente.

Resposta: C.

10. Considere o seguinte trecho de código hipotético em uma página de um site dinâmico:

```php
<?php
  $usuario = "Aluno de Informática";
  echo "<h1>Bem-vindo, $usuario!</h1>";
?>

```

Com base no funcionamento de páginas dinâmicas explicado no Capítulo 1, o que o navegador do usuário receberá após processar esta requisição?

A) O código PHP exatamente como está escrito acima.
B) Uma mensagem de erro, pois o PHP não pode gerar tags HTML.
C) Apenas o banco de dados MySQL em formato de texto.
D) O resultado final em HTML: `<h1>Bem-vindo, Aluno de Informática!</h1>`.
E) Um arquivo CSS contendo as cores e fontes da variável `$usuario`.

Resposta: D.
