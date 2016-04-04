<?php
/**
 *
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Integration\Model\Oauth\Token\RequestLog;

/**
 * OAuth token request log writer interface.
 */
interface WriterInterface
{
    /**
     * Reset number of authentication failures for the specified user account.
     *
     * @param string $userName
     * @param int $userType
<<<<<<< HEAD
=======
     * @param return void
>>>>>>> 2abc5a35b10de4d979a9155a47c5778cee85b9bf
     * @return void
     */
    public function resetFailuresCount($userName, $userType);

    /**
     * Increment number of authentication failures for the specified user account.
     *
     * @param string $userName
     * @param int $userType
<<<<<<< HEAD
=======
     * @param return void
>>>>>>> 2abc5a35b10de4d979a9155a47c5778cee85b9bf
     * @return void
     */
    public function incrementFailuresCount($userName, $userType);

    /**
     * Clear expired authentication failure logs.
     *
     * @return void
     */
    public function clearExpiredFailures();
}
