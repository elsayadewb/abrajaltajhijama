@if(!empty($photo))
 <div> <img src="{{url('public/storage').Storage::url($photo)}}" class="img_100px fa-spin"></div>
@endif
@if(empty($photo))
 <img src="{{url('')}}/default/user.png" class="img_120px">
@endif