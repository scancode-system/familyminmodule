<?php


Route::prefix('familymins')->group(function() {
    Route::put('{family_min}', 'FamilyMinController@update')->name('familymins.update');
});
