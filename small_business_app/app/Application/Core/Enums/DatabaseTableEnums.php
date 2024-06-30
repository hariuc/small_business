<?php

namespace App\Application\Core\Enums;

enum DatabaseTableEnums: string
{
    case USERS = "users";
    case BANKS_TABLE = 'scs_banks';
    case CURRENCIES_TABLE = 'scs_currencies';
    case UNIT_CLASSIFIER = "scs_unit_classifier";
    case CUSTOMERS_TABLE = 'scs_customers';
    case CUSTOMERS_CONTRACTS = "scs_customers_contracts";
    case BANKS_ACCOUNTS = "scs_banks_accounts";
    case  FUNCTIONS = "scs_functions";
    case CATEGORIES = "scs_categories";
    case NOMENCLATURIES = "scs_nomenclaturies";
    case TYPE_PRICES = "scs_type_prices";


    case SETTINGS_PRICES = "scs_settings_prices";
    case SETTINGS_PRICES_ITEM = "scs_settings_price_item";
}
