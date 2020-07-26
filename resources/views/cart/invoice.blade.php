<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="{{ asset('images/logo.png')}}" rel="icon">


<style>


#invoice{
    padding: 30px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}

</style>


<title>Facture</title>
</head>
<body>

    <div id="invoice">

        <div class="toolbar hidden-print">
            <div class="text-right">
                <button id="printInvoice" class="btn btn-info"><img src="{{asset('images/printer.png')}}" style="width: 50px; height: 50px;" alt=""></button>
                
            <a href="{{ route('welcome')}}"  class="btn btn-info"><img src="{{asset('images/home.png')}}" style="width: 50px; height: 50px;" alt=""></a>
            </div>
            <hr>
        </div>
        <div class="invoice overflow-auto">
            <div style="min-width: 600px">
                <header>
                    <div class="row">
                        <div class="col">
                            <a target="_blank" href="#">
                                <img src="{{asset('images/logo.png')}}" data-holder-rendered="true" style="width: 120px; height: 120px;"/>
                                </a>
                        </div>
                        <div class="col company-details">
                            <h2 class="name"> 
                                <a target="_blank" href="">
                                BidUp
                                </a>
                            </h2>
                            <div>Tro cadiro Immobelier Victoraia A 1er Etage, Sousse </div>
                            <div>+216 20 202 202</div>
                            <div>Bidup@example.com</div>
                        </div>
                    </div>
                </header>
                <main>
                    <div class="row contacts">
                        <div class="col invoice-to">
                            <div class="text-gray-light">Bill  To:</div>
                        <h2 class="to">{{Auth::user()->name}}</h2>
                            <div class="email"><a href="mailto:john@example.com">{{Auth::user()->email}}</a></div>
                        </div>
                        <div class="col invoice-details">

                            @php
                            $BillNumber = "1";
                            @endphp

                            @foreach ($orders as $order)

                            @if($loop->last)

                            @isset($order->id)
                            @php
                            $BillNumber = ($order->id) +1;
                            @endphp
        
                            @endisset
                                @endif
                            @endforeach 

                            @if ($BillNumber < 10)
                            @php
                                $zeros = 0000
                           @endphp 
                            @endif                                
                             @if($BillNumber >= 10)
                             @php
                                $zeros = 000
                            @endphp   
                          @endif
 
                             @if($BillNumber >= 100)
                             @php
                                $zeros = 00
                            @endphp 
                             @endif
 
                            @if($BillNumber >= 1000)
                            @php
                               $zeros = 0
                           @endphp 
                            @endif
 
                            @if($BillNumber >= 10000)
                            @php
                               $zeros = ''
                           @endphp 
                            @endif

                            <h1 class="invoice-id">Bill {{$zeros}}{{$BillNumber}} </h1>

                            <div class="date">Bill Date: {{date("Y/m/d")}}</div>
                        </div>
                    </div>
                    <table border="0" cellspacing="0" cellpadding="0" >
                        <thead>
                            <tr>
                                <th class="text-left">Product</th>
                                <th class="text-right">Original Price</th>
                                <th class="text-right">Auction Price</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach (Cart::content() as $product)
                    
            
                            <tr>
                                <td class="text-left"><h3>
                                    {{ $product->model->title }} 
                                </td>
                                <td class="unit">{{ $product->model->price }} .Dt</td>
                                <td class="total">  {{ session('Bidderprice') }} .DT</td>
                            </tr>
                  
                            @endforeach
                            @php
                            $theBidderPrice = session('Bidderprice') ;
                            $taxPrice = ($theBidderPrice * 19) / 100 ;
                            $totalPriceBid = $taxPrice + $theBidderPrice ;

                         @endphp
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="2">HT</td>
                                <td>{{ $theBidderPrice }} .Dt</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="2">TAX 19%</td>
                                <td>{{$taxPrice}}  .Dt</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="2">TOTAL</td>
                                <td>{{ $totalPriceBid }} .Dt</td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="thanks">Thank You!</div>
                    <div class="notices">
                        <div>Avis:</div>
                        <div class="notice">We are currently using the mobile application "Paymee" to receive payments that you can download. <a href="https://play.google.com/store/apps/details?id=com.am.paymee">Here</a> or you can scan the Qr Code:</div>

                    <img src="{{asset('images/paymee.png')}}" alt="" style="margin-left: 15%;">



                    <form action="{{ route('Checkout.store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="amount" value="{{ Cart::total() }}">
                        <input type="hidden" name="content" value="{{ Cart::content() }}">


                      <button type="submit" class="btn btn-Success" style="margin-left: 85%;
                      background-color: #4CAF50; /* Green */
                     border: none;
                     color: white;
                     padding: 15px 32px;
                     text-align: center;
                     text-decoration: none;
                     display: inline-block;
                     font-size: 16px;
                     box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">Confirm Order</button>
                    </form>

              
                   
                    </div>
                </main>
                <footer>
                    <button onclick="myFunction()">Click me</button>
                    The invoice was created on a computer and is valid without the signature and seal.
                </footer>
            </div>
            <div></div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>

<script>

$('#printInvoice').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
console.log("{{ $BillNumber}}")


function myFunction() {
    var doc = new jsPDF()

doc.text('Hello world!', 10, 10)
doc.save('a4.pdf')}
</script>


</body>
</html>