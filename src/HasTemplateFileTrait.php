<?php
/**
 * This file is part of tomkyle/templates.
 *
 * @author Carsten Witt <tomkyle@posteo.de>
 */
namespace tomkyle\Templates;


/**
 * HasTemplateFileTrait
 *
 * Implements the Interceptor methods prescribed by HasTemplateFileInterface
 *
 * @author Carsten Witt <tomkyle@posteo.de>
 */
trait HasTemplateFileTrait
{

/**
 * @var string|null
 */
    protected $template_file = null;



/**
 * Sets the template file for the implementing object.
 *
 * @param  string|null $template_file
 * @return object Fluent Interface
 * @throws \InvalidArgumentException
 */
    public function setTemplateFile($template)
    {
        if (is_string($template)
        or  is_null($template)) {
            $this->template_file = $template;
            return $this;
        }
        throw new \InvalidArgumentException("String or null expected");
    }




/**
 * Returns the template file for the implementing object;
 * If none set, returns `null`.
 *
 * For BC purposes, this method checks on a member var `$template`.
 * This 'feature' will be removed soon, so stay tuned!
 *
 * @return string|null
 * @uses   $template_file
 */
    public function getTemplateFile()
    {

        // BC Hack
        if (isset($this->template)
        and !empty($this->template)) {
            return $this->template;
        }

        return $this->template_file;
    }


}
