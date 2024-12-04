# 🏠 **Espaço & Estilo | Design | Interiores**

![Logo do Espaço & Estilo](https://github.com/manulucena/projeto-site-design-interiores/tree/main/imagemlogo)

## 📌 **Introdução**  
Este projeto visa a criação de um sistema web para a empresa fictícia de design de interiores "Espaço & Estilo". O site reúne informações sobre a empresa, apresenta portfólio de projetos, sugere produtos decorativos e permite interação com clientes.

### 🎯 **Objetivo**  
Fornecer uma experiência completa para visitantes e administradores, com funcionalidades dinâmicas e uma interface amigável.

---

## 🛠️ **Funcionalidades Principais**
- **Página Inicial (Home):** Apresentação geral do site.  
- **Quem Somos:** Informações sobre a equipe com fotos e descrições.  
- **Portfólio:** Galeria de projetos com categorias e descrição detalhada.  
- **Produtos:** Sugestões decorativas cadastradas diretamente no sistema.  
- **Como Funciona:** Explicação das etapas do processo criativo.  
- **Fale Conosco:** Formulário para mensagens.  
- **Depoimentos:** Espaço para feedback dos clientes.  
- **Administração:** Gerenciamento de conteúdo (projetos, depoimentos, produtos, entre outros).  

---

## 📅 **Cronograma do Projeto**
| **Data**       | **Descrição**                                                                 |
|-----------------|-------------------------------------------------------------------------------|
| 12/11/2024      | Definição da equipe e tema do projeto.                                       |
| 15/11/2024      | Envio do link do repositório, divisão das funções e elaboração da introdução e descrição geral. |
| 21/11/2024      | Entrega parcial com apresentação e commit no GitHub.                        |
| 29/11/2024      | Última apresentação parcial e entrega do projeto funcional.                 |

---

## 👨‍💻 **Equipe de Desenvolvimento**
| **Nome**            | **Função**                      |
|----------------------|----------------------------------|
| Davi Menezes         | Desenvolvedor Full-stack        |
| Emanuelle Lucena     | Desenvolvedora Full-stack       |
| Flávio Paiva         | Desenvolvedor Full-stack        |
| Tayná Silva          | Desenvolvedora Full-stack       |
| Kaline Vieira        | Desenvolvedora Full-stack       |

---

## 🔗 **Link do Repositório**
[GitHub - Espaço & Estilo](https://github.com/manulucena/projeto-site-design-interiores)

---

## 📋 **Requisitos do Sistema**

## Requisitos Funcionais

### [UC001] Acessar Painel Administrador
**Descrição:** Permite que o administrador acesse a área restrita do sistema.  
**Atores:** Administrador  
**Entradas e Pré-condições:** Login e senha válidos.  

**Mensagens:**
- `M1`: Nome de usuário ou senha incorretos.

---

### [UC002] Moderação de Depoimentos
**Descrição:** Permite ao administrador aprovar ou excluir depoimentos enviados pelos usuários.  
**Atores:** Administrador  
**Entradas e Pré-condições:** Depoimento enviado por um usuário.

**Mensagens:**
- `M2`: Depoimento apagado com sucesso.  
- `M3`: Não foi possível apagar o depoimento.

---

### [UC003] Visualizar Página "Quem Somos"
**Descrição:** Exibe informações da equipe, como fotos e descrições.  
**Atores:** Administrador, Visitante  
**Entradas e Pré-condições:** Acesso à página.

---

### [UC004] Gerenciar Produtos
**Descrição:** Permite cadastrar, alterar ou excluir informações de produtos recomendados.  
**Atores:** Administrador  
**Entradas e Pré-condições:** Login na área restrita, dados do produto (nome, categoria, marca, preço, etc.).

**Mensagens:**
- `M4`: Produto cadastrado com sucesso.
- `M5`: Não foi possível cadastrar o produto.  
- `M6`: Produto alterado com sucesso.
- `M7`: Não foi possível alterar o produto.  
- `M8`: Produto excluído com sucesso.
- `M9`: Não foi possível excluir o produto.

---

### [UC005] Gerenciar Portfólio
**Descrição:** Permite cadastrar, alterar ou excluir projetos no portfólio.  
**Atores:** Administrador  
**Entradas e Pré-condições:** Login na área restrita, dados do projeto (nome, categoria, descrição, etc.).

**Mensagens:**
- `M10`: Projeto cadastrado com sucesso.
- `M11`: Não foi possível cadastrar o projeto.  
- `M12`: Projeto alterado com sucesso. 
- `M13`: Não foi possível alterar o projeto. 
- `M14`: Projeto excluído com sucesso.
- `M15`: Não foi possível excluir o projeto.

---

### [UC006] Visualizar Página "Home"
**Descrição:** Apresenta a visão geral do site com destaques e links para outras seções.  
**Atores:** Visitante  
**Entradas e Pré-condições:** Acesso à página inicial.

---

### [UC007] Enviar Mensagem pelo Formulário "Fale Conosco"
**Descrição:** Permite que visitantes enviem mensagens para a equipe.  
**Atores:** Visitante  
**Entradas e Pré-condições:** Nome, e-mail, assunto e mensagem.

**Mensagens:**
- `M16`: Obrigado, $nome! Sua mensagem foi enviada com sucesso.
- `M17`: Erro ao enviar a mensagem. Por favor, tente novamente.

---

### [UC008] Visualizar Página "Como Funciona"
**Descrição:** Exibe etapas do processo criativo para clientes interessados.  
**Atores:** Visitante  
**Entradas e Pré-condições:** Acesso à página.

---

### [UC009] Visualizar e Enviar Depoimentos
**Descrição:** Permite que visitantes visualizem e enviem depoimentos.  
**Atores:** Visitante  
**Entradas e Pré-condições:** Nome e depoimento.

**Mensagens:**
- `M18`: Obrigado, $nome! Seu depoimento foi enviado com sucesso.
- `M19`: Erro ao enviar o depoimento. Por favor, tente novamente.

---

## 📊 **Prototipação de Banco de Dados**

### Tabela de Usuários
| Atributo  | Tipo      | Tamanho | Obrigatório |
|-----------|-----------|---------|-------------|
| ID        | Inteiro   | 11      | Sim         |
| Usuário   | Varchar   | 50      | Sim         |
| Senha     | Varchar   | 20      | Sim         |

---

### Tabela de Contatos
| Atributo  | Tipo      | Tamanho | Obrigatório |
|-----------|-----------|---------|-------------|
| ID        | Inteiro   | 11      | Sim         |
| Nome      | Varchar   | 100     | Sim         |
| Email     | Varchar   | 100     | Sim         |
| Assunto   | Varchar   | 50      | Sim         |
| Mensagem  | Text      | -       | Sim         |

---

### Tabela de Portfólio
| Atributo  | Tipo      | Tamanho | Obrigatório |
|-----------|-----------|---------|-------------|
| Código    | Inteiro   | 11      | Sim         |
| Nome      | Varchar   | 100     | Sim         |
| Categoria | Varchar   | 50      | Sim         |
| Descrição | Text      | -       | Sim         |
| Imagem    | Varchar   | 255     | Sim         |
| Data      | Date      | -       | Sim         |

---

### Tabela de Produtos
| Atributo  | Tipo      | Tamanho | Obrigatório |
|-----------|-----------|---------|-------------|
| Código    | Inteiro   | 11      | Sim         |
| Nome      | Varchar   | 100     | Sim         |
| Categoria | Varchar   | 50      | Sim         |
| Marca     | Varchar   | 50      | Não         |
| Preço     | Decimal   | 10,2    | Sim         |
| Imagem    | Varchar   | 255     | Sim         |
| Fornecedor| Varchar   | 100     | Não         |

---

### Tabela de Depoimentos
| Atributo  | Tipo      | Tamanho | Obrigatório |
|-----------|-----------|---------|-------------|
| ID        | Inteiro   | 11      | Sim         |
| Nome      | Varchar   | 100     | Sim         |
| Depoimento| Text      | -       | Sim         |


## 🖼️ **Protótipos**
### Protótipo da Página Inicial  
![Página Inicial](https://github.com/manulucena/projeto-site-design-interiores/blob/main/imagens%20telas%20site/Tela%20Home.jpg)

### Protótipo da Página Quem Somos  
![Página Quem Somos](https://github.com/manulucena/projeto-site-design-interiores/blob/main/imagens%20telas%20site/Tela%20Quem%20Somos.jpg)

### Protótipo da Página Portfólio  
![Página Portfólio](https://github.com/manulucena/projeto-site-design-interiores/blob/main/imagens%20telas%20site/Tela%20Protf%C3%B3lio.jpg)

### Protótipo da Página Produtos  
![Página Produtos](https://github.com/manulucena/projeto-site-design-interiores/blob/main/imagens%20telas%20site/Tela%20Produtos.jpg)

### Protótipo da Página Como Funciona  
![Página Como Funciona](https://github.com/manulucena/projeto-site-design-interiores/blob/main/imagens%20telas%20site/Imagem%20Tela%20Como%20Funciona.jpg)

### Protótipo da Página Fale Conosco  
![Página Fale Conosco](https://github.com/manulucena/projeto-site-design-interiores/blob/main/imagens%20telas%20site/Tela%20Fale%20Conosco.jpg)

### Protótipo da Página Depoimentos  
![Página Depoimentos](https://github.com/manulucena/projeto-site-design-interiores/blob/main/imagens%20telas%20site/Tela%20Depoimentos.jpg)

### Protótipo da Página Login Painel Admin  
![Página Login Painel Admin](https://github.com/manulucena/projeto-site-design-interiores/blob/main/imagens%20telas%20site/Tela%20Painel%20Admin%20(login).jpg)

### Protótipo da Página Inicial Painel Admin  
![Página Inicial Painel Admin](https://github.com/manulucena/projeto-site-design-interiores/blob/main/imagens%20telas%20site/Tela%20Painel%20Admin%20(pagina%20inicial).jpg)

### Protótipo da Página Lista Mensagens Painel Admin  
![Página Lista Mensagens Painel Admin](https://github.com/manulucena/projeto-site-design-interiores/blob/main/imagens%20telas%20site/Tela%20Painel%20Admin%20(lista%20mensagens).jpg)

### Protótipo da Página Lista Portfólio Painel Admin  
![Página Lista Portfólio Painel Admin](https://github.com/manulucena/projeto-site-design-interiores/blob/main/imagens%20telas%20site/Tela%20Painel%20Admin%20(lista%20portf%C3%B3lio).jpg)

### Protótipo da Página Lista Produtos Painel Admin  
![Página Lista Produtos Painel Admin](https://github.com/manulucena/projeto-site-design-interiores/blob/main/imagens%20telas%20site/Tela%20Painel%20Admin%20(lista%20produtos).jpg)

### Protótipo da Página Lista Depoimentos Painel Admin  
![Página Lista Depoimentos Painel Admin](https://github.com/manulucena/projeto-site-design-interiores/blob/main/imagens%20telas%20site/Tela%20Painel%20Admin%20(lista%20depoimentos).jpg)













