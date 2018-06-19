<?php
/**
 * Created by PhpStorm.
 * User: jyothi
 * Date: 19/6/18
 * Time: 9:16 PM
 */

class Store
{
    var $items = array();

    /**
     * Store constructor.
     * @param $items
     */
    public function __construct($items)
    {
        $this->items = $items;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param mixed $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    public function addItem($item)
    {
        if($item->isValid())
        {
            array_push($this->items, $item);
        }
        else
        {
            echo '<p><strong><i>Not a valid Item..!</i></strong></p>';
        }
    }

    public function generateReport()
    {
        echo "<h2>Items</h2><hr/>";
        echo "<table style='width: 100%;text-align: center'><thead>
                        <tr>
                            <th>Number</th>
                            <th>Description</th>
                            <th>Size</th>
                            <th>Self</th>
                            <th>Isle</th>
                            <th>Amount</th>
                            <th>Price</th>
                        </tr>
                    </thead>";
        echo "<tbody>";
        foreach ($this->items as $item){
            $item->display();
        }
        echo "</tbody></table>";
    }


}