<?php

//Default
App::get('/');
App::get('/default/index', false);
App::get('/default/about', false);
App::get('/default/contact', false);
App::get('/default/devamedenprojeler', false);
App::get('/default/gelecekprojeler', false);
App::get('/default/tamamlananprojeler', false);
App::get('/default/kentselprojeler', false);
App::get('/default/kentselhakkinda', false);
App::get('/default/yapisektoru', false);
App::get('/default/kentseldonusum', false);
App::get('/default/basindabiz', false);
App::get('/default/kentseldonusumsureci', false);
App::get('/default/riskliyapi', false);


//Panel Model
App::get('/panel/index', true);
App::get('/panel/login', false);
App::get('/panel/logout', false);

App::post('/panel/login', false);

//Kurumsal Model
App::get('/panel/kurumsal', true);
App::get('/panel/editkurumsal/([\d]+)', true);

App::post('/panel/updatekurumsal/([\d]+)', true);

//İletişim Model
App::get('/panel/iletisim', true);
App::get('/panel/editiletisim/([\d]+)', true);

App::post('/panel/updateiletisim/([\d]+)', true);

//Kentsel Model
App::get('/panel/kentsel', true);
App::get('/panel/editkentsel/([\d]+)', true);

App::post('/panel/updatekentsel/([\d]+)', true);

//Haberler Model
App::get('/panel/haberler', true);
App::get('/panel/edithaberler/([\d]+)', true);
App::get('/panel/deletehaberler/([\d]+)', true);

App::post('/panel/addhaberler', true);
App::post('/panel/updatehaberler/([\d]+)', true);
App::post('/panel/addhaberlerimage/([\d]+)', true);

//Proje Model
App::get('/panel/projeler', true);
App::get('/panel/editproje/([\d]+)', true);
App::get('/panel/deleteproje/([\d]+)', true);

App::post('/panel/addproje', true);
App::post('/panel/updateproje/([\d]+)', true);
App::post('/panel/addprojeimage/([\d]+)', true);

//Haber Detail  Model
App::get('/haber/detail/([\d]+)', false);

//Proje Detail  Model
App::get('/proje/detail/([\d]+)', false);
?>