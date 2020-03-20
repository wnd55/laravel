<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App
 * @property integer $id
 * @property string $name //Название продукта
 * @property string $manufacturer //Поставщик продкута
 * @property string $consist //Состав продукта
 * @property string $expiration_date //Срок годности
 * @property int $price //Цена
 * @property string $description //Описание
 */
class Product extends Model
{
    protected $guarded = [];
}
