<?php

namespace Drupal\section_price\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * Provides a special teasers for a custom-entity-type
 * 
 * @Layout(
 *  id = "section_price_forfait_teaser",
 *  label = @Translation("section_price_forfait_teaser"),
 *  category = @Translation("section_price"),
 *  path = "layouts/teasers",
 *  template = "section_price_forfait_teaser",
 *  library = "section_price/section_price_forfait_teaser",
 *  default = "service_price",
 *  regions = {
 *      "service_type" = {
 *          "label" = @Translation("service_type"),     
 *      },
 *      "service_price" = {
 *          "label" = @Translation("service_price")     
 *      },
 *      "description" = {
 *          "label" = @Translation("description"),     
 *      },
 *      "service_info" = {
 *          "label" = @Translation("service_info"),     
 *      },
 *  }
 * )
 */

class SectionPriceForfait extends FormatageModelsTeasers
{

    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
    */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'section_price') . "/icones/teasers/section_price_forfait_teaser.png");
    }

    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels:build()
    *
    */
    public function build(array $regions) {
        // TODO Auto-generated method stub
        $build = parent::build($regions);
        FormatageModelsThemes::formatSettingValues($build);
        return $build;
    }
    /**
    * 
    * {@inheritdoc}
    * 
    */
    public function defaultConfiguration() 
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'spf_form' => [
                'builder_form' => TRUE,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'service_type' => [
                        'text_html' => [
                            'label' => "Type de service",
                            'value' => ""
                        ]
                    ],
                    'service_price' => [
                        'text_html' => [
                            'label' => 'Price',
                            'value' => ""
                        ]
                    ],
                    'description' => [
                        'text_html' => [
                            'label' => 'Description',
                            'value' => ""
                        ]
                    ],
                    'service_info' => [
                        'text_html' => [
                            'label' => 'Info',
                            'value' => ""
                        ]
                    ]
                ]
            ]
        ];
    }

}