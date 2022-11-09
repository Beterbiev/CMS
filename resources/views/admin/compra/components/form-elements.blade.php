<div class="form-group row align-items-center" :class="{'has-danger': errors.has('orden_compra'), 'has-success': fields.orden_compra && fields.orden_compra.valid }">
    <label for="orden_compra" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.compra.columns.orden_compra') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.orden_compra" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('orden_compra'), 'form-control-success': fields.orden_compra && fields.orden_compra.valid}" id="orden_compra" name="orden_compra" placeholder="{{ trans('admin.compra.columns.orden_compra') }}">
        <div v-if="errors.has('orden_compra')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('orden_compra') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('servicio_solicitado'), 'has-success': fields.servicio_solicitado && fields.servicio_solicitado.valid }">
    <label for="servicio_solicitado" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.compra.columns.servicio_solicitado') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.servicio_solicitado" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('servicio_solicitado'), 'form-control-success': fields.servicio_solicitado && fields.servicio_solicitado.valid}" id="servicio_solicitado" name="servicio_solicitado" placeholder="{{ trans('admin.compra.columns.servicio_solicitado') }}">
        <div v-if="errors.has('servicio_solicitado')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('servicio_solicitado') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('etapa_venta'), 'has-success': fields.etapa_venta && fields.etapa_venta.valid }">
    <label for="etapa_venta" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.compra.columns.etapa_venta') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.etapa_venta" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('etapa_venta'), 'form-control-success': fields.etapa_venta && fields.etapa_venta.valid}" id="etapa_venta" name="etapa_venta" placeholder="{{ trans('admin.compra.columns.etapa_venta') }}">
        <div v-if="errors.has('etapa_venta')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('etapa_venta') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tipo_servicio'), 'has-success': fields.tipo_servicio && fields.tipo_servicio.valid }">
    <label for="tipo_servicio" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.compra.columns.tipo_servicio') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tipo_servicio" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tipo_servicio'), 'form-control-success': fields.tipo_servicio && fields.tipo_servicio.valid}" id="tipo_servicio" name="tipo_servicio" placeholder="{{ trans('admin.compra.columns.tipo_servicio') }}">
        <div v-if="errors.has('tipo_servicio')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tipo_servicio') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha_solicitud'), 'has-success': fields.fecha_solicitud && fields.fecha_solicitud.valid }">
    <label for="fecha_solicitud" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.compra.columns.fecha_solicitud') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha_solicitud" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha_solicitud'), 'form-control-success': fields.fecha_solicitud && fields.fecha_solicitud.valid}" id="fecha_solicitud" name="fecha_solicitud" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha_solicitud')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha_solicitud') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha_compromiso'), 'has-success': fields.fecha_compromiso && fields.fecha_compromiso.valid }">
    <label for="fecha_compromiso" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.compra.columns.fecha_compromiso') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha_compromiso" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha_compromiso'), 'form-control-success': fields.fecha_compromiso && fields.fecha_compromiso.valid}" id="fecha_compromiso" name="fecha_compromiso" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha_compromiso')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha_compromiso') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('monto'), 'has-success': fields.monto && fields.monto.valid }">
    <label for="monto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.compra.columns.monto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.monto" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('monto'), 'form-control-success': fields.monto && fields.monto.valid}" id="monto" name="monto" placeholder="{{ trans('admin.compra.columns.monto') }}">
        <div v-if="errors.has('monto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('monto') }}</div>
    </div>
</div>


