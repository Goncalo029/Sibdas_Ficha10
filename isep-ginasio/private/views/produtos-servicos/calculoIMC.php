<?php include '../../includes/header.php'; ?>
<?php include '../../includes/nav.php'; ?> 
    <div class="container-fluid">
        <div class="row">
            <?php include '../../includes/sidebar.php'; ?>
            
            <main class="col-md-9 col-lg-10 p-4">
                <section>
                    <h2 onmouseover="console.log('Bem-vindo ao Cálculo de IMC do ISEP')">Cálculo de IMC</h2>
                    <p>Esta funcionalidade permite calcular o Índice de Massa Corporal (IMC),
                    uma medida utilizada para avaliar se o peso de uma pessoa está adequado à sua
                    altura.</p>
                </section>
                <script>
                     console.log("Engenharia Biomédica");
                </script>
                <div class="form-wrapper">
                    <h2><strong><i class="fa-solid fa-heart-pulse"></i> Calculadora de IMC</strong></h2>
                    <hr>
                    <form>
                        <div class="form-group">
                            <label for="peso">Peso (kg):</label>
                            <input type="number" id="peso" name="peso">
                        </div>
                        <div class="form-group">
                            <label for="altura">Altura (m):</label>
                            <input type="number" id="altura" name="altura">
                        </div>
                        <div class="form-group">
                            <label>Resultado:</label><br>
                            <span id="indicadorIMC"> </span>
                        </div>
                    </form>
                </div>
            </main>
            
        </div>
    </div>
    <script src="../../includes/js/funcoes.js"></script>
<?php include '../../includes/footer.php'; ?>