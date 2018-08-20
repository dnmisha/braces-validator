<?php
/**
 * Created by PhpStorm.
 * User: mihailvysochin
 * Date: 20.08.2018
 * Time: 14:31
 */

class QueryHandler
{
    public $query = 'select `id` from `matatable` group by `id` HAVING count(`id`) > 0;';
}
