<div class="media player">
  <div class="media-left">
    <a href="javascript:void(0)">
    	{{ Html::image($player['league']['iconUrls']['tiny'], $player['league']['name'], array('class' => 'media-object')) }}
    </a>
  </div>
  <div class="media-body">
	  <div class="pull-left">
	    <h4 class="media-heading">
	    	{{ $player['name'] }} 
	    	<small> {{ $player['role'] }} </small>
		</h4>
	    <span class="glyphicon glyphicon-import" data-toggle="tooltip" data-placement="right" title="Troops received"> {{ $player['donationsReceived'] }} </span> <br/>
	    <span class="glyphicon glyphicon-export" data-toggle="tooltip" data-placement="right" title="Troops donated"> {{ $player['donations'] }} </span>
	    </div>
	    <div class="pull-right">
			<h5>
				<span class="badge"> Lv. {{ $player['expLevel'] }} </span>
			</h5>
			<div>
				{{ Html::image('/images/Trophy.png', 'Trophy', array('class' => 'small')) }}
				<span> {{ $player['trophies'] }} </span>
			</div>
	    </div>
  </div>
</div>