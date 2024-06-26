<?php

namespace App\Application\Core\Enums;

enum DatabaseTableEnums: string
{
    case BANKS_TABLE = 'scs_banks';
    case CURRENCIES_TABLE = 'scs_currencies';
    case UNIT_CLASSIFIER = "scs_unit_classifier";
    case CUSTOMERS_TABLE = 'scs_customers';
}
