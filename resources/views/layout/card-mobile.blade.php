<div id="news" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
      <div class="carousel-item active">
          @php $i = 1; @endphp
          @foreach($berita as $b)
              <div class="col-md-3 card-size pad-sz" style="float:left">
                  <div class="card mb-2" style="height: fit-content; box-shadow: 0px 20px 40px #75B2DD1A; border-radius: 15px 15px 15px 15px; opacity: 1;">
                      <img class="card-img-top" src="{{ url('storage/' .$b->gambar) }}" alt="Card image cap"  style="height: 12rem; border-radius: 15px 15px 0px 0px;">
                      <div class="card-body" onclick="location.href='{{url('info/'. $b[$bahasa .'_slug'] . '/'. $bahasa)}}'">
                          <p class="card-text text-left fz"><small class="text-muted">Last Update : {{ date("d F Y", strtotime($b->updated_at)) }}</small></p>
                          <p class="card-text text-left fz" style="color: #0F2B5B; cursor:pointer;" >
                              @if(strlen($b[$bahasa. '_judul']) > 64)
                                  {{ substr($b[$bahasa. '_judul'], 0, 64) . '....'}}
                              @else
                                  {{$b[$bahasa. '_judul']}}
                              @endif
                          </p>
                      </div>
                  </div>
              </div>

              @if ($i % 1 == 0) </div>
                  @if($i <= count($berita) - 1)
                      <div class="carousel-item">
                  @endif
              @endif
              @if($i == count($berita) and $i % 4 != 0) </div> @endif
              @php $i++; @endphp
          @endforeach

  </div>
</div>
