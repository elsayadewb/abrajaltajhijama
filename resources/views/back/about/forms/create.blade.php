


          <div class="row">

                                    <div class="col-md-12  " >
                                              <section>
                                              {{ Form::button('<i class="fa fa-location-arrow "> '
                                . trans('admin.save').'
                                </i> <i class="fas fa-news-h"> </i> ' ,
                                ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                             }}
                                                  <br><br>
                                              <!----------------start  photo-->
                                            <div class="input-group ">
                                                <div class="custom-file">
                                                    {!! Form::label('photo',trans('admin.photo_about'),['class'=>'custom-file-label']) !!}
{{--                                                    {!! Form::file('photo',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}--}}
                                                    <input type="file" name="photo" id="inputGroupFile02" class="custom-file-input" accept="image/*" onchange="showMyImage(this)" />
                                                </div>
                                            </div>
                                              <div class="text-center"> <img  class="thumbnil"  id="thumbnil"  src=""></div>
                                           <!----------------End photo-->

                                           </section>
                                       </div><!-- col-md-12-->

                                   <div class="col-md-6 content_form_ar" >
                                    <div class="form-group ">
                                        {!! Form::label('title_ar',trans('admin.title_ar')) !!}
                                        {!! Form::text('title_ar',old('title_ar'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group title_en -->
                                     <div class="form-group ">
                                        {!! Form::label('content_ar',trans('admin.content_ar')) !!}
                                        {!! Form::textarea('content_ar',old('content_ar'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group content_ar -->
                                    <div class="form-group ">
                                        {!! Form::label('start_at',trans('admin.start_at')) !!}
                                        {!! Form::text('start_at',old('start_at'),['autocomplete'=>'off','class'=>'form-control datepicker' ]) !!}
                                    </div><!-- /.form-group start_at -->

                                     <!----------------start  photo-->
                                    <div class="input-group   ">
                                       <!--  <div class="custom-file">
                                            {!! Form::label('photo',trans('admin.photo_news'),['class'=>'custom-file-label']) !!}
                                            {!! Form::file('photo',['class'=>'custom-file-input','id'=>''] ) !!}
                                        </div> -->
                                    </div>
                                    <!----------------End photo-->
                                   </div><!--col-md-6 content_form_ar-->
                                   <div class="col-md-6 content_form_en" >
                                   <div class="form-group ">
                                        {!! Form::label('title_en',trans('admin.title_en')) !!}
                                        {!! Form::text('title_en',old('title_en'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group title_en -->
                                      <div class="form-group ">
                                        {!! Form::label('content_en',trans('admin.content_en')) !!}
                                        {!! Form::textarea('content_en',old('content_en'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group content_en -->
                                    <div class="form-group ">
                                        {!! Form::label('end_at',trans('admin.end_at')) !!}
                                        {!! Form::text('end_at',old('end_at'),['autocomplete'=>'off','class'=>'form-control   datepicker' ]) !!}
                                    </div><!-- /.form-group end_at -->

                                   </div><!--col-md-6 content_form_en-->
              <div class="form-group col-md-12 ">
                  {!! Form::label('link',trans('admin.import_link')) !!}
                  {!! Form::text('link',old('link'),['class'=>'form-control' ]) !!}
              </div><!-- /.form-group text3_ar -->
                                  <div class="form-group col-md-12 ">
                                      {{ Form::button('<i class="fa fa-location-arrow "> '
                                                       . trans('admin.save').'
                                                       </i> <i class="fas fa-news-h"> </i> ' ,
                                                       ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                                   }}
                                      {!! Form::close() !!}
                                  </div><!-- /.form-group text3_ar -->

                                     </div><!--row-->


          {{--------------------- start      jquery-image-upload-preview ----------------}}

          <script>
              function showMyImage(fileInput) {
                  var files = fileInput.files;
                  for (var i = 0; i < files.length; i++) {
                      var file = files[i];
                      var imageType = /image.*/;
                      if (!file.type.match(imageType)) {
                          continue;
                      }
                      var img=document.getElementById("thumbnil");
                      img.file = file;
                      var reader = new FileReader();
                      reader.onload = (function(aImg) {
                          return function(e) {
                              aImg.src = e.target.result;
                          };
                      })(img);
                      reader.readAsDataURL(file);
                  }
              }

          </script>
          {{--------------------- End       jquery-image-upload-preview ----------------}}
