<article class="property-item clearfix">
    <div class="wrap clearfix">
        <h4 class="title">
            <?php

            /* Property ID if exists */
            $property_id = get_post_meta($post->ID, 'REAL_HOMES_property_id', true);
            if(!empty($property_id)){
                echo __('Property ID','framework').' : '.$property_id;
            }

            ?>
        </h4>
        <h5 class="price">
            <span class="status-label">
                <?php
                /* Property Status. For example: For Sale, For Rent */
                $status_terms = get_the_terms( $post->ID,"property-status" );
                if(!empty( $status_terms )){
                    $status_count = 0;
                    foreach( $status_terms as $term ){
                        if( $status_count > 0 ){
                            echo ', ';
                        }
                        echo esc_html( $term->name );
                        $status_count++;
                    }
                }else{
                    echo '&nbsp;';
                }
                ?>
            </span>
            <span>
                <?php
                /* Property Price */
                property_price();

                /* Property Type. For example: Villa, Single Family Home */
                echo inspiry_get_property_types( $post->ID );
                ?>
            </span>
        </h5>
    </div>

    <div class="property-meta clearfix">
        <?php
        // property meta
        get_template_part('property-details/property-metas');

        // Add to favorites
        get_template_part('property-details/property-add-to-favorites');

        ?>

    </div>

    <?php
        $gallery_slider_type = get_post_meta($post->ID, 'REAL_HOMES_gallery_slider_type', true);
        /* For demo purpose only */
        if(isset($_GET['slider-type'])){
            $gallery_slider_type = $_GET['slider-type'];
        }
        if( $gallery_slider_type == 'thumb-on-bottom' ){
            get_template_part('property-details/property-slider-two');
        }else{
            get_template_part('property-details/property-slider');
        }
    ?>

    <div class="content clearfix">
        <?php
        // contents from WordPress editor
        the_content();

        // Property additional details from meta boxes
        get_template_part( 'property-details/property-additional-details' );

        // common note from theme options
        get_template_part( 'property-details/property-common-note' );
        ?>
    </div>


    <?php
    /* Property Features */
    $features_terms = get_the_terms( $post->ID,"property-feature" );
    if(!empty($features_terms)){
        ?>
        <div class="features">
            <?php
            $property_features_title = get_option('theme_property_features_title');
            if(!empty($property_features_title)){
                ?><h4 class="title"><?php echo esc_html( $property_features_title ); ?></h4><?php
            }
            ?>
            <ul class="arrow-bullet-list clearfix">
            <?php
            foreach($features_terms as $fet_trms){
                echo '<li><a href="'.get_term_link($fet_trms->slug, 'property-feature').'">'.$fet_trms->name.'</a></li>';
            }
            ?>
            </ul>
        </div>
        <?php
    }
    ?>

    <div class="property-meta clearfix">
        <?php
             echo 'На все дополнительные вопросы по данному объекту Вы можете получить консультацию у нашего менеджера по телефону: (050) 915-14-44';
        ?>
        
    </div>
    
    <div class="wrap clearfix">

        <h5 class="price">
            <span class="status-label" style="display: none;">
            </span>
            <?php
                    echo '';
                ?>
            <span>
                <a  style="color: #FFF !important;" href="#" onclick="window.history.back();">вернуться к результатам поиска</a>
               
            </span>
        </h5>
    </div>

</article>