@extends('theme::layouts.app')


@section('content')

<div class="flex flex-col px-8 mx-auto my-6 lg:flex-row max-w-7xl xl:px-5">
  <div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
      <div><h2 class="text-2xl font-semibold leading-tight">Products</h2></div>
      <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
          <table class="min-w-full leading-normal ">
            <thead>
              <tr>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Ticker</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Price</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Chg%</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">RSI</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">MACD</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">PE Ratio</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Volume</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">52 Week High</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">1 M %</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">3 M %</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">6 M %</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">1 Y %</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
              <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->ticker }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->price }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->change_percent }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->rsi }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->macd }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->pe_ratio }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->volume }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->high52Wk }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->performances_hodnota1 }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->performances_hodnota2 }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->performances_hodnota3 }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->performances_hodnota4 }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
            {{ $products->links('theme::partials.pagination') }}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
