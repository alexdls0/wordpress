<section class="searchform mb-3">
    <?php get_search_form() ?>
</section>
<section class="tagcloud mb-4">
    <?php /*wp_tag_cloud()//sirve para hacer un tag cloud cutre */?>
    <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets')): ?>
        <div class="warning">Lo siento, ningún widget instalado para este tema. Acceda como administrador y arrastre un widget al sidebar.</div>
    <?php endif;?>
</section>

<div class="mb-4">
    <div class="">
        <h4>Autores</h4>
    </div>
    <div class="ml-3 mb-5">
        <?php 
            wp_list_authors();
        ?>
    </div>
</div>
<div class="mb-4">
    <div class="">
        <h4>Navegación</h4>
    </div>
    <div class="ml-3 mb-5">
        <?php 
            wp_list_pages('title_li');
        ?>
    </div>
</div>

<div class="mb-4">
    <div class="">
        <h4>Categorias</h4>
    </div>
    <div class="ml-3 mb-5">
        <?php
            //Para quitar el titulo
            wp_list_categories('title_li');
        ?>
    </div>
</div>
