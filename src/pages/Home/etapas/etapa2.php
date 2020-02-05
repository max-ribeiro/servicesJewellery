    <title>Segunda Etapa</title>
    <link rel="stylesheet" href="../src/global.css">
    <link rel="stylesheet" href="../src/pages/Home/css/style.css">
</head>
<body>
<div class="container">
    <h1>Etapa 2</h1>
    <h3>selecione uma das opções abaixo:</h3>
    <ul>
       
        <li class="button-panel" id="addUser" onclick="showModal();">
            <div class="button-icon">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-user-plus fa-w-20 fa-5x">
                    <path fill="currentColor" d="M624 208h-64v-64c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v64h-64c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h64v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-64h64c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm-400 48c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" class=""></path>
                </svg>
            </div>        
            <strong>Novo Cliente</strong>
        </li>

        <li class="button-panel">
            <div class="button-icon">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-friends" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-user-friends fa-w-20 fa-5x">
                    <path fill="currentColor" d="M192 256c61.9 0 112-50.1 112-112S253.9 32 192 32 80 82.1 80 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C51.6 288 0 339.6 0 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zM480 256c53 0 96-43 96-96s-43-96-96-96-96 43-96 96 43 96 96 96zm48 32h-3.8c-13.9 4.8-28.6 8-44.2 8s-30.3-3.2-44.2-8H432c-20.4 0-39.2 5.9-55.7 15.4 24.4 26.3 39.7 61.2 39.7 99.8v38.4c0 2.2-.5 4.3-.6 6.4H592c26.5 0 48-21.5 48-48 0-61.9-50.1-112-112-112z" class=""></path>
                </svg>
            </div>
            <strong>Cliente já Cadastrado</strong>  
        </li>
    </ul>
    <a href="./"><button class="btn">&larr; Etapa Anterior</button></a>
</div>
<!-- modal -->
<div id="addUserModal" class="modal">
    <!-- Modal Content -->
    <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <span class="close" onclick="hideModal()">&times;</span>
            <h2>Cadastrar Cliente</h2>
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
            <div class="input-group col-2" id="fullName">
                <div class="col-2-ls">
                    <label>Nome:</label><input type="text"/>
                </div>
                <div class="col-2-ls">
                    <label>Sobrenome:</label><input type="text"/>
                </div>
            </div>
            <div class="input-group col-2" id="tel">
                <div class="col-2-ls">
                    <label>Telefone 1:</label><input type="text" class="modal-input"/>
                </div>
                <div class="col-2-ls">
                    <label>Telefone 2:</label><input type="text" class="modal-input"/>
                </div>
            </div>
            <div class="input-group col-2" id="tel">
                <div class="input-group col-2-ls">
                    <label>RG/CPF:</label><input type="text" class="modal-input"/>
                </div>
                <div class="input-group col-2-ls">
                    <label>Afiliado:</label><input type="text" class="modal-input"/>
                </div>
            </div>
            <hr/>
            <div class="input-group col-2" id="fullName">
                <button class="btn btn-cancel" onclick="hideModal()">Cancelar</button>
                <button class="btn btn-save">Salvar</button>
            </div>
        </div>
      
    </div>
</div>
<script src="../src/pages/Home/js/script.js"></script>


