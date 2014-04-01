<?php
/**
 * This file is part of tomkyle/templates.
 *
 * @author Carsten Witt <tomkyle@posteo.de>
 */
namespace tomkyle\Templates;


/**
 * TemplateFileAwareInterface
 *
 * @author Carsten Witt <tomkyle@posteo.de>
 */
interface TemplateFileAwareInterface
{

/**
 * Sets the template file for the implementing object.
 *
 * @param  string|null $template
 * return  TemplateFileAwareInterface Fluent Interface
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
