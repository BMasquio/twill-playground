<?php

Route::module('pages');

Route::group(['prefix' => 'work'], function () {
    Route::group(['prefix' => 'projects'], function () {
        Route::module('projectCustomers');
    });
    Route::module('projects');
    Route::module('clients');
    Route::module('industries');
    Route::module('studios');
});
