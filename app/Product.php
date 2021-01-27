<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
 public $fillable = ['id','name', 'description', 'photo', 'price', 'created_at', 'updated_at']; //lista de campuri a tabelului
}
