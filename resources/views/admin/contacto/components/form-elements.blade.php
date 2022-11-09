<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombre'), 'has-success': fields.nombre && fields.nombre.valid }">
    <label for="nombre" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.contacto.columns.nombre') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombre" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombre'), 'form-control-success': fields.nombre && fields.nombre.valid}" id="nombre" name="nombre" placeholder="{{ trans('admin.contacto.columns.nombre') }}">
        <div v-if="errors.has('nombre')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombre') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('empresa'), 'has-success': fields.empresa && fields.empresa.valid }">
    <label for="empresa" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.contacto.columns.empresa') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.empresa" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('empresa'), 'form-control-success': fields.empresa && fields.empresa.valid}" id="empresa" name="empresa" placeholder="{{ trans('admin.contacto.columns.empresa') }}">
        <div v-if="errors.has('empresa')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('empresa') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('correo'), 'has-success': fields.correo && fields.correo.valid }">
    <label for="correo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.contacto.columns.correo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.correo" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('correo'), 'form-control-success': fields.correo && fields.correo.valid}" id="correo" name="correo" placeholder="{{ trans('admin.contacto.columns.correo') }}">
        <div v-if="errors.has('correo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('correo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('telefono'), 'has-success': fields.telefono && fields.telefono.valid }">
    <label for="telefono" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.contacto.columns.telefono') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.telefono" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('telefono'), 'form-control-success': fields.telefono && fields.telefono.valid}" id="telefono" name="telefono" placeholder="{{ trans('admin.contacto.columns.telefono') }}">
        <div v-if="errors.has('telefono')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('telefono') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('direccion'), 'has-success': fields.direccion && fields.direccion.valid }">
    <label for="direccion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.contacto.columns.direccion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.direccion" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('direccion'), 'form-control-success': fields.direccion && fields.direccion.valid}" id="direccion" name="direccion" placeholder="{{ trans('admin.contacto.columns.direccion') }}">
        <div v-if="errors.has('direccion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('direccion') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('codigo_postal'), 'has-success': fields.codigo_postal && fields.codigo_postal.valid }">
    <label for="codigo_postal" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.contacto.columns.codigo_postal') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.codigo_postal" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('codigo_postal'), 'form-control-success': fields.codigo_postal && fields.codigo_postal.valid}" id="codigo_postal" name="codigo_postal" placeholder="{{ trans('admin.contacto.columns.codigo_postal') }}">
        <div v-if="errors.has('codigo_postal')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('codigo_postal') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('orden_compra'), 'has-success': fields.orden_compra && fields.orden_compra.valid }">
    <label for="orden_compra" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.contacto.columns.orden_compra') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.orden_compra" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('orden_compra'), 'form-control-success': fields.orden_compra && fields.orden_compra.valid}" id="orden_compra" name="orden_compra" placeholder="{{ trans('admin.contacto.columns.orden_compra') }}">
        <div v-if="errors.has('orden_compra')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('orden_compra') }}</div>
    </div>
</div>


