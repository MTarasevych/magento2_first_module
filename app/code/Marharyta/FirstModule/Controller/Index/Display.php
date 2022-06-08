<?php

namespace Marharyta\FirstModule\Controller\Index;

class Display extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	protected $_postFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Marharyta\FirstModule\Model\PostFactory $postFactory
		)
	{
		$this->_pageFactory = $pageFactory;
		$this->_postFactory = $postFactory;
		
		return parent::__construct($context);
	}

	public function execute()
	{
		$post = $this->_postFactory->create();

		return $this->_pageFactory->create();
	}
}