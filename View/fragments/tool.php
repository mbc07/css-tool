<?php
require_once(__DIR__ . '/../assets/config.php');
?> 
                        <link rel="stylesheet" type="text/css" href="assets/css/tool.css">
                        <script src="assets/js/tool.js" charset="UTF-8"></script>

                        <div class="mdl-grid">
                            <div class="mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--12-col">
                                <div class="mdl-grid">

                                   <!------------------------------------------------------
                                    CARD A SER MOSTRADO QUANDO O USUÁRIO NÃO ESTÁ LOGADO  
                                   -------------------------------------------------------- 

                                   <div class="mdl-color--white content mdl-color-text--grey-800 mdl-cell mdl-cell--12-col">
                                       <h3>Bem Vindo!</h3>
                                       <p>A ferramenta só pode ser utilizada por usuários cadastrados. Para continuar, <a id="app-tool-login-anchor" href="#">clique aqui</a> para se identificar ou criar uma nova conta.</p>
                                   </div>

                                    -->

                                    <div class="mdl-color--white content mdl-color-text--grey-800 mdl-cell mdl-cell--6-col">
                                        <h3>Bem Vindo!</h3>
                                        <p>Para começar, copie e cole o código HTML ou faça upload do arquivo que deseja formatar. O arquivo ficará armazenado no site, permitindo edição futura.</p>
                                        <div class="app-tool-resume-editing">
                                            <p>Detectamos que você já possui um arquivo HTML armazenado no site, se preferir, poderá continuar de onde parou.<br/>
                                                <button id="app-tool-resume-button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                                    Iniciar a ferramenta
                                                </button></p>
                                        </div>
                                    </div>


                                    <div class="mdl-color--white mdl-shadow--2dp content mdl-color-text--grey-800 mdl-cell mdl-cell--6-col">
                                        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect mdl-color--yellow-200 app-tool-upload-card">
                                            <div class="mdl-card__title mdl-tabs__tab-bar">
                                                <a href="#text_upload" class="mdl-tabs__tab is-active">Texto</a>
                                                <a href="#file_upload" class="mdl-tabs__tab">Upload</a>
                                            </div>

                                            <div class="mdl-card__supporting-text mdl-tabs__panel is-active" id="text_upload">
                                                <form class="" action="#">
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-upload-card-text-area">
                                                        <textarea class="mdl-textfield__input app-tool-upload-card-text-area" rows="8" id="text-upload"></textarea>
                                                        <label class="mdl-textfield__label" for="text-upload">Código HTML a ser formatado</label>
                                                    </div>

                                                    <div class="mdl-card__actions">
                                                        <input id="app-tool-text-upload-button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" value="Enviar">
                                                        <div class="mdl-tooltip app-tool-resume-editing" for="app-tool-text-upload-button">
                                                            O arquivo enviado anteriormente será substituido permanentemente!
                                                        </div>
                                                    </div>
                                                </form>



                                            </div>
                                            <div class="mdl-card__supporting-text mdl-tabs__panel" id="file_upload">
                                                <form action="#">
                                                    <p>Tamanho máximo do arquivo: 1024 KB</p>                
                                                    <input type="file" id="file_upload" accept=".htm,.html,.xht,.xhtm,.xhtml">

                                                    <div class="app-tool-upload-card-spacer"></div>

                                                    <div class="mdl-card__actions">

                                                        <input id="app-tool-file-upload-button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" value="Enviar">
                                                        <div class="mdl-tooltip app-tool-resume-editing" for="app-tool-file-upload-button">
                                                            O arquivo enviado anteriormente será substituido permanentemente!
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                    <!------------------------------------------------------
                                                  CARD DO EDITOR  
                                    -------------------------------------------------------- 

                                    <!--
                                    <div class="mdl-cell mdl-cell--4-col">
                                        <div class="mdl-color-text--grey-800">
                                            <button id="app-tool-back-button" class="mdl-button mdl-js-button mdl-button--icon">
                                                <i class="material-icons">arrow_back</i>
                                            </button>
                                        </div>
                                        <h3>Placeholder</h3>
                                        <p>
                                            Cillum dolor esse sit incididunt velit eiusmod magna ad nostrud officia aute dolor dolor. Magna esse ullamco pariatur adipisicing consectetur eu commodo officia. Ex cillum consequat mollit minim elit est deserunt occaecat nisi amet. Quis aliqua nostrud Lorem occaecat sunt. Eiusmod quis amet ullamco aliquip dolore ut incididunt duis adipisicing. Elit consequat nisi eiusmod aute ipsum sunt veniam do est. Occaecat mollit aliquip ut proident consectetur amet ex dolore consectetur aliqua elit.
                                        </p>

                                    </div>

                                    <div class="mdl-cell mdl-cell--8-col">
                                        <div class="mdl-card mdl-shadow--2dp app-tool-preview-card mdl-color--yellow-200">
                                            <div class="mdl-grid app-tool-preview-card-inner">
                                                <div class="mdl-cell mdl-cell--2-col">
                                                    tags
                                                </div>

                                                <div class="mdl-cell mdl-cell--6-col mdl-card__title mdl-card--expand app-tool-preview-card-iframe-container">
                                                    <iframe class="app-tool-preview-iframe" src="http://facom.ufms.br">

                                                    </iframe>
                                                </div>
                                                <div class="app-tool-preview-card-spacer"></div>
                                            </div>

                                            <div class="mdl-card__actions mdl-card--border app-tool-preview-card-bottom">
                                                <div class="app-tool-preview-card-element-text"><p><strong>Elemento selecionado:</strong> <span id="app-tool-preview-card-element">nenhum</span></p>
                                                </div>

                                                <button id="app-tool-download-button" 
                                                        class="mdl-button mdl-js-button 
                                                        mdl-button--raised mdl-js-ripple-effect 
                                                        mdl-button--primary">Gerar CSS</button>
                                            </div>
                                        </div>
                                    </div>   -->


                                </div>
                            </div>
                        </div>
