<?php

function ifmtwp_land_customizer( $wp_customize ){

    /**Personaliza: 1 */
    $wp_customize->add_section(
        'sec_text_espacamento',
        array(
             'title' => 'Personaliza: espaçamento entre as figuras',
             'description' => 'Ajusta espeçamento entre as figuras'
        )
    );    
    $wp_customize->add_setting(
        'set_text_espacamento',
        array(
            'type' => 'theme_mod',
            'default' => '2',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );    
    $wp_customize->add_control(
        'set_text_espacamento',
        array(
            'label' => 'Preencha com número inteiro',
            'section' => 'sec_text_espacamento',
            'type' => 'text'
        )
    );     
    /**Personaliza: 1 */

    /**Personaliza: 2 */
    $wp_customize->add_section(
        'sec_media_background',
        array(
            'title' => 'Personaliza: background da página',
            'description' => 'Configura o background da página landing page'
        )
    );
    $wp_customize->add_setting(
        'set_media_background',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );    
    $wp_customize->add_control( 
        new WP_Customize_Media_Control( $wp_customize, 'set_media_background', 
                                                                        array(
                                                                        'section' => 'sec_media_background',
                                                                        'mime_type' => 'image',
                                                                        ) 
                                    ) 
    );
    /**Personaliza: 2 */

    /**Personaliza: 3 */
    $wp_customize->add_section(
        'sec_text_page_filtroposts',
        array(
             'title' => 'Personaliza: categoria multisite',
             'description' => 'Personaliza: categoria multisite'
        )
    );    
    $wp_customize->add_setting(
        'set_text_page_filtroposts',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );    
    $wp_customize->add_control(
        'set_text_page_filtroposts',
        array(
            'label' => 'Complete com: ldp-alf-bag-blv-cas-cba-cfs-cnp-dmt-gta-ifmt-jna-jna-lrv-pdl-plc',
            'section' => 'sec_text_page_filtroposts',
            'type' => 'text'
        )
    );   
    /**Personaliza: 3 */         

    /**Personaliza: 4 */  
    $wp_customize->add_section(
        'sec_text_habilita_carousel',
        array(
             'title' => 'Habilitar: habilitar carousel',
             'description' => 'Habilita carousel na página landing page'
        )
    );    
    $wp_customize->add_setting(
        'set_text_habilita_carousel',
        array(
            'type' => 'theme_mod',
            'default' => 'S',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );    
    $wp_customize->add_control(
        'set_text_habilita_carousel',
        array(
            'label' => 'S-Habilita ou N-Desabilita',
            'section' => 'sec_text_habilita_carousel',
            'type' => 'text'
        )
    );    
    /**Personaliza: 4 */     
        
    /**Personaliza: 5 */  
    $wp_customize->add_section(
        'sec_text_tam_carousel',
        array(
             'title' => 'Personalizar: tamanho do carousel',
             'description' => 'Personaliza o tamanho do carousel'
        )
    );    
    $wp_customize->add_setting(
        'set_text_tam_carousel',
        array(
            'type' => 'theme_mod',
            'default' => '100',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );    
    $wp_customize->add_control(
        'set_text_tam_carousel',
        array(
            'label' => 'Seguir modelo: 10=10% | 20=20% | 50=50% | 100=50%',
            'section' => 'sec_text_tam_carousel',
            'type' => 'text'
        )
    );    
    /**Personaliza: 5 */    

    /**Personaliza: 6 */
    $wp_customize->add_section(
        'sec_text_background_icon',
        array(
             'title' => 'Personaliza: backgroud nas icones das instituições',
             'description' => 'backgroud nas icones das instituições'
        )
    );    
    $wp_customize->add_setting(
        'set_text_background_icon',
        array(
            'type' => 'theme_mod',
            'default' => 'bg-transparent',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );    
    $wp_customize->add_control(
        'set_text_background_icon',
        array(
            'label' => 'Padrão do Bootstrap: bg-primary | bg-secondary | bg-success | bg-danger | bg-warning | bg-info | bg-light | bg-dark | bg-body | bg-white | bg-transparent',
            'section' => 'sec_text_background_icon',
            'type' => 'text'
        )
    );     
    /**Personaliza: 6 */    


}
add_action( 'customize_register', 'ifmtwp_land_customizer' );