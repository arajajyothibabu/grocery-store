<?php
/**
 * Created by PhpStorm.
 * User: jyothi
 * Date: 19/6/18
 * Time: 9:16 PM
 */

class Item
{
    var $number;
    var $description;
    var $size;
    var $self;
    var $isle;
    var $amount;
    var $price;

    /**
     * Item constructor.
     * @param $number
     * @param $description
     * @param $size
     * @param $self
     * @param $isle
     * @param $amount
     * @param $price
     */
    public function __construct($number, $description, $size, $self, $isle, $amount, $price)
    {
        $this->setNumber($number);
        $this->description = $description;
        $this->size = $size;
        $this->self = $self;
        $this->setIsle($isle);
        $this->amount = $amount;
        $this->setPrice($price);
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param $number
     * @throws Exception
     */
    public function setNumber($number)
    {
        if($this->isValidNumber($number)){
            $this->number = $number;
        }else{
            //throw new Exception('Item Number must be between 00000 and 99999');
            echo '<p><strong><i>Item Number must be between 00000 and 99999..!</i></strong></p>';
        }
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getSelf()
    {
        return $this->self;
    }

    /**
     * @param mixed $self
     */
    public function setSelf($self)
    {
        $this->self = $self;
    }

    /**
     * @return mixed
     */
    public function getIsle()
    {
        return $this->isle;
    }

    /**
     * @param $isle
     * @throws Exception
     */
    public function setIsle($isle)
    {
        if($this->isValidIsle($isle)) {
            $this->isle = $isle;
        }else{
            //throw new Exception('Isle must be between 00 and 15');
            echo '<p><strong><i>Isle must be between 00 and 15</i></strong></p>';
        }
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param $price
     * @throws Exception
     */
    public function setPrice($price)
    {
        if($this->isValidPrice($price)){
            $this->price = $price;
        }else{
            //throw new Exception('Check the price once again..!');
            echo '<p><strong><i>Check the price once again..!</i></strong></p>';
        }
    }

    public function display()
    {
        echo "<tr>" .
            "<td>" . $this->number . "</td>" .
            "<td>" . $this->description . "</td>" .
            "<td>" . $this->size . "</td>" .
            "<td>" . $this->self . "</td>" .
            "<td>" . $this->isle . "</td>" .
            "<td>" . $this->amount . "</td>" .
            "<td>" . $this->price . "</td>" .
            "</tr>";
    }

    /**
     * Validation Functions
     */

    /**
     * @return bool
     */
    public function isValid(){
        return $this->isValidNumber($this->number) and $this->isValidIsle($this->isle) and $this->isValidPrice($this->price);
    }

    /**
     * @param $number
     * @return bool
     */
    function isValidNumber($number){
        return strlen($number) == 5 && is_numeric($number) && (int)$number >= 0 && (int)$number < 100000;
    }

    /**
     * @param $isle
     * @return bool
     */
    function isValidIsle($isle){
        return strlen($isle) == 2 && is_numeric($isle) && (int)$isle >= 0 && (int)$isle < 16;
    }

    /**
     * @param $price
     * @return bool
     */
    function isValidPrice($price){
        return $price >= 0 and $price <= 1000;
    }

}