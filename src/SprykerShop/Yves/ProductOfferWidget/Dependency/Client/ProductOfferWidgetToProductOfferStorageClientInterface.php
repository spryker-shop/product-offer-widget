<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Spryker Marketplace License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductOfferWidget\Dependency\Client;

use Generated\Shared\Transfer\ProductOfferStorageTransfer;

interface ProductOfferWidgetToProductOfferStorageClientInterface
{
    public function findProductOfferStorageByReference(string $productOfferReference): ?ProductOfferStorageTransfer;
}
