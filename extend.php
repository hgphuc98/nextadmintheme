<?php
namespace betterflarum/nextadmintheme;
use Flarum\Extend;
return [
    (new Extend\Frontend('admin'))
        ->css(__DIR__.'/less/admin.less'),
];