Documento de visão:
[Espaco-Estilo-Documentação Sistema 1.0-22-11-24.docx](https://github.com/user-attachments/files/17877662/Espaco-Estilo-Documentacao.Sistema.1.0-22-11-24.docx)

Documento de Requisitos do Sistema Web Espaço & Estilo Versão 1.0
Projeto aplicado da disciplina Programação Web

Cronograma do Projeto

Data
Descrição
12/11/2024
Definição da equipe e tema do projeto
15/11/2024
Envio do link do repositório, divisão das funções, elaboração da Introdução e Descrição geral do sistema
21/11/2024
Entrega parcial da evolução do projeto – apresentação e novo commit no Github
28/11/2024
Última apresentação parcial e fechamento do projeto funcional


Equipe de desenvolvimento

Nome
Função
Davi Menezes
Desenvolvedor Full-stack
Emanuelle Lucena
Desenvolvedor Full-stack
Flávio Paiva
Desenvolvedor Full-stack
Tayná Silva
Desenvolvedor Full-stack
Kaline Vieira
Desenvolvedor Full-stack

1. Introdução
Este documento especifica os requisitos do sistema web Espaço & Estilo. fornecendo aos desenvolvedores e stakeholders as informações necessárias para o projeto e implementação, assim como para a realização dos testes e homologação do sistema.

1.1.1 O projeto consiste na criação de um sistema web que centraliza informações sobre o trabalho da equipe de design de interiores, apresenta portfólio, sugere produtos de decoração e possibilita a interação com clientes e visitantes do site. O sistema deve incluir funcionalidades para envio de mensagens, exibição de depoimentos e gerenciamento de conteúdo por parte da equipe administrativa e de design.

2. Descrição geral do sistema

O sistema será composto por um site de design de interiores com as seguintes funcionalidades principais:
Página Inicial (Home): Uma apresentação geral do site, destacando os serviços de design de interiores oferecidos e convidando os visitantes a explorarem mais.
Quem Somos: Uma seção dedicada à apresentação da equipe.
Portfólio: Uma galeria dinâmica onde os projetos desenvolvidos pela equipe são exibidos. Os projetos cadastrados no banco de dados aparecerão automaticamente nesta seção, permitindo aos usuários explorar os trabalhos realizados com imagens de alta qualidade e descrições detalhadas.
Produtos: Uma página dedicada a sugestões de itens decorativos e mobiliário, cadastrados diretamente no banco de dados. Esses produtos incluem descrições e links para lojas parceiras, permitindo aos visitantes adquirir itens que complementam seus projetos.
Como Funciona: Uma explicação clara e detalhada das etapas do nosso processo criativo, desde o levantamento inicial de informações até o acompanhamento da execução do projeto. Essa seção busca transmitir transparência e confiança aos clientes.
Fale Conosco: Um formulário funcional para que visitantes possam enviar mensagens diretamente à equipe, facilitando a comunicação e o esclarecimento de dúvidas.
Depoimentos: Uma área interativa onde os clientes podem compartilhar suas experiências e avaliações. Os depoimentos são armazenados no banco de dados e exibidos automaticamente no site, criando um painel de feedbacks real e confiável.
      Além disso, o sistema contará com uma página de login exclusiva para o administrador e a equipe de design. Por meio dessa área restrita, será possível gerenciar todo o conteúdo do site de forma prática e segura. As funcionalidades incluem a moderação dos feedbacks exibidos, a atualização dos projetos no portfólio, a edição das informações na seção "Quem Somos" e o cadastro de novos produtos na página de sugestões de decoração.

      

3. Requisitos funcionais

 [UC001] Acessar Painel Administrador
Descrição: Permite que o administrador acesse a área restrita do sistema.
Atores: Administrador
Entradas e pré-condições: Login e senhas válidos.
Saídas e pós-condição: não possui.


* Mensagens
M1
Usuário ou senha incorretos.
M2
Acesso negado para usuário não autorizado.
* Especificação dos Atributos: 

EA1 – Acessar painel de administrador

Dados
Atributo
Tipo
Tam.
Máscara
Obrig.
Usuário
Varchar
50

X
Senha
Varchar
20

X
 [UC002] Moderação de depoimentos
Descrição: Permite ao administrador aprovar ou rejeitar depoimentos enviados pelo cliente.
Atores: Administrador.
Entradas e pré-condições: Depoimentos pendentes no sistema.
Saídas e pós-condição: Depoimentos aprovados exibidos no site.


* Mensagens
M1
Nenhum depoimento pendente.
M2
Depoimento moderado com sucesso.
* Especificação dos Atributos: 

EA1 – Moderação de depoimentos

Dados
Atributo
Tipo
Tam.
Máscara
Obrig.
Nome
Varchar
100

X
Depoimento
Text


X

[UC003] Visualizar página estática “Quem somos”
Descrição: Permite visualizar os dados da equipe exibidos na seção “Quem Somos”.
Atores: Administrador, visitantes.
Entradas e pré-condições: Acesso ao site.
Saídas e pós-condição: Página carregada com as informações predefinidas.

* Mensagens
M1
Informações atualizadas com sucesso.
M2
Campos obrigatórios não preenchidos.

[UC004] Cadastrar novos produtos
Descrição: Permite inserir novos produtos na página de sugestões de decoração, com imagens, descrição e links para compra. 
Atores: Administrador.
Entradas e pré-condições: Login na área restrita.
Saídas e pós-condição: Produto cadastrado e visível aos usuários.

* Mensagens
M1
Produto cadastrado com sucesso.
M2
Erro ao salvar o produto
* Especificação dos Atributos: 

EA1 – Cadastrar novos produtos

Dados
Atributo
Tipo
Tam.
Máscara
Obrig.
Nome
Varchar
	50

X
Categoria
Varchar
30

X
Marca
Varchar
50

X
Preço
Float


X
Imagem (link)
Varchar
200

X
Fornecedor (link compra)
Varchar
200

X


[UC005] Gerenciar Portfólio
Descrição: Permite ao administrador editar e remover projetos no portfólio do site. 
Atores: Administrador
Entradas e pré-condições: o usuário deve estar autenticado no sistema.
Saídas e pós-condição: Projetos atualizados e disponíveis para visualização no site.

* Mensagens
M1
Operação realizada com sucesso.
M2
Campos obrigatórios não preenchidos.

* Especificação dos Atributos: 

EA1 – Solicitação de demanda com anexo de arquivos. 

Dados
Atributo
Tipo
Tam.
Máscara
Obrig.
Nome
Varchar
100

X
Categoria
Varchar
50

X
Descrição
Text


X
Imagen
Varchar
200

X
[UC006] Acessar página estática “Home”
Descrição: Permite visualização da Página Inicial
Atores: Administrador, visitantes.
Entradas e pré-condições: acesso ao site.
Saídas e pós-condição: Página carregada com as informações predefindas.


[UC007] Enviar mensagem
Descrição: Permite aos usuários enviar mensagens.
Atores: Usuários – clientes.
Entradas e pré-condições: não possui.
Saídas e pós-condição: não possui.

* Mensagens
M1
Mensagem enviada com sucesso. Em breve nossa equipe irá responder.
* Especificação dos Atributos: 

EA1 – Enviar mensagem

Dados
Atributo
Tipo
Tam.
Máscara
Obrig.
Nome
Varchar
40

X
Email
Varchar
10

X
Assunto
Varchar
10

X
Mensagem
Text


X
[UC008] Visualizar página “Como Funciona”
Descrição: Permite que os visitantes e administrador acessem a seção com explicações sobre as etapas de projeto. 
Atores: Usuários, Administrador.
Entradas e pré-condições: Acesso ao site.
Saídas e pós-condição: Página carregada com o conteúdo predefinido.

4. Requisitos não-funcionais

[NF001] Usabilidade
A interface com o usuário é de vital importância para o sucesso do sistema. Principalmente por ser um sistema que pode ser utilizado diariamente, o usuário deverá em pouco tempo aprender como utilizar o sistema.
O sistema terá uma interface amigável ao usuário primário sem se tornar cansativa aos usuários mais experientes, de forma Responsiva e leve.

Prioridade:
?
Essencial
?
Importante
?
Desejável
[NF002] Compatibilidade
O sistema deve ser compatível com os navegadores mais utilizados (Chrome, Firefox, Safari e Edge)
Prioridade:
?
Essencial
?
Importante
?
Desejável
5. Diagramação e prototipação de Banco de dados
Definição de tabela de Cadastro de Usuário
Atributo
Tipo
Tam.
Máscara
Obrig.
ID
Inteiro
11
PK
X
Nome
Texto
255

X
Login
Texto
16

X
Senha
Texto
15





