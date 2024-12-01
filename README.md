# Espaço & Estilo | Design | Interiores

## 1. Introdução
Este documento especifica os requisitos do sistema web **Espaço & Estilo**, fornecendo aos desenvolvedores e stakeholders as informações necessárias para o projeto e implementação, assim como para a realização dos testes e homologação do sistema.

### 1.1 Objetivo
O projeto consiste na criação de um sistema web que centraliza informações sobre o trabalho da equipe de design de interiores, apresenta portfólio, sugere produtos de decoração e possibilita a interação com clientes e visitantes do site.

---

## 2. Descrição Geral do Sistema
O sistema será composto por um site com as seguintes funcionalidades principais:

- **Página Inicial (Home):** Apresentação geral do site, destacando os serviços de design.
- **Quem Somos:** Apresentação da equipe e suas responsabilidades.
- **Portfólio:** Galeria dinâmica de projetos desenvolvidos.
- **Produtos:** Página dedicada a itens decorativos sugeridos.
- **Como Funciona:** Explicação detalhada das etapas do processo criativo.
- **Fale Conosco:** Formulário para envio de mensagens.
- **Depoimentos:** Área interativa para avaliações de clientes.
- **Login Administrativo:** Gestão de conteúdos pelo administrador.

---

## 3. Equipe de Desenvolvimento
| Nome              | Função                |
|-------------------|-----------------------|
| Davi Menezes      | Desenvolvedor Full-stack |
| Emanuelle Lucena  | Desenvolvedora Full-stack |
| Flávio Paiva      | Desenvolvedor Full-stack |
| Tayná Silva       | Desenvolvedora Full-stack |
| Kaline Vieira     | Desenvolvedora Full-stack |

---

## 4. Cronograma do Projeto
| Data        | Descrição                                                                 |
|-------------|---------------------------------------------------------------------------|
| 12/11/2024  | Definição da equipe e tema do projeto                                     |
| 15/11/2024  | Envio do link do repositório, divisão das funções, elaboração da introdução e descrição geral do sistema |
| 21/11/2024  | Entrega parcial da evolução do projeto – apresentação e novo commit no GitHub |
| 29/11/2024  | Última apresentação parcial e fechamento do projeto funcional            |

---

## 5. Link do Repositório GitHub
[Espaço & Estilo - Repositório no GitHub](https://github.com/manulucena/projeto-site-design-interiores)

---

## 6. Requisitos Funcionais

### [UC001] Acessar Painel Administrador
**Descrição:** Permite que o administrador acesse a área restrita do sistema.  
**Atores:** Administrador  
**Entradas e Pré-condições:** Login e senha válidos.  

**Mensagens:**
- `M1`: Nome de usuário ou senha incorretos.

---

### 7. Prototipação de Banco de Dados

#### Tabela de Cadastro de Usuário
| Atributo  | Tipo      | Tamanho | Obrigatório |
|-----------|-----------|---------|-------------|
| ID        | Inteiro   | 11      | Sim         |
| Usuário   | Varchar   | 50      | Sim         |
| Senha     | Varchar   | 20      | Sim         |

#### Tabela de Contatos
| Atributo  | Tipo      | Tamanho | Obrigatório |
|-----------|-----------|---------|-------------|
| ID        | Inteiro   | 11      | Sim         |
| Nome      | Varchar   | 100     | Sim         |
| Email     | Varchar   | 100     | Sim         |
| Assunto   | Varchar   | 50      | Sim         |
| Mensagem  | Text      | -       | Sim         |

---

## 8. Diagramação e Prototipação de Telas

### Esboço da Página Inicial (Home)
_**Figura 1:** Imagem Página Inicial (Home)._

---

## 9. Conclusão
Este sistema visa promover a comunicação efetiva entre a equipe de design de interiores e seus clientes, garantindo funcionalidade e estética no ambiente digital.











