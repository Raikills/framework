<?php
/**
 * Template - a View specialized for handling the Template files.
 *
 * @author Virgil-Adrian Teaca - virgil@giulianaeassociati.com
 * @version 3.0
 */

namespace Core;

use Core\Base\View as BaseView;
use Core\Language as CoreLanguage;


/**
 * View class to load templates files.
 */
class Template extends BaseView
{
    /**
     * Constructor
     * @param mixed $path
     * @param array $data
     *
     * @throws \UnexpectedValueException
     */
    protected function __construct($view, $path, array $data = array())
    {
        parent::__construct($view, $path, $data);
    }

    /**
     * Create a Template instance
     *
     * @param string $view
<<<<<<< HEAD
     * @param array $data
     * @param string $template
=======
     * @param array|string $data
     * @param string $custom
>>>>>>> 4f41a337ead7c53ca9ff3815790d14b9134b44bc
     * @return Template
     */
    public static function make($view, $data = array(), $template = TEMPLATE)
    {
<<<<<<< HEAD
        $direction = CoreLanguage::direction();

        $ltrPath = str_replace('/', DS, APPDIR ."Templates/$template/$view.php");
        $rtlPath = str_replace('/', DS, APPDIR ."Templates/$template/$view-rtl.php");

        //Prepare the file path
        $path = $ltrPath;
        
        //Prepare the file path if exists for rtl layouts
        if (file_exists($rtlPath) && $direction == 'rtl')
            $path = $rtlPath;
=======
        if (is_string($data)) {
            if (! empty($data) && ($template === null)) {
                // The Module name given as second parameter; adjust the information.
                $template = $data;
            }

            $data = array();
        }

        // Prepare the file path.
        $path = str_replace('/', DS, APPDIR ."Templates/$template/$view.php");
>>>>>>> 4f41a337ead7c53ca9ff3815790d14b9134b44bc

        return new Template($view, $path, $data);
    }
}
