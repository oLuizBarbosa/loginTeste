<body>
    <div class="dashboard">
        <!-- Seção Principal Maior -->
        <div class="conteudo-principal">
            <h2>Lista de Tarefas</h2>
            <!-- Conteúdo da lista de tarefas vai aqui -->

        </div>

        <!-- Seção Menor à Direita -->
        <div class="barra-lateral">
                <h2 style="text-align: center; max-height: 100%;">Minhas Listas</h2>
                <div class="listas-de-tarefa">
                    <?php
                        include("..\controller\pegar_listas.php");
                        foreach($listas as $lista){
                            print "<button class= 'card-tarefa'>".htmlspecialchars($lista['nome']). "</button>";
                        }    
                    ?>

                </div>
                <button class="card-tarefa">Criar Nova Lista</button>
        </div>
    </div>

</body>