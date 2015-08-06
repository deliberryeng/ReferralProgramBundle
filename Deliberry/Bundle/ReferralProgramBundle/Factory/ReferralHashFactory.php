<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 * @author Elcodi Team <tech@elcodi.com>
 */

namespace Deliberry\Bundle\ReferralProgram\Factory;

use Doctrine\Common\Collections\ArrayCollection;

use Elcodi\Component\Core\Factory\Abstracts\AbstractFactory;
use Deliberry\Bundle\ReferralProgram\Entity\Interfaces\ReferralHashInterface;
use Deliberry\Bundle\ReferralProgram\Entity\ReferralHash;

/**
 * Class ReferralHashFactory
 */
class ReferralHashFactory extends AbstractFactory
{
    /**
     * Creates an instance of an entity.
     *
     * This method must return always an empty instance for related entity
     *
     * @return ReferralHash Empty entity
     */
    public function create()
    {
        /**
         * @var ReferralHashInterface $referralHash
         */
        $classNamespace = $this->getEntityNamespace();
        $referralHash = new $classNamespace();
        $referralHash
            ->setReferralLines(new ArrayCollection());

        return $referralHash;
    }
}
