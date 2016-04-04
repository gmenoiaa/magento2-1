<?php
/**
 * Application interface
 *
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework;

interface AppInterface
{
    /**
     * Default application locale
     */
    const DISTRO_LOCALE_CODE = 'en_US';

    /**
<<<<<<< HEAD
     * Magento version
     */
    const VERSION = '2.0.4';

    /**
=======
>>>>>>> 2abc5a35b10de4d979a9155a47c5778cee85b9bf
     * Launch application
     *
     * @return \Magento\Framework\App\ResponseInterface
     */
    public function launch();

    /**
     * Ability to handle exceptions that may have occurred during bootstrap and launch
     *
     * Return values:
     * - true: exception has been handled, no additional action is needed
     * - false: exception has not been handled - pass the control to Bootstrap
     *
     * @param App\Bootstrap $bootstrap
     * @param \Exception $exception
     * @return bool
     */
    public function catchException(App\Bootstrap $bootstrap, \Exception $exception);
}
