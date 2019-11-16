<?php

/**
 * Class Bird
 */
class Bird
{
    /*
     *  Класс, используемый в коде
     */
    public function fly()
    {
        $flySpeed = 10;
        return $flySpeed;
    }
}

/**
 * Class Duck
 * Дочерний класс от Bird
 * Не изменяет поведение, но дополняет
 * Не наршает принцип LSP
 */
class Duck extends Bird
{
    public function fly()
    {
        $flySpeed = 8;
        return $flySpeed;
    }

    public function swim()
    {
        $swimSpeed = 2;
        return $swimSpeed;
    }
}

/**
 * Class Penguin
 * Дочерний класс от Bird
 * Изменяет поведение
 * Нарушает принциа LSP
 */
class Penguin extends Bird
{
    public function fly()
    {
        return 'I can`t fly';  // Не типичное поведение - возврат строки, вместо числа
    }

    public function swim()
    {
        $swimSpeed = 4;
        return $swimSpeed;
    }

}