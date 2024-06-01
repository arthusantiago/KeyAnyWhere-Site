<?php

namespace Config;

use Composer\Installer\PackageEvent;

/**
 * Prepara os arquivos CSS e JS do Bootstrap para serem usados no projeto
 *
 * @global
 */
class PrepearaCssJS {
    static public function executar(PackageEvent $event)
    {
        $cssOrigem = 'vendor/twbs/bootstrap/dist/css/bootstrap.min.css';
        $cssDestino = 'webroot/css/bootstrap.min.css';
        self::excluiArquivo($cssDestino);
        copy($cssOrigem, $cssDestino);

        $jsOrigem = 'vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js';
        $jsDestino = 'webroot/js/bootstrap.bundle.min.js';
        self::excluiArquivo($jsDestino);
        copy($jsOrigem, $jsDestino);
    }

    /**
     * Exclui o arquivo passando por parâmetro se ele existir.
     *
     * @access static public
     * @param string $caminhoArquivo
     * @return boolean Retorna TRUE quando o arquivo foi excluído e FALSE caso contrario.
     */
    static public function excluiArquivo(string $caminhoArquivo): bool
    {
        if (is_file($caminhoArquivo)) {
            return unlink($caminhoArquivo);
        }
        return false;
    }
}
