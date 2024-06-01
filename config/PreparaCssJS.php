<?php

namespace Config;

use Composer\Installer\PackageEvent;

/**
 * Prepara os arquivos CSS e JS do Bootstrap para serem usados no projeto
 *
 * @global
 */
class PreparaCssJS
{
    private static $cssOrigem = 'vendor/twbs/bootstrap/dist/css/bootstrap.min.css';
    private static $cssDestino = 'webroot/css/bootstrap.min.css';

    private static $jsOrigem = 'vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js';
    private static $jsDestino = 'webroot/js/bootstrap.bundle.min.js';

    /**
     * Copia o arquivo CSS/JS do pacote instalado/atualizado para devida pasta dentro do webroot/
     *
     * @access	static public
     * @param	PackageEvent $event
     * @return	void
     */
    static public function executar(PackageEvent $event)
    {
        $installedPackage = $event->getOperation()->getPackage();

        if ($installedPackage->getName() == 'twbs/bootstrap') {
            self::excluiArquivo(self::$cssDestino);
            copy(self::$cssOrigem, self::$cssDestino);

            self::excluiArquivo(self::$jsDestino);
            copy(self::$jsOrigem, self::$jsDestino);
        }
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
