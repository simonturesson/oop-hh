<?php
/**
 * Created by PhpStorm.
 * User: simonturesson
 * Date: 2016-11-23
 * Time: 13:37
 * *Object Pool Example
 */

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);



/**
 * Object Pool = Warehouse
 */
class Warehouse
{
    /**
     * @var Equipment[]
     */
    protected static $equipments = array();

    /**
     * Adds equipment to the pool
     * @param Equipment $equipment
     * @return void
     */
    public static function pushEquipment(Equipment $equipment)
    {
        self::$equipments[$equipment->getId()] = $equipment;
    }

    /**
     * Returns equipment from the pool
     * @param int|string $id - equipment ID
     * @return Equipment $equipment
     */
    public static function getEquipment($id)
    {
        return isset(self::$equipments[$id]) ? self::$equipments[$id] : null;
    }

    /**
     * Removes equipment from the pool
     * @param int|string $id - equipment ID
     * @return void
     */
    public static function removeEquipment($id)
    {
        if(array_key_exists($id, self::$equipments)){
            unset(self::$equipments[$id]);
        }
    }
}

class Equipment
{
    /**
     * @var int|string
     */
    protected $id;

    public function __construct($id) {
        $this->id = $id;
    }

    /**
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }
}

// OBJECT POOL USAGE
// --------------------
Warehouse::pushEquipment(new Equipment("Laptop"));
Warehouse::pushEquipment(new Equipment('Chair'));
Warehouse::pushEquipment(new Equipment('Desk'));
Warehouse::pushEquipment(new Equipment('Pencils'));
Warehouse::pushEquipment(new Equipment('Paper'));
Warehouse::pushEquipment(new Equipment('Phone'));

print_r(Warehouse::getEquipment('Laptop')->getId());
echo '<br><br>';
print_r(Warehouse::getEquipment('Chair')->getId());
echo '<br><br>';
print_r(Warehouse::getEquipment('Desk')->getId());
echo '<br><br>';
print_r(Warehouse::getEquipment('Pencils')->getId());
echo '<br><br>';
print_r(Warehouse::getEquipment('Paper')->getId());
echo '<br><br>';
print_r(Warehouse::getEquipment('Phone')->getId());
echo '<br><br><br><br><br>';



//echo memory usage
echo memory_get_usage() . "\n";




?>

