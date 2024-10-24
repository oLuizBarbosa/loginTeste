<body>
    <div class="dashboard">
        <!-- Seção Principal Maior -->
        <div class="conteudo-principal" id="conteudo-principal">
            <h2>Aqui estarão suas tarefas</h2>
            <p>Selecione uma lista de tarefas</p>
        </div>

        <!-- Seção Menor à Direita -->
        <div class="barra-lateral">
                <h2 style="text-align: center; max-height: 100%;">Minhas Listas</h2>
                <div class="listas-de-tarefa">
                    <?php
                        include("..\controller\pegar_listas.php");
                        foreach($listas as $lista){
                            print "<button href='#' class='card-tarefa' onclick='carregarConteudo(" .$lista['id'].")'>" .$lista['nome']. "</button>";
                        }    
                    ?>

                </div>
                <button class="card-tarefa">Criar Nova Lista</button>
        </div>
    </div>
    <script src="..\controller\js\mudar_tarefa.js"></script>
</body>