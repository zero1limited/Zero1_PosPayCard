<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:Module/etc/config.xsd">
    <default>
        <payment>
            <cash_payment>
                <active>1</active>
                <model>Zero1\PosPayCard\Model\PaymentMethod</model>
                <order_status>processing</order_status>
                <title>Cash Payment</title>
            </cash_payment>
        </payment>
    </default>
</config>
