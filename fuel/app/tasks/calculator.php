<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2015 Fuel Development Team
 * @link       http://fuelphp.com
 */

namespace Fuel\Tasks;

use Fuel\Core\Date;
use MongoClient;
use MongoCollection;
use MongoDate;

/**
 * Robot example task
 *
 * Ruthlessly stolen from the beareded Canadian sexy symbol:
 *
 *		Derek Allard: http://derekallard.com/
 *
 * @package		Fuel
 * @version		1.0
 * @author		Phil Sturgeon
 */

class calculator
{
    public static function run($speech = null)
    {
        echo 'hello can you hear me?';
        $mongo = new MongoClient();
        $database = $mongo->selectDB("UNWDMI");
        $collection = new MongoCollection($database, "measurements");

        $start = new MongoDate(Date::time()->get_timestamp());
        $end = new MongoDate(Date::time()->get_timestamp());

        $cursor = $collection->find(array('measurement.STN' => '476290', 'measurement.DATETIME' => array('$gte' => $start, '$lt' => $end)));

        $cursor->sort(array('measurement.DATETIME' => -1));

        var_dump($cursor);

        foreach($cursor as $document) {
            echo date('Y-M-d h:i:s', $document['measurement']['DATETIME']->sec);
            echo '<br />';

            var_dump($document);
        }
    }

    public static function rain()
    {
        echo 'lets calculate te rain';
    }

    public static function cold()
    {
        echo 'lets calculate the cold';
    }
}

/* End of file tasks/robots.php */
