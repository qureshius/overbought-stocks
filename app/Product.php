<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;
  protected $fillable = ['idcp', 'ticker', 'nazov', 'price', 'changePercent', 'pe_ratio', 'rsi', 'macd', 'peRatio', 'volume', 'high52Wk', 'performances_hodnota1', 'performances_hodnota2', 'performances_hodnota3', 'performances_hodnota4'];

}
