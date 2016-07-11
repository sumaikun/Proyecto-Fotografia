
 {{Html::style('css/style.css')}}
  <style>

    #paymentform{
      margin-left: -300px;
    }
    @media (max-width: 480px) {
     #paymentform{
      margin-left: 0px;
      } 
    }  

  </style>


 {{Html::script('js/makePurchase.js')}}
<div class="container" id="paymentform">
  <div id="Checkout" class="inline">
      <h1>Orden de Compra</h1>
      <div class="card-row">
          <span class="visa"></span>
          <span class="mastercard"></span>
          <span class="amex"></span>
          <span class="discover"></span>
      </div>

    <form method="post" class="formpayment" action="/Costumer" accept-charset="UTF-8" enctype="multipart/form-data" id="paymentform" autocomplete=off>

          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

          <input type="hidden" name="idsale" value="{{$sale->id}}" id="idsale">

          <input type="hidden" name="iduser" value="{{$sale->usuario}}" id="iduser">

           <input type="hidden" name="salecode" value="{{$sale->codigo}}" id="salecode">

          <div class="form-group">
              <label for="PaymentAmount">Payment amount</label>
              <div class="amount-placeholder">
                  <span>$</span>
                  <span>{{$sale->precio}}</span>
              </div>
          </div>
          <div class="form-group">
              <label or="NameOnCard">Name on card</label>
              <input id="name" class="form-control" type="text" maxlength="50" name="name" pattern=".{25,}"  title ="25 caracteres minimo" autocomplete=off required></input>
          </div>
           <div class="form-group">
              <label for="CreditCardNumber">Card number</label>
               <input id="card" class="null card-image form-control" type="text" name="card" maxlength="14" pattern=".{14,}"  title ="14 caracteres minimo" autocomplete=off required></input>
          </div>
          <div class="expiry-date-group form-group">
              <label for="ExpiryDate">Expiry date</label>
              <input id="expired" class="form-control" type="date" placeholder="MM / YY" name="expired" required></input>
          </div>
          <div class="security-code-group form-group">
              <label for="SecurityCode">Security code</label>
              <div class="input-container" >
                  <input id="security" class="form-control" type="text" name="security" maxlength="3"  pattern=".{3,}"  title ="3 caracteres minimo" autocomplete=off required></input>
                  <i id="cvc" class="fa fa-question-circle"></i>
              </div>

              <div class="cvc-preview-container two-card hide">
                  <div class="amex-cvc-preview"></div>
                  <div class="visa-mc-dis-cvc-preview"></div>
              </div>
          </div>
          <div class="zip-code-group form-group">
              <label for="ZIPCode">ZIP/Postal code</label>
              <div class="input-container">
                  <input id="zip" class="form-control" type="text" maxlength="7" name="zip" pattern=".{4,}"  title ="4 caracteres minimo" autocomplete=off required></input>
                  <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Enter the ZIP/Postal code for your credit card billing address."><i class="fa fa-question-circle"></i></a>
              </div>
          </div>
          <button id="PayButton" class="btn btn-block btn-success submit-button" type="submit">
              <span class="submit-button-lock"></span>
              <span class="align-middle">Pagar {{$sale->precio}}</span>
          </button>

       
      </form>
  </div>
</div>


        
<script>

var petition = false;

</script>
    
    
    

