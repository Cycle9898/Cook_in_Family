<?php get_header(); ?>

<main>
    <div class="px-4 pt-5 my-5 text-center">
        <h1 class="display-4 fw-bold">
            <?php _e('La cuisine pour tous !', 'cookinfamily'); ?>
        </h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">
                <?php _e('Découvrez la création d\'un thème sous Wordpress ! Ouvrez les portes du développement sous le CMS le plus utilisé au monde !', 'cookinfamily'); ?>
            </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <button id="ajax_call" type="button" class="btn btn-secondary btn-lg px-4 me-sm-3">
                    <?php _e('Comme un chef !', 'cookinfamily'); ?>
                </button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">
                    <?php _e('Ou pas ...', 'cookinfamily'); ?>
                </button>
            </div>
            <div id="ajax_return"></div>
        </div>
    </div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">
            <?php _e('Nos tarifs', 'cookinfamily'); ?>
        </h1>
        <p class="fs-5 text-muted">
            <?php _e('Nos prestations sont toutes sur mesure, nous sommes un gage de qualité de la cuisine à votre assiette !', 'cookinfamily'); ?>
        </p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 offset-3 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">
                        <?php _e('Formule simple', 'cookinfamily'); ?>
                    </h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">
                        <?php _e('10€', 'cookinfamily'); ?><small class="text-muted fw-light"><?php _e('/mois', 'cookinfamily'); ?></small>
                    </h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><?php _e('Une entrée', 'cookinfamily'); ?></li>
                        <li><?php _e('Un plat froid', 'cookinfamily'); ?></li>
                        <li><?php _e('Un dessert', 'cookinfamily'); ?></li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">
                        <?php _e('Souscrire l\'offre', 'cookinfamily'); ?>
                    </button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">
                        <?php _e('Formule complète', 'cookinfamily'); ?>
                    </h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">
                        <?php _e('20€', 'cookinfamily'); ?><small class="text-muted fw-light"><?php _e('/mois', 'cookinfamily'); ?></small>
                    </h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><?php _e('Une entrée au choix', 'cookinfamily'); ?></li>
                        <li><?php _e('Un plat chaud', 'cookinfamily'); ?></li>
                        <li><?php _e('Un dessert au choix', 'cookinfamily'); ?></li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">
                        <?php _e('Prendre la complète !', 'cookinfamily'); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>