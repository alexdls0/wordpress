<?php
    /**
     * Add new fields for user skills in user profile.
     * @param WP_User $user User object.
     */  
    function add_custom_fields( $user ){ ?>
        <!-- Etiqueta del panel para Enlace User Picture --> 
        <h3><?php _e("User Picture", "caravaning"); ?></h3>
        <table class="form-table">
            <tr>
                <th><label for="picture">User Picture</label></th>
                <td>
                    <input type="url" name="picture" id="picture" value="<?= esc_attr( get_the_author_meta( 'picture', $user->ID ) ); ?>" class="regular-text" />
                    <br />
                    <span class="description">Please enter your Picture url.</span>
                </td>
                </tr>
            </tr>
        </table>
        <!-- Etiqueta del panel para los nuevos campos --> 
        <h3><?php _e("Social Media", "caravaning"); ?></h3>
        <table class="form-table">
            <tr>
                <th><label for="twitter">Twitter</label></th>
                <td>
                    <input type="text" name="twitter" id="twitter" value="<?= esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" />
                    <br />
                    <span class="description">Please enter your Twitter username.</span>
                </td>
            </tr>
            <tr>
                <th><label for="facebook">Facebook</label></th>
                <td>
                <input type="text" name="facebook" id="facebook" value="<?= esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description">Please enter your Twitter username.</span>
            </td>
            </tr>
              <tr>
                <th><label for="linkedin">Linkedin</label></th>
                <td>
                    <input type="text" name="linkedin" id="linkedin" value="<?= esc_attr( get_the_author_meta( 'linkedin', $user->ID ) ); ?>" class="regular-text"/><br />
                    <span class="description">Please enter your Linkedin page.</span>
                </td>
            </tr>
        </table>
        <h3><?php _e("User skills information", "caravaning"); ?></h3>
        <!-- Creamos una tabla con los campos nuevos que vamos a añadir -->
        <table class="form-table">
        <tr>
            <!-- Creamos un label para cada campo, envuelto en un th -->
            <th><label for="skill1"><?php _e("Skill1"); ?></label></th>
            <td>
                <input type="text" name="skill1" id="skill1" value="<?= esc_attr( get_the_author_meta( 'skill1', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e("Please enter your skill-1 description."); ?></span>
            </td>
            <th><label for="skill1Value"><?php _e("Skill1 Value"); ?></label></th>
            <td>
                <input type="text" name="skill1V" id="skill1V" value="<?= esc_attr( get_the_author_meta( 'skill1V', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e("Please enter your skill-1 value."); ?></span>
            </td>
        </tr>
        <tr>
            <th><label for="skill2"><?php _e("Skill2"); ?></label></th>
            <td>
                <input type="text" name="skill2" id="skill2" value="<?= esc_attr( get_the_author_meta( 'skill2', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e("Please enter your skill-1 description."); ?></span>
            </td>
            <th><label for="skill2Value"><?php _e("Skill2 Value"); ?></label></th>
            <td>
                <input type="text" name="skill2V" id="skill2V" value="<?= esc_attr( get_the_author_meta( 'skill2V', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e("Please enter your skill-2 value."); ?></span>
            </td>
        </tr>
        <tr>
            <th><label for="skill3"><?php _e("Skill3"); ?></label></th>
            <td>
                <input type="text" name="skill3" id="skill3" value="<?php echo esc_attr( get_the_author_meta( 'skill3', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e("Please enter your skill-3 description."); ?></span>
            </td>
            <th><label for="skill3Value"><?php _e("Skill3 Value"); ?></label></th>
            <td>
                <input type="text" name="skill3V" id="skill3V" value="<?php echo esc_attr( get_the_author_meta( 'skill3V', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e("Please enter your skill-3 value."); ?></span>
            </td>
        </tr>
        <tr>
            <th><label for="skill4"><?php _e("Skill4"); ?></label></th>
            <td>
                <input type="text" name="skill4" id="skill4" value="<?php echo esc_attr( get_the_author_meta( 'skill4', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e("Please enter your skill-4 description."); ?></span>
            </td>
            <th><label for="skill4Value"><?php _e("Skill4 Value"); ?></label></th>
            <td>
                <input type="text" name="skill4V" id="skill4V" value="<?php echo esc_attr( get_the_author_meta( 'skill4V', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e("Please enter your skill-4 value."); ?></span>
            </td>
        </tr>
        </table>   
    <?php }
     add_action ('show_user_profile', 'add_custom_fields');
     add_action ('edit_user_profile', 'add_custom_fields');
     
     
    /**
     * Save additional profile skills fields.
     * @param  int $user_id Current user ID.
     */
    function save_custom_fields( $user_id ){
        if ( !current_user_can( 'edit_user', $user_id ) )
            return false;
            
        update_usermeta( $user_id, 'facebook', $_POST['facebook'] );
        update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
        update_usermeta( $user_id, 'linkedin', $_POST['linkedin']);
        
        update_usermeta( $user_id, 'skill1', $_POST['skill1'] );
        update_usermeta( $user_id, 'skill1V', $_POST['skill1V'] );
        
        update_usermeta( $user_id, 'skill2', $_POST['skill2'] );
        update_usermeta( $user_id, 'skill2V', $_POST['skill2V'] );
        
        update_usermeta( $user_id, 'skill3', $_POST['skill3'] );
        update_usermeta( $user_id, 'skill3V', $_POST['skill3V'] );
        
        update_usermeta( $user_id, 'skill4', $_POST['skill4'] );
        update_usermeta( $user_id, 'skill4V', $_POST['skill4V'] );
         
     }
    add_action( 'personal_options_update', 'save_custom_fields' );
    add_action( 'edit_user_profile_update', 'save_custom_fields' );
?>