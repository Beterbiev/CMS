import AppForm from '../app-components/Form/AppForm';

Vue.component('compra-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                orden_compra:  '' ,
                servicio_solicitado:  '' ,
                etapa_venta:  '' ,
                tipo_servicio:  '' ,
                fecha_solicitud:  '' ,
                fecha_compromiso:  '' ,
                monto:  '' ,
                
            }
        }
    }

});