<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $asistencia?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="miembros" class="form-label">{{ __('Miembro') }}</label>


            <select name="miembro_id" id="miembro_id" class="form-control @error('miembro_id') is-invalid @enderror">
                <option value="{{ old('miembro_id', $asistencia?->miembro_id) }}">Seleccione un miembro</option>
                @foreach($miembros as $id => $miembro)
                    <option value="{{ $id }}" {{ old('miembro_id', $asistencia?->miembro_id) == $id ? 'selected' : '' }}>
                        {{ $miembro }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('miembro_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}

        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar Asistencia') }}</button>
    </div>
</div>
