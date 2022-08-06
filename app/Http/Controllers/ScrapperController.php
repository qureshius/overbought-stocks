<?php

namespace App\Http\Controllers;

use App\Product;
use Goutte\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ScrapperController extends Controller
{
  public function scrapper()
  {
    Product::truncate();
    $response = Http::post('https://ws.finscreener.org:8443/overstocks/get', [
      "typTabulky" => "OverBought",
      "strankovanie" => ["cisloStranky" => 1, "pocetZaznamovNaStranku" => 100],
      "zoradenie" => ["idStlpca" => "4", "vzostupne" => false],
      "idu" => -1, "idcps" => [607, 873, 1762, 2174, 3175, 3218, 3919, 4178, 4268, 4775, 4813, 4817, 4822, 4823, 4871, 4886, 4894, 4897, 4916, 4928, 4978, 5010, 5020, 5079, 5080, 5241, 5297, 5337, 5383, 5395, 5426, 5439, 5454, 5529, 5569, 5577, 5580, 5698, 5748, 5817, 5874, 5910, 5911, 6077, 6092, 6119, 6123, 6157, 6185, 6225, 6336, 6346, 6360, 6383, 6392, 6407, 6461, 6489, 6494, 6509, 6559, 6588, 6603, 6620, 6638, 6675, 6714, 6723, 6878, 6931, 6982, 7045, 7076, 7113, 7158, 7181, 7252, 7371, 7396, 7510, 7511, 7516, 7538, 28027, 28028, 29310, 29456, 40884, 40953, 42604, 48803, 49035, 49501, 49716, 55083, 55282, 55325, 55388, 58785, 61997, 63222]
    ]);

    foreach ($response->json(['zoznamCennychPapierov']) as $row) {
      $products = [];
      $products['idcp'] = $row['idcp'];
      $products['ticker'] = $row['ticker'];
      $products['nazov'] = $row['nazov'];
      $products['price'] = $row['price'];
      $products['change_percent'] = $row['changePercent'];
      $products['pe_ratio'] = $row['peRatio'];
      $products['rsi'] = $row['rsi'];
      $products['macd'] = $row['macd'];
      $products['volume'] = $row['volume'];
      $products['high52Wk'] = $row['high52Wk'];
      foreach ($row['performances'] as $key => $performance) {
        $key = $key + 1;
        $products['performances_hodnota' . $key] = $performance['hodnota'];
      }
      DB::table('products')->insert($products);
    }
    print('data has been successfully imported');
  }
}
