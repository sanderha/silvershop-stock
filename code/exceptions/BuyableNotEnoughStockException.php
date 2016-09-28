<?php

/**
 * @package silvershop-stock
 */
class BuyableNotEnoughStockException extends ShopBuyableException
{
    public function __construct($message = null, $code = 0, Exception $previous = null) {
        if(!$message) {
            $message = _t('BuyableNotEnoughStockException.OUT_OF_STOCK', 'This product does not have enough stock to fulfil your order');
        }

        return parent::__construct($message, $code, $previous);
    }
}
