<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 4/8/2018
 * Time: 10:39 PM
 */

namespace Codiac\Brands\Block\Widget;


class Brands extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
    protected $_blockModel;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Cms\Model\Block $blockModel,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->_blockModel = $blockModel;

    }

    public function _toHtml()
    {
        $this->setTemplate("widget/Brands.phtml");
        return parent::_toHtml();
    }
    public function getConfig($key, $default = NULL){
        if($this->hasData($key)){
            return $this->getData($key);
        }
        return $default;
    }
}