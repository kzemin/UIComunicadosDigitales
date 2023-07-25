<?php require('./layout/sidebar.php') ?>

<h1>Bienvenido, Walter</h1>
     <!-- <p class="text">Texto de ejemplo...</p> -->
    <div class="home">
        <div class="actions">
                 <button class="action-btn" role="button">Subir archivos SQL</button>

                 <button class="action-btn" role="button">Buscar por alumno</button>

                 <button class="action-btn" role="button">Apercibimientos</button>

                 <button class="action-btn" role="button">Inasistencias</button>
             </div>

            <div class="feed-container">
                <div class="feed-title">
                    <div class="feed-title-row">
                         <h2>Comunicados</h2>
                         <button class="feed-title-btn" role="button">Enviar mensaje</button>
                    </div>

                    <div class="divisor-line"></div>

                    <div class="message">
                        <img src="./img/logo.png" alt="">
                        <div class="message-container">
                                <h3>Alvaro Gimenez</h3>
                                <p class="date">14 Sep 15:28</p>

                           <p class="message-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quasi dolor iure similique in rerum nemo aspernatur provident? Praesentium odio quidem eius voluptates sint adipisci officia, nesciunt eos laudantium harum?</p>
                        </div>
                    </div>

                    <div class="message">
                        <img src="./img/logo.png" alt="">
                        <div class="message-container">
                                <h3>Alvaro Gimenez</h3>
                                <p class="date">14 Sep 15:28</p>

                           <p class="message-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quasi dolor iure similique in rerum nemo aspernatur provident? Praesentium odio quidem eius voluptates sint adipisci officia, nesciunt eos laudantium harum?</p>
                        </div>
                    </div>
                </div>
            </div>

<?php require('./layout/footer.php') ?>