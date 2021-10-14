@extends('layouts.app')
@section('content')
    <h1>Editar Loja</h1>
    <form action="{{ route('admin.stores.update', ['store' => $store->id]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @method("PUT")
        <div class="form-group">
            <label for="">Nome da Loja</label>
            <br>
            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ $store->name }}"
                name="name">
            @if ($errors->has('name'))
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="">Descrição</label>
            <br>
            <input type="text" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                value="{{ $store->description }} " name="description">
            @if ($errors->has('description'))
                <div class="invalid-feedback">
                    {{ $errors->first('description') }}
                </div>

            @endif
        </div>
        <div class="form-group">
            <label for="">Telefone</label>
            <br>
            <input type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" value="{{ $store->phone }} "
                name="phone">
            @if ($errors->has('phone'))
                <div class="invalid-feedback">
                    {{ $errors->first('phone') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="">Celular/Whatzap</label>
            <br>
            <input type="text" name="mobile_phone" value="{{ $store->mobile_phone }} "
                class="form-control {{ $errors->has('mobile_phone') ? 'is-invalid' : '' }}">
            @if ($errors->has('mobile_phone'))
                <div class="invalid-feedback">
                    {{ $errors->first('mobile_phone') }}
                </div>

            @endif
        </div>
         <div class="form-group">
                    <label for="logo">Logo da loja</label>
                    <p>
                        <img src="{{asset('storage/'. $store->logo)}}" alt="">
                    </p>
                    <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror" />
                    @error('logo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
        <div class="form-group">
            <label for="">Slug</label>
            <br>
            <input type="text" name="slug" value="{{ $store->slug }}" class="form-control">
        </div>

        <br>
        <div>
            <button type="submit" class="btn btn-lg btn-success">Atualizar Produto</button>
        </div>
    </form>

@endsection
