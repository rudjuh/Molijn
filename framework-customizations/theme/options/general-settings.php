<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general' => array(
		'title'   => __( 'Algemeen', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => __( 'Basis', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					'background-image' => array(
					    'type'  => 'background-image',
					    'value' => 'bg-1',
					    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
					    'label' => __('Achtergrond', 'fw'),
					    'choices' => array(
					        'none' => array(
					            'icon' => get_template_directory_uri() . '/images/bg/bg-0.jpg',
					            'css'  => array(
					                'background-image' => 'none'
					            ),
					        ),
					    )
					)
				)
			),
		)
	)
);