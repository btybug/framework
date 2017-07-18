<?php
/**
 * Created by PhpStorm.
 * User: Comp1
 * Date: 1/30/2017
 * Time: 11:37 AM
 */

namespace Sahakavatar\Framework\Models;


/**
 * Class Classes
 * @package App\Modules\Framework\Models
 */
class Classes
{
    /**
     * @var string
     */
    protected $curentPath;
    protected $extraJsonPath;
    protected $colectionGroupPath;
    public $collections;
    protected $fixedStylesPath;
    public $fixeds;
    protected $fixedGroupsPath;
    public $groups;

    /**
     * Classes constructor.
     */
    public function __construct()
    {
        $this->curentPath = base_path('app/Modules/Framework/Classes/');

        $extraPath = "app" . DS . "Modules" . DS . "Framework" . DS . "Data" . DS . "extra_types.json";
        $this->colectionGroupPath = "app" . DS . "Modules" . DS . "Framework" . DS . "Data" . DS . "colectionGroups.json";

        $this->fixedGroupsPath = base_path("app" . DS . "Modules" . DS . "Framework" . DS . "FixedStyles" . DS . "fixedGroups.json");
        $this->fixedStylesPath = base_path("app" . DS . "Modules" . DS . "Framework" . DS . "FixedStyles" . DS . "fixeds.json");
        $this->extraJsonPath = base_path($extraPath);

        if (!\File::exists($this->extraJsonPath)) {
            \File::put($this->extraJsonPath, json_encode([], true), true);
        }

        if (!\File::exists($this->colectionGroupPath)) {
            \File::put($this->colectionGroupPath, json_encode([], true), true);
        }
        if (!\File::exists($this->fixedStylesPath)) {
            \File::put($this->fixedStylesPath, json_encode([], true));
        }

        $this->extraTypes = json_decode(\File::get($this->extraJsonPath), true);
        $this->collections = json_decode(\File::get($this->colectionGroupPath), true);
        $this->fixeds = json_decode(\File::get($this->fixedStylesPath), true);
        $this->groups = json_decode(\File::get($this->fixedGroupsPath), true);

    }

    public static $referencesMenuItems = [
        "basic" => "Basic classes",
        "global" => "Global classes",
        "element" => "Element classes",
        "component" => "Component classes"
    ];

    public static $assetsMenuItems = [
        "fonts" => [],
        "icons" => "BBFontLibs",
        "editors" => [],
        "fa_icons" => []
    ];

    public static $referencesSubMenuItems = [
        "basic" => [
            "general" => "General",
            "container_parts" => "Container parts",
            "text_parts" => "Text parts",
            "grid" => "Grid",
            "foundation" => "Foundation",
        ],
        "global" => [
            "text" => "Text classes",
            "container" => "Container classes",
            "image" => "Image classes",
            "lists" => "List type classes",
            "full_studio" => "Full Studio",
        ],
        "element" => [],
        "component" => [
            'group_buttons' => "Group buttons",
            'table' => "Table",
            'menu' => "Menu",
            'list' => "List",
        ],
        'element'=> [
            'p' => "Text element",
            'span' => 'SPAN',
            'div' => 'DIV',
            'a' => 'A',
            'button' => 'BUTTON',
            'img' => 'IMG',
            'i' => 'I',
            'ul' => 'UL',
            'li' => 'LI',
            'form' => 'FORM',
            'label' => 'LABEL',
            'input' => 'INPUT',
            'textarea' => 'TEXTAREA',
            'select' => 'SELECT',
            'table' => 'TABLE',
            'thead' => 'THEAD',
            'tbody' => 'TBODY',
            'tr' => 'TR',
            'th' => 'TH',
            'td' => 'TD',
            'hr' => 'HR',
            'nav' => 'NAV',
            'html' => 'HTML',
            'body' => 'BODY',
            'header' => 'HEADER',
            'footer' => 'FOOTER',
            'article' => 'ARTICLE',
            'aside' => 'ASIDE',
            'section' => 'SECTION']

    ];


    public static $applyClassesSubMenuItems = [
        "basic" => [
            "general" => "General",
            "container_parts" => "Container parts",
            "text_parts" => "Text parts",
            "grid" => "Grid"
        ],
        "global" => [
            "text" => "Text classes",
            "container" => "Container classes",
            "image" => "Image classes",
            "lists" => "List type classes",
            "full_studio" => "Full Studio",
        ],
        "element" => [],
        "component" => [
            'group_buttons' => "Group buttons",
            'table' => "Table",
            'menu' => "Menu",
            'list' => "List",
        ],
        'element'=> [
            'p' => "Text element",
            'span' => 'SPAN',
            'div' => 'DIV',
            'a' => 'A',
            'button' => 'BUTTON',
            'img' => 'IMG',
            'i' => 'I',
            'ul' => 'UL',
            'li' => 'LI',
            'form' => 'FORM',
            'label' => 'LABEL',
            'input' => 'INPUT',
            'textarea' => 'TEXTAREA',
            'select' => 'SELECT',
            'table' => 'TABLE',
            'thead' => 'THEAD',
            'tbody' => 'TBODY',
            'tr' => 'TR',
            'th' => 'TH',
            'td' => 'TD',
            'hr' => 'HR',
            'nav' => 'NAV',
            'html' => 'HTML',
            'body' => 'BODY',
            'header' => 'HEADER',
            'footer' => 'FOOTER',
            'article' => 'ARTICLE',
            'aside' => 'ASIDE',
            'section' => 'SECTION']

    ];

    /**
     * @var array
     */
    public static $basicMenuItems = [
        "general" => "General",
        "containers" => "Container parts",
        "text_parts" => "Text parts",
        "grid" => "Grid",
        "font_icons" => "Font & icons",

    ];
    public static $configurator = [
        "background_color" => "Background color",
        "color" => "Text color",
        "border_color" => "Border color",
        "text_size" => "Text size",
        "text_height" => "Text height",
        "text_indent" => "Text indent",
        "letter_spacing" => "Letter spacing",
        "word_spacing" => "Word spacing",
        "borders" => "Borders",
        "radius" => "Radius",
        "margins" => "Margins",
        "paddings" => "Paddings",
        "box_shadow" => "Box shadow",
        "text_shadow" => "Text shadow",
        "grid" => "Grid",
        "foundation" => "Foundation",
        "others" => 'Others'
    ];
    public static $getGlobalClasses = [
        "text" => "Text classes",
        "container" => "Container classes",
        "image" => "Image classes",
        "lists" => "List type classes",
        "full_studio" => "Full studio",
    ];
    public static $basicItems = [
//        "globalclasses" => [
//            "text" => "Text classes",
//            "container" => "Container classes",
//            "image" => "Image classes",
//            "lists" => "List type classes",
//            "full_studio" => "Full studio",
//        ],
        "general" => [
            'animation' => 'Animation',
            'color'=>'Colors',
            'position'=>'Position',
            'display'=>'Display',
            'visibility'=>'Visibility',
            'floating'=>'Floating',
            'clear'=>'Clear',
            'cursor'=>'Cursor',
            'opacity'=>'Opacity',
            'z_index'=>'Z-index',
            'filter'=>'Filter',
            'list_style'=>'List Style',
            'list_style_position'=>'List Style Position'
        ],
        'containers'=>[
            'padding'=>'Padding',
            'margins'=>'Margins',
            'borders'=>'Borders',
            'border_color'=>'Border Color',
            'radius'=>'Radius',
            'width'=>'Width',
            'height'=>'Height',
            'box_shadow'=>'Box Shadow',
            'overflow'=>'Overflow',
            'box_sizing'=>'Box Sizing',
            'box_sizing'=>'Box Sizing',
            'resize'=>'Resize',
            'background_color'=>'Background Color',
            'gradient_color'=>'Gradient Color',
            'pattern_color'=>'Pattern Color',
        ],
        "text_parts" => [
            'text_size' => 'Text Size',
            'text_color' => 'Text color',
            'text_shadow' => 'Text Shadow',
            'text_decoration' => 'Text Decoration',
            'text_alignment' => 'Text Alignment',
            'text_transform' => 'Text Transform',
            'text_height' => 'Text Height',
            'text_indent' => 'Text Indent',
            'letter_spacing' => 'Letter Spacing',
            'word_spacing' => 'Word Spacing',
            'word_break' => 'Word Break',
            'direction' => 'Direction',
            'font_family' => 'Font Family',
        ]
    ];
    /**
     * @var array
     */
    public static $componentClass=[
        'group_buttons'=>'Group buttons',
        'table'=>'Table',
        'menu'=>'Menu',
        'list'=>'List'
    ];
    public static $collectionsMenuItems = [
        'p' => "Text element",
        'span' => 'SPAN',
        'div' => 'DIV',
        'a' => 'A',
        'button' => 'BUTTON',
        'img' => 'IMG',
        'i' => 'I',
        'ul' => 'UL',
        'li' => 'LI',
        'form' => 'FORM',
        'label' => 'LABEL',
        'input' => 'INPUT',
        'textarea' => 'TEXTAREA',
        'select' => 'SELECT',
        'table' => 'TABLE',
        'thead' => 'THEAD',
        'tbody' => 'TBODY',
        'tr' => 'TR',
        'th' => 'TH',
        'td' => 'TD',
        'hr' => 'HR',
        'nav' => 'NAV',
        'html' => 'HTML',
        'body' => 'BODY',
        'header' => 'HEADER',
        'footer' => 'FOOTER',
        'article' => 'ARTICLE',
        'aside' => 'ASIDE',
        'section' => 'SECTION'
    ];

    /**
     * @var array
     */
    public static $popups = [
        "basic" => [
            "header" => [
                "h1" => "framework::type_popups.header.h",
                "h2" => "framework::type_popups.header.h",
                "h3" => "framework::type_popups.header.h",
                "h4" => "framework::type_popups.header.h",
                "h5" => "framework::type_popups.header.h",
                "h6" => "framework::type_popups.header.h",
            ],
            "background" => [
                "colors" => "framework::type_popups.background.colors",
                "gradients" => "framework::type_popups.background.gradients",
                "patterns" => "framework::type_popups.background.patterns",
            ],
            "container" => [
                "main_container" => "framework::type_popups.container.container",
                "page_container" => "framework::type_popups.container.container",
                "text_container" => "framework::type_popups.container.container",
                "icon_container" => "framework::type_popups.container.container",
                "image_container" => "framework::type_popups.container.container",
                "panel" => "framework::type_popups.container.container",
            ],
            "text" => [
                "text_title" => "framework::type_popups.header.h",
                "text_body" => "framework::type_popups.header.h",
                "text_header" => "framework::type_popups.header.h",
                "linket_text" => "framework::type_popups.header.h",
                "text_decoration" => "framework::type_popups.header.h",
                "animated_text" => "framework::type_popups.header.h",
                "button_text" => "framework::type_popups.header.h",
            ],
            "shadow" => [
                "text_shadow" => "framework::type_popups.shadow.text",
                "box_shadow" => "framework::type_popups.shadow.box",
                "padding_margins" => "framework::type_popups.shadow.padding_margins",

            ],
            "box_parts" => [
                "shadow" => "framework::type_popups.shadow.box",
                "test_box" => "framework::type_popups.shadow.box",
                "border_radius" => "framework::type_popups.shadow.borderradius",
                "padding_margins" => "framework::type_popups.shadow.padding_margins",
                "background" => "framework::type_popups.boxbackground.boxbackground",
                "animation" => "framework::styles_popups.animation.animation",
            ],
            "text_parts" => [
                "text_height" => "framework::type_popups.text.textheight",
                "text_indent" => "framework::type_popups.text.text-indent",
                "letter_spacing" => "framework::type_popups.text.letterspacing",
                "word_spacing" => "framework::type_popups.text.wordspacing",
                "text_transform" => "framework::type_popups.text.texttransform",
                "text_alignment" => "framework::type_popups.text.textalignment",
                "text_decoration" => "framework::type_popups.general.text_decoration",
                "text_size" => "framework::type_popups.general.font-size",
                "text_shadow" => "framework::type_popups.shadow.text",
                "text_color" => "framework::type_popups.general.font-color",
                "font_family" => "framework::type_popups.text.fontfamily",
                "word_break" => "framework::type_popups.text.word_break",
                "direction" => "framework::type_popups.text.direction",
                "heading" => "framework::type_popups.header.h"
            ],
            "grid_system" => [
                "grid_system" => "framework::type_popups.grid.grid",
            ],
            "containers" => [
                "general" => "framework::type_popups.general.padding",
                "padding" => "framework::type_popups.general.padding",
                "margins" => "framework::type_popups.general.margins",
                "border_color" => "framework::type_popups.general.border-color",
                "border_style" => "framework::type_popups.general.border-color",
                "borders" => "framework::type_popups.general.border",
                "radius" => "framework::type_popups.general.radius",
                "box_shadow" => "framework::type_popups.shadow.box",
                "height" => "framework::type_popups.height.height",
                "width" => "framework::type_popups.width.width",
                "overflow" => "framework::type_popups.overflow.overflow",
                "box_sizing" => "framework::type_popups.box_sizing.box_sizing",
                "resize" => "framework::type_popups.resize.resize",
                "background_color" => "framework::type_popups.background.colors",
                "gradient_color" => "framework::type_popups.background.gradients",
                "pattern_color" => "framework::type_popups.background.patterns",
            ],
            "general" => [
                "animation" => "framework::styles_popups.animation.textanimation",
                "clear" => "framework::type_popups.clear.clear",
                "visibility" => "framework::type_popups.visibility.visibility",
                "display" => "framework::type_popups.display.display",
                "floating" => "framework::type_popups.floating.floating",
                "position" => "framework::type_popups.position.position",
                "opacity" => "framework::type_popups.opacity.opacity",
                "cursor" => "framework::type_popups.cursor.cursor",
                "z_index" => "framework::type_popups.z-index.z-index",
                "filter" => "framework::type_popups.filter.filter",
                "color" => "framework::type_popups.color.color",
                "list_style" => "framework::type_popups.list_style.list_style",
            ],
            "images" => [

            ],
            "lists" => [
                "list_style_type" => "framework::type_popups.list_style_type.list_style_type",
                "list_style_position" => "framework::type_popups.list_style_position.list_style_position",
            ]
        ],
        'collections' => [
            "text_styles" => "framework::styles_popups.header.text",
            "text_style_span" => "framework::styles_popups.header.text",
            "box_styles" => "framework::styles_popups.header.text",
            "plain_text" => "framework::styles_popups.header.text",
            "h1" => "framework::styles_popups.header.text",
            "h2" => "framework::styles_popups.header.text",
            "h3" => "framework::styles_popups.header.text",
            "h4" => "framework::styles_popups.header.text",
            "h5" => "framework::styles_popups.header.text",
            "h6" => "framework::styles_popups.header.text",
            "icon_styles" => "framework::styles_popups.header.text",
            "hr_style" => "framework::styles_popups.header.text",
            "menu_style" => "framework::styles_popups.header.text",
            "button_style" => "framework::styles_popups.header.text",
            "link_style" => "framework::styles_popups.header.text",
            "image_style" => "framework::styles_popups.header.text",
            "navbar_style" => "framework::styles_popups.header.text",
            "li_style" => "framework::styles_popups.header.text",
            "ul_style" => "framework::styles_popups.header.text",
            "ol_style" => "framework::styles_popups.header.text",
            "form_style" => "framework::styles_popups.header.text",
            "label_style" => "framework::styles_popups.header.text",
            "text_input_style" => "framework::styles_popups.header.text",
            "radio_input_style" => "framework::styles_popups.header.text",
            "checkbox_input_style" => "framework::styles_popups.header.text",
            "textarea_style" => "framework::styles_popups.header.text",
            "select_style" => "framework::styles_popups.header.text",
            "table_style" => "framework::styles_popups.header.text",
            "thead_style" => "framework::styles_popups.header.text",
            "tbody_style" => "framework::styles_popups.header.text",
            "th_style" => "framework::styles_popups.header.text",
            "tr_style" => "framework::styles_popups.header.text",
            "td_style" => "framework::styles_popups.header.text",
        ]

    ];
    public static $colectionFixetSubs = [
        "heading" => [
            'default_heading' => ' Default Heading',
            'extended_h1' => 'Extended H1',
            'extended_h2' => 'Extended H2',
            'extended_h3' => 'Extended H3',
            'extended_h4' => 'Extended H4',
            'extended_h5' => 'Extended H5',
            'extended_h6' => 'Extended H6',

        ]
    ];
    public static $basicRules = [
        "basic" => [
            'general' => [],
            "text_parts" => [
                "text_alignment" => ['status' => 'fixed', 'items' => ['left', 'right', 'center', 'justify']],
                "text_transform" => [
                    'status' => 'fixed',
                    "items" => [
                        "capitalize",
                        "lowercase",
                        "uppercase",
                    ]
                ],
            ],
        ],
        "collectios" => [
            'heading' => [
                "default_heading" => [
                    'status' => 'fixed',
                    'items' => [
                        "h1",
                        "h2",
                        "h3",
                        "h4",
                        "h5",
                        "h6",
                    ]],
            ]
        ]
    ];
    /**
     * @var array
     */
    protected $mainSubs = [
        "header" => "h1",
        "background" => "colors",
        "shadow" => "general",
        "padding_margine" => "general",
        "border_radius" => "general",
        "animations" => "general",
        "text" => "text_title",
        "container" => "main_container",
        "test_text" => "padding_margins",
        "test_box" => "padding_margins",
        "box_styles" => "core",
        "plain_text" => "core",
        "heading" => "default_heading",
        "icon_styles" => "core",
        "menu_style" => "core",
        "image_style" => "core",
        "link_style" => "core",
        "text_style_span" => "core",
        "button_style" => "core",
        "navbar_style" => "core",
        "li_style" => "core",
        "ul_style" => "core",
        "ol_style" => "core",
        "label_style" => "core",
        "form_style" => "core",
        "table_style" => "core",
        "thead_style" => "core",
        "tbody_style" => "core",
        "th_style" => "core",
        "tr_style" => "core",
        "td_style" => "core",
        "text_input_style" => "core",
        "radio_input_style" => "core",
        "checkbox_input_style" => "core",
        "select_style" => "core",
        "textarea_style" => "core",
        "hr_style" => "core",
        'containers' => 'padding',
        'text_parts' => 'text_shadow',
        'font_icons' => 'font_family',
        'general' => 'animation',


    ];
    protected $mainColectSubs = [
        "box_styles" => "default",
        "button_style" => "default",
        "checkbox_input_style" => "default",
        "heading" => "default_heading",
        "hr_style" => "default",
        "icon_styles" => "default",
        "image_style" => "default",
        "li_style" => "default",
        "link" => "default",
        "link_style" => "default",
        "menu_style" => "default",
        "navbar_style" => "default",
        "plain_text" => "default",
        "form_style" => "default",
        "radio_input_style" => "default",
        "text_input_style" => "default",
        "text_style_span" => "default",
        "text_styles" => "default",
        "label_style" => "default",
        "ul_style" => "default",
        "ol_style" => "default",
        "textarea_style" => "default",
        "select_style" => "default",
        "table_style" => "default",
        "thead_style" => "default",
        "tbody_style" => "default",
        "th_style" => "default",
        "tr_style" => "default",
        "td_style" => "default"
    ];
    public static $BasicSub = [
        "general" => [
            'animation' => 'Animation',
            'position' => 'Position',
            'z_index' => 'Z-index',
            'display' => 'Display',
            'floating' => 'Floating',
            'opacity' => 'Opacity',
            'clear' => 'Clear',
            'cursor' => 'Cursor',
            'filter' => 'Filter',
            'visibility' => 'Visibility',
            'list_style' => 'List style',
            'list_style_position' => 'List Style Position'
        ],
        "containers" => [
            'padding' => 'Padding',
            'margins' => 'Margin',
            'borders' => 'Border',
            'border_style' => 'Border style',
            'radius' => 'Radius',
            'box_shadow' => 'Box shadow',
            'width' => 'Width',
            'height' => 'Height',
            'overflow' => 'Overflow',
            'resize' => 'Resize',
            'box_sizing' => 'Box sizing',
            'background_color' => 'Background color',
            'gradient_color' => 'Gradient color',
            'pattern_color' => 'Pattern color',
        ],
        "text_parts" => [
            'text_shadow' => 'Text shadow',
            'text_size' => 'Text size',
            'text_color' => 'Text color',
            'text_height' => 'Text height',
            'font_family' => 'Font family',
            'text_indent' => 'Text indent',
            'letter_spacing' => 'Letter spacing',
            'word_spacing' => 'Word spacing',
            'text_decoration' => 'Text decoration',
            'text_transform' => 'Text transform',
            'text_alignment' => 'Text alignment',
            'word_break' => 'Word break',
            'direction' => 'Text direction',
        ]
    ];
    protected $isAllowCreateItem = [
        'basic' => [
            "general" => [
                "color" => ['add_new' => false, 'delete' => false, 'copy' => false, 'edit' => false, 'upload' => false]
            ]
            , "text_parts" => [
                "heading" => ['add_new' => false, 'delete' => false, 'copy' => false, 'edit' => true, 'upload' => false],
                "text_color" => ['add_new' => false, 'delete' => false, 'copy' => false, 'edit' => false, 'upload' => false],
                "text_size" => ['add_new' => false, 'delete' => false, 'copy' => false, 'edit' => false, 'upload' => false],
                "text_height" => ['add_new' => false, 'delete' => false, 'copy' => false, 'edit' => false, 'upload' => false],
                "text_shadow" => ['add_new' => false, 'delete' => false, 'copy' => false, 'edit' => false, 'upload' => false],
                "text_indent" => ['add_new' => false, 'delete' => false, 'copy' => false, 'edit' => false, 'upload' => false],
                "letter_spacing" => ['add_new' => false, 'delete' => false, 'copy' => false, 'edit' => false, 'upload' => false],
                "word_spacing" => ['add_new' => false, 'delete' => false, 'copy' => false, 'edit' => false, 'upload' => false]
            ],
            "containers" => [
                "border_color" => ['add_new' => false, 'delete' => false, 'copy' => false, 'edit' => false, 'upload' => false],
                "background_color" => ['add_new' => false, 'delete' => false, 'copy' => false, 'edit' => false, 'upload' => false],
                "radius" => ['add_new' => false, 'delete' => false, 'copy' => false, 'edit' => false, 'upload' => false],
                "padding" => ['add_new' => false, 'delete' => false, 'copy' => false, 'edit' => false, 'upload' => false],
                "margins" => ['add_new' => false, 'delete' => false, 'copy' => false, 'edit' => false, 'upload' => false],
                "borders" => ['add_new' => false, 'delete' => false, 'copy' => false, 'edit' => false, 'upload' => false],
                "box_shadow" => ['add_new' => false, 'delete' => false, 'copy' => false, 'edit' => false, 'upload' => false]


            ], "grid" => [
                "grid_settings" => ['add_new' => false, 'delete' => false, 'copy' => false, 'edit' => false, 'upload' => false]
            ]
        ],
        'collections' => [
            'heading' => [
                'default_heading' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'text_styles' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'h1' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'h2' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'h3' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'h4' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'h5' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'h6' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'box_styles' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ], 'text_style_span' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ], 'plain_text' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ], 'icon_styles' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ], 'menu_style' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ], 'navbar_style' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ], 'li_style' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'ul_style' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'ol_style' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'label_style' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'form_style' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'radio_input_style' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'checkbox_input_style' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'textarea_style' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'select_style' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'table_style' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'thead_style' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'tbody_style' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'th_style' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'tr_style' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ],
            'td_style' => [
                'custom' => ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => false, 'upload' => true],
                'default' => ['add_new' => true, 'delete' => true, 'copy' => false, 'edit' => true, 'upload' => false],
            ]
        ]
    ];

    /**
     * @param $type
     * @return mixed|null
     */
    public function getFirstSub($type)
    {
        if (isset($this->mainSubs[$type])) return $this->mainSubs[$type];
        return null;

    }

    public function getColectFirstSub($type)
    {
        if (isset($this->mainColectSubs[$type])) return $this->mainColectSubs[$type];
        return null;

    }

    /**
     * @param $type
     * @param $sub
     * @return array
     */
    public function getCurentItems($tab, $type, $sub)
    {
        $data = array();
        $this->curentPath = $this->curentPath . '/' . $tab;
        if (!\File::isDirectory($this->curentPath)) \File::makeDirectory($this->curentPath);
        $classTypeDir = $this->curentPath . '/' . $type;
        if (!\File::isDirectory($classTypeDir)) \File::makeDirectory($classTypeDir);
        $classTypeDir = $classTypeDir . '/' . $sub;
        if (!\File::isDirectory($classTypeDir)) \File::makeDirectory($classTypeDir);
        $files = \File::allFiles($classTypeDir);
        foreach ($files as $file) {
            if ($file->getExtension() == "css") {
                $data[] = ['classname' => \File::name($file), "css" => \File::get($file->getPathname())];
            }
        }
        return $data;
    }


    public function create($data)
    {
        $classFilePath = $this->curentPath . $data['tab'];
        $type = $data['type'];
        $sub = $data['sub'];
        $classname = $data['classname'];
        $css = $data['css'];
        $classFilePath = $classFilePath . '/' . $type . '/' . $sub . '/' . $classname . '.css';
        if (\File::exists($classFilePath)) return \Response::json(['error' => true, 'message' => [$classname => 'class name already in use!!!']]);
        $result = \File::put($classFilePath, $css);
        if ($result) {
            return \Response::json(['error' => false, 'message' => 'class created successfully']);
        }
        return \Response::json(['error' => true, 'message' => 'wrong request!!!']);
    }

    public function isAllocreateItem($tab, $type, $p = null)
    {

        if (isset($this->isAllowCreateItem[$tab][$type][$p])) return $this->isAllowCreateItem[$tab][$type][$p];
        return ['add_new' => true, 'delete' => true, 'copy' => true, 'edit' => true, 'upload' => false];
    }

    public function saveGroup()
    {
        \File::put($this->colectionGroupPath, json_encode($this->collections, true));
    }

    public function makeFixeds($data, $rules, $type, $p)
    {
        foreach ($rules['items'] as $item) {
            if (isset($this->fixeds[$type][$p][$item])) {
                $data[$item] = $this->fixeds[$type][$p][$item];
            } elseif (!isset($data[$item])) {
                $data[$item] = ['classname' => $item, 'classpath' => "basic.general.heading.$item", "identify" => "admin", "css" => []];
            }
        }
        return $data;
    }


}
