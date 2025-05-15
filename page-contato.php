<?php
/*
Template Name: Pagina Contato
*/

get_header();
?>

<div class="container">
    <div class="hero">
        <h1>Entre em Contato</h1>
        <p>Faça parte do movimento Precious Plastic e ajude a transformar o mundo</p>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="contact-info-card">
                <h2>Como Participar</h2>
                <div class="info-block">
                    <h3>Reciclagem</h3>
                    <p>Saiba como contribuir com materiais plásticos para reciclagem</p>
                </div>
                <div class="info-block">
                    <h3>Voluntariado</h3>
                    <p>Junte-se à nossa equipe de voluntários</p>
                </div>
                <div class="info-block">
                    <h3>Parcerias</h3>
                    <p>Estabeleça parcerias para projetos sustentáveis</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="contact-form-card">
                <h2>Envie sua Mensagem</h2>
                <form class="contact-form">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>

                    <div class="form-group">
                        <label for="interest">Área de Interesse</label>
                        <select class="form-control" id="interest">
                            <option>Reciclagem</option>
                            <option>Voluntariado</option>
                            <option>Parcerias</option>
                            <option>Outros</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

