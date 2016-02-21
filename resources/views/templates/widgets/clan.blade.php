<div class="media clan">
  <div class="media-left">
    <a href="javascript:void(0)">
        {{ Html::image($clan['badgeUrls']['small'], $clan['name'], array('class' => 'media-object')) }}
    </a>
  </div>
  <div class="media-body">
      <div class="pull-left">
        <h4 class="media-heading">
            {{ link_to_route('view', $clan['name'], ['clanTag'=> $clan['tag']]) }} 
            <small> ({{ $clan['tag'] }}) </small>
        </h4>
        <h5>
          {{ $clan['members'] }} member(s)
        </h5>
      </div>
      <div class="pull-right">
        <h5>
            <span class="badge"> Lv. {{ $clan['clanLevel'] }} </span>
        </h5>
        <div>
            {{ Html::image('/images/Trophy.png', 'Trophy', array('class' => 'small')) }}
            <span> {{ $clan['clanPoints'] }} </span>
        </div>
      </div>
  </div>
</div>