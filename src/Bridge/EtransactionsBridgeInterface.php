<?php

/**
 * This file was created by the developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on kontakt@bitbag.pl.
 */

namespace Waaz\EtransactionsPlugin\Bridge;

use Waaz\EtransactionsPlugin\Legacy\Etransactions;

/**
 * @author Patryk Drapik <patryk.drapik@bitbag.pl>
 */
interface EtransactionsBridgeInterface
{
    /**
     * @param string $secretKey
     *
     * @return Etransactions
     */
    public function createEtransactions($secretKey);

    /**
     * @param string $secretKey
     *
     * @return bool
     */
    public function paymentVerification($secretKey);

    /**
     * @return bool
     */
    public function isGetMethod();

    /**
     * @return bool
     */
    public function isPostMethod();
}
