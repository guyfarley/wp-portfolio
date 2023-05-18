<?php

/**
 * Block Name: Project Section -Right
 * Description: Project section block for the projects page (oriented right)
 * Author: Guy Farley
 */

add_action('acf/include_fields', function () {
  if (!function_exists('acf_add_local_field_group')) {
    return;
  }

  acf_add_local_field_group(array(
    'key' => 'group_6463ed198b324',
    'title' => 'Project Section -Right',
    'fields' => array(
      array(
        'key' => 'field_6463ed19930c3',
        'label' => 'Project Title -Right',
        'name' => 'project-title-right',
        'aria-label' => '',
        'type' => 'text',
        'instructions' => 'Enter project title here',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => 'Project Title',
        'maxlength' => 30,
        'placeholder' => 'Sed amet aliquam',
        'prepend' => '',
        'append' => '',
      ),
      array(
        'key' => 'field_6463ed199310a',
        'label' => 'Project Description -Right',
        'name' => 'project-description-right',
        'aria-label' => '',
        'type' => 'text',
        'instructions' => 'Please type a project description here',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => 'Project Description',
        'maxlength' => 365,
        'placeholder' => 'Nullam et orci eu lorem consequat tincidunt vivamus et sagittis magna sed nunc rhoncus condimentum sem. In efficitur ligula tate urna. Maecenas massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Nullam et orci eu lorem consequat tincidunt vivamus et sagittis magna sed nunc rhoncus condimentum sem. In efficitur ligula tate urna.',
        'prepend' => '',
        'append' => '',
      ),
      array(
        'key' => 'field_6463ed199307b',
        'label' => 'Project Image -Right',
        'name' => 'project-image-right',
        'aria-label' => '',
        'type' => 'image',
        'instructions' => '',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'url',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
        'preview_size' => 'medium',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_type',
          'operator' => '==',
          'value' => 'posts_page',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ));
});
