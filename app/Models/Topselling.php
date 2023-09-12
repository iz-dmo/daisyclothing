<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Topselling extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='topsellings';
    protected $fillable=[
        'codeNo',
        'name',
        'photo',
        'price',
        'description',
        'discount',
        'instock',
        'category_id'

    ];
    public function category(){
        return $this->belongsTo(Topselling::class);
    }

}
