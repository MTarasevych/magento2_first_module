<?php

namespace Marharyta\FirstModule\Block;

class Display extends \Magento\Framework\View\Element\Template
{
	protected $_postFactory;

	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Marharyta\FirstModule\Model\PostFactory $postFactory
	)
	{
		$this->_postFactory = $postFactory;
		parent::__construct($context);
	}

    public function getPostCollection()
    {
		$post = $this->_postFactory->create();
        
		return $post->getCollection();
	}

	public function getEventText()
	{
		$textDisplay = new \Magento\Framework\DataObject(array('text' => 'Magento 2 First Module'));
		$this->_eventManager->dispatch('marharyta_firstmodule_display_event_text', ['firstmodule_event_text' => $textDisplay]);

		return $textDisplay->getText();
	}
}