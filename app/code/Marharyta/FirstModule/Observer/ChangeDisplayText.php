<?php

namespace Marharyta\FirstModule\Observer;

class ChangeDisplayText implements \Magento\Framework\Event\ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
		$displayText = $observer->getData('firstmodule_event_text');
		$displayText->setText("Created New Event Successfully");

		return $this;
	}
}