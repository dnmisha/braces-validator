<?php
/**
 * Created by PhpStorm.
 * User: mihailvysochin
 * Date: 20.08.2018
 * Time: 14:28
 */
require_once 'Tasks/BracesValidator.php';
require_once 'Tasks/QueryHandler.php';

class MetaTaskResolver
{
    /**
     * Составьте программу, которая проверяет корректность баланса скобок в арифметическом выражении,
     * т.е. что скобки установлены верно и правильно их вхождение, то есть если скобки так расположены [({})] ,
     * то это правильное вхождение, а вот [([) - неверное. Входной параметр - Строка - арифметическое выражение;
     * Выходной параметр - "Верно";"Не верно". Использовать встроенные методы нельзя
     */
    public function task1(string $text): void
    {
        $validator = new BracesValidator();

        if ($validator->validEntry($text)) {
            echo 'верно';
        } else {
            echo 'не верно';
        }
    }

    /**
     *  Напишите запрос, отыскивающий неуникальные значения id в таблице CREATE TABLE (id int not null, name text);
     */
    public function task2()
    {
        $queryHandler = new QueryHandler();

        echo $queryHandler->query;
    }

}
