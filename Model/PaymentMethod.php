namespace Zero1\PosPayCard\Model;

class PaymentMethod extends \Magento\Payment\Model\Method\AbstractMethod
{
    protected $_code = 'cash_payment';
    protected $_isOffline = true;

    public function isAvailable(\Magento\Quote\Api\Data\CartInterface $quote = null)
    {
        return parent::isAvailable($quote);
    }

    public function authorize(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        /** @var \Magento\Sales\Model\Order $order */
        $order = $payment->getOrder();
        $order->setIsInProcess(true);
        $order->setState(\Magento\Sales\Model\Order::STATE_PROCESSING)->setStatus('processing');

        return $this;
    }
}
