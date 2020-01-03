<?php
namespace Omnipay\NMI\Message\DirectPost;

/**
* NMI Direct Post Sale Request
*/
class SaleRequest extends AuthRequest
{
    protected $type = 'sale';

    /**
     * @return mixed
     */
    public function getItemProductCode1()
    {
        return $this->getParameter('item_product_code_1');
    }

    /**
     * @param $value
     * @return SaleRequest
     */
    public function setItemProductCode1($value)
    {
        return $this->setParameter('item_product_code_1', $value);
    }

    /**
     * @return SaleRequest
     */
    public function getItemDescription1()
    {
        return $this->getParameter('item_description_1');
    }

    /**
     * @param $value
     * @return SaleRequest
     */
    public function setItemDescription1($value)
    {
        return $this->setParameter('item_description_1', $value);
    }

    /**
     * @return SaleRequest
     */
    public function getItemUnitCost1()
    {
        return $this->getParameter('item_unit_cost_1');
    }

    /**
     * @param $value
     * @return SaleRequest
     */
    public function setItemUnitCost1($value)
    {
        return $this->setParameter('item_unit_cost_1', $value);
    }

    /**
     * @return mixed
     */
    public function getItemQuantity1()
    {
        return $this->getParameter('item_quantity_1');
    }

    /**
     * @param $value
     * @return SaleRequest
     */
    public function setItemQuantity1($value)
    {
        return $this->setParameter('item_quantity_1', $value);
    }

    /**
     * @return mixed
     */
    public function getItemTotalAmount1()
    {
        return $this->getParameter('item_total_amount_1');
    }

    /**
     * @param $value
     * @return SaleRequest
     */
    public function setItemTotalAmount1($value)
    {
        return $this->setParameter('item_total_amount_1', $value);
    }

    public function getData()
    {
        $data = parent::getData();

        if ($this->getItemProductCode1()) {
            $data['item_product_code_1'] = $this->getItemProductCode1();
        }

        if ($this->getItemDescription1()) {
            $data['item_description_1'] = $this->getItemDescription1();
        }

        if ($this->getItemUnitCost1()) {
            $data['item_unit_cost_1'] = $this->getItemUnitCost1();
        }

        if ($this->getItemQuantity1()) {
            $data['item_quantity_1'] = $this->getItemQuantity1();
        }

        if ($this->getItemTotalAmount1()) {
            $data['item_total_amount_1'] = $this->getItemTotalAmount1();
        }

        return $data;
    }
}
