<?php

namespace Marharyta\FirstModule\Model;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'firstmodule_post';

	protected $_cacheTag = 'firstmodule_post';

	protected $_eventPrefix = 'firstmodule_post';

	protected function _construct()
	{
		$this->_init('Marharyta\FirstModule\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}