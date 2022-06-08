<?php

namespace Marharyta\FirstModule\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
	protected $_postFactory;

	public function __construct(\Marharyta\FirstModule\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}

	public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		if (version_compare($context->getVersion(), '1.3.0', '<')) {
			$data = [
				'name'         => "Magento 2 First Post",
                'post_content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged",
                'url_key'      => '/magento-2-first-module/magento-2-first-post.html',
                'tags'         => 'magento 2, first post',
                'status'       => 1
			];
			$post = $this->_postFactory->create();
			$post->addData($data)->save();
		}
	}
}
