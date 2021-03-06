<?php
defined('_VALID_XTC') or die('Direct Access to this location is not allowed.');

use RobinTheHood\ModifiedStdModule\Classes\StdModule;
require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';

class mcm_timestamp_create_account extends StdModule
{
    public function __construct()
    {
        $this->init('MODULE_MCM_TIMESTAMP_CREATE_ACCOUNT');
        
        $this->addKey('CHECK_TIME_MIN');
    }

    public function process($file)
    {
    }

    public function display(): array
    {
        return $this->displaySaveButton();
    }

    public function install()
    {
        parent::install();

        $this->addConfiguration('CHECK_TIME_MIN', '2', 6, 2);
    }

    public function remove()
    {
        parent::remove();
        
        $this->deleteConfiguration('CHECK_TIME_MIN');
    }
}
