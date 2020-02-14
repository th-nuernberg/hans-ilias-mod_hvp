<?php

namespace srag\CustomInputGUIs\H5P\Template;

use ilTemplate;

/**
 * Class Template
 *
 * @package srag\CustomInputGUIs\H5P\Template
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class Template extends ilTemplate
{

    /**
     * Template constructor
     *
     * @param string $template_file
     * @param bool   $remove_unknown_variables
     * @param bool   $remove_empty_blocks
     */
    public function __construct($template_file, $remove_unknown_variables = true, $remove_empty_blocks = true)
    {
        parent::__construct($template_file, $remove_unknown_variables, $remove_empty_blocks);
    }

    /* *
     * @param bool $a_force
     * /
    public function fillJavaScriptFiles($a_force = false)
    {
        parent::fillJavaScriptFiles($a_force);

        if ($this->blockExists("js_file")) {
            reset($this->js_files);

            foreach ($this->js_files as $file) {
                if (strpos($file, "data:application/javascript;base64,") === 0) {
                    $this->fillJavascriptFile($file, "");
                }
            }
        }
    }*/

    /**
     * @param string $key
     * @param mixed  $value
     */
    public function setVariableEscaped($key, $value)/*:void*/
    {
        $this->setVariable($key, htmlspecialchars($value));
    }
}
