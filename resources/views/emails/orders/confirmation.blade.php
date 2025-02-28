@component('mail::message')
    # Order Confirmation

    Dear {{ $order->first_name }},

    Thank you for your order! We have received your order and it is being processed.

    ## Order Details
    **Order Number:** #{{ $order->order_number }}
    **Order Date:** {{ $order->created_at->format('F j, Y') }}

    ## Items
    @foreach ($order->items as $item)
        - {{ $item->product->name }} (x{{ $item->quantity }}) - ${{ number_format($item->price, 2) }}
    @endforeach

    ## Shipping Address
    {{ $order->first_name }} {{ $order->last_name }}
    {{ $order->address }}
    {{ $order->city }}, {{ $order->state }} {{ $order->zip_code }}
    {{ $order->country }}

    ## Order Summary
    **Total Amount:** ${{ number_format($order->total_amount, 2) }}

    If you have any questions about your order, please don't hesitate to contact us.

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
