<?php
/**
 * Description
 *
 * @category  StrokerForm
 * @package   StrokerForm\Renderer
 * @copyright 2012 Bram Gerritsen
 * @version   SVN: $Id$
 */

namespace StrokerForm\Renderer;

use Zend\Form\ElementInterface;
use Zend\View\Renderer\PhpRenderer as View;
use Zend\Form\Form;

class RendererCollection extends AbstractRenderer
{
	/**
	 * @var RendererInterface[]
	 */
	private $renderers = array();

	/**
	 * Get inner renderers
	 *
	 * @return RendererInterface[]
	 */
	public function getRenderers()
	{
		return $this->renderers;
	}

	/**
	 * Set inner renderer
	 *
	 * @param RendererInterface[] $renderers
	 */
	public function setRenderers($renderers)
	{
		$this->renderers = $renderers;
	}

	/**
	 * Add a renderer
	 *
	 * @param RendererInterface $renderer
	 */
	public function addRenderer(RendererInterface $renderer)
	{
		$this->renderers[] = $renderer;
	}

    /**
     * Excecuted before the ZF2 view helper renders the element
     *
     * @param string $formAlias
     * @param \Zend\View\Renderer\PhpRenderer $view
     * @return mixed
     */
	function preRenderForm($formAlias, View $view)
	{
		foreach($this->getRenderers() as $renderer)
		{
			$renderer->preRenderForm($formAlias, $view);
		}
	}

	/**
	 * Excecuted before the ZF2 view helper renders the element
	 *
	 * @param ElementInterface $element
	 * @return mixed
	 */
	function preRenderInputField(ElementInterface $element)
	{
		foreach ($this->getRenderers() as $renderer)
		{
			$renderer->preRenderInputField($element);
		}
	}
}
