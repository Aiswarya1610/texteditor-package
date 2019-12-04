<?php
    // myvendor\texteditor\src\TexteditorServiceProvider.php
    namespace myvendor\texteditor;
    use Illuminate\Support\ServiceProvider;
    class TexteditorServiceProvider extends ServiceProvider {
        public function boot()
        {
              // myvendor\texteditor\src\TexteditorServiceProvider.php
    $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    $this->loadViewsFrom(__DIR__.'/resources/views', 'texteditor');
        }
        public function register()
        {
        }
    }
    ?>