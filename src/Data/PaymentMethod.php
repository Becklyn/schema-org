<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

class PaymentMethod
{
    public const ByBankTransferInAdvance = "ByBankTransferInAdvance";
    public const ByInvoice = "ByInvoice";
    public const Cash = "Cash";
    public const CheckInAdvance = "CheckInAdvance";
    public const COD = "COD";
    public const DirectDebit = "DirectDebit";
    public const GoogleCheckout = "GoogleCheckout";
    public const PayPal = "PayPal";
    public const PaySwarm = "PaySwarm";
}
