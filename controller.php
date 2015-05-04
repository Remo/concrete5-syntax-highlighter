<?php 

defined('C5_EXECUTE') or die('Access Denied.');

class SyntaxHighlighterPackage extends Package {

    protected $pkgHandle = 'syntax_highlighter';
    protected $appVersionRequired = '5.2.0';
    protected $pkgVersion = '1.0.1';
    protected $btCacheBlockRecord = true;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = true;
    protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;

    public function getPackageDescription() {
        return t("Insert an hightlighted code block.");
    }

    public function getPackageName() {
        return t("Syntax Highlighter");
    }

    public function install() {
        $pkg = parent::install();

        // install block		
        BlockType::installBlockTypeFromPackage('syntax_highlighter', $pkg);
    }

}