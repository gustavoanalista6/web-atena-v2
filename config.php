<?php
/**
 * Script para limpar cache do Laravel (compatível com IIS / Windows / Linux)
 * Local: /public/clear-cache.php
 */

$isWindows = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';

$phpPath = $isWindows
    ? 'C:\\Program Files\\PHP\\php.exe'
    : 'php';

$composerPath = $isWindows
    ? 'C:\\ProgramData\\ComposerSetup\\bin\\composer.bat'
    : 'composer';

$basePath = realpath(__DIR__ . '/../');

function run($command, $workdir)
{
    echo "<pre style='color:#666;'>Executando: {$command}</pre>";
    @ob_flush();
    flush();

    $descriptor = [
        1 => ['pipe', 'w'], // stdout
        2 => ['pipe', 'w'], // stderr
    ];

    $process = proc_open($command, $descriptor, $pipes, $workdir);

    if (!is_resource($process)) {
        echo "<pre style='color:red;'>? Erro ao iniciar o processo: {$command}</pre>";
        return 1;
    }

    $stdout = '';
    $stderr = '';

    while (!feof($pipes[1]) || !feof($pipes[2])) {
        $line1 = fgets($pipes[1]);
        $line2 = fgets($pipes[2]);
        if ($line1 !== false) {
            echo "<pre>{$line1}</pre>";
            $stdout .= $line1;
        }
        if ($line2 !== false) {
            echo "<pre style='color:red;'>{$line2}</pre>";
            $stderr .= $line2;
        }
        @ob_flush();
        flush();
    }

    fclose($pipes[1]);
    fclose($pipes[2]);
    $returnCode = proc_close($process);

    if ($returnCode !== 0) {
        echo "<pre style='color:red;'>
? Comando falhou:
Comando: {$command}
Código de saída: {$returnCode}
Mensagem de erro:
{$stderr}
        </pre>";
    } else {
        echo "<pre style='color:green;'>? Comando executado com sucesso.</pre>";
    }

    echo "<hr>";
    return $returnCode;
}

echo "<h2>?? Iniciando limpeza de caches do Laravel...</h2>";

// ?? Apagar arquivos temporários
echo "<h3>?? Apagando arquivos temporários...</h3>";

$pathsToClean = [
    $basePath . '/bootstrap/cache/*.php',
    $basePath . '/storage/framework/cache/*',
    $basePath . '/storage/framework/sessions/*',
    $basePath . '/storage/framework/views/*',
];

foreach ($pathsToClean as $pattern) {
    foreach (glob($pattern) as $file) {
        if (is_file($file)) {
            if (@unlink($file)) {
                echo "<pre>Apagado: {$file}</pre>";
            } else {
                echo "<pre style='color:red;'>Erro ao apagar: {$file}</pre>";
            }
        }
    }
}
echo "<pre>Arquivos temporários removidos.</pre>";

// ?? Composer
//run("\"{$composerPath}\" install --no-interaction --prefer-dist", $basePath);
//run("\"{$composerPath}\" dump-autoload", $basePath);

// ?? Artisan
$commands = [
    "\"{$phpPath}\" artisan config:clear",
    "\"{$phpPath}\" artisan cache:clear",
    "\"{$phpPath}\" artisan view:clear",
    "\"{$phpPath}\" artisan route:clear",
    "\"{$phpPath}\" artisan optimize",
];

foreach ($commands as $cmd) {
    run($cmd, $basePath);
}

echo "<h3 style='color:green;'>? Limpeza de cache concluída!</h3>";
