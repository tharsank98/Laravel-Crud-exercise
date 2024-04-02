<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table ="products";

    protected $fillable =['name', 	'description', 	'price', 	'stock'];

    protected $casts =[
        'start_date'=>'date',
        'is_active'=>'boolean'

    ];

    protected $appends =[
        'name_price'
    ];

    protected $hidden =[

        '_token'
    ];

    public function getNamePriceAttribute(){
        return $this->name .  '-' . $this->price;
    }

    //Accessors and Mutators in Laravel

       //Eg : Accssors
    public function getNameAttribute(){
        return ucfirst($this->attributes['name']);
    }

       //Eg : Mutators




}
