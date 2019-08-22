<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
  protected $fillable = [
      'mname', 'mcompany','mprice', 'mquantity', 'mtype',
  ];
  public $timestamps=false;
}
