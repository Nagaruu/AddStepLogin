<?php
namespace AHT\AddStepLogin\Block;
use Magento\Framework\View\Element\Template;
use Magento\Customer\Model\Session as Session;

class AddStepLogin extends Template
{
    protected $_helper;

    /**
     * @var \Magento\Customer\Model\Session
     */

    protected $session;

    /**
     * FreeShippingBar constructor.
     * @param Template\Context $context
     * @param \Magento\Customer\Model\Session $customerSession
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Session $session,
        array $data = []
    ) {
        $this->session = $session;
        parent::__construct($context, $data);
    }

    public function createSession() 
    {
        return  $this->session->create();
    }
}