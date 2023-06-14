<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

class Card_Bottom_Reveal extends \Elementor\Widget_Base
{

    // Your widget's name, title, icon and category
    public function get_name()
    {
        return 'card_bottom_reveal';
    }

    public function get_title()
    {
        return __('Card Bottom Reveal', 'card-bottom-reveal');
    }

    public function get_icon()
    {
        return 'eicon-image-box';
    }

    public function get_categories()
    {
        return ['basic'];
    }


    // Your widget's sidebar settings
    protected function _register_controls()
    {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'card-bottom-reveal'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => __('Image', 'card-bottom-reveal'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'https://images.pexels.com/photos/214574/pexels-photo-214574.jpeg?auto=compress&cs=tinysrgb&w=1600',
                ],
            ]
        );

        $this->add_control(
            'heading',
            [
                'label' => __('Heading', 'card-bottom-reveal'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Nature', 'card-bottom-reveal'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'content',
            [
                'label' => __('Content', 'card-bottom-reveal'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptatem corrupti sed possimus, distinctio officiis? Est excepturi quos nemo doloremque', 'card-bottom-reveal'),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'card_section',
            [
                'label' => __('Card', 'card-bottom-reveal'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'card_height',
            [
                'label' => __('Card Height', 'card-bottom-reveal'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 600,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .card' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'content_background_color',
            [
                'label' => __('Content Background Color', 'card-bottom-reveal'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .card .content' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'content_height',
            [
                'label' => __('Content Height', 'card-bottom-reveal'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 600,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .card:hover .content' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_transition_duration',
            [
                'label' => __('Transition Duration', 'card-bottom-reveal'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 0.5,
                'min' => 0,
                'max' => 10,
                'step' => 0.1,
                'selectors' => [
                    '{{WRAPPER}} .card .content' => 'transition-duration: {{VALUE}}s;',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'heading_section',
            [
                'label' => __('Heading', 'card-bottom-reveal'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_typography',
                'label' => __('Heading Typography', 'card-bottom-reveal'),
                'selector' => '{{WRAPPER}} .card .content h1',
            ]
        );

        $this->add_control(
            'heading_color',
            [
                'label' => __('Heading Color', 'card-bottom-reveal'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .card .content h1' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'text_section',
            [
                'label' => __('Text', 'card-bottom-reveal'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'text_typography',
                'label' => __('Text Typography', 'card-bottom-reveal'),
                'selector' => '{{WRAPPER}} .card .content p',
            ]
        );

        $this->add_control(
            'text_color',
            [
                'label' => __('Text Color', 'card-bottom-reveal'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .card .content p' => 'color: {{VALUE}};',
                ],
                'default' => 'rgba(255, 255, 255, 0.8)',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'image_section',
            [
                'label' => __('Image', 'card-bottom-reveal'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'object_fit',
            [
                'label' => __('Object Fit', 'card-bottom-reveal'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'cover' => __('Cover', 'card-bottom-reveal'),
                    'contain' => __('Contain', 'card-bottom-reveal'),
                    'fill' => __('Fill', 'card-bottom-reveal'),
                    'none' => __('None', 'card-bottom-reveal'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .card .img img' => 'object-fit: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'image_position_x',
            [
                'label' => __('Image Position (X)', 'card-bottom-reveal'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 0,
                'min' => -100,
                'max' => 100,
                'step' => 1,
                'selectors' => [
                    '{{WRAPPER}} .card .img img' => 'object-position: {{VALUE}}% 50%;',
                ],
                'condition' => [
                    'object_fit' => ['cover'],
                ],
            ]
        );

        $this->add_responsive_control(
            'image_position_y',
            [
                'label' => __('Image Position (Y)', 'card-bottom-reveal'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 0,
                'min' => -100,
                'max' => 100,
                'step' => 1,
                'selectors' => [
                    '{{WRAPPER}} .card .img img' => 'object-position: 50% {{VALUE}}%;',
                ],
                'condition' => [
                    'object_fit' => ['contain', 'cover'],
                ],
            ]
        );

        $this->end_controls_section();
    }


    // What your widget displays on the front-end
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $image_position_x = $settings['image_position_x'];
        $image_position_y = $settings['image_position_y'];
        $content_transition_duration = $settings['content_transition_duration'];

?>

        <div class="card">
            <div class="img">
                <img src="<?php echo esc_url($settings['image']['url']); ?>" alt="">
            </div>
            <div class="content">
                <h1><?php echo esc_html($settings['heading']); ?></h1>
                <p><?php echo $settings['content']; ?></p>
            </div>
        </div>

        <style>
            .card {
                height: 400px;
                position: relative;
                overflow: hidden;
            }

            .card .img {
                width: 100%;
                height: 100%;
                position: relative;
            }

            .card .img img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: <?php echo $image_position_x; ?>% <?php echo $image_position_y; ?>%;
            }

            .card .content {
                width: 100%;
                height: 80px;
                position: absolute;
                bottom: 0;
                background-color: #0000008A;
                transition: height <?php echo $content_transition_duration; ?>s;
                padding: 10px;
                box-sizing: border-box;
            }

            .card .content h1 {
                margin-top: 10px;
                color: white;
                font-size: 35px;
            }

            .card .content p {
                color: rgba(255, 255, 255, 0.8);
            }

            .card:hover .content {
                height: 215px;
            }
        </style>
<?php
    }
}
