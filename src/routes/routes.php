<?php

Route::sector(['prefix' => 'api/sector-egovernment', 'middleware' => ['web']], function() {
    $controllers = (object) [
        'index'     => 'Bantenprov\SectorEgovernment\Http\Controllers\SectorEgovernmentController@index',
        'create'    => 'Bantenprov\SectorEgovernment\Http\Controllers\SectorEgovernmentController@create',
        'show'      => 'Bantenprov\SectorEgovernment\Http\Controllers\SectorEgovernmentController@show',
        'store'     => 'Bantenprov\SectorEgovernment\Http\Controllers\SectorEgovernmentController@store',
        'edit'      => 'Bantenprov\SectorEgovernment\Http\Controllers\SectorEgovernmentController@edit',
        'update'    => 'Bantenprov\SectorEgovernment\Http\Controllers\SectorEgovernmentController@update',
        'destroy'   => 'Bantenprov\SectorEgovernment\Http\Controllers\SectorEgovernmentController@destroy',
    ];

    Route::get('/',             $controllers->index)->name('sector-egovernment.index');
    Route::get('/create',       $controllers->create)->name('sector-egovernment.create');
    Route::get('/{id}',         $controllers->show)->name('sector-egovernment.show');
    Route::post('/',            $controllers->store)->name('sector-egovernment.store');
    Route::get('/{id}/edit',    $controllers->edit)->name('sector-egovernment.edit');
    Route::put('/{id}',         $controllers->update)->name('sector-egovernment.update');
    Route::delete('/{id}',      $controllers->destroy)->name('sector-egovernment.destroy');
});

