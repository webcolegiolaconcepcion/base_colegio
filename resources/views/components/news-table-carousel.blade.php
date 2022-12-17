<div>
    <div class="row padding-20">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
 
                @if (isset($date))
                    @foreach ($date as $item)
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3" align="center">        
                            <div class="card" style="width:300px">
                                <img class="card-img-top" src="{{ $item->url_path_image_news }}" alt="{{ $item->news_name }}">
                                <div class="card-body">
                                  <h4 class="card-title"><a href="{{url('/informacion/actualidad/'.$item->id."/".$item->news_name)}}">{{ $item->news_name }}</a></h4>
                                  <a href="{{url('/informacion/actualidad/'.$item->id."/".$item->news_name)}}" class="btn btn-primary">Ver mas</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
