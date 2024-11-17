<style>
    /* Estilo para a seção "Quem Somos" */
    #about-section {
        background-image: url('https://blog.totalcad.com.br/wp-content/uploads/2018/01/168.png'); 
        background-size: cover;
        background-position: center;
        padding: 80px 20px;
        color: white;
        text-align: center;
    }

    .about-text {
        background-color: rgba(0, 0, 0, 0.5);
        padding: 40px;
        border-radius: 10px;
        display: inline-block;
        max-width: 800px;
        margin: 0 auto;
    }

    h2 {
        font-size: 36px;
        margin-bottom: 20px;
        font-weight: bold;
        
    }
     
    p {
        font-size: 18px;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    /* Estilo para a seção "Nossa Equipe de Designers" */
    #team-section {
        padding: 60px 20px;
        background-color: #f4f4f4;
        text-align: center;
    }

    .team-container {
        display: flex;
        justify-content: center;
        gap: 60px; /* Espaçamento entre as cartas */
        flex-wrap: wrap;
    }
    

    .designer-card {
        background-color: white;
        border-radius: 10px;
        padding: 30px;
        width: 300px; /* Aumentando a largura do campo das fotos */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    
    .designer-card:hover {
        transform: scale(1.03); 
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); 
        
    }

    .designer-card img {
        border-radius: 40%;
        width: 200px; /* Aumentando o tamanho da foto */
        height: 200px;
        object-fit: cover;
        margin-bottom: 30px;
    }

    .designer-card h3 {
        font-size: 22px;
        margin-bottom: 10px;
        font-weight: bold;
    }   

    .designer-card p {
        margin: 5px 0;
        font-size: 15px;
    }

    .designer-card a {
        color: #3498db;
        text-decoration: none;
    }

    .designer-card a:hover {
        text-decoration: underline;
    }
</style>

<main>
    <section id="about-section">
        <div class="about-text">
            <h2>Quem Somos</h2>
            <p>"Somos uma equipe apaixonada por design de interiores, dedicada a transformar espaços em experiências únicas. 
                Nossa missão é criar ambientes que não apenas atendam às necessidades funcionais, mas que também inspirem e 
                encantem."</p>
            <p>"Combinamos criatividade e técnica para oferecer soluções personalizadas que refletem o estilo de cada cliente. 
                Nossos projetos vão desde residências acolhedoras até espaços comerciais inovadores, sempre com um toque 
                especial que faz a diferença."</p>
        </div>
    </section>
</main>
<section id="team-section">
        <h2>Nossa equipe: </h2>
        <hr>
        <br>
        <div class="team-container">
            <div class="designer-card">
            <img src="https://via.placeholder.com/200" alt="Designer 1">
            <h3>Emanuelle</h3>
            <h5>Cargo: </h5>
            <p>Designer de Interiores: </p>
            <h5>Responsabilidades: Criação e desenvolvimento de projetos de interiores, escolha de materiais, paleta de cores, e disposição de móveis.</h5>
            <p>WhatsApp: <a href="https://wa.me/5511999999999" target="_blank">+55 83 99999-9999</a></p>
            <p>Email: <a href="mailto:joao.silva@example.com">emanuelle@example.com</a></p>
        </div>

            <div class="designer-card">
                <img src="https://via.placeholder.com/200" alt="Designer 2">
                <h3>Flávio Paiva</h3>
                <h5>Cargo: </h5>
                <p>Arquiteto</p>
                <h5>Responsabilidades: Trabalha com a estrutura e arquitetura dos ambientes, coordenação de reformas e compatibilização dos projetos de interiores com aspectos estruturais.</h5>
                <p>WhatsApp: <a href="https://wa.me/5511888888888" target="_blank">+55 83 88888-8888</a></p>
                <p>Email: <a href="mailto:maria.oliveira@example.com">flavio.paiva@example.com</a></p>
            </div>
            <div class="designer-card">
                <img src="https://via.placeholder.com/200" alt="Designer 2">
                <h3>Davi Menezes</h3>
                <h5>Cargo: </h5>
                <p>Designer Gráfico</p>
                <h5>Responsabilidades: Criação de elementos gráficos para o site, apresentação dos projetos aos clientes, moodboards digitais, e identidade visual.</h5>
                <p>WhatsApp: <a href="https://wa.me/5511888888888" target="_blank">+55 83 88888-8888</a></p>
                <p>Email: <a href="mailto:maria.oliveira@example.com">davi.men@example.com</a></p>
            </div>
            <div class="designer-card">
                <img src="https://via.placeholder.com/200" alt="Designer 2">
                <h3>Kalina Vieira</h3>
                <h5>Cargo: </h5>
                <p>Gerente de Projetos</p>
                <h5>Responsabilidades: Coordenação de todas as fases do projeto, contato com fornecedores e clientes, e acompanhamento de prazos e orçamento.</h5>
                <p>WhatsApp: <a href="https://wa.me/5511888888888" target="_blank">+55 83 88888-8888</a></p>
                <p>Email: <a href="mailto:maria.oliveira@example.com">kalina.vieira@example.com</a></p>
            </div>
            <div class="designer-card">
                <img src="Templates/imagens/1.jpg">
                <h3>Tayná Silva</h3>
                <h5>Cargo: </h5>
                <p> Decoradora</p>
                <h5>Responsabilidades: Foca nos detalhes finais de decoração, como escolha de objetos, acessórios, cortinas, e pequenos detalhes que personalizam o ambiente.</h5>
                <p>WhatsApp: <a href="https://wa.me/5511888888888" target="_blank">+55 83 88888-8888</a></p>
                <p>Email: <a href="mailto:maria.oliveira@example.com">tayna.silva@example.com</a></p>
            </div>
            <div class="designer-card">
                <img src="https://via.placeholder.com/200" alt="Designer 2">
                <h3>Maria Oliveira</h3>
                <h5>Cargo: </h5>
                <p>Assistente de Design</p>
                <h5>Responsabilidades: Auxílio no desenvolvimento dos projetos, pesquisa de tendências, elaboração de moodboards, e apoio ao designer principal.</h5>
                <p>WhatsApp: <a href="https://wa.me/5511888888888" target="_blank">+55 83 88888-8888</a></p>
                <p>Email: <a href="mailto:maria.oliveira@example.com">maria.oliveira@example.com</a></p>
            </div>
            
        </div>
    </section>
</main>