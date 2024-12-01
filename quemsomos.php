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
        background-color: rgba(0, 0, 0, 0.8);
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
        border-radius: 20px;
    }

    .team-container {
        display: flex;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 40px;
        border-radius: 20px;
        justify-content: center;
        gap: 70px; /* Espaçamento entre as cartas */
        flex-wrap: wrap;
    }
    
    .designer-card {
        background-color: #f4f4f4;
        border-radius: 10px;
        padding: 30px;
        width: 450px; /* Aumentando a largura do campo das fotos */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    
    .designer-card:hover {
        transform: scale(1.03); 
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); 
        
    }

    .designer-card img {
        border-radius: 40%;
        width: 250px; /* Aumentando o tamanho da foto */
        height: 250px;
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
            <img src="Templates/imagens/emanuelle.jpeg" alt="Emanuelle Lucena">
            <h3>Emanuelle Lucena</h3>
            <h4>Cargo: </h4>
            <h4><p>Designer de Interiores: </p></h4>
            <h4>Responsabilidades: Criação e desenvolvimento de projetos de interiores, escolha de materiais, paleta de cores e disposição de móveis.</h4>
            <p>WhatsApp: <a href="https://wa.me/5511999999999" target="_blank">+55 83 99999-9999</a></p>
            <p>Email: <a href="mailto:emanuelle@example.com">emanuelle@example.com</a></p>
        </div>

            <div class="designer-card">
                <img src="Templates/imagens/flavio.jpeg" alt="Flávio Paiva">
                <h3>Flávio Paiva</h3>
                <h4>Cargo: </h4>
                <h4><p>Arquiteto</p></h4>
                <h4>Responsabilidades: Trabalha com a estrutura e arquitetura dos ambientes, coordenação de reformas e compatibilização dos projetos de interiores com aspectos estruturais.</h4>
                <p>WhatsApp: <a href="https://wa.me/5511888888888" target="_blank">+55 83 88888-8888</a></p>
                <p>Email: <a href="mailto:flavio.paiva@example.com">flavio.paiva@example.com</a></p>
            </div>
            <div class="designer-card">
                <img src="Templates/imagens/davi.jpeg" alt="Davi Menezes">
                <h3>Davi Menezes</h3>
                <h4>Cargo: </h4>
                <h4><p>Designer Gráfico</p></h4>
                <h4>Responsabilidades: Criação de elementos gráficos para o site, apresentação dos projetos aos clientes, moodboards digitais, e identidade visual.</h4>
                <p>WhatsApp: <a href="https://wa.me/5511888888888" target="_blank">+55 83 88888-8888</a></p>
                <p>Email: <a href="mailto:davi.men@example.com">davi.men@example.com</a></p>
            </div>
            <div class="designer-card">
                <img src="Templates/imagens/kaline.jpg" alt="Kaline Vieira">
                <h3>Kaline Vieira</h3>
                <h4>Cargo: </h4>
                <h4><p>Gerente de Projetos</p></h4>
                <h4>Responsabilidades: Coordenação de todas as fases do projeto, contato com fornecedores e clientes, e acompanhamento de prazos e orçamento.</h4>
                <p>WhatsApp: <a href="https://wa.me/5511888888888" target="_blank">+55 83 88888-8888</a></p>
                <p>Email: <a href="mailto:kaline.vieira@example.com">kaline.vieira@example.com</a></p>
            </div>
            <div class="designer-card">
                <img src="Templates/imagens/tayna.jpg" alt="Tayná Silva">
                <h3>Tayná Silva</h3>
                <h4>Cargo: </h4>
                <h4><p> Consultora de Estilo</p></h4>
                <h4>Responsabilidades: Foca nos detalhes finais de decoração, como escolha de objetos, acessórios, cortinas e pequenos detalhes que personalizam o ambiente.</h4>
                <p>WhatsApp: <a href="https://wa.me/5511888888888" target="_blank">+55 83 88888-8888</a></p>
                <p>Email: <a href="mailto:tayna.silva@example.com">tayna.silva@example.com</a></p>
            </div>
            <div class="designer-card">
                <img src="Templates/imagens/wanessa.jpg" alt="Wanessa Gomes">
                <h3>Wanessa Gomes</h3>
                <h4>Cargo: </h4>
                <h4><p>Designer Assistente</p><h4>
                <h4>Responsabilidades: Auxílio no desenvolvimento dos projetos, pesquisa de tendências, elaboração de moodboards, e apoio ao designer principal.</h4>
                <p>WhatsApp: <a href="https://wa.me/5511888888888" target="_blank">+55 83 88888-8888</a></p>
                <p>Email: <a href="mailto:wanessa@example.com">wanessa@example.com</a></p>
            </div>
            
        </div>
    </section>
</main>