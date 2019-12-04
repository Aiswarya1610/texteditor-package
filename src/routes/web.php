<?php
    // myvendor\texteditor\src\routes\web.php
    // Route::get('texteditor', function(){
    //     return 'Hello from the  package';
    // });
    Route::get('texteditor', function(){
        return view('texteditor::texteditor');
    });
    ?>