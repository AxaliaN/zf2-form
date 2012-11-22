<?php
/**
 * EmailAddress
 *
 * @category  StrokerForm
 * @package   StrokerForm\Renderer
 * @copyright 2012 Bram Gerritsen
 * @version   SVN: $Id$
 */

namespace StrokerForm\Renderer\JqueryValidate\Rule;

class EmailAddress extends AbstractRule
{
	/**
	 * Get the validation rules
	 *
	 * @return array
	 */
	public function getRules(\Zend\Validator\ValidatorInterface $validator)
	{
		return array('email' => true);
	}

	/**
	 * Get the validation message
	 *
	 * @return string
	 */
	public function getMessages(\Zend\Validator\ValidatorInterface $validator)
	{
		return array('email' => $this->translateMessage('Email address is invalid'));
	}
}
