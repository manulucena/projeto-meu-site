# 🏠 **Espaço & Estilo | Design | Interiores**

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
**Descrição:** Permite ao administrador aprovar, editar ou excluir depoimentos enviados pelos usuários.  
**Atores:** Administrador  
**Entradas e Pré-condições:** Depoimento enviado por um usuário.

**Mensagens:**
- `M2`: Depoimento aprovado com sucesso.  
- `M3`: Depoimento excluído com sucesso.

---

### [UC003] Visualizar Página "Quem Somos"
**Descrição:** Exibe informações da equipe, como fotos e descrições.  
**Atores:** Visitante  
**Entradas e Pré-condições:** Acesso à página.

---

### [UC004] Gerenciar Produtos
**Descrição:** Permite criar, alterar ou excluir informações de produtos recomendados.  
**Atores:** Administrador  
**Entradas e Pré-condições:** Dados do produto (nome, categoria, marca, preço, etc.).

**Mensagens:**
- `M4`: Produto adicionado com sucesso.  
- `M5`: Produto atualizado com sucesso.  
- `M6`: Produto excluído com sucesso.

---

### [UC005] Gerenciar Portfólio
**Descrição:** Permite criar, alterar ou excluir projetos no portfólio.  
**Atores:** Administrador  
**Entradas e Pré-condições:** Dados do projeto (nome, categoria, descrição, etc.).

**Mensagens:**
- `M7`: Projeto adicionado com sucesso.  
- `M8`: Projeto atualizado com sucesso.  
- `M9`: Projeto excluído com sucesso.

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
- `M10`: Mensagem enviada com sucesso.

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
- `M11`: Depoimento enviado com sucesso.

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
### **Esboços das Páginas**  
- Página Inicial (Home).  
- Página Quem Somos.  
- Página Portfólio.  
- Página Produtos.  
- Página Como Funciona.  
- Página Fale Conosco.  
- Página Depoimentos.  
- Painel Admin (Login e Listagens).  

*(Adicione as imagens ou links para os protótipos, se disponíveis)*












