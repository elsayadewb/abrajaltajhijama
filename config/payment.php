<?php

return[

    'accounts' => [
        'client_id' =>  'ARbTG7cdwdOeH8rSse-QBtdZneFHc6HABFQZ_wYW9IZ469bdYgw-9fN5cXsBZ4aB25jwXI9NAEHEjE5S' ,
        'secret_client' => 'EPa130WR6G_jAymnHbvRNr2MlKLJG2FwuXROcccNjFibeuywtOnBM7Oe4MrpqnnQIO-eX5dN8kPbCtA2'
        ],//accounts

    'setting' => [
        'mode' =>  'sandbox' , // live
        'http.ConnectionTimeOut' => '30',
        'log.logEnable' => true,
        'logFileName' => public_path().'/logs/paypal.log',
    ]//setting
];//return