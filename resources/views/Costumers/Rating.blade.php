    {{Html::script('js/stars.js')}}
{{Html::style('css/stars.css')}}

 {{Html::script('js/letsRate.js')}}


<div class="rate">
<form>
 	<input type="hidden" name="photo" value="{{$sale->id}}" id="photo">

 	<input type="hidden" name="usuario" value="{{$sale->usuario}}" id="usuario">

    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

    <input id="input-21b" value="4" type="number" class="rating ratevalue" min=0 max=5 step=0.5 data-size="lg">
</form>
</div>

<a href="#" class="rate">Calificar</a>  

<script>

var petition = false;

</script>  