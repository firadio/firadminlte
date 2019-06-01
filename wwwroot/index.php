<?php
$path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
$i = strrpos($path, '.');
if ($i !== FALSE) {
    // 如果存在扩展名，就去掉
    $path = substr($path, 0, $i);
}
// 安全过滤
$path = str_replace('.', '', $path);
$path = str_replace('\\', '/', $path);
$path = trim($path, '/');
if ($path === '') {
    $path = 'index';
}
$paths = explode('/', $path);
// 取根文件名
$filename = $paths[0];
define('DS', DIRECTORY_SEPARATOR);
$pagedir = dirname(__DIR__) . DS . 'page';
$file = $pagedir . DS . $filename . '.php';
$PageFileExt = '.html';
if (is_file($file)) {
    $AdminLTE = 'http://adminlte-1251078878.file.myqcloud.com/AdminLTE';
    $AdminLTE = 'http://adminlte-1251078878.coscd.myqcloud.com/AdminLTE';
    $AdminLTE = '/AdminLTE-2.4.10';
    $url_static = '/static';
    ob_start();
    include $file;
    $contents = ob_get_contents();
    ob_end_clean();
    $outfile = __DIR__ . DS . str_replace('/', DS, $path) . $PageFileExt;
    $outdir = dirname($outfile);
    if (!is_dir($outdir)) {
        mkdir($outdir);
    }
    file_put_contents($outfile, $contents);
    exit($contents);
}
header('Location: /admin' . $PageFileExt);
?>
欢迎访问
<?php
echo $_SERVER['REMOTE_ADDR'];
