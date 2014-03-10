<?php
/**
 * This file is part of tomkyle/templates.
 *
 * @author Carsten Witt <tomkyle@posteo.de>
 */
namespace tomkyle\Templates;


/**
 * HasTemplateFileInterface
 *
 * Interceptor methods for template files.
 *
 * @author Carsten Witt <tomkyle@posteo.de>
 */
interface HasTemplateFileInterface
{

/**
 * Sets the template file for the implementing object.
 *
 * @param  string|null $template
 * return  HasTemplateFileInterface Fluent Interface
 */
    public function setTemplateFile($template);


/**
 * Returns the template file for the implementing object;
 * If none set, returns `null`.
 *
 * @return string|null
 */
    public function getTemplateFile();

}
