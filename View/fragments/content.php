<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">
	<?php include 'navbar.php'; ?>

	<main class="mdl-layout__content">
	    <section class="mdl-layout__tab-panel is-active" id="home">
	        <div class="page-content">

	            <!-- TO DO: Refazer a home -->
	            <?php include 'home.php'; ?>

	        </div>
	    </section>
	    <section class="mdl-layout__tab-panel" id="tool">
	        <div class="page-content">

	            <?php include 'tool.php'; ?>

	        </div>
	    </section>
	    <section class="mdl-layout__tab-panel" id="about">

	        <!-- TO DO: Refazer o sobre -->
	        <?php include 'about.php'; ?>

	    </section>
	</main>
</div>