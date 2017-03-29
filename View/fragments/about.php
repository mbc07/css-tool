 
<div class="mdl-grid">
    <div class="mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--12-col app-common-content-card">
        <h2>Introdução</h2>

        <h3>Objetivo</h3>
        <p>Este documento descreve o funcionamento geral da ferramenta de criação de CSS personalizado, incluindo seus recursos e limitações. A proposta da ferramenta é auxiliar programadores e/ou web designers durante a formatação de páginas e aplicações para Web, disponibilizando um editor visual que gera uma folha de estilos CSS correspondente à apresentação do documento construída neste editor, para uso posterior. Assim, este documento é específico para os interessados em web designers.</p>

        <h3>Escopo</h3>
        <p>CSS Tool - Gerador automático CSS.</p>
        <ul>
            <li>Gera uma folha de estilos CSS de acordo com a formatação feita pelo usuário (Ex. Centralizar div, alterar cor de table para Black).</li> 
            <li>O produto, depois do processo do cadastramento do usuário e login para permissão do uso da ferramenta, tem a funcionalidade de fazer upload do arquivo de HTML, na qual o usuário quer para gerar o CSS;</li>
            <ul>
                <li>oferecer uma “lista” de funções de CSS disponível para ser inserido no arquivo CSS, dependendo da tag;</li>
                <li>oferecer um pré-visualização do layout do HTML com o CSS, inserido até o momento;</li>
                <li>oferecer índice das tags do HTML upado, para melhorar a navegação das partes modificadas;</li>
                <li>oferecer um botão de confirmação das inserções que irá gerar um arquivo compactado do CSS gerado.</li>
            </ul>
            <li>As melhorias de processo tem como visão a modularização e otimização das já existentes, isso implica em ferramentas mais eficientes em todas as faces, inclusive no desenvolvimento, onde a gama de API é grande e auxiliadora nas mais distintas tarefas; uma importante parte do desenvolvimento web é a estilização e isso torna a ferramenta de criação CSS em um potencial para novos desenvolvedores ou padronização no desenvolvimento dos designs de estilo das páginas.</li>
            <li>Objetivos de negócio</li>
            <ul>
                <li>Uso da ferramenta por desenvolvedores iniciais;</li>
                <li>Criar registro de usuários da ferramenta; e</li>
                <li>Construir uma marca como ferramenta de desenvolvimento otimizado; </li>
            </ul>
            <li>Métricas de sucesso</li>
            <ul>
                <li>Ter usuários regulares sem meta de quantidade;</li>
                <li>Criar e manter uma marca de produto e trazer valor ao produto; e</li>
                <li>Ter interesse de novas pessoas para a aprimoramento e desenvolvimento da ferramenta.</li>
            </ul>
        </ul>

        <h3>Referências</h3>
        <ul>
            <li>[1] WIEGERS, K. E. Software Requirements. 3. ed. Microsoft Press, 2013.</li>
            <li>[2] W3Schools Disponível em: http://http://www.w3schools.com. Acesso em 22 de dezembro de 2016.</li>
        </ul>

        <h3>Visão geral</h3>
        <p>Atualmente pela facilidade e comodidade do uso de frameworks, a tradicional e fascinante habilidade de criação manual do design visual foi perdida. Além disso, para os desenvolvedores iniciais ter a difícil tarefa em desenvolver o HTML e CSS juntos ao aprendizado o torna custoso, assim como para desenvolvedores experientes ter que sempre estarem atualizando seus conhecimentos em CSS e descobrindo toda a capacidade  apenas pela necessidade; com esses fatores hoje se tem apresentação de mais um profissional o design CSS, isso torna oneroso o desenvolvimento principalmente no desenvolvimento ágil em que o profissional deve ser multidisciplinar.</p>
        <p>Assim, havendo conhecimento e motivado nesse fato vem o interesse na criação de uma aplicação web, que permita o desenvolvedor entender as necessidades de sua página HTML (posicionamento das partes, designe único de background, imagem, fonte, tabela e etc) e através desse entendimento criar em alto nível da sua página CSS, dessa forma o desenvolvedor teria o processo de desenvolvimento com maior definição (HTML depois CSS depois etc).</p>

        <h2>Descrição Geral</h2>
        <h3>Requisitos funcionais</h3>
        <ul>
            <li>Upload de arquivo HTML:  local de upload do HTML, para edição que será feita posteriormente.</li>
            <li>Criar CSS Personalizado: a partir da seleção das funções do CSS, esta funcionalidade gerará um arquivo CSS.</li>
            <li>Inserir Novas Funções de CSS: são botões de seleção de funções de CSS, na qual, o usuário poderá selecionar para inserir a função no arquivo de CSS que será gerado (ex: font-color).</li>
            <ul>
                <li>estas funcionalidades estarão limitados, inicialmente, apenas para as tags: div; tags de título (h1,h2,...); p; tags de lista(ul, li,...); button.</li>
            </ul>
            <li>Gerenciar Usuários: funcionalidade permite a gerenciar permissões e contas dos usuários registrado no aplicativo.</li>
            <li>Cadastrar Usuário: funcionalidade que possibilita ao usuário se cadastrar no aplicativo e assim a permissão do uso deste.</li>
            <li>Pré-visualização: funcionalidade a partir do HTML e inserção CSS gera uma pré-visualização do layout definido pelo usuário.</li>
            <li>Criar HTML 5 Básico e CSS Personalizado: esta funcionalidade permite que o usuário na inserção de apenas o conteúdo, o aplicativo gera um HTML 5 e um CSS básico.</li>
        </ul>

        <h3>Requisitos não-funcionais</h3>
        <ul>
            <li>Interfaces de Usuário</li>
            <ul>
                <li>IE-1: O sistema deve ter um link de ajuda em cada página para explicar como utilizar a página.</li>
                <li>IE-2: O sistema deve ser de interface simples, mais objetiva possível, idealmente com ícones semânticos.</li>
                <li>IE-3: O sistema deve ter descrições de uma linha sobre suas funcionalidades em sua interface inicial.</li>
                <li>IE-4: O sistema deve informar através de mensagem se houver utilização do aplicativo.</li>
            </ul>
            <li>Atributos de Qualidade</li>
            <ul>
                <li>Disponibilidade</li>
                <ul>
                    <li>AQ-1: O sistema deve estar sempre disponível, caso ocorra alguma interrupção ele deve ser restaurado o mais rápido possível.</li>
                </ul>

                <li>Usabilidade</li>
                <ul>
                    <li>AQ-2: O sistema deve registrar sessões realizadas pelo usuário no período de 1 semana.</li>
                </ul>

                <li>Segurança</li>
                <ul>
                    <li>AQ-3: Todas as transações envolvendo informações pessoais devem ser criptografadas..</li>
                    <li>AQ-4: Todos os usuários devem efetuar login no sistema para realizar todas as operações disponíveis.</li>
                </ul>
            </ul>
        </ul>
        <h3>Requisitos de conteúdo</h3>
        <p>O site deve conter um link de ajuda, na qual direciona para um documento que explica como o usuário deve utilizar o aplicativo. Além da descrição básica de cada funcionalidade disponível na interface do site.</p>
        <h3>Requisitos de interação</h3>
        <p>O usuário utilizará o site por meio do pressionar de botões para selecionar a funcionalidade, como upload de arquivos HTML ou as opções disponíveis de personalização do CSS, e digitação para definir as características da personalização.</p>
        <h3>Características dos usuários</h3>
        <p>Os usuários gerais deste aplicativo deve saber ler e escrever, uma experiência intermediária com computadores, fluência no idioma português (Brasil), conhecimento intermediário sobre o domínio e não há necessidade de experiência com um sistema similar. Além disso, principalmente, deve ter o interesse de aprender a como utilizar o aplicativo.</p>
    </div>
</div>

<div class="app-common-footer-spacer"></div>