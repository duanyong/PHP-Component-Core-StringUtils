<?php
/**
 * duanyong\Component\Core\StringUtils
 *
 * PHP Version 5.3
 *
 * @author    Duan Yong <coderduan@gmail.com>
 * @copyright 2017 duanyong (http://duanyong.me)
 * @license   https://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      https://github.com/duanyong/PHP-Component-Core-StringUtils
 */

use Sami\Sami;

return new Sami(
    __DIR__ . '/src/main/php',
    array(
        'theme' => 'enhanced',
        'title' => 'duanyong\Component\Core\StringUtils API',
        'build_dir' => __DIR__ . '/review/api',
        'cache_dir' => __DIR__ . '/build/sami',
        'default_opened_level' => 2
    )
);
