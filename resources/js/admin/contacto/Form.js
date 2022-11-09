import AppForm from '../app-components/Form/AppForm';

Vue.component('contacto-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nombre:  '' ,
                empresa:  '' ,
                correo:  '' ,
                telefono:  '' ,
                direccion:  '' ,
                codigo_postal:  '' ,
                orden_compra:  '' ,
                
            }
        }
    }

});