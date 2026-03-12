<?php include '../../includes/header.php'; ?>
<?php include '../../includes/nav.php'; ?> 
    <div class="container-fluid">
        <div class="row">
            <?php include '../../includes/sidebar.php'; ?>
            
            <main class="col-md-9 col-lg-10 p-4">
                <section>
                    <h2>Gestão de Produtos e Serviços</h2>
                    <p>Aqui poderá consultar, adicionar, editar e remover os produtos e serviços do ginásio.</p>
                </section>
                
                <div class="home-wrapper">
                    <div class="home-row">
                        <a href="calculoIMC.php" class="unlink">
                            <div class="home-option">
                                <h3><i class="fa-solid fa-users"></i></h3>
                                <p>Calculo de IMC</p>
                             </div>
                        </a>
                        <a href="encaminhamento.php" class="unlink">
                            <div class="home-option">
                                <h3><i class="fa-solid fa-user-plus"></i></h3>
                                <p>Avaliação</p>
                            </div>
                        </a>
                        <a href="precario.php" class="unlink">
                            <div class="home-option">
                                <h3><i class="fa-solid fa-chart-column"></i></h3>
                                <p>Preçario</p>
                            </div>
                        </a>
                    </div>
                    
                    <div class="home-row">
                        <a href="#" class="unlink">
                            <div class="home-option">
                                <h3><i class="fa-solid fa-upload"></i></h3>
                                <p>Contratos</p>
                            </div>
                        </a>
                        <a href="#" class="unlink">
                            <div class="home-option">
                                <h3><i class="fa-solid fa-users"></i></h3>
                                <p>Funcionalidade</p>
                            </div>
                        </a>
                        <a href="#" class="unlink">
                            <div class="home-option">
                                <h3><i class="fa-solid fa-user-gear"></i></h3>
                                <p>Funcionalidade</p>
                            </div> 
                        </a>
                    </div>
                </div>
            </main>
            
        </div>
    </div>
<?php include '../../includes/footer.php'; ?>