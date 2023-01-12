  <div class="mb-3">
      {!! Form::label('name', 'Name') !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
      @error('name')
          <small class="text-danger">{{ $message }}</small>
      @enderror
  </div>

  <div class="mb-3">
      {!! Form::label('slug', 'Slug') !!}
      {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}
      @error('slug')
          <small class="text-danger">{{ $message }}</small>
      @enderror
  </div>

  <div class="mb-3">
      {!! Form::label('category_id', 'Category') !!}
      {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
      @error('category_id')
          <small class="text-danger">{{ $message }}</small>
      @enderror
  </div>

  <div class="mb-3">
      <label for="" class="form-label">Tags</label>
      <div class="container">
          @foreach ($tags as $tag)
              <label class="mr-2">
                  {!! Form::checkbox('tags[]', $tag->id, null) !!}
                  {{ $tag->name }}
              </label>
          @endforeach
      </div>
  </div>

  <div class="mb-3">
      <label for="" class="form-label">Select an image for the post</label>
      <div class="row mb-3">

          <div class="col">
              <div class="image-wrapper">
                  @isset($post->image)
                      <img id="picture" src="{{ Storage::url($post->image->url) }}" alt="">
                  @else
                      <img id="picture" src="/img/default.png" alt="">
                      @endif
                  </div>
              </div>

              <div class="col">
                  <div class="form-group">
                      {!! Form::file('file', ['id' => 'file', 'class' => 'form-control-file', 'accept' => 'image/*']) !!}
                  </div>
              </div>
          </div>
          @error('file')
              <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>


      <div class="mb-3">

          {!! Form::label('body', 'Body') !!}
          {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

          @error('body')
              <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>

      <div class="mb-3">

          <label class="mr-2">
              {!! Form::radio('status', 1, true) !!}
              Guardar Como Borrador
          </label>

          <label>
              {!! Form::radio('status', 2) !!}
              Publicar
          </label>

          @error('status')
              <small class="text-danger">{{ $message }}</small>
          @enderror
      </div>
