<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'compra' => [
        'title' => 'Compras',

        'actions' => [
            'index' => 'Compras',
            'create' => 'New Compra',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'orden_compra' => 'Orden compra',
            'servicio_solicitado' => 'Servicio solicitado',
            'etapa_venta' => 'Etapa venta',
            'tipo_servicio' => 'Tipo servicio',
            'fecha_solicitud' => 'Fecha solicitud',
            'fecha_compromiso' => 'Fecha compromiso',
            'monto' => 'Monto',
            
        ],
    ],

    'contacto' => [
        'title' => 'Contactos',

        'actions' => [
            'index' => 'Contactos',
            'create' => 'New Contacto',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'empresa' => 'Empresa',
            'correo' => 'Correo',
            'telefono' => 'Telefono',
            'direccion' => 'Direccion',
            'codigo_postal' => 'Codigo postal',
            'orden_compra' => 'Orden compra',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];