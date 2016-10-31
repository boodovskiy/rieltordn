<?php
        $post_meta_data = get_post_custom($post->ID);

        if( !empty($post_meta_data['REAL_HOMES_property_bedrooms'][0]) ) {
                $prop_bedrooms = floatval($post_meta_data['REAL_HOMES_property_bedrooms'][0]);
                $bedrooms_label = ($prop_bedrooms > 1)? __('Bedrooms','framework' ): __('Bedroom','framework');
                echo '<span>';
                //    include( get_template_directory() . '/images/icon-bed.svg' );
                    echo $bedrooms_label .'&nbsp;'.$prop_bedrooms;
                echo '</span>';
        }
        

        if( !empty($post_meta_data['REAL_HOMES_property_bathrooms'][0]) ) {
                $prop_bathrooms = floatval($post_meta_data['REAL_HOMES_property_bathrooms'][0]);
                $bathrooms_label = ($prop_bathrooms > 1)?__('Bathrooms','framework' ): __('Bathroom','framework');
                echo '<span>';
               //     include( get_template_directory() . '/images/icon-bath.svg' );
                    echo $bathrooms_label .'&nbsp;'.$prop_bathrooms;
                echo '</span>';
        }

        if( !empty($post_meta_data['REAL_HOMES_property_garage'][0]) ) {
                $prop_garage = floatval($post_meta_data['REAL_HOMES_property_garage'][0]);
                $garage_label = ($prop_garage > 1)?__('Garages','framework' ): __('Garage','framework');
                echo '<span>';
               //     include( get_template_directory() . '/images/icon-garage.svg' );
                    echo $garage_label .'&nbsp;'.$prop_garage;
                echo '</span>';
        }
        
        if( !empty($post_meta_data['REAL_HOMES_property_size'][0]) ) {
                $prop_size = $post_meta_data['REAL_HOMES_property_size'][0];
                echo '<span>';
                  //  include( get_template_directory() . '/images/icon-size.svg' );
                    echo 'Площадь:&nbsp;';
                    echo $prop_size;
                    echo '&nbsp;м²';
                    if( !empty($post_meta_data['REAL_HOMES_property_size_postfix'][0]) ){
                        $prop_size_postfix = $post_meta_data['REAL_HOMES_property_size_postfix'][0];
                        // .$prop_size_postfix;
                    }
                echo '</span>';
        }
        
  ?>