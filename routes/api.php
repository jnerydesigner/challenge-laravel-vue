<?php

Route::apiResource('user', 'api\UserController');
Route::apiResource('transactions', 'api\TransactionController');

Route::get('transactions/total/{id}', 'api\TransactionController@totalTransactions');

Route::get('transactions/count/{type_id}', 'api\TransactionController@countTransactions');
Route::get('transactions/unique/{type_id}', 'api\TransactionController@getTransaction');
