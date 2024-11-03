<body>
    <div class="dashboard">
        <?php
        print("<div class='conteudo-principal' id='conteudo-principal'>
            <h2>Aqui estarão suas tarefas</h2>
            <p>Selecione uma lista de tarefas</p>
            </div>")
            
        ?>
        <div class="barra-lateral">
                <h2 style="text-align: center; max-height: 100%;">Minhas Listas</h2>
                <div class="listas-de-tarefa">
                    <?php
                        include("..\controller\pegar_listas.php");
                        foreach($listas as $lista){
                            print "<button href='#' class='card-lista' onclick='carregarConteudo(" .$lista['id'].")'>" .$lista['nome']. "</button>";
                        }    
                    ?>

                </div>
                <button class="card-lista">Criar Nova Lista</button>
                <div class="container">
                    <button id="toggleButton" class="check-btn">Concluido</button>
                </div>
                <script src="checkbut.js"></script>
        </div>
    </div>
    
</body>
